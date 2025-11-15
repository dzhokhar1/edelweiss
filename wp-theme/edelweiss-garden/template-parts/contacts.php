<?php
/**
 * Contacts Section Template
 */
?>

<section id="contacts" class="py-12 md:py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">Контакты</h2>
            <p class="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto" style="color: hsl(347, 15%, 45%);">
                Приходите на экскурсию и познакомьтесь с нашим детским садом лично
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6 mb-8 md:mb-12">
            <!-- Address Card -->
            <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm" style="background-color: rgba(347, 42%, 39%, 0.1);">
                    <svg class="h-7 w-7 md:h-8 md:w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: hsl(347, 42%, 39%);">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-base md:text-lg mb-2 font-display">Адреса</h3>
                <p class="text-muted-foreground text-xs md:text-sm mb-1 md:mb-2" style="color: hsl(347, 15%, 45%);">г. Грозный</p>
                <p class="text-muted-foreground text-xs md:text-sm" style="color: hsl(347, 15%, 45%);">ул. Умара Кадырова, 7</p>
                <p class="text-muted-foreground text-xs md:text-sm" style="color: hsl(347, 15%, 45%);">ул. Г.Н. Трошева, 100</p>
            </div>

            <!-- Phone Card -->
            <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-secondary/10 flex items-center justify-center shadow-sm" style="background-color: rgba(28, 88%, 58%, 0.1);">
                    <svg class="h-7 w-7 md:h-8 md:w-8 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: hsl(28, 88%, 58%);">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                </div>
                <h3 class="font-bold text-base md:text-lg mb-2 font-display">Телефоны</h3>
                <a href="tel:+79033899090" class="block text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors mb-1" style="color: hsl(347, 15%, 45%);">
                    +7 903 389-90-90
                </a>
                <a href="tel:+79389992561" class="block text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors" style="color: hsl(347, 15%, 45%);">
                    +7 938 999-25-61
                </a>
            </div>

            <!-- Email Card -->
            <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-accent/10 flex items-center justify-center shadow-sm" style="background-color: rgba(142, 55%, 45%, 0.1);">
                    <svg class="h-7 w-7 md:h-8 md:w-8 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: hsl(142, 55%, 45%);">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                </div>
                <h3 class="font-bold text-base md:text-lg mb-2 font-display">Email</h3>
                <a href="mailto:edelweiss@mail.ru" class="text-xs md:text-sm text-muted-foreground hover:text-primary transition-colors" style="color: hsl(347, 15%, 45%);">
                    edelweiss@mail.ru
                </a>
            </div>

            <!-- Hours Card -->
            <div class="text-center hover:shadow-xl transition-all duration-300 shadow-md border border-border/50 rounded-lg p-4 md:p-6" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                <div class="w-14 h-14 md:w-16 md:h-16 mx-auto mb-3 md:mb-4 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm" style="background-color: rgba(347, 42%, 39%, 0.1);">
                    <svg class="h-7 w-7 md:h-8 md:w-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: hsl(347, 42%, 39%);">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-bold text-base md:text-lg mb-2 font-display">Режим работы</h3>
                <p class="text-xs md:text-sm text-muted-foreground" style="color: hsl(347, 15%, 45%);">Пн-Пт: 8:00 - 18:00</p>
                <p class="text-xs md:text-sm text-muted-foreground mt-1" style="color: hsl(347, 15%, 45%);">Сб-Вс: выходной</p>
            </div>
        </div>

        <div class="max-w-2xl mx-auto text-center bg-gradient-to-r from-primary via-primary/95 to-primary/90 text-white rounded-3xl p-8 md:p-12 shadow-xl" style="background: linear-gradient(to right, hsl(347, 42%, 39%), hsl(347, 42%, 37%), hsl(347, 42%, 35%));">
            <h3 class="text-2xl md:text-3xl font-bold mb-3 md:mb-4 font-display">Запишитесь на экскурсию</h3>
            <p class="text-sm md:text-base lg:text-lg mb-6 md:mb-8 opacity-95">
                Приходите познакомиться с нашим детским садом, воспитателями и условиями. Мы с радостью покажем вам все наши классы и ответим на вопросы.
            </p>
            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 justify-center">
                <a href="tel:+79033899090" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3 md:py-4 bg-white text-primary rounded-md text-base md:text-lg font-medium shadow-lg hover:shadow-xl transition-shadow">
                    <svg class="h-4 w-4 md:h-5 md:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Позвонить нам
                </a>
                <a href="mailto:edelweiss@mail.ru" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3 md:py-4 bg-white/10 hover:bg-white/20 text-white border-2 border-white rounded-md text-base md:text-lg font-medium shadow-lg hover:shadow-xl transition-shadow">
                    <svg class="h-4 w-4 md:h-5 md:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Написать email
                </a>
            </div>
        </div>
    </div>
</section>

