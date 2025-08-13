<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo isset($page_title) ? $page_title : 'JuviLora - IT Рекрутинг в Литве'; ?></title>
    <meta name="description" content="<?php echo isset($page_description) ? $page_description : 'Профессиональный рекрутинг IT-специалистов в Вильнюсе. Дизайн, разработка, QA, PM и другие IT-услуги.'; ?>">
    <meta name="keywords" content="IT рекрутинг, подбор персонала, Вильнюс, Литва, разработчики, дизайнеры, QA, project manager">
    <meta name="author" content="JuviLora">
    <meta name="robots" content="index, follow">
    
    <!-- Open Graph Tags -->
    <meta property="og:title" content="<?php echo isset($page_title) ? $page_title : 'JuviLora - IT Рекрутинг в Литве'; ?>">
    <meta property="og:description" content="<?php echo isset($page_description) ? $page_description : 'Профессиональный рекрутинг IT-специалистов в Вильнюсе'; ?>">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://juvilora.com">
    <meta property="og:image" content="https://juvilora.com/img/og-image.webp">
    <meta property="og:locale" content="ru_LT">
    
    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo isset($page_title) ? $page_title : 'JuviLora - IT Рекрутинг в Литве'; ?>">
    <meta name="twitter:description" content="<?php echo isset($page_description) ? $page_description : 'Профессиональный рекрутинг IT-специалистов в Вильнюсе'; ?>">
    <meta name="twitter:image" content="https://juvilora.com/img/og-image.webp">
    
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="/img/favicon.png">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    
    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="styles.css">
    
    <!-- Structured Data -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "JuviLora",
        "description": "Профессиональный рекрутинг IT-специалистов в Литве",
        "url": "https://juvilora.com",
        "logo": "https://juvilora.com/img/logo.webp",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Конституциос пр. 12",
            "addressLocality": "Вильнюс",
            "addressRegion": "Вильнюсский уезд",
            "postalCode": "09308",
            "addressCountry": "LT"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+370-601-23456",
            "contactType": "customer service",
            "availableLanguage": ["ru", "lt", "en"]
        },
        "sameAs": [
            "https://linkedin.com/company/juvilora"
        ],
        "foundingDate": "2019",
        "numberOfEmployees": "5-10",
        "industry": "Information Technology",
        "areaServed": "Lithuania"
    }
    </script>
</head>
<body class="<?php echo isset($current_page) ? $current_page : ''; ?>">
    
    <!-- Cookie Banner -->
    <div id="cookie-banner" class="cookie-banner">
        <div class="cookie-content">
            <div class="cookie-text">
                <h4>Использование файлов cookie</h4>
                <p>Мы используем файлы cookie для улучшения работы сайта и персонализации контента. Продолжая использовать сайт, вы соглашаетесь с нашей <a href="cookies.php">политикой cookie</a>.</p>
            </div>
            <div class="cookie-buttons">
                <button id="accept-all" class="btn btn-primary btn-small">Принять все</button>
                <button id="customize-cookies" class="btn btn-outline btn-small">Настроить</button>
                <button id="reject-all" class="btn btn-text btn-small">Отклонить</button>
            </div>
        </div>
    </div>

    <!-- Cookie Preferences Modal -->
    <div id="cookie-modal" class="cookie-modal">
        <div class="cookie-modal-content">
            <div class="cookie-modal-header">
                <h3>Настройки cookie</h3>
                <button id="close-modal" class="close-modal">&times;</button>
            </div>
            <div class="cookie-modal-body">
                <div class="cookie-category">
                    <label class="cookie-toggle">
                        <input type="checkbox" id="necessary-cookies" checked disabled>
                        <span class="toggle-slider"></span>
                        <div class="cookie-info">
                            <h4>Необходимые cookie</h4>
                            <p>Эти файлы cookie необходимы для функционирования сайта и не могут быть отключены.</p>
                        </div>
                    </label>
                </div>
                <div class="cookie-category">
                    <label class="cookie-toggle">
                        <input type="checkbox" id="analytics-cookies">
                        <span class="toggle-slider"></span>
                        <div class="cookie-info">
                            <h4>Аналитические cookie</h4>
                            <p>Помогают нам понять, как посетители взаимодействуют с сайтом, собирая анонимную информацию.</p>
                        </div>
                    </label>
                </div>
                <div class="cookie-category">
                    <label class="cookie-toggle">
                        <input type="checkbox" id="marketing-cookies">
                        <span class="toggle-slider"></span>
                        <div class="cookie-info">
                            <h4>Маркетинговые cookie</h4>
                            <p>Используются для показа релевантной рекламы и отслеживания эффективности рекламных кампаний.</p>
                        </div>
                    </label>
                </div>
            </div>
            <div class="cookie-modal-footer">
                <button id="save-preferences" class="btn btn-primary">Сохранить настройки</button>
                <button id="accept-all-modal" class="btn btn-outline">Принять все</button>
            </div>
        </div>
    </div>

    <!-- Header -->
    <header class="header" id="header">
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php">
                        <img src="img/logo.webp" alt="JuviLora Logo" class="logo-img">
                        <span class="logo-text">JuviLora</span>
                    </a>
                </div>
                
                <nav class="nav" id="nav">
                    <ul class="nav-list">
                        <li class="nav-item">
                            <a href="index.php" class="nav-link <?php echo ($current_page == 'home') ? 'active' : ''; ?>">Главная</a>
                        </li>
                        <li class="nav-item">
                            <a href="about.php" class="nav-link <?php echo ($current_page == 'about') ? 'active' : ''; ?>">О нас</a>
                        </li>
                        <li class="nav-item">
                            <a href="services.php" class="nav-link <?php echo ($current_page == 'services') ? 'active' : ''; ?>">Наши услуги</a>
                        </li>
                      
                    </ul>
                </nav>
                
                <div class="header-actions">
                   
                    <a href="contacts.php" class="btn btn-primary btn-small">Связаться</a>
                </div>
                
                <button class="mobile-menu-toggle" id="mobile-menu-toggle">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Menu Overlay -->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu">
            <div class="mobile-menu-header">
                <div class="logo">
                    <img src="img/logo.webp" alt="JuviLora Logo" class="logo-img">
                    <span class="logo-text">JuviLora</span>
                </div>
                <button class="mobile-menu-close" id="mobile-menu-close">&times;</button>
            </div>
            <nav class="mobile-nav">
                <ul class="mobile-nav-list">
                    <li><a href="index.php" class="mobile-nav-link">Главная</a></li>
                    <li><a href="about.php" class="mobile-nav-link">О нас</a></li>
                    <li><a href="services.php" class="mobile-nav-link">Наши услуги</a></li>
                </ul>
            </nav>
            <div class="mobile-menu-actions">
                <a href="contacts.php" class="btn btn-primary btn-full">Связаться</a>
            </div>
        </div>
    </div>

    <main class="main">