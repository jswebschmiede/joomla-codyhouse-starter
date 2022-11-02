<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.joomla-codyhouse-starter
 *
 * @copyright   (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Factory;
use Joomla\CMS\HTML\HTMLHelper;

/** @var Joomla\CMS\Document\HtmlDocument $this */

// variables
/** @var Joomla\CMS\Factory $app */
$app = Factory::getApplication();
$wa = $this->getWebAssetManager();

$tpath = $this->baseurl . 'templates/' . $this->template;

// Detecting Active Variables
$option = $app->input->getCmd('option', '');
$view = $app->input->getCmd('view', '');
$layout = $app->input->getCmd('layout', '');
$task = $app->input->getCmd('task', '');
$itemid = $app->input->getCmd('Itemid', '');
$sitename = htmlspecialchars($app->get('sitename'), ENT_QUOTES, 'UTF-8');
$menu = $app->getMenu()->getActive();
$pageclass = $menu !== null ? $menu->getParams()->get('pageclass_sfx', '') : '';

// tpl params
$templateparams = $app->getTemplate(true)->params;

// generator tag
$this->setGenerator(null);

// Output as HTML5
$this->setHtml5(true);

// check frontpage
($menu->home == 1) ? $home = true : $home = false;

// Logo file or site title param
if ($templateparams['logoFile']) {
	$logo = '<img src="' . Uri::root(true) . '/' . htmlspecialchars($templateparams['logoFile'], ENT_QUOTES) . '" alt="' . $sitename . '">';
} elseif ($templateparams['siteTitle']) {
	$logo = '<span title="' . $sitename . '">' . htmlspecialchars($templateparams['siteTitle'], ENT_COMPAT, 'UTF-8') . '</span>';
} else {
	$logo = HTMLHelper::_('image', 'logo.svg', $sitename, ['class' => 'logo d-inline-block'], true, 0);
}

// Browsers support SVG favicons
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon.svg', '', [], true, 1), 'icon', 'rel', ['type' => 'image/svg+xml']);
$this->addHeadLink(HTMLHelper::_('image', 'favicon.ico', '', [], true, 1), 'alternate icon', 'rel', ['type' => 'image/vnd.microsoft.icon']);
$this->addHeadLink(HTMLHelper::_('image', 'joomla-favicon-pinned.svg', '', [], true, 1), 'mask-icon', 'rel', ['color' => '#000']);

// Set MetaData
$this->setMetaData('X-UA-Compatible', 'IE=edge', true);
$this->setMetaData('viewport', 'width=device-width, initial-scale=1, shrink-to-fit=no');
$this->setMetaData('content-type', 'text/html', true);

// css
$wa->registerAndUseStyle('theme-css', $tpath . '/assets/css/style.css', [], ['rel' => 'stylesheet']);
$wa->registerAndUseScript('theme-scripts', $tpath . '/assets/js/scripts.js', [], ['defer' => true]);
$wa->addInlineScript('document.getElementsByTagName("html")[0].className += " js";', [], []);
