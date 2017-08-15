
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

namespace Vof\Logger\Adapter;

use Vof\Logger\Exception;
use Vof\Logger\Adapter;
use Vof\Logger\FormatterInterface;
use Vof\Logger\Formatter\Line as LineFormatter;

/**
 * Vof\Logger\Adapter\Stream
 *
 * Sends logs to a valid PHP stream
 *
 * <code>
 * use Vof\Logger;
 * use Vof\Logger\Adapter\Stream;
 *
 * $logger = new Stream("php://stderr");
 *
 * $logger->log("This is a message");
 * $logger->log(Logger::ERROR, "This is an error");
 * $logger->error("This is another error");
 * </code>
 */
class Stream extends Adapter
{

	/**
	 * File handler resource
	 *
	 * @var resource
	 */
	protected _stream;

	/**
	 * Vof\Logger\Adapter\Stream constructor
	 *
	 * @param string name
	 * @param array options
	 */
	public function __construct(string! name, options = null)
	{
		var mode, stream;

		if fetch mode, options["mode"] {
			if memstr(mode, "r") {
				throw new Exception("Stream must be opened in append or write mode");
			}
		} else {
			let mode = "ab";
		}

		/**
		 * We use 'fopen' to respect to open-basedir directive
		 */
		let stream = fopen(name, mode);
		if !stream {
			throw new Exception("Can't open stream '" . name . "'");
		}

		let this->_stream = stream;
	}

	/**
	 * Returns the internal formatter
	 */
	public function getFormatter() -> <FormatterInterface>
	{
		if typeof this->_formatter !== "object" {
			let this->_formatter = new LineFormatter();
		}

		return this->_formatter;
	}

	/**
	 * Writes the log to the stream itself
	 */
	public function logInternal(string message, int type, int time, array context)
	{
		var stream;

		let stream = this->_stream;
		if typeof stream != "resource" {
			throw new Exception("Cannot send message to the log because it is invalid");
		}

		fwrite(stream, this->getFormatter()->format(message, type, time, context));
	}

	/**
 	 * Closes the logger
 	 */
	public function close() -> boolean
	{
		return fclose(this->_stream);
	}
}
