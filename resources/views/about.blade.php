<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
</head>
<body>
  <h1 class="text-3xl font-bold underline text-red-500">
    Hello, Im {{ $name }}!!!
  </h1>
  <p class="text-2xl p-4">
    i live in {{ $address }}, and my email is {{ $email }}
</p>
</body>
</html>