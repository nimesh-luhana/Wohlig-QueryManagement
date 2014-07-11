function getURLParameter(name) {
    	return decodeURI(
        	(RegExp(name + '=' + '(.+?)(&|$)').exec(location.search)||[,null])[1]
    	);
	}
	

function site_url() {
	return "http://localhost:8080/";
}

function imgurl() {
	return "http://localhost:8080/mobileapp_mallkhoj/assets/";
}	
		