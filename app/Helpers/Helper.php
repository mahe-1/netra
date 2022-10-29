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
}

?>
