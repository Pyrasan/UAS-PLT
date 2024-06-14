@extends('layout')

@section('konten')

<h4>Add Paper</h4>

<form action="{{ route('paper.submit') }}" method="post" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="writer" class="form-label">Writer</label>
        <input type="text" class="form-control" id="writer" name="writer" required>
    </div>
    <div class="mb-3">
        <label for="language" class="form-label">Language</label>
        <input type="text" class="form-control" id="language" name="language" required>
    </div>
    <div class="mb-3">
        <label for="publisher" class="form-label">Publisher</label>
        <input type="text" class="form-control" id="publisher" name="publisher" required>
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Contact</label>
        <input type="text" class="form-control" id="contact" name="contact" required>
    </div>
    <div class="mb-3">
        <label for="file" class="form-label">File</label>
        <input type="file" class="form-control" id="file" name="file" required>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection