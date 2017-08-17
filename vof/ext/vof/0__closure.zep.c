
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
#include "kernel/variables.h"
#include "kernel/array.h"
#include "kernel/operators.h"
#include "kernel/memory.h"


ZEPHIR_INIT_CLASS(vof_0__closure) {

	ZEPHIR_REGISTER_CLASS(vof, 0__closure, vof, 0__closure, vof_0__closure_method_entry, ZEND_ACC_FINAL_CLASS);

	return SUCCESS;

}

PHP_METHOD(vof_0__closure, __invoke) {

	zval *log, log_sub, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&log_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &log);

	ZEPHIR_SEPARATE_PARAM(log);


	zephir_var_dump(log TSRMLS_CC);
	zephir_array_fetch_long(&_0, log, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 406 TSRMLS_CC);
	zephir_array_fetch_long(&_1, log, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 406 TSRMLS_CC);
	zephir_add_function(return_value, &_0, &_1);
	RETURN_MM();

}

