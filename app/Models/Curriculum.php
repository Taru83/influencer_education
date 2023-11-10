<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Curriculum extends Model
{
    use HasFactory;

    public function getStore($request) {
        $info = new Curriculum();
        $info->name = $request->name;
        $info->email = $request->email;
        $info->password = $request->password;
        
        $info->save();
        return $info;
    }
}
