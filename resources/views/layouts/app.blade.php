<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Home' }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/global.css">
    <script src="js/cep.js"></script>
</head>
<body class="d-flex flex-nowrap vh-100">

    @include('components.sidebar')
    <main class="w-100">
        @include('components.navigation')
    
        <div class="container px-4 py-5 overflow-y-scroll h-100" style="scrollbar-width: none;">
            @yield('content')
        </div>
    </main>

    @include('components.toasts.index')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            var toastElement = document.getElementById('liveToast');
            var toast = new bootstrap.Toast(toastElement);
    
            @if (session('success') || session('error'))
                toast.show();
            @endif
        });
    </script>

</body>
</html>