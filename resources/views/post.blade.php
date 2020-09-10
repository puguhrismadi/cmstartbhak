<!DOCTYPE html>
<html>
<head>
	<title>{{ $post->title }}</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">

				<h1>{{ $post->title }}</h1>
				<img src="{{ Voyager::image( $post->image ) }}" style="width:100%">
				<p>{!! $post->body !!}</p>

			</div>
		</div>
	</div>

</body>
</html>