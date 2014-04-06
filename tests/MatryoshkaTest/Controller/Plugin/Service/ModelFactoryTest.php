<?php

namespace MatryoshkaTest\Module\Controller\Plugin\Service;

use Matryoshka\Model\ModelManager;
use Matryoshka\Module\Controller\Plugin\Service\ModelFactory;
use Zend\ServiceManager\ServiceManager;

/**
 * Class ModelFactoryTest
 *
 * @author Lorenzo Fontana <fontanalorenzo@me.com>
 */
class ModelFactoryTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @var ServiceManager
     */
    protected $sm;

    /**
     * @var ModelManager
     */
    protected $mm;

    /**
     * @var ModelFactory
     */
    protected $factory;

    public function setUp()
    {
        $this->sm = new ServiceManager();
        $this->mm = new ModelManager();
        $this->factory = new ModelFactory();
    }

    public function testCreateService()
    {
        $this->sm->setService('Matryoshka\Model\ModelManager', $this->mm);
        $this->mm->setServiceLocator($this->sm);
        $model = $this->factory->createService($this->mm);
        $this->assertInstanceOf('Matryoshka\Module\Controller\Plugin\Model', $model);
    }

    /**
     * @expectedException \Zend\ServiceManager\Exception\ServiceNotCreatedException
     */
    public function testCreateServiceWithoutModelManager()
    {
        $this->mm->setServiceLocator($this->sm);
        $this->factory->createService($this->mm);
    }

    /**
     * @expectedException \Zend\ServiceManager\Exception\ServiceNotCreatedException
     */
    public function testCreateServiceWithoutApplicationServiceManager()
    {
        $this->factory->createService($this->mm);
    }
}
