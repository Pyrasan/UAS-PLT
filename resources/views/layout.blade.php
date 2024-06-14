<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paper Submission</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
</head>
<body>
    
    <h1 class="text-center mt-3">Paper Submission</h1>
    <div class="mt-3 container">
    @yield('konten')
    @stack('js')
    </div>

</body>
</html>