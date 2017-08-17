
extern zend_class_entry *vof_cache_multiple_ce;

ZEPHIR_INIT_CLASS(Vof_Cache_Multiple);

PHP_METHOD(Vof_Cache_Multiple, __construct);
PHP_METHOD(Vof_Cache_Multiple, push);
PHP_METHOD(Vof_Cache_Multiple, get);
PHP_METHOD(Vof_Cache_Multiple, start);
PHP_METHOD(Vof_Cache_Multiple, save);
PHP_METHOD(Vof_Cache_Multiple, delete);
PHP_METHOD(Vof_Cache_Multiple, exists);
PHP_METHOD(Vof_Cache_Multiple, flush);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_multiple___construct, 0, 0, 0)
	ZEND_ARG_INFO(0, backends)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_multiple_push, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, backend, Vof\\Cache\\BackendInterface, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_multiple_get, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_multiple_start, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_multiple_save, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, content)
	ZEND_ARG_INFO(0, lifetime)
	ZEND_ARG_INFO(0, stopBuffer)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_multiple_delete, 0, 0, 1)
	ZEND_ARG_INFO(0, keyName)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_cache_multiple_exists, 0, 0, 0)
	ZEND_ARG_INFO(0, keyName)
	ZEND_ARG_INFO(0, lifetime)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_cache_multiple_method_entry) {
	PHP_ME(Vof_Cache_Multiple, __construct, arginfo_vof_cache_multiple___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Cache_Multiple, push, arginfo_vof_cache_multiple_push, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Multiple, get, arginfo_vof_cache_multiple_get, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Multiple, start, arginfo_vof_cache_multiple_start, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Multiple, save, arginfo_vof_cache_multiple_save, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Multiple, delete, arginfo_vof_cache_multiple_delete, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Multiple, exists, arginfo_vof_cache_multiple_exists, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Cache_Multiple, flush, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
