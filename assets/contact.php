<? php
  if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $senderEmail = $_POST['email'];
    $message = $_POST['message'];
    
    $myEmail = "heng.sun@vanderbilt.edu";
    $headers = "Sending from my website: ".$senderEmail;
    $txt = "A message is received from ".$name.".\n\n".$message;
    
    mail(myEmail, $subject, $txt, $headers);
    header("Location: index.html?mailsend");
  }
