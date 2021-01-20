@extends('layouts.main')

@section('content')

 <script src="//cdn.tinymce.com/4/tinymce.min.js">
        
      </script>

      <script>
        tinymce.init({
          selector: 'textarea',
          plugins:'link code print',
          toolbar: 'print'

        });
      </script>

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Update</h1>
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

     

    
      <form action="" method="POST">
        {{csrf_field()}}

        <div class="form-group">
          <label for="summary">Summary</label>
          <input type="text" id="summary" name="summary" class="form-control {{$errors->has('summary') ? 'is-invalid': '' }}" value="{{old('summary', $ticket->summary)}} " required/>

        </div>

        <div class="form-group">
          <label for="description">Description</label>
          <textarea type="textarea" id="description" name="description" class="form-control  {{$errors->has('description') ? 'is-invalid': '' }}" value="{{old('description', $ticket->description)}} " 
            required ></textarea>

            {{Form::label('description')}}
        </div>

        @include('layouts.partials._status')
       

        <button class="btn btn-success " type="submit">Update Ticket</button>
        <a class="btn btn-secondary " href="{{route('tickets.index')}}" type="submit">Back</a>
      </form>


    </main>

@endsection

 