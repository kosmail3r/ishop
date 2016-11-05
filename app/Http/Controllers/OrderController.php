<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Goods;
use Auth;
use Cookie;
use App\orders__goods;
use App\Orders;
use App\Http\Requests;

class OrderController extends Controller
{
    public function orderAction(Request $request)
    {
        $orders = Cookie::get('basket');
        $orders = json_decode($orders);
        $input = $request->all();

        // Берем user_id
        if (Auth::guest()) {
            $user_id = 0;  // id для незареганых
            $name = $input['name'];
        } else {
            $user = Auth::user();
            $user_id = $user['id'];
            $name = Auth::user()->name;
        }
        //
        // массив товаров
        $goods = $request->goods;
        // массив количеств
        $count = $request->count;
        $good_arr = [];
        // получаем массив с дааными товаров в корзине + складываем стоимость в переменную
        $price = 0;
        foreach ($goods as $key => $mass) {
            $currentGood = Goods::find($mass);
            $price += $currentGood['price'] * $count[$key];
            $good_arr[] = $currentGood;
        }

        //данные о доставке
        $phone = $input['phone'];
        $adr = $input['address'];


        if (!empty($phone) && !empty($adr) && !empty($goods)) {
            //Добавление в таблицу заказов
            $newOrder = Orders::create(['user_id' => $user_id, 'price' => $price, 'name' => $name, 'phone' => $phone, 'address' => $adr]);
            //Получение id последней записи
            $last_id = $newOrder->id;
            foreach ($goods as $key => $mass) {
                $add = orders__goods::create(['order_id' => $last_id, 'good_id' => $mass, 'count' => $count[$key]]);
            }
            setcookie("basket", "", time() - 3600);
        } else {
            $newOrder = null;;
        }

        if ($newOrder == null) {
            $result = false;
            return view('order', ['result' => $result]);
        } else {
            $result = true;
            return view('order', ['result' => $result]);

        }

    }
}
