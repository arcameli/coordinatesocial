<?PHP
require_once("../load.php");
header("Content-Type: text/javascript");
include("dark.js");
echo "dark.serverSynced = ".((isset($dark['profile'])&&isset($dark['profile']['email']))?"true":"false").";";
include("dark.auth.js");