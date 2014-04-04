<?php
namespace Matryoshka\Module\Controller\Plugin\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\ServiceManager\Exception\ServiceNotCreatedException;
use Matryoshka\Module\Controller\Plugin\Model;

class ModelFactory implements FactoryInterface
{
    /**
     * {@inheritdoc}
     *
     * @return Forward
     * @throws ServiceNotCreatedException if ModelManager service is not found in application service locator
     */
    public function createService(ServiceLocatorInterface $plugins)
    {
        $services = $plugins->getServiceLocator();
        if (!$services instanceof ServiceLocatorInterface) {
            throw new ServiceNotCreatedException(sprintf(
                '%s requires that the application service manager has been injected; none found',
                __CLASS__
            ));
        }

        if (!$services->has('Matryoshka\Model\ModelManager')) {
            throw new ServiceNotCreatedException(sprintf(
                '%s requires that the application service manager contains a "%s" service; none found',
                __CLASS__,
                'Matryoshka\Model\ModelManager'
            ));
        }
        $models = $services->get('Matryoshka\Model\ModelManager');

        return new Model($models);
    }
}
