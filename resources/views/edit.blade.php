@extends('MasterLayout.layout')
@section('content')

<form action="{{ route('vlogs.update', $vlog->id) }}" method="POST">
    @csrf
    @method("PUT")

    <label for="">
        Title
    </label>
    <input type="text" name="title" value="{{ $book->title }}"><br>

    <label for="" >
        Detail
    </label>
    <input type="text" name="detail" value="{{ $book->author_name }}" style="margin-top : 10px;"><br>
    
    <button type="submit" style="margin-top : 5px">Create</button>

</form>

@endsection