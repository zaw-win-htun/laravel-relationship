@extends('app')

 @section('content')
	
	<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1>Articles</h1>
				</div>
				<div class="col-md-4">
					
				</div>
				<div class="col-md-2">
					<a href="{{url('articles/create')}} " class="btn btn-primary form-control">Create Articles</a>
				</div>
			</div>
		</div>
	<hr>
	

	@foreach($articles as $article)
		<article>

			 <a href="{{ url('/articles' , $article->id )}}"><h2>{{ $article->title }}</h2></a>

			<div class="body">
				{{ $article->body}}
			</div>
		</article>

		<div class="container">

			{!! Form::open(['method' => 'DELETE', 'action' => ['ArticlesController@destroy',$article->id]]) !!}
				
				<a href="{{ action('ArticlesController@edit', $article->id) }}" class="btn btn-xs btn-warning">Edit</a>	
				<button class="btn btn-xs btn-danger">Delete</button>
			
			{!! Form::close() !!}
		</div>

		<hr>

	@endforeach
	
	
	
 @stop