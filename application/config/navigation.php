<?php 



function admin_access()
{
	if($_SESSION['OSRMS_admin'] !== 1 || $_SESSION['OSRMS_active'] !== 1)
	{
		session_destroy();
		header('Location: http://10.164.30.173/osrms2/application/view/admin/login2.php');
	}
}




?>