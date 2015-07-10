<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>
	<script type="text/javascript" src="http://use.typekit.com/qct1xyj.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<script type="text/javascript" src="/js/jqBar.js"></script>
	<link rel="shortcut icon" href="favicon.ico" />
	<title>Mellow Mushroom - Home Grown Harvest</title>   <!-- ADD -->
	<meta name="copyright" content="Copyright (c)2011 Mellow Mushroom, Inc." />
	<meta name="description" content="Mellow Mushroom is an immersive experience of color, art, music and light, providing a delicious escape from the mundane. We started with pizza, but didn't stop there, spreading our artistic delight to a broad array of salads, hoagies, calzones and beers. In short: Mellow Mushroom Pizza is a kaleidoscopic field trip for your palette.">
	<meta name="author" content="Mellow Mushroom">

	<meta name="viewport" content="width=device-width,initial-scale=1">
	  <?php echo $this->Html->css('style.css'); ?>
	  <?php echo $this->Html->css('mellow.css'); ?>
 <!--[if IE 7]> 
	 <?php echo $this->Html->css('ie7fix.css'); ?>
 <![endif]-->

 <!--[if IE]> 
	 <?php echo $this->Html->css('ieFix.css'); ?>
 <![endif]-->
 <script src="/js/swfObject.js"></script>
</head>
<body id="mellow" <?php if(isset($body_class)) echo " class=\"$body_class\"" ?> >

<div id="flash_message">
<?php
	// Authentication Errors show up here
    echo $this->Session->flash();
    echo $this->Session->flash('auth');
?>
</div>

<?php echo $this->element('header');?>

<?php echo $content_for_layout; ?>
 
<?php echo $this->element('footer');?>

<script src="js/plugins.js"></script>
<script src="js/script.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-25280097-1']);
  _gaq.push(['_trackPageview']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

<!--[if lt IE 7 ]>
	<script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.2/CFInstall.min.js"></script>
	<script>window.attachEvent("onload",function(){CFInstall.check({mode:"overlay"})})</script>
<![endif]-->

</body>
</html>