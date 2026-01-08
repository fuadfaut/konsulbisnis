"use client";

import { useEffect } from 'react';

export default function About() {

    // Counter Animation
    useEffect(() => {
        const statsSection = document.getElementById('about');
        if (statsSection) {
            const statsObserver = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        const statNumbers = statsSection.querySelectorAll('h4.text-3xl');
                        statNumbers.forEach(stat => {
                            const text = stat.textContent || '';
                            const number = parseInt(text.replace(/\D/g, ''));
                            const suffix = text.replace(/[0-9]/g, '');

                            if (!isNaN(number) && number > 0) {
                                let start = 0;
                                const duration = 1500;
                                const increment = number / (duration / 16);

                                const timer = setInterval(() => {
                                    start += increment;
                                    if (start >= number) {
                                        clearInterval(timer);
                                        start = number;
                                    }
                                    stat.textContent = Math.floor(start) + suffix;
                                }, 16);
                            }
                        });
                        statsObserver.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.3 });
            statsObserver.observe(statsSection);
            return () => statsObserver.disconnect();
        }
    }, []);

    return (
        <section id="about" className="py-24 bg-slate-900 text-white relative">
            <div className="container mx-auto px-6 relative z-10">
                <div className="flex flex-col lg:flex-row gap-16 items-center">
                    <div className="lg:w-1/2">
                        <h2 className="text-3xl lg:text-4xl font-bold mb-6">Tentang Kami</h2>
                        <p className="text-slate-300 text-lg mb-6 leading-relaxed">
                            PT Kami Bantu Konsultan adalah perseroan perorangan yang bergerak di bidang jasa akuntansi,
                            perpajakan, manajemen bisnis, dan konsultan di bidang Information Technology khususnya
                            penyedia aplikasi keuangan dan bisnis.
                        </p>
                        <p className="text-slate-400 mb-8 leading-relaxed">
                            Didirikan atas dasar keprihatinan terhadap rendahnya literasi keuangan masyarakat, serta
                            ketidakpahaman para pelaku ekonomi utamanya UMKM dalam tata kelola keuangan, perpajakan,
                            dan manajemen. Kami memiliki visi menjadi perusahaan penyedia jasa yang edukatif dan solutif
                            bagi klien dengan motto <strong className="text-white">"Kolaborasi untuk Bertumbuh"</strong>.
                        </p>

                        <div className="grid grid-cols-2 gap-6">
                            <div
                                className="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors">
                                <h4 className="text-3xl font-bold text-amber-400 mb-1">50+</h4>
                                <p className="text-sm text-slate-400">Klien Aktif</p>
                            </div>
                            <div
                                className="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors">
                                <h4 className="text-3xl font-bold text-amber-400 mb-1">30+</h4>
                                <p className="text-sm text-slate-400">Proyek IT</p>
                            </div>
                            <div
                                className="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors">
                                <h4 className="text-3xl font-bold text-amber-400 mb-1">5+</h4>
                                <p className="text-sm text-slate-400">Tahun Pengalaman</p>
                            </div>
                            <div
                                className="p-6 bg-slate-800 rounded-xl border border-slate-700 hover:border-amber-500 transition-colors">
                                <h4 className="text-3xl font-bold text-amber-400 mb-1">5</h4>
                                <p className="text-sm text-slate-400">Tim Profesional</p>
                            </div>
                        </div>
                    </div>

                    <div id="process" className="lg:w-1/2">
                        {/* Clients Preview */}
                        <h3 className="text-2xl font-bold mb-6">Klien & Mitra Kami</h3>
                        <p className="text-slate-400 mb-6">Kami telah membantu klien dari berbagai perusahaan, badan organisasi,
                            lembaga pemerintah dan perorangan.</p>
                        <div className="grid grid-cols-2 gap-4">
                            <div className="p-4 bg-slate-800 rounded-lg border border-slate-700">
                                <p className="font-semibold text-sm">Bank Indonesia Kaltim</p>
                                <p className="text-xs text-slate-500">Pembuatan Website</p>
                            </div>
                            <div className="p-4 bg-slate-800 rounded-lg border border-slate-700">
                                <p className="font-semibold text-sm">PT Astra International</p>
                                <p className="text-xs text-slate-500">Aplikasi LISA</p>
                            </div>
                            <div className="p-4 bg-slate-800 rounded-lg border border-slate-700">
                                <p className="font-semibold text-sm">Pemerintah Kota Samarinda</p>
                                <p className="text-xs text-slate-500">Kontrak Website</p>
                            </div>
                            <div className="p-4 bg-slate-800 rounded-lg border border-slate-700">
                                <p className="font-semibold text-sm">KemenKumHam Kaltim</p>
                                <p className="text-xs text-slate-500">E-Lasikum.id</p>
                            </div>
                            <div className="p-4 bg-slate-800 rounded-lg border border-slate-700">
                                <p className="font-semibold text-sm">Diskominfo Prov. Kaltim</p>
                                <p className="text-xs text-slate-500">Aplikasi COVID</p>
                            </div>
                            <div className="p-4 bg-slate-800 rounded-lg border border-slate-700">
                                <p className="font-semibold text-sm">Bank Kaltimtara</p>
                                <p className="text-xs text-slate-500">Pelatihan MS Office</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
