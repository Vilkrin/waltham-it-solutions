<x-layout.main :title="__('Contact Us')">

      <!-- Header -->
      <section class="pt-20 md:pt-24 pb-6 md:pb-8 bg-muted">
        <div class="mx-auto max-w-6xl px-4 md:px-6">
          <div class="max-w-4xl mx-auto text-center">
            <h1 class="text-3xl md:text-5xl font-bold text-foreground mb-4 md:mb-6">Contact Waltham IT Solutions</h1>
            <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto">
              Ready to discuss your IT and networking needs? Contact us for a free consultation and discover how we can help improve your technology setup.
            </p>
          </div>
        </div>
      </section>

      <!-- Contact section -->
      <section id="contact" class="py-20 bg-muted" aria-labelledby="contact-heading">
        <div class="mx-auto max-w-6xl px-6">
          <h2 id="contact-heading" class="sr-only">Contact</h2>
          <div class="max-w-6xl mx-auto grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Info cards -->
            <div class="lg:col-span-1 space-y-6">
              <div class="rounded-xl border border-card-border bg-card hover:shadow-md transition-shadow">
                <div class="p-6">
                  <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-lg bg-linear-to-br from-primary to-primary-light flex items-center justify-center shrink-0" aria-hidden="true">
                      <span class="text-white text-xl" aria-hidden="true">☎</span>
                    </div>
                    <div class="flex-1">
                      <h3 class="font-semibold text-foreground mb-2">Phone</h3>
                      <div class="space-y-1 mb-2">
                        <p class="text-sm text-muted-foreground font-medium">+44 (0) 123 456 7890</p>
                        <p class="text-sm text-muted-foreground font-medium">Emergency: +44 (0) 987 654 3210</p>
                      </div>
                      <p class="text-xs text-muted-foreground">Call us for immediate support</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="rounded-xl border border-card-border bg-card hover:shadow-md transition-shadow">
                <div class="p-6">
                  <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-lg bg-linear-to-br from-primary to-primary-light flex items-center justify-center shrink-0" aria-hidden="true">
                      <span class="text-white text-xl" aria-hidden="true">✉</span>
                    </div>
                    <div class="flex-1">
                      <h3 class="font-semibold text-foreground mb-2">Email</h3>
                      <div class="space-y-1 mb-2">
                        <p class="text-sm text-muted-foreground font-medium">info@walthamitsolutions.co.uk</p>
                        <p class="text-sm text-muted-foreground font-medium">support@walthamitsolutions.co.uk</p>
                      </div>
                      <p class="text-xs text-muted-foreground">Send us your enquiry</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="rounded-xl border border-card-border bg-card hover:shadow-md transition-shadow">
                <div class="p-6">
                  <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-lg bg-linear-to-br from-primary to-primary-light flex items-center justify-center shrink-0" aria-hidden="true">
                      <span class="text-white text-xl" aria-hidden="true">📍</span>
                    </div>
                    <div class="flex-1">
                      <h3 class="font-semibold text-foreground mb-2">Service Areas</h3>
                      <div class="space-y-1 mb-2">
                        <p class="text-sm text-muted-foreground font-medium">London Borough of Waltham Forest</p>
                        <p class="text-sm text-muted-foreground font-medium">Surrounding areas</p>
                      </div>
                      <p class="text-xs text-muted-foreground">We serve clients across the region</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="rounded-xl border border-card-border bg-card hover:shadow-md transition-shadow">
                <div class="p-6">
                  <div class="flex items-start gap-4">
                    <div class="w-12 h-12 rounded-lg bg-linear-to-br from-primary to-primary-light flex items-center justify-center shrink-0" aria-hidden="true">
                      <span class="text-white text-xl" aria-hidden="true">⏰</span>
                    </div>
                    <div class="flex-1">
                      <h3 class="font-semibold text-foreground mb-2">Business Hours</h3>
                      <div class="space-y-1 mb-2">
                        <p class="text-sm text-muted-foreground font-medium">Mon-Fri: 8:00 AM - 6:00 PM</p>
                        <p class="text-sm text-muted-foreground font-medium">Sat: 9:00 AM - 4:00 PM</p>
                        <p class="text-sm text-muted-foreground font-medium">Emergency Support Available</p>
                      </div>
                      <p class="text-xs text-muted-foreground">When we're available</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Form -->
            <div class="lg:col-span-2">
              <div class="rounded-xl border border-card-border bg-card shadow-lg">
                <div class="p-6 border-b border-border">
                  <h3 class="text-2xl font-bold text-foreground">Send Us a Message</h3>
                </div>
                <div class="p-6">
                  <form id="contactForm" class="space-y-6" aria-label="Contact form">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                      <div class="space-y-2">
                        <label for="name" class="text-sm font-semibold text-foreground">Name *</label>
                        <input
                          id="name"
                          name="name"
                          placeholder="Your full name"
                          required
                          aria-required="true"
                          class="w-full rounded-md border border-input px-3 py-2 text-sm text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring"
                        />
                      </div>

                      <div class="space-y-2">
                        <label for="email" class="text-sm font-semibold text-foreground">Email *</label>
                        <input
                          id="email"
                          name="email"
                          type="email"
                          placeholder="your.email@example.com"
                          required
                          aria-required="true"
                          class="w-full rounded-md border border-input px-3 py-2 text-sm text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring"
                        />
                      </div>
                    </div>

                    <div class="space-y-2">
                      <label for="phone" class="text-sm font-semibold text-foreground">Phone Number</label>
                      <input
                        id="phone"
                        name="phone"
                        type="tel"
                        placeholder="+44 (0) 123 456 7890"
                        class="w-full rounded-md border border-input px-3 py-2 text-sm text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring"
                      />
                    </div>

                    <div class="space-y-2">
                      <label for="message" class="text-sm font-semibold text-foreground">Message *</label>
                      <textarea
                        id="message"
                        name="message"
                        placeholder="Tell us about your IT needs, current challenges, or any questions you have..."
                        rows="6"
                        required
                        aria-required="true"
                        class="w-full rounded-md border border-input px-3 py-2 text-sm text-foreground placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring resize-none"
                      ></textarea>
                    </div>

                    <button
                      type="submit"
                      class="inline-flex w-full items-center justify-center rounded-md bg-secondary px-6 py-4 text-lg font-semibold text-secondary-foreground shadow-sm hover:bg-accent-hover transition-colors"
                      aria-label="Send message"
                    >
                      Send Message <span class="ml-2" aria-hidden="true">➤</span>
                    </button>

                    <p id="formStatus" class="hidden text-sm text-success font-semibold"></p>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>  

</x-layout.main>