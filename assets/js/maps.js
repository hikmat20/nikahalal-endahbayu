
//Init Overlays
var overlays = {};
//Init BaseMaps
var basemaps={
'Empty': L.tileLayer(''),
"Esri World Dark":L.tileLayer('https://server.arcgisonline.com/arcgis/rest/services/Canvas/World_Dark_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>',
	maxZoom: 16
}),
"Esri World Gray":L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/Canvas/World_Light_Gray_Base/MapServer/tile/{z}/{y}/{x}', {
	attribution: 'Tiles &copy; Esri &mdash; Esri, DeLorme, NAVTEQ | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>',
	maxZoom: 16
}),
"Esri World Color":L.tileLayer('https://{s}.tile.openstreetmap.se/hydda/base/{z}/{x}/{y}.png', {
	maxZoom: 19
}),		
"Google Street":L.tileLayer('https://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}',{
		maxZoom: 20,
		subdomains:['mt0','mt1','mt2','mt3'],
		attribution:'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
}),
"Google Hybrid":L.tileLayer('https://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
		maxZoom: 20,
		subdomains:['mt0','mt1','mt2','mt3'],
		attribution:'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
}),
"Google Satelite":L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}',{
		maxZoom: 20,
		subdomains:['mt0','mt1','mt2','mt3'],
		attribution:'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
}),
"Google Traffic":L.tileLayer('https://{s}.google.com/vt/lyrs=m@221097413,traffic&x={x}&y={y}&z={z}', {
	maxZoom: 20,
	minZoom: 2,
	subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
	attribution:'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
}),
 "Google Terrain":L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}',{
	 maxZoom: 20,
	 subdomains:['mt0','mt1','mt2','mt3'],
	 attribution:'Map data &copy; Google | Map By <a href="https://idraxy.web.app" target="_blank">Draxgist & Team</a>'
}),
}

//Map Options
var mapOptions = {
  zoomControl: false,
  attributionControl: false,
  center: [reception_lat,reception_long],
  zoom: 11,
  	layers: [
  	    // Set Default   
		basemaps["Google Traffic"]
	]
};

//Render Main Map
var map = L.map("map", mapOptions);
L.control.layers(basemaps,null,{position:'bottomright'}).addTo(map);
var boundary = new L.geoJson();
boundary.addTo(map);

        // Location
        L.marker([reception_lat,reception_long]).addTo(map)
        .bindPopup("Lokasi Resepsi <BR> "+reception_address).openPopup();

        // L.circle([reception_lat,reception_long], 250, {
        //   color: 'green',
        //   fillColor: '#2ecc71',
        //   fillOpacity: 0.2
        // }).addTo(map).bindPopup(reception_address);
        

//Handle Map click to Display Lat/Lng
map.on("click", function(e) {
  $("#latlng").html(e.latlng.lat + ", " + e.latlng.lng);
  $("#latlng").show();
});
