<div class="row">
	<div class="col-sm-2">
		{!! form::label('question','Question')!!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('question') ? 'has-error' : "" }} ">
			{{ Form::text('question',NULL, ['class'=>'form-control', 'id'=>'question', 'placeholder'=>'Put your question']) }}
			{{ $errors->first('question', '') }}			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		{!! form::label('choice','A')!!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('choice') ? 'has-error' : "" }} ">
			{{ Form::text('A',NULL, ['class'=>'form-control', 'id'=>'A', 'placeholder'=>'Put your choice']) }}
			{{ $errors->first('A', '') }}			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		{!! form::label('choice','B')!!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('choice') ? 'has-error' : "" }} ">
			{{ Form::text('B',NULL, ['class'=>'form-control', 'id'=>'B', 'placeholder'=>'Put your choice']) }}
			{{ $errors->first('B', '') }}			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		{!! form::label('choice','C')!!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('choice') ? 'has-error' : "" }} ">
			{{ Form::text('C',NULL, ['class'=>'form-control', 'id'=>'C', 'placeholder'=>'Put your choice']) }}
			{{ $errors->first('C', '') }}			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		{!! form::label('choice','D')!!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('choice') ? 'has-error' : "" }} ">
			{{ Form::text('D',NULL, ['class'=>'form-control', 'id'=>'D', 'placeholder'=>'Put your choice']) }}
			{{ $errors->first('D', '') }}			
		</div>
	</div>
</div>
<div class="row">
	<div class="col-sm-2">
		{!! form::label('choice','Answer')!!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('choice') ? 'has-error' : "" }} ">
			{{ Form::text('Answer',NULL, ['class'=>'form-control', 'id'=>'Answer', 'placeholder'=>'Put your choice']) }}
			{{ $errors->first('Answer', '') }}			
		</div>
	</div>
</div>
<div class="text-center">
	<div class="form-group">
  		{{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
  		<a class="btn btn-default btn-close" href="{{route('posts.index')}}">Cancel</a>
	</div>
</div>