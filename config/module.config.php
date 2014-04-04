<?php
return [
    'service_manager' => [
        'invokables' => [
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => 'Matryoshka\Model\ResultSet\ArrayObjectResultSet',
            'Matryoshka\Model\ResultSet\HydratingResultSet' => 'Matryoshka\Model\ResultSet\HydratingResultSet',
        ],
        'factories'  => [
            'Matryoshka\Model\ModelManager' => 'MatryoshkaModule\Controller\Plugin\Service\ModelFactory',
        ],
        'shared' => array(
            'Matryoshka\Model\ModelManager' => true,
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => false,
            'Matryoshka\Model\ResultSet\HydratingResultSet' => false,
        ),
    ],
    'controller_plugins' => [
        'factories' => [
            'model' => 'MatryoshkaModule\Controller\Plugin\Model',
        ],
    ],
];
