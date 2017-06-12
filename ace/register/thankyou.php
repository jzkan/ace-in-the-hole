<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend - Thank you!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Slideshow -->
    <link href="../css/swiper.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS and Google font -->
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400%7COswald:600" rel="stylesheet">
    <!-- jQuery -->
    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="http://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
    <script>
        $(function() {
            $('#toggle').click(function() {
                $('header').toggleClass('openNav', 200);
            });
        });
    </script>
</head>
	<body>
	<?php include( '../includes/header.php' ); ?>
	<main>
        <section id="thankyou">
            <h2>Thank you!</h2>

 <?php

	$firstname = $_POST['firstname'];

	echo '<p>You made it, ' . $firstname . '!</p><p>Check our <a href="../afterregister">After You Register</a> page and get prepared.</p>';
?>
<br>
            <img src="http://kanaenakamine.work/ace/css/img/thankyou.jpg" alt="shoes">

        </section>
		</main>
			<?php include( '../includes/footer.php' ); ?>
		</body>
</html>