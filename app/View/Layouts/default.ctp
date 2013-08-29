<!DOCTYPE html>
<html>
<head>
<title><?php echo $title_for_layout; ?></title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Style-Type" content="text/css" />
<meta http-equiv="Content-Language" content="ja" />
<meta name="description" content="イマセレは、あなたの食事を勝手に選ぶサービスです。" />
<meta name="keywords" content="イマセレ" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
<link rel="apple-touch-icon-precomposed" href="/favicon.png"/>
<meta name="apple-mobile-web-app-capable" content="no" />
<meta name="format-detection" content="telephone=no" />
<meta name="format-detection" content="address=no" />
<link href="/css/imasele.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/js/gears_init.js"></script>
<script type="text/javascript" src="/js/location.js"></script>
<script type="text/javascript">

function init() {
	if (navigator.userAgent.indexOf('iPhone') > 0 ||
		navigator.userAgent.indexOf('Android') > 0 ||
		navigator.userAgent.indexOf('Chrome') > 0
		) {
		
	} else {
		var obj = document.getElementById('main');
		if(obj){
			obj.innerHTML = 'ごめんなさい(>_<)お使いの機種には対応しておりません。';
		}
	}
}
</script>
</head>
<body onload="init();">
<noscript class="jsneeded">
	イマセレ！をご利用になるにはJavaScriptをONにしてください。
	<style>
		#main
		{
			display: none !important;
		}
	</style>
</noscript>
<div id="header">
<a href="/"><img src="/img/logo.png" /></a>
<div id="catchcopy">今日のご飯を勝手に決めちゃうサービス！</div>
</div>
<div id="main">
<script type="text/javascript"><!--
  // XHTML should not attempt to parse these strings, declare them CDATA.
  /* <![CDATA[ */
  window.googleAfmcRequest = {
    client: 'ca-mb-pub-9788372329607005',
    format: '320x50_mb',
    output: 'html',
    slotname: '8537477214',
  };
  /* ]]> */
//--></script>
<script type="text/javascript" src="http://pagead2.googlesyndication.com/pagead/show_afmc_ads.js"></script>
<?php echo $content_for_layout; ?>
</div>
<div id="footer">
<a href="/">トップページへ</a>
</div>
</body>
</html>