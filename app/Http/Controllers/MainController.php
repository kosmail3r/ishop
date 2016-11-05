<?php

namespace App\Http\Controllers;

use App\coments;
use DB;
use App\Goods;
use App\categories;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Http\Requests;

class MainController extends Controller
{
    public function indexAction()
    {
        if (!Auth::check()) {
            //  echo "Not auth";
        }

        return view('main');

    }

    public function goodAction($id = null)
    {
        $goods = Goods::find($id);
        $categories = categories::all();
        $coments = goods::find($id)->coments;
        return view('product', ['goods' => $goods, 'categories' => $categories, 'coments' => $coments]);
    }

    public function shopAction()
    {
        $goods = Goods::paginate(6);
        $categories = categories::all();
        return view('shop', ['goods' => $goods, 'categories' => $categories]);

    }


    public function categoryAction($id)
    {

        $categories = categories::all();
        $goods = categories::find($id)->goods;
        //$goods = categories::whereIn('id', $id)->goods->paginate(6);
        //$goods->paginate(6);
        return view('shop', ['goods' => $goods, 'categories' => $categories]);
    }

    public function searchAction(Request $request)
    {
        if (!empty($request['key'])) {
            $key = $request['key'];
            $goods = Goods::where('name', 'LIKE', '%' . $key . '%')->paginate(6);
        } elseif (!empty($request['from']) && !empty($request['to'])) {
            $diap = [$request['from'], $request['to']];
            $goods = Goods::whereBetween('price', $diap)->paginate(6);
        } else {
            $goods = Goods::paginate(6);
        }
        $categories = categories::all();
        return view('shop', ['goods' => $goods, 'categories' => $categories]);
    }


    public function addComment(Request $request)
    {
        $id = $request->goods_id;
        $goods = Goods::find($id);
        $categories = categories::all();

        $coment = coments::create(['goods_id' => $request->goods_id, 'name' => $request->name, 'text' => $request->text]);
        $coments = goods::find($id)->coments;
        return view('product', ['goods' => $goods, 'categories' => $categories, 'coments' => $coments]);

    }
}
