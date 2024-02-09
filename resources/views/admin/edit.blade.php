@extends('layouts.admin')

@section('content')
    <div class="container">
        <form action="{{route('admin.projects.update', ['project' => $project->id])}}">
        @csrf
        @method('patch')
        <h1 class="text-center">Edit a project</h1>
        <div class="mb-3">
            <label class="form-label">
                <h2>Project title</h2>
            </label>
            <input type="text" class="form-control" name="title" value="{{old('title'), $project->title}}">
        </div>
        <div class="mb-3">
            <label class="form-label">
                <h3>Project Description</h3>
            </label>
            <textarea class="form-control"  rows="3" name="description" value="{{old('description'), $project->description}}" ></textarea>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <div>
            <a class="btn btn-secondary my-3" href="{{route('admin.projects.show', $project)}}">Go back to single project</a>
            <br>
            <a class="btn btn-secondary" href="{{ route('admin.projects.index') }}">Go back to projects list</a>
        </div>
        </form>
    </div>
@endsection