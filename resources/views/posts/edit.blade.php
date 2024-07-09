@extends("layouts.app")
@section('title') Edit Post @endsection
@section('content')
<form method="POST" action="{{route('posts.update', 1)}}">
    @csrf
    @method('PUT')
    <div class="container mb-3">
        <label class="form-label">Title</label>
        <input name='title' class="form-control">
    </div>
    <div class="container mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Description</label>
        <textarea name='description' class="form-control" rows="3"></textarea>
    </div>
    <div class="container mb-3">
        <label for="exampleFormControlInput1" class="form-label">Post Creator</label>
        <select name='post_creator' class="form-control">
            <option value="Yamin"> Yamin </option>
            <option value="Ahmed"> Ahmed </option>
        </select>
    </div>
    <div class="container mb-3">
        <button type='submit' class="btn btn-primary"> Update </button>
    </div>
</form>
@endsection