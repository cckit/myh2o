<?php
// Connecting, selecting database
function connect($hostname, $username, $password)
{
    $link = mysql_connect($hostname, $username, $password)
        or die('Could not connect: ' . mysql_error());
    echo 'Connected successfully';
    return $link;
}

function query($database, $table, $longitude, $latitude, $width)
{
    mysql_select_db($database) or die('Could not select database');

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
    $result = mysql_query($query) or die('Query failed: ' . mysql_error());
    return $result;
}

function toHTML($result)
{
    // Printing results in HTML
    echo "<table>\n";
    while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
        echo "\t<tr>\n";
        foreach ($line as $col_value) {
            echo "\t\t<td>$col_value</td>\n";
        }
        echo "\t</tr>\n";
    }
    echo "</table>\n";
    // Free resultset
    mysql_free_result($result);

}

function close_connection($link)
{
    // Closing connection
    mysql_close($link);
}

function all_points()
{
    $link = connect('localhost', 'root', '', 'myh2o');
    $result = query('myh2o', 'water_quality', 0, 0, 500);
    return $result;
}
?>


