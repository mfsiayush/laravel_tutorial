<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<h1>This is about page</h1>
<ul>
@foreach($arr as $a)
    <li>{{$a}}</li>
@endforeach
</ul>
</body>
</html>