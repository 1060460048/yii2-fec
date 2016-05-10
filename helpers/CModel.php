<?php
/*
存放一些基本的非数据库数据。
一般都是数组设置。

*/
namespace fec\helpers;
use Yii; 
class CModel 
{


	# 1.将models 的错误信息转换成字符串
	public static function getErrorStr($errors){
		$str = '';
		if(is_array($errors)){
			foreach($errors as $field=>$error_k){
				$str .= $field.':'.implode(",",$error_k)." <br/>";
			}
		}
		return $str;
	}
	
}