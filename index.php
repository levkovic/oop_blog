<?phpsession_start();include_once('m/db_connect.php');function __autoload($class){	include 'c/' . $class . '.php';}switch ($_GET['c']){	case 'logout':		$controller = new C_Logout();		break;	case 'editor':		$controller = new C_Editor();		break;	case 'editing':		$controller = new C_Editing();		break;	case 'article':	    $controller = new C_Article();	    break;    case 'new':        $controller = new C_New();        break;    case 'registration':        $controller = new C_Registration();        break;    case 'login':        $controller = new C_Login();        break;	default:		$controller = new C_View();}$controller->Request();