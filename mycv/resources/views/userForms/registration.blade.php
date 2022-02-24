@extends('layouts.studentLayout')
@section('content')
{{$errors}}
<form method="post" action="{{route('s.home')}}">
@csrf
	<fieldset>
		<legend>REGISTRATION</legend>
		Username: <input type="text" name="username" value="{{old('username')}}">
        <span style="color:red">@error('username') {{$message}} @enderror</span><br>
		Email: <input type="email" name="email" value="{{old('email')}}">
        <span style="color:red">@error('email') {{$message}} @enderror</span><br>
		Password: <input type="Password" name="password">
        <span style="color:red">@error('password') {{$message}} @enderror</span><br>
		Confirm Password: <input type="Password" name="conPassword">
        <span style="color:red">@error('conPassword') {{$message}} @enderror</span><br>
		<input type="submit" name="Submit">
	</fieldset>
        {{$conMessage}}
</form>
@endsection

