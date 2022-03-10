<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car form</title>
    <link rel="stylesheet" type="text/css" href="styles.css" />
    <!--FONTS-->
		<link rel="preconnect" href="https://fonts.googleapis.com" />
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
		<link
			href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@500&display=swap"
			rel="stylesheet"
		/>
</head>
<body>
    <div class="main">
       <h1>Car form</h1>
        <h3>
            Success! Your data has been sent to us.
        </h3> 
        Hello <?php echo $_POST["fname"]; ?>!
        Your email is <?php echo $_POST["email"]; ?>
        And you like <?php echo $_POST["color"]; ?> cars.
    </div>
</body>
</html>