<?php

namespace ContainerYtFxGru;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_S418w5zService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.s418w5z' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.s418w5z'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\EmployeController::employe' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\EmployeController::managerUpdate' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ManagerController::manager' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ManagerController::managerAttribution' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ManagerController::managerUpdate' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\NonConnecteController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\ReceptionnisteController::receptionniste' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ReceptionnisteController::receptionnisteAnettoyer' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ReceptionnisteController::receptionnisteReserve' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\EmployeController:employe' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\EmployeController:managerUpdate' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ManagerController:manager' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ManagerController:managerAttribution' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ManagerController:managerUpdate' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\NonConnecteController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\ReceptionnisteController:receptionniste' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ReceptionnisteController:receptionnisteAnettoyer' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'App\\Controller\\ReceptionnisteController:receptionnisteReserve' => ['privates', '.service_locator._nRHRBM', 'get_ServiceLocator_NRHRBMService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\EmployeController::employe' => '?',
            'App\\Controller\\EmployeController::managerUpdate' => '?',
            'App\\Controller\\ManagerController::manager' => '?',
            'App\\Controller\\ManagerController::managerAttribution' => '?',
            'App\\Controller\\ManagerController::managerUpdate' => '?',
            'App\\Controller\\NonConnecteController::login' => '?',
            'App\\Controller\\ReceptionnisteController::receptionniste' => '?',
            'App\\Controller\\ReceptionnisteController::receptionnisteAnettoyer' => '?',
            'App\\Controller\\ReceptionnisteController::receptionnisteReserve' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\EmployeController:employe' => '?',
            'App\\Controller\\EmployeController:managerUpdate' => '?',
            'App\\Controller\\ManagerController:manager' => '?',
            'App\\Controller\\ManagerController:managerAttribution' => '?',
            'App\\Controller\\ManagerController:managerUpdate' => '?',
            'App\\Controller\\NonConnecteController:login' => '?',
            'App\\Controller\\ReceptionnisteController:receptionniste' => '?',
            'App\\Controller\\ReceptionnisteController:receptionnisteAnettoyer' => '?',
            'App\\Controller\\ReceptionnisteController:receptionnisteReserve' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
