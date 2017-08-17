
extern zend_class_entry *tool_vars_ce;

ZEPHIR_INIT_CLASS(Tool_Vars);

PHP_METHOD(Tool_Vars, testVarDump);
PHP_METHOD(Tool_Vars, testVarDump2);
PHP_METHOD(Tool_Vars, testVarExport);

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_vars_testvardump2, 0, 0, 1)
	ZEND_ARG_INFO(0, ret)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(tool_vars_method_entry) {
	PHP_ME(Tool_Vars, testVarDump, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Vars, testVarDump2, arginfo_tool_vars_testvardump2, ZEND_ACC_PUBLIC)
	PHP_ME(Tool_Vars, testVarExport, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
