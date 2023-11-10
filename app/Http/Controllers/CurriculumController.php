<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Curriculum;
use App\Http\Requests\CurriculumRequest;
use Illuminate\Support\Facades\DB;

class CurriculumController extends Controller
{
    //新規管理ユーザー登録画面表示
    public function register() {
        return view('register');
    }

    //ユーザー登録ボタン押下
    public function store(Request $request) {
        DB::beginTransaction();

        try {
            Curriculum::getStore($request);

            DB::commit();
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->withErrors(['error' => '登録処理が失敗しました。']);
    }
    return redirect()->route('top');
}
}