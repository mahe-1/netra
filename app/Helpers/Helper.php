<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Auth;

class Helper
{

	public static function iscashadmin(){

		$email = Auth::user()->email;
                if($email == 'cash@gmail.com')
                        return true;
                else
                        return false;


	}

	public static function isadmin(){

		$email = Auth::user()->email;
		if($email == 'admin@gmail.com')
			return true;
		else
			return false;

	}

	public static function isbranchadmin(){

                $email = Auth::user()->email;
                if($email == 'branch@gmail.com')
                        return true;
                else
                        return false;


	}

	public static function order_status_text($s){
		if($s==0)
			return "Pending";
		if($s==1)
			return "Accepted";
		if($s==3)
			return "Completed";
		if($s==2)
			return "Rejected";
	}
}

?>
