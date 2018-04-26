<?php
ini_set('display_errors',1);
ini_set('display_startup_errors',1);
error_reporting (E_ALL);
?>
<?php
echo "Hello World!";
?>
<?php 


echo '
<form name="contact-form" method="post" action="contact.html">
  <p>
    <label>
      <input type="text" name="textfield" id="textfield">
    </label>
  </p>
  Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>
  <p>
    <label>
      <input type="submit" name="button" id="button" value="Submit">
    </label>
  </p>
</form>';

  if( $_POST["name"] || $_POST["age"] )
  {
     echo "Welcome ". $_POST['name']. "<br />";
     echo "You are ". $_POST['age']. " years old.";
     exit();
  }


  <form action="contact.html>" method="POST">

  Name: <input type="text" name="name" />
  Age: <input type="text" name="age" />

  <input type="submit" />
  </form>
  

                if (isset($_REQUEST['contactform']))
                {
                    echo $name = $_REQUEST['name'];
                    echo $email = $_REQUEST['email'];
                    echo $subject = $_REQUEST['subject'];
                    echo $message = $_REQUEST['body'];
                }
			
?>



<?php
if ( isset ($_POST['submit'])) {  // Check for each form value when the form is submitted:
$problem = FALSE; // no problems!
if ( empty ($_POST['firstName'])) {    // alert the user that they forgot to fill in "First Name"
$problem = TRUE;
print ("<p>You forgot to fill in your <b>"First Name"</b>.</p>");
}
if ( empty ($_POST['lastName']))  {    // alert the user that they forgot to fill in "Last Name"
$problem = TRUE;
print ("<p>You forgot to fill in your <b>"Last Name"</b>.</p>");
}
if ( empty ($_POST['company'])) {    // alert the user that they forgot to fill in "Company"
$problem = TRUE;
print ("<p>You forgot to fill in your <b>"Company"</b>.</p>");
}
if ( empty ($_POST['email']))  {    // alert the user that they forgot to fill in "Email Address"
$problem = TRUE;
print ("<p>You forgot to fill in your <b>"Email Address"</b>.</p>");
}
if ( empty ($_POST['message']))  {    // alert the user that they forgot to fill in "Message"
$problem = TRUE;
print ("<p>You forgot to fill in your <b>"Message"</b>.</p>");
}
if (!$problem) { // if there are no problems:
print ("<p>Thank You for contacting Premium Design Works, <b>{$_POST['firstName']}</b>!</p>\n"); // Thank the user.
$mailMesage =  ("{$_POST['firstName']} {$_POST['lastName']} {$_POST['email']} from {$_POST['company']} wrote: \n\n{$_POST['message']}"); // message of the email.
$mailSubject = "{$_POST['subject']}"; // subject of the email.
mail ('v3x0@aim.com', $mailSubject , $mailMesage); // Send the email.
}
}
// This is the ACTUAL FORM!
print '
<form name="contactForm" method="post" action="contact.php">
<h2>First Name:</h2>
<p><input name="firstName" type="text" id="firstName" size="30" value="' . $_POST['firstName'] . '" /></p>
<h2>Last Name:</h2>
<p><input name="lastName" type="text" id="lastName" size="30" value="' . $_POST['lastName'] . '" /></p>
<h2>Company:</h2>
<p><input name="company" type="text" id="company" size="30" value="' . $_POST['company'] . '" /></p>
<h2>Email:</h2>
<p><input name="email" type="text" id="email" size="30" value="' . $_POST['email'] . '" /></p>
<h2>Subject:</h2>
<p><select name="subject">
<option value="General Inquiry">General Inquiry</option>
<option value="Subject Two">Subject Two</option>
<option value="Subject Three">Subject Three</option>
</select></p>
<h2>Message:</h2>
<p><textarea name="message" cols="40" rows="15" value="' . $_POST['message'] . '"></textarea></p>
<p><input type="submit" name="submit" value="send" /></p>
</form>
';
?>
<?php
function isEmail($email){
if(preg_match("/^(\w+((-\w+)|(\w.\w+))*)\@(\w+((\.|-)\w+)*\.\w+$)/",$email)){
return true;
}
else {
return false;
}
}
 
if( isEmail($_POST['email']) ) {
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'] . "\r\n\r\n-- \r\n$name";
$datetime = date("Y-m-d H:i:s");
$your_email = 'FILL IN YOUR EMAIL';
$subject = 'Comment from HTML-form: ' . substr($comment, 0, 15) . '...';
}
if( mail ($your_email, $subject, $comment, "From: $email")){
header("Location: contact.html"); //Here, you can replace contact.html with another page that will say "Thank you for your feedback or something like that.
}
else {
echo "Something messed up! I'm sorry! =( <br> Here are the data you sent to this page. Send it to me in an email at $your_email, and I'll answer you. =)<br><br>Name: $name<br>E-mail: $email<br>Comment:<br>$comment";
}
?>