PHP_ARG_ENABLE(vof, whether to enable vof, [ --enable-vof   Enable Vof])

if test "$PHP_VOF" = "yes"; then

	

	if ! test "x" = "x"; then
		PHP_EVAL_LIBLINE(, VOF_SHARED_LIBADD)
	fi

	AC_DEFINE(HAVE_VOF, 1, [Whether you have Vof])
	vof_sources="vof.c kernel/main.c kernel/memory.c kernel/exception.c kernel/debug.c kernel/backtrace.c kernel/object.c kernel/array.c kernel/string.c kernel/fcall.c kernel/require.c kernel/file.c kernel/operators.c kernel/math.c kernel/concat.c kernel/variables.c kernel/filter.c kernel/iterator.c kernel/time.c kernel/exit.c vof/cache/backendinterface.zep.c
	vof/cache/backend.zep.c
	vof/cache/frontendinterface.zep.c
	vof/logger/adapterinterface.zep.c
	vof/logger/formatterinterface.zep.c
	vof/session/adapterinterface.zep.c
	vof/logger/adapter.zep.c
	vof/logger/formatter.zep.c
	vof/session/adapter.zep.c
	vof/cache/frontend/data.zep.c
	vof/cache/backend/apc.zep.c
	vof/cache/backend/apcu.zep.c
	vof/cache/backend/file.zep.c
	vof/cache/backend/libmemcached.zep.c
	vof/cache/backend/memcache.zep.c
	vof/cache/backend/memory.zep.c
	vof/cache/backend/mongo.zep.c
	vof/cache/backend/redis.zep.c
	vof/cache/backend/xcache.zep.c
	vof/cache/exception.zep.c
	vof/cache/frontend/base64.zep.c
	vof/cache/frontend/igbinary.zep.c
	vof/cache/frontend/json.zep.c
	vof/cache/frontend/msgpack.zep.c
	vof/cache/frontend/none.zep.c
	vof/cache/frontend/output.zep.c
	vof/logger.zep.c
	vof/logger/adapter/file.zep.c
	vof/logger/adapter/firephp.zep.c
	vof/logger/adapter/stream.zep.c
	vof/logger/adapter/syslog.zep.c
	vof/logger/exception.zep.c
	vof/logger/formatter/firephp.zep.c
	vof/logger/formatter/json.zep.c
	vof/logger/formatter/line.zep.c
	vof/logger/formatter/syslog.zep.c
	vof/medoo.zep.c
	vof/security/exception.zep.c
	vof/security/random.zep.c
	vof/session/adapter/files.zep.c
	vof/session/adapter/libmemcached.zep.c
	vof/session/adapter/memcache.zep.c
	vof/session/adapter/redis.zep.c
	vof/session/exception.zep.c "
	PHP_NEW_EXTENSION(vof, $vof_sources, $ext_shared,, )
	PHP_SUBST(VOF_SHARED_LIBADD)

	old_CPPFLAGS=$CPPFLAGS
	CPPFLAGS="$CPPFLAGS $INCLUDES"

	AC_CHECK_DECL(
		[HAVE_BUNDLED_PCRE],
		[
			AC_CHECK_HEADERS(
				[ext/pcre/php_pcre.h],
				[
					PHP_ADD_EXTENSION_DEP([vof], [pcre])
					AC_DEFINE([ZEPHIR_USE_PHP_PCRE], [1], [Whether PHP pcre extension is present at compile time])
				],
				,
				[[#include "main/php.h"]]
			)
		],
		,
		[[#include "php_config.h"]]
	)

	AC_CHECK_DECL(
		[HAVE_JSON],
		[
			AC_CHECK_HEADERS(
				[ext/json/php_json.h],
				[
					PHP_ADD_EXTENSION_DEP([vof], [json])
					AC_DEFINE([ZEPHIR_USE_PHP_JSON], [1], [Whether PHP json extension is present at compile time])
				],
				,
				[[#include "main/php.h"]]
			)
		],
		,
		[[#include "php_config.h"]]
	)

	CPPFLAGS=$old_CPPFLAGS

	PHP_INSTALL_HEADERS([ext/vof], [php_VOF.h])

fi
