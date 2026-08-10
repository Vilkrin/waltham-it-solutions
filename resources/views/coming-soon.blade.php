<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Waltham IT Solutions | Coming Soon</title>

    <meta name="description" content="Waltham IT Solutions — IT support, web development, hosting and technology services for home users and small businesses in Waltham Forest and East London.">

    @vite(['resources/css/app.css'])
</head>

<body class="min-h-screen bg-slate-950 text-white antialiased">

    <main class="relative flex min-h-screen items-center justify-center overflow-hidden">

        {{-- Background decoration --}}
        <div class="absolute inset-0 overflow-hidden">
            <div class="absolute -left-40 -top-40 h-96 w-96 rounded-full bg-blue-600/20 blur-3xl"></div>
            <div class="absolute -bottom-40 -right-40 h-96 w-96 rounded-full bg-cyan-500/10 blur-3xl"></div>

            <div class="absolute inset-0 opacity-[0.035]"
                 style="background-image: linear-gradient(rgba(255,255,255,0.8) 1px, transparent 1px), linear-gradient(90deg, rgba(255,255,255,0.8) 1px, transparent 1px); background-size: 50px 50px;">
            </div>
        </div>

        <div class="relative z-10 w-full max-w-5xl px-6 py-16 sm:px-8 lg:px-12">

            {{-- Header --}}
            <header class="mb-16 flex items-center justify-between">

                <a href="/" class="group flex items-center gap-3">
                    <div class="flex h-11 w-11 items-center justify-center rounded-xl bg-blue-600 shadow-lg shadow-blue-600/20 transition group-hover:bg-blue-500">
                        <svg class="h-6 w-6 text-white"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor"
                             stroke-width="1.8">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 5h10a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm2 4h6v6H9V9Z" />
                        </svg>
                    </div>

                    <div>
                        <div class="text-lg font-bold tracking-tight">
                            Waltham IT Solutions
                        </div>
                        <div class="text-xs font-medium uppercase tracking-[0.2em] text-slate-500">
                            Technology that works
                        </div>
                    </div>
                </a>

                <div class="hidden items-center gap-2 text-sm text-slate-400 sm:flex">
                    <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                    Website in development
                </div>

            </header>


            {{-- Hero --}}
            <section class="grid items-center gap-14 lg:grid-cols-[1.25fr_0.75fr]">

                <div>

                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-blue-500/20 bg-blue-500/10 px-4 py-2 text-sm font-medium text-blue-300">
                        <span class="relative flex h-2 w-2">
                            <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-400 opacity-75"></span>
                            <span class="relative inline-flex h-2 w-2 rounded-full bg-blue-500"></span>
                        </span>

                        Something new is coming
                    </div>

                    <h1 class="max-w-3xl text-5xl font-bold tracking-tight text-white sm:text-6xl lg:text-7xl">
                        IT that works
                        <span class="block bg-gradient-to-r from-blue-400 via-cyan-400 to-blue-500 bg-clip-text text-transparent">
                            for you.
                        </span>
                    </h1>

                    <p class="mt-7 max-w-2xl text-lg leading-8 text-slate-400 sm:text-xl">
                        Waltham IT Solutions is getting a new home on the web.
                        We're building a better way to provide reliable IT,
                        web development and technology services to home users
                        and small businesses across Waltham Forest and East London.
                    </p>

                    {{-- Services --}}
                    <div class="mt-10 grid max-w-2xl grid-cols-1 gap-3 sm:grid-cols-2">

                        <div class="flex items-center gap-3 rounded-xl border border-white/5 bg-white/[0.03] px-4 py-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-blue-500/10 text-blue-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                          d="M9.75 17 9 20l-3 1h12l-3-1-.75-3M3 5h18v12H3V5Z" />
                                </svg>
                            </div>

                            <span class="text-sm font-medium text-slate-300">
                                IT Support
                            </span>
                        </div>


                        <div class="flex items-center gap-3 rounded-xl border border-white/5 bg-white/[0.03] px-4 py-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-cyan-500/10 text-cyan-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                          d="m8 9-3 3 3 3m8-6 3 3-3 3M14 5l-4 14" />
                                </svg>
                            </div>

                            <span class="text-sm font-medium text-slate-300">
                                Web Development
                            </span>
                        </div>


                        <div class="flex items-center gap-3 rounded-xl border border-white/5 bg-white/[0.03] px-4 py-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-indigo-500/10 text-indigo-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                          d="M4 7h16M4 12h16M4 17h16" />
                                </svg>
                            </div>

                            <span class="text-sm font-medium text-slate-300">
                                Hosting & Domains
                            </span>
                        </div>


                        <div class="flex items-center gap-3 rounded-xl border border-white/5 bg-white/[0.03] px-4 py-3">
                            <div class="flex h-9 w-9 shrink-0 items-center justify-center rounded-lg bg-violet-500/10 text-violet-400">
                                <svg class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"
                                          d="M12 6v12m-6-6h12M5.636 5.636l12.728 12.728M18.364 5.636 5.636 18.364" />
                                </svg>
                            </div>

                            <span class="text-sm font-medium text-slate-300">
                                Home Technology
                            </span>
                        </div>

                    </div>

                </div>


                {{-- Coming Soon Card --}}
                <div class="relative">

                    <div class="absolute -inset-4 rounded-3xl bg-blue-500/10 blur-2xl"></div>

                    <div class="relative overflow-hidden rounded-3xl border border-white/10 bg-white/[0.04] p-8 shadow-2xl shadow-black/20 backdrop-blur-xl sm:p-10">

                        <div class="mb-8 flex items-center justify-between">
                            <div>
                                <p class="text-sm font-medium uppercase tracking-[0.2em] text-blue-400">
                                    Coming Soon
                                </p>

                                <h2 class="mt-2 text-2xl font-bold text-white">
                                    We're working on it.
                                </h2>
                            </div>

                            <div class="flex h-12 w-12 items-center justify-center rounded-2xl bg-blue-600/10">
                                <svg class="h-6 w-6 text-blue-400"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="1.8"
                                          d="M12 6v6l4 2m5-2a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                            </div>
                        </div>


                        <div class="space-y-5">

                            <div class="flex gap-4">
                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full bg-blue-600 text-sm font-bold">
                                    1
                                </div>

                                <div>
                                    <h3 class="font-semibold text-white">
                                        Building the new site
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        A new home for Waltham IT Solutions is on its way.
                                    </p>
                                </div>
                            </div>


                            <div class="flex gap-4">
                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/5 text-sm font-bold text-slate-400">
                                    2
                                </div>

                                <div>
                                    <h3 class="font-semibold text-slate-300">
                                        New services & packages
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        Clearer services and straightforward pricing.
                                    </p>
                                </div>
                            </div>


                            <div class="flex gap-4">
                                <div class="flex h-8 w-8 shrink-0 items-center justify-center rounded-full border border-white/10 bg-white/5 text-sm font-bold text-slate-400">
                                    3
                                </div>

                                <div>
                                    <h3 class="font-semibold text-slate-300">
                                        Ready to help
                                    </h3>

                                    <p class="mt-1 text-sm leading-6 text-slate-500">
                                        Local IT support for homes and small businesses.
                                    </p>
                                </div>
                            </div>

                        </div>


                        <div class="mt-10 border-t border-white/10 pt-7">

                            <p class="text-sm text-slate-500">
                                Need help before we're live?
                            </p>

                            <a href="mailto:contact@walthamitsolutions.co.uk"
                               class="mt-2 inline-flex items-center gap-2 font-medium text-blue-400 transition hover:text-blue-300">

                                contact@walthamitsolutions.co.uk

                                <svg class="h-4 w-4"
                                     fill="none"
                                     viewBox="0 0 24 24"
                                     stroke="currentColor">
                                    <path stroke-linecap="round"
                                          stroke-linejoin="round"
                                          stroke-width="2"
                                          d="M5 12h14m-6-6 6 6-6 6" />
                                </svg>

                            </a>

                        </div>

                    </div>

                </div>

            </section>


            {{-- Footer --}}
            <footer class="mt-20 flex flex-col gap-4 border-t border-white/10 pt-7 text-sm text-slate-500 sm:flex-row sm:items-center sm:justify-between">

                <p>
                    &copy; {{ date('Y') }} Waltham IT Solutions. All rights reserved.
                </p>

                <p>
                    Waltham Forest &bull; East London
                </p>

            </footer>

        </div>

    </main>

</body>
</html>