<?php

namespace msdie\wigets\StaratingWidget;

use yii\widgets\InputWidget;
use yii\helpers\Html;


class StaratingWidget extends InputWidget
{
    /**
     * @var string the template for arranging the CAPTCHA image tag and the text input tag.
     * In this template, the token `{image}` will be replaced with the actual image tag,
     * while `{input}` will be replaced with the text input tag.
     */
    public $template = '{input} {image} ';
    /**
     * @var array the HTML attributes for the input tag.
     * @see \yii\helpers\Html::renderTagAttributes() for details on how attributes are being rendered.
     */
    public $options = ['class' => 'form-control'];


    /**
     * Initializes the widget.
     */
    public function init()
    {
        parent::init();

//        static::checkRequirements();

//        if (!isset($this->imageOptions['id'])) {
//            $this->imageOptions['id'] = $this->options['id'] . '-image';
//        }
    }

    /**
     * Renders the widget.
     */
    public function run()
    {
//        $this->registerClientScript();
        if ($this->hasModel()) {
            $input = Html::hiddenInput($this->model, $this->attribute, $this->options);
        } else {
            $input = Html::hiddenInput($this->name, $this->value, $this->options);
        }
        var_dump($input,1111111111);
//        $route = $this->captchaAction;
//        if (is_array($route)) {
//            $route['v'] = uniqid();
//        } else {
//            $route = [$route, 'v' => uniqid()];
//        }
//        $image = Html::img($route, $this->imageOptions);
        echo strtr($this->template, [
            '{image}' => '123456789',
            '{input}' => $input,
        ]);
    }

}
