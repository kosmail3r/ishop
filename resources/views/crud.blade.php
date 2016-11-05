@extends('indexhtml')
@section('content')
<div class="goggles"> 
		<div class="container"> 
			<h2>Магазин</h2>
			<p>
				<a href="/laravel/public/">Главная</a> //
				<a href="/laravel/public/shop">Магазин</a>
			</p>
			<div class="product-one">
			


			@foreach ($goods as $row)
				<div class="col-md-3 product-left"> 
				 
    		
    		
    	
					<div class="p-one simpleCart_shelfItem">							
								<a href="good/{{$row->id}}">
								<img src="{{$row->img}}" width="190" />
								<div class="mask">
									<span>Просмотр</span>
								</div>
							</a>
						<h4>{{$row->name}}</h4>
						<p><a class="btn btn-primary buy-btn" id="{{$row->id}}"role="button" href="#"><i></i> <span class="price">{{$row->price}} ₴</span></a></p>
					
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

@endsection