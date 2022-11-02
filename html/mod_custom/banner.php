<?php

/**
 * @package     Joomla.Site
 * @subpackage  mod_custom
 *
 * @copyright   (C) 2020 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\HTML\HTMLHelper;
use Joomla\CMS\Uri\Uri;

$modId = 'mod-custom' . $module->id;

if ($params->get('backgroundimage')) {
	/** @var Joomla\CMS\WebAsset\WebAssetManager $wa */
	$wa = $app->getDocument()->getWebAssetManager();
	$wa->addInlineStyle('
#' . $modId . '{background-image: url("' . Uri::root(true) . '/' . HTMLHelper::_('cleanImageURL', $params->get('backgroundimage'))->url . '");}
', ['name' => $modId]);
}
?>

<section class="banner bg-bottom bg-no-repeat bg-cover" id="<?php echo $modId; ?>">
	<div class="container flex justify-center items-end max-width-adaptive-lg padding-y-lg height-100%">
		<div class="text-component">
			<h1 class="color-white text-xl text-center font-light text-shadow-xs"><?php echo strip_tags($module->content); ?></h1>
		</div>
	</div>
</section>