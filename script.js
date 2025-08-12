// JuviLora - Main JavaScript File

document.addEventListener('DOMContentLoaded', function() {
    // Initialize all features
    initScrollAnimations();
    initMobileMenu();
    initCookieBanner();
    initBackToTop();
    initSmoothScroll();
    initHeaderScroll();
    initLazyLoading();
    
    console.log('JuviLora website initialized');
});

// Scroll-triggered animations
function initScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate');
            }
        });
    }, observerOptions);

    // Observe all elements with animation classes
    const animatedElements = document.querySelectorAll('.animate-fade-up');
    animatedElements.forEach(el => observer.observe(el));
}

// Mobile menu functionality
function initMobileMenu() {
    const mobileMenuToggle = document.getElementById('mobile-menu-toggle');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');
    const mobileMenuClose = document.getElementById('mobile-menu-close');
    const mobileNavLinks = document.querySelectorAll('.mobile-nav-link');

    if (!mobileMenuToggle || !mobileMenuOverlay) return;

    // Toggle mobile menu
    mobileMenuToggle.addEventListener('click', function() {
        mobileMenuOverlay.style.display = 'block';
        setTimeout(() => {
            mobileMenuOverlay.classList.add('active');
        }, 10);
        document.body.style.overflow = 'hidden';
    });

    // Close mobile menu
    function closeMobileMenu() {
        mobileMenuOverlay.classList.remove('active');
        setTimeout(() => {
            mobileMenuOverlay.style.display = 'none';
        }, 300);
        document.body.style.overflow = '';
    }

    if (mobileMenuClose) {
        mobileMenuClose.addEventListener('click', closeMobileMenu);
    }

    // Close on overlay click
    mobileMenuOverlay.addEventListener('click', function(e) {
        if (e.target === mobileMenuOverlay) {
            closeMobileMenu();
        }
    });

    // Close on nav link click
    mobileNavLinks.forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Close on ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && mobileMenuOverlay.classList.contains('active')) {
            closeMobileMenu();
        }
    });
}

// Cookie banner functionality
function initCookieBanner() {
    const cookieBanner = document.getElementById('cookie-banner');
    const cookieModal = document.getElementById('cookie-modal');
    const acceptAllBtn = document.getElementById('accept-all');
    const customizeBtn = document.getElementById('customize-cookies');
    const rejectAllBtn = document.getElementById('reject-all');
    const closeModalBtn = document.getElementById('close-modal');
    const savePreferencesBtn = document.getElementById('save-preferences');
    const acceptAllModalBtn = document.getElementById('accept-all-modal');

    // Check if cookies have been set
    if (!getCookie('cookie_preferences')) {
        setTimeout(() => {
            cookieBanner.classList.add('show');
        }, 2000);
    }

    // Accept all cookies
    if (acceptAllBtn) {
        acceptAllBtn.addEventListener('click', function() {
            setCookiePreferences({
                necessary: true,
                analytics: true,
                marketing: true
            });
            hideCookieBanner();
        });
    }

    // Customize cookies
    if (customizeBtn) {
        customizeBtn.addEventListener('click', function() {
            showCookieModal();
        });
    }

    // Reject all cookies
    if (rejectAllBtn) {
        rejectAllBtn.addEventListener('click', function() {
            setCookiePreferences({
                necessary: true,
                analytics: false,
                marketing: false
            });
            hideCookieBanner();
        });
    }

    // Close modal
    if (closeModalBtn) {
        closeModalBtn.addEventListener('click', hideCookieModal);
    }

    // Save preferences
    if (savePreferencesBtn) {
        savePreferencesBtn.addEventListener('click', function() {
            const preferences = {
                necessary: true,
                analytics: document.getElementById('analytics-cookies').checked,
                marketing: document.getElementById('marketing-cookies').checked
            };
            setCookiePreferences(preferences);
            hideCookieModal();
            hideCookieBanner();
        });
    }

    // Accept all from modal
    if (acceptAllModalBtn) {
        acceptAllModalBtn.addEventListener('click', function() {
            document.getElementById('analytics-cookies').checked = true;
            document.getElementById('marketing-cookies').checked = true;
            setCookiePreferences({
                necessary: true,
                analytics: true,
                marketing: true
            });
            hideCookieModal();
            hideCookieBanner();
        });
    }

    // Close modal on overlay click
    if (cookieModal) {
        cookieModal.addEventListener('click', function(e) {
            if (e.target === cookieModal) {
                hideCookieModal();
            }
        });
    }

    function showCookieModal() {
        cookieModal.style.display = 'flex';
        setTimeout(() => {
            cookieModal.classList.add('show');
        }, 10);
        document.body.style.overflow = 'hidden';
    }

    function hideCookieModal() {
        cookieModal.classList.remove('show');
        setTimeout(() => {
            cookieModal.style.display = 'none';
        }, 300);
        document.body.style.overflow = '';
    }

    function hideCookieBanner() {
        cookieBanner.classList.remove('show');
    }

    function setCookiePreferences(preferences) {
        setCookie('cookie_preferences', JSON.stringify(preferences), 365);
        
        // Load analytics/marketing scripts based on preferences
        if (preferences.analytics) {
            loadAnalytics();
        }
        
        if (preferences.marketing) {
            loadMarketing();
        }
    }

    function loadAnalytics() {
        // Placeholder for analytics code (Google Analytics, etc.)
        console.log('Analytics cookies accepted - loading tracking scripts');
    }

    function loadMarketing() {
        // Placeholder for marketing code (Facebook Pixel, etc.)
        console.log('Marketing cookies accepted - loading marketing scripts');
    }
}

// Back to top button
function initBackToTop() {
    const backToTopBtn = document.getElementById('back-to-top');
    
    if (!backToTopBtn) return;

    window.addEventListener('scroll', function() {
        if (window.pageYOffset > 300) {
            backToTopBtn.classList.add('visible');
        } else {
            backToTopBtn.classList.remove('visible');
        }
    });

    backToTopBtn.addEventListener('click', function() {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
}

// Smooth scroll for anchor links
function initSmoothScroll() {
    const links = document.querySelectorAll('a[href^="#"]');
    
    links.forEach(link => {
        link.addEventListener('click', function(e) {
            const href = this.getAttribute('href');
            
            if (href === '#') return;
            
            const target = document.querySelector(href);
            
            if (target) {
                e.preventDefault();
                
                const headerHeight = document.querySelector('.header').offsetHeight;
                const targetPosition = target.offsetTop - headerHeight - 20;
                
                window.scrollTo({
                    top: targetPosition,
                    behavior: 'smooth'
                });
            }
        });
    });
}

// Header scroll effect
function initHeaderScroll() {
    const header = document.querySelector('.header');
    let lastScrollTop = 0;
    
    if (!header) return;

    window.addEventListener('scroll', function() {
        const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
        
        if (scrollTop > 100) {
            header.classList.add('scrolled');
        } else {
            header.classList.remove('scrolled');
        }
        
        lastScrollTop = scrollTop;
    });
}

// Lazy loading for images
function initLazyLoading() {
    const images = document.querySelectorAll('img[loading="lazy"]');
    
    if ('IntersectionObserver' in window) {
        const imageObserver = new IntersectionObserver((entries, observer) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const img = entry.target;
                    img.src = img.dataset.src || img.src;
                    img.classList.remove('lazy');
                    imageObserver.unobserve(img);
                }
            });
        });

        images.forEach(img => {
            imageObserver.observe(img);
        });
    } else {
        // Fallback for browsers without IntersectionObserver
        images.forEach(img => {
            img.src = img.dataset.src || img.src;
        });
    }
}

// Cookie utility functions
function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/;SameSite=Strict`;
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

// Form validation utilities
function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function validatePhone(phone) {
    const re = /^[\+]?[0-9\s\-\(\)]{10,}$/;
    return re.test(phone);
}

// Contact form functionality (for contacts page)
function initContactForm() {
    const contactForm = document.getElementById('contact-form');
    
    if (!contactForm) return;

    contactForm.addEventListener('submit', function(e) {
        e.preventDefault();
        
        const formData = new FormData(contactForm);
        const data = Object.fromEntries(formData.entries());
        
        // Validate form
        if (!validateContactForm(data)) {
            return;
        }
        
        // Show loading state
        const submitBtn = contactForm.querySelector('button[type="submit"]');
        const originalText = submitBtn.textContent;
        submitBtn.textContent = 'Отправка...';
        submitBtn.disabled = true;
        
        // Simulate form submission
        setTimeout(() => {
            // Reset form
            contactForm.reset();
            
            // Show success message
            showNotification('Сообщение успешно отправлено! Мы свяжемся с вами в ближайшее время.', 'success');
            
            // Reset button
            submitBtn.textContent = originalText;
            submitBtn.disabled = false;
        }, 2000);
    });
}

function validateContactForm(data) {
    let isValid = true;
    const errors = [];
    
    // Clear previous errors
    clearFormErrors();
    
    // Validate name
    if (!data.name || data.name.trim().length < 2) {
        showFieldError('name', 'Введите корректное имя');
        isValid = false;
    }
    
    // Validate email
    if (!data.email || !validateEmail(data.email)) {
        showFieldError('email', 'Введите корректный email');
        isValid = false;
    }
    
    // Validate phone
    if (data.phone && !validatePhone(data.phone)) {
        showFieldError('phone', 'Введите корректный номер телефона');
        isValid = false;
    }
    
    // Validate message
    if (!data.message || data.message.trim().length < 10) {
        showFieldError('message', 'Сообщение должно содержать минимум 10 символов');
        isValid = false;
    }
    
    return isValid;
}

function showFieldError(fieldName, message) {
    const field = document.querySelector(`[name="${fieldName}"]`);
    if (!field) return;
    
    field.classList.add('error');
    
    let errorElement = field.parentNode.querySelector('.field-error');
    if (!errorElement) {
        errorElement = document.createElement('div');
        errorElement.className = 'field-error';
        field.parentNode.appendChild(errorElement);
    }
    
    errorElement.textContent = message;
}

function clearFormErrors() {
    const errorFields = document.querySelectorAll('.error');
    const errorMessages = document.querySelectorAll('.field-error');
    
    errorFields.forEach(field => field.classList.remove('error'));
    errorMessages.forEach(message => message.remove());
}

// Notification system
function showNotification(message, type = 'info') {
    const notification = document.createElement('div');
    notification.className = `notification notification-${type}`;
    notification.innerHTML = `
        <div class="notification-content">
            <span class="notification-message">${message}</span>
            <button class="notification-close">&times;</button>
        </div>
    `;
    
    document.body.appendChild(notification);
    
    // Show notification
    setTimeout(() => {
        notification.classList.add('show');
    }, 10);
    
    // Auto hide after 5 seconds
    setTimeout(() => {
        hideNotification(notification);
    }, 5000);
    
    // Close button
    notification.querySelector('.notification-close').addEventListener('click', () => {
        hideNotification(notification);
    });
}

function hideNotification(notification) {
    notification.classList.remove('show');
    setTimeout(() => {
        if (notification.parentNode) {
            notification.parentNode.removeChild(notification);
        }
    }, 300);
}

// Performance monitoring
function trackPageLoad() {
    window.addEventListener('load', function() {
        const loadTime = performance.timing.loadEventEnd - performance.timing.navigationStart;
        console.log(`Page loaded in ${loadTime}ms`);
        
        // Track to analytics if enabled
        const cookiePrefs = getCookie('cookie_preferences');
        if (cookiePrefs) {
            const prefs = JSON.parse(cookiePrefs);
            if (prefs.analytics) {
                // Send to analytics
                console.log('Tracking page load time:', loadTime);
            }
        }
    });
}

// Initialize page-specific functionality
function initPageSpecific() {
    const body = document.body;
    
    // Contact page specific
    if (body.classList.contains('contacts')) {
        initContactForm();
    }
    
    // Add more page-specific initializations here
}

// Add CSS for notifications
const notificationStyles = `
.notification {
    position: fixed;
    top: 20px;
    right: 20px;
    background: white;
    border-radius: 12px;
    box-shadow: 0 8px 30px rgba(0, 0, 0, 0.15);
    z-index: 10000;
    transform: translateX(400px);
    transition: transform 0.3s ease;
    max-width: 400px;
    border-left: 4px solid;
}

.notification.show {
    transform: translateX(0);
}

.notification-success {
    border-left-color: #28A745;
}

.notification-error {
    border-left-color: #DC3545;
}

.notification-warning {
    border-left-color: #FD7E14;
}

.notification-info {
    border-left-color: #17A2B8;
}

.notification-content {
    padding: 16px 20px;
    display: flex;
    justify-content: space-between;
    align-items: flex-start;
    gap: 16px;
}

.notification-message {
    flex: 1;
    line-height: 1.4;
    color: #212529;
}

.notification-close {
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    color: #6C757D;
    padding: 0;
    width: 24px;
    height: 24px;
    display: flex;
    align-items: center;
    justify-content: center;
    border-radius: 4px;
    transition: background-color 0.2s ease;
}

.notification-close:hover {
    background-color: #F8F9FA;
    color: #495057;
}

.field-error {
    color: #DC3545;
    font-size: 14px;
    margin-top: 4px;
}

.error {
    border-color: #DC3545 !important;
}
`;

// Add notification styles to head
const styleSheet = document.createElement('style');
styleSheet.textContent = notificationStyles;
document.head.appendChild(styleSheet);

// Initialize page-specific functionality
document.addEventListener('DOMContentLoaded', function() {
    initPageSpecific();
    trackPageLoad();
});

// Export functions for use in other scripts
window.JuviLora = {
    showNotification,
    validateEmail,
    validatePhone,
    setCookie,
    getCookie
};