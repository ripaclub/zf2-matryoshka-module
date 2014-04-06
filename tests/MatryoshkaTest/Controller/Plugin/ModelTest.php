<?php

namespace MatryoshkaTest\Module\Controller\Plugin;

use Matryoshka\Model\ModelManager;
use Matryoshka\Module\Controller\Plugin\Model;
use MatryoshkaTest\Model\TestAsset\ConcreteAbstractModel;

class ModelTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var \Matryoshka\Module\Controller\Plugin\Model
     */
    protected $model;


    public function setUp()
    {
        $modelManager = new ModelManager();
        $modelManager->setService('My\Example\Model', new ConcreteAbstractModel());
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
        $exModel = $this->model->get('My\Example\Model');
        $this->assertInstanceOf('MatryoshkaTest\Model\TestAsset\ConcreteAbstractModel', $exModel);
    }
}
