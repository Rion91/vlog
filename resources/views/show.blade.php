@extends('MasterLayout/layout')
@section('content')

<h1>{{ $vlog->title }}</h1>
<p>
    {{ $vlog->detail }}
</p>

<a href="{{ route('vlogs.edit',$vlog->id) }} "><button>Edit</button></a>

<form action="{{ route('vlogs.delete',$vlog->id) }}" method="POST">
    @csrf
    @method('DELETE')
    <Button type="submit">Delete</Button>
</form>


@endsection