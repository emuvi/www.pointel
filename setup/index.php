<?php
$files = array_diff(scandir('.'), array('.', '..'));
foreach ($files as $file) {
    if (!is_dir($file)) {
        echo '<a href="' . $file . '">' . $file . '</a><br>';
    }
}