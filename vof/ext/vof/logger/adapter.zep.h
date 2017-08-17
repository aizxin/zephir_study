
extern zend_class_entry *vof_logger_adapter_ce;

ZEPHIR_INIT_CLASS(Vof_Logger_Adapter);

PHP_METHOD(Vof_Logger_Adapter, setLogLevel);
PHP_METHOD(Vof_Logger_Adapter, getLogLevel);
PHP_METHOD(Vof_Logger_Adapter, setFormatter);
PHP_METHOD(Vof_Logger_Adapter, begin);
PHP_METHOD(Vof_Logger_Adapter, commit);
PHP_METHOD(Vof_Logger_Adapter, rollback);
PHP_METHOD(Vof_Logger_Adapter, isTransaction);
PHP_METHOD(Vof_Logger_Adapter, critical);
PHP_METHOD(Vof_Logger_Adapter, emergency);
PHP_METHOD(Vof_Logger_Adapter, debug);
PHP_METHOD(Vof_Logger_Adapter, error);
PHP_METHOD(Vof_Logger_Adapter, info);
PHP_METHOD(Vof_Logger_Adapter, notice);
PHP_METHOD(Vof_Logger_Adapter, warning);
PHP_METHOD(Vof_Logger_Adapter, alert);
PHP_METHOD(Vof_Logger_Adapter, log);
zend_object *zephir_init_properties_Vof_Logger_Adapter(zend_class_entry *class_type TSRMLS_DC);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_setloglevel, 0, 0, 1)
	ZEND_ARG_INFO(0, level)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_setformatter, 0, 0, 1)
	ZEND_ARG_OBJ_INFO(0, formatter, Vof\\Logger\\FormatterInterface, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_critical, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_emergency, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_debug, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_error, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_info, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_notice, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_warning, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_alert, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_log, 0, 0, 1)
	ZEND_ARG_INFO(0, type)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_ARRAY_INFO(0, context, 1)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_logger_adapter_method_entry) {
	PHP_ME(Vof_Logger_Adapter, setLogLevel, arginfo_vof_logger_adapter_setloglevel, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, getLogLevel, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, setFormatter, arginfo_vof_logger_adapter_setformatter, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, begin, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, commit, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, rollback, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, isTransaction, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, critical, arginfo_vof_logger_adapter_critical, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, emergency, arginfo_vof_logger_adapter_emergency, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, debug, arginfo_vof_logger_adapter_debug, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, error, arginfo_vof_logger_adapter_error, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, info, arginfo_vof_logger_adapter_info, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, notice, arginfo_vof_logger_adapter_notice, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, warning, arginfo_vof_logger_adapter_warning, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, alert, arginfo_vof_logger_adapter_alert, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter, log, arginfo_vof_logger_adapter_log, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
