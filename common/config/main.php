<?php
return [
    'vendorPath' => dirname(dirname(__DIR__)) . '/vendor',
    'components' => [
        'cache' => [
            'class' => 'yii\caching\FileCache',
        ],
        'user' => [
            'class' => 'common\components\WebUser',
        ],
        'authManager'=>[
            'class' => 'common\components\UserAccess',
        ],
    ],
];
