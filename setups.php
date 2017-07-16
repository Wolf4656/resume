<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "select.php" ?>
<?php $result = Select::setups(); ?>

<h1> Set-ups </h1>

<div class="squish2">
  <form method="get" action="search-setups.php">
    <table cellpadding="0px" cellspacing="0px">
    <tr>
      <td style="border-style:none none none none;border-color:#4B7B9F;border-width:1px;">
        <input type="text" name="query" style="width:100px; border:0px solid; height:17px; position:relative;">
      </td>
      <td style="border-style:none none none none; border-color:#4B7B9F;border-width:1px;">
        <input type="submit" value="Search" style="border-style: none; no-repeat; height: 20px;">
      </td>
    </tr>
  </table>
  </form>
  <table class="class1" border="1">
    <tr>
      <th>
        ID
      </th>
      <th>
        Player Name
      </th>
      <th>
        Event
      </th>
      <th>
        Modify
      </th>
    </tr>
  <?php
  if($result->num_rows > 0) {
    //output data of each row
    while($row = $result->fetch_assoc()) {
      ?>
        <tr>
          <td>
            <?php echo $row["ID"]?>
          </td>
          <td>
            <?php echo $row["playerTag"]?>
          </td>
          <td>
            <?php echo $row["event"] ?>
          </td>
            <td>
              <form method="post" action="delete-setup.php?ID=<?php echo $row["ID"] ?>">
                <input type="submit" value="Delete" name="submit">
              </form>
              <form method="post" action="edit-setup.php?ID=<?php echo $row["ID"] ?>" >
                <input type="submit" value="Edit" name="submit">
              </form>
          </td>
        </tr>
      <?php
    }
  }  else {
      echo "0 results";
  }
   ?>
   </table>
   <a href="adminpanel.php">Admin Panel</a>
</div>

<?php include "footer.php" ?>
