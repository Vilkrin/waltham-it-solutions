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

  <body>
    <!-- Nav -->
    <nav class="fixed top-0 left-0 right-0 z-50 bg-white/95 backdrop-blur-sm shadow-sm">
      <div class="mx-auto max-w-6xl px-6">
        <div class="flex h-16 items-center justify-between">
          <a href="{{ route('home') }}" class="text-2xl font-bold text-primary hover:text-primary-light transition-colors">
            Waltham IT Solutions
          </a>

          <div class="hidden md:flex items-center gap-8">
            <a class="text-foreground hover:text-primary transition-colors font-medium" href="{{ route('home') }}">Home</a>
            <a class="text-foreground hover:text-primary transition-colors font-medium" href="{{ route('services') }}">Services</a>
            <a class="text-foreground hover:text-primary transition-colors font-medium" href="{{ route('pricing') }}">Pricing</a>
            <a class="text-foreground hover:text-primary transition-colors font-medium" href="{{ route('about') }}">About</a>
            <a class="text-foreground hover:text-primary transition-colors font-medium" href="{{ route('contact') }}">Contact</a>
          </div>

          <div class="hidden md:flex items-center gap-4">
            <div class="flex items-center gap-2 text-sm text-muted-foreground">
              <span aria-hidden="true">☎</span>
              <span>+44 (0) 123 456 7890</span>
            </div>
            <a
              class="inline-flex items-center justify-center rounded-md bg-secondary px-4 py-2 text-sm font-semibold text-secondary-foreground shadow-sm hover:bg-accent-hover transition-colors"
              href="{{ route('contact') }}"
            >
              Get Support
            </a>
          </div>

          <button
            id="mobileMenuButton"
            class="md:hidden inline-flex items-center justify-center rounded-md p-2 text-foreground hover:bg-muted transition-colors"
            aria-label="Toggle menu"
            aria-expanded="false"
            aria-controls="mobileMenu"
          >
            <span id="mobileMenuIcon">☰</span>
          </button>
        </div>

        <div id="mobileMenu" class="hidden md:hidden border-t border-border">
          <div class="py-4 space-y-4">
            <a class="block py-2 text-foreground hover:text-primary transition-colors font-medium" href="{{ route('home') }}">Home</a>
            <a class="block py-2 text-foreground hover:text-primary transition-colors font-medium" href="{{ route('services') }}">Services</a>
            <a class="block py-2 text-foreground hover:text-primary transition-colors font-medium" href="{{ route('pricing') }}">Pricing</a>
            <a class="block py-2 text-foreground hover:text-primary transition-colors font-medium" href="{{ route('about') }}">About</a>
            <a class="block py-2 text-foreground hover:text-primary transition-colors font-medium" href="{{ route('contact') }}">Contact</a>

            <div class="pt-4 border-t border-border space-y-3">
              <div class="flex items-center gap-2 text-sm text-muted-foreground">
                <span aria-hidden="true">☎</span>
                <span>+44 (0) 123 456 7890</span>
              </div>
              <a
                class="inline-flex w-full items-center justify-center rounded-md bg-secondary px-4 py-2 text-sm font-semibold text-secondary-foreground shadow-sm hover:bg-accent-hover transition-colors"
                href="{{ route('contact') }}"
              >
                Get Support
              </a>
            </div>
          </div>
        </div>
      </div>
    </nav>

    <main class="min-h-screen">
      {{ $slot }}
    </main>

    <!-- Footer -->
    <footer class="bg-primary text-primary-foreground" role="contentinfo" aria-label="Site footer">
      <div class="mx-auto max-w-6xl px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
          <div class="space-y-6">
            <h3 class="text-2xl font-bold">Waltham IT Solutions</h3>
            <p class="text-primary-foreground/80 leading-relaxed">
              Professional IT and networking solutions for home users, home offices, and small businesses in London Borough of Waltham Forest and Surrounding areas.
            </p>
            <div class="space-y-3">
              <div class="flex items-center gap-3">
                <span class="w-5 text-secondary-light" aria-hidden="true">☎</span>
                <span class="text-sm">+44 (0) 123 456 7890</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-5 text-secondary-light" aria-hidden="true">✉</span>
                <span class="text-sm">info@walthamitsolutions.co.uk</span>
              </div>
              <div class="flex items-center gap-3">
                <span class="w-5 text-secondary-light" aria-hidden="true">📍</span>
                <span class="text-sm">London Borough of Waltham Forest &amp; Surrounding areas</span>
              </div>
            </div>
          </div>

          <div class="space-y-6">
            <h4 class="text-lg font-semibold">Quick Links</h4>
            <nav aria-label="Footer navigation">
              <ul class="space-y-3">
                <li><a class="text-primary-foreground/80 hover:text-secondary-light transition-colors text-sm" href="{{ route('home') }}">Home</a></li>
                <li><a class="text-primary-foreground/80 hover:text-secondary-light transition-colors text-sm" href="{{ route('services') }}">Services</a></li>
                <li><a class="text-primary-foreground/80 hover:text-secondary-light transition-colors text-sm" href="{{ route('about') }}">About</a></li>
                <li><a class="text-primary-foreground/80 hover:text-secondary-light transition-colors text-sm" href="{{ route('contact') }}">Contact</a></li>
              </ul>
            </nav>
          </div>

          <div class="space-y-6">
            <h4 class="text-lg font-semibold">Our Services</h4>
            <nav aria-label="Services navigation">
              <ul class="space-y-3">
                <li><a class="text-primary-foreground/80 hover:text-secondary-light transition-colors text-sm" href=".{{ route('computer-support') }}">Computer Support</a></li>
                <li><a class="text-primary-foreground/80 hover:text-secondary-light transition-colors text-sm" href="{{ route('networking-support') }}">Networking Solutions</a></li>
                <li><a class="text-primary-foreground/80 hover:text-secondary-light transition-colors text-sm" href="{{ route('networking-support') }}">Ubiquiti UniFi</a></li>
              </ul>
            </nav>
          </div>

          <div class="space-y-6">
            <h4 class="text-lg font-semibold">Connect With Us</h4>
            <div class="flex gap-4">
              <a class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center hover:bg-secondary-light transition-colors" href="#" aria-label="Facebook">f</a>
              <a class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center hover:bg-secondary-light transition-colors" href="#" aria-label="Twitter">x</a>
              <a class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center hover:bg-secondary-light transition-colors" href="#" aria-label="LinkedIn">in</a>
              <a class="w-10 h-10 rounded-lg bg-white/10 flex items-center justify-center hover:bg-secondary-light transition-colors" href="#" aria-label="Instagram">ig</a>
            </div>
            <div class="space-y-3">
              <h5 class="font-medium">Business Hours</h5>
              <div class="text-sm text-primary-foreground/80 space-y-1">
                <p>Monday - Friday: 8:00 AM - 6:00 PM</p>
                <p>Saturday: 9:00 AM - 4:00 PM</p>
                <p>Sunday: Emergency Support Only</p>
              </div>
            </div>
          </div>
        </div>

        <div class="border-t border-white/20 mt-12 pt-8">
          <div class="flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-sm text-primary-foreground/80">© <span id="currentYear"></span> Waltham IT Solutions. All rights reserved.</p>
            <div class="flex gap-6 text-sm">
              <a href="#" class="text-primary-foreground/80 hover:text-secondary-light transition-colors">Privacy Policy</a>
              <a href="#" class="text-primary-foreground/80 hover:text-secondary-light transition-colors">Terms of Service</a>
              <a href="#" class="text-primary-foreground/80 hover:text-secondary-light transition-colors">Cookie Policy</a>
            </div>
          </div>
        </div>
      </div>
    </footer>

     @livewireScripts
     @fluxScripts

     

  </body>
</html>