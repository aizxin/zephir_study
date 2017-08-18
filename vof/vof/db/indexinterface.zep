
/*
 +------------------------------------------------------------------------+
 | Phalcon Framework                                                      |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (http://www.phalconphp.com)       |
 +------------------------------------------------------------------------+
 | This source file is subject to the New BSD License that is bundled     |
 | with this package in the file LICENSE.txt.                             |
 |                                                                        |
 | If you did not receive a copy of the license and are unable to         |
 | obtain it through the world-wide-web, please send an email             |
 | to license@phalconphp.com so we can send you a copy immediately.       |
 +------------------------------------------------------------------------+
 | Authors: Andres Gutierrez <andres@phalconphp.com>                      |
 |          Eduar Carvajal <eduar@phalconphp.com>                         |
 +------------------------------------------------------------------------+
 */

namespace Vof\Db;

/**
 * Vof\Db\IndexInterface
 *
 * Interface for Vof\Db\Index
 */
interface IndexInterface
{
	/**
	 * Gets the index name
	 *
	 * @return string
	 */
	public function getName();

	/**
	 * Gets the columns that corresponds the index
	 *
	 * @return array
	 */
	public function getColumns();

	/**
	 * Gets the index type
	 *
	 * @return string
	 */
	public function getType();

	/**
	 * Restore a Vof\Db\Index object from export
	 */
	public static function __set_state(array! data) -> <IndexInterface>;

}