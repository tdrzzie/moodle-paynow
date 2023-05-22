<?php

// Paynow PxPay service should redirect here on success.

require dirname(dirname(dirname(__FILE__))) . "/config.php";
require_once "{$CFG->dirroot}/lib/enrollib.php";

require_login();

// fetch the response XML from Paynow
$result = required_param('result', PARAM_CLEAN);


$paynowenrol = enrol_get_plugin('paynow');


$paynowenrol->confirm_transaction($result);

