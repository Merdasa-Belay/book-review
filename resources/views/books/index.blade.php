@extends('layouts.app')

@section('content')
    <h1>Books</h1>

    <form class="mb-4 d-flex align-items-center" role="search" method="GET" action="{{ route('books.index') }}">
        <input class="form-control me-2" type="search" placeholder="Search by title" aria-label="Search"
            value="{{ request('title') }}" name="title" style="height: 40px;">
        <input type="hidden" name="filter" value="{{ request('filter') }}">
        <button class="btn btn-outline-success me-2" type="submit" style="height: 40px;">Search</button>
        <a href="{{ route('books.index') }}" class="btn btn-outline-warning">Clear</a>
    </form>
    <nav class="navbar navbar-expand-lg navbar-light bg-light mb-4">
        <div class="container">
            <div class="d-flex w-100">
                @php
                    $filters = [
                        '' => 'Latest',
                        'popular_last_month' => 'Popular Last Month',
                        'popular_last_6month' => 'Popular Last 6 Month',
                        'highest_rated_last_month' => 'Highest Rated Last Month',
                        'highest_rated_last_6month' => 'Highest Rated Last 6 Month',
                    ];
                @endphp
                @foreach ($filters as $key => $label)
                    <a href="{{ route('books.index', [...request()->query(), 'filter' => $key]) }}"
                        class="btn {{ request('filter') === $key || (request('filter') === null && $key === '') ? 'btn-primary' : 'btn-outline-secondary' }} flex-fill me-2">
                        {{ $label }}
                    </a>
                @endforeach
            </div>
        </div>
    </nav>



    <ul class="list-unstyled">
        {{-- book items --}}
        @forelse ($books as $book)
            <li class="mb-4">
                <div class="book-item">
                    <div class="d-flex flex-wrap align-items-center justify-content-between">
                        <div class="flex-grow-1">
                            <a href="{{ route('books.show', $book) }}"
                                class="book-title text-decoration-none">{{ $book->title }}</a>
                            <span class="book-author d-block">by {{ $book->author }}</span>
                        </div>
                        <div class="text-end">
                            <div class="book-rating">
                                {{ number_format($book->reviews_avg_rating, 1) }}
                            </div>
                            <div class="book-review-count">
                                out of {{ $book->review_count }} {{ Str::plural('review', $book->reviews_count) }}
                            </div>
                        </div>
                    </div>
                </div>
            </li>

        @empty
            {{-- reset items --}}
            <li class="mb-4">
                <div class="empty-book-item text-center">
                    <p class="empty-text mb-2">No books found</p>
                    <a href="{{ route('books.index') }}" class="reset-link text-decoration-underline">Reset criteria</a>
                </div>
            </li>
        @endforelse
    </ul>
@endsection
