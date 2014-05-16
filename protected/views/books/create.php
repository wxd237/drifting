<?php
/* @var $this BooksController */
/* @var $model Books */

$this->breadcrumbs=array(
	'Books'=>array('index'),
	'Create',
);


?>


	

<div class="container">

	<div class="row">
		
<h1 style="margin-left:200px;">漂流新书</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>
		
	</div>
</div>