<html>
	<head>
		<title>Prime</title>
        <link rel="stylesheet" type="text/css" href="StyleSheet.css" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	</head>
	<body>
        <?php   
            include_once "Header.php";
            include_once "Menu.php";
        ?>
        <div style="margin-top: 4rem"></div>
        <form method="GET" action="process.php">
            <fieldset>
                <legend>Prime finder</legend>
                <p>
                    <label> Range 1: </label>
                    <input type="number" min="1" max="100" name="range1"/>
                </p>
                <p>
                    <label> Range 2: </label>
                    <input type="number" min="1" max="100" name="range2"/>
                </p>
                <input type="submit" value="Generate!">
        </form>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>