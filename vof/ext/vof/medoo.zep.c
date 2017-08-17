
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
#include "kernel/array.h"
#include "kernel/string.h"
#include "kernel/object.h"
#include "kernel/exception.h"
#include "kernel/fcall.h"
#include "kernel/operators.h"
#include "kernel/concat.h"
#include "ext/pdo/php_pdo_driver.h"
#include "ext/spl/spl_exceptions.h"
#include "kernel/variables.h"


/**
 * Vof\Medoo
 * Medoo database framework
 * https://medoo.in
 * Version 1.4.5
 *
 * <code>
 *
 * 	use Vof\Medoo;
 *
 *	$database = new Medoo([
 *		// required
 *		'database_type' => 'mysql',
 *		'database_name' => 'name',
 *		'server' => 'localhost',
 *		'username' => 'your_username',
 *		'password' => 'your_password',
 *
 *		// [optional]
 *		'charset' => 'utf8',
 *		'port' => 3306,
 *
 *		// [optional] Table prefix
 *		'prefix' => 'PREFIX_',
 *
 *		// [optional] Enable logging (Logging is disabled by default for better performance)
 *		'logging' => true,
 *
 *		// [optional] MySQL socket (shouldn't be used with server and port)
 *		'socket' => '/tmp/mysql.sock',
 *
 *		// [optional] driver_option for connection, read more from http://www.php.net/manual/en/pdo.setattribute.php
 *		'option' => [
 *			PDO::ATTR_CASE => PDO::CASE_NATURAL
 *		],
 *
 *		// [optional] Medoo will execute those commands after connected to the database for initialization
 *		'command' => [
 *			'SET SQL_MODE=ANSI_QUOTES'
 *		]
 *	]);
 *</code>
 */
ZEPHIR_INIT_CLASS(Vof_Medoo) {

	ZEPHIR_REGISTER_CLASS(Vof, Medoo, vof, medoo, vof_medoo_method_entry, 0);

	zend_declare_property_null(vof_medoo_ce, SL("pdo"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(vof_medoo_ce, SL("database_type"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(vof_medoo_ce, SL("prefix"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(vof_medoo_ce, SL("statement"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(vof_medoo_ce, SL("option"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_null(vof_medoo_ce, SL("logs"), ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_bool(vof_medoo_ce, SL("logging"), 0, ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_bool(vof_medoo_ce, SL("debug_mode"), 0, ZEND_ACC_PROTECTED TSRMLS_CC);

	zend_declare_property_long(vof_medoo_ce, SL("guid"), 0, ZEND_ACC_PROTECTED TSRMLS_CC);

	vof_medoo_ce->create_object = zephir_init_properties_Vof_Medoo;
	return SUCCESS;

}

PHP_METHOD(Vof_Medoo, __construct) {

	zend_string *_50$$3;
	zend_ulong _49$$3;
	zend_bool is_port = 0, _6$$3, _9$$3, _56$$3, _14$$14;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *options_param = NULL, commands, attr, port, driver, stack, key, value, dsn, e, _64, _0$$5, _1$$5, _2$$6, _3$$6, _4$$7, _5$$8, _7$$3, _10$$3, *_48$$3, _52$$3, _53$$3, _55$$3, _59$$3, _60$$3, _61$$3, *_62$$3, _8$$9, _11$$11, _12$$13, _13$$13, _15$$14, _16$$14, _17$$14, _18$$16, _19$$17, _22$$17, _20$$18, _21$$19, _23$$21, _24$$23, _25$$25, _26$$25, _27$$25, _28$$25, _29$$25, _30$$26, _31$$27, _32$$27, _33$$27, _34$$28, _35$$28, _36$$28, _37$$28, _38$$29, _39$$29, _40$$29, _41$$29, _42$$30, _43$$30, _44$$30, _45$$30, _46$$30, _47$$30, _51$$33, _57$$34, _58$$34, _63$$35, _65$$36, _66$$36;
	zval options, _54$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&options);
	ZVAL_UNDEF(&_54$$3);
	ZVAL_UNDEF(&commands);
	ZVAL_UNDEF(&attr);
	ZVAL_UNDEF(&port);
	ZVAL_UNDEF(&driver);
	ZVAL_UNDEF(&stack);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&dsn);
	ZVAL_UNDEF(&e);
	ZVAL_UNDEF(&_64);
	ZVAL_UNDEF(&_0$$5);
	ZVAL_UNDEF(&_1$$5);
	ZVAL_UNDEF(&_2$$6);
	ZVAL_UNDEF(&_3$$6);
	ZVAL_UNDEF(&_4$$7);
	ZVAL_UNDEF(&_5$$8);
	ZVAL_UNDEF(&_7$$3);
	ZVAL_UNDEF(&_10$$3);
	ZVAL_UNDEF(&_52$$3);
	ZVAL_UNDEF(&_53$$3);
	ZVAL_UNDEF(&_55$$3);
	ZVAL_UNDEF(&_59$$3);
	ZVAL_UNDEF(&_60$$3);
	ZVAL_UNDEF(&_61$$3);
	ZVAL_UNDEF(&_8$$9);
	ZVAL_UNDEF(&_11$$11);
	ZVAL_UNDEF(&_12$$13);
	ZVAL_UNDEF(&_13$$13);
	ZVAL_UNDEF(&_15$$14);
	ZVAL_UNDEF(&_16$$14);
	ZVAL_UNDEF(&_17$$14);
	ZVAL_UNDEF(&_18$$16);
	ZVAL_UNDEF(&_19$$17);
	ZVAL_UNDEF(&_22$$17);
	ZVAL_UNDEF(&_20$$18);
	ZVAL_UNDEF(&_21$$19);
	ZVAL_UNDEF(&_23$$21);
	ZVAL_UNDEF(&_24$$23);
	ZVAL_UNDEF(&_25$$25);
	ZVAL_UNDEF(&_26$$25);
	ZVAL_UNDEF(&_27$$25);
	ZVAL_UNDEF(&_28$$25);
	ZVAL_UNDEF(&_29$$25);
	ZVAL_UNDEF(&_30$$26);
	ZVAL_UNDEF(&_31$$27);
	ZVAL_UNDEF(&_32$$27);
	ZVAL_UNDEF(&_33$$27);
	ZVAL_UNDEF(&_34$$28);
	ZVAL_UNDEF(&_35$$28);
	ZVAL_UNDEF(&_36$$28);
	ZVAL_UNDEF(&_37$$28);
	ZVAL_UNDEF(&_38$$29);
	ZVAL_UNDEF(&_39$$29);
	ZVAL_UNDEF(&_40$$29);
	ZVAL_UNDEF(&_41$$29);
	ZVAL_UNDEF(&_42$$30);
	ZVAL_UNDEF(&_43$$30);
	ZVAL_UNDEF(&_44$$30);
	ZVAL_UNDEF(&_45$$30);
	ZVAL_UNDEF(&_46$$30);
	ZVAL_UNDEF(&_47$$30);
	ZVAL_UNDEF(&_51$$33);
	ZVAL_UNDEF(&_57$$34);
	ZVAL_UNDEF(&_58$$34);
	ZVAL_UNDEF(&_63$$35);
	ZVAL_UNDEF(&_65$$36);
	ZVAL_UNDEF(&_66$$36);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &options_param);

	ZEPHIR_OBS_COPY_OR_DUP(&options, options_param);


	ZEPHIR_INIT_VAR(&commands);
	array_init(&commands);
	ZEPHIR_INIT_VAR(&attr);
	array_init(&attr);
	ZEPHIR_INIT_VAR(&stack);
	array_init(&stack);

	/* try_start_1: */

		if (Z_TYPE_P(&options) == IS_ARRAY) {
			if (zephir_array_isset_string(&options, SL("database_type"))) {
				ZEPHIR_INIT_VAR(&_0$$5);
				zephir_array_fetch_string(&_1$$5, &options, SL("database_type"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 95 TSRMLS_CC);
				zephir_fast_strtolower(&_0$$5, &_1$$5);
				zephir_update_property_zval(this_ptr, SL("database_type"), &_0$$5);
			}
		} else {
			ZEPHIR_INIT_VAR(&_2$$6);
			object_init_ex(&_2$$6, zend_exception_get_default(TSRMLS_C));
			ZEPHIR_INIT_VAR(&_3$$6);
			ZVAL_STRING(&_3$$6, "option is not array");
			ZEPHIR_CALL_METHOD(NULL, &_2$$6, "__construct", NULL, 19, &_3$$6);
			zephir_check_call_status_or_jump(try_end_1);
			zephir_throw_exception_debug(&_2$$6, "vof/medoo.zep", 99 TSRMLS_CC);
			goto try_end_1;

		}
		if (zephir_array_isset_string(&options, SL("prefix"))) {
			zephir_array_fetch_string(&_4$$7, &options, SL("prefix"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 104 TSRMLS_CC);
			zephir_update_property_zval(this_ptr, SL("prefix"), &_4$$7);
		}
		if (zephir_array_isset_string(&options, SL("option"))) {
			zephir_array_fetch_string(&_5$$8, &options, SL("option"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 109 TSRMLS_CC);
			zephir_update_property_zval(this_ptr, SL("option"), &_5$$8);
		}
		_6$$3 = zephir_array_isset_string(&options, SL("logging"));
		if (_6$$3) {
			zephir_array_fetch_string(&_7$$3, &options, SL("logging"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 112 TSRMLS_CC);
			_6$$3 = (Z_TYPE_P(&_7$$3) == IS_TRUE || Z_TYPE_P(&_7$$3) == IS_FALSE);
		}
		if (_6$$3) {
			zephir_array_fetch_string(&_8$$9, &options, SL("logging"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 114 TSRMLS_CC);
			zephir_update_property_zval(this_ptr, SL("logging"), &_8$$9);
		}
		_9$$3 = zephir_array_isset_string(&options, SL("command"));
		if (_9$$3) {
			zephir_array_fetch_string(&_10$$3, &options, SL("command"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 117 TSRMLS_CC);
			_9$$3 = Z_TYPE_P(&_10$$3) == IS_ARRAY;
		}
		if (_9$$3) {
			ZEPHIR_OBS_NVAR(&commands);
			zephir_array_fetch_string(&commands, &options, SL("command"), PH_NOISY, "vof/medoo.zep", 119 TSRMLS_CC);
		}
		if (zephir_array_isset_string(&options, SL("dsn"))) {
			zephir_array_fetch_string(&_11$$11, &options, SL("dsn"), PH_READONLY, "vof/medoo.zep", 124 TSRMLS_CC);
			if (zephir_array_isset_string(&_11$$11, SL("driver"))) {
				ZEPHIR_OBS_NVAR(&attr);
				zephir_array_fetch_string(&attr, &options, SL("dsn"), PH_NOISY, "vof/medoo.zep", 126 TSRMLS_CC);
			} else {
				ZEPHIR_INIT_VAR(&_12$$13);
				object_init_ex(&_12$$13, zend_exception_get_default(TSRMLS_C));
				ZEPHIR_INIT_VAR(&_13$$13);
				ZVAL_STRING(&_13$$13, "option is not array");
				ZEPHIR_CALL_METHOD(NULL, &_12$$13, "__construct", NULL, 19, &_13$$13);
				zephir_check_call_status_or_jump(try_end_1);
				zephir_throw_exception_debug(&_12$$13, "vof/medoo.zep", 131 TSRMLS_CC);
				goto try_end_1;

			}
		} else {
			_14$$14 = zephir_array_isset_string(&options, SL("port"));
			if (_14$$14) {
				zephir_array_fetch_string(&_15$$14, &options, SL("port"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 136 TSRMLS_CC);
				ZVAL_LONG(&_16$$14, (zephir_get_numberval(&_15$$14) * 1));
				_14$$14 = Z_TYPE_P(&_16$$14) == IS_LONG;
			}
			if (_14$$14) {
				ZEPHIR_OBS_VAR(&port);
				zephir_array_fetch_string(&port, &options, SL("port"), PH_NOISY, "vof/medoo.zep", 139 TSRMLS_CC);
			}
			is_port = zephir_array_isset_string(&options, SL("port"));
			ZEPHIR_OBS_VAR(&_17$$14);
			zephir_read_property(&_17$$14, this_ptr, SL("database_type"), PH_NOISY_CC);
			do {
				if (ZEPHIR_IS_STRING(&_17$$14, "mariadb")) {
					ZEPHIR_INIT_VAR(&_18$$16);
					ZEPHIR_INIT_NVAR(&_18$$16);
					ZVAL_STRING(&_18$$16, "mysql");
					zephir_update_property_zval(this_ptr, SL("database_type"), &_18$$16);
					break;
				}
				if (ZEPHIR_IS_STRING(&_17$$14, "mysql")) {
					ZEPHIR_INIT_NVAR(&attr);
					zephir_create_array(&attr, 2, 0 TSRMLS_CC);
					add_assoc_stringl_ex(&attr, SL("driver"), SL("mysql"));
					ZEPHIR_OBS_VAR(&_19$$17);
					zephir_array_fetch_string(&_19$$17, &options, SL("database_name"), PH_NOISY, "vof/medoo.zep", 150 TSRMLS_CC);
					zephir_array_update_string(&attr, SL("dbname"), &_19$$17, PH_COPY | PH_SEPARATE);
					if (zephir_array_isset_string(&options, SL("socket"))) {
						zephir_array_fetch_string(&_20$$18, &options, SL("socket"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 153 TSRMLS_CC);
						zephir_array_update_string(&attr, SL("unix_socket"), &_20$$18, PH_COPY | PH_SEPARATE);
					} else {
						zephir_array_fetch_string(&_21$$19, &options, SL("server"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 157 TSRMLS_CC);
						zephir_array_update_string(&attr, SL("host"), &_21$$19, PH_COPY | PH_SEPARATE);
						if (is_port) {
							zephir_array_update_string(&attr, SL("port"), &port, PH_COPY | PH_SEPARATE);
						}
					}
					ZEPHIR_INIT_VAR(&_22$$17);
					ZVAL_STRING(&_22$$17, "SET SQL_MODE=ANSI_QUOTES");
					zephir_array_append(&commands, &_22$$17, PH_SEPARATE, "vof/medoo.zep", 164);
					break;
				}
				if (ZEPHIR_IS_STRING(&_17$$14, "pgsql")) {
					ZEPHIR_INIT_NVAR(&attr);
					zephir_create_array(&attr, 3, 0 TSRMLS_CC);
					add_assoc_stringl_ex(&attr, SL("driver"), SL("pgsql"));
					ZEPHIR_OBS_VAR(&_23$$21);
					zephir_array_fetch_string(&_23$$21, &options, SL("server"), PH_NOISY, "vof/medoo.zep", 168 TSRMLS_CC);
					zephir_array_update_string(&attr, SL("host"), &_23$$21, PH_COPY | PH_SEPARATE);
					ZEPHIR_OBS_NVAR(&_23$$21);
					zephir_array_fetch_string(&_23$$21, &options, SL("database_name"), PH_NOISY, "vof/medoo.zep", 168 TSRMLS_CC);
					zephir_array_update_string(&attr, SL("dbname"), &_23$$21, PH_COPY | PH_SEPARATE);
					if (is_port) {
						zephir_array_update_string(&attr, SL("port"), &port, PH_COPY | PH_SEPARATE);
					}
					break;
				}
				if (ZEPHIR_IS_STRING(&_17$$14, "sybase")) {
					ZEPHIR_INIT_NVAR(&attr);
					zephir_create_array(&attr, 3, 0 TSRMLS_CC);
					add_assoc_stringl_ex(&attr, SL("driver"), SL("dblib"));
					ZEPHIR_OBS_VAR(&_24$$23);
					zephir_array_fetch_string(&_24$$23, &options, SL("server"), PH_NOISY, "vof/medoo.zep", 179 TSRMLS_CC);
					zephir_array_update_string(&attr, SL("host"), &_24$$23, PH_COPY | PH_SEPARATE);
					ZEPHIR_OBS_NVAR(&_24$$23);
					zephir_array_fetch_string(&_24$$23, &options, SL("database_name"), PH_NOISY, "vof/medoo.zep", 181 TSRMLS_CC);
					zephir_array_update_string(&attr, SL("dbname"), &_24$$23, PH_COPY | PH_SEPARATE);
					if (is_port) {
						zephir_array_update_string(&attr, SL("port"), &port, PH_COPY | PH_SEPARATE);
					}
					break;
				}
				if (ZEPHIR_IS_STRING(&_17$$14, "oracle")) {
					ZEPHIR_INIT_NVAR(&attr);
					zephir_create_array(&attr, 2, 0 TSRMLS_CC);
					add_assoc_stringl_ex(&attr, SL("driver"), SL("oci"));
					ZEPHIR_INIT_VAR(&_25$$25);
					zephir_array_fetch_string(&_26$$25, &options, SL("server"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 193 TSRMLS_CC);
					if (zephir_is_true(&_26$$25)) {
						zephir_array_fetch_string(&_27$$25, &options, SL("server"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 193 TSRMLS_CC);
						ZEPHIR_INIT_VAR(&_28$$25);
						if (is_port) {
							ZEPHIR_INIT_NVAR(&_28$$25);
							ZEPHIR_CONCAT_SV(&_28$$25, ":", &port);
						} else {
							ZEPHIR_INIT_NVAR(&_28$$25);
							ZVAL_STRING(&_28$$25, ":1521");
						}
						zephir_array_fetch_string(&_29$$25, &options, SL("database_name"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 193 TSRMLS_CC);
						ZEPHIR_INIT_NVAR(&_25$$25);
						ZEPHIR_CONCAT_SVVSV(&_25$$25, "//", &_27$$25, &_28$$25, "/", &_29$$25);
					} else {
						ZEPHIR_OBS_NVAR(&_25$$25);
						zephir_array_fetch_string(&_25$$25, &options, SL("database_name"), PH_NOISY, "vof/medoo.zep", 194 TSRMLS_CC);
					}
					zephir_array_update_string(&attr, SL("dbname"), &_25$$25, PH_COPY | PH_SEPARATE);
					if (zephir_array_isset_string(&options, SL("charset"))) {
						zephir_array_fetch_string(&_30$$26, &options, SL("charset"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 198 TSRMLS_CC);
						zephir_array_update_string(&attr, SL("charset"), &_30$$26, PH_COPY | PH_SEPARATE);
					}
					break;
				}
				if (ZEPHIR_IS_STRING(&_17$$14, "mssql")) {
					ZEPHIR_INIT_VAR(&_31$$27);
					ZEPHIR_GET_CONSTANT(&_31$$27, "PHP_OS");
					ZEPHIR_INIT_VAR(&_32$$27);
					ZVAL_STRING(&_32$$27, "WIN");
					ZEPHIR_CALL_FUNCTION(&_33$$27, "strstr", NULL, 49, &_31$$27, &_32$$27);
					zephir_check_call_status_or_jump(try_end_1);
					ZEPHIR_INIT_NVAR(&attr);
					if (zephir_is_true(&_33$$27)) {
						zephir_create_array(&attr, 3, 0 TSRMLS_CC);
						add_assoc_stringl_ex(&attr, SL("driver"), SL("sqlsrv"));
						zephir_array_fetch_string(&_34$$28, &options, SL("server"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 208 TSRMLS_CC);
						ZEPHIR_INIT_VAR(&_35$$28);
						if (is_port) {
							ZEPHIR_INIT_NVAR(&_35$$28);
							ZEPHIR_CONCAT_SV(&_35$$28, ",", &port);
						} else {
							ZEPHIR_INIT_NVAR(&_35$$28);
							ZVAL_STRING(&_35$$28, "");
						}
						ZEPHIR_INIT_VAR(&_36$$28);
						ZEPHIR_CONCAT_VV(&_36$$28, &_34$$28, &_35$$28);
						zephir_array_update_string(&attr, SL("Server"), &_36$$28, PH_COPY | PH_SEPARATE);
						ZEPHIR_OBS_VAR(&_37$$28);
						zephir_array_fetch_string(&_37$$28, &options, SL("database_name"), PH_NOISY, "vof/medoo.zep", 210 TSRMLS_CC);
						zephir_array_update_string(&attr, SL("Database"), &_37$$28, PH_COPY | PH_SEPARATE);
					} else {
						zephir_create_array(&attr, 3, 0 TSRMLS_CC);
						add_assoc_stringl_ex(&attr, SL("driver"), SL("dblib"));
						zephir_array_fetch_string(&_38$$29, &options, SL("server"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 216 TSRMLS_CC);
						ZEPHIR_INIT_VAR(&_39$$29);
						if (is_port) {
							ZEPHIR_INIT_NVAR(&_39$$29);
							ZEPHIR_CONCAT_SV(&_39$$29, ":", &port);
						} else {
							ZEPHIR_INIT_NVAR(&_39$$29);
							ZVAL_STRING(&_39$$29, "");
						}
						ZEPHIR_INIT_VAR(&_40$$29);
						ZEPHIR_CONCAT_VV(&_40$$29, &_38$$29, &_39$$29);
						zephir_array_update_string(&attr, SL("host"), &_40$$29, PH_COPY | PH_SEPARATE);
						ZEPHIR_OBS_VAR(&_41$$29);
						zephir_array_fetch_string(&_41$$29, &options, SL("database_name"), PH_NOISY, "vof/medoo.zep", 218 TSRMLS_CC);
						zephir_array_update_string(&attr, SL("dbname"), &_41$$29, PH_COPY | PH_SEPARATE);
					}
					ZEPHIR_INIT_NVAR(&_32$$27);
					ZVAL_STRING(&_32$$27, "SET QUOTED_IDENTIFIER ON");
					zephir_array_append(&commands, &_32$$27, PH_SEPARATE, "vof/medoo.zep", 222);
					ZEPHIR_INIT_NVAR(&_32$$27);
					ZVAL_STRING(&_32$$27, "SET ANSI_NULLS ON");
					zephir_array_append(&commands, &_32$$27, PH_SEPARATE, "vof/medoo.zep", 225);
					break;
				}
				if (ZEPHIR_IS_STRING(&_17$$14, "sqlite")) {
					ZEPHIR_INIT_VAR(&_42$$30);
					object_init_ex(&_42$$30, php_pdo_get_dbh_ce());
					zephir_array_fetch_string(&_43$$30, &options, SL("database_file"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 229 TSRMLS_CC);
					ZEPHIR_INIT_VAR(&_44$$30);
					ZEPHIR_CONCAT_SV(&_44$$30, "sqlite:", &_43$$30);
					zephir_read_property(&_45$$30, this_ptr, SL("option"), PH_NOISY_CC | PH_READONLY);
					ZVAL_NULL(&_46$$30);
					ZVAL_NULL(&_47$$30);
					ZEPHIR_CALL_METHOD(NULL, &_42$$30, "__construct", NULL, 0, &_44$$30, &_46$$30, &_47$$30, &_45$$30);
					zephir_check_call_status_or_jump(try_end_1);
					zephir_update_property_zval(this_ptr, SL("pdo"), &_42$$30);
					break;
				}
			} while(0);

		}
		ZEPHIR_OBS_VAR(&driver);
		zephir_array_fetch_string(&driver, &attr, SL("driver"), PH_NOISY, "vof/medoo.zep", 234 TSRMLS_CC);
		zephir_array_unset_string(&attr, SL("driver"), PH_SEPARATE);
		zephir_is_iterable(&attr, 0, "vof/medoo.zep", 249);
		ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&attr), _49$$3, _50$$3, _48$$3)
		{
			ZEPHIR_INIT_NVAR(&key);
			if (_50$$3 != NULL) { 
				ZVAL_STR_COPY(&key, _50$$3);
			} else {
				ZVAL_LONG(&key, _49$$3);
			}
			ZEPHIR_INIT_NVAR(&value);
			ZVAL_COPY(&value, _48$$3);
			if (Z_TYPE_P(&key) == IS_LONG) {
				zephir_array_append(&stack, &value, PH_SEPARATE, "vof/medoo.zep", 241);
			} else {
				ZEPHIR_INIT_LNVAR(_51$$33);
				ZEPHIR_CONCAT_VSV(&_51$$33, &key, "=", &value);
				zephir_array_append(&stack, &_51$$33, PH_SEPARATE, "vof/medoo.zep", 245);
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&value);
		ZEPHIR_INIT_NVAR(&key);
		ZEPHIR_INIT_VAR(&_52$$3);
		zephir_fast_join_str(&_52$$3, SL(";"), &stack TSRMLS_CC);
		ZEPHIR_INIT_VAR(&dsn);
		ZEPHIR_CONCAT_VSV(&dsn, &driver, ":", &_52$$3);
		zephir_read_property(&_53$$3, this_ptr, SL("database_type"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_VAR(&_54$$3);
		zephir_create_array(&_54$$3, 5, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_55$$3);
		ZVAL_STRING(&_55$$3, "mariadb");
		zephir_array_fast_append(&_54$$3, &_55$$3);
		ZEPHIR_INIT_NVAR(&_55$$3);
		ZVAL_STRING(&_55$$3, "mysql");
		zephir_array_fast_append(&_54$$3, &_55$$3);
		ZEPHIR_INIT_NVAR(&_55$$3);
		ZVAL_STRING(&_55$$3, "pgsql");
		zephir_array_fast_append(&_54$$3, &_55$$3);
		ZEPHIR_INIT_NVAR(&_55$$3);
		ZVAL_STRING(&_55$$3, "sybase");
		zephir_array_fast_append(&_54$$3, &_55$$3);
		ZEPHIR_INIT_NVAR(&_55$$3);
		ZVAL_STRING(&_55$$3, "mssql");
		zephir_array_fast_append(&_54$$3, &_55$$3);
		_56$$3 = zephir_fast_in_array(&_53$$3, &_54$$3 TSRMLS_CC);
		if (_56$$3) {
			_56$$3 = zephir_array_isset_string(&options, SL("charset"));
		}
		if (_56$$3) {
			zephir_array_fetch_string(&_57$$34, &options, SL("charset"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 256 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_58$$34);
			ZEPHIR_CONCAT_SVS(&_58$$34, "SET NAMES '", &_57$$34, "'");
			zephir_array_append(&commands, &_58$$34, PH_SEPARATE, "vof/medoo.zep", 256);
		}
		ZEPHIR_INIT_NVAR(&_55$$3);
		object_init_ex(&_55$$3, php_pdo_get_dbh_ce());
		zephir_array_fetch_string(&_59$$3, &options, SL("username"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 260 TSRMLS_CC);
		zephir_array_fetch_string(&_60$$3, &options, SL("password"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 261 TSRMLS_CC);
		zephir_read_property(&_61$$3, this_ptr, SL("option"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(NULL, &_55$$3, "__construct", NULL, 0, &dsn, &_59$$3, &_60$$3, &_61$$3);
		zephir_check_call_status_or_jump(try_end_1);
		zephir_update_property_zval(this_ptr, SL("pdo"), &_55$$3);
		zephir_is_iterable(&commands, 0, "vof/medoo.zep", 268);
		ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&commands), _62$$3)
		{
			ZEPHIR_INIT_NVAR(&value);
			ZVAL_COPY(&value, _62$$3);
			zephir_read_property(&_63$$35, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(NULL, &_63$$35, "exec", NULL, 0, &value);
			zephir_check_call_status_or_jump(try_end_1);
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&value);

	try_end_1:

	if (EG(exception)) {
		ZEPHIR_INIT_VAR(&_64);
		ZVAL_OBJ(&_64, EG(exception));
		Z_ADDREF_P(&_64);
		if (zephir_instance_of_ev(&_64, php_pdo_get_exception() TSRMLS_CC)) {
			zend_clear_exception(TSRMLS_C);
			ZEPHIR_CPY_WRT(&e, &_64);
			ZEPHIR_INIT_VAR(&_65$$36);
			object_init_ex(&_65$$36, zend_exception_get_default(TSRMLS_C));
			ZEPHIR_CALL_METHOD(&_66$$36, &e, "getmessage", NULL, 0);
			zephir_check_call_status();
			ZEPHIR_CALL_METHOD(NULL, &_65$$36, "__construct", NULL, 19, &_66$$36);
			zephir_check_call_status();
			zephir_throw_exception_debug(&_65$$36, "vof/medoo.zep", 270 TSRMLS_CC);
			ZEPHIR_MM_RESTORE();
			return;
		}
	}
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Vof_Medoo, query) {

	zval _4$$5, _6$$6, _8$$7, _11$$8, _13$$9;
	zend_string *_2$$3;
	zend_ulong _1$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *query, query_sub, *map = NULL, map_sub, __$null, key, value, *_0$$3, _3$$4, _5$$5, _7$$6, _9$$7, _10$$7, _12$$8, _14$$9;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&query_sub);
	ZVAL_UNDEF(&map_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_5$$5);
	ZVAL_UNDEF(&_7$$6);
	ZVAL_UNDEF(&_9$$7);
	ZVAL_UNDEF(&_10$$7);
	ZVAL_UNDEF(&_12$$8);
	ZVAL_UNDEF(&_14$$9);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_6$$6);
	ZVAL_UNDEF(&_8$$7);
	ZVAL_UNDEF(&_11$$8);
	ZVAL_UNDEF(&_13$$9);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 1, &query, &map);

	if (!map) {
		map = &map_sub;
		ZEPHIR_INIT_VAR(map);
		array_init(map);
	} else {
		ZEPHIR_SEPARATE_PARAM(map);
	}


	if (!(ZEPHIR_IS_EMPTY(map))) {
		zephir_is_iterable(map, 1, "vof/medoo.zep", 301);
		ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(map), _1$$3, _2$$3, _0$$3)
		{
			ZEPHIR_INIT_NVAR(&key);
			if (_2$$3 != NULL) { 
				ZVAL_STR_COPY(&key, _2$$3);
			} else {
				ZVAL_LONG(&key, _1$$3);
			}
			ZEPHIR_INIT_NVAR(&value);
			ZVAL_COPY(&value, _0$$3);
			ZEPHIR_INIT_NVAR(&_3$$4);
			zephir_gettype(&_3$$4, &value TSRMLS_CC);
			do {
				if (ZEPHIR_IS_STRING(&_3$$4, "NULL")) {
					ZEPHIR_INIT_NVAR(&_4$$5);
					zephir_create_array(&_4$$5, 2, 0 TSRMLS_CC);
					zephir_array_fast_append(&_4$$5, &__$null);
					ZEPHIR_INIT_NVAR(&_5$$5);
					ZVAL_LONG(&_5$$5, 0);
					zephir_array_fast_append(&_4$$5, &_5$$5);
					zephir_array_update_zval(map, &key, &_4$$5, PH_COPY | PH_SEPARATE);
					break;
				}
				if (ZEPHIR_IS_STRING(&_3$$4, "resource")) {
					ZEPHIR_INIT_NVAR(&_6$$6);
					zephir_create_array(&_6$$6, 2, 0 TSRMLS_CC);
					zephir_array_fast_append(&_6$$6, &value);
					ZEPHIR_INIT_NVAR(&_7$$6);
					ZVAL_LONG(&_7$$6, 3);
					zephir_array_fast_append(&_6$$6, &_7$$6);
					zephir_array_update_zval(map, &key, &_6$$6, PH_COPY | PH_SEPARATE);
					break;
				}
				if (ZEPHIR_IS_STRING(&_3$$4, "boolean")) {
					ZEPHIR_INIT_NVAR(&_8$$7);
					zephir_create_array(&_8$$7, 2, 0 TSRMLS_CC);
					ZEPHIR_INIT_LNVAR(_9$$7);
					if (zephir_is_true(&value)) {
						ZEPHIR_INIT_NVAR(&_9$$7);
						ZVAL_LONG(&_9$$7, 1);
					} else {
						ZEPHIR_INIT_NVAR(&_9$$7);
						ZVAL_LONG(&_9$$7, 0);
					}
					zephir_array_fast_append(&_8$$7, &_9$$7);
					ZEPHIR_INIT_NVAR(&_10$$7);
					ZVAL_LONG(&_10$$7, 5);
					zephir_array_fast_append(&_8$$7, &_10$$7);
					zephir_array_update_zval(map, &key, &_8$$7, PH_COPY | PH_SEPARATE);
					break;
				}
				if (ZEPHIR_IS_STRING(&_3$$4, "integer") || ZEPHIR_IS_STRING(&_3$$4, "double")) {
					ZEPHIR_INIT_NVAR(&_11$$8);
					zephir_create_array(&_11$$8, 2, 0 TSRMLS_CC);
					zephir_array_fast_append(&_11$$8, &value);
					ZEPHIR_INIT_NVAR(&_12$$8);
					ZVAL_LONG(&_12$$8, 1);
					zephir_array_fast_append(&_11$$8, &_12$$8);
					zephir_array_update_zval(map, &key, &_11$$8, PH_COPY | PH_SEPARATE);
					break;
				}
				if (ZEPHIR_IS_STRING(&_3$$4, "string")) {
					ZEPHIR_INIT_NVAR(&_13$$9);
					zephir_create_array(&_13$$9, 2, 0 TSRMLS_CC);
					zephir_array_fast_append(&_13$$9, &value);
					ZEPHIR_INIT_NVAR(&_14$$9);
					ZVAL_LONG(&_14$$9, 2);
					zephir_array_fast_append(&_13$$9, &_14$$9);
					zephir_array_update_zval(map, &key, &_13$$9, PH_COPY | PH_SEPARATE);
					break;
				}
			} while(0);

		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&value);
		ZEPHIR_INIT_NVAR(&key);
	}
	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "exec", NULL, 0, query, map);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, exec) {

	zend_string *_9$$7;
	zend_ulong _8$$7;
	zval _3$$4, _4$$5, _5$$5;
	zephir_fcall_cache_entry *_12 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *query, query_sub, *map, map_sub, __$true, __$false, statement, key, value, _0, _2, _6, _1$$3, *_7$$7, _10$$8, _11$$8;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&query_sub);
	ZVAL_UNDEF(&map_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);
	ZVAL_UNDEF(&statement);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_6);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_10$$8);
	ZVAL_UNDEF(&_11$$8);
	ZVAL_UNDEF(&_3$$4);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_5$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &query, &map);



	zephir_read_property(&_0, this_ptr, SL("debug_mode"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_0)) {
		ZEPHIR_CALL_METHOD(&_1$$3, this_ptr, "generate", NULL, 0, query, map);
		zephir_check_call_status();
		zend_print_zval(&_1$$3, 0);
		if (0) {
			zephir_update_property_zval(this_ptr, SL("debug_mode"), &__$true);
		} else {
			zephir_update_property_zval(this_ptr, SL("debug_mode"), &__$false);
		}
		RETURN_MM_BOOL(0);
	}
	zephir_read_property(&_2, this_ptr, SL("logging"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_2)) {
		ZEPHIR_INIT_VAR(&_3$$4);
		zephir_create_array(&_3$$4, 2, 0 TSRMLS_CC);
		zephir_array_fast_append(&_3$$4, query);
		zephir_array_fast_append(&_3$$4, map);
		zephir_update_property_array_append(this_ptr, SL("logs"), &_3$$4 TSRMLS_CC);
	} else {
		ZEPHIR_INIT_VAR(&_4$$5);
		zephir_create_array(&_4$$5, 1, 0 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_5$$5);
		zephir_create_array(&_5$$5, 2, 0 TSRMLS_CC);
		zephir_array_fast_append(&_5$$5, query);
		zephir_array_fast_append(&_5$$5, map);
		zephir_array_fast_append(&_4$$5, &_5$$5);
		zephir_update_property_zval(this_ptr, SL("logs"), &_4$$5);
	}
	zephir_read_property(&_6, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CALL_METHOD(&statement, &_6, "prepare", NULL, 0, query);
	zephir_check_call_status();
	if (zephir_is_true(&statement)) {
		if (!(ZEPHIR_IS_EMPTY(map))) {
			zephir_is_iterable(map, 0, "vof/medoo.zep", 331);
			ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(map), _8$$7, _9$$7, _7$$7)
			{
				ZEPHIR_INIT_NVAR(&key);
				if (_9$$7 != NULL) { 
					ZVAL_STR_COPY(&key, _9$$7);
				} else {
					ZVAL_LONG(&key, _8$$7);
				}
				ZEPHIR_INIT_NVAR(&value);
				ZVAL_COPY(&value, _7$$7);
				zephir_array_fetch_long(&_10$$8, &value, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 329 TSRMLS_CC);
				zephir_array_fetch_long(&_11$$8, &value, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 329 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(NULL, &statement, "bindvalue", &_12, 0, &key, &_10$$8, &_11$$8);
				zephir_check_call_status();
			} ZEND_HASH_FOREACH_END();
			ZEPHIR_INIT_NVAR(&value);
			ZEPHIR_INIT_NVAR(&key);
		}
		ZEPHIR_CALL_METHOD(NULL, &statement, "execute", NULL, 0);
		zephir_check_call_status();
		zephir_update_property_zval(this_ptr, SL("statement"), &statement);
		RETURN_CCTOR(&statement);
	} else {
		RETURN_MM_BOOL(0);
	}

}

PHP_METHOD(Vof_Medoo, generate) {

	zend_string *_2;
	zend_ulong _1;
	zephir_fcall_cache_entry *_8 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *query = NULL, query_sub, *map, map_sub, key, value, *_0, _3$$3, _4$$3, _5$$4, _6$$4, _7$$4, _9$$5, _10$$5, _11$$6, _12$$6;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&query_sub);
	ZVAL_UNDEF(&map_sub);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$4);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_9$$5);
	ZVAL_UNDEF(&_10$$5);
	ZVAL_UNDEF(&_11$$6);
	ZVAL_UNDEF(&_12$$6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &query, &map);

	ZEPHIR_SEPARATE_PARAM(query);


	zephir_is_iterable(map, 0, "vof/medoo.zep", 360);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(map), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		zephir_array_fetch_long(&_3$$3, &value, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 347 TSRMLS_CC);
		zephir_array_fetch_long(&_4$$3, &value, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 351 TSRMLS_CC);
		if (ZEPHIR_IS_LONG_IDENTICAL(&_3$$3, 2)) {
			ZEPHIR_INIT_NVAR(&_5$$4);
			zephir_array_fetch_long(&_7$$4, &value, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 349 TSRMLS_CC);
			ZEPHIR_CALL_METHOD(&_6$$4, this_ptr, "quote", &_8, 0, &_7$$4);
			zephir_check_call_status();
			zephir_fast_str_replace(&_5$$4, &key, &_6$$4, query TSRMLS_CC);
			ZEPHIR_CPY_WRT(query, &_5$$4);
		} else if (ZEPHIR_IS_LONG_IDENTICAL(&_4$$3, 0)) {
			ZEPHIR_INIT_NVAR(&_9$$5);
			ZEPHIR_INIT_NVAR(&_10$$5);
			ZVAL_STRING(&_10$$5, "NULL");
			zephir_fast_str_replace(&_9$$5, &key, &_10$$5, query TSRMLS_CC);
			ZEPHIR_CPY_WRT(query, &_9$$5);
		} else {
			ZEPHIR_INIT_NVAR(&_11$$6);
			zephir_array_fetch_long(&_12$$6, &value, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 357 TSRMLS_CC);
			zephir_fast_str_replace(&_11$$6, &key, &_12$$6, query TSRMLS_CC);
			ZEPHIR_CPY_WRT(query, &_11$$6);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	RETVAL_ZVAL(query, 1, 0);
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, quote) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *query, query_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&query_sub);
	ZVAL_UNDEF(&_0);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &query);



	zephir_read_property(&_0, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_RETURN_CALL_METHOD(&_0, "quote", NULL, 0, query);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, select) {

	zend_bool is_single_column = 0, _0;
	zephir_fcall_cache_entry *_5 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS, index;
	zval *table, table_sub, *join, join_sub, *columns = NULL, columns_sub, *where = NULL, where_sub, __$null, column, map, stack, column_map, query, data, current_stack, _1, fetchMethod, _4, _2$$4, _3$$5;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&table_sub);
	ZVAL_UNDEF(&join_sub);
	ZVAL_UNDEF(&columns_sub);
	ZVAL_UNDEF(&where_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&column);
	ZVAL_UNDEF(&map);
	ZVAL_UNDEF(&stack);
	ZVAL_UNDEF(&column_map);
	ZVAL_UNDEF(&query);
	ZVAL_UNDEF(&data);
	ZVAL_UNDEF(&current_stack);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&fetchMethod);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_2$$4);
	ZVAL_UNDEF(&_3$$5);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 2, &table, &join, &columns, &where);

	if (!columns) {
		columns = &columns_sub;
		columns = &__$null;
	}
	if (!where) {
		where = &where_sub;
		where = &__$null;
	}


	ZEPHIR_INIT_VAR(&map);
	array_init(&map);
	ZEPHIR_INIT_VAR(&stack);
	array_init(&stack);
	ZEPHIR_INIT_VAR(&column_map);
	array_init(&column_map);
	index = 0;
	ZEPHIR_INIT_VAR(&current_stack);
	array_init(&current_stack);
	if (Z_TYPE_P(where) == IS_NULL) {
		ZEPHIR_CPY_WRT(&column, join);
	} else {
		ZEPHIR_CPY_WRT(&column, columns);
	}
	_0 = Z_TYPE_P(&column) == IS_STRING;
	if (_0) {
		_0 = !ZEPHIR_IS_STRING_IDENTICAL(&column, "*");
	}
	is_single_column = _0;
	ZEPHIR_CALL_METHOD(&_1, this_ptr, "selectcontext", NULL, 0, table, &map, join, columns, where);
	zephir_check_call_status();
	ZEPHIR_CALL_METHOD(&query, this_ptr, "exec", NULL, 0, &_1, &map);
	zephir_check_call_status();
	zephir_var_dump(columns TSRMLS_CC);
	if (zephir_is_true(&query)) {
		RETURN_MM_BOOL(0);
	}
	if (ZEPHIR_IS_STRING_IDENTICAL(columns, "*")) {
		ZVAL_LONG(&_2$$4, 2);
		ZEPHIR_RETURN_CALL_METHOD(&query, "fetchall", NULL, 0, &_2$$4);
		zephir_check_call_status();
		RETURN_MM();
	}
	if (is_single_column) {
		ZVAL_LONG(&_3$$5, 7);
		ZEPHIR_RETURN_CALL_METHOD(&query, "fetchall", NULL, 0, &_3$$5);
		zephir_check_call_status();
		RETURN_MM();
	}
	ZEPHIR_INIT_VAR(&fetchMethod);
	ZVAL_STRING(&fetchMethod, "fetch");
	ZEPHIR_CALL_METHOD(NULL, this_ptr, "columnmap", NULL, 0, columns, &column_map);
	zephir_check_call_status();
	ZVAL_LONG(&_4, 2);
	ZEPHIR_CALL_METHOD_ZVAL(&data, &query, &fetchMethod, NULL, 0, &_4);
	zephir_check_call_status();
	while (1) {
		if (!(zephir_is_true(&data))) {
			break;
		}
		ZEPHIR_CALL_METHOD(NULL, this_ptr, "datamap", &_5, 0, &data, columns, &column_map, &current_stack);
		zephir_check_call_status();
		zephir_array_update_long(&stack, index, &current_stack, PH_COPY | PH_SEPARATE ZEPHIR_DEBUG_PARAMS_DUMMY);
		index++;
	}
	RETURN_CCTOR(&stack);

}

PHP_METHOD(Vof_Medoo, dataMap) {

	zend_string *_2;
	zend_ulong _1;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_10 = NULL, *_15 = NULL;
	zval *data, data_sub, *columns, columns_sub, *column_map, column_map_sub, *stack, stack_sub, __$true, key, value, map, column_key, current_stack, *_0, _3$$5, _4$$6, _5$$6, _6$$7, _7$$7, _8$$8, _9$$8, _11$$9, _12$$9, _13$$10, _14$$11;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&data_sub);
	ZVAL_UNDEF(&columns_sub);
	ZVAL_UNDEF(&column_map_sub);
	ZVAL_UNDEF(&stack_sub);
	ZVAL_BOOL(&__$true, 1);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&map);
	ZVAL_UNDEF(&column_key);
	ZVAL_UNDEF(&current_stack);
	ZVAL_UNDEF(&_3$$5);
	ZVAL_UNDEF(&_4$$6);
	ZVAL_UNDEF(&_5$$6);
	ZVAL_UNDEF(&_6$$7);
	ZVAL_UNDEF(&_7$$7);
	ZVAL_UNDEF(&_8$$8);
	ZVAL_UNDEF(&_9$$8);
	ZVAL_UNDEF(&_11$$9);
	ZVAL_UNDEF(&_12$$9);
	ZVAL_UNDEF(&_13$$10);
	ZVAL_UNDEF(&_14$$11);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 4, 0, &data, &columns, &column_map, &stack);

	ZEPHIR_SEPARATE_PARAM(stack);


	ZEPHIR_INIT_VAR(&current_stack);
	array_init(&current_stack);
	zephir_is_iterable(columns, 0, "vof/medoo.zep", 462);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(columns), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		if (Z_TYPE_P(&key) == IS_LONG) {
			ZEPHIR_OBS_NVAR(&map);
			zephir_array_fetch(&map, column_map, &value, PH_NOISY, "vof/medoo.zep", 420 TSRMLS_CC);
			ZEPHIR_OBS_NVAR(&column_key);
			zephir_array_fetch_long(&column_key, &map, 0, PH_NOISY, "vof/medoo.zep", 421 TSRMLS_CC);
			if (zephir_array_isset_long(&map, 1)) {
				ZEPHIR_OBS_NVAR(&_3$$5);
				zephir_array_fetch_long(&_3$$5, &map, 1, PH_NOISY, "vof/medoo.zep", 425 TSRMLS_CC);
				do {
					if (ZEPHIR_IS_STRING(&_3$$5, "Number") || ZEPHIR_IS_STRING(&_3$$5, "Int")) {
						zephir_array_fetch(&_4$$6, data, &column_key, PH_NOISY | PH_READONLY, "vof/medoo.zep", 429 TSRMLS_CC);
						ZEPHIR_INIT_NVAR(&_5$$6);
						ZVAL_LONG(&_5$$6, zephir_get_intval(&_4$$6));
						zephir_array_update_zval(stack, &column_key, &_5$$6, PH_COPY | PH_SEPARATE);
						break;
					}
					if (ZEPHIR_IS_STRING(&_3$$5, "Bool")) {
						ZEPHIR_OBS_NVAR(&_6$$7);
						zephir_array_fetch(&_6$$7, data, &column_key, PH_NOISY, "vof/medoo.zep", 433 TSRMLS_CC);
						ZEPHIR_INIT_NVAR(&_7$$7);
						ZVAL_BOOL(&_7$$7, zephir_get_boolval(&_6$$7));
						zephir_array_update_zval(stack, &column_key, &_7$$7, PH_COPY | PH_SEPARATE);
						break;
					}
					if (ZEPHIR_IS_STRING(&_3$$5, "Object")) {
						zephir_array_fetch(&_8$$8, data, &column_key, PH_NOISY | PH_READONLY, "vof/medoo.zep", 437 TSRMLS_CC);
						ZEPHIR_CALL_FUNCTION(&_9$$8, "unserialize", &_10, 11, &_8$$8);
						zephir_check_call_status();
						zephir_array_update_zval(stack, &column_key, &_9$$8, PH_COPY | PH_SEPARATE);
						break;
					}
					if (ZEPHIR_IS_STRING(&_3$$5, "JSON")) {
						ZEPHIR_INIT_NVAR(&_11$$9);
						zephir_array_fetch(&_12$$9, data, &column_key, PH_NOISY | PH_READONLY, "vof/medoo.zep", 441 TSRMLS_CC);
						zephir_json_decode(&_11$$9, &_12$$9, zephir_get_intval(&__$true) );
						zephir_array_update_zval(stack, &column_key, &_11$$9, PH_COPY | PH_SEPARATE);
						break;
					}
					if (ZEPHIR_IS_STRING(&_3$$5, "String")) {
						zephir_array_fetch(&_13$$10, data, &column_key, PH_NOISY | PH_READONLY, "vof/medoo.zep", 445 TSRMLS_CC);
						zephir_array_update_zval(stack, &column_key, &_13$$10, PH_COPY | PH_SEPARATE);
						break;
					}
				} while(0);

			} else {
				zephir_array_fetch(&_14$$11, data, &column_key, PH_NOISY | PH_READONLY, "vof/medoo.zep", 451 TSRMLS_CC);
				zephir_array_update_zval(stack, &column_key, &_14$$11, PH_COPY | PH_SEPARATE);
			}
		} else {
			ZEPHIR_CALL_METHOD(NULL, this_ptr, "datamap", &_15, 50, data, &value, column_map, &current_stack);
			zephir_check_call_status();
			zephir_array_update_zval(stack, &key, &current_stack, PH_COPY | PH_SEPARATE);
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	ZEPHIR_MM_RESTORE();

}

PHP_METHOD(Vof_Medoo, columnMap) {

	zval _10$$6, _12$$7;
	zend_string *_2;
	zend_ulong _1;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_9 = NULL, *_14 = NULL;
	zval *columns, columns_sub, *stack, stack_sub, key, value, key_match, column_key, *_0, _3$$5, _4$$5, _5$$5, _6$$5, _7$$5, _8$$5, _11$$6, _13$$7;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&columns_sub);
	ZVAL_UNDEF(&stack_sub);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&key_match);
	ZVAL_UNDEF(&column_key);
	ZVAL_UNDEF(&_3$$5);
	ZVAL_UNDEF(&_4$$5);
	ZVAL_UNDEF(&_5$$5);
	ZVAL_UNDEF(&_6$$5);
	ZVAL_UNDEF(&_7$$5);
	ZVAL_UNDEF(&_8$$5);
	ZVAL_UNDEF(&_11$$6);
	ZVAL_UNDEF(&_13$$7);
	ZVAL_UNDEF(&_10$$6);
	ZVAL_UNDEF(&_12$$7);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &columns, &stack);

	ZEPHIR_SEPARATE_PARAM(stack);


	if (ZEPHIR_IS_LONG_IDENTICAL(columns, '*')) {
		RETVAL_ZVAL(stack, 1, 0);
		RETURN_MM();
	}
	zephir_is_iterable(columns, 0, "vof/medoo.zep", 497);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(columns), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		if (Z_TYPE_P(&key) == IS_LONG) {
			ZEPHIR_INIT_NVAR(&_3$$5);
			ZEPHIR_INIT_NVAR(&_4$$5);
			ZVAL_STRING(&_4$$5, "/(?<column>[a-zA-Z0-9_\\.]*)(?:\\s*\\((?<alias>[a-zA-Z0-9_]+)\\)|\\s*\\[(?<type>(String|Bool|Int|Number|Object|JSON))\\])?/i");
			zephir_preg_match(&_3$$5, &_4$$5, &value, &key_match, 0, 0 , 0  TSRMLS_CC);
			ZEPHIR_OBS_NVAR(&_5$$5);
			zephir_array_fetch_string(&_5$$5, &key_match, SL("alias"), PH_NOISY, "vof/medoo.zep", 480 TSRMLS_CC);
			if (!(ZEPHIR_IS_EMPTY(&_5$$5))) {
				ZEPHIR_OBS_NVAR(&column_key);
				zephir_array_fetch_string(&column_key, &key_match, SL("alias"), PH_NOISY, "vof/medoo.zep", 480 TSRMLS_CC);
			} else {
				zephir_array_fetch_string(&_6$$5, &key_match, SL("column"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 480 TSRMLS_CC);
				ZEPHIR_INIT_NVAR(&_7$$5);
				ZVAL_STRING(&_7$$5, "/^[\\w]*\\./i");
				ZEPHIR_INIT_NVAR(&_8$$5);
				ZVAL_STRING(&_8$$5, "");
				ZEPHIR_CALL_FUNCTION(&column_key, "preg_replace", &_9, 51, &_7$$5, &_8$$5, &_6$$5);
				zephir_check_call_status();
			}
			if (zephir_array_isset_string(&key_match, SL("type"))) {
				ZEPHIR_INIT_NVAR(&_10$$6);
				zephir_create_array(&_10$$6, 2, 0 TSRMLS_CC);
				zephir_array_fast_append(&_10$$6, &column_key);
				ZEPHIR_OBS_NVAR(&_11$$6);
				zephir_array_fetch_string(&_11$$6, &key_match, SL("type"), PH_NOISY, "vof/medoo.zep", 484 TSRMLS_CC);
				zephir_array_fast_append(&_10$$6, &_11$$6);
				zephir_array_update_zval(stack, &value, &_10$$6, PH_COPY | PH_SEPARATE);
			} else {
				ZEPHIR_INIT_NVAR(&_12$$7);
				zephir_create_array(&_12$$7, 2, 0 TSRMLS_CC);
				zephir_array_fast_append(&_12$$7, &column_key);
				ZEPHIR_INIT_NVAR(&_13$$7);
				ZVAL_STRING(&_13$$7, "String");
				zephir_array_fast_append(&_12$$7, &_13$$7);
				zephir_array_update_zval(stack, &value, &_12$$7, PH_COPY | PH_SEPARATE);
			}
		} else {
			ZEPHIR_CALL_METHOD(NULL, this_ptr, "columnmap", &_14, 52, &value, stack);
			zephir_check_call_status();
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	RETVAL_ZVAL(stack, 1, 0);
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, selectContext) {

	zend_string *_14$$5, *_25$$11;
	zend_ulong _13$$5, _24$$11;
	zend_bool _2, _8, _18$$6, _44$$16;
	zephir_fcall_cache_entry *_4 = NULL, *_29 = NULL, *_46 = NULL, *_48 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *table = NULL, table_sub, *map, map_sub, *join, join_sub, *columns = NULL, columns_sub, *where = NULL, where_sub, *column_fn = NULL, column_fn_sub, __$null, column, table_match, table_query, join_key, table_join, join_array, sub_table, relation, match1, key, value, table_name, joins, _0, _1, _9, _10, _11, _47, _49, _50, _3$$3, _5$$3, _6$$3, _7$$4, *_12$$5, _42$$5, _43$$5, _15$$6, _16$$6, _17$$6, _19$$6, _20$$8, _21$$10, _22$$10, *_23$$11, _33$$11, _26$$12, _27$$12, _28$$12, _30$$12, _31$$12, _32$$12, _34$$7, _35$$7, _39$$7, _40$$7, _41$$7, _36$$13, _37$$13, _38$$13, _45$$24;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&table_sub);
	ZVAL_UNDEF(&map_sub);
	ZVAL_UNDEF(&join_sub);
	ZVAL_UNDEF(&columns_sub);
	ZVAL_UNDEF(&where_sub);
	ZVAL_UNDEF(&column_fn_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&column);
	ZVAL_UNDEF(&table_match);
	ZVAL_UNDEF(&table_query);
	ZVAL_UNDEF(&join_key);
	ZVAL_UNDEF(&table_join);
	ZVAL_UNDEF(&join_array);
	ZVAL_UNDEF(&sub_table);
	ZVAL_UNDEF(&relation);
	ZVAL_UNDEF(&match1);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&table_name);
	ZVAL_UNDEF(&joins);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_9);
	ZVAL_UNDEF(&_10);
	ZVAL_UNDEF(&_11);
	ZVAL_UNDEF(&_47);
	ZVAL_UNDEF(&_49);
	ZVAL_UNDEF(&_50);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_42$$5);
	ZVAL_UNDEF(&_43$$5);
	ZVAL_UNDEF(&_15$$6);
	ZVAL_UNDEF(&_16$$6);
	ZVAL_UNDEF(&_17$$6);
	ZVAL_UNDEF(&_19$$6);
	ZVAL_UNDEF(&_20$$8);
	ZVAL_UNDEF(&_21$$10);
	ZVAL_UNDEF(&_22$$10);
	ZVAL_UNDEF(&_33$$11);
	ZVAL_UNDEF(&_26$$12);
	ZVAL_UNDEF(&_27$$12);
	ZVAL_UNDEF(&_28$$12);
	ZVAL_UNDEF(&_30$$12);
	ZVAL_UNDEF(&_31$$12);
	ZVAL_UNDEF(&_32$$12);
	ZVAL_UNDEF(&_34$$7);
	ZVAL_UNDEF(&_35$$7);
	ZVAL_UNDEF(&_39$$7);
	ZVAL_UNDEF(&_40$$7);
	ZVAL_UNDEF(&_41$$7);
	ZVAL_UNDEF(&_36$$13);
	ZVAL_UNDEF(&_37$$13);
	ZVAL_UNDEF(&_38$$13);
	ZVAL_UNDEF(&_45$$24);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 3, &table, &map, &join, &columns, &where, &column_fn);

	ZEPHIR_SEPARATE_PARAM(table);
	if (!columns) {
		columns = &columns_sub;
		ZEPHIR_CPY_WRT(columns, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(columns);
	}
	if (!where) {
		where = &where_sub;
		ZEPHIR_CPY_WRT(where, &__$null);
	} else {
		ZEPHIR_SEPARATE_PARAM(where);
	}
	if (!column_fn) {
		column_fn = &column_fn_sub;
		column_fn = &__$null;
	}


	ZEPHIR_INIT_VAR(&table_join);
	array_init(&table_join);
	ZEPHIR_INIT_VAR(&join_array);
	array_init(&join_array);
	ZEPHIR_INIT_VAR(&joins);
	array_init(&joins);
	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "/(?<table>[a-zA-Z0-9_]+)\\s*\\((?<alias>[a-zA-Z0-9_]+)\\)/i");
	zephir_preg_match(&_0, &_1, table, &table_match, 0, 0 , 0  TSRMLS_CC);
	_2 = zephir_array_isset_string(&table_match, SL("table"));
	if (_2) {
		_2 = zephir_array_isset_string(&table_match, SL("alias"));
	}
	if (_2) {
		zephir_array_fetch_string(&_3$$3, &table_match, SL("table"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 507 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(table, this_ptr, "tablequote", &_4, 0, &_3$$3);
		zephir_check_call_status();
		zephir_array_fetch_string(&_6$$3, &table_match, SL("alias"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 509 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_5$$3, this_ptr, "tablequote", &_4, 0, &_6$$3);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&table_query);
		ZEPHIR_CONCAT_VSV(&table_query, table, " AS ", &_5$$3);
	} else {
		ZEPHIR_CALL_METHOD(&_7$$4, this_ptr, "tablequote", &_4, 0, table);
		zephir_check_call_status();
		ZEPHIR_CPY_WRT(table, &_7$$4);
		ZEPHIR_CPY_WRT(&table_query, table);
	}
	if (Z_TYPE_P(join) == IS_ARRAY) {
		ZEPHIR_INIT_VAR(&join_key);
		zephir_array_keys(&join_key, join TSRMLS_CC);
	} else {
		ZEPHIR_INIT_NVAR(&join_key);
		ZVAL_NULL(&join_key);
	}
	_8 = zephir_array_isset_long(&join_key, 0);
	if (_8) {
		zephir_array_fetch_long(&_9, &join_key, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 522 TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_10);
		ZVAL_STRING(&_10, "[");
		ZEPHIR_INIT_VAR(&_11);
		zephir_fast_strpos(&_11, &_9, &_10, 0 );
		_8 = ZEPHIR_IS_LONG_IDENTICAL(&_11, 0);
	}
	if (_8) {
		ZEPHIR_INIT_NVAR(&join_array);
		zephir_create_array(&join_array, 4, 0 TSRMLS_CC);
		add_assoc_stringl_ex(&join_array, SL(">"), SL("LEFT"));
		add_assoc_stringl_ex(&join_array, SL("<"), SL("RIGHT"));
		add_assoc_stringl_ex(&join_array, SL("<>"), SL("FULL"));
		add_assoc_stringl_ex(&join_array, SL("><"), SL("INNER"));
		zephir_is_iterable(join, 0, "vof/medoo.zep", 581);
		ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(join), _13$$5, _14$$5, _12$$5)
		{
			ZEPHIR_INIT_NVAR(&sub_table);
			if (_14$$5 != NULL) { 
				ZVAL_STR_COPY(&sub_table, _14$$5);
			} else {
				ZVAL_LONG(&sub_table, _13$$5);
			}
			ZEPHIR_INIT_NVAR(&relation);
			ZVAL_COPY(&relation, _12$$5);
			ZEPHIR_INIT_NVAR(&_15$$6);
			ZEPHIR_INIT_NVAR(&_16$$6);
			ZVAL_STRING(&_16$$6, "/(\\[(?<join>\\<|\\>|\\>\\<|\\<\\>)\\])?(?<table>[a-zA-Z0-9_]+)\\s?(\\((?<alias>[a-zA-Z0-9_]+)\\))?/");
			zephir_preg_match(&_15$$6, &_16$$6, &sub_table, &match1, 0, 0 , 0  TSRMLS_CC);
			zephir_array_fetch_string(&_17$$6, &match1, SL("join"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 536 TSRMLS_CC);
			_18$$6 = !ZEPHIR_IS_STRING_IDENTICAL(&_17$$6, "");
			if (_18$$6) {
				zephir_array_fetch_string(&_19$$6, &match1, SL("table"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 536 TSRMLS_CC);
				_18$$6 = !ZEPHIR_IS_STRING_IDENTICAL(&_19$$6, "");
			}
			if (_18$$6) {
				if (Z_TYPE_P(&relation) == IS_STRING) {
					ZEPHIR_INIT_LNVAR(_20$$8);
					ZEPHIR_CONCAT_SVS(&_20$$8, "USING ('", &relation, "')");
					ZEPHIR_CPY_WRT(&relation, &_20$$8);
				}
				if (Z_TYPE_P(&relation) == IS_ARRAY) {
					if (zephir_array_isset_long(&relation, 0)) {
						ZEPHIR_INIT_NVAR(&_21$$10);
						zephir_fast_join_str(&_21$$10, SL("', '"), &relation TSRMLS_CC);
						ZEPHIR_INIT_LNVAR(_22$$10);
						ZEPHIR_CONCAT_SVS(&_22$$10, "USING ('", &_21$$10, "')");
						ZEPHIR_CPY_WRT(&relation, &_22$$10);
					} else {
						zephir_is_iterable(&relation, 0, "vof/medoo.zep", 566);
						ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&relation), _24$$11, _25$$11, _23$$11)
						{
							ZEPHIR_INIT_NVAR(&key);
							if (_25$$11 != NULL) { 
								ZVAL_STR_COPY(&key, _25$$11);
							} else {
								ZVAL_LONG(&key, _24$$11);
							}
							ZEPHIR_INIT_NVAR(&value);
							ZVAL_COPY(&value, _23$$11);
							ZEPHIR_INIT_LNVAR(_26$$12);
							ZEPHIR_INIT_NVAR(&_27$$12);
							ZVAL_STRING(&_27$$12, ".");
							ZEPHIR_INIT_NVAR(&_28$$12);
							zephir_fast_strpos(&_28$$12, &key, &_27$$12, 0 );
							if (ZEPHIR_GT_LONG(&_28$$12, 0)) {
								ZEPHIR_CALL_METHOD(&_26$$12, this_ptr, "columnquote", &_29, 0, &key);
								zephir_check_call_status();
							} else {
								ZEPHIR_INIT_NVAR(&_26$$12);
								ZEPHIR_CONCAT_VSVS(&_26$$12, table, ".'", &key, "'");
							}
							ZEPHIR_INIT_LNVAR(_31$$12);
							if (zephir_array_isset_string(&match1, SL("alias"))) {
								ZEPHIR_OBS_NVAR(&_31$$12);
								zephir_array_fetch_string(&_31$$12, &match1, SL("alias"), PH_NOISY, "vof/medoo.zep", 563 TSRMLS_CC);
							} else {
								ZEPHIR_OBS_NVAR(&_31$$12);
								zephir_array_fetch_string(&_31$$12, &match1, SL("table"), PH_NOISY, "vof/medoo.zep", 563 TSRMLS_CC);
							}
							ZEPHIR_CALL_METHOD(&_30$$12, this_ptr, "tablequote", &_4, 0, &_31$$12);
							zephir_check_call_status();
							ZEPHIR_INIT_LNVAR(_32$$12);
							ZEPHIR_CONCAT_VSVSVS(&_32$$12, &_26$$12, " = ", &_30$$12, ".'", &value, "'");
							zephir_array_append(&joins, &_32$$12, PH_SEPARATE, "vof/medoo.zep", 563);
						} ZEND_HASH_FOREACH_END();
						ZEPHIR_INIT_NVAR(&value);
						ZEPHIR_INIT_NVAR(&key);
						ZEPHIR_INIT_NVAR(&_33$$11);
						zephir_fast_join_str(&_33$$11, SL(" AND "), &joins TSRMLS_CC);
						ZEPHIR_INIT_NVAR(&relation);
						ZEPHIR_CONCAT_SV(&relation, "ON ", &_33$$11);
					}
				}
				zephir_array_fetch_string(&_35$$7, &match1, SL("table"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 570 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&_34$$7, this_ptr, "tablequote", &_4, 0, &_35$$7);
				zephir_check_call_status();
				ZEPHIR_INIT_NVAR(&table_name);
				ZEPHIR_CONCAT_VS(&table_name, &_34$$7, " ");
				if (zephir_array_isset_string(&match1, SL("alias"))) {
					zephir_array_fetch_string(&_37$$13, &match1, SL("alias"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 574 TSRMLS_CC);
					ZEPHIR_CALL_METHOD(&_36$$13, this_ptr, "tablequote", &_4, 0, &_37$$13);
					zephir_check_call_status();
					ZEPHIR_INIT_LNVAR(_38$$13);
					ZEPHIR_CONCAT_SVS(&_38$$13, "AS ", &_36$$13, " ");
					zephir_concat_self(&table_name, &_38$$13 TSRMLS_CC);
				}
				ZEPHIR_OBS_NVAR(&_40$$7);
				zephir_array_fetch_string(&_40$$7, &match1, SL("join"), PH_NOISY, "vof/medoo.zep", 577 TSRMLS_CC);
				zephir_array_fetch(&_39$$7, &join_array, &_40$$7, PH_NOISY | PH_READONLY, "vof/medoo.zep", 577 TSRMLS_CC);
				ZEPHIR_INIT_LNVAR(_41$$7);
				ZEPHIR_CONCAT_VSVV(&_41$$7, &_39$$7, " JOIN ", &table_name, &relation);
				zephir_array_append(&table_join, &_41$$7, PH_SEPARATE, "vof/medoo.zep", 577);
			}
		} ZEND_HASH_FOREACH_END();
		ZEPHIR_INIT_NVAR(&relation);
		ZEPHIR_INIT_NVAR(&sub_table);
		ZEPHIR_INIT_VAR(&_42$$5);
		zephir_fast_join_str(&_42$$5, SL(" "), &table_join TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_43$$5);
		ZEPHIR_CONCAT_SV(&_43$$5, " ", &_42$$5);
		zephir_concat_self(&table_query, &_43$$5 TSRMLS_CC);
	} else {
		if (Z_TYPE_P(columns) == IS_NULL) {
			if (Z_TYPE_P(where) == IS_NULL) {
				_44$$16 = Z_TYPE_P(join) == IS_ARRAY;
				if (_44$$16) {
					_44$$16 = zephir_is_true(column_fn);
				}
				if (_44$$16) {
					ZEPHIR_CPY_WRT(where, join);
					ZEPHIR_INIT_NVAR(columns);
					ZVAL_NULL(columns);
				} else {
					ZEPHIR_INIT_NVAR(where);
					ZVAL_NULL(where);
					ZEPHIR_CPY_WRT(columns, join);
				}
			} else {
				ZEPHIR_CPY_WRT(where, join);
				ZEPHIR_INIT_NVAR(columns);
				ZVAL_NULL(columns);
			}
		} else {
			ZEPHIR_CPY_WRT(where, columns);
			ZEPHIR_CPY_WRT(columns, join);
		}
	}
	if (zephir_is_true(column_fn)) {
		ZEPHIR_INIT_VAR(&column);
		if (ZEPHIR_IS_LONG_IDENTICAL(column_fn, 1)) {
			ZVAL_LONG(&column, 1);
			if (Z_TYPE_P(where) == IS_NULL) {
				ZEPHIR_CPY_WRT(where, columns);
			}
		} else {
			if (ZEPHIR_IS_EMPTY(columns)) {
				ZEPHIR_INIT_NVAR(columns);
				ZVAL_STRING(columns, "*");
				ZEPHIR_CPY_WRT(where, join);
			}
			ZEPHIR_CALL_METHOD(&_45$$24, this_ptr, "columnpush", &_46, 0, columns);
			zephir_check_call_status();
			ZEPHIR_CONCAT_VSVS(&column, column_fn, "(", &_45$$24, ")");
		}
	} else {
		ZEPHIR_CALL_METHOD(&column, this_ptr, "columnpush", &_46, 0, columns);
		zephir_check_call_status();
	}
	ZEPHIR_CALL_METHOD(&_47, this_ptr, "whereclause", &_48, 0, where, map);
	zephir_check_call_status();
	ZEPHIR_INIT_VAR(&_49);
	ZEPHIR_CONCAT_SVSVV(&_49, "SELECT ", &column, " FROM ", &table_query, &_47);
	zephir_var_dump(&_49 TSRMLS_CC);
	ZEPHIR_CALL_METHOD(&_50, this_ptr, "whereclause", &_48, 0, where, map);
	zephir_check_call_status();
	ZEPHIR_CONCAT_SVSVV(return_value, "SELECT ", &column, " FROM ", &table_query, &_50);
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, whereClause) {

	zend_string *_31$$12, *_45$$17;
	zend_ulong _30$$12, _44$$17;
	zend_bool _70$$3, _15$$8, _16$$8, _17$$9, _58$$16, _50$$20, _63$$25, _65$$25, _74$$28, _76$$28;
	zval _2$$3, _72$$3, _21$$9, _25$$9, _60$$16;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_1 = NULL, *_5 = NULL, *_6 = NULL, *_33 = NULL, *_48 = NULL;
	zval *where, where_sub, *map, map_sub, group, map_key, columns, where_clause, where_keys, where_OR, where_AND, single_condition, condition, value, match1, mode, mode_array, _0$$3, _3$$3, _71$$3, _4$$4, _7$$6, _8$$6, _9$$6, _10$$6, _11$$7, _12$$7, _13$$7, _14$$7, _18$$9, _22$$9, _23$$9, _24$$9, _26$$9, _27$$9, _28$$9, _19$$10, _20$$10, stack$$12, value1$$12, column$$12, *_29$$12, _34$$12, _35$$12, _32$$13, _36$$14, _37$$14, _38$$14, _39$$15, _40$$15, _41$$15, _42$$15, order1$$16, _59$$16, _61$$16, stack$$17, column$$17, value2$$17, *_43$$17, _54$$17, _55$$17, _46$$19, _47$$19, _49$$19, _51$$21, _52$$21, _53$$23, _56$$24, _57$$24, limit$$25, _64$$25, _66$$25, _62$$26, _67$$27, _68$$27, _69$$27, limit$$28, _75$$28, _77$$28, _73$$29, _78$$30, _79$$30, _80$$30, _81$$32;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&where_sub);
	ZVAL_UNDEF(&map_sub);
	ZVAL_UNDEF(&group);
	ZVAL_UNDEF(&map_key);
	ZVAL_UNDEF(&columns);
	ZVAL_UNDEF(&where_clause);
	ZVAL_UNDEF(&where_keys);
	ZVAL_UNDEF(&where_OR);
	ZVAL_UNDEF(&where_AND);
	ZVAL_UNDEF(&single_condition);
	ZVAL_UNDEF(&condition);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&match1);
	ZVAL_UNDEF(&mode);
	ZVAL_UNDEF(&mode_array);
	ZVAL_UNDEF(&_0$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_71$$3);
	ZVAL_UNDEF(&_4$$4);
	ZVAL_UNDEF(&_7$$6);
	ZVAL_UNDEF(&_8$$6);
	ZVAL_UNDEF(&_9$$6);
	ZVAL_UNDEF(&_10$$6);
	ZVAL_UNDEF(&_11$$7);
	ZVAL_UNDEF(&_12$$7);
	ZVAL_UNDEF(&_13$$7);
	ZVAL_UNDEF(&_14$$7);
	ZVAL_UNDEF(&_18$$9);
	ZVAL_UNDEF(&_22$$9);
	ZVAL_UNDEF(&_23$$9);
	ZVAL_UNDEF(&_24$$9);
	ZVAL_UNDEF(&_26$$9);
	ZVAL_UNDEF(&_27$$9);
	ZVAL_UNDEF(&_28$$9);
	ZVAL_UNDEF(&_19$$10);
	ZVAL_UNDEF(&_20$$10);
	ZVAL_UNDEF(&stack$$12);
	ZVAL_UNDEF(&value1$$12);
	ZVAL_UNDEF(&column$$12);
	ZVAL_UNDEF(&_34$$12);
	ZVAL_UNDEF(&_35$$12);
	ZVAL_UNDEF(&_32$$13);
	ZVAL_UNDEF(&_36$$14);
	ZVAL_UNDEF(&_37$$14);
	ZVAL_UNDEF(&_38$$14);
	ZVAL_UNDEF(&_39$$15);
	ZVAL_UNDEF(&_40$$15);
	ZVAL_UNDEF(&_41$$15);
	ZVAL_UNDEF(&_42$$15);
	ZVAL_UNDEF(&order1$$16);
	ZVAL_UNDEF(&_59$$16);
	ZVAL_UNDEF(&_61$$16);
	ZVAL_UNDEF(&stack$$17);
	ZVAL_UNDEF(&column$$17);
	ZVAL_UNDEF(&value2$$17);
	ZVAL_UNDEF(&_54$$17);
	ZVAL_UNDEF(&_55$$17);
	ZVAL_UNDEF(&_46$$19);
	ZVAL_UNDEF(&_47$$19);
	ZVAL_UNDEF(&_49$$19);
	ZVAL_UNDEF(&_51$$21);
	ZVAL_UNDEF(&_52$$21);
	ZVAL_UNDEF(&_53$$23);
	ZVAL_UNDEF(&_56$$24);
	ZVAL_UNDEF(&_57$$24);
	ZVAL_UNDEF(&limit$$25);
	ZVAL_UNDEF(&_64$$25);
	ZVAL_UNDEF(&_66$$25);
	ZVAL_UNDEF(&_62$$26);
	ZVAL_UNDEF(&_67$$27);
	ZVAL_UNDEF(&_68$$27);
	ZVAL_UNDEF(&_69$$27);
	ZVAL_UNDEF(&limit$$28);
	ZVAL_UNDEF(&_75$$28);
	ZVAL_UNDEF(&_77$$28);
	ZVAL_UNDEF(&_73$$29);
	ZVAL_UNDEF(&_78$$30);
	ZVAL_UNDEF(&_79$$30);
	ZVAL_UNDEF(&_80$$30);
	ZVAL_UNDEF(&_81$$32);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_72$$3);
	ZVAL_UNDEF(&_21$$9);
	ZVAL_UNDEF(&_25$$9);
	ZVAL_UNDEF(&_60$$16);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &where, &map);

	ZEPHIR_SEPARATE_PARAM(map);


	ZEPHIR_INIT_VAR(&mode_array);
	array_init(&mode_array);
	if (Z_TYPE_P(where) == IS_ARRAY) {
		ZEPHIR_INIT_VAR(&where_keys);
		zephir_array_keys(&where_keys, where TSRMLS_CC);
		ZEPHIR_INIT_VAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "/^AND\\s*#?$/i");
		ZEPHIR_CALL_FUNCTION(&where_AND, "preg_grep", &_1, 53, &_0$$3, &where_keys);
		zephir_check_call_status();
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "/^OR\\s*#?$/i");
		ZEPHIR_CALL_FUNCTION(&where_OR, "preg_grep", &_1, 53, &_0$$3, &where_keys);
		zephir_check_call_status();
		ZEPHIR_INIT_VAR(&_2$$3);
		zephir_create_array(&_2$$3, 8, 0 TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "AND");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "OR");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "GROUP");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "ORDER");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "HAVING");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "LIMIT");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "LIKE");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_INIT_NVAR(&_0$$3);
		ZVAL_STRING(&_0$$3, "MATCH");
		zephir_array_fast_append(&_2$$3, &_0$$3);
		ZEPHIR_CALL_FUNCTION(&_3$$3, "array_flip", NULL, 54, &_2$$3);
		zephir_check_call_status();
		ZEPHIR_CALL_FUNCTION(&single_condition, "array_diff_key", NULL, 55, where, &_3$$3);
		zephir_check_call_status();
		if (!(ZEPHIR_IS_EMPTY(&single_condition))) {
			ZEPHIR_INIT_VAR(&_4$$4);
			ZVAL_STRING(&_4$$4, " AND");
			ZEPHIR_CALL_METHOD(&condition, this_ptr, "dataimplode", &_5, 0, &single_condition, map, &_4$$4);
			zephir_check_call_status();
			if (!ZEPHIR_IS_STRING_IDENTICAL(&condition, "")) {
				ZEPHIR_INIT_VAR(&where_clause);
				ZEPHIR_CONCAT_SV(&where_clause, " WHERE ", &condition);
			}
		}
		if (!(ZEPHIR_IS_EMPTY(&where_AND))) {
			ZEPHIR_CALL_FUNCTION(&value, "array_values", &_6, 56, &where_AND);
			zephir_check_call_status();
			ZEPHIR_OBS_VAR(&_9$$6);
			zephir_array_fetch_long(&_9$$6, &value, 0, PH_NOISY, "vof/medoo.zep", 670 TSRMLS_CC);
			zephir_array_fetch(&_8$$6, where, &_9$$6, PH_NOISY | PH_READONLY, "vof/medoo.zep", 670 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_10$$6);
			ZVAL_STRING(&_10$$6, " AND");
			ZEPHIR_CALL_METHOD(&_7$$6, this_ptr, "dataimplode", &_5, 0, &_8$$6, map, &_10$$6);
			zephir_check_call_status();
			ZEPHIR_INIT_NVAR(&where_clause);
			ZEPHIR_CONCAT_SV(&where_clause, " WHERE ", &_7$$6);
		}
		if (!(ZEPHIR_IS_EMPTY(&where_OR))) {
			ZEPHIR_CALL_FUNCTION(&value, "array_values", &_6, 56, &where_OR);
			zephir_check_call_status();
			ZEPHIR_OBS_VAR(&_13$$7);
			zephir_array_fetch_long(&_13$$7, &value, 0, PH_NOISY, "vof/medoo.zep", 676 TSRMLS_CC);
			zephir_array_fetch(&_12$$7, where, &_13$$7, PH_NOISY | PH_READONLY, "vof/medoo.zep", 676 TSRMLS_CC);
			ZEPHIR_INIT_VAR(&_14$$7);
			ZVAL_STRING(&_14$$7, " OR");
			ZEPHIR_CALL_METHOD(&_11$$7, this_ptr, "dataimplode", &_5, 0, &_12$$7, map, &_14$$7);
			zephir_check_call_status();
			ZEPHIR_INIT_NVAR(&where_clause);
			ZEPHIR_CONCAT_SV(&where_clause, " WHERE ", &_11$$7);
		}
		if (zephir_array_isset_string(where, SL("MATCH"))) {
			ZEPHIR_OBS_VAR(&match1);
			zephir_array_fetch_string(&match1, where, SL("MATCH"), PH_NOISY, "vof/medoo.zep", 681 TSRMLS_CC);
			_15$$8 = Z_TYPE_P(&match1) == IS_ARRAY;
			if (_15$$8) {
				_16$$8 = zephir_array_isset_string(&match1, SL("columns"));
				if (_16$$8) {
					_16$$8 = zephir_array_isset_string(&match1, SL("keyword"));
				}
				_15$$8 = _16$$8;
			}
			if (_15$$8) {
				ZEPHIR_INIT_VAR(&mode);
				ZVAL_STRING(&mode, "");
				ZEPHIR_INIT_NVAR(&mode_array);
				zephir_create_array(&mode_array, 4, 0 TSRMLS_CC);
				add_assoc_stringl_ex(&mode_array, SL("natural"), SL("IN NATURAL LANGUAGE MODE"));
				add_assoc_stringl_ex(&mode_array, SL("natural+query"), SL("IN NATURAL LANGUAGE MODE WITH QUERY EXPANSION"));
				add_assoc_stringl_ex(&mode_array, SL("boolean"), SL("IN BOOLEAN MODE"));
				add_assoc_stringl_ex(&mode_array, SL("query"), SL("WITH QUERY EXPANSION"));
				_17$$9 = zephir_array_isset_string(&match1, SL("mode"));
				if (_17$$9) {
					zephir_array_fetch_string(&_18$$9, &match1, SL("mode"), PH_READONLY, "vof/medoo.zep", 694 TSRMLS_CC);
					_17$$9 = zephir_array_isset(&mode_array, &_18$$9);
				}
				if (_17$$9) {
					ZEPHIR_OBS_VAR(&_20$$10);
					zephir_array_fetch_string(&_20$$10, &match1, SL("mode"), PH_NOISY, "vof/medoo.zep", 696 TSRMLS_CC);
					zephir_array_fetch(&_19$$10, &mode_array, &_20$$10, PH_NOISY | PH_READONLY, "vof/medoo.zep", 696 TSRMLS_CC);
					ZEPHIR_INIT_NVAR(&mode);
					ZEPHIR_CONCAT_SV(&mode, " ", &_19$$10);
				}
				ZEPHIR_INIT_VAR(&_21$$9);
				zephir_create_array(&_21$$9, 2, 0 TSRMLS_CC);
				zephir_array_fast_append(&_21$$9, this_ptr);
				ZEPHIR_INIT_VAR(&_22$$9);
				ZVAL_STRING(&_22$$9, "columnQuote");
				zephir_array_fast_append(&_21$$9, &_22$$9);
				zephir_array_fetch_string(&_23$$9, &match1, SL("columns"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 699 TSRMLS_CC);
				ZEPHIR_CALL_FUNCTION(&_24$$9, "array_map", NULL, 57, &_21$$9, &_23$$9);
				zephir_check_call_status();
				ZEPHIR_INIT_VAR(&columns);
				zephir_fast_join_str(&columns, SL(", "), &_24$$9 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&map_key, this_ptr, "mapkey", NULL, 0);
				zephir_check_call_status();
				ZEPHIR_INIT_VAR(&_25$$9);
				zephir_create_array(&_25$$9, 2, 0 TSRMLS_CC);
				ZEPHIR_OBS_VAR(&_26$$9);
				zephir_array_fetch_string(&_26$$9, &match1, SL("keyword"), PH_NOISY, "vof/medoo.zep", 701 TSRMLS_CC);
				zephir_array_fast_append(&_25$$9, &_26$$9);
				ZEPHIR_INIT_NVAR(&_22$$9);
				ZVAL_LONG(&_22$$9, 2);
				zephir_array_fast_append(&_25$$9, &_22$$9);
				zephir_array_update_zval(map, &map_key, &_25$$9, PH_COPY | PH_SEPARATE);
				ZEPHIR_INIT_VAR(&_27$$9);
				if (!ZEPHIR_IS_STRING_IDENTICAL(&where_clause, "")) {
					ZEPHIR_INIT_NVAR(&_27$$9);
					ZVAL_STRING(&_27$$9, " AND ");
				} else {
					ZEPHIR_INIT_NVAR(&_27$$9);
					ZVAL_STRING(&_27$$9, " WHERE");
				}
				ZEPHIR_INIT_VAR(&_28$$9);
				ZEPHIR_CONCAT_VSVSVVS(&_28$$9, &_27$$9, " MATCH (", &columns, ") AGAINST (", &map_key, &mode, ")");
				zephir_concat_self(&where_clause, &_28$$9 TSRMLS_CC);
			}
		}
		if (zephir_array_isset_string(where, SL("GROUP"))) {
			ZEPHIR_OBS_VAR(&group);
			zephir_array_fetch_string(&group, where, SL("GROUP"), PH_NOISY, "vof/medoo.zep", 709 TSRMLS_CC);
			if (Z_TYPE_P(&group) == IS_ARRAY) {
				ZEPHIR_INIT_VAR(&stack$$12);
				array_init(&stack$$12);
				zephir_is_iterable(&group, 0, "vof/medoo.zep", 720);
				ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&group), _30$$12, _31$$12, _29$$12)
				{
					ZEPHIR_INIT_NVAR(&column$$12);
					if (_31$$12 != NULL) { 
						ZVAL_STR_COPY(&column$$12, _31$$12);
					} else {
						ZVAL_LONG(&column$$12, _30$$12);
					}
					ZEPHIR_INIT_NVAR(&value1$$12);
					ZVAL_COPY(&value1$$12, _29$$12);
					ZEPHIR_CALL_METHOD(&_32$$13, this_ptr, "columnquote", &_33, 0, &value1$$12);
					zephir_check_call_status();
					zephir_array_append(&stack$$12, &_32$$13, PH_SEPARATE, "vof/medoo.zep", 717);
				} ZEND_HASH_FOREACH_END();
				ZEPHIR_INIT_NVAR(&value1$$12);
				ZEPHIR_INIT_NVAR(&column$$12);
				ZEPHIR_INIT_VAR(&_34$$12);
				zephir_fast_join_str(&_34$$12, SL(","), &stack$$12 TSRMLS_CC);
				ZEPHIR_INIT_VAR(&_35$$12);
				ZEPHIR_CONCAT_SV(&_35$$12, " GROUP BY ", &_34$$12);
				zephir_concat_self(&where_clause, &_35$$12 TSRMLS_CC);
			} else {
				zephir_array_fetch_string(&_37$$14, where, SL("GROUP"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 724 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&_36$$14, this_ptr, "columnquote", &_33, 0, &_37$$14);
				zephir_check_call_status();
				ZEPHIR_INIT_VAR(&_38$$14);
				ZEPHIR_CONCAT_SV(&_38$$14, " GROUP BY ", &_36$$14);
				zephir_concat_self(&where_clause, &_38$$14 TSRMLS_CC);
			}
			if (zephir_array_isset_string(where, SL("HAVING"))) {
				zephir_array_fetch_string(&_40$$15, where, SL("HAVING"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 729 TSRMLS_CC);
				ZEPHIR_INIT_VAR(&_41$$15);
				ZVAL_STRING(&_41$$15, " AND");
				ZEPHIR_CALL_METHOD(&_39$$15, this_ptr, "dataimplode", &_5, 0, &_40$$15, map, &_41$$15);
				zephir_check_call_status();
				ZEPHIR_INIT_VAR(&_42$$15);
				ZEPHIR_CONCAT_SV(&_42$$15, " HAVING ", &_39$$15);
				zephir_concat_self(&where_clause, &_42$$15 TSRMLS_CC);
			}
		}
		if (zephir_array_isset_string(where, SL("ORDER"))) {
			ZEPHIR_OBS_VAR(&order1$$16);
			zephir_array_fetch_string(&order1$$16, where, SL("ORDER"), PH_NOISY, "vof/medoo.zep", 736 TSRMLS_CC);
			if (Z_TYPE_P(&order1$$16) == IS_ARRAY) {
				ZEPHIR_INIT_VAR(&stack$$17);
				array_init(&stack$$17);
				zephir_is_iterable(&order1$$16, 0, "vof/medoo.zep", 759);
				ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&order1$$16), _44$$17, _45$$17, _43$$17)
				{
					ZEPHIR_INIT_NVAR(&column$$17);
					if (_45$$17 != NULL) { 
						ZVAL_STR_COPY(&column$$17, _45$$17);
					} else {
						ZVAL_LONG(&column$$17, _44$$17);
					}
					ZEPHIR_INIT_NVAR(&value2$$17);
					ZVAL_COPY(&value2$$17, _43$$17);
					if (Z_TYPE_P(&value2$$17) == IS_ARRAY) {
						ZEPHIR_CALL_METHOD(&_46$$19, this_ptr, "columnquote", &_33, 0, &column$$17);
						zephir_check_call_status();
						ZEPHIR_CALL_METHOD(&_47$$19, this_ptr, "arrayquote", &_48, 0, &value2$$17);
						zephir_check_call_status();
						ZEPHIR_INIT_LNVAR(_49$$19);
						ZEPHIR_CONCAT_SVSVS(&_49$$19, "FIELD(", &_46$$19, ", ", &_47$$19, ")");
						zephir_array_append(&stack$$17, &_49$$19, PH_SEPARATE, "vof/medoo.zep", 745);
					} else {
						_50$$20 = ZEPHIR_IS_STRING_IDENTICAL(&value2$$17, "ASC");
						if (!(_50$$20)) {
							_50$$20 = ZEPHIR_IS_STRING_IDENTICAL(&value2$$17, "DESC");
						}
						if (_50$$20) {
							ZEPHIR_CALL_METHOD(&_51$$21, this_ptr, "columnquote", &_33, 0, &column$$17);
							zephir_check_call_status();
							ZEPHIR_INIT_LNVAR(_52$$21);
							ZEPHIR_CONCAT_VSV(&_52$$21, &_51$$21, " ", &value2$$17);
							zephir_array_append(&stack$$17, &_52$$21, PH_SEPARATE, "vof/medoo.zep", 749);
						} else {
							if (Z_TYPE_P(&column$$17) == IS_LONG) {
								ZEPHIR_CALL_METHOD(&_53$$23, this_ptr, "columnquote", &_33, 0, &value2$$17);
								zephir_check_call_status();
								zephir_array_append(&stack$$17, &_53$$23, PH_SEPARATE, "vof/medoo.zep", 753);
							}
						}
					}
				} ZEND_HASH_FOREACH_END();
				ZEPHIR_INIT_NVAR(&value2$$17);
				ZEPHIR_INIT_NVAR(&column$$17);
				ZEPHIR_INIT_VAR(&_54$$17);
				zephir_fast_join_str(&_54$$17, SL(","), &stack$$17 TSRMLS_CC);
				ZEPHIR_INIT_VAR(&_55$$17);
				ZEPHIR_CONCAT_SV(&_55$$17, " ORDER BY ", &_54$$17);
				zephir_concat_self(&where_clause, &_55$$17 TSRMLS_CC);
			} else {
				ZEPHIR_CALL_METHOD(&_56$$24, this_ptr, "columnquote", &_33, 0, &order1$$16);
				zephir_check_call_status();
				ZEPHIR_INIT_VAR(&_57$$24);
				ZEPHIR_CONCAT_SV(&_57$$24, " ORDER BY ", &_56$$24);
				zephir_concat_self(&where_clause, &_57$$24 TSRMLS_CC);
			}
			_58$$16 = zephir_array_isset_string(where, SL("LIMIT"));
			if (_58$$16) {
				zephir_read_property(&_59$$16, this_ptr, SL("database_type"), PH_NOISY_CC | PH_READONLY);
				ZEPHIR_INIT_VAR(&_60$$16);
				zephir_create_array(&_60$$16, 2, 0 TSRMLS_CC);
				ZEPHIR_INIT_VAR(&_61$$16);
				ZVAL_STRING(&_61$$16, "oracle");
				zephir_array_fast_append(&_60$$16, &_61$$16);
				ZEPHIR_INIT_NVAR(&_61$$16);
				ZVAL_STRING(&_61$$16, "mssql");
				zephir_array_fast_append(&_60$$16, &_61$$16);
				_58$$16 = zephir_fast_in_array(&_59$$16, &_60$$16 TSRMLS_CC);
			}
			if (_58$$16) {
				ZEPHIR_OBS_VAR(&limit$$25);
				zephir_array_fetch_string(&limit$$25, where, SL("LIMIT"), PH_NOISY, "vof/medoo.zep", 769 TSRMLS_CC);
				if (zephir_is_numeric(&limit$$25)) {
					ZEPHIR_INIT_VAR(&_62$$26);
					ZEPHIR_CONCAT_SVS(&_62$$26, " FETCH FIRST ", &limit$$25, " ROWS ONLY");
					zephir_concat_self(&where_clause, &_62$$26 TSRMLS_CC);
				}
				_63$$25 = Z_TYPE_P(&limit$$25) == IS_ARRAY;
				if (_63$$25) {
					zephir_array_fetch_long(&_64$$25, &limit$$25, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 776 TSRMLS_CC);
					_63$$25 = zephir_is_numeric(&_64$$25);
				}
				_65$$25 = _63$$25;
				if (_65$$25) {
					zephir_array_fetch_long(&_66$$25, &limit$$25, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 776 TSRMLS_CC);
					_65$$25 = zephir_is_numeric(&_66$$25);
				}
				if (_65$$25) {
					zephir_array_fetch_long(&_67$$27, &limit$$25, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 778 TSRMLS_CC);
					zephir_array_fetch_long(&_68$$27, &limit$$25, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 778 TSRMLS_CC);
					ZEPHIR_INIT_VAR(&_69$$27);
					ZEPHIR_CONCAT_SVSVS(&_69$$27, " OFFSET ", &_67$$27, " ROWS FETCH NEXT ", &_68$$27, " ROWS ONLY");
					zephir_concat_self(&where_clause, &_69$$27 TSRMLS_CC);
				}
			}
		}
		_70$$3 = zephir_array_isset_string(where, SL("LIMIT"));
		if (_70$$3) {
			zephir_read_property(&_71$$3, this_ptr, SL("database_type"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_INIT_VAR(&_72$$3);
			zephir_create_array(&_72$$3, 2, 0 TSRMLS_CC);
			ZEPHIR_INIT_NVAR(&_0$$3);
			ZVAL_STRING(&_0$$3, "oracle");
			zephir_array_fast_append(&_72$$3, &_0$$3);
			ZEPHIR_INIT_NVAR(&_0$$3);
			ZVAL_STRING(&_0$$3, "mssql");
			zephir_array_fast_append(&_72$$3, &_0$$3);
			_70$$3 = !(zephir_fast_in_array(&_71$$3, &_72$$3 TSRMLS_CC));
		}
		if (_70$$3) {
			ZEPHIR_OBS_VAR(&limit$$28);
			zephir_array_fetch_string(&limit$$28, where, SL("LIMIT"), PH_NOISY, "vof/medoo.zep", 786 TSRMLS_CC);
			if (zephir_is_numeric(&limit$$28)) {
				ZEPHIR_INIT_VAR(&_73$$29);
				ZEPHIR_CONCAT_SV(&_73$$29, " LIMIT ", &limit$$28);
				zephir_concat_self(&where_clause, &_73$$29 TSRMLS_CC);
			}
			_74$$28 = Z_TYPE_P(&limit$$28) == IS_ARRAY;
			if (_74$$28) {
				zephir_array_fetch_long(&_75$$28, &limit$$28, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 793 TSRMLS_CC);
				_74$$28 = zephir_is_numeric(&_75$$28);
			}
			_76$$28 = _74$$28;
			if (_76$$28) {
				zephir_array_fetch_long(&_77$$28, &limit$$28, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 793 TSRMLS_CC);
				_76$$28 = zephir_is_numeric(&_77$$28);
			}
			if (_76$$28) {
				zephir_array_fetch_long(&_78$$30, &limit$$28, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 796 TSRMLS_CC);
				zephir_array_fetch_long(&_79$$30, &limit$$28, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 796 TSRMLS_CC);
				ZEPHIR_INIT_VAR(&_80$$30);
				ZEPHIR_CONCAT_SVSV(&_80$$30, " LIMIT ", &_78$$30, " OFFSET ", &_79$$30);
				zephir_concat_self(&where_clause, &_80$$30 TSRMLS_CC);
			}
		}
	} else {
		if (Z_TYPE_P(where) != IS_NULL) {
			ZEPHIR_INIT_VAR(&_81$$32);
			ZEPHIR_CONCAT_SV(&_81$$32, " ", where);
			zephir_concat_self(&where_clause, &_81$$32 TSRMLS_CC);
		}
	}
	RETURN_CCTOR(&where_clause);

}

PHP_METHOD(Vof_Medoo, mapKey) {

	zval i, _0, _1;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&i);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);


	zephir_read_property(&i, this_ptr, SL("guid"), PH_NOISY_CC | PH_READONLY);
	zephir_read_property(&_0, this_ptr, SL("guid"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_INIT_ZVAL_NREF(_1);
	ZVAL_LONG(&_1, (zephir_get_numberval(&_0) + 1));
	zephir_update_property_zval(this_ptr, SL("guid"), &_1);
	ZEPHIR_CONCAT_SVS(return_value, ":MeDoO_", &i, "_mEdOo");
	return;

}

PHP_METHOD(Vof_Medoo, dataImplode) {

	zval _71$$8;
	zend_bool _5$$3, _19$$5, _41$$8, _54$$8, _43$$16, _57$$22;
	zend_string *_2;
	zend_ulong _1;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_10 = NULL, *_14 = NULL, *_18 = NULL, *_24 = NULL, *_33 = NULL, *_39 = NULL, *_50 = NULL, *_55 = NULL, *_62 = NULL;
	zval *data, data_sub, *conjunctor, conjunctor_sub, *outer_conjunctor = NULL, outer_conjunctor_sub, __$null, wheres, key, value, type, relation_match, match1, operator, connector, stack, condition, *_0, _85, _3$$3, _4$$3, _6$$4, _7$$4, _8$$4, _9$$4, _11$$4, _12$$4, _13$$4, _15$$4, _16$$4, _17$$4, _20$$5, _21$$5, _22$$6, _23$$6, _25$$6, _26$$6, _27$$6, _28$$7, _29$$7, column$$7, _30$$7, _31$$10, _32$$11, _34$$11, _35$$12, _36$$13, _37$$13, _38$$14, _40$$14, _72$$8, _42$$16, _44$$16, _45$$18, _46$$18, _47$$18, _48$$19, _49$$19, _51$$19, _52$$19, _53$$19, _56$$20, like_clauses$$20, item$$20, *_60$$20, _69$$20, _70$$20, _58$$23, _59$$23, _61$$24, _63$$24, _64$$24, _65$$24, _67$$24, _68$$24, _66$$25, _73$$26, _74$$26, _75$$28, _76$$29, _77$$31, _78$$32, _79$$32, _80$$33, _81$$34, _82$$34, _83$$35, _84$$35;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&data_sub);
	ZVAL_UNDEF(&conjunctor_sub);
	ZVAL_UNDEF(&outer_conjunctor_sub);
	ZVAL_NULL(&__$null);
	ZVAL_UNDEF(&wheres);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&type);
	ZVAL_UNDEF(&relation_match);
	ZVAL_UNDEF(&match1);
	ZVAL_UNDEF(&operator);
	ZVAL_UNDEF(&connector);
	ZVAL_UNDEF(&stack);
	ZVAL_UNDEF(&condition);
	ZVAL_UNDEF(&_85);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_6$$4);
	ZVAL_UNDEF(&_7$$4);
	ZVAL_UNDEF(&_8$$4);
	ZVAL_UNDEF(&_9$$4);
	ZVAL_UNDEF(&_11$$4);
	ZVAL_UNDEF(&_12$$4);
	ZVAL_UNDEF(&_13$$4);
	ZVAL_UNDEF(&_15$$4);
	ZVAL_UNDEF(&_16$$4);
	ZVAL_UNDEF(&_17$$4);
	ZVAL_UNDEF(&_20$$5);
	ZVAL_UNDEF(&_21$$5);
	ZVAL_UNDEF(&_22$$6);
	ZVAL_UNDEF(&_23$$6);
	ZVAL_UNDEF(&_25$$6);
	ZVAL_UNDEF(&_26$$6);
	ZVAL_UNDEF(&_27$$6);
	ZVAL_UNDEF(&_28$$7);
	ZVAL_UNDEF(&_29$$7);
	ZVAL_UNDEF(&column$$7);
	ZVAL_UNDEF(&_30$$7);
	ZVAL_UNDEF(&_31$$10);
	ZVAL_UNDEF(&_32$$11);
	ZVAL_UNDEF(&_34$$11);
	ZVAL_UNDEF(&_35$$12);
	ZVAL_UNDEF(&_36$$13);
	ZVAL_UNDEF(&_37$$13);
	ZVAL_UNDEF(&_38$$14);
	ZVAL_UNDEF(&_40$$14);
	ZVAL_UNDEF(&_72$$8);
	ZVAL_UNDEF(&_42$$16);
	ZVAL_UNDEF(&_44$$16);
	ZVAL_UNDEF(&_45$$18);
	ZVAL_UNDEF(&_46$$18);
	ZVAL_UNDEF(&_47$$18);
	ZVAL_UNDEF(&_48$$19);
	ZVAL_UNDEF(&_49$$19);
	ZVAL_UNDEF(&_51$$19);
	ZVAL_UNDEF(&_52$$19);
	ZVAL_UNDEF(&_53$$19);
	ZVAL_UNDEF(&_56$$20);
	ZVAL_UNDEF(&like_clauses$$20);
	ZVAL_UNDEF(&item$$20);
	ZVAL_UNDEF(&_69$$20);
	ZVAL_UNDEF(&_70$$20);
	ZVAL_UNDEF(&_58$$23);
	ZVAL_UNDEF(&_59$$23);
	ZVAL_UNDEF(&_61$$24);
	ZVAL_UNDEF(&_63$$24);
	ZVAL_UNDEF(&_64$$24);
	ZVAL_UNDEF(&_65$$24);
	ZVAL_UNDEF(&_67$$24);
	ZVAL_UNDEF(&_68$$24);
	ZVAL_UNDEF(&_66$$25);
	ZVAL_UNDEF(&_73$$26);
	ZVAL_UNDEF(&_74$$26);
	ZVAL_UNDEF(&_75$$28);
	ZVAL_UNDEF(&_76$$29);
	ZVAL_UNDEF(&_77$$31);
	ZVAL_UNDEF(&_78$$32);
	ZVAL_UNDEF(&_79$$32);
	ZVAL_UNDEF(&_80$$33);
	ZVAL_UNDEF(&_81$$34);
	ZVAL_UNDEF(&_82$$34);
	ZVAL_UNDEF(&_83$$35);
	ZVAL_UNDEF(&_84$$35);
	ZVAL_UNDEF(&_71$$8);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 1, &data, &conjunctor, &outer_conjunctor);

	if (!outer_conjunctor) {
		outer_conjunctor = &outer_conjunctor_sub;
		outer_conjunctor = &__$null;
	}


	ZEPHIR_INIT_VAR(&wheres);
	array_init(&wheres);
	zephir_is_iterable(data, 0, "vof/medoo.zep", 984);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(data), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		ZEPHIR_INIT_NVAR(&type);
		zephir_gettype(&type, &value TSRMLS_CC);
		ZEPHIR_INIT_NVAR(&_3$$3);
		ZEPHIR_INIT_NVAR(&_4$$3);
		ZVAL_STRING(&_4$$3, "/^(AND|OR)(\\s+#.*)?$/i");
		zephir_preg_match(&_3$$3, &_4$$3, &key, &relation_match, 0, 0 , 0  TSRMLS_CC);
		_5$$3 = zephir_is_true(&_3$$3);
		if (_5$$3) {
			_5$$3 = ZEPHIR_IS_STRING(&type, "array");
		}
		if (_5$$3) {
			ZEPHIR_INIT_LNVAR(_6$$4);
			ZEPHIR_INIT_NVAR(&_7$$4);
			ZEPHIR_INIT_NVAR(&_8$$4);
			zephir_array_keys(&_8$$4, &value TSRMLS_CC);
			zephir_array_keys(&_7$$4, &_8$$4 TSRMLS_CC);
			ZEPHIR_CALL_FUNCTION(&_9$$4, "array_diff_key", &_10, 55, &value, &_7$$4);
			zephir_check_call_status();
			if (0 != zephir_fast_count_int(&_9$$4 TSRMLS_CC)) {
				zephir_array_fetch_long(&_12$$4, &relation_match, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 830 TSRMLS_CC);
				ZEPHIR_INIT_LNVAR(_13$$4);
				ZEPHIR_CONCAT_SV(&_13$$4, " ", &_12$$4);
				ZEPHIR_CALL_METHOD(&_11$$4, this_ptr, "dataimplode", &_14, 58, &value, &_13$$4);
				zephir_check_call_status();
				ZEPHIR_INIT_NVAR(&_6$$4);
				ZEPHIR_CONCAT_SVS(&_6$$4, "(", &_11$$4, ")");
			} else {
				zephir_array_fetch_long(&_16$$4, &relation_match, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 831 TSRMLS_CC);
				ZEPHIR_INIT_LNVAR(_17$$4);
				ZEPHIR_CONCAT_SV(&_17$$4, " ", &_16$$4);
				ZEPHIR_CALL_METHOD(&_15$$4, this_ptr, "innerconjunct", &_18, 0, &value, &_17$$4, conjunctor);
				zephir_check_call_status();
				ZEPHIR_INIT_NVAR(&_6$$4);
				ZEPHIR_CONCAT_SVS(&_6$$4, "(", &_15$$4, ")");
			}
			zephir_array_append(&wheres, &_6$$4, PH_SEPARATE, "vof/medoo.zep", 831);
		} else {
			_19$$5 = Z_TYPE_P(&key) == IS_LONG;
			if (_19$$5) {
				ZEPHIR_INIT_NVAR(&_20$$5);
				ZEPHIR_INIT_NVAR(&_21$$5);
				ZVAL_STRING(&_21$$5, "/([\\w\\.\\-]+)\\[(\\>|\\>\\=|\\<|\\<\\=|\\!|\\=)\\]([\\w\\.\\-]+)/i");
				zephir_preg_match(&_20$$5, &_21$$5, &value, &match1, 0, 0 , 0  TSRMLS_CC);
				_19$$5 = zephir_is_true(&_20$$5);
			}
			if (_19$$5) {
				ZEPHIR_OBS_NVAR(&operator);
				zephir_array_fetch_long(&operator, &match1, 2, PH_NOISY, "vof/medoo.zep", 838 TSRMLS_CC);
				zephir_array_fetch_long(&_23$$6, &match1, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 840 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&_22$$6, this_ptr, "columnquote", &_24, 0, &_23$$6);
				zephir_check_call_status();
				zephir_array_fetch_long(&_26$$6, &match1, 3, PH_NOISY | PH_READONLY, "vof/medoo.zep", 840 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&_25$$6, this_ptr, "columnquote", &_24, 0, &_26$$6);
				zephir_check_call_status();
				ZEPHIR_INIT_LNVAR(_27$$6);
				ZEPHIR_CONCAT_VSVSV(&_27$$6, &_22$$6, " ", &operator, " ", &_25$$6);
				zephir_array_append(&wheres, &_27$$6, PH_SEPARATE, "vof/medoo.zep", 840);
			} else {
				ZEPHIR_INIT_NVAR(&_28$$7);
				ZEPHIR_INIT_NVAR(&_29$$7);
				ZVAL_STRING(&_29$$7, "/(#?)([\\w\\.\\-]+)(\\[(\\>|\\>\\=|\\<|\\<\\=|\\!|\\<\\>|\\>\\<|\\!?~)\\])?/i");
				zephir_preg_match(&_28$$7, &_29$$7, &key, &match1, 0, 0 , 0  TSRMLS_CC);
				zephir_array_fetch_long(&_30$$7, &match1, 2, PH_NOISY | PH_READONLY, "vof/medoo.zep", 846 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&column$$7, this_ptr, "columnquote", &_24, 0, &_30$$7);
				zephir_check_call_status();
				if (zephir_array_isset_long(&match1, 4)) {
					ZEPHIR_OBS_NVAR(&operator);
					zephir_array_fetch_long(&operator, &match1, 4, PH_NOISY, "vof/medoo.zep", 850 TSRMLS_CC);
					if (ZEPHIR_IS_LONG(&operator, '!')) {
						do {
							if (ZEPHIR_IS_STRING(&type, "NULL")) {
								ZEPHIR_INIT_LNVAR(_31$$10);
								ZEPHIR_CONCAT_VS(&_31$$10, &column$$7, " IS NOT NULL");
								zephir_array_append(&wheres, &_31$$10, PH_SEPARATE, "vof/medoo.zep", 857);
								break;
							}
							if (ZEPHIR_IS_STRING(&type, "array")) {
								ZEPHIR_CALL_METHOD(&_32$$11, this_ptr, "arrayquote", &_33, 0, &value);
								zephir_check_call_status();
								ZEPHIR_INIT_LNVAR(_34$$11);
								ZEPHIR_CONCAT_VSVS(&_34$$11, &column$$7, " NOT IN (", &_32$$11, ")");
								zephir_array_append(&wheres, &_34$$11, PH_SEPARATE, "vof/medoo.zep", 861);
								break;
							}
							if (ZEPHIR_IS_STRING(&type, "integer") || ZEPHIR_IS_STRING(&type, "double")) {
								ZEPHIR_INIT_LNVAR(_35$$12);
								ZEPHIR_CONCAT_VSV(&_35$$12, &column$$7, " != ", &value);
								zephir_array_append(&wheres, &_35$$12, PH_SEPARATE, "vof/medoo.zep", 866);
								break;
							}
							if (ZEPHIR_IS_STRING(&type, "boolean")) {
								ZEPHIR_INIT_LNVAR(_36$$13);
								if (zephir_is_true(&value)) {
									ZEPHIR_INIT_NVAR(&_36$$13);
									ZVAL_LONG(&_36$$13, 1);
								} else {
									ZEPHIR_INIT_NVAR(&_36$$13);
									ZVAL_LONG(&_36$$13, 0);
								}
								ZEPHIR_INIT_LNVAR(_37$$13);
								ZEPHIR_CONCAT_VSV(&_37$$13, &column$$7, " != ", &_36$$13);
								zephir_array_append(&wheres, &_37$$13, PH_SEPARATE, "vof/medoo.zep", 870);
								break;
							}
							if (ZEPHIR_IS_STRING(&type, "string")) {
								ZEPHIR_CALL_METHOD(&_38$$14, this_ptr, "fnquote", &_39, 0, &key, &value);
								zephir_check_call_status();
								ZEPHIR_INIT_LNVAR(_40$$14);
								ZEPHIR_CONCAT_VSV(&_40$$14, &column$$7, " != ", &_38$$14);
								zephir_array_append(&wheres, &_40$$14, PH_SEPARATE, "vof/medoo.zep", 874);
								break;
							}
						} while(0);

					}
					_41$$8 = ZEPHIR_IS_STRING(&operator, "<>");
					if (!(_41$$8)) {
						_41$$8 = ZEPHIR_IS_STRING(&operator, "><");
					}
					if (_41$$8) {
						if (ZEPHIR_IS_STRING(&type, "array")) {
							if (ZEPHIR_IS_STRING(&operator, "><")) {
								zephir_concat_self_str(&column$$7, SL(" NOT") TSRMLS_CC);
							}
							zephir_array_fetch_long(&_42$$16, &value, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 888 TSRMLS_CC);
							_43$$16 = zephir_is_numeric(&_42$$16);
							if (_43$$16) {
								zephir_array_fetch_long(&_44$$16, &value, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 888 TSRMLS_CC);
								_43$$16 = zephir_is_numeric(&_44$$16);
							}
							if (_43$$16) {
								zephir_array_fetch_long(&_45$$18, &value, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 890 TSRMLS_CC);
								zephir_array_fetch_long(&_46$$18, &value, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 890 TSRMLS_CC);
								ZEPHIR_INIT_LNVAR(_47$$18);
								ZEPHIR_CONCAT_SVSVSVS(&_47$$18, "(", &column$$7, " BETWEEN ", &_45$$18, " AND ", &_46$$18, ")");
								zephir_array_append(&wheres, &_47$$18, PH_SEPARATE, "vof/medoo.zep", 890);
							} else {
								zephir_array_fetch_long(&_49$$19, &value, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 894 TSRMLS_CC);
								ZEPHIR_CALL_METHOD(&_48$$19, this_ptr, "quote", &_50, 0, &_49$$19);
								zephir_check_call_status();
								zephir_array_fetch_long(&_52$$19, &value, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 894 TSRMLS_CC);
								ZEPHIR_CALL_METHOD(&_51$$19, this_ptr, "quote", &_50, 0, &_52$$19);
								zephir_check_call_status();
								ZEPHIR_INIT_LNVAR(_53$$19);
								ZEPHIR_CONCAT_SVSVSVS(&_53$$19, "(", &column$$7, " BETWEEN ", &_48$$19, " AND ", &_51$$19, ")");
								zephir_array_append(&wheres, &_53$$19, PH_SEPARATE, "vof/medoo.zep", 894);
							}
						}
					}
					_54$$8 = ZEPHIR_IS_STRING(&operator, "~");
					if (!(_54$$8)) {
						_54$$8 = ZEPHIR_IS_STRING(&operator, "!~");
					}
					if (_54$$8) {
						if (!ZEPHIR_IS_STRING(&type, "array")) {
							ZEPHIR_INIT_NVAR(&value);
							zephir_create_array(&value, 1, 0 TSRMLS_CC);
							zephir_array_fast_append(&value, &value);
						}
						ZEPHIR_INIT_NVAR(&connector);
						ZVAL_STRING(&connector, " OR ");
						ZEPHIR_CALL_FUNCTION(&stack, "array_values", &_55, 56, &value);
						zephir_check_call_status();
						zephir_array_fetch_long(&_56$$20, &stack, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 909 TSRMLS_CC);
						if (Z_TYPE_P(&_56$$20) == IS_ARRAY) {
							_57$$22 = zephir_array_isset_string(&value, SL("AND"));
							if (!(_57$$22)) {
								_57$$22 = zephir_array_isset_string(&value, SL("OR"));
							}
							if (_57$$22) {
								ZEPHIR_INIT_NVAR(&_58$$23);
								zephir_array_keys(&_58$$23, &value TSRMLS_CC);
								zephir_array_fetch_long(&_59$$23, &_58$$23, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 913 TSRMLS_CC);
								ZEPHIR_INIT_NVAR(&connector);
								ZEPHIR_CONCAT_SVS(&connector, " ", &_59$$23, " ");
								ZEPHIR_OBS_NVAR(&value);
								zephir_array_fetch_long(&value, &stack, 0, PH_NOISY, "vof/medoo.zep", 914 TSRMLS_CC);
							}
						}
						ZEPHIR_INIT_NVAR(&like_clauses$$20);
						array_init(&like_clauses$$20);
						zephir_is_iterable(&value, 0, "vof/medoo.zep", 931);
						ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&value), _60$$20)
						{
							ZEPHIR_INIT_NVAR(&item$$20);
							ZVAL_COPY(&item$$20, _60$$20);
							ZEPHIR_CALL_FUNCTION(&_61$$24, "strval", &_62, 59, &item$$20);
							zephir_check_call_status();
							ZEPHIR_CPY_WRT(&item$$20, &_61$$24);
							ZEPHIR_INIT_NVAR(&_63$$24);
							ZEPHIR_INIT_NVAR(&_64$$24);
							ZEPHIR_INIT_NVAR(&_65$$24);
							ZVAL_STRING(&_65$$24, "/(\\[.+\\]|_|%.+|.+%)/");
							zephir_preg_match(&_64$$24, &_65$$24, &item$$20, &_63$$24, 0, 0 , 0  TSRMLS_CC);
							if (!zephir_is_true(&_64$$24)) {
								ZEPHIR_INIT_LNVAR(_66$$25);
								ZEPHIR_CONCAT_SVS(&_66$$25, "%", &item$$20, "%");
								ZEPHIR_CPY_WRT(&item$$20, &_66$$25);
							}
							ZEPHIR_INIT_LNVAR(_67$$24);
							if (ZEPHIR_IS_STRING_IDENTICAL(&operator, "!~")) {
								ZEPHIR_INIT_NVAR(&_67$$24);
								ZVAL_STRING(&_67$$24, " NOT");
							} else {
								ZEPHIR_INIT_NVAR(&_67$$24);
								ZVAL_STRING(&_67$$24, "");
							}
							ZEPHIR_CALL_METHOD(&_61$$24, this_ptr, "fnquote", &_39, 0, &key, &item$$20);
							zephir_check_call_status();
							ZEPHIR_INIT_LNVAR(_68$$24);
							ZEPHIR_CONCAT_VVSV(&_68$$24, &column$$7, &_67$$24, " LIKE ", &_61$$24);
							zephir_array_append(&like_clauses$$20, &_68$$24, PH_SEPARATE, "vof/medoo.zep", 928);
						} ZEND_HASH_FOREACH_END();
						ZEPHIR_INIT_NVAR(&item$$20);
						ZEPHIR_INIT_NVAR(&_69$$20);
						zephir_fast_join(&_69$$20, &like_clauses$$20, &connector TSRMLS_CC);
						ZEPHIR_INIT_LNVAR(_70$$20);
						ZEPHIR_CONCAT_SVS(&_70$$20, "(", &_69$$20, ")");
						zephir_array_append(&wheres, &_70$$20, PH_SEPARATE, "vof/medoo.zep", 931);
					}
					ZEPHIR_INIT_NVAR(&_71$$8);
					zephir_create_array(&_71$$8, 4, 0 TSRMLS_CC);
					ZEPHIR_INIT_NVAR(&_72$$8);
					ZVAL_STRING(&_72$$8, ">");
					zephir_array_fast_append(&_71$$8, &_72$$8);
					ZEPHIR_INIT_NVAR(&_72$$8);
					ZVAL_STRING(&_72$$8, ">=");
					zephir_array_fast_append(&_71$$8, &_72$$8);
					ZEPHIR_INIT_NVAR(&_72$$8);
					ZVAL_STRING(&_72$$8, "<");
					zephir_array_fast_append(&_71$$8, &_72$$8);
					ZEPHIR_INIT_NVAR(&_72$$8);
					ZVAL_STRING(&_72$$8, "<=");
					zephir_array_fast_append(&_71$$8, &_72$$8);
					if (zephir_fast_in_array(&operator, &_71$$8 TSRMLS_CC)) {
						ZEPHIR_INIT_NVAR(&condition);
						ZEPHIR_CONCAT_VSVS(&condition, &column$$7, " ", &operator, " ");
						ZEPHIR_INIT_NVAR(&_73$$26);
						ZVAL_STRING(&_73$$26, "#");
						ZEPHIR_INIT_NVAR(&_74$$26);
						zephir_fast_strpos(&_74$$26, &key, &_73$$26, 0 );
						if (zephir_is_numeric(&value)) {
							zephir_concat_self(&condition, &value TSRMLS_CC);
						} else if (ZEPHIR_IS_LONG_IDENTICAL(&_74$$26, 0)) {
							ZEPHIR_CALL_METHOD(&_75$$28, this_ptr, "fnquote", &_39, 0, &key, &value);
							zephir_check_call_status();
							zephir_concat_self(&condition, &_75$$28 TSRMLS_CC);
						} else {
							ZEPHIR_CALL_METHOD(&_76$$29, this_ptr, "quote", &_50, 0, &value);
							zephir_check_call_status();
							zephir_concat_self(&condition, &_76$$29 TSRMLS_CC);
						}
						zephir_array_append(&wheres, &condition, PH_SEPARATE, "vof/medoo.zep", 951);
					}
				} else {
					do {
						if (ZEPHIR_IS_STRING(&type, "NULL")) {
							ZEPHIR_INIT_LNVAR(_77$$31);
							ZEPHIR_CONCAT_VS(&_77$$31, &column$$7, " IS NULL");
							zephir_array_append(&wheres, &_77$$31, PH_SEPARATE, "vof/medoo.zep", 959);
							break;
						}
						if (ZEPHIR_IS_STRING(&type, "array")) {
							ZEPHIR_CALL_METHOD(&_78$$32, this_ptr, "arrayquote", &_33, 0, &value);
							zephir_check_call_status();
							ZEPHIR_INIT_LNVAR(_79$$32);
							ZEPHIR_CONCAT_VSVS(&_79$$32, &column$$7, " IN (", &_78$$32, ")");
							zephir_array_append(&wheres, &_79$$32, PH_SEPARATE, "vof/medoo.zep", 963);
							break;
						}
						if (ZEPHIR_IS_STRING(&type, "integer") || ZEPHIR_IS_STRING(&type, "double")) {
							ZEPHIR_INIT_LNVAR(_80$$33);
							ZEPHIR_CONCAT_VSV(&_80$$33, &column$$7, " = ", &value);
							zephir_array_append(&wheres, &_80$$33, PH_SEPARATE, "vof/medoo.zep", 968);
							break;
						}
						if (ZEPHIR_IS_STRING(&type, "boolean")) {
							ZEPHIR_INIT_LNVAR(_81$$34);
							if (zephir_is_true(&value)) {
								ZEPHIR_INIT_NVAR(&_81$$34);
								ZVAL_LONG(&_81$$34, 1);
							} else {
								ZEPHIR_INIT_NVAR(&_81$$34);
								ZVAL_LONG(&_81$$34, 0);
							}
							ZEPHIR_INIT_LNVAR(_82$$34);
							ZEPHIR_CONCAT_VSV(&_82$$34, &column$$7, " = ", &_81$$34);
							zephir_array_append(&wheres, &_82$$34, PH_SEPARATE, "vof/medoo.zep", 972);
							break;
						}
						if (ZEPHIR_IS_STRING(&type, "string")) {
							ZEPHIR_CALL_METHOD(&_83$$35, this_ptr, "fnquote", &_39, 0, &key, &value);
							zephir_check_call_status();
							ZEPHIR_INIT_LNVAR(_84$$35);
							ZEPHIR_CONCAT_VSV(&_84$$35, &column$$7, " = ", &_83$$35);
							zephir_array_append(&wheres, &_84$$35, PH_SEPARATE, "vof/medoo.zep", 976);
							break;
						}
					} while(0);

				}
			}
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	ZEPHIR_INIT_VAR(&_85);
	ZEPHIR_CONCAT_VS(&_85, conjunctor, " ");
	zephir_fast_join(return_value, &wheres, &_85 TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, fnQuote) {

	zend_bool _3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *column, column_sub, *str, str_sub, _0, _1, _2, _4, _5, _6;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&column_sub);
	ZVAL_UNDEF(&str_sub);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_5);
	ZVAL_UNDEF(&_6);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 2, 0, &column, &str);



	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "#");
	ZEPHIR_INIT_VAR(&_2);
	zephir_fast_strpos(&_2, column, &_1, 0 );
	_3 = ZEPHIR_IS_LONG_IDENTICAL(&_2, 0);
	if (_3) {
		ZEPHIR_INIT_VAR(&_4);
		ZEPHIR_INIT_VAR(&_5);
		ZEPHIR_INIT_VAR(&_6);
		ZVAL_STRING(&_6, "/^[A-Z0-9\\_]*\\([^)]*\\)$/");
		zephir_preg_match(&_5, &_6, str, &_4, 0, 0 , 0  TSRMLS_CC);
		_3 = zephir_is_true(&_5);
	}
	if (_3) {
		ZEPHIR_CPY_WRT(&_0, str);
	} else {
		ZEPHIR_CALL_METHOD(&_0, this_ptr, "quote", NULL, 0, str);
		zephir_check_call_status();
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(Vof_Medoo, arrayQuote) {

	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *array1, array1_sub, stack, value, *_0, _3, _1$$3, _2$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&array1_sub);
	ZVAL_UNDEF(&stack);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_3);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_2$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &array1);



	ZEPHIR_INIT_VAR(&stack);
	array_init(&stack);
	zephir_is_iterable(array1, 0, "vof/medoo.zep", 1001);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(array1), _0)
	{
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		ZEPHIR_INIT_LNVAR(_1$$3);
		if (Z_TYPE_P(&value) == IS_LONG) {
			ZEPHIR_CPY_WRT(&_1$$3, &value);
		} else {
			zephir_read_property(&_2$$3, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
			ZEPHIR_CALL_METHOD(&_1$$3, &_2$$3, "quote", NULL, 0, &value);
			zephir_check_call_status();
		}
		zephir_array_append(&stack, &_1$$3, PH_SEPARATE, "vof/medoo.zep", 998);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_VAR(&_3);
	ZVAL_STRING(&_3, ",");
	zephir_fast_join(return_value, &_3, &stack TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, innerConjunct) {

	zephir_fcall_cache_entry *_2 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *data, data_sub, *conjunctor, conjunctor_sub, *outer_conjunctor, outer_conjunctor_sub, haystack, value, *_0, _4, _1$$3, _3$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&data_sub);
	ZVAL_UNDEF(&conjunctor_sub);
	ZVAL_UNDEF(&outer_conjunctor_sub);
	ZVAL_UNDEF(&haystack);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_4);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_3$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 3, 0, &data, &conjunctor, &outer_conjunctor);



	ZEPHIR_INIT_VAR(&haystack);
	array_init(&haystack);
	zephir_is_iterable(data, 0, "vof/medoo.zep", 1012);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(data), _0)
	{
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		ZEPHIR_CALL_METHOD(&_1$$3, this_ptr, "dataimplode", &_2, 0, &value, conjunctor);
		zephir_check_call_status();
		ZEPHIR_INIT_LNVAR(_3$$3);
		ZEPHIR_CONCAT_SVS(&_3$$3, "(", &_1$$3, ")");
		zephir_array_append(&haystack, &_3$$3, PH_SEPARATE, "vof/medoo.zep", 1009);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_VAR(&_4);
	ZEPHIR_CONCAT_VS(&_4, outer_conjunctor, " ");
	zephir_fast_join(return_value, &haystack, &_4 TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, columnPush) {

	zend_string *_2;
	zend_ulong _1;
	zephir_fcall_cache_entry *_4 = NULL, *_10 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *columns = NULL, columns_sub, stack, key, value, match2, *_0, _3$$6, _5$$7, _6$$7, _7$$7, _8$$8, _9$$8, _11$$8, _12$$8, _13$$8, _14$$8, _15$$9, _16$$9;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&columns_sub);
	ZVAL_UNDEF(&stack);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&match2);
	ZVAL_UNDEF(&_3$$6);
	ZVAL_UNDEF(&_5$$7);
	ZVAL_UNDEF(&_6$$7);
	ZVAL_UNDEF(&_7$$7);
	ZVAL_UNDEF(&_8$$8);
	ZVAL_UNDEF(&_9$$8);
	ZVAL_UNDEF(&_11$$8);
	ZVAL_UNDEF(&_12$$8);
	ZVAL_UNDEF(&_13$$8);
	ZVAL_UNDEF(&_14$$8);
	ZVAL_UNDEF(&_15$$9);
	ZVAL_UNDEF(&_16$$9);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &columns);

	ZEPHIR_SEPARATE_PARAM(columns);


	if (ZEPHIR_IS_STRING_IDENTICAL(columns, "*")) {
		RETVAL_ZVAL(columns, 1, 0);
		RETURN_MM();
	}
	ZEPHIR_INIT_VAR(&stack);
	array_init(&stack);
	if (Z_TYPE_P(columns) == IS_STRING) {
		ZEPHIR_INIT_NVAR(columns);
		zephir_create_array(columns, 1, 0 TSRMLS_CC);
		zephir_array_fast_append(columns, columns);
	}
	zephir_is_iterable(columns, 1, "vof/medoo.zep", 1052);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(columns), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		if (Z_TYPE_P(&value) == IS_ARRAY) {
			ZEPHIR_CALL_METHOD(&_3$$6, this_ptr, "columnpush", &_4, 60, &value);
			zephir_check_call_status();
			zephir_array_append(&stack, &_3$$6, PH_SEPARATE, "vof/medoo.zep", 1033);
		} else {
			ZEPHIR_INIT_NVAR(&_5$$7);
			ZEPHIR_INIT_NVAR(&_6$$7);
			ZVAL_STRING(&_6$$7, "/(?<column>[a-zA-Z0-9_\\.]+)(?:\\s*\\((?<alias>[a-zA-Z0-9_]+)\\)|\\s*\\[(?<type>(String|Bool|Int|Number|Object|JSON))\\])?/i");
			zephir_preg_match(&_5$$7, &_6$$7, &value, &match2, 0, 0 , 0  TSRMLS_CC);
			ZEPHIR_OBS_NVAR(&_7$$7);
			zephir_array_fetch_string(&_7$$7, &match2, SL("alias"), PH_NOISY, "vof/medoo.zep", 1039 TSRMLS_CC);
			if (!(ZEPHIR_IS_EMPTY(&_7$$7))) {
				zephir_array_fetch_string(&_9$$8, &match2, SL("column"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 1041 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&_8$$8, this_ptr, "columnquote", &_10, 0, &_9$$8);
				zephir_check_call_status();
				zephir_array_fetch_string(&_12$$8, &match2, SL("alias"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 1041 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&_11$$8, this_ptr, "columnquote", &_10, 0, &_12$$8);
				zephir_check_call_status();
				ZEPHIR_INIT_LNVAR(_13$$8);
				ZEPHIR_CONCAT_VSV(&_13$$8, &_8$$8, " AS ", &_11$$8);
				zephir_array_append(&stack, &_13$$8, PH_SEPARATE, "vof/medoo.zep", 1041);
				zephir_array_fetch_string(&_14$$8, &match2, SL("alias"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 1043 TSRMLS_CC);
				zephir_array_update_zval(columns, &key, &_14$$8, PH_COPY | PH_SEPARATE);
			} else {
				zephir_array_fetch_string(&_16$$9, &match2, SL("column"), PH_NOISY | PH_READONLY, "vof/medoo.zep", 1047 TSRMLS_CC);
				ZEPHIR_CALL_METHOD(&_15$$9, this_ptr, "columnquote", &_10, 0, &_16$$9);
				zephir_check_call_status();
				zephir_array_append(&stack, &_15$$9, PH_SEPARATE, "vof/medoo.zep", 1047);
			}
		}
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	zephir_fast_join_str(return_value, SL(","), &stack TSRMLS_CC);
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, columnQuote) {

	zend_bool _2;
	zval *str, str_sub, column_match, _0, _1, _3$$3, _4$$3, _5$$3;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&str_sub);
	ZVAL_UNDEF(&column_match);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);

	ZEPHIR_MM_GROW();
	zephir_fetch_params(1, 1, 0, &str);



	ZEPHIR_INIT_VAR(&_0);
	ZEPHIR_INIT_VAR(&_1);
	ZVAL_STRING(&_1, "/(^#)?([a-zA-Z0-9_]*)\\.([a-zA-Z0-9_]*)(\\s*\\[JSON\\]$)?/");
	zephir_preg_match(&_0, &_1, str, &column_match, 0, 0 , 0  TSRMLS_CC);
	_2 = zephir_array_isset_long(&column_match, 2);
	if (_2) {
		_2 = zephir_array_isset_long(&column_match, 3);
	}
	if (_2) {
		zephir_read_property(&_3$$3, this_ptr, SL("prefix"), PH_NOISY_CC | PH_READONLY);
		zephir_array_fetch_long(&_4$$3, &column_match, 2, PH_NOISY | PH_READONLY, "vof/medoo.zep", 1062 TSRMLS_CC);
		zephir_array_fetch_long(&_5$$3, &column_match, 3, PH_NOISY | PH_READONLY, "vof/medoo.zep", 1062 TSRMLS_CC);
		ZEPHIR_CONCAT_SVVSVS(return_value, "'", &_3$$3, &_4$$3, "'.'", &_5$$3, "'");
		RETURN_MM();
	}
	ZEPHIR_CONCAT_SVS(return_value, "'", str, "'");
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, tableQuote) {

	zval *table, table_sub, _0;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&table_sub);
	ZVAL_UNDEF(&_0);

	zephir_fetch_params(0, 1, 0, &table);



	zephir_read_property(&_0, this_ptr, SL("prefix"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_CONCAT_SVVS(return_value, "'", &_0, table, "'");
	return;

}

PHP_METHOD(Vof_Medoo, debug) {

	zval __$true, __$false;
	zval *this_ptr = getThis();

	ZVAL_BOOL(&__$true, 1);
	ZVAL_BOOL(&__$false, 0);


	if (1) {
		zephir_update_property_zval(this_ptr, SL("debug_mode"), &__$true);
	} else {
		zephir_update_property_zval(this_ptr, SL("debug_mode"), &__$false);
	}
	RETURN_THISW();

}

PHP_METHOD(Vof_Medoo, error) {

	zval _0, _1, _2;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&_0);
	zephir_read_property(&_1, this_ptr, SL("statement"), PH_NOISY_CC | PH_READONLY);
	if (zephir_is_true(&_1)) {
		zephir_read_property(&_2, this_ptr, SL("statement"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_CALL_METHOD(&_0, &_2, "errorinfo", NULL, 0);
		zephir_check_call_status();
	} else {
		ZVAL_NULL(&_0);
	}
	RETURN_CCTOR(&_0);

}

PHP_METHOD(Vof_Medoo, last) {

	zval log, _0, _1, _2;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&log);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_1);
	ZVAL_UNDEF(&_2);

	ZEPHIR_MM_GROW();

	zephir_read_property(&_0, this_ptr, SL("logs"), PH_NOISY_CC | PH_READONLY);
	ZEPHIR_MAKE_REF(&_0);
	ZEPHIR_CALL_FUNCTION(&log, "end", NULL, 47, &_0);
	ZEPHIR_UNREF(&_0);
	zephir_check_call_status();
	zephir_array_fetch_long(&_1, &log, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 1088 TSRMLS_CC);
	zephir_array_fetch_long(&_2, &log, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 1088 TSRMLS_CC);
	ZEPHIR_RETURN_CALL_METHOD(this_ptr, "generate", NULL, 0, &_1, &_2);
	zephir_check_call_status();
	RETURN_MM();

}

PHP_METHOD(Vof_Medoo, log) {

	zval log, logs, _0, *_1, _2$$3, _3$$3, _4$$3;
	zephir_fcall_cache_entry *_5 = NULL;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&log);
	ZVAL_UNDEF(&logs);
	ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2$$3);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&logs);
	array_init(&logs);
	zephir_read_property(&_0, this_ptr, SL("logs"), PH_NOISY_CC | PH_READONLY);
	zephir_is_iterable(&_0, 0, "vof/medoo.zep", 1098);
	ZEND_HASH_FOREACH_VAL(Z_ARRVAL_P(&_0), _1)
	{
		ZEPHIR_INIT_NVAR(&log);
		ZVAL_COPY(&log, _1);
		zephir_array_fetch_long(&_3$$3, &log, 0, PH_NOISY | PH_READONLY, "vof/medoo.zep", 1096 TSRMLS_CC);
		zephir_array_fetch_long(&_4$$3, &log, 1, PH_NOISY | PH_READONLY, "vof/medoo.zep", 1096 TSRMLS_CC);
		ZEPHIR_CALL_METHOD(&_2$$3, this_ptr, "generate", &_5, 0, &_3$$3, &_4$$3);
		zephir_check_call_status();
		zephir_array_append(&logs, &_2$$3, PH_SEPARATE, "vof/medoo.zep", 1096);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&log);
	RETURN_CCTOR(&logs);

}

PHP_METHOD(Vof_Medoo, info) {

	zend_string *_2;
	zend_ulong _1;
	zval output, key, value, *_0, _3$$3, _4$$3, _5$$3, _6$$3;
	zend_long ZEPHIR_LAST_CALL_STATUS;
	zephir_fcall_cache_entry *_7 = NULL;
	zval *this_ptr = getThis();

	ZVAL_UNDEF(&output);
	ZVAL_UNDEF(&key);
	ZVAL_UNDEF(&value);
	ZVAL_UNDEF(&_3$$3);
	ZVAL_UNDEF(&_4$$3);
	ZVAL_UNDEF(&_5$$3);
	ZVAL_UNDEF(&_6$$3);

	ZEPHIR_MM_GROW();

	ZEPHIR_INIT_VAR(&output);
	zephir_create_array(&output, 5, 0 TSRMLS_CC);
	add_assoc_stringl_ex(&output, SL("server"), SL("SERVER_INFO"));
	add_assoc_stringl_ex(&output, SL("driver"), SL("DRIVER_NAME"));
	add_assoc_stringl_ex(&output, SL("client"), SL("CLIENT_VERSION"));
	add_assoc_stringl_ex(&output, SL("version"), SL("SERVER_VERSION"));
	add_assoc_stringl_ex(&output, SL("connection"), SL("CONNECTION_STATUS"));
	zephir_is_iterable(&output, 1, "vof/medoo.zep", 1121);
	ZEND_HASH_FOREACH_KEY_VAL(Z_ARRVAL_P(&output), _1, _2, _0)
	{
		ZEPHIR_INIT_NVAR(&key);
		if (_2 != NULL) { 
			ZVAL_STR_COPY(&key, _2);
		} else {
			ZVAL_LONG(&key, _1);
		}
		ZEPHIR_INIT_NVAR(&value);
		ZVAL_COPY(&value, _0);
		zephir_read_property(&_3$$3, this_ptr, SL("pdo"), PH_NOISY_CC | PH_READONLY);
		ZEPHIR_INIT_LNVAR(_5$$3);
		ZEPHIR_CONCAT_SV(&_5$$3, "\\PDO::ATTR_", &value);
		ZEPHIR_CALL_FUNCTION(&_6$$3, "constant", &_7, 61, &_5$$3);
		zephir_check_call_status();
		ZEPHIR_CALL_METHOD(&_4$$3, &_3$$3, "getattribute", NULL, 0, &_6$$3);
		zephir_check_call_status();
		zephir_array_update_zval(&output, &key, &_4$$3, PH_COPY | PH_SEPARATE);
	} ZEND_HASH_FOREACH_END();
	ZEPHIR_INIT_NVAR(&value);
	ZEPHIR_INIT_NVAR(&key);
	RETURN_CCTOR(&output);

}

zend_object *zephir_init_properties_Vof_Medoo(zend_class_entry *class_type TSRMLS_DC) {

		zval _0, _2, _1$$3, _3$$4;
		ZVAL_UNDEF(&_0);
	ZVAL_UNDEF(&_2);
	ZVAL_UNDEF(&_1$$3);
	ZVAL_UNDEF(&_3$$4);

		ZEPHIR_MM_GROW();
	
	{
		zval local_this_ptr, *this_ptr = &local_this_ptr;
		ZEPHIR_CREATE_OBJECT(this_ptr, class_type);
		zephir_read_property(&_0, this_ptr, SL("logs"), PH_NOISY_CC | PH_READONLY);
		if (Z_TYPE_P(&_0) == IS_NULL) {
			ZEPHIR_INIT_VAR(&_1$$3);
			array_init(&_1$$3);
			zephir_update_property_zval(this_ptr, SL("logs"), &_1$$3);
		}
		zephir_read_property(&_2, this_ptr, SL("option"), PH_NOISY_CC | PH_READONLY);
		if (Z_TYPE_P(&_2) == IS_NULL) {
			ZEPHIR_INIT_VAR(&_3$$4);
			array_init(&_3$$4);
			zephir_update_property_zval(this_ptr, SL("option"), &_3$$4);
		}
		ZEPHIR_MM_RESTORE();
		return Z_OBJ_P(this_ptr);
	}

}

