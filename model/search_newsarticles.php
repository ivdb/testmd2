<?php

$sql = "SELECT * FROM newsarticles WHERE title LIKE '%$search_string%'";
$result = $mysqli->query($sql);






