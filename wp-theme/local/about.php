<?php
/**
 * Страница "О саде"
 */
require_once __DIR__ . '/config.php';

get_header();
?>

<main class="min-h-screen bg-background">
    <!-- Hero секция -->
    <section class="relative py-16 md:py-24 bg-gradient-to-br from-primary/10 to-background">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 font-display">О детском саде Эдельвейс</h1>
                <p class="text-xl md:text-2xl text-muted-foreground">
                    Программа психолого-педагогической поддержки позитивной социализации и индивидуализации, развития личности детей дошкольного возраста
                </p>
            </div>
        </div>
    </section>

    <!-- О детском саде -->
    <section class="py-12 md:py-20">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">О детском саде Эдельвейс</h2>
                        <div class="prose prose-lg max-w-none">
                            <p class="text-lg text-gray-700 mb-6">
                                Образовательная программа дошкольного образования индивидуального предпринимателя Жамалуллайла Медины Сайд-Эмидиновны разработана в соответствии с федеральным государственным образовательным стандартом дошкольного образования (ФГОС ДО) и федеральной образовательной программой дошкольного образования (ФОП ДО).
                            </p>
                            <p class="text-lg text-gray-700 mb-6">
                                Программа отвечает образовательному запросу социума, обеспечивает развитие личности детей дошкольного возраста в различных видах общения и деятельности с учетом их возрастных, индивидуальных, психологических и физиологических особенностей.
                            </p>
                            <p class="text-lg text-gray-700">
                                Мы создаем условия для позитивной социализации и индивидуализации, развития личности детей дошкольного возраста, достижения уровня развития, необходимого для успешного освоения образовательных программ начального общего образования.
                            </p>
                        </div>
                    </div>
                    <div class="rounded-2xl overflow-hidden shadow-xl">
                        <img 
                            src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Дети в детском саду"
                            class="w-full h-full object-cover"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Наша миссия и ценности -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Наша миссия и ценности</h2>
                
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Разностороннее развитие</h3>
                        <p class="text-gray-700">
                            Развитие детей дошкольного возраста с учетом их возрастных и индивидуальных особенностей, достижение уровня развития, необходимого для успешного освоения образовательных программ начального общего образования.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Подготовка к школе</h3>
                        <p class="text-gray-700">
                            Достижение детьми на этапе завершения дошкольного образования уровня развития, необходимого и достаточного для успешного освоения ими образовательных программ начального общего образования.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mb-4">
                            <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Развитие личности</h3>
                        <p class="text-gray-700">
                            Развитие личности детей через различные виды деятельности, формирование общей культуры личности детей, в том числе ценностей здорового образа жизни.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Образовательная программа -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Образовательная программа</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Соответствие стандартам</h3>
                        <p class="text-gray-700 mb-4">
                            Программа разработана в соответствии с:
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700 mb-6">
                            <li>Федеральным государственным образовательным стандартом дошкольного образования (ФГОС ДО)</li>
                            <li>Федеральной образовательной программой дошкольного образования (ФОП ДО)</li>
                        </ul>
                        <div class="mt-6">
                            <img 
                                src="https://images.unsplash.com/photo-1604881991720-f91add269bed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                                alt="Образовательная деятельность"
                                class="rounded-xl shadow-md w-full"
                            />
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Структура программы</h3>
                        <div class="space-y-4">
                            <div>
                                <h4 class="text-lg font-semibold mb-2 text-gray-900">Целевой раздел</h4>
                                <p class="text-gray-700 text-sm">
                                    Цели, задачи, принципы и подходы к формированию программы; планируемые результаты освоения программы; характеристики особенностей развития детей.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2 text-gray-900">Содержательный раздел</h4>
                                <p class="text-gray-700 text-sm">
                                    Описание задач и содержания образовательной деятельности по каждой из образовательных областей для всех возрастных групп; вариативные формы, способы, методы и средства реализации программы.
                                </p>
                            </div>
                            <div>
                                <h4 class="text-lg font-semibold mb-2 text-gray-900">Организационный раздел</h4>
                                <p class="text-gray-700 text-sm">
                                    Психолого-педагогические и кадровые условия реализации программы; организация развивающей предметно-пространственной среды; материально-техническое обеспечение программы.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Региональный компонент</h3>
                        <p class="text-gray-700 mb-4">
                            Программа учитывает региональные особенности Чеченской Республики, включая социокультурные нормы, традиции семьи, общества и государства. Учитываются этнокультурные особенности развития детей.
                        </p>
                        <div class="mt-6">
                            <img 
                                src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=600" 
                                alt="Региональные особенности"
                                class="rounded-xl shadow-md w-full"
                            />
                        </div>
                    </div>

                    <div class="bg-gradient-to-br from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg">
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Особенности программы</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Срок реализации: 5 лет (2025 – 2030 гг.)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Учитывает особенности развития современных детей в цифровом обществе</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Включает парциальные программы дошкольного образования</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Рабочая программа воспитания</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">✓</span>
                                <span>Коррекционно-развивающая работа</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Принципы работы -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Принципы работы</h2>
                
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-pink-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Полноценное проживание детства</h3>
                        <p class="text-gray-700">
                            Полноценное проживание ребенком всех этапов детства (младенческого, раннего и дошкольного возраста), обогащение детского развития.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Сотрудничество с родителями</h3>
                        <p class="text-gray-700">
                            Содействие и сотрудничество детей и родителей, совершеннолетних членов семьи, принимающих участие в воспитании детей, а также педагогических работников.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Поддержка инициативы</h3>
                        <p class="text-gray-700">
                            Поддержка инициативы детей в различных видах деятельности, признание ребенка полноценным участником образовательных отношений.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-yellow-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Социокультурные нормы</h3>
                        <p class="text-gray-700">
                            Приобщение детей к социокультурным нормам, традициям семьи, общества и государства, формирование познавательных интересов и познавательных действий ребенка.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Возрастная адекватность</h3>
                        <p class="text-gray-700">
                            Возрастная адекватность дошкольного образования - соответствие условий, требований, методов возрасту и особенностям развития.
                        </p>
                    </div>
                    <div class="bg-white rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-red-100 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-3 text-gray-900">Индивидуальные особенности</h3>
                        <p class="text-gray-700">
                            Построение образовательной деятельности на основе индивидуальных особенностей каждого ребенка, при котором сам ребенок становится активным в выборе содержания своего образования.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Особенности развития современных детей -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div>
                        <img 
                            src="https://images.unsplash.com/photo-1611885936074-a6b0cd343a99?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Современные дети"
                            class="rounded-2xl shadow-xl w-full"
                        />
                    </div>
                    <div>
                        <h2 class="text-3xl md:text-4xl font-bold mb-6 text-gray-900">Особенности развития современных детей</h2>
                        <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-xl p-8 shadow-lg">
                            <p class="text-lg text-gray-700 mb-4">
                                Программа учитывает особенности развития современных детей, вызванные жизнью в цифровом обществе. Мы понимаем, что современные дети растут в условиях активного использования цифровых технологий, и это влияет на их развитие и обучение.
                            </p>
                            <p class="text-lg text-gray-700">
                                Наша программа адаптирована к современным условиям, сохраняя при этом традиционные ценности и подходы к развитию детей дошкольного возраста.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Взаимодействие с родителями -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Взаимодействие с родителями</h2>
                <div class="grid md:grid-cols-2 gap-8 items-center">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <p class="text-lg text-gray-700 mb-6">
                            Программа учитывает мнение родителей (законных представителей) и обеспечивает их участие в образовательном процессе. Мы считаем, что сотрудничество с семьей является основой успешного развития ребенка.
                        </p>
                        <p class="text-lg text-gray-700 mb-4 font-semibold">
                            Особенности взаимодействия педагогического коллектива с семьями обучающихся включают:
                        </p>
                        <ul class="list-disc list-inside space-y-2 text-gray-700">
                            <li>Открытый диалог и регулярную обратную связь</li>
                            <li>Учет мнения родителей при формировании программы</li>
                            <li>Психолого-педагогическую поддержку семьи</li>
                            <li>Повышение компетентности родителей в вопросах развития и образования детей</li>
                        </ul>
                    </div>
                    <div>
                        <img 
                            src="https://images.unsplash.com/photo-1544772711-57da9c7368fa?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Взаимодействие с родителями"
                            class="rounded-2xl shadow-xl w-full"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Документы и лицензирование -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Документы и лицензирование</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 shadow-lg">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Принятие программы</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2">✓</span>
                                <span><strong>Принята:</strong> Педагогическим советом (протокол от 01.09.2025 № 1)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2">✓</span>
                                <span><strong>Утверждена:</strong> приказом ИП от 01.09.2025</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2">✓</span>
                                <span><strong>Учтено мнение родителей:</strong> протокол от 01.09.2025 № 1</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-green-600 mr-2">✓</span>
                                <span><strong>Срок реализации:</strong> 5 лет (2025 – 2030 гг.)</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-6m6 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Соответствие стандартам</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">✓</span>
                                <span>ФГОС ДО (Федеральный государственный образовательный стандарт дошкольного образования)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">✓</span>
                                <span>ФОП ДО (Федеральная образовательная программа дошкольного образования)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">✓</span>
                                <span>СанПиН 2.3/2.4.3590-20</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!-- Материально-техническое обеспечение и кадры -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Условия реализации программы</h2>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Материально-техническое обеспечение</h3>
                        <p class="text-gray-700 mb-4">
                            Наш детский сад оснащен всем необходимым для полноценной реализации образовательной программы:
                        </p>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                <span>Развивающая предметно-пространственная среда, соответствующая возрастным особенностям детей</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                <span>Учебно-методическое обеспечение программы</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                <span>Примерный перечень литературных, музыкальных, художественных произведений</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">•</span>
                                <span>Безопасная и комфортная среда для детей</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Кадровые условия</h3>
                        <p class="text-gray-700 mb-4">
                            Наша команда — это опытные педагоги и специалисты:
                        </p>
                        <ul class="space-y-2 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                <span>Квалифицированные воспитатели с опытом работы</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                <span>Специалисты по развитию речи и логопедии</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                <span>Педагоги, работающие по методике Н.С. Жуковой</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-purple-600 mr-2">•</span>
                                <span>Постоянное повышение квалификации сотрудников</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-12 md:py-20 bg-gradient-to-r from-orange-500 to-pink-500">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-white">Готовы узнать больше?</h2>
                <p class="text-lg text-white/90 mb-8">
                    Приходите на экскурсию и познакомьтесь с нашим детским садом лично
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
