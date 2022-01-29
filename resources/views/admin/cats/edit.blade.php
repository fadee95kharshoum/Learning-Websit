@extends('admin.layout')

@section('content')
    <div class="d-flex justify-content-between mb-3">
        <h4>Categories / Edit / {{ $cats->name }}</h4>
        <a class="btn btn-sm btn-primary" href="{{ route('admin.cats.index') }}">Back</a>
    </div>
    @include('admin.inc.errors')
    <form method="POST" action="{{ route('admin.cats.update') }}">
        @csrf
        <input type="hidden" name="id"value="{{ $cats->id }}">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" class="form-control" value="{{ $cats->name }}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
