<?php
/**
 * Hero Section Template
 */
?>

<section class="relative min-h-[500px] md:min-h-[600px] flex items-center overflow-hidden">
    <!-- Background images - mobile first -->
    <picture class="absolute inset-0">
        <source media="(min-width: 768px)" srcset="<?php echo edelweiss_image_url('hero-desktop.jpg'); ?>" />
        <img 
            src="<?php echo edelweiss_image_url('hero-mobile.jpg'); ?>"
            alt="Дети в детском саду Эдельвейс"
            class="w-full h-full object-cover"
            loading="eager"
            fetchpriority="high"
        />
    </picture>
    
    <!-- Overlay gradient -->
    <div class="absolute inset-0 bg-gradient-to-r from-background/95 via-background/85 to-background/50" style="background: linear-gradient(to right, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.85), rgba(255, 255, 255, 0.5));"></div>
    
    <!-- Cloud wave effect at bottom -->
    <div class="absolute bottom-0 left-0 right-0 h-16 md:h-24">
        <svg 
            viewBox="0 0 1440 120" 
            class="absolute bottom-0 w-full h-full"
            preserveAspectRatio="none"
            xmlns="http://www.w3.org/2000/svg"
        >
            <path 
                d="M0,64 C240,100 480,100 720,64 C960,28 1200,28 1440,64 L1440,120 L0,120 Z" 
                fill="hsl(0, 0%, 99%)"
            />
        </svg>
    </div>
    
    <div class="container mx-auto px-4 relative z-10 pt-8 pb-20 md:pb-24">
        <div class="max-w-2xl">
            <h2 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl font-bold mb-4 md:mb-6 leading-tight">
                Детский сад
                <span class="block text-primary mt-2" style="color: hsl(347, 42%, 39%);">Эдельвейс</span>
            </h2>
            <p class="text-base sm:text-lg md:text-xl lg:text-2xl mb-6 md:mb-8 text-foreground leading-relaxed" style="color: hsl(347, 20%, 15%);">
                Путь к успеху начинается здесь. Развитие, обучение и забота о вашем ребенке в уютной атмосфере.
            </p>
            
            <div class="flex flex-col sm:flex-row gap-3 md:gap-4 mb-6 md:mb-8">
                <a href="#contacts" class="inline-flex items-center justify-center gap-2 px-6 md:px-8 py-3 md:py-4 bg-primary text-primary-foreground rounded-md text-base md:text-lg font-medium shadow-lg hover:shadow-xl transition-shadow" style="background-color: hsl(347, 42%, 39%); color: white;">
                    <svg class="h-4 w-4 md:h-5 md:w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    Записаться на экскурсию
                </a>
                <a href="#about" class="inline-flex items-center justify-center px-6 md:px-8 py-3 md:py-4 border-2 border-primary text-primary rounded-md text-base md:text-lg font-medium shadow-md hover:shadow-lg transition-shadow">
                    Узнать подробнее
                </a>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-3 gap-3 md:gap-4 pt-4 md:pt-6 border-t">
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-3 md:p-4 shadow-md">
                    <p class="text-2xl md:text-3xl font-bold text-primary mb-1" style="color: hsl(347, 42%, 39%);">8:00 - 18:00</p>
                    <p class="text-xs md:text-sm text-muted-foreground" style="color: hsl(347, 15%, 45%);">Режим работы</p>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-3 md:p-4 shadow-md">
                    <p class="text-2xl md:text-3xl font-bold text-secondary mb-1" style="color: hsl(28, 88%, 58%);">3 языка</p>
                    <p class="text-xs md:text-sm text-muted-foreground" style="color: hsl(347, 15%, 45%);">Изучение</p>
                </div>
                <div class="bg-white/80 backdrop-blur-sm rounded-xl p-3 md:p-4 shadow-md col-span-2 md:col-span-1">
                    <p class="text-2xl md:text-3xl font-bold text-accent mb-1" style="color: hsl(142, 55%, 45%);">14 000 ₽</p>
                    <p class="text-xs md:text-sm text-muted-foreground" style="color: hsl(347, 15%, 45%);">В месяц</p>
                </div>
            </div>
        </div>
    </div>
</section>

