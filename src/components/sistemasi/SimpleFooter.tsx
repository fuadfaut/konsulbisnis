"use client";

import Link from 'next/link';

export default function SimpleFooter() {
    return (
        <footer className="bg-slate-950 text-slate-500 py-8 text-center text-sm">
            <p>&copy; 2024 PT. Kami Bantu Konsultan - Divisi IT Konsultan</p>
            <p className="text-xs mt-2">Jl. Jend A.Yani Ruko No 1B, Samarinda, Kaltim | 0813-4624-2556</p>
            <Link href="/" className="text-amber-400 hover:underline mt-2 inline-block">Kembali ke Website Utama</Link>
        </footer>
    );
}
