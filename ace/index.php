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
	<body id="toppage">
<?php include('includes/header.php'); ?>
    <section id="slideshow">
	<img src="http://kanaenakamine.work/ace/css/img/1.jpg" alt="bike" class="visible-xs-block img-responsive">
    <div class="swiper-container hidden-xs">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="http://kanaenakamine.work/ace/css/img/1.jpg" alt="bike"></div>
            <div class="swiper-slide"><img src="http://kanaenakamine.work/ace/css/img/2.jpg" alt="run"></div>
            <div class="swiper-slide"><img src="http://kanaenakamine.work/ace/css/img/3.jpg" alt="swim"></div>
        </div>
        <div class="swiper-pagination"></div>
        <!-- Swiper JS -->
        <script src="js/swiper.min.js"></script>
        <!-- Initialize Swiper -->
        <script>
            var swiper = new Swiper('.swiper-container', {
                pagination: '.swiper-pagination',
                paginationClickable: true,
                autoplay: 3000
            });
        </script>
    </div>
		</section>
	<main>
        <section id="about">
            <h2>About the Event</h2>
            <p>The Annual Ace in the Hole MultiSport Weekend is a legendary event in the Oregon triathlon and running community. It has become a traditional destination race for athletes from across the nation.
                <br>
				<br>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
        </section>

        <section id="schedule">
            <h2>Starting Times</h2>
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <table>
						<tr>
                        <th colspan="2">July 16th Saturday</th></tr>
                        <tr>
                            <td>Long Course</td>
                            <td>7:00 AM</td>
                        </tr>
                        <tr>
                            <td>Olympic</td>
                            <td>7:30 AM</td>
                        </tr>
                        <tr>
                            <td>10K</td>
                            <td>7:15 AM</td>
                        </tr>
                        <tr>
                            <td>Half Marathon</td>
                            <td>7:15 AM</td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-sm-6">
                    <table>
						<tr>
                        <th colspan="2">July 17th Sunday</th>
                        </tr>
						<tr>
                            <td>Sprint</td>
                            <td>8:00 AM</td>
                        </tr>
                        <tr>
                            <td>Try-a-Tri</td>
                            <td>8:20 AM</td>
                        </tr>
                        <tr>
                            <td>Splash n Dash</td>
                            <td>12:00 PM</td>
                        </tr>
                    </table>
                </div>
            </div>
        </section>

        <section id="location">

            <h2>Location</h2>

            <p>Hagg Lake in Forest Grove, Oregon
                <br>
                <a href="https://goo.gl/maps/6xAY9u6p5vK2">See in Google Map</a></p>

        </section>

        <section id="feed">
			<h2>Check us on social media!</h2>
		<div class="row">
			<div class="col-xs-12 col-sm-6" id="facebook">
				<a href="https://www.facebook.com/cas222cascade/"><h3>Facebook</h3></a>
				<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fcas222cascade%2F&tabs=timeline&width=300&height=500&small_header=true&adapt_container_width=true&hide_cover=true&show_facepile=true&appId" width="300" height="500" style="border:none;overflow:hidden"></iframe>
			</div>

		<div class="hidden-xs col-sm-offset-1 col-sm-5" id="twitter">
			<a href="https://twitter.com/search?q=%23aceintheholemultisport&src=typd"><h3>Tweets with #aceintheholemultisport</h3></a>
			                        <a class="twitter-timeline"  href="https://twitter.com/hashtag/aceintheholemultisport" data-chrome="noheader no footer" data-widget-id="868650462135721984">#aceintheholemultisport のツイート</a>
            <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
          
			</div>
			</div>

        </section>
		</main>
	     <?php include( 'includes/footer.php' ); ?>
		</body>
</html>