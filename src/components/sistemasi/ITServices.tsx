"use client";

export default function ITServices() {
    return (
        <section className="py-20 bg-white">
            <div className="container mx-auto px-6">
                <div className="text-center mb-16 max-w-2xl mx-auto">
                    <h2 className="text-3xl font-bold text-slate-900 mb-4">Layanan IT Kami</h2>
                    <p className="text-slate-600">Kami tidak hanya menjual software, kami merancang arsitektur bisnis yang
                        efisien. Bekerja sama dengan Zahir dan Accurate.</p>
                </div>

                <div className="grid md:grid-cols-3 gap-8">
                    {/* Service 1 */}
                    <div
                        className="p-8 border border-slate-100 rounded-2xl bg-white hover:shadow-xl transition-all group service-card">
                        <div
                            className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-amber-500 group-hover:text-slate-900 transition-colors service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <rect width="20" height="14" x="2" y="3" rx="2" />
                                <line x1="8" x2="16" y1="21" y2="21" />
                                <line x1="12" x2="12" y1="17" y2="21" />
                            </svg>
                        </div>
                        <h3 className="text-xl font-bold text-slate-900 mb-3">Software Akuntansi</h3>
                        <p className="text-slate-600 text-sm mb-4">
                            Implementasi software akuntansi Zahir dan Accurate untuk mengintegrasikan Pembelian, Penjualan,
                            Gudang, dan Akuntansi.
                        </p>
                        <ul className="text-xs text-slate-500 space-y-2">
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Setup Database & Chart of Accounts
                            </li>
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Migrasi Data Lama
                            </li>
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Training Penggunaan
                            </li>
                        </ul>
                    </div>

                    {/* Service 2 */}
                    <div
                        className="p-8 border border-slate-100 rounded-2xl bg-white hover:shadow-xl transition-all group service-card">
                        <div
                            className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-amber-500 group-hover:text-slate-900 transition-colors service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <path d="M14.5 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V7.5L14.5 2z" />
                                <polyline points="14 2 14 8 20 8" />
                                <path d="M12 13v6" />
                                <path d="M8 17l4-4 4 4" />
                            </svg>
                        </div>
                        <h3 className="text-xl font-bold text-slate-900 mb-3">Pembuatan Aplikasi Custom</h3>
                        <p className="text-slate-600 text-sm mb-4">
                            Pembuatan aplikasi sesuai kebutuhan bisnis Anda. Android, iOS, Web Application, dan sistem
                            terintegrasi.
                        </p>
                        <ul className="text-xs text-slate-500 space-y-2">
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Aplikasi Mobile (Android & iOS)
                            </li>
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Sistem Informasi Web
                            </li>
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Integrasi API
                            </li>
                        </ul>
                    </div>

                    {/* Service 3 */}
                    <div
                        className="p-8 border border-slate-100 rounded-2xl bg-white hover:shadow-xl transition-all group service-card">
                        <div
                            className="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-6 text-blue-600 group-hover:bg-amber-500 group-hover:text-slate-900 transition-colors service-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                <rect width="18" height="18" x="3" y="4" rx="2" ry="2" />
                                <line x1="16" x2="16" y1="2" y2="6" />
                                <line x1="8" x2="8" y1="2" y2="6" />
                                <line x1="3" x2="21" y1="10" y2="10" />
                            </svg>
                        </div>
                        <h3 className="text-xl font-bold text-slate-900 mb-3">Perawatan & Support</h3>
                        <p className="text-slate-600 text-sm mb-4">
                            Layanan perawatan website, aplikasi, dan sistem yang sudah berjalan. Termasuk update dan
                            troubleshooting.
                        </p>
                        <ul className="text-xs text-slate-500 space-y-2">
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Maintenance Website
                            </li>
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Update & Bugfix
                            </li>
                            <li className="flex items-center gap-2">
                                <div className="w-1 h-1 bg-blue-500 rounded-full"></div> Technical Support
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    );
}
