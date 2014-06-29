<?php
return array( 
	"base_url" => URL::route('hybridauth', array('action' => 'auth')),  
	"providers" => array (
		"Facebook" => array ( 
			"enabled" => true,
			"keys"    => array ( "id" => "700063790060337", "secret" => "f607e50f8992db64701e130d51af5990" ), 
  			"scope"   => "email, user_about_me, user_birthday, user_hometown", // optional
  			"display" => "popup" // optional
  			)
		),
		"Google" => array( 
	      "base_url" => URL::route('hybridauth', array('action' => 'auth')),
	      "providers" => array (
	        "Google" => array ( 
	          "enabled" => true,
	          "keys"    => array ( "id" => "PUT_YOURS_HERE", "secret" => "PUT_YOURS_HERE" ), 
	          "scope"           => "https://www.googleapis.com/auth/userinfo.profile ". // optional
	                               "https://www.googleapis.com/auth/userinfo.email"   , // optional
	          "access_type"     => "offline",   // optional
	          "approval_prompt" => "force",     // optional
	          "hd"              => "domain.com" // optional
	    	)
    	  )
    	)
	);