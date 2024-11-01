<?php
require 'core/bootstrap.php';
require Router::load('routes.php')->direct(Request::uri(), Request::method());

// how to setup localhost: 
// 1. cd documents\Script\Opdr. 19; Boodschappenlijst PHP
// 2. php -S localhost:8000