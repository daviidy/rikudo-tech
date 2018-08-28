'use strict';

jQuery(document).ready(function($){
  //set your google maps parameters
  var latitude = 41.850,
      longitude = -73.961,
      map_zoom = 6;

  //google map custom marker icon - .png fallback for IE11
  var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
  var marker_url = ( is_internetExplorer11 ) ? 'img/widgets/gmap/cd-icon-location.png' : 'img/widgets/gmap/cd-icon-location.svg';

  //define the basic color of your map, plus a value for saturation and brightness
  var main_color = '#f7f8fa',
    saturation_value= -70,
    brightness_value= 40;

  //set google map options
  var map_options = {
    center: new google.maps.LatLng(latitude, longitude),
    zoom: map_zoom,
    panControl: false,
    zoomControl: false,
    mapTypeControl: false,
    streetViewControl: false,
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    scrollwheel: false
  }

  //inizialize the map
  var map = new google.maps.Map(document.getElementById('js__google-container'), map_options);

  var contentString = '<div id="content">'+
    '<div id="siteNotice">'+
    '</div>'+
    '<h2 id="firstHeading" class="firstHeading">Brooklyn</h2>'+
    '<div id="bodyContent">'+
    '<p>277 Bedford Avenue, <br> Brooklyn, NY 11211, <br> New York, USA</p>'+
    '</div>'+
    '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString,
    maxWidth: 300
  });

  //add a custom marker to the map
  var marker = new google.maps.Marker({
    position: new google.maps.LatLng(latitude, longitude),
    map: map,
    visible: true,
    icon: marker_url,
  });

  marker.addListener('click', function() {
    infowindow.open(map, marker);
  });
});
