<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="./Home.css">
</head>

<body>
  <div class="home">
    <div class="title">
      Welcome to Souper Chef I
    </div>
    <div class="subtitle">
      In this installation of Souper Chef you must help Chef Chad Chaddington balance the flavors of the perfect soup!
    </div>
    <div class="content">
      <button class="start-button btn btn-primary btn-lg" onclick="test()">
        Start Game!
      </button>
    </div>
  </div>

  <script>
    function test() {
      console.log("Hello World");
    }
  </script>
</body>

</html>