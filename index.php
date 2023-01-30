<?php

/**
 * @package     Joomla.Site
 * @subpackage  Templates.joomla-codyhouse-starter
 *
 * @copyright   (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

include_once JPATH_THEMES . '/' . $this->template . '/logic.php'; ?>

<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">

<head>
	<jdoc:include type="metas" />
	<jdoc:include type="styles" />
	<jdoc:include type="scripts" />
</head>

<body class="
<?php echo $option
	. ($home ? ' home' . $task : ' site')
	. ' view-' . $view
	. ($layout ? ' layout-' . $layout : ' no-layout')
	. ($task ? ' task-' . $task : ' no-task')
	. ($itemid ? ' itemid-' . $itemid : '')
	. ($pageclass ? ' ' . $pageclass : '')
	. ($this->direction == 'rtl' ? ' rtl' : '');
?>">
	<?php if ($templateparams['pagePreloader'] == 1) : ?>
		<div class="spinner-wrapper position-fixed inset-0 bg-white z-index-fixed-element visible transition flex justify-center items-center" id="loader">
			<div class="circle-loader circle-loader--v2" role="alert">
				<p class="circle-loader__label">Content is loading...</p>
				<div aria-hidden="true">
					<svg class="circle-loader__svg" width="48" height="48" viewBox="0 0 48 48">
						<circle class="circle-loader__base" cx="24" cy="24" r="19" fill="none" stroke="currentColor" stroke-width="2" />
						<circle class="circle-loader__fill" cx="24" cy="24" r="19" fill="none" stroke="currentColor" stroke-width="2" />
					</svg>
				</div>
			</div>
		</div>
	<?php endif ?>

	<div id="page" class="site">

		<?php require(JPATH_THEMES . '/' . $this->template . '/template-parts/header.php') ?>

		<div id="content" class="site-content">

			<?php if ($this->countModules('content-1')) : ?>
				<section id="content-1" class="content-1">
					<jdoc:include type="modules" name="content-1" style="default" />
				</section>
			<?php endif ?>

			<div class="container max-width-adaptive-lg padding-y-lg">
				<jdoc:include type="message" />
				<jdoc:include type="component" />
			</div>

			<?php if ($this->countModules('content-2')) : ?>
				<section id="content-2" class="content-2">
					<jdoc:include type="modules" name="content-2" style="default" />
				</section>
			<?php endif ?>

			<?php if ($this->countModules('content-3')) : ?>
				<section id="content-3" class="content-3">
					<jdoc:include type="modules" name="content-3" style="default" />
				</section>
			<?php endif ?>

			<?php if ($this->countModules('content-4')) : ?>
				<section id="content-4" class="content-4">
					<jdoc:include type="modules" name="content-4" style="default" />
				</section>
			<?php endif ?>

			<?php if ($this->countModules('content-5')) : ?>
				<section id="content-5" class="content-5">
					<jdoc:include type="modules" name="content-5" style="default" />
				</section>
			<?php endif ?>

			<?php if ($this->countModules('content-6')) : ?>
				<section id="content-6" class="content-6">
					<jdoc:include type="modules" name="content-6" style="default" />
				</section>
			<?php endif ?>
		</div>

		<?php require(JPATH_THEMES . '/' . $this->template . '/template-parts/footer.php') ?>
	</div>

	<?php if ($templateparams['backTop'] == 1) : ?>
		<button class="scrollToTopBtn display@md position-fixed opacity-0" aria-label="<?php echo Text::_('TPL_JCS_BACKTOTOP'); ?>">
			<svg class="icon icon--sm color-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" aria-hidden="true" focusable="false" role="img">
				<!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
				<path class="stroke-current" d="M374.6 246.6C368.4 252.9 360.2 256 352 256s-16.38-3.125-22.62-9.375L224 141.3V448c0 17.69-14.33 31.1-31.1 31.1S160 465.7 160 448V141.3L54.63 246.6c-12.5 12.5-32.75 12.5-45.25 0s-12.5-32.75 0-45.25l160-160c12.5-12.5 32.75-12.5 45.25 0l160 160C387.1 213.9 387.1 234.1 374.6 246.6z" />
			</svg>
		</button>
	<?php endif; ?>

	<jdoc:include type="modules" name="debug" />
</body>

</html>