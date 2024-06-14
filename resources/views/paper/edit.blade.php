@extends('layout')

@section('konten')

<h4>Edit Paper</h4>

<form action="{{ route('paper.update', $paper->id) }}" method="post">
    @csrf
    <label>Title</label>
    <input type="text" name="title" value="{{ $paper->title }}" class="form-control mb-2">
    <label>Writer</label>
    <input type="text" name="writer" value="{{ $paper->vwriter }}" class="form-control mb-2">
    <label>Language</label>
    <input type="text" name="language" value="{{ $paper->language }}" class="form-control mb-2">
    <label>Publisher</label>
    <input type="text" name="publisher" value="{{ $paper->publisher }}" class="form-control mb-2">
    <label>Contact</label>
    <input type="text" name="contact" value="{{ $paper->contact }}" class="form-control mb-2">
    <label>File</label>
    <input type="file" id="fileUpload" value="{{ $paper->file }}" name="contact" accept=".pdf" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>

@endsection