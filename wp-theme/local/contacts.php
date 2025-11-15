<?php
/**
 * Страница "Контакты"
 */
require_once __DIR__ . '/config.php';

get_header();
?>

<main class="min-h-screen bg-background">
    <!-- Hero секция -->
    <section class="relative py-16 md:py-24 bg-gradient-to-br from-primary/10 to-background">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 font-display">Контакты</h1>
                <p class="text-xl md:text-2xl text-muted-foreground">
                    Приходите на экскурсию и познакомьтесь с нашим детским садом лично
                </p>
            </div>
        </div>
    </section>

    <!-- Контактная информация -->
    <section class="py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-12">
                    <!-- Address Card -->
                    <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6 bg-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm">
                            <svg class="h-7 w-7 md:h-8 md:w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-base md:text-lg mb-2 font-display">Адреса</h3>
                        <p class="text-muted-foreground text-xs md:text-sm mb-1 md:mb-2">г. Грозный</p>
                        <p class="text-muted-foreground text-xs md:text-sm mb-1">ул. Умара Кадырова, 7</p>
                        <p class="text-muted-foreground text-xs md:text-sm">ул. Г.Н. Трошева, 100</p>
                    </div>

                    <!-- Phone Card -->
                    <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6 bg-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-secondary/10 flex items-center justify-center shadow-sm">
                            <svg class="h-7 w-7 md:h-8 md:w-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-base md:text-lg mb-2 font-display">Телефоны</h3>
                        <a href="tel:+79033899090" class="block text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors mb-1">
                            +7 903 389-90-90
                        </a>
                        <a href="tel:+79389992561" class="block text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors">
                            +7 938 999-25-61
                        </a>
                    </div>

                    <!-- Email Card -->
                    <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6 bg-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-accent/10 flex items-center justify-center shadow-sm">
                            <svg class="h-7 w-7 md:h-8 md:w-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-base md:text-lg mb-2 font-display">Email</h3>
                        <a href="mailto:edelweiss@mail.ru" class="text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors">
                            edelweiss@mail.ru
                        </a>
                    </div>

                    <!-- Hours Card -->
                    <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6 bg-white">
                        <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm">
                            <svg class="h-7 w-7 md:h-8 md:w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="font-bold text-base md:text-lg mb-2 font-display">Режим работы</h3>
                        <p class="text-xs md:text-sm text-muted-foreground">Пн-Пт: 7:00 — 19:00</p>
                        <p class="text-xs md:text-sm text-muted-foreground mt-1">Сб-Вс: выходной</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Карта -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Как нас найти</h2>
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-xl">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Адрес 1</h3>
                        <p class="text-lg text-gray-700 mb-6">г. Грозный, ул. Умара Кадырова, 7</p>
                        <img 
                            src="https://images.unsplash.com/photo-1524661135-423995f22d0b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Адрес 1"
                            class="rounded-xl shadow-md w-full"
                        />
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-xl">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Адрес 2</h3>
                        <p class="text-lg text-gray-700 mb-6">г. Грозный, ул. Г.Н. Трошева, 100</p>
                        <img 
                            src="https://images.unsplash.com/photo-1514565131-fce0801e5785?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Адрес 2"
                            class="rounded-xl shadow-md w-full"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Форма обратной связи -->
    <section class="py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Записаться в детский сад</h2>
                <div class="bg-gradient-to-r from-primary via-primary/95 to-primary/90 text-white rounded-3xl p-8 md:p-12 shadow-xl">
                    <p class="text-sm md:text-base lg:text-lg mb-6 md:mb-8 opacity-95 text-center">
                        Приходите познакомиться с нашим детским садом, воспитателями и условиями. Мы с радостью покажем вам все наши классы и ответим на вопросы.
                    </p>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">Ваше имя</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-2 border border-white/30 bg-white/10 rounded-md text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Введите ваше имя" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2">Номер телефона</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-2 border border-white/30 bg-white/10 rounded-md text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" placeholder="+7 (___) ___-__-__" required>
                        </div>
                        <div>
                            <label for="child-age" class="block text-sm font-medium mb-2">Возраст ребенка</label>
                            <input type="text" id="child-age" name="child-age" class="w-full px-4 py-2 border border-white/30 bg-white/10 rounded-md text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Например: 3 года">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">Сообщение (необязательно)</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-2 border border-white/30 bg-white/10 rounded-md text-white placeholder-white/70 focus:outline-none focus:ring-2 focus:ring-white" placeholder="Ваше сообщение"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-3 bg-white text-primary rounded-md font-medium hover:bg-white/90 transition-colors shadow-lg">
                            Отправить заявку
                        </button>
                        <p class="text-xs opacity-80 text-center">
                            Нажимая кнопку "Отправить заявку", вы даете согласие на обработку персональных данных
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Быстрые действия -->
    <section class="py-12 md:py-20 bg-card">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">Свяжитесь с нами</h2>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="tel:+79033899090" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3 md:py-4 bg-primary text-white rounded-md text-base md:text-lg font-medium shadow-lg hover:shadow-xl transition-shadow">
                        <svg class="h-4 w-4 md:h-5 md:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        Позвонить нам
                    </a>
                    <a href="mailto:edelweiss@mail.ru" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3 md:py-4 border-2 border-primary text-primary rounded-md text-base md:text-lg font-medium shadow-lg hover:shadow-xl transition-shadow hover:bg-primary hover:text-white">
                        <svg class="h-4 w-4 md:h-5 md:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        Написать email
                    </a>
                    <a href="/enrollment/" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3 md:py-4 bg-primary text-white rounded-md text-base md:text-lg font-medium shadow-lg hover:shadow-xl transition-shadow">
                        Записаться в детский сад
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
