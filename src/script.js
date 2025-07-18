document.addEventListener('DOMContentLoaded', function () {
    gsap.registerPlugin(ScrollTrigger);
    // GSAP Animations
    const timeline = gsap.timeline({ defaults: { ease: 'power3.out' } });
    timeline.from('header', { duration: 0.8, y: -50, opacity: 0 });
    timeline.from('.hero h1', { duration: 0.8, y: 30, opacity: 0 }, '-=0.5');
    timeline.from('.hero p', { duration: 0.8, y: 30, opacity: 0 }, '-=0.6');
    timeline.from('.windows-download-button', { duration: 0.8, y: 30, opacity: 0, scale: 0.9 }, '-=0.6');
    gsap.utils.toArray('.feature').forEach(feature => {
        gsap.from(feature, {
            scrollTrigger: {
                trigger: feature,
                start: 'top 80%',
                toggleActions: 'play none none none',
            },
            opacity: 0,
            y: 50,
            duration: 0.8,
            stagger: 0.1
        });
    });
    gsap.from('.live-pairs-section h2', {
        scrollTrigger: {
            trigger: '.live-pairs-section',
            start: 'top 80%',
        },
        opacity: 0,
        y: 30,
        duration: 0.8
    });
    gsap.from('.live-pair', {
        scrollTrigger: {
            trigger: '.live-pairs-container',
            start: 'top 80%',
        },
        opacity: 0,
        y: 30,
        duration: 0.6,
        stagger: 0.2
    });
    gsap.from('.token-market', {
        scrollTrigger: {
            trigger: '.token-market',
            start: 'top 80%',
            toggleActions: 'play none none none',
        },
        opacity: 0,
        y: 50,
        duration: 1
    });
    // Market Tabs
    const tabLinks = document.querySelectorAll('.tab-link');
    const tabContents = document.querySelectorAll('.tab-content');
    tabLinks.forEach(link => {
        link.addEventListener('click', () => {
            const tab = link.dataset.tab;
            tabLinks.forEach(l => l.classList.remove('active'));
            link.classList.add('active');
            tabContents.forEach(content => {
                content.classList.remove('active');
                if (content.id === tab) {
                    content.classList.add('active');
                }
            });
        });
    });
    // Swiper.js Testimonial Slider
    const testimonialSlider = new Swiper('.testimonial-slider', {
        loop: true,
        slidesPerView: 1,
        spaceBetween: 30,
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
        },
        breakpoints: {
            768: {
                slidesPerView: 2,
            },
            1024: {
                slidesPerView: 3,
            }
        }
    });
});