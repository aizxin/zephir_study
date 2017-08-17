
extern zend_class_entry *tool_utils_ce;

ZEPHIR_INIT_CLASS(Tool_Utils);

PHP_METHOD(Tool_Utils, is_valid_email);
PHP_METHOD(Tool_Utils, is_valid_num);
PHP_METHOD(Tool_Utils, is_valid_mobile);
PHP_METHOD(Tool_Utils, show_filesize);
PHP_METHOD(Tool_Utils, is_mobile);
PHP_METHOD(Tool_Utils, get_client_ip);
PHP_METHOD(Tool_Utils, is_wechat);
PHP_METHOD(Tool_Utils, httpGet);
PHP_METHOD(Tool_Utils, httpPost);

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_utils_is_valid_email, 0, 0, 1)
	ZEND_ARG_INFO(0, email)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_utils_is_valid_num, 0, 0, 1)
	ZEND_ARG_INFO(0, num)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_utils_is_valid_mobile, 0, 0, 1)
	ZEND_ARG_INFO(0, mobile)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_utils_show_filesize, 0, 0, 1)
	ZEND_ARG_INFO(0, bytes)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_utils_get_client_ip, 0, 0, 0)
	ZEND_ARG_INFO(0, type)
	ZEND_ARG_INFO(0, adv)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_utils_httpget, 0, 0, 0)
	ZEND_ARG_INFO(0, url)
ZEND_END_ARG_INFO()

ZEND_BEGIN_ARG_INFO_EX(arginfo_tool_utils_httppost, 0, 0, 1)
	ZEND_ARG_INFO(0, url)
	ZEND_ARG_ARRAY_INFO(0, info, 0)
ZEND_END_ARG_INFO()

ZEPHIR_INIT_FUNCS(tool_utils_method_entry) {
	PHP_ME(Tool_Utils, is_valid_email, arginfo_tool_utils_is_valid_email, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, is_valid_num, arginfo_tool_utils_is_valid_num, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, is_valid_mobile, arginfo_tool_utils_is_valid_mobile, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, show_filesize, arginfo_tool_utils_show_filesize, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, is_mobile, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, get_client_ip, arginfo_tool_utils_get_client_ip, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, is_wechat, NULL, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, httpGet, arginfo_tool_utils_httpget, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_ME(Tool_Utils, httpPost, arginfo_tool_utils_httppost, ZEND_ACC_PUBLIC|ZEND_ACC_STATIC)
	PHP_FE_END
};
