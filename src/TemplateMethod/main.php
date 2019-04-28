<?php

declare(strict_types=1);

require __DIR__ . '/../../vendor/autoload.php';

use HFD\TemplateMethod\Coffee;
use HFD\TemplateMethod\Tea;

echo $coffee = new Coffee();
$coffee->prepareRecipe();
echo $tea = new Tea();
$tea->prepareRecipe();
