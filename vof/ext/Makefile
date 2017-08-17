srcdir = /home/php-zephir/zephir_study/vof/ext
builddir = /home/php-zephir/zephir_study/vof/ext
top_srcdir = /home/php-zephir/zephir_study/vof/ext
top_builddir = /home/php-zephir/zephir_study/vof/ext
EGREP = /bin/grep -E
SED = /bin/sed
CONFIGURE_COMMAND = './configure' '--enable-vof'
CONFIGURE_OPTIONS = '--enable-vof'
SHLIB_SUFFIX_NAME = so
SHLIB_DL_SUFFIX_NAME = so
ZEND_EXT_TYPE = zend_extension
RE2C = re2c
AWK = nawk
shared_objects_vof = vof.lo kernel/main.lo kernel/memory.lo kernel/exception.lo kernel/debug.lo kernel/backtrace.lo kernel/object.lo kernel/array.lo kernel/string.lo kernel/fcall.lo kernel/require.lo kernel/file.lo kernel/operators.lo kernel/math.lo kernel/concat.lo kernel/variables.lo kernel/filter.lo kernel/iterator.lo kernel/time.lo kernel/exit.lo vof/cache/backendinterface.lo vof/cache/backend.lo vof/cache/frontendinterface.lo vof/logger/adapterinterface.lo vof/logger/formatterinterface.lo vof/session/adapterinterface.lo vof/logger/adapter.lo vof/logger/formatter.lo vof/session/adapter.lo vof/cache/frontend/data.lo vof/cache/backend/apc.lo vof/cache/backend/apcu.lo vof/cache/backend/file.lo vof/cache/backend/libmemcached.lo vof/cache/backend/memcache.lo vof/cache/backend/memory.lo vof/cache/backend/mongo.lo vof/cache/backend/redis.lo vof/cache/backend/xcache.lo vof/cache/exception.lo vof/cache/frontend/base64.lo vof/cache/frontend/igbinary.lo vof/cache/frontend/json.lo vof/cache/frontend/msgpack.lo vof/cache/frontend/none.lo vof/cache/frontend/output.lo vof/logger.lo vof/logger/adapter/file.lo vof/logger/adapter/firephp.lo vof/logger/adapter/stream.lo vof/logger/adapter/syslog.lo vof/logger/exception.lo vof/logger/formatter/firephp.lo vof/logger/formatter/json.lo vof/logger/formatter/line.lo vof/logger/formatter/syslog.lo vof/medoo.lo vof/security/exception.lo vof/security/random.lo vof/session/adapter/files.lo vof/session/adapter/libmemcached.lo vof/session/adapter/memcache.lo vof/session/adapter/redis.lo vof/session/exception.lo
PHP_PECL_EXTENSION = vof
VOF_SHARED_LIBADD =
PHP_MODULES = $(phplibdir)/vof.la
PHP_ZEND_EX =
all_targets = $(PHP_MODULES) $(PHP_ZEND_EX)
install_targets = install-modules install-headers
prefix = /usr
exec_prefix = $(prefix)
libdir = ${exec_prefix}/lib
prefix = /usr
phplibdir = /home/php-zephir/zephir_study/vof/ext/modules
phpincludedir = /usr/include/php/20160303
CC = gcc
CFLAGS = -O2 -fvisibility=hidden -Wparentheses -flto -DZEPHIR_RELEASE=1
CFLAGS_CLEAN = $(CFLAGS)
CPP = gcc -E
CPPFLAGS = -DHAVE_CONFIG_H
CXX =
CXXFLAGS =
CXXFLAGS_CLEAN = $(CXXFLAGS)
EXTENSION_DIR = /usr/lib/php/20160303
PHP_EXECUTABLE = /usr/bin/php7.1
EXTRA_LDFLAGS =
EXTRA_LIBS =
INCLUDES = -I/usr/include/php/20160303 -I/usr/include/php/20160303/main -I/usr/include/php/20160303/TSRM -I/usr/include/php/20160303/Zend -I/usr/include/php/20160303/ext -I/usr/include/php/20160303/ext/date/lib
LFLAGS =
LDFLAGS =
SHARED_LIBTOOL =
LIBTOOL = $(SHELL) $(top_builddir)/libtool
SHELL = /bin/bash
INSTALL_HEADERS = ext/vof/php_VOF.h
mkinstalldirs = $(top_srcdir)/build/shtool mkdir -p
INSTALL = $(top_srcdir)/build/shtool install -c
INSTALL_DATA = $(INSTALL) -m 644

DEFS = -DPHP_ATOM_INC -I$(top_builddir)/include -I$(top_builddir)/main -I$(top_srcdir)
COMMON_FLAGS = $(DEFS) $(INCLUDES) $(EXTRA_INCLUDES) $(CPPFLAGS) $(PHP_FRAMEWORKPATH)

all: $(all_targets) 
	@echo
	@echo "Build complete."
	@echo "Don't forget to run 'make test'."
	@echo

build-modules: $(PHP_MODULES) $(PHP_ZEND_EX)

build-binaries: $(PHP_BINARIES)

libphp$(PHP_MAJOR_VERSION).la: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(LIBTOOL) --mode=link $(CC) $(CFLAGS) $(EXTRA_CFLAGS) -rpath $(phptempdir) $(EXTRA_LDFLAGS) $(LDFLAGS) $(PHP_RPATHS) $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@
	-@$(LIBTOOL) --silent --mode=install cp $@ $(phptempdir)/$@ >/dev/null 2>&1

libs/libphp$(PHP_MAJOR_VERSION).bundle: $(PHP_GLOBAL_OBJS) $(PHP_SAPI_OBJS)
	$(CC) $(MH_BUNDLE_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS) $(EXTRA_LDFLAGS) $(PHP_GLOBAL_OBJS:.lo=.o) $(PHP_SAPI_OBJS:.lo=.o) $(PHP_FRAMEWORKS) $(EXTRA_LIBS) $(ZEND_EXTRA_LIBS) -o $@ && cp $@ libs/libphp$(PHP_MAJOR_VERSION).so

install: $(all_targets) $(install_targets)

install-sapi: $(OVERALL_TARGET)
	@echo "Installing PHP SAPI module:       $(PHP_SAPI)"
	-@$(mkinstalldirs) $(INSTALL_ROOT)$(bindir)
	-@if test ! -r $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME); then \
		for i in 0.0.0 0.0 0; do \
			if test -r $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME).$$i; then \
				$(LN_S) $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME).$$i $(phptempdir)/libphp$(PHP_MAJOR_VERSION).$(SHLIB_DL_SUFFIX_NAME); \
				break; \
			fi; \
		done; \
	fi
	@$(INSTALL_IT)

install-binaries: build-binaries $(install_binary_targets)

install-modules: build-modules
	@test -d modules && \
	$(mkinstalldirs) $(INSTALL_ROOT)$(EXTENSION_DIR)
	@echo "Installing shared extensions:     $(INSTALL_ROOT)$(EXTENSION_DIR)/"
	@rm -f modules/*.la >/dev/null 2>&1
	@$(INSTALL) modules/* $(INSTALL_ROOT)$(EXTENSION_DIR)

install-headers:
	-@if test "$(INSTALL_HEADERS)"; then \
		for i in `echo $(INSTALL_HEADERS)`; do \
			i=`$(top_srcdir)/build/shtool path -d $$i`; \
			paths="$$paths $(INSTALL_ROOT)$(phpincludedir)/$$i"; \
		done; \
		$(mkinstalldirs) $$paths && \
		echo "Installing header files:          $(INSTALL_ROOT)$(phpincludedir)/" && \
		for i in `echo $(INSTALL_HEADERS)`; do \
			if test "$(PHP_PECL_EXTENSION)"; then \
				src=`echo $$i | $(SED) -e "s#ext/$(PHP_PECL_EXTENSION)/##g"`; \
			else \
				src=$$i; \
			fi; \
			if test -f "$(top_srcdir)/$$src"; then \
				$(INSTALL_DATA) $(top_srcdir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			elif test -f "$(top_builddir)/$$src"; then \
				$(INSTALL_DATA) $(top_builddir)/$$src $(INSTALL_ROOT)$(phpincludedir)/$$i; \
			else \
				(cd $(top_srcdir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i; \
				cd $(top_builddir)/$$src && $(INSTALL_DATA) *.h $(INSTALL_ROOT)$(phpincludedir)/$$i) 2>/dev/null || true; \
			fi \
		done; \
	fi

PHP_TEST_SETTINGS = -d 'open_basedir=' -d 'output_buffering=0' -d 'memory_limit=-1'
PHP_TEST_SHARED_EXTENSIONS =  ` \
	if test "x$(PHP_MODULES)" != "x"; then \
		for i in $(PHP_MODULES)""; do \
			. $$i; $(top_srcdir)/build/shtool echo -n -- " -d extension=$$dlname"; \
		done; \
	fi; \
	if test "x$(PHP_ZEND_EX)" != "x"; then \
		for i in $(PHP_ZEND_EX)""; do \
			. $$i; $(top_srcdir)/build/shtool echo -n -- " -d $(ZEND_EXT_TYPE)=$(top_builddir)/modules/$$dlname"; \
		done; \
	fi`
PHP_DEPRECATED_DIRECTIVES_REGEX = '^(magic_quotes_(gpc|runtime|sybase)?|(zend_)?extension(_debug)?(_ts)?)[\t\ ]*='

test: all
	@if test ! -z "$(PHP_EXECUTABLE)" && test -x "$(PHP_EXECUTABLE)"; then \
		INI_FILE=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r 'echo php_ini_loaded_file();' 2> /dev/null`; \
		if test "$$INI_FILE"; then \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_FILE" > $(top_builddir)/tmp-php.ini; \
		else \
			echo > $(top_builddir)/tmp-php.ini; \
		fi; \
		INI_SCANNED_PATH=`$(PHP_EXECUTABLE) -d 'display_errors=stderr' -r '$$a = explode(",\n", trim(php_ini_scanned_files())); echo $$a[0];' 2> /dev/null`; \
		if test "$$INI_SCANNED_PATH"; then \
			INI_SCANNED_PATH=`$(top_srcdir)/build/shtool path -d $$INI_SCANNED_PATH`; \
			$(EGREP) -h -v $(PHP_DEPRECATED_DIRECTIVES_REGEX) "$$INI_SCANNED_PATH"/*.ini >> $(top_builddir)/tmp-php.ini; \
		fi; \
		TEST_PHP_EXECUTABLE=$(PHP_EXECUTABLE) \
		TEST_PHP_SRCDIR=$(top_srcdir) \
		CC="$(CC)" \
			$(PHP_EXECUTABLE) -n -c $(top_builddir)/tmp-php.ini $(PHP_TEST_SETTINGS) $(top_srcdir)/run-tests.php -n -c $(top_builddir)/tmp-php.ini -d extension_dir=$(top_builddir)/modules/ $(PHP_TEST_SHARED_EXTENSIONS) $(TESTS); \
		TEST_RESULT_EXIT_CODE=$$?; \
		rm $(top_builddir)/tmp-php.ini; \
		exit $$TEST_RESULT_EXIT_CODE; \
	else \
		echo "ERROR: Cannot run tests without CLI sapi."; \
	fi

clean:
	find . -name \*.gcno -o -name \*.gcda | xargs rm -f
	find . -name \*.lo -o -name \*.o | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f 
	find . -name \*.so | xargs rm -f
	find . -name .libs -a -type d|xargs rm -rf
	rm -f libphp$(PHP_MAJOR_VERSION).la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_MILTER_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*

distclean: clean
	rm -f Makefile config.cache config.log config.status Makefile.objects Makefile.fragments libtool main/php_config.h main/internal_functions_cli.c main/internal_functions.c stamp-h sapi/apache/libphp$(PHP_MAJOR_VERSION).module sapi/apache_hooks/libphp$(PHP_MAJOR_VERSION).module buildmk.stamp Zend/zend_dtrace_gen.h Zend/zend_dtrace_gen.h.bak Zend/zend_config.h TSRM/tsrm_config.h
	rm -f php7.spec main/build-defs.h scripts/phpize
	rm -f ext/date/lib/timelib_config.h ext/mbstring/oniguruma/config.h ext/mbstring/libmbfl/config.h ext/oci8/oci8_dtrace_gen.h ext/oci8/oci8_dtrace_gen.h.bak
	rm -f scripts/man1/phpize.1 scripts/php-config scripts/man1/php-config.1 sapi/cli/php.1 sapi/cgi/php-cgi.1 ext/phar/phar.1 ext/phar/phar.phar.1
	rm -f sapi/fpm/php-fpm.conf sapi/fpm/init.d.php-fpm sapi/fpm/php-fpm.service sapi/fpm/php-fpm.8 sapi/fpm/status.html
	rm -f ext/iconv/php_have_bsd_iconv.h ext/iconv/php_have_glibc_iconv.h ext/iconv/php_have_ibm_iconv.h ext/iconv/php_have_iconv.h ext/iconv/php_have_libiconv.h ext/iconv/php_iconv_aliased_libiconv.h ext/iconv/php_iconv_supports_errno.h ext/iconv/php_php_iconv_h_path.h ext/iconv/php_php_iconv_impl.h
	rm -f ext/phar/phar.phar ext/phar/phar.php
	if test "$(srcdir)" != "$(builddir)"; then \
	  rm -f ext/phar/phar/phar.inc; \
	fi
	$(EGREP) define'.*include/php' $(top_srcdir)/configure | $(SED) 's/.*>//'|xargs rm -f

prof-gen:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-generate all

prof-clean:
	find . -name \*.lo -o -name \*.o | xargs rm -f
	find . -name \*.la -o -name \*.a | xargs rm -f 
	find . -name \*.so | xargs rm -f
	rm -f libphp$(PHP_MAJOR_VERSION).la $(SAPI_CLI_PATH) $(SAPI_CGI_PATH) $(SAPI_MILTER_PATH) $(SAPI_LITESPEED_PATH) $(SAPI_FPM_PATH) $(OVERALL_TARGET) modules/* libs/*

prof-use:
	CCACHE_DISABLE=1 $(MAKE) PROF_FLAGS=-fprofile-use all


.PHONY: all clean install distclean test prof-gen prof-clean prof-use
.NOEXPORT:
vof.lo: /home/php-zephir/zephir_study/vof/ext/vof.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof.c -o vof.lo 
kernel/main.lo: /home/php-zephir/zephir_study/vof/ext/kernel/main.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/main.c -o kernel/main.lo 
kernel/memory.lo: /home/php-zephir/zephir_study/vof/ext/kernel/memory.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/memory.c -o kernel/memory.lo 
kernel/exception.lo: /home/php-zephir/zephir_study/vof/ext/kernel/exception.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/exception.c -o kernel/exception.lo 
kernel/debug.lo: /home/php-zephir/zephir_study/vof/ext/kernel/debug.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/debug.c -o kernel/debug.lo 
kernel/backtrace.lo: /home/php-zephir/zephir_study/vof/ext/kernel/backtrace.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/backtrace.c -o kernel/backtrace.lo 
kernel/object.lo: /home/php-zephir/zephir_study/vof/ext/kernel/object.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/object.c -o kernel/object.lo 
kernel/array.lo: /home/php-zephir/zephir_study/vof/ext/kernel/array.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/array.c -o kernel/array.lo 
kernel/string.lo: /home/php-zephir/zephir_study/vof/ext/kernel/string.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/string.c -o kernel/string.lo 
kernel/fcall.lo: /home/php-zephir/zephir_study/vof/ext/kernel/fcall.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/fcall.c -o kernel/fcall.lo 
kernel/require.lo: /home/php-zephir/zephir_study/vof/ext/kernel/require.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/require.c -o kernel/require.lo 
kernel/file.lo: /home/php-zephir/zephir_study/vof/ext/kernel/file.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/file.c -o kernel/file.lo 
kernel/operators.lo: /home/php-zephir/zephir_study/vof/ext/kernel/operators.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/operators.c -o kernel/operators.lo 
kernel/math.lo: /home/php-zephir/zephir_study/vof/ext/kernel/math.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/math.c -o kernel/math.lo 
kernel/concat.lo: /home/php-zephir/zephir_study/vof/ext/kernel/concat.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/concat.c -o kernel/concat.lo 
kernel/variables.lo: /home/php-zephir/zephir_study/vof/ext/kernel/variables.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/variables.c -o kernel/variables.lo 
kernel/filter.lo: /home/php-zephir/zephir_study/vof/ext/kernel/filter.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/filter.c -o kernel/filter.lo 
kernel/iterator.lo: /home/php-zephir/zephir_study/vof/ext/kernel/iterator.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/iterator.c -o kernel/iterator.lo 
kernel/time.lo: /home/php-zephir/zephir_study/vof/ext/kernel/time.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/time.c -o kernel/time.lo 
kernel/exit.lo: /home/php-zephir/zephir_study/vof/ext/kernel/exit.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/kernel/exit.c -o kernel/exit.lo 
vof/cache/backendinterface.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backendinterface.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backendinterface.zep.c -o vof/cache/backendinterface.lo 
vof/cache/backend.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend.zep.c -o vof/cache/backend.lo 
vof/cache/frontendinterface.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontendinterface.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontendinterface.zep.c -o vof/cache/frontendinterface.lo 
vof/logger/adapterinterface.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/adapterinterface.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/adapterinterface.zep.c -o vof/logger/adapterinterface.lo 
vof/logger/formatterinterface.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/formatterinterface.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/formatterinterface.zep.c -o vof/logger/formatterinterface.lo 
vof/session/adapterinterface.lo: /home/php-zephir/zephir_study/vof/ext/vof/session/adapterinterface.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/session/adapterinterface.zep.c -o vof/session/adapterinterface.lo 
vof/logger/adapter.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter.zep.c -o vof/logger/adapter.lo 
vof/logger/formatter.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter.zep.c -o vof/logger/formatter.lo 
vof/session/adapter.lo: /home/php-zephir/zephir_study/vof/ext/vof/session/adapter.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/session/adapter.zep.c -o vof/session/adapter.lo 
vof/cache/frontend/data.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/data.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/data.zep.c -o vof/cache/frontend/data.lo 
vof/cache/backend/apc.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/apc.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/apc.zep.c -o vof/cache/backend/apc.lo 
vof/cache/backend/apcu.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/apcu.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/apcu.zep.c -o vof/cache/backend/apcu.lo 
vof/cache/backend/file.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/file.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/file.zep.c -o vof/cache/backend/file.lo 
vof/cache/backend/libmemcached.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/libmemcached.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/libmemcached.zep.c -o vof/cache/backend/libmemcached.lo 
vof/cache/backend/memcache.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/memcache.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/memcache.zep.c -o vof/cache/backend/memcache.lo 
vof/cache/backend/memory.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/memory.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/memory.zep.c -o vof/cache/backend/memory.lo 
vof/cache/backend/mongo.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/mongo.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/mongo.zep.c -o vof/cache/backend/mongo.lo 
vof/cache/backend/redis.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/redis.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/redis.zep.c -o vof/cache/backend/redis.lo 
vof/cache/backend/xcache.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/xcache.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/backend/xcache.zep.c -o vof/cache/backend/xcache.lo 
vof/cache/exception.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/exception.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/exception.zep.c -o vof/cache/exception.lo 
vof/cache/frontend/base64.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/base64.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/base64.zep.c -o vof/cache/frontend/base64.lo 
vof/cache/frontend/igbinary.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/igbinary.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/igbinary.zep.c -o vof/cache/frontend/igbinary.lo 
vof/cache/frontend/json.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/json.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/json.zep.c -o vof/cache/frontend/json.lo 
vof/cache/frontend/msgpack.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/msgpack.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/msgpack.zep.c -o vof/cache/frontend/msgpack.lo 
vof/cache/frontend/none.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/none.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/none.zep.c -o vof/cache/frontend/none.lo 
vof/cache/frontend/output.lo: /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/output.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/cache/frontend/output.zep.c -o vof/cache/frontend/output.lo 
vof/logger.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger.zep.c -o vof/logger.lo 
vof/logger/adapter/file.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/file.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/file.zep.c -o vof/logger/adapter/file.lo 
vof/logger/adapter/firephp.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/firephp.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/firephp.zep.c -o vof/logger/adapter/firephp.lo 
vof/logger/adapter/stream.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/stream.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/stream.zep.c -o vof/logger/adapter/stream.lo 
vof/logger/adapter/syslog.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/syslog.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/adapter/syslog.zep.c -o vof/logger/adapter/syslog.lo 
vof/logger/exception.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/exception.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/exception.zep.c -o vof/logger/exception.lo 
vof/logger/formatter/firephp.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/firephp.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/firephp.zep.c -o vof/logger/formatter/firephp.lo 
vof/logger/formatter/json.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/json.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/json.zep.c -o vof/logger/formatter/json.lo 
vof/logger/formatter/line.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/line.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/line.zep.c -o vof/logger/formatter/line.lo 
vof/logger/formatter/syslog.lo: /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/syslog.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/logger/formatter/syslog.zep.c -o vof/logger/formatter/syslog.lo 
vof/medoo.lo: /home/php-zephir/zephir_study/vof/ext/vof/medoo.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/medoo.zep.c -o vof/medoo.lo 
vof/security/exception.lo: /home/php-zephir/zephir_study/vof/ext/vof/security/exception.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/security/exception.zep.c -o vof/security/exception.lo 
vof/security/random.lo: /home/php-zephir/zephir_study/vof/ext/vof/security/random.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/security/random.zep.c -o vof/security/random.lo 
vof/session/adapter/files.lo: /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/files.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/files.zep.c -o vof/session/adapter/files.lo 
vof/session/adapter/libmemcached.lo: /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/libmemcached.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/libmemcached.zep.c -o vof/session/adapter/libmemcached.lo 
vof/session/adapter/memcache.lo: /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/memcache.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/memcache.zep.c -o vof/session/adapter/memcache.lo 
vof/session/adapter/redis.lo: /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/redis.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/session/adapter/redis.zep.c -o vof/session/adapter/redis.lo 
vof/session/exception.lo: /home/php-zephir/zephir_study/vof/ext/vof/session/exception.zep.c
	$(LIBTOOL) --mode=compile $(CC)  -I. -I/home/php-zephir/zephir_study/vof/ext $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS)  -c /home/php-zephir/zephir_study/vof/ext/vof/session/exception.zep.c -o vof/session/exception.lo 
$(phplibdir)/vof.la: ./vof.la
	$(LIBTOOL) --mode=install cp ./vof.la $(phplibdir)

./vof.la: $(shared_objects_vof) $(VOF_SHARED_DEPENDENCIES)
	$(LIBTOOL) --mode=link $(CC) $(COMMON_FLAGS) $(CFLAGS_CLEAN) $(EXTRA_CFLAGS) $(LDFLAGS) -o $@ -export-dynamic -avoid-version -prefer-pic -module -rpath $(phplibdir) $(EXTRA_LDFLAGS) $(shared_objects_vof) $(VOF_SHARED_LIBADD)

