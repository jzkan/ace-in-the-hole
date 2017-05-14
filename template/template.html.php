<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Slideshow -->
    <link href="css/swiper.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- CSS and Google font -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
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
	<?php include( dirname(__FILE__).'/php/header.php' ); ?>
	<main>
        <section>
            <h2>h2 h2 h2</h2>
            <p>Lorem ipsum dolor sit amet, <a>consectetur adipiscing</a> elit. Nullam at rhoncus dolor. Cras id urna dictum, aliquet magna nec, auctor ligula. Curabitur tempor magna pharetra elit imperdiet, in dapibus ligula ultricies. Vestibulum elementum ante quis mattis egestas. Suspendisse eget consectetur nisi. Aliquam id nisi diam. Aenean fringilla sollicitudin lectus, condimentum ultricies neque sodales eu. Suspendisse ac felis molestie, tincidunt dolor et, scelerisque turpis.</p>
        </section>

        <section>
            <h2>h2 h2 h2</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <table>
                        <tr><th colspan="2">table head</th>
						</tr>
                        <tr>
                            <td>Lorem ipsum</td>
                            <td>Lorem ipsum</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum</td>
                            <td>Lorem ipsum</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum</td>
                            <td>Lorem ipsum</td>
                        </tr>
                        <tr>
                            <td>Lorem ipsum</td>
                            <td>Lorem ipsum</td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6">
                              <p>Lorem ipsum dolor sit amet, <a>consectetur adipiscing</a> elit. Nullam at rhoncus dolor. Cras id urna dictum, aliquet magna nec, auctor ligula. Curabitur tempor magna pharetra elit imperdiet, in dapibus ligula ultricies. Vestibulum elementum ante quis mattis egestas. Suspendisse eget consectetur nisi.</p>
                </div>
            </div>
        </section>
		</main>
			<?php include( dirname(__FILE__).'/php/footer.php' ); ?>
		</body>
</html>