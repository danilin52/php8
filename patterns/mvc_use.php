<?php
spl_autoload_register();

use MVC\Controllers\Controller;

$obj = new Controller('users.markdown');
echo '<pre>' . htmlspecialchars($obj->render()) . '</pre>';