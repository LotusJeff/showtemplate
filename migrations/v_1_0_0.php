<?php
/**
 *
 * @package Show Template Event Locations
 * @copyright (c) 2015 Jeff Cocking LotusJeff
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 *  https://github.com/LotusJeff/showtemplate
 *
 */

namespace lotusjeff\showtemplate\migrations;

class v_1_0_0 extends \phpbb\db\migration\migration
{
	public function effectively_installed()
	{
		return;
	}
	static public function depends_on()
	{
		return array('\phpbb\db\migration\data\v310\gold');
	}

	public function update_data()
	{
		return array(
			array('config.add', array('lotusjeff_showtemplate_versions', '1.0.0')),
			);
	}
}
