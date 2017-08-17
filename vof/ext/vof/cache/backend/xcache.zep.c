
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
#include "kernel/array.h"
#include "kernel/fcall.h"
#include "kernel/object.h"
#include "kernel/concat.h"
#include "kernel/operators.h"
#include "kernel/exception.h"
#include "kernel/string.h"


/**
 * Vof\Cache\Backend\Xcache
 *
 * Allows to cache output fragments, PHP data and raw data using an XCache backend
 *
 *<code>
 * use Vof\Cache\Backend\Xcache;
 * use Vof\Cache\Frontend\Data as FrontData;
 *
 * // Cache data for 2 days
 * $frontCache = new FrontData(
 *     [
 *        "lifetime" => 172800,
 *     ]
 * );
 *
 * $cache = new Xcache(
 *     $frontCache,
 *     [
 *         "prefix" => "app-data",
 *     ]
 * );
 *
 * // Cache arbitrary data
 * $cache->save("my-data", [1, 2, 3, 4, 5]);
 *
 * // Get data
 * $data = $cache->get("my-data");
 *</code>
 */
ZEPHIR_INIT_CLASS(Vof_Cache_Backend_Xcache) {

	ZEPHIR_REGISTER_CLASS_EX(Vof\\Cache\\Backend, Xcache, vof, cache_backend_xcache, vof_cache_backend_ce, vof_cache_backend_xcache_method_entry, 0);

	return SUCCESS;

}

/**
 * Vof\Cache\Backend\Xcache constructor
 *
 * @param \Vof\Cache\FrontendInterface frontend
 * @param array options
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, __construct) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_1 = NULL;
	zval *frontend, frontend_sub, *options = NULL, options_sub, __$null, _0$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&frontend_sub);
	ZVAL_UNDEF(&options_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&_0$$4);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &frontend, &options);

	if (!options) {
		options = &options_sub;
		ZEPHIR_CPY_WRT(options, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(options);
	}


	if (Z_TYPE_P(options) != IS_ARRAY) {
		ZEPHIR_INIT_NVAR(options);
		array_init(options);
	}
	if (!(zephir_array_isset_string(options, SL("statsKey")))) {
		ZEPHIR_INIT_VAR(&_0$$4);
		ZVAL_STRING(&_0$$4, "");
		zephir_array_update_string(options, SL("statsKey"), &_0$$4, PH_COPY | PH_SEPARATE);
	}
	ZEPHIR_CALL_PARENT(NULL, vof_cache_backend_xcache_ce, getThis(), "__construct", &_1, 0, frontend, options);
	zephir_check_call_status();
	ZEPHIR_MM_RESTORE();

}

/**
 * Returns a cached content
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, get) {

	zend_long lifetime, ZEPHIR_LAST_CALL_STATUS;
	zval *keyName_param = NULL, *lifetime_param = NULL, frontend, prefixedKey, cachedContent, _0;
	zval keyName;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName);
	ZVAL_UNDEF(&frontend);
	ZVAL_UNDEF(&prefixedKey);
	ZVAL_UNDEF(&cachedContent);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &keyName_param, &lifetime_param);

	zephir_get_strval(&keyName, keyName_param);
	if (!lifetime_param) {
		lifetime = 0;
	} else {
		lifetime = zephir_get_intval(lifetime_param);
	}


	ZEPHIR_OBS_VAR(&frontend);
	zephir_read_property(&frontend, this_ptr, SL("_frontend"), PH_NOISY_CC);
	zephir_read_property(&_0, this_ptr, SL("_prefix"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&prefixedKey);
	ZEPHIR_CONCAT_SVV(&prefixedKey, "_PHCX", &_0, &keyName);
	zephir_update_property_zval(this_ptr, SL("_lastKey"), &prefixedKey);
	ZEPHIR_CALL_FUNCTION(&cachedContent, "xcache_get", NULL, 24, &prefixedKey);
	zephir_check_call_status();
	if (!(zephir_is_true(&cachedContent))) {
		RETURN_MM_NULL();
	}
	if (zephir_is_numeric(&cachedContent)) {
		RETURN_CCTOR(&cachedContent);
	} else {
		ZEPHIR_RETURN_CALL_METHOD(&frontend, "afterretrieve", NULL, 0, &cachedContent);
		zephir_check_call_status();
		RETURN_MM();
	}

}

/**
 * Stores cached content into the file backend and stops the frontend
 *
 * @param int|string keyName
 * @param string content
 * @param int lifetime
 * @param boolean stopBuffer
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, save) {

	zephir_fcall_cache_entry *_1 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zend_bool stopBuffer;
	zval *keyName = NULL, keyName_sub, *content = NULL, content_sub, *lifetime = NULL, lifetime_sub, *stopBuffer_param = NULL, __$true, __$false, __$null, lastKey, frontend, cachedContent, preparedContent, tmp, tt1, success, isBuffering, options, keys, specialKey, _0$$4, _2$$17;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&content_sub);
	ZVAL_UNDEF(&lifetime_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&lastKey);
	ZVAL_UNDEF(&frontend);
	ZVAL_UNDEF(&cachedContent);
	ZVAL_UNDEF(&preparedContent);
	ZVAL_UNDEF(&tmp);
	ZVAL_UNDEF(&tt1);
	ZVAL_UNDEF(&success);
	ZVAL_UNDEF(&isBuffering);
	ZVAL_UNDEF(&options);
	ZVAL_UNDEF(&keys);
	ZVAL_UNDEF(&specialKey);
	ZVAL_UNDEF(&_0$$4);
	ZVAL_UNDEF(&_2$$17);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 4, &keyName, &content, &lifetime, &stopBuffer_param);

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
	if (!stopBuffer_param) {
		stopBuffer = 1;
	} else {
		stopBuffer = zephir_get_boolval(stopBuffer_param);
	}


	if (Z_TYPE_P(keyName) == IS_NULL) {
		ZEPHIR_OBS_VAR(&lastKey);
		zephir_read_property(&lastKey, this_ptr, SL("_lastKey"), PH_NOISY_CC);
	} else {
		zephir_read_property(&_0$$4, this_ptr, SL("_prefix"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_NVAR(&lastKey);
		ZEPHIR_CONCAT_SVV(&lastKey, "_PHCX", &_0$$4, keyName);
		zephir_update_property_zval(this_ptr, SL("_lastKey"), &lastKey);
	}
	if (!(zephir_is_true(&lastKey))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Cache must be started first", "vof/cache/backend/xcache.zep", 123);
		return;
	}
	ZEPHIR_OBS_VAR(&frontend);
	zephir_read_property(&frontend, this_ptr, SL("_frontend"), PH_NOISY_CC);
	if (Z_TYPE_P(content) == IS_NULL) {
		ZEPHIR_CALL_METHOD(&cachedContent, &frontend, "getcontent", NULL, 0);
		zephir_check_call_status();
	} else {
		ZEPHIR_CPY_WRT(&cachedContent, content);
	}
	if (!(zephir_is_numeric(&cachedContent))) {
		ZEPHIR_CALL_METHOD(&preparedContent, &frontend, "beforestore", NULL, 0, &cachedContent);
		zephir_check_call_status();
	} else {
		ZEPHIR_CPY_WRT(&preparedContent, &cachedContent);
	}
	if (Z_TYPE_P(lifetime) == IS_NULL) {
		ZEPHIR_OBS_VAR(&tmp);
		zephir_read_property(&tmp, this_ptr, SL("_lastLifetime"), PH_NOISY_CC);
		if (!(zephir_is_true(&tmp))) {
			ZEPHIR_CALL_METHOD(&tt1, &frontend, "getlifetime", NULL, 0);
			zephir_check_call_status();
		} else {
			ZEPHIR_CPY_WRT(&tt1, &tmp);
		}
	} else {
		ZEPHIR_CPY_WRT(&tt1, lifetime);
	}
	ZEPHIR_CALL_FUNCTION(&success, "xcache_set", &_1, 25, &lastKey, &preparedContent, &tt1);
	zephir_check_call_status();
	if (!(zephir_is_true(&success))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Failed storing the data in xcache", "vof/cache/backend/xcache.zep", 156);
		return;
	}
	ZEPHIR_CALL_METHOD(&isBuffering, &frontend, "isbuffering", NULL, 0);
	zephir_check_call_status();
	if (stopBuffer == 1) {
		ZEPHIR_CALL_METHOD(NULL, &frontend, "stop", NULL, 0);
		zephir_check_call_status();
	}
	if (ZEPHIR_IS_TRUE_IDENTICAL(&isBuffering)) {
		zend_print_zval(&cachedContent, 0);
	}
	if (0) {
		zephir_update_property_zval(this_ptr, SL("_started"), &__$true);
	} else {
		zephir_update_property_zval(this_ptr, SL("_started"), &__$false);
	}
	if (zephir_is_true(&success)) {
		ZEPHIR_OBS_VAR(&options);
		zephir_read_property(&options, this_ptr, SL("_options"), PH_NOISY_CC);
		ZEPHIR_OBS_VAR(&specialKey);
		zephir_read_property(&_2$$17, this_ptr, SL("_options"), PH_NOISY_CC | PH_READONLY);
		if (!(zephir_array_isset_string_fetch(&specialKey, &_2$$17, SL("statsKey"), 0))) {
			ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Unexpected inconsistency in options", "vof/cache/backend/xcache.zep", 175);
			return;
		}
		if (!ZEPHIR_IS_STRING(&specialKey, "")) {
			ZEPHIR_CALL_FUNCTION(&keys, "xcache_get", NULL, 24, &specialKey);
			zephir_check_call_status();
			if (Z_TYPE_P(&keys) != IS_ARRAY) {
				ZEPHIR_INIT_NVAR(&keys);
				array_init(&keys);
			}
			zephir_array_update_zval(&keys, &lastKey, &tt1, PH_COPY | PH_SEPARATE);
			ZEPHIR_CALL_FUNCTION(NULL, "xcache_set", &_1, 25, &specialKey, &keys);
			zephir_check_call_status();
		}
	}
	RETURN_CCTOR(&success);

}

/**
 * Deletes a value from the cache by its key
 *
 * @param int|string keyName
 * @return boolean
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, delete) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *keyName, keyName_sub, prefixedKey, specialKey, keys, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&prefixedKey);
	ZVAL_UNDEF(&specialKey);
	ZVAL_UNDEF(&keys);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &keyName);



	zephir_read_property(&_0, this_ptr, SL("_prefix"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_VAR(&prefixedKey);
	ZEPHIR_CONCAT_SVV(&prefixedKey, "_PHCX", &_0, keyName);
	ZEPHIR_OBS_VAR(&specialKey);
	zephir_read_property(&_1, this_ptr, SL("_options"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string_fetch(&specialKey, &_1, SL("statsKey"), 0))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Unexpected inconsistency in options", "vof/cache/backend/xcache.zep", 209);
		return;
	}
	if (!ZEPHIR_IS_STRING(&specialKey, "")) {
		ZEPHIR_CALL_FUNCTION(&keys, "xcache_get", NULL, 24, &specialKey);
		zephir_check_call_status();
		if (Z_TYPE_P(&keys) != IS_ARRAY) {
			ZEPHIR_INIT_NVAR(&keys);
			array_init(&keys);
		}
		zephir_array_unset(&keys, &prefixedKey, PH_SEPARATE);
		ZEPHIR_CALL_FUNCTION(NULL, "xcache_set", NULL, 25, &specialKey, &keys);
		zephir_check_call_status();
	}
	ZEPHIR_MM_RESTORE();

}

/**
 * Query the existing cached keys.
 *
 * <code>
 * $cache->save("users-ids", [1, 2, 3]);
 * $cache->save("projects-ids", [4, 5, 6]);
 *
 * var_dump($cache->queryKeys("users")); // ["users-ids"]
 * </code>
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, queryKeys) {

	zend_string *_5;
	zend_ulong _4;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *prefix_param = NULL, options, prefixed, specialKey, keys, retval, key, realKey, _1, _2, *_3, _6$$9;
	zval prefix, _0$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&prefix);
	ZVAL_UNDEF(&_0$$4);
	ZVAL_UNDEF(&options);
	ZVAL_UNDEF(&prefixed);
	ZVAL_UNDEF(&specialKey);
	ZVAL_UNDEF(&keys);
	ZVAL_UNDEF(&retval);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&realKey);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_6$$9);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &prefix_param);

	if (!prefix_param) {
		ZEPHIR_INIT_VAR(&prefix);
		ZVAL_STRING(&prefix, "");
	} else {
		zephir_get_strval(&prefix, prefix_param);
	}


	ZEPHIR_INIT_VAR(&prefixed);
	if (!(!(Z_TYPE_P(&prefix) == IS_UNDEF) && Z_STRLEN_P(&prefix))) {
		ZVAL_STRING(&prefixed, "_PHCX");
	} else {
		ZEPHIR_INIT_VAR(&_0$$4);
		ZEPHIR_CONCAT_SV(&_0$$4, "_PHCX", &prefix);
		ZEPHIR_CPY_WRT(&prefixed, &_0$$4);
	}
	ZEPHIR_OBS_VAR(&options);
	zephir_read_property(&options, this_ptr, SL("_options"), PH_NOISY_CC);
	ZEPHIR_OBS_VAR(&specialKey);
	zephir_read_property(&_1, this_ptr, SL("_options"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string_fetch(&specialKey, &_1, SL("statsKey"), 0))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Unexpected inconsistency in options", "vof/cache/backend/xcache.zep", 247);
		return;
	}
	if (ZEPHIR_IS_STRING(&specialKey, "")) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Cached keys need to be enabled to use this function (options['statsKey'] == '_PHCX')!", "vof/cache/backend/xcache.zep", 251);
		return;
	}
	ZEPHIR_CALL_FUNCTION(&keys, "xcache_get", NULL, 24, &specialKey);
	zephir_check_call_status();
	if (Z_TYPE_P(&keys) != IS_ARRAY) {
		array_init(return_value);
		RETURN_MM();
	}
	ZEPHIR_INIT_VAR(&retval);
	array_init(&retval);
	ZEPHIR_INIT_VAR(&_2);
	zephir_is_iterable(&keys, 0, "vof/cache/backend/xcache.zep", 272);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&keys), _4, _5, _3)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_5 != NULL) { 
			ZVAL_STR_COPY(&key, _5);
		} else {
			ZVAL_LONG(&key, _4);
		}
		ZEPHIR_INIT_NVAR(&_2);
		ZVAL_COPY(&_2, _3);
		if (zephir_start_with(&key, &prefixed, NULL)) {
			ZVAL_LONG(&_6$$9, 5);
			ZEPHIR_INIT_NVAR(&realKey);
			zephir_substr(&realKey, &key, 5 , 0, ZEPHIR_SUBSTR_NO_LENGTH);
			zephir_array_append(&retval, &realKey, PH_SEPARATE, "vof/cache/backend/xcache.zep", 268);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&_2);
	ZEPHIR_INIT_NVAR(&key);
	RETURN_CCTOR(&retval);

}

/**
 * Checks if cache exists and it isn't expired
 *
 * @param string keyName
 * @param int lifetime
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, exists) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *keyName = NULL, keyName_sub, *lifetime = NULL, lifetime_sub, __$null, lastKey, _0$$4;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&lifetime_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&lastKey);
	ZVAL_UNDEF(&_0$$4);

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


	if (!(zephir_is_true(keyName))) {
		ZEPHIR_OBS_VAR(&lastKey);
		zephir_read_property(&lastKey, this_ptr, SL("_lastKey"), PH_NOISY_CC);
	} else {
		zephir_read_property(&_0$$4, this_ptr, SL("_prefix"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_NVAR(&lastKey);
		ZEPHIR_CONCAT_SVV(&lastKey, "_PHCX", &_0$$4, keyName);
	}
	if (zephir_is_true(&lastKey)) {
		ZEPHIR_RETURN_CALL_FUNCTION("xcache_isset", NULL, 26, &lastKey);
		zephir_check_call_status();
		RETURN_MM();
	}
	RETURN_MM_BOOL(0);

}

/**
 * Atomic increment of a given key, by number $value
 *
 * @param string keyName
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, increment) {

	zend_long value, ZEPHIR_LAST_CALL_STATUS;
	zval *keyName, keyName_sub, *value_param = NULL, lastKey, newVal, origVal, _0$$4, _1$$6;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&lastKey);
	ZVAL_UNDEF(&newVal);
	ZVAL_UNDEF(&origVal);
	ZVAL_UNDEF(&_0$$4);
	ZVAL_UNDEF(&_1$$6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &keyName, &value_param);

	if (!value_param) {
		value = 1;
	} else {
		value = zephir_get_intval(value_param);
	}


	if (!(zephir_is_true(keyName))) {
		ZEPHIR_OBS_VAR(&lastKey);
		zephir_read_property(&lastKey, this_ptr, SL("_lastKey"), PH_NOISY_CC);
	} else {
		zephir_read_property(&_0$$4, this_ptr, SL("_prefix"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_NVAR(&lastKey);
		ZEPHIR_CONCAT_SVV(&lastKey, "_PHCX", &_0$$4, keyName);
	}
	if (!(zephir_is_true(&lastKey))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Cache must be started first", "vof/cache/backend/xcache.zep", 313);
		return;
	}
	if ((zephir_function_exists_ex(SL("xcache_inc") TSRMLS_CC) == SUCCESS)) {
		ZVAL_LONG(&_1$$6, value);
		ZEPHIR_CALL_FUNCTION(&newVal, "xcache_inc", NULL, 27, &lastKey, &_1$$6);
		zephir_check_call_status();
	} else {
		ZEPHIR_CALL_FUNCTION(&origVal, "xcache_get", NULL, 24, &lastKey);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&newVal);
		ZVAL_LONG(&newVal, (zephir_get_numberval(&origVal) - value));
		ZEPHIR_CALL_FUNCTION(NULL, "xcache_set", NULL, 25, &lastKey, &newVal);
		zephir_check_call_status();
	}
	RETURN_CCTOR(&newVal);

}

/**
 * Atomic decrement of a given key, by number $value
 *
 * @param string keyName
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, decrement) {

	zend_long value, ZEPHIR_LAST_CALL_STATUS;
	zval *keyName, keyName_sub, *value_param = NULL, lastKey, newVal, origVal, success, _0$$4, _1$$6;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&keyName_sub);
	ZVAL_UNDEF(&lastKey);
	ZVAL_UNDEF(&newVal);
	ZVAL_UNDEF(&origVal);
	ZVAL_UNDEF(&success);
	ZVAL_UNDEF(&_0$$4);
	ZVAL_UNDEF(&_1$$6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &keyName, &value_param);

	if (!value_param) {
		value = 1;
	} else {
		value = zephir_get_intval(value_param);
	}


	if (!(zephir_is_true(keyName))) {
		ZEPHIR_OBS_VAR(&lastKey);
		zephir_read_property(&lastKey, this_ptr, SL("_lastKey"), PH_NOISY_CC);
	} else {
		zephir_read_property(&_0$$4, this_ptr, SL("_prefix"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_NVAR(&lastKey);
		ZEPHIR_CONCAT_SVV(&lastKey, "_PHCX", &_0$$4, keyName);
	}
	if (!(zephir_is_true(&lastKey))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Cache must be started first", "vof/cache/backend/xcache.zep", 343);
		return;
	}
	if ((zephir_function_exists_ex(SL("xcache_dec") TSRMLS_CC) == SUCCESS)) {
		ZVAL_LONG(&_1$$6, value);
		ZEPHIR_CALL_FUNCTION(&newVal, "xcache_dec", NULL, 28, &lastKey, &_1$$6);
		zephir_check_call_status();
	} else {
		ZEPHIR_CALL_FUNCTION(&origVal, "xcache_get", NULL, 24, &lastKey);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&newVal);
		ZVAL_LONG(&newVal, (zephir_get_numberval(&origVal) - value));
		ZEPHIR_CALL_FUNCTION(&success, "xcache_set", NULL, 25, &lastKey, &newVal);
		zephir_check_call_status();
	}
	RETURN_CCTOR(&newVal);

}

/**
 * Immediately invalidates all existing items.
 */
PHP_METHOD(Vof_Cache_Backend_Xcache, flush) {

	zend_string *_4$$5;
	zend_ulong _3$$5;
	zval options, specialKey, keys, key, _0, _1$$5, *_2$$5;
	zephir_fcall_cache_entry *_5 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&options);
	ZVAL_UNDEF(&specialKey);
	ZVAL_UNDEF(&keys);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1$$5);

	ZEPHIR_MM_GROW();

	ZEPHIR_OBS_VAR(&options);
	zephir_read_property(&options, this_ptr, SL("_options"), PH_NOISY_CC);
	ZEPHIR_OBS_VAR(&specialKey);
	zephir_read_property(&_0, this_ptr, SL("_options"), PH_NOISY_CC | PH_READONLY);
	if (!(zephir_array_isset_string_fetch(&specialKey, &_0, SL("statsKey"), 0))) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Unexpected inconsistency in options", "vof/cache/backend/xcache.zep", 367);
		return;
	}
	if (ZEPHIR_IS_STRING(&specialKey, "")) {
		ZEPHIR_THROW_EXCEPTION_DEBUG_STR(vof_cache_exception_ce, "Cached keys need to be enabled to use this function (options['statsKey'] == '_PHCM')!", "vof/cache/backend/xcache.zep", 371);
		return;
	}
	ZEPHIR_CALL_FUNCTION(&keys, "xcache_get", NULL, 24, &specialKey);
	zephir_check_call_status();
	if (Z_TYPE_P(&keys) == IS_ARRAY) {
		ZEPHIR_INIT_VAR(&_1$$5);
		zephir_is_iterable(&keys, 1, "vof/cache/backend/xcache.zep", 381);
		ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&keys), _3$$5, _4$$5, _2$$5)
		{
			ZEPHIR_INIT_NVAR(&key);
			if (_4$$5 != NULL) { 
				ZVAL_STR_COPY(&key, _4$$5);
			} else {
				ZVAL_LONG(&key, _3$$5);
			}
			ZEPHIR_INIT_NVAR(&_1$$5);
			ZVAL_COPY(&_1$$5, _2$$5);
			zephir_array_unset(&keys, &key, PH_SEPARATE);
			ZEPHIR_CALL_FUNCTION(NULL, "xcache_unset", &_5, 29, &key);
			zephir_check_call_status();
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&_1$$5);
		ZEPHIR_INIT_NVAR(&key);
		ZEPHIR_CALL_FUNCTION(NULL, "xcache_set", NULL, 25, &specialKey, &keys);
		zephir_check_call_status();
	}
	RETURN_MM_BOOL(1);

}

