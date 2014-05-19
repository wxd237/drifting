<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	'Manage',
);



Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$('#books-grid').yiiGridView('update', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1><?echo $mytitle;?></h1>




<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'books-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'bookid',
		'categoryid',
		'bookname',
		'luserid',
		'detail',	
		/*
		'commend',
		'lendtime',
		'buserid',
		'borrowtime',
		'author',
		'public',
		'number',
		*/
		array(
			'class'=>'CButtonColumn',
		),
		array(
			'class'=>'CLinkColumn',
			'label'=>$btn,
			'urlExpression'=>'Yii::app()->createUrl("/books/back",array("id"=>$data->bookid));',
			),
	),
)); ?>
