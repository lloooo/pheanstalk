<?php
include 'vendor/autoload.php';
use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1');

$pheanstalk
    ->useTube('testtube')
    ->put('job 1', \Pheanstalk\PheanstalkInterface::DEFAULT_PRIORITY, 1);

$pheanstalk
    ->useTube('testtube')
    ->put('job 2');

$pheanstalk
    ->useTube('testtube')
    ->put('job 3');

$pheanstalk
    ->useTube('testtube')
    ->put('job 4');