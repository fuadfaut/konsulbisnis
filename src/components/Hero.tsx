"use client";

import { useEffect } from 'react';
import { scrollToSection } from '../utils/scroll';
import Image from 'next/image';

export default function Hero() {

    // Parallax Effect
    useEffect(() => {
        const handleScroll = () => {
            const scrolled = window.pageYOffset;
            const hero = document.getElementById('hero');
            if (hero) {
                const heroImage = hero.querySelector('.hero-image-animate') as HTMLElement;
                if (heroImage && scrolled < window.innerHeight) {
                    heroImage.style.transform = `translateY(${scrolled * 0.1}px)`;
                }
            }
        };
        window.addEventListener('scroll', handleScroll);
        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    return (
        <section id="hero" className="relative bg-slate-50 overflow-hidden">
            <div className="container mx-auto px-6 py-20 lg:py-32 flex flex-col lg:flex-row items-center gap-12">

                <div className="lg:w-1/2 z-10">
                    <div
                        className="hero-animate inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-100 text-amber-800 text-xs font-bold mb-6">
                        <span className="relative flex h-2 w-2">
                            <span
                                className="animate-ping absolute inline-flex h-full w-full rounded-full bg-amber-500 opacity-75"></span>
                            <span className="relative inline-flex rounded-full h-2 w-2 bg-amber-600"></span>
                        </span>
                        KOLABORASI UNTUK BERTUMBUH
                    </div>
                    <h1 className="hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold text-slate-900 leading-[1.1] mb-6">
                        Solusi Bisnis <br />
                        <span
                            className="text-transparent bg-clip-text bg-gradient-to-r from-blue-600 via-blue-700 to-amber-500 animate-gradient">
                            Terintegrasi
                        </span>
                    </h1>
                    <p className="hero-animate-delay-2 text-lg text-slate-600 mb-8 max-w-lg leading-relaxed">
                        PT Kami Bantu Konsultan bergerak di bidang jasa akuntansi, perpajakan, manajemen bisnis, dan
                        konsultan IT.
                        Kami membantu pelaku usaha dalam menerapkan prinsip pengelolaan bisnis yang sesuai standar.
                    </p>
                    <div className="hero-animate-delay-3 flex flex-col sm:flex-row gap-4">
                        <button onClick={() => scrollToSection('contact')}
                            className="btn-ripple pulse-glow px-8 py-4 bg-blue-700 text-white font-semibold rounded hover:bg-amber-500 transition-all flex items-center justify-center gap-2 shadow-lg hover:shadow-xl">
                            Jadwalkan Konsultasi
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <path d="m9 18 6-6-6-6" />
                            </svg>
                        </button>
                        <button onClick={() => scrollToSection('services')}
                            className="px-8 py-4 bg-white text-slate-700 border border-slate-300 font-semibold rounded hover:bg-slate-50 transition-all">
                            Lihat Layanan
                        </button>
                    </div>
                </div>

                {/* Hero Image / Visual */}
                <div className="lg:w-1/2 relative hero-image-animate">
                    {/* Floating Badge: Kami Siap Bantu (Top Right) */}
                    <div
                        className="float-animation absolute -top-4 -right-4 bg-white px-5 py-3 rounded-full shadow-xl border border-slate-100 flex items-center gap-3 z-10">
                        <div
                            className="w-10 h-10 bg-gradient-to-br from-blue-600 to-amber-500 rounded-full flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                                stroke="white" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2" />
                                <circle cx="9" cy="7" r="4" />
                                <path d="M22 21v-2a4 4 0 0 0-3-3.87" />
                                <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                            </svg>
                        </div>
                        <p className="font-bold text-slate-900">Kami Siap Bantu</p>
                    </div>
                    <div
                        className="relative rounded-lg overflow-hidden transform hover:scale-[1.02] transition-transform duration-500">
                        <img src="/wew.png" alt="PT Kami Bantu Konsultan" className="w-full object-cover" />
                    </div>
                    {/* Floating Badge: Klien */}
                    <div className="float-animation absolute -bottom-6 -left-6 bg-white p-6 rounded shadow-xl border border-slate-100 max-w-xs hidden md:block"
                        style={{ animationDelay: '0.5s' }}>
                        <p className="text-sm text-slate-500 font-medium mb-1">Klien yang Dilayani</p>
                        <p className="text-3xl font-bold text-slate-900">50+</p>
                        <p className="text-xs text-slate-400 mt-1">Perusahaan & Instansi</p>
                    </div>
                </div>
            </div>
        </section>
    );
}
