@extends('layouts.app')

@section('content')
    <h1>Books</h1>
    <form action=""></form>
    <ul>
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
