## Install

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```bash
$ php composer.phar require  lubobill1990/yii2-simditor "*"
```

or add

```json
"lubobill1990/yii2-simditor": "*"
```

to the require section of your `composer.json` file.


## Usage

#### Like a widget ####

```php
echo \lubobill1990\yii2\widget\Simditor::widget([
    'clientOptions'=>[
        'toolbarHidden' => false,
        'toolbar' => [//default true
            'title',
            'bold',
            'italic',
            'underline',
            'strikethrough',
            'fontScale'
        ]
    ]
]);
```

#### Like an ActiveForm widget ####

```php
use lubobill1990\yii2\widget\Simditor;
echo $form->field($model, 'content')->widget(Simditor::class,[
    'clientOptions'=>[
        'toolbarHidden'=>false,
        'toolbar'=>[//default true
            'title',
            'bold',
            'italic',
            'underline',
            'strikethrough',
            'fontScale'
        ]
    ]
]);
```
For other options, refer to this website
[http://simditor.tower.im/](http://simditor.tower.im/)

## Claim
This package is forked from anxu/yii2-simditor