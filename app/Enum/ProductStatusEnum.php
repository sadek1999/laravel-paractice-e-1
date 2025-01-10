<?php

namespace App\Enum;

enum ProductStatusEnum: string
{

    case draft='Draft';
    case published='Published';

    public static function labels()
    {
        return[
            self::draft->value=>__('Draft'),
            self::published->value=>__('Published')
        ];

    }

    public static function colors()
    {
       return[
        self::published->value=>'success',
        self::draft->value=>'warning'
       ];
    }

}
