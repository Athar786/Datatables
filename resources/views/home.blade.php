@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}
                    <hr/>
                    <a href="{{route('student.index')}}" class="btn btn-primary">Show Student</a>
                </div>

                <div class="card-body">
                    <form action="{{route('student.store')}}" method="post">
                        <div class="form-group">
                        @csrf
                            <label for="sname" > Name : </label>
                            <input type="text" name="name" id="name" class="form-control col-md-8"/>
                            <label for="contact" > Contact : </label>
                            <input type="text" name="number" id="number" class="form-control col-md-8"/>
                            <label for="email" > Email : </label>
                            <input type="text" name="email" id="email" class="form-control col-md-8"/>
                            <label for="salary">Salary:</label>
                            <input type="text" name="salary" class="form-control col-md-8"/>
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
