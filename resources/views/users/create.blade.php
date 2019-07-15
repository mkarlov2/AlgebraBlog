@extends('layouts.master')

@section('content')

    
    <div class="card" >
        <div class="card-header">Kreiraj korisnika</div>   
            <div class="card-body">
                    <form method="POST" action="{{route('users.store')}}">
                     @csrf
                            <div class="form-group">
                             <label for="name">Ime</label>
                             <input type="text" class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" id="name" name="name" value ="{{old('name')}}" placeholder="Upišite svoje ime">
                             
                            </div>
                            <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control {{$errors->has('email') ? 'is-invalid' : ''}}" id="email" name="email" value ="{{old('email')}}" placeholder="Upišite Vaš Email">
                            </div>
                            <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control {{$errors->has('password') ? 'is-invalid' : ''}}" id="password" name="password" placeholder="Upišite Vaš password">
                            </div>  
                            <div class="form-group">
                            <label for="password_confirmation">Ponovljen password</label>
                            <input type="password" class="form-control {{$errors->has('password_confirmation') ? 'is-invalid' : ''}}" id="password_confirmation" placeholder="Ponovite Vaš password">
                            </div>   
                            @if($errors->any())
                            <div class="form-group">
                                <div class="alert alert-danger">
                                <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                @endforeach
                                </ul>
                            </div>  
                            @endif                       
    </div>
    <div class="form-group">
            <button type="submit" class="btn btn-primary float-right">Kreiraj</button>
            </form>
            <a href="{{route('users.index')}}" class="btn btn-warning">Nazad</a>
            </div>
        </div>

@endsection