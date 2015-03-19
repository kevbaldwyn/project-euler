<?php

require __DIR__.'/vendor/autoload.php';

use \KevBaldwyn\ProjectEuler\Application;

$application = new Application();
$application->registerProblems();
$application->run();