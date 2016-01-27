<?php
  var_dump($_GET);
  var_dump($_POST);
?>

<!DOCTYPE html>

	<html>
		
		<head>
			<title>My First HMTL Form</title>

			<link rel="stylesheet" type="text/css" href="/css/test.css">
		</head>
		
		<body>
			<main>
				
				<section class="user_login">
					<!-- User Login form -->
			
					<h4>User Login</h4>
						<form method="POST" action="/my_first_form.php">
							 <p>
						        <label for="username">Username</label>
						        <input id="username" name="username" type="text" placeholder="Username">
						 	 </p>
						 	 
						 	 <p>	
						        <label for="password">Password</label>
						        <input id="password" name="password" type="password" placeholder="Password">
						 	 </p>
				         	 
				         	 <p>
							    <button type="submit">Log In</button>
							 </p>
						</form>
				</section>

			<br>
			<br>

			
			<section class="compose_an_email">
				<!-- Compose an email form -->

				<h4>Compose an Email</h4>
					<form method="POST" action="/my_first_form.php">
						<p>
							<label for="to">To</label>
							<input id="to" name="to" type="text">
						</p>

						
						<p>
							<label for="from">From</label>
							<input id="from" name="from" type="text">
						</p>

						
						<p>
							<label for="subject">Subject</label>
							<input id="subject" name="subject" type="text">
						</p>

						
						<p>
							<textarea id="body" name="body" rows="10" cols="40"></textarea>
						</p>

						
						<p>							<!-- Email save check -->
														
							<label for="save_copy">Would you like to save a copy of your email to your sent folder?</label>
							<input type="checkbox" id="save_copy" name="save_copy" checked>
							
							<br>
							
							<button type="submit">Send</button>
						</p>
					</form>
			</section>

			<br>
			<br>

			
				<section class="multiple_choice_test_form">
						<!-- Multiple choice test form -->

					<h4>Multiple Choice Test</h4>
						<form method="POST" action="/my_first_form.php">
							
							<!-- first question -->
							<p>How many sides does a trianle have?</p>

								<label for="2">2</label>
								<input type="radio" name="triangle" id="2" value="2">
							
								<br>
								<br>

								<label for="3">3</label>
								<input type="radio" name="triangle" id="3" value="3">
							
								<br>
								<br>

								<label for="4">4</label>
								<input type="radio" name="triangle" id="4" value="4">

								<br>
								<br>

								<label for="5">5</label>
								<input type="radio" name="triangle" id="5" value="5">

								<br>
								<br>
								<br>

							<!-- second question -->
							<p>What is your favorite operating system?</p>

								<label for="windows">Windows</label>
								<input type="radio" name="os" id="windows" value="windows">
							
								<br>
								<br>

								<label for="mac">How do you Mac...</label>
								<input type="radio" name="os" id="mac" value="mac">
							
								<br>
								<br>

								<label for="linux">Linux systems</label>
								<input type="radio" name="os" id="linux" value="linux">

								<br>
								<br>
								<br>

							<!-- multiple checkbox -->
							<p>Check all that apply.</p>
								
								<label for="dogs">Dogs</label>
								<input type="checkbox" name="pets[]" id="dogs" value="dogs">

								<br>
								<br>

								<label for="cats">Cats</label>
								<input type="checkbox" name="pets[]" id="cats" value="cats">

								<br>
								<br>

								<label for="turtles">Turtles</label>
								<input type="checkbox" name="pets[]" id="turtles" value="turtles">

								<br>
								<br>

								<label for="fish">Fish</label>
								<input type="checkbox" name="pets[]" id="fish" value="fish">

								<br>
								<br>
								<br>				<!-- Multiple select drop-down menu -->
								<br>

								<label for="multiple">Also check all here that apply</label>
								<select multiple id="multiple" name="multiple[]">
									
									<option>12</option>
									
									<option>76</option>
									
									<option>500</option>
								
								</select>

								<br>

								<button type="submit">Submit</button>
						</form>
					</section>

			<br>
			<br>

			<section class="yes_or_no">
				<!-- Yes or No -->
				<h4>Select Testing</h4>
					<form method="POST" action="/my_first_form.php">
						
						<label for="exist">Do you exist?</label>
							<br>
						<select id="exist" name="exist">
							
							<option selected value="1">Yes</option>
							
							<option value="0">No</option>
						</select>

						<button type="submit">Submit</button>
					</form>
				</section>
			
			</main>
		</body>
		
	</html> 