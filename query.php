<?php
// Connecting, selecting database
function connect($hostname, $username, $password, $database)
{
    $link = mysqli_connect($hostname, $username, $password, $database);
    if (mysqli_connect_errno()) {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }

    return $link;
}

function query($link, $table, $longitude, $latitude, $latitude_width_km, $longitude_width_km)
{
    if (is_null($latitude_width_km) || is_null($longitude_width_km)) {
        $latitude_width_km = 500;
        $longitude_width_km = 500;
    }
    $lng_per_km = 0.621371 / (69.11 * cos($longitude));
    $lat_per_km = 1 /111;
    $lng_min = $longitude - $longitude_width_km * $lng_per_km;
    $lng_max = $longitude + $longitude_width_km * $lng_per_km;
    $lat_min = $latitude - $latitude_width_km * $lat_per_km;
    $lat_max = $latitude + $latitude_width_km * $lat_per_km;

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
    $result = query($link, 'water_quality', 0, 0, 500, 500);
    return $result;
}
?>


