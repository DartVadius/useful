Подключение скриптов из модуля

В модуле создаем класс myAsset

 ```php
    namespace app\modules\my_module;

    use yii\web\AssetBundle;

    class myAsset extends AssetBundle {
        public $sourcePath = '@app/modules/my_module/other/path';
        public $css = [

        ];
        public $js = [
            'js/myJs.js'
        ];
        public  $depends = [

        ];
    }
 ```
 
Во вьюхе

 ```php
    app\modules\my_module\myAsset::register($this);
 ```
