<!DOCTYPE html>
<html>
<head>
	<title>Awesome Weather</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<link rel="stylesheet" href="/js-weather/style.css">
	<script src="http://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body class="container">

	<div style="margin-top: 15px"><a href="/">Home...</a></div>

	<h1 class>Awesome Weather</h1>

	<div class="form-inline" id="inputForm">

		<input type="number" class="form-control" placeholder="{{ $default }}" id="zipInput">

		<button type="button" class="btn btn-success" id="weatherButton">Get Weather</button>

	</div>


	<div id="error" class="panel panel-danger">

		<div class="panel-heading">
			<h3 class="panel-title">Error</h3>
		</div>

		<div class="panel-body">
			<p id="errorMessage"></p>
		</div>

	</div>


	<div id="output">

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">City</h3>
			</div>

			<div class="panel-body">
				<p id="cityOutput"></p>
			</div>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Temperature</h3>
			</div>

			<div class="panel-body">

				<table class="table table-bordered">
					<tr>
						<th>Kelvin</th>
						<th>Fahrenheit</th>
						<th>Celsius</th>
					</tr>
					<tr>
						<td><p id="temperatureOutputK"></p></td>
						<td><p id="temperatureOutputF"></p></td>
						<td><p id="temperatureOutputC"></p></td>
					</tr>
				</table>

			</div>

		</div>

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Condition</h3>
			</div>

			<div class="panel-body">
				<p id="conditionOutput"></p>
			</div>
		</div>

		<div class="panel panel-info">
			<div class="panel-heading">
				<h3 class="panel-title">Temperature in Pictures</h3>
			</div>

			<div class="panel-body">
				<img alt="" src="" id="weatherImage" width="400">
			</div>
		</div>

	</div>
<script src="/js-weather/main.js"></script>
</body>
</html>