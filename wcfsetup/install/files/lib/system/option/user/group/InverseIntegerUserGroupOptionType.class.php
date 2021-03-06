<?php
namespace wcf\system\option\user\group;
use wcf\system\option\IntegerOptionType;

/**
 * InverseIntegerUserGroupOptionType is an implementation of IUserGroupOptionType for integer values.
 * The merge of option values returns the lowest value.
 *
 * @author	Marcel Werk
 * @copyright	2001-2011 WoltLab GmbH
 * @license	GNU Lesser General Public License <http://opensource.org/licenses/lgpl-license.php>
 * @package	com.woltlab.wcf
 * @subpackage	system.option.user.group
 * @category 	Community Framework
 */
class InverseIntegerUserGroupOptionType extends IntegerOptionType implements IUserGroupOptionType {
	/**
	 * @see wcf\system\option\user\group\IUserGroupOptionType::merge()
	 */
	public function merge(array $values) {
		return min($values);
	}
}
