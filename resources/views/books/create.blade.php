<!-- app/views/nerds/create.blade.php -->
@extends('layout.master')

@section('content')

<h1 style="text-align: center;">Insert a Book</h1>
	<div class="col-md-4 col-md-offset-4">
		<form method="POST" action="{{ route('books.store') }}">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
		<div class="form-group">
	      	<label for="title">Title</label>
	        <input type="text" class="form-control" name="title" id="title">
	        <div class="alert-danger">{!! $errors->first('title')  !!}</div>
	    </div>
	    <div class="form-group">
	        <label for="author">Author</label>
	        <input type="text" class="form-control" name="author" id="author">
	        <div class="alert-danger">{!! $errors->first('author') !!}</div>
	    </div>
	    <div class="form-group">
	        <label for="content">Content</label>
	        <textarea class="forn-control" rows="5" cols="41" name="content" id="content"></textarea> 
	        <div class="alert-danger">{!! $errors->first('content') !!}</div>
	    </div>
	    <button type="submit" class="btn btn-primary">Submit</button>
	</form>
	</div>	
@stop