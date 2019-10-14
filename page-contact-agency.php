<?php
/*
Template Name: Contact Agency
*/
?>

<?php 

	$query = $_SERVER['QUERY_STRING'];
	$query = urldecode($query);
  $distance = $_GET['distance'];
  
	parse_str($query);

	if(empty($agency)) { 
	  header('Location: /');
	  exit; 
	}

?>

<?php get_header(); ?>
			
		<div class="contact-top">
			<div class="container">
				<a id="serp" href="javascript:void(0);">BACK TO RESULTS</a>
				<h1 class="contact"><?php echo $agency; ?></h1>

				<div class="contact-details">
					<div id="agency_logo"><img src="<?php echo $logo; ?>" /></div>
					<div class="clear"></div>
					<p id="agency_name" style="display:none;"><?php echo $agency; ?></p>
          
					<p id="agency_address1"><?php echo $address1; ?></p>
					<p id="agency_address2"><?php echo $address2; ?>
					<p id="agency_city_state"><?php echo $city. ", ". $state. " " . $postal; ?></p>
					<p id="agency_phone"><?php echo $phone; ?></p>

					<a id="agency_directions" href="javascript:void(0);">
						Get Directions
					</a>

          <?php if ($site != ""){?>
					<hr />
					<a id="agency_website" href="<?php echo "http://". $site; ?>" target="_blank">Visit Website</a>
          <?php }?>
				</div>

				<h5>Dedicated to serving you.</h5>
				<p>At <?php echo $agency; ?>, a Guardian agency, we're here to service your interests and help safeguard your future. It's at the heart of everything we do. For over 150 years, Guardian has done business by putting its policyholders first. That's how Guardian has built financial strength and grown into a Fortune 250 company. Through good times and bad, we've always come through for the people counting on us.</p>

			</div>
		</div><!-- end contact-top -->

		<div class="form-section">
			<?php include "find-a-rep-form.php"; ?>
		</div>	

		<div id="agency-map">
		</div>

		<div id="dir-box">
		</div>

		<?php get_footer(); ?>

		<script type="text/javascript">

			jQuery(document).ready(function($) {
				$('a#agency_directions').click(function(){
					var target = $('#agency-map');
					$('html, body').animate({
			          scrollTop: target.offset().top
			        }, 500);
			        return false;
				});

				$('a#serp').click(function(){
					window.location.href = "<?php echo get_stylesheet_directory_uri(); ?>/find-a-rep.php?zip=<?php echo $zip; ?>&distance=<?php echo $distance;?>";
				});
			});

			var agency_name = document.getElementById('agency_name').innerHTML;

		    var infoContent = document.getElementById('agency_address1').innerHTML + ", " + document.getElementById('agency_address2').innerHTML + document.getElementById('agency_city_state').innerHTML

		    var agency_latlong = {lat: <?php echo $lat; ?>, lng: <?php echo $long; ?>};

		    //console.log("locations: " + locations);
		    var map = new google.maps.Map(document.getElementById('agency-map'), {
		        scrollwheel: false,
		        zoom: 11,
		        center: new google.maps.LatLng(agency_latlong),
		        mapTypeId: google.maps.MapTypeId.ROADMAP
		    });

		    var marker = new google.maps.Marker({
			    position: agency_latlong,
			    map: map,
			    title: agency_name
			});

			var infowindow = new google.maps.InfoWindow();

			google.maps.event.addListener(marker, 'click', (function (marker) {
	            return function () {
	                infowindow.setContent(infoContent);
	                infowindow.open(map, marker);
	            }
	        })(marker));
		</script>	