<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 bg-background/98 backdrop-blur-md border-b shadow-sm">
    <div class="container mx-auto px-4">
        <div class="flex items-center justify-between h-16 md:h-20">
            <div class="flex items-center gap-2 md:gap-3">
                <img 
                    src="<?php echo edelweiss_image_url('logo.png'); ?>" 
                    alt="Edelweiss" 
                    class="h-10 md:h-12 w-auto" 
                    loading="eager"
                    fetchpriority="high"
                />
                <div>
                    <h1 class="text-base md:text-xl font-bold text-primary">EDELWEISS</h1>
                    <p class="text-[10px] md:text-xs text-muted-foreground">частная гимназия</p>
                </div>
            </div>
            
            <nav class="hidden md:flex items-center gap-6">
                <a href="#about" class="text-sm font-medium hover:text-primary transition-colors">
                    О нас
                </a>
                <a href="#programs" class="text-sm font-medium hover:text-primary transition-colors">
                    Программы
                </a>
                <a href="#reviews" class="text-sm font-medium hover:text-primary transition-colors">
                    Отзывы
                </a>
                <a href="#contacts" class="text-sm font-medium hover:text-primary transition-colors">
                    Контакты
                </a>
            </nav>

            <div class="flex items-center gap-2 md:gap-3">
                <a href="tel:+79033899090" class="hidden lg:flex items-center gap-2 text-sm font-medium text-foreground hover:text-primary transition-colors">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    +7 903 389-90-90
                </a>
                <a href="#contacts" class="hidden sm:flex items-center gap-2 px-4 py-2 bg-primary text-primary-foreground rounded-md text-sm font-medium shadow-md hover:shadow-lg transition-shadow">
                    <svg class="h-4 w-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Записаться
                </a>
                <button id="mobile-menu-toggle" class="md:hidden p-2 rounded-md hover:bg-muted transition-colors" aria-label="Открыть меню">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
    
    <!-- Mobile Menu -->
    <div id="mobile-menu" class="hidden md:hidden fixed inset-0 z-50 bg-background">
        <div class="flex flex-col h-full">
            <div class="flex items-center justify-between p-4 border-b">
                <div class="flex items-center gap-2">
                    <img 
                        src="<?php echo edelweiss_image_url('logo.png'); ?>" 
                        alt="Edelweiss" 
                        class="h-8 w-auto"
                    />
                    <div>
                        <h2 class="font-bold text-lg text-primary">EDELWEISS</h2>
                        <p class="text-xs text-muted-foreground">частная гимназия</p>
                    </div>
                </div>
                <button id="mobile-menu-close" class="p-2 rounded-md hover:bg-muted transition-colors" aria-label="Закрыть меню">
                    <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <nav class="flex-1 overflow-y-auto p-4">
                <div class="flex flex-col gap-6">
                    <a href="#about" class="text-lg font-medium hover:text-primary transition-colors py-2 mobile-menu-link">
                        О нас
                    </a>
                    <a href="#programs" class="text-lg font-medium hover:text-primary transition-colors py-2 mobile-menu-link">
                        Программы
                    </a>
                    <a href="#reviews" class="text-lg font-medium hover:text-primary transition-colors py-2 mobile-menu-link">
                        Отзывы
                    </a>
                    <a href="#contacts" class="text-lg font-medium hover:text-primary transition-colors py-2 mobile-menu-link">
                        Контакты
                    </a>
                </div>
                
                <div class="mt-8 pt-8 border-t space-y-4">
                    <div class="space-y-3">
                        <p class="text-sm font-semibold text-muted-foreground">Контакты:</p>
                        <a href="tel:+79033899090" class="flex items-center gap-3 text-base font-medium hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +7 903 389-90-90
                        </a>
                        <a href="tel:+79389992561" class="flex items-center gap-3 text-base font-medium hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                            +7 938 999-25-61
                        </a>
                        <a href="mailto:edelweiss@mail.ru" class="flex items-center gap-3 text-base font-medium hover:text-primary transition-colors">
                            <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                            edelweiss@mail.ru
                        </a>
                    </div>
                    
                    <a href="#contacts" class="block w-full mt-6 px-6 py-3 bg-primary text-primary-foreground rounded-md text-base font-medium text-center hover:bg-primary/90 transition-colors mobile-menu-link">
                        Записаться на экскурсию
                    </a>
                </div>
            </nav>
        </div>
    </div>

