function initMap() {
    var center = {lat: +wfmObj.coords1, lng: +wfmObj.coords2};
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: parseInt(wfmObj.zoom),
        center: center
    });

    var marker = new google.maps.Marker({
        position: center,
        map: map
    });

}