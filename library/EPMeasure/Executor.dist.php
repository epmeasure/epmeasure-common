<?php
require_once __DIR__.'/../library/EPMeasure/SerializeableClosure.php';
$exec = unserialize('{exec}');
ob_start();
$exec();
ob_end_clean();

echo "Memory:" . memory_get_peak_usage(true) . PHP_EOL;
echo "Runtime:" . PHP_EOL;
