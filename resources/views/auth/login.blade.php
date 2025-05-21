<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }} - Login</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        maderalpes: {
                            black: '#000000',
                            white: '#FFFFFF',
                            gold: '#FFD700',
                            green: '#8DC63F',
                            dark: '#333333'
                        }
                    },
                    backgroundImage: {
                        'forest-mountains': "url('https://img.freepik.com/foto-gratis/renderizado-3d-casa-madera_23-2151264382.jpg')"
                    }
                }
            }
        }
    </script>
    <style>
        .bg-overlay {
            background-color: rgba(0, 0, 0, 0.65);
        }
    </style>
</head>

<body class="font-sans antialiased bg-forest-mountains bg-cover bg-center bg-fixed">
    <div class="min-h-screen flex flex-col justify-center items-center px-4 sm:px-6 lg:px-8 bg-overlay">
        <div class="w-full max-w-md">
            

            <!-- Heading -->
            <h2 class="mt-2 text-center text-2xl font-bold tracking-tight text-white">
                Inicia sesión en tu cuenta
            </h2>

            <!-- Form Container -->
            <div class="mt-8 bg-white py-8 px-6 shadow-2xl rounded-lg sm:px-10 border border-maderalpes-green">
                <form class="space-y-6" action="{{ route('login') }}" method="POST">
                    @csrf

                    <!-- Email Address -->
                    <div>
                        <label for="email" class="block text-sm font-medium text-maderalpes-dark">
                            Correo electrónico
                        </label>
                        <div class="mt-1">
                            <input id="email" name="email" type="email" autocomplete="email" required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-maderalpes-green focus:border-maderalpes-green sm:text-sm">
                        </div>
                        @error('email')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Password -->
                    <div>
                        <label for="password" class="block text-sm font-medium text-maderalpes-dark">
                            Contraseña
                        </label>
                        <div class="mt-1">
                            <input id="password" name="password" type="password" autocomplete="current-password"
                                required
                                class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-maderalpes-green focus:border-maderalpes-green sm:text-sm">
                        </div>
                        @error('password')
                            <p class="mt-2 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Remember Me and Forgot Password -->
                    <div class="flex items-center justify-between">
                        <div class="flex items-center">
                            <input id="remember_me" name="remember" type="checkbox"
                                class="h-4 w-4 text-maderalpes-green focus:ring-maderalpes-green border-gray-300 rounded">
                            <label for="remember_me" class="ml-2 block text-sm text-maderalpes-dark">
                                Recordarme
                            </label>
                        </div>

                        <div class="text-sm">
                            <a href="{{ route('password.request') }}"
                                class="font-medium text-maderalpes-green hover:text-maderalpes-gold">
                                Olvidaste tu contraseña?
                            </a>
                        </div>
                    </div>

                    <!-- Sign In Button -->
                    <div>
                        <button type="submit"
                            class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-md text-sm font-medium text-maderalpes-black bg-maderalpes-gold hover:bg-yellow-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-maderalpes-green">
                            Iniciar sesión
                        </button>
                    </div>
                </form>

                <!-- Social Login Divider -->
                <div class="mt-6">
                    {{-- <div class="relative">
                        <div class="absolute inset-0 flex items-center">
                            <div class="w-full border-t border-gray-300"></div>
                        </div>
                        <div class="relative flex justify-center text-sm">
                            <span class="px-2 bg-white text-gray-500">
                                O inicia sesión con
                            </span>
                        </div>
                    </div> --}}

                    <!-- Social Login Buttons -->
                    {{-- <div class="mt-6 grid grid-cols-2 gap-3">
                        <div>
                            <a href="#"
                                class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <svg class="w-5 h-5" viewBox="0 0 24 24" fill="none">
                                    <path
                                        d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z"
                                        fill="#4285F4" />
                                    <path
                                        d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z"
                                        fill="#34A853" />
                                    <path
                                        d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z"
                                        fill="#FBBC05" />
                                    <path
                                        d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z"
                                        fill="#EA4335" />
                                </svg>
                                <span class="ml-2">Google</span>
                            </a>
                        </div>

                        <div>
                            <a href="#"
                                class="w-full inline-flex justify-center py-2 px-4 border border-gray-300 rounded-md shadow-sm bg-white text-sm font-medium text-gray-500 hover:bg-gray-50">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd"
                                        d="M10 0C4.477 0 0 4.484 0 10.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0110 4.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.203 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.942.359.31.678.921.678 1.856 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0020 10.017C20 4.484 15.522 0 10 0z"
                                        clip-rule="evenodd" />
                                </svg>
                                <span class="ml-2">GitHub</span>
                            </a>
                        </div>
                    </div> --}}
                </div>
            </div>

            {{-- <!-- Free Trial Link -->
            <div class="mt-6 text-center text-sm text-white">
                No tienes una cuenta?
                <a href="{{ route('register') }}" class="font-medium text-maderalpes-gold hover:text-maderalpes-green">
                    Regístrate
                </a>
            </div> --}}

            <!-- Slogan -->
            <div class="mt-2 text-center text-sm text-maderalpes-gold italic font-semibold">
                Inspírate en lo natural
            </div>
        </div>
    </div>
</body>

</html>
