<hr>

<footer>
   <p>&copy; All Rights Reserved <a href="laurentapleydesign.com" target="_blank">Lauren Tapley Design and Development</a>
    <?php echo date("Y");?>
  </p>
</footer>
</div> <!-- /container -->
<script src="assets/js/compiled-bundle.min.js"></script>
<script>
function initMap() {
var uluru = {lat: 34.090009, lng: -117.890340};
var map = new google.maps.Map(document.getElementById('map'), {
 zoom: 10,
 center: uluru
});
var marker = new google.maps.Marker({
 position: uluru,
 map: map
});
}
   </script>
   <script async def  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfN7C-qwtnrAfiQ9mUM9lNU-kjhkJ5Riw&callback=initMap"></script>
</body>
</html>
