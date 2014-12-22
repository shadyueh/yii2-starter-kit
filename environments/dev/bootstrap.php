<?php
// Path aliases
Yii::setAlias('@base',      realpath(__DIR__.'/../../'));
Yii::setAlias('@common',    realpath(__DIR__.'/../../common'));
Yii::setAlias('@frontend',  realpath(__DIR__.'/../../frontend'));
Yii::setAlias('@backend',   realpath(__DIR__.'/../../backend'));
Yii::setAlias('@console',   realpath(__DIR__.'/../../console'));
Yii::setAlias('@storage',   realpath(__DIR__.'/../../storage'));
Yii::setAlias('@tests',     realpath(__DIR__.'/../../tests'));

// Url Aliases
Yii::setAlias('@frontendUrl', 'http://yii2-starter-kit.localhost');
Yii::setAlias('@backendUrl', 'http://backend.yii2-starter-kit.localhost');
Yii::setAlias('@storageUrl', 'http://storage.yii2-starter-kit.localhost');