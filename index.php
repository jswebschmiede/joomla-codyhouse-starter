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
	<div class="spinner-wrapper position-fixed inset-0 bg-white z-index-fixed-element visible transition flex justify-center items-center" id="loader">
		<div role="status">
			<svg class="inline me-2 animate-spin width-lg height-lg color-primary" aria-hidden="true" viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
				<path fill="hsl(240, 4%, 65%)" d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"></path>
				<path fill="currentColor" d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"></path>
			</svg><span class="sr-only">Loading...</span>
		</div>
	</div>

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