@extends('admin')
@section('catList')
    <div class="now">
        <div class="banner-top">
            <p style="background:lawngreen">
                @if(!empty($msg))
                    {{$msg}}
                @endif
            </p>
            <p>Список имеющихся разделов</p>
            @foreach ($data as $arr)
                <p>{{$arr->name}} <a class="morebtn at-in"
                                     href="http://localhost/laravel/public/adminzone/categories/{{$arr->id}}">Изменить</a>
                </p>
            @endforeach
            <form method="post">
                <p>Имя категории :
                    <input type="text" name='name'></p>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><input class="morebtn at-in" type="submit" value="Создать картегорию"></p>
            </form>
        </div>
    </div>
@endsection

@section('catAdd')
    <div class="clearfix">
        <form method="post">
            <p>Имя категории :
                <input type="text" name='name'></p>
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <p><input class="morebtn at-in" type="submit" value="Создать картегорию"></p>
        </form>
    </div>
@endsection

@section('allUsers')
    <div class="now">
        <div class="banner-top">
            <p style="background:lawngreen">
                @if(!empty($msg))
                    {{$msg}}
                @endif
            </p>
            <p>Список имеющихся пользователей</p>
            @foreach ($data as $arr)
                <p>{{$arr->name}} <a class="morebtn at-in"
                                     href="http://localhost/laravel/public/adminzone/user/{{$arr->id}}">Изменить</a></p>
            @endforeach
            <p>Создать нового пользователя</p>
            <form method="post">
                <p>Имя пользователя :</p>
                <p>
                    <input type="text" name='name'></p>
                <p>E-mail :</p>
                <p>
                    <input type="text" name='email'></p>
                <p>Пароль :</p>
                <p>
                    <input type="password" name='password'></p>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><input class="morebtn at-in" type="submit" value="Создать пользователя"></p>
            </form>
        </div>
    </div>
@endsection
@section('allGoods')
    <div class="now">
        <div class="banner-top">
            <p style="background:lawngreen">
                @if(!empty($msg))
                    {{$msg}}
                @endif
            </p>
            <p>Список имеющихся товаров</p>
            @foreach ($data as $arr)
                <p>{{$arr->name}} <a class="morebtn at-in"
                                     href="http://localhost/laravel/public/adminzone/good/{{$arr->id}}">Изменить</a>
                    <img src="{{$arr->img}}" width="70"/></p>
            @endforeach

            <p>Создать новый товар</p>
            <form method="post">
                <p>Название :</p>
                <p>
                    <input type="text" name='name'></p>
                <p>Kатегория товара :
                    <select name="categories_id">
                        @foreach ($cat as $arr)
                            <option value="{{$arr->id}}">{{$arr->name}}</option>
                        @endforeach
                    </select></p>
                <p>Картинка (ref) :</p>
                <p>
                    <input type="text" name='img'></p>
                <p>Описание :</p>
                <p>
                    <textarea name='description'></textarea></p>
                <p>Цена :</p>
                <p>
                    <input type="text" name='price'></p>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><input class="morebtn at-in" type="submit" value="Добавить товар"></p>
            </form>
        </div>
    </div>
@endsection

@section('allOrders')
    <div class="now">
        <div class="banner-top">
            <p style="background:lawngreen">
                @if(!empty($msg))
                    {{$msg}}
                @endif
            </p>
            <p>Список имеющихся заказов</p><br/>
            @foreach ($data as $arr)
                <br/><p>Заказ №{{$arr->id}} создан {{$arr->created_at}} <a class="morebtn at-in"
                                                                           href="#">Посмотреть</a></p><br/>
            @endforeach

        </div>
    </div>
@endsection