<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @yield('title')
    @yield('style')
</head>
<body>
<ul>
        <li><a href="{{ route('groceries.index') }}">Groceries</a></li>
        <li><a href="{{ route('groceries.create') }}">Create</a></li>
    </ul>
    @yield('content')
</body>
</html>