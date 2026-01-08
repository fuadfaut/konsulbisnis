export default function ClientLogos() {
    return (
        <section className="py-8 bg-slate-50 border-y border-slate-100">
            <div className="container mx-auto px-6 mb-4">
                <p className="text-center text-sm text-slate-500 font-medium">Dipercaya oleh berbagai perusahaan dan instansi
                </p>
            </div>
            <div className="marquee-container">
                <div className="marquee-content">
                    {/* First set of logos */}
                    <div className="flex items-center gap-16 px-8">
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Bank_Indonesia_logo.svg/200px-Bank_Indonesia_logo.svg.png"
                                alt="Bank Indonesia" className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Astra_International.svg/200px-Astra_International.svg.png"
                                alt="Astra International"
                                className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/0/02/Bank_Kaltimtara_Logo.svg/200px-Bank_Kaltimtara_Logo.svg.png"
                                alt="Bank Kaltimtara"
                                className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Telkom_Indonesia_2013.svg/200px-Telkom_Indonesia_2013.svg.png"
                                alt="Telkom Indonesia"
                                className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">KemenKumHam</span>
                            </div>
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">Diskominfo</span>
                            </div>
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">Pemkot Samarinda</span>
                            </div>
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">KPC Coal</span>
                            </div>
                        </div>
                    </div>
                    {/* Duplicate set for seamless loop */}
                    <div className="flex items-center gap-16 px-8">
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/8d/Bank_Indonesia_logo.svg/200px-Bank_Indonesia_logo.svg.png"
                                alt="Bank Indonesia" className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Astra_International.svg/200px-Astra_International.svg.png"
                                alt="Astra International"
                                className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/id/thumb/0/02/Bank_Kaltimtara_Logo.svg/200px-Bank_Kaltimtara_Logo.svg.png"
                                alt="Bank Kaltimtara"
                                className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b1/Telkom_Indonesia_2013.svg/200px-Telkom_Indonesia_2013.svg.png"
                                alt="Telkom Indonesia"
                                className="h-10 object-contain grayscale hover:grayscale-0 transition-all" />
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">KemenKumHam</span>
                            </div>
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">Diskominfo</span>
                            </div>
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">Pemkot Samarinda</span>
                            </div>
                        </div>
                        <div className="flex flex-col items-center min-w-[150px]">
                            <div className="h-10 flex items-center">
                                <span className="text-lg font-bold text-slate-700">KPC Coal</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    );
}
