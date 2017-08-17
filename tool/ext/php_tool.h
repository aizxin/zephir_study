
/* This file was generated automatically by Zephir do not modify it! */

#ifndef PHP_TOOL_H
#define PHP_TOOL_H 1

#ifdef PHP_WIN32
#define ZEPHIR_RELEASE 1
#endif

#include "kernel/globals.h"

#define PHP_TOOL_NAME        "tool"
#define PHP_TOOL_VERSION     "0.0.1"
#define PHP_TOOL_EXTNAME     "tool"
#define PHP_TOOL_AUTHOR      ""
#define PHP_TOOL_ZEPVERSION  "0.9.10-d6f3deed23"
#define PHP_TOOL_DESCRIPTION ""



ZEND_BEGIN_MODULE_GLOBALS(tool)

	int initialized;

	/* Memory */
	zephir_memory_entry *start_memory; /**< The first preallocated frame */
	zephir_memory_entry *end_memory; /**< The last preallocate frame */
	zephir_memory_entry *active_memory; /**< The current memory frame */

	/* Virtual Symbol Tables */
	zephir_symbol_table *active_symbol_table;

	/** Function cache */
	HashTable *fcache;

	zephir_fcall_cache_entry *scache[ZEPHIR_MAX_CACHE_SLOTS];

	/* Cache enabled */
	unsigned int cache_enabled;

	/* Max recursion control */
	unsigned int recursive_lock;

	
	int curl_timeout;


ZEND_END_MODULE_GLOBALS(tool)

#ifdef ZTS
#include "TSRM.h"
#endif

ZEND_EXTERN_MODULE_GLOBALS(tool)

#ifdef ZTS
	#define ZEPHIR_GLOBAL(v) ZEND_MODULE_GLOBALS_ACCESSOR(tool, v)
#else
	#define ZEPHIR_GLOBAL(v) (tool_globals.v)
#endif

#ifdef ZTS
	void ***tsrm_ls;
	#define ZEPHIR_VGLOBAL ((zend_tool_globals *) (*((void ***) tsrm_get_ls_cache()))[TSRM_UNSHUFFLE_RSRC_ID(tool_globals_id)])
#else
	#define ZEPHIR_VGLOBAL &(tool_globals)
#endif

#define ZEPHIR_API ZEND_API

#define zephir_globals_def tool_globals
#define zend_zephir_globals_def zend_tool_globals

extern zend_module_entry tool_module_entry;
#define phpext_tool_ptr &tool_module_entry

#endif
