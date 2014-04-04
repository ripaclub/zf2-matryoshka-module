<?php
return [
    'service_manager' => [
        'invokables' => [
            'Matryoshka\Model\ModelManager' => 'Matryoshka\Model\ModelManager',
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => 'Matryoshka\Model\ResultSet\ArrayObjectResultSet',
            'Matryoshka\Model\ResultSet\HydratingResultSet' => 'Matryoshka\Model\ResultSet\HydratingResultSet',
        ],
        'shared' => array(
            'Matryoshka\Model\ModelManager' => true,
            'Matryoshka\Model\ResultSet\ArrayObjectResultSet' => false,
            'Matryoshka\Model\ResultSet\HydratingResultSet' => false,
        ),
    ],
    'controller_plugins' => [
        'factories' => [
            'model' => 'MatryoshkaModule\Controller\Plugin\Service\ModelFactory',
        ],
    ],
];
