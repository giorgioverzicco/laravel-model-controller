<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <script src="https://cdn.tailwindcss.com"></script>
    </head>

    <body>
        <main class="h-screen grid place-items-center">
            <div class="w-3/4 mx-auto p-2">
                <ul class="grid grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                    @foreach ($movies as $movie)
                        <li>
                            <x-card-movie :movie="$movie" />
                        </li>
                    @endforeach
                </ul>
            </div>
        </main>
    </body>
</html>