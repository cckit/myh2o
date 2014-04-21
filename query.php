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

function query($link, $table, $longitude, $latitude, $width)
{
    $lng_min = $longitude - $width;
    $lng_max = $longitude + $width;
    $lat_min = $latitude - $width;
    $lat_max = $latitude + $width;

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

function print_stuff()
{
    $link = connect('localhost', 'root', '821015jiajia');
    $result = query('myh2o', 'water_quality', 120, 30, 0.2);
    return $result;
}

function all_points()
{
    $link = connect('localhost', 'root', '');
    $result = query('myh2o', 'water_quality', 0, 0, 500);
    return $result;
}
?>


