
extern zend_class_entry *vof_cache_frontend_json_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Frontend_Json);

PHP_METHOD(Vof_Cache_Frontend_Json, __construct);
PHP_METHOD(Vof_Cache_Frontend_Json, getLifetime);
PHP_METHOD(Vof_Cache_Frontend_Json, isBuffering);
PHP_METHOD(Vof_Cache_Frontend_Json, start);
PHP_METHOD(Vof_Cache_Frontend_Json, getContent);
PHP_METHOD(Vof_Cache_Frontend_Json, stop);
PHP_METHOD(Vof_Cache_Frontend_Json, beforeStore);
PHP_METHOD(Vof_Cache_Frontend_Json, afterRetrieve);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_json___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, frontendOptions)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_json_beforestore, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_json_afterretrieve, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_frontend_json_method_entry) {
	PHP_ME(Vof_Cache_Frontend_Json, __construct, arginfo_vof_cache_frontend_json___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Frontend_Json, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Json, isBuffering, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Json, start, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Json, getContent, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Json, stop, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Json, beforeStore, arginfo_vof_cache_frontend_json_beforestore, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Json, afterRetrieve, arginfo_vof_cache_frontend_json_afterretrieve, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
