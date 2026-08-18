<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @hasSection('title')
            @yield('title') | {{ config('app.name', 'Laravel') }}
            @else
            {{ config('app.name', 'Laravel') }}
            @endif
        </title>



        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600&display=swap" rel="stylesheet" />
 
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->        
        @livewireStyles
        @fluxAppearance

</head>
<body class="bg-linear-to-br from-slate-50 to-blue-50 dark:from-slate-900 dark:to-slate-800 text-slate-900 dark:text-slate-100 min-h-screen">
    <div class="min-h-screen py-10 px-4">
        <div class="mx-auto max-w-5xl">
            <div class="mb-8 rounded-2xl border border-slate-800 bg-slate-900/80 p-8 shadow-2xl">
                <p class="text-sm font-medium uppercase tracking-[0.2em] text-cyan-400">Waltham IT Solutions</p>
                <h1 class="mt-3 text-3xl font-bold tracking-tight text-white md:text-4xl">
                    Website Project Information Form
                </h1>
                <p class="mt-4 max-w-3xl text-sm leading-6 text-slate-300 md:text-base">
                    Please complete this form with as much detail as possible. The information provided will be used to price and scope your website project accurately.
                </p>
            </div>

            <form class="space-y-8">
                <!-- Business Overview -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">1. Business Overview</h2>
                    <div class="mt-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Business / Project Name</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Enter business or project name">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Website Name (if different)</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Enter website name">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Industry / Niche</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="e.g. trades, gaming, retail, services">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Target Audience</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Who is the website for?">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Brief Description of the Business / Project</label>
                        <textarea rows="5" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Describe what the business or project does"></textarea>
                    </div>
                </section>

                <!-- Goals -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">2. Goals & Purpose</h2>

                    <div class="mt-6">
                        <label class="mb-3 block text-sm font-medium text-slate-200">Main Goal of the Website</label>
                        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Informational</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Lead Generation</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>E-commerce</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Bookings</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Community / Membership</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Other</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="mb-3 block text-sm font-medium text-slate-200">Key Actions You Want Visitors to Take</label>
                        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Contact You</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Request a Quote</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Purchase Products / Services</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Book an Appointment</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Sign Up / Register</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Join a Community / Discord</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Anything Else the Website Must Achieve?</label>
                        <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Enter any additional goals"></textarea>
                    </div>
                </section>

                <!-- Pages -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">3. Pages & Site Structure</h2>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">List the Pages You Want on the Website</label>
                        <textarea rows="6" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Example: Home, About, Services, Gallery, Blog, Contact"></textarea>
                    </div>

                    <div class="mt-6">
                        <label class="mb-3 block text-sm font-medium text-slate-200">Additional Sections / Features Needed</label>
                        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Blog</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Forum / Discussion Area</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>User Accounts</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Dashboard / Admin Area</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Store / Marketplace</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Booking System</span>
                            </label>
                        </div>
                    </div>
                </section>

                <!-- Design -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">4. Design & Style</h2>

                    <div class="mt-6">
                        <label class="mb-3 block text-sm font-medium text-slate-200">Preferred Style</label>
                        <div class="grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Modern</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Minimal</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Corporate</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Luxury</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Creative</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Dark Mode</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Preferred Colours</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="e.g. navy, gold, white">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Preferred Fonts / Typography</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="If known">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Websites You Like / Inspiration</label>
                        <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Paste links or describe sites you like"></textarea>
                    </div>
                </section>

                <!-- Branding -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">5. Branding Assets</h2>

                    <div class="mt-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Do You Have a Logo?</label>
                            <select class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 outline-none transition focus:border-cyan-400">
                                <option>Select an option</option>
                                <option>Yes</option>
                                <option>No</option>
                                <option>Needs updating</option>
                            </select>
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Do You Have Brand Guidelines?</label>
                            <select class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 outline-none transition focus:border-cyan-400">
                                <option>Select an option</option>
                                <option>Yes</option>
                                <option>No</option>
                            </select>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Brand Assets Available</label>
                        <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="e.g. logo, social icons, images, videos, brand colours"></textarea>
                    </div>
                </section>

                <!-- Content -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">6. Content</h2>

                    <div class="mt-6">
                        <label class="mb-3 block text-sm font-medium text-slate-200">Will You Be Providing the Website Content?</label>
                        <div class="grid gap-3 md:grid-cols-3">
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="radio" name="content_supply" class="h-4 w-4 border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Yes, all content</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="radio" name="content_supply" class="h-4 w-4 border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>Partially</span>
                            </label>
                            <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                                <input type="radio" name="content_supply" class="h-4 w-4 border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                                <span>No, content needed</span>
                            </label>
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Content Notes</label>
                        <textarea rows="5" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Describe the text, images, service details, product details, tone of voice, or anything else relevant"></textarea>
                    </div>
                </section>

                <!-- Functionality -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">7. Functionality Requirements</h2>

                    <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Contact Form</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Newsletter Signup</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>User Login / Registration</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Payments / Checkout</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Gallery / Media Library</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Search</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Bookings / Appointments</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Member Areas / Roles</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Other</span>
                        </label>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Other Functional Requirements</label>
                        <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="List anything else the website needs to do"></textarea>
                    </div>
                </section>

                <!-- Admin -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">8. Admin / Management Requirements</h2>

                    <div class="mt-6 grid gap-3 sm:grid-cols-2 lg:grid-cols-3">
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage Pages</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage Blog Posts</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage Users</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage Products / Services</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage Media</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage Menus / Navigation</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage SEO / Settings</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Manage Orders / Enquiries</span>
                        </label>
                        <label class="flex items-center gap-3 rounded-xl border border-slate-700 bg-slate-950 px-4 py-3">
                            <input type="checkbox" class="h-4 w-4 rounded border-slate-600 bg-slate-900 text-cyan-500 focus:ring-cyan-500">
                            <span>Other</span>
                        </label>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Anything Specific You Need to Manage Yourself?</label>
                        <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Describe anything important for the admin side"></textarea>
                    </div>
                </section>

                <!-- Technical -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">9. Technical Details</h2>

                    <div class="mt-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Domain Name</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Enter domain if you have one">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Hosting Preference</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="If known">
                        </div>
                    </div>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Integrations or Third-Party Services Needed</label>
                        <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="e.g. Stripe, social media, booking tools, CRM, newsletter tools"></textarea>
                    </div>
                </section>

                <!-- Budget -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">10. Timeline & Budget</h2>

                    <div class="mt-6 grid gap-6 md:grid-cols-2">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Desired Launch Date</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Enter preferred date or timeframe">
                        </div>
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Budget Range</label>
                            <input type="text" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Enter budget range if known">
                        </div>
                    </div>
                </section>

                <!-- Lovable prompt helpers -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">11. Information for Lovable Prompt Creation</h2>
                    <p class="mt-2 text-sm leading-6 text-slate-300">
                        These answers help turn your requirements into a clean frontend prompt for UI generation.
                    </p>

                    <div class="mt-6 space-y-6">
                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">How should the website feel?</label>
                            <textarea rows="3" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="e.g. professional, premium, futuristic, friendly, community-driven"></textarea>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">What are the most important sections to highlight on the homepage?</label>
                            <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="List the sections that matter most"></textarea>
                        </div>

                        <div>
                            <label class="mb-2 block text-sm font-medium text-slate-200">Any specific layout or UI preferences?</label>
                            <textarea rows="4" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="e.g. large hero banner, card-based layout, sticky header, dark footer"></textarea>
                        </div>
                    </div>
                </section>

                <!-- Notes -->
                <section class="rounded-2xl border border-slate-800 bg-slate-900 p-6">
                    <h2 class="text-xl font-semibold text-white">12. Additional Notes</h2>

                    <div class="mt-6">
                        <label class="mb-2 block text-sm font-medium text-slate-200">Anything Else You Want Included?</label>
                        <textarea rows="6" class="w-full rounded-xl border border-slate-700 bg-slate-950 px-4 py-3 text-slate-100 placeholder-slate-500 outline-none transition focus:border-cyan-400" placeholder="Add any final notes here"></textarea>
                    </div>
                </section>

                <div class="flex flex-col gap-4 rounded-2xl border border-slate-800 bg-slate-900 p-6 sm:flex-row sm:items-center sm:justify-between">
                    <p class="text-sm text-slate-400">
                        This is a frontend mockup only and can later be adapted into a website form or a document.
                    </p>
                    <div class="flex gap-3">
                        <button type="button" class="rounded-xl border border-slate-700 px-5 py-3 text-sm font-medium text-slate-200 transition hover:border-slate-500 hover:bg-slate-800">
                            Save Draft
                        </button>
                        <button type="submit" class="rounded-xl bg-cyan-500 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-400">
                            Submit Project Details
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</body>
</html>