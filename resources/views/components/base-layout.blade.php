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

        .no-animals {
            font-weight: bold;
            color: red;
        }

        .feeding-schedules-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .feeding-schedule-item {
            flex: 1 1 calc(25% - 20px); /* 4 columns */
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            background-color: #fff;
            text-align: center;
        }

        .feeding-schedule-item h2 {
            margin: 0;
        }

        .feeding-schedule-item a {
            color: #007bff;
            text-decoration: none;
        }

        .feeding-schedule-item a:hover {
            text-decoration: underline;
        }

        .copyright {
            text-align: center;
        }

        form {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form label { 
        display: block;
        margin-bottom: 8px;
        font-weight: bold
        }

        form input,
        form select,
        form textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        form textarea {
            resize: vertical;
        }

        form button {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        form button:hover {
            background-color: #0056b3;
        }

        .error-messages {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #f8d7da;
            border: 1px solid #f5c6cb;
            border-radius: 8px;
            color: #721c24;
        }

        .error-messages ul {
            list-style-type: none;
            padding: 0;
        }

        .error-messages li {
            margin-bottom: 10px;
        }

        .animal-create {
            text-align: center;
        }

        .button-group {
            display: flex;
            justify-content: center;
            gap: 10px;
        } 

        .create-submit,
        .button-link {
            display: inline-block;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            background-color: #007bff;
            color: white;
            text-align: center;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .create-submit:hover,
        .button-link:hover {
            background-color: #0056b3;
        }


        .feeding-schedule-show {
            text-align: center;
        }

        .alert {
        max-width: 600px;
        margin: 20px auto;
        padding: 20px;
        background-color: #f8d7da;
        border: 1px solid #f5c6cb;
        border-radius: 8px;
        color: #721c24;
        }

        .alert ul {
            list-style-type: none;
            padding: 0;
        }

        .alert li {
            margin-bottom: 10px;
        }

        .cannot-delete {
        color: red;
        font-weight: bold;
        text-align: center;
    }
    .adopters-container {
        display: flex;
        flex-wrap: wrap;
        gap: 20px;
        justify-content: center;
    }

    .adopter-item {
        flex: 1 1 calc(33.33% - 20px); /* 3 columns */
        border: 1px solid #ccc;
        border-radius: 8px;
        padding: 10px;
        background-color: #fff;
        text-align: center;
    }

    .adopter-item h2 {
        margin-top: 0;
    }
    </style>
</head>
<body>
    <header>
        <nav>
            <a href="{{ url('/animals/show') }}">Home</a>
            <a href="{{ url('/animals/create') }}">Register Animal</a>
            <a href="{{ url('/feedingschedules/create') }}">Register Feeding Schedule</a>
            <a href="{{ url('/feedingschedules')}}">View Feeding Schedules</a>
            <a href="{{ url('/adopters/create') }}">Register Adopters</a>
            <a href="{{ url('/adopters')}}">View Adopters</a>
        </nav>
    </header>
    <main>
        {{ $slot }}
    </main>
    <footer>
        <p class="copyright">&copy; {{ date('Y') }} Animals Shelter</p>
    </footer>
</body>
</html>