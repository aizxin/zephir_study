
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
#include "kernel/exception.h"
#include "kernel/object.h"
#include "kernel/memory.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"


/**
 * Vof\Cache\Multiple
 *
 * Allows to read to chained backend adapters writing to multiple backends
 *
 *<code>
 * use Vof\Cache\Frontend\Data as DataFrontend;
 * use Vof\Cache\Multiple;
 * use Vof\Cache\Backend\Apc as ApcCache;
 * use Vof\Cache\Backend\Memcache as MemcacheCache;
 * use Vof\Cache\Backend\File as FileCache;
 *
 * $ultraFastFrontend = new DataFrontend(
 *     [
 *         "lifetime" => 3600,
 *     ]
 * );
 *
 * $fastFrontend = new DataFrontend(
 *     [
 *         "lifetime" => 86400,
 *     ]
 * );
 *
 * $slowFrontend = new DataFrontend(
 *     [
 *         "lifetime" => 604800,
 *     ]
 * );
 *
 * //Backends are registered from the fastest to the slower
 * $cache = new Multiple(
 *     [
 *         new ApcCache(
 *             $ultraFastFrontend,
 *             [
 *                 "prefix" => "cache",
 *             ]
 *         ),
 *         new MemcacheCache(
 *             $fastFrontend,
 *             [
 *                 "prefix" => "cache",
 *                 "host"   => "localhost",
 *                 "port"   => "11211",
 *             ]
 *         ),
 *         new FileCache(
 *             $slowFrontend,
 *             [
 *                 "prefix"   => "cache",
 *                 "cacheDir" => "../app/cache/",
 *             ]
 *         ),
 *     ]
 * );
 *
 * //Save, saves in every backend
 * $cache->save("my-key", $data);
 *</code>
 */
ZEPHIR_INIT_CLASS(Vof_Cache_Multiple) {

	ZEPHIR_REGISTER_CLASS(Vof\\Cache, Multiple, vof, cache_multiple, vof_cache_multiple_method_entry, 0);

	zend_declare_property_null(vof_cache_multiple_ce, SL("_backends"), ZEND_ACC_PROTECTED TSRMLS_CC);

	return SUCCESS;

}

/**
 * Vof\Cache\Multiple constructor
 *
 * @param	Vof\Cache\BackendInterface[] backends
 */
PHP_METHOD(Vof_Cache_Multiple, __construct) {

	zval *backends = NULL, backends_sub, __$null;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&backends_sub);
	ZVAL_NULL(&__$null);

	zephir_fetch_params(0, 0, 1, &backends);

	if (!backends) {
		backends = &backends_sub;
		backends = &__$null;
	}


	if (Z_TYPE_P(backends) != IS_NULL) {
		if (Z_TYPE_P(backends) != IS_ARRAY) {
			ZEPHIR_THROW_EXCEPTION_DEBUG_STRW(vof_cache_exception_ce, "The backends must be an array", "vof/cache/multiple.zep", 100);
			return;
		}
		zephir_update_property_zval(this_ptr, SL("_backends"), backends);
	}

}

/**
 * Adds a backend
 */
PHP_METHOD(Vof_Cache_Multiple, push) {

	zval *backend, backend_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&backend_sub);

	zephir_fetch_params(0, 1, 0, &backend);



	zephir_update_property_array_append(this_ptr, SL("_backends"), backend TSRMLS_CC);
	RETURN_THISW();

}

/**
 * Returns a cached content reading the internal backends
 *
 * @param string|int keyName
 * @param int lifetime
 * @return mixed
 */
PHP_METHOD(Vof_Cache_Multiple, get) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *keyName, keyName_sub, *lifetime = NULL, lifetime_sub, __$null, backend, content, _0, *_1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&lifetime_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&backend);
	ZVAL_UNDEF(&content);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &keyName, &lifetime);

	if (!lifetime) {
		lifetime = &lifetime_sub;
		lifetime = &__$null;
	}


	zephir_read_property(&_0, this_ptr, SL("_backends"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "vof/cache/multiple.zep", 133);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_0), _1)
	{
		ZEPHIR_INIT_NVAR(&backend);
		ZVAL_COPY(&backend, _1);
		ZEPHIR_CALL_METHOD(&content, &backend, "get", NULL, 0, keyName, lifetime);
		zephir_check_call_status();
		if (Z_TYPE_P(&content) != IS_NULL) {
			RETURN_CCTOR(&content);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&backend);
	RETURN_MM_NULL();

}

/**
 * Starts every backend
 *
 * @param string|int keyName
 * @param int lifetime
 */
PHP_METHOD(Vof_Cache_Multiple, start) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *keyName, keyName_sub, *lifetime = NULL, lifetime_sub, __$null, backend, _0, *_1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&lifetime_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&backend);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &keyName, &lifetime);

	if (!lifetime) {
		lifetime = &lifetime_sub;
		lifetime = &__$null;
	}


	zephir_read_property(&_0, this_ptr, SL("_backends"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "vof/cache/multiple.zep", 149);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_0), _1)
	{
		ZEPHIR_INIT_NVAR(&backend);
		ZVAL_COPY(&backend, _1);
		ZEPHIR_CALL_METHOD(NULL, &backend, "start", NULL, 0, keyName, lifetime);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&backend);
	ZEPHIR_MM_RESTORE();

}

/**
 * Stores cached content into all backends and stops the frontend
 *
 * @param string keyName
 * @param string content
 * @param int lifetime
 * @param boolean stopBuffer
 */
PHP_METHOD(Vof_Cache_Multiple, save) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *keyName = NULL, keyName_sub, *content = NULL, content_sub, *lifetime = NULL, lifetime_sub, *stopBuffer = NULL, stopBuffer_sub, __$null, backend, _0, *_1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&content_sub);
	ZVAL_UNDEF(&lifetime_sub);
	ZVAL_UNDEF(&stopBuffer_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&backend);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 4, &keyName, &content, &lifetime, &stopBuffer);

	if (!keyName) {
		keyName = &keyName_sub;
		keyName = &__$null;
	}
	if (!content) {
		content = &content_sub;
		content = &__$null;
	}
	if (!lifetime) {
		lifetime = &lifetime_sub;
		lifetime = &__$null;
	}
	if (!stopBuffer) {
		stopBuffer = &stopBuffer_sub;
		stopBuffer = &__$null;
	}


	zephir_read_property(&_0, this_ptr, SL("_backends"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "vof/cache/multiple.zep", 166);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_0), _1)
	{
		ZEPHIR_INIT_NVAR(&backend);
		ZVAL_COPY(&backend, _1);
		ZEPHIR_CALL_METHOD(NULL, &backend, "save", NULL, 0, keyName, content, lifetime, stopBuffer);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&backend);
	ZEPHIR_MM_RESTORE();

}

/**
 * Deletes a value from each backend
 *
 * @param string|int keyName
 * @return boolean
 */
PHP_METHOD(Vof_Cache_Multiple, delete) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *keyName, keyName_sub, backend, _0, *_1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&backend);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &keyName);



	zephir_read_property(&_0, this_ptr, SL("_backends"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "vof/cache/multiple.zep", 182);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_0), _1)
	{
		ZEPHIR_INIT_NVAR(&backend);
		ZVAL_COPY(&backend, _1);
		ZEPHIR_CALL_METHOD(NULL, &backend, "delete", NULL, 0, keyName);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&backend);
	RETURN_MM_BOOL(1);

}

/**
 * Checks if cache exists in at least one backend
 *
 * @param  string|int keyName
 * @param  int lifetime
 */
PHP_METHOD(Vof_Cache_Multiple, exists) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *keyName = NULL, keyName_sub, *lifetime = NULL, lifetime_sub, __$null, backend, _0, *_1, _2$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&lifetime_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&backend);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 2, &keyName, &lifetime);

	if (!keyName) {
		keyName = &keyName_sub;
		keyName = &__$null;
	}
	if (!lifetime) {
		lifetime = &lifetime_sub;
		lifetime = &__$null;
	}


	zephir_read_property(&_0, this_ptr, SL("_backends"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "vof/cache/multiple.zep", 201);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_0), _1)
	{
		ZEPHIR_INIT_NVAR(&backend);
		ZVAL_COPY(&backend, _1);
		ZEPHIR_CALL_METHOD(&_2$$3, &backend, "exists", NULL, 0, keyName, lifetime);
		zephir_check_call_status();
		if (ZEPHIR_IS_TRUE(&_2$$3)) {
			RETURN_MM_BOOL(1);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&backend);
	RETURN_MM_BOOL(0);

}

/**
 * Flush all backend(s)
 */
PHP_METHOD(Vof_Cache_Multiple, flush) {

	zval backend, _0, *_1;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&backend);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("_backends"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "vof/cache/multiple.zep", 215);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_0), _1)
	{
		ZEPHIR_INIT_NVAR(&backend);
		ZVAL_COPY(&backend, _1);
		ZEPHIR_CALL_METHOD(NULL, &backend, "flush", NULL, 0);
		zephir_check_call_status();
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&backend);
	RETURN_MM_BOOL(1);

}

