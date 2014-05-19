<?php

class BooksController extends Controller
{
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout='//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
			//'postOnly + delete', // we only allow deletion via POST request
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','test','rand'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update','brow','adminl','delete','back','admin'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete','brow','adminl','back','admin'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	/**
	 * 这里是单个书详细页面
	 *   index.php?r=books/view&id=10  
	 *    上面这id=10  会穿到
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id)
	{
		$this->render('view',array(
			'model'=>$this->loadModel($id),
		));
	}
//随机一本书
	public function actionRand(){
		$criteria= new CDbCriteria();
		$criteria->order="rand()";
		$criteria->limit="1";
		$model=Books::model()->find($criteria);


		$this->render('view',array('model'=>$model));

	}

	/**
	 * 漂流书
	 */
	public function actionCreate()
	{
		$model=new Books;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		
		$model->luserid=Yii::app()->user->id;
		$model->buserid=0;
		$model->commend=0;
		$model->lendtime=date("Y-m-d");
		$model->borrowtime=$model->lendtime;


		if(isset($_POST['Books'])){
			$model->attributes=$_POST['Books'];
			
			$image = CUploadedFile::getInstance($model, 'photo');  

			$model->photo='/uploads/'.time().'.'.$image->getExtensionName(); 



			if($model->save()) {
					if (is_object($image) && get_class($image)==='CUploadedFile') {
					
						$image->saveAs(Yii::getPathOfAlias('webroot').$model->photo);
							
					}else{
							
							$model->photo='NoPic.jpg';
					}


					$this->redirect(array('view','id'=>$model->bookid));
			}
		}



		
		$this->render('create',array(
			'model'=>$model,
		));
	}

	/**
	* 修改图书信息
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id)
	{
		$model=$this->loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['Books']))
		{
			$model->attributes=$_POST['Books'];
			$image = CUploadedFile::getInstance($model, 'photo');  
			$model->photo='/uploads/'.time().'.'.$image->getExtensionName();
		
			if($model->save()){
				if (is_object($image) && get_class($image)==='CUploadedFile') {
					
						$image->saveAs(Yii::getPathOfAlias('webroot').$model->photo);
							
					}else{
							
							$model->photo='NoPic.jpg';
					}
				$this->redirect(array('view','id'=>$model->bookid));
			}
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	  *  删除书
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id)
	{

		$model=$this->loadModel($id);

		if($model->buserid!=0)
			throw new CHttpException(200,'必需现收回，才能删除');

		$model->delete();

		// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
		if(!isset($_GET['ajax']))
			$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('Books');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * 图书管理
	 */
	public function actionAdmin()
	{

		$dataProvider=new CActiveDataProvider('Books',array(
                         'criteria'=>array(
                              'order' => "lendtime desc",
                           //     'condition'=> "buserid = :buserid",
                           //      'params'  => array(':buserid' =>Yii::app()->user->id),
                                   )
                              ));

		

		$this->render('admin',array(
			'dataProvider'=>$dataProvider,'mytitle'=>'图书管理','btn'=>'收回'
		));
	}


		/**
	 * 我借到的书
	 */
	public function actionAdminb()
	{

		$dataProvider=new CActiveDataProvider('Books',array(
                         'criteria'=>array(
                              'order' => "lendtime desc",
                                'condition'=> "buserid = :buserid",
                                 'params'  => array(':buserid' =>Yii::app()->user->id),
                                   )
                              ));

		

		$this->render('admin',array(
			'dataProvider'=>$dataProvider,'mytitle'=>'我借到的书','btn'=>'收回'
		));
	}



/**
	 * 我借出的书
	 */
	public function actionAdminl()
	{

		$dataProvider=new CActiveDataProvider('Books',array(
                         'criteria'=>array(
                              'order' => "lendtime desc",
                                'condition'=> "luserid = :luserid",
                                 'params'  => array(':luserid' =>Yii::app()->user->id),
                                   )
                              ));

		

		$this->render('admin',array(
			'dataProvider'=>$dataProvider,'mytitle'=>'我借出的书','btn'=>'归还'
		));
	}


	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer $id the ID of the model to be loaded
	 * @return Books the loaded model
	 * @throws CHttpException
	 */
	public function loadModel($id)
	{
		$model=Books::model()->findByPk($id);
		if($model===null)
			throw new CHttpException(404,'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param Books $model the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='books-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}


	public function actionTest(){

			$t1=Categories::model()->getCatagoryList();
			var_dump($t1);
	}
/*
	借书，修改图书表的luserid字段为当前用户的ID
*/
	public function actionBrow($id){
		$model=$this->loadModel($id);

		if($model->buserid!=0)
				throw new CHttpException(404,'该书已经被人借走，不能再借');
		if($model->luserid==Yii::app()->user->id) 
				throw new CHttpException(404,'不能借自己借出去的书');
		$model->buserid=Yii::app()->user->id;
		if($model->save()){
				throw new CHttpException(200,'借书成功');
		}

	}

/*
	借书，修改图书表的luserid字段为0
*/

	public function actionBack($id){
			$model=$this->loadModel($id);
			$model->buserid=0;
			if($model->save()){
				throw new CHttpException(200,'收回成功');
			}	
	}
}

//和书额关的都在这个文件里面