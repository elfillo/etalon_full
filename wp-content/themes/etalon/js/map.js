function initMap() {
    var adress1 = {
        lat: 52.277572,
        lng: 104.306640
        /*Трактовая, 18/36а*/
    };

    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 12,
        center: adress1,
        styles: [{
            "featureType": "all",
            "elementType": "all",
            "stylers": [{
                "saturation": -100
            }, {
                "gamma": 0.9
            }]
        }]
    });
    var marker1 = new google.maps.Marker({
        position: adress1,
        map: map,
        icon: '/wp-content/themes/etalon/img/icons/marker_map.png'
    });
}