<?php

namespace MatryoshkaTest\Module\Controller\Plugin;

use Matryoshka\Model\ModelManager;
use Matryoshka\Module\Controller\Plugin\Model;
use MatryoshkaTest\TestAsset\Model\Person;

class ModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Matryoshka\Module\Controller\Plugin\Model
     */
    protected $model;


    public function setUp()
    {
        $modelManager = new ModelManager();
        $modelManager->setService('person', new Person());
        $this->model = new Model($modelManager);
    }

    public function testPluginInvoke()
    {
        $this->assertInstanceOf('Matryoshka\Module\Controller\Plugin\Model', $this->model->__invoke());
    }

    public function testGetModelManager()
    {
        $this->assertInstanceOf('Matryoshka\Model\ModelManager', $this->model->getModelManager());
    }

    public function testGet()
    {
        $p = $this->model->get('person');
        $this->assertInstanceOf('MatryoshkaTest\TestAsset\Model\Person', $p);
    }
}
