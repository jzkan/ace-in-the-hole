<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Ace in the Hole MultiSport Weekend - Register Now!</title>
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
		<script>
$(function(){
    var id = $("body").attr("id");
    $("#navigation ul li."+id).addClass("current");
});
</script>
</head>
<?php include('../includes/header.php' ); ?>
<body id="registernow">
    <main>
        <section id="registration">
			<h2>Register Now!</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-5">
                    <table>
                        <tr>
                            <th colspan="2">Registration Fee</th>
                        </tr>
                        <tr>
                            <td>Long Course</td>
                            <td>$240</td>
                        </tr>
                        <tr>
                            <td>Olympic</td>
                            <td>$110</td>
                        </tr>
                        <tr>
                            <td>10K</td>
                            <td>$50</td>
                        </tr>
                        <tr>
                            <td>Half Marathon</td>
                            <td>$75</td>
                        </tr>
                        <tr>
                            <td>Sprint</td>
                            <td>$90</td>
                        </tr>
                        <tr>
                            <td>Try-a-Tri</td>
                            <td>$65</td>
                        </tr>
                    </table>

                </div>
                <div class="col-xs-12 col-sm-offset-1 col-sm-6">
                    <h3>Cost Includes...</h3>
						<ul>
							<li>Food &amp; Beer </li>
							<li>Access to the weekendís live entertainment &amp; Fitness Expo</li>
							<li>Commemorative Finisher medal</li>
							<li>Accurate Chip Timing for competitive races</li>
							<li>Ace in the Hole MultiSport Weekend Tech Shirt</li>
							<li>Post-event party &amp; entertainment</li></ul>

					<p class="warning">NOTE: Tech shirts guaranteed to pre-registered participants only.</p>
                </div>
            </div>
        </section>
        <section id="registrationform">
			<h2>Registration Form</h2>
            <form action="confirmation.php" method="POST">
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<label for="firstname">First Name</label>
		</div>
		<div class="col-xs-12 col-sm-8">
                            <input type="text" name="firstname" id="firstname" required>
		</div>
	</div>
		<div class="row">
		<div class="col-xs-12 col-sm-4">
                            <label for="lastname">Last Name</label>
			</div>
			<div class="col-xs-12 col-sm-8">
                            <input type="text" name="lastname" id="lastname" required>
			</div>
	</div>
			<div class="row">
		<div class="col-xs-12 col-sm-4">
                            <label for="email">Email Address</label>
				</div>
				<div class="col-xs-12 col-sm-8">
                            <input type="email" name="email" id="email" required>
				</div>
	</div>
<div class="row">
		<div class="col-xs-12">
                            <label for="event1">Event(s) You're Interested In</label>
		<span class="warning">* Select at least one from either day.</span>
	</div>
		<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1 col-md-offset-3 col-md-6 col-md-offset-3">		
		<p class="date">— July 16th (Sat) —</p>
		<select id="event1" name="event1"><optgroup label="Saturday">
                                <option>Long Course</option>
                                <option>Olympic</option>
                                <option>10K</option>
                                <option>Half Marathon</option>
			<option>None</option>
			</optgroup>
                            </select>
	</div>
				</div>
	<div class="row">
		<div id="hidden">
                            <label for="event2">SUN</label>
		</div>
		<div class="col-xs-offset-1 col-xs-10 col-xs-offset-1 col-md-offset-3 col-md-6 col-md-offset-3">
			<p class="date">— July 17th (Sun) —</p>
                            <select id="event2" name="event2">
								<optgroup label="Sunday">
                                <option>Sprint</option>
                                <option>Try-a-Tri</option>
                                <option>Splash n Dash</option>
									<option>None</option>
								</optgroup>
                            </select>
			</div>
	</div>
                <input class="button" type="submit" value="Submit">
            </form>
        </section>
    </main><?php include( '../includes/footer.php'); ?>
</body>

</html>