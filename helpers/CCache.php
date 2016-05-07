<?php
namespace fec\helpers;
use Yii;
class CCache{
	
	const ALL_ROLE_KEY_CACHE_HANDLE  = 'all_role_key_cache';  # �˵�role cache
	# �õ�cache �����
	public static function cacheM(){
		return Yii::$app->cache;
	}
	
	# �õ� data  cache
	public static function get($handle){
		$cache = self::cacheM();
		return $cache->get($handle);
	}
	
	# ���� data  cache
	public static function set($handle,$data){
		
		$cache = self::cacheM();
		return $cache->set($handle,$data);
		
	}

	# ˢ�� Data  Cache
	public static function flushAll(){
		$cache = self::cacheM();
		$cache->flush();
	}
	
	
	
}