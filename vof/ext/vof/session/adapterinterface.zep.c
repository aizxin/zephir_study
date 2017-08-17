
#ifdef HAVE_CONFIG_H
#include "../../ext_config.h"
#endif

#include <php.h>
#include "../../php_ext.h"
#include "../../ext.h"

#include <Zend/zend_exceptions.h>

#include "kernel/main.h"


/**
 * Vof\Session\AdapterInterface
 *
 * Interface for Vof\Session adapters
 */
ZEPHIR_INIT_CLASS(Vof_Session_AdapterInterface) {

	ZEPHIR_REGISTER_INTERFACE(Vof\\Session, AdapterInterface, vof, session_adapterinterface, vof_session_adapterinterface_method_entry);

	return SUCCESS;

}

/**
 * Starts session, optionally using an adapter
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, start);

/**
 * Sets session options
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, setOptions);

/**
 * Get internal options
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, getOptions);

/**
 * Gets a session variable from an application context
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, get);

/**
 * Sets a session variable in an application context
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, set);

/**
 * Check whether a session variable is set in an application context
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, has);

/**
 * Removes a session variable from an application context
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, remove);

/**
 * Returns active session id
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, getId);

/**
 * Check whether the session has been started
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, isStarted);

/**
 * Destroys the active session
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, destroy);

/**
 * Regenerate session's id
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, regenerateId);

/**
 * Set session name
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, setName);

/**
 * Get session name
 */
ZEPHIR_DOC_METHOD(Vof_Session_AdapterInterface, getName);

