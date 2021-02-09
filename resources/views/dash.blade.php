<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2>hello this is dashborad</h2>


<h4>
	
@if(Session::get('user'))

<li>{{Session::get('user')}}</li>

@endif


</h4>


<a href="/logout">Logout </a>

</body>
</html>