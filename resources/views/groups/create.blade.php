@extends('layout.main')

@section('main_content')
<h2>create new group </h2>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>

    <div class="card-body">

        <form method="POST" action="{{url('groups')}}">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Title</label>
                <input type="title" name="title" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                    placeholder="Group Title">
               
            </div>
            
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</div>


@stop