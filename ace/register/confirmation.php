<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend - Confirmation</title>
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
        <section id="confirmation">
            <h2>Confirmation</h2>

            <?php
			
//			try{$pdo=new PDO( 'mysql:host=localhost;dbname=ace', 'root', '1234');
		
			try {$pdo=new PDO( 'mysql:host=localhost;dbname=kanaenak_ace', 'kanaenak_ace', 'student07mypassword');
				 
				 
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->exec('SET NAMES "utf8"');

            }
            catch (PDOException $e)
                {
                    $error = 'Unable to connect to the database server.';
                    include 'error.html.php'; exit();
                }

            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $event1 = $_POST['event1'];
            $event2 = $_POST['event2'];

            echo '<table><tr><td>First Name</td><td>' . $firstname . '</td></tr>';
            echo '<tr><td>Last Name</td><td>' . $lastname . '</td></tr>';
            echo '<tr><td>Email Address</td><td>' . $email . '</td></tr>';
            echo '<tr><td>Event(s) You\'re Interested In</td><td>DAY1 — ' . $event1 . '<br>DAY2 — ' . $event2 . '</td></tr></table>';
            echo '<form action="thankyou.php" method="post">' . "\n";
            echo '<input type="hidden" name="firstname" value="' . $firstname . '">';
            echo '<input type="hidden" name="lastname" value="' . $lastname . '">';
            echo '<input type="hidden" name="email" value="' . $email . '">';
            echo '<input type="hidden" name="event1" value="' . $event1 . '">';
            echo '<input type="hidden" name="event2" value="' . $event2 . '">';
			echo '<p><a href="register.html.php">&lt;&lt; Back To Form</a></p>';
            echo '<input type="submit" class="button"  value="Confirm ">' . "\n";
            echo '</form>';

            if( $_POST )
            {
                $sql = "INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `event1`, `event2`) VALUES (NULL, ?, ?, ?, ?, ?)";
            $stmt = $pdo->prepare($sql);
            $stmt->bindValue(1, $firstname, PDO::PARAM_STR);
            $stmt->bindValue(2, $lastname, PDO::PARAM_STR);
            $stmt->bindValue(3, $email, PDO::PARAM_STR);
            $stmt->bindValue(4, $event1, PDO::PARAM_STR);
            $stmt->bindValue(5, $event2, PDO::PARAM_STR);
            $stmt->execute();
            $dbh = null;
            }

            ?>

        </section>
    </main>
    <?php include( '../includes/footer.php' ); ?>
</body>
</html>