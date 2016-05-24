<?php
/**
 * Demo template joomla - Google AMP For JBZoo // JoomlaDAY 2016 Russia / Moscow
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @author     CB9TOIIIA <cb9toiiia@gmail.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 * @link       https://github.com/CB9TOIIIA/jblankamp
 */
defined('_JEXEC') or die;
require dirname(__FILE__) . '/php/init.php';
?>

<?php $checkamp = $_SERVER['REQUEST_URI']; ?>
<?php //edit match for you ?>
<?php if (!preg_match('/ampproject/', $checkamp)) : ?>
<?php
// +-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+
// |y|o|u|r| |t|e|m|p|l|a|t|e| |J|o|o|m|l|a|
// +-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+-+-+
?>
<?php endif; ?>

<!doctype html>
<html ⚡>
<head>
	<?php echo $tpl->partial('head'); ?>
	<meta content="article" property="og:type" />
	<meta charset="utf-8">
	<link rel="canonical" href="<?php echo JURI::current();?>"/>
	<meta name="viewport" content="width=device-width,minimum-scale=1,initial-scale=1">
	<?php echo $tpl->partial('style'); ?>
	<?php echo $tpl->partial('ampjs'); ?>
	<?php echo $tpl->partial('meta'); ?>
</head>
<body>
	<div class="main-body">
		<?php echo $tpl->partial('analytics'); ?>
		<jdoc:include type="component" />
		<?php echo $tpl->partial('ampad'); ?>
		<div class="row gosite">
			<p class="mainsite"><a href="<?php echo JURI::current(); ?>">Перейти на основную версию сайта</a></p>
			<p class="bordo"><a href="<?php echo JURI::current(); ?>#disqus_thread">Комментарии</a></p>
		</div>
	</div>
</body></html>