
extern zend_class_entry *vof_medoo_ce;

ZEPHIR_INIT_CLASS(Vof_Medoo);

PHP_METHOD(Vof_Medoo, __construct);
PHP_METHOD(Vof_Medoo, query);
PHP_METHOD(Vof_Medoo, exec);
PHP_METHOD(Vof_Medoo, generate);
PHP_METHOD(Vof_Medoo, quote);
PHP_METHOD(Vof_Medoo, select);
PHP_METHOD(Vof_Medoo, dataMap);
PHP_METHOD(Vof_Medoo, columnMap);
PHP_METHOD(Vof_Medoo, selectContext);
PHP_METHOD(Vof_Medoo, whereClause);
PHP_METHOD(Vof_Medoo, mapKey);
PHP_METHOD(Vof_Medoo, dataImplode);
PHP_METHOD(Vof_Medoo, fnQuote);
PHP_METHOD(Vof_Medoo, arrayQuote);
PHP_METHOD(Vof_Medoo, innerConjunct);
PHP_METHOD(Vof_Medoo, columnPush);
PHP_METHOD(Vof_Medoo, columnQuote);
PHP_METHOD(Vof_Medoo, tableQuote);
PHP_METHOD(Vof_Medoo, debug);
PHP_METHOD(Vof_Medoo, error);
PHP_METHOD(Vof_Medoo, last);
PHP_METHOD(Vof_Medoo, log);
PHP_METHOD(Vof_Medoo, info);
zend_object *zephir_init_properties_Vof_Medoo(zend_class_entry *class_type TSRMLS_DC);

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo___construct, 0, 0, 1)
	ZEND_ARG_ARRAY_INFO(0, options, 0)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_query, 0, 0, 1)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, map)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_exec, 0, 0, 2)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, map)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_generate, 0, 0, 2)
	ZEND_ARG_INFO(0, query)
	ZEND_ARG_INFO(0, map)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_quote, 0, 0, 1)
	ZEND_ARG_INFO(0, query)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_select, 0, 0, 2)
	ZEND_ARG_INFO(0, table)
	ZEND_ARG_INFO(0, join)
	ZEND_ARG_INFO(0, columns)
	ZEND_ARG_INFO(0, where)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_datamap, 0, 0, 4)
	ZEND_ARG_INFO(0, data)
	ZEND_ARG_INFO(0, columns)
	ZEND_ARG_INFO(0, column_map)
	ZEND_ARG_INFO(0, stack)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_columnmap, 0, 0, 2)
	ZEND_ARG_INFO(0, columns)
	ZEND_ARG_INFO(0, stack)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_selectcontext, 0, 0, 3)
	ZEND_ARG_INFO(0, table)
	ZEND_ARG_INFO(0, map)
	ZEND_ARG_INFO(0, join)
	ZEND_ARG_INFO(0, columns)
	ZEND_ARG_INFO(0, where)
	ZEND_ARG_INFO(0, column_fn)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_whereclause, 0, 0, 2)
	ZEND_ARG_INFO(0, where)
	ZEND_ARG_INFO(0, map)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_dataimplode, 0, 0, 2)
	ZEND_ARG_INFO(0, data)
	ZEND_ARG_INFO(0, conjunctor)
	ZEND_ARG_INFO(0, outer_conjunctor)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_fnquote, 0, 0, 2)
	ZEND_ARG_INFO(0, column)
	ZEND_ARG_INFO(0, str)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_arrayquote, 0, 0, 1)
	ZEND_ARG_INFO(0, array1)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_innerconjunct, 0, 0, 3)
	ZEND_ARG_INFO(0, data)
	ZEND_ARG_INFO(0, conjunctor)
	ZEND_ARG_INFO(0, outer_conjunctor)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_columnpush, 0, 0, 1)
	ZEND_ARG_INFO(0, columns)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_columnquote, 0, 0, 1)
	ZEND_ARG_INFO(0, str)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_vof_medoo_tablequote, 0, 0, 1)
	ZEND_ARG_INFO(0, table)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(vof_medoo_method_entry) {
	PHP_ME(Vof_Medoo, __construct, arginfo_vof_medoo___construct, ZEND_ACC_PUBLIC|ZEND_ACC_CTOR)
	PHP_ME(Vof_Medoo, query, arginfo_vof_medoo_query, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, exec, arginfo_vof_medoo_exec, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, generate, arginfo_vof_medoo_generate, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, quote, arginfo_vof_medoo_quote, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, select, arginfo_vof_medoo_select, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, dataMap, arginfo_vof_medoo_datamap, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, columnMap, arginfo_vof_medoo_columnmap, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, selectContext, arginfo_vof_medoo_selectcontext, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, whereClause, arginfo_vof_medoo_whereclause, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, mapKey, NULL, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, dataImplode, arginfo_vof_medoo_dataimplode, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, fnQuote, arginfo_vof_medoo_fnquote, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, arrayQuote, arginfo_vof_medoo_arrayquote, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, innerConjunct, arginfo_vof_medoo_innerconjunct, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, columnPush, arginfo_vof_medoo_columnpush, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, columnQuote, arginfo_vof_medoo_columnquote, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, tableQuote, arginfo_vof_medoo_tablequote, ZEND_ACC_PROTECTED)
	PHP_ME(Vof_Medoo, debug, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, error, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, last, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, log, NULL, ZEND_ACC_PUBLIC)
	PHP_ME(Vof_Medoo, info, NULL, ZEND_ACC_PUBLIC)
	PHP_FE_END
};
