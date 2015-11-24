<?php

$link = mysql_connect('tutori.org', 'teres177_balkon', 'integer');
if (!$link) {
    die('Error: ' . mysql_error());
}
echo 'Success';
mysql_close($link);

echo 'Test';

mysql_select_db('teres177_balkon', $link);


$sql    = 'SELECT * FROM wp_posts';
$result = mysql_query($sql, $link);

while ($row = mysql_fetch_assoc($result)) {
    print_r($row);
}


echo '===';