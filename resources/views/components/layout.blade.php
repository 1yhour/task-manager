<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    @vite('resources/css/app.css')
</head>
<body>
    <div class="bg-amber-400">
        {{ $slot }}
    </div>
</body>
</html>