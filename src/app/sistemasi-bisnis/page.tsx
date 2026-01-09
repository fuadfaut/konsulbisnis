"use client";

import { useEffect } from 'react';
import TopBar from '@/components/TopBar';
import SimpleNavbar from '@/components/sistemasi/SimpleNavbar';
import SistemasiHero from '@/components/sistemasi/SistemasiHero';
import ITPartner from '@/components/sistemasi/ITPartner';
import ProblemSolution from '@/components/sistemasi/ProblemSolution';
import ITServices from '@/components/sistemasi/ITServices';
import ITProjects from '@/components/sistemasi/ITProjects';
import SistemasiForm from '@/components/sistemasi/SistemasiForm';
import SimpleFooter from '@/components/sistemasi/SimpleFooter';

export default function SistemasiBisnis() {
    useEffect(() => {
        // Scroll animation observer
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('animated');
                    // Stop observing once animated if you want it to happen only once
                    // observer.unobserve(entry.target);
                }
            });
        }, { threshold: 0.1 });

        const animatedElements = document.querySelectorAll('.animate-fade-in-left, .animate-fade-in-right, .problem-item, .service-card, .hero-animate, .hero-animate-delay-1, .hero-animate-delay-2, .hero-animate-delay-3');
        animatedElements.forEach(el => observer.observe(el));

        // Magnetic Button Effect
        const buttons = document.querySelectorAll<HTMLElement>('.btn-ripple');
        buttons.forEach(button => {
            button.addEventListener('mousemove', (e: MouseEvent) => {
                const rect = button.getBoundingClientRect();
                const x = e.clientX - rect.left - rect.width / 2;
                const y = e.clientY - rect.top - rect.height / 2;
                button.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
            });

            button.addEventListener('mouseleave', () => {
                button.style.transform = 'translate(0, 0)';
            });
        });

        return () => observer.disconnect();
    }, []);

    return (
        <div className="font-sans text-slate-800 antialiased overflow-x-hidden">
            <TopBar />
            <SimpleNavbar />
            <SistemasiHero />
            {/* <ITPartner /> */}
            <ProblemSolution />
            <ITServices />
            <ITProjects />
            <SistemasiForm />
            <SimpleFooter />
        </div>
    );
}
