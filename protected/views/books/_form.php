<?php
/* @var $this BooksController */
/* @var $model Books */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'books-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'categoryid'); ?>
		<?php echo $form->textField($model,'categoryid'); ?>
		<?php echo $form->error($model,'categoryid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'bookname'); ?>
		<?php echo $form->textField($model,'bookname',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'bookname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'luserid'); ?>
		<?php echo $form->textField($model,'luserid'); ?>
		<?php echo $form->error($model,'luserid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'detail'); ?>
		<?php echo $form->textField($model,'detail',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'detail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'photo'); ?>
		<?php echo $form->textField($model,'photo',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'photo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'commend'); ?>
		<?php echo $form->textField($model,'commend'); ?>
		<?php echo $form->error($model,'commend'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'lendtime'); ?>
		<?php echo $form->textField($model,'lendtime'); ?>
		<?php echo $form->error($model,'lendtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'buserid'); ?>
		<?php echo $form->textField($model,'buserid'); ?>
		<?php echo $form->error($model,'buserid'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'borrowtime'); ?>
		<?php echo $form->textField($model,'borrowtime'); ?>
		<?php echo $form->error($model,'borrowtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'public'); ?>
		<?php echo $form->textField($model,'public',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'public'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
		<?php echo $form->error($model,'number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->