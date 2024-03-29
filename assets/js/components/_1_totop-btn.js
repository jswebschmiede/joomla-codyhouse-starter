// initialize scroll top button
const callback = (entries, observer) => {
    // The callback will return an array of entries, even if you are only observing a single item
    entries.forEach((entry) => {
        if (!entry.isIntersecting) {
            // Show button
            scrollToTopBtn.classList.add('showBtn');
        } else {
            // Hide button
            scrollToTopBtn.classList.remove('showBtn');
        }
    });
};

const scrollToTop = () => {
    rootElement.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
};

var target = document.querySelector('#scroll-top-trigger');
var scrollToTopBtn = document.querySelector('.scrollToTopBtn');
var rootElement = document.documentElement;

if (scrollToTopBtn) {
    scrollToTopBtn.addEventListener('click', scrollToTop);
    let observer = new IntersectionObserver(callback);

    // Finally start observing the target element
    observer.observe(target);
}
