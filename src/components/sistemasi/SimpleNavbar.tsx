"use client";

import Link from 'next/link';
import Image from 'next/image';

export default function SimpleNavbar() {
    return (
        <nav className="sticky top-0 w-full z-50 bg-white/95 backdrop-blur border-b border-slate-200 py-4">
            <div className="container mx-auto px-6 flex justify-between items-center">
                <Link href="/" className="flex items-center gap-3 hover:opacity-80 transition-opacity">
                    <img src="/logo.png" alt="Logo PT. Kami Bantu Konsultan" className="w-9 h-9 rounded" />
                    <div className="leading-tight">
                        <h1 className="text-lg font-bold text-slate-900 tracking-tight">KONSUL BISNIS</h1>
                        <p className="text-[10px] font-medium text-slate-500 tracking-widest uppercase">PT Kami Bantu Konsultan
                        </p>
                    </div>
                </Link>
                <Link href="/"
                    className="flex items-center gap-2 text-sm font-semibold text-slate-600 hover:text-blue-700 transition-colors">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                        <path d="m12 19-7-7 7-7" />
                        <path d="M19 12H5" />
                    </svg>
                    Kembali ke Beranda
                </Link>
            </div>
        </nav>
    );
}
