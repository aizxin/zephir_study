
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/variables.h"
#include "kernel/operators.h"


ZEPHIR_INIT_CLASS(Tool_Vars) {

	ZEPHIR_REGISTER_CLASS(Tool, Vars, tool, vars, tool_vars_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Tool_Vars, testVarDump) {

	zval __$false, a, ar, _0;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&a);
	ZVAL_UNDEF(&ar);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&a);
	ZVAL_STRING(&a, "hello");
	ZEPHIR_INIT_VAR(&ar);
	zephir_create_array(&ar, 3, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_0);
	ZVAL_LONG(&_0, 1);
	zephir_array_fast_append(&ar, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "world");
	zephir_array_fast_append(&ar, &_0);
	zephir_array_fast_append(&ar, &__$false);
	zephir_var_dump(&ar TSRMLS_CC);
	zephir_var_dump(&a TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Tool_Vars, testVarDump2) {

	zval *ret, ret_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&ret_sub);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &ret);



	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_BOOL(&_0, ZEPHIR_IS_LONG(ret, 1));
	zephir_var_dump(&_0 TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Tool_Vars, testVarExport) {

	zval __$false, a, ar, ret, _0, _1, _2;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&a);
	ZVAL_UNDEF(&ar);
	ZVAL_UNDEF(&ret);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&a);
	ZVAL_STRING(&a, "hello");
	ZEPHIR_INIT_VAR(&ar);
	zephir_create_array(&ar, 3, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_0);
	ZVAL_LONG(&_0, 1);
	zephir_array_fast_append(&ar, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "world");
	zephir_array_fast_append(&ar, &_0);
	zephir_array_fast_append(&ar, &__$false);
	ZEPHIR_INIT_VAR(&_1);
	ZEPHIR_CPY_WRT(&_1, &ar);
	zephir_var_export(&_1 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&ret);
	zephir_var_export_ex(&ret, &ar TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_2);
	ZEPHIR_CPY_WRT(&_2, &a);
	zephir_var_export(&_2 TSRMLS_CC);
	ZEPHIR_INIT_NVAR(&ret);
	zephir_var_export_ex(&ret, &a TSRMLS_CC);
	RETURN_CCTOR(&ret);

}

