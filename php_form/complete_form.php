<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>PHP Form validation</title>
  <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
<section id="feedback">
    <div class="container">
      <div class="row">
        <h1 style="margin-top: 0">Feedback form:</h1>
        <h4>Note: Once you fill the form, the fields will get prefilled unless you overwrite your previous input.</h4>
        <h4 style="color:red">required fields * </h4>
        <div>
        <?php 
        $nameErr = $emailErr = $subjectErr = $messageErr = " ";        //variables to store error messages if required fields are not filled
        $name = $email = $subject = $message = " ";                     //variables to store user input

        if($_SERVER["REQUEST_METHOD"] == "POST"){
        	if (empty($_POST["name"])) {
		    $nameErr = "Name is required";
		  } else {
		    $name = test_input($_POST["name"]);
		    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		      $nameErr = "Only letters and white space allowed";
		    }
		  }
		  
		  if (empty($_POST["email"])) {
		    $emailErr = "Email is required";
		  } else {
		    $email = test_input($_POST["email"]);
		    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		      $emailErr = "Invalid email format";
		    }
		  }

		  if (empty($_POST["subject"])) {
		    $subjectErr = "Subject is required";
		  } else {
		    $subject = test_input($_POST["subject"]);
		  }

		  if (empty($_POST["message"])) {
		    $messageErr = "";
		  } else {
		    $message = test_input($_POST["message"]);
		  }
        }

        function test_input($data) {
		  $data = trim($data);
		  $data = stripslashes($data);
		  $data = htmlspecialchars($data);                                            //to prevent cross site scripting
		  return $data;
		}
		?>

		<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="feedback" method="post">
              <div class="input-group">
                <span class="input-group-addon"></span>
                <h3>Name: *</h3> <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
                <p class="text-primary"><?php echo "$nameErr";?></p>	
              </div>
              <div class="input-group">
                <span class="input-group-addon"></span>
                <h3>Email: *</h3><input type="email" name="email" class="form-control" value="<?php echo $email;?>"> 
                <p class="text-primary"><?php echo "$emailErr";?></p>
              </div>
              <div class="input-group">
                <span class="input-group-addon"></span>
                <h3>Subject: *</h3><input type="text" name="subject" class="form-control" value="<?php echo $subject;?>"> 
                <p class="text-primary"><?php echo "$subjectErr";?></p>
              </div>
              <div class="input-group">
                <span class="input-group-addon"></span>
                <h3>Message:</h3><textarea name="message" class="form-control large" value="<?php echo $message;?>"></textarea> 
                <p class="text-primary"><?php echo "$messageErr";?></p>
              </div>
              <button name="submit" type="submit" class="btn btn-green" value="Submit">Send</button><button type="reset" class="btn btn-green"  value="clear">Clear</button>
            </form>

            <?php
            	if (!isset($_POST['submit'])){
          			echo "<h2>Your Input:</h2>";
          			echo "Name:<h4>$name<h4>";
          			echo "<br>";
          			echo "Email:<h4>$email<h4>";
          			echo "<br>";
          			echo "Subject:<h4>$subject<h4>";
          			echo "<br>";
          			echo "Message:<h4>$message<h4>";
          			echo "<br>";
          		}
          	?>
      </div>
    </div>
  </div>
</section>
</body>
</html>
