<x-layouts.main :title="__('Services')">

      <!-- Header -->
      <section class="pt-20 md:pt-24 pb-12 md:pb-16 bg-muted">
        <div class="mx-auto max-w-6xl px-4 md:px-6">
          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-foreground mb-4 md:mb-6">
              IT Support &amp; Networking Services in Waltham Forest
            </h1>
            <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">
              Professional IT support and networking solutions designed for home users, home offices, and small businesses in London Borough of Waltham Forest and Surrounding areas.
            </p>
          </div>
        </div>
      </section>

      <!-- Services grid -->
      <section class="py-16">
        <div class="mx-auto max-w-6xl px-6">
          <div class="grid md:grid-cols-2 gap-8 max-w-5xl mx-auto">
            <article class="group rounded-xl border border-card-border bg-card hover:shadow-xl transition-all duration-300">
              <div class="p-6 text-center">
                <div class="mx-auto mb-4 w-16 h-16 bg-linear-to-br from-primary to-primary-light rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300" aria-hidden="true">
                  <span class="text-primary-foreground text-2xl" aria-hidden="true">🖥</span>
                </div>
                <h2 class="text-xl font-semibold text-foreground">Computer Support &amp; Repairs</h2>
                <p class="mt-2 text-muted-foreground text-sm">
                  Professional troubleshooting, virus removal, system upgrades, and backup solutions for your computers and devices.
                </p>
              </div>
              <div class="px-6 pb-6 space-y-4">
                <ul class="space-y-2">
                  <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-2 h-2 rounded-full bg-secondary"></span>PC &amp; Laptop Troubleshooting</li>
                  <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-2 h-2 rounded-full bg-secondary"></span>Virus &amp; Malware Removal</li>
                  <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-2 h-2 rounded-full bg-secondary"></span>System Upgrades &amp; Optimisation</li>
                  <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-2 h-2 rounded-full bg-secondary"></span>Data Backup Solutions</li>
                </ul>
                <a
                  class="inline-flex w-full items-center justify-center rounded-md border border-border bg-white px-4 py-2 text-sm font-semibold text-foreground hover:border-primary/50 transition-colors"
                  href="./services-computer-support.html"
                >
                  Learn More about Computer Support &amp; Repairs <span class="ml-2" aria-hidden="true">→</span>
                </a>
              </div>
            </article>

            <article class="group rounded-xl border border-card-border bg-card hover:shadow-xl transition-all duration-300">
              <div class="p-6 text-center">
                <div class="mx-auto mb-4 w-16 h-16 bg-linear-to-br from-primary to-primary-light rounded-xl flex items-center justify-center group-hover:scale-110 transition-transform duration-300" aria-hidden="true">
                  <span class="text-primary-foreground text-2xl" aria-hidden="true">📶</span>
                </div>
                <h2 class="text-xl font-semibold text-foreground">Networking Solutions</h2>
                <p class="mt-2 text-muted-foreground text-sm">
                  Complete networking solutions using Ubiquiti UniFi gear — delivering enterprise-grade Wi-Fi, secure routing, reliable switching, surveillance, and VoIP systems for homes, home offices, and small businesses.
                </p>
              </div>
              <div class="px-6 pb-6 space-y-4">
                <ul class="space-y-2">
                  <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-2 h-2 rounded-full bg-secondary"></span>UniFi Network Design &amp; Installation</li>
                  <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-2 h-2 rounded-full bg-secondary"></span>UniFi Protect Surveillance</li>
                  <li class="flex items-center gap-2 text-sm text-muted-foreground"><span class="w-2 h-2 rounded-full bg-secondary"></span>UniFi Talk VoIP Systems</li>
                </ul>
                <a
                  class="inline-flex w-full items-center justify-center rounded-md border border-border bg-white px-4 py-2 text-sm font-semibold text-foreground hover:border-primary/50 transition-colors"
                  href="./services-networking.html"
                >
                  Learn More about Networking Solutions <span class="ml-2" aria-hidden="true">→</span>
                </a>
              </div>
            </article>
          </div>
        </div>
      </section>

</x-layouts.main>