@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <h1>This is admin page</h1>


                <h1>Students List</h1>
                @if(Session:: has ('contact_delete'))
    <spam>{{Session::get('contact_delete')}}</spam>
      
       @endif
<table border="1">
    <tr>
        <td>Id</td>
        <td>Name</td>
        <td>Email</td>
        <td>Phone No</td>
        <td>Place</td>
        <td>Department</td>
        <td>Remove</td>

    </tr>
    @foreach($students as $student)
    <tr>
        <td>{{$student['id']}}</td>
        <td>{{$student['name']}}</td>
        <td>{{$student['email']}}</td>
        <td>{{$student['phone']}}</td>
        <td>{{$student['place']}}</td>
        <td>{{$student['department']}}</td>
        <td> <a href="/delete-contact/{{$student->id}}"> Delete</a></td>
        
</tr>
@endforeach
</table>

                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
