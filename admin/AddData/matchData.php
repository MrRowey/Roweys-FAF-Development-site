<?php
include('../dbconfig.php');


## Dropdown Select Statments

## Need to Get Player Name from Both Alias & User but also know who Alis - Whom

## Get User's & Alias Names
$playersSQL = 'SELECT ID,Username FROM user';
$playersResult = mysqli_query($conn, $userSQL);

## Get Alias
$aliasSQL = 'SELECT A.ID, A.Alias, U.Username FROM user AS U, alias_to_user AS A where A.UsernameID = U.ID;';
$aliasResult = mysqli_query($conn, $aliasSQL);


# Player

# Opponent

# Win Conditions
$winSQL = 'SELECT ID,Conditions FROM win_conditions';
$winResult = mysqli_query($conn,$winSQL);
# Player Faction
$pFactionSQL = 'SELECT ID,Name FROM faction';
$pFactionResult = mysqli_query($conn,$pFactionSQL);
# Opponent Facion
$oFactionSQL = 'SELECT ID,Name FROM faction';
$oFactionResult = mysqli_query($conn,$oFactionSQL);
# Map
$mapSQL = 'SELECT ID,Name FROM Maps';
$mapResult = mysqli_query($conn, $mapSQL);
# Tournament
$tournySQL = 'SELECT ID,Name FROM tournament';
$tournyResult = mysqli_query($conn,$tournySQL);



?>
<html>
<title>FAF Tournament Match Data</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css">
</head>
<nav class="w3-bar w3-blue">
    <a href="/index.php" class="w3-bar-item w3-button w3-mobile">Home</a>
    <a href="/pages/1v1.php" class="w3-bar-item w3-button w3-mobile">1v1 Match Data</a>
    <a href="/pages/AddData.php" class="w3-bar-item w3-button w3-mobile">Add Data</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-mobile">Link 2</a>-->
    <a href="/login.php" class="w3-bar-item w3-button w3-mobile" style="float: right;" >Login</a>
</nav>
<main class="w3-container">    
    <form class="w3-container" action="/data/matchData.php" method="POST" style="width:100%;">
        <div class="w3-row-padding">
            <div class="w3-third">
                <!-- Tournament -->
                <label class="w3-text-blue" for="tourny">Select Match Tournament</label>
                <select class="w3-select w3-border " name="tourny" id="tourny">
                <option value="" disabled selected>Please Select a Tournament</option>
                <?php while ($row = mysqli_fetch_array($tournyResult)) {
                    echo '<option value="' . $row['ID'] . '">' . $row['Name'] . '</option>';
                }?>
                </select>
            </div>
            <div class="w3-third">
                <!-- ReplayID -->
                <label class="w3-text-blue" for="replay">Replay ID:</label>
                <input class="w3-input w3-border" name="replay" id="replay" type="number">
            </div>
            <div class="w3-third">
                <!-- Win Condition -->
                <label class="w3-text-blue" for="win">Match Win Condition</label>
                <select class="w3-select w3-border" name="win" id="win">
                <option value="" disabled selected>Please Select a Win Result</option>    
                <?php while($row = mysqli_fetch_array($winResult)) {
                    echo '<option value="' . $row['ID'] . '">' . $row['Conditions'] . '</option>';
                }?>
                </select>
            </div>
        </div><br>
        <div class="w3-row-padding">
            <!-- Player -->
            <label for=""></label>
                <select class="w3-select w3-border" name="" id="">
                <option value="" disabled selected>Select Player</option>                  
                    <?php while($row = mysqli_fetch_array($aliasResult)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['Name'] . '</option>';
                    }?>



                </select>

            <!-- Opponet -->
            <!--<label for=""></label>-->
            <!--<select class="w3-select w3-border" name="" id=""></select>-->
            <!-- Player Faction -->
        </div><br>
        <div class="w3-row-padding">         
            <div class="w3-half">
                <label for="pFaction">Player Faction</label>
                <select class="w3-select w3-border" name="pFaction" id="pFaction">
                    <option value="" disabled selected>Slect Player Faction</option>
                    <?php while($row = mysqli_fetch_array($pFactionResult)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['Name'] . '</option>';
                    }?>
                </select>
            </div>
            <div class="w3-half">
                <!-- Opponent Faction -->
                <label for="oFaction">Opponet Faction</label>
                <select class="w3-select w3-border" name="oFaction" id="oFaction">
                    <option value="" disabled selected>Select Opponent Faction</option>
                    <?php while($row = mysqli_fetch_array($oFactionResult)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['Name'] . '</option>';
                    }?>
                </select>
            </div>
        </div><br>
        <div class="w3-row-padding">
            <div class="w3-third">
                <!-- Map -->
                <label for="map">Map Played On</label>
                <select class="w3-select w3-border" name="map" id="map">
                    <option value="" disabled selected>Select Map</option>
                    <?php while($row = mysqli_fetch_array($mapResult)) {
                        echo '<option value="' . $row['ID'] . '">' . $row['Name'] . '</option>';
                    }?>
                </select>
            </div>
            <div class="w3-third">
                <!-- Finals -->
                <label for="final">In the Finals? (Yes or No):</label>
                <input class="w3-input w3-border" name="final" id="final" type="text">
            </div>
            <div class="w3-third">
            <!-- Winnings ($) -->
            <label for="prize">Enter any Winings</label>
            <input class="w3-input w3-border" name="prize" id="prize" type="number">
            </div>
        </div>
    </form>   
</main>
</html>