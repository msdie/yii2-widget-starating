<?php

namespace msdie\wigets\StaratingWidget;


class StaratingWidget extends \yii\widgets\InputWidget
{
    private $input = 'hiddenInput';


    public function run()
    {
        parent::run();
        return "Hello!";
    }
}
