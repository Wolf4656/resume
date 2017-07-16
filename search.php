<?php include "header.php" ?>
<?php include "navbar.php" ?>

<?php include "select.php"; $participants = Select::participants($_GET["query"]); ?>

<h1>Results</h1>

<div class="squish">
  <table class="class1" border="1">
    <tr>
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
    </tr>
  <?php while($participant = $participants->fetch_assoc()) { ?>
  <!--- Start Post HTML -->
  <tr>
    <td><?php echo $participant["tag"] ?></td>
    <td><?php echo $participant["region"] ?></td>
    <td><?php echo $participant["meleeSingles"] ?></td>
    <td><?php echo $participant["meleeDoubles"] ?></td>
    <td><?php echo $participant["meleeDoublesPartner"] ?></td>
    <td><?php echo $participant["wiiuSingles"] ?></td>
    <td><?php echo $participant["wiiuDoubles"] ?></td>
    <td><?php echo $participant["wiiuDoublesPartner"] ?></td>
  </tr>
  <?php } ?>
</table>
</div>
<?php include "footer.php" ?>
