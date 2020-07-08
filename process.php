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
                    <input list="range1s" name="range1">
                    <datalist id="range1s">
                        <?php
                        for ($i=1; $i<=100; $i++)
                        {
                            ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                        }
                        ?>
                    </datalist>
                </p>
                <p>
                    <label> Range 2: </label>
                    <input list="range2s" name="range2">
                    <datalist id="range2s">
                        <?php
                        for ($i=1; $i<=100; $i++)
                        {
                            ?>
                                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                            <?php
                        }
                        ?>
                    </datalist>
                </p>
                <input type="submit" value="Generate!">
                <br>
                <?php
                    for($i=$_GET["range1"]; $i<=$_GET["range2"];$i++){
                        if($i==1 || $i==0){
                            echo "This does not have any prime";
                            echo "<br>";
                        } elseif ($i==2 || $i==3){
                            echo $_GET["range1"] + " is a prime";
                            echo "<br>";
                        }
                    }
                ?>
                
        </form>
        <?php 
			include_once "Footer.php";
        ?>
	</body>
</html>

