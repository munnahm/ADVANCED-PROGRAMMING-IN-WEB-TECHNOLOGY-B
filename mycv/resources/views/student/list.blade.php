@extends('layouts.studentLayout')
@section('content')
	<table border=1>
        <th>name</th>
        <th>id</th>
        <th>dept</th>
			@foreach($students as $s)
                <tr>
				    <td><a href="{{route('s.details',['id'=>$s->id,'name'=>$s->name])}}"</a>{{$s->name}}</td>
				    <td>{{$s->id}}</td>
				    <td>{{$s->dept}}</td>
                </tr>
			@endforeach
	</table>
@endsection
