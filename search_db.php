<?php
$output = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(__DIR__));
foreach ($iterator as $file) {
    if ($file->isDir()) continue;
    if ($file->getExtension() === 'php') {
        $content = file_get_contents($file->getPathname());
        if (preg_match('/mysqli_connect|new mysqli|mysql_connect|dbname=|workman|dbcon\.php|dbconfig\.php/i', $content)) {
            $output[] = $file->getPathname();
        }
    }
}
echo json_encode($output);
?>
