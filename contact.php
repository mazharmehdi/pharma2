
 <?php 
//  $name = $_REQUEST ["c_fname"]; 
//  $lname = $_REQUEST ["c_lname"];
//  $email = $_REQUEST ["c_email"];
//  $message = $_REQUEST ["c_message"];

// if (empty($name) || empty($lname) || empty($email) ||empty($message)  )

// {   
//     echo "Please fill the empty fields"; 
// }

 
// else
// { 
//     mail("mazhar.mehdi5@gmail.com", "IPL Website", "$message" ,"From: $name <$email> ");
//     echo "<script type = 'text/javascript'>
//             alert('Your message sent succesfully');
//           </script>";

// }


// if(!empty($_POST["send"])) {
//     $name = $_POST["c_fname"];
// 	$email = $_POST["c_email"];
// 	$subject = $_POST["c_lname"];
// 	$content = $_POST["c_message"];

// 	$toEmail = "mazhar.mehdi5@gmail.com";
// 	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
// 	if(mail($toEmail, $subject, $content, $mailHeaders)) {
// 	    $message = "Your contact information is received successfully.";
// 	    $type = "success";
// 	}
// }






if(!empty($_POST["send"])) {
	$name = $_POST["userName"];
	$email = $_POST["userEmail"];
	$subject = $_POST["subject"];
	$content = $_POST["content"];

	$toEmail = "mazhar.mehdi5@gmail.com";
	$mailHeaders = "From: " . $name . "<". $email .">\r\n";
	if(mail($toEmail, $subject, $content, $mailHeaders)) {
	    $message = "Your contact information is received successfully.";
	    $type = "success";
	}
}
require_once "contact-view.php";





?> 


