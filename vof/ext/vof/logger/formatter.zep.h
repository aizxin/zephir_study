
extern zend_class_entry *vof_logger_formatter_ce;

ZEPHIR_INIT_CLASS(Vof_Logger_Formatter);

PHP_METHOD(Vof_Logger_Formatter, getTypeString);
PHP_METHOD(Vof_Logger_Formatter, interpolate);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_formatter_gettypestring, 0, 0, 1)
	ZEND_ARG_INFO(0, type)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_formatter_interpolate, 0, 0, 1)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_INFO(0, context)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_logger_formatter_method_entry) {
	PHP_ME(Vof_Logger_Formatter, getTypeString, arginfo_vof_logger_formatter_gettypestring, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Logger_Formatter, interpolate, arginfo_vof_logger_formatter_interpolate, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
