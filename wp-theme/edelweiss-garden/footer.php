<footer class="bg-card border-t py-8 md:py-12 shadow-md">
    <div class="container mx-auto px-4">
        <div class="grid sm:grid-cols-2 md:grid-cols-4 gap-6 md:gap-8 mb-6 md:mb-8">
            <div>
                <div class="flex items-center gap-2 md:gap-3 mb-3 md:mb-4">
                    <img 
                        src="<?php echo edelweiss_image_url('logo.png'); ?>" 
                        alt="Edelweiss" 
                        class="h-8 md:h-10 w-auto"
                        loading="lazy"
                    />
                    <div>
                        <h3 class="font-bold text-base md:text-lg text-primary">EDELWEISS</h3>
                        <p class="text-[10px] md:text-xs text-muted-foreground">частная гимназия</p>
                    </div>
                </div>
                <p class="text-xs md:text-sm text-muted-foreground leading-relaxed">
                    Детский сад «Эдельвейс» — место, где ваш ребенок растет и развивается в атмосфере заботы и профессионализма.
                </p>
            </div>

            <div>
                <h4 class="font-bold mb-3 md:mb-4 text-sm md:text-base font-display">Навигация</h4>
                <ul class="space-y-2 text-xs md:text-sm text-muted-foreground">
                    <li><a href="#about" class="hover:text-primary transition-colors">О нас</a></li>
                    <li><a href="#programs" class="hover:text-primary transition-colors">Программы</a></li>
                    <li><a href="#reviews" class="hover:text-primary transition-colors">Отзывы</a></li>
                    <li><a href="#contacts" class="hover:text-primary transition-colors">Контакты</a></li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-3 md:mb-4 text-sm md:text-base font-display">Контакты</h4>
                <ul class="space-y-2 md:space-y-3 text-xs md:text-sm text-muted-foreground">
                    <li class="flex items-start gap-2">
                        <svg class="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                        <div>
                            <a href="tel:+79033899090" class="hover:text-primary transition-colors block">
                                +7 903 389-90-90
                            </a>
                            <a href="tel:+79389992561" class="hover:text-primary transition-colors block">
                                +7 938 999-25-61
                            </a>
                        </div>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                        <a href="mailto:edelweiss@mail.ru" class="hover:text-primary transition-colors">
                            edelweiss@mail.ru
                        </a>
                    </li>
                </ul>
            </div>

            <div>
                <h4 class="font-bold mb-3 md:mb-4 text-sm md:text-base font-display">Адреса</h4>
                <ul class="space-y-2 md:space-y-3 text-xs md:text-sm text-muted-foreground">
                    <li class="flex items-start gap-2">
                        <svg class="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>г. Грозный, ул. Умара Кадырова, 7</span>
                    </li>
                    <li class="flex items-start gap-2">
                        <svg class="h-3 w-3 md:h-4 md:w-4 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                        <span>г. Грозный, ул. Г.Н. Трошева, 100</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="pt-6 md:pt-8 border-t text-center text-[10px] md:text-xs lg:text-sm text-muted-foreground">
            <p>© <?php echo date('Y'); ?> ИП Жамалуллайла Медина Сайд-Эмидиновна. Детский сад «Эдельвейс». Все права защищены.</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

