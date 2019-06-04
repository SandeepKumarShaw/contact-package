<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
</head>
<body>
<h1>Contact Us AnyTime</h1>
<form method="post" action="{{ route('contact') }}">
	@csrf
	<input type="text" name="name" placeholder="Enter Your Name Here">
	<input type="email" name="email" placeholder="Enter Your Email Here">
	<textarea name="message" cols="30" rows="10" placeholder="Enter Your Query Here"></textarea>
	<input type="submit" value="Submit">
</form>
</body>
</html>