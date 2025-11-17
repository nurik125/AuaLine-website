// Product Cards JSON

import productsData from "../products/products.json" with { type: "json" };

const productsGrid = document.querySelector('.products-grid');

const icons = {
  user: `
    <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
      <path d="M20 5c-2 0-4 1-5 3-1 1-2 3-2 5s1 4 2 5c1 2 3 3 5 3s4-1 5-3c1-1 2-3 2-5s-1-4-2-5c-1-2-3-3-5-3zm0 25c-8 0-15 4-15 8v2h30v-2c0-4-7-8-15-8z"/>
    </svg>
  `,
  lock: `
    <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
      <path d="M30 15H25V10C25 7.24 22.76 5 20 5C17.24 5 15 7.24 15 10V15H10V35H30V15ZM20 25C18.34 25 17 23.66 17 22C17 20.34 18.34 19 20 19C21.66 19 23 20.34 23 22C23 23.66 21.66 25 20 25ZM22 15H18V10C18 8.9 18.9 8 20 8C21.1 8 22 8.9 22 10V15Z"/>
    </svg>
  `,
  card: `
    <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
      <path d="M32 8H8C5.8 8 4 9.8 4 12V28C4 30.2 5.8 32 8 32H32C34.2 32 36 30.2 36 28V12C36 9.8 34.2 8 32 8ZM32 28H8V16H32V28ZM32 14H8V12H32V14Z"/>
    </svg>
  `,
  shield: `
    <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
      <path d="M20 8L12 12V17C12 22.5 15.8 27.6 21 29C26.2 27.6 30 22.5 30 17V12L20 8ZM20 19.5C18.6 19.5 17.5 18.4 17.5 17C17.5 15.6 18.6 14.5 20 14.5C21.4 14.5 22.5 15.6 22.5 17C22.5 18.4 21.4 19.5 20 19.5Z"/>
    </svg>
  `
};

productsData.forEach(product => {

    let newProduct = document.createElement('div');
    newProduct.className = "product-card";
    
    let badge = document.createElement('div');
    badge.className = "product-badge";

    let icon = document.createElement('div');
    icon.className = "product-icon";
    icon.innerHTML = icons[product.icon];

    let productName = document.createElement('h3');
    productName.className = "product-name";
    productName.textContent = product.name;

    let productCategory = document.createElement('p');
    productCategory.className = "product-category";
    productCategory.textContent = product.category;

    let productDescription = document.createElement('p');
    productDescription.className = "product-description";
    productDescription.textContent = product.description;

    let productPrice = document.createElement('div');
    productPrice.className = "product-price";
    productPrice.textContent = Math.floor(product.price / 1000) + ' ' + product.price % 1000 + '₸';

    let buyButton = document.createElement('a');
    buyButton.className = "products-btn btn-block";
    buyButton.href = "https://wa.me/77086907873?text=" + encodeURIComponent(product.whatsapp_text);
    buyButton.target = '_blank';
    buyButton.innerHTML = `
                        <svg class='product-icon-svg' xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart h-5 w-5">
                            <circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Купить`;

    if (product.available) {
        badge.classList.add('available');
        badge.textContent = 'В наличии';

        buyButton.classList.add('btn-primary');
    } else {
        badge.classList.add('coming-soon');
        badge.textContent = 'Не в наличии';

        buyButton.classList.add('btn-secondary');
        buyButton.classList.add('coming-soon');
    }

    newProduct.appendChild(badge);
    newProduct.appendChild(icon);
    newProduct.appendChild(productName);
    newProduct.appendChild(productCategory);
    newProduct.appendChild(productDescription);
    newProduct.appendChild(productPrice);
    newProduct.appendChild(buyButton);
    productsGrid.appendChild(newProduct);
    
});

// Media Articles JSON

import articlesData from "../articles/articles.json" with { type: "json" };

const articlesContainer = document.querySelector('.media-articles');

articlesData.forEach(article => {

    let newArticle = document.createElement('a');
    newArticle.className = "media-article-card";
    newArticle.href = article.url;

    let articleImg = document.createElement('div');
    articleImg.className = "media-article-image";
    articleImg.style.backgroundImage = `url(${article.image_path})`;
    articleImg.style.backgroundPosition = 'center';

    let articleTitle = document.createElement('h3');
    articleTitle.className = "media-article-title";
    articleTitle.textContent = article.title;

    let articleSrc = document.createElement('span');
    articleSrc.className = "media-article-source";
    articleSrc.textContent = article.source;

    newArticle.appendChild(articleImg);
    newArticle.appendChild(articleTitle);
    newArticle.appendChild(articleSrc);
    articlesContainer.appendChild(newArticle);
});




// Smooth scroll for navigation links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// Navbar scroll effect
const navbar = document.querySelector('.navbar');
let lastScroll = 0;

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
});

// Intersection Observer for fade-in animations
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');

            // If it's a stat item, trigger the counter animation
            if (entry.target.classList.contains('stat-item')) {
                animateCounter(entry.target);
            }
        }
    });
}, observerOptions);

// Observe all elements that should animate
const animatedElements = document.querySelectorAll('.stat-item, .product-card, .tech-card, .contact-card, .how-it-works, .contact-form');
animatedElements.forEach(el => observer.observe(el));

// Counter animation for statistics
function animateCounter(element) {
    const numberElement = element.querySelector('.stat-number');
    if (!numberElement || numberElement.classList.contains('animated')) return;

    numberElement.classList.add('animated');
    const target = parseInt(numberElement.getAttribute('data-target'));
    const duration = 2000; // 2 seconds
    const increment = target / (duration / 16); // 60fps
    let current = 0;

    const updateCounter = () => {
        current += increment;
        if (current < target) {
            // Format the number
            if (target >= 10000) {
                numberElement.textContent = Math.floor(current / 1000) + 'к+';
            } else if (target === 100) {
                numberElement.textContent = Math.floor(current) + '%';
            } else {
                numberElement.textContent = Math.floor(current) + 'т';
            }
            requestAnimationFrame(updateCounter);
        } else {
            // Set final value
            if (target >= 10000) {
                numberElement.textContent = (target / 1000) + 'к+';
            } else if (target === 100) {
                numberElement.textContent = target + '%';
            } else {
                numberElement.textContent = target + 'т';
            }
        }
    };

    requestAnimationFrame(updateCounter);
}

// Parallax effect for hero background
let ticking = false;

window.addEventListener('scroll', () => {
    if (!ticking) {
        window.requestAnimationFrame(() => {
            const scrolled = window.pageYOffset;
            const heroBg = document.querySelector('.hero-bg');
            if (heroBg) {
                heroBg.style.transform = `translateY(${scrolled * 0.5}px)`;
            }
            ticking = false;
        });
        ticking = true;
    }
});

/* For now removed 
// Product card 3D tilt effect
const productCards = document.querySelectorAll('.product-card');

productCards.forEach(card => {
    card.addEventListener('mousemove', (e) => {
        const rect = card.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;
        
        const centerX = rect.width / 2;
        const centerY = rect.height / 2;
        
        const rotateX = (y - centerY) / 10;
        const rotateY = (centerX - x) / 10;
        
        card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) translateY(-10px)`;
    });
    
    card.addEventListener('mouseleave', () => {
        card.style.transform = '';
    });
});
*/

// Tech cards stagger animation
const techCards = document.querySelectorAll('.tech-card');
const techObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('visible');
            }, index * 150);
        }
    });
}, observerOptions);

techCards.forEach(card => techObserver.observe(card));

// Product cards stagger animation
const productCardsStagger = document.querySelectorAll('.product-card');
const productObserver = new IntersectionObserver((entries) => {
    entries.forEach((entry, index) => {
        if (entry.isIntersecting) {
            setTimeout(() => {
                entry.target.classList.add('visible');
            }, index * 100);
        }
    });
}, observerOptions);

productCardsStagger.forEach(card => productObserver.observe(card));

// Cursor glow effect
const createCursorGlow = () => {
    const glow = document.createElement('div');
    glow.className = 'cursor-glow';
    glow.style.cssText = `
        position: fixed;
        width: 400px;
        height: 400px;
        border-radius: 50%;
        background: radial-gradient(circle, rgba(180, 255, 57, 0.15) 0%, transparent 70%);
        pointer-events: none;
        z-index: 9999;
        transform: translate(-50%, -50%);
        transition: opacity 0.3s;
        opacity: 0;
    `;
    document.body.appendChild(glow);

    let mouseX = 0, mouseY = 0;
    let glowX = 0, glowY = 0;

    document.addEventListener('mousemove', (e) => {
        mouseX = e.clientX;
        mouseY = e.clientY;
        glow.style.opacity = '1';
    });

    document.addEventListener('mouseleave', () => {
        glow.style.opacity = '0';
    });

    const updateGlowPosition = () => {
        glowX += (mouseX - glowX) * 0.1;
        glowY += (mouseY - glowY) * 0.1;
        glow.style.left = glowX + 'px';
        glow.style.top = glowY + 'px';
        requestAnimationFrame(updateGlowPosition);
    };

    updateGlowPosition();
};

createCursorGlow();


/* For now removed 

// Magnetic effect for buttons
const buttons = document.querySelectorAll('.btn');

buttons.forEach(button => {
    button.addEventListener('mousemove', (e) => {
        const rect = button.getBoundingClientRect();
        const x = e.clientX - rect.left - rect.width / 2;
        const y = e.clientY - rect.top - rect.height / 2;
        
        button.style.transform = `translate(${x * 0.1}px, ${y * 0.1}px)`;
    });
    
    button.addEventListener('mouseleave', () => {
        button.style.transform = '';
    });
});

*/

// Smooth reveal animation on page load
window.addEventListener('load', () => {
    document.body.style.opacity = '0';
    document.body.style.transition = 'opacity 0.5s';

    setTimeout(() => {
        document.body.style.opacity = '1';
    }, 100);
});

// Text reveal animation for hero title
const splitText = (element) => {
    const text = element.textContent;
    element.innerHTML = '';

    text.split('').forEach((char, index) => {
        const span = document.createElement('span');
        span.textContent = char;
        span.style.display = 'inline-block';
        span.style.opacity = '0';
        span.style.transform = 'translateY(20px)';
        span.style.transition = `all 0.3s cubic-bezier(0.4, 0, 0.2, 1) ${index * 0.02}s`;
        element.appendChild(span);

        setTimeout(() => {
            span.style.opacity = '1';
            span.style.transform = 'translateY(0)';
        }, 100);
    });
};

// Apply text animation to hero title highlight
setTimeout(() => {
    const heroHighlight = document.querySelector('.hero-title-highlight');
    if (heroHighlight) {
        // Store original animation
        const originalAnimation = heroHighlight.style.animation;
        heroHighlight.style.animation = 'none';

        setTimeout(() => {
            heroHighlight.style.animation = originalAnimation;
        }, 50);
    }
}, 500);

// Add ripple effect to cards on click
document.querySelectorAll('.product-card, .tech-card, .contact-card').forEach(card => {
    card.addEventListener('click', function(e) {
        const ripple = document.createElement('div');
        const rect = this.getBoundingClientRect();
        const x = e.clientX - rect.left;
        const y = e.clientY - rect.top;

        ripple.style.cssText = `
            position: absolute;
            border-radius: 50%;
            background: rgba(180, 255, 57, 0.3);
            width: 10px;
            height: 10px;
            left: ${x}px;
            top: ${y}px;
            transform: translate(-50%, -50%) scale(0);
            animation: ripple 0.6s ease-out;
            pointer-events: none;
        `;
        this.appendChild(ripple);

        setTimeout(() => ripple.remove(), 600);
    });
});

// Add ripple animation to styles
const style = document.createElement('style');
style.textContent = `
    @keyframes ripple {
        to {
            transform: translate(-50%, -50%) scale(40);
            opacity: 0;
        }
    }
`;
document.head.appendChild(style);

// Preload optimization
const preloadImages = () => {
    // Add any background images or critical images here
    const images = [];
    images.forEach(src => {
        const img = new Image();
        img.src = src;
    });
};

preloadImages();

// Performance optimization: Debounce scroll events
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Add scroll progress indicator
const createScrollProgress = () => {
    const progress = document.createElement('div');
    progress.style.cssText = `
        position: fixed;
        top: 0;
        left: 0;
        height: 3px;
        background: var(--color-primary);
        z-index: 10000;
        transition: width 0.1s;
        width: 0%;
    `;
    document.body.appendChild(progress);

    window.addEventListener('scroll', () => {
        const windowHeight = document.documentElement.scrollHeight - document.documentElement.clientHeight;
        const scrolled = (window.pageYOffset / windowHeight) * 100;
        progress.style.width = scrolled + '%';
    });
};

createScrollProgress();

console.log('🚀 Aualine website loaded successfully!');
