<!DOCTYPE html>
<html>
<head>
	<title>database fetch data</title>
</head>
<body>

        <h1>Data</h1>
 
 <table border="2px">
 	<tr><th>id</th>
  <th>name</th>
  <th>class</th>
  <th>marks</th>
  <th>color</th>
 	</tr>



 
 		
<?php 
$i=0;


foreach ($users as $key => $value) {
	# code...

     $i++;
     $color='';
     if($i==5)
     {
     	echo $color='#f2a938';

     }
	?>
	<tr bgcolor="<?php echo $color;  ?>">
         <td><?php echo $value->id;  ?></td>
          <td><?php echo $value->name;  ?></td>
           <td><?php echo $value->class;  ?></td>
            <td><?php echo $value->marks;  ?></td>
            <td > <a href="/delete?id=<?php echo $value->id;  ?>"  onclick="return confirm('Are you sure you want to delete data ?')">delete</a></td>

	</tr>
	<?php
}


?>


 	
 </table>

 
</body>
</html>