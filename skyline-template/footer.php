<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package skyline-template
 */

?>

	</div><!-- #content -->
	<div class="footer-widget">
		<div id="centers" class="vc_row wpb_row vc_row-fluid container">
			<div class="wpb_column vc_column_container vc_col-sm-12">
				<div class="vc_column-inner ">
					<div class="wpb_wrapper">
						<div class="vc_row wpb_row vc_inner vc_row-fluid">
							<?php dynamic_sidebar('Footer 1');?>
							<?php dynamic_sidebar('Footer 2');?>
							<?php dynamic_sidebar('Footer 3');?>
							<?php dynamic_sidebar('Footer 4');?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="container">
			<div class="site-info">
				&copy; 2017 SKYLINE. All Rights Reserved
			</div><!-- .site-info -->
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
	$(document).ready (function(){
		//$('button.navbar-toggle').click(function(){
			// $( "p" ).slideToggle( "slow" );
		//});
		$('button.navbar-toggle').click(function(){
			$('.navbar-toggle').css("display", "none");
		    document.getElementById("mySidenav").style.width = "250px";
		    document.getElementById("page").style.marginRight = "250px";
		    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";		    
		});

		/* Set the width of the side navigation to 0 and the left margin of the page content to 0, and the background color of body to white */
		$('a.closebtn').click(function(){
		    document.getElementById("mySidenav").style.width = "0";
		    document.getElementById("page").style.marginRight = "0";
		    document.body.style.backgroundColor = "white";
		    $('.navbar-toggle').css("display", "block");
		});
	});
</script>

</body>
</html>
