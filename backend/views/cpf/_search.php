<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SearchCpf */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="row">

    <div class="col-md-12">
        <div class="search-label-container">
            <span class="search-label"><li class="fa fa-edit"></li> Enter Keyword here</span>
        </div> 
    </div>
    <br/>
    
    <?php $form = ActiveForm::begin(['action' => ['index'],'method' => 'get', 'class' => 'form-inline']); ?>

    <div class="col-md-4">
        <?= $form->field($model, 'from_age')->textInput(['class' => 'form_input form-control', 'placeholder' => 'Write Age-From here.'])->label(false) ?>
    </div>

    <div class="col-md-4">
        <?= $form->field($model, 'to_age')->textInput(['class' => 'form_input form-control', 'placeholder' => 'Write Age-To here.'])->label(false) ?>
    </div>

    <div class="col-md-4">
        <div style="margin-left: -10px;">
            <?= Html::Button('<li class=\'fa fa-search\'></li> Search', ['type' => 'submit', 'class' => 'form-btn btn btn-primary']) ?>
        </div>
    </div>
    
    <?php ActiveForm::end(); ?>
    <br/>

</div>