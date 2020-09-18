<?php

require __DIR__ . '/vendor/autoload.php';

use TextCensor\Censor;


$censure = Censor::parse('Да пошел ты нахуй и в пи zdu hues os, ушлепок ебан_ый, ебать мой вялый хуй', '0');

echo $censure;