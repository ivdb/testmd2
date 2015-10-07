<?php

$items_per_page = ITEMS_PER_PAGE;
//page 1: item0, item1, item2 => limit 0
//page 2: items3, item4, item5 => limit 3
//page 3: item6, item7, item 8 => limit 6

$offset = ($page_nr-1)*$items_per_page;

$sql = "SELECT * FROM newsarticles LIMIT " . $offset .", " . $items_per_page;
$data = $mysqli->query($sql);
