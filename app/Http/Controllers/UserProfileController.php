<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;


class UserProfileController extends BaseController
{
    public function show()
    {
        echo "Nama saya Ahmad Abror Rozaqi Fatoni";
        echo "SIB 3D";
    }
}