var bMapAPIKey="Asg07BNlNb4qmAHocHpHooyDSNZHxokDHh9E1ml15vmTE1kfBSFTipbDQSP8dx55";
function GetMap(){
  "use strict";
  var map = new Microsoft.Maps.Map('#myMap',{
  //  credentials: 'Your Bing Maps Key',
    center: new Microsoft.Maps.Location(33.831138610839844,66.024711608886719),
    mapTypeId: Microsoft.Maps.MapTypeId.Road,
    zoom: 12
});

}
