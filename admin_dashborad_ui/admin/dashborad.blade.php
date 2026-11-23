@extends ('layouts.admin')

@section ('content')
    <div class="p-6 bg-gray-100 min-h-screen text-gray-800">
        <div class="mb-6">
            <h1
                class="text-3xl font-bold text-gray-900 rtl:text-right ltr:text-left">
                @lang ('messages.dashboard_title')
            </h1>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-8">
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">@lang ('messages.total_users')</p>
                    <h3 class="text-2xl font-bold mt-1 text-blue-600">1,250</h3>
                </div>
                <div class="p-3 bg-blue-50 text-blue-600 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path>
                    </svg>
                </div>
            </div>

            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">@lang ('messages.active_roles')</p>
                    <h3 class="text-2xl font-bold mt-1 text-purple-600">5</h3>
                </div>
                <div class="p-3 bg-purple-50 text-purple-600 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                    </svg>
                </div>
            </div>

            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">@lang ('messages.total_permissions')</p>
                    <h3 class="text-2xl font-bold mt-1 text-green-600">32</h3>
                </div>
                <div class="p-3 bg-green-50 text-green-600 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                    </svg>
                </div>
            </div>

            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex items-center justify-between">
                <div>
                    <p class="text-sm text-gray-500 font-medium">@lang ('messages.total_admins')</p>
                    <h3
                        class="text-2xl font-bold mt-1 text-amber-600 font-mono">
                        4
                    </h3>
                </div>
                <div class="p-3 bg-amber-50 text-amber-600 rounded-lg">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.636 18.364a9 9 0 010-12.728m12.728 0a9 9 0 010 12.728m-9.9-2.829a5 5 0 010-7.07m7.07 0a5 5 0 010 7.07M13 12a1 1 0 11-2 0 1 1 0 012 0z"></path>
                    </svg>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-8">
            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 lg:col-span-2">
                <h2 class="text-lg font-bold mb-4 rtl:text-right ltr:text-left">
                    @lang ('messages.menu_posts')
                </h2>
                <div class="overflow-x-auto w-full">
                    <table
                        class="w-full text-sm text-gray-600 table-auto rtl:text-right ltr:text-left">
                        <thead>
                            <tr
                                class="bg-gray-50 text-gray-700 font-semibold border-b border-gray-200">
                                <th class="p-3">@lang ('messages.title')</th>
                                <th class="p-3 text-center">
                                    @lang ('messages.status')
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-100">
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td
                                    class="p-3 font-medium text-gray-900 max-w-md truncate">
                                    {{ app()->getLocale() == 'ar' ? 'دليلك الشامل لبناء نظام صلاحيات مخصص في لارافيل' : 'Ultimate Guide to Building Custom ACL in Laravel' }}
                                </td>
                                <td class="p-3 text-center whitespace-nowrap">
                                    <span
                                        class="px-2.5 py-1 text-xs font-semibold rounded-full bg-emerald-100 text-emerald-800">
                                        {{ app()->getLocale() == 'ar' ? 'منشور' : 'Published' }}
                                    </span>
                                </td>
                            </tr>
                            <tr class="hover:bg-gray-50/50 transition-colors">
                                <td
                                    class="p-3 font-medium text-gray-900 max-w-md truncate">
                                    {{ app()->getLocale() == 'ar' ? 'أفضل الممارسات لتأمين تطبيقات الويب وحمايتها من الاختراق' : 'Best Practices for Securing Web Applications' }}
                                </td>
                                <td class="p-3 text-center whitespace-nowrap">
                                    <span
                                        class="px-2.5 py-1 text-xs font-semibold rounded-full bg-amber-100 text-amber-800">
                                        {{ app()->getLocale() == 'ar' ? 'مسودة' : 'Draft' }}
                                    </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div
                class="bg-white p-6 rounded-xl shadow-sm border border-gray-200 flex flex-col justify-between">
                <div>
                    <h2
                        class="text-lg font-bold mb-4 rtl:text-right ltr:text-left">
                        @lang ('messages.quick_actions')
                    </h2>
                    <div class="space-y-3">
                        <button
                            class="w-full py-2.5 px-4 bg-emerald-600 hover:bg-emerald-700 text-white font-medium rounded-lg text-sm flex items-center justify-center transition-colors shadow-sm shadow-emerald-600/10 cursor-pointer">
                            <svg class="w-4 h-4 rtl:ml-2 ltr:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path>
                            </svg>
                            @lang ('messages.add_admin')
                        </button>

                        <button
                            class="w-full py-2.5 px-4 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg text-sm flex items-center justify-center transition-colors cursor-pointer">
                            <svg class="w-4 h-4 rtl:ml-2 ltr:mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                            </svg>
                            @lang ('messages.btn_create_role')
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
