<?php
/**
 *
 * Topic Author. An extension for the phpBB Forum Software package.
 * French translation by Galixte (http://www.galixte.com)
 *
 * @copyright (c) 2018 dmzx <https://www.dmzx-web.net>
 * @license GNU General Public License, version 2 (GPL-2.0-only)
 *
 */

/**
 * DO NOT CHANGE
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
// Some characters you may want to copy&paste:
// ’ « » “ ” …
//

$lang = array_merge($lang, array(
	'TOPICAUTHOR_CONFIG_SAVED'				=> 'Les paramètres ont été sauvergardés avec succès !',
	'TOPICAUTHOR_VERSION'					=> 'Version de l’extension',
	'TOPICAUTHOR_ENABLE'					=> 'Activer l’affichage de l’indicateur « Auteur du sujet »',
	'TOPICAUTHOR_ENABLE_EXPLAIN'			=> 'Permet d’activer l’affichage de l’indicateur « Auteur du sujet » sur la page de la vue du sujet.',
	'TOPICAUTHOR_COLOUR_FIELD'				=> 'Sélectionner la couleur de l’indicateur « Auteur du sujet »',
	'TOPICAUTHOR_COLOUR_FIELD_EXPLAIN'		=> 'Permet de sélectionner la couleur de l’indicateur « Auteur du sujet » au moyen du sélecteur de couleurs ci-contre.',
	'TOPICAUTHOR_TEXT_FIELD'				=> 'Saisir le texte de l’indicateur « Auteur du sujet »',
	'TOPICAUTHOR_TEXT_FIELD_EXPLAIN'		=> 'Permet de saisir le texte affiché comme indicateur « Auteur du sujet ».',
	'TOPICAUTHOR_TEXT_COLOUR_FIELD'			=> 'Sélectionner la couleur du texte de l’indicateur « Auteur du sujet »',
	'TOPICAUTHOR_TEXT_COLOUR_FIELD_EXPLAIN'	=> 'Permet de sélectionner la couleur du texte affiché dans l’indicateur « Auteur du sujet » au moyen du sélecteur de couleurs ci-contre.',
));
