@extends('layouts.app')

@section('content')
<div class="d-flex justify-content-end">
    <a href="{{route('discussion.create')}}" class="btn btn-success mb-2 btn-sm">Discussions Board</a>
</div>

<div class="card">

    <div class="card-header">
        <strong>Topic: {{$discussion->title}}</strong>
       
    </div>


    <div class="card-body">
        {!! $discussion->content !!}
    </div>

</div>


@endsection