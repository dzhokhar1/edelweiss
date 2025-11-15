<?php
/**
 * Главная страница (Local Version)
 * Дизайн по образцу tsdkids.ru
 */
require_once __DIR__ . '/config.php';

get_header();
?>

<main class="min-h-screen bg-white">
    <?php
    // Hero секция
    get_template_part('hero');
    ?>
    
    <!-- Секция "Больше, чем сад" -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                    Больше, чем сад. Пространство для создания будущего.
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-4">
                    «Эдельвейс» — это детский сад, работающий по образовательной программе дошкольного образования, разработанной в соответствии с федеральным государственным образовательным стандартом дошкольного образования (ФГОС ДО) и федеральной образовательной программой дошкольного образования (ФОП ДО). Мы создаем условия для позитивной социализации и индивидуализации, развития личности детей дошкольного возраста.
                </p>
                <p class="text-lg md:text-xl text-gray-700 font-semibold">
                    Наш подход строится на трёх ключевых принципах:
                </p>
            </div>
            
            <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
                <!-- Принцип 1 -->
                <div class="bg-green-50 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Социально-эмоциональное развитие</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Развитие эмпатии, коммуникации и саморегуляции. Формирование здоровых отношений с окружающими.
                    </p>
                </div>
                
                <!-- Принцип 2 -->
                <div class="bg-blue-50 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Познавательное развитие</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Развитие любознательности, способности решать задачи и критически мыслить. Формирование основ логики и анализа.
                    </p>
                </div>
                
                <!-- Принцип 3 -->
                <div class="bg-green-50 rounded-2xl p-8 text-center">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Физическое развитие</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Развитие крупной и мелкой моторики, координации движений. Формирование здоровых привычек и активного образа жизни.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция "Мы не просто даём знания" -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 text-gray-900">
                    Мы не просто даём знания — мы учим детей думать
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-8">
                    Наша программа развивает в игровой форме навыки ребенка:
                </p>
            </div>
            
            <div class="max-w-5xl mx-auto">
                <div class="flex flex-wrap justify-center gap-4 mb-12">
                    <span class="px-6 py-3 bg-white rounded-full text-gray-700 font-medium shadow-sm hover:shadow-md transition-shadow">речь</span>
                    <span class="px-6 py-3 bg-white rounded-full text-gray-700 font-medium shadow-sm hover:shadow-md transition-shadow">память</span>
                    <span class="px-6 py-3 bg-white rounded-full text-gray-700 font-medium shadow-sm hover:shadow-md transition-shadow">концентрация</span>
                    <span class="px-6 py-3 bg-white rounded-full text-gray-700 font-medium shadow-sm hover:shadow-md transition-shadow">эмоциональный интеллект</span>
                    <span class="px-6 py-3 bg-white rounded-full text-gray-700 font-medium shadow-sm hover:shadow-md transition-shadow">внимание</span>
                </div>
                
                <p class="text-center text-lg text-gray-700 leading-relaxed max-w-3xl mx-auto">
                    В «Эдельвейсе» не бывает мелочей. Каждый аспект нашей образовательной программы нацелен на гармоничное развитие и психологический комфорт вашего ребенка.
                </p>
            </div>
        </div>
    </section>
    
    <!-- Секция "Золотой Стандарт" -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-gray-900">
                    Наш Золотой Стандарт:
                </h2>
                <p class="text-xl md:text-2xl text-gray-700 font-semibold">
                    4 принципа «Эдельвейса»
                </p>
            </div>
            
            <div class="max-w-6xl mx-auto space-y-12">
                <!-- Принцип 1 -->
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <img 
                            src="https://images.unsplash.com/photo-1761604478724-13fe879468cf?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Персональный подход"
                            class="rounded-2xl shadow-lg w-full"
                        />
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">ПЕРСОНАЛЬНЫЙ ПОДХОД</h3>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Мы не работаем с группой детей «по общей программе». Для каждого ребенка мы выстраиваем индивидуальную траекторию развития с учетом его особенностей и потребностей.
                        </p>
                    </div>
                </div>
                
                <!-- Принцип 2 -->
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="md:order-2">
                        <img 
                            src="https://images.unsplash.com/photo-1544772711-57da9c7368fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Команда профессионалов"
                            class="rounded-2xl shadow-lg w-full"
                        />
                    </div>
                    <div class="md:order-1">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">КОМАНДА ПРОФЕССИОНАЛОВ</h3>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Наша команда — это опытные педагоги и специалисты. Профессиональные воспитатели превращают программу в увлекательную игру, которая помогает ребенку учиться с удовольствием.
                        </p>
                    </div>
                </div>
                
                <!-- Принцип 3 -->
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <img 
                            src="https://images.unsplash.com/photo-1740493430383-a0bfff9550a5?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Безопасная среда"
                            class="rounded-2xl shadow-lg w-full"
                        />
                    </div>
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">ПРОДУМАННАЯ СРЕДА И АБСОЛЮТНАЯ БЕЗОПАСНОСТЬ</h3>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Наша среда — это научный инструмент, где каждый элемент целенаправленно и безопасно формирует развитие ребенка под наблюдением наших специалистов.
                        </p>
                    </div>
                </div>
                
                <!-- Принцип 4 -->
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="md:order-2">
                        <img 
                            src="https://images.unsplash.com/photo-1623922220849-c388b274ccce?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Партнерство с семьей"
                            class="rounded-2xl shadow-lg w-full"
                        />
                    </div>
                    <div class="md:order-1">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">ПАРТНЕРСТВО С СЕМЬЕЙ — СИЛЬНОЕ СООБЩЕСТВО</h3>
                        <p class="text-lg text-gray-700 leading-relaxed">
                            Мы не просто оказываем «услугу», мы работаем в команде с родителями. Открытый диалог и регулярная обратная связь — основа нашего взаимодействия. Мы формируем закрытое сообщество семей-единомышленников.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Дополнительные преимущества -->
            <div class="max-w-5xl mx-auto mt-16 grid grid-cols-2 md:grid-cols-4 gap-6">
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Ежедневные прогулки на свежем воздухе</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium text-gray-700">100% свободная от гаджетов среда</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Сбалансированное 4-разовое питание</p>
                </div>
                <div class="bg-white rounded-xl p-6 shadow-lg text-center">
                    <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                        </svg>
                    </div>
                    <p class="text-sm font-medium text-gray-700">Малочисленный состав до 8 детей</p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция "Наши программы" -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                    Наши программы
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-4">
                    В «Эдельвейсе» мы работаем с детьми от 2 месяцев до 7 лет по образовательной программе, соответствующей ФГОС ДО и ФОП ДО.
                </p>
            </div>
            
            <div class="max-w-6xl mx-auto space-y-12">
                <!-- Программа 1: Основная образовательная программа -->
                <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-8 md:p-12">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div>
                            <div class="inline-block px-4 py-2 bg-orange-500 text-white rounded-full text-sm font-bold mb-4">
                                Основная программа
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Образовательная программа дошкольного образования</h3>
                            <p class="text-lg text-gray-700 mb-4">
                                Программа психолого-педагогической поддержки позитивной социализации и индивидуализации, развития личности детей дошкольного возраста.
                            </p>
                            <ul class="space-y-3 text-gray-700 mb-6">
                                <li class="flex items-start">
                                    <span class="text-orange-500 mr-2">✓</span>
                                    <span>Соответствует ФГОС ДО и ФОП ДО</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-orange-500 mr-2">✓</span>
                                    <span>Возрастные группы: от 2 месяцев до 7 лет</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-orange-500 mr-2">✓</span>
                                    <span>Индивидуальный подход к каждому ребенку</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-orange-500 mr-2">✓</span>
                                    <span>Подготовка к школе</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-orange-500 mr-2">✓</span>
                                    <span>Учитывает региональные особенности Чеченской Республики</span>
                                </li>
                            </ul>
                            <a href="/programs/#main-program" class="inline-flex items-center gap-2 px-6 py-3 bg-orange-500 text-white rounded-lg font-medium hover:bg-orange-600 transition-colors">
                                Узнать подробнее
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                        <div>
                            <img 
                                src="https://images.unsplash.com/photo-1607586501844-9a7f11af251c?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Образовательная программа"
                                class="rounded-xl shadow-lg w-full"
                            />
                        </div>
                    </div>
                </div>
                
                <!-- Программа 2: Буквоежки -->
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-8 md:p-12">
                    <div class="grid md:grid-cols-2 gap-8 items-center">
                        <div class="md:order-2">
                            <img 
                                src="https://images.unsplash.com/photo-1597075958693-75173d1c837f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                                alt="Буквоежки"
                                class="rounded-xl shadow-lg w-full"
                            />
                        </div>
                        <div class="md:order-1">
                            <div class="inline-block px-4 py-2 bg-blue-500 text-white rounded-full text-sm font-bold mb-4">
                                Дополнительная программа
                            </div>
                            <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Кружок «Буквоежки»</h3>
                            <p class="text-lg text-gray-700 mb-4">
                                Программа дополнительного образования по обучению чтению для детей 5-7 лет.
                            </p>
                            <p class="text-lg text-gray-700 mb-4 font-semibold">Особенности программы:</p>
                            <ul class="space-y-3 text-gray-700 mb-6">
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">✓</span>
                                    <span>Методика "Грамотейка" логопеда, кандидата педагогических наук Надежды Сергеевны Жуковой</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">✓</span>
                                    <span>Слоговое чтение: от простого к сложному</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">✓</span>
                                    <span>Логопедические упражнения для совершенствования артикуляционной моторики</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">✓</span>
                                    <span>Занятия 2 раза в неделю</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-blue-500 mr-2">✓</span>
                                    <span>Подготовка к успешному обучению в школе</span>
                                </li>
                            </ul>
                            <a href="/programs/#bukvoeshki" class="inline-flex items-center gap-2 px-6 py-3 bg-blue-500 text-white rounded-lg font-medium hover:bg-blue-600 transition-colors">
                                Узнать подробнее
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция "Возрастные группы" -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-6 text-gray-900">
                    Возрастные группы
                </h2>
                <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                    Мы принимаем детей от 2 месяцев до 7 лет. Каждая группа имеет свою программу развития, соответствующую возрастным особенностям детей.
                </p>
            </div>
            
            <div class="max-w-7xl mx-auto grid md:grid-cols-2 lg:grid-cols-3 gap-6 mb-8">
                <!-- Младенческий возраст -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-video rounded-xl overflow-hidden mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1544772711-57da9c7368fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                            alt="Младенческий возраст"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Младенческий возраст</h3>
                    <p class="text-sm text-gray-600 mb-3">от 2 месяцев до 1 года</p>
                    <p class="text-gray-700 text-sm">
                        Развитие двигательной активности, речи, познавательной активности. Формирование базовых навыков общения и взаимодействия с окружающим миром.
                    </p>
                </div>
                
                <!-- Ранний возраст (1-3 года) -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-video rounded-xl overflow-hidden mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                            alt="Ранний возраст"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Ранний возраст</h3>
                    <p class="text-sm text-gray-600 mb-3">от 1 года до 3 лет</p>
                    <p class="text-gray-700 text-sm">
                        Активное развитие двигательных навыков, речи и познавательной активности. Освоение самостоятельной ходьбы, развитие навыков самообслуживания.
                    </p>
                </div>
                
                <!-- Младшая группа -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-video rounded-xl overflow-hidden mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1604881991720-f91add269bed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                            alt="Младшая группа"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Младшая группа</h3>
                    <p class="text-sm text-gray-600 mb-3">от 3 до 4 лет</p>
                    <p class="text-gray-700 text-sm">
                        Развитие координации движений, культурно-гигиенических навыков, речи, познавательной активности. Формирование основ социального поведения.
                    </p>
                </div>
                
                <!-- Средняя группа -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-video rounded-xl overflow-hidden mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                            alt="Средняя группа"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Средняя группа</h3>
                    <p class="text-sm text-gray-600 mb-3">от 4 до 5 лет</p>
                    <p class="text-gray-700 text-sm">
                        Развитие координации, быстроты, силы, выносливости. Формирование интереса к здоровому образу жизни. Развитие речи, познавательной активности, творческих способностей.
                    </p>
                </div>
                
                <!-- Старшая группа -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-video rounded-xl overflow-hidden mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                            alt="Старшая группа"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Старшая группа</h3>
                    <p class="text-sm text-gray-600 mb-3">от 5 до 6 лет</p>
                    <p class="text-gray-700 text-sm">
                        Развитие выносливости, быстроты, силы, гибкости. Формирование мотивации к укреплению здоровья. Развитие сложных форм общения, познавательных способностей.
                    </p>
                </div>
                
                <!-- Подготовительная группа -->
                <div class="bg-white rounded-2xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                    <div class="aspect-video rounded-xl overflow-hidden mb-4">
                        <img 
                            src="https://images.unsplash.com/photo-1597075958693-75173d1c837f?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                            alt="Подготовительная группа"
                            class="w-full h-full object-cover"
                        />
                    </div>
                    <h3 class="text-xl font-bold mb-2 text-gray-900">Подготовительная группа</h3>
                    <p class="text-sm text-gray-600 mb-3">от 6 до 7 лет</p>
                    <p class="text-gray-700 text-sm">
                        Комплексная подготовка к школе. Развитие общих учебных умений и навыков, готовности сенсомоторной и интеллектуальной сфер. Формирование предпосылок учебной деятельности.
                    </p>
                </div>
            </div>
            
            <div class="text-center">
                <a href="/groups/" class="inline-flex items-center gap-2 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-xl text-lg font-bold shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                    Подробнее о группах
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                    </svg>
                </a>
            </div>
        </div>
    </section>
    
    <!-- Секция "Особенности работы" -->
    <section class="py-16 md:py-24 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-8 text-gray-900">
                    Особенности нашей работы
                </h2>
            </div>
            
            <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
                <!-- Особенность 1 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Индивидуальный подход</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Для каждого ребенка мы выстраиваем индивидуальную траекторию развития с учетом его особенностей и потребностей. Мы не работаем с группой детей «по общей программе».
                    </p>
                </div>
                
                <!-- Особенность 2 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Развитие речи и чтения</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Особое внимание уделяем развитию речи и обучению чтению. Программа "Буквоежки" помогает детям 5-7 лет освоить слоговое чтение по методике Н.С. Жуковой.
                    </p>
                </div>
                
                <!-- Особенность 3 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Подготовка к школе</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Комплексная подготовка к успешному обучению в школе. Развиваем общие учебные умения и навыки, готовность сенсомоторной и интеллектуальной сфер дошкольника.
                    </p>
                </div>
                
                <!-- Особенность 4 -->
                <div class="bg-white rounded-2xl p-8 shadow-lg">
                    <div class="w-16 h-16 bg-purple-500 rounded-full flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold mb-4 text-gray-900">Логопедическая поддержка</h3>
                    <p class="text-gray-700 leading-relaxed">
                        В программе "Буквоежки" включены элементы логопедических упражнений для совершенствования артикуляционной моторики, что способствует правильному развитию речи.
                    </p>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Секция "Режим работы" -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center mb-12">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-4 text-gray-900">
                    Режим работы
                </h2>
                <p class="text-lg text-gray-700">
                    Мы работаем по 12-часовому режиму, обеспечивая комфортное пребывание детей в детском саду
                </p>
            </div>
            
            <div class="max-w-4xl mx-auto space-y-6">
                <!-- Основной режим работы -->
                <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-xl p-6 md:p-8 border-2 border-orange-200">
                    <div class="text-center">
                        <h3 class="text-2xl md:text-3xl font-bold mb-4 text-gray-900">Режим работы детского сада</h3>
                        <div class="mb-6">
                            <p class="text-4xl md:text-5xl font-bold text-orange-600 mb-2">7:00 — 19:00</p>
                            <p class="text-lg text-gray-700 mb-2">Понедельник — Пятница</p>
                            <p class="text-base text-gray-600">Суббота и Воскресенье — выходные дни</p>
                        </div>
                        <p class="text-base text-gray-700 max-w-2xl mx-auto">
                            Рабочая неделя состоит из 5 дней. Мы обеспечиваем полный цикл образовательной деятельности в соответствии с образовательной программой.
                        </p>
                    </div>
                </div>
                
                <!-- Примерный режим дня -->
                <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-xl p-6 md:p-8 border-2 border-blue-200">
                    <h3 class="text-xl md:text-2xl font-bold mb-4 text-gray-900 text-center">Примерный режим дня</h3>
                    <div class="grid md:grid-cols-2 gap-4 text-sm md:text-base">
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">7:00 - 8:30</span>
                            <span class="text-gray-700">Прием детей, осмотр, игры, утренняя гимнастика</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">8:30 - 9:00</span>
                            <span class="text-gray-700">Подготовка к завтраку, завтрак</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">9:00 - 10:00</span>
                            <span class="text-gray-700">Образовательная деятельность</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">10:00 - 10:30</span>
                            <span class="text-gray-700">Второй завтрак</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">10:30 - 12:00</span>
                            <span class="text-gray-700">Прогулка, игры на свежем воздухе</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">12:00 - 12:30</span>
                            <span class="text-gray-700">Подготовка к обеду, обед</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">12:30 - 15:30</span>
                            <span class="text-gray-700">Подготовка ко сну, сон</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">15:30 - 16:00</span>
                            <span class="text-gray-700">Постепенный подъем, полдник</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">16:00 - 18:30</span>
                            <span class="text-gray-700">Активное бодрствование, игры, прогулки</span>
                        </div>
                        <div class="flex items-start gap-3">
                            <span class="font-bold text-blue-600 flex-shrink-0">18:30 - 19:00</span>
                            <span class="text-gray-700">Подготовка к ужину, ужин, уход домой</span>
                        </div>
                    </div>
                    <p class="text-xs text-gray-600 mt-4 text-center italic">
                        * Режим дня может незначительно отличаться в зависимости от возрастной группы и индивидуальных особенностей детей
                    </p>
                </div>
                
                <!-- Питание -->
                <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-xl p-6 md:p-8 border-2 border-green-200">
                    <div class="text-center mb-6">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-4">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-2 text-gray-900">Сбалансированное 4-разовое питание</h3>
                        <p class="text-base text-gray-700">
                            Мы обеспечиваем полноценное и разнообразное питание, соответствующее требованиям СанПиН 2.3/2.4.3590-20
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-4 mb-6">
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Завтрак</h4>
                                    <p class="text-sm text-gray-600">8:30 - 9:00</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-700">
                                Полноценный завтрак для начала активного дня
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-yellow-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Второй завтрак</h4>
                                    <p class="text-sm text-gray-600">10:00 - 10:30</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-700">
                                Легкий перекус для поддержания энергии
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-red-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Обед</h4>
                                    <p class="text-sm text-gray-600">12:00 - 12:30</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-700">
                                Основной прием пищи с горячими блюдами
                            </p>
                        </div>
                        
                        <div class="bg-white rounded-lg p-4 shadow-sm">
                            <div class="flex items-center gap-3 mb-2">
                                <div class="w-10 h-10 bg-purple-100 rounded-lg flex items-center justify-center flex-shrink-0">
                                    <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </div>
                                <div>
                                    <h4 class="font-bold text-gray-900">Полдник</h4>
                                    <p class="text-sm text-gray-600">15:30 - 16:00</p>
                                </div>
                            </div>
                            <p class="text-sm text-gray-700">
                                Легкий полдник после дневного сна
                            </p>
                        </div>
                    </div>
                    
                    <div class="bg-white rounded-lg p-4 shadow-sm">
                        <p class="text-sm text-gray-700 text-center">
                            <span class="font-semibold">Ужин</span> (18:30 - 19:00) — для детей, остающихся на полный день
                        </p>
                    </div>
                    
                    <p class="text-xs text-gray-600 mt-4 text-center italic">
                        * Меню составляется с учетом возрастных особенностей детей и требований к сбалансированному питанию
                    </p>
                </div>
            </div>
            
            <div class="max-w-4xl mx-auto mt-8 text-center">
                <p class="text-sm text-gray-600 mb-6">
                    Поддерживаем оплату Материнским (семейным) капиталом
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="/enrollment/" class="px-8 py-4 bg-orange-500 text-white rounded-md text-lg font-medium hover:bg-orange-600 transition-colors">
                        Записаться онлайн
                    </a>
                    <a href="https://wa.me/79033899090" target="_blank" class="px-8 py-4 border-2 border-gray-300 text-gray-700 rounded-md text-lg font-medium hover:border-gray-400 hover:bg-gray-50 transition-colors">
                        Задать вопрос
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php
    // Отзывы родителей
    get_template_part('reviews');
    ?>
    
    <!-- Секция "Лицензия и документы" -->
    <section class="py-16 md:py-24 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <div class="bg-gradient-to-r from-green-50 to-blue-50 rounded-2xl p-8 md:p-12 border-2 border-green-200">
                    <div class="text-center mb-8">
                        <div class="w-20 h-20 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="w-10 h-10 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Лицензия и документы</h2>
                        <p class="text-lg text-gray-700 mb-6">
                            Наша образовательная деятельность полностью соответствует требованиям законодательства Российской Федерации
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6 mb-8">
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Соответствие стандартам</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>ФГОС ДО (Федеральный государственный образовательный стандарт дошкольного образования)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>ФОП ДО (Федеральная образовательная программа дошкольного образования)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>СанПиН 2.3/2.4.3590-20</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="bg-white rounded-xl p-6 shadow-md">
                            <h3 class="text-xl font-bold mb-3 text-gray-900">Документы</h3>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>Образовательная программа принята Педагогическим советом</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>Учтено мнение родителей (протокол от 01.09.2025 № 1)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="text-green-500 mr-2">✓</span>
                                    <span>Программа утверждена приказом ИП от 01.09.2025</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="text-center">
                        <a href="/about/" class="inline-flex items-center gap-2 px-8 py-4 bg-green-600 text-white rounded-xl text-lg font-bold shadow-lg hover:bg-green-700 transition-colors">
                            Подробнее о документах
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Контакты -->
    <section class="py-16 md:py-24 bg-gradient-to-b from-gray-50 to-white">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold mb-12 text-center text-gray-900">Контакты</h2>
                
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <!-- Адрес -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-orange-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2">Адрес</h3>
                                <p class="text-lg font-medium text-gray-900">г. Грозный, ул. Умара Кадырова, 7</p>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Телефон -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-blue-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2">Телефон</h3>
                                <a href="tel:+79033899090" class="text-lg font-medium text-gray-900 hover:text-orange-600 transition-colors block">+7 903 389-90-90</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Почта -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-green-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2">Почта</h3>
                                <a href="mailto:edelweiss@mail.ru" class="text-lg font-medium text-gray-900 hover:text-orange-600 transition-colors block">edelweiss@mail.ru</a>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Режим работы -->
                    <div class="bg-white rounded-2xl p-6 shadow-lg border border-gray-100 hover:shadow-xl transition-shadow">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-purple-100 rounded-xl flex items-center justify-center flex-shrink-0">
                                <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-sm font-semibold text-gray-500 uppercase mb-2">Режим работы</h3>
                                <p class="text-lg font-medium text-gray-900">Пн-Пт: 7:00 — 19:00</p>
                                <p class="text-sm text-gray-600 mt-1">Сб-Вс: выходной</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Кнопка -->
                <div class="text-center">
                    <a href="/enrollment/" class="inline-flex items-center gap-3 px-8 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-xl text-lg font-bold shadow-xl hover:shadow-2xl transition-all hover:scale-105">
                        <span>Записаться в детский сад</span>
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
