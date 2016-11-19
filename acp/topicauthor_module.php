<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicauthor\acp;

class topicauthor_module
{
	var $u_action;

	function main($id, $mode)
	{
		global $user, $template, $request, $config;

		$this->tpl_name = 'acp_topicauthor_config';
		$this->page_title = $user->lang['ACP_TOPICAUTHOR_CONFIG_SETTINGS'];
		add_form_key('acp_topicauthor_config');

		$submit = $request->is_set_post('submit');
		if ($submit)
		{
			if (!check_form_key('acp_topicauthor_config'))
			{
				trigger_error('FORM_INVALID');
			}
			$config->set('topicauthor_enable', $request->variable('topicauthor_enable', 0));
			$config->set('topicauthor_colour_field', $request->variable('topicauthor_colour_field', '', true));
			$config->set('topicauthor_text_field', $request->variable('topicauthor_text_field', '', true));
			$config->set('topicauthor_text_colour_field', $request->variable('topicauthor_text_colour_field', '', true));

			trigger_error($user->lang['TOPICAUTHOR_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}

		$template->assign_vars(array(
			'TOPICAUTHOR_VERSION'			=> (isset($config['topicauthor_version'])) ? $config['topicauthor_version'] : '',
			'TOPICAUTHOR_ENABLE'			=> (!empty($config['topicauthor_enable'])) ? true : false,
			'TOPICAUTHOR_COLOUR_FIELD'		=> (isset($config['topicauthor_colour_field'])) ? $config['topicauthor_colour_field'] : '',
			'TOPICAUTHOR_TEXT_FIELD'		=> (isset($config['topicauthor_text_field'])) ? $config['topicauthor_text_field'] : '',
			'TOPICAUTHOR_TEXT_COLOUR_FIELD'		=> (isset($config['topicauthor_text_colour_field'])) ? $config['topicauthor_text_colour_field'] : '',
			'U_ACTION'						=> $this->u_action,
		));
	}
}
