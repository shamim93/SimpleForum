@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end">
    <a href="{{route('discussion.create')}}" class="btn btn-success mb-2 btn-sm">Discussions Board</a>
</div>
@foreach($discussions as $discussion)
<div class="card">

    <div class="card-header">
        <strong>Author: {{$discussion->user->name}}</strong>
        <a href="{{route('discussion.show', $discussion->slug)}}" class="btn btn-info btn-sm float-right">View</a>
    </div>


    <div class="card-body">
        {{ $discussion->title }}
    </div>

</div>
@endforeach
{{ $discussions->links() }}
@endsection