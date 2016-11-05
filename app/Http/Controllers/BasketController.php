<?php

namespace App\Http\Controllers;

use DB;
use App\Goods;
use App\categories;
use Auth;
use Illuminate\Http\Request;

use App\Http\Requests;

class BasketController extends Controller
{
    public function show()
    {
        if (isset($_COOKIE['basket'])) // проверяем, есть ли заказы
        {
            $orders = $_COOKIE['basket'];
            $orders = json_decode($orders);

        } else {
            $orders = [];
        }
        //получаем массив айдишек
        $tmp = [];
        foreach ($orders as $arr) {
            $tmp[] = $arr->item_id;
        }
        //
        $arr = [];
        foreach ($tmp as $mass) {
            $arr[] = Goods::find($mass);
        }

        return view('basket', ['orders' => $orders, 'tmp' => $tmp, 'arr' => $arr]);
    }


}
