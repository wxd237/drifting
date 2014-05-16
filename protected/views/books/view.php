<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->bookid,
);


?>


<div class="container"  >

<div class="row">
<div class="col-md-10 col-md-offset-1">

<h1><?php echo $model->bookname;?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bookid',
		array(
			'label'=>'类别',
			'value'=>Categories::getCataName($model->categoryid),
			),
		'bookname',
		'luserid',
		'detail',
		array(
			'label'=>'封面',
			'type'=>'image',
			'value'=>Yii::app()->request->baseUrl.$model->photo,
			),
		'commend',
		'lendtime',
		'buserid',
		'borrowtime',
		'author',
		'public',
		'number',
	),
)); ?>

<a class="btn primary" href="<?php echo $this->createUrl('/books/brow',array('id'=>$model->bookid));?>">我要借</a>
</div>
</div>

</div>
