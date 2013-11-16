<?php
/* @var $this BooksController */
/* @var $model Books */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'bookid'); ?>
		<?php echo $form->textField($model,'bookid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'categoryid'); ?>
		<?php echo $form->textField($model,'categoryid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'bookname'); ?>
		<?php echo $form->textField($model,'bookname',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'luserid'); ?>
		<?php echo $form->textField($model,'luserid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'detail'); ?>
		<?php echo $form->textField($model,'detail',array('size'=>60,'maxlength'=>300)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'photo'); ?>
		<?php echo $form->textField($model,'photo',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'commend'); ?>
		<?php echo $form->textField($model,'commend'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'lendtime'); ?>
		<?php echo $form->textField($model,'lendtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'buserid'); ?>
		<?php echo $form->textField($model,'buserid'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'borrowtime'); ?>
		<?php echo $form->textField($model,'borrowtime'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'author'); ?>
		<?php echo $form->textField($model,'author',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'public'); ?>
		<?php echo $form->textField($model,'public',array('size'=>20,'maxlength'=>20)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'number'); ?>
		<?php echo $form->textField($model,'number'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->