<!DOCTYPE html>
<html>
	<head>
	    
	 
            <?php
                $d = getdate();
                $m = $d["mon"];
  
                if ($m == 2)
                {
                  echo '<link rel="stylesheet" type="text/css" href="style.css">';
                }
            ?>
	  
	</head>
	
	<body>
	    
	    <img src="hittastic.png" alt="Hittastic">
	    
		<h1>Welcome to HitTastic</h1>
		
		<p>fjhdfbeqriugbeirugbeirbgiwuergbwieugbweiorugbwoe
		riugbweoirugbewoirugbweroiugbweiorugbweoirubgowerbg</p>
		
		<form method = "get" action = "searchresults.php" action = "index.php">
			<input type ="text" name = "artist_input"/> 
			<input type = "submit" name = "submit"/>
		</form>
		
		<a href="http://ephp.solent.ac.uk/~ephp019/signup.html">Signup</a>
		
	</body>
</html>