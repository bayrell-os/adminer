<?php
/** Adminer - Compact database management
* @link https://www.adminer.org/
* @author Jakub Vrana, https://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license https://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license https://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
*/

define("ADMINER_DIR_PATH", __DIR__ . "/");

include ADMINER_DIR_PATH . "./include/bootstrap.inc.php";
include ADMINER_DIR_PATH . "./include/tmpfile.inc.php";

$enum_length = "'(?:''|[^'\\\\]|\\\\.)*'";
$inout = "IN|OUT|INOUT";

if (isset($_GET["select"]) && ($_POST["edit"] || $_POST["clone"]) && !$_POST["save"]) {
	$_GET["edit"] = $_GET["select"];
}
if (isset($_GET["callf"])) {
	$_GET["call"] = $_GET["callf"];
}
if (isset($_GET["function"])) {
	$_GET["procedure"] = $_GET["function"];
}

if (isset($_GET["download"])) {
	include ADMINER_DIR_PATH . "./download.inc.php";
} elseif (isset($_GET["table"])) {
	include ADMINER_DIR_PATH . "./table.inc.php";
} elseif (isset($_GET["schema"])) {
	include ADMINER_DIR_PATH . "./schema.inc.php";
} elseif (isset($_GET["dump"])) {
	include ADMINER_DIR_PATH . "./dump.inc.php";
} elseif (isset($_GET["privileges"])) {
	include ADMINER_DIR_PATH . "./privileges.inc.php";
} elseif (isset($_GET["sql"])) {
	include ADMINER_DIR_PATH . "./sql.inc.php";
} elseif (isset($_GET["edit"])) {
	include ADMINER_DIR_PATH . "./edit.inc.php";
} elseif (isset($_GET["create"])) {
	include ADMINER_DIR_PATH . "./create.inc.php";
} elseif (isset($_GET["indexes"])) {
	include ADMINER_DIR_PATH . "./indexes.inc.php";
} elseif (isset($_GET["database"])) {
	include ADMINER_DIR_PATH . "./database.inc.php";
} elseif (isset($_GET["scheme"])) {
	include ADMINER_DIR_PATH . "./scheme.inc.php";
} elseif (isset($_GET["call"])) {
	include ADMINER_DIR_PATH . "./call.inc.php";
} elseif (isset($_GET["foreign"])) {
	include ADMINER_DIR_PATH . "./foreign.inc.php";
} elseif (isset($_GET["view"])) {
	include ADMINER_DIR_PATH . "./view.inc.php";
} elseif (isset($_GET["event"])) {
	include ADMINER_DIR_PATH . "./event.inc.php";
} elseif (isset($_GET["procedure"])) {
	include ADMINER_DIR_PATH . "./procedure.inc.php";
} elseif (isset($_GET["sequence"])) {
	include ADMINER_DIR_PATH . "./sequence.inc.php";
} elseif (isset($_GET["type"])) {
	include ADMINER_DIR_PATH . "./type.inc.php";
} elseif (isset($_GET["trigger"])) {
	include ADMINER_DIR_PATH . "./trigger.inc.php";
} elseif (isset($_GET["user"])) {
	include ADMINER_DIR_PATH . "./user.inc.php";
} elseif (isset($_GET["processlist"])) {
	include ADMINER_DIR_PATH . "./processlist.inc.php";
} elseif (isset($_GET["select"])) {
	include ADMINER_DIR_PATH . "./select.inc.php";
} elseif (isset($_GET["variables"])) {
	include ADMINER_DIR_PATH . "./variables.inc.php";
} elseif (isset($_GET["script"])) {
	include ADMINER_DIR_PATH . "./script.inc.php";
} else {
	include ADMINER_DIR_PATH . "./db.inc.php";
}

// each page calls its own page_header(), if the footer should not be called then the page exits
page_footer();
