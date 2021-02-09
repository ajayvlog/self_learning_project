<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>New Views  </h2>

 {!!
 	  $list['pass']
 !!}

</body>

<script type="text/javascript">
	var app=@json($list);
	console.log(app);
</script>
</html>