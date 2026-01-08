<footer class="bg-slate-900 text-white pt-16 pb-8">
    <div class="container mx-auto px-6">
        <div class="grid md:grid-cols-4 gap-12 mb-12">
            <div class="col-span-1 md:col-span-2">
                <div class="flex items-center gap-3 mb-6">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo PT. Kami Bantu Konsultan" class="w-10 h-10 rounded"/>
                    <div>
                        <span class="text-xl font-bold">KAMI BANTU</span>
                        <p class="text-xs text-slate-400">Synergy with Your Business</p>
                    </div>
                </div>
                <p class="text-slate-400 text-sm leading-relaxed max-w-sm mb-4">PT Kami Bantu Konsultan adalah perusahaan jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT di Samarinda, Kalimantan Timur.</p>
                <p class="text-slate-500 text-xs">Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B, Kel. Temindung Kec. Samarinda Kota, Kota Samarinda, Kalimantan Timur 75117</p>
            </div>
            <div>
                <h4 class="font-bold mb-6">Layanan</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li><a href="#services" class="hover:text-white transition-colors">Jasa Perpajakan</a></li>
                    <li><a href="#services" class="hover:text-white transition-colors">Jasa Audit</a></li>
                    <li><a class="hover:text-white transition-colors" href="<?php echo home_url('/sistemasi-bisnis'); ?>">IT Konsultan</a></li>
                    <li><a href="#services" class="hover:text-white transition-colors">Perencanaan Keuangan</a></li>
                    <li><a href="#services" class="hover:text-white transition-colors">Studi Kelayakan</a></li>
                </ul>
            </div>
            <div>
                <h4 class="font-bold mb-6">Kontak</h4>
                <ul class="space-y-3 text-sm text-slate-400">
                    <li>0813-4624-2556</li>
                    <li>0823-5242-5339</li>
                    <li>KonsultanKamiBantu@gmail.com</li>
                </ul>
            </div>
        </div>
        <div class="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
            <p>© 2024 PT. Kami Bantu Konsultan. Hak Cipta Dilindungi Undang-Undang.</p>
        </div>
    </div>
</footer>
</main>

<script>
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
    var menu = document.getElementById('mobile-menu');
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        menu.classList.add('flex');
    } else {
        menu.classList.add('hidden');
        menu.classList.remove('flex');
    }
});
</script>

<?php wp_footer(); ?>
</body>
</html>
