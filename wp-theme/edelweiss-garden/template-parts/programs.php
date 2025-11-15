<?php
/**
 * Programs Section Template
 */
?>

<section id="programs" class="py-12 md:py-20">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">Наши программы</h2>
            <p class="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto" style="color: hsl(347, 15%, 45%);">
                Комплексный подход к развитию ребенка: языки, творчество, логопедия и подготовка к школе
            </p>
        </div>

        <div class="grid sm:grid-cols-2 lg:grid-cols-4 gap-4 md:gap-6">
            <?php
            $programs = array(
                array(
                    'icon' => 'languages',
                    'title' => 'Изучение языков',
                    'description' => 'Азы английского, арабского и чеченского языков',
                    'image' => 'language-learning.jpg',
                    'color' => 'primary'
                ),
                array(
                    'icon' => 'music',
                    'title' => 'Музыкальные занятия',
                    'description' => 'Развитие музыкального слуха и творческих способностей',
                    'image' => 'music-class.jpg',
                    'color' => 'secondary'
                ),
                array(
                    'icon' => 'speech',
                    'title' => 'Логопед',
                    'description' => 'Коррекция речи и развитие правильной артикуляции',
                    'image' => 'speech-therapy.jpg',
                    'color' => 'accent'
                ),
                array(
                    'icon' => 'book',
                    'title' => 'Обучение чтению',
                    'description' => 'Подготовка к школе и обучение основам грамоты',
                    'image' => 'language-learning.jpg',
                    'color' => 'primary'
                )
            );
            
            foreach ($programs as $program) {
                $color_classes = array(
                    'primary' => 'bg-primary',
                    'secondary' => 'bg-secondary',
                    'accent' => 'bg-accent'
                );
                $color_class = $color_classes[$program['color']] ?? 'bg-primary';
                ?>
                <div class="overflow-hidden rounded-lg hover:shadow-xl transition-all duration-300 group border border-border/50 shadow-md" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                    <div class="relative h-40 md:h-48 overflow-hidden">
                        <img 
                            src="<?php echo edelweiss_image_url($program['image']); ?>" 
                            alt="<?php echo esc_attr($program['title']); ?>"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500"
                            loading="lazy"
                        />
                        <div class="absolute top-3 md:top-4 left-3 md:left-4 w-10 h-10 md:w-12 md:h-12 rounded-2xl <?php echo $color_class; ?> flex items-center justify-center shadow-lg" style="<?php 
                            if ($program['color'] === 'primary') echo 'background-color: hsl(347, 42%, 39%);';
                            elseif ($program['color'] === 'secondary') echo 'background-color: hsl(28, 88%, 58%);';
                            else echo 'background-color: hsl(142, 55%, 45%);';
                        ?>">
                            <?php
                            $icon_svg = '';
                            switch ($program['icon']) {
                                case 'languages':
                                    $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />';
                                    break;
                                case 'music':
                                    $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />';
                                    break;
                                case 'speech':
                                    $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z" />';
                                    break;
                                case 'book':
                                    $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />';
                                    break;
                            }
                            ?>
                            <svg class="h-5 w-5 md:h-6 md:w-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <?php echo $icon_svg; ?>
                            </svg>
                        </div>
                    </div>
                    <div class="p-4 md:p-6">
                        <h3 class="text-lg md:text-xl font-display font-bold mb-2"><?php echo esc_html($program['title']); ?></h3>
                        <p class="text-sm md:text-base text-muted-foreground" style="color: hsl(347, 15%, 45%);"><?php echo esc_html($program['description']); ?></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="mt-12 md:mt-16 bg-gradient-to-br from-primary/10 via-secondary/10 to-accent/10 rounded-3xl p-6 md:p-12 shadow-lg" style="background: linear-gradient(to bottom right, rgba(347, 42%, 39%, 0.1), rgba(28, 88%, 58%, 0.1), rgba(142, 55%, 45%, 0.1));">
            <div class="grid md:grid-cols-2 gap-6 md:gap-8 items-center">
                <div>
                    <h3 class="text-2xl md:text-3xl font-bold mb-3 md:mb-4 font-display">Стоимость</h3>
                    <div class="text-4xl md:text-5xl font-bold text-primary mb-3 md:mb-4" style="color: hsl(347, 42%, 39%);">14 000 ₽</div>
                    <p class="text-base md:text-lg lg:text-xl text-muted-foreground mb-4 md:mb-6" style="color: hsl(347, 15%, 45%);">
                        в месяц за полный день с питанием и всеми образовательными программами
                    </p>
                    <ul class="space-y-2 md:space-y-3">
                        <li class="flex items-center gap-2 text-sm md:text-base">
                            <div class="w-2 h-2 rounded-full bg-primary flex-shrink-0" style="background-color: hsl(347, 42%, 39%);"></div>
                            <span>4-разовое питание</span>
                        </li>
                        <li class="flex items-center gap-2 text-sm md:text-base">
                            <div class="w-2 h-2 rounded-full bg-secondary flex-shrink-0" style="background-color: hsl(28, 88%, 58%);"></div>
                            <span>Все образовательные программы включены</span>
                        </li>
                        <li class="flex items-center gap-2 text-sm md:text-base">
                            <div class="w-2 h-2 rounded-full bg-accent flex-shrink-0" style="background-color: hsl(142, 55%, 45%);"></div>
                            <span>Занятия с логопедом</span>
                        </li>
                    </ul>
                </div>
                <div class="bg-card p-6 md:p-8 rounded-2xl border shadow-lg" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                    <h4 class="text-xl md:text-2xl font-bold mb-3 md:mb-4 font-display">Что входит в программу?</h4>
                    <ul class="space-y-2 md:space-y-3 text-muted-foreground text-sm md:text-base" style="color: hsl(347, 15%, 45%);">
                        <li>✓ Изучение английского, арабского, чеченского языков</li>
                        <li>✓ Музыкальные занятия</li>
                        <li>✓ Занятия с логопедом</li>
                        <li>✓ Обучение чтению</li>
                        <li>✓ Подготовка к первому классу</li>
                        <li>✓ Развивающие игры и творчество</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

