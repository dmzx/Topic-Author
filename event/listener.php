<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

namespace dmzx\topicauthor\event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use phpbb\config\config;

class listener implements EventSubscriberInterface
{
	/** @var config */
	protected $config;

	/**
	* Constructor
	*
	* @param config		$config
	*
	*/
	public function __construct(
		config $config
	)
	{
		$this->config = $config;
	}

	static public function getSubscribedEvents()
	{
		return array(
			'core.viewtopic_modify_post_row'	=> 'viewtopic_modify_post_row',
		);
	}

	public function viewtopic_modify_post_row($event)
	{
		$post_row = $event['post_row'];

		$post_row = array_merge($post_row, array(
			'TOPICAUTHOR_COLOUR'		=> $this->config['topicauthor_colour_field'],
			'TOPICAUTHOR_TEXT'			=> $this->config['topicauthor_text_field'],
			'TOPICAUTHOR_TEXT_COLOUR'	=> $this->config['topicauthor_text_colour_field'],
			'TOPICAUTHOR_ENABLED'		=> $this->config['topicauthor_enable'] ? true : false,
		));
		$event['post_row'] = $post_row;
	}
}
