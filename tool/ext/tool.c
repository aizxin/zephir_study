
/* This file was generated automatically by Zephir do not modify it! */

#ifdef HAVE_CONFIG_H
#include "config.h"
#endif

#include <php.h>

#include "php_ext.h"
#include "tool.h"

#include <ext/standard/info.h>

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/globals.h"
#include "kernel/main.h"
#include "kernel/fcall.h"
#include "kernel/memory.h"



zend_class_entry *tool_utils_ce;
zend_class_entry *tool_vars_ce;

ZEND_DECLARE_MODULE_GLOBALS(tool)

PHP_INI_BEGIN()
	
PHP_INI_END()

static PHP_MINIT_FUNCTION(tool)
{
	REGISTER_INI_ENTRIES();
	zephir_module_init();
	ZEPHIR_INIT(Tool_Utils);
	ZEPHIR_INIT(Tool_Vars);
	return SUCCESS;
}

#ifndef ZEPHIR_RELEASE
static PHP_MSHUTDOWN_FUNCTION(tool)
{
	zephir_deinitialize_memory(TSRMLS_C);
	UNREGISTER_INI_ENTRIES();
	return SUCCESS;
}
#endif

/**
 * Initialize globals on each request or each thread started
 */
static void php_zephir_init_globals(zend_tool_globals *tool_globals TSRMLS_DC)
{
	tool_globals->initialized = 0;

	/* Memory options */
	tool_globals->active_memory = NULL;

	/* Virtual Symbol Tables */
	tool_globals->active_symbol_table = NULL;

	/* Cache Enabled */
	tool_globals->cache_enabled = 1;

	/* Recursive Lock */
	tool_globals->recursive_lock = 0;

	/* Static cache */
	memset(tool_globals->scache, '\0', sizeof(zephir_fcall_cache_entry*) * ZEPHIR_MAX_CACHE_SLOTS);

	tool_globals->curl_timeout = 1;

}

/**
 * Initialize globals only on each thread started
 */
static void php_zephir_init_module_globals(zend_tool_globals *tool_globals TSRMLS_DC)
{

}

static PHP_RINIT_FUNCTION(tool)
{

	zend_tool_globals *tool_globals_ptr;
#ifdef ZTS
	tsrm_ls = ts_resource(0);
#endif
	tool_globals_ptr = ZEPHIR_VGLOBAL;

	php_zephir_init_globals(tool_globals_ptr TSRMLS_CC);
	zephir_initialize_memory(tool_globals_ptr TSRMLS_CC);


	return SUCCESS;
}

static PHP_RSHUTDOWN_FUNCTION(tool)
{
	
	zephir_deinitialize_memory(TSRMLS_C);
	return SUCCESS;
}

static PHP_MINFO_FUNCTION(tool)
{
	php_info_print_box_start(0);
	php_printf("%s", PHP_TOOL_DESCRIPTION);
	php_info_print_box_end();

	php_info_print_table_start();
	php_info_print_table_header(2, PHP_TOOL_NAME, "enabled");
	php_info_print_table_row(2, "Author", PHP_TOOL_AUTHOR);
	php_info_print_table_row(2, "Version", PHP_TOOL_VERSION);
	php_info_print_table_row(2, "Build Date", __DATE__ " " __TIME__ );
	php_info_print_table_row(2, "Powered by Zephir", "Version " PHP_TOOL_ZEPVERSION);
	php_info_print_table_end();

	DISPLAY_INI_ENTRIES();
}

static PHP_GINIT_FUNCTION(tool)
{
	php_zephir_init_globals(tool_globals TSRMLS_CC);
	php_zephir_init_module_globals(tool_globals TSRMLS_CC);
}

static PHP_GSHUTDOWN_FUNCTION(tool)
{

}


zend_function_entry php_tool_functions[] = {
ZEND_FE_END

};

zend_module_entry tool_module_entry = {
	STANDARD_MODULE_HEADER_EX,
	NULL,
	NULL,
	PHP_TOOL_EXTNAME,
	php_tool_functions,
	PHP_MINIT(tool),
#ifndef ZEPHIR_RELEASE
	PHP_MSHUTDOWN(tool),
#else
	NULL,
#endif
	PHP_RINIT(tool),
	PHP_RSHUTDOWN(tool),
	PHP_MINFO(tool),
	PHP_TOOL_VERSION,
	ZEND_MODULE_GLOBALS(tool),
	PHP_GINIT(tool),
	PHP_GSHUTDOWN(tool),
	NULL,
	STANDARD_MODULE_PROPERTIES_EX
};

#ifdef COMPILE_DL_TOOL
ZEND_GET_MODULE(tool)
#endif
