@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <h1 style="text-align: center;">REGISTRATION FORM</h1>
                        @if($message=Session::get('success'))
            <div class="alert alert-sucess alert-block">
                <strong>{{$message}}</strong>
            </div>
            <br>
            @endif
     
                <form target="_blank" name="RegForm" action="/save" 
               method="post">
                {{ csrf_field() }}
                <div class="row">

                  <div class="col">
             <input type="text" class="form-control" placeholder="name" aria-label="First name" name="name">
                 </div>
                 <br><br>  <p>E-mail Address: <input type="text" 
                            size="35" name="email"  placeholder="subh@example.com" /></p><br><br>

              </div>
              <br><br>

             
           Phone Number:
           <br><br>
           <div>
           <p>Telephone: <input type="text" 
                        size="65" name="phone" /></p>
           </div>
                       
                    <div class="col">
                Place:
             <input type="text" class="form-control" placeholder="place" aria-label="Place" name ="place">
                 </div>

                

                            <p>
                Selecy your Department:
                <select type="text" value="" name="department" >
                    <option>CSE</option>
                    <option>ECE</option>
                    <option>CE</option>
                    <option>ME</option>
                    <option>EE</option>
                </select>
            </p>
                            

            <input type="Submit" 
                       value="Submit" name="Submit" />
          

                       <input type="reset" 
                       value="Reset" name="Reset" />
      </form>



                
       


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
