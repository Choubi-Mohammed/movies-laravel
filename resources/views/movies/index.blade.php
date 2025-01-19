@extends('layouts.app')

@section('content')
<h1>Movies</h1>

<!-- زر لإضافة فيلم جديد -->
<a href="{{ route('movies.create') }}">Add New Movie</a>

<!-- Filter by Category -->
<form method="GET" action="{{ route('movies.index') }}" style="margin-top: 20px; margin-bottom: 20px;">
    <label for="category">Filter by Category:</label>
    <select name="category" id="category" onchange="this.form.submit()">
        <option value="">All Categories</option>
        <option value="Action" {{ request('category') == 'Action' ? 'selected' : '' }}>Action</option>
        <option value="Drama" {{ request('category') == 'Drama' ? 'selected' : '' }}>Drama</option>
        <option value="Comedy" {{ request('category') == 'Comedy' ? 'selected' : '' }}>Comedy</option>
        <!-- Add more categories as needed -->
    </select>
</form>

<!-- Movies List -->
<ul>
    @forelse($movies as $movie)
    <li style="margin-bottom: 20px;">
        <!-- صورة الغلاف -->
        @if($movie->cover_image)
        <img src="{{ asset('storage/' . $movie->cover_image) }}" alt="{{ $movie->title }}" width="100">
        
        @else
        <p>No Image</p>
        @endif

        <!-- تفاصيل الفيلم -->
        <strong>{{ $movie->title }}</strong> - {{ $movie->category }} ({{ $movie->rating }}/10)
        <br>

        <!-- أزرار التعديل والحذف -->
        <a href="{{ route('movies.edit', $movie->id) }}">Edit</a>
        <form action="{{ route('movies.destroy', $movie->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" style="color: red;">Delete</button>
        </form>
    </li>
    @empty
    <p>No movies found for this category.</p>
    @endforelse
</ul>
@endsection
