<?php

namespace App\Enum;

enum RolesEnum:string
{
    case admin="Admin";
    case vendor="Vendor";
    case user="User";


    public static function labels()
    {
        return [
            self::admin->value=>'Admin',
            self::vendor->value=>"Vendor",
            self::user->value=>"User",
        ];

    }

    public  function label()
    {
     return match($this){
        self::admin=>'Admin',
        self::vendor=>'Vendor',
        self::user=>'User'
     };
    }
}
