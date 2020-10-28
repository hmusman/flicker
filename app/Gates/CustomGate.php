<?php
 namespace App\Gates;
 use Illuminate\Auth\Access\Response;


 class CustomGate
 {
 	public function isAdmin($user)
 	{
 		if($user->user_type=="admin")
 		{
 			return true;
 		}
 	}
 }