<html>
<head>
	<title></title>
	<meta name="description" content="Institution page">
</head>
<body>
<?php
include "scripts/institution.php";

// Get institution data from the above include
$name=$inst[0];
$link_website=$inst[1];
$latitude=$inst[2];
$longitude=$inst[3];
$street_address=$inst[4];
$state_abbrev=$inst[5];
$zip_code=$inst[6];
$city=$inst[7];

// Display the institution data on the page
echo '<h1>'.$name.'</h1>';
echo '<a href="http://'.$link_website.'">Official Website</a>';
echo '<table border=1><tr><td>Lat</td><td>'.$latitude.'</td></tr>';
echo '<tr><td>Lon</td><td>'.$longitude.'</td></tr></table>';
echo '<table><tr><td>'.$street_address.'</td></tr>';
echo '<tr><td>'.$city.', '.$state_abbrev.' '.$zip_code.'</td></tr></table>'

?>
</body>
</html>

