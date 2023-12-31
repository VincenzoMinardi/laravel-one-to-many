@extends('admin.layouts.base')

@section('contents')
<div class="container">
    <h1>Add new project</h1>

    

    <form method="POST" action="{{ route('admin.projects.store') }}" novalidate>
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{ old('title') }}"
            >
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input
                type="text"
                class="form-control @error('type') is-invalid @enderror"
                id="type"
                name="type"
                value="{{ old('type') }}"
            >
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="url_image" class="form-label">date</label>
            <input
                type="date"
                class="form-control @error('date') is-invalid @enderror"
                id="date"
                name="date"
                value="{{ old('date') }}"
            >
            @error('date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">name</label>
            <input
                type="text"
                class="form-control @error('name') is-invalid @enderror"
                id="name"
                name="name"
                value="{{ old('name') }}"
            >
            @error('name')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">surname</label>
            <input
                type="text"
                class="form-control @error('surname') is-invalid @enderror"
                id="surname"
                name="surname"
                value="{{ old('surname') }}"
            >
            @error('surname')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Collabs</label>
            <input
                type="text"
                class="form-control @error('collabs') is-invalid @enderror"
                id="collabs"
                name="collabs"
                value="{{ old('collabs') }}"
            >
            @error('collabs')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="content" class="form-label">description</label>
            <textarea
                class="form-control @error('description') is-invalid @enderror"
                id="description"
                rows="10"
                name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>

@endsection