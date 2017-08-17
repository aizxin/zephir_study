
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_exceptions.h>

#include "kernel/main.h"


/**
 * Vof\Logger\FormatterInterface
 *
 * This interface must be implemented by formatters in Vof\Logger
 */
ZEPHIR_INIT_CLASS(Vof_Logger_FormatterInterface) {

	ZEPHIR_REGISTER_INTERFACE(Vof\\Logger, FormatterInterface, vof, logger_formatterinterface, vof_logger_formatterinterface_method_entry);

	return SUCCESS;

}

/**
 * Applies a format to a message before sent it to the internal log
 *
 * @param string message
 * @param int type
 * @param int timestamp
 * @param array $context
 */
ZEPHIR_DOC_METHOD(Vof_Logger_FormatterInterface, format);

