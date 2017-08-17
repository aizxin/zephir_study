
extern zend_class_entry *vof_cache_frontend_base64_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Frontend_Base64);

PHP_METHOD(Vof_Cache_Frontend_Base64, __construct);
PHP_METHOD(Vof_Cache_Frontend_Base64, getLifetime);
PHP_METHOD(Vof_Cache_Frontend_Base64, isBuffering);
PHP_METHOD(Vof_Cache_Frontend_Base64, start);
PHP_METHOD(Vof_Cache_Frontend_Base64, getContent);
PHP_METHOD(Vof_Cache_Frontend_Base64, stop);
PHP_METHOD(Vof_Cache_Frontend_Base64, beforeStore);
PHP_METHOD(Vof_Cache_Frontend_Base64, afterRetrieve);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_base64___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, frontendOptions)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_base64_beforestore, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_base64_afterretrieve, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_frontend_base64_method_entry) {
	PHP_ME(Vof_Cache_Frontend_Base64, __construct, arginfo_vof_cache_frontend_base64___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Frontend_Base64, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Base64, isBuffering, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Base64, start, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Base64, getContent, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Base64, stop, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Base64, beforeStore, arginfo_vof_cache_frontend_base64_beforestore, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Base64, afterRetrieve, arginfo_vof_cache_frontend_base64_afterretrieve, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
