<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chris Mathers - Front End Developer - Web Development</title>
<link rel="STYLESHEET" type="text/css" href="xemedia/xemedia.css">
<!--[if lte IE 8]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]--> 
<script src="xemedia/portfolio/carousel_json.js"></script>
<script src='http://code.jquery.com/jquery-latest.min.js' type='text/javascript'></script>
<script type="text/javascript">
var open = false;
var selectedSrc = "";
$(document).ready(function(){
	$("#protected div img").click(function(){
		selectedSrc = "xemedia/portfolio/" + $(this).attr('id') + "_slideshow.html";
		if(!open) {
			$('iframe').attr('src', '');
			$('iframe').css('display', 'inline');
			$('#protectedH3').slideUp('slow');
			$('#protected, #self').animate( {
				width: '870'
			});
			$('iframe').hide().slideDown('slow', function() {
				$('iframe').attr('src', selectedSrc);
				$(this).fadeIn(3000);
				
			});
			open = true;
		} else {
			$('iframe').attr('src','');
			$('iframe').fadeOut('slow', function() {
				$('iframe').attr('src', selectedSrc);
				$(this).fadeIn(2000);
			});
		}
	});

});

function closeIframe() {
	$('#protectedH3').slideDown('slow');
	$('#protected, #self').animate( {
		width: '447'
	});
    $('iframe').slideUp('slow').fadeOut('slow');
	$('iframe').attr('src', '');
	open = false;
}


</script>
</head>


<body>
<div id="container">
	<div id="box"></div>
	<article>
		<h1>Chris Mathers</h1>
		<h1 class="sub"><img src="xemedia/images/slashes.png" />Web Developer</h1>
		<p>Contact: <a href="mailto: xee@xemedia.com">xee@xemedia.com</a></p>
		<p>Resume: <a href="http://www.cmathers.com" target="_blank">cmathers.com</a></p>
		<h3 id="protectedH3">Click to view screen shots of selected works<br/> 
		(these are password protected, non-public sites)</h3>
		<iframe src="" width="818" height="534" frameborder="0" scrolling="no" style="border:0"></iframe>
		
		<div id="protected">
			<div class="thumb"><img id="blaw" src="xemedia/portfolio/images/blaw/thumb_blaw.png" /></div>
			<div class="thumb"><img id="bsports" src="xemedia/portfolio/images/bsports/thumb_bsports.png" /></div>
			<div class="thumb"><img id="citi" src="xemedia/portfolio/images/citi/thumb_citi.png" /></div>
			<div class="thumb"><img id="sears" src="xemedia/portfolio/images/sears/thumb_sears.png" /></div>
			<div class="thumb"><img id="nt" src="xemedia/portfolio/images/nt/thumb_nt.png" /></div>
			<div class="thumb"><img id="prudential" src="xemedia/portfolio/images/prudential/thumb_prudential.png" /></div>
		</div>

		<h3>Self-designed, open to the public:</h3>
		<div id="self">
			<div class="thumb"><a href="http://www.premierplacement.com" target="_blank"><img src="xemedia/images/my_premier.gif" /></a></div>
			<div class="thumb"><a href="http://www.mathersflooring.com" target="_blank"><img src="xemedia/images/mathersflooring.png" /></a></div>
			<div class="thumb"><a href="http://www.xemedia.com/africa" target="_blank"><img src="xemedia/images/my_africa.png" /></a></div>
			<div class="thumb"><a href="http://www.basscapos.com" target="_blank"><img src="xemedia/images/my_basscapos.png" /></a></div>
			<div class="thumb"><a href="http://www.vrenihommes.com" target="_blank"><img src="xemedia/images/my_vrenihommes.png" /></a></div>
			<div class="thumb"><a href="http://www.xemedia.com/scandinavian" target="_blank"><img src="xemedia/images/my_scandinavian.png" /></a></div>
		</div>
	</article>
</div>

</body>
</html>
