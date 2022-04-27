@extends('MasterLayout.layout')
@section('content')

<a href="{{ route('vlogs.create') }}"><Button>Create vlog</Button></a>

@foreach ($vlogs as $vlog)

<h3>
    <span>{{ $loop->iteration }}</span> 
    <a href="{{ route('vlogs.show',$vlog->id)}}">
        <button>{{ $vlog->title }}</button>
    </a> 
</h3>

@endforeach

@endsection