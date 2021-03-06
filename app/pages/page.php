<?php
/**
 * @author Bilal Cinarli
 * @link http://bcinarli.com
 **/

md::$doc_root = '_pages';

$md = new md(router::getMatches(1));

html::$class = 'page';

?>
<?php tools::inc('includes/header'); ?>
	<div id="main" class="main-content">
		<?php $md::printContent(); ?>

		<?php if(html::$comments == 'true'): ?>
		<?php tools::inc('widgets/disqus'); ?>
		<?php endif; ?>
	</div>

<?php tools::inc('includes/aside'); ?>
<?php tools::inc('includes/footer');
