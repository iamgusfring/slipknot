<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>

	<link rel="stylesheet" href="{{ asset('css/visitor/style.css') }}">

</head>
<body>	

	<div class='popup'>
		<div class='cnt223'>
			<h3>Sorry, something went wrogn</h3>
			<p>
				We're working on it.
				<form id="visitor" method="post" action="{{ url('visitor') }}">
					@csrf
					<div id="ipInfo"></div>
				</form>
				<br/>
				<br/>
				<!-- <a href='' class='close'>Close</a> -->
			</p>
		</div>
	</div>
				

	
	<script src="{{ asset('js/visitor/jquery.min.js') }}"></script>
	<script src="{{ asset('js/visitor/app.js') }}"></script>
	
</body>
</html>