@extends('layouts.master')

@section('content')
<div class="friends-list">
    @foreach($friends as $friend)
        <div class="col-md-6">
            <div class="friends-list__friend">
                <img src="{{ '/'.$images[array_rand($images)] }}" alt="" class="friends-list__avatar" />
                <a class="friends-list__fullname" >{{ $friend->first_name.' '.$friend->last_name }}</a>
            </div>
        </div>
    @endforeach
</div>
@endsection
