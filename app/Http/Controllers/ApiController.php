<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\coments;
use DB;
use App\Goods;
use App\categories;
use App\Http\Requests;
use App\User;

class ApiController extends Controller
{
    public function goodAction($id = null)
    {
        $good = Goods::find($id);
        $goods = json_encode($good);
        return json_encode($goods);
    }

    public function allGoodsAction()
    {
        $good = Goods::all();
        $goods = [];
        foreach ($good as $arr) {
            $goods [] = json_encode($arr);
        }
        return json_encode($goods);
    }

    public function byCategoryAction($id = null)
    {
        $good = categories::find($id)->goods;
        $goods = [];
        foreach ($good as $arr) {
            $goods [] = json_encode($arr);
        }
        return json_encode($goods);
    }

    public function usersAction()
    {
        $user = User::all();
        $users = [];
        foreach ($user as $arr) {
            $users [] = json_encode($arr);
        }
        return json_encode($users);
    }

    public function orderAction($request)
    {
        $input = $request->all();
        $user_id = $input['user_id'];;  // id для незареганых
        $name = $input['name'];
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

        //Добавление в таблицу заказов
        $newOrder = Orders::create(['user_id' => $user_id, 'price' => $price, 'name' => $name, 'phone' => $phone, 'address' => $adr]);
        //Получение id последней записи
        $last_id = $newOrder->id;
        foreach ($goods as $key => $mass) {
            $add = orders__goods::create(['order_id' => $last_id, 'good_id' => $mass, 'count' => $count[$key]]);
        }
        return json_encode($newOrder->exists);
    }

    public function orderCancellation($request)
    {
        $input = $request->all();
        $id = $input['id'];
        $deletedRows = Orders::find($id)->delete();

    }
}
