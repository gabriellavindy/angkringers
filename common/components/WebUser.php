<?php
namespace common\components;

class WebUser extends \yii\web\User {
	
	private function getIdGrup($kode){
		switch(strtolower($kode)){
			case 'admin' 		: $hasil = 1;
				break;
			case 'penjual' 	    : $hasil = 2;
				break;
			case 'pengunjung' 	: $hasil = 3;
				break;
		}
		return $hasil;
	}
	
	public function isAllowed($user_grups){
		if(is_array($user_grups)){
			foreach($user_grups as $user_grup){
				if($this->identity->id_grup == $this->getIdGrup($user_grup)){
					return true;
				}
			}
			return false;
		}else{
			return ($this->identity->id_grup == $this->getIdGrup($user_grups));
		}
	}

	public function isUserGrup($user){
		return ($this->identity->id_grup == $this->getIdGrup($user));
	}
}