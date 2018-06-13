<?php
include 'vendor/autoload.php';
use Pheanstalk\Pheanstalk;

$pheanstalk = new Pheanstalk('127.0.0.1');
while (true) {
    $job = $pheanstalk
        ->watch('testtube')
        ->ignore('default')
        ->reserve();

    echo $job->getData();

    $pheanstalk->delete($job);

}