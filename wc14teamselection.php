<!doctype html>

<html>
<head>
<meta charset="UTF-8"/>

<title>2014 FIFA WORLD CUP POOL</title>


<link href="css/fifa-styles.css" rel="Stylesheet"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Unna' rel='stylesheet' type='text/css'>

</head>

<body>
<div id="container">

	<header>
	<a id="top"></a>
	<img src="images/top_banner_fifa.jpg" alt="World Cup"/>
	
	</header>

	<nav>
		<ul>
			<li><a href="wc14newsfeed.html">News</a></li>
			<li><a href="wc14rules.html">Rules</a></li>
			<li><span id="active"><a href="wc14teamselection.html">Country Selection</a></span></li>
			<li><a href="wc14contestants.html">Contestants</a></li>
			<li><a href="wc14standings.html">Standings</a></li>
			<li><a href="wc14payment.html">Payment</a></li>
		</ul>
	</nav>

	<section>

		<h2>Select Your Countries</h2>
		<p>
		
<p>Prior to entering the group stage, the 32 world cup teams have been ranked and placed into four grouping: Elite, Contenders, Pretenders, Long shots. These groupings have been determined based on FIFA World Rankings and Vegas Betting Odds. </p>
<p>To enter into world cup pool, please complete the following form. Please read the rules carefully and select your world cup countries wisely. The countries you select and submit are the ones you will be following throughout the duration of the World Cup</p>

<form method="post" action="wc14teamselection.php">

<p>

<h4> Contestant Information</h4>
</p>

<p><label>Full Name:</label>
	<input type="text" name="fullname" required="required"/>
	</p>


<p><label>Display Name:</label>
	<input type="text" name="displayname" required="required"/>
	</p>

	<p><label>Email:</label>
	<input type="text" name="email" required="required"/>
	</p>


<h4>Please Select 3 World Cup Countires From Each Group</h4>
<p>
	<fieldset>
	<legend>Elite</legend>
	<label><input type="checkbox" name="elitechoices[]" value="Brazil">Brazil</label><br/>
	<label><input type="checkbox" name="elitechoices[]" value="Spain">Spain</label><br/>
	<label><input type="checkbox" name="elitechoices[]" value="Colombia">Colombia</label><br/>
	<label><input type="checkbox" name="elitechoices[]" value="Uruguay">Uruguay</label><br/>
	<label><input type="checkbox" name="elitechoices[]" value="France">France</label><br/>
	<label><input type="checkbox" name="elitechoices[]" value="Argentina">Argentina</label><br/>
	<label><input type="checkbox" name="elitechoices[]" value="Germany">Germany</label><br/>
	<label><input type="checkbox" name="elitechoices[]" value="Belgium">Belgium</label>
	</fieldset>
	</p>

<p>
	<fieldset>
	<legend>Contenders</legend>
	<label><input type="checkbox" name="contenderchoices[]" value="Croatia">Croatia</label><br/>
	<label><input type="checkbox" name="contenderchoices[]" value="Netherlands">Netherlands</label><br/>
	<label><input type="checkbox" name="contenderchoices[]" value="IvoryCoast">Ivory Coast</label><br/>
	<label><input type="checkbox" name="contenderchoices[]" value="Italy">Italy</label><br/>
	<label><input type="checkbox" name="contenderchoices[]" value="Switzerland">Switzerland</label><br/>
	<label><input type="checkbox" name="contenderchoices[]" value="Bosnia">Bosnia</label><br/>
	<label><input type="checkbox" name="contenderchoices[]" value="Portugal">Portugal</label><br/>
	<label><input type="checkbox" name="contenderchoices[]" value="Russia">Russia</label>
	</fieldset>
	</p>

<p>
	<fieldset>
	<legend>Pretenders</legend>
	<label><input type="checkbox" name="pretenderchoices[]" value="Mexico">Mexico</label><br/>
	<label><input type="checkbox" name="pretenderchoices[]" value="Chile">Chile</label><br/>
	<label><input type="checkbox" name="pretenderchoices[]" value="Japan">Japan</label><br/>
	<label><input type="checkbox" name="pretenderchoices[]" value="England">England</label><br/>
	<label><input type="checkbox" name="pretenderchoices[]" value="Ecuador">Ecuador</label><br/>
	<label><input type="checkbox" name="pretenderchoices[]" value="Nigeria">Nigeria</label><br/>
	<label><input type="checkbox" name="pretenderchoices[]" value="UnitedStates">United States</label><br/>
	<label><input type="checkbox" name="pretenderchoices[]" value="SouthKorea">South Korea</label>
	</fieldset>
	</p>

<p>
	<fieldset>
	<legend>Long Shots</legend>
	<label><input type="checkbox" name="longshotchoices[]" value="Cameroon">Cameroon</label><br/>
	<label><input type="checkbox" name="longshotchoices[]" value="Australia">Australia</label><br/>
	<label><input type="checkbox" name="longshotchoices[]" value="Greece">Greece</label><br/>
	<label><input type="checkbox" name="longshotchoices[]" value="Costa Rica">Costa Rica</label><br/>
	<label><input type="checkbox" name="longshotchoices[]" value="Honduras">Honduras</label><br/>
	<label><input type="checkbox" name="longshotchoices[]" value="Iran">Iran</label><br/>
	<label><input type="checkbox" name="longshotchoices[]" value="Ghana">Ghana</label><br/>
	<label><input type="checkbox" name="longshotchoices[]" value="Algeria">Algeria</label>
	</fieldset>
</p>

<h4>Which Country will win the 2014 FIFA WORLD CUP?</h4> 
 <div id="bonus"> (5 Point Bonus & Tie Breaker) </div>

	<p><label>World Cup Winner:</label>
	<input type="text" name="world_cup_winner" required="required"/>
	</p>



<div id="submit">
	<input type="submit" value="Send"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<input type="reset" value="Clear"/>
</div>


</form>	
<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    		$elite = implode(':', $_POST['elitechoices']);
    		$contender = implode(':', $_POST['contenderchoices']);
    		$pretender = implode(':', $_POST['pretenderchoices']);
    		$longshot = implode(':', $_POST['longshotchoices']);

            date_default_timezone_set('Etc/UTC');

            require '../PHPMailerAutoload.php';

            //Create a new PHPMailer instance
            $mail = new PHPMailer();
            //Tell PHPMailer to use SMTP
            $mail->isSMTP();
            //Enable SMTP debugging
            // 0 = off (for production use)
            // 1 = client messages
            // 2 = client and server messages
            $mail->SMTPDebug = 0;
            //Ask for HTML-friendly debug output
            $mail->Debugoutput = 'html';
            //Set the hostname of the mail server
            $mail->Host = 'smtp.gmail.com';
            //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
            $mail->Port = 587;
            //Set the encryption system to use - ssl (deprecated) or tls
            $mail->SMTPSecure = 'tls';
            //Whether to use SMTP authentication
            $mail->SMTPAuth = true;
            //Username to use for SMTP authentication - use full email address for gmail
            $mail->Username = "chartreusemediainforequest@gmail.com";
            //Password to use for SMTP authentication
            $mail->Password = "Funtree71";
            //Set who the message is to be sent from
            $mail->setFrom($_POST["email"], $_POST["fullname"]);
            //Set an alternative reply-to address
            //$mail->addReplyTo('replyto@example.com', 'First Last');
            //Set who the message is to be sent to
            $mail->addAddress("nickbownes@gmail.com", "Stanley Cup Selection");
            //Set the subject line
            $mail->Subject = 'World Cup Selections - ' . $_POST['displayname'];
            //Read an HTML message body from an external file, convert referenced images to embedded,
            //convert HTML into a basic plain-text alternative body
            $mail->msgHTML("<p>Selections from: " . $_POST["fullname"] . ", " . $_POST["displayname"] ."</p><p>Elite selections: " . $elite . "</p><p>Contender selections: " . $contender . "</p><p>Pretender selections: " . $pretender . "</p><p>Long Shot selections: " . $longshot . "</p><p>World Cup Winner: " . $_POST["world_cup_winner"] ."</p><p>Contact Email: " . $_POST["email"] . "</p>");

            //send the message, check for errors
            if (!$mail->send()) {
                echo "Mailer Error: " . $mail->ErrorInfo;
            } else {
                echo "<p>Thanks for your selections.</p>";
            }
            $_POST = array();
    }
?>
	</section>


	<footer>
		<p>&copy; 2013 &ndash; Big Guy Pools</abbr>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <a href="index.html">Pools</a>
        <a href="mailto:brkrug3@hotmail.com">Contact</a>
        
        </p>
	</footer>

</div>
</body>

</html>