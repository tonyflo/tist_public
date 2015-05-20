<?php
	/* @brief Generates a list of universities for a drop down box
	 */
	include "../../tist_web_private/credentials.php";

	//query database for list of universities
	$query="select distinct state_abbrev from INSTITUTION order by state_abbrev asc";
	$sql=$db->prepare($query);

	$sql->execute();
	$sql->bind_result($state_abbrev);
	echo '<select id="select-state">';
	echo "<option value='-1'>Select a State</option>";
	while($sql->fetch())
	{
		echo "<option value=".$state_abbrev.">".$state_abbrev."</option>";
	}
	echo "</select>";
	$sql->free_result();
?>
