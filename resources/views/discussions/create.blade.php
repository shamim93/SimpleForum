@extends('layouts.app')
@push('css')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.css">
@endpush
@section('content')

<div class="card">

    <div class="card-header">Add New Discussion</div>

    <div class="card-body">
        <form action="{{route('discussion.store')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control {{$errors->has('title') ? 'is-invalid' :''}}" name="title"
                    value="{{old('title')}}">
                @if($errors->has('title'))
                <span class="invalid-feedback">{{$errors->first('title')}}</span>
                @endif
            </div>
            <label for="content">Discussion</label>
            <input id="x" type="hidden" name="content">
            <trix-editor input="x" class="form-control {{$errors->has('discussion') ? 'is-invalid' :''}}"></trix-editor>
            @if($errors->has('discussion'))
            <span class="invalid-feedback">{{$errors->first('discussion')}}</span>
            @endif
            <label for="channel">Discussion Channel</label>
            <div class="form-group">
                <select name="channel" id="" class="form-control {{$errors->has('channel') ? 'is-invalid' : ''}}">
                    @foreach($channels as $channel)
                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                    @endforeach
                    @if($errors->has('channel'))
                    <span class="invalid-feedback">{{$errors->first('channel')}}</span>
                    @endif
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.2.3/trix.min.js"></script>
@endpush
@endsection