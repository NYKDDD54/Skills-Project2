<?php
include 'header.php';
?>
<h3>Lost Password</h3>
<hr class='line'>
<form method="post" action="send-email.php">
    Enter your email address: <input type="email" name="Email" placeholder="Email" value="" required style="width:250px">
    <input type="hidden" name="emailType" value="lostPassword">
    <button type="submit" name="sumbit">Submit</button>
</form>
<?php
include 'footer.php'
?>