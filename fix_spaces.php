<?php
$count = 0;
$files = array_merge(glob(__DIR__ . '/*.php'), glob(__DIR__ . '/apis/*.php'));
foreach ($files as $f) {
    $c = file_get_contents($f);
    // Specifically looking for files that accidentally start with a space before the PHP tag
    if (strpos($c, ' <?php') === 0) {
        file_put_contents($f, substr($c, 1));
        $count++;
        echo "Fixed: " . basename($f) . "<br>";
    }
}
echo "<strong>Total files fixed: $count</strong>";
?>
