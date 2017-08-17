
extern zend_class_entry *vof_cache_backend_memory_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Backend_Memory);

PHP_METHOD(Vof_Cache_Backend_Memory, get);
PHP_METHOD(Vof_Cache_Backend_Memory, save);
PHP_METHOD(Vof_Cache_Backend_Memory, delete);
PHP_METHOD(Vof_Cache_Backend_Memory, queryKeys);
PHP_METHOD(Vof_Cache_Backend_Memory, exists);
PHP_METHOD(Vof_Cache_Backend_Memory, increment);
PHP_METHOD(Vof_Cache_Backend_Memory, decrement);
PHP_METHOD(Vof_Cache_Backend_Memory, flush);
PHP_METHOD(Vof_Cache_Backend_Memory, serialize);
PHP_METHOD(Vof_Cache_Backend_Memory, unserialize);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_get, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_save, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_INFO(0, lifetime)
	ZEND_ARG_INFO(0, stopBuffer)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_delete, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_querykeys, 0, 0, 0)
	ZEND_ARG_INFO(0, prefix)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_exists, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_increment, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_decrement, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, value)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_backend_memory_unserialize, 0, 0, 1)
	ZEND_ARG_INFO(0, data)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_backend_memory_method_entry) {
	PHP_ME(Vof_Cache_Backend_Memory, get, arginfo_vof_cache_backend_memory_get, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, save, arginfo_vof_cache_backend_memory_save, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, delete, arginfo_vof_cache_backend_memory_delete, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, queryKeys, arginfo_vof_cache_backend_memory_querykeys, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, exists, arginfo_vof_cache_backend_memory_exists, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, increment, arginfo_vof_cache_backend_memory_increment, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, decrement, arginfo_vof_cache_backend_memory_decrement, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, flush, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, serialize, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Backend_Memory, unserialize, arginfo_vof_cache_backend_memory_unserialize, ZEND_ACC_PUBLIC)
	PHP_FE_END
};