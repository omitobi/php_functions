<?php
include "vendor/autoload.php";

use App\Method;

echo 'we are here...';
print_r(Method::explode('We cannot just be like this. We know. We go', '.'));