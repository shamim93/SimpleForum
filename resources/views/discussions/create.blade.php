@extends('layouts.app')

@section('content')

<div class="card">

    <div class="card-header">Add New Discussion</div>

    <div class="card-body">
        <form action="#" method="post">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <label for="content">Discussion</label>
            <textarea name="content" id="" cols="5" rows="5" class="form-control"></textarea>
            <label for="channel">Discussion Channel</label>
            <div class="form-group">
                <select name="channel" id="" class="form-control">
                    @foreach($channels as $channel)
                    <option value="{{$channel->id}}">{{$channel->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary" value="Submit">
            </div>
        </form>
    </div>
</div>

@endsection