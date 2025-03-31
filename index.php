<?php get_header(); ?>

<main>
    <article>
        <section class="hero" id="hero">
            <div class="container">
                <div class="hero__content">
                    <h1><?php echo get_theme_mod('hero_title', 'Допомога студентам в написанні'); ?></h1>
                    <p class="hero__subtitle">
                        <?php echo get_theme_mod('hero_subtitle', 'З нами вчитись легко та без стресу'); ?>
                    </p>
                    <div class="hero__buttons">
                        <a href="https://t.me/studenthelp" class="btn btn-secondary">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram.svg"
                                alt="Telegram icon" width="24" height="24">
                            Написати у телеграм
                        </a>
                        <button type="button" class="btn btn-primary" data-modal="contact">
                            Залишити заявку
                        </button>
                    </div>
                </div>
                <div class="hero__image">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/hero/students.svg" alt="Щасливі студенти"
                        width="600" height="400" loading="lazy">
                </div>
            </div>
        </section>
        <section class="features" id="features">
            <div class="container">
                <ul class="features__list">
                    <li class="features__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/calendar.svg" alt="Календар"
                            width="60" height="60">
                    </li>
                    <li class="features__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/target.svg" alt="Ціль"
                            width="60" height="60">
                    </li>
                    <li class="features__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/books.svg" alt="Книги"
                            width="60" height="60">
                    </li>
                    <li class="features__item">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/icons/document.svg" alt="Документ"
                            width="60" height="60">
                    </li>
                </ul>
            </div>
        </section>
        <section class="why-us" id="why-us">
            <div class="container">
                <h2 class="section-title">Чому варто обрати саме нас</h2>
                <p class="section-description">
                    Багаторічний досвід наших виконавців та суворе дотримання дедлайну задачі гарантують якісне
                    виконання. Завдяки індивідуальному ставленню до кожного замовлення - більшість
                    нашихзамовників співпрацюють з нами впродовж декількох років.
                </p>

                <div class="advantages-grid">
                    <div class="advantage-card">
                        <div class="advantage-number">01</div>
                        <h3>Працюємо без вихідних</h3>
                        <p>менеджер постійно на зв'язку з вами</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-number">02</div>
                        <h3>Доступна вартість</h3>
                        <p>Ви отримаєте прорахунок вартості замовлення протягом 30 хвилин. Також можете отримати
                            додаткові знижки та бонуси</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-number">03</div>
                        <h3>Кваліфіковані виконавці</h3>
                        <p>перевірені часом виконавці з досвідом від 5 років</p>
                    </div>

                    <div class="advantage-card">
                        <div class="advantage-number">04</div>
                        <h3>Безкоштовні правки без часових обмежень</h3>
                        <p>на відміну від інших сервісів, ми не ставимо часових обмежень коли ви можете звернутись
                            щодо
                            правок</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="how-it-works" id="how-it-works">
            <div class="container">
                <h2 class="section-title">Як ми працюємо</h2>

                <div class="workflow-grid">
                    <div class="workflow-step">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/workflow/request.svg"
                            alt="Заповнення заявки" width="150" height="150" loading="lazy">
                        <h3>Залишаєте запит</h3>
                        <p>на сайті або пишіть нам в Telegram. Менеджер відпише вам протягом 15 хвилин.</p>
                    </div>

                    <div class="workflow-step">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/workflow/details.svg"
                            alt="Уточнення деталей" width="150" height="150" loading="lazy">
                        <h3>Уточнення всіх деталей та оцінка вартості</h3>
                        <p>Уточнюємо всі деталі та передаємо нашим спеціалістам для ознайомлення і оцінки вартості.
                        </p>
                    </div>

                    <div class="workflow-step">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/workflow/payment.svg"
                            alt="Внесення передоплати" width="150" height="150" loading="lazy">
                        <h3>Внесення передоплати</h3>
                        <p>Після узгодження вартості, вносите передоплату в розмірі 50% і затверджуємо замовлення в
                            роботу.</p>
                    </div>

                    <div class="workflow-step">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/workflow/complete.svg"
                            alt="Готовність замовлення" width="150" height="150" loading="lazy">
                        <h3>Готовність замовлення</h3>
                        <p>По готовності замовлення, менеджер вас про це повідомляє і ви отримуєте своє замовлення.
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="contact-form" id="contact-form">
            <div class="container">
                <h2 class="section-title">Залишай заявку чи пиши у Telegram</h2>

                <div class="contact-wrapper">
                    <div class="form-container">
                        <form action="#" method="POST" class="contact-form">
                            <input type="text" name="name" placeholder="Ім'я" required>
                            <input type="text" name="phone" placeholder="Номер телефону або нік Telegram" required>
                            <div class="input-group">
                                <input type="text" name="source" placeholder="Звідки про нас дізнались" required>
                                <div class="info-icon" title="Розкажіть, як ви знайшли нас">ⓘ</div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Залишити заявку
                            </button>
                        </form>
                    </div>

                    <div class="contacts-info">
                        <div class="contact-content">
                            <h3>Наші контакти</h3>
                            <p class="phone">+380 99 000 00 00</p>
                            <div class="social-links">
                                <a href="https://instagram.com/bez_stresu.ua" class="social-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg"
                                        alt="Instagram">
                                    @bez_stresu.ua
                                </a>
                                <a href="https://t.me/bez_stresu" class="social-link">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram1.svg"
                                        alt="Telegram">
                                    @bez_stресу
                                </a>
                            </div>
                            <a href="https://t.me/bez_stresu" class="btn btn-secondary">
                                Написати у телеграм
                            </a>
                        </div>
                        <div class="contact-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/hero/circle.svg"
                                alt="Декоративне зображення" loading="lazy">
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="reviews" id="reviews">
            <div class="container">
                <h2 class="section-title">Що про нас кажуть</h2>

                <div class="reviews-slider">
                    <button class="slider-arrow prev" aria-label="Попередній відгук">←</button>

                    <div class="reviews-wrapper">
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review1.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review2.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review3.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review4.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review5.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review6.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review4.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                        <div class="review-item">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/reviews/review4.jpg"
                                alt="Відгук клієнта" loading="lazy">
                        </div>
                    </div>

                    <button class="slider-arrow next" aria-label="Наступний відгук">→</button>
                </div>
            </div>
        </section>

        <div class="modal" id="imageModal">
            <div class="modal-content">
                <span class="close-modal">&times;</span>
                <img src="" alt="Перегляд зображення" id="modalImage">
            </div>
        </div>

        <section class="telegram-banner" id="telegram-banner">
            <div class="container">
                <div class="telegram-banner__wrapper">
                    <div class="telegram-banner__content">
                        <h2>Зв'яжіться з нами через Telegram</h2>
                        <a href="https://t.me/bez_stresu" class="btn btn-secondary">
                            <img src="<?php echo get_template_directory_uri(); ?>/img/icons/telegram.svg"
                                alt="Telegram icon">
                            Написати у телеграм
                        </a>
                    </div>
                    <div class="telegram-banner__images">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tgbanner/student-left.png"
                            alt="Студент з планшетом" class="student-left" loading="lazy">
                        <img src="<?php echo get_template_directory_uri(); ?>/img/tgbanner/student-right.png"
                            alt="Студентка з телефоном" class="student-right" loading="lazy">
                    </div>
                </div>
            </div>
        </section>

        <section class="faq" id="faq">
            <div class="container">
                <h2 class="section-title">Маємо відповіді на Ваші питання</h2>

                <div class="faq-list">
                    <details class="faq-item">
                        <summary>Lorem ipsum dolor sit amet consectetur consectetur nisl?</summary>
                        <div class="faq-content">
                            <p>Відповідь на питання...</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Lorem ipsum dolor sit amet consectetur consectetur nisl?</summary>
                        <div class="faq-content">
                            <p>Відповідь на питання...</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Lorem ipsum dolor sit amet consectetur consectetur nisl?</summary>
                        <div class="faq-content">
                            <p>Відповідь на питання...</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Lorem ipsum dolor sit amet consectetur consectetur nisl?</summary>
                        <div class="faq-content">
                            <p>Відповідь на питання...</p>
                        </div>
                    </details>

                    <details class="faq-item">
                        <summary>Lorem ipsum dolor sit amet consectetur consectetur nisl?</summary>
                        <div class="faq-content">
                            <p>Відповідь на питання...</p>
                        </div>
                    </details>
                </div>

                <div class="disclaimer">
                    <h3>Команда Bez_Stresu не продає жодних документів!</h3>
                    <p>Написані нами роботи є допоміжним зразком для написання клієнтом своєї роботи. (Не є готовими
                        науковими роботами).</p>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>