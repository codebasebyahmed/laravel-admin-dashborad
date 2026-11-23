<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@lang ('messages.admin_login_title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <style>
        body {
            font-family: "Cairo", sans-serif;
        }
    </style>
</head>
<body
    class="bg-gradient-to-br from-indigo-50/70 via-slate-100 to-blue-100/70 flex items-center justify-center min-h-screen text-slate-800 antialiased">
    <div class="w-full max-w-md mx-4">
        <div
            class="bg-white/90 backdrop-blur-md rounded-2xl shadow-xl border border-indigo-100/80 overflow-hidden transform transition-all duration-300 hover:shadow-2xl">
            <div class="px-8 pt-8 pb-4 text-center">
                <div
                    class="mx-auto flex h-12 w-12 items-center justify-center rounded-xl bg-gradient-to-br from-indigo-600 to-blue-700 text-white shadow-md shadow-indigo-200 mb-4">
                    <svg xmlns="http://w3.org" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                    </svg>
                </div>
                <h2 class="text-2xl font-black tracking-tight text-indigo-950">
                    @lang ('messages.admin_panel')
                </h2>
                <p class="text-sm text-slate-500 mt-1">
                    @lang ('messages.please_login')
                </p>
            </div>

            <div class="p-8 pt-4">
                <form action="#" method="POST" class="space-y-5">
                    <div>
                        <label
                            class="block text-xs font-bold uppercase tracking-wider text-indigo-900/70 mb-1.5">
                            @lang ('messages.email')
                        </label>
                        <div class="relative">
                            <input
                                type="email"
                                name=""
                                autofocus
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl transition duration-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent focus:bg-white focus:shadow-xs text-left"
                                dir="ltr"
                                placeholder="admin@example.com" />
                        </div>
                    </div>

                    <div>
                        <label
                            class="block text-xs font-bold uppercase tracking-wider text-indigo-900/70 mb-1.5">
                            @lang ('messages.password')
                        </label>
                        <div class="relative">
                            <input
                                type="password"
                                name=""
                                class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-xl transition duration-200 text-slate-900 placeholder-slate-400 focus:outline-none focus:ring-2 focus:ring-indigo-600 focus:border-transparent focus:bg-white focus:shadow-xs text-left"
                                dir="ltr"
                                placeholder="••••••••" />
                        </div>
                    </div>

                    <div class="flex items-center justify-between pt-1">
                        <div class="flex items-center">
                            <input
                                type="checkbox"
                                name=""
                                id="remember"
                                class="h-4 w-4 text-indigo-600 focus:ring-indigo-500 border-slate-300 rounded-md transition duration-150 cursor-pointer" />
                            <label
                                for="remember"
                                class="mx-2 text-sm text-slate-600 select-none cursor-pointer font-medium">
                                @lang ('messages.remember_me')
                            </label>
                        </div>
                    </div>

                    <div class="pt-2">
                        <button
                            type="submit"
                            class="w-full flex justify-center py-3 px-4 border border-transparent rounded-xl shadow-lg shadow-indigo-100 text-sm font-semibold text-white bg-gradient-to-r from-indigo-600 to-blue-600 hover:from-indigo-700 hover:to-blue-700 active:scale-[0.98] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 transition duration-150 ease-in-out cursor-pointer">
                            @lang ('messages.login_button')
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <p class="text-center text-xs text-slate-400 mt-6 font-medium">&copy; {{ date('Y') }} Admin Dashboard. All rights reserved.</p>
    </div>
</body>
</html>
