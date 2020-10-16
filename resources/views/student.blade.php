@extends('layouts.app')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>

    @section('styles')
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css">
    @endsection
   
     
    

</head>
<body>
<div class="container">  
<br />
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <a href="/home" class="btn btn-primary">Add Student</a>

                <div class="card-body">
                <table class="table table-bordered table-striped" id="stu_tbl">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                   </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
      
        $('#stu_tbl').DataTable({
            processing:true,
            serverSide:true,     
            ajax:"{{ route('student.index')}}",     
            
            columns:[
                {data:'DT_RowIndex',name:'DT_RowIndex'},
                {data:'sname',name:'sname'},
                {data:'snumber',name:'snumber'},
                {data:'email',name:'semail'},
                {
                    data:'action',
                    name:'action',
                    orderable:true,
                    searchable: true,
                    paging: true
                },
            ]
        });

    });
</script>

</body>
</html>
@endsection