<?php
/*
 *通用验证方法类
 *@add by : linzhengxiang ,date : 20140523
 */
class TransformAct extends CheckAct{
	
	/**
	 * 构造函数
	 */
	public function __construct(){
		parent::__construct();	
	}
	
	public function act_commonTransform(){
		####################### start 扩展通用验证  ##########################
//		self::$errMsg[123] = 'test error';
//		return false;
		return true;
		####################### end   扩展通用验证  ##########################
	}
}