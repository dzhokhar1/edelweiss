<?php
/**
 * Страница "Адаптация"
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
                    Адаптация ребенка к детскому саду
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed">
                    Мы помогаем вашему ребенку мягко и комфортно привыкнуть к новой среде
                </p>
            </div>
        </div>
    </section>

    <!-- Что такое адаптация -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Что такое адаптация?</h2>
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg">
                            <p class="text-lg text-gray-700 mb-4">
                                Адаптация — это процесс привыкания ребенка к новым условиям, новым людям, новому режиму дня. Это важный этап в жизни каждого ребенка, который требует времени, терпения и поддержки со стороны взрослых.
                            </p>
                            <p class="text-lg text-gray-700">
                                В нашем детском саду мы создаем все условия для мягкой и комфортной адаптации каждого ребенка, учитывая его индивидуальные особенности и потребности.
                            </p>
                        </div>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img 
                            src="https://images.unsplash.com/photo-1544772711-57da9c7368fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Адаптация ребенка"
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Особенности адаптации в нашем саду -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Особенности адаптации в нашем саду</h2>
                
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Индивидуальный подход</h3>
                        <p class="text-gray-700">
                            Мы учитываем индивидуальные особенности каждого ребенка, его темперамент, привычки и потребности. Для каждого ребенка выстраивается индивидуальная траектория адаптации.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Мягкая адаптация</h3>
                        <p class="text-gray-700">
                            Возможен индивидуальный график посещения в первые дни и недели. Ребенок может начинать с короткого времени пребывания и постепенно увеличивать его до полного дня.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Поддержка родителей</h3>
                        <p class="text-gray-700">
                            Мы работаем в тесном сотрудничестве с родителями, предоставляем ежедневную обратную связь о том, как прошел день ребенка, его успехах и достижениях.
                        </p>
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Малые группы</h3>
                        <p class="text-gray-700">
                            Малокомплектные группы до 8 детей позволяют воспитателям уделить внимание каждому ребенку, создать комфортную атмосферу и помочь в адаптации.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Этапы адаптации -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Этапы адаптации</h2>
                
                <div class="space-y-8">
                    <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg border-2 border-orange-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">1</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Знакомство с садом</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    Первый этап — знакомство ребенка и родителей с детским садом. Мы проводим экскурсию, знакомим с воспитателями, показываем помещения, рассказываем о режиме дня и занятиях.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    Родители могут находиться вместе с ребенком в первые дни, чтобы он чувствовал себя в безопасности.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg border-2 border-blue-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">2</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Первые дни</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    Ребенок начинает посещать сад на короткое время (1-2 часа), постепенно привыкая к новой обстановке, воспитателям и детям.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    В это время мы внимательно наблюдаем за ребенком, помогаем ему освоиться, создаем комфортную атмосферу.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-8 shadow-lg border-2 border-green-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">3</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Привыкание к режиму</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    Постепенно время пребывания увеличивается, ребенок привыкает к режиму дня, участвует в занятиях, играет с другими детьми.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    Мы помогаем ребенку освоить все режимные моменты: прием пищи, сон, прогулки, занятия.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg border-2 border-purple-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-purple-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">4</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Полная адаптация</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    Ребенок полностью адаптировался к детскому саду, с удовольствием посещает его, активно участвует в занятиях, нашел друзей.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    Ребенок чувствует себя комфортно, доверяет воспитателям, легко расстается с родителями утром и радуется встрече вечером.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Рекомендации родителям -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Рекомендации родителям</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <img 
                            src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Рекомендации родителям"
                            class="rounded-xl mb-6 w-full"
                        />
                        <p class="text-lg text-gray-700 mb-6">
                            Успешная адаптация ребенка к детскому саду во многом зависит от поддержки родителей. Вот несколько рекомендаций:
                        </p>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-green-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-gray-900">Подготовьте ребенка заранее</h4>
                                    <p class="text-gray-700 text-sm">Расскажите ребенку о детском саде, о том, что там интересно, что он будет играть с другими детьми, заниматься интересными делами.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-gray-900">Придерживайтесь режима</h4>
                                    <p class="text-gray-700 text-sm">Постарайтесь заранее приучить ребенка к режиму дня детского сада: ранний подъем, завтрак, обед, дневной сон.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-gray-900">Будьте позитивны</h4>
                                    <p class="text-gray-700 text-sm">Ребенок чувствует ваше настроение. Если вы спокойны и уверены, ребенку будет легче адаптироваться.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-gray-900">Общайтесь с воспитателями</h4>
                                    <p class="text-gray-700 text-sm">Поддерживайте контакт с воспитателями, интересуйтесь, как прошел день ребенка, его успехами и достижениями.</p>
                                </div>
                            </div>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <div class="flex items-start gap-4">
                                <div class="flex-shrink-0 w-10 h-10 bg-pink-100 rounded-lg flex items-center justify-center">
                                    <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold mb-2 text-gray-900">Будьте терпеливы</h4>
                                    <p class="text-gray-700 text-sm">Адаптация — это процесс, который требует времени. У каждого ребенка свой темп адаптации, не сравнивайте его с другими детьми.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Поддержка психолога -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <img 
                            src="https://images.unsplash.com/photo-1604881991720-f91add269bed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Психологическая поддержка"
                            class="rounded-2xl shadow-xl w-full"
                        />
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Психолого-педагогическая поддержка</h2>
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg">
                            <p class="text-lg text-gray-700 mb-6">
                                В нашем детском саду созданы психолого-педагогические условия для успешной адаптации детей. Мы обеспечиваем:
                            </p>
                            <ul class="space-y-3 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-2">✓</span>
                                    <span>Психологическое сопровождение процесса адаптации</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-2">✓</span>
                                    <span>Индивидуальный подход к каждому ребенку</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-2">✓</span>
                                    <span>Создание комфортной и безопасной среды</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-2">✓</span>
                                    <span>Поддержку эмоционального благополучия детей</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-600 mr-2">✓</span>
                                    <span>Работу с родителями по вопросам адаптации</span>
                                </li>
                            </ul>
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
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Готовы начать?</h2>
                <p class="text-lg text-white/90 mb-8">
                    Приходите на экскурсию и узнайте больше о том, как мы помогаем детям адаптироваться
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
