<?php

return [
    'service_manager' => [
        'invokables' => [
            'Matryoshka\Model\ModelManager' => 'Matryoshka\Model\ModelManager',
        ],
    ],
    'controller_plugins' => [
        'factories' => [
            'model' => 'MatryoshkaModule\Controller\Plugin\Model',
        ],
    ],
];
