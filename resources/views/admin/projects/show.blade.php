@extends('layouts.admin')
@section('page-title')
    Projects {{ $project->name }}
@endsection
@section('main-content')
    <div class="container-fluid">
        <div class="row justify-content-center">
            <article class="card w-50 p-0" style="width: 18rem;">

                <div class="card-body">
                    <h5 class="card-title">{{ $project->name }}</h5>
                    <p class="card-text">{{ $project->content }}</p>
                    <img src="{{ asset('storage/' . $project->image) }}" alt="">
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">ID Number: {{ $project->id }}</li>
                    <li class="list-group-item">{{ $project->type->name }}</li>
                    <li class="list-group-item">
                        @forelse ($project->technologies as $technology)
                            {{ $technology->name }}
                        @empty
                            No Tech
                        @endforelse
                    </li>
                    <li class="list-group-item"><a href="{{ $project->url }}">{{ $project->url }}</a></li>
                </ul>
                <div class="card-body">
                    <a href="{{ route('admin.projects.index') }}" class="btn btn-primary">Back to index</a>
                    <a href="{{ route('admin.projects.edit', $project) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('admin.projects.destroy', $project) }}" method="POST" class="d-inline-block">
                        @csrf
                        @method('DELETE')
                        <input type="submit" class="btn btn-danger " value="Delete">
                    </form>
                </div>
            </article>
        </div>
    </div>
@endsection
