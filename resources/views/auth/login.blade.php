<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Platform UMKM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-white">
    <div class="min-h-screen flex">
        <div class="hidden lg:flex lg:w-[40%] flex-col justify-between p-8 lg:p-12 relative overflow-hidden">
            <img src="https://images.unsplash.com/photo-1556742049-0cfed4f6a45d?w=800&q=80" alt="Background" class="absolute inset-0 w-full h-full object-cover animate-fade-in">
            <div class="absolute inset-0 bg-black/60 backdrop-blur-[2px]"></div>

            <div class="relative z-10 animate-slide-in-left">
                <a href="/" class="inline-flex items-center gap-2 bg-white rounded-full px-4 py-2">
                    <i data-lucide="store" class="w-4 h-4 text-neutral-900"></i>
                    <span class="font-bold text-neutral-900">UMKM</span>
                </a>
            </div>

            <div class="flex-1 flex flex-col justify-center relative z-10">
                <h1 class="text-4xl xl:text-5xl font-black text-white italic mb-4 animate-slide-in-left delay-100" style="opacity: 0;">Welcome Back!</h1>
                <p class="text-white/80 text-lg max-w-sm animate-slide-in-left delay-200" style="opacity: 0;">
                    Login to continue accessing your account and enjoy our services from trusted UMKM partners.
                </p>
            </div>

            <div class="h-8 relative z-10"></div>
        </div>

        <div class="w-full lg:w-[60%] flex items-center justify-center p-6 lg:p-12">
            <div class="w-full max-w-md">
                <div class="lg:hidden mb-8 text-center animate-fade-in-up">
                    <a href="/" class="inline-flex items-center gap-2">
                        <i data-lucide="store" class="w-6 h-6 text-teal-500"></i>
                        <span class="text-2xl font-black text-neutral-900">UMKM</span>
                    </a>
                </div>

                <h2 class="text-3xl lg:text-4xl font-black text-neutral-900 mb-2 animate-fade-in-up" style="opacity: 0; animation-delay: 0.02s;">Login</h2>
                <p class="text-neutral-500 mb-8 animate-fade-in-up" style="opacity: 0; animation-delay: 0.04s;">Enter your credentials to continue</p>

                <form action="{{ route('login') }}" method="POST" class="space-y-5">
                    @csrf

                    <div class="animate-fade-in-up" style="opacity: 0; animation-delay: 0.06s;">
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Email or phone number</label>
                        <input type="text" name="email" placeholder="Email or phone number"
                            class="w-full px-4 py-3.5 bg-neutral-100 border-0 rounded-xl text-neutral-900 placeholder:text-neutral-400 focus:ring-2 focus:ring-neutral-900 focus:bg-white transition-all"
                            value="{{ old('email') }}" required>
                        @error('email')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="animate-fade-in-up" style="opacity: 0; animation-delay: 0.08s;">
                        <label class="block text-sm font-semibold text-neutral-700 mb-2">Password</label>
                        <div class="relative">
                            <input type="password" name="password" id="password" placeholder="Enter your password"
                                class="w-full px-4 py-3.5 bg-neutral-100 border-0 rounded-xl text-neutral-900 placeholder:text-neutral-400 focus:ring-2 focus:ring-neutral-900 focus:bg-white transition-all pr-12"
                                required>
                            <button type="button" onclick="togglePassword('password')" class="absolute right-4 top-1/2 -translate-y-1/2 text-neutral-400 hover:text-neutral-600 transition-colors">
                                <i data-lucide="eye" class="w-5 h-5" id="password-icon"></i>
                            </button>
                        </div>
                        @error('password')
                            <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                        @enderror
                    </div>

                    <div class="text-right animate-fade-in-up" style="opacity: 0; animation-delay: 0.1s;">
                        <a href="{{ route('forgot-password') }}" class="text-sm font-medium text-neutral-600 hover:text-neutral-900 transition-colors">
                            Forgot password?
                        </a>
                    </div>

                    <button type="submit" class="w-full py-4 bg-primary-500 text-white font-bold rounded-full hover:bg-primary-600 transition-all hover:shadow-lg animate-fade-in-up"
                        style="opacity: 0; animation-delay: 0.12s;">
                        Login
                    </button>
                </form>

                <div class="flex items-center gap-4 my-8 animate-fade-in-up" style="opacity: 0; animation-delay: 0.14s;">
                    <div class="flex-1 h-px bg-neutral-200"></div>
                    <span class="text-sm text-neutral-400">or do it via other accounts</span>
                    <div class="flex-1 h-px bg-neutral-200"></div>
                </div>

                <div class="flex justify-center gap-4 animate-fade-in-up" style="opacity: 0; animation-delay: 0.16s;">
                    <button class="w-12 h-12 rounded-full border border-neutral-200 flex items-center justify-center hover:bg-neutral-50 transition-colors">
                        <svg class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="#4285F4" d="M22.56 12.25c0-.78-.07-1.53-.2-2.25H12v4.26h5.92c-.26 1.37-1.04 2.53-2.21 3.31v2.77h3.57c2.08-1.92 3.28-4.74 3.28-8.09z" />
                            <path fill="#34A853" d="M12 23c2.97 0 5.46-.98 7.28-2.66l-3.57-2.77c-.98.66-2.23 1.06-3.71 1.06-2.86 0-5.29-1.93-6.16-4.53H2.18v2.84C3.99 20.53 7.7 23 12 23z" />
                            <path fill="#FBBC05" d="M5.84 14.09c-.22-.66-.35-1.36-.35-2.09s.13-1.43.35-2.09V7.07H2.18C1.43 8.55 1 10.22 1 12s.43 3.45 1.18 4.93l2.85-2.22.81-.62z" />
                            <path fill="#EA4335" d="M12 5.38c1.62 0 3.06.56 4.21 1.64l3.15-3.15C17.45 2.09 14.97 1 12 1 7.7 1 3.99 3.47 2.18 7.07l3.66 2.84c.87-2.6 3.3-4.53 6.16-4.53z" />
                        </svg>
                    </button>
                    <button class="w-12 h-12 rounded-full border border-neutral-200 flex items-center justify-center hover:bg-neutral-50 transition-colors">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="currentColor">
                            <path
                                d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z" />
                        </svg>
                    </button>
                    <button class="w-12 h-12 rounded-full border border-neutral-200 flex items-center justify-center hover:bg-neutral-50 transition-colors">
                        <svg class="w-5 h-5" viewBox="0 0 24 24" fill="#1877F2">
                            <path
                                d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z" />
                        </svg>
                    </button>
                </div>

                <p class="text-center mt-8 text-neutral-600 animate-fade-in-up" style="opacity: 0; animation-delay: 0.5s;">
                    Don't have an account?
                    <a href="{{ route('register') }}" class="font-bold text-neutral-900 hover:underline">Sign Up</a>
                </p>
            </div>
        </div>
    </div>

    <script>
        lucide.createIcons();

        function togglePassword(inputId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(inputId + '-icon');

            if (input.type === 'password') {
                input.type = 'text';
                icon.setAttribute('data-lucide', 'eye-off');
            } else {
                input.type = 'password';
                icon.setAttribute('data-lucide', 'eye');
            }
            lucide.createIcons();
        }
    </script>
</body>

</html>