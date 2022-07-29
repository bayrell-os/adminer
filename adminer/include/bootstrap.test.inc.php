<?php

error_reporting(6135); // errors and warnings
set_error_handler('adminer_errors', E_WARNING);

include ADMINER_DIR_PATH . "../adminer/include/coverage.inc.php";
include ADMINER_DIR_PATH . "../adminer/include/lang.inc.php";