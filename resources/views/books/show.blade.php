@extends('layouts.app')

@section('content')
    <div class="mb-4">
        <h1 class="sticky-top mb-2 h2">{{ $book->title }}</h1>

        <div class="book-info">
            <div class="book-author mb-4 h5 font-weight-semibold">by {{ $book->author }}</div>
            <div class="book-rating d-flex align-items-center">
                <div class="me-2 small font-weight-medium text-muted">
                    {{ number_format($book->reviews_avg_rating, 1) }}
                </div>
                <span class="book-review-count small text-muted">
                    {{ $book->reviews_count }} {{ Str::plural('review', $book->reviews_count) }}
                </span>
            </div> 
        </div>
    </div>

    <div>
        <h2 class="mb-4 h4 font-weight-semibold">Reviews</h2>
        <ul class="list-unstyled">
            @forelse ($book->reviews as $review)
                <li class="book-item mb-4">
                    <div>
                        <div class="mb-2 d-flex justify-content-between align-items-center">
                            <div class="font-weight-semibold">{{ $review->rating }}</div>
                            <div class="book-review-count">
                                {{ $review->created_at->format('M j, Y') }}</div>
                        </div>
                        <p class="text-muted">{{ $review->review }}</p>
                    </div>
                </li>
            @empty
                <li class="mb-4">
                    <div class="empty-book-item">
                        <p class="empty-text h5 font-weight-semibold">No reviews yet</p>
                    </div>
                </li>
            @endforelse
        </ul>
    </div>
@endsection
