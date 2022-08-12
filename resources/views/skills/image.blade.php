@extends('layout.console')

@section('content')

        <section class="w3-padding">

            <h2>Skill Image</h2>

            <div class="w3-margin-bottom">
                @if($skill->image)
                    <img src="{{$skill->image}}" width="200">
                @endif
            </div>
            <div class="container">
     
            <div class="panel panel-primary">
            <div class="panel-heading"><h2>Upload Image</h2></div>
            <div class="panel-body">
            
                @if ($message = Session::get('success'))
                <div class="alert alert-success alert-block">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong>{{ $message }}</strong>
                </div>
                <img src="{{ Session::get('image') }}">
                @endif
            
                @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            
                <form action="/console/skills/image/{{$skill->id}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
            
                        <div class="col-md-6">
                            <input type="file" name="image" class="form-control">
                        </div>
            
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-success">Upload</button>
                        </div>
            
                    </div>
                </form>
            
            </div>
            </div>
            </div>
            
        <a href="/console/skills/list">Back to Skill List</a>

        </section>
             
@endsection
