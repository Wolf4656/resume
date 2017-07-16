<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "select.php" ?>
<?php $contacts = Select::messages($_GET["query"]); ?>

<h1>Results</h1>

<div class="squish2">
  <table class="class1" border="1">
    <tr>
      <th>
        ID
      </th>
      <th>
        Name
      </th>
      <th>
        Email
      </th>
      <th>
        Phone Number
      </th>
      <th>
        Message
      </th>
      <th>
        Modify
      </th>
    </tr>
<?php while($contact = $contacts->fetch_assoc()) { ?>
        <tr>
          <td>
            <?php echo $contact["ID"]?>
          </td>
          <td>
            <?php echo $contact["name"]?>
          </td>
          <td>
            <?php echo $contact["email"] ?>
          </td>
          <td>
            <?php echo $contact["phoneNumber"] ?>
          </td>
          <td>
            <?php echo $contact["contact"] ?>
          </td>
            <td>
              <form method="post" action="delete-event.php?ID=<?php echo $contact["ID"] ?>">
                <input type="submit" value="Delete" name="submit">
              </form>
              <form method="post" action="edit-event.php?ID=<?php echo $contact["ID"] ?>" >
                <input type="submit" value="Edit" name="submit">
              </form>
          </td>
        </tr>
      <?php } ?>
   </table>
   <a href="adminpanel.php">Admin Panel</a>
</div>

<?php include "footer.php" ?>
