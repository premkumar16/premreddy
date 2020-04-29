<?php
header('location: Contact.html')
// define variables and set to empty values
$NameErr = $EmailErr = $NumberErr = $AgeErr = $CityErr = $CountryErr = $About YouErr = $GoalsErr = "";
$Name = $Email = $Number = $Age = $City = $Country = $About you = $Goals"";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["Name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["Name"]);
  }

  if (empty($_POST["Email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["Email"]);
  }

  if (empty($_POST["Number"])) {
    $mobilenumberErr = "Mobile Number is Required";
  } else {
    $website = test_input($_POST["Number"]);
  }

  if (empty($_POST["Age"])) {
    $ageErr = "Age is required";
  } else {
    $comment = test_input($_POST["Age"]);
  }

  if (empty($_POST["City"])) {
    $TownCityErr = "City Name is required";
  } else {
    $gender = test_input($_POST["City"]);
  }

	if (empty($_POST["Country"])) {
    $CountryErr = "City Name is required";
  } else {
    $gender = test_input($_POST["Country"]);
  }

	if (empty($_POST["About You"])) {
    $aboutyouErr = "About you is Required";
  } else {
    $gender = test_input($_POST["About You"]);
  }

	if (empty($_POST["Goals"])) {
    $goalsErr = "goals and dreams are required";
  } else {
    $gender = test_input($_POST["Goals"]);
  }
}



	$Name = $_POST["Name"];
	$Email = $_POST["Email"];
	$Number = $_POST["Number"];
	$Age = $_POST["Age"];
  $City = $_POST["City"];
  $Country = $_POST["Country"];
  $About = $_POST["About You"];
  $Goals = $_POST["Goals"];

  $email_from = 'premkumarreddy528@gmail.com';

  $email_subject = 'New Form Submission';
  $email_body = "Name:$Name.\n".
                "Email:$Email.\n".
                "Number: $Number.\n".
                "Age: $Age.\n".
                "City: $City.\n".
                "Country: $Country.\n".
                "About You: $About.\n".
                "Goals: $Goals.\n";

	$to = "premkumarreddy16@gmail.com";
	$mailHeaders = "From: " . $Name . "<". $email_from .">\r\n";

  <form action="Contact.php" method="post">
  <input type="submit" name="submit" id="submit" class="button" value="Submit"/>
</form>

  $headers = "Reply-To: $visitor_email\r\n";
  mail($to,$email_subject,$email_body,$headers)
{
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}

?>
