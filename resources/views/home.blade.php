<x-layouts.main :title="__('Home')">

      <!-- Hero -->
      <section class="relative min-h-screen flex items-center justify-center overflow-hidden pt-16" aria-label="Hero section">
        <div class="absolute inset-0 z-0" aria-hidden="true">
          <picture>
            <source srcset="../src/assets/hero-bg.webp" type="image/webp" />
            <img
              src="../src/assets/hero-bg.jpg"
              alt="Professional IT support and UniFi networking equipment installation in Waltham Forest"
              class="h-full w-full object-cover"
              loading="eager"
            />
          </picture>
          <div class="absolute inset-0 bg-linear-to-r from-primary/90 via-primary/70 to-secondary/80"></div>
        </div>

        <div class="relative z-10 mx-auto max-w-6xl px-4 md:px-6 text-center text-white">
          <div class="mx-auto max-w-4xl">
            <h1 class="text-3xl sm:text-5xl md:text-7xl font-bold mb-4 md:mb-6 leading-tight">
              Professional IT &amp;
              <span class="text-secondary-light block">Networking Solutions</span>
            </h1>

            <p class="text-base sm:text-xl md:text-2xl mb-6 md:mb-8 text-white/90 max-w-3xl mx-auto leading-relaxed px-2">
              Trusted IT support, networking solutions, and Ubiquiti UniFi specialists for home users, home offices, and
              small businesses in London Borough of Waltham Forest and Surrounding areas
            </p>

            <div class="flex justify-center mb-8 md:mb-12">
              <a
                class="inline-flex items-center justify-center rounded-lg bg-white px-6 sm:px-8 py-3 sm:py-4 text-base sm:text-lg font-semibold text-primary shadow-lg hover:bg-white/95 transition-colors"
                href="./contact.html"
                aria-label="Request a free quote for IT and networking services"
              >
                Request a Free Quote
                <span class="ml-2" aria-hidden="true">→</span>
              </a>
            </div>
          </div>
        </div>

        <div class="absolute bottom-8 left-1/2 -translate-x-1/2 animate-bounce" aria-hidden="true">
          <div class="w-6 h-10 border-2 border-white/30 rounded-full flex justify-center">
            <div class="w-1 h-3 bg-white/50 rounded-full mt-2"></div>
          </div>
        </div>
      </section>

      <!-- Services summary -->
      <section class="py-16" aria-labelledby="services-heading">
        <div class="mx-auto max-w-6xl px-6">
          <div class="text-center mb-12">
            <h2 id="services-heading" class="text-3xl font-bold text-foreground mb-4">Our Services</h2>
          </div>

          <div class="grid md:grid-cols-2 gap-6 max-w-2xl mx-auto">
            <div class="text-center group">
              <div class="mx-auto mb-3 w-12 h-12 bg-linear-to-br from-primary to-primary-light rounded-lg flex items-center justify-center" aria-hidden="true">
                <span class="text-primary-foreground text-xl" aria-hidden="true">🖥</span>
              </div>
              <h3 class="text-lg font-semibold text-foreground mb-2">Computer Support &amp; Repairs</h3>
              <p class="text-muted-foreground text-sm mb-3">Troubleshooting, virus removal, system upgrades, backup solutions.</p>
              <a class="inline-flex items-center gap-1 text-sm font-semibold text-primary hover:text-primary-light transition-colors" href="./services-computer-support.html">
                Learn more about Computer Support &amp; Repairs <span aria-hidden="true">→</span>
              </a>
            </div>

            <div class="text-center group">
              <div class="mx-auto mb-3 w-12 h-12 bg-linear-to-br from-primary to-primary-light rounded-lg flex items-center justify-center" aria-hidden="true">
                <span class="text-primary-foreground text-xl" aria-hidden="true">📡</span>
              </div>
              <h3 class="text-lg font-semibold text-foreground mb-2">Networking Solutions</h3>
              <p class="text-muted-foreground text-sm mb-3">Complete networking solutions using Ubiquiti UniFi gear, Wi-Fi setup, security cameras, and VoIP systems.</p>
              <a class="inline-flex items-center gap-1 text-sm font-semibold text-primary hover:text-primary-light transition-colors" href="./services-networking.html">
                Learn more about Networking Solutions <span aria-hidden="true">→</span>
              </a>
            </div>
          </div>
        </div>
      </section>

      <!-- About snippet -->
      <section class="py-16" aria-labelledby="about-heading">
        <div class="mx-auto max-w-6xl px-6">
          <div class="max-w-4xl mx-auto text-center">
            <h2 id="about-heading" class="text-3xl font-bold text-foreground mb-4">About Waltham IT Solutions</h2>
            <p class="text-lg text-muted-foreground mb-6">
              We're your trusted partner for professional IT support and networking solutions across the UK, committed to making technology work seamlessly for you.
            </p>
            <a
              class="inline-flex items-center justify-center rounded-md border border-border bg-white px-4 py-2 text-sm font-semibold text-foreground hover:border-primary/50 transition-colors"
              href="./about.html"
              aria-label="Learn more about Waltham IT Solutions"
            >
              Learn More About Us <span class="ml-2" aria-hidden="true">→</span>
            </a>
          </div>
        </div>
      </section>

</x-layouts.main>