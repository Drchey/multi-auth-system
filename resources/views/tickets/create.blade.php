@extends('layouts.main')

@section('content')

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

<script>
  tinymce.init({
    selector: 'textarea',
    plugins:'link code print ',
    toolbar: 'print'

  });
</script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Dashboard</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group mr-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>

    
        <div class="row">
            <div class="">
              
              {!! Form::open(['route' => 'tickets.store', 'data-parsley-validate' =>'','files' =>true ]) !!}

                {{ Form::label('summary', 'Summary', ['style'=>'margin-top:20px;'])}}
                {{ Form::text('summary', null, array('class' =>'form-control', 'required' =>'', 'maxlength'=>'255'))}}
                  
            

                  {{ Form::label('category_id', 'Category', ['style'=>'margin-top:20px;'])}}
                  <select class="form-control" name="category_id">
                      @foreach($categories as $category)
                      <option value="{{$category->id}}">{{ $category->name }}</option>
                      @endforeach
                  </select>
                  
              

                {{ Form::label('description', 'Description', ['style'=>'margin-top:20px;'])}}
                {{ Form::textarea('description',null, array('class' =>'form-control'))}}
                

                {{Form::submit('Create new Ticket', array('class'=>'btn btn-success btn=lg btn-block', 'style' => 'margin-top:30px;'))}}

              {!! Form::close() !!}


            </div>
</div


    </main>

@endsection

 