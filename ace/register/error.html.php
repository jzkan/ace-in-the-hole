<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend - Error</title>
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
    <?php include( dirname(__FILE__). '/includes/header.php' ); ?>
    <main>
		<h2>ERROR! Couldn't connect to server</h2>
    </main>
    <?php include( dirname(__FILE__). '/includes/footer.php' ); ?>
</body>
</html>