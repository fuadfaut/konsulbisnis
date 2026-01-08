export const scrollToSection = (id: string) => {
    const element = document.getElementById(id);
    if (element) {
        const offset = 80; // height of sticky navbar
        const bodyRect = document.body.getBoundingClientRect().top;
        const elementRect = element.getBoundingClientRect().top;
        const elementPosition = elementRect - bodyRect;
        const offsetPosition = elementPosition - offset;

        window.scrollTo({
            top: offsetPosition,
            behavior: 'smooth'
        });
    } else {
        // If element not found on current page (e.g. we are on a subpage), redirect to home with hash
        window.location.href = `/#${id}`;
    }
};
