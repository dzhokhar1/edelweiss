<?php
/**
 * Header Template (Local Version)
 * Дизайн по образцу tsdkids.ru - без навигации в header, только off-canvas меню
 */
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="sticky top-0 z-50 bg-white border-b border-gray-200 shadow-lg" style="box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);">
    <div class="container mx-auto px-3 md:px-4">
        <div class="flex items-center justify-between h-16 md:h-20">
            <!-- Логотип -->
            <a href="/" class="flex items-center">
                <img 
                    src="<?php echo edelweiss_image_url('logoRBG.webp'); ?>" 
                    alt="Edelweiss Garden" 
                    class="h-10 md:h-12 w-auto" 
                    loading="eager"
                    fetchpriority="high"
                />
            </a>
            
            <!-- Адрес, контакты и меню справа -->
            <div class="flex items-center gap-2 md:gap-3">
                <!-- Адрес (плашка, скрыта на мобильных и планшетах, видна только на десктопе) -->
                <a href="/contacts/" class="hidden lg:flex h-12 items-center gap-2 px-4 rounded-lg hover:opacity-90 transition-opacity" style="background-color: #f5f5dc;">
                    <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                    </svg>
                    <span class="text-sm font-medium text-gray-900 whitespace-nowrap">г. Грозный, ул. Умара Кадырова, 7</span>
                </a>
                
                <!-- Телефон -->
                <a href="tel:+79033899090" class="h-10 md:h-12 flex items-center gap-2 px-3 md:px-4 rounded-lg hover:opacity-90 transition-opacity" style="background-color: #f5f5dc;">
                    <svg class="h-5 w-5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    <span class="hidden md:inline text-sm font-medium text-gray-900 underline whitespace-nowrap">+7 903 389-90-90</span>
                </a>
                
                <!-- WhatsApp "Написать" -->
                <a href="https://wa.me/79033899090" target="_blank" class="h-10 md:h-12 flex items-center gap-2 px-3 md:px-4 rounded-lg hover:opacity-90 transition-opacity" style="background-color: #f5f5dc;">
                    <svg class="h-5 w-5 flex-shrink-0 text-green-600" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                    </svg>
                    <span class="hidden md:inline text-sm font-medium text-gray-900 whitespace-nowrap">Написать</span>
                </a>
                
                <!-- Кнопка меню (бордовая квадратная) -->
                <button id="menu-toggle" class="w-10 h-10 md:w-12 md:h-12 bg-burgundy rounded-lg flex items-center justify-center transition-colors" aria-label="Открыть меню">
                    <svg class="h-6 w-6 md:h-7 md:w-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
</header>

<!-- Off-canvas меню -->
<div id="off-canvas-menu" class="fixed inset-y-0 right-0 z-50 w-full max-w-md bg-white shadow-xl transform translate-x-full transition-transform duration-300 ease-in-out">
    <div class="flex flex-col h-full">
        <!-- Заголовок меню -->
        <div class="flex items-center justify-between p-6 border-b border-gray-200">
            <h2 class="text-xl font-bold text-gray-900">Меню</h2>
            <button id="menu-close" class="p-2 rounded-md hover:bg-gray-100 transition-colors" aria-label="Закрыть меню">
                <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
        
        <!-- Навигация -->
        <nav class="flex-1 overflow-y-auto p-6">
            <ul class="space-y-2">
                <li>
                    <a href="/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        Главная
                    </a>
                </li>
                <li>
                    <a href="/about/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        О саде
                    </a>
                </li>
                <li>
                    <a href="/groups/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        Группы
                    </a>
                </li>
                <li>
                    <a href="/programs/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        Программы
                    </a>
                </li>
                <li>
                    <a href="/pricing/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        Режим и стоимость
                    </a>
                </li>
                <li>
                    <a href="/adaptation/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        Адаптация
                    </a>
                </li>
                <li>
                    <a href="/enrollment/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        Как записаться
                    </a>
                </li>
                <li>
                    <a href="/contacts/" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary rounded-md transition-colors" style="box-shadow: inset 0 2px 4px rgba(0, 0, 0, 0.1);">
                        Контакты
                    </a>
                </li>
            </ul>
        </nav>
        
        <!-- Контакты в меню -->
        <div class="p-6 border-t border-gray-200 space-y-4">
            <div class="space-y-3">
                <p class="text-sm font-semibold text-gray-500 uppercase tracking-wide">Контакты</p>
                <a href="tel:+79033899090" class="flex items-center gap-3 text-base font-medium text-gray-700 hover:text-primary transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    +7 903 389-90-90
                </a>
                <a href="tel:+79389992561" class="flex items-center gap-3 text-base font-medium text-gray-700 hover:text-primary transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                    </svg>
                    +7 938 999-25-61
                </a>
                <a href="mailto:edelweiss@mail.ru" class="flex items-center gap-3 text-base font-medium text-gray-700 hover:text-primary transition-colors">
                    <svg class="h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    edelweiss@mail.ru
                </a>
            </div>
            
            <a href="https://wa.me/79033899090" target="_blank" class="flex items-center justify-center gap-2 w-full px-6 py-3 bg-green-600 text-white rounded-md text-base font-medium hover:bg-green-700 transition-colors">
                <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 24 24">
                    <path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413Z"/>
                </svg>
                Написать в WhatsApp
            </a>
        </div>
    </div>
</div>

<!-- Overlay для меню -->
<div id="menu-overlay" class="fixed inset-0 bg-black/50 z-40 opacity-0 invisible transition-opacity duration-300"></div>

<script>
// Управление off-canvas меню
const menuToggle = document.getElementById('menu-toggle');
const menuClose = document.getElementById('menu-close');
const offCanvasMenu = document.getElementById('off-canvas-menu');
const menuOverlay = document.getElementById('menu-overlay');

function openMenu() {
    offCanvasMenu.classList.remove('translate-x-full');
    menuOverlay.classList.remove('opacity-0', 'invisible');
    menuOverlay.classList.add('opacity-100', 'visible');
    document.body.style.overflow = 'hidden';
}

function closeMenu() {
    offCanvasMenu.classList.add('translate-x-full');
    menuOverlay.classList.remove('opacity-100', 'visible');
    menuOverlay.classList.add('opacity-0', 'invisible');
    document.body.style.overflow = '';
}

if (menuToggle) {
    menuToggle.addEventListener('click', openMenu);
}

if (menuClose) {
    menuClose.addEventListener('click', closeMenu);
}

if (menuOverlay) {
    menuOverlay.addEventListener('click', closeMenu);
}

// Закрытие меню при клике на ссылку
document.querySelectorAll('#off-canvas-menu a').forEach(link => {
    link.addEventListener('click', () => {
        setTimeout(closeMenu, 300);
    });
});
</script>
