<?php include "header.php" ?>
<br>
<div class="hidden-xs">
 <div class="contact" float="right">
  <p> Use this form to me a message. I will get back to you via your email or phone number </p>
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
      <textarea name="contact" type="text" rows="10" cols="70" placeholder="Leave your message here"></textarea>
    </div>
    <br><input type="submit" value="Submit" name="submit">
  </form>
 </div>
</div>
<div class="visible-xs">
  <div class="mobile-contact" float="right">
   <p> Use this form to me a message. I will get back to you via your email or phone number </p>
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
       <textarea name="contact" type="text" rows="10" cols="40" placeholder="Leave your message here"></textarea>
     </div>
     <br><input type="submit" value="Submit" name="submit">
   </form>
  </div>
</div>

<?php include "footer.php" ?>
