<!DOCTYPE html>
<html>

<head>
    <title><?php echo env('APP_NAME'); ?> - @yield('title')</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<body>
    @section('sidebar')
        <h1>
            <?php echo env('APP_NAME'); ?>
        </h1>
    @show

    <div class="container">
        <br>
        @yield('content')
    </div>
</body>

</html>
