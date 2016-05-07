<?php
namespace fec\helpers;
use Yii; 
//use yii\base\Model;
//use backend\models\helper\Base.php
# myapp\fec\helper\CConfig::getTheme();
class CUser
{
	# �Ƿ��¼
	public static function isLogin(){
		if($identity = Yii::$app->user->identity){
			return true;
		}
		return false;
	}
	
	# �õ���ǰ���û���
	public static function getCurrentUsername(){
		if($identity = Yii::$app->user->identity){
			if(isset($identity['username']) && !empty($identity['username'])){
				return $identity['username'];
			}
		}
		return '';
	}
	
	# �ж��Ƿ��ǳ����û�
	public static function isSuperUser($user = ''){
		$superUser = self::getSuperUserConfig();
		if(!$user){
			$user = self::getCurrentUsername;
		}
		if($user && in_array($user,$superUser)){
			return true;
		}
		return false;
	}
	
	# �õ��û������á�
	public static function getSuperUserConfig(){
		$superUser = ['admin'];
		$configSuperUser = CConfig::param('super_admin_user');
		if(is_array($configSuperUser) && !empty($configSuperUser)){
			$superUser = array_merge($superUser,$configSuperUser);
			$superUser = array_unique($superUser);
		}
		return $superUser;
	}
	
	
	
	
}