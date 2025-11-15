<?php
/**
 * Hero Section Template
 * Динамичный дизайн с акцентом на изображение и игривыми элементами
 */
if (!function_exists('edelweiss_image_url')) {
    require_once dirname(__DIR__) . '/config.php';
}

// Изображение девочки с пузырями
$girl_image = 'https://images.unsplash.com/photo-1611885936074-a6b0cd343a99?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800';
?>

<section class="relative py-12 md:py-20 bg-gradient-to-b from-orange-50 via-white to-blue-50 overflow-hidden">
    <!-- Декоративные элементы -->
    <div class="absolute inset-0 overflow-hidden pointer-events-none">
        <!-- Большие пузыри -->
        <div class="absolute top-20 right-10 w-64 h-64 bg-orange-200/20 rounded-full blur-2xl animate-pulse"></div>
        <div class="absolute bottom-20 left-10 w-80 h-80 bg-blue-200/20 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
        <!-- Маленькие декоративные элементы -->
        <div class="absolute top-1/3 right-1/4 w-3 h-3 bg-orange-400 rounded-full"></div>
        <div class="absolute top-1/2 left-1/3 w-2 h-2 bg-blue-400 rounded-full"></div>
        <div class="absolute bottom-1/3 right-1/3 w-4 h-4 bg-pink-400 rounded-full"></div>
    </div>
    
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-8 md:gap-12 md:items-start" id="hero-grid">
                <!-- Левая часть - текст -->
                <div class="relative flex flex-col text-center md:text-left" id="hero-left">
                    <!-- Декоративный элемент -->
                    <div class="absolute -top-4 -left-4 w-20 h-20 bg-gradient-to-br from-orange-400 to-pink-400 rounded-full opacity-20 blur-xl"></div>
                    
                    <!-- Бейдж -->
                    <div class="w-80 mx-auto md:mx-0 mb-6 px-4 py-2 bg-white rounded-full shadow-md border border-orange-200 text-center">
                        <span class="text-base md:text-lg font-bold text-orange-600">✨ Детский сад Эдельвейс</span>
                    </div>
                    
                    <!-- Заголовок -->
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-4 leading-tight">
                        <span class="block text-gray-900">Детский сад</span>
                        <span class="block bg-gradient-to-r from-orange-500 via-pink-500 to-blue-500 bg-clip-text text-transparent">
                            нового<br>
                            формата
                        </span>
                    </h1>
                    
                    <!-- Описание -->
                    <p class="text-base md:text-lg text-gray-600 mb-8 leading-relaxed">
                        Мы работаем по образовательной программе дошкольного образования, разработанной в соответствии с ФГОС ДО и ФОП ДО. Программа учитывает региональные особенности Чеченской Республики и особенности развития современных детей в цифровом обществе. Мы создаем условия для позитивной социализации и индивидуализации, развития личности детей дошкольного возраста.
                    </p>
                    
                    <!-- Кнопка - игривая -->
                    <a href="/enrollment/" class="group relative flex items-center justify-center gap-3 w-64 mx-auto md:mx-0 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-2xl text-lg font-bold shadow-xl hover:shadow-2xl transition-all hover:scale-105 mb-10 overflow-hidden">
                        <span class="relative z-10">Записаться</span>
                        <svg class="w-5 h-5 relative z-10 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                        <!-- Анимированный фон -->
                        <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-orange-500 opacity-0 group-hover:opacity-100 transition-opacity"></div>
                    </a>
                    
                    <!-- Статистика в виде карточек -->
                    <div class="grid grid-cols-3 gap-4 mt-auto">
                        <div class="bg-white rounded-xl p-4 shadow-lg border-2 border-orange-100 text-center hover:border-orange-300 transition-colors">
                            <div class="text-2xl md:text-3xl font-black text-orange-500 mb-1">5+</div>
                            <div class="text-xs font-semibold text-gray-600 uppercase tracking-wide">лет работы</div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-lg border-2 border-pink-100 text-center hover:border-pink-300 transition-colors">
                            <div class="text-2xl md:text-3xl font-black text-pink-500 mb-1">200+</div>
                            <div class="text-xs font-semibold text-gray-600 uppercase tracking-wide">семей</div>
                        </div>
                        <div class="bg-white rounded-xl p-4 shadow-lg border-2 border-blue-100 text-center hover:border-blue-300 transition-colors">
                            <div class="text-xl md:text-2xl font-black text-blue-500 mb-1 leading-tight">от 2 мес</div>
                            <div class="text-xs font-semibold text-gray-600 uppercase tracking-wide mb-1">до 7 лет</div>
                        </div>
                    </div>
                </div>
                
                <!-- Правая часть - изображение -->
                <div class="relative flex flex-col" id="hero-right">
                    <!-- Декоративные элементы вокруг изображения -->
                    <div class="absolute -top-6 -right-6 w-24 h-24 bg-gradient-to-br from-orange-400 to-pink-400 rounded-2xl rotate-12 opacity-20 blur-sm"></div>
                    <div class="absolute -bottom-6 -left-6 w-20 h-20 bg-gradient-to-br from-blue-400 to-purple-400 rounded-2xl -rotate-12 opacity-20 blur-sm"></div>
                    
                    <!-- Изображение с эффектом -->
                    <div class="relative group flex-1 flex flex-col">
                        <!-- Рамка с градиентом -->
                        <div class="absolute -inset-1 bg-gradient-to-r from-orange-400 via-pink-400 to-blue-400 rounded-3xl blur opacity-75 group-hover:opacity-100 transition-opacity"></div>
                        
                        <!-- Изображение -->
                        <div class="relative rounded-3xl overflow-hidden shadow-2xl flex-1 flex flex-col">
                            <img 
                                src="<?php echo $girl_image; ?>" 
                                alt="Девочка играет с мыльными пузырями"
                                class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-500"
                                loading="eager"
                            />
                            
                            <!-- Overlay при наведении -->
                            <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity"></div>
                        </div>
                        
                        <!-- Плавающий элемент -->
                        <div class="absolute -bottom-4 -right-4 bg-white rounded-2xl p-4 shadow-xl border-2 border-orange-200 transform hover:scale-110 transition-transform">
                            <div class="flex items-center gap-3">
                                <div class="w-12 h-12 bg-gradient-to-br from-orange-400 to-pink-400 rounded-xl flex items-center justify-center">
                                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <div class="text-xs font-bold text-gray-900">Поддерживаем оплату</div>
                                    <div class="text-xs text-gray-600">материнским капиталом</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Декоративные звездочки -->
                    <div class="absolute top-1/4 -left-4 text-yellow-400 text-2xl animate-bounce" style="animation-delay: 0.5s;">⭐</div>
                    <div class="absolute bottom-1/4 -right-4 text-yellow-400 text-xl animate-bounce" style="animation-delay: 1s;">✨</div>
                </div>
            </div>
            
            <script>
            // Синхронизация высоты правой колонки с левой на больших экранах
            if (window.innerWidth >= 768) {
                function syncHeights() {
                    const leftCol = document.getElementById('hero-left');
                    const rightCol = document.getElementById('hero-right');
                    if (leftCol && rightCol && window.innerWidth >= 768) {
                        rightCol.style.height = leftCol.offsetHeight + 'px';
                    }
                }
                
                syncHeights();
                window.addEventListener('resize', syncHeights);
            }
            </script>
        </div>
    </div>
</section>
