<?php
namespace wcf\system\option\user\group;
use wcf\system\option\IOptionType;

/**
 * Any group permission type should implement this interface.
 *
 * @author	Marcel Werk
 * @copyright	2001-2011 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.option.user.group
 * @category 	Community Framework
 */
interface IUserGroupOptionType extends IOptionType {
	/**
	 * Merges the different values of an option to a single value.
	 * 
	 * @param	array		$values
	 * @return	mixed
	 */
	public function merge(array $values);
}
