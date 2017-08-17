
extern zend_class_entry *vof_cache_frontend_data_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Frontend_Data);

PHP_METHOD(Vof_Cache_Frontend_Data, __construct);
PHP_METHOD(Vof_Cache_Frontend_Data, getLifetime);
PHP_METHOD(Vof_Cache_Frontend_Data, isBuffering);
PHP_METHOD(Vof_Cache_Frontend_Data, start);
PHP_METHOD(Vof_Cache_Frontend_Data, getContent);
PHP_METHOD(Vof_Cache_Frontend_Data, stop);
PHP_METHOD(Vof_Cache_Frontend_Data, beforeStore);
PHP_METHOD(Vof_Cache_Frontend_Data, afterRetrieve);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_data___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, frontendOptions)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_data_beforestore, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_data_afterretrieve, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_frontend_data_method_entry) {
	PHP_ME(Vof_Cache_Frontend_Data, __construct, arginfo_vof_cache_frontend_data___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Frontend_Data, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Data, isBuffering, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Data, start, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Data, getContent, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Data, stop, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Data, beforeStore, arginfo_vof_cache_frontend_data_beforestore, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Data, afterRetrieve, arginfo_vof_cache_frontend_data_afterretrieve, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
