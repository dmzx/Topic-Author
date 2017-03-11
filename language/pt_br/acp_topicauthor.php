<?php
/**
*
* @package phpBB Extension - Topic Author
* @copyright (c) 2016 dmzx - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
*
*/

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	'TOPICAUTHOR_CONFIG_SAVED'				=> 'Configurações do Autor do Tópico salvas',
	'TOPICAUTHOR_VERSION'					=> 'Versão',
	'TOPICAUTHOR_ENABLE'					=> 'Habilita Autor do Tópico',
	'TOPICAUTHOR_ENABLE_EXPLAIN'			=> 'Mostra no viewtopic.',
	'TOPICAUTHOR_COLOUR_FIELD'				=> 'Seleciona cor',
	'TOPICAUTHOR_COLOUR_FIELD_EXPLAIN'		=> 'Clique para selecionar a cor desejada.',
	'TOPICAUTHOR_TEXT_FIELD'				=> 'Autor do Tópico',
	'TOPICAUTHOR_TEXT_FIELD_EXPLAIN'		=> 'Ajusta o texto do Autor do Tópico.',
	'TOPICAUTHOR_TEXT_COLOUR_FIELD'			=> 'Seleciona a cor do texto',
	'TOPICAUTHOR_TEXT_COLOUR_FIELD_EXPLAIN'	=> 'Clique para selecionar a cor desejada.',
));
