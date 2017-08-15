
/*
 +------------------------------------------------------------------------+
 | Phalcon Framework                                                      |
 +------------------------------------------------------------------------+
 | Copyright (c) 2011-2017 Phalcon Team (https://phalconphp.com)          |
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

namespace Vof\Logger\Formatter;

use Vof\Logger\Formatter;

/**
 * Vof\Logger\Formatter\Json
 *
 * Formats messages using JSON encoding
 */
class Json extends Formatter
{

	/**
	 * Applies a format to a message before sent it to the internal log
	 *
	 * @param string message
	 * @param int type
	 * @param int timestamp
	 * @param array $context
	 * @return string
	 */
	public function format(string message, int type, int timestamp, var context = null) -> string
	{
		if typeof context === "array" {
			let message = this->interpolate(message, context);
		}

		return json_encode([
			"type": this->getTypeString(type),
			"message": message,
			"timestamp": timestamp
		]).PHP_EOL;
	}
}
