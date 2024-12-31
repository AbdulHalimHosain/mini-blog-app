<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mini Blog</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            background: linear-gradient(135deg, #7b4397, #dc2430);
            background-size: cover;
            color: white;
        }
        .navbar {
            background-color: rgba(255, 255, 255, 0.8);
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }
        .navbar-brand {
            color: #333 !important;
        }
        footer {
            background-color: rgba(255, 255, 255, 0.8);
            color: #333;
            margin-top: auto;
            padding: 10px 0;
            text-align: center;
            box-shadow: 0px -4px 8px rgba(0, 0, 0, 0.2);
        }
        .intro {
            text-align: center;
            margin: 50px 15px;
        }
        .intro h1 {
            font-size: 2rem;
            margin-bottom: 15px;
        }
        .intro p {
            font-size: 1rem;
        }
        .card {
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="{{ route('posts.index') }}">Mini Blog</a>
        </div>
    </nav>
    
    <main>
        @yield('content')
    </main>

    <footer>
        <p>&copy; {{ date('Y') }} Mini Blog. All rights reserved.</p>
    </footer>
</body>
</html>
