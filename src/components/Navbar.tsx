"use client";

import { useState, useEffect } from 'react';
import Link from 'next/link';
import { scrollToSection } from '../utils/scroll';
import Image from 'next/image';

export default function Navbar() {
    const [isMobileMenuOpen, setIsMobileMenuOpen] = useState(false);
    const [isSticky, setIsSticky] = useState(false);

    useEffect(() => {
        const handleScroll = () => {
            setIsSticky(window.scrollY > 20);
        };
        window.addEventListener('scroll', handleScroll);
        return () => window.removeEventListener('scroll', handleScroll);
    }, []);

    const handleScrollTo = (id: string) => {
        setIsMobileMenuOpen(false);
        scrollToSection(id);
    };

    return (
        <nav
            id="navbar"
            className={`sticky top-0 w-full z-50 transition-all duration-300 border-b ${isSticky ? 'bg-white/95 backdrop-blur shadow-sm border-slate-200 py-3' : 'border-transparent py-5 bg-white'}`}
        >
            <div className="container mx-auto px-6 flex justify-between items-center">
                {/* Logo */}
                <div className="flex items-center gap-3 cursor-pointer" onClick={() => handleScrollTo('hero')}>
                    <img src="/logo.png" alt="Logo PT. Kami Bantu Konsultan" className="w-10 h-10 rounded" />
                    <div className="leading-tight">
                        <h1 className="text-xl font-bold text-slate-900 tracking-tight">KONSUL BISNIS</h1>
                        <p className="text-[10px] font-medium text-slate-500 tracking-widest uppercase">PT Kami Bantu Konsultan
                        </p>
                    </div>
                </div>

                {/* Desktop Menu */}
                <div className="hidden md:flex items-center gap-8 text-sm font-semibold text-slate-600">
                    <button onClick={() => handleScrollTo('hero')} className="hover:text-blue-700 transition-colors">Beranda</button>
                    <button onClick={() => handleScrollTo('services')}
                        className="hover:text-blue-700 transition-colors">Layanan</button>
                    <button onClick={() => handleScrollTo('about')}
                        className="hover:text-blue-700 transition-colors">Tentang</button>
                    <button onClick={() => handleScrollTo('team')} className="hover:text-blue-700 transition-colors">Tim</button>
                    <button onClick={() => handleScrollTo('contact')}
                        className="px-5 py-2.5 bg-blue-700 hover:bg-blue-800 text-white rounded font-medium transition-all shadow-md hover:shadow-lg">
                        Hubungi Kami
                    </button>
                </div>

                {/* Mobile Toggle */}
                <button
                    id="mobile-menu-btn"
                    className="md:hidden text-slate-900"
                    onClick={() => setIsMobileMenuOpen(!isMobileMenuOpen)}
                >
                    {!isMobileMenuOpen ? (
                        <svg id="menu-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                            fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                            <line x1="4" x2="20" y1="12" y2="12" />
                            <line x1="4" x2="20" y1="6" y2="6" />
                            <line x1="4" x2="20" y1="18" y2="18" />
                        </svg>
                    ) : (
                        <svg id="close-icon" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round"
                            strokeLinejoin="round">
                            <path d="M18 6 6 18" />
                            <path d="m6 6 12 12" />
                        </svg>
                    )}
                </button>
            </div>

            {/* Mobile Menu Dropdown */}
            <div id="mobile-menu"
                className={`${isMobileMenuOpen ? 'flex' : 'hidden'} absolute top-full left-0 w-full bg-white border-t border-slate-100 shadow-xl p-6 flex-col gap-4 md:hidden`}>
                <button onClick={() => handleScrollTo('hero')}
                    className="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Beranda</button>
                <button onClick={() => handleScrollTo('services')}
                    className="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Layanan</button>
                <button onClick={() => handleScrollTo('about')}
                    className="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Tentang</button>
                <button onClick={() => handleScrollTo('team')}
                    className="text-left font-medium text-slate-700 py-2 border-b border-slate-50">Tim</button>
                <button onClick={() => handleScrollTo('contact')} className="text-left font-bold text-blue-700 py-2">Hubungi
                    Kami</button>
            </div>
        </nav>
    );
}
