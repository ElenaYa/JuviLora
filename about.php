<?php
$page_title = "О нас - JuviLora | Рекрутинг IT-специалистов";
$page_description = "Узнайте больше о JuviLora - ведущей рекрутинговой компании в области IT. Наша команда, миссия и подход к поиску лучших талантов.";
$current_page = "about";
include 'partials/header.php';
?>

<!-- About Hero Section -->
<section class="about-hero" id="about-hero">
    <div class="container">
        <div class="about-hero-content">
            <div class="about-hero-text">
                <h1 class="animate-fade-up">
                    О компании <span class="gradient-text">JuviLora</span>
                </h1>
                <p class="animate-fade-up delay-1">
                    Мы — команда профессионалов, специализирующихся на поиске и подборе 
                    IT-талантов в Литве. С 2019 года помогаем компаниям находить лучших 
                    специалистов, а кандидатам — их идеальную работу.
                </p>
                <div class="about-stats animate-fade-up delay-2">
                    <div class="stat-item">
                        <div class="stat-number">500+</div>
                        <div class="stat-label">Успешных размещений</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">150+</div>
                        <div class="stat-label">Партнерских компаний</div>
                    </div>
                    <div class="stat-item">
                        <div class="stat-number">6</div>
                        <div class="stat-label">Лет на рынке</div>
                    </div>
                </div>
            </div>
            <div class="about-hero-image animate-fade-up delay-3">
                <img src="img/about-team.webp" alt="Команда JuviLora" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision Section -->
<section class="mission-vision" id="mission">
    <div class="container">
        <div class="mission-content">
            <div class="mission-card glass-card animate-fade-up">
                <div class="mission-icon">
                    <img src="img/icon-mission.webp" alt="Миссия" loading="lazy">
                </div>
                <h3>Наша миссия</h3>
                <p>
                    Соединять талантливых IT-специалистов с инновационными компаниями, 
                    создавая устойчивые партнерства, которые способствуют росту 
                    технологической экосистемы Литвы.
                </p>
            </div>
            
            <div class="vision-card glass-card animate-fade-up delay-1">
                <div class="vision-icon">
                    <img src="img/icon-vision.webp" alt="Видение" loading="lazy">
                </div>
                <h3>Наше видение</h3>
                <p>
                    Стать ведущей рекрутинговой компанией в Балтии, известной своим 
                    персональным подходом, глубоким пониманием IT-рынка и высочайшим 
                    качеством сервиса.
                </p>
            </div>
            
            <div class="values-card glass-card animate-fade-up delay-2">
                <div class="values-icon">
                    <img src="img/icon-values.webp" alt="Ценности" loading="lazy">
                </div>
                <h3>Наши ценности</h3>
                <p>
                    Прозрачность, профессионализм, индивидуальный подход к каждому 
                    клиенту и кандидату. Мы верим в силу человеческих отношений 
                    и долгосрочные партнерства.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team-section" id="team">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Наша <span class="gradient-text">команда</span></h2>
            <p class="animate-fade-up delay-1">
                Познакомьтесь с профессионалами, которые делают JuviLora лидером в области IT-рекрутинга
            </p>
        </div>
        
        <div class="team-grid">
            <div class="team-member animate-fade-up delay-2">
                <div class="member-photo">
                    <img src="img/team-anna.webp" alt="Анна Петрова" loading="lazy">
                </div>
                <div class="member-info">
                    <h4>Анна Петрова</h4>
                    <div class="member-position">Генеральный директор</div>
                    <p>
                        15+ лет опыта в HR и рекрутинге. Специализируется на поиске 
                        топ-менеджеров и технических лидеров.
                    </p>
                    <div class="member-social">
                        <a href="#" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="team-member animate-fade-up delay-3">
                <div class="member-photo">
                    <img src="img/team-michael.webp" alt="Михаил Козлов" loading="lazy">
                </div>
                <div class="member-info">
                    <h4>Михаил Козлов</h4>
                    <div class="member-position">Ведущий рекрутер</div>
                    <p>
                        Экспертиза в подборе разработчиков и DevOps-инженеров. 
                        Глубокое понимание современных технологий.
                    </p>
                    <div class="member-social">
                        <a href="#" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            
            <div class="team-member animate-fade-up delay-4">
                <div class="member-photo">
                    <img src="img/team-elena.webp" alt="Елена Смирнова" loading="lazy">
                </div>
                <div class="member-info">
                    <h4>Елена Смирнова</h4>
                    <div class="member-position">Старший рекрутер</div>
                    <p>
                        Специализируется на поиске дизайнеров и UX/UI-специалистов. 
                        Большой опыт работы с креативными профессиями.
                    </p>
                    <div class="member-social">
                        <a href="#" aria-label="LinkedIn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Process Section -->
<section class="process-section" id="process">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Наш <span class="gradient-text">процесс</span></h2>
            <p class="animate-fade-up delay-1">
                Проверенная методология поиска и отбора IT-специалистов
            </p>
        </div>
        
        <div class="process-steps">
            <div class="process-step animate-fade-up delay-2">
                <div class="step-number">01</div>
                <div class="step-content">
                    <h4>Анализ требований</h4>
                    <p>
                        Детальное изучение ваших потребностей, корпоративной культуры 
                        и технических требований к позиции.
                    </p>
                </div>
            </div>
            
            <div class="process-step animate-fade-up delay-3">
                <div class="step-number">02</div>
                <div class="step-content">
                    <h4>Поиск кандидатов</h4>
                    <p>
                        Активный поиск в нашей базе данных, профессиональных сетях 
                        и через референсы в IT-сообществе.
                    </p>
                </div>
            </div>
            
            <div class="process-step animate-fade-up delay-4">
                <div class="step-number">03</div>
                <div class="step-content">
                    <h4>Предварительный отбор</h4>
                    <p>
                        Проведение собеседований, проверка технических навыков 
                        и соответствия корпоративной культуре.
                    </p>
                </div>
            </div>
            
            <div class="process-step animate-fade-up delay-5">
                <div class="step-number">04</div>
                <div class="step-content">
                    <h4>Презентация кандидатов</h4>
                    <p>
                        Предоставление детальных профилей кандидатов с рекомендациями 
                        и результатами технических интервью.
                    </p>
                </div>
            </div>
            
            <div class="process-step animate-fade-up delay-6">
                <div class="step-number">05</div>
                <div class="step-content">
                    <h4>Сопровождение сделки</h4>
                    <p>
                        Помощь в переговорах, оформлении документов и адаптации 
                        нового сотрудника в команде.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Achievements Section -->
<section class="achievements-section" id="achievements">
    <div class="container">
        <div class="achievements-content">
            <div class="achievements-text">
                <h2 class="animate-fade-up">Наши <span class="gradient-text">достижения</span></h2>
                <div class="achievement-items">
                    <div class="achievement-item animate-fade-up delay-1">
                        <div class="achievement-icon">🏆</div>
                        <div class="achievement-content">
                            <h4>Лучшая рекрутинговая компания 2023</h4>
                            <p>Награда от Ассоциации IT-компаний Литвы</p>
                        </div>
                    </div>
                    
                    <div class="achievement-item animate-fade-up delay-2">
                        <div class="achievement-icon">⭐</div>
                        <div class="achievement-content">
                            <h4>95% успешных размещений</h4>
                            <p>Высочайший показатель в отрасли</p>
                        </div>
                    </div>
                    
                    <div class="achievement-item animate-fade-up delay-3">
                        <div class="achievement-icon">🤝</div>
                        <div class="achievement-content">
                            <h4>Партнеры ведущих IT-компаний</h4>
                            <p>Работаем с топ-10 IT-компаниями Литвы</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="achievements-image animate-fade-up delay-4">
                <img src="img/awards-office.webp" alt="Офис JuviLora с наградами" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section" id="cta">
    <div class="container">
        <div class="cta-content">
            <h2 class="animate-fade-up">Готовы начать <span class="gradient-text">сотрудничество</span>?</h2>
            <p class="animate-fade-up delay-1">
                Свяжитесь с нами сегодня и узнайте, как мы можем помочь вашей компании найти лучших IT-специалистов
            </p>
            <div class="cta-buttons animate-fade-up delay-2">
                <a href="contacts.php" class="btn btn-primary btn-large">Начать сотрудничество</a>
                <a href="services.php" class="btn btn-secondary btn-large">Наши услуги</a>
            </div>
        </div>
    </div>
</section>

<style>
/* About Page Specific Styles */
.about-hero {
    padding: 100px 0 80px;
    background: var(--gradient-light);
    min-height: 70vh;
    display: flex;
    align-items: center;
}

.about-hero-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.about-hero h1 {
    font-size: 48px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 24px;
    color: var(--primary-dark);
}

.about-hero p {
    font-size: 18px;
    color: var(--text-secondary);
    margin-bottom: 40px;
    line-height: 1.6;
}

.about-stats {
    display: flex;
    gap: 40px;
}

.about-hero-image img {
    width: 100%;
    height: auto;
    border-radius: var(--radius-large);
    box-shadow: var(--shadow-medium);
}

.mission-vision {
    padding: 80px 0;
    background: var(--white);
}

.mission-content {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 32px;
}

.mission-card,
.vision-card,
.values-card {
    background: var(--white);
    padding: 40px 32px;
    text-align: center;
    border-radius: var(--radius-large);
    box-shadow: var(--shadow-soft);
    transition: all var(--transition-medium);
}

.mission-card:hover,
.vision-card:hover,
.values-card:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-medium);
}

.mission-icon,
.vision-icon,
.values-icon {
    width: 80px;
    height: 80px;
    margin: 0 auto 24px;
    background: var(--gradient-light);
    border-radius: var(--radius-medium);
    display: flex;
    align-items: center;
    justify-content: center;
}

.mission-icon img,
.vision-icon img,
.values-icon img {
    width: 48px;
    height: 48px;
}

.mission-card h3,
.vision-card h3,
.values-card h3 {
    font-size: 24px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 16px;
    color: var(--primary-dark);
}

.team-section {
    padding: 80px 0;
    background: var(--gradient-light);
}

.team-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 32px;
}

.team-member {
    background: var(--white);
    border-radius: var(--radius-large);
    padding: 32px;
    text-align: center;
    transition: all var(--transition-medium);
    box-shadow: var(--shadow-soft);
}

.team-member:hover {
    transform: translateY(-8px);
    box-shadow: var(--shadow-medium);
}

.member-photo {
    width: 120px;
    height: 120px;
    margin: 0 auto 24px;
    border-radius: 50%;
    overflow: hidden;
    border: 4px solid var(--primary-amber);
}

.member-photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

.member-info h4 {
    font-size: 20px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 8px;
    color: var(--primary-dark);
}

.member-position {
    color: var(--primary-amber);
    font-weight: var(--font-weight-medium);
    margin-bottom: 16px;
}

.member-info p {
    color: var(--text-secondary);
    margin-bottom: 20px;
    line-height: 1.6;
}

.member-social a {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 40px;
    height: 40px;
    background: var(--gradient-light);
    border-radius: var(--radius-medium);
    color: var(--primary-dark);
    transition: all var(--transition-fast);
}

.member-social a:hover {
    background: var(--primary-amber);
    transform: translateY(-2px);
}

.process-section {
    padding: 80px 0;
    background: var(--white);
}

.process-steps {
    display: flex;
    flex-direction: column;
    gap: 32px;
    max-width: 800px;
    margin: 0 auto;
}

.process-step {
    display: flex;
    gap: 32px;
    align-items: flex-start;
    padding: 32px;
    background: var(--neutral-light);
    border-radius: var(--radius-large);
    transition: all var(--transition-medium);
}

.process-step:hover {
    background: var(--white);
    box-shadow: var(--shadow-soft);
}

.step-number {
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
}

.step-content h4 {
    font-size: 20px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 12px;
    color: var(--primary-dark);
}

.step-content p {
    color: var(--text-secondary);
    line-height: 1.6;
}

.achievements-section {
    padding: 80px 0;
    background: var(--gradient-light);
}

.achievements-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 60px;
    align-items: center;
}

.achievements-text h2 {
    font-size: 40px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 40px;
    color: var(--primary-dark);
}

.achievement-item {
    display: flex;
    gap: 20px;
    margin-bottom: 32px;
    align-items: flex-start;
}

.achievement-icon {
    font-size: 32px;
    width: 60px;
    height: 60px;
    background: var(--white);
    border-radius: var(--radius-medium);
    display: flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
    box-shadow: var(--shadow-soft);
}

.achievement-content h4 {
    font-size: 18px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 8px;
    color: var(--primary-dark);
}

.achievement-content p {
    color: var(--text-secondary);
    line-height: 1.6;
}

.achievements-image img {
    width: 100%;
    height: auto;
    border-radius: var(--radius-large);
    box-shadow: var(--shadow-medium);
}

/* Responsive Design for About Page */
@media (max-width: 1024px) {
    .about-hero-content,
    .achievements-content {
        grid-template-columns: 1fr;
        gap: 40px;
        text-align: center;
    }
    
    .about-stats {
        justify-content: center;
    }
}

@media (max-width: 768px) {
    .about-hero h1 {
        font-size: 36px;
    }
    
    .about-stats {
        flex-direction: column;
        gap: 20px;
    }
    
    .process-step {
        flex-direction: column;
        text-align: center;
        gap: 20px;
    }
    
    .achievement-item {
        flex-direction: column;
        text-align: center;
        gap: 16px;
    }
}

@media (max-width: 480px) {
    .about-hero h1 {
        font-size: 28px;
    }
    
    .mission-card,
    .vision-card,
    .values-card,
    .team-member {
        padding: 24px;
    }
}
</style>

<?php include 'partials/footer.php'; ?>