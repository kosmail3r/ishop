@extends('admin')
@section('menu')
    <div class="now">
        <a class="morebtn" href="http://localhost/laravel/public/">На главную</a>
        <a class="morebtn at-in" href="http://localhost/laravel/public/adminzone/goods">Товары</a>
        <a class="morebtn" href="http://localhost/laravel/public/adminzone/orders">Заказы</a><br />
        <a class="morebtn at-in" href="http://localhost/laravel/public/adminzone/categories">Разделы</a>
        <a class="morebtn " href="http://localhost/laravel/public/adminzone/users">Пользователи</a>
        <div class="clearfix"> </div>
    </div>
@endsection

@section('menucrud')
    <div class="now">
        <a class="morebtn" href="http://localhost/laravel/public/adminzone">К списаку разделов</a>
        <a class="morebtn at-in" href="http://localhost/laravel/public/adminzone/goods">Создать</a>
        <a class="morebtn" href="http://localhost/laravel/public/adminzone/orders">Редактировать</a><br />
        <a class="morebtn at-in" href="http://localhost/laravel/public/adminzone/sections">Удалить</a>
        <div class="clearfix"> </div>
    </div>
@endsection
