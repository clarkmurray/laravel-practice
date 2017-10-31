var zipInput = document.getElementById('zipInput');
var weatherButton = document.getElementById("weatherButton");
var error = document.getElementById("error");
var errorMessage = document.getElementById("errorMessage");

var output = document.getElementById("output");

var conditionOutput = document.getElementById("conditionOutput");
var temperatureOutputK = document.getElementById("temperatureOutputK");
var temperatureOutputF = document.getElementById("temperatureOutputF");
var temperatureOutputC = document.getElementById("temperatureOutputC");
var cityOutput = document.getElementById("cityOutput");
var weatherImage = document.getElementById("weatherImage");

var apiRequest;


// Wait for page to load before making button work
document.onreadystatechange = function() {
	if (document.readyState === "interactive") {
		weatherButton.onclick = getWeather;

	}
};


function getWeather() {

	var url = "http://api.openweathermap.org/data/2.5/weather?zip=<zipcode>,us&appid=89733a9ae56a181e71b5ed9c9b71444a";
	url = url.replace("<zipcode>", zipInput.value);

	apiRequest = new XMLHttpRequest();
	apiRequest.onload = catchResponse;
	apiRequest.onerror = httpRequestOnError;
	apiRequest.open("GET", url, true);
	apiRequest.send();


};

function catchResponse() {

	if (apiRequest.statusText === "OK") {
		errorMessage.innerHTML='';
		error.style.display = "none";
		output.style.display = "block";

		parseResponse();


	} else {
		errorMessage.innerHTML = JSON.parse(apiRequest.responseText).message;
		error.style.display = "block";
		output.style.display = "none";
	}

	console.log(JSON.parse(apiRequest.responseText));
};

function parseResponse() {

	var results = JSON.parse(apiRequest.responseText);

	var tempK = Math.round(results.main.temp);
	var tempF = Math.round(9/5 * (tempK - 273) + 32);
	var tempC = tempK - 273;

	temperatureOutputK.innerHTML = tempK + "&deg;";
	temperatureOutputF.innerHTML = tempF + "&deg;";
	temperatureOutputC.innerHTML = tempC + "&deg;";

	cityOutput.innerHTML = results.name;
	conditionOutput.innerHTML = results.weather[0].description;

	if (tempF > 95) {
		weatherImage.src = "https://openclipart.org/download/196130/Volcano.svg";
	} else if (tempF > 85) {
		weatherImage.src = "https://media.rbl.ms/image?u=%2Ffiles%2F2016%2F04%2F15%2F635963469764710781-1002509858_tumblr_n6vi59KPmO1tbh1dho1_400.gif&ho=https%3A%2F%2Faz616578.vo.msecnd.net&s=765&h=09e03017b9751456564b4ce2542f761a7bb5f8d551aaf061b251294fbd316e80&size=980x&c=3646041352";
	} else if (tempF > 75) {
		weatherImage.src = "http://www.dumpaday.com/wp-content/uploads/2012/11/hot-dog-funny-dog-laying-on-ice.jpg";
	} else if (tempF > 65) {
		weatherImage.src = "http://i0.kym-cdn.com/photos/images/original/001/093/677/752.png";
	} else if (tempF > 32) {
		weatherImage.src = "http://www.boston-discovery-guide.com/image-files/x800-public-garden-lagoon-gold-leaves-oct.jpg.pagespeed.ic.HsaXiqFP0W.jpg";
	} else {
		weatherImage.src = "https://hisheartandhomedotcom.files.wordpress.com/2011/11/hot-chocolate.jpg";
	};
}

function httpRequestOnError() {
		errorMessage.innerHTML = "HTTP request could not be completed";
		error.style.display = "block";
		output.style.display = "none";
}