<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>



	<h1>List Data</h1>



<?php

if(Session::get('success'))
{

?>

<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success ! </strong> {{Session::get('success')}}.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>



<?php
}

 ?>


  <table border="2px">
  	<tr>
  		<th>id</th>
  		<th>name</th>
  		<th>title</th>
  		<th>Action</th>
  	</tr>
@foreach ($todos as $key => $value)
  	<tr>
  		<td>{{$value->id  }}</td>
  		<td>{{$value->name  }}</td>
  		<td>{{$value->title  }}</td>
  		<td><a href="/delete?id={{$value->id  }}"> delete </a>
             //**// <a href="/edit?id={{$value->id  }}"> Edit </a>
                  
  		</td>
  	</tr>
 @endforeach

  </table>
	
	 
		 	
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>	

</body>
</html>