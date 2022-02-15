<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.slidey.js"></script>
    <script src="js/jquery.dotdotdot.min.js"></script>
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script src="js/owl.carousel.js"></script>
	<script defer src="js/jquery.flexslider.js"></script>
    <script type="application/x-javascript">
     addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
	
    function hideURLbar(){ window.scrollTo(0,1); }
        jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
     </script>