@extends('MasterLayout.layout')
@section('content')
    
<form action="{{ route('vlogs.store') }}" method="POST">
    @csrf
    <label for="">
        Title
    </label>
    <input type="text" name="title"><br>

    <label for="" >
        Detail
    </label>
    <input type="text" name="detail" style="margin-top : 10px;"><br>
    
    <button type="submit" style="margin-top : 5px">Create</button>

</form>

@endsection