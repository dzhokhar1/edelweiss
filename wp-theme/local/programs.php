<?php
/**
 * Страница "Программы" с подразделами
 */
require_once __DIR__ . '/config.php';

get_header();
?>

<main class="min-h-screen bg-background">
    <!-- Hero секция -->
    <section class="relative py-16 md:py-24 bg-gradient-to-br from-primary/10 to-background">
        <div class="container mx-auto px-4">
            <div class="max-w-3xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 font-display">Наши программы</h1>
                <p class="text-xl md:text-2xl text-muted-foreground">
                    Комплексный подход к развитию ребенка: языки, творчество, логопедия и подготовка к школе
                </p>
            </div>
        </div>
    </section>

    <!-- Навигация по подразделам -->
    <section class="sticky top-16 md:top-20 z-40 bg-background/98 backdrop-blur-md border-b shadow-sm">
        <div class="container mx-auto px-4">
            <nav class="flex overflow-x-auto gap-4 py-4 scrollbar-hide">
                <a href="#overview" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Обзор</a>
                <a href="#main-program" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Основная программа</a>
                <a href="#bukvoeshki" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Буквоежки</a>
                <a href="#languages" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Изучение языков</a>
                <a href="#music" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Музыка</a>
                <a href="#speech" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Развитие речи</a>
                <a href="#school-prep" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Подготовка к школе</a>
                <a href="#logopedics" class="flex-shrink-0 px-4 py-2 text-sm font-medium hover:text-primary transition-colors whitespace-nowrap">Логопедия</a>
            </nav>
        </div>
    </section>

    <!-- Обзор программ -->
    <section id="overview" class="py-12 md:py-20 bg-white scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center text-gray-900">Обзор программ</h2>
                <p class="text-lg text-gray-700 mb-12 text-center max-w-3xl mx-auto">
                    Наш детский сад предлагает комплексную образовательную программу, включающую основную образовательную программу дошкольного образования и дополнительные программы развития.
                </p>
                
                <div class="grid md:grid-cols-2 gap-8">
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg border-2 border-orange-200">
                        <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Основная программа</h3>
                        <p class="text-gray-700 mb-6">
                            Соответствует ФГОС ДО и ФОП ДО. Охватывает все образовательные области: социально-коммуникативное, познавательное, речевое, художественно-эстетическое и физическое развитие.
                        </p>
                        <img 
                            src="https://images.unsplash.com/photo-1604881991720-f91add269bed?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Основная программа"
                            class="rounded-xl shadow-md w-full"
                        />
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg border-2 border-blue-200">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                        </div>
                        <h3 class="text-2xl font-bold mb-4 text-gray-900">Дополнительные программы</h3>
                        <p class="text-gray-700 mb-6">
                            Программа "Буквоежки" по обучению чтению, изучение языков, музыкальные занятия, логопедическая поддержка и подготовка к школе.
                        </p>
                        <img 
                            src="https://images.unsplash.com/photo-1503454537195-1dcabb73ffb9?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Дополнительные программы"
                            class="rounded-xl shadow-md w-full"
                        />
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Основная образовательная программа -->
    <section id="main-program" class="py-12 md:py-20 bg-card scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-8 text-center">Основная образовательная программа дошкольного образования</h2>
                
                <div class="bg-white rounded-xl p-8 shadow-md mb-6">
                    <h3 class="text-2xl font-bold mb-4">Соответствие стандартам</h3>
                    <p class="text-muted-foreground mb-4">
                        Программа разработана в соответствии с:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-muted-foreground mb-6">
                        <li>Федеральным государственным образовательным стандартом дошкольного образования (ФГОС ДО)</li>
                        <li>Федеральной образовательной программой дошкольного образования (ФОП ДО)</li>
                    </ul>
                    <p class="text-muted-foreground">
                        Программа отвечает образовательному запросу социума, обеспечивает развитие личности детей дошкольного возраста в различных видах общения и деятельности с учетом их возрастных, индивидуальных, психологических и физиологических особенностей.
                    </p>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md mb-6">
                    <h3 class="text-2xl font-bold mb-4">Образовательные области</h3>
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <h4 class="text-lg font-semibold mb-2 text-primary">Социально-коммуникативное развитие</h4>
                            <p class="text-muted-foreground text-sm">
                                Развитие общения и взаимодействия ребенка со взрослыми и сверстниками, становление самостоятельности, формирование основ безопасного поведения.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2 text-primary">Познавательное развитие</h4>
                            <p class="text-muted-foreground text-sm">
                                Развитие интересов детей, любознательности и познавательной мотивации, формирование познавательных действий, становление сознания.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2 text-primary">Речевое развитие</h4>
                            <p class="text-muted-foreground text-sm">
                                Владение речью как средством общения и культуры, обогащение активного словаря, развитие связной речи, формирование звуковой аналитико-синтетической активности.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2 text-primary">Художественно-эстетическое развитие</h4>
                            <p class="text-muted-foreground text-sm">
                                Развитие предпосылок ценностно-смыслового восприятия и понимания произведений искусства, формирование элементарных представлений о видах искусства.
                            </p>
                        </div>
                        <div class="md:col-span-2">
                            <h4 class="text-lg font-semibold mb-2 text-primary">Физическое развитие</h4>
                            <p class="text-muted-foreground text-sm">
                                Приобретение опыта в двигательной деятельности, становление целенаправленности и саморегуляции в двигательной сфере, формирование начальных представлений о здоровом образе жизни.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-xl p-8 shadow-md">
                    <h3 class="text-2xl font-bold mb-4">Вариативные формы реализации</h3>
                    <p class="text-muted-foreground mb-4">
                        Программа реализуется через различные формы, способы, методы и средства с учетом возрастных и индивидуальных особенностей воспитанников, специфики их образовательных потребностей и интересов:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-muted-foreground">
                        <li>Игровая деятельность</li>
                        <li>Образовательная деятельность в режимных моментах</li>
                        <li>Взаимодействие с семьями обучающихся</li>
                        <li>Самостоятельная деятельность детей</li>
                        <li>Культурные практики</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Программа "Буквоежки" -->
    <section id="bukvoeshki" class="py-12 md:py-20 bg-gray-50 scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4 text-gray-900">Программа "Буквоежки"</h2>
                    <p class="text-lg text-gray-700 max-w-2xl mx-auto">
                        Дополнительная образовательная программа кружка социально-педагогической направленности
                    </p>
                </div>
                
                <div class="grid md:grid-cols-2 gap-8 items-center mb-12">
                    <div>
                        <img 
                            src="https://images.unsplash.com/photo-1587654780291-39c9404d746b?crop=entropy&cs=tinysrgb&fit=max&fm=jpg&ixlib=rb-4.1.0&q=80&w=800" 
                            alt="Программа Буквоежки"
                            class="rounded-2xl shadow-xl w-full"
                        />
                    </div>
                    <div class="bg-white rounded-2xl p-8 shadow-lg">

                        <h3 class="text-2xl font-bold mb-6 text-gray-900">Основная информация</h3>
                        <div class="grid grid-cols-2 gap-4">
                            <div class="bg-orange-50 rounded-xl p-4 text-center">
                                <p class="text-sm font-semibold text-gray-600 mb-1">Возраст</p>
                                <p class="text-xl font-bold text-orange-600">5-7 лет</p>
                            </div>
                            <div class="bg-blue-50 rounded-xl p-4 text-center">
                                <p class="text-sm font-semibold text-gray-600 mb-1">Срок</p>
                                <p class="text-xl font-bold text-blue-600">2 года</p>
                            </div>
                            <div class="bg-green-50 rounded-xl p-4 text-center">
                                <p class="text-sm font-semibold text-gray-600 mb-1">Частота</p>
                                <p class="text-xl font-bold text-green-600">2 раза/нед</p>
                            </div>
                            <div class="bg-purple-50 rounded-xl p-4 text-center">
                                <p class="text-sm font-semibold text-gray-600 mb-1">Длительность</p>
                                <p class="text-xl font-bold text-purple-600">25-30 мин</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-2xl p-8 shadow-lg mb-6">

                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Методика</h3>
                    <p class="text-gray-700 mb-4 text-lg">
                        Программа разработана на основе примерной общеобразовательной Программы дошкольного образования под редакцией Н.Е. Вераксы, Т.С. Комаровой, М.А. Васильевой с учетом авторской Программы дополнительного образования детей по обучению чтению с использованием методики <strong>"Грамотейка"</strong> логопеда, кандидата педагогических наук <strong>Надежды Сергеевны Жуковой</strong>.
                    </p>
                </div>

                <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-8 shadow-lg border-2 border-green-200 mb-6">
                    <h3 class="text-2xl font-bold mb-4 text-gray-900">Цель программы</h3>
                    <p class="text-gray-700 mb-4 text-lg">
                        Определить наиболее эффективные пути и методы обучения грамоте детей дошкольного возраста видами речи: чтение, письмо, слушание, говорение, в основе которой лежат анализ и синтез звуковой стороны языка и речи; помочь детям в игровой и доступной форме осуществить работу по усвоению звуковой, слоговой стороны слова и сформировать понятие о структуре предложения.
                    </p>
                </div>

                <div class="bg-card rounded-xl p-8 shadow-md mb-6">
                    <h3 class="text-2xl font-bold mb-4">Задачи программы</h3>
                    <div class="grid md:grid-cols-3 gap-4">
                        <div>
                            <h4 class="text-lg font-semibold mb-2 text-primary">Развивающие</h4>
                            <ul class="list-disc list-inside space-y-1 text-sm text-muted-foreground">
                                <li>Обогащение словарного запаса</li>
                                <li>Развитие речи детей</li>
                                <li>Развитие фонематического и речевого слуха</li>
                                <li>Развитие внимания, памяти, мышления</li>
                                <li>Развитие навыка чтения целыми словами</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2 text-primary">Образовательные</h4>
                            <ul class="list-disc list-inside space-y-1 text-sm text-muted-foreground">
                                <li>Обучение правильному слоговому чтению</li>
                                <li>Постепенный переход к чтению целыми словами</li>
                                <li>Закрепление умения проводить звуковой анализ</li>
                                <li>Определение количества слов в предложении</li>
                                <li>Составление предложений</li>
                            </ul>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2 text-primary">Воспитательные</h4>
                            <ul class="list-disc list-inside space-y-1 text-sm text-muted-foreground">
                                <li>Формирование интереса к чтению</li>
                                <li>Воспитание аккуратности</li>
                                <li>Воспитание коммуникабельности</li>
                                <li>Воспитание любознательности</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="bg-card rounded-xl p-8 shadow-md mb-6">
                    <h3 class="text-2xl font-bold mb-4">Особенности методики</h3>
                    <div class="space-y-4">
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Последовательность изучения букв</h4>
                            <p class="text-muted-foreground">
                                Сначала знакомимся с гласными буквами (А, У, О) - они "поют", их проще соединять в слоги. Затем переходим к согласным буквам.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Слоговое чтение</h4>
                            <p class="text-muted-foreground">
                                Дети овладевают слоговым и слитным способом чтения, что обеспечивает плавность и правильность процесса чтения. Материал разбит на слоги для упрощения процесса чтения.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Логопедические элементы</h4>
                            <p class="text-muted-foreground">
                                В программу включены элементы логопедических упражнений, направленных на совершенствование артикуляционной моторики.
                            </p>
                        </div>
                        <div>
                            <h4 class="text-lg font-semibold mb-2">Индивидуальный подход</h4>
                            <p class="text-muted-foreground">
                                Каждому ребенку необходимо разное время для овладения навыком чтения. В процессе обучения чтению необходим индивидуальный подход.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="bg-card rounded-xl p-8 shadow-md">
                    <h3 class="text-2xl font-bold mb-4">Планируемые результаты</h3>
                    <p class="text-muted-foreground mb-4">В результате обучения по данной программе учащиеся будут уметь:</p>
                    <ul class="list-disc list-inside space-y-2 text-muted-foreground">
                        <li>Достаточно отчетливо и ясно произносить слова; выделять из слов звуки, находить слова с определенным звуком, определять место звука в слове</li>
                        <li>Соблюдать орфоэпические нормы произношения</li>
                        <li>Владеть понятиями «слово», «звук», «буква», «предложение»</li>
                        <li>Свободно читать слоги и трёхбуквенные слова, плавно читать по слогам</li>
                        <li>Правильно согласовывать слова в предложении</li>
                        <li>Понимать смысл прочитанного</li>
                        <li>Составлять предложения с заданным словом, на заданную тему</li>
                        <li>Ориентироваться на странице книги</li>
                        <li>Правильно использовать предлоги</li>
                        <li>Правильно произносить звуки</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Изучение языков -->
    <section id="languages" class="py-12 md:py-20 bg-card scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Изучение языков</h2>
                <div class="bg-white rounded-xl p-8 shadow-md">
                    <p class="text-lg text-muted-foreground mb-4">
                        В нашем детском саду дети изучают азы трех языков:
                    </p>
                    <div class="grid md:grid-cols-3 gap-6">
                        <div class="text-center">
                            <h3 class="text-xl font-bold mb-2 text-primary">Английский</h3>
                            <p class="text-muted-foreground text-sm">Основы английского языка через игры и общение</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-bold mb-2 text-primary">Арабский</h3>
                            <p class="text-muted-foreground text-sm">Знакомство с арабским языком и культурой</p>
                        </div>
                        <div class="text-center">
                            <h3 class="text-xl font-bold mb-2 text-primary">Чеченский</h3>
                            <p class="text-muted-foreground text-sm">Изучение родного языка в рамках регионального компонента</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Музыкальные занятия -->
    <section id="music" class="py-12 md:py-20 scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Музыкальные занятия</h2>
                <div class="bg-card rounded-xl p-8 shadow-md">
                    <p class="text-lg text-muted-foreground mb-4">
                        Музыкальные занятия направлены на развитие музыкального слуха и творческих способностей детей. Дети учатся слушать музыку, петь, выполнять танцевальные движения, играть на простых музыкальных инструментах.
                    </p>
                    <p class="text-muted-foreground">
                        Музыка способствует эмоциональному развитию ребенка, формированию эстетического вкуса и творческих способностей.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Развитие речи -->
    <section id="speech" class="py-12 md:py-20 bg-card scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Программы по развитию речи</h2>
                <div class="bg-white rounded-xl p-8 shadow-md">
                    <p class="text-lg text-muted-foreground mb-4">
                        Развитие речи является одной из ключевых задач дошкольного образования. Наша программа включает:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-muted-foreground">
                        <li>Развитие активной речи детей</li>
                        <li>Обогащение словарного запаса</li>
                        <li>Развитие связной речи</li>
                        <li>Формирование звуковой аналитико-синтетической активности</li>
                        <li>Развитие фонематического слуха</li>
                        <li>Знакомство с книжной культурой, детской литературой</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Подготовка к школе -->
    <section id="school-prep" class="py-12 md:py-20 scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Подготовка к школе</h2>
                <div class="bg-card rounded-xl p-8 shadow-md">
                    <p class="text-lg text-muted-foreground mb-4">
                        Наша программа направлена на достижение детьми дошкольного возраста уровня развития, необходимого и достаточного для успешного освоения ими образовательных программ начального общего образования.
                    </p>
                    <div class="grid md:grid-cols-2 gap-6 mt-6">
                        <div>
                            <h3 class="text-xl font-bold mb-3 text-primary">Что включает подготовка:</h3>
                            <ul class="list-disc list-inside space-y-2 text-muted-foreground">
                                <li>Обучение чтению</li>
                                <li>Развитие математических представлений</li>
                                <li>Формирование предпосылок учебной деятельности</li>
                                <li>Развитие познавательных способностей</li>
                                <li>Формирование готовности к школе</li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold mb-3 text-primary">Результат:</h3>
                            <p class="text-muted-foreground">
                                К моменту завершения дошкольного образования ребенок готов к успешному обучению в школе, имеет необходимые знания, умения и навыки, а также психологическую готовность к школьному обучению.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Логопедическая поддержка -->
    <section id="logopedics" class="py-12 md:py-20 bg-card scroll-mt-24">
        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center">Логопедическая поддержка</h2>
                <div class="bg-white rounded-xl p-8 shadow-md">
                    <p class="text-lg text-muted-foreground mb-4">
                        В нашем детском саду осуществляется коррекционно-развивающая работа, направленная на:
                    </p>
                    <ul class="list-disc list-inside space-y-2 text-muted-foreground mb-4">
                        <li>Коррекцию речи и развитие правильной артикуляции</li>
                        <li>Совершенствование артикуляционной моторики</li>
                        <li>Развитие фонематического слуха</li>
                        <li>Коррекцию звукопроизношения</li>
                        <li>Развитие связной речи</li>
                        <li>Обогащение словарного запаса</li>
                    </ul>
                    <p class="text-muted-foreground">
                        Логопедическая поддержка включена в программу "Буквоежки" и осуществляется в рамках основной образовательной программы. Работа ведется с учетом индивидуальных особенностей каждого ребенка.
                    </p>
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
                    Приходите на экскурсию и узнайте подробнее о наших программах
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

<script>
// Плавная прокрутка к разделам
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});
</script>

<?php
get_footer();
