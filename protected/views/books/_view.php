<?php
/* @var $this BooksController */
/* @var $data Books */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookid')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->bookid), array('view', 'id'=>$data->bookid)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('categoryid')); ?>:</b>
	<?php echo CHtml::encode($data->categoryid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('bookname')); ?>:</b>
	<?php echo CHtml::encode($data->bookname); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('luserid')); ?>:</b>
	<?php echo CHtml::encode($data->luserid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('detail')); ?>:</b>
	<?php echo CHtml::encode($data->detail); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('photo')); ?>:</b>
	<?php echo CHtml::encode($data->photo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('commend')); ?>:</b>
	<?php echo CHtml::encode($data->commend); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('lendtime')); ?>:</b>
	<?php echo CHtml::encode($data->lendtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('buserid')); ?>:</b>
	<?php echo CHtml::encode($data->buserid); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('borrowtime')); ?>:</b>
	<?php echo CHtml::encode($data->borrowtime); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('public')); ?>:</b>
	<?php echo CHtml::encode($data->public); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('number')); ?>:</b>
	<?php echo CHtml::encode($data->number); ?>
	<br />

	*/ ?>

</div>