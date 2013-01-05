<?php
require_once __DIR__.'/../library/EPMeasure/SerializeableClosure.php';
$exec = unserialize('{exec}');
ob_start();
$start = microtime(true);
$exec();
$stop = microtime(true);
$runtime = $stop - $start;
ob_end_clean();

// To fast to measure
if (strpos((string)$runtime, "E") !== false) {
    $runtime = 0.0000;
}

echo "Memory:" . memory_get_peak_usage(true) . PHP_EOL;
echo "Runtime:" . (float)$runtime . PHP_EOL;
