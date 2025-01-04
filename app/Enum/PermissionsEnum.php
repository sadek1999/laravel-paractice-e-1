<?php

namespace App\Enum;

enum PermissionsEnum:string
{
 case approveVendor='ApproveVendor';
 case sellProducts='SellProducts';
 case buyProducts='BuyProducts';
}
