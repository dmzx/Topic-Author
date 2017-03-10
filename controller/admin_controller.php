<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicauthor\controller;

use phpbb\config\config;
use phpbb\template\template;
use phpbb\log\log_interface;
use phpbb\user;
use phpbb\request\request_interface;

class admin_controller
{
	/** @var config */
	protected $config;

	/** @var template */
	protected $template;

	/** @var log_interface */
	protected $log;

	/** @var user */
	protected $user;

	/** @var request_interface */
	protected $request;

	/** @var string */
	protected $u_action;

	/**
	* Constructor
	*
	* @param config					$config
	* @param template				$template
	* @param log_interface			$log
	* @param user					$user
	* @param request_interface		$request
	*/
	public function __construct(
		config $config,
		template $template,
		log_interface $log,
		user $user,
		request_interface $request
	)
	{
		$this->config 			= $config;
		$this->template 		= $template;
		$this->log 				= $log;
		$this->user 			= $user;
		$this->request 			= $request;
	}

	public function display_options()
	{
		add_form_key('acp_topicauthor_config');

		// Is the form being submitted to us?
		if ($this->request->is_set_post('submit'))
		{
			if (!check_form_key('acp_topicauthor_config'))
			{
				trigger_error('FORM_INVALID');
			}

			// Set the options the user configured
			$this->set_options();

			// Add option settings change action to the admin log
			$this->log->add('admin', $this->user->data['user_id'], $this->user->ip, 'LOG_TOPICAUTHOR_SAVED');

			trigger_error($this->user->lang['TOPICAUTHOR_CONFIG_SAVED'] . adm_back_link($this->u_action));
		}

		$this->template->assign_vars(array(
			'TOPICAUTHOR_VERSION'				=> $this->config['topicauthor_version'],
			'TOPICAUTHOR_ENABLE'				=> $this->config['topicauthor_enable'],
			'TOPICAUTHOR_COLOUR_FIELD'			=> $this->config['topicauthor_colour_field'],
			'TOPICAUTHOR_TEXT_FIELD'			=> $this->config['topicauthor_text_field'],
			'TOPICAUTHOR_TEXT_COLOUR_FIELD'		=> $this->config['topicauthor_text_colour_field'],
			'U_ACTION'							=> $this->u_action,
		));
	}

	/**
	* Set the options a user can configure
	*
	* @return null
	* @access protected
	*/
	protected function set_options()
	{
		$this->config->set('topicauthor_enable', $this->request->variable('topicauthor_enable', 0));
		$this->config->set('topicauthor_colour_field', $this->request->variable('topicauthor_colour_field', '', true));
		$this->config->set('topicauthor_text_field', $this->request->variable('topicauthor_text_field', '', true));
		$this->config->set('topicauthor_text_colour_field', $this->request->variable('topicauthor_text_colour_field', '', true));
	}

	/**
	* Set page url
	*
	* @param string $u_action Custom form action
	* @return null
	* @access public
	*/
	public function set_page_url($u_action)
	{
		$this->u_action = $u_action;
	}
}
