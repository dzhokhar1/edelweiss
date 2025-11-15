<?php
/**
 * About Section Template
 */
if (!function_exists('edelweiss_image_url')) {
    require_once dirname(__DIR__) . '/config.php';
}
?>

<section id="about" class="py-12 md:py-20 bg-muted/30" style="background-color: rgba(38, 30%, 95%, 0.3);">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">О детском саде Эдельвейс</h2>
            <p class="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto" style="color: hsl(347, 15%, 45%);">
                Мы создаем комфортную среду для развития ваших детей, где они учатся, играют и растут в атмосфере заботы и профессионализма
            </p>
        </div>

        <div class="grid md:grid-cols-2 gap-6 md:gap-8 mb-12 md:mb-16">
            <div class="space-y-4 md:space-y-6">
                <?php
                $features = array(
                    array(
                        'icon' => 'clock',
                        'title' => 'Удобный график',
                        'description' => 'Работаем с 8:00 до 18:00 в будние дни, полный день'
                    ),
                    array(
                        'icon' => 'utensils',
                        'title' => '4-разовое питание',
                        'description' => 'Сбалансированное меню, учитывающее все потребности детей'
                    ),
                    array(
                        'icon' => 'users',
                        'title' => 'Малые группы',
                        'description' => 'Индивидуальный подход к каждому ребенку'
                    ),
                    array(
                        'icon' => 'graduation',
                        'title' => 'Подготовка к школе',
                        'description' => 'Обучение чтению и подготовка к первому классу'
                    )
                );
                
                foreach ($features as $feature) {
                    ?>
                    <div class="flex gap-4 p-4 md:p-6 bg-card rounded-2xl shadow-md hover:shadow-lg transition-all duration-300 border border-border/50" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 md:w-14 md:h-14 rounded-2xl bg-primary/10 flex items-center justify-center shadow-sm" style="background-color: rgba(347, 42%, 39%, 0.1);">
                                <?php
                                $icon_svg = '';
                                switch ($feature['icon']) {
                                    case 'clock':
                                        $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />';
                                        break;
                                    case 'utensils':
                                        $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />';
                                        break;
                                    case 'users':
                                        $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />';
                                        break;
                                    case 'graduation':
                                        $icon_svg = '<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />';
                                        break;
                                }
                                ?>
                                <svg class="h-6 w-6 md:h-7 md:w-7 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24" style="color: hsl(347, 42%, 39%);">
                                    <?php echo $icon_svg; ?>
                                </svg>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-lg md:text-xl font-bold mb-1 md:mb-2 font-display"><?php echo esc_html($feature['title']); ?></h3>
                            <p class="text-sm md:text-base text-muted-foreground" style="color: hsl(347, 15%, 45%);"><?php echo esc_html($feature['description']); ?></p>
                        </div>
                    </div>
                    <?php
                }
                ?>
            </div>

            <div class="grid grid-rows-2 gap-4">
                <div class="relative overflow-hidden rounded-2xl shadow-lg">
                    <img 
                        src="<?php echo edelweiss_image_url('classroom.jpg'); ?>" 
                        alt="Классная комната" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    />
                </div>
                <div class="relative overflow-hidden rounded-2xl shadow-lg">
                    <img 
                        src="<?php echo edelweiss_image_url('building.jpg'); ?>" 
                        alt="Здание детского сада" 
                        class="w-full h-full object-cover hover:scale-105 transition-transform duration-500"
                        loading="lazy"
                    />
                </div>
            </div>
        </div>

        <div class="bg-gradient-to-br from-primary to-primary/90 text-primary-foreground rounded-3xl p-6 md:p-12 text-center shadow-xl" style="background: linear-gradient(to bottom right, hsl(347, 42%, 39%), hsl(347, 42%, 35%)); color: white;">
            <h3 class="text-xl md:text-2xl lg:text-3xl font-bold mb-3 md:mb-4 font-display">ИП Жамалуллайла Медина Сайд-Эмидиновна</h3>
            <p class="text-base md:text-lg lg:text-xl opacity-95">
                Детский сад «Эдельвейс» — это место, где каждый ребенок получает качественное образование и заботу
            </p>
        </div>
    </div>
</section>

