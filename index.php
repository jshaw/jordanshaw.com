<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>

		<title>Jordan Shaw</title>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
		<meta name="description" content="The Online presence and Portfolio for Jordan Shaw ( JSHAW / JSHAW3 ) - An Interactive Multimedia Designer, Artist, Designer, Music Lover, Fashionista and Trendsetter" />
		<meta name="keywords" content="Jordan Shaw, Jordan, Shaw, Canada, JSHAW, JSHAW3, Graduate, Design, Portfolio, Interactive Multimedia And Design, Photography, Painting, Illustration, Web Development, Web Design, Web, Blog, Contact, Resume, Made In Canada, About, Art, CSS, HTML, XHTML, PHP, MYSQL, jQuert, Javascript, XML, Toronto" />
		<meta name="google-site-verification" content="WeAkcjZW5F-EWeqXR8ysGsRAElKeer11UzDkPeLHcXQ" />

		<script type="text/javascript" src="https://www.google.com/jsapi?key=ABQIAAAAjY6RwTvr1z3hRISNLINlnBShbmGPgPdwWbebTyQmxeF7bYkC6RRXf_KHqSoJx98PExlpBXr4oOGKTA"></script>
		<script type="text/javascript">
			google.load("jquery", "1.7.1");
			google.load("jqueryui", "1.8.16");
		</script>
		<script type="text/javascript" src="_js/preload.js"></script>
		<script type="text/javascript" src="_js/jquery.backstretch.min.js"></script>

		<link href="_css/styles.V2.css" rel="stylesheet" type="text/css" />

	</head>
	<body id="body">
		<div id="wrapper">
			<div id="content">
				<h1>Jordan Shaw</h1>
				<p>I am a developer at <a href="http://www.trapeze.com">Trapeze</a>.</p>
				<p>I'm <a href="http://social.jordanshaw.com" title="Jordan Shaw Is Social">online</a> other places.</p>
				<p>Some recent personal projects I've built:</p>
				<p>
				    <a href="http://isthereagameon.com" name="isthereagameon.com" target="_blank">isthereagameon.com</a><br />
				    <a href="http://doorsopenmobile.com" name="Doors Open Mobile" target="_blank">doorsopenmobile.com</a><br />
				    <a href="http://heritage-canada.com" name="Heritage Canada" target="_blank">heritage-canada.com</a><br />
				    <a href="http://donateforkarma.com" name="Donate For Karma" target="_blank">donateforkarma.com</a>
				</p>
				<p>Get at me jordan [ at ] jordanshaw [ dot ] com.</p>
			</div>
			
			<div id="footer">
				<p>© All photos are property of Jordan Shaw ( <a href="http://www.flickr.com/photos/jordanshaw/">Flickr</a> )</p>
			</div>
			
		</div>
	
		<?
			
			function getDir(){
				
				$stack = array();
				$directory = "_img/";
				 
				//get all image files with a .jpg extension.
				$images = glob($directory . "*.JPG");
				$str = "[";
				
				foreach($images as $image){
					array_push($stack, $image);
				}
				
				shuffle($stack);
				
				foreach ($stack as $img) {
				    $str .=  "'".$img."', ";
				}
				
				$str .= "]";
				
				return $str;
				
			}
			
		?>
	
		<div id="preloadHolder" style="display:none;"></div>
	
		<script type="text/javascript">
		
		var str = <? echo getDir(); ?>;
		
		// image preloaders
		$.each(str,function(i,v) {
			$('#preloadHolder').append('<img src="' + v + '" />');
		});
		
		// gallery switching
		(function recurse(counter) {
			var img = str[counter];
			//$('body').delay('5000').css({'background-image' : 'url("'+img+'")'}, 5000);
			$.backstretch(img);
			delete str[counter];
			str.push(img);
			setTimeout(function() {
			recurse(counter + 1);
			}, 5000);
		})(0);
		
		</script>

		<!-- Google Analytics -->
		<script type="text/javascript">
		var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
		document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
		try {
		var pageTracker = _gat._getTracker("UA-953779-1");
		pageTracker._trackPageview();
		} catch(err) {}</script>

	</body>
</html>