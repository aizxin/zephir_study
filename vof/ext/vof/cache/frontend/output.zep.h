
extern zend_class_entry *vof_cache_frontend_output_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Frontend_Output);

PHP_METHOD(Vof_Cache_Frontend_Output, __construct);
PHP_METHOD(Vof_Cache_Frontend_Output, getLifetime);
PHP_METHOD(Vof_Cache_Frontend_Output, isBuffering);
PHP_METHOD(Vof_Cache_Frontend_Output, start);
PHP_METHOD(Vof_Cache_Frontend_Output, getContent);
PHP_METHOD(Vof_Cache_Frontend_Output, stop);
PHP_METHOD(Vof_Cache_Frontend_Output, beforeStore);
PHP_METHOD(Vof_Cache_Frontend_Output, afterRetrieve);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_output___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, frontendOptions)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_output_beforestore, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_output_afterretrieve, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_frontend_output_method_entry) {
	PHP_ME(Vof_Cache_Frontend_Output, __construct, arginfo_vof_cache_frontend_output___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Frontend_Output, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Output, isBuffering, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Output, start, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Output, getContent, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Output, stop, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Output, beforeStore, arginfo_vof_cache_frontend_output_beforestore, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Output, afterRetrieve, arginfo_vof_cache_frontend_output_afterretrieve, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
