<?php

namespace App\Http\Controllers;

//namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Auth\AuthController;
use Illuminate\Http\Request;
use App\Orders;
use App\orders__goods;
use App\Categories;
use App\User;
use App\Goods;
//use App\Http\Controllers\Auth;
use Auth;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function adminAction()
    {
        //Проверка прав пользователя
        if (Auth::guest()) {
            return view('main');
        } elseif (Auth::user()->is_admin != 1) {
            return view('main');
        } elseif (Auth::user()->is_admin == 1) {
            return view('adminzone', ['data' => NULL]);
        }
    }

    // КАТЕГОРИИ
    public function categoriesAction()
    {

        $categories = Categories::all();
        return view('adminedit', ['data' => $categories, 'cat' => $categories]);
    }

    public function categoryAction($id)
    {
        $category = Categories::find($id);
        return view('admincrud', ['data' => $category]);
    }

    public function categoryAdd(Request $request)
    {
        $add = Categories::create(['name' => $request->name]);
        $categories = Categories::all();
        return view('adminedit', ['data' => $categories, 'cat' => $categories]);
    }

    public function categoryUpdate(Request $request)
    {
        if (empty($request['delete'])) {
            //empty
            $cat = categories::find($request['id']);
            $cat->name = $request['name'];
            $cat->save();
            return redirect('http://localhost/laravel/public/adminzone/categories');
        } else {
            //must delete
            $del = categories::find($request['id'])->delete();
            if ($del) {
                $msg = "Категория успешно удалена.";
            } else {
                $msg = "Что-то пошло не так. Категория НЕ удалена.";
            }
            return redirect('http://localhost/laravel/public/adminzone/categories');
        }
    }

    // ПОЛЬЗОВАТЕЛИ
    public function userAction()
    {
        $users = User::all();
        $categories = Categories::all();
        return view('adminedit', ['data' => $users, 'cat' => $categories]);
    }

    public function userCreate(Request $request)
    {
        $msg;
        $create = User::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
        ]);
        if ($create->exists) {
            $msg = "Пользователь успешно создан.";
        } else {
            $msg = "Что-то пошло не так. Пользователь НЕ создан.";
        }
        $users = User::all();
        $categories = Categories::all();
        return view('adminedit', ['data' => $users, 'msg' => $msg, 'cat' => $categories]);
    }

    public function userEdit($id)
    {

        $user = User::find($id);
        return view('admincrud', ['data' => $user]);
    }

    public function userUpdate(Request $request)
    {
        if (empty($request['delete'])) {
            //empty
            $good = User::find($request['id']);
            $good->name = $request['name'];
            $good->email = $request['email'];
            $good->password = bcrypt($request['password']);
            $good->save();
            return redirect('http://localhost/laravel/public/adminzone/users');
        } else {
            //must delete
            $del = User::find($request['id'])->delete();
            if ($del) {
                $msg = "Пользователь успешно удален.";
            } else {
                $msg = "Что-то пошло не так. Пользователь НЕ удален.";
            }
            return redirect('http://localhost/laravel/public/adminzone/users');
        }
    }

    // ТОВАРЫ

    public function goodsAction()
    {
        $goods = Goods::all()->sortBy('categories_id');
        $categories = Categories::all();
        return view('adminedit', ['data' => $goods, 'cat' => $categories]);
    }

    public function goodEdit($id)
    {
        $msg;
        $goods = Goods::find($id);
        $categories = Categories::all();
        return view('admincrud', ['data' => $goods, 'cat' => $categories]);
    }

    public function goodCreate(request $request)
    {
        $create = Goods::create([
            'name' => $request['name'],
            'img' => $request['img'],
            'description' => $request['description'],
            'price' => $request['price'],
            'categories_id' => $request['categories_id'],
        ]);
        if ($create->exists) {
            $msg = "Товар успешно создан.";
        } else {
            $msg = "Что-то пошло не так. Товар НЕ создан.";
        }
        $goods = Goods::all()->sortBy('categories_id');
        $categories = Categories::all();
        return view('adminedit', ['data' => $goods, 'cat' => $categories, 'msg' => $msg]);

    }


    public function goodUpdate(request $request)
    {
        if (empty($request['delete'])) {
            //empty
            $good = Goods::find($request['id']);
            $good->name = $request['name'];
            $good->img = $request['img'];
            $good->description = $request['description'];
            $good->price = $request['price'];
            $good->categories_id = $request['categories_id'];
            $good->save();
            return redirect('http://localhost/laravel/public/adminzone/goods');
        } else {
            //must delete
            $del = Goods::find($request['id'])->delete();
            if ($del) {
                $msg = "Товар успешно удален.";
            } else {
                $msg = "Что-то пошло не так. Товар НЕ удален.";
            }
            return redirect('http://localhost/laravel/public/adminzone/goods');
        }
    }

    // ЗАКАЗЫ
    public function ordersAction()
    {
        $orders = Orders::all();
        $categories = Categories::all();
        return view('adminedit', ['data' => $orders, 'cat' => $categories]);

    }

    public function orderView($id)
    {
        $orders = Orders::find($id)->Goods;
        return view('admincrud', ['data' => $orders]);

    }
}
