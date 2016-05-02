<?php

namespace consultnn\yii2\grid;

use Yii;
use yii\helpers\Html;

class ActionColumn extends \yii\grid\ActionColumn
{
    /**
     * @var string Wrap classes
     */
    public $wrap = 'btn-group';

    public function init()
    {
        parent::init();

        if (empty($this->buttonOptions['class'])) {
            $this->buttonOptions['class'] = 'btn btn-default';
        }
    }

    /**
     * @inheritdoc
     */
    protected function renderDataCellContent($model, $key, $index)
    {
        return Html::tag(
            'div',
            parent::renderDataCellContent($model, $key, $index),
            ['class' => $this->wrap]
        );
    }
}