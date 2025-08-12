<?php
$page_title = "JuviLora - Рекрутинг IT-специалистов в Литве";
$page_description = "Профессиональный рекрутинг IT-специалистов в Вильнюсе. Дизайн, разработка, QA, PM и другие IT-услуги. Найдите лучших кандидатов для вашего бизнеса.";
$current_page = "home";
include 'partials/header.php';
?>

<!-- Hero Section -->
<section class="hero-section" id="hero">
    <div class="hero-content">
        <div class="hero-text">
            <h1 class="hero-title animate-fade-up">
                Находим лучших <span class="gradient-text">IT-специалистов</span> для вашего бизнеса
            </h1>
            <p class="hero-subtitle animate-fade-up delay-1">
                Профессиональный рекрутинг в сфере информационных технологий. 
                Дизайнеры, разработчики, QA-инженеры, проект-менеджеры и другие IT-таланты.
            </p>
            <div class="hero-buttons animate-fade-up delay-2">
                <a href="services.php" class="btn btn-primary">Наши услуги</a>
                <a href="contacts.php" class="btn btn-secondary">Связаться с нами</a>
            </div>
        </div>
        <div class="hero-image animate-fade-up delay-3">
            <img src="img/hero-team-meeting.webp" alt="IT команда за работой" loading="lazy">
        </div>
    </div>
    <div class="hero-stats">
        <div class="stat-item animate-fade-up delay-4">
            <div class="stat-number">500+</div>
            <div class="stat-label">Успешных найма</div>
        </div>
        <div class="stat-item animate-fade-up delay-5">
            <div class="stat-number">150+</div>
            <div class="stat-label">Довольных клиентов</div>
        </div>
        <div class="stat-item animate-fade-up delay-6">
            <div class="stat-number">95%</div>
            <div class="stat-label">Результативность</div>
        </div>
    </div>
</section>

<!-- Services Preview Section -->
<section class="services-preview" id="services-preview">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Наши <span class="gradient-text">специализации</span></h2>
            <p class="animate-fade-up delay-1">
                Мы специализируемся на поиске и подборе IT-талантов для различных направлений
            </p>
        </div>
        
        <div class="services-grid">
            <div class="service-card glass-card animate-fade-up delay-2">
                <div class="service-icon">
                    <img src="img/icon-design.webp" alt="Дизайн" loading="lazy">
                </div>
                <h3>UI/UX Дизайн</h3>
                <p>Находим талантливых дизайнеров интерфейсов, которые создают удобные и красивые продукты</p>
                <ul>
                    <li>UI/UX дизайнеры</li>
                    <li>Графические дизайнеры</li>
                    <li>Продуктовые дизайнеры</li>
                </ul>
            </div>
            
            <div class="service-card glass-card animate-fade-up delay-3">
                <div class="service-icon">
                    <img src="img/icon-development.webp" alt="Разработка" loading="lazy">
                </div>
                <h3>Разработка</h3>
                <p>Подбираем опытных программистов для frontend, backend и fullstack разработки</p>
                <ul>
                    <li>Frontend разработчики</li>
                    <li>Backend разработчики</li>
                    <li>PHP специалисты</li>
                </ul>
            </div>
            
            <div class="service-card glass-card animate-fade-up delay-4">
                <div class="service-icon">
                    <img src="img/icon-qa.webp" alt="Тестирование" loading="lazy">
                </div>
                <h3>QA & Тестирование</h3>
                <p>Находим профессионалов по обеспечению качества и автоматизации тестирования</p>
                <ul>
                    <li>Manual QA</li>
                    <li>Automation QA</li>
                    <li>Test Lead</li>
                </ul>
            </div>
            
            <div class="service-card glass-card animate-fade-up delay-5">
                <div class="service-icon">
                    <img src="img/icon-pm.webp" alt="Управление проектами" loading="lazy">
                </div>
                <h3>Управление проектами</h3>
                <p>Подбираем опытных проект-менеджеров и скрам-мастеров для эффективного управления</p>
                <ul>
                    <li>Project Manager</li>
                    <li>Scrum Master</li>
                    <li>Product Owner</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Loud Manifesto Section -->
<section class="loud-section" id="manifesto">
    <div class="container">
        <div class="loud-wrap">
            <div class="loud-kicker animate-fade-up">Manifest</div>
            <h2 class="loud-headline animate-fade-up delay-1">
                Мы не ищем резюме.
                <span class="outline">Мы находим людей.</span>
            </h2>
            <p class="loud-subline animate-fade-up delay-2">
                Мы охотимся за редкими компетенциями, проверяем навыки и доставляем вам тех, кто двигает продукт, а не строки в отчётах
            </p>
            <div class="loud-tags animate-fade-up delay-2">
                <span class="tag">Vilnius · LT</span>
                <span class="tag">2019 → ∞</span>
                <span class="tag">Design · Dev · QA · PM</span>
            </div>
            <div class="loud-actions animate-fade-up delay-3">
                <a href="contacts.php" class="btn btn-primary btn-large">Начать поиск</a>
            </div>
        </div>
    </div>
    <div class="loud-ring" aria-hidden="true"></div>
    <div class="loud-noise" aria-hidden="true"></div>
</section>

<!-- Packages Section -->
<section class="packages-section" id="packages">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Пакеты <span class="gradient-text">услуг</span></h2>
            <p class="animate-fade-up delay-1">
                Выберите подходящий пакет для решения ваших задач по подбору персонала
            </p>
        </div>
        
        <div class="packages-grid">
            <div class="package-card glass-card animate-fade-up delay-2">
                <div class="package-header">
                    <h3>Lite</h3>
                    <div class="package-price">€450</div>
                    <div class="package-subtitle">Базовый поиск</div>
                </div>
                <div class="package-features">
                    <ul>
                        <li>Поиск 1 специалиста</li>
                        <li>Предварительный отбор</li>
                        <li>Базовое интервью</li>
                        <li>Гарантия 30 дней</li>
                        <li>Email поддержка</li>
                    </ul>
                </div>
                <a href="contacts.php" class="btn btn-outline">Выбрать пакет</a>
            </div>
            
            <div class="package-card glass-card featured animate-fade-up delay-3">
                <div class="package-badge">Популярный</div>
                <div class="package-header">
                    <h3>Pro</h3>
                    <div class="package-price">€890</div>
                    <div class="package-subtitle">Профессиональный поиск</div>
                </div>
                <div class="package-features">
                    <ul>
                        <li>Поиск до 3 специалистов</li>
                        <li>Глубокий отбор кандидатов</li>
                        <li>Техническое интервью</li>
                        <li>Тестовые задания</li>
                        <li>Гарантия 60 дней</li>
                        <li>Приоритетная поддержка</li>
                    </ul>
                </div>
                <a href="contacts.php" class="btn btn-primary">Выбрать пакет</a>
            </div>
            
            <div class="package-card glass-card animate-fade-up delay-4">
                <div class="package-header">
                    <h3>Custom</h3>
                    <div class="package-price">€1450+</div>
                    <div class="package-subtitle">Индивидуальное решение</div>
                </div>
                <div class="package-features">
                    <ul>
                        <li>Неограниченный поиск</li>
                        <li>Полный цикл рекрутинга</li>
                        <li>Персональный менеджер</li>
                        <li>Онбординг поддержка</li>
                        <li>Гарантия 90 дней</li>
                        <li>24/7 поддержка</li>
                    </ul>
                </div>
                <a href="contacts.php" class="btn btn-outline">Обсудить проект</a>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us Section -->
<section class="why-choose-us" id="why-us">
    <div class="container">
        <div class="why-content">
            <div class="why-text">
                <h2 class="animate-fade-up">Почему выбирают <span class="gradient-text">JuviLora</span></h2>
                <div class="why-features">
                    <div class="feature-item animate-fade-up delay-1">
                        <div class="feature-icon">
                            <img src="img/icon-experience.webp" alt="Опыт" loading="lazy">
                        </div>
                        <div class="feature-content">
                            <h4>5+ лет опыта</h4>
                            <p>Глубокое понимание IT-рынка Литвы и специфики различных технологических направлений</p>
                        </div>
                    </div>
                    
                    <div class="feature-item animate-fade-up delay-2">
                        <div class="feature-icon">
                            <img src="img/icon-network.webp" alt="Сеть контактов" loading="lazy">
                        </div>
                        <div class="feature-content">
                            <h4>Обширная сеть</h4>
                            <p>Тысячи контактов IT-специалистов и постоянное расширение базы талантов</p>
                        </div>
                    </div>
                    
                    <div class="feature-item animate-fade-up delay-3">
                        <div class="feature-icon">
                            <img src="img/icon-speed.webp" alt="Скорость" loading="lazy">
                        </div>
                        <div class="feature-content">
                            <h4>Быстрые результаты</h4>
                            <p>Средний срок подбора кандидата - 10-14 дней благодаря отлаженным процессам</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="why-image animate-fade-up delay-4">
                <img src="img/team-collaboration.webp" alt="Команда JuviLora" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Talent Ticker Section -->
<section class="ticker-section" id="talent-ticker">
    <div class="ticker-mask">
        <div class="ticker-row left">
            <div class="ticker-track">
                <span class="ticker-item">✦ Senior React</span>
                <span class="ticker-item">✦ Go Backend</span>
                <span class="ticker-item">✦ QA Automation</span>
                <span class="ticker-item">✦ Product Manager</span>
                <span class="ticker-item">✦ UI/UX</span>
                <span class="ticker-item">✦ Data Engineer</span>
                <span class="ticker-item">✦ DevOps</span>
                <span class="ticker-item">✦ Mobile iOS/Android</span>
                <span class="ticker-item">✦ SRE</span>
                <span class="ticker-item">✦ Team Lead</span>
            </div>
            <div class="ticker-track" aria-hidden="true">
                <span class="ticker-item">✦ Senior React</span>
                <span class="ticker-item">✦ Go Backend</span>
                <span class="ticker-item">✦ QA Automation</span>
                <span class="ticker-item">✦ Product Manager</span>
                <span class="ticker-item">✦ UI/UX</span>
                <span class="ticker-item">✦ Data Engineer</span>
                <span class="ticker-item">✦ DevOps</span>
                <span class="ticker-item">✦ Mobile iOS/Android</span>
                <span class="ticker-item">✦ SRE</span>
                <span class="ticker-item">✦ Team Lead</span>
            </div>
        </div>

        <div class="ticker-row right">
            <div class="ticker-track">
                <span class="ticker-item">★ Вильнюс · LT</span>
                <span class="ticker-item">★ 10–14 дней найм</span>
                <span class="ticker-item">★ Проверка навыков</span>
                <span class="ticker-item">★ Культурный фит</span>
                <span class="ticker-item">★ Дизайн · Разработка · QA · PM</span>
                <span class="ticker-item">★ Гарантия 60–90 дней</span>
            </div>
            <div class="ticker-track" aria-hidden="true">
                <span class="ticker-item">★ Вильнюс · LT</span>
                <span class="ticker-item">★ 10–14 дней найм</span>
                <span class="ticker-item">★ Проверка навыков</span>
                <span class="ticker-item">★ Культурный фит</span>
                <span class="ticker-item">★ Дизайн · Разработка · QA · PM</span>
                <span class="ticker-item">★ Гарантия 60–90 дней</span>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="animate-fade-up">Готовы найти идеального <span class="gradient-text">кандидата</span>?</h2>
            <p class="animate-fade-up delay-1">
                Свяжитесь с нами сегодня и получите бесплатную консультацию по подбору IT-специалистов
            </p>
            <div class="cta-buttons animate-fade-up delay-2">
                <a href="contacts.php" class="btn btn-primary btn-large">Получить консультацию</a>
                
            </div>
        </div>
    </div>
</section>

<?php include 'partials/footer.php'; ?>