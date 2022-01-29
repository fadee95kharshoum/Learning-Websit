@extends('admin.layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Categories / Add new</h4>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.cats.index') }}">Back</a>
    </div>
    @include('admin.inc.errors')
    <form method="POST" action="{{ route('admin.cats.store') }}">
        @csrf
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
