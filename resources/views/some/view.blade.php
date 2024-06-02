<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    @if ($user)
        <p>Welcome, {{ optional($user)->name }}!</p>
    @else
        <p>Welcome, Guest!</p>
    @endif
</body>
</html>
