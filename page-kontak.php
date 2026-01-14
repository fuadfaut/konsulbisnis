<?php
/**
 * Template Name: Halaman Kontak
 * 
 * Template for Contact Page - Same style as Homepage contact section
 */

get_header(); ?>

<section id="contact" class="py-24 bg-slate-100">
    <div class="container mx-auto px-6">
        <div class="flex flex-col lg:flex-row gap-0 max-w-6xl mx-auto rounded-3xl overflow-hidden shadow-2xl animate-on-scroll">
            <!-- Left Column - Contact Info with Image -->
            <div class="lg:w-5/12 relative overflow-hidden text-white min-h-[500px]" style="background: linear-gradient(135deg, #1d4ed8 0%, #1e40af 50%, #172554 100%);">
                <!-- Background Image Placeholder if needed or Color -->
                 <div class="absolute inset-0 bg-blue-900 opacity-50"></div>
                
                <div class="relative z-10 p-10 lg:p-12 h-full flex flex-col">
                    <h2 class="text-3xl lg:text-4xl font-bold mb-4 text-white"><?php echo esc_html( get_theme_mod( 'contact_title', 'Hubungi Kami' ) ); ?></h2>
                    <p class="text-blue-100 mb-10 leading-relaxed">
                        <?php echo nl2br( esc_html( get_theme_mod( 'contact_desc', 'Siap merapikan keuangan dan mensistemasi bisnis Anda? Konsultasi awal gratis.' ) ) ); ?>
                    </p>
                    
                    <!-- Contact Details -->
                    <div class="space-y-6 flex-grow">
                        <!-- Kantor -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path><circle cx="12" cy="10" r="3"></circle></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">Kantor</h4>
                                <p class="text-blue-200 text-sm leading-relaxed"><?php echo esc_html( get_theme_mod( 'footer_address', 'Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117' ) ); ?></p>
                            </div>
                        </div>
                        
                        <!-- WhatsApp -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><path d="M21 11.5a8.38 8.38 0 0 1-.9 3.8 8.5 8.5 0 0 1-7.6 4.7 8.38 8.38 0 0 1-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 0 1-.9-3.8 8.5 8.5 0 0 1 4.7-7.6 8.38 8.38 0 0 1 3.8-.9h.5a8.48 8.48 0 0 1 8 8v.5z"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">WhatsApp</h4>
                                <p class="text-blue-200 text-sm"><?php echo esc_html( get_theme_mod( 'footer_phone1', '0851-2494-5494' ) ); ?></p>
                            </div>
                        </div>
                        
                        <!-- Email -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><rect width="20" height="16" x="2" y="4" rx="2"></rect><path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">Email</h4>
                                <p class="text-blue-200 text-sm"><?php echo esc_html( get_theme_mod( 'footer_email', 'KonsultanKamiBantu@gmail.com' ) ); ?></p>
                            </div>
                        </div>
                        
                        <!-- Instagram -->
                        <div class="flex items-start gap-4">
                            <div class="w-10 h-10 bg-white/10 rounded-lg flex items-center justify-center shrink-0">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="text-blue-200"><rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line></svg>
                            </div>
                            <div>
                                <h4 class="font-bold text-white mb-1">Instagram</h4>
                                <a href="https://instagram.com/kamibantu.co" target="_blank" rel="noopener noreferrer" class="text-blue-200 text-sm hover:text-white transition-colors">@kamibantu.co</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Right Column - Form -->
            <div class="lg:w-7/12 bg-white p-10 lg:p-12">
                <div class="mb-8">
                    <h2 class="text-2xl lg:text-3xl font-bold text-slate-900 mb-2">Konsultasi via WhatsApp</h2>
                    <p class="text-slate-500">Isi form di bawah untuk memulai konsultasi</p>
                </div>
                
                <form class="space-y-6" id="contact-form-page">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="nama" class="block text-sm font-semibold text-slate-700 mb-2">Nama</label>
                            <input type="text" id="nama" name="nama" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="Nama Anda"/>
                        </div>
                        <div>
                            <label for="perusahaan" class="block text-sm font-semibold text-slate-700 mb-2">Perusahaan</label>
                            <input type="text" id="perusahaan" name="perusahaan" class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="PT ABC"/>
                        </div>
                    </div>
                    <div>
                        <label for="kontak" class="block text-sm font-semibold text-slate-700 mb-2">WhatsApp</label>
                        <input type="text" id="kontak" name="kontak" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition" placeholder="08123456789"/>
                    </div>
                    <div>
                        <label for="topik" class="block text-sm font-semibold text-slate-700 mb-2">Topik</label>
                        <select id="topik" name="topik" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition cursor-pointer">
                            <option value="">Pilih Topik...</option>
                            <option value="IT Konsultan & Sistem Informasi">IT Konsultan & Sistem Informasi</option>
                            <option value="Jasa Perpajakan">Jasa Perpajakan</option>
                            <option value="Jasa Audit">Jasa Audit</option>
                            <option value="Jasa Pembukuan">Jasa Pembukuan</option>
                            <option value="Perencanaan Keuangan">Perencanaan Keuangan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div>
                        <label for="deskripsi" class="block text-sm font-semibold text-slate-700 mb-2">Pesan</label>
                        <textarea id="deskripsi" name="deskripsi" required class="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded-lg focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition h-28 resize-none" placeholder="Ceritakan kebutuhan Anda..."></textarea>
                    </div>
                    <button type="submit" class="w-full py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded-lg transition-all shadow-lg hover:shadow-xl transform active:scale-[0.99] flex items-center justify-center gap-2">
                         Kirim via WhatsApp
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<script>
// Contact Form Handler
document.getElementById('contact-form-page').addEventListener('submit', function(e) {
    e.preventDefault();
    
    const nama = document.getElementById('nama').value;
    const perusahaan = document.getElementById('perusahaan').value;
    const kontak = document.getElementById('kontak').value;
    const topik = document.getElementById('topik').value;
    const deskripsi = document.getElementById('deskripsi').value;
    
    let message = `Halo, saya ingin berkonsultasi.\n\n`;
    message += `*Nama:* ${nama}\n`;
    if (perusahaan) message += `*Perusahaan:* ${perusahaan}\n`;
    message += `*WhatsApp:* ${kontak}\n`;
    message += `*Layanan:* ${topik}\n\n`;
    message += `*Detail Kebutuhan:*\n${deskripsi}`;
    
    const waNumber = '<?php echo esc_js( get_theme_mod( 'whatsapp_number', '6285124945494' ) ); ?>';
    const waUrl = `https://wa.me/${waNumber}?text=${encodeURIComponent(message)}`;
    
    window.open(waUrl, '_blank');
});
</script>

<?php get_footer(); ?>