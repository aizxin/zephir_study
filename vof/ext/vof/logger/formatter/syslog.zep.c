
#ifdef HAVE_CONFIG_H
#include "../../../ext_config.h"
#endif

#include <php.h>
#include "../../../php_ext.h"
#include "../../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/array.h"
#include "kernel/operators.h"


/**
 * Vof\Logger\Formatter\Syslog
 *
 * Prepares a message to be used in a Syslog backend
 */
ZEPHIR_INIT_CLASS(Vof_Logger_Formatter_Syslog) {

	ZEPHIR_REGISTER_CLASS_EX(Vof\\Logger\\Formatter, Syslog, vof, logger_formatter_syslog, vof_logger_formatter_ce, vof_logger_formatter_syslog_method_entry, 0);

	return SUCCESS;

}

/**
 * Applies a format to a message before sent it to the internal log
 *
 * @param string message
 * @param int type
 * @param int timestamp
 * @param array context
 * @return array
 */
PHP_METHOD(Vof_Logger_Formatter_Syslog, format) {

	zend_long type, timestamp, ZEPHIR_LAST_CALL_STATUS;
	zval *message = NULL, message_sub, *type_param = NULL, *timestamp_param = NULL, *context = NULL, context_sub, __$null, _0$$3, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&message_sub);
	ZVAL_UNDEF(&context_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 1, &message, &type_param, &timestamp_param, &context);

	ZEPHIR_SEPARATE_PARAM(message);
	type = zephir_get_intval(type_param);
	timestamp = zephir_get_intval(timestamp_param);
	if (!context) {
		context = &context_sub;
		context = &__$null;
	}


	if (Z_TYPE_P(context) == IS_ARRAY) {
		ZEPHIR_CALL_METHOD(&_0$$3, this_ptr, "interpolate", NULL, 0, message, context);
		zephir_check_call_status();
		ZEPHIR_CPY_WRT(message, &_0$$3);
	}
	zephir_create_array(return_value, 2, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_LONG(&_1, type);
	zephir_array_fast_append(return_value, &_1);
	zephir_array_fast_append(return_value, message);
	RETURN_MM();

}

