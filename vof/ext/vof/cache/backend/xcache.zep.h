
extern zend_class_entry *vof_cache_backend_xcache_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Backend_Xcache);

PHP_METHOD(Vof_Cache_Backend_Xcache, __construct);
PHP_METHOD(Vof_Cache_Backend_Xcache, get);
PHP_METHOD(Vof_Cache_Backend_Xcache, save);
PHP_METHOD(Vof_Cache_Backend_Xcache, delete);
PHP_METHOD(Vof_Cache_Backend_Xcache, queryKeys);
PHP_METHOD(Vof_Cache_Backend_Xcache, exists);
PHP_METHOD(Vof_Cache_Backend_Xcache, increment);
PHP_METHOD(Vof_Cache_Backend_Xcache, decrement);
PHP_METHOD(Vof_Cache_Backend_Xcache, flush);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache___construct, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, frontend, Vof\\Cache\\FrontendInterface, 0)
	ZEND_ARG_INFO(0, options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache_get, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache_save, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_INFO(0, lifetime)
	ZEND_ARG_INFO(0, stopBuffer)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache_delete, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache_querykeys, 0, 0, 0)
	ZEND_ARG_INFO(0, prefix)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache_exists, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache_increment, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_xcache_decrement, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_backend_xcache_method_entry) {
	PHP_ME(Vof_Cache_Backend_Xcache, __construct, arginfo_vof_cache_backend_xcache___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Backend_Xcache, get, arginfo_vof_cache_backend_xcache_get, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Xcache, save, arginfo_vof_cache_backend_xcache_save, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Xcache, delete, arginfo_vof_cache_backend_xcache_delete, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Xcache, queryKeys, arginfo_vof_cache_backend_xcache_querykeys, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Xcache, exists, arginfo_vof_cache_backend_xcache_exists, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Xcache, increment, arginfo_vof_cache_backend_xcache_increment, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Xcache, decrement, arginfo_vof_cache_backend_xcache_decrement, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Xcache, flush, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
