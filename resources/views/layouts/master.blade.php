<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,600">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>@yield('title', "Error")</title>
</head>
<body>
    <div class="container">
      @yield("main")
    </div>
    <script>
      let input = document.querySelector('input[type=text]');
      let form = document.querySelector('form');
      console.log(form);
      form.addEventListener('submit', function (event) {
        if (!input.value) {
          event.preventDefault();
          // alert('Errr');
        }
      });
    </script>
</body>
</html>