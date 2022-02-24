@extends('layouts.studentLayout')
@section('content')
	<table border=1>
        <th>Username</th>
        <th>Id</th>
        <th>Email</th>
        <th>Registered Time</th>
        <th>Edit</th>
			@foreach($students as $s)
                <tr>
				    <td><a href="{{route('s.details',['id'=>$s->id,'name'=>$s->username])}}"</a>{{$s->username}}</td>
				    <td>{{$s->id}}</td>
                    <td>{{$s->email}}</td>
                    <td>{{$s->created_at}}</td>
                    <td><button style="color:green" onclick="window.location.href='{{route('s.edit',['id'=>encrypt($s->id)])}}';">Edit</button></td>
                </tr>
			@endforeach
	</table>
@endsection
