<?php

class LogoutController extends Controller
{
	public $defaultAction = 'logout';
	
	/**
	 * 用户推出
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->controller->module->returnLogoutUrl);
	}

}