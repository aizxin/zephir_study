
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_exceptions.h>

#include "kernel/main.h"


/**
 * Vof\Logger\AdapterInterface
 *
 * Interface for Vof\Logger adapters
 */
ZEPHIR_INIT_CLASS(Vof_Logger_AdapterInterface) {

	ZEPHIR_REGISTER_INTERFACE(Vof\\Logger, AdapterInterface, vof, logger_adapterinterface, vof_logger_adapterinterface_method_entry);

	return SUCCESS;

}

/**
 * Sets the message formatter
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, setFormatter);

/**
 * Returns the internal formatter
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, getFormatter);

/**
 * Filters the logs sent to the handlers to be greater or equals than a specific level
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, setLogLevel);

/**
 * Returns the current log level
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, getLogLevel);

/**
 * Sends/Writes messages to the file log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, log);

/**
 * Starts a transaction
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, begin);

/**
 * Commits the internal transaction
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, commit);

/**
 * Rollbacks the internal transaction
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, rollback);

/**
 * Closes the logger
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, close);

/**
 * Sends/Writes a debug message to the log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, debug);

/**
 * Sends/Writes an error message to the log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, error);

/**
 * Sends/Writes an info message to the log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, info);

/**
 * Sends/Writes a notice message to the log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, notice);

/**
 * Sends/Writes a warning message to the log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, warning);

/**
 * Sends/Writes an alert message to the log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, alert);

/**
 * Sends/Writes an emergency message to the log
 */
ZEPHIR_DOC_METHOD(Vof_Logger_AdapterInterface, emergency);

