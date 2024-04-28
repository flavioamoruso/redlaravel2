<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite (['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="min-vh-100">
        <x-navbar/>
        {{$slot}}
    </div>

    <x-footer class="min-vh-100"/>
    
</body>
</html>