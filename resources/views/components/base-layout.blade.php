<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Animals Shelter' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #333;
            color: white;
            padding: 10px 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            gap: 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            border-radius: 4px;
            background-color: #007bff;
            transition: background-color 0.3s ease;
        }

        nav a:hover {
            background-color: #0056b3;
        }

        .search-form {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-bottom: 20px;
        }

        .search-input {
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            width: 300px;
        }

        .search-button {
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .search-button:hover {
            background-color: #0056b3;
        }

        .reset-button {
            background-color: #f44336;
            color: white;
            padding: 10px 20px;
            text-decoration: none;
            border-radius: 4px;
            margin-left: 10px;
            transition: background-color 0.3s ease;
        }

        .reset-button:hover {
            background-color: #d32f2f;
        }

        .animal-list {
            list-style-type: none;
            padding: 0;
        }

        .animal-item {
            border: 1px solid #ccc;
            border-radius: 8px;
            margin: 10px 0;
            padding: 10px;
            background-color: #f9f9f9;
        }

        .animal-details p {
            margin: 5px 0;
        }

        .animal-details p b {
            color: #333;
        }

        .animal-details a {
            color: #007bff;
            text-decoration: none;
        }

        .animal-details a.delete-link {
            color: #e42d24;
        }

        .animal-details a:hover {
            text-decoration: underline;
        }

        .species-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .species-column {
            flex: 1 1 calc(16.66% - 20px); /* 6 columns */
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            background-color: #fff;
        }

        .species-column h2 {
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/animals/show') }}">Home</a>
            <a href="{{ url('/animals/create') }}">Register Animal</a>
            <a href="{{ url('/feedingschedules')}}">View Feeding Schedules</a>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} Animals Shelter</p>
    </footer>
</body>
</html>