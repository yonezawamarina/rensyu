<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Chartjs;
use Validator;  //この1行だけ追加！
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;






class ChartController extends Controller
{
    /**
     * チャートデータを取得
     */
    public function chartGet()
    {
        // 固定データを返却。DBからデータを取得すると良い
        return [12, 19, 31, 25, 2, 26, 87];
    }
}