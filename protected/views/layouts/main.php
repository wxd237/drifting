<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png">

    <title><?php echo Yii::app()->name;?></title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/offcanvas.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <div class="navbar navbar-fixed-top navbar-inverse" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="<?php echo $this->createUrl('/site/index');?>"><?php echo Yii::app()->name;?></a>
        </div>
       <?php if (Yii::app()->user->isGuest) {   ?>

        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?php echo $this->createUrl('books/rand');?>">随便看看</a></li>
           
          </ul>
          <ul class="nav navbar-nav navbar-right">
          <!-- <li><a href="<?php echo $this->createUrl('/user/recover');?>">找回密码</a></li>  -->
            <li><a href="<?php echo $this->createUrl('/user/login');?>">登陆</a></li>
            <li><a href="<?php echo $this->createUrl('/user/registration');?>">注册</a></li>
          </ul>
        </div><!-- /.nav-collapse -->

    <?php 
} else 		//已登陆用户
    {
    	?>

      <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
         
             <li ><a href="<?php echo $this->createUrl('books/rand');?>">随便看看</a></li>
          
          </ul>
          <ul class="nav navbar-nav navbar-right">
          
              <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">控制面板<b class="caret"></b></a>
        <ul class="dropdown-menu">
          <li><a href="<?php echo $this->createUrl('/user/profile');?>">配置信息</a></li>
          <li><a href="<?php echo $this->createUrl('/books/admin');?>">我借到书</a></li>
            <li><a href="<?php echo $this->createUrl('/books/adminl');?>">我借出书</a></li>
          <li><a href="<?php echo $this->createUrl('/books/create');?>">漂流书</a></li>
          <li><a href="<?php echo $this->createUrl('/user/profile/Changepassword');?>">修改密码</a></li>
          <li class="divider"></li>
          <li><a href="<?php echo $this->createUrl('/user/profile/edit');?>">修改信息</a></li>
         
        </ul>
      </li>
            <li><a href="<?php echo $this->createUrl('/user/logout');?>">退出</a></li>
          </ul>
        </div><!-- /.nav-collapse -->


        <?php }  ?>
      </div><!-- /.container -->
    </div><!-- /.navbar -->

             <?php echo $content; ?>
      <hr>

      <footer>
        <p>&copy; Company 2013</p>
      </footer>

    </div><!--/.container-->



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/offcanvas.js"></script>
  </body>
</html>
