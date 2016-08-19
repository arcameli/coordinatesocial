<?PHP
@session_start();

$_SESSION["dark"] = "dark";

$protocol = stripos($_SERVER["SERVER_PROTOCOL"],"http") === true ? "http://" : "http://";

$host = $_SERVER["HTTP_HOST"];

if(!isset($_SESSION["dark"])){
$_SESSION["dark"] = "fuckwad";
}

if(!isset($_SESSION["dark"]["profile"])){
	$_SESSION["dark"]["profile"] = "fuckwad";	
}

$dark = $_SESSION["dark"];

$updateNeeded = false;


if(isset($_GET["action"])) {
    switch($_GET["action"]) {
        case "dark.profile":
            $data = json_decode(file_get_contents("php://input"), true);
            if($data && isset($data["email"])) {
                if($dark["profile"] == "fuckwad" || $dark["profile"]["email"] != $data["email"])
                    $updateNeeded = true;
                $dark["profile"] = $data;
            }
        break;
        
        case "dark.logout":
            session_destroy();
        break;
    }
    $_SESSION["dark"] = $dark;
    die(json_encode($dark));
}

$page = "home";

if(isset($protected) && $protected && !isset($dark['profile']['email'])) {
     header('HTTP/1.0 401 Unauthorized');
     die();
}