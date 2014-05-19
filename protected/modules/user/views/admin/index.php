<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('/user'),
	UserModule::t('Manage'),
);

/*
$this->menu=array(
    array('label'=>UserModule::t('新建用户'), 'url'=>array('create')),
    array('label'=>UserModule::t(' 管理用户'), 'url'=>array('admin')),
    array('label'=>UserModule::t(' 管理用户字段'), 'url'=>array('profileField/admin')),
    array('label'=>UserModule::t('用户列表'), 'url'=>array('/user')),
);
*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
    $('.search-form').toggle();
    return false;
});	
$('.search-form form').submit(function(){
    $.fn.yiiGridView.update('user-grid', {
        data: $(this).serialize()
    });
    return false;
});
");

?>
<h1><?php echo UserModule::t("用户管理"); ?></h1>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'user-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		array(
			'name' => 'id',
			'type'=>'raw',
			'value' => 'CHtml::link(CHtml::encode($data->id),array("admin/update","id"=>$data->id))',
		),
		array(
			'name' => 'username',
			'type'=>'raw',
			'value' => 'CHtml::link(UHtml::markSearch($data,"username"),array("admin/view","id"=>$data->id))',
		),
		array(
			'name'=>'email',
			'type'=>'raw',
			'value'=>'CHtml::link(UHtml::markSearch($data,"email"), "mailto:".$data->email)',
		),
		'create_at',
		'lastvisit_at',
		array(
			'name'=>'superuser',
			'value'=>'User::itemAlias("AdminStatus",$data->superuser)',
			'filter'=>User::itemAlias("AdminStatus"),
		),
		array(
			'name'=>'status',
			'value'=>'User::itemAlias("UserStatus",$data->status)',
			'filter' => User::itemAlias("UserStatus"),
		),
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
