@extends('layout')

@section('konten')

<div class="mb-5 d-flex justify-content-between">
    <a class="btn btn-danger" href="{{ route('paper') }}">Back</a>
    <a class="btn btn-success" href="{{ route('paper.add') }}">Add Paper</a>
</div>

<div class="table-responsive">
    <table class="table table-hover">
        <thead class="table-primary">
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Writer</th>
                <th>Language</th>
                <th>Publisher</th>
                <th>Contact</th>
                <th>File</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($paper as $no => $data)
                <tr>
                    <td>{{ $no + 1 }}</td>
                    <td>{{ $data->title }}</td>
                    <td>{{ $data->writer }}</td>
                    <td>{{ $data->language }}</td>
                    <td>{{ $data->publisher }}</td>
                    <td>{{ $data->contact }}</td>
                    <td>
                        @if($data->file)
                            <a href="{{ asset('storage/'.$data->file) }}" target="_blank">View Paper File</a>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('paper.edit', $data->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('paper.delete', $data->id) }}" method="post" style="display:inline;">
                            @csrf
                            <button class="btn btn-sm btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection
