"use client";

export default function Contact() {
    return (
        <section id="contact" className="py-24 bg-white">
            <div className="container mx-auto px-6">
                <div className="bg-slate-50 rounded-3xl shadow-xl overflow-hidden flex flex-col lg:flex-row">

                    {/* Contact Info */}
                    <div
                        className="lg:w-5/12 bg-gradient-to-br from-blue-900 to-blue-800 p-12 text-white flex flex-col justify-between relative overflow-hidden">
                        <div
                            className="absolute top-0 right-0 w-64 h-64 bg-white opacity-5 rounded-full -translate-y-1/2 translate-x-1/2">
                        </div>
                        <div className="relative z-10">
                            <h3 className="text-3xl font-bold mb-6">Hubungi Kami</h3>
                            <p className="text-blue-200 mb-10">Siap merapikan keuangan dan mensistemasi bisnis Anda? Konsultasi
                                awal gratis.</p>

                            <div className="space-y-6">
                                <div className="flex items-start gap-4">
                                    <svg className="mt-1 text-blue-400 w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z" />
                                        <circle cx="12" cy="10" r="3" />
                                    </svg>
                                    <div>
                                        <p className="font-bold text-lg">Kantor</p>
                                        <p className="text-blue-200 text-sm">Jl. Jend A.Yani (Eks.Cendrawasih) Ruko No 1B,
                                            Kel. Temindung Kec. Samarinda Kota,
                                            Kota Samarinda, Kalimantan Timur 75117</p>
                                    </div>
                                </div>
                                <div className="flex items-start gap-4">
                                    <svg className="mt-1 text-blue-400 w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <rect width="20" height="16" x="2" y="4" rx="2" />
                                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                                    </svg>
                                    <div>
                                        <p className="font-bold text-lg">Email</p>
                                        <p className="text-blue-200 text-sm">KonsultanKamiBantu@gmail.com</p>
                                    </div>
                                </div>
                                <div className="flex items-start gap-4">
                                    <svg className="mt-1 text-blue-400 w-5 h-5 shrink-0" xmlns="http://www.w3.org/2000/svg"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2"
                                        strokeLinecap="round" strokeLinejoin="round">
                                        <path
                                            d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                                    </svg>
                                    <div>
                                        <p className="font-bold text-lg">WhatsApp / Telp</p>
                                        <p className="text-blue-200 text-sm">0813-4624-2556 / 0823-5242-5339</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="mt-12 flex gap-4 relative z-10">
                            <a href="#" className="p-2 bg-white/10 rounded hover:bg-white/20 transition">
                                <svg className="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5" />
                                    <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z" />
                                    <line x1="17.5" x2="17.51" y1="6.5" y2="6.5" />
                                </svg>
                            </a>
                        </div>
                    </div>

                    {/* Form */}
                    <div className="lg:w-7/12 p-12">
                        <form className="space-y-6"
                            onSubmit={(e) => { e.preventDefault(); alert('Pesan Anda telah terkirim! Tim kami akan segera menghubungi Anda.'); }}>
                            <div className="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label className="block text-sm font-semibold text-slate-700 mb-2">Nama Lengkap</label>
                                    <input type="text"
                                        className="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition"
                                        placeholder="John Doe" />
                                </div>
                                <div>
                                    <label className="block text-sm font-semibold text-slate-700 mb-2">Nama Perusahaan</label>
                                    <input type="text"
                                        className="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition"
                                        placeholder="PT Sukses Mulia" />
                                </div>
                            </div>
                            <div>
                                <label className="block text-sm font-semibold text-slate-700 mb-2">Email / WhatsApp</label>
                                <input type="text"
                                    className="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition"
                                    placeholder="kontak@email.com" />
                            </div>
                            <div>
                                <label className="block text-sm font-semibold text-slate-700 mb-2">Topik Konsultasi</label>
                                <select
                                    className="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition cursor-pointer">
                                    <option>IT Konsultan & Sistem Informasi</option>
                                    <option>Jasa Perpajakan</option>
                                    <option>Jasa Audit</option>
                                    <option>Perencanaan Keuangan</option>
                                    <option>Studi Kelayakan Bisnis</option>
                                    <option>Digital Marketing</option>
                                </select>
                            </div>
                            <div>
                                <label className="block text-sm font-semibold text-slate-700 mb-2">Deskripsi Kebutuhan</label>
                                <textarea
                                    className="w-full px-4 py-3 bg-white border border-slate-200 rounded focus:border-blue-500 focus:ring-1 focus:ring-blue-500 outline-none transition h-32"
                                    placeholder="Ceritakan kebutuhan bisnis Anda..."></textarea>
                            </div>
                            <button
                                className="w-full py-4 bg-amber-500 text-slate-900 font-bold rounded hover:bg-amber-600 transition shadow-lg hover:shadow-xl transform active:scale-[0.99]">
                                Kirim Pesan
                            </button>
                        </form>
                    </div>

                </div>
            </div>
        </section>
    );
}
