@extends('layouts.app')

@section('content')
<h1>Add New Movie</h1>

@if ($errors->any())
    <div style="color: red;">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('movies.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div>
        <label for="title">Title:</label>
        <input type="text" name="title" id="title" value="{{ old('title') }}" required>
    </div>

    <div>
        <label for="description">Description:</label>
        <textarea name="description" id="description" required>{{ old('description') }}</textarea>
    </div>

    <div>
        <label for="category">Category:</label>
        <select name="category" id="category" required>
            <option value="">Select Category</option>
            <option value="Action" {{ old('category') == 'Action' ? 'selected' : '' }}>Action</option>
            <option value="Drama" {{ old('category') == 'Drama' ? 'selected' : '' }}>Drama</option>
            <option value="Comedy" {{ old('category') == 'Comedy' ? 'selected' : '' }}>Comedy</option>
            <!-- Add more categories as needed -->
        </select>
    </div>

    <div>
        <label for="rating">Rating:</label>
        <input type="number" name="rating" id="rating" min="0" max="10" step="0.1" value="{{ old('rating') }}" required>
    </div>

    <div>
        <label for="cover_image">Cover Image:</label>
        <input type="file" name="cover_image" id="cover_image" accept="image/*">
    </div>

    <button type="submit">Add Movie</button>
</form>
@endsection
