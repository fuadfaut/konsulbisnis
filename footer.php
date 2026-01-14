<footer class="bg-slate-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <?php
                    if ( has_custom_logo() ) {
                         $custom_logo_id = get_theme_mod( 'custom_logo' );
                         $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                         echo '<img src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '" class="rounded" style="width: 40px; height: 40px; max-width: 40px; max-height: 40px; object-fit: contain;"/>';
                    } else {
                         // Fallback logo
                         echo '<img src="https://placehold.co/40x40/blue/white?text=KB" alt="Placeholder Logo" class="rounded" style="width: 40px; height: 40px; max-width: 40px; max-height: 40px; object-fit: contain;"/>';
                    }
                    ?>
                    <div>
                        <span class="text-xl font-bold">KONSULBISNIS</span>
                        <p class="text-xs text-slate-400">PT Kami Bantu Konsultan</p>
                    </div>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed max-w-sm mb-4"><?php echo esc_html( get_theme_mod( 'footer_desc', 'PT Kami Bantu Konsultan adalah perusahaan jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT di Samarinda, Kalimantan Timur.' ) ); ?></p>
                <p class="text-slate-500 text-xs"><?php echo esc_html( get_theme_mod( 'footer_address', 'Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117' ) ); ?></p>
            </div>
            <div>
                <h4 class="font-bold mb-6">Layanan</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <?php
                    if ( has_nav_menu( 'footer' ) ) {
                        wp_nav_menu( array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'items_wrap'     => '%3$s', // Just list items, no wrapper ul (since we are inside ul)
                            'depth'          => 1,
                        ) );
                    } else {
                        // Fallback static footer links
                        ?>
                        <li><a href="#services" class="hover:text-white transition-colors">Jasa Perpajakan</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Jasa Audit</a></li>
                        <li><a class="hover:text-white transition-colors" href="<?php echo home_url('/sistemasi-bisnis'); ?>">IT Konsultan</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Perencanaan Keuangan</a></li>
                        <li><a href="#services" class="hover:text-white transition-colors">Studi Kelayakan</a></li>
                        <?php
                    }
                    ?>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6">Kontak</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><?php echo esc_html( get_theme_mod( 'footer_phone1', '0851-2494-5494' ) ); ?></li>
                    <li><?php echo esc_html( get_theme_mod( 'footer_phone2', '@kamibantu.co' ) ); ?></li>
                    <li><?php echo esc_html( get_theme_mod( 'footer_email', 'KonsultanKamiBantu@gmail.com' ) ); ?></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
            <p><?php echo esc_html( get_theme_mod( 'footer_copyright', '© 2024 PT. Kami Bantu Konsultan. Hak Cipta Dilindungi Undang-Undang.' ) ); ?></p>
        </div>
    </div>
</footer>
</main>

<script>
(function() {
    'use strict';

    // ==========================================
    // Mobile Menu with Accessibility
    // ==========================================
    var mobileMenuBtn = document.getElementById('mobile-menu-btn');
    var mobileMenu = document.getElementById('mobile-menu');
    var menuIconOpen = document.getElementById('menu-icon-open');
    var menuIconClose = document.getElementById('menu-icon-close');
    
    function toggleMobileMenu() {
        var isOpen = mobileMenu.classList.contains('flex');
        
        if (isOpen) {
            // Close menu
            mobileMenu.classList.add('hidden');
            mobileMenu.classList.remove('flex');
            mobileMenuBtn.setAttribute('aria-expanded', 'false');
            if (menuIconOpen) menuIconOpen.classList.remove('hidden');
            if (menuIconClose) menuIconClose.classList.add('hidden');
        } else {
            // Open menu
            mobileMenu.classList.remove('hidden');
            mobileMenu.classList.add('flex');
            mobileMenuBtn.setAttribute('aria-expanded', 'true');
            if (menuIconOpen) menuIconOpen.classList.add('hidden');
            if (menuIconClose) menuIconClose.classList.remove('hidden');
            // Focus first link for accessibility
            var firstLink = mobileMenu.querySelector('a');
            if (firstLink) firstLink.focus();
        }
    }
    
    if (mobileMenuBtn) {
        mobileMenuBtn.addEventListener('click', toggleMobileMenu);
    }
    
    // Close menu on escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenu && mobileMenu.classList.contains('flex')) {
            toggleMobileMenu();
            mobileMenuBtn.focus();
        }
    });
    
    // Close menu when clicking anchor links
    if (mobileMenu) {
        var menuLinks = mobileMenu.querySelectorAll('a[href^="#"]');
        menuLinks.forEach(function(link) {
            link.addEventListener('click', function() {
                toggleMobileMenu();
            });
        });
    }

    // ==========================================
    // Scroll Animation Observer
    // ==========================================
    var animateElements = document.querySelectorAll('.animate-on-scroll, .animate-fade-in-left, .animate-fade-in-right, .animate-scale-in');
    
    if ('IntersectionObserver' in window && animateElements.length > 0) {
        var observer = new IntersectionObserver(function(entries) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        });
        
        animateElements.forEach(function(el) {
            observer.observe(el);
        });
    } else {
        // Fallback for browsers without IntersectionObserver
        animateElements.forEach(function(el) {
            el.classList.add('animated');
        });
    }

    // ==========================================
    // Contact Form Handling with WhatsApp
    // ==========================================
    // Pass PHP data to JS
    var whatsappNumber = '<?php echo esc_js( get_theme_mod( 'whatsapp_number', '6285124945494' ) ); ?>';

    var contactForms = document.querySelectorAll('#contact form, #contact-form form, #contact-form-main form, #contact-form-sistemasi form');
    
    contactForms.forEach(function(form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            
            var formData = new FormData(form);
            var inputs = form.querySelectorAll('input, select, textarea');
            var data = {};
            var errors = [];
            
            // Collect form data
            inputs.forEach(function(input) {
                var label = input.previousElementSibling ? input.previousElementSibling.textContent.trim() : input.name;
                var value = input.value.trim();
                
                // Basic validation
                if (input.required && !value) {
                    errors.push(label + ' wajib diisi');
                    input.classList.add('border-red-500');
                } else {
                    input.classList.remove('border-red-500');
                    if (value) {
                        data[label] = value;
                    }
                }
            });
            
            // Show errors if any
            if (errors.length > 0) {
                alert('Mohon lengkapi form:\n\n' + errors.join('\n'));
                return;
            }
            
            // Build WhatsApp message
            var message = '🏢 *Permintaan Konsultasi Baru*\n\n';
            for (var key in data) {
                message += '*' + key + ':* ' + data[key] + '\n';
            }
            message += '\n_Dikirim dari website konsulbisnis_';
            
            // Encode and open WhatsApp
            var whatsappUrl = 'https://wa.me/' + whatsappNumber + '?text=' + encodeURIComponent(message);
            
            // Open in new tab
            window.open(whatsappUrl, '_blank');
            
            // Show success message
            var submitBtn = form.querySelector('button[type="submit"], button:not([type])');
            if (submitBtn) {
                var originalText = submitBtn.textContent;
                submitBtn.textContent = '✓ Dialihkan ke WhatsApp';
                submitBtn.disabled = true;
                submitBtn.classList.add('bg-green-600');
                submitBtn.classList.remove('bg-blue-700', 'bg-amber-500');
                
                setTimeout(function() {
                    submitBtn.textContent = originalText;
                    submitBtn.disabled = false;
                    submitBtn.classList.remove('bg-green-600');
                    submitBtn.classList.add('bg-blue-700');
                    form.reset();
                }, 3000);
            }
        });
    });

    // ==========================================
    // Navbar Scroll Effect
    // ==========================================
    var navbar = document.getElementById('navbar');
    if (navbar) {
        var lastScroll = 0;
        window.addEventListener('scroll', function() {
            var currentScroll = window.pageYOffset;
            
            if (currentScroll > 100) {
                navbar.classList.add('shadow-md', 'border-slate-100');
            } else {
                navbar.classList.remove('shadow-md', 'border-slate-100');
            }
            
            lastScroll = currentScroll;
        });
    }
})();
</script>

<?php wp_footer(); ?>
</body>
</html>
