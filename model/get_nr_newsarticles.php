<?php

$sql = "SELECT * FROM newsarticles";
$result = $mysqli->query($sql);

$nr_of_articles = $result->num_rows;


