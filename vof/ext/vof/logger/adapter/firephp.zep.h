
extern zend_class_entry *vof_logger_adapter_firephp_ce;

ZEPHIR_INIT_CLASS(Vof_Logger_Adapter_Firephp);

PHP_METHOD(Vof_Logger_Adapter_Firephp, getFormatter);
PHP_METHOD(Vof_Logger_Adapter_Firephp, logInternal);
PHP_METHOD(Vof_Logger_Adapter_Firephp, close);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_adapter_firephp_loginternal, 0, 0, 4)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_INFO(0, type)
	ZEND_ARG_INFO(0, time)
	ZEND_ARG_ARRAY_INFO(0, context, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_logger_adapter_firephp_method_entry) {
	PHP_ME(Vof_Logger_Adapter_Firephp, getFormatter, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter_Firephp, logInternal, arginfo_vof_logger_adapter_firephp_loginternal, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Adapter_Firephp, close, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
