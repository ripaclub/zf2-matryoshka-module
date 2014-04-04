<?php
namespace MatryoshkaModule\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Matryoshka\Model\Model;
use Matryoshka\Model\ModelManager;

class Model extends AbstractPlugin
{
    /**
     * @var ModelManager
     */
    protected $models;

    /**
     * @param ModelManager $models
     */
    public function __construct(ModelManager $models)
    {
        $this->models = $models;
    }

    /**
     * @return ModelManager
     */
    public function getModelManager()
    {
        return $this->models;
    }

    /**
     * @param string $name
     * @return Model
     */
    public function __invoke($name)
    {
        return $this->getModelManager()->get($name);
    }

}
