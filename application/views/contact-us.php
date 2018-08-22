<!DOCTYPE html>
<html lang="en">
<?php
include_once 'header.php';
?>
	<script
	src='//maps.googleapis.com/maps/api/js?key=AIzaSyADbQjq1XNirJ4nwzRXHB4h17Z90CtQ-bA'></script>
<body>
	<!--header-->
	<?php 
		include_once 'head.php';
	?>
	
	<div class="content indent">
		<div class="thumb-box">
			<div class="container">
				<h2>
					<strong>Contact</strong> Us
				</h2>
				<div class="row">
					<div class="col-lg-4 col-md-4 col-sm-4">
						<p>Lorem ipsum dolor sit amet conse ctetur adip isicing elit, sed
							do eiusmod tempor incididunt ut labore et dolore magna aliquat
							enim ad minim.</p>
						<h3>
							8901 Marmora Road,<br>Glasgow, D04 89GR.
						</h3>
						<div class="info">
							<p>
								<span>Freephone:</span>+1 800 559 6580
							</p>
							<p>
								<span>Telephone:</span>+1 800 603 6035
							</p>
							<p>
								<span>FAX:</span>+1 800 889 9898
							</p>
							<p>
								<span>E-mail:</span><a href="#">mail@demolink.org</a>
							</p>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8">
						<form id="contact-form">
							<div class="contact-form-loader"></div>
							<fieldset>
								<label class="name form-div-1"> <input type="text" name="name"
									placeholder="Name*:" value=""
									data-constraints="@Required @JustLetters" /> <span
									class="empty-message">*This field is required.</span> <span
									class="error-message">*This is not a valid name.</span>
								</label> <label class="email form-div-2"> <input type="text"
									name="email" placeholder="E-mail*:" value=""
									data-constraints="@Required @Email" /> <span
									class="empty-message">*This field is required.</span> <span
									class="error-message">*This is not a valid email.</span>
								</label> <label class="phone form-div-3"> <input type="text"
									name="phone" placeholder="Telephone:" value=""
									data-constraints="@JustNumbers" /> <span class="empty-message">*This
										field is required.</span> <span class="error-message">*This is
										not a valid phone.</span>
								</label> <label class="message form-div-4"> <textarea
										name="message" placeholder="Comment*:"
										data-constraints='@Required @Length(min=20,max=999999)'></textarea>
									<span class="empty-message">*This field is required.</span> <span
									class="error-message">*The message is too short.</span>
								</label>
								<!-- <label class="recaptcha"><span class="empty-message">*This field is required.</span></label> -->
								<div class="btns">
									<a href="#" data-type="submit" class="btn-default btn4">Submit</a>
									<p>*required fields</p>
								</div>
							</fieldset>
							<div class="modal fade response-message">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button type="button" class="close" data-dismiss="modal"
												aria-hidden="true">&times;</button>
											<h4 class="modal-title">Modal title</h4>
										</div>
										<div class="modal-body">You message has been sent! We will be
											in touch soon.</div>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<section class="content_map">
			<div class="google-map-api">
				<div id="map-canvas" class="gmap"></div>
			</div>
		</section>
	</div>
	<?php 
		include_once 'footer.php';
	?>
	<script type="text/javascript">
	google_api_map_init();
	function google_api_map_init(){
		var map;
		var coordData = new google.maps.LatLng(parseFloat(40.646197), parseFloat(-73.9724068,14));
		var markCoord1 = new google.maps.LatLng(parseFloat(40.643180), parseFloat(-73.9874068,14));
		var markCoord2 = new google.maps.LatLng(parseFloat(40.6422180), parseFloat(-73.9784068,14));
		var markCoord3 = new google.maps.LatLng(parseFloat(40.6482180), parseFloat(-73.9724068,14));
		var markCoord4 = new google.maps.LatLng(parseFloat(40.6442180), parseFloat(-73.9664068,14));
		var markCoord5 = new google.maps.LatLng(parseFloat(40.6379180), parseFloat(-73.9552068,14));
		var marker;

		var styleArray = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}]
		 
		var markerIcon = {
			url: "assets/img/gmap_marker.png",
			size: new google.maps.Size(28, 42),
			origin: new google.maps.Point(0,0),
			anchor: new google.maps.Point(31, 47)
		};
		function initialize() {
			var mapOptions = {
				zoom: 11,
				center: coordData,
				scrollwheel: false,
				styles: styleArray
			}

			var contentString = "<div></div>";
			var infowindow = new google.maps.InfoWindow({
				content: contentString,
				maxWidth: 200
			});
				 
				var map = new google.maps.Map(document.getElementById("map-canvas"), mapOptions);
				marker = new google.maps.Marker({
					map:map,
					position: markCoord1,
					icon: markerIcon
				});

					var contentString = '<div id="content">'+
					'<div id="siteNotice">'+
					'</div>'+
					'<div id="bodyContent">'+
					'<p>4578 Marmora Road, Glasgow D04 89GR <span>800 2345-6789</span></p>'+
					'</div>'+
					'</div>';

					var infowindow = new google.maps.InfoWindow({
						content: contentString
					});


						google.maps.event.addListener(marker, 'click', function() {
							infowindow.open(map,marker);
							$('.gm-style-iw').parent().parent().addClass("gm-wrapper");
						});


							google.maps.event.addDomListener(window, 'resize', function() {

								map.setCenter(coordData);

								var center = map.getCenter();
							});
		}

		google.maps.event.addDomListener(window, "load", initialize);

	}
	</script>
</body>
</html>