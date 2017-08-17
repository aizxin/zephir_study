
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
 * Phalcon\Cache\Exception
 *
 * Exceptions thrown in Phalcon\Cache will use this class
 *
 */
ZEPHIR_INIT_CLASS(Vof_Cache_Exception) {

	ZEPHIR_REGISTER_CLASS_EX(Vof\\Cache, Exception, vof, cache_exception, zend_exception_get_default(TSRMLS_C), NULL, 0);

	return SUCCESS;

}

