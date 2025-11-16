<?php
/**
 * Reviews Section Template
 */
if (!function_exists('esc_html')) {
    require_once dirname(__DIR__) . '/config.php';
}
?>

<section id="reviews" class="py-12 md:py-20 bg-muted/30" style="background-color: rgba(38, 30%, 95%, 0.3);">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12 md:mb-16">
            <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4 font-display">Отзывы родителей</h2>
            <p class="text-base md:text-lg lg:text-xl text-muted-foreground max-w-3xl mx-auto" style="color: hsl(347, 15%, 45%);">
                Мы гордимся доверием родителей и счастливыми улыбками наших воспитанников
            </p>
        </div>

        <div class="grid sm:grid-cols-2 gap-4 md:gap-6 max-w-5xl mx-auto">
            <?php
            $reviews = array(
                array(
                    'name' => 'Айшат М.',
                    'text' => 'Отличный детский сад! Ребенок с удовольствием ходит каждый день. Особенно нравятся занятия английским и музыкой. Воспитатели внимательные и профессиональные.',
                    'rating' => 5
                ),
                array(
                    'name' => 'Хава С.',
                    'text' => 'Очень довольны подходом к детям. Логопед помог нашему сыну справиться с проблемами речи. Питание вкусное и разнообразное. Рекомендую всем!',
                    'rating' => 5
                ),
                array(
                    'name' => 'Заур И.',
                    'text' => 'Сад превзошел все ожидания. Дочка научилась читать и считать, готова к школе. Очень благодарны всему коллективу Эдельвейса за профессионализм и заботу.',
                    'rating' => 5
                ),
                array(
                    'name' => 'Малика А.',
                    'text' => 'Замечательное место для развития детей! Много внимания уделяется языкам, что для нас очень важно. Ребенок уже знает азы трех языков. Спасибо большое!',
                    'rating' => 5
                )
            );
            
            foreach ($reviews as $review) {
                ?>
                <div class="hover:shadow-xl transition-all duration-300 border border-border/50 shadow-md rounded-lg p-4 md:p-6" style="background-color: white; border-color: rgba(38, 20%, 88%, 0.5);">
                    <div class="flex gap-1 mb-3 md:mb-4">
                        <?php for ($i = 0; $i < $review['rating']; $i++) { ?>
                            <svg class="h-4 w-4 md:h-5 md:w-5 fill-secondary text-secondary" style="fill: hsl(28, 88%, 58%); color: hsl(28, 88%, 58%);" viewBox="0 0 24 24">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        <?php } ?>
                    </div>
                    <p class="text-sm md:text-base lg:text-lg mb-3 md:mb-4 text-muted-foreground leading-relaxed" style="color: hsl(347, 15%, 45%);">
                        "<?php echo esc_html($review['text']); ?>"
                    </p>
                    <p class="font-semibold text-foreground text-sm md:text-base" style="color: hsl(347, 20%, 15%);"><?php echo esc_html($review['name']); ?></p>
                </div>
                <?php
            }
            ?>
        </div>

        <div class="mt-8 md:mt-12 text-center">
            <div class="inline-flex items-center gap-2 bg-gradient-to-r from-primary to-primary/90 text-primary-foreground px-6 md:px-8 py-3 md:py-4 rounded-full text-base md:text-lg font-semibold shadow-lg" style="background: linear-gradient(to right, hsl(347, 42%, 39%), hsl(347, 42%, 35%)); color: white;">
                <svg class="h-5 w-5 md:h-6 md:w-6 fill-current" viewBox="0 0 24 24">
                    <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                </svg>
                <span>4.9 из 5 на основе отзывов родителей</span>
            </div>
        </div>
    </div>
</section>

