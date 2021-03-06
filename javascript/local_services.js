var map;
var initLatLng = {lat: 54, lng: -1.1581};
var markers = [];
var infowindows = [];

initSearchBar();

function initSearchBar() {
  $('#js_searchbar').keyup(function(e){
    if(e.keyCode == 13) {
      handleInputText(e.currentTarget.value)
    }
  })

  $('#js_searchbar').focus(function(e){
    e.currentTarget.value = "";
  })


}

function handleInputText(dtext) {
  hideDetails();
  hideSearchResults();
  dtext.trim();
  doJSONSearch(dtext);
 $('.results-hide').hide();
}

function initMap() {

  map = new google.maps.Map(document.getElementById('map'), {
    center: initLatLng,
    zoom: 6
  });

  var count = LOCAL_SERVICES.length;
  for(var i=0; i<count; i++) {
    addMarker(LOCAL_SERVICES[i])
  }

  var searchText = window.location.hash.replace("#", "");
  if(searchText) { handleInputText(searchText) }
}

function addMarker(service) {

  var marker = new google.maps.Marker({
    position: {lat: service.Latitude, lng: service.Longitude},
    map: map,
    title: service["Account Name"]
  });


  var contentString = '<div class=service>' + service["Account Name"] + '</div>';

  var infowindow = new google.maps.InfoWindow({
    content: contentString
  });
  var index = markers.length; // this here to capture in click closure
  marker.addListener('click', function(e) {
    hideDetails();
    var count = infowindows.length; // we brute force close all windows before we open another one
    for(var i=0; i<count;i++) {infowindows[i].close();}
    infowindow.open(map, marker);
    // hideBackLink();
    showDetails(index);
    map.panTo(e.latLng);
    map.setZoom(11);
  });

  infowindows.push(infowindow);

  markers.push(marker);

}

function showDetails(index) {
  hideSearchResults();
  var record = LOCAL_SERVICES[index];


  $('#js_service_name').html(record['Account Name']);

  var address = '' +
  record['Primary Street']   + (record['Primary Street'] ? ', ' : '')
  + record['Primary City']   + (record['Primary City']   ? ', ' : '')
  + record['Primary County'] + (record['Primary County'] ? ', ' : '')
  + record['Primary Postal Code'];

  $('#js_service_address').html(address);
  $('#js_service_website').html('<a href="'+record['Website']+'">'+record['Website']+'</a>');
  $('#js_service_telephone').html(''+record['Phone']);
  $('#js_service_overview').html(record['Description']);


  var services = record['Services Offered'];

  if(services) {
    $('#js_service_details__header').show()
    var servicesArray = services.split(";")
    var count = servicesArray.length;
    var servicesListHTML = '';
    for(var i=0; i<count; i++) {
      servicesListHTML += '<li>'+servicesArray[i].trim()+'</li>';
    }
    $('#js_service_services').html('<ul>'+servicesListHTML+'</ul>');   
  } else {
    $('#js_service_details__header').hide();
    $('#js_service_services').html('');
  } 


  if(!$('#js_search_results').html()){
    hideBackLink();
  } else {
    showBackLink();
  }

  $('#js_services').css('opacity','1');
     
}




function hideDetails() {
  $('#js_services').css('opacity','0'); 
}

function hideSearchResults() {
  $('#js_search_results').hide();

}

function showSearchResults() {
  $('#js_search_results').show();
  $('.results-hide').hide();
}

function hideBackLink() {
  $('#js_service_back_link').hide();
}

function showBackLink() {
    $('#js_service_back_link').show();
}

function doJSONSearch(term) {
  var results = [];
  var count   = LOCAL_SERVICES.length;
  var rx      = new RegExp(term, 'i');
  for(var i=0; i<count; i++) {
    if( LOCAL_SERVICES[i]["Account Name"].search(rx) != -1 || 
        LOCAL_SERVICES[i]["Primary Street"].search(rx) != -1 || 
        LOCAL_SERVICES[i]["Primary City"].search(rx) != -1 ||
        LOCAL_SERVICES[i]["Location"].search(rx) != -1 ||
        LOCAL_SERVICES[i]["Primary County"].search(rx) != -1 )
    {
      results.push(i);
    }
  }

  $('#js_search_results').html("");
  if(results.length){
    displaySearchResults(results)
  }
  
  getGeoCode(term);

}

function displaySearchResults(results) {
  hideDetails();
  var searchResultHTML = ''
  for(var i=0; i<results.length;i++){
    var index = results[i];
    searchResultHTML += '<div class="servicedetail"><a href="#" onclick="showDetailsFromResults('+index+')">'+LOCAL_SERVICES[index]['Account Name'] + '</a> </div>';
  }
  $('#js_search_results').html(searchResultHTML).show();
}

function displayNoResults() {
  hideDetails();
  var noResultHTML = 'Sorry no results found, please broaden the area for your search<br />';

  $('#js_search_results').html(noResultHTML).show();
}

function showDetailsFromResults(index) {

  map.panTo(markers[index].position);
  map.setZoom(12);
  new google.maps.event.trigger( markers[index], 'click' );
  showDetails(index);

}

function getGeoCode(term) {
  $.getJSON( "https://maps.googleapis.com/maps/api/geocode/json?address="+term+",UK"+"&key=AIzaSyAuQNImG39ziZAsfGRa8CBalU2ZbK5KN4A", function( data ) {
      if(data.results.length) {
      position = data.results[0].geometry.location;
      //console.log(position);
      map.panTo(position);
      map.setZoom(10);
    } else {
      displayNoResults();
    }
  });
}



