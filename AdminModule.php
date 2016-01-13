<?php
namespace fec;
use Yii;
use fec\helpers\CConfig;
class AdminModule extends \yii\base\Module
{
  
    public $controllerNamespace ;
	public $_currentDir ;
	public $_currentNameSpace ;
	
	 public function init()
    {
		parent::init();  
		# ����config�ļ�
		$config_file_dir = $this->_currentDir . '/etc/config.php';
		if(file_exists($config_file_dir)){
			$params_data = (require($config_file_dir));
			
		}
		
		# ���ò���
		$params_data['_currentDir'] 		= $this->_currentDir;
		$params_data['_currentNameSpace'] 	= $this->_currentNameSpace;
		Yii::configure($this, ['params'=> $params_data]);
		
		# Ĭ��layout�ļ�
		$this->layout = $this->layout ? $this->layout : "main.php";
		
    }
	
	/*
	public function init()
    {
        parent::init();
		
		$theme		= CConfig::getCurrentTheme();
		# ����views�ļ�����·��
		$dir = \basename($this->_currentDir);
		basename(dirname($_SERVER['PHP_SELF']));
		$viewPath = __DIR__ . "/Theme/".$theme."/".strtolower($dir);
		$this->setViewPath($viewPath); 
		# ����ģ��ר����layout �ļ�  appadmin/code/Blog/Theme/default/article/layouts/main.php
		//$this->layout = "main.php";
		# ���������ļ�
		$config_file_dir = $this->_currentDir . '/etc/config.php';
		if(file_exists($config_file_dir)){
			if(($params_data = (require($config_file_dir))) && !empty($params_data)){
				Yii::configure($this, ['params'=> $params_data]);
			}
		}
		
		$this->params['blockDir'] = str_replace("\\controllers","",$this->controllerNamespace);
    }
	*/
}
