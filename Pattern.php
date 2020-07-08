<html>
	<head>
		<title>Pattern</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
        <?php   
            include_once "Header.php";
            include_once "Menu.php";
		?>
		<div style="margin: 3rem;">
		<br>
		<?php 
		// PHP code for hollow rectangle 
		
		// Function to print hollow rectangle 
		function print_rectangle($n, $m) 
		{ 
			$i;  
			$j; 
			for ($i = 1; $i <= $n; $i++) 
			{ 
				for ($j = 1; $j <= $m; $j++) 
				{ 
					if ($i == 1 || $i == $n ||  
						$j == 1 || $j == $m)          
						echo("*");          
					else
						echo("&nbsp;&nbsp;");          
				} 
				echo("<br>"); 
			} 
		
		} 
		
			// Driver Code 
			$rows = 5;  
			$columns = 5; 
			print_rectangle($rows, $columns); 
		
		// This code is contributed by nitin mittal 
		?> 
		</div>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>