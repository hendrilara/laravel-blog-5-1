@extends('frontend.master')

@section('content')
<div class="row">
<div class="col-lg-8 col-lg-push-2 col-md-8 col-md-push-2 col-sm-12 col-xs-12">
<div class="content-box">
  {!! Form::open(array('url' => 'post'))!!}

    {!! Form::hidden('id',request('id')) !!}
  <div class="form-group">
    {!! Form::label('title', 'Title')!!}
	 {!! Form::text('title', null, array('class' => 'form-control','placeholder' => 'Title Post', 'required'))!!}
  </div>

   <div class="form-group">
    {!! Form::label('description', 'Description')!!}
	 {!! Form::text('description', null, array('class' => 'form-control', 'placeholder' => 'Description Post', 'required'))!!}
  </div>

   <div class="form-group">
    {!! Form::label('body', 'Code Script')!!}
    {!! Form::textarea('body', null, array('class' => 'form-control', 'id' =>'code'))!!}
    </div>
    <div class="form-group">
    <label for="sel1">Pilih Theme Kesukaan:</label>
    <select onchange="selectTheme()" class="form-control" id="select">
      <option selected>default</option>
    <option>ambiance</option>
    <option>blackboard</option>
    <option>colorforth</option>
    <option>dracula</option>
    <option>monokai</option>
    </select>
    </div>

    <div class="form-group">
     <div class="controls">
     {!! Form::label('category', 'Kategori')!!}
     {!! Form::select('category_id', $category->lists('name','id'), request('category_id'),array('class' => 'form-control')) !!}
     </div>

  </div>

  	 <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
     <input type="submit" name='save' class="btn btn-default" value = "Save Draft" />


  	  {!! Form::close()!!}
  	  </div>
  	  </div>
  	  </div>

@endsection