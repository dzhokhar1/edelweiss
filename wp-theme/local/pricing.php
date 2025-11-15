<?php
/**
 * Страница "Режим работы"
 */
require_once __DIR__ . '/config.php';

get_header();
?>

<main class="min-h-screen bg-white">
    <!-- Hero секция -->
    <section class="relative py-16 md:py-24 bg-gradient-to-br from-orange-50 via-white to-blue-50 overflow-hidden">
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute top-20 right-10 w-64 h-64 bg-orange-200/20 rounded-full blur-2xl animate-pulse"></div>
            <div class="absolute bottom-20 left-10 w-80 h-80 bg-blue-200/20 rounded-full blur-2xl animate-pulse" style="animation-delay: 1s;"></div>
        </div>
        <div class="container mx-auto px-4 relative z-10">
            <div class="max-w-4xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-black mb-6 text-gray-900">
                    Режим работы
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed">
                    Мы работаем по 12-часовому режиму, обеспечивая комфортное пребывание детей в детском саду
                </p>
            </div>
        </div>
    </section>

    <!-- Режим работы -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Режим работы детского сада</h2>
                        <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-8 border-2 border-orange-200">
                            <div class="text-center">
                                <p class="text-5xl md:text-6xl font-black text-orange-600 mb-4">7:00 — 19:00</p>
                                <p class="text-xl text-gray-700 mb-2 font-semibold">Понедельник — Пятница</p>
                                <p class="text-lg text-gray-600">Суббота и Воскресенье — выходные дни</p>
                            </div>
                        </div>
                        <p class="text-gray-700 mt-6 text-lg">
                            Рабочая неделя состоит из 5 дней. Мы обеспечиваем полный цикл образовательной деятельности в соответствии с образовательной программой.
                        </p>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img 
                            src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Режим работы детского сада"
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Примерный режим дня -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Примерный режим дня</h2>
                
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl mb-8">
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="flex items-start gap-4 p-4 bg-blue-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-blue-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">7:00</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">7:00 - 8:30</h4>
                                <p class="text-gray-700 text-sm">Прием детей, осмотр, игры, утренняя гимнастика</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-orange-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-orange-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">8:30</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">8:30 - 9:00</h4>
                                <p class="text-gray-700 text-sm">Подготовка к завтраку, завтрак</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-green-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-green-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">9:00</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">9:00 - 10:00</h4>
                                <p class="text-gray-700 text-sm">Образовательная деятельность</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-yellow-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-yellow-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">10:00</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">10:00 - 10:30</h4>
                                <p class="text-gray-700 text-sm">Второй завтрак</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-purple-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-purple-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">10:30</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">10:30 - 12:00</h4>
                                <p class="text-gray-700 text-sm">Прогулка, игры на свежем воздухе</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-red-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-red-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">12:00</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">12:00 - 12:30</h4>
                                <p class="text-gray-700 text-sm">Подготовка к обеду, обед</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-indigo-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-indigo-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">12:30</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">12:30 - 15:30</h4>
                                <p class="text-gray-700 text-sm">Подготовка ко сну, сон</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-pink-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-pink-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">15:30</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">15:30 - 16:00</h4>
                                <p class="text-gray-700 text-sm">Постепенный подъем, полдник</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-teal-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-teal-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">16:00</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">16:00 - 18:30</h4>
                                <p class="text-gray-700 text-sm">Активное бодрствование, игры, прогулки</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4 p-4 bg-amber-50 rounded-xl">
                            <div class="flex-shrink-0">
                                <div class="w-12 h-12 bg-amber-500 rounded-lg flex items-center justify-center">
                                    <span class="text-white font-bold text-sm">18:30</span>
                                </div>
                            </div>
                            <div>
                                <h4 class="font-bold text-gray-900 mb-1">18:30 - 19:00</h4>
                                <p class="text-gray-700 text-sm">Подготовка к ужину, ужин, уход домой</p>
                            </div>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 mt-6 text-center italic">
                        * Режим дня может незначительно отличаться в зависимости от возрастной группы и индивидуальных особенностей детей
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Питание -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Сбалансированное 4-разовое питание</h2>
                
                <div class="grid md:grid-cols-2 gap-8 items-center mb-8">
                    <div>
                        <img 
                            src="https://images.unsplash.com/photo-1628088062854-d1870b4553da?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Питание в детском саду"
                            class="rounded-2xl shadow-xl w-full"
                        />
                    </div>
                    <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-8 border-2 border-green-200">
                        <p class="text-lg text-gray-700 mb-6">
                            Мы обеспечиваем полноценное и разнообразное питание, соответствующее требованиям СанПиН 2.3/2.4.3590-20. Меню составляется с учетом возрастных особенностей детей и требований к сбалансированному питанию.
                        </p>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-orange-600 mb-1">8:30</div>
                                <div class="text-sm text-gray-700">Завтрак</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-yellow-600 mb-1">10:00</div>
                                <div class="text-sm text-gray-700">Второй завтрак</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-red-600 mb-1">12:00</div>
                                <div class="text-sm text-gray-700">Обед</div>
                            </div>
                            <div class="bg-white rounded-lg p-4 text-center">
                                <div class="text-2xl font-bold text-purple-600 mb-1">15:30</div>
                                <div class="text-sm text-gray-700">Полдник</div>
                            </div>
                        </div>
                        <p class="text-sm text-gray-600 mt-4 text-center">
                            Ужин (18:30 - 19:00) — для детей, остающихся на полный день
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Материнский капитал -->
    <section class="py-12 md:py-20 bg-gradient-to-r from-orange-50 to-pink-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl text-center border-2 border-orange-200">
                    <div class="w-20 h-20 bg-gradient-to-br from-orange-400 to-pink-400 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Поддерживаем оплату Материнским (семейным) капиталом</h3>
                    <p class="text-lg text-gray-700">
                        Вы можете использовать материнский капитал для оплаты услуг детского сада
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 md:py-20 bg-gradient-to-r from-orange-500 to-pink-500">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Готовы записать ребенка?</h2>
                <p class="text-lg text-white/90 mb-8">
                    Приходите на экскурсию и узнайте больше о нашем детском саде
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/enrollment/" class="inline-flex items-center justify-center gap-2 px-8 py-4 bg-white text-orange-600 rounded-xl font-bold shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        Записаться в детский сад
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="/contacts/" class="inline-flex items-center justify-center gap-2 px-8 py-4 border-2 border-white text-white rounded-xl font-bold hover:bg-white hover:text-orange-600 transition-colors">
                        Контакты
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
