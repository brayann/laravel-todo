<!DOCTYPE HTML>
<html lang="en-US">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{ Asset::container('bootstrapper')->styles(); }}
	<title></title>
</head>
<body>
	
	<div class="container">
		<div class="row">
			
			<div class="span4 offset4 well">
				
				{{ Form::open(URL::to('connect/session/facebook')) }}

					{{ Form::submit('Login with Facebook', array('class' => 'btn-block btn-primary')) }}

				{{ Form::close() }}

				{{ Form::open(URL::to('connect/session/google')) }}

					{{ Form::submit('Login with Google', array('class' => 'btn-block btn-info')) }}

				{{ Form::close() }}

			</div>

		</div>
	</div>

	{{ Asset::container('bootstrapper')->scripts(); }}
</body>
</html>