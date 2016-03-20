<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicauthor\migrations;

class topicauthor_schema extends \phpbb\db\migration\migration
{
	public function update_data()
	{
		return array(
			// Add configs
			array('config.add', array('topicauthor_enable', 1)),
			array('config.add', array('topicauthor_colour_field', 'A60D89')),
			array('config.add', array('topicauthor_text_field', 'Topic Author')),
			array('config.add', array('topicauthor_version', '1.0.2')),
		);
	}
}
