<?php
$date = date("D M d");
echo exec("git log | grep -B 1 \"$date\" | grep \"ANDRE\" | wc -l");