export default function Team() {
    return (
        <section id="team" className="py-24 bg-slate-50">
            <div className="container mx-auto px-6">
                <div className="text-center mb-16">
                    <h2 className="text-3xl lg:text-4xl font-bold text-slate-900 mb-4">Tim Profesional Kami</h2>
                    <p className="text-slate-600 text-lg max-w-2xl mx-auto">Didukung oleh para profesional bersertifikasi dengan
                        pengalaman di bidangnya masing-masing.</p>
                </div>

                <div className="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                    {/* Team Member 1 */}
                    <div
                        className="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all team-card text-center">
                        <div
                            className="w-20 h-20 bg-gradient-to-br from-blue-100 to-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span className="text-2xl font-bold text-blue-700">WS</span>
                        </div>
                        <h3 className="font-bold text-slate-900 text-lg">Windu Surya Dewantara</h3>
                        <p className="text-blue-600 text-sm font-medium mb-3">Partner</p>
                        <ul className="text-xs text-slate-500 space-y-1 text-left">
                            <li>• D-4 Akuntansi Manajerial Polnes</li>
                            <li>• Magister Manajemen Unmul</li>
                            <li>• Registered Financial Associated</li>
                            <li>• Brevet A-B IKPI</li>
                        </ul>
                    </div>

                    {/* Team Member 2 */}
                    <div
                        className="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all team-card text-center">
                        <div
                            className="w-20 h-20 bg-gradient-to-br from-blue-100 to-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span className="text-2xl font-bold text-blue-700">TT</span>
                        </div>
                        <h3 className="font-bold text-slate-900 text-lg">Tsun Tien Wen Lie</h3>
                        <p className="text-blue-600 text-sm font-medium mb-3">Partner</p>
                        <ul className="text-xs text-slate-500 space-y-1 text-left">
                            <li>• D-3 & S-1 Akuntansi Unpad</li>
                            <li>• S-1 Hukum Perdata Unpad</li>
                            <li>• S-2 MM Internasional Prasmul</li>
                        </ul>
                    </div>

                    {/* Team Member 3 */}
                    <div
                        className="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all team-card text-center">
                        <div
                            className="w-20 h-20 bg-gradient-to-br from-blue-100 to-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span className="text-2xl font-bold text-blue-700">SF</span>
                        </div>
                        <h3 className="font-bold text-slate-900 text-lg">Surya Fajar Saputra, S.Kom, M.Kom</h3>
                        <p className="text-blue-600 text-sm font-medium mb-3">Partner IT</p>
                        <ul className="text-xs text-slate-500 space-y-1 text-left">
                            <li>• S-1 Ilmu Komputer Unmul</li>
                            <li>• S-2 Ilmu Komputer Nusa Mandiri</li>
                            <li>• Spesialis Android & iOS</li>
                            <li>• Working Assessor Training</li>
                        </ul>
                    </div>

                    {/* Team Member 4 */}
                    <div
                        className="bg-white p-6 rounded-2xl shadow-sm border border-slate-100 hover:shadow-xl transition-all team-card text-center">
                        <div
                            className="w-20 h-20 bg-gradient-to-br from-blue-100 to-amber-100 rounded-full flex items-center justify-center mx-auto mb-4">
                            <span className="text-2xl font-bold text-blue-700">PS</span>
                        </div>
                        <h3 className="font-bold text-slate-900 text-lg">Privo Sudarsono, S.M</h3>
                        <p className="text-blue-600 text-sm font-medium mb-3">Project Manager</p>
                        <ul className="text-xs text-slate-500 space-y-1 text-left">
                            <li>• S-1 Manajemen Unmul</li>
                            <li>• Project Management</li>
                        </ul>
                    </div>
                </div>
            </div>
        </section>
    );
}
