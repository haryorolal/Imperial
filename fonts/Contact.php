

<?php
	
	
	 if(isset($_POST['name']) && isset($_POST['address']) && isset($_POST['zip']) && isset($_POST['phone']) && isset($_POST['fax']) && isset($_POST['email']) ){
    if(!empty($_POST['name']) && !empty($_POST['address']) && !empty($_POST['zip']) && !empty($_POST['phone']) && !empty($_POST['fax']) && !empty($_POST['email'])){
        $name = $_POST['name'];
        $address = $_POST['address'];
        $zip = $_POST['zip'];
        $phone = $_POST['phone'];
        $fax = $_POST['fax'];
		$email = $_POST['email'];
		$message = $_POST['message'];
		
        
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "Kindly provide valid email";
        }else{
            $body = $name."\n".$email."\n".$phone."\n".$message;
            if(mail('haryorolal2@gmail.com', 'Website Response', $body, 'From: response@mywebsite.com')){
				header("location:http://www.imperialscienceacademy.com.ng/contact.html");
				//header("location:http://localhost/Projects/imperial/fonts/contact.html");
               				
            }else{
                echo "There is a problem in sending mail.";
            }
        }
    } else{
        echo "All fields are required.";
    }
}else{
    echo "Not ok";
}

?>



<?php
    //conection to database
 $connection = mysqli_connect('Cowbird', 'imperi12_Admin', 'zp4*9$+*;Tzv');
//$connection = mysqli_connect('localhost', 'root', '');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
if(empty($name)){
	$error_msg[]="Enter your name";
}
if(empty($address)){
	$error_msg[]="Enter your address";
}
if(empty($zip)){
	$error_msg[]="Enter your zip code";
}
if(empty($phone)){
	$error_msg[]="Enter your phone number";
}
if(empty($name)){
	$error_msg[]="Enter your name";
}
if(empty($email)){
	$error_msg[]="Enter your email";
}
if(empty($message)){
	$error_msg[]="Enter your message";
}
$select_db = mysqli_select_db($connection, 'imperi12_imperial');
if (!$select_db){
    die("Failed to connect to database" . mysqli_error($connection));
}
if(count($error_msg)== 0){
$query = "INSERT INTO `imperial_contactdb` (name, address, zip, phone, fax, email, message) VALUES ('$name', '$address', '$zip', '$phone','$fax', '$email', '$message')";
$result = mysqli_query($connection, $query);
if($result){
 echo "Your message is sent successfully";
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
mysqli_close($connection);
}else{
	echo "text box are empty, please return to <a href='contact.html'>Contact form</a>";
}
?>


