<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sazónPro</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@1.11.4/dist/full.css" rel="stylesheet">
</head>

<body class="bg-gray-100">
    <div class="container mx-auto mt-8">
        <div class="bg-green-100 my-4 text-center">
            <h1 class="text-lg font-semibold m-4 uppercase">@yield("cabecera")</h1>
        </div>
        @yield('content')
    </div>
</body>

</html>

