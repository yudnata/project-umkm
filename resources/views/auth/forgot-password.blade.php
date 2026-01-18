<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - Platform UMKM</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Urbanist:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="min-h-screen bg-neutral-200 flex items-center justify-center p-4">
    <div class="w-full max-w-md animate-scale-in">
        <div class="bg-white rounded-3xl p-8 lg:p-10 shadow-sm">
            <h2 class="text-3xl lg:text-4xl font-black text-neutral-900 text-center mb-4 animate-fade-in-up" style="opacity: 0; animation-delay: 0.02s;">Forgot Password?</h2>
            <p class="text-neutral-500 text-center mb-8 animate-fade-in-up" style="opacity: 0; animation-delay: 0.04s;">
                Enter your email or phone number and we'll send you a link to reset your password.
            </p>

            <form action="{{ route('forgot-password') }}" method="POST" class="space-y-6">
                @csrf

                @if(session('status'))
                    <div class="p-4 bg-green-50 border border-green-200 rounded-xl animate-fade-in-up">
                        <p class="text-sm text-green-600">{{ session('status') }}</p>
                    </div>
                @endif

                <div class="animate-fade-in-up" style="opacity: 0; animation-delay: 0.06s;">
                    <label class="block text-sm font-semibold text-neutral-700 mb-2">Email or phone number</label>
                    <input type="text" name="email" placeholder="Enter your registered email or phone"
                        class="w-full px-4 py-3.5 bg-white border border-neutral-200 rounded-xl text-neutral-900 placeholder:text-neutral-400 focus:ring-2 focus:ring-neutral-900 focus:border-transparent transition-all"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <p class="mt-1 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit" class="w-full py-4 bg-neutral-900 text-white font-bold rounded-full hover:bg-neutral-800 transition-all hover:shadow-lg animate-fade-in-up"
                    style="opacity: 0; animation-delay: 0.08s;">
                    Send Reset Link
                </button>
            </form>

            <a href="{{ route('login') }}" class="flex items-center justify-center gap-2 mt-6 text-neutral-600 hover:text-neutral-900 transition-colors animate-fade-in-up"
                style="opacity: 0; animation-delay: 0.1s;">
                <i data-lucide="arrow-left" class="w-4 h-4"></i>
                <span class="font-medium">Back to Login</span>
            </a>
        </div>
    </div>

    <script>
        lucide.createIcons();
    </script>
</body>

</html>