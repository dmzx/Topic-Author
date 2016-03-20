<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicauthor\migrations;

class topicauthor_module extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			array('module.add', array('acp', 'ACP_CAT_DOT_MODS', 'ACP_TOPICAUTHOR')),
			array('module.add', array(
				'acp', 'ACP_TOPICAUTHOR', array(
					'module_basename'	=> '\dmzx\topicauthor\acp\topicauthor_module',
					'modes'		=> array('config'),
				),
			)),
		);
	}
}
