<?php
// Connecting, selecting database
function connect($hostname, $username, $password, $database)
{
    $link = mysqli_connect($hostname, $username, $password, $database);
    if (mysqli_connect_errno()) {
        //printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    return $link;
}

function query($link, $table, $longitude, $latitude, $latitude_width_km, $longitude_width_km)
{
    if (is_null($latitude_width_km) || is_null($longitude_width_km)) {
        $latitude_width_km = 5000;
        $longitude_width_km = 5000;
    }
    // For debugging
    // $latitude_width_km = 5000;
    // $longitude_width_km = 5000;

    $scale = 100;
    $lng_per_km = 0.621371 / (69.11 * cos($longitude));
    $lat_per_km = 1 /111;
    $lng_min = $longitude - $scale*$longitude_width_km * $lng_per_km;
    $lng_max = $longitude + $scale*$longitude_width_km * $lng_per_km;
    $lat_min = $latitude - $scale*$latitude_width_km * $lat_per_km;
    $lat_max = $latitude + $scale*$latitude_width_km * $lat_per_km;

    // Performing SQL query
    $query = "SELECT * FROM $table
                WHERE 
                    (Longitude BETWEEN $lng_min AND $lng_max)
                AND (Latitude BETWEEN $lat_min AND $lat_max)
             ";
    $result = mysqli_query($link, $query);
    return $result;
}



function toHTML($result)
{
    // Printing results in HTML
    echo "<table>\n";
    while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    // Free resultset
    mysqli_free_result($result);

}

function close_connection($link)
{
    // Closing connection
    mysqli_close($link);
}


function all_points()
{
    $link = connect('localhost', 'root', '821015jiajia', 'myh2o');
    $result = query($link, 'water_quality', $longitude, $latitude, $longitude_width_km, $latitude_width_km);
    return $result;
}

$longitude = $_GET['longitude'];
$latitude = $_GET['latitude'];
$longitude_width_km = $_GET['longitude_width_km'];
$latitude_width_km = $_GET['latitude_width_km'];
$result = all_points();
// echo <h1> . $result . </h1>;
//echo "hahahahahaahahahahahahahahahahahahahahahahahaha";
// echo $result;
// echo $latitude;

while ($line = mysqli_fetch_array($result, MYSQL_ASSOC)) {
    //echo json_encode($line); 
    // echo "hahahahahaahahahahahahahahahahahahahahahahahaha";
}


?>


