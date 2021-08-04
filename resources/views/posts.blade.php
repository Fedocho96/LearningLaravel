@extends('layout')

@section('content')
	<h1>Holis soy los posts</h1>
	<ul>
		@foreach($data as $item)
			<li>
				<a href="{{ route('posts') }}"> {{ $item['title'] }} </a>			
			</li>
		@endforeach
	</ul>
@endsection