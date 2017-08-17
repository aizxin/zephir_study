
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"


/**
 * Logger\Exception
 *
 * Exceptions thrown in Logger will use this class
 */
ZEPHIR_INIT_CLASS(Vof_Logger_Exception) {

	ZEPHIR_REGISTER_CLASS_EX(Vof\\Logger, Exception, vof, logger_exception, zend_exception_get_default(TSRMLS_C), NULL, 0);

	return SUCCESS;

}

