
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
#include "kernel/operators.h"
#include "kernel/array.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/object.h"
#include "kernel/exception.h"


/**
 * Vof\Logger\Adapter\Syslog
 *
 * Sends logs to the system logger
 *
 * <code>
 * use Vof\Logger;
 * use Vof\Logger\Adapter\Syslog;
 *
 * // LOG_USER is the only valid log type under Windows operating systems
 * $logger = new Syslog(
 *     "ident",
 *     [
 *         "option"   => LOG_CONS | LOG_NDELAY | LOG_PID,
 *         "facility" => LOG_USER,
 *     ]
 * );
 *
 * $logger->log("This is a message");
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *</code>
 */
ZEPHIR_INIT_CLASS(Vof_Logger_Adapter_Syslog) {

	ZEPHIR_REGISTER_CLASS_EX(Vof\\Logger\\Adapter, Syslog, vof, logger_adapter_syslog, vof_logger_adapter_ce, vof_logger_adapter_syslog_method_entry, 0);

	zend_declare_property_bool(vof_logger_adapter_syslog_ce, SL("_opened"), 0, ZEND_ACC_PROTECTED TSRMLS_CC);

	return SUCCESS;

}

/**
 * Vof\Logger\Adapter\Syslog constructor
 *
 * @param string name
 * @param array options
 */
PHP_METHOD(Vof_Logger_Adapter_Syslog, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name, name_sub, *options = NULL, options_sub, __$true, __$false, __$null, option, facility;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name_sub);
	ZVAL_UNDEF(&options_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&option);
	ZVAL_UNDEF(&facility);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &name, &options);

	if (!options) {
		options = &options_sub;
		options = &__$null;
	}


	if (zephir_is_true(name)) {
		ZEPHIR_OBS_VAR(&option);
		if (!(zephir_array_isset_string_fetch(&option, options, SL("option"), 0))) {
			ZEPHIR_INIT_NVAR(&option);
			ZVAL_LONG(&option, 4);
		}
		ZEPHIR_OBS_VAR(&facility);
		if (!(zephir_array_isset_string_fetch(&facility, options, SL("facility"), 0))) {
			ZEPHIR_INIT_NVAR(&facility);
			ZVAL_LONG(&facility, 8);
		}
		ZEPHIR_CALL_FUNCTION(NULL, "openlog", NULL, 43, name, &option, &facility);
		zephir_check_call_status();
		if (1) {
			zephir_update_property_zval(this_ptr, SL("_opened"), &__$true);
		} else {
			zephir_update_property_zval(this_ptr, SL("_opened"), &__$false);
		}
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * Returns the internal formatter
 */
PHP_METHOD(Vof_Logger_Adapter_Syslog, getFormatter) {

	zval _0, _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$3);

	ZEPHIR_MM_GROW();

	ZEPHIR_OBS_VAR(&_0);
	zephir_read_property(&_0, this_ptr, SL("_formatter"), PH_NOISY_CC);
	if (Z_TYPE_P(&_0) != IS_OBJECT) {
		ZEPHIR_INIT_VAR(&_1$$3);
		object_init_ex(&_1$$3, vof_logger_formatter_syslog_ce);
		if (zephir_has_constructor(&_1$$3 TSRMLS_CC)) {
			ZEPHIR_CALL_METHOD(NULL, &_1$$3, "__construct", NULL, 0);
			zephir_check_call_status();
		}
		zephir_update_property_zval(this_ptr, SL("_formatter"), &_1$$3);
	}
	RETURN_MM_MEMBER(getThis(), "_formatter");

}

/**
 * Writes the log to the stream itself
 */
PHP_METHOD(Vof_Logger_Adapter_Syslog, logInternal) {

	zval context;
	zend_long type, time, ZEPHIR_LAST_CALL_STATUS;
	zval *message_param = NULL, *type_param = NULL, *time_param = NULL, *context_param = NULL, appliedFormat, _0, _1, _2, _3, _4;
	zval message;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&appliedFormat);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 4, 0, &message_param, &type_param, &time_param, &context_param);

	zephir_get_strval(&message, message_param);
	type = zephir_get_intval(type_param);
	time = zephir_get_intval(time_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_CALL_METHOD(&_0, this_ptr, "getformatter", NULL, 0);
	zephir_check_call_status();
	ZVAL_LONG(&_1, type);
	ZVAL_LONG(&_2, time);
	ZEPHIR_CALL_METHOD(&appliedFormat, &_0, "format", NULL, 0, &message, &_1, &_2, &context);
	zephir_check_call_status();
	if (Z_TYPE_P(&appliedFormat) != IS_ARRAY) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_logger_exception_ce, "The formatted message is not valid", "vof/logger/adapter/syslog.zep", 101);
		return;
	}
	zephir_array_fetch_long(&_3, &appliedFormat, 0, PH_NOISY | PH_READONLY, "vof/logger/adapter/syslog.zep", 104 TSRMLS_CC);
	zephir_array_fetch_long(&_4, &appliedFormat, 1, PH_NOISY | PH_READONLY, "vof/logger/adapter/syslog.zep", 104 TSRMLS_CC);
	ZEPHIR_CALL_FUNCTION(NULL, "syslog", NULL, 44, &_3, &_4);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

/**
 * Closes the logger
 */
PHP_METHOD(Vof_Logger_Adapter_Syslog, close) {

	zval _0;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("_opened"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_is_true(&_0))) {
		RETURN_MM_BOOL(1);
	}
	ZEPHIR_RETURN_CALL_FUNCTION("closelog", NULL, 45);
	zephir_check_call_status();
	RETURN_MM();

}

