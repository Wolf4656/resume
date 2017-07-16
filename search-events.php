<?php include "header.php" ?>
<?php include "navbar.php" ?>
<?php include "select.php" ?>
<?php $events = Select::eventsSearch($_GET["query"]); ?>

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
        Start Time
      </th>
      <th>
        End Time
      </th>
      <th>
        Entry Fee
      </th>
      <th>
        Player Cap
      </th>
      <th>
        Modify
      </th>
    </tr>
<?php while($event = $events->fetch_assoc()) { ?>
        <tr>
          <td>
            <?php echo $event["ID"]?>
          </td>
          <td>
            <?php echo $event["name"]?>
          </td>
          <td>
            <?php echo $event["startTime"] ?>
          </td>
          <td>
            <?php echo $event["endTime"] ?>
          </td>
          <td>
            <?php echo $event["entryFee"] ?>
          </td>
          <td>
            <?php echo $event["playerCap"] ?>
          </td>
            <td>
              <form method="post" action="delete-event.php?ID=<?php echo $event["ID"] ?>">
                <input type="submit" value="Delete" name="submit">
              </form>
              <form method="post" action="edit-event.php?ID=<?php echo $event["ID"] ?>" >
                <input type="submit" value="Edit" name="submit">
              </form>
          </td>
        </tr>
      <?php } ?>
   </table>
   <a href="adminpanel.php">Admin Panel</a>
</div>

<?php include "footer.php" ?>
