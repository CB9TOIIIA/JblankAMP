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

defined('_JEXEC') or die('Restricted access');
?>

<?php $checkamp = $_SERVER['REQUEST_URI']; ?>
<?php //edit match for you ?>
<?php if (!preg_match('/ampproject/', $checkamp)) : ?>
<?php
// +-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+
// |y|o|u|r| |t|e|m|p|l|a|t|e| |f|u|l|l|
// +-+-+-+-+ +-+-+-+-+-+-+-+-+ +-+-+-+-+
?>
<?php endif; ?>

<?php

$opisanie = $document->_custom[8];
$opisanie2 = str_replace('<meta name="description" content="', '', $opisanie);
$opisanie3 = str_replace('" />', '', $opisanie2);
$thumb = $document->_custom[3];
$thumb2 = str_replace('<meta property="og:image" content="', '', $thumb);
$thumb3 = str_replace('" />', '', $thumb2);

$createdAtformatjson = date('Y-m-d', strtotime('+3 hours', strtotime($this->_item->created)));
$createdAtformatjson2 = date('H:i:s', strtotime('+3 hours', strtotime($this->_item->created)));
$createdAtformatjsondone = $createdAtformatjson.'T'.$createdAtformatjson2.'Z';
$modAtformatjson = date('Y-m-d', strtotime('+3 hours', strtotime($this->_item->modified)));
$modAtformatjson2 = date('H:i:s', strtotime('+3 hours', strtotime($this->_item->modified)));
$modAtformatjsondone = $modAtformatjson.'T'.$modAtformatjson2.'Z';
$titlewithoutquote = str_replace('"','',$document->title);

?>

<?php $jsonamp = '<script type="application/ld+json">{
  "@context": "http://schema.org",
  "@type": "NewsArticle",
  "headline": "'.JString::substr(str_replace(' - mysite', '',$titlewithoutquote), 0, 110).'",
  "description": "'.$opisanie3.'",
  "name": "'.$titlewithoutquote.'",
  "url": "'.JURI::current().'",
  "mainEntityOfPage":{
    "@type":"WebPage",
    "@id":"'.JURI::current().'"
  },
  "thumbnailUrl": "'.$thumb3.'",
  "dateCreated": "'.$createdAtformatjsondone.'",
  "datePublished": "'.$createdAtformatjsondone.'",
  "dateModified": "'.$modAtformatjsondone.'",
  "author": {
    "@type": "Organization",
    "name": "mysite.com"
  },
  "publisher": {
    "@type": "Organization",
    "name": "mysite.com",
    "logo": {
      "@type": "ImageObject",
      "url": "http://mysite.com/images/logo-iphone.png",
      "width": 248,
      "height": 26
    }
  },
  "image": {
    "@type": "ImageObject",
    "representativeOfPage": "true",
    "url": "'.$thumb3.'",
    "width": 800,
    "height": 600
  }
}</script>'; ?>

<?php $document->addCustomTag($jsonamp); ?>

<p class="center"><a href="/"><img src="/images/logo.png" class="aflogomobandtab" alt="menu"></a></p>
<?php if ($this->checkPosition('title')) : ?>
    <h1 class="title"><?php echo $this->renderPosition('title'); ?></h1>
<?php endif; ?>

<?php if ($this->checkPosition('image')) : ?>
    <div class="image align-<?php echo $imageAlign; ?>">
        <?php echo $this->renderPosition('image'); ?>
    </div>
<?php endif; ?>

<?php if ($this->checkPosition('text')) : ?>
    <div class="text"><?php echo $this->renderPosition('text'); ?></div>
<?php endif; ?>