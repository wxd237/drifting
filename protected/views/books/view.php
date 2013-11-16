<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->bookid,
);

$this->menu=array(
	array('label'=>'List Books', 'url'=>array('index')),
	array('label'=>'Create Books', 'url'=>array('create')),
	array('label'=>'Update Books', 'url'=>array('update', 'id'=>$model->bookid)),
	array('label'=>'Delete Books', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->bookid),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Books', 'url'=>array('admin')),
);
?>


<div class="container"  >

<div class="row">
<div class="col-md-10 col-md-offset-1">

<h1>View Books #<?php echo $model->bookid; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'bookid',
		'categoryid',
		'bookname',
		'luserid',
		'detail',
		'photo',
		'commend',
		'lendtime',
		'buserid',
		'borrowtime',
		'author',
		'public',
		'number',
	),
)); ?>
</div>
</div>

</div>
