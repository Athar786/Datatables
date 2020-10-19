@extends('layouts.app')



@section('content')
<div class="container">  
<br />
    <div class="row justify-content-center">
    
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                    <a href="/home" class="btn btn-primary col-md-2">Add Student</a>

                <div class="card-body">
                <table class="table table-bordered table-striped " id="stu_tbl">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Mobile No</th>
                            <th>Email</th>
                            <th>Action</th>
                            
                        </tr>
                        </thead>
                        <tbody>
                        </tbody>
                   </table>
                    @foreach($user as $row)
                   <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                                <div class="col-md-4">
                                  <img src="{{ asset('images/img5.jpeg') }}" class="card-img-top" alt="image">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                            <label> Name: <b>{{$row->name}} </b></label></br>
                                            <label> Email: <a href="mailto:{{$row->email}}">{{$row->email}}</a> </label></br>
                                            <label> Phone: 9558239911 </label></br>
                                            <label> Age:23</label></br>
                                            <button type="button" class="btn btn-success">Send Interest</button>
                                            <button type="button" class="btn btn-danger">decline</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        
                        


                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
      $('#stu_tbl').DataTable({
          processing:false,
          serverSide:true,     
          ajax:"{{ route('student.index')}}",     
          
          columns:[
              {data:'DT_RowIndex',name:'DT_RowIndex'},
              {data:'sname',name:'name'},
              {data:'snumber',name:'number'},
              {data:'email',name:'email'},
              {
                data: 'action', 
                name: 'action', 
                orderable:true,
                searchable: true,
              }
          ]
      });

  });


</script>


@endsection