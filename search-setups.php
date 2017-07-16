<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "select.php" ?>
<?php $setups= Select::setupSearch($_GET["query"]); ?>

<h1>Results</h1>

<div class="squish2">
  <table class="class1" border="1">
    <tr>
      <th>
        ID
      </th>
      <th>
        Player Tag
      </th>
      <th>
        Event
      </th>
      <th>
        Modify
      </th>
    </tr>
<?php while($setup = $setups->fetch_assoc()) { ?>
        <tr>
          <td>
            <?php echo $setup["ID"]?>
          </td>
          <td>
            <?php echo $setup["playerTag"]?>
          </td>
          <td>
            <?php echo $setup["event"] ?>
          </td>
            <td>
              <form method="post" action="delete-event.php?ID=<?php echo $setup["ID"] ?>">
                <input type="submit" value="Delete" name="submit">
              </form>
              <form method="post" action="edit-event.php?ID=<?php echo $setup["ID"] ?>" >
                <input type="submit" value="Edit" name="submit">
              </form>
          </td>
        </tr>
      <?php } ?>
   </table>
   <a href="adminpanel.php">Admin Panel</a>
</div>

<?php include "footer.php" ?>
