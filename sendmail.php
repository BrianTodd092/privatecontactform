 <!DOCTYPE html>
  <head>
  <title>PHP mail script</title>
  <meta http-equiv="Content-type"
        content="text/html; charset=utf-8"/>
 </head>
 <body>
  <?php
  //3 line of code to retrieve the form data sent   "post" 
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobileno=$_POST['mobileno'];
    $comment=$_POST['comment'];
    

/*creation of the $msg variable and
 supplementally adding  details to it.*/
    $msg="EMAIL SENT FROM WEBSITE:\r\n " ;
    $msg.="Sender Name: $name\r\n ";
    $msg.="Sender E-mail: $email\r\n ";
    $msg.="Moblie No: $mobileno\r\n ";
    $msg.="Comment: $comment\r\n ";
    

    $to="Enter E.mail Address Here";   //were the email  sent to.
    $subject="web Site Feedback";   // subject should the email display
    $mailheaders="From: $email\r\n";  // email of the sender


    $formsent=mail($to, $subject, $msg, $mailheaders); //send the email
    if ($formsent)
     {
      echo "<p style= 'background-color:green;color:white;'> Form Recieved</p>";
     }
     else
     {
      echo "<p style='color:red;'> The form has not been sent !</p>";
     }
     ?>


    <p>Detail of form!<br />
       <?php
       echo  $msg;
       ?>

       </p>
   <p><a href="index.html">go back</a></p>

 </body>
</html>
