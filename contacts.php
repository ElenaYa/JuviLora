<?php
$page_title = "Контакты - JuviLora | Связаться с нами";
$page_description = "Свяжитесь с JuviLora для консультации по подбору IT-специалистов. Наш офис в Вильнюсе, телефон, email. Оставьте заявку онлайн.";
$current_page = "contacts";
include 'partials/header.php';
?>

<!-- Contacts Hero Section -->
<section class="contacts-hero" id="contacts-hero">
    <div class="container">
        <div class="contacts-hero-content">
            <h1 class="animate-fade-up">
                Свяжитесь с <span class="gradient-text">нами</span>
            </h1>
            <p class="animate-fade-up delay-1">
                Готовы обсудить ваши потребности в IT-специалистах? 
                Мы всегда рады новым проектам и интересным задачам.
            </p>
        </div>
    </div>
</section>

<!-- Contact Info & Form Section -->
<section class="contacts-main" id="contacts-main">
    <div class="container">
        <div class="contacts-content">
            <!-- Contact Information -->
            <div class="contact-info animate-fade-up delay-2">
                <h2>Наши контакты</h2>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <h4>Адрес офиса</h4>
                        <p>Конституциос пр. 12<br>09308 Вильнюс, Литва</p>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <h4>Телефон</h4>
                        <p><a href="tel:+37060123456">+370 601 23456</a></p>
                        <span class="availability">Пн-Пт: 9:00-18:00</span>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M20 4H4c-1.1 0-1.99.9-1.99 2L2 18c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 4l-8 5-8-5V6l8 5 8-5v2z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <h4>Email</h4>
                        <p><a href="mailto:info@juvilora.com">info@juvilora.com</a></p>
                        <span class="availability">Отвечаем в течение 2 часов</span>
                    </div>
                </div>
                
                <div class="contact-item">
                    <div class="contact-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                        </svg>
                    </div>
                    <div class="contact-details">
                        <h4>LinkedIn</h4>
                        <p><a href="https://linkedin.com/company/juvilora" target="_blank">linkedin.com/company/juvilora</a></p>
                        <span class="availability">Профессиональная сеть</span>
                    </div>
                </div>
                
                <div class="office-hours">
                    <h3>Часы работы</h3>
                    <div class="hours-grid">
                        <div class="hour-item">
                            <span class="day">Понедельник - Пятница</span>
                            <span class="time">9:00 - 18:00</span>
                        </div>
                        <div class="hour-item">
                            <span class="day">Суббота</span>
                            <span class="time">10:00 - 15:00</span>
                        </div>
                        <div class="hour-item">
                            <span class="day">Воскресенье</span>
                            <span class="time">Выходной</span>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="contact-form-section animate-fade-up delay-3">
                <div class="form-header">
                    <h2>Напишите нам</h2>
                    <p>Оставьте заявку, и мы свяжемся с вами в ближайшее время для обсуждения ваших потребностей</p>
                </div>
                
                <form class="contact-form glass-card" id="contact-form">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Имя *</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="company">Компания</label>
                            <input type="text" id="company" name="company">
                        </div>
                    </div>
                    
                    <div class="form-row">
                        <div class="form-group">
                            <label for="email">Email *</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Телефон</label>
                            <input type="tel" id="phone" name="phone">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="position">Какую позицию ищете?</label>
                        <select id="position" name="position">
                            <option value="">Выберите специализацию</option>
                            <option value="frontend">Frontend разработчик</option>
                            <option value="backend">Backend разработчик</option>
                            <option value="fullstack">Fullstack разработчик</option>
                            <option value="ui-designer">UI/UX дизайнер</option>
                            <option value="qa-manual">QA Engineer (Manual)</option>
                            <option value="qa-automation">QA Engineer (Automation)</option>
                            <option value="project-manager">Project Manager</option>
                            <option value="scrum-master">Scrum Master</option>
                            <option value="product-owner">Product Owner</option>
                            <option value="devops">DevOps Engineer</option>
                            <option value="other">Другое</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="urgency">Срочность</label>
                        <select id="urgency" name="urgency">
                            <option value="">Выберите срочность</option>
                            <option value="asap">Как можно скорее</option>
                            <option value="1-week">В течение недели</option>
                            <option value="2-weeks">В течение 2 недель</option>
                            <option value="1-month">В течение месяца</option>
                            <option value="flexible">Гибкие сроки</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="budget">Бюджет (EUR)</label>
                        <select id="budget" name="budget">
                            <option value="">Выберите бюджет</option>
                            <option value="400-600">400 - 600 EUR</option>
                            <option value="600-1000">600 - 1000 EUR</option>
                            <option value="1000-1500">1000 - 1500 EUR</option>
                            <option value="1500+">1500+ EUR</option>
                            <option value="discuss">Обсудим индивидуально</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="message">Сообщение *</label>
                        <textarea id="message" name="message" rows="5" required placeholder="Расскажите подробнее о ваших требованиях к кандидату, команде, проекту..."></textarea>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="privacy" name="privacy" required>
                            <span class="checkmark"></span>
                            Я согласен с <a href="privacy.php" target="_blank">политикой конфиденциальности</a> и обработкой персональных данных
                        </label>
                    </div>
                    
                    <div class="form-group checkbox-group">
                        <label class="checkbox-label">
                            <input type="checkbox" id="newsletter" name="newsletter">
                            <span class="checkmark"></span>
                            Хочу получать новости о вакансиях и IT-трендах
                        </label>
                    </div>
                    
                    <button type="submit" class="btn btn-primary btn-large">
                        Отправить заявку
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="map-section" id="map">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Как нас <span class="gradient-text">найти</span></h2>
            <p class="animate-fade-up delay-1">
                Наш офис находится в центре Вильнюса, недалеко от делового квартала
            </p>
        </div>
        
        <div class="map-container animate-fade-up delay-2">
            <div class="map-placeholder">
                <div class="map-content">
                    <div class="map-icon">
                        <svg width="48" height="48" viewBox="0 0 24 24" fill="currentColor">
                            <path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z"/>
                        </svg>
                    </div>
                    <h4>JuviLora Office</h4>
                    <p>Конституциос пр. 12<br>09308 Вильнюс, Литва</p>
                    <a href="https://maps.google.com/?q=Konstitucijos+pr.+12,+Vilnius,+Lithuania" target="_blank" class="btn btn-outline">
                        Открыть в Google Maps
                    </a>
                </div>
            </div>
            
            <div class="location-details">
                <h3>Как добраться</h3>
                <div class="transport-options">
                    <div class="transport-item">
                        <div class="transport-icon">🚌</div>
                        <div class="transport-info">
                            <h5>Общественный транспорт</h5>
                            <p>Автобусы: 1, 2, 33, 88<br>Остановка "Konstitucijos pr."</p>
                        </div>
                    </div>
                    <div class="transport-item">
                        <div class="transport-icon">🚗</div>
                        <div class="transport-info">
                            <h5>На автомобиле</h5>
                            <p>Бесплатная парковка<br>во дворе здания</p>
                        </div>
                    </div>
                    <div class="transport-item">
                        <div class="transport-icon">🚶‍♂️</div>
                        <div class="transport-info">
                            <h5>Пешком</h5>
                            <p>5 минут от ТЦ "Europa"<br>10 минут от Старого города</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section -->
<section class="faq-section" id="faq">
    <div class="container">
        <div class="section-header">
            <h2 class="animate-fade-up">Часто задаваемые <span class="gradient-text">вопросы</span></h2>
        </div>
        
        <div class="faq-list">
            <div class="faq-item animate-fade-up delay-1">
                <div class="faq-question">
                    <h4>Сколько времени занимает поиск кандидата?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Обычно мы находим подходящих кандидатов в течение 10-14 дней. Срок может варьироваться в зависимости от сложности позиции и специфических требований.</p>
                </div>
            </div>
            
            <div class="faq-item animate-fade-up delay-2">
                <div class="faq-question">
                    <h4>Какая гарантия на подобранных кандидатов?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Мы предоставляем гарантию от 30 до 90 дней в зависимости от пакета услуг. Если кандидат не подошел в течение гарантийного периода, мы бесплатно найдем замену.</p>
                </div>
            </div>
            
            <div class="faq-item animate-fade-up delay-3">
                <div class="faq-question">
                    <h4>Работаете ли вы с удаленными кандидатами?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Да, мы подбираем как кандидатов для работы в офисе в Вильнюсе, так и для удаленной работы. У нас есть база талантов по всей Европе.</p>
                </div>
            </div>
            
            <div class="faq-item animate-fade-up delay-4">
                <div class="faq-question">
                    <h4>Какова стоимость ваших услуг?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Стоимость зависит от сложности позиции и пакета услуг. Базовый пакет от €450, профессиональный от €890, индивидуальные решения от €1450. Оплата только за результат.</p>
                </div>
            </div>
            
            <div class="faq-item animate-fade-up delay-5">
                <div class="faq-question">
                    <h4>Можете ли вы помочь стартапу найти команду?</h4>
                    <span class="faq-toggle">+</span>
                </div>
                <div class="faq-answer">
                    <p>Конечно! Мы специализируемся на подборе команд для стартапов и понимаем специфику работы с ограниченным бюджетом и высокими требованиями к качеству.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
/* Contacts Page Specific Styles */
.contacts-hero {
    padding: 120px 0 60px;
    background: var(--gradient-light);
    text-align: center;
}

.contacts-hero h1 {
    font-size: 48px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 24px;
    color: var(--primary-dark);
}

.contacts-hero p {
    font-size: 20px;
    color: var(--text-secondary);
    max-width: 600px;
    margin: 0 auto;
}

.contacts-main {
    padding: 80px 0;
    background: var(--white);
}

.contacts-content {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 80px;
}

.contact-info h2 {
    font-size: 32px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 32px;
    color: var(--primary-dark);
}

.contact-item {
    display: flex;
    gap: 20px;
    margin-bottom: 32px;
    padding: 24px;
    background: var(--neutral-light);
    border-radius: var(--radius-medium);
    transition: all var(--transition-medium);
}

.contact-item:hover {
    background: var(--white);
    box-shadow: var(--shadow-soft);
}

.contact-icon {
    width: 48px;
    height: 48px;
    background: var(--gradient-primary);
    border-radius: var(--radius-medium);
    display: flex;
    align-items: center;
    justify-content: center;
    color: var(--primary-dark);
    flex-shrink: 0;
}

.contact-details h4 {
    font-size: 18px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 8px;
    color: var(--primary-dark);
}

.contact-details p {
    color: var(--text-secondary);
    margin-bottom: 4px;
    line-height: 1.5;
}

.contact-details a {
    color: var(--primary-amber);
    text-decoration: none;
}

.contact-details a:hover {
    text-decoration: underline;
}

.availability {
    font-size: 12px;
    color: var(--text-secondary);
    opacity: 0.8;
}

.office-hours {
    margin-top: 40px;
    padding: 24px;
    background: var(--gradient-light);
    border-radius: var(--radius-medium);
}

.office-hours h3 {
    font-size: 20px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 16px;
    color: var(--primary-dark);
}

.hours-grid {
    display: flex;
    flex-direction: column;
    gap: 8px;
}

.hour-item {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 8px 0;
    border-bottom: 1px solid rgba(255, 196, 0, 0.2);
}

.hour-item:last-child {
    border-bottom: none;
}

.day {
    font-weight: var(--font-weight-medium);
    color: var(--text-primary);
}

.time {
    color: var(--text-secondary);
}

.contact-form-section {
    background: var(--white);
}

.form-header {
    margin-bottom: 32px;
}

.form-header h2 {
    font-size: 32px;
    font-weight: var(--font-weight-bold);
    margin-bottom: 16px;
    color: var(--primary-dark);
}

.form-header p {
    color: var(--text-secondary);
    line-height: 1.6;
}

.contact-form {
    padding: 40px;
    border-radius: var(--radius-large);
    background: rgba(255, 255, 255, 0.8);
    backdrop-filter: blur(10px);
    border: 1px solid rgba(255, 196, 0, 0.1);
}

.form-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
    margin-bottom: 20px;
}

.form-group {
    margin-bottom: 24px;
}

.form-group label {
    display: block;
    margin-bottom: 8px;
    font-weight: var(--font-weight-medium);
    color: var(--text-primary);
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: 12px 16px;
    border: 2px solid var(--neutral-medium);
    border-radius: var(--radius-medium);
    font-size: 16px;
    font-family: inherit;
    transition: border-color var(--transition-fast);
    background: var(--white);
}

.form-group input:focus,
.form-group select:focus,
.form-group textarea:focus {
    outline: none;
    border-color: var(--primary-amber);
}

.form-group textarea {
    resize: vertical;
    min-height: 120px;
}

.checkbox-group {
    margin-bottom: 20px;
}

.checkbox-label {
    display: flex;
    align-items: flex-start;
    gap: 12px;
    cursor: pointer;
    line-height: 1.5;
}

.checkbox-label input[type="checkbox"] {
    display: none;
}

.checkmark {
    width: 20px;
    height: 20px;
    border: 2px solid var(--neutral-medium);
    border-radius: 4px;
    position: relative;
    flex-shrink: 0;
    margin-top: 2px;
    transition: all var(--transition-fast);
}

.checkmark::after {
    content: '';
    position: absolute;
    top: 2px;
    left: 6px;
    width: 4px;
    height: 8px;
    border: solid var(--white);
    border-width: 0 2px 2px 0;
    transform: rotate(45deg);
    opacity: 0;
    transition: opacity var(--transition-fast);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark {
    background: var(--primary-amber);
    border-color: var(--primary-amber);
}

.checkbox-label input[type="checkbox"]:checked + .checkmark::after {
    opacity: 1;
}

.checkbox-label a {
    color: var(--primary-amber);
    text-decoration: none;
}

.checkbox-label a:hover {
    text-decoration: underline;
}

.map-section {
    padding: 80px 0;
    background: var(--gradient-light);
}

.map-container {
    display: grid;
    grid-template-columns: 2fr 1fr;
    gap: 40px;
    margin-top: 40px;
}

.map-placeholder {
    background: var(--white);
    border-radius: var(--radius-large);
    overflow: hidden;
    box-shadow: var(--shadow-medium);
    min-height: 400px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.map-content {
    text-align: center;
    padding: 40px;
}

.map-icon {
    color: var(--primary-amber);
    margin-bottom: 16px;
}

.map-content h4 {
    font-size: 24px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 16px;
    color: var(--primary-dark);
}

.map-content p {
    color: var(--text-secondary);
    margin-bottom: 24px;
    line-height: 1.5;
}

.location-details {
    background: var(--white);
    padding: 32px;
    border-radius: var(--radius-large);
    box-shadow: var(--shadow-soft);
    height: fit-content;
}

.location-details h3 {
    font-size: 24px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 24px;
    color: var(--primary-dark);
}

.transport-options {
    display: flex;
    flex-direction: column;
    gap: 20px;
}

.transport-item {
    display: flex;
    gap: 16px;
    align-items: flex-start;
}

.transport-icon {
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

.transport-info h5 {
    font-size: 16px;
    font-weight: var(--font-weight-semibold);
    margin-bottom: 4px;
    color: var(--primary-dark);
}

.transport-info p {
    color: var(--text-secondary);
    font-size: 14px;
    line-height: 1.4;
}

.faq-section {
    padding: 80px 0;
    background: var(--white);
}

.faq-list {
    max-width: 800px;
    margin: 0 auto;
}

.faq-item {
    border-bottom: 1px solid var(--neutral-medium);
    margin-bottom: 0;
}

.faq-question {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 24px 0;
    cursor: pointer;
    transition: color var(--transition-fast);
}

.faq-question:hover {
    color: var(--primary-amber);
}

.faq-question h4 {
    font-size: 18px;
    font-weight: var(--font-weight-medium);
    color: inherit;
}

.faq-toggle {
    font-size: 24px;
    font-weight: var(--font-weight-bold);
    color: var(--primary-amber);
    transition: transform var(--transition-fast);
}

.faq-item.active .faq-toggle {
    transform: rotate(45deg);
}

.faq-answer {
    max-height: 0;
    overflow: hidden;
    transition: max-height var(--transition-medium);
}

.faq-item.active .faq-answer {
    max-height: 200px;
    padding-bottom: 24px;
}

.faq-answer p {
    color: var(--text-secondary);
    line-height: 1.6;
}

/* Form Validation Styles */
.form-group input.error,
.form-group select.error,
.form-group textarea.error {
    border-color: var(--error);
}

.field-error {
    color: var(--error);
    font-size: 14px;
    margin-top: 4px;
}

/* Responsive Design for Contacts Page */
@media (max-width: 1024px) {
    .contacts-content {
        grid-template-columns: 1fr;
        gap: 60px;
    }
    
    .map-container {
        grid-template-columns: 1fr;
    }
}

@media (max-width: 768px) {
    .contacts-hero h1 {
        font-size: 36px;
    }
    
    .form-row {
        grid-template-columns: 1fr;
    }
    
    .contact-form {
        padding: 24px;
    }
    
    .contact-item {
        flex-direction: column;
        text-align: center;
        gap: 16px;
    }
    
    .hour-item {
        flex-direction: column;
        text-align: center;
        gap: 4px;
    }
}

@media (max-width: 480px) {
    .contacts-hero h1 {
        font-size: 28px;
    }
    
    .contact-info h2,
    .form-header h2 {
        font-size: 24px;
    }
    
    .location-details {
        padding: 20px;
    }
}
</style>

<script>
// FAQ functionality
document.addEventListener('DOMContentLoaded', function() {
    const faqItems = document.querySelectorAll('.faq-item');
    
    faqItems.forEach(item => {
        const question = item.querySelector('.faq-question');
        
        question.addEventListener('click', function() {
            const isActive = item.classList.contains('active');
            
            // Close all other FAQ items
            faqItems.forEach(otherItem => {
                if (otherItem !== item) {
                    otherItem.classList.remove('active');
                }
            });
            
            // Toggle current item
            if (isActive) {
                item.classList.remove('active');
            } else {
                item.classList.add('active');
            }
        });
    });
});
</script>

<?php include 'partials/footer.php'; ?>