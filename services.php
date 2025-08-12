<?php
$page_title = "Наши услуги - JuviLora | IT рекрутинг в Литве";
$page_description = "Полный спектр услуг по рекрутингу IT-специалистов: поиск разработчиков, дизайнеров, QA-инженеров, проект-менеджеров. Профессиональный подбор персонала.";
$current_page = "services";
include 'partials/header.php';
?>

<!-- Services Hero Section -->
<section class="services-hero" id="services-hero">
    <div class="container">
        <div class="services-hero-content">
            <h1 class="animate-fade-up">
                Наши <span class="gradient-text">услуги</span>
            </h1>
            <p class="animate-fade-up delay-1">
                Полный спектр услуг по поиску и подбору IT-специалистов. 
                От джуниор-разработчиков до технических директоров.
            </p>
            <div class="services-nav animate-fade-up delay-2">
                <a href="#design" class="service-nav-link">Дизайн</a>
                <a href="#development" class="service-nav-link">Разработка</a>
                <a href="#qa" class="service-nav-link">QA & Тестирование</a>
                <a href="#pm" class="service-nav-link">Управление проектами</a>
            </div>
        </div>
    </div>
</section>

<!-- Design Services Section -->
<section class="service-detail" id="design">
    <div class="container">
        <div class="service-content">
            <div class="service-text">
                <h2 class="animate-fade-up">UI/UX <span class="gradient-text">Дизайн</span></h2>
                <p class="animate-fade-up delay-1">
                    Находим талантливых дизайнеров, которые создают современные, 
                    удобные и эстетически привлекательные пользовательские интерфейсы.
                </p>
                
                <div class="service-features animate-fade-up delay-2">
                    <h4>Специализации:</h4>
                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">🎨</div>
                            <div class="feature-content">
                                <h5>UI Дизайнеры</h5>
                                <p>Создание интерфейсов веб и мобильных приложений</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">👤</div>
                            <div class="feature-content">
                                <h5>UX Дизайнеры</h5>
                                <p>Исследование пользователей и проектирование опыта</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">📱</div>
                            <div class="feature-content">
                                <h5>Продуктовые дизайнеры</h5>
                                <p>Комплексная работа над продуктом от идеи до реализации</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">🖼️</div>
                            <div class="feature-content">
                                <h5>Графические дизайнеры</h5>
                                <p>Брендинг, иллюстрации и визуальная айдентика</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-tools animate-fade-up delay-3">
                    <h4>Инструменты и технологии:</h4>
                    <div class="tools-list">
                        <span class="tool-tag">Figma</span>
                        <span class="tool-tag">Sketch</span>
                        <span class="tool-tag">Adobe XD</span>
                        <span class="tool-tag">Photoshop</span>
                        <span class="tool-tag">Illustrator</span>
                        <span class="tool-tag">Principle</span>
                        <span class="tool-tag">InVision</span>
                        <span class="tool-tag">Miro</span>
                    </div>
                </div>
            </div>
            <div class="service-image animate-fade-up delay-4">
                <img src="img/design-workspace.webp" alt="Рабочее место дизайнера" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Development Services Section -->
<section class="service-detail alt" id="development">
    <div class="container">
        <div class="service-content">
            <div class="service-image animate-fade-up delay-1">
                <img src="img/development-code.webp" alt="Код разработчика" loading="lazy">
            </div>
            <div class="service-text">
                <h2 class="animate-fade-up">Веб <span class="gradient-text">Разработка</span></h2>
                <p class="animate-fade-up delay-2">
                    Подбираем опытных программистов для создания современных 
                    веб-приложений, API и высоконагруженных систем.
                </p>
                
                <div class="service-features animate-fade-up delay-3">
                    <h4>Направления разработки:</h4>
                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">🌐</div>
                            <div class="feature-content">
                                <h5>Frontend разработчики</h5>
                                <p>React, Vue.js, Angular, TypeScript</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">⚙️</div>
                            <div class="feature-content">
                                <h5>Backend разработчики</h5>
                                <p>PHP, Node.js, Python, Java, .NET</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">🔄</div>
                            <div class="feature-content">
                                <h5>Fullstack разработчики</h5>
                                <p>Полный цикл разработки веб-приложений</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">☁️</div>
                            <div class="feature-content">
                                <h5>DevOps инженеры</h5>
                                <p>AWS, Docker, Kubernetes, CI/CD</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-tools animate-fade-up delay-4">
                    <h4>Технологический стек:</h4>
                    <div class="tools-list">
                        <span class="tool-tag">PHP</span>
                        <span class="tool-tag">Laravel</span>
                        <span class="tool-tag">React</span>
                        <span class="tool-tag">Vue.js</span>
                        <span class="tool-tag">Node.js</span>
                        <span class="tool-tag">TypeScript</span>
                        <span class="tool-tag">MySQL</span>
                        <span class="tool-tag">PostgreSQL</span>
                        <span class="tool-tag">MongoDB</span>
                        <span class="tool-tag">Redis</span>
                        <span class="tool-tag">Docker</span>
                        <span class="tool-tag">AWS</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- QA Services Section -->
<section class="service-detail" id="qa">
    <div class="container">
        <div class="service-content">
            <div class="service-text">
                <h2 class="animate-fade-up">QA & <span class="gradient-text">Тестирование</span></h2>
                <p class="animate-fade-up delay-1">
                    Находим профессионалов по обеспечению качества, которые гарантируют 
                    стабильную работу ваших продуктов и высокое качество кода.
                </p>
                
                <div class="service-features animate-fade-up delay-2">
                    <h4>Виды тестирования:</h4>
                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">🔍</div>
                            <div class="feature-content">
                                <h5>Manual QA</h5>
                                <p>Функциональное, регрессионное, UI/UX тестирование</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">🤖</div>
                            <div class="feature-content">
                                <h5>Automation QA</h5>
                                <p>Автоматизация тестирования UI и API</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">📊</div>
                            <div class="feature-content">
                                <h5>Performance тестирование</h5>
                                <p>Нагрузочное и стресс-тестирование</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">🛡️</div>
                            <div class="feature-content">
                                <h5>Security тестирование</h5>
                                <p>Проверка безопасности и уязвимостей</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-tools animate-fade-up delay-3">
                    <h4>Инструменты тестирования:</h4>
                    <div class="tools-list">
                        <span class="tool-tag">Selenium</span>
                        <span class="tool-tag">Cypress</span>
                        <span class="tool-tag">Jest</span>
                        <span class="tool-tag">Postman</span>
                        <span class="tool-tag">JIRA</span>
                        <span class="tool-tag">TestRail</span>
                        <span class="tool-tag">Appium</span>
                        <span class="tool-tag">JMeter</span>
                    </div>
                </div>
            </div>
            <div class="service-image animate-fade-up delay-4">
                <img src="img/qa-testing.webp" alt="QA тестирование" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Project Management Services Section -->
<section class="service-detail alt" id="pm">
    <div class="container">
        <div class="service-content">
            <div class="service-image animate-fade-up delay-1">
                <img src="img/project-management.webp" alt="Управление проектами" loading="lazy">
            </div>
            <div class="service-text">
                <h2 class="animate-fade-up">Управление <span class="gradient-text">проектами</span></h2>
                <p class="animate-fade-up delay-2">
                    Подбираем опытных проект-менеджеров и скрам-мастеров, которые 
                    обеспечат эффективную работу команды и успешную реализацию проектов.
                </p>
                
                <div class="service-features animate-fade-up delay-3">
                    <h4>Роли и позиции:</h4>
                    <div class="features-grid">
                        <div class="feature-item">
                            <div class="feature-icon">👨‍💼</div>
                            <div class="feature-content">
                                <h5>Project Manager</h5>
                                <p>Планирование, координация и контроль проектов</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">🏃‍♂️</div>
                            <div class="feature-content">
                                <h5>Scrum Master</h5>
                                <p>Фасилитация agile-процессов и развитие команды</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">📋</div>
                            <div class="feature-content">
                                <h5>Product Owner</h5>
                                <p>Управление продуктовой стратегией и backlog</p>
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">📈</div>
                            <div class="feature-content">
                                <h5>Business Analyst</h5>
                                <p>Анализ требований и бизнес-процессов</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="service-tools animate-fade-up delay-4">
                    <h4>Методологии и инструменты:</h4>
                    <div class="tools-list">
                        <span class="tool-tag">Scrum</span>
                        <span class="tool-tag">Kanban</span>
                        <span class="tool-tag">Agile</span>
                        <span class="tool-tag">Waterfall</span>
                        <span class="tool-tag">JIRA</span>
                        <span class="tool-tag">Confluence</span>
                        <span class="tool-tag">Monday.com</span>
                        <span class="tool-tag">Asana</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Pricing Section -->
<section class="pricing-section" id="pricing">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Пакеты <span class="gradient-text">услуг</span></h2>
            <p class="animate-fade-up delay-1">
                Выберите подходящий пакет для решения ваших задач по подбору персонала
            </p>
        </div>
        
        <div class="pricing-grid">
            <div class="pricing-card animate-fade-up delay-2">
                <div class="pricing-header">
                    <h3>Lite</h3>
                    <div class="pricing-price">€450</div>
                    <div class="pricing-subtitle">Базовый поиск одного специалиста</div>
                </div>
                <div class="pricing-features">
                    <ul>
                        <li>Поиск 1 специалиста</li>
                        <li>Предварительный скрининг</li>
                        <li>Базовое интервью (30 мин)</li>
                        <li>Проверка референсов</li>
                        <li>Презентация 2-3 кандидатов</li>
                        <li>Гарантия замены 30 дней</li>
                        <li>Email поддержка</li>
                    </ul>
                </div>
                <a href="contacts.php" class="btn btn-outline">Выбрать пакет</a>
            </div>
            
            <div class="pricing-card featured animate-fade-up delay-3">
                <div class="pricing-badge">Популярный</div>
                <div class="pricing-header">
                    <h3>Pro</h3>
                    <div class="pricing-price">€890</div>
                    <div class="pricing-subtitle">Профессиональный поиск команды</div>
                </div>
                <div class="pricing-features">
                    <ul>
                        <li>Поиск до 3 специалистов</li>
                        <li>Глубокий отбор кандидатов</li>
                        <li>Техническое интервью (60 мин)</li>
                        <li>Тестовые задания</li>
                        <li>Психологическое тестирование</li>
                        <li>Презентация 5-7 кандидатов</li>
                        <li>Гарантия замены 60 дней</li>
                        <li>Помощь с оффером</li>
                        <li>Приоритетная поддержка</li>
                    </ul>
                </div>
                <a href="contacts.php" class="btn btn-primary">Выбрать пакет</a>
            </div>
            
            <div class="pricing-card animate-fade-up delay-4">
                <div class="pricing-header">
                    <h3>Custom</h3>
                    <div class="pricing-price">€1450+</div>
                    <div class="pricing-subtitle">Индивидуальное решение</div>
                </div>
                <div class="pricing-features">
                    <ul>
                        <li>Неограниченный поиск</li>
                        <li>Полный цикл рекрутинга</li>
                        <li>Персональный менеджер</li>
                        <li>Настройка процесса под клиента</li>
                        <li>Онбординг поддержка</li>
                        <li>Аналитика и отчетность</li>
                        <li>Гарантия замены 90 дней</li>
                        <li>Консультации по HR</li>
                        <li>24/7 поддержка</li>
                    </ul>
                </div>
                <a href="contacts.php" class="btn btn-outline">Обсудить проект</a>
            </div>
        </div>
        
        <div class="pricing-note animate-fade-up delay-5">
            <p>
                * Цены указаны за одну успешную вакансию. 
                Окончательная стоимость зависит от сложности позиции и требований.
            </p>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section" id="process">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Как мы <span class="gradient-text">работаем</span></h2>
            <p class="animate-fade-up delay-1">
                Наш проверенный процесс поиска и отбора кандидатов
            </p>
        </div>
        
        <div class="process-timeline">
            <div class="timeline-item animate-fade-up delay-2">
                <div class="timeline-marker">1</div>
                <div class="timeline-content">
                    <h4>Анализ потребностей</h4>
                    <p>Детальное изучение вакансии, требований и корпоративной культуры</p>
                    <span class="timeline-duration">1-2 дня</span>
                </div>
            </div>
            
            <div class="timeline-item animate-fade-up delay-3">
                <div class="timeline-marker">2</div>
                <div class="timeline-content">
                    <h4>Sourcing и поиск</h4>
                    <p>Активный поиск кандидатов в базах данных и профессиональных сетях</p>
                    <span class="timeline-duration">3-5 дней</span>
                </div>
            </div>
            
            <div class="timeline-item animate-fade-up delay-4">
                <div class="timeline-marker">3</div>
                <div class="timeline-content">
                    <h4>Скрининг и интервью</h4>
                    <p>Предварительные интервью и проверка технических навыков</p>
                    <span class="timeline-duration">2-3 дня</span>
                </div>
            </div>
            
            <div class="timeline-item animate-fade-up delay-5">
                <div class="timeline-marker">4</div>
                <div class="timeline-content">
                    <h4>Презентация кандидатов</h4>
                    <p>Предоставление детальных профилей лучших кандидатов</p>
                    <span class="timeline-duration">1 день</span>
                </div>
            </div>
            
            <div class="timeline-item animate-fade-up delay-6">
                <div class="timeline-marker">5</div>
                <div class="timeline-content">
                    <h4>Поддержка найма</h4>
                    <p>Помощь в переговорах, оформлении и адаптации нового сотрудника</p>
                    <span class="timeline-duration">Ongoing</span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="animate-fade-up">Готовы найти <span class="gradient-text">лучших кандидатов</span>?</h2>
            <p class="animate-fade-up delay-1">
                Свяжитесь с нами сегодня и получите бесплатную консультацию по подбору IT-специалистов
            </p>
            <div class="cta-buttons animate-fade-up delay-2">
                <a href="contacts.php" class="btn btn-primary btn-large">Получить консультацию</a>
                <a href="tel:+37060123456" class="btn btn-secondary btn-large">+370 601 23456</a>
            </div>
        </div>
    </div>
</section>

<style>
/* Services Page Specific Styles */
.services-hero {
    padding: 120px 0 80px;
    background: var(--gradient-light);
    text-align: center;
}

.services-hero h1 {
    font-size: 48px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 24px;
    color: var(--primary-dark);
}

.services-hero p {
    font-size: 20px;
    color: var(--text-secondary);
    margin-bottom: 40px;
    max-width: 600px;
    margin-left: auto;
    margin-right: auto;
}

.services-nav {
    display: flex;
    justify-content: center;
    gap: 24px;
    flex-wrap: wrap;
}

.service-nav-link {
    padding: 12px 24px;
    background: var(--white);
    color: var(--primary-dark);
    text-decoration: none;
    border-radius: var(--radius-medium);
    font-weight: var(--font-weight-medium);
    transition: all var(--transition-fast);
    box-shadow: var(--shadow-soft);
}

.service-nav-link:hover {
    background: var(--primary-amber);
    transform: translateY(-2px);
    box-shadow: var(--shadow-medium);
}

.service-detail {
    padding: 80px 0;
    background: var(--white);
}

.service-detail.alt {
    background: var(--neutral-light);
}

.service-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
    align-items: center;
}

.service-text h2 {
    font-size: 40px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 24px;
    color: var(--primary-dark);
}

.service-text p {
    font-size: 18px;
    color: var(--text-secondary);
    margin-bottom: 40px;
    line-height: 1.6;
}

.service-features h4 {
    font-size: 20px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 24px;
    color: var(--primary-dark);
}

.features-grid {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 24px;
    margin-bottom: 40px;
}

.feature-item {
    display: flex;
    gap: 16px;
    align-items: flex-start;
}

.feature-icon {
    font-size: 24px;
    width: 48px;
    height: 48px;
    background: var(--gradient-light);
    border-radius: var(--radius-medium);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
}

.feature-content h5 {
    font-size: 16px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 4px;
    color: var(--primary-dark);
}

.feature-content p {
    font-size: 14px;
    color: var(--text-secondary);
    line-height: 1.4;
    margin: 0;
}

.service-tools h4 {
    font-size: 20px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 16px;
    color: var(--primary-dark);
}

.tools-list {
    display: flex;
    flex-wrap: wrap;
    gap: 8px;
}

.tool-tag {
    padding: 6px 12px;
    background: var(--primary-amber);
    color: var(--primary-dark);
    border-radius: var(--radius-small);
    font-size: 14px;
    font-weight: var(--font-weight-medium);
}

.service-image img {
    width: 100%;
    height: auto;
    border-radius: var(--radius-large);
    box-shadow: var(--shadow-medium);
}

.pricing-section {
    padding: 80px 0;
    background: var(--gradient-light);
}

.pricing-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(320px, 1fr));
    gap: 32px;
    margin-bottom: 40px;
}

.pricing-card {
    background: var(--white);
    border-radius: var(--radius-large);
    padding: 40px 32px;
    text-align: center;
    position: relative;
    transition: all var(--transition-medium);
    box-shadow: var(--shadow-soft);
}

.pricing-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-medium);
}

.pricing-card.featured {
    border: 2px solid var(--primary-amber);
    transform: scale(1.05);
}

.pricing-badge {
    position: absolute;
    top: -12px;
    left: 50%;
    transform: translateX(-50%);
    background: var(--gradient-primary);
    color: var(--primary-dark);
    padding: 8px 24px;
    border-radius: var(--radius-large);
    font-size: 14px;
    font-weight: var(--font-weight-medium);
}

.pricing-header h3 {
    font-size: 28px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 16px;
    color: var(--primary-dark);
}

.pricing-price {
    font-size: 48px;
    font-weight: var(--font-weight-bold);
    color: var(--primary-amber);
    margin-bottom: 8px;
}

.pricing-subtitle {
    color: var(--text-secondary);
    margin-bottom: 32px;
    font-size: 16px;
}

.pricing-features ul {
    list-style: none;
    text-align: left;
    margin-bottom: 32px;
}

.pricing-features li {
    padding: 12px 0;
    border-bottom: 1px solid var(--neutral-medium);
    position: relative;
    padding-left: 24px;
}

.pricing-features li::before {
    content: '✓';
    position: absolute;
    left: 0;
    color: var(--primary-amber);
    font-weight: var(--font-weight-bold);
}

.pricing-note {
    text-align: center;
    margin-top: 32px;
}

.pricing-note p {
    color: var(--text-secondary);
    font-size: 14px;
    font-style: italic;
}

.process-section {
    padding: 80px 0;
    background: var(--white);
}

.process-timeline {
    max-width: 800px;
    margin: 0 auto;
    position: relative;
}

.process-timeline::before {
    content: '';
    position: absolute;
    left: 30px;
    top: 0;
    bottom: 0;
    width: 2px;
    background: var(--primary-amber);
}

.timeline-item {
    display: flex;
    gap: 32px;
    margin-bottom: 40px;
    position: relative;
}

.timeline-marker {
    width: 60px;
    height: 60px;
    background: var(--gradient-primary);
    color: var(--primary-dark);
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 20px;
    font-weight: var(--font-weight-bold);
    flex-shrink: 0;
    z-index: 2;
    position: relative;
}

.timeline-content {
    background: var(--neutral-light);
    padding: 24px;
    border-radius: var(--radius-medium);
    flex: 1;
    transition: all var(--transition-medium);
}

.timeline-content:hover {
    background: var(--white);
    box-shadow: var(--shadow-soft);
}

.timeline-content h4 {
    font-size: 20px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 8px;
    color: var(--primary-dark);
}

.timeline-content p {
    color: var(--text-secondary);
    margin-bottom: 12px;
    line-height: 1.6;
}

.timeline-duration {
    font-size: 12px;
    color: var(--primary-amber);
    font-weight: var(--font-weight-medium);
    text-transform: uppercase;
    letter-spacing: 0.5px;
}

/* Responsive Design for Services Page */
@media (max-width: 1024px) {
    .service-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .features-grid {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .services-hero h1 {
        font-size: 36px;
    }
    
    .services-nav {
        flex-direction: column;
        align-items: center;
    }
    
    .service-nav-link {
        width: 200px;
        text-align: center;
    }
    
    .service-text h2 {
        font-size: 32px;
    }
    
    .pricing-card.featured {
        transform: none;
    }
    
    .process-timeline::before {
        display: none;
    }
    
    .timeline-item {
        flex-direction: column;
        text-align: center;
        gap: 16px;
    }
}

@media (max-width: 480px) {
    .services-hero h1 {
        font-size: 28px;
    }
    
    .service-text h2 {
        font-size: 28px;
    }
    
    .pricing-card {
        padding: 24px;
    }
    
    .pricing-price {
        font-size: 36px;
    }
}
</style>

<?php include 'partials/footer.php'; ?>