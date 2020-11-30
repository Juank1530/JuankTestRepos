<?php

// Cosntant
// This information never changes
define(name, Juank);
define(web, 'juank.com');

echo '<h1>' . name . '</h1>';
echo '<h1>' . web . '</h1>';

// Constant Predefine


echo PHP_OS . '<br>';
echo PHP_VERSION . '<br>';
echo PHP_EXTENSION_DIR . '<br>';
echo __LINE__ . '<br>';
echo __FILE__ . '<br>';
function holaMundoFunction() {
    echo __FUNCTION__ . '<br>';
}

holaMundoFunction();





