<?php
/**
 * Страница "Как записаться"
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
                    Как записаться в детский сад
                </h1>
                <p class="text-xl md:text-2xl text-gray-700 leading-relaxed">
                    Простая пошаговая инструкция для родителей
                </p>
            </div>
        </div>
    </section>

    <!-- Процесс записи -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Процесс записи в детский сад</h2>
                
                <div class="space-y-8">
                    <div class="bg-gradient-to-r from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg border-2 border-orange-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-orange-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">1</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Знакомство с садом</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    Первый шаг — это экскурсия по детскому саду. Вы можете прийти вместе с ребенком, познакомиться с воспитателями, посмотреть помещения, задать все интересующие вопросы.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    Для записи на экскурсию позвоните нам по телефону <a href="tel:+79033899090" class="text-orange-600 hover:underline font-semibold">+7 903 389-90-90</a> или <a href="tel:+79389992561" class="text-orange-600 hover:underline font-semibold">+7 938 999-25-61</a>, или напишите на email <a href="mailto:edelweiss@mail.ru" class="text-orange-600 hover:underline font-semibold">edelweiss@mail.ru</a>.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg border-2 border-blue-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-blue-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">2</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Подача документов</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    После экскурсии, если вы приняли решение записать ребенка в наш детский сад, необходимо подготовить и подать документы.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    Список необходимых документов указан ниже. Вы можете принести их лично или отправить по email для предварительного рассмотрения.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-green-50 to-green-100 rounded-2xl p-8 shadow-lg border-2 border-green-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-green-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">3</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Заключение договора</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    После рассмотрения документов мы заключаем договор об оказании образовательных услуг.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    В договоре прописываются все условия посещения, режим работы, стоимость и другие важные моменты.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="bg-gradient-to-r from-purple-50 to-purple-100 rounded-2xl p-8 shadow-lg border-2 border-purple-200">
                        <div class="flex items-start gap-6">
                            <div class="flex-shrink-0 w-16 h-16 bg-purple-500 text-white rounded-full flex items-center justify-center font-bold text-2xl">4</div>
                            <div class="flex-1">
                                <h3 class="text-2xl font-bold mb-4 text-gray-900">Адаптационный период</h3>
                                <p class="text-gray-700 mb-3 text-lg">
                                    После заключения договора начинается адаптационный период. Мы помогаем ребенку мягко и комфортно привыкнуть к новой среде.
                                </p>
                                <p class="text-gray-700 text-lg">
                                    В первые дни возможно индивидуальное расписание посещения, постепенное увеличение времени пребывания в саду.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Необходимые документы -->
    <section class="py-12 md:py-20 bg-gray-50">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Необходимые документы</h2>
                
                <div class="grid md:grid-cols-2 gap-8 mb-8">
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="w-16 h-16 bg-orange-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-orange-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Основные документы</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">1.</span>
                                <span><strong>Заявление</strong> о зачислении ребенка в детский сад</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">2.</span>
                                <span><strong>Копия свидетельства</strong> о рождении ребенка</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">3.</span>
                                <span><strong>Копии паспортов</strong> родителей (1-я страница и страница с регистрацией)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-orange-600 mr-2">4.</span>
                                <span><strong>Копия полиса</strong> ОМС или иного полиса медицинского страхования</span>
                            </li>
                        </ul>
                    </div>
                    
                    <div class="bg-white rounded-2xl p-8 shadow-lg">
                        <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Медицинские документы</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">5.</span>
                                <span><strong>Справка от педиатра</strong> о разрешении на посещение детского сада (не более 72 часов)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">6.</span>
                                <span><strong>Справка об отсутствии контактов</strong> с инфекционными больными (не более 72 часов)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">7.</span>
                                <span><strong>Результаты анализов</strong> на яйца глист, простейшие и энтеробиоз (не более 10 дней)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="text-blue-600 mr-2">8.</span>
                                <span><strong>Анкета</strong> при поступлении ребенка в детский сад</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="bg-gradient-to-r from-yellow-50 to-yellow-100 rounded-2xl p-6 border-2 border-yellow-200">
                    <p class="text-gray-700 text-center">
                        <strong>Важно:</strong> Точный список документов может быть уточнен при записи на экскурсию. Некоторые документы могут быть предоставлены после начала посещения детского сада.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Контакты для записи -->
    <section class="py-12 md:py-20 bg-white">
        <div class="container mx-auto px-4">
            <div class="max-w-6xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-12 text-center text-gray-900">Контакты для записи</h2>
                
                <div class="grid md:grid-cols-3 gap-6 mb-8">
                    <div class="bg-gradient-to-br from-orange-50 to-orange-100 rounded-2xl p-8 shadow-lg text-center border-2 border-orange-200">
                        <div class="w-16 h-16 bg-orange-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Телефоны</h3>
                        <a href="tel:+79033899090" class="block text-orange-600 hover:underline mb-2 font-semibold text-lg">+7 903 389-90-90</a>
                        <a href="tel:+79389992561" class="block text-orange-600 hover:underline font-semibold text-lg">+7 938 999-25-61</a>
                    </div>
                    <div class="bg-gradient-to-br from-blue-50 to-blue-100 rounded-2xl p-8 shadow-lg text-center border-2 border-blue-200">
                        <div class="w-16 h-16 bg-blue-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="h-8 w-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">Email</h3>
                        <a href="mailto:edelweiss@mail.ru" class="block text-blue-600 hover:underline font-semibold text-lg">edelweiss@mail.ru</a>
                    </div>
                    <div class="bg-gradient-to-br from-green-50 to-green-100 rounded-2xl p-8 shadow-lg text-center border-2 border-green-200">
                        <div class="w-16 h-16 bg-green-500 rounded-full flex items-center justify-center mx-auto mb-6">
                            <svg class="h-8 w-8 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold mb-4 text-gray-900">WhatsApp</h3>
                        <a href="https://wa.me/79033899090" target="_blank" class="block text-green-600 hover:underline font-semibold text-lg">Написать в WhatsApp</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Форма обратной связи -->
    <section class="py-12 md:py-20 bg-gradient-to-r from-orange-500 to-pink-500">
        <div class="container mx-auto px-4">
            <div class="max-w-2xl mx-auto">
                <h2 class="text-3xl md:text-4xl font-bold mb-6 text-center text-white">Записаться на экскурсию</h2>
                <div class="bg-white rounded-2xl p-8 md:p-12 shadow-xl">
                    <p class="text-gray-700 mb-6 text-center text-lg">
                        Оставьте заявку, и мы свяжемся с вами в ближайшее время
                    </p>
                    <form class="space-y-4">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2 text-gray-900">Ваше имя</label>
                            <input type="text" id="name" name="name" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required>
                        </div>
                        <div>
                            <label for="phone" class="block text-sm font-medium mb-2 text-gray-900">Номер телефона</label>
                            <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" required>
                        </div>
                        <div>
                            <label for="child-age" class="block text-sm font-medium mb-2 text-gray-900">Возраст ребенка</label>
                            <input type="text" id="child-age" name="child-age" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500" placeholder="Например: 3 года">
                        </div>
                        <div>
                            <label for="message" class="block text-sm font-medium mb-2 text-gray-900">Сообщение (необязательно)</label>
                            <textarea id="message" name="message" rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-orange-500"></textarea>
                        </div>
                        <button type="submit" class="w-full px-6 py-4 bg-gradient-to-r from-orange-500 to-pink-500 text-white rounded-lg font-bold text-lg shadow-lg hover:shadow-xl transition-all hover:scale-105">
                            Отправить заявку
                        </button>
                        <p class="text-xs text-gray-600 text-center">
                            Нажимая кнопку "Отправить заявку", вы даете согласие на обработку персональных данных
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>
