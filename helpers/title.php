<?php
	/* @brief Generates a list of titles for a drop down box
	 * @example Mr. Mrs. Dr. etc.
	 */

	include "../tist_web_private/credentials.php";

	//query database for list of topics
	$query="select title_id, title from TITLE order by title asc";
	$sql=$db->prepare($query);
	$sql->execute();
	$sql->bind_result($title_id, $title);

	//the first option in the select element
	echo "<option value='-1'>Select your title</option>";

	//populate the select element
	while($sql->fetch())
	{
		echo "<option value=".$title_id.">".$title."</option>";
	}

	$sql->free_result();
?>
