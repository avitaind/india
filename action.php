<?php $ToEmail = 'avitaind@gmail.com'; $EmailSubject = 'AVITA EDM 
Customer Feedback'; $mailheader = "From: avitaind@gmail.com\r\n"; 
$mailheader .= "Content-type: text/html; charset=iso-8859-1\r\n"; 
$MESSAGE_BODY = "Rating: ".$_POST["rating"].""; $MESSAGE_BODY .= " 
Review: ".$_POST["review"]."";
 
   if ( mail($ToEmail, $EmailSubject, $MESSAGE_BODY, $mailheader)) {
       echo'
   <script>
   window.onload = function() {
      alert("Thank You For Your Feedback");
      location.href = "https://avita-india.com/";
   }
   </script> ';
   } else {
      echo("Email sending failed.");
   }
   
   
?>
