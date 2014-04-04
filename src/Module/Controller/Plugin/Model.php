<?php
namespace Matryoshka\Module\Controller\Plugin;

use Zend\Mvc\Controller\Plugin\AbstractPlugin;
use Matryoshka\Model\Model as MatryoshkaModel;
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
     * @return MatryoshkaModel
     */
    public function get($name)
    {
        return $this->getModelManager()->get($name);
    }

    /**
     * @return $this
     */
    public function __invoke()
    {
        return $this;
    }

}
