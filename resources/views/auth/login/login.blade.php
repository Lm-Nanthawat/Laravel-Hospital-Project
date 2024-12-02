<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Bangkok Hospital Chanthaburi</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header>
        @include('components.topbar') {{-- Topbar --}}
        @include('components.navbar') {{-- Navbar --}}
    </header>

    <main>
        
        {{-- Login Section --}}
        <section class="mt-[8rem] mb-[8rem]">
            <div class="w-[60%] m-auto bg-[red] Login-box">123</div>
        </section>
    </main>
    

    <footer>
        @include('components.footer') {{-- Footer --}}
    </footer>
</body>
</html>