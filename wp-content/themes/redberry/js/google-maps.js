// MAP MAKER
function makeMap(mapCoords, mapZoom, canvasID, iconBase, mapCenterCoords) {
  var mapCanvas = document.getElementById(canvasID);
  var mapOptions = {
    center: new google.maps.LatLng(parseFloat(mapCenterCoords[0]), parseFloat(mapCenterCoords[1])),
    zoom: parseInt(mapZoom),
    mapTypeId: google.maps.MapTypeId.ROADMAP,
    styles: [{"featureType":"all","elementType":"labels.text.fill","stylers":[{"color":"#ffffff"},{"lightness":"-41"},{"gamma":"2.01"},{"weight":"1.65"}]},{"featureType":"all","elementType":"labels.text.stroke","stylers":[{"color":"#000000"},{"lightness":13},{"visibility":"off"}]},{"featureType":"all","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{"featureType":"administrative","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"administrative","elementType":"geometry.stroke","stylers":[{"color":"#668799"},{"weight":1.4}]},{"featureType":"landscape","elementType":"all","stylers":[{"color":"#002d46"}]},{"featureType":"poi","elementType":"geometry","stylers":[{"color":"#0a486a"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#be9c2e"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#000000"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#81713e"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"color":"#7e6a29"}]},{"featureType":"transit","elementType":"all","stylers":[{"color":"#061923"}]},{"featureType":"water","elementType":"all","stylers":[{"color":"#021019"}]}]
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);

  for(var i = 0; i < mapCoords.length; i++) {
    var currentCoords = mapCoords[i];
    var marker = new google.maps.Marker({
      position: new google.maps.LatLng(parseFloat(currentCoords[0]), parseFloat(currentCoords[1])),
      map: map
    });
  }
}

// THIS FUNCTION WILL BE RUN AFTER GOOGLE MAP SCRIPTS HAVE BEEN LOADED
function initialize() {
  if(typeof localizeData != "undefined" && typeof localizeData.mapSetupData != "undefined") {
    var mapCoords = localizeData.mapSetupData['mapCoords'];
    var mapCenterCoords = localizeData.mapSetupData['mapCenterCoords'];
    var mapZoom = localizeData.mapSetupData['mapZoom'];
    var canvasID = localizeData.mapSetupData['canvasID'];
    var iconBase = localizeData.mapSetupData['iconBase'];

    makeMap(mapCoords, mapZoom, canvasID, iconBase, mapCenterCoords);
  }
}

// THIS WILL LOAD GOOGLE MAP SCRIPTS AND RUN INITIALIZE FUNCTION UPON LOAD
function loadMapScript(callback) {
  var script = document.createElement('script');
  script.type = 'text/javascript';
  script.src = 'https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places&' +
  'callback='+ callback;
  document.body.appendChild(script);
}
