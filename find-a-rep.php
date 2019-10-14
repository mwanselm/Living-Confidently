<?php
require_once('./SwaggerClient-php/autoload.php');

$data = '';

include($_SERVER['DOCUMENT_ROOT']."/wp-config.php");
if (isset($_POST['zip'])){
	

     $api_instance = new Swagger\Client\Api\AgencyApi();
     $api_client = $api_instance->getApiClient();
     $config = $api_client->getConfig();
          
     $config->setHost('https://apisvc.glic.com:8445/fr/v1');
     $config->addDefaultHeader('UserId','LivingConfidently_service_id');
     $config->addDefaultHeader('AppKey','xQYtLQagvzpvFyddcGWaz3t0sP9KBfzz');
     $config->addDefaultHeader('Authorization','Basic TGl2aW5nQ29uZmlkZW50bHlfc2VydmljZV9pZDpXMW50M3I5ODck');
             
   
    
   $origin = $_POST['zip'];
   $recruiting = false; // bool | Only return locations that can receive recruiting requests
   
   if (isset($_POST['distance'])){
     $radius = $_POST['distance'];
   }else{
     $radius = 10;
   }
   

   try {
       $result = $api_instance->findLocations($origin, $recruiting, $radius);
       $data = $result["locations"];
       if($radius != $result["query"]["radius"]){
         $old_radius = $radius;
         $radius = $result["query"]["radius"];
       }
   } catch (Exception $e) {
       // echo 'Exception when calling AgencyApi->findLocations: ', $e->getMessage(), PHP_EOL;
   }
  
 

 
?>

<div class="row">
  
  <?php if (isset($old_radius)){ ?>
    <p class="no_results_error">No results were found within <?php echo $old_radius?> miles.  The following list shows results at <?php echo $radius?> miles.</p>
  <?php } ?>
  
    <div id="repData">
        <div class="results-top">
            <?php //var_dump($data); ?>
            <!-- <h2>YOUR SEARCH RESULTS</h2> -->
            <div class="rt-left">
                <span class="rep_results_p"><?php echo count($data); ?> agencies found</span>
            </div><!-- end rt-left -->

            <div class="rt-right">
                <form action="/" class="repFormSmall" method="post">
                    <div class="sm-form-top">
                        
                      <div class="distance-wrapper">
                      
                        <label for="distance" class="within">Within</label>
                                  <select name="distance" id="distance" title="distance">
                                    <option value="5" <?php if ($radius == 5){?>selected<?php }?> >5</option>
                                    <option value="10" <?php if ($radius == 10){?>selected<?php }?>  >10</option>
                                    <option value="25" <?php if ($radius == 25){?>selected<?php }?>  >25</option>
                                    <option value="50" <?php if ($radius == 50){?>selected<?php }?>  >50</option>
                                    <option value="100" <?php if ($radius == 100){?>selected<?php }?>  >100</option>
                        			<option value="4000" <?php if ($radius == 4000){?>selected<?php }?>  >All</option>
                                  </select>
                      </div>
                      <div class="miles-of-wrapper">
                                
                         <label for="zip" class="miles_of">miles of</label>
                                  
                        <input type="text" id="zip" name="zip" value="<?php echo $_POST['zip']; ?>"/>
                      </div>
                      
                      <input type="submit" id="slider_search" value="Update Results" />
                      
                      
                    </div>
                </form>
            </div><!-- end rt-right -->
            <div class="clear"></div>
        </div><!-- end results-top -->

        <div class="results-bottom">

            <div id="map-m"></div>

            <div class="repitems-wrapper">
            
                <?php
                    for ($i = 0; $i < count($data); $i++){
                    
                      //var_dump($data[$i]["location"]);
                    echo "<div class='repitem'>";
                    echo "<h6>".$data[$i]["agency"]["primary_name"]."</h6>";
                    echo "<p>";
                    echo $data[$i]["location"]["address"]["street_1"]."<br />".$data[$i]["location"]["address"]["street_2"]."<br>";
                    echo $data[$i]["location"]["address"]["city"].", ";
                    echo $data[$i]["location"]["address"]["state"]." ";
                    echo $data[$i]["location"]["address"]["postal_code"]."<br>";
        			echo $data[$i]["agency"]["phone_numbers"][0]["full_number"]."<br>"; 

                    $agency_link = "permalink=" . $data[$i]["location"]["permalink"] . "&agency=" . $data[$i]["agency"]["primary_name"] . "&zip=" . $origin ."&address1=". $data[$i]["location"]["address"]["street_1"] ."&address2=". $data[$i]["location"]["address"]["street_2"] . "&city=" . $data[$i]["location"]["address"]["city"] ."&state=". $data[$i]["location"]["address"]["state"] ."&postal=". $data[$i]["location"]["address"]["postal_code"] ."&phone=". $data[$i]["agency"]["phone_numbers"][0]["full_number"] ."&lat=". $data[$i]["location"]["address"]["latitude"] ."&long=". $data[$i]["location"]["address"]["longitude"] ."&site=". $data[$i]["agency"]["web_sites"][0]["url"] ."&logo=". $data[$i]["agency"]["logo"]["small"]. "&zip=". $origin . "&distance=" . $radius;
                    ?>
                    <a class="contact-agency" href="/contact-agency/?<?php echo urlencode($agency_link) ;?>">Contact this agency&nbsp;&nbsp;&rarr;</a>
                <?php //echo $data[$i]["agency"]["web_sites_attributes"][0]["url"]."<br>";
                    echo "</p>";
                    echo "</div>";
                    }
                ?>
            </div> 

            

        </div><!-- end results-content -->

    </div><!-- end repData -->
    
</div><!-- end row -->


<script type="text/javascript">

    //MAP - MOBILE
    var locations = 
    [
  <?php
      for ($i = 0; $i < count($data); $i++){
      echo "['".$data[$i]["agency"]["primary_name"]."', ".$data[$i]["location"]["address"]["latitude"].",".$data[$i]["location"]["address"]["longitude"].",'".$data[$i]["location"]["address"]["street_1"]."','".$data[$i]["location"]["address"]["street_2"]."','".$data[$i]["location"]["address"]["city"]."','".$data[$i]["location"]["address"]["state"]."','".$data[$i]["location"]["address"]["postal_code"]."',".$i."],";
      }
  ?>
    ];
    console.log("locations: " + locations);
    var map = new google.maps.Map(document.getElementById('map-m'), {
        scrollwheel: false,
        zoom: 11,
        center: new google.maps.LatLng(locations[0][1], locations[0][2]),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
              content = locations[i][0]  + "<br />" + locations[i][3] + " " + locations[i][4] + "<br />" + locations[i][5] + ", " + locations[i][6] + " " + locations[i][7];
              infowindow.setContent(content);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }


    
jQuery(document).ready(function($) {

    
    $( "#blurcontainer" ).on('submit', '.repFormSmall', function( event ){

        // Stop form from submitting normally
        event.preventDefault();
        var query = $(this).find('input[name="zip"]').val();
        var distance = $(this).find('select[name="distance"]').val();

        if(query.length < 5){

            $('#zip').val('');
            return false;

        } else{

            $("#repData").empty();
            $("#map-m").remove();
            $("#mapInfo").remove();         
            // Send the data using post
            //var posting = $.post( "http://myretirementwalk.com/wp-content/themes/mrw/find-a-rep.php",{zip:query});
            // var posting = $.post( "http://new6-server.com.s214851.gridserver.com/wp-content/themes/mrw/find-a-rep.php",{zip:query});
            var post_url = "<?php echo get_stylesheet_directory_uri(); ?>/find-a-rep.php"; 
            var posting = $.post( post_url, { zip:query, distance: distance });
            // Put the results in a div
            posting.done(function(data) {
                //$( "#repData" ).replaceWith(data);
                var $container = $(data).wrap('<div />').parent();
                    $container.find('#footer').remove();
                    $('#blurcontainer').html($container);
                    // $(".repFormSmall").reset();
            });
        }
    });
});
				
</script>
<?php
} else {
    if (isset($_GET['zip'])){
    
      $api_instance = new Swagger\Client\Api\AgencyApi();
      $api_client = $api_instance->getApiClient();
      $config = $api_client->getConfig();
          
      $config->setHost('https://apisvc.glic.com:8445/fr/v1');
      $config->addDefaultHeader('UserId','LivingConfidently_service_id');
      $config->addDefaultHeader('AppKey','xQYtLQagvzpvFyddcGWaz3t0sP9KBfzz');
      $config->addDefaultHeader('Authorization','Basic TGl2aW5nQ29uZmlkZW50bHlfc2VydmljZV9pZDpXMW50M3I5ODck');
                                
 
    
    $origin = $_GET['zip'];
    $recruiting = false; // bool | Only return locations that can receive recruiting requests
   
    if (isset($_GET['distance'])){
      $radius = $_GET['distance'];
    }else{
      $radius = 10;
    }

    try {
        $result = $api_instance->findLocations($origin, $recruiting, $radius);
        $data = $result["locations"];
    } catch (Exception $e) {
        // echo 'Exception when calling AgencyApi->findLocations: ', $e->getMessage(), PHP_EOL;
    }
   
    $alternate_radius = false;
   
    if (count($data) == 0 && $radius < 50){
     
      $alternate_radius = true;
      $origin = $_GET['zip'];
      $recruiting = false; // bool | Only return locations that can receive recruiting requests
      $radius = 50; // int | Initial max radius

      try {
          $result = $api_instance->findLocations($origin, $recruiting, $radius);
          $data = $result["locations"];
      } catch (Exception $e) {
          // echo 'Exception when calling AgencyApi->findLocations: ', $e->getMessage(), PHP_EOL;
      }
     
    }


?>

<?php get_header(); ?>
<div id="blurcontainer" class="container over"><div>
<div class="row">
    <div id="repData">
        <div class="results-top">
            <?php if ($alternate_radius == true){ ?>
              <p class="error">No results were found within 10 miles.  The following list shows results at 50 miles.</p>
            <?php } ?>
            <?php //var_dump($data); ?>
            <!-- <h2>YOUR SEARCH RESULTS</h2> -->
            <div class="rt-left">
                <span class="rep_results_p"><?php echo count($data); ?> agencies found</span>
            </div><!-- end rt-left -->

            <div class="rt-right">
                <form action="/" class="repFormSmall" method="post">
                    <div class="sm-form-top">
                        
                      <div class="distance-wrapper">
                      
                        <label for="distance" class="within">Within</label>
                                  <select name="distance" id="distance" title="distance">
                                    <option value="5" <?php if ($radius == 5){?>selected<?php }?> >5</option>
                                    <option value="10" <?php if ($radius == 10){?>selected<?php }?>  >10</option>
                                    <option value="25" <?php if ($radius == 25){?>selected<?php }?>  >25</option>
                                    <option value="50" <?php if ($radius == 50){?>selected<?php }?>  >50</option>
                                    <option value="100" <?php if ($radius == 100){?>selected<?php }?>  >100</option>
                        			<option value="4000" <?php if ($radius == 4000){?>selected<?php }?>  >All</option>
                                  </select>
                      </div>
                      <div class="miles-of-wrapper">
                                
                         <label for="zip" class="miles_of">miles of</label>
                                  
                        <input type="text" id="zip" name="zip" value="<?php echo $_GET['zip']; ?>"/>
                      </div>
                      
                      <input type="submit" id="slider_search" value="Update Results" />
                      
                      
                    </div>
                </form>
            </div><!-- end rt-right -->
            <div class="clear"></div>
        </div><!-- end results-top -->

        <div class="results-bottom">

            <div id="map-m"></div>

            <div class="repitems-wrapper">
            
                    <?php
                        for ($i = 0; $i < count($data); $i++){
                    
                          //var_dump($data[$i]["location"]);
                        echo "<div class='repitem'>";
                        echo "<h6>".$data[$i]["agency"]["primary_name"]."</h6>";
                        echo "<p>";
                        echo $data[$i]["location"]["address"]["street_1"]."<br>".$data[$i]["location"]["address"]["street_2"]."<br>";
                        echo $data[$i]["location"]["address"]["city"].", ";
                        echo $data[$i]["location"]["address"]["state"]." ";
                        echo $data[$i]["location"]["address"]["postal_code"]."<br>";
            			echo $data[$i]["agency"]["phone_numbers"][0]["full_number"]."<br>"; 

                        $agency_link = "permalink=" . $data[$i]["location"]["permalink"] . "&agency=" . $data[$i]["agency"]["primary_name"] . "&zip=" . $origin ."&address1=". $data[$i]["location"]["address"]["street_1"] ."&address2=". $data[$i]["location"]["address"]["street_2"] . "&city=" . $data[$i]["location"]["address"]["city"] ."&state=". $data[$i]["location"]["address"]["state"] ."&postal=". $data[$i]["location"]["address"]["postal_code"] ."&phone=". $data[$i]["agency"]["phone_numbers"][0]["full_number"] ."&lat=". $data[$i]["location"]["address"]["latitude"] ."&long=". $data[$i]["location"]["address"]["longitude"] ."&site=". $data[$i]["agency"]["web_sites"][0]["url"] ."&logo=". $data[$i]["agency"]["logo"]["small"]. "&zip=". $origin . "&distance=" . $radius;;
                        ?>
                        <a class="contact-agency" href="/contact-agency/?<?php echo urlencode($agency_link) ;?>">Contact this agency&nbsp;&nbsp;&rarr;</a>
                    <?php //echo $data[$i]["agency"]["web_sites_attributes"][0]["url"]."<br>";
                        echo "</p>";
                        echo "</div>";
                        }
                    ?>

            

        </div><!-- end results-content -->

    </div><!-- end repData -->
    
</div><!-- end row -->
</div></div>
</div>

<script type="text/javascript">

    //MAP - MOBILE
    var locations = 
    [
  <?php
      for ($i = 0; $i < count($data); $i++){
      echo "['".$data[$i]["agency"]["primary_name"]."', ".$data[$i]["location"]["address"]["latitude"].",".$data[$i]["location"]["address"]["longitude"].",'".$data[$i]["location"]["address"]["street_1"]."','".$data[$i]["location"]["address"]["street_2"]."','".$data[$i]["location"]["address"]["city"]."','".$data[$i]["location"]["address"]["state"]."','".$data[$i]["location"]["address"]["postal_code"]."',".$i."],";
      }
  ?>
    ];
    console.log("locations: " + locations);
    var map = new google.maps.Map(document.getElementById('map-m'), {
        scrollwheel: false,
        zoom: 11,
        center: new google.maps.LatLng(locations[0][1], locations[0][2]),
        mapTypeId: google.maps.MapTypeId.ROADMAP
    });
    var infowindow = new google.maps.InfoWindow();
    var marker, i;
    for (i = 0; i < locations.length; i++) {
        marker = new google.maps.Marker({
            position: new google.maps.LatLng(locations[i][1], locations[i][2]),
            map: map
        });
        google.maps.event.addListener(marker, 'click', (function (marker, i) {
            return function () {
              content = locations[i][0]  + "<br />" + locations[i][3] + " " + locations[i][4] + "<br />" + locations[i][5] + ", " + locations[i][6] + " " + locations[i][7];
              infowindow.setContent(content);
                infowindow.open(map, marker);
            }
        })(marker, i));
    }


    
jQuery(document).ready(function($) {

    
    $( "#blurcontainer" ).on('submit', '.repFormSmall', function( event ){

        // Stop form from submitting normally
        event.preventDefault();
        var query = $(this).find('input[name="zip"]').val();
        var distance = $(this).find('select[name="distance"]').val();

        if(query.length < 5){

            $('#zip').val('');
            return false;

        } else{

            $("#repData").empty();
            $("#map-m").remove();
            $("#mapInfo").remove();         
            // Send the data using post
            //var posting = $.post( "http://myretirementwalk.com/wp-content/themes/mrw/find-a-rep.php",{zip:query});
            // var posting = $.post( "http://new6-server.com.s214851.gridserver.com/wp-content/themes/mrw/find-a-rep.php",{zip:query});
            var post_url = "<?php echo get_stylesheet_directory_uri(); ?>/find-a-rep.php"; 
            var posting = $.post( post_url, { zip:query, distance: distance });
            // Put the results in a div
            posting.done(function(data) {
                //$( "#repData" ).replaceWith(data);
                var $container = $(data).wrap('<div />').parent();
                    $container.find('#footer').remove();
                    $('#blurcontainer').html($container);
                    // $(".repFormSmall").reset();
            });
        }
    });
});
				
</script>

<?php get_footer(); ?>
<?php
} else {
    if (isset($_POST['first_name'])){

        $firstname = htmlentities($_POST['first_name']);
        $lastname = htmlentities($_POST['last_name']);
        $postalcode = htmlentities($_POST['zip_code']);
        $contactpreference = $_POST['contact_method'] == 1 ? 'email' : 'phone' ;
        $email = htmlentities($_POST['email_address']);
        $phone = htmlentities($_POST['phone_number']);
        $best_time = htmlentities($_POST['best_time_to_call']);
        $selections = $_POST['im_interested_in'];
        $comments = htmlentities($_POST['additional_comments']);
        
        $api_instance = new Swagger\Client\Api\LeadApi();
        $lead_request = new \Swagger\Client\Model\LeadRequest(); // \Swagger\Client\Model\LeadRequest | Lead to create
        $lead = new \Swagger\Client\Model\Lead(); 

        $api_client = $api_instance->getApiClient();
        $config = $api_client->getConfig();
          
        $config->setHost('https://apisvc.glic.com:8445/fr/v1');
        $config->addDefaultHeader('UserId','LivingConfidently_service_id');
        $config->addDefaultHeader('AppKey','xQYtLQagvzpvFyddcGWaz3t0sP9KBfzz');
        $config->addDefaultHeader('Authorization','Basic TGl2aW5nQ29uZmlkZW50bHlfc2VydmljZV9pZDpXMW50M3I5ODck');
        //$config->setDebug(true);
           
         
        $lead["first_name"] = $firstname;
        $lead["last_name"] = $lastname;
        $lead["contact_preference"] = $contactpreference;
        
        if (empty($_POST['phone_number']) == 1){
          $phone = "212-555-1212";
        }
        
        if (empty($_POST['email_address']) == 1){
          $email = "email@donotuse.com";
        }
        
        
        $phone_number = new \Swagger\Client\Model\PhoneNumber();
        $phone_number["full_number"] = $phone;
        $lead["phone_numbers"] = array($phone_number);
        
        
        $email_address = new \Swagger\Client\Model\Email();
        $email_address["address"] = $email;
        $lead["emails"] = array($email_address);
        
        $address = new \Swagger\Client\Model\Address();
        $address["postal_code"] = $postalcode;
        $lead["addresses"] = array($address);
        
        $lead["best_time_to_call"] = $best_time;
        $lead["customer_note"] = $comments;
        
        
        $di_quote = new \Swagger\Client\Model\DiQuote();
        
        $lead["di_quote"] = $di_quote;
        
        
        $name = $firstname . "_" . $lastname;
        
        if (isset($_COOKIE["wholelife_find_a_rep"])){
          $lead["campaign_ids"] = array('9','65');
        }else{
          if (isset($_COOKIE["disability_find_a_rep"])){
            $lead["campaign_ids"] = array('9','38');
          }else{
            if (isset($_COOKIE["retirement_find_a_rep"])){
              $lead["campaign_ids"] = array('9','32');
            }else{
              $lead["campaign_ids"] = array('9');
            }
          }
        }
        
        // $campaign = new \Swagger\Client\Model\Campaign();
        // $campaign["name"] = $campaign_description;
        // $lead["campaigns"] = array($campaign);
        
        
        $selection_array = array();
        
        foreach ($selections as $selection) {
            array_push($selection_array,$selection);
        }
        // array_push($selection_array,1);
        
        $lead["service_ids"] = $selection_array;

        $lead_request["lead"] = $lead;
 
        if(isset($_POST['agency_name']) && $_POST['agency_name'] != ""){
            $agency = $_POST['agency_name'];
            $lead_request["location_permalink"] = $agency;
        }
        //var_dump($lead_request);
        
        try {
            $result = $api_instance->addLead($lead_request);
            
            $data = $result;
            
        } catch (Exception $e) {
            echo 'Exception when calling LeadApi->addLead: ', $e->getMessage(), PHP_EOL;
        }
        
        
    }
?>

<?php get_header(); ?>

    <div class="row">
        <div id="repData">
            <?php /*echo "first name: ". $firstname . "<br />" ;
                  echo "last name: ". $lastname . "<br />" ;
                  echo "zip code: ". $postalcode . "<br />" ;
                  echo "contact method: ". $contactpreference . "<br />" ;
                  echo "email: ". $email . "<br />" ;
                  echo "phone: ". $phone . "<br />" ;
                  echo "best time: ". $best_time . "<br />" ;
                  echo "comments: ". $comments . "<br />" ;
                  echo "selections: " . $selection_string . "<br />";*/
            
            ?>

            <div class="thankyou-container">

                <?php
                if(isset($data["lead"])){?>

                    <p>THANK YOU</p>

                <?php } else { ?>

                    <p>Oops something went wrong.</p> 

                <?php } ?>
            </div>

            <div class="thankyou-bottom">

                <?php if(isset($data["lead"])){?>

                    <p>Thank you <?php echo ucfirst($firstname); ?>, we’ve received your information and will contact you soon. If you have any other questions, please call us at 1-888-GUARDIAN (1-888-482-7342)</p>

                <?php } else { ?>

                    <p>Please check the information submitted including zip code for errors and try again.</p> 
                     
                <?php } ?>
            </div>
        </div>
    </div>
    
<?php get_footer(); ?>

<?php    
}}
?>