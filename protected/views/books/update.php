<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	$model->bookid=>array('view','id'=>$model->bookid),
	'Update',
);

$this->menu=array(
	array('label'=>'List Books', 'url'=>array('index')),
	array('label'=>'Create Books', 'url'=>array('create')),
	array('label'=>'View Books', 'url'=>array('view', 'id'=>$model->bookid)),
	array('label'=>'Manage Books', 'url'=>array('admin')),
);
?>

<h1>Update Books <?php echo $model->bookid; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>