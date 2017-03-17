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
	'TOPICAUTHOR_CONFIG_SAVED'				=> 'Ajustes de Autor del Tema guardados',
	'TOPICAUTHOR_VERSION'					=> 'Versión',
	'TOPICAUTHOR_ENABLE'					=> 'Habilitar Autor del Tema',
	'TOPICAUTHOR_ENABLE_EXPLAIN'			=> 'Mostrar viendo un tema.',
	'TOPICAUTHOR_COLOUR_FIELD'				=> 'Seleccionar color',
	'TOPICAUTHOR_COLOUR_FIELD_EXPLAIN'		=> 'Haga clic en el campo para seleccionar el color.',
	'TOPICAUTHOR_TEXT_FIELD'				=> 'Autor del Tema',
	'TOPICAUTHOR_TEXT_FIELD_EXPLAIN'		=> 'Ajustar el texto de Autor del Tema.',
	'TOPICAUTHOR_TEXT_COLOUR_FIELD'			=> 'Seleccionar color del texto',
	'TOPICAUTHOR_TEXT_COLOUR_FIELD_EXPLAIN'	=> 'Haga clic en el campo para seleccionar el color.',
));
