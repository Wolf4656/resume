<?php include "header.php" ?>
<?php include "navbar.php" ?>

<h1> Registration </h1>

<div class="registration">
  <form action="create-smasher.php" method="post">
    <div class="form-group">
      <input class="input-box" type="text" name="tag" placeholder="Tag">
    </div>
    <div class="form-group">
      <input class="input-box" type="text" name="name" placeholder="First and Last name">
    </div>
    <div class="form-group">
      <input class="input-box"  type="text" name="region" placeholder="Region (for seeding purposes):">
    </div>
    <div class="form-group">
      <input class="input-box"  type="text" name="phoneNumber" placeholder="Phone Number">
    </div>
    <div class="form-group">
      <inputclass="input-box" type="text" name="cityState" placeholder="City, State">
    </div>
    <p style="text-decoration: bold"> Venue Fee is $5.00 per person </p>
    <h1 style="float: left; font-size: 24px; margin-right: 165px;"> Select Events:</h1>
      <input class="checkers" type="checkbox" name="meleeSingles" value="Yes">Melee Singles<br>
        <li style="margin-left: 20px"> $5.00 </li><br>
      <input class="checkers" type="checkbox" name="meleeDoubles" value="Yes">Melee Doubles<br>
        <li style="margin-left: 20px"> $5.00 per person </li>
        <input class="input-box2" type="text" name="meleeDoublesPartner" placeholder="Enter tag of partner">
      <input class="checkers" type="checkbox" name="wiiuSingles" value="Yes">WiiU Singles<br>
        <li style="margin-left: 20px"> $5.00 </li><br>
      <input class="checkers" type="checkbox" name="wiiuDoubles" value="Yes">WiiU Doubles<br>
        <li style="margin-left: 20px"> $5.00 per person </li>
        <input class="input-box2" type="text" name="wiiuDoublesPartner" placeholder="Enter tag of partner"><br>
    <p style="margin-bottom: 0px;"> Can you bring a set up? </p>
      <li class="tier1"> Melee set-ups include </li>
        <li class="tier2"> CRT </li>
        <li class="tier2"> Gamecube/Wii </li>
      <li class="tier1"> WiiU set-ups include </ul>
        <li class="tier2"> TV </li>
        <li class="tier2"> WiiU </li>
        <li class="tier2"> Gamecube controller adapter (4 ports) </li>
    <p> If you can check a box for which type. If you show at the door with a full set up $2.00 will be taken off your venue fee.</p>
    <p> *Note: only one discount per person </p>
      <input class="checkers" type="checkbox" name="meleeSetup" value="Yes">Melee Set Up<br>
      <input class="checkers" type="checkbox" name="wiiuSetup" value="Yes">WiiU Set Up<br>
    <input type="submit" value="Sign Up" name="submit" style="width: 100px; margin-left:250px; margin-top:10px;">
  </form>
</div>

<?php include "footer.php" ?>
