<?php

$repo = "https://github.com/dimmascool/php-update";
$command = "git pull 2>&1";
$output = shell_exec($command);
echo $output;