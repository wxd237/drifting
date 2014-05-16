<?php $this->pageTitle=Yii::app()->name . ' - '.UserModule::t("Change Password");
$this->breadcrumbs=array(
	UserModule::t("Profile") => array('/user/profile'),
	UserModule::t("Change Password"),
);

?>




<div class="container"  >

<div class="row">
<div class="col-md-10 col-md-offset-1">


<h1><?php echo "修改密码"; ?></h1>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'changepassword-form',
	'enableAjaxValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	
	<?php echo $form->errorSummary($model); ?>
	
	<div class="row">
	<?php echo "旧密码"; ?>
	<?php echo $form->passwordField($model,'oldPassword'); ?>
	<?php echo $form->error($model,'oldPassword'); ?>
	</div>
	
	<div class="row">
	<?php echo "新密码"; ?>
	<?php echo $form->passwordField($model,'password'); ?>
	<?php echo $form->error($model,'password'); ?>
	<p class="hint">
	
	</p>
	</div>
	
	<div class="row">
	<?php echo "重&nbsp;&nbsp;&nbsp;复"; ?>
	<?php echo $form->passwordField($model,'verifyPassword'); ?>
	<?php echo $form->error($model,'verifyPassword'); ?>
	</div>
	
	
	<div class="row submit">
	<?php echo CHtml::submitButton(UserModule::t("确认修改")); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
		</div> <!-- main context -->
	</div> <!-- row -->
</div>