<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}"   >
    <script src="https://cdn.tiny.cloud/1/vxfcf4bxrnn14o8lr9sboey5yz954t62d6ar3izu54gkctb3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

    <title>myblog</title>
</head>
<body>
    @include('incs.navbar')
    <div class="container justify-content-center">
        @include('incs.flash')
    @yield('content')
    </div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


<script src="https://kit.fontawesome.com/20ea8add13.js" crossorigin="anonymous"></script>
</body>
</html>
