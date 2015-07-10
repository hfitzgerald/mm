	<script type="text/javascript">
		var flashvars = {};
		var params = {};
		var attributes = {};

		flashvars.entryCode = "<?php if(isset($_REQUEST['idNumber'])){echo $_REQUEST['idNumber']; }?>";

		params.scale = "noscale";
		params.wmode = "transparent";

		swfobject.embedSWF(
			"/swf/preloader.swf",
			"gameReplace",
			"800",
			"480",
			"10.0.0",
			false,
			flashvars,
			params,
			attributes
		);
	</script>
	
<div id='game'>
	<div id='gameReplace'></div>
</div>

<div id='gameLinks'>
    <a href='' class='smAndroid'></a>
    <a href='' class='smApple'></a>
   
	<div id="fb-root"></div>
	<script>(function(a,b,c){var d,e=a.getElementsByTagName(b)[0];
		if(a.getElementById(c)){
			return}d=a.createElement(b);d.id=c;
			d.src="//connect.facebook.net/en_US/all.js#appId=118191678280376&xfbml=1";
			e.parentNode.insertBefore(d,e)})
			(document,"script","facebook-jssdk")</script>

	<div class="fb-like" data-href="http://www.facebook.com/mellowmushroomHQ" data-send="false" data-width="450" data-show-faces="true" data-font="lucida grande"></div>

</div>