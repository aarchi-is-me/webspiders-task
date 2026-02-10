document.addEventListener('DOMContentLoaded', () => {
    const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    if (!prefersReducedMotion) {
        const tl = gsap.timeline();
        tl.from(".title", { y: -50, opacity: 0, duration: 1 })
            .from(".hero-section h2", { y: 30, opacity: 0, duration: 0.8 }, "-=0.5")
            .from(".hero-section p", { y: 20, opacity: 0, duration: 0.8 }, "-=0.6")
            .from(".buttons button", { scale: 0.8, opacity: 0, stagger: 0.2, duration: 0.5 }, "-=0.4");

        gsap.registerPlugin(ScrollTrigger);

        gsap.from(".card", {
            scrollTrigger: {
                trigger: ".info-cards",
                start: "top 80%",
            },
            y: 100,
            opacity: 0,
            stagger: 0.3,
            duration: 1
        });
    }
});