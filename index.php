<?php
function convertSteamIDToSteam3($steamID64) {
    // Do Not Chnage the Base ID
    $baseID = '76561197960265728';

    // Calculating steam3 id
    $steam3ID = bcsub($steamID64, $baseID);

    // Formatting to [U:1:xxxxxx]
    $formattedID = '[U:1:' . $steam3ID . ']';

    return $formattedID;
}

// Replace This to your Steam ID
$steamID64 = '76561199208157034'; // Example Steam64 ID
$steam3ID = convertSteamIDToSteam3($steamID64);
echo $steam3ID; // Output will be the converted ID in Steam3 format
?>
