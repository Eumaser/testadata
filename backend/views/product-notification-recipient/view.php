<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ProductNotificationRecipient */

$this->title = 'View Product Email Recipient';
 
?>

<div class="row form-container">
<br/>

 <div class="col-md-12 col-sm-12 col-xs-12">
    
 <div class="form-title-container">
    <span class="form-header"><h4><i class="fa fa-paint-brush"></i> View Product Email Recipient</h4></span>
 </div>      
 <hr/>

 <div class="col-md-12">
    <div style="text-align: right;">
        <?= Html::a( '<i class="fa fa-backward"></i> Back to previous page', Yii::$app->request->referrer, ['class' => 'form-btn btn btn-default']); ?>

        <?= Html::a( '<i class="fa fa-pencil-square"></i> Edit', '?r=product-notification-recipient/update&id=' . $model->id, ['class' => 'form-btn btn btn-info']); ?>

        <?= Html::a( '<i class="fa fa-trash"></i> Delete', '?r=product-notification-recipient/delete-column&id=' . $model->id, ['class' => 'form-btn btn btn-danger', 'onclick' => 'return deleteConfirmation()']); ?>
    </div>
 </div>    
 <br/><br/><br/>

    <div class="tbl-container viewDesign">
        <?= 
            DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'email',
                    [
                        'label' => 'Status',
                        'value' => ($model->status == 1)? 'Active': 'Inactive',
                    ],
                    [
                        'label' => 'Created At',
                        'value' => date('M-d-Y', strtotime($model->created_at)),
                    ] 
                ],
            ]) 
        ?>
    </div>   
 
 </div>

</div>
