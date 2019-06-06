<div class="banner">				  
					<div class="slider">						
						<script src="js/responsiveslides.min.js"></script>
						<script>
								// You can also use "$(window).load(function() {"
								$(function () {
								// Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: true,
										nav: true,
										speed: 500,
										namespace: "callbacks",
										before: function () {
											$('.events').append("<li>before event fired.</li>");
										},
										after: function () {
											$('.events').append("<li>after event fired.</li>");
										}
									 });				
								});
						</script>
						<div  id="top" class="callbacks_container-wrap">
							<!--slider beggin-->
							<?php include("includes/slider.php") ?>
							
							<!--end slider-->
						</div>
					</div>				 
			</div>