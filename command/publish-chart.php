<?php
/**
 * Created by Laurent GUIGO
 * Date: 01/12/14
 * Time: 17:56
 */

/*
 * This scripts triggers the chart publication process.
 * Usage: php publish-chart.php [CHART_ID]
 */

define('ROOT_PATH', '../'); // relative path to your Datawrapper root
define('NO_SLIM', 1);
define('NO_SESSION', 1);
date_default_timezone_set('Europe/Berlin');

require_once ROOT_PATH . 'lib/bootstrap.php';
require_once ROOT_PATH . 'lib/utils/chart_publish.php';

$chart_id = $argv[1];
$chart = ChartQuery::create()->findPK($chart_id);

publish_chart($chart->getUser(), $chart, true);
