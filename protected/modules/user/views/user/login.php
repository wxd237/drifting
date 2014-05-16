<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title>用户登陆</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/signin.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

     <div class="container" >


      <!--<form class="form-signin" > -->
        <?php echo CHtml::beginForm('',$method='post',array('class'=>'form-signin')); ?>
        <h2 class="form-signin-heading">用户登陆</h2>

       
 

        <?php echo "用户名"; ?>
        <?php echo CHtml::activeTextField($model,'username',array('class'=>'form-control .form-inline','placeholder'=>'用户名')) ?>
         <?php echo CHtml::error($model,'username',array('class'=>'alert alert-danger ')); ?>
       <!-- <input type="text" class="input-block-level" placeholder="Email address"> -->
        <?php echo "密码*"; ?>
       <?php echo CHtml::activePasswordField($model,'password',array('class'=>'form-control .form-inline ','placeholder'=>'密码')) ?>
               <?php echo CHtml::error($model,'password',array('class'=>'alert alert-danger ')); ?>
       <!-- <input type="password" class="input-block-level" placeholder="Password"> -->
        <label class="checkbox">
          <?php echo CHtml::activeCheckBox($model,'rememberMe'); ?>记住我
        </label>
        <button class="btn btn-large btn-primary" type="submit" style="width:120px;">登陆</button>
         <a class="btn btn-large btn-info" style="width:120px;" href="<?php echo $this->createUrl('/user/registration');?>" >还没注册</a>
       <?php
          

       ?>
       <!--<?php echo CHtml::link(UserModule::t("忘记密码"),Yii::app()->getModule('user')->recoveryUrl,array('class'=>'link')); ?> -->
      <!--<?php echo CHtml::link(UserModule::t("还没注册"),Yii::app()->getModule('user')->registrationUrl,array('class'=>'link')); ?> -->
      </form>
       
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
  </body>
</html>
