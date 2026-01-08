"use client";

export default function SistemasiForm() {
    return (
        <section id="contact-form" className="py-20 bg-slate-900 text-white">
            <div className="container mx-auto px-6 max-w-4xl">
                <div className="bg-white rounded-2xl p-8 md:p-12 shadow-2xl text-slate-800">
                    <h2 className="text-3xl font-bold text-center mb-8">Mulai Transformasi Digital Anda</h2>
                    <form
                        onSubmit={(e) => { e.preventDefault(); alert('Terima kasih. Konsultan IT kami akan segera menghubungi Anda untuk menjadwalkan demo sistem.'); }}
                        className="grid md:grid-cols-2 gap-6">
                        <div className="md:col-span-1">
                            <label className="block text-sm font-semibold mb-2">Nama Anda</label>
                            <input type="text"
                                className="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none"
                                placeholder="John Doe" />
                        </div>
                        <div className="md:col-span-1">
                            <label className="block text-sm font-semibold mb-2">Jenis Bisnis</label>
                            <select
                                className="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none">
                                <option>Retail / Toko</option>
                                <option>Manufaktur / Pabrik</option>
                                <option>Jasa / Service</option>
                                <option>F&B / Restoran</option>
                                <option>Kontraktor</option>
                                <option>Instansi Pemerintah</option>
                                <option>Lainnya</option>
                            </select>
                        </div>
                        <div className="md:col-span-2">
                            <label className="block text-sm font-semibold mb-2">WhatsApp / Email</label>
                            <input type="text"
                                className="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none"
                                placeholder="0812..." />
                        </div>
                        <div className="md:col-span-2">
                            <label className="block text-sm font-semibold mb-2">Kebutuhan Sistem</label>
                            <textarea
                                className="w-full px-4 py-3 bg-slate-50 border border-slate-200 rounded focus:border-blue-500 outline-none h-24"
                                placeholder="Contoh: Butuh aplikasi kasir terintegrasi dengan akuntansi, website company profile, dll..."></textarea>
                        </div>
                        <div className="md:col-span-2">
                            <button
                                className="w-full py-4 bg-amber-500 text-slate-900 font-bold rounded hover:bg-amber-600 transition shadow-lg btn-ripple pulse-glow">Jadwalkan
                                Konsultasi Gratis</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
    );
}
