
extern zend_class_entry *vof_cache_frontend_msgpack_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Frontend_Msgpack);

PHP_METHOD(Vof_Cache_Frontend_Msgpack, __construct);
PHP_METHOD(Vof_Cache_Frontend_Msgpack, getLifetime);
PHP_METHOD(Vof_Cache_Frontend_Msgpack, isBuffering);
PHP_METHOD(Vof_Cache_Frontend_Msgpack, start);
PHP_METHOD(Vof_Cache_Frontend_Msgpack, getContent);
PHP_METHOD(Vof_Cache_Frontend_Msgpack, stop);
PHP_METHOD(Vof_Cache_Frontend_Msgpack, beforeStore);
PHP_METHOD(Vof_Cache_Frontend_Msgpack, afterRetrieve);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_msgpack___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, frontendOptions)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_msgpack_beforestore, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_frontend_msgpack_afterretrieve, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_frontend_msgpack_method_entry) {
	PHP_ME(Vof_Cache_Frontend_Msgpack, __construct, arginfo_vof_cache_frontend_msgpack___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Frontend_Msgpack, getLifetime, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Msgpack, isBuffering, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Msgpack, start, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Msgpack, getContent, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Msgpack, stop, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Msgpack, beforeStore, arginfo_vof_cache_frontend_msgpack_beforestore, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Frontend_Msgpack, afterRetrieve, arginfo_vof_cache_frontend_msgpack_afterretrieve, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
