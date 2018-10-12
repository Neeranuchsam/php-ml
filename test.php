<?php
require_once __DIR__ . '/vendor/autoload.php';
// use Phpml\Classification\KNearestNeighbors;
use Phpml\Regression\LeastSquares;

// $samples = [[1, 3], [1, 4], [2, 4], [3, 1], [4, 1], [4, 2]];
// $labels = ['a', 'a', 'a', 'b', 'b', 'b'];

// $classifier = new KNearestNeighbors();
// $classifier->train($samples, $labels);

// echo $classifier->predict([3, 2]);
// // return 'b'

$samples = [[73676, 1996], [77006, 1998], [10565, 2000], [146088, 1995], [15000, 2001], [65940, 2000], [9300, 2000], [93739, 1996], [153260, 1994], [17764, 2002], [57000, 1998], [15000, 2000]];
$targets = [2000, 2750, 15500, 960, 4400, 8800, 7100, 2550, 1025, 5900, 4600, 4400];

$regression = new LeastSquares();
$regression->train($samples, $targets);
echo $regression->predict([60000, 1996])."\n";
// return 4094.82

echo $regression->getIntercept()."\n";
// return -7.9635135135131

echo print_r($regression->getCoefficients(), true);
// return [array(1) {[0]=>float(0.18783783783783)}]
