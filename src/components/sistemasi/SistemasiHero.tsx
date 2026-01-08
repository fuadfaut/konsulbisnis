"use client";

export default function SistemasiHero() {
    return (
        <section className="relative bg-slate-900 text-white overflow-hidden py-20 lg:py-28">
            <div className="absolute top-0 right-0 w-1/2 h-full bg-amber-500/10 blur-3xl rounded-full translate-x-1/2"></div>
            <div className="absolute bottom-0 left-0 w-1/3 h-full bg-blue-600/10 blur-3xl rounded-full -translate-x-1/2"></div>

            <div className="container mx-auto px-6 relative z-10 text-center max-w-4xl mx-auto">
                <div
                    className="hero-animate inline-flex items-center gap-2 px-3 py-1 rounded-full bg-amber-500/20 text-amber-300 text-xs font-bold mb-6 border border-amber-500/30">
                    IT KONSULTAN & SISTEM INFORMASI
                </div>
                <h1 className="hero-animate-delay-1 text-4xl lg:text-6xl font-extrabold mb-6 leading-tight">
                    Transformasi Digital <br />
                    <span
                        className="text-transparent bg-clip-text bg-gradient-to-r from-blue-400 via-blue-500 to-amber-400 animate-gradient">Bisnis
                        Anda</span>
                </h1>
                <p className="hero-animate-delay-2 text-lg text-slate-300 mb-10 leading-relaxed max-w-2xl mx-auto">
                    Kami menyediakan jasa pembukuan dengan menyusun laporan keuangan klien. Bekerja sama dengan PT Zahir
                    Internasional
                    dan Accurate untuk software akuntansi dan ERP.
                </p>
                <div className="hero-animate-delay-3 flex flex-col sm:flex-row gap-4 justify-center">
                    <button onClick={() => document.getElementById('contact-form')?.scrollIntoView({ behavior: 'smooth' })}
                        className="btn-ripple pulse-glow px-8 py-4 bg-amber-500 hover:bg-amber-600 text-slate-900 font-bold rounded transition-all shadow-lg hover:shadow-amber-500/50">
                        Konsultasi Kebutuhan Sistem
                    </button>
                </div>
            </div>
        </section>
    );
}
