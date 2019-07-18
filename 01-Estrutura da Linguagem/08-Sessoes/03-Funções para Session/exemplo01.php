<?php 
require_once("config.php");

echo session_save_path();
echo "<br>";
var_dump(session_status());
echo "<br>";
switch (session_status()) {
	case PHP_SESSION_DISABLE:
		echo "As sessões estão desabilitadas";
		break;
	case PHP_SESSION_NONE:
		echo "As sessões estão nulas";
		break;
	case PHP_SESSION_ACTIVE:
		echo "As sessões estão ativas";
		break;
	
	default:
		echo "erro";
		break;
}

echo "<br>";
switch (session_status()) {
	case 0:
		echo "As sessões estão desabilitadas";
		break;
	case 1:
		echo "As sessões estão nulas";
		break;
	case 2:
		echo "As sessões estão ativas";
		break;
	
	default:
		echo "erro";
		break;
}
