<?php

return [
    'modules' => [
        'installer' => [
            'class' => 'yii\installer\InstallerModule',
        ],
    ],
    'components' => [
        'urlManager' => [
            'enablePrettyUrl' => true,
            'showScriptName' => false,
            'rules' => [
                'installer/<controller:\w+>/<action:[\w-]+>/<id:\d+>' => 'installer/<controller>/<action>',
                'installer/<module:\w+>/<controller:\w+>/<action:[\w-]+>/<id:\d+>' => 'installer/<module>/<controller>/<action>'
            ],
         ],
        'i18n' => [
            'translations' => [
                'installer' => [
                    'class' => 'yii\i18n\PhpMessageSource',
                    'sourceLanguage' => 'en-US',
                    'basePath' => '@installer/messages',
                    'fileMap' => [
                        'installer' => 'installer.php',
                    ]
                ]
            ],
        ],
        'formatter' => [
            'sizeFormatBase' => 1000
        ],
    ],
    'bootstrap' => ['installer']
];