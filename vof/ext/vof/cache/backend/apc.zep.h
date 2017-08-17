
extern zend_class_entry *vof_cache_backend_apc_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Backend_Apc);

PHP_METHOD(Vof_Cache_Backend_Apc, get);
PHP_METHOD(Vof_Cache_Backend_Apc, save);
PHP_METHOD(Vof_Cache_Backend_Apc, increment);
PHP_METHOD(Vof_Cache_Backend_Apc, decrement);
PHP_METHOD(Vof_Cache_Backend_Apc, delete);
PHP_METHOD(Vof_Cache_Backend_Apc, queryKeys);
PHP_METHOD(Vof_Cache_Backend_Apc, exists);
PHP_METHOD(Vof_Cache_Backend_Apc, flush);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_apc_get, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_apc_save, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_INFO(0, lifetime)
	ZEND_ARG_INFO(0, stopBuffer)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_apc_increment, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_apc_decrement, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_apc_delete, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_apc_querykeys, 0, 0, 0)
	ZEND_ARG_INFO(0, prefix)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_apc_exists, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_backend_apc_method_entry) {
	PHP_ME(Vof_Cache_Backend_Apc, get, arginfo_vof_cache_backend_apc_get, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Apc, save, arginfo_vof_cache_backend_apc_save, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Apc, increment, arginfo_vof_cache_backend_apc_increment, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Apc, decrement, arginfo_vof_cache_backend_apc_decrement, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Apc, delete, arginfo_vof_cache_backend_apc_delete, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Apc, queryKeys, arginfo_vof_cache_backend_apc_querykeys, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Apc, exists, arginfo_vof_cache_backend_apc_exists, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Apc, flush, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
