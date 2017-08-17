
extern zend_class_entry *vof_logger_adapter_syslog_ce;

ZEPHIR_INIT_CLASS(Vof_Logger_Adapter_Syslog);

PHP_METHOD(Vof_Logger_Adapter_Syslog, __construct);
PHP_METHOD(Vof_Logger_Adapter_Syslog, getFormatter);
PHP_METHOD(Vof_Logger_Adapter_Syslog, logInternal);
PHP_METHOD(Vof_Logger_Adapter_Syslog, close);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_syslog___construct, 0, 0, 1)
	ZEND_ARG_INFO(0, name)
	ZEND_ARG_INFO(0, options)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_syslog_loginternal, 0, 0, 4)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_INFO(0, type)
	ZEND_ARG_INFO(0, time)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_logger_adapter_syslog_method_entry) {
	PHP_ME(Vof_Logger_Adapter_Syslog, __construct, arginfo_vof_logger_adapter_syslog___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Logger_Adapter_Syslog, getFormatter, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter_Syslog, logInternal, arginfo_vof_logger_adapter_syslog_loginternal, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter_Syslog, close, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
