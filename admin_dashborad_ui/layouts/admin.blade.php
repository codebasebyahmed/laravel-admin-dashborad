<!DOCTYPE html>
<html
    lang="{{ str_replace('_', '-', app()->getLocale()) }}"
    dir="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield ('title', __('messages.admin_panel_title'))</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&display=swap"
        rel="stylesheet" />

    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <style type="text/tailwindcss">
        @theme {
            --font-sans: "Cairo", sans-serif;
        }
    </style>
</head>
<body
    class="font-sans bg-gradient-to-br from-indigo-50/40 via-slate-100 to-blue-50/40 text-slate-800 antialiased min-h-screen">
    <div class="flex min-h-screen overflow-hidden">
        <aside
            class="w-64 bg-white/95 backdrop-blur-md border-e border-gray-300 flex flex-col z-20 transition-all duration-300">
            <div
                class="p-5 text-center border-b border-indigo-50/80 bg-slate-50/50">
                <span
                    class="block font-black text-lg text-indigo-950 tracking-wide">
                    @lang ('messages.control_panel')
                </span>
                <span
                    class="block text-[11px] font-bold text-emerald-600 uppercase tracking-wider mt-0.5">
                    @lang ('messages.control_panel_sub')
                </span>
            </div>

            <nav class="flex-1 p-4 space-y-1.5 overflow-y-auto">
                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition duration-200 group font-medium text-lg {{ request()->routeIs('admin.dashboard') ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-600/15' : 'text-slate-600 hover:bg-emerald-50/60 hover:text-emerald-950' }}">
                    <span
                        class="text-base group-hover:scale-110 transition duration-200 {{ request()->routeIs('admin.dashboard') ? 'text-white' : 'text-emerald-500/70 group-hover:text-emerald-600' }}">
                        <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition duration-200">
                            <path d="M4.125 12h2.25c.621 0 1.125.504 1.125 1.125v6.75C7.5 20.496 6.996 21 6.375 21h-2.25A1.125 1.125 0 013 19.875v-6.75c0-.621.504-1.125 1.125-1.125zM10.875 7.5h2.25c.621 0 1.125.504 1.125 1.125v11.25c0 .621-.504 1.125-1.125 1.125h-2.25A1.125 1.125 0 019.75 19.875V8.625c0-.621.504-1.125 1.125-1.125zM17.625 3h2.25c.621 0 1.125.504 1.125 1.125v15.75c0 .621-.504 1.125-1.125 1.125h-2.25a1.125 1.125 0 01-1.125-1.125V4.125C16.5 3.504 17.004 3 17.625 3z" />
                        </svg>
                    </span>
                    <span>@lang ('messages.dashboard')</span>
                </a>

                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition duration-200 group font-medium text-lg {{ request()->routeIs('admin.roles.*') ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-600/15' : 'text-slate-600 hover:bg-emerald-50/60 hover:text-emerald-950' }}">
                    <span
                        class="text-base group-hover:scale-110 transition duration-200 {{ request()->routeIs('admin.roles.*') ? 'text-white' : 'text-emerald-500/70 group-hover:text-emerald-600' }}">
                        <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition duration-200">
                            <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7 0v3h7.5z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span>@lang ('messages.roles')</span>
                </a>

                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition duration-200 group font-medium text-lg {{ request()->routeIs('admin.admins.*') ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-600/15' : 'text-slate-600 hover:bg-emerald-50/60 hover:text-emerald-950' }}">
                    <span
                        class="text-base group-hover:scale-110 transition duration-200 {{ request()->routeIs('admin.admins.*') ? 'text-white' : 'text-emerald-500/70 group-hover:text-emerald-600' }}">
                        <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition duration-200">
                            <path d="M4.5 6.375a4.125 4.125 0 118.25 0 4.125 4.125 0 01-8.25 0zM14.25 8.625a3.375 3.375 0 116.75 0 3.375 3.375 0 01-6.75 0zM1.5 19.125a7.125 7.125 0 0114.25 0v.003l-.001.119a.75.75 0 01-.363.63 13.067 13.067 0 01-6.761 1.873c-2.472 0-4.786-.645-6.76-1.873a.75.75 0 01-.364-.63l-.001-.122zM17.25 19.128l-.001.144a2.25 2.25 0 01-.233.96 14.433 14.433 0 004.86-1.01.75.75 0 00.425-.666 5.25 5.25 0 00-8.835-3.977 7.46 7.46 0 011.034 3.549z" />
                        </svg>
                    </span>
                    <span>@lang ('messages.admins')</span>
                </a>

                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition duration-200 group font-medium text-lg {{ request()->routeIs('admin.posts.*') ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-600/15' : 'text-slate-600 hover:bg-emerald-50/60 hover:text-emerald-950' }}">
                    <span
                        class="text-base group-hover:scale-110 transition duration-200 {{ request()->routeIs('admin.posts.*') ? 'text-white' : 'text-emerald-500/70 group-hover:text-emerald-600' }}">
                        <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition duration-200">
                            <path d="M19.5 22.5a3 3 0 003-3v-8.175a3 3 0 00-.879-2.122l-5.325-5.325a3 3 0 00-2.122-.878H4.5a3 3 0 00-3 3v13.5a3 3 0 003 3h15zM15 4.5v3.375c0 .621.504 1.125 1.125 1.125h3.375L15 4.5zM6 10.5a.75.75 0 01.75-.75h3.5a.75.75 0 010 1.5h-3.5a.75.75 0 01-.75-.75zM6.75 13.5a.75.75 0 000 1.5h10.5a.75.75 0 000-1.5H6.75zm0 3.75a.75.75 0 000 1.5h10.5a.75.75 0 000-1.5H6.75z" />
                        </svg>
                    </span>
                    <span>@lang ('messages.menu_posts')</span>
                </a>
                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition duration-200 group font-medium text-lg {{ request()->routeIs('admin.categories.*') ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-600/15' : 'text-slate-600 hover:bg-emerald-50/60 hover:text-emerald-950' }}">
                    <span
                        class="text-base group-hover:scale-110 transition duration-200 {{ request()->routeIs('admin.categories.*') ? 'text-white' : 'text-emerald-500/70 group-hover:text-emerald-600' }}">
                        <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition duration-200">
                            <path fill-rule="evenodd" d="M2.25 13.5a3.375 3.375 0 013.375-3.375h6a3.375 3.375 0 013.375 3.375v6a3.375 3.375 0 01-3.375 3.375h-6A3.375 3.375 0 012.25 19.5v-6zm3.375-1.875A1.875 1.875 0 003.75 13.5v6c0 1.035.84 1.875 1.875 1.875h6a1.875 1.875 0 001.875-1.875v-6a1.875 1.875 0 00-1.875-1.875h-6zM15 3.75a.75.75 0 01.75-.75h4.5a.75.75 0 01.75.75v4.5a.75.75 0 01-1.5 0V5.56l-5.22 5.22a.75.75 0 01-1.06-1.06l5.22-5.22h-2.69a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span>@lang ('messages.menu_categories')</span>
                </a>

                <a
                    href="#"
                    class="flex items-center gap-3 px-4 py-3 rounded-xl transition duration-200 group font-medium text-lg {{ request()->routeIs('admin.comments.*') ? 'bg-gradient-to-r from-emerald-600 to-teal-600 text-white shadow-lg shadow-emerald-600/15' : 'text-slate-600 hover:bg-emerald-50/60 hover:text-emerald-950' }}">
                    <span
                        class="text-base group-hover:scale-110 transition duration-200 {{ request()->routeIs('admin.comments.*') ? 'text-white' : 'text-emerald-500/70 group-hover:text-emerald-600' }}">
                        <svg xmlns="http://w3.org" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5 transition duration-200">
                            <path fill-rule="evenodd" d="M5.337 21.718a.75.75 0 01-.621-.303 11.21 11.21 0 01-1.54-5.945C3.176 9.878 7.828 5.25 13.5 5.25c5.672 0 10.324 4.628 10.324 10.22 0 5.592-4.652 10.22-10.324 10.22a10.413 10.413 0 01-5.972-1.865l-1.63 1.63a.75.75 0 01-.561.213zM13.5 6.75c-4.836 0-8.824 3.91-8.824 8.72 0 1.64.453 3.18 1.24 4.511a.75.75 0 01.1.583l-.744 2.973 2.766-2.766a.75.75 0 01.627-.197c1.378.497 2.855.779 4.398.779 4.836 0 8.824-3.91 8.824-8.72 0-4.81-3.988-8.72-8.824-8.72z" clip-rule="evenodd" />
                        </svg>
                    </span>
                    <span>@lang ('messages.menu_comments')</span>
                </a>
            </nav>

            <div
                class="p-4 border-t border-indigo-50 bg-slate-50/60 flex items-center gap-3">
                <div
                    class="h-9 w-8 rounded-xl bg-gradient-to-br from-emerald-600 to-teal-600 text-white shadow-sm flex items-center justify-center font-bold text-xs uppercase">
                    AD
                </div>

                <div class="min-w-0 flex-1">
                    <p class="font-bold text-xs text-indigo-950 truncate leading-tight">Admin Name</p>
                    <p class="text-[11px] font-medium text-slate-400 truncate mt-0.5">Admin Email</p>
                </div>
            </div>
        </aside>

        <div class="flex-1 flex flex-col min-w-0 overflow-x-hidden">
            <header
                class="bg-white/80 backdrop-blur-md border-b border-indigo-50/60 h-16 flex items-center justify-between px-8 z-10 sticky top-0">
                <div>
                    <span
                        class="text-xs bg-emerald-50 text-emerald-700/80 font-semibold px-2.5 py-1 rounded-md hidden md:inline">
                        @if (app()->getLocale() == 'ar')
                            <a
                                href="#"
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold text-emerald-600 bg-emerald-50 hover:bg-emerald-100 rounded-xl transition duration-150 active:scale-95">
                                <span class="text-base leading-none">🇬🇧</span>
                                <span>English</span>
                            </a>
                        @else
                            <a
                                href="#"
                                class="inline-flex items-center gap-1.5 px-3 py-1.5 text-xs font-bold text-emerald-600 bg-emerald-50 hover:bg-emerald-100 rounded-xl transition duration-150 active:scale-95">
                                <div
                                    class="flex items-center gap-0.5 tracking-tighter text-base leading-none">
                                    <span>🇵🇸</span>
                                    <span>🇸🇦</span>
                                    <span>🇪🇬</span>
                                    <span>🇦🇪</span>
                                    <span>🇰🇼</span>
                                    <span>🇶🇦</span>
                                    <span>🇯🇴</span>
                                    <span>🇲🇦</span>
                                    <span>🇩🇿</span>
                                    <span>🇧🇭</span>
                                    <span>🇴🇲</span>
                                    <span>🇮🇶</span>
                                    <span>🇸🇾</span>
                                    <span>🇱🇧</span>
                                    <span>🇾🇪</span>
                                    <span>🇹🇳</span>
                                    <span>🇱🇾</span>
                                    <span>🇸🇩</span>
                                    <span>🇸🇴</span>
                                    <span>🇲🇷</span>
                                    <span>🇩🇯</span>
                                    <span>🇰🇲</span>
                                </div>
                                <span>العربية</span>
                            </a>
                        @endif
                    </span>
                </div>
                <div>
                    <form action="#" method="POST">
                        <button
                            type="submit"
                            class="flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-sm font-semibold text-red-600 hover:bg-red-50/60 transition active:scale-95 focus:outline-none cursor-pointer">
                            <span class="text-base">🚪</span>
                            <span>@lang ('messages.logout_button_text')</span>
                        </button>
                    </form>
                </div>
            </header>

            <main class="flex-1 p-8 overflow-y-auto">
                @yield ('content')
            </main>
        </div>
    </div>
</body>
</html>
