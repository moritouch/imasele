function locationCheck(mode){
	
	
    
    if (navigator.userAgent.indexOf('iPhone') > 0) {
    	if(mode == 1){
			navigator.geolocation.watchPosition(locationUpdateLunch, handleError);
		} else {
			navigator.geolocation.watchPosition(locationUpdate, handleError);
		}
	} else {
		var geo = navigator.geolocation || google.gears.factory.create('beta.geolocation');
		var flag=false;
		if(geo){
			geo.getCurrentPosition(
				function (pos) {
					flag=true;
					alert(pos.coords.latitude);
					console.log(pos.coords.latitude,pos.coords.longitude);
				},
				function (e) {
					alert("位置情報の取得に失敗しました");
				},
				{
					enableHighAccuracy: true
				}
			);
		}
		setTimeout(function(){
			if(!flag){
				alert("位置情報の取得に失敗しました");
			}
		},60000);
		//var gps = navigator.geolocation || google.gears.factory.create('beta.geolocation');
		/*
		if(mode == 1){
			//gps.getCurrentPosition(locationUpdateLunchAndroid, handleError);
			navigator.geolocation.getCurrentPosition(locationUpdateLunch, handleError);
		}
		else {
			//gps.getCurrentPosition(locationUpdateAndroid, handleError);
			navigator.geolocation.getCurrentPosition(locationUpdate, handleError);
		}
		*/
	}
}

function locationUpdate(pos) {
	
	if(pos.coords.latitude && pos.coords.longitude){
		location.href = '/users/select/' + pos.coords.latitude + '/' + pos.coords.longitude + '/2';
	}
	
	// とりあえずいまは不要　pos.coords.accuracy
}

function locationUpdateLunch(pos) {
	
	if(pos.coords.latitude && pos.coords.longitude){
		location.href = '/users/select/' + pos.coords.latitude + '/' + pos.coords.longitude + '/1';
	}
	
	// とりあえずいまは不要　pos.coords.accuracy
}

function locationUpdateAndroid(pos) {
	
	if(pos.latitude && pos.longitude){
		location.href = '/users/select/' + pos.latitude + '/' + pos.longitude + '/2';
	}
}

function locationUpdateLunchAndroid(pos) {
	
	if(pos.latitude && pos.longitude){
		location.href = '/users/select/' + pos.latitude + '/' + pos.longitude + '/1';
	}
}

function handleError(a) {
    // とりあえず何もしない
	alert(a.message);
}