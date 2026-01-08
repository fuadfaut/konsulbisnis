export default function TopBar() {
    return (
        <div className="bg-slate-900 text-slate-300 py-2 text-xs md:text-sm border-b border-slate-800">
            <div className="container mx-auto px-6 flex justify-between items-center">
                <div className="flex gap-4">
                    <span className="flex items-center gap-1">
                        {/* Phone Icon */}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                            <path
                                d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z">
                            </path>
                        </svg>
                        0813-4624-2556
                    </span>
                    <span className="flex items-center gap-1">
                        {/* Mail Icon */}
                        <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none"
                            stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round">
                            <rect width="20" height="16" x="2" y="4" rx="2" />
                            <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7" />
                        </svg>
                        KonsultanKamiBantu@gmail.com
                    </span>
                </div>
                <div className="hidden md:flex gap-3">
                    <a href="#" className="hover:text-white">Instagram</a>
                </div>
            </div>
        </div>
    );
}
