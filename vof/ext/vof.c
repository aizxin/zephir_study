
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "vof.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *vof_cache_backendinterface_ce;
zend_class_entry *vof_cache_frontendinterface_ce;
zend_class_entry *vof_logger_adapterinterface_ce;
zend_class_entry *vof_logger_formatterinterface_ce;
zend_class_entry *vof_session_adapterinterface_ce;
zend_class_entry *vof_cache_backend_ce;
zend_class_entry *vof_logger_adapter_ce;
zend_class_entry *vof_logger_formatter_ce;
zend_class_entry *vof_session_adapter_ce;
zend_class_entry *vof_cache_frontend_data_ce;
zend_class_entry *vof_cache_backend_apc_ce;
zend_class_entry *vof_cache_backend_apcu_ce;
zend_class_entry *vof_cache_backend_file_ce;
zend_class_entry *vof_cache_backend_libmemcached_ce;
zend_class_entry *vof_cache_backend_memcache_ce;
zend_class_entry *vof_cache_backend_memory_ce;
zend_class_entry *vof_cache_backend_mongo_ce;
zend_class_entry *vof_cache_backend_redis_ce;
zend_class_entry *vof_cache_backend_xcache_ce;
zend_class_entry *vof_cache_exception_ce;
zend_class_entry *vof_cache_frontend_base64_ce;
zend_class_entry *vof_cache_frontend_igbinary_ce;
zend_class_entry *vof_cache_frontend_json_ce;
zend_class_entry *vof_cache_frontend_msgpack_ce;
zend_class_entry *vof_cache_frontend_none_ce;
zend_class_entry *vof_cache_frontend_output_ce;
zend_class_entry *vof_logger_adapter_file_ce;
zend_class_entry *vof_logger_adapter_firephp_ce;
zend_class_entry *vof_logger_adapter_stream_ce;
zend_class_entry *vof_logger_adapter_syslog_ce;
zend_class_entry *vof_logger_ce;
zend_class_entry *vof_logger_exception_ce;
zend_class_entry *vof_logger_formatter_firephp_ce;
zend_class_entry *vof_logger_formatter_json_ce;
zend_class_entry *vof_logger_formatter_line_ce;
zend_class_entry *vof_logger_formatter_syslog_ce;
zend_class_entry *vof_medoo_ce;
zend_class_entry *vof_security_exception_ce;
zend_class_entry *vof_security_random_ce;
zend_class_entry *vof_session_adapter_files_ce;
zend_class_entry *vof_session_adapter_libmemcached_ce;
zend_class_entry *vof_session_adapter_memcache_ce;
zend_class_entry *vof_session_adapter_redis_ce;
zend_class_entry *vof_session_exception_ce;

ZEND_DECLARE_MODULE_GLOBALS(vof)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(vof)
{
	REGISTER_INI_ENTRIES();
	zephir_module_init();
	ZEPHIR_INIT(Vof_Cache_BackendInterface);
	ZEPHIR_INIT(Vof_Cache_FrontendInterface);
	ZEPHIR_INIT(Vof_Logger_AdapterInterface);
	ZEPHIR_INIT(Vof_Logger_FormatterInterface);
	ZEPHIR_INIT(Vof_Session_AdapterInterface);
	ZEPHIR_INIT(Vof_Cache_Backend);
	ZEPHIR_INIT(Vof_Logger_Adapter);
	ZEPHIR_INIT(Vof_Logger_Formatter);
	ZEPHIR_INIT(Vof_Session_Adapter);
	ZEPHIR_INIT(Vof_Cache_Frontend_Data);
	ZEPHIR_INIT(Vof_Cache_Backend_Apc);
	ZEPHIR_INIT(Vof_Cache_Backend_Apcu);
	ZEPHIR_INIT(Vof_Cache_Backend_File);
	ZEPHIR_INIT(Vof_Cache_Backend_Libmemcached);
	ZEPHIR_INIT(Vof_Cache_Backend_Memcache);
	ZEPHIR_INIT(Vof_Cache_Backend_Memory);
	ZEPHIR_INIT(Vof_Cache_Backend_Mongo);
	ZEPHIR_INIT(Vof_Cache_Backend_Redis);
	ZEPHIR_INIT(Vof_Cache_Backend_Xcache);
	ZEPHIR_INIT(Vof_Cache_Exception);
	ZEPHIR_INIT(Vof_Cache_Frontend_Base64);
	ZEPHIR_INIT(Vof_Cache_Frontend_Igbinary);
	ZEPHIR_INIT(Vof_Cache_Frontend_Json);
	ZEPHIR_INIT(Vof_Cache_Frontend_Msgpack);
	ZEPHIR_INIT(Vof_Cache_Frontend_None);
	ZEPHIR_INIT(Vof_Cache_Frontend_Output);
	ZEPHIR_INIT(Vof_Logger);
	ZEPHIR_INIT(Vof_Logger_Adapter_File);
	ZEPHIR_INIT(Vof_Logger_Adapter_Firephp);
	ZEPHIR_INIT(Vof_Logger_Adapter_Stream);
	ZEPHIR_INIT(Vof_Logger_Adapter_Syslog);
	ZEPHIR_INIT(Vof_Logger_Exception);
	ZEPHIR_INIT(Vof_Logger_Formatter_Firephp);
	ZEPHIR_INIT(Vof_Logger_Formatter_Json);
	ZEPHIR_INIT(Vof_Logger_Formatter_Line);
	ZEPHIR_INIT(Vof_Logger_Formatter_Syslog);
	ZEPHIR_INIT(Vof_Medoo);
	ZEPHIR_INIT(Vof_Security_Exception);
	ZEPHIR_INIT(Vof_Security_Random);
	ZEPHIR_INIT(Vof_Session_Adapter_Files);
	ZEPHIR_INIT(Vof_Session_Adapter_Libmemcached);
	ZEPHIR_INIT(Vof_Session_Adapter_Memcache);
	ZEPHIR_INIT(Vof_Session_Adapter_Redis);
	ZEPHIR_INIT(Vof_Session_Exception);
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(vof)
{
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_vof_globals *vof_globals TSRMLS_DC)
{
	vof_globals->initialized = 0;

	/* Memory options */
	vof_globals->active_memory = NULL;

	/* Virtual Symbol Tables */
	vof_globals->active_symbol_table = NULL;

	/* Cache Enabled */
	vof_globals->cache_enabled = 1;

	/* Recursive Lock */
	vof_globals->recursive_lock = 0;

	/* Static cache */
	memset(vof_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);


}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_vof_globals *vof_globals TSRMLS_DC)
{

}

static PHP_RINIT_FUNCTION(vof)
{

	zend_vof_globals *vof_globals_ptr;
#ifdef ZTS
	tsrm_ls = ts_resource(0);
#endif
	vof_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(vof_globals_ptr TSRMLS_CC);
	zephir_initialize_memory(vof_globals_ptr TSRMLS_CC);


	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(vof)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}

static PHP_MINFO_FUNCTION(vof)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_VOF_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_VOF_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_VOF_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_VOF_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_VOF_ZEPVERSION);
	php_info_print_table_end();

	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(vof)
{
	php_zephir_init_globals(vof_globals TSRMLS_CC);
	php_zephir_init_module_globals(vof_globals TSRMLS_CC);
}

static PHP_GSHUTDOWN_FUNCTION(vof)
{

}


zend_function_entry php_vof_functions[] = {
ZEND_FE_END

};

zend_module_entry vof_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	NULL,
	PHP_VOF_EXTNAME,
	php_vof_functions,
	PHP_MINIT(vof),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(vof),
#else
	NULL,
#endif
	PHP_RINIT(vof),
	PHP_RSHUTDOWN(vof),
	PHP_MINFO(vof),
	PHP_VOF_VERSION,
	ZEND_MODULE_GLOBALS(vof),
	PHP_GINIT(vof),
	PHP_GSHUTDOWN(vof),
	NULL,
	STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_VOF
ZEND_GET_MODULE(vof)
#endif
