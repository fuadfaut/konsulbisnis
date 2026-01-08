import Link from 'next/link';
import { scrollToSection } from '../utils/scroll';
import Image from 'next/image';

export default function Footer() {
    return (
        <footer className="bg-slate-900 text-white pt-16 pb-8">
            <div className="container mx-auto px-6">
                <div className="grid md:grid-cols-4 gap-12 mb-12">
                    <div className="col-span-1 md:col-span-2">
                        <div className="flex items-center gap-3 mb-6">
                            <img src="/logo.png" alt="Logo PT. Kami Bantu Konsultan" className="w-10 h-10 rounded" />
                            <div>
                                <span className="text-xl font-bold">KAMI BANTU</span>
                                <p className="text-xs text-slate-400">Synergy with Your Business</p>
                            </div>
                        </div>
                        <p className="text-slate-400 text-sm leading-relaxed max-w-sm mb-4">
                            PT Kami Bantu Konsultan adalah perusahaan jasa akuntansi, perpajakan, manajemen bisnis,
                            dan konsultan IT di Samarinda, Kalimantan Timur.
                        </p>
                        <p className="text-slate-500 text-xs">
                            Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B,
                            Kel. Temindung Kec. Samarinda Kota,
                            Kota Samarinda, Kalimantan Timur 75117
                        </p>
                    </div>
                    <div>
                        <h4 className="font-bold mb-6">Layanan</h4>
                        <ul className="space-y-3 text-sm text-slate-400">
                            <li><a href="#services" className="hover:text-white transition-colors">Jasa Perpajakan</a></li>
                            <li><a href="#services" className="hover:text-white transition-colors">Jasa Audit</a></li>
                            <li><Link href="/sistemasi-bisnis" className="hover:text-white transition-colors">IT Konsultan</Link>
                            </li>
                            <li><a href="#services" className="hover:text-white transition-colors">Perencanaan Keuangan</a></li>
                            <li><a href="#services" className="hover:text-white transition-colors">Studi Kelayakan</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 className="font-bold mb-6">Kontak</h4>
                        <ul className="space-y-3 text-sm text-slate-400">
                            <li>0813-4624-2556</li>
                            <li>0823-5242-5339</li>
                            <li>KonsultanKamiBantu@gmail.com</li>
                        </ul>
                    </div>
                </div>
                <div
                    className="border-t border-slate-800 pt-8 flex flex-col md:flex-row justify-between items-center text-xs text-slate-500">
                    <p>&copy; 2024 PT. Kami Bantu Konsultan. Hak Cipta Dilindungi Undang-Undang.</p>
                </div>
            </div>
        </footer>
    );
}
