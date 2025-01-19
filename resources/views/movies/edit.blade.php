@extends('layouts.app')

@section('content')
<h1>Edit Movie</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('movies.update', $movie->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title', $movie->title) }}" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description', $movie->description) }}</textarea>
    </div>

    <div>
        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option value="">Select Category</option>
            <option value="Action" {{ old('category', $movie->category) == 'Action' ? 'selected' : '' }}>Action</option>
            <option value="Drama" {{ old('category', $movie->category) == 'Drama' ? 'selected' : '' }}>Drama</option>
            <option value="Comedy" {{ old('category', $movie->category) == 'Comedy' ? 'selected' : '' }}>Comedy</option>
            <!-- Add more categories as needed -->
        </select>
    </div>

    <div>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" min="0" max="10" step="0.1" value="{{ old('rating', $movie->rating) }}" required>
    </div>

    <div>
        <label for="cover_image">Cover Image:</label>
        <input type="file" name="cover_image" id="cover_image" accept="image/*">
        @if ($movie->cover_image)
            <br>
            <img src="{{ asset('storage/' . $movie->cover_image) }}" alt="Cover Image" width="100">
        @endif
    </div>

    <button type="submit">Update Movie</button>
</form>
@endsection
