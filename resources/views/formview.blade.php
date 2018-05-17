<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>This is form view</h1>
<form method="POST" action="verify">
	@csrf
	Name: <input type="text" name="name"/></br>
	Email: <input type="text" name="email"/></br>
	<input type="submit"/>
</form>
</body>
</html>