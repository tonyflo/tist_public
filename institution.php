<?php
include "helpers/header.php";
?>
<html>
<head>
    <title><?php echo "Institution"?></title>
    <meta name="description" content="Institution page">
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/normalize.css">
    <link href='http://fonts.googleapis.com/css?family=Changa+One|Open+Sans:400italic,700italic,400,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/responsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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

//////////////////////////////
///////   CONTENT    /////////
//////////////////////////////
echo '<div id="wrapper">';


///////   SIDE-BAR   /////////


echo '
<div class="left-bar">
    <table>
      <caption>Institution Details</caption>
      <thead>
        <tr>
          <th scope="col" colspan="2">'.$name.'</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="3">Data last updated on INSERT DATE HERE</td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th scope="row">Official Website:</th>
          <td><a href="http://'.$link_website.'">'.$link_website.'</a></td>
        </tr>
        <tr>
          <th scope="row">City:</th>
          <td>'.$city.'</td>
        </tr>
        <tr>
          <th scope="row">State:</th>
          <td>'.$state_abbrev.'</td>
        </tr>
        <tr>
          <th scope="row">Address:</th>
          <td>'.$street_address.'</td>
        </tr>
        <tr>
          <th scope="row">Zip Code:</th>
          <td>'.$zip_code.'</td>
        </tr>
      </tbody>
    </table>
</div>



<div class="right-bar">
    <table>
      <caption>Institution Details</caption>
      <thead>
        <tr>
          <th scope="col" colspan="2">'.$name.'</th>
        </tr>
      </thead>
      <tfoot>
        <tr>
          <td colspan="3">Data last updated on INSERT DATE HERE</td>
        </tr>
      </tfoot>
      <tbody>
        <tr>
          <th scope="row">Official Website:</th>
          <td><a href="http://'.$link_website.'">'.$link_website.'</a></td>
        </tr>
        <tr>
          <th scope="row">Andrew Chalkley</th>
          <td>andrew@example.com</td>
        </tr>
        <tr>
          <th scope="row">Dave McFarland</th>
          <td>dave@example.com</td>
        </tr>
        <tr>
          <th scope="row">Guil Hernandez</th>
          <td>guil@example.com</td>
        </tr>
      </tbody>
    </table>
</div>
';

///////   FOOTER   /////////

include "helpers/footer.html";

echo '</div>'; //close wrapper div
?>

</body>
</html>

