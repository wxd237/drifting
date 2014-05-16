<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Registration");
$this->breadcrumbs=array(
	UserModule::t("注册用户"),
);
?>

<div class="container">
<div class="row	">
<h1><?php echo UserModule::t("注册用户"); ?></h1>

<?php if(Yii::app()->user->hasFlash('registration')): ?>
<div class="success">
<?php echo Yii::app()->user->getFlash('registration'); ?>
</div>
<?php else: ?>
</div>

<div class="form row">
<?php $form=$this->beginWidget('UActiveForm', array(
	'id'=>'registration-form',
	'enableAjaxValidation'=>true,
	'disableAjaxValidationAttributes'=>array('RegistrationForm_verifyCode'),
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
	'htmlOptions' => array('enctype'=>'multipart/form-data'),
)); ?>

	<p class="note"><?php echo UserModule::t('字段后面有<span class="required">*</span> 号的是必输选项'); ?></p>
	
	<?php echo $form->errorSummary(array($model,$profile)); ?>
	
	<div class="row">
	<?php echo $form->labelEx($model,'username',array('class'=>'col-md-1')); ?>
	<?php echo $form->textField($model,'username',array('class'=>'col-md-2')); ?>
	<?php echo $form->error($model,'username',array('class'=>'col-md-2')); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'password',array('class'=>'col-md-1')); ?>
	<?php echo $form->passwordField($model,'password',array('class'=>'col-md-2')); ?>
	<?php echo $form->error($model,'password',array('class'=>'col-md-2')); ?>
	<p class="hint">
	<?php echo UserModule::t("Minimal password length 4 symbols."); ?>
	</p>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'verifyPassword',array('class'=>'col-md-1')); ?>
	<?php echo $form->passwordField($model,'verifyPassword',array('class'=>'col-md-2')); ?>
	<?php echo $form->error($model,'verifyPassword',array('class'=>'col-md-2')); ?>
	</div>
	
	<div class="row">
	<?php echo $form->labelEx($model,'email',array('class'=>'col-md-1')); ?>
	<?php echo $form->textField($model,'email',array('class'=>'col-md-2')); ?>
	<?php echo $form->error($model,'email',array('class'=>'col-md-2')); ?>
	</div>
	
<?php 
		$profileFields=$profile->getFields();
		if ($profileFields) {
			foreach($profileFields as $field) {
			?>
	<div class="row">
		<?php echo $form->labelEx($profile,$field->varname,array('class'=>'col-md-1')); ?>
		<?php 
		if ($widgetEdit = $field->widgetEdit($profile)) {
			echo $widgetEdit;
		} elseif ($field->range) {
			echo $form->dropDownList($profile,$field->varname,Profile::range($field->range));
		} elseif ($field->field_type=="TEXT") {
			echo$form->textArea($profile,$field->varname,array('rows'=>6, 'cols'=>50));
		} else {
			echo $form->textField($profile,$field->varname,array('size'=>60,'maxlength'=>(($field->field_size)?$field->field_size:255)));
		}
		 ?>
		<?php echo $form->error($profile,$field->varname); ?>
	</div>	
			<?php
			}
		}
?>
	<?php if (UserModule::doCaptcha('registration')): ?>
	<div class="row">
		<?php echo $form->labelEx($model,'verifyCode',array('class'=>'col-md-1')); ?>
		
		<?php $this->widget('CCaptcha'); ?>
		<?php echo $form->textField($model,'verifyCode'); ?>
		<?php echo $form->error($model,'verifyCode'); ?>
		

	</div>
	<?php endif; ?>
	
	<div class="row submit">
		<?php echo CHtml::submitButton(UserModule::t("注册"),array('class'=>'btn btn-large btn-primary','style'=>'width:120px;')); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div> <!-- contianer -->
<?php endif; ?>