@extends('layout.main')

@section('main_content')


<div class="row clearflix">

    <div class="col md-6">
          <div class="col-md-6"></div>
           
     <h2>User Group</h2>

    </div>

    <div class="col md-6 text-right">

        <a class="btn btn-info" href="{{url('groups/create')}}" >New group</a>

    </div>

</div>

<!-- DataTales Example -->
<div class="card shadow mb-4">

    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <!-- {{ $groups }} -->
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Actions</th>

                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Actions</th>

                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($groups as $group)
                    <tr>
                        <td>{{ $group->id   }}</td>
                        <td>{{ $group->title}}</td>
                        <td>
                            <a href="" class="btn btn-danger">delete</a>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop