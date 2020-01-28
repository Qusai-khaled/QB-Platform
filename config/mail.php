<?php


return [
    "driver" => "smtp",
    "host" => "smtp.mailtrap.io",
    "port" => 2525,
    "from" => array(
        "address" => "from@example.com",
        "name" => "Example"
    ),
    "username" => "8a09dbad8a304d",
    "password" => "62539ce9a2bdfd",
    "sendmail" => "/usr/sbin/sendmail -bs"
];
