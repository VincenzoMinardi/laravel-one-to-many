@extends('admin.layouts.base')

@section('contents')

    <div class="container">
        <h1>Edit project</h1>
    <form method="POST" action="{{ route('admin.projects.update', ['project' => $project]) }}" novalidate>
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input
                type="text"
                class="form-control @error('title') is-invalid @enderror"
                id="title"
                name="title"
                value="{{ old('title', $project->title) }}"
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
                value="{{ old('type', $project->type->type) }}"
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
                value="{{ old('date',$project->date) }}"
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
                value="{{ old('name',$project->name) }}"
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
                value="{{ old('surname',$project->surname) }}"
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
                value="{{ old('collabs',$project->type->collabs) }}"
            >
            @error('collabs')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="content" class="form-label">Description</label>
            <textarea
                class="form-control @error('Description') is-invalid @enderror"
                id="Description"
                rows="10"
                name="Description">{{ old('Description',$project->description) }}</textarea>
            @error('Description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
    </div>

@endsection