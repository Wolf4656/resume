<?php include "header.php" ?>
<?php include "navbar.php" ?>
<h1>Sign In</h1>
<div class="contact" float="right">
  <form action="sign.php" method="post">
    <div class="form-group">
      <input class="input-box" type="text" name="adminName" placeholder="username">
    </div>
    <div class="form-group">
      <input class="input-box"  type="password" name="password" placeholder="password">
    </div>
    <br><input type="submit" value="Submit" name="submit">
  </form>
</div>

<?php include "footer.php" ?>
