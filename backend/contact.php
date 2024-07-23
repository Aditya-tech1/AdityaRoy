<?php

include 'connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

if ($name!='' && $email!='' && $message!='') {
    


$qry = "INSERT INTO `contact`(`Name`, `Email`, `Message`, `Time`) VALUES ('$name','$email','$message',CURRENT_TIMESTAMP())";

if(mysqli_query($conn, $qry)==true){
    echo "<script>
    alert('Your Message is Sent.');
    window.location.replace('../contact.html');
    
    </script>";
}
else{
    echo "<script>
    alert('There is some technical issue. Please mail your message to <a href='mailto:adityatech1m@gmail.com'>adityatech1m@gmail.com</a>');
    window.location.replace('../contact.html');
    
    </script>";
}
}
else {
    echo "<script>
    alert('Text Fields are empty');
    window.location.replace('../contact.html');
    
    </script>";
}
?>