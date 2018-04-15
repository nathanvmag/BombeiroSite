<?php  

if (isset($_POST['name'])&&isset($_POST['email'])){

	$name = $_POST['name'];

	$email= $_POST['email'];	

	$from = $email;

    $to = "rjmimoveismp@gmail.com";

    $subject = "Contato de ".$name;

    $message = "\r\n" ."O email ".$email." quer contactar a empresa";

    $headers = "From:" . $from;

    mail($to,$subject,$message, $headers);

    echo "The email message was sent.";




echo "<script>window.location = 'index.html' </script>";


}

else echo "erro";

  ini_set( 'display_errors', 1 );

    error_reporting( E_ALL );

   

?>