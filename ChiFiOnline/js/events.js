window.fbAsyncInit = function() {
  FB.init({
    appId      : '1425941807666674',
    status     : true, // check login status
    cookie     : true, // enable cookies to allow the server to access the session
    xfbml      : true,  // parse XFBML
    version    : 'v2.0'
  });

  FB.api('/297605941933/events?access_token=1425941807666674|4Osph7bwOnGvGAh7YtGZtgmwMhU',  function(response) {

    var eventData = response.data;

    var numberOfListItems = eventData.length;

    var eventDescriptions = [];
    var eventTimes = [];
    var eventImages = [];
    var eventNames = [];
    var eventLinks = [];

    var eventNumber = 0;

    console.log(numberOfListItems);

    if(numberOfListItems == 0) {
        document.getElementById("event-header").style.display="none";
    }

    if (typeof numberOfListItems === 'undefined') {
        document.getElementById("event-header").style.display="none";
    } else {
        for (var i = 0; i < numberOfListItems; i++) {
            var eventId = eventData[i].id;
          
          FB.api('/' + eventId +'/?access_token=1425941807666674|4Osph7bwOnGvGAh7YtGZtgmwMhU', {fields: 'id, name, cover, description, start_time'},  function(response) {

            var time = new Date(response.start_time);
            var today = new Date();

            if(time >= today) {
                eventNumber++;

                eventNames[i] = document.createElement("h2");
                eventNames[i].innerHTML = response.name;

                eventDescriptions[i] = document.createElement("p");
                $clamp(eventDescriptions[i], {clamp: 3});

                eventTimes[i] = document.createElement("p");


                eventImages[i] = document.createElement("div");
                eventImages[i].className = "event-img";
                eventImages[i].style.backgroundImage = "url('" + response.cover.source +  "')";

                eventDescriptions[i].innerHTML = response.description;

                eventTimes[i].innerHTML = moment(time).calendar();

                var eventContainer = document.createElement("div");
                eventContainer.className = "event";
                document.getElementById("event-grid").appendChild(eventContainer);

                eventLinks[i] = document.createElement("a");
                eventLinks[i].href = "https://www.facebook.com/" + response.id;
                eventLinks[i].target = "_blank";
                eventLinks[i].appendChild(eventImages[i]);

                eventContainer.appendChild(eventLinks[i]);

                var eventDetails = document.createElement("div");
                eventDetails.className = "event-details";
                eventDetails.appendChild(eventNames[i]);
                eventDetails.appendChild(eventDescriptions[i]);
                eventDetails.appendChild(eventTimes[i]);
                eventContainer.appendChild(eventDetails);
            }

            if(eventNumber == 0) {
                document.getElementById("event-header").style.display="none";
            }

          });
        }
    }
  });
};

(function(d, s, id){
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) {return;}
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));