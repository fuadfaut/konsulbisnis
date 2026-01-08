import type { Metadata } from "next";
import { Inter } from "next/font/google";
import "./globals.css";

const inter = Inter({ subsets: ["latin"] });

export const metadata: Metadata = {
  title: "PT Kami Bantu Konsultan - Jasa Akuntansi, Perpajakan & IT Konsultan",
  description: "PT Kami Bantu Konsultan - Jasa akuntansi, perpajakan, manajemen bisnis, dan konsultan IT di Samarinda. Kolaborasi untuk Bertumbuh.",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="id" className="scroll-smooth">
      <body className={`${inter.className} font-sans text-slate-800 bg-white antialiased`}>
        {children}
      </body>
    </html>
  );
}
