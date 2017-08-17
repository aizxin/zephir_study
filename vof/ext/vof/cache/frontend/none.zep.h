
extern zend_class_entry *vof_cache_frontend_none_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Frontend_None);

PHP_METHOD(Vof_Cache_Frontend_None, getLifetime);
PHP_METHOD(Vof_Cache_Frontend_None, isBuffering);
PHP_METHOD(Vof_Cache_Frontend_None, start);
PHP_METHOD(Vof_Cache_Frontend_None, getContent);
PHP_METHOD(Vof_Cache_Frontend_None, stop);
PHP_METHOD(Vof_Cache_Frontend_None, beforeStore);
PHP_METHOD(Vof_Cache_Frontend_None, afterRetrieve);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_none_beforestore, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_none_afterretrieve, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_frontend_none_method_entry) {
	PHP_ME(Vof_Cache_Frontend_None, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_None, isBuffering, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_None, start, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_None, getContent, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_None, stop, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_None, beforeStore, arginfo_vof_cache_frontend_none_beforestore, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_None, afterRetrieve, arginfo_vof_cache_frontend_none_afterretrieve, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
