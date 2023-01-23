#!/usr/bin/env php
<?php

require 'vendor/autoload.php';

use CCombiner\CsvCombiner;
use Symfony\Component\Console\Application;


// should run the command
$app = new Application();
$app->add(new CsvCombiner());
$app->run();