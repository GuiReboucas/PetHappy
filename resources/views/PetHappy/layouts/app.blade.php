<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    <!-- Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script> 

    <script>
        // Config
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        'bgcinza': '#C4C4C4',
                    },
                    fontFamily: {
                        'logomarca': ['"Pacifico"', 'cursive'],
                    }
                }
            }
        }
    </script>

    <style type="text/tailwindcss">
        /* Custom CSS  */
        
        @layer utilities {
            .content-auto {
                content-visibility: auto;
            }
        }
        </style>
    <!-- Fonts -->
    <style>
        /* Pacifico */
        @import url('https://fonts.googleapis.com/css2?family=Pacifico&display=swap');
    </style>
</head>
<body>
    <header class="bg-bgcinza h-28">
        <div class="ml-5 relative top-1/2 -translate-y-1/2">
            <img src="{{ asset('img/Pet Happy Logo 1.svg') }}" alt="Logomarca da PetHappy" class="w-16 inline-block mr-4">
            <h1 class="text-3xl font-logomarca text-[#8658d5] inline-block">PetHappy</h1>
        </div>

        <nav class="justify-center relative top-1/2 -translate-y-full">
            <ul class="flex gap-6">
                <li><a href="">Página Inicial</a></li>
                <li><a href="">Sobre</a></li>
                <li><a href="">Instituições</a></li>
                <li><a href="">Ajudar</a></li>
            </ul>
        </nav>

        <div class="flex relative top-1/2 -translate-y-1/2">
            <p>Login</p>
            <div>
                <a href="">Criar uma conta</a>
            </div>
        </div>
    </header>
    @yield('content')
    <footer>
    </footer>
</body>
</html>