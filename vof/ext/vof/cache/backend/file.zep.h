
extern zend_class_entry *vof_cache_backend_file_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Backend_File);

PHP_METHOD(Vof_Cache_Backend_File, __construct);
PHP_METHOD(Vof_Cache_Backend_File, get);
PHP_METHOD(Vof_Cache_Backend_File, save);
PHP_METHOD(Vof_Cache_Backend_File, delete);
PHP_METHOD(Vof_Cache_Backend_File, queryKeys);
PHP_METHOD(Vof_Cache_Backend_File, exists);
PHP_METHOD(Vof_Cache_Backend_File, increment);
PHP_METHOD(Vof_Cache_Backend_File, decrement);
PHP_METHOD(Vof_Cache_Backend_File, flush);
PHP_METHOD(Vof_Cache_Backend_File, getKey);
PHP_METHOD(Vof_Cache_Backend_File, useSafeKey);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file___construct, 0, 0, 2)
	ZEND_ARG_OBJ_INFO(0, frontend, Vof\\Cache\\FrontendInterface, 0)
	ZEND_ARG_ARRAY_INFO(0, options, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_get, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_save, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_INFO(0, lifetime)
	ZEND_ARG_INFO(0, stopBuffer)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_delete, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_querykeys, 0, 0, 0)
	ZEND_ARG_INFO(0, prefix)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_exists, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_increment, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_decrement, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_getkey, 0, 0, 1)
	ZEND_ARG_INFO(0, key)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_file_usesafekey, 0, 0, 1)
	ZEND_ARG_INFO(0, useSafeKey)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_backend_file_method_entry) {
	PHP_ME(Vof_Cache_Backend_File, __construct, arginfo_vof_cache_backend_file___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Backend_File, get, arginfo_vof_cache_backend_file_get, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, save, arginfo_vof_cache_backend_file_save, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, delete, arginfo_vof_cache_backend_file_delete, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, queryKeys, arginfo_vof_cache_backend_file_querykeys, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, exists, arginfo_vof_cache_backend_file_exists, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, increment, arginfo_vof_cache_backend_file_increment, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, decrement, arginfo_vof_cache_backend_file_decrement, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, flush, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, getKey, arginfo_vof_cache_backend_file_getkey, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_File, useSafeKey, arginfo_vof_cache_backend_file_usesafekey, ZEND_ACC_PUBLIC)
	PHP_FE_END
};