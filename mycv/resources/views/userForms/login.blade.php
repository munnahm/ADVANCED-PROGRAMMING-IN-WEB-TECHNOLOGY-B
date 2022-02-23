@extends('layouts.studentLayout')
@section('content')
<form method="post" action="{{route('s.home')}}">
@csrf
{{$errors}}
	<fieldset>
		<legend>LOGIN</legend>
		Userame: <input type="text" name="username" placeholder="Userame" value="{{old('username')}}">
        <span style="color:red">@error('username') {{$message}} @enderror</span><br>
        
		Password: <input type="Password" name="password" placeholder="Password(8)" value="">
        <span style="color:red">@error('password'){{$message}} @enderror</span>
        <br>
		<input type="submit" name="Submit">
	</fieldset>
</form>
@endsection
