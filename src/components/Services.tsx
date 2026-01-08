"use client";

import Link from 'next/link';

export default function Services() {
    return (
        <section id="services" className="py-24 bg-white">
            <div className="container mx-auto px-6">
                <div className="animate-on-scroll flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                    <div className="max-w-2xl">
                        <h2 className="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Pelayanan Kami</h2>
                        <p className="text-slate-600 text-lg">Kami menyediakan layanan lengkap untuk mendukung pertumbuhan
                            bisnis Anda,
                            dari perpajakan hingga transformasi digital.</p>
                    </div>
                </div>

                <div className="grid lg:grid-cols-3 gap-8">
                    {/* Highlighted Service: IT Konsultan */}
                    <div
                        className="lg:col-span-1 bg-gradient-to-br from-blue-900 to-slate-900 text-white p-10 rounded-2xl flex flex-col justify-between relative overflow-hidden group hover:shadow-2xl transition-all duration-300">
                        <div
                            className="absolute top-0 right-0 w-64 h-64 bg-amber-500 rounded-full blur-[80px] opacity-20 group-hover:opacity-30 transition-opacity">
                        </div>
                        <div>
                            <div
                                className="w-14 h-14 bg-white/10 rounded-xl flex items-center justify-center mb-8 backdrop-blur-sm">
                                {/* Monitor Icon */}
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"
                                    fill="none" stroke="#60a5fa" strokeWidth="2" strokeLinecap="round"
                                    strokeLinejoin="round">
                                    <rect width="20" height="14" x="2" y="3" rx="2" />
                                    <line x1="8" x2="16" y1="21" y2="21" />
                                    <line x1="12" x2="12" y1="17" y2="21" />
                                </svg>
                            </div>
                            <h3 className="text-2xl font-bold mb-4">IT Konsultan & <br />Sistem Informasi</h3>
                            <p className="text-slate-300 leading-relaxed mb-6">
                                Kami bekerja sama dengan PT Zahir Internasional dan Accurate untuk software
                                ERP dan akuntansi.
                                Transformasi digital untuk bisnis yang lebih efisien.
                            </p>
                            <ul className="space-y-3 mb-8">
                                <li className="flex items-center gap-3 text-sm text-slate-300">
                                    <svg className="text-blue-400 w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    Software Akuntansi Zahir & Accurate
                                </li>
                                <li className="flex items-center gap-3 text-sm text-slate-300">
                                    <svg className="text-blue-400 w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    Pembuatan Aplikasi Custom
                                </li>
                                <li className="flex items-center gap-3 text-sm text-slate-300">
                                    <svg className="text-blue-400 w-4 h-4 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <polyline points="20 6 9 17 4 12" />
                                    </svg>
                                    Perawatan Website & Aplikasi
                                </li>
                            </ul>
                        </div>
                        <Link href="/sistemasi-bisnis"
                            className="w-full py-3 bg-amber-500 hover:bg-amber-600 rounded text-sm font-bold transition-colors text-center inline-block text-slate-900">
                            Konsultasi IT & Sistem
                        </Link>
                    </div>

                    {/* Other Services Grid */}
                    <div className="lg:col-span-2 grid md:grid-cols-2 gap-6">

                        {/* Service 1: Perpajakan */}
                        <div
                            className="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                            <div className="flex items-start justify-between mb-6">
                                <div className="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                    {/* Calculator Icon */}
                                    <svg className="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <rect width="16" height="20" x="4" y="2" rx="2" />
                                        <line x1="8" x2="16" y1="6" y2="6" />
                                        <line x1="16" x2="16" y1="14" y2="18" />
                                        <path d="M16 10h.01" />
                                        <path d="M12 10h.01" />
                                        <path d="M8 10h.01" />
                                        <path d="M12 14h.01" />
                                        <path d="M8 14h.01" />
                                        <path d="M12 18h.01" />
                                        <path d="M8 18h.01" />
                                    </svg>
                                </div>
                            </div>
                            <h3 className="text-xl font-bold text-slate-900 mb-3">Jasa Perpajakan</h3>
                            <p className="text-slate-600 text-sm mb-6 leading-relaxed">
                                Membantu wajib pajak memenuhi kewajiban perpajakannya. Menyiapkan dan melaporkan pajak
                                bulanan dan tahunan sesuai ketentuan perpajakan Indonesia.
                            </p>
                            <div className="space-y-2 pt-6 border-t border-slate-200">
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> SPT Masa & Tahunan
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Tax Planning
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Korespondensi dengan Kantor
                                    Pajak
                                </div>
                            </div>
                        </div>

                        {/* Service 2: Audit */}
                        <div
                            className="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                            <div className="flex items-start justify-between mb-6">
                                <div className="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                    {/* FileSpreadsheet Icon */}
                                    <svg className="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <path d="M15 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7Z" />
                                        <path d="M14 2v4a2 2 0 0 0 2 2h4" />
                                        <path d="M8 13h2" />
                                        <path d="M14 13h2" />
                                        <path d="M8 17h2" />
                                        <path d="M14 17h2" />
                                    </svg>
                                </div>
                            </div>
                            <h3 className="text-xl font-bold text-slate-900 mb-3">Jasa Audit</h3>
                            <p className="text-slate-600 text-sm mb-6 leading-relaxed">
                                Bekerja sama dengan KAP Heliantono & Rekan di DKI Jakarta. Terdaftar sebagai KAP yang berhak
                                melakukan audit di perusahaan BUMN.
                            </p>
                            <div className="space-y-2 pt-6 border-t border-slate-200">
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Audit Laporan Keuangan
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Mitra Bank BUMN & Swasta
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Audit Internal Operasional
                                </div>
                            </div>
                        </div>

                        {/* Service 3: Perencanaan Keuangan */}
                        <div
                            className="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                            <div className="flex items-start justify-between mb-6">
                                <div className="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                    {/* PieChart Icon */}
                                    <svg className="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <path d="M21.21 15.89A10 10 0 1 1 8 2.83" />
                                        <path d="M22 12A10 10 0 0 0 12 2v10Z" />
                                    </svg>
                                </div>
                            </div>
                            <h3 className="text-xl font-bold text-slate-900 mb-3">Perencanaan Keuangan</h3>
                            <p className="text-slate-600 text-sm mb-6 leading-relaxed">
                                Konsultasi dan perencanaan keuangan untuk pribadi maupun keluarga. Membantu klien mencapai
                                tujuan keuangan dengan strategi yang tepat.
                            </p>
                            <div className="space-y-2 pt-6 border-t border-slate-200">
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Alokasi Aset & Cashflow
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Dana Darurat & Pendidikan
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Dana Pensiun & Usaha
                                </div>
                            </div>
                        </div>

                        {/* Service 4: Studi Kelayakan */}
                        <div
                            className="p-8 border border-slate-100 rounded-2xl bg-slate-50 hover:bg-white hover:shadow-xl hover:border-blue-100 transition-all duration-300 group">
                            <div className="flex items-start justify-between mb-6">
                                <div className="p-3 bg-white rounded-lg shadow-sm group-hover:bg-blue-50 transition-colors">
                                    {/* BarChart Icon */}
                                    <svg className="text-blue-700 w-6 h-6" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <line x1="12" x2="12" y1="20" y2="10" />
                                        <line x1="18" x2="18" y1="20" y2="4" />
                                        <line x1="6" x2="6" y1="20" y2="16" />
                                    </svg>
                                </div>
                            </div>
                            <h3 className="text-xl font-bold text-slate-900 mb-3">Studi Kelayakan Bisnis</h3>
                            <p className="text-slate-600 text-sm mb-6 leading-relaxed">
                                Perencanaan bisnis sebagai alat penting bagi pengusaha untuk pengambilan keputusan kebijakan
                                perusahaan dan mencari pendanaan.
                            </p>
                            <div className="space-y-2 pt-6 border-t border-slate-200">
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Analisis Pasar & Kompetitor
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Proyeksi Finansial (ROI)
                                </div>
                                <div className="flex items-center gap-2 text-xs font-medium text-slate-500">
                                    <div className="w-1.5 h-1.5 bg-blue-500 rounded-full"></div> Proposal Pendanaan
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    );
}
