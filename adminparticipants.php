<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "select.php" ?>
<?php $result = Select::smashers(); ?>

<h1> Participants </h1>

<div class="squish2">
  <form method="get" action="search-participants.php">
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
        Tag
      </th>
      <th>
        Region
      </th>
      <th>
        Melee Singles
      </th>
      <th>
        Melee Doubles
      </th>
      <th>
        Melee Doubles Partner
      </th>
      <th>
        WiiU Singles
      </th>
      <th>
        WiiU Doubles
      </th>
      <th>
        WiiU Doubles Partner
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
            <?php echo $row["tag"]?>
          </td>
          <td>
            <?php echo $row["region"] ?>
          </td>
          <td>
            <?php echo $row["meleeSingles"] ?>
          </td>
          <td>
            <?php echo $row["meleeDoubles"] ?>
          </td>
          <td>
            <?php echo $row["meleeDoublesPartner"] ?>
          </td>
          <td>
            <?php echo $row["wiiuSingles"] ?>
          </td>
          <td>
            <?php echo $row["wiiuDoubles"] ?>
          </td>
          <td>
            <?php echo $row["wiiuDoublesPartner"] ?>
          </td>
            <td>
              <form method="post" action="delete.php?ID=<?php echo $row["ID"] ?>">
                <input type="submit" value="Delete" name="submit">
              </form>
              <form method="post" action="edit.php?ID=<?php echo $row["ID"] ?>" >
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
