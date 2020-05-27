<html>
  <head>
    <title>Google recapcha demo - Codeforgeek</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
      <script src="https://www.google.com/recaptcha/api.js?render=6LfwIo4UAAAAADauXCK0Ke_jIWNSW-z49N-IUj43"></script>
  </head>
<body onload="#captchaform">
    <h1>Google reCAPTHA Demo</h1>
    <form id="captchaform" action="secure2.php" method="post" >
	  <script>document.getElementById('captchaform').submit();</script>
      <input type="submit" name="submit" value="Post comment"><br><br>
    </form>
      <script>
       // when form is submit
    $('#captchaform').submit(function() {
        // we stoped it
        event.preventDefault();
	var email = $('#email').val();
	var comment = $("#comment").val();
        // needs for recaptacha ready
        grecaptcha.ready(function() {
            // do request for recaptcha token
            // response is promise with passed token
            grecaptcha.execute('6LfwIo4UAAAAADauXCK0Ke_jIWNSW-z49N-IUj43', {action: 'create_comment'}).then(function(token) {
                // add token to form
                $('#captchaform').prepend('<input type="hidden" name="g-recaptcha-response" value="' + token + '">');
		    $.post("secure2.php",{token: token}, function(result) {
			    console.log(result);
			    if(result.success) {
				    alert('Thanks for posting comment.')
			    } else {
				    alert('You are spammer ! Get the @$%K out.')
			    }
		    });
            });;
        });
  });
  </script>
  </body>
</html>
