@extends("layouts.app")

@section('title') Show @endsection

@section("content")
<div class="d-flex justify-content-center align-items-center full-height">
    <div class="card w-75">
        <h5 class="card-header">Post Info</h5>
        <div class="card-body">
            <h5 class="card-title">Title: {{$post['title']}}</h5>
            <p class="card-text">Description: {{$post['description']}}</p>
        </div>
    </div>
</div>

<div class="d-flex justify-content-center align-items-center full-height mt-2">
    <div class="card w-75">
        <h5 class="card-header">Post Creator Info</h5>
        <div class="card-body">
            <h5 class="card-title">Name: {{$post['posted_by']}}</h5>
            <p class="card-text">Email: yaminhany12@gmail.com</p>
            <p class="card-text">Created at: xx xx xx xx</p>
        </div>
    </div>
</div>
@endsection