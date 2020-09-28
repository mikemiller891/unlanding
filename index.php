<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $_SERVER['HTTP_HOST'] ?></title>
  <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="h-screen w-screen flex flex-col justify-center bg-indigo-200 bg-cover bg-center bg-fixed"
  style="background-image:url(https://source.unsplash.com/weekly/?desk)">

<div class="flex justify-center">
  <div class="bg-white py-2 px-16 opacity-50 shadow-2xl rounded-full">
    <h1 class="text-6xl text-center font-bold"><?= $_SERVER['HTTP_HOST'] ?></h1>
  </div>
</div>

</body>

</html>
