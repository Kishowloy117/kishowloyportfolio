<?php

//
require 'class.PHPMailer.php';
require 'class.SMTP.php';
$mail=new PHPMailer(true);


$output="";
  if(isset($_POST['submit']))
  {
    require 'PHPMailerAutoload.php';

    $email = $_POST['email'];
    $subject = $_POST['sub'];
    $message = $_POST['msg'];
    $name="portfolio";
    $name=$_POST['name'];


  //  try{


    $mail->isSMTP();
    //$mail->SMTPDebug = 2;
    $mail->Debugoutput = 'html';
    $mail->Host='smtp.gmail.com';
    $mail->Port= 587;
    $mail->SMTPAuth = true;
    $mail->SMTPSecure='tls';
    $mail->Username="kishowloyportfolio@gmail.com";
    $mail->Password='universityproject';

    $mail->addAddress('Kishowloy1999@gmail.com');
    $mail->isHTML(true);
    $mail->subject=$subject;


    $mail->Body = "<h3> <br>Email : $email <br> <h3> <br>Name : $name <br> About : $subject <br> Message : $message</h3>";


    if(!empty($email))
    {
      $mail->setFrom("$email","$name");
   if($mail->send()){
     $email=null;


             //   header("Location:index.php");

           }
    }
    else {

     // header("Location:index.php");
    }


  }






    // if (!$mail->send()) {
  //  echo "Mailer Error: " . $mail->ErrorInfo;
// } else {
  //  echo "Message sent!";
    //Section 2: IMAP
    //Uncomment these to save your message in the 'Sent Mail' folder.
    #if (save_mail($mail)) {
    #    echo "Message saved!";
    #}
// }

      // $output = '<div class="alert alert-success">
      //             <h5>Thankyou! for contacting us, We\'ll get back to you soon!</h5>
      //           </div>';
      //           echo "$output";

//  }
//  catch (Exception $e) {
      // $output = '<div class="alert alert-danger">
      //             <h5>' . $e->getMessage() . '</h5>
      //           </div>';

              //  echo "$output";
//    }



 ?>
