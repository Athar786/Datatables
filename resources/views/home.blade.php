@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                <hr/>
                <a href="/student" class="btn btn-primary">Show Student</a>
</div>

                <div class="card-body">
                   <form action="{{route('student.store')}}" method="post">
                    <div class="form-group">
                    @csrf
                        <label for="sname" > Name : </label>
                        <input type="text" name="sname" id="sname" class="form-control col-md-8"/>
                        <label for="contact" > Contact : </label>
                        <input type="text" name="snumber" id="snumber" class="form-control col-md-8"/>
                        <label for="email" > Email : </label>
                        <input type="text" name="semail" id="semail" class="form-control col-md-8"/>
                        </br>
                        <input type="submit" value="Submit" class="btn btn-success col-md-8"><hr/><br/>
                    </div>
                   </form>
                   </div>
            </div>
        </div>
    </div>
</div>


@endsection
