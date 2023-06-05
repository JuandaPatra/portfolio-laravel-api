<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\Emails;
use Illuminate\Http\Request;

class messageController extends Controller
{
    public function index()
    {
        $data = 'tes';

        if($data == 'tes'){
            return ApiFormatter::createApi(200,'success', $data);
        }else{
            return ApiFormatter::createApi(400,'fail');
        }
    }

    public function store(Request $request)
    {
        $newMessage = Emails::create([
            'name'      => $request->name,
            'email'      => $request->email,
            'message'      => $request->message,
        ]);

        return ApiFormatter::createApi(200, 'success', 'berhasil');
    }
}
