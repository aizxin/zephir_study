
extern zend_class_entry *vof_logger_formatterinterface_ce;

ZEPHIR_INIT_CLASS(Vof_Logger_FormatterInterface);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_logger_formatterinterface_format, 0, 0, 3)
	ZEND_ARG_INFO(0, message)
	ZEND_ARG_INFO(0, type)
	ZEND_ARG_INFO(0, timestamp)
	ZEND_ARG_INFO(0, context)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_logger_formatterinterface_method_entry) {
	PHP_ABSTRACT_ME(Vof_Logger_FormatterInterface, format, arginfo_vof_logger_formatterinterface_format)
	PHP_FE_END
};
