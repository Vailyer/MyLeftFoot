@extends('layouts.default')
@section('content')
<div class="container text-center loginform">
<form method="post" action="{{route('my-account/update')}}" class="form-signin">
    @csrf
    @method('PUT')
    <img class="mb-4" src="img/shoe.png" alt="" width="72" height="72">
    <h1 class="h3 mb-3 font-weight-normal">Edit Account Details:</h1>
    <label for="Fname" class="col-md-8 col-form-label text-md-center">First Name</label>
    <input id="Fname" type="text" class="form-control{{ $errors->has('Fname') ? ' is-invalid' : '' }}" name="Fname" value="{{ $user->Fname }}" required autofocus>

    @if ($errors->has('Fname'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('Fname') }}</strong>
        </span>
    @endif
    <label for="Sname" class="col-md-8 col-form-label text-md-center">Surname</label>
    <input id="Sname" type="text" class="form-control{{ $errors->has('Sname') ? ' is-invalid' : '' }}" name="Sname" value="{{ $user->Sname }}" required autofocus>

    @if ($errors->has('Sname'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('Sname') }}</strong>
        </span>
    @endif
    <label for="email" class="col-md-8 col-form-label text-md-center">Email Adress</label>

    <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $user->email }}" required>
    @if ($errors->has('email'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('email') }}</strong>
        </span>
    @endif

    <label for="address" class="col-md-8 col-form-label text-md-center">Address</label>

    <input id="address" type="text" class="form-control{{ $errors->has('address') ? ' is-invalid' : '' }}" name="address" value="{{ $user->address }}" required>
    @if ($errors->has('address'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('address') }}</strong>
        </span>
    @endif

    <label for="Pcode" class="col-md-8 col-form-label text-md-center">Postal Code</label>

    <input id="Pcode" type="text" class="form-control{{ $errors->has('Pcode') ? ' is-invalid' : '' }}" name="Pcode" value="{{ $user->Pcode }}" required>
    @if ($errors->has('Pcode'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('Pcode') }}</strong>
        </span>
    @endif

    <label for="password" class="col-md-8 col-form-label text-md-center">{{ __('Password') }}</label>

    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

    @if ($errors->has('password'))
        <span class="invalid-feedback" role="alert">
            <strong>{{ $errors->first('password') }}</strong>
        </span>
    @endif
    <label for="password-confirm" class="col-md-8 col-form-label text-md-center">{{ __('Confirm Password') }}</label>
    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

    <button type="submit" class="btn btn-primary"> Update </button>
</form>
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>
@stop