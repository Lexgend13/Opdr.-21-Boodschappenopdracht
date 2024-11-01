<?php

$groceries = $app['database']->selectAll('groceries');

require 'views/index.view.php';