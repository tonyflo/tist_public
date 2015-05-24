<!DOCTYPE html>
<html>
<head>
	<title><?php echo "INSERT TITLE HERE"?></title>
	<meta name="description" content="Institution page">
	<meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/responsive.css">
    <link rel="stylesheet" href="css/main.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php

include "helpers/header.html";
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

echo '<h3>'.$name.'</h3>';
echo '<a href="http://'.$link_website.'">Official Website</a>';
echo '<table border=1><tr><td>Lat</td><td>'.$latitude.'</td></tr>';
echo '<tr><td>Lon</td><td>'.$longitude.'</td></tr></table>';
echo '<table><tr><td>'.$street_address.'</td></tr>';
echo '<tr><td>'.$city.', '.$state_abbrev.' '.$zip_code.'</td></tr></table>';

include "helpers/footer.html";


?>
</body>
</html>

