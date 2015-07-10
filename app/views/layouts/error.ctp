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
	<title>Mellow Mushroom - Home Grown Harvest</title>
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
<body id="mellow" class='rules'>

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

<script>
$(document).ready( function(){
	$('.privacy').bind('click', function(e){
		e.preventDefault();
		popup("privacy");	
	});
				
	$('.terms').bind('click', function(e){
		e.preventDefault();
		popup("terms");	
	});

	$('#hover_menu').bind('click', function(e){
		e.preventDefault();
		window.location = '/';
	});
});

function popup(type) {  //CodeFromMellowMushroomWebsite~
	var w, h, url, scroll;
	switch(type)
	{
		case "terms":
			w = 585;
			h = 482;
			url = 'http://www.mellowmushroom.com/popup/terms';
			scroll = 'yes';
			break;
		case "privacy":
			w = 585;
			h = 482;
			url = 'http://www.mellowmushroom.com/popup/privacy';
			scroll = 'yes';
			break;
	}

	var left = (screen.width/2)-(w/2);
	var top = (screen.height/2)-(h/2);
	newwindow = window.open(url, 'popupW', 'toolbar=no, scrollbars='+scroll+', location=no, statusbar=yes, menubar=no, resizable=no, width='+w+', height='+h+', left='+left+', top='+top);
	if (!newwindow) alert("We're trying to open a popup window for you, but your browser is blocking it. Please turn off 'Popup Blocking'.");
	if (window.focus) {newwindow.focus();}
	return false;
}
</script>

</body>
</html>