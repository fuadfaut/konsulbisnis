"use client";

export default function ITProjects() {
    return (
        <section className="py-20 bg-slate-50">
            <div className="container mx-auto px-6">
                <div className="text-center mb-16">
                    <h2 className="text-3xl font-bold text-slate-900 mb-4">Proyek IT Kami</h2>
                    <p className="text-slate-600 max-w-2xl mx-auto">Beberapa proyek IT yang telah kami kerjakan untuk klien dari
                        berbagai instansi pemerintah, BUMN, dan perusahaan swasta.</p>
                </div>

                <div className="grid md:grid-cols-2 lg:grid-cols-3 gap-6">
                    {/* Projects... */}
                    <div className="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
                        <div className="flex items-center gap-3 mb-4">
                            <div className="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                <span className="text-blue-700 font-bold text-sm">BI</span>
                            </div>
                            <div>
                                <h4 className="font-bold text-slate-900">Bank Indonesia Kaltim</h4>
                                <p className="text-xs text-slate-500">Instansi Pemerintah</p>
                            </div>
                        </div>
                        <p className="text-sm text-slate-600">Kontrak Pembuatan Website Lamin Etam</p>
                    </div>

                    <div className="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
                        <div className="flex items-center gap-3 mb-4">
                            <div className="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center">
                                <span className="text-red-700 font-bold text-sm">AI</span>
                            </div>
                            <div>
                                <h4 className="font-bold text-slate-900">PT Astra International</h4>
                                <p className="text-xs text-slate-500">Perusahaan Swasta</p>
                            </div>
                        </div>
                        <p className="text-sm text-slate-600">Perawatan Website dan Aplikasi LISA (Logistic Integrated System
                            Analysis)</p>
                    </div>

                    <div className="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
                        <div className="flex items-center gap-3 mb-4">
                            <div className="w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                <span className="text-green-700 font-bold text-sm">DLH</span>
                            </div>
                            <div>
                                <h4 className="font-bold text-slate-900">Dinas LH Kota Samarinda</h4>
                                <p className="text-xs text-slate-500">Instansi Pemerintah</p>
                            </div>
                        </div>
                        <p className="text-sm text-slate-600">Sistem Aplikasi SIPLah (Sistem Informasi Pemantauan Lingkungan
                            Hidup)</p>
                    </div>

                    <div className="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
                        <div className="flex items-center gap-3 mb-4">
                            <div className="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                <span className="text-purple-700 font-bold text-sm">KH</span>
                            </div>
                            <div>
                                <h4 className="font-bold text-slate-900">KemenKumHam Kaltim</h4>
                                <p className="text-xs text-slate-500">Instansi Pemerintah</p>
                            </div>
                        </div>
                        <p className="text-sm text-slate-600">Perawatan aplikasi dan website E-Lasikum.id</p>
                    </div>

                    <div className="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
                        <div className="flex items-center gap-3 mb-4">
                            <div className="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                <span className="text-yellow-700 font-bold text-sm">BK</span>
                            </div>
                            <div>
                                <h4 className="font-bold text-slate-900">Bank Kaltimtara</h4>
                                <p className="text-xs text-slate-500">BUMD</p>
                            </div>
                        </div>
                        <p className="text-sm text-slate-600">Pelatihan Mastering Microsoft Office</p>
                    </div>

                    <div className="bg-white p-6 rounded-xl border border-slate-100 hover:shadow-lg transition-all">
                        <div className="flex items-center gap-3 mb-4">
                            <div className="w-10 h-10 bg-cyan-100 rounded-lg flex items-center justify-center">
                                <span className="text-cyan-700 font-bold text-sm">SG</span>
                            </div>
                            <div>
                                <h4 className="font-bold text-slate-900">PT Suemeru Group</h4>
                                <p className="text-xs text-slate-500">Perusahaan Swasta</p>
                            </div>
                        </div>
                        <p className="text-sm text-slate-600">Aplikasi Absen Karyawan & Akuntansi Keuangan</p>
                    </div>
                </div>

                <div className="text-center mt-12">
                    <p className="text-slate-500">Dan masih banyak lagi proyek lainnya...</p>
                </div>
            </div>
        </section>
    );
}
