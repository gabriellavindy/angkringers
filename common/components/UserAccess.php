<?php

namespace common\components;
 
use Yii;
use \yii\rbac\PhpManager;
class UserAccess extends PhpManager
{
    /**
     * Overrides a Yii method that is used for roles in controllers (accessRules).
     *
     * @param string $operation Name of the operation required (here, a role).
     * @param mixed $params (opt) Parameters for this operation, usually the object to access.
     * @return bool Permission granted?
     */
	private function getIdGrup($kode){
		switch($kode){
			case 'admin' 	    : $hasil = 1;
				break;
            case 'penjual'      : $hasil = 2;
                break;
            case 'pengunjung'   : $hasil = 3;
                break;
		}
		return $hasil;
	}
	 
    public function checkAccess($UserId, $permissionName, $params=[])
    {
        if (empty($UserId)) {
//             Not identified => no rights
             return false;
        }
		$permissionName = self::getIdGrup($permissionName);
		$role = Yii::$app->user->identity->id_grup;
		//if ($role == '1') {
        //    return true; // admin role has access to everything
        //}
        // allow access if the permissionName request is the current user's role
        return ($permissionName === $role);
    }
	
}
?>