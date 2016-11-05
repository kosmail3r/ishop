@extends('edit')
@section('catEdit')
    <div class="now">
        <div class="banner-top">
        <p>Редактируем раздел {{$data->name}}</p>
               <form method="post">
                   <p>
                       <input type="radio" name="delete" value="1"> Удалить категорию</p>
                <p>Имя категории :
                    <input type="text" name='name' value="{{$data->name}}"></p>
                <input type="hidden" name="id" value="{{$data->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><input class="morebtn at-in" type="submit" value="Изменить картегорию"></p>
            </form>
        </div>
    </div>
@endsection

@section('userEdit')
    <div class="now">
        <div class="banner-top">
            <p>Редактируем пользователя {{$data['name']}}</p>
            <form method="post">
                <p>
                    <input type="radio" name="delete" value="1"> Удалить пользователя</p>
                <p>Имя пользователя :
                    <input type="text" name='name' value="{{$data['name']}}"></p>
                <p>E-mail пользователя :
                    <input type="text" name='email' value="{{$data['email']}}"></p>
                <input type="hidden" name="id" value="{{$data['id']}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><input class="morebtn at-in" type="submit" value="Изменить пользователя"></p>
            </form>
        </div>
    </div>
@endsection

@section('goodEdit')
 <div class="now">
        <div class="banner-top">
            <p>Редактируем товар {{$data['name']}}</p>
            <form method="post">
                <p>
                    <input type="radio" name="delete" value="1"> Удалить товар</p>
                <p>Название товара :
                    <input type="text" name='name' value="{{$data['name']}}"></p>
                <input type="hidden" name="categories_id" value="{{$data['categories_id']}}">
                <p>Ссылка на изображение :
                    <input type="text" name='img' value="{{$data['img']}}"></p>
                <p>Стоимость товара :
                    <input type="text" name='price' value="{{$data['price']}}"></p>
                <p>Описание товара :
                    <textarea name='description' rows="7" cols="45">{{$data['description']}}</textarea> </p>
                <input type="hidden" name="id" value="{{$data['id']}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <p><input class="morebtn at-in" type="submit" value="Изменить товар"></p>
            </form>
        </div>
    </div>
@endsection
