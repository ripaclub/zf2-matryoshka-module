<?php

namespace MatryoshkaTest\Module\Controller\Plugin\Service;

use Matryoshka\Model\ModelManager;
use Matryoshka\Module\Controller\Plugin\Service\ModelFactory;
use Zend\ServiceManager\ServiceManager;

class ModelFactoryTest extends \PHPUnit_Framework_TestCase
{

    protected $sm;

    protected $factory;

    public function setUp()
    {
        $this->sm = new ServiceManager();
        $this->sm->setService('Matryoshka\Model\ModelManage', new ModelManager());
        $this->factory = new ModelFactory();
    }

    public function testCreateService()
    {

    }
}
