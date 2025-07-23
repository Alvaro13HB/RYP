<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RateYourPeople</title>      
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    @vite(['resources/js/app.js'])
    <style>
        html, body {
            height: 100%;
            margin: 0;
        }
    </style>
</head>
<body class="flex flex-col min-h-screen">
    @component('navbar')
    @endcomponent
    <main role='main' class="flex-grow flex items-center justify-center"> 
        <div class='container mx-auto max-w-screen-lg'>
            @hasSection('content')
                @yield('content')
            @endif
        </div>
    </main>

    <footer class='footer'>
        <div class="bg-purple-200 text-purple-600 p-4 text-center w-full border-t-2 border-purple-600">
            <p>Todos os direitos reservados a &copy;Copyright</p>
        </div>
    </footer>
    @hasSection('javascript')
        @yield('javascript')
    @endif
</body>
</html>
