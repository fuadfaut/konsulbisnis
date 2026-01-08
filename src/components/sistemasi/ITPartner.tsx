"use client";

export default function ITPartner() {
    return (
        <section className="py-16 bg-gradient-to-r from-blue-50 to-amber-50">
            <div className="container mx-auto px-6">
                <div className="flex flex-col md:flex-row items-center justify-center gap-8">
                    <div className="text-center md:text-left">
                        <p className="text-sm text-amber-600 font-semibold mb-2">Dipimpin oleh</p>
                        <h3 className="text-2xl font-bold text-slate-900">Surya Fajar Saputra, S.Kom, M.Kom</h3>
                        <p className="text-slate-600">Partner IT - Spesialis Android & iOS</p>
                    </div>
                    <div className="hidden md:block w-px h-16 bg-slate-300"></div>
                    <div className="flex items-center gap-6">
                        <div className="text-center">
                            <p className="text-3xl font-bold text-amber-600">S-2</p>
                            <p className="text-xs text-slate-500">Ilmu Komputer</p>
                        </div>
                        <div className="text-center">
                            <p className="text-3xl font-bold text-amber-600">30+</p>
                            <p className="text-xs text-slate-500">Proyek IT</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
