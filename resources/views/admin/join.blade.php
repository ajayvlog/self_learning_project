 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<?php

    foreach ($data as $key => $value) {
    	# code...
    	?>
 
     <h1> {{$value->name}}</h1>

    	<?php
    }
 	?>
 </body>
 </html>