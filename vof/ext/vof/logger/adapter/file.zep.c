
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
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/array.h"
#include "kernel/string.h"
#include "kernel/exception.h"
#include "kernel/operators.h"
#include "kernel/fcall.h"
#include "kernel/concat.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/file.h"


/**
 * Vof\Logger\Adapter\File
 *
 * Adapter to store logs in plain text files
 *
 *<code>
 * $logger = new \Vof\Logger\Adapter\File("app/logs/test.log");
 *
 * $logger->log("This is a message");
 * $logger->log(\Vof\Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 *
 * $logger->close();
 *</code>
 */
ZEPHIR_INIT_CLASS(Vof_Logger_Adapter_File) {

	ZEPHIR_REGISTER_CLASS_EX(Vof\\Logger\\Adapter, File, vof, logger_adapter_file, vof_logger_adapter_ce, vof_logger_adapter_file_method_entry, 0);

	/**
	 * File handler resource
	 *
	 * @var resource
	 */
	zend_declare_property_null(vof_logger_adapter_file_ce, SL("_fileHandler"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * File Path
	 */
	zend_declare_property_null(vof_logger_adapter_file_ce, SL("_path"), ZEND_ACC_PROTECTED TSRMLS_CC);

	/**
	 * Path options
	 */
	zend_declare_property_null(vof_logger_adapter_file_ce, SL("_options"), ZEND_ACC_PROTECTED TSRMLS_CC);

	return SUCCESS;

}

/**
 * File Path
 */
PHP_METHOD(Vof_Logger_Adapter_File, getPath) {

	zval *this_ptr = getThis();


	RETURN_MEMBER(getThis(), "_path");

}

/**
 * Vof\Logger\Adapter\File constructor
 *
 * @param string name
 * @param array options
 */
PHP_METHOD(Vof_Logger_Adapter_File, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *name_param = NULL, *options = NULL, options_sub, __$null, mode, handler, _0$$7;
	zval name, _1$$7;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&name);
	ZVAL_UNDEF(&_1$$7);
	ZVAL_UNDEF(&options_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&mode);
	ZVAL_UNDEF(&handler);
	ZVAL_UNDEF(&_0$$7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &name_param, &options);

	if (UNEXPECTED(Z_TYPE_P(name_param) != IS_STRING && Z_TYPE_P(name_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'name' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(name_param) == IS_STRING)) {
		zephir_get_strval(&name, name_param);
	} else {
		ZEPHIR_INIT_VAR(&name);
		ZVAL_EMPTY_STRING(&name);
	}
	if (!options) {
		options = &options_sub;
		options = &__$null;
	}


	ZEPHIR_INIT_VAR(&mode);
	ZVAL_NULL(&mode);
	if (Z_TYPE_P(options) == IS_ARRAY) {
		ZEPHIR_OBS_NVAR(&mode);
		if (zephir_array_isset_string_fetch(&mode, options, SL("mode"), 0)) {
			if (zephir_memnstr_str(&mode, SL("r"), "vof/logger/adapter/file.zep", 74)) {
				ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_logger_exception_ce, "Logger must be opened in append or write mode", "vof/logger/adapter/file.zep", 75);
				return;
			}
		}
	}
	if (Z_TYPE_P(&mode) == IS_NULL) {
		ZEPHIR_INIT_NVAR(&mode);
		ZVAL_STRING(&mode, "ab");
	}
	ZEPHIR_CALL_FUNCTION(&handler, "fopen", NULL, 39, &name, &mode);
	zephir_check_call_status();
	if (Z_TYPE_P(&handler) != IS_RESOURCE) {
		ZEPHIR_INIT_VAR(&_0$$7);
		object_init_ex(&_0$$7, vof_logger_exception_ce);
		ZEPHIR_INIT_VAR(&_1$$7);
		ZEPHIR_CONCAT_SVS(&_1$$7, "Can't open log file at '", &name, "'");
		ZEPHIR_CALL_METHOD(NULL, &_0$$7, "__construct", NULL, 19, &_1$$7);
		zephir_check_call_status();
		zephir_throw_exception_debug(&_0$$7, "vof/logger/adapter/file.zep", 89 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	zephir_update_property_zval(this_ptr, SL("_path"), &name);
	zephir_update_property_zval(this_ptr, SL("_options"), options);
	zephir_update_property_zval(this_ptr, SL("_fileHandler"), &handler);
	ZEPHIR_MM_RESTORE();

}

/**
 * Returns the internal formatter
 */
PHP_METHOD(Vof_Logger_Adapter_File, getFormatter) {

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
		object_init_ex(&_1$$3, vof_logger_formatter_line_ce);
		ZEPHIR_CALL_METHOD(NULL, &_1$$3, "__construct", NULL, 40);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("_formatter"), &_1$$3);
	}
	RETURN_MM_MEMBER(getThis(), "_formatter");

}

/**
 * Writes the log to the file itself
 */
PHP_METHOD(Vof_Logger_Adapter_File, logInternal) {

	zval context;
	zend_long type, time, ZEPHIR_LAST_CALL_STATUS;
	zval *message_param = NULL, *type_param = NULL, *time_param = NULL, *context_param = NULL, fileHandler, _0, _1, _2, _3;
	zval message;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&message);
	ZVAL_UNDEF(&fileHandler);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&context);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 4, 0, &message_param, &type_param, &time_param, &context_param);

	zephir_get_strval(&message, message_param);
	type = zephir_get_intval(type_param);
	time = zephir_get_intval(time_param);
	zephir_get_arrval(&context, context_param);


	ZEPHIR_OBS_VAR(&fileHandler);
	zephir_read_property(&fileHandler, this_ptr, SL("_fileHandler"), PH_NOISY_CC);
	if (Z_TYPE_P(&fileHandler) != IS_RESOURCE) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_logger_exception_ce, "Cannot send message to the log because it is invalid", "vof/logger/adapter/file.zep", 118);
		return;
	}
	ZEPHIR_CALL_METHOD(&_0, this_ptr, "getformatter", NULL, 0);
	zephir_check_call_status();
	ZVAL_LONG(&_2, type);
	ZVAL_LONG(&_3, time);
	ZEPHIR_CALL_METHOD(&_1, &_0, "format", NULL, 0, &message, &_2, &_3, &context);
	zephir_check_call_status();
	zephir_fwrite(NULL, &fileHandler, &_1 TSRMLS_CC);
	ZEPHIR_MM_RESTORE();

}

/**
 * Closes the logger
 */
PHP_METHOD(Vof_Logger_Adapter_File, close) {

	zval _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);


	zephir_read_property(&_0, this_ptr, SL("_fileHandler"), PH_NOISY_CC | PH_READONLY);
	RETURN_BOOL(zephir_fclose(&_0 TSRMLS_CC));

}

/**
 * Opens the internal file handler after unserialization
 */
PHP_METHOD(Vof_Logger_Adapter_File, __wakeup) {

	zval path, mode, _0, _1;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&path);
	ZVAL_UNDEF(&mode);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();

	ZEPHIR_OBS_VAR(&path);
	zephir_read_property(&path, this_ptr, SL("_path"), PH_NOISY_CC);
	if (Z_TYPE_P(&path) != IS_STRING) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_logger_exception_ce, "Invalid data passed to Vof\\Logger\\Adapter\\File::__wakeup()", "vof/logger/adapter/file.zep", 141);
		return;
	}
	ZEPHIR_OBS_VAR(&mode);
	zephir_read_property(&_0, this_ptr, SL("_options"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string_fetch(&mode, &_0, SL("mode"), 0))) {
		ZEPHIR_INIT_NVAR(&mode);
		ZVAL_STRING(&mode, "ab");
	}
	if (Z_TYPE_P(&mode) != IS_STRING) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_logger_exception_ce, "Invalid data passed to Vof\\Logger\\Adapter\\File::__wakeup()", "vof/logger/adapter/file.zep", 149);
		return;
	}
	if (zephir_memnstr_str(&mode, SL("r"), "vof/logger/adapter/file.zep", 152)) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_logger_exception_ce, "Logger must be opened in append or write mode", "vof/logger/adapter/file.zep", 153);
		return;
	}
	ZEPHIR_CALL_FUNCTION(&_1, "fopen", NULL, 39, &path, &mode);
	zephir_check_call_status();
	zephir_update_property_zval(this_ptr, SL("_fileHandler"), &_1);
	ZEPHIR_MM_RESTORE();

}

