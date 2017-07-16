<?php include "header.php" ?>
<?php include "navbar.php" ?>
<body>

<h1> Contact Us </h1>

<div class="contact" float="right">
  <p> Use this form to leave us a message. We will get back to you via your email or phone number </p>
  <form action="contact-us.php" method="post">
    <div class="form-group">
      <input class="input-box" type="text" name="name" placeholder="Name">
    </div>
    <div class="form-group">
      <input class="input-box"  type="text" name="phoneNumber" placeholder="Phone Number">
    </div>
    <div class="form-group">
      <input class="input-box"  type="text" name="email" placeholder="E-Mail">
    </div>
    <div class="form-group">
      <textarea name="contact" type="text" rows="30" cols="70"></textarea>
    </div>
    <br><input type="submit" value="Submit" name="submit">
  </form>
</div>


</body>
<?php include "footer.php" ?>
