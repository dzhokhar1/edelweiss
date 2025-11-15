<?php
/**
 * Страница "Возрастные группы"
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
                    Возрастные группы
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed">
                    Мы принимаем детей от 2 месяцев до 7 лет. Каждая группа имеет свою программу развития, соответствующую возрастным особенностям детей.
                </p>
            </div>
        </div>
    </section>

    <!-- Обзор возрастных групп -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-gradient-to-r from-orange-50 to-blue-50 rounded-2xl p-8 md:p-12 border-2 border-orange-200">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center text-gray-900">Обзор возрастных групп</h2>
                    <p class="text-lg md:text-xl text-gray-700 text-center leading-relaxed">
                        В соответствии с периодизацией психического развития ребенка согласно культурно-исторической психологии, дошкольное детство подразделяется на три возраста: младенческий (первое и второе полугодие жизни), ранний (от 1 года до 3 лет) и дошкольный возраст (от 3 до 7 лет).
                    </p>
                </div>
            </div>

            <!-- Младенческий возраст -->
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-orange-100 hover:border-orange-300 transition-colors">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="relative overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1544772711-57da9c7368fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Младенческий возраст"
                                class="w-full h-full object-cover min-h-[300px]"
                            />
                            <div class="absolute top-4 left-4 bg-orange-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                от 2 месяцев до 1 года
                            </div>
                        </div>
                        <div class="p-8 md:p-12">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Младенческий возраст</h3>
                            <p class="text-gray-600 mb-6">
                                В этот период происходит активное развитие двигательной активности, речи и познавательной активности. Ребенок начинает осваивать пространство, взаимодействовать с окружающим миром.
                            </p>
                            <div>
                                <h4 class="text-lg font-semibold mb-3 text-gray-900">Планируемые результаты к одному году:</h4>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Проявляет двигательную активность, используя движения ползания, лазанья, хватания</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Понимает речь взрослого, откликается на свое имя</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Произносит несколько простых слов</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Проявляет интерес к животным, растениям, обнаруживает познавательную активность</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ранний возраст (1-2 года) -->
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-blue-100 hover:border-blue-300 transition-colors">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="md:order-2 relative overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Ранний возраст 1-2 года"
                                class="w-full h-full object-cover min-h-[300px]"
                            />
                            <div class="absolute top-4 left-4 bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                от 1 года до 2 лет
                            </div>
                        </div>
                        <div class="md:order-1 p-8 md:p-12">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Ранний возраст</h3>
                            <p class="text-gray-600 mb-6">
                                В этом возрасте происходит активное развитие двигательных навыков, речи и познавательной активности. Ребенок начинает осваивать самостоятельную ходьбу, развивает навыки самообслуживания, активно познает окружающий мир.
                            </p>
                            <div class="bg-blue-50 rounded-xl p-4">
                                <p class="text-gray-700 text-sm">
                                    Ребенок активно познает окружающий мир, развивает координацию движений, начинает использовать речь для общения.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Ранний возраст (2-3 года) -->
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-green-100 hover:border-green-300 transition-colors">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="relative overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1604881991720-f91add269bed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Ранний возраст 2-3 года"
                                class="w-full h-full object-cover min-h-[300px]"
                            />
                            <div class="absolute top-4 left-4 bg-green-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                от 2 до 3 лет
                            </div>
                        </div>
                        <div class="p-8 md:p-12">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Ранний возраст</h3>
                            <div>
                                <h4 class="text-lg font-semibold mb-3 text-gray-900">Планируемые результаты к трем годам:</h4>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Развита крупная моторика, осваивает бег, прыжки</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Владеет простейшими навыками самообслуживания</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Владеет активной речью, использует простые предложения</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Различает и называет основные цвета, формы предметов</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-green-500 mr-2">✓</span>
                                        <span>Осваивает основы изобразительной деятельности</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Младшая группа (3-4 года) -->
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-pink-100 hover:border-pink-300 transition-colors">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="md:order-2 relative overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Младшая группа"
                                class="w-full h-full object-cover min-h-[300px]"
                            />
                            <div class="absolute top-4 left-4 bg-pink-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                от 3 до 4 лет
                            </div>
                        </div>
                        <div class="md:order-1 p-8 md:p-12">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Младшая группа</h3>
                            <div>
                                <h4 class="text-lg font-semibold mb-3 text-gray-900">Планируемые результаты к четырем годам:</h4>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start">
                                        <span class="text-pink-500 mr-2">✓</span>
                                        <span>Демонстрирует координацию движений, сохраняет равновесие</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-pink-500 mr-2">✓</span>
                                        <span>Владеет культурно-гигиеническими навыками</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-pink-500 mr-2">✓</span>
                                        <span>Произносит правильно гласные и согласные звуки</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-pink-500 mr-2">✓</span>
                                        <span>Демонстрирует познавательную активность</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-pink-500 mr-2">✓</span>
                                        <span>Активно взаимодействует со сверстниками в игре</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Средняя группа (4-5 лет) -->
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-purple-100 hover:border-purple-300 transition-colors">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="relative overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1597075958693-75173d1c837f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Средняя группа"
                                class="w-full h-full object-cover min-h-[300px]"
                            />
                            <div class="absolute top-4 left-4 bg-purple-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                от 4 до 5 лет
                            </div>
                        </div>
                        <div class="p-8 md:p-12">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Средняя группа</h3>
                            <div>
                                <h4 class="text-lg font-semibold mb-3 text-gray-900">Планируемые результаты к пяти годам:</h4>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Демонстрирует координацию, быстроту, силу, выносливость</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Стремится узнать о правилах здорового образа жизни</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Инициативен в разговоре, использует разные типы реплик</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Задает много вопросов поискового характера</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-purple-500 mr-2">✓</span>
                                        <span>Владеет количественным и порядковым счетом в пределах пяти</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Старшая группа (5-6 лет) -->
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-yellow-100 hover:border-yellow-300 transition-colors">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="md:order-2 relative overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1611885936074-a6b0cd343a99?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Старшая группа"
                                class="w-full h-full object-cover min-h-[300px]"
                            />
                            <div class="absolute top-4 left-4 bg-yellow-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                от 5 до 6 лет
                            </div>
                        </div>
                        <div class="md:order-1 p-8 md:p-12">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Старшая группа</h3>
                            <div>
                                <h4 class="text-lg font-semibold mb-3 text-gray-900">Планируемые результаты к шести годам:</h4>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start">
                                        <span class="text-yellow-500 mr-2">✓</span>
                                        <span>Демонстрирует выносливость, быстроту, силу, гибкость, ловкость</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-yellow-500 mr-2">✓</span>
                                        <span>Владеет основными способами укрепления здоровья</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-yellow-500 mr-2">✓</span>
                                        <span>Демонстрирует более сложные формы общения</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-yellow-500 mr-2">✓</span>
                                        <span>Проявляет более развитые речевые навыки</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-yellow-500 mr-2">✓</span>
                                        <span>Демонстрирует развитые познавательные способности</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Подготовительная к школе группа (6-7 лет) -->
            <div class="max-w-6xl mx-auto mb-12">
                <div class="bg-gradient-to-r from-orange-50 to-blue-50 rounded-2xl shadow-xl overflow-hidden border-2 border-orange-200 hover:border-orange-400 transition-colors">
                    <div class="grid md:grid-cols-2 gap-0">
                        <div class="relative overflow-hidden">
                            <img 
                                src="https://images.unsplash.com/photo-1607586501844-9a7f11af251c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Подготовительная группа"
                                class="w-full h-full object-cover min-h-[300px]"
                            />
                            <div class="absolute top-4 left-4 bg-gradient-to-r from-orange-500 to-blue-500 text-white px-4 py-2 rounded-full text-sm font-bold">
                                от 6 до 7 лет
                            </div>
                        </div>
                        <div class="p-8 md:p-12">
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Подготовительная к школе группа</h3>
                            <p class="text-gray-600 mb-6">
                                К моменту завершения дошкольного образования ребенок достигает уровня развития, необходимого и достаточного для успешного освоения образовательных программ начального общего образования.
                            </p>
                            <div>
                                <h4 class="text-lg font-semibold mb-3 text-gray-900">Планируемые результаты:</h4>
                                <ul class="space-y-2 text-gray-700 text-sm">
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Физически развит, владеет основными движениями</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Любознателен, активен, интересуется новым</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Овладевает средствами общения и способами взаимодействия</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Способен решать интеллектуальные и личностные задачи</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="text-orange-500 mr-2">✓</span>
                                        <span>Овладевает универсальными предпосылками учебной деятельности</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
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
                    Приходите на экскурсию и узнайте больше о наших группах
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
