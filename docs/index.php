<?php
    // 1. Get the absolute file system path to the directory where THIS file (index.php) resides.
    // e.g., /home/username/public_html
    $current_dir = __DIR__;

    // 2. Get the path to the main hosting account root directory.
    // This moves UP one level from /public_html/ to /home/username/
    $root_dir = dirname($current_dir);
    require $root_dir.'/src/env.php';

    $whatsapp = getenv("WHATSAPP");
?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aualine - Мы превращаем смог в краску</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="container">
            <div class="nav-brand">Aualine</div>
            <ul class="nav-menu">
                <li><a href="#home">Главная</a></li>
                <li><a href="#catalog">Каталог</a></li>
                <li><a href="#about">О нас</a></li>
                <li><a href="#contacts">Контакты</a></li>
            </ul>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="container">
            <div class="hero-badge">
                <svg width="20" height="20" viewBox="0 0 20 20" fill="currentColor">
                    <path d="M10 2l2.5 5 5.5.5-4 4 1 5.5-5-2.5-5 2.5 1-5.5-4-4 5.5-.5z"/>
                </svg>
                <span>Технология будущего</span>
            </div>
            <h1 class="hero-title">
                <span class="hero-title-line">Мы превращаем</span>
                <span class="hero-title-highlight">смог в краску</span>
            </h1>
            <p class="hero-subtitle">
                Aualine — экологичные тонеры и краски для принтерных картриджей, созданные из очищенного смога. Будущее начинается здесь.
            </p>
            <div class="hero-buttons">
                <a class="btn btn-primary" href="#catalog">
                    Купить тонеры
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                        <path d="M5 10h10M10 5l5 5-5 5"/>
                    </svg>
                </a>
                <a class="btn btn-secondary" href="#about">О технологии</a>
            </div>
        </div>
        <div class="hero-bg"></div>
    </section>

    <!-- Stats Section -->
    <section class="stats">
        <div class="container">
            <div class="stat-item">
                <div class="stat-number" data-target="50">0</div>
                <div class="stat-label">Очищено воздуха</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="10000">0</div>
                <div class="stat-label">Довольных клиентов</div>
            </div>
            <div class="stat-item">
                <div class="stat-number" data-target="100">0</div>
                <div class="stat-label">Эко-технология</div>
            </div>
            <div class="stat-item">
                <div class="stat-text">24/7</div>
                <div class="stat-label">Поддержка</div>
            </div>
        </div>
    </section>

    <!-- Products Section -->
    <section id="catalog" class="products">
        <div class="container">
            <h2 class="section-title">Наши <span class="highlight">продукты</span></h2>
            <p class="section-subtitle">Экологичные решения для вашего бизнеса. Качество и забота о планете.</p>

            <div class="products-grid">
                <div class="product-card">
                    <div class="product-badge available">В наличии</div>
                    <div class="product-icon">
                        <!-- <img src="assets/img/IMG_9767.PNG" width="60" height="80" alt=""> -->
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
                            <path d="M20 5c-2 0-4 1-5 3-1 1-2 3-2 5s1 4 2 5c1 2 3 3 5 3s4-1 5-3c1-1 2-3 2-5s-1-4-2-5c-1-2-3-3-5-3zm0 25c-8 0-15 4-15 8v2h30v-2c0-4-7-8-15-8z"/>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Эко-тонер Aualine Black</h3>
                        <p class="product-category">Тонеры</p>
                        <p class="product-description">Универсальный чёрный тонер из переработанного смога</p>
                    </div>
                    <div class="product-price">2 500 ₸</div>
                    <a class="btn btn-primary btn-block" target="_blank" href="https://wa.me/<?=$whatsapp?>?text=Здравствуйте%2C%20я%20хочу%20купить%20Эко-тонер%20AuaLine.%20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart h-5 w-5">
                            <circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Купить
                    </a>
                </div>

                <div class="product-card">
                    <div class="product-badge available">В наличии</div>
                    <div class="product-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
                            <path d="M30 15H25V10C25 7.24 22.76 5 20 5C17.24 5 15 7.24 15 10V15H10V35H30V15ZM20 25C18.34 25 17 23.66 17 22C17 20.34 18.34 19 20 19C21.66 19 23 20.34 23 22C23 23.66 21.66 25 20 25ZM22 15H18V10C18 8.9 18.9 8 20 8C21.1 8 22 8.9 22 10V15Z"/>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Картридж AUA-X200</h3>
                        <p class="product-category">Картриджи</p>
                        <p class="product-description">Премиум картридж с увеличенным ресурсом</p>
                    </div>
                    <div class="product-price">8 500 ₸</div>
                    <a class="btn btn-primary btn-block" target="_blank" href="https://wa.me/<?=$whatsapp?>?text=Здравствуйте%2C%20я%20хочу%20купить%20Картридж%20AUA-X200.%20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart h-5 w-5">
                            <circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Купить
                    </a>
                </div>

                <div class="product-card">
                    <div class="product-badge available">В наличии</div>
                    <div class="product-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
                            <path d="M32 8H8C5.8 8 4 9.8 4 12V28C4 30.2 5.8 32 8 32H32C34.2 32 36 30.2 36 28V12C36 9.8 34.2 8 32 8ZM32 28H8V16H32V28ZM32 14H8V12H32V14Z"/>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Цветная краска Lime Series</h3>
                        <p class="product-category">Эко-краска</p>
                        <p class="product-description">Яркие цвета на основе чистых технологий</p>
                    </div>
                    <div class="product-price">3 200 ₸</div>
                    <a class="btn btn-primary btn-block" target="_blank" href="https://wa.me/<?=$whatsapp?>?text=Здравствуйте%2C%20я%20хочу%20купить%20Эко-краску%20Lime%20Series.%20">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shopping-cart h-5 w-5">
                            <circle cx="8" cy="21" r="1"></circle><circle cx="19" cy="21" r="1"></circle>
                            <path d="M2.05 2.05h2l2.66 12.42a2 2 0 0 0 2 1.58h9.78a2 2 0 0 0 1.95-1.57l1.65-7.43H5.12"></path>
                        </svg>
                        Купить
                    </a>
                </div>

                <div class="product-card">
                    <div class="product-badge coming-soon">Скоро</div>
                    <div class="product-icon">
                        <svg width="40" height="40" viewBox="0 0 40 40" fill="currentColor">
                            <path d="M20 8L12 12V17C12 22.5 15.8 27.6 21 29C26.2 27.6 30 22.5 30 17V12L20 8ZM20 19.5C18.6 19.5 17.5 18.4 17.5 17C17.5 15.6 18.6 14.5 20 14.5C21.4 14.5 22.5 15.6 22.5 17C22.5 18.4 21.4 19.5 20 19.5Z"/>
                        </svg>
                    </div>
                    <div class="product-info">
                        <h3 class="product-name">Комплект для офиса</h3>
                        <p class="product-category">Оборудование</p>
                        <p class="product-description">Полный набор для эффективной работы</p>
                    </div>
                    <div class="product-price">25 000 ₸</div>
                    <a class="btn btn-secondary btn-block coming-soon" target="_blank" href="https://wa.me/<?=$whatsapp?>?text=Здравствуйте%2C%20я%20хочу%20купить%20Полный%20комплект.%20">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" stroke="currentColor">
                            <path d="M10 3v14M17 10H3"/>
                        </svg>
                        Купить
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Technology Section -->
    <section id="about" class="technology">
        <div class="container">
            <h2 class="section-title">Наша <span class="highlight">технология</span></h2>
            <p class="section-subtitle">Мы используем передовые научные разработки для создания экологически чистых продуктов нового поколения</p>

            <div class="tech-grid">
                <div class="tech-card">
                    <div class="tech-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="currentColor">
                            <path d="M24 4L18 10L24 16L30 10L24 4ZM12 12L6 18L12 24L18 18L12 12ZM36 12L30 18L36 24L42 18L36 12ZM24 20L18 26L24 32L30 26L24 20ZM12 28L6 34L12 40L18 34L12 28ZM36 28L30 34L36 40L42 34L36 28ZM24 36L18 42L24 48L30 42L24 36Z"/>
                        </svg>
                    </div>
                    <h3 class="tech-title">Переработка смога</h3>
                    <p class="tech-description">Инновационная технология превращает вредные частицы смога в высококачественную краску</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="currentColor">
                            <path d="M12 4L4 12L12 40L24 44L36 40L44 12L36 4L24 8L12 4ZM24 16C28.4 16 32 19.6 32 24C32 28.4 28.4 32 24 32C19.6 32 16 28.4 16 24C16 19.6 19.6 16 24 16Z"/>
                        </svg>
                    </div>
                    <h3 class="tech-title">100% экологично</h3>
                    <p class="tech-description">Каждый продукт способствует очистке воздуха и сокращению углеродного следа</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="currentColor">
                            <path d="M24 4L4 14V24C4 36 12 46.8 24 48C36 46.8 44 36 44 24V14L24 4ZM20 34L12 26L15.4 22.6L20 27.2L32.6 14.6L36 18L20 34Z"/>
                        </svg>
                    </div>
                    <h3 class="tech-title">Высокое качество</h3>
                    <p class="tech-description">Наши тонеры не уступают традиционным, обеспечивая яркую и четкую печать</p>
                </div>

                <div class="tech-card">
                    <div class="tech-icon">
                        <svg width="48" height="48" viewBox="0 0 48 48" fill="currentColor">
                            <path d="M24 4C12.96 4 4 12.96 4 24C4 35.04 12.96 44 24 44C35.04 44 44 35.04 44 24C44 12.96 35.04 4 24 4ZM22 34L14 26L17.4 22.6L22 27.2L30.6 18.6L34 22L22 34Z"/>
                        </svg>
                    </div>
                    <h3 class="tech-title">Сертифицировано</h3>
                    <p class="tech-description">Продукция соответствует международным стандартам качества и безопасности</p>
                </div>
            </div>

            <!-- How it works -->
            <div class="how-it-works">
                <h3 class="how-title">Как это работает?</h3>
                <div class="how-content">
                    <p>Наша запатентованная технология использует многоступенчатую систему фильтрации и химической обработки для извлечения углеродных частиц из загрязнённого воздуха.</p>
                    <p>Эти частицы проходят процесс очистки, стабилизации и превращаются в пигменты высочайшего качества, которые затем используются для производства тонеров и красок.</p>
                    <p class="result-text">Результат: экологически чистый продукт, который помогает очищать атмосферу и обеспечивает превосходное качество печати.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="contacts" class="contact">
        <div class="container">
            <h2 class="section-title">Свяжитесь<span class="highlight"> с нами</span></h2>
            <p class="section-subtitle">Есть вопросы или предложения? Мы всегда рады помочь!</p>

            <div class="contact-grid">
                <ul class="contact-list">
                    <li class="contact-item">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 32 32" fill="currentColor">
                                    <path d="M28.516 7.167H3.482L16 14.275l12.516-7.108zM16.74 17.303a1.494 1.494 0 0 1-1.48 0L2.5 10.06v14.773h27V10.06l-12.76 7.243z"/>
                                </svg>
                            </div>
                            <div class="contact-info">
                                <h3 class="contact-category">Email</h3>
                                <p class="contact-description">info@aualine.kz</p>
                            </div>
                        </div>
                    </li>
                    <li class="contact-item">
                        <a href="https://wa.me/<?=$whatsapp?>?" target="_blank" rel="noopener noreferrer" style="text-decoration: none; color: inherit;">
                            <div class="contact-card">
                                <div class="contact-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M8.016,12.271A4.818,4.818,0,0,1,7,9.709a2.777,2.777,0,0,1,.867-2.066.911.911,0,0,1,.661-.31c.165,0,.33,0,.475.009s.356-.058.557.425.7,1.715.764,1.839a.453.453,0,0,1,.02.433,1.694,1.694,0,0,1-.247.414c-.124.144-.261.323-.372.433s-.253.258-.109.506A7.474,7.474,0,0,0,11,13.107a6.778,6.778,0,0,0,1.992,1.229c.248.124.393.1.537-.062s.619-.723.784-.971.331-.206.558-.124,1.445.682,1.692.806.413.186.475.289a2.072,2.072,0,0,1-.144,1.178,2.553,2.553,0,0,1-1.672,1.177,3.389,3.389,0,0,1-1.561-.1,14.282,14.282,0,0,1-1.412-.521A11.043,11.043,0,0,1,8.016,12.271ZM2.045,22l1.406-5.136a9.914,9.914,0,1,1,8.591,4.964h0A9.918,9.918,0,0,1,7.3,20.622ZM3.8,11.91a8.217,8.217,0,0,0,1.259,4.384l.2.312-.832,3.04,3.119-.818.3.178a8.223,8.223,0,0,0,4.194,1.148h0A8.24,8.24,0,1,0,3.8,11.91Z"/>
                                    </svg>
                                </div>
                                <div class="contact-info">
                                    <h3 class="contact-category">Телефон</h3>
                                    <p class="contact-description">+7 (700) 123-45-67</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    <li class="contact-item">
                        <div class="contact-card">
                            <div class="contact-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M10 20S3 10.87 3 7a7 7 0 1 1 14 0c0 3.87-7 13-7 13zm0-11a2 2 0 1 0 0-4a2 2 0 0 0 0 4z"/>
                                </svg>
                            </div>
                            <div class="contact-info">
                                <h3 class="contact-category">Адрес</h3>
                                <p class="contact-description">г. Алматы, пр. Назарбаева 100</p>
                            </div>
                        </div>
                    </li>
                </ul>
                
                <form action="contact_proxy.php" class="contact-form" method="post">
                    <h3 class="contact-form-title">Отправить сообщение</h3>
                    <p class="contact-form-subtitle">Заполните форму и мы свяжемся с вами в течение 24 часов</p>
                    <div class="contact-form-group">
                        <div class="contact-form-item">
                            <label class="contact-form-label" for="name">Имя</label>
                            <input class="contact-form-input" id="name" type="text" name="name" placeholder="Ваше имя" required>
                        </div>
                        <div class="contact-form-item">
                            <label class="contact-form-label" for="email">Email</label>
                            <input class="contact-form-input" id="email" type="email" name="email" placeholder="your@email.com" required>
                        </div>
                    </div>
                    <div class="contact-form-item">
                        <label class="contact-form-label" for="theme">Тема</label>
                        <input class="contact-form-input" id="theme" type="text" name="theme" placeholder="О чём вы хотите узнать?" required>
                    </div>
                    <div class="contact-form-item">
                        <label class="contact-form-label" for="message">Сообщение</label>
                        <textarea class="contact-form-input" rows="8" name="message" id="message" placeholder="Ваше сообщение..."></textarea>  
                    </div>
                    <button class="btn btn-block btn-primary" type="submit">Отправить сообщение</button>
                </form>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div>
                    <div class="footer-brand">Aualine</div>
                    <p class="footer-text">Технология будущего для чистой планеты</p>
                </div>
                <nav class="footer-contacts">
                    <div>
                        <h4>Продукты</h4>
                        <ul class="footer-nav">
                            <li><a href="#catalog">Тонеры</a></li>
                            <li><a href="#catalog">Картриджи</a></li>
                            <li><a href="#catalog">Эко-краска</a></li>
                            <li><a href="#catalog">Оборудование</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Компания</h4>
                        <ul class="footer-nav">
                            <li><a href="#about">О нас</a></li>
                            <li><a href="#about">Технология</a></li>
                            <li><a href="#contacts">Контакты</a></li>
                            <li><a href="#about">Партнёрство</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4>Мы в соцсетях</h4>
                        <ul class="footer-media footer-nav">
                            <li>
                                <a href="https://www.instagram.com/aualine.kz/" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" x2="17.51" y1="6.5" y2="6.5"></line>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.linkedin.com/company/aualine/" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                        <rect width="4" height="12" x="2" y="9"></rect>
                                        <circle cx="4" cy="4" r="2"></circle>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://wa.me/<?=$whatsapp?>?text=Здравствуйте%2C%20я%20хочу%20купить%20" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M8.016,12.271A4.818,4.818,0,0,1,7,9.709a2.777,2.777,0,0,1,.867-2.066.911.911,0,0,1,.661-.31c.165,0,.33,0,.475.009s.356-.058.557.425.7,1.715.764,1.839a.453.453,0,0,1,.02.433,1.694,1.694,0,0,1-.247.414c-.124.144-.261.323-.372.433s-.253.258-.109.506A7.474,7.474,0,0,0,11,13.107a6.778,6.778,0,0,0,1.992,1.229c.248.124.393.1.537-.062s.619-.723.784-.971.331-.206.558-.124,1.445.682,1.692.806.413.186.475.289a2.072,2.072,0,0,1-.144,1.178,2.553,2.553,0,0,1-1.672,1.177,3.389,3.389,0,0,1-1.561-.1,14.282,14.282,0,0,1-1.412-.521A11.043,11.043,0,0,1,8.016,12.271ZM2.045,22l1.406-5.136a9.914,9.914,0,1,1,8.591,4.964h0A9.918,9.918,0,0,1,7.3,20.622ZM3.8,11.91a8.217,8.217,0,0,0,1.259,4.384l.2.312-.832,3.04,3.119-.818.3.178a8.223,8.223,0,0,0,4.194,1.148h0A8.24,8.24,0,1,0,3.8,11.91Z"/>
                                    </svg>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.tiktok.com/@aualine.kz" target="_blank" rel="noopener noreferrer">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g>
                                            <path d="M12.944,1.611v14.167   c0,1.565-1.269,2.833-2.833,2.833h0c-1.565,0-2.833-1.269-2.833-2.833v0c0-1.565,1.269-2.833,2.833-2.833h0V9.167h0   c-3.651,0-6.611,2.96-6.611,6.611v0c0,3.651,2.96,6.611,6.611,6.611h0c3.651,0,6.611-2.96,6.611-6.611V9.167l0.199,0.1   c1.111,0.556,2.336,0.845,3.578,0.845h0V6.333l-0.113-0.028c-2.154-0.538-3.665-2.474-3.665-4.694v0H12.944z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="1.8889"/>
                                        </g>
                                    </svg>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="footer-bottom">
                <p>&copy; 2025 Aualine. Все права защищены.</p>
                <span>
                    <a href="#">Политика конфиденциальности</a>
                    <a href="#">Условия использования</a>
                </span>
            </div>
        </div>
    </footer>

    <script src="./assets/js/script.js"></script>
</body>
</html>
