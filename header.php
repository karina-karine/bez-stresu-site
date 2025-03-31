<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
        content="✓ Професійна допомога студентам у написанні курсових, дипломних, рефератів. ➤ Досвідчені викладачі ➤ Гарантія якості ➤ Доступні ціни ✎ Працюємо з 2018 року. Звертайтесь!">
    <meta name="keywords"
        content="допомога студентам, написання курсових, написання дипломних, написання рефератів, студентські роботи, академічні роботи, допомога з навчанням">
    <meta name="author" content="Student Help">
    <meta name="robots" content="index, follow">
    <meta name="language" content="Ukrainian">
    <meta name="revisit-after" content="7 days">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php echo home_url(); ?>">
    <meta property="og:title" content="<?php bloginfo('name'); ?> | <?php wp_title(); ?>">
    <meta property="og:description"
        content="Професійна допомога студентам у написанні курсових, дипломних, рефератів. Досвідчені викладачі, висока якість, доступні ціни. Працюємо з 2018 року.">
    <meta property="og:locale" content="uk_UA">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>

    <!-- Breadcrumbs Schema -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb" itemscope itemtype="https://schema.org/BreadcrumbList">
            <li itemprop="itemListElement" itemscope itemtype="https://schema.org/ListItem">
                <a href="<?php echo home_url(); ?>" itemprop="item">
                    <span itemprop="name">Головна</span>
                </a>
                <meta itemprop="position" content="1" />
            </li>
        </ol>
    </nav>
    <header class="header">
        <div class="container">
            <!-- Логотип -->
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="<?php bloginfo('name'); ?>">
            </a>

            <!-- Десктопна навігація -->
            <nav class="nav-menu">
                <a href="#why-us">Чому ми</a>
                <a href="#how-it-works">Як це працює</a>
                <a href="#reviews">Відгуки</a>
                <a href="#faq">Часті питання</a>
            </nav>

            <!-- Контактний блок -->
            <div class="contact-block">
                <div class="social-icons">
                    <a href="https://instagram.com/bez_stresu.ua" aria-label="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://t.me/bez_stresu" aria-label="Telegram">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram1.svg" alt="Telegram">
                    </a>
                </div>
                <a href="tel:+380990000000" class="phone">+380 99 000 00 00</a>
                <a href="#contact" class="contact-button">Залишити заявку</a>
            </div>

            <!-- Кнопка для мобільного меню -->
            <div class="hamburger-menu">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>

        <!-- Мобільне меню -->
        <div class="mobile-menu-container">
            <nav class="mobile-nav-menu">
                <a href="#why-us">Чому ми</a>
                <a href="#how-it-works">Як це працює</a>
                <a href="#reviews">Відгуки</a>
                <a href="#faq">Часті питання</a>
            </nav>

            <div class="mobile-contact-block">
                <div class="social-icons">
                    <a href="https://instagram.com/bez_stresu.ua" aria-label="Instagram">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram">
                    </a>
                    <a href="https://t.me/bez_stresu" aria-label="Telegram">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram1.svg" alt="Telegram">
                    </a>
                </div>
                <a href="tel:+380990000000" class="phone">+380 99 000 00 00</a>
                <a href="#contact" class="contact-button">Залишити заявку</a>
            </div>
        </div>
    </header>