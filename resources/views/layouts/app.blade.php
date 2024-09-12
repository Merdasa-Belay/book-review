<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Book Reviews</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        .btn-custom {
            background-color: white;
            border-radius: 6px;
            padding: 0.5rem 1rem;
            font-weight: 500;
            color: #6c757d;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
            border: 1px solid #dee2e6;
        }

        .btn-custom:hover {
            background-color: #f8f9fa;
        }

        .input-custom {
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
            border: 1px solid #ced4da;
            width: 100%;
            padding: 0.5rem 1rem;
            border-radius: 6px;
        }

        .filter-container {
            margin-bottom: 1rem;
            display: flex;
            gap: 0.5rem;
            border-radius: 6px;
            background-color: #f8f9fa;
            padding: 0.5rem;
        }

        .filter-item,
        .filter-item-active {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 100%;
            padding: 0.5rem 1rem;
            text-align: center;
            font-size: 0.875rem;
            font-weight: 500;
        }

        .filter-item {
            background-color: #f8f9fa;
            color: #6c757d;
            border-radius: 6px;
        }

        .filter-item-active {
            background-color: white;
            color: #343a40;
            box-shadow: 0px 1px 2px rgba(0, 0, 0, 0.1);
        }

        .book-item {
            font-size: 0.875rem;
            border-radius: 6px;
            background-color: white;
            padding: 1rem;
            color: #343a40;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #dee2e6;
        }

        .book-title {
            font-size: 1.25rem;
            font-weight: 600;
            color: #343a40;
        }

        .book-title:hover {
            color: #495057;
        }

        .book-author {
            color: #6c757d;
        }

        .book-rating {
            font-size: 0.875rem;
            font-weight: 500;
            color: #495057;
        }

        .book-review-count {
            font-size: 0.75rem;
            color: #adb5bd;
        }

        .empty-book-item {
            font-size: 0.875rem;
            border-radius: 6px;
            background-color: white;
            padding: 2.5rem;
            text-align: center;
            color: #343a40;
            box-shadow: 0px 2px 4px rgba(0, 0, 0, 0.1);
            border: 1px solid #dee2e6;
        }

        .empty-text {
            font-weight: 500;
            color: #6c757d;
        }

        .reset-link {
            color: #6c757d;
            text-decoration: underline;
        }
    </style>
</head>

<body class="container mt-5 mb-5">
    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
