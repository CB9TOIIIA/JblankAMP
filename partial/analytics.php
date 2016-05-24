<?php

defined('_JEXEC') or die;

?>

<amp-analytics id="analytics_liveinternet">

<script type="application/json">{
	"requests": {
		"pageview": "https://counter.yadro.ru/hit?u${ampdocUrl};r${documentReferrer};s${screenWidth}*${screenHeight}*32;${random}"
	},
	"triggers": {
		"track pageview": {
			"on": "visible",
			"request": "pageview"
		}
	}
}</script></amp-analytics>

<amp-analytics type="googleanalytics" id="googleanalytics">
<script type="application/json">
	{
		"vars": {
			"account": "UA-XXXXXXXX-X"
		},
		"triggers": {
			"defaultPageview": {
				"on": "visible",
				"request": "pageview",
				"vars": {
					"title": "AMP Pageview"
				}
			}
		}
	}
</script>
</amp-analytics>