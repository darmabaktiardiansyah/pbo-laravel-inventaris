<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - Inventaris Barang</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            background: #f4f6f9;
            color: #333;
        }

        header {
            background: #1e3a5f;
            color: white;
            padding: 20px;
        }

        nav {
            background: #294d73;
            padding: 12px 20px;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin-right: 20px;
        }

        main {
            padding: 25px;
        }

        footer {
            text-align: center;
            padding: 20px;
            color: #777;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
        }

        th {
            background: #e5edf5;
        }

        button, .btn {
            padding: 8px 12px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            background: #1e3a5f;
            color: white;
            text-decoration: none;
        }

        input, select {
            padding: 9px;
            width: 100%;
            margin: 7px 0 15px;
            box-sizing: border-box;
        }
    </style>
</head>
<body>

<header>
    <h2>Manajemen Inventaris Barang</h2>
    <p>Aplikasi Pengelolaan Data Barang</p>
</header>

<nav>
    <a href="{{ route('example.index') }}">Daftar Barang</a>
    <a href="{{ route('example.create') }}">Tambah Barang</a>
</nav>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2026 Aplikasi Inventaris Barang</p>
</footer>

</body>
</html>