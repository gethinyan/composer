<?php

require_once './vendor/autoload.php';

use Gethin\App\Status;

$oStatus = new Status(Status::ALL_STATUS_VALID ^ Status::DELETE_STATUS_VALID);
$oStatus->showStatus();
