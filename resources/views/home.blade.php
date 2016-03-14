@extends('layouts.master')

@section('content')
<div class="container">
    <div class="col-md-3">
        <p>
            Menus
        </p>
    </div>
    <div class="col-md-5">
        <div class="statusses-list">
            @foreach($statuses as $status)
            <div class="statusses-list__status">
                {{ $status->content }}
            </div>
            @endforeach
        </div>
    </div>
    <div class="col-md-4">

    </div>
</div>
@endsection
