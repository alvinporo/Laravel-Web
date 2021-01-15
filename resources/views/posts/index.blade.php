@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-sm-12">
    <div class="text-center">
    <h2 style="font-size: 50px">
    	<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
 		 <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
  			<path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
			</svg>
    DASHBOARD</h2>

    </div>
</div>
</div>

<table class="table table-bordered">
	<tr>
		<th style="font-size: 18px">No</th>
		<th style="font-size: 18px">Question</th>
		<th style="font-size: 18px">A</th>
		<th style="font-size: 18px">B</th>
		<th style="font-style: 18px">C</th>
		<th style="font-style: 18px">D</th>
		<th style="font-style: 18px">Correct Answer</th>
		<th class="text-center">
			<a href="{{route('posts.create')}}" class="btn btn-success btn-sm">
				<i class="glyphicon glyphicon-plus"></i>
			</a>
		</th>
	</tr>
	<?php $no=1; ?>
	@foreach ($post as $key => $value)
		<tr>
			<td>{{$no++}}</td>
			<td>{{$value->question}}</td>
			<td>{{$value->A}}</td>
			<td>{{$value->B}}</td>
			<td>{{$value->C}}</td>
			<td>{{$value->D}}</td>
			<td>{{$value->Answer}}</td>
			<td class="text-center">
				<a class="btn btn-primary btn-sm" href="{{route('posts.edit',$value->id)}}">
					<i class="glyphicon glyphicon-pencil"></i>
				</a>
				{{ Form::open(['method' => 'DELETE','route' => ['posts.destroy', $value->id],'style'=>'display:inline'])}}
              
              <button type="submit" style="display: inline;" class="btn btn-danger btn-sm">
              	<i class="glyphicon glyphicon-trash">
              		
              	</i>
              </button>
            {!! Form::close() !!}
			</td>
		</tr>
	@endforeach
	
</table>
@endsection