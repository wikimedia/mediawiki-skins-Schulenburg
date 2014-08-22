<?php
/**
 * Schulenburg skin.
 *
 * @file
 * @ingroup Skins
 * @author Tim Starling
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 2.0 or later
 *
 * To install place the Schulenburg folder (the folder containing this file!) into
 * skins/ and add this line to your wiki's LocalSettings.php:
 * require_once("$IP/skins/Schulenburg/Schulenburg.php");
 */

$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'name' => 'Schulenburg',
	'author' => 'Tim Starling',
	'description' => 'Schulenburg',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Schulenburg',
);

$wgValidSkinNames['schulenburg'] = 'Schulenburg';
$wgSkipSkins[] = 'schulenburg';
$wgSchulenburgSkinPath = false;
$wgAutoloadClasses['SkinSchulenburg'] = __DIR__ . '/Schulenburg.class.php';