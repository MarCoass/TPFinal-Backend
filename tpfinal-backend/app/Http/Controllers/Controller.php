<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function ejemplo()
    {
        $data = [
            'message' => 'Hola desde Laravel',
            'timestamp' => now(),
        ];
    
        return response()->json($data);
    }
}
