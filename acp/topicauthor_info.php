<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicauthor\acp;

class topicauthor_info
{
	function module()
	{
		return array(
			'filename'	=> '\dmzx\topicauthor\acp\topicauthor_module',
			'title'		=> 'ACP_TOPICAUTHOR',
			'modes'		=> array(
			'config'	=> array(
				'title' => 'ACP_TOPICAUTHOR_CONFIG_SETTINGS',
				'auth' => 'ext_dmzx/topicauthor && acl_a_board',
				'cat' => array('ACP_TOPICAUTHOR')),
			),
		);
	}
}
