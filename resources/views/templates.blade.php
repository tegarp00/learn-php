<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Nftx</title>
  <link rel="stylesheet" href="{{asset('slicing/styles/style.css')}}">
</head>
<body>

    @yield('templates')

  <script>
    const buttonRight = document.getElementById('left-arrow');
    const buttonLeft = document.getElementById('right-arrow');

    buttonLeft.onclick = function () {
      document.getElementById('testimonial-card').scrollLeft += 1108;
    };
    buttonRight.onclick = function () {
      document.getElementById('testimonial-card').scrollLeft -= 1108;
    };
  </script>

</body>

</html>