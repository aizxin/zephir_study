
#ifdef HAVE_CONFIG_H
#include "../ext_config.h"
#endif

#include <php.h>
#include "../php_ext.h"
#include "../ext.h"

#include <Zend/zend_operators.h>
#include <Zend/zend_exceptions.h>
#include <Zend/zend_interfaces.h>

#include "kernel/main.h"
#include "kernel/memory.h"
#include "kernel/string.h"
#include "kernel/operators.h"
#include "kernel/fcall.h"
#include "kernel/math.h"
#include "kernel/concat.h"
#include "kernel/array.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/exception.h"
#include "kernel/object.h"


ZEPHIR_INIT_CLASS(Tool_Utils) {

	ZEPHIR_REGISTER_CLASS(Tool, Utils, tool, utils, tool_utils_method_entry, 0);

	return SUCCESS;

}

PHP_METHOD(Tool_Utils, is_valid_email) {

	zval *email_param = NULL, _0, _1;
	zval email;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&email);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &email_param);

	zephir_get_strval(&email, email_param);


	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "/^[a-zA-Z0-9._%-]+@([a-zA-Z0-9.-]+\\.)+[a-zA-Z]{2,4}$/u");
	zephir_preg_match(return_value, &_1, &email, &_0, 0, 0 , 0  TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(Tool_Utils, is_valid_num) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *num, num_sub, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&num_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &num);



	ZVAL_LONG(&_0, zephir_get_intval(num));
	ZEPHIR_CALL_FUNCTION(&_1, "strval", NULL, 1, &_0);
	zephir_check_call_status();
	RETURN_MM_BOOL(ZEPHIR_IS_EQUAL(num, &_1));

}

PHP_METHOD(Tool_Utils, is_valid_mobile) {

	zval *mobile_param = NULL, _0, _1;
	zval mobile;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&mobile);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &mobile_param);

	zephir_get_strval(&mobile, mobile_param);


	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "/^1[0-9]{10}$/i");
	zephir_preg_match(return_value, &_1, &mobile, &_0, 0, 0 , 0  TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(Tool_Utils, show_filesize) {

	zval *bytes_param = NULL, kb, mb, _0, _1, _2;
	zend_long bytes;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&kb);
	ZVAL_UNDEF(&mb);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &bytes_param);

	bytes = zephir_get_intval(bytes_param);


	ZVAL_DOUBLE(&_0, zephir_safe_div_long_long(bytes, 1024 TSRMLS_CC));
	ZEPHIR_INIT_VAR(&kb);
	ZVAL_DOUBLE(&kb, zephir_ceil(&_0 TSRMLS_CC));
	if (ZEPHIR_LT_LONG(&kb, 1024)) {
		ZEPHIR_CONCAT_VS(return_value, &kb, "KB");
		RETURN_MM();
	}
	ZVAL_DOUBLE(&_1, zephir_safe_div_zval_long(&kb, 1024 TSRMLS_CC));
	ZVAL_LONG(&_2, 1);
	ZEPHIR_INIT_VAR(&mb);
	zephir_round(&mb, &_1, &_2, NULL TSRMLS_CC);
	ZEPHIR_CONCAT_VS(return_value, &mb, "MB");
	RETURN_MM();

}

PHP_METHOD(Tool_Utils, is_mobile) {

	zend_bool is_mobile;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_3 = NULL;
	zval *_SERVER, user_agent, mobile_agents, device, _0, *_1, _2$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&user_agent);
	ZVAL_UNDEF(&mobile_agents);
	ZVAL_UNDEF(&device);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();
	zephir_get_global(&_SERVER, SL("_SERVER"));
	if (!_SERVER) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}

	ZEPHIR_OBS_VAR(&user_agent);
	zephir_array_fetch_string(&user_agent, _SERVER, SL("HTTP_USER_AGENT"), PH_NOISY, "tool/utils.zep", 33 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&mobile_agents);
	zephir_create_array(&mobile_agents, 149, 0 TSRMLS_CC);
	ZEPHIR_INIT_VAR(&_0);
	ZVAL_STRING(&_0, "240x320");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "acer");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "acoon");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "acs-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "abacho");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "ahong");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "airness");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "alcatel");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "amoi");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "android");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "anywhereyougo.com");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "applewebkit/525");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "applewebkit/532");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "asus");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "audio");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "au-mic");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "avantogo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "becker");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "benq");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "bilbo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "bird");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "blackberry");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "blazer");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "bleu");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "cdm-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "compal");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "coolpad");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "danger");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "dbtel");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "dopod");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "elaine");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "eric");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "etouch");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "fly ");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "fly_");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "fly-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "go.web");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "goodaccess");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "gradiente");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "grundig");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "haier");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "hedy");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "hitachi");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "htc");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "huawei");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "hutchison");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "inno");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "ipad");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "ipaq");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "ipod");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "jbrowser");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "kddi");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "kgt");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "kwc");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lenovo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg ");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg2");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg3");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg4");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg5");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg7");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg8");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg9");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lg-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lge-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "lge9");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "longcos");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "maemo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "mercator");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "meridian");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "micromax");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "midp");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "mini");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "mitsu");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "mmm");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "mmp");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "mobi");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "mot-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "moto");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "nec-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "netfront");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "newgen");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "nexian");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "nf-browser");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "nintendo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "nitro");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "nokia");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "nook");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "novarra");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "obigo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "palm");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "panasonic");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "pantech");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "philips");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "phone");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "pg-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "playstation");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "pocket");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "pt-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "qc-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "qtek");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "rover");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sagem");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sama");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "samu");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sanyo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "samsung");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sch-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "scooter");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sec-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sendo");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sgh-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sharp");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "siemens");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sie-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "softbank");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sony");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "spice");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "sprint");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "spv");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "symbian");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "tablet");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "talkabout");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "tcl-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "teleca");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "telit");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "tianyu");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "tim-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "toshiba");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "tsm");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "up.browser");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "utec");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "utstar");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "verykool");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "virgin");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "vk-");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "voda");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "voxtel");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "vx");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "wap");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "wellco");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "wig browser");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "wii");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "windows ce");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "wireless");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "xda");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "xde");
	zephir_array_fast_append(&mobile_agents, &_0);
	ZEPHIR_INIT_NVAR(&_0);
	ZVAL_STRING(&_0, "zte");
	zephir_array_fast_append(&mobile_agents, &_0);
	is_mobile = 0;
	zephir_is_iterable(&mobile_agents, 0, "tool/utils.zep", 42);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&mobile_agents), _1)
	{
		ZEPHIR_INIT_NVAR(&device);
		ZVAL_COPY(&device, _1);
		ZEPHIR_CALL_FUNCTION(&_2$$3, "stristr", &_3, 2, &user_agent, &device);
		zephir_check_call_status();
		if (zephir_is_true(&_2$$3)) {
			is_mobile = 1;
			break;
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&device);
	RETURN_MM_BOOL(is_mobile);

}

PHP_METHOD(Tool_Utils, get_client_ip) {

	zend_bool adv;
	zval *type_param = NULL, *adv_param = NULL, *_SERVER, _0, ip, arr, pos, longip, _4, _5, _6, _1$$4, _2$$4, _3$$4;
	zend_long type, ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&ip);
	ZVAL_UNDEF(&arr);
	ZVAL_UNDEF(&pos);
	ZVAL_UNDEF(&longip);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_1$$4);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$4);

	ZEPHIR_MM_GROW();
	zephir_get_global(&_SERVER, SL("_SERVER"));
	if (!_SERVER) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}
	zephir_fetch_params(1, 0, 2, &type_param, &adv_param);

	if (!type_param) {
		type = 0;
	} else {
		type = zephir_get_intval(type_param);
	}
	if (!adv_param) {
		adv = 0;
	} else {
		adv = zephir_get_boolval(adv_param);
	}


	ZEPHIR_INIT_VAR(&_0);
	if (type == 1) {
		ZEPHIR_INIT_NVAR(&_0);
		ZVAL_LONG(&_0, 1);
	} else {
		ZEPHIR_INIT_NVAR(&_0);
		ZVAL_LONG(&_0, 0);
	}
	type = zephir_get_numberval(&_0);
	ZEPHIR_INIT_VAR(&ip);
	ZVAL_NULL(&ip);
	if (adv) {
		if (zephir_array_isset_string(_SERVER, SL("HTTP_X_FORWARDED_FOR"))) {
			zephir_array_fetch_string(&_1$$4, _SERVER, SL("HTTP_X_FORWARDED_FOR"), PH_NOISY | PH_READONLY, "tool/utils.zep", 51 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&arr);
			zephir_fast_explode_str(&arr, SL(","), &_1$$4, LONG_MAX TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_2$$4);
			ZVAL_STRING(&_2$$4, "unknown");
			ZEPHIR_CALL_FUNCTION(&pos, "array_search", NULL, 3, &_2$$4, &arr);
			zephir_check_call_status();
			if (!ZEPHIR_IS_FALSE(&pos)) {
				zephir_array_unset(&arr, &pos, PH_SEPARATE);
			}
			zephir_array_fetch_long(&_3$$4, &arr, 0, PH_NOISY | PH_READONLY, "tool/utils.zep", 56 TSRMLS_CC);
			ZEPHIR_INIT_NVAR(&ip);
			zephir_fast_trim(&ip, &_3$$4, NULL , ZEPHIR_TRIM_BOTH TSRMLS_CC);
		} else if (zephir_array_isset_string(_SERVER, SL("HTTP_CLIENT_IP"))) {
			ZEPHIR_OBS_NVAR(&ip);
			zephir_array_fetch_string(&ip, _SERVER, SL("HTTP_CLIENT_IP"), PH_NOISY, "tool/utils.zep", 58 TSRMLS_CC);
		} else if (zephir_array_isset_string(_SERVER, SL("REMOTE_ADDR"))) {
			ZEPHIR_OBS_NVAR(&ip);
			zephir_array_fetch_string(&ip, _SERVER, SL("REMOTE_ADDR"), PH_NOISY, "tool/utils.zep", 60 TSRMLS_CC);
		}
	} else if (zephir_array_isset_string(_SERVER, SL("REMOTE_ADDR"))) {
		ZEPHIR_OBS_NVAR(&ip);
		zephir_array_fetch_string(&ip, _SERVER, SL("REMOTE_ADDR"), PH_NOISY, "tool/utils.zep", 63 TSRMLS_CC);
	}
	ZEPHIR_CALL_FUNCTION(&_4, "ip2long", NULL, 4, &ip);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_5);
	ZVAL_STRING(&_5, "%u");
	ZEPHIR_CALL_FUNCTION(&longip, "sprintf", NULL, 5, &_5, &_4);
	zephir_check_call_status();
	if (zephir_is_true(&longip)) {
		ZEPHIR_INIT_NVAR(&ip);
		zephir_create_array(&ip, 2, 0 TSRMLS_CC);
		zephir_array_fast_append(&ip, &ip);
		zephir_array_fast_append(&ip, &longip);
	} else {
		ZEPHIR_INIT_NVAR(&ip);
		zephir_create_array(&ip, 2, 0 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_5);
		ZVAL_STRING(&_5, "0.0.0.0");
		zephir_array_fast_append(&ip, &_5);
		ZEPHIR_INIT_NVAR(&_5);
		ZVAL_LONG(&_5, 0);
		zephir_array_fast_append(&ip, &_5);
	}
	zephir_array_fetch_long(&_6, &ip, type, PH_NOISY | PH_READONLY, "tool/utils.zep", 67 TSRMLS_CC);
	RETURN_CTOR(&_6);

}

PHP_METHOD(Tool_Utils, is_wechat) {

	zval *_SERVER, ret, _0, _1, _2, _3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&ret);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_3);

	ZEPHIR_MM_GROW();
	zephir_get_global(&_SERVER, SL("_SERVER"));
	if (!_SERVER) {
		ZEPHIR_THROW_EXCEPTION_STR(zend_exception_get_default(), "Invalid superglobal");
		return;
	}

	ZEPHIR_INIT_VAR(&_0);
	zephir_array_fetch_string(&_1, _SERVER, SL("HTTP_USER_AGENT"), PH_NOISY | PH_READONLY, "tool/utils.zep", 72 TSRMLS_CC);
	zephir_fast_strtolower(&_0, &_1);
	ZEPHIR_INIT_VAR(&_2);
	ZEPHIR_INIT_VAR(&_3);
	ZVAL_STRING(&_3, "MicroMessenger");
	zephir_fast_strtolower(&_2, &_3);
	ZEPHIR_INIT_VAR(&ret);
	zephir_fast_strpos(&ret, &_0, &_2, 0 );
	if (!ZEPHIR_IS_FALSE_IDENTICAL(&ret)) {
		RETURN_MM_BOOL(1);
	}
	RETURN_MM_BOOL(0);

}

/**
 * HTTP GET 方法
 * @param  string url
 * @author widuu <admin@widuu.com>
 */
PHP_METHOD(Tool_Utils, httpGet) {

	zephir_fcall_cache_entry *_1 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *url_param = NULL, __$false, curlHandle, content, timeout, _0, _2;
	zval url;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&url);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&curlHandle);
	ZVAL_UNDEF(&content);
	ZVAL_UNDEF(&timeout);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 0, 1, &url_param);

	if (!url_param) {
		ZEPHIR_INIT_VAR(&url);
		ZVAL_STRING(&url, "");
	} else {
	if (UNEXPECTED(Z_TYPE_P(url_param) != IS_STRING && Z_TYPE_P(url_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'url' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(url_param) == IS_STRING)) {
		zephir_get_strval(&url, url_param);
	} else {
		ZEPHIR_INIT_VAR(&url);
		ZVAL_EMPTY_STRING(&url);
	}
	}


	ZEPHIR_INIT_VAR(&timeout);
	ZVAL_LONG(&timeout, ZEPHIR_GLOBAL(curl_timeout));
	ZEPHIR_CALL_FUNCTION(&curlHandle, "curl_init", NULL, 6);
	zephir_check_call_status();
	ZVAL_LONG(&_0, 10002);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 7, &curlHandle, &_0, &url);
	zephir_check_call_status();
	ZVAL_LONG(&_0, 19913);
	ZVAL_LONG(&_2, 1);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 7, &curlHandle, &_0, &_2);
	zephir_check_call_status();
	ZVAL_LONG(&_0, 64);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 7, &curlHandle, &_0, &__$false);
	zephir_check_call_status();
	ZVAL_LONG(&_0, 81);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 7, &curlHandle, &_0, &__$false);
	zephir_check_call_status();
	ZVAL_LONG(&_0, 13);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_1, 7, &curlHandle, &_0, &timeout);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&content, "curl_exec", NULL, 8, &curlHandle);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(NULL, "curl_close", NULL, 9, &curlHandle);
	zephir_check_call_status();
	RETURN_CCTOR(&content);

}

/**
 * HTTP POST 方法
 * @param  string url
 * @param  array  info
 * @author widuu <admin@widuu.com>
 */
PHP_METHOD(Tool_Utils, httpPost) {

	zend_class_entry *_1$$3 = NULL;
	zephir_fcall_cache_entry *_6 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval info;
	zval *url_param = NULL, *info_param = NULL, __$false, curlHandle, content, timeout, _4, _5, _7, _0$$3, _2$$3, _3$$3;
	zval url;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&url);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&curlHandle);
	ZVAL_UNDEF(&content);
	ZVAL_UNDEF(&timeout);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_7);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&info);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &url_param, &info_param);

	zephir_get_arrval(&info, info_param);
	if (!url_param) {
		ZEPHIR_INIT_VAR(&url);
		ZVAL_STRING(&url, "");
	} else {
	if (UNEXPECTED(Z_TYPE_P(url_param) != IS_STRING && Z_TYPE_P(url_param) != IS_NULL)) {
		zephir_throw_exception_string(spl_ce_InvalidArgumentException, SL("Parameter 'url' must be a string") TSRMLS_CC);
		RETURN_MM_NULL();
	}
	if (EXPECTED(Z_TYPE_P(url_param) == IS_STRING)) {
		zephir_get_strval(&url, url_param);
	} else {
		ZEPHIR_INIT_VAR(&url);
		ZVAL_EMPTY_STRING(&url);
	}
	}


	if (1 != 1) {
		ZEPHIR_INIT_VAR(&_0$$3);
		if (!_1$$3) {
		_1$$3 = zephir_fetch_class_str_ex(SL("Tool\\Exception"), ZEND_FETCH_CLASS_AUTO);
		}
		object_init_ex(&_0$$3, _1$$3);
		if (zephir_has_constructor(&_0$$3 TSRMLS_CC)) {
			ZEPHIR_INIT_VAR(&_2$$3);
			ZVAL_STRING(&_2$$3, "infomation must be type array");
			ZVAL_LONG(&_3$$3, 4004);
			ZEPHIR_CALL_METHOD(NULL, &_0$$3, "__construct", NULL, 0, &_2$$3, &_3$$3);
			zephir_check_call_status();
		}
		zephir_throw_exception_debug(&_0$$3, "tool/utils.zep", 108 TSRMLS_CC);
		ZEPHIR_MM_RESTORE();
		return;
	}
	ZEPHIR_INIT_VAR(&timeout);
	ZVAL_LONG(&timeout, ZEPHIR_GLOBAL(curl_timeout));
	ZEPHIR_CALL_FUNCTION(&curlHandle, "curl_init", NULL, 6, &url);
	zephir_check_call_status();
	ZVAL_LONG(&_4, 42);
	ZVAL_LONG(&_5, 0);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_6, 7, &curlHandle, &_4, &_5);
	zephir_check_call_status();
	ZVAL_LONG(&_4, 19913);
	ZVAL_LONG(&_5, 1);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_6, 7, &curlHandle, &_4, &_5);
	zephir_check_call_status();
	ZVAL_LONG(&_4, 47);
	ZVAL_LONG(&_5, 1);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_6, 7, &curlHandle, &_4, &_5);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_7);
	ZVAL_LONG(&_4, 256);
	zephir_json_encode(&_7, &info, zephir_get_intval(&_4) );
	ZVAL_LONG(&_5, 10015);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_6, 7, &curlHandle, &_5, &_7);
	zephir_check_call_status();
	ZVAL_LONG(&_5, 64);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_6, 7, &curlHandle, &_5, &__$false);
	zephir_check_call_status();
	ZVAL_LONG(&_5, 81);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_6, 7, &curlHandle, &_5, &__$false);
	zephir_check_call_status();
	ZVAL_LONG(&_5, 13);
	ZEPHIR_CALL_FUNCTION(NULL, "curl_setopt", &_6, 7, &curlHandle, &_5, &timeout);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(&content, "curl_exec", NULL, 8, &curlHandle);
	zephir_check_call_status();
	ZEPHIR_CALL_FUNCTION(NULL, "curl_close", NULL, 9, &curlHandle);
	zephir_check_call_status();
	RETURN_CCTOR(&content);

}

