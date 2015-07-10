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
	
			$('.overlay').bind('click', function(event){
			event.preventDefault();
			if($(event.target).attr('class') == 'game_overlay overlay'){window.location = '/game';} else {window.location = '/menu';}
		});	
		$('.enter').bind('click', function(event){
			event.preventDefault();
			$('#frm').submit();	
		});	
		
		$('.enter').bind('mouseover', function(event){
				$('.enter').stop(true).animate({left:'898px'}, 200);
		});	
				$('.enter').bind('mouseout', function(event){
				$('.enter').stop(true).animate({left:'889px'},200);
		});	
		
		$('.overlay').bind('mouseover', function(evt){
			popFade(evt, 1);
		});
		
		$('.overlay').bind('mouseout', function(evt){
			popFade(evt, 0);
		});
		
		$('#scrollbar1').tinyscrollbar();
		
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


function popFade(evt, fadeTo){
	if($(evt.target).attr('class') == 'pizza_overlay overlay'){ $('.pizza').stop(true).fadeTo(300,fadeTo); } else
	if($(evt.target).attr('class') == 'soup_overlay overlay'){ $('.soup').stop(true).fadeTo(300,fadeTo, function(){
		if(fadeTo == 0){$('.soup').css('display','none');}	
	}); } else
	if($(evt.target).attr('class') == 'bread_overlay overlay'){ $('.bread').stop(true).fadeTo(300,fadeTo); } else
	if($(evt.target).attr('class') == 'sandwich_overlay overlay'){ $('.sandwich').stop(true).fadeTo(300,fadeTo);}	

}
