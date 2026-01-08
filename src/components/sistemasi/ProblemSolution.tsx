"use client";

export default function ProblemSolution() {
    return (
        <section className="py-20 bg-slate-50">
            <div className="container mx-auto px-6">
                <div className="grid md:grid-cols-2 gap-12 items-center">
                    <div className="animate-fade-in-left relative">
                        <img src="https://images.unsplash.com/photo-1551288049-bebda4e38f71?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80"
                            alt="Dashboard Analytics"
                            className="rounded-xl shadow-2xl border border-slate-200 hover:scale-[1.02] transition-transform duration-500" />
                        <div
                            className="float-animation absolute -bottom-6 -right-6 bg-white p-6 rounded-xl shadow-xl border border-slate-100 max-w-xs">
                            <div className="flex items-center gap-3 mb-2">
                                <div className="w-3 h-3 bg-red-500 rounded-full animate-pulse"></div>
                                <p className="text-xs text-slate-500">Sebelum Sistem</p>
                            </div>
                            <p className="font-bold text-slate-800 mb-4">Stok Selisih, Laporan Telat, Owner Pusing.</p>
                            <div className="flex items-center gap-3 mb-2">
                                <div className="w-3 h-3 bg-green-500 rounded-full animate-pulse"></div>
                                <p className="text-xs text-slate-500">Sesudah Sistem</p>
                            </div>
                            <p className="font-bold text-slate-800">Real-time Data, Stok Akurat, Bisnis Autopilot.</p>
                        </div>
                    </div>
                    <div className="animate-fade-in-right">
                        <h2 className="text-3xl font-bold text-slate-900 mb-6">Tanda Bisnis Anda Butuh Sistem</h2>
                        <ul className="space-y-4">
                            <li
                                className="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                                <svg className="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                </svg>
                                <div>
                                    <h4 className="font-bold text-slate-800">Stok Gudang Tidak Sesuai</h4>
                                    <p className="text-sm text-slate-600">Sering terjadi selisih antara catatan admin dengan
                                        fisik barang di gudang (Stock Opname mimpi buruk).</p>
                                </div>
                            </li>
                            <li
                                className="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                                <svg className="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <div>
                                    <h4 className="font-bold text-slate-800">Laporan Keuangan Telat</h4>
                                    <p className="text-sm text-slate-600">Owner harus menunggu akhir bulan (atau bulan depan)
                                        hanya untuk tahu laba rugi bisnis.</p>
                                </div>
                            </li>
                            <li
                                className="problem-item flex items-start gap-4 p-4 bg-white rounded-lg shadow-sm border border-slate-100">
                                <svg className="w-6 h-6 text-red-500 shrink-0 mt-1" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2"
                                        d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0z" />
                                </svg>
                                <div>
                                    <h4 className="font-bold text-slate-800">Ketergantungan Pada Orang</h4>
                                    <p className="text-sm text-slate-600">Jika staff kunci sakit atau resign, operasional
                                        berantakan karena tidak ada SOP yang tersistem.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    );
}
