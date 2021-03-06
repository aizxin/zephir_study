
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


/**
 * Vof\Cache\Frontend\None
 *
 * Discards any kind of frontend data input. This frontend does not have expiration time or any other options
 *
 *<code>
 *<?php
 *
 * //Create a None Cache
 * $frontCache = new \Vof\Cache\Frontend\None();
 *
 * // Create the component that will cache "Data" to a "Memcached" backend
 * // Memcached connection settings
 * $cache = new \Vof\Cache\Backend\Memcache(
 *     $frontCache,
 *     [
 *         "host" => "localhost",
 *         "port" => "11211",
 *     ]
 * );
 *
 * $cacheKey = "robots_order_id.cache";
 *
 * // This Frontend always return the data as it's returned by the backend
 * $robots = $cache->get($cacheKey);
 *
 * if ($robots === null) {
 *     // This cache doesn't perform any expiration checking, so the data is always expired
 *     // Make the database call and populate the variable
 *     $robots = Robots::find(
 *         [
 *             "order" => "id",
 *         ]
 *     );
 *
 *     $cache->save($cacheKey, $robots);
 * }
 *
 * // Use $robots :)
 * foreach ($robots as $robot) {
 *     echo $robot->name, "\n";
 * }
 *</code>
 */
ZEPHIR_INIT_CLASS(Vof_Cache_Frontend_None) {

	ZEPHIR_REGISTER_CLASS(Vof\\Cache\\Frontend, None, vof, cache_frontend_none, vof_cache_frontend_none_method_entry, 0);

	zend_class_implements(vof_cache_frontend_none_ce TSRMLS_CC, 1, vof_cache_frontendinterface_ce);
	return SUCCESS;

}

/**
 * Returns cache lifetime, always one second expiring content
 */
PHP_METHOD(Vof_Cache_Frontend_None, getLifetime) {

	zval *this_ptr = getThis();


	RETURN_LONG(1);

}

/**
 * Check whether if frontend is buffering output, always false
 */
PHP_METHOD(Vof_Cache_Frontend_None, isBuffering) {

	zval *this_ptr = getThis();


	RETURN_BOOL(0);

}

/**
 * Starts output frontend
 */
PHP_METHOD(Vof_Cache_Frontend_None, start) {

	zval *this_ptr = getThis();



}

/**
 * Returns output cached content
 *
 * @return string
 */
PHP_METHOD(Vof_Cache_Frontend_None, getContent) {

	zval *this_ptr = getThis();



}

/**
 * Stops output frontend
 */
PHP_METHOD(Vof_Cache_Frontend_None, stop) {

	zval *this_ptr = getThis();



}

/**
 * Prepare data to be stored
 */
PHP_METHOD(Vof_Cache_Frontend_None, beforeStore) {

	zval *data, data_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&data_sub);

	zephir_fetch_params(0, 1, 0, &data);



	RETVAL_ZVAL(data, 1, 0);
	return;

}

/**
 * Prepares data to be retrieved to user
 */
PHP_METHOD(Vof_Cache_Frontend_None, afterRetrieve) {

	zval *data, data_sub;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&data_sub);

	zephir_fetch_params(0, 1, 0, &data);



	RETVAL_ZVAL(data, 1, 0);
	return;

}

