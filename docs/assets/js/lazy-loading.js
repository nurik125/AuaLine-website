document.addEventListener('DOMContentLoaded', () => {
    // Images
    const lazyImages = document.querySelectorAll('img[data-src]');

    const imageObserver = new IntersectionObserver((entries, observer) => {
        console.log(entries);
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.removeAttribute('data-src');
                img.classList.add('loaded');  
                observer.unobserve(img);
            }
        });
    });

    lazyImages.forEach(img => {
        imageObserver.observe(img);
    });

    // Videos
    const lazyVideos = document.querySelectorAll('video');

    lazyVideos.forEach(video=> {
        const videoObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const source = entry.target.querySelector('source');
                    source.src = source.dataset.src;
                    entry.target.load();
                    entry.target.classList.add('loaded');
                    observer.unobserve(entry.target);
                }
            });
        });

        videoObserver.observe(video);
    });
});