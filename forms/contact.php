<html>
   
   <head>
      <title>Sending HTML email using PHP</title>
   </head>
   
   <body>
      
      <?php
         $to = "info@rumaretreat.org";
         $subject = $_POST['name'];
         
         $message = $_POST['message'];
         
         $header = $_POST['email']
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
          // header("Location: about.html")
            echo "Message sent successfully...";
         }else {
            echo "Message could not be sent...";
         }
      ?>
      
   </body>
</html>