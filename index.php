<?php
	include 'includes/session.php';
	include 'includes/dbConnect.php';
?>
<!DOCTYPE html>
<html>
	
    <?php
		include 'includes/header.php';
    ?>
	
	<script type="text/javascript">
		$('#container img').hide();
		
		var isFirstIteration = true;
		
		function roll() {
			$("#container img").first().appendTo('#container').fadeOut(5000);
			$("#container img").first().fadeIn(5000);
			
			if (isFirstIteration){
				isFirstIteration = false;
				setTimeout(roll, 5000);
			}
			else {
				setTimeout(roll, 10000);
			}
		}
		roll();
	</script>
    <body>
        <div class="cover">
		
            <?php
				include 'includes/navigationBar.php';
            ?>
			
			<div id="container">
				<img src="assets/images/Agreement.jpg" class="cover-image">
				<img src="https://s3.amazonaws.com/StartupStockPhotos/uploads/38.jpg" class="cover-image" style="display: none;">
				<img src="https://unsplash.imgix.net/photo-1422405153578-4bd676b19036?q=75&amp;fm=jpg&amp;s=5ecc4c704ea97d85ea550f84a1499228" class="cover-image" style="display: none;">
			</div>
            <div class="container color-box">
                <div class="row">
                    <div class="col-md-12 text-center">

                        <p align="center"><img src="assets/images/logo.png" class="img-responsive"></p>

                        <p class="">Organising meetings, redefined.</p>
                        <br>
                        <br>
                        
                    </div>
                    <div class="col-md-12 text-center">
                        <a href="login.php"><p class="custom-btn3 hvr-grow-shadow hvr-grow-shadow">Login</p></a>
                        <span> &nbsp &nbsp </span>
                        <a href="signUp.php"><p class="custom-btn3 hvr-grow-shadow hvr-grow-shadow">Sign Up</p></a> <br>
                        <button type="button" class="custom-btn3 hvr-grow-shadow hvr-grow-shadow">Know more...</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="section main-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-right close">
                        <span class="glyphicon glyphicon-remove close-button hvr-pulse-grow" ></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="assets/images/thumb1.jpg" class="img-responsive">
                        <h4 class="text-center">Create a meeting</h4>
                        <p class="text-center">Simply create a new meeting through your dashboard and select the timeslots you are available in.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/thumb2.jpg" class="img-responsive">

                        <h4 contenteditable="true" class="text-center">Invite your friends</h4>

                        <p class="text-center">Invite your friends and colleagues you want to meet up with to let them select their favoured timeslots.</p>
                    </div>
                    <div class="col-md-4">
                        <img src="assets/images/thumb3.jpg" class="img-responsive">

                        <h4 class="text-center">Let us do the rest!</h4>

                        <p class="text-center">Friendezvous will immediately work out the best time and place for all
                            of you to meet.<br> Yes, it's that simple!</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a href="login.php"><p class="custom-btn3 hvr-grow-shadow hvr-grow-shadow">Login</p></a>
                        <span> &nbsp &nbsp </span>
                        <a href="signUp.php"><p class="custom-btn3 hvr-grow-shadow hvr-grow-shadow">Sign Up</p></a>
                    </div>
                </div>
            </div>
        </div>
		
        <?php
			include 'includes/footer.php';
        ?>
    </body>
</html>