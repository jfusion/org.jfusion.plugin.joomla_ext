<?php namespace JFusion\Plugins\joomla_ext;

/**
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage joomla_ext
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */

use JFusion\Plugin\Plugin_Front;

/**
 * JFusion Front Class for an external Joomla database
 * For detailed descriptions on these functions please check Front
 *
 * @category   Plugins
 * @package    JFusion\Plugins
 * @subpackage joomla_ext
 * @author     JFusion Team <webmaster@jfusion.org>
 * @copyright  2008 JFusion. All rights reserved.
 * @license    http://www.gnu.org/copyleft/gpl.html GNU/GPL
 * @link       http://www.jfusion.org
 */
class Front extends Plugin_Front
{
	/**
	 * @var $helper Helper
	 */
	var $helper;

	/**
	 * Returns the registration URL for the integrated software
	 *
	 * @return string registration URL
	 */
	public function getRegistrationURL()
	{
		$url = 'index.php?option=com_users&view=registration';
		return $url;
	}

	/**
	 * Returns the lost password URL for the integrated software
	 *
	 * @return string lost password URL
	 */
	public function getLostPasswordURL()
	{
		$url = 'index.php?option=com_users&view=reset';
		return $url;
	}

	/**
	 * Returns the lost username URL for the integrated software
	 *
	 * @return string lost username URL
	 */
	public function getLostUsernameURL()
	{
		$url = 'index.php?option=com_users&view=remind';
		return $url;
	}
}
