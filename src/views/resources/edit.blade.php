<<<<<<< HEAD
@extends(Config::get('admin::admin.template'))
=======
<<<<<<< HEAD
@extends(Config::get('admin::admin.template'))
=======
@extends('admin::template')
>>>>>>> 9915882e3f7d6642bffcb31c5bd1de414fd4d3dc
>>>>>>> 53a5123897370f9f62a4a5fefa48de54ea763d38

@section('main')
	
	<h4 class="page-header">Edit Data</h4>
	{{
		Form::model($data, array(
				'url'		=> 	str_replace('/edit','',URL::full()),
				'method'	=>	'PATCH'
			)
		)
	}}
	<?php
	$form = $resource['form']['update'];
	if($form == 'auto')
	{
		$form = $resource['form']['create'];
	} 
	?>
	@foreach ($form as $name => $options)
	
	<div class="form-group">
		{{ Form::label($name, $options['title']) }}
		{{ Resource::form($name, $options['field']) }}
	</div>
	
	@endforeach

	<div class="form-group">
		<button type="submit" class="btn btn-danger">
			Submit
		</button>
		<a href="{{ url('admin/'. Request::segment(2)) }}" class="btn btn-default">Cancel</a>
	</div>

	{{ Form::close() }}

@endsection