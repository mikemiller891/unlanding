<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title><?= $_SERVER['SERVER_NAME'] ?></title>
  <style>
    body {
      margin: 0;
      height: 100vh;
      width: 100vw;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background-color: rgba(195, 218, 254, 1);
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      background-image:url(https://source.unsplash.com/daily/?coffee,desk,sunrise);
    }
    div {
      display: flex;
      justify-content: center;
    }
    div div {
      background-color: rgba(195, 218, 254, 0.5);
      box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 1);
      border-radius: 9999px;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
      padding-left: 2rem;
      padding-right: 2rem;
      font-size: 4rem;
      font-weight: 700;
      font-family: sans-serif;
      color: rgba(0, 0, 0, 1);
      opacity: 1;
    }
  </style>
</head>

<body>
  <div>
    <div><?= $_SERVER['SERVER_NAME'] ?></div>
  </div>
</body>

</html>
