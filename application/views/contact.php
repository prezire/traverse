<div id="about" class="index row">
  
  <div class="row">
    <div class="large-12 columns">
    <div class="gmap" style="height: 300px !important;"></div>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYHHvFXcg3urZxXugL2eraVKwAm0hX4VA">
    </script>
    <script>
      $(document).ready(function(){
        function initGmap()
        {
          var styles = [{"featureType":"landscape","stylers":[{"saturation":-100},{"lightness":65},{"visibility":"on"}]},{"featureType":"poi","stylers":[{"saturation":-100},{"lightness":51},{"visibility":"simplified"}]},{"featureType":"road.highway","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"road.arterial","stylers":[{"saturation":-100},{"lightness":30},{"visibility":"on"}]},{"featureType":"road.local","stylers":[{"saturation":-100},{"lightness":40},{"visibility":"on"}]},{"featureType":"transit","stylers":[{"saturation":-100},{"visibility":"simplified"}]},{"featureType":"administrative.province","stylers":[{"visibility":"off"}]},{"featureType":"water","elementType":"labels","stylers":[{"visibility":"on"},{"lightness":-25},{"saturation":-100}]},{"featureType":"water","elementType":"geometry","stylers":[{"hue":"#ffff00"},{"lightness":-25},{"saturation":-97}]}];
          var latLng = new google.maps.LatLng(1.312564, 103.889497);
          var o = 
          {
            zoom: 15,
            center: latLng,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
            styles: styles
          };
          var map = new google.maps.Map($('.gmap')[0], o);
          var marker = new google.maps.Marker({
            position: latLng,
            map: map,
            title: 'Simplifie.'
          });
          //
          var s = $('<div class="marker-info-win">'+
          '<div class="marker-inner-win"><span class="info-content">'+
          '<b>Simplifie</b><br />'+
          'The Sunny Spring Condominium<br />' +
          'Singapore<br /><br />'+ 
          'admin@simplifie.net<br />' +
          'F: +65 8127 8621' + 
          '<br /><br />' +
          '<img src="https://geo0.ggpht.com/cbk?cb_client=maps_sv.tactile&output=thumbnail&thumb=2&it=1,2,4,5,11&w=210&h=70&yaw=352&pitch=0&ll=1.312028,103.889509">' + 
          '<br /><br />' +
          '<a href="https://www.google.com.sg/maps/place/50+Lor+40+Geylang,+Singapore+398074/@1.312215,103.889486,17z/data=!4m2!3m1!1s0x31da183e758c910b:0x869d6ced45a563f2" target="_blank">View in Google Map</a><br /><br /><br />' +
          '</span>'+
          '</div></div>');
          var infoWindow = new google.maps.InfoWindow();
          infoWindow.setContent(s[0]);
          google.maps.event.addListener(marker, 'click', function() {
            infoWindow.open(map,marker);
          });
          //
          $(window).resize(function(){map.setCenter(latLng);});
        }
        initGmap();
      });
    </script>
    </div>
  </div>
  
   <div class="row">
     <div class="large-12 columns">
      <h5>About</h5>
      <div class="large-2 columns">Address:</div><div class="large-10 columns">The Sunny Spring Condominium</div>
      <div class="large-2 columns">Mobile:</div><div class="large-10 columns">+65 8127 8621</div>
    </div>
   </div>
    <br />
    
    <div class="row">
     <div class="large-12 columns">
        <h5>Contact Us</h5>
        <?php echo form_open('main/contact'); ?>

        <div class="row">
          <div class="large-12 columns">
            <input type="text" name="full_name" placeholder="Full name:*" />
          </div>
        </div>
        
        <div class="row">
          <div class="large-12 columns">
          <input type="text" name="email" placeholder="Email:*" />
          </div>
        </div>
        
        <div class="row">
          <div class="large-12 columns">
            <input type="text" name="website" placeholder="Website: " />
          </div>
        </div>
        
        <div class="row">
          <div class="large-12 columns">
            <textarea name="description" placeholder="Description:*"></textarea>
          </div>
        </div>
        
        <div class="row">
          <div class="large-12 columns">
            <button class="radius tiny">Send</button>
          </div>
        </div>
        
        </form>
      </div>
  </div>
</div>