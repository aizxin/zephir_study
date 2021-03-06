
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


/**
 * Phalcon\Logger
 *
 * Phalcon\Logger is a component whose purpose is create logs using
 * different backends via adapters, generating options, formats and filters
 * also implementing transactions.
 *
 *<code>
 *	$logger = new \Phalcon\Logger\Adapter\File("app/logs/test.log");
 *	$logger->log("This is a message");
 *	$logger->log(\Phalcon\Logger::ERROR, "This is an error");
 *	$logger->error("This is another error");
 *</code>
 */
ZEPHIR_INIT_CLASS(Vof_Logger) {

	ZEPHIR_REGISTER_CLASS(Vof, Logger, vof, logger, NULL, ZEND_ACC_EXPLICIT_ABSTRACT_CLASS);

	zephir_declare_class_constant_long(vof_logger_ce, SL("SPECIAL"), 9);

	zephir_declare_class_constant_long(vof_logger_ce, SL("CUSTOM"), 8);

	zephir_declare_class_constant_long(vof_logger_ce, SL("DEBUG"), 7);

	zephir_declare_class_constant_long(vof_logger_ce, SL("INFO"), 6);

	zephir_declare_class_constant_long(vof_logger_ce, SL("NOTICE"), 5);

	zephir_declare_class_constant_long(vof_logger_ce, SL("WARNING"), 4);

	zephir_declare_class_constant_long(vof_logger_ce, SL("ERROR"), 3);

	zephir_declare_class_constant_long(vof_logger_ce, SL("ALERT"), 2);

	zephir_declare_class_constant_long(vof_logger_ce, SL("CRITICAL"), 1);

	zephir_declare_class_constant_long(vof_logger_ce, SL("EMERGENCE"), 0);

	zephir_declare_class_constant_long(vof_logger_ce, SL("EMERGENCY"), 0);

	return SUCCESS;

}

