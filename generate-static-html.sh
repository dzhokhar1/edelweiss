#!/bin/bash

# Скрипт для полной конвертации PHP сайта в статический HTML/CSS/JS
# Сохраняет все изображения, стили, скрипты и исправляет пути

set -e

cd "$(dirname "$0")/wp-theme/local" || exit 1

echo "=========================================="
echo "КОНВЕРТАЦИЯ В СТАТИЧЕСКИЙ HTML/CSS/JS"
echo "=========================================="
echo ""

OUTPUT_DIR="../gh-pages"
rm -rf "$OUTPUT_DIR"
mkdir -p "$OUTPUT_DIR"

# Шаг 1: Копируем все статические файлы
echo "1. Копирование статических файлов..."
cp -r assets "$OUTPUT_DIR/"
cp -r template-parts "$OUTPUT_DIR/" 2>/dev/null || true
cp favicon.png "$OUTPUT_DIR/" 2>/dev/null || true

# Копируем favicon в корень
if [ -f "assets/images/favicon.png" ]; then
    cp "assets/images/favicon.png" "$OUTPUT_DIR/"
fi

echo "   ✅ CSS, JS, изображения скопированы"
echo ""

# Шаг 2: Настраиваем окружение для PHP
export THEME_URI="./"
export THEME_DIR="$(pwd)"

# Шаг 3: Запускаем PHP сервер в фоне
echo "2. Запуск PHP сервера для генерации HTML..."
PHP_SERVER_PORT=8765
php -S localhost:$PHP_SERVER_PORT router.php > /tmp/php-server.log 2>&1 &
SERVER_PID=$!

# Ждем запуска сервера
sleep 4

# Проверяем, что сервер запустился
if ! curl -s "http://localhost:$PHP_SERVER_PORT/" > /dev/null 2>&1; then
    echo "   ⚠️  Ошибка запуска PHP сервера"
    cat /tmp/php-server.log
    kill $SERVER_PID 2>/dev/null || true
    exit 1
fi

echo "   ✅ PHP сервер запущен"
echo ""

# Шаг 4: Генерируем HTML для всех страниц
echo "3. Генерация HTML страниц..."

# Используем массив с экранированными пробелами
PAGES="index:/ about:/about groups:/groups programs:/programs pricing:/pricing adaptation:/adaptation enrollment:/enrollment contacts:/contacts"

for page_info in $PAGES; do
    IFS=':' read -r page_name page_url <<< "$page_info"
    
    echo "   Генерация: $page_name.php -> $page_name.html"
    
    # Загружаем страницу и исправляем пути
    curl -s "http://localhost:$PHP_SERVER_PORT$page_url" | \
        sed 's|href="/assets/|href="./assets/|g' | \
        sed 's|src="/assets/|src="./assets/|g' | \
        sed 's|href="/template-parts/|href="./template-parts/|g' | \
        # Заменяем ссылки с завершающим слешем в off-canvas меню
        sed 's|href="/about/"|href="./about.html|g' | \
        sed 's|href="/groups/"|href="./groups.html|g' | \
        sed 's|href="/programs/"|href="./programs.html|g' | \
        sed 's|href="/pricing/"|href="./pricing.html|g' | \
        sed 's|href="/adaptation/"|href="./adaptation.html|g' | \
        sed 's|href="/enrollment/"|href="./enrollment.html|g' | \
        sed 's|href="/contacts/"|href="./contacts.html|g' | \
        # Заменяем ссылки без завершающего слеша
        sed 's|href="/about"|href="./about.html|g' | \
        sed 's|href="/groups"|href="./groups.html|g' | \
        sed 's|href="/programs"|href="./programs.html|g' | \
        sed 's|href="/pricing"|href="./pricing.html|g' | \
        sed 's|href="/adaptation"|href="./adaptation.html|g' | \
        sed 's|href="/enrollment"|href="./enrollment.html|g' | \
        sed 's|href="/contacts"|href="./contacts.html|g' | \
        # Заменяем относительные ссылки
        sed 's|href="./about/"|href="./about.html|g' | \
        sed 's|href="./groups/"|href="./groups.html|g' | \
        sed 's|href="./programs/"|href="./programs.html|g' | \
        sed 's|href="./pricing/"|href="./pricing.html|g' | \
        sed 's|href="./adaptation/"|href="./adaptation.html|g' | \
        sed 's|href="./enrollment/"|href="./enrollment.html|g' | \
        sed 's|href="./contacts/"|href="./contacts.html|g' | \
        sed 's|href="./about"|href="./about.html|g' | \
        sed 's|href="./groups"|href="./groups.html|g' | \
        sed 's|href="./programs"|href="./programs.html|g' | \
        sed 's|href="./pricing"|href="./pricing.html|g' | \
        sed 's|href="./adaptation"|href="./adaptation.html|g' | \
        sed 's|href="./enrollment"|href="./enrollment.html|g' | \
        sed 's|href="./contacts"|href="./contacts.html|g' | \
        # Заменяем главную страницу
        sed 's|href="/"|href="./index.html|g' | \
        sed 's|href="./"|href="./index.html|g' | \
        # Общие замены путей для остальных ресурсов
        sed 's|href="/|href="./|g' | \
        sed 's|src="/|src="./|g' > "$OUTPUT_DIR/$page_name.html"
    
    if [ ! -s "$OUTPUT_DIR/$page_name.html" ]; then
        echo "   ⚠️  Ошибка: $page_name.html пустой"
    else
        echo "   ✅ $page_name.html создан ($(wc -c < "$OUTPUT_DIR/$page_name.html") bytes)"
    fi
done

# Останавливаем сервер
echo ""
echo "4. Остановка PHP сервера..."
kill $SERVER_PID 2>/dev/null || true
sleep 1

# Шаг 5: Создаем index.html из главной страницы (если еще не создан)
if [ ! -f "$OUTPUT_DIR/index.html" ]; then
    echo "   Создание index.html..."
    mv "$OUTPUT_DIR/index.html" "$OUTPUT_DIR/index.html.bak" 2>/dev/null || true
    curl -s "http://localhost:$PHP_SERVER_PORT/" > "$OUTPUT_DIR/index.html"
fi

# Шаг 6: Создаем .nojekyll чтобы GitHub Pages не обрабатывал через Jekyll
touch "$OUTPUT_DIR/.nojekyll"

# Шаг 7: Проверяем наличие изображений
echo ""
echo "5. Проверка изображений..."
IMAGE_COUNT=$(find "$OUTPUT_DIR/assets/images" -type f 2>/dev/null | wc -l | tr -d ' ')
echo "   ✅ Найдено изображений: $IMAGE_COUNT"

# Шаг 8: Финальная проверка
echo ""
echo "=========================================="
echo "✅ КОНВЕРТАЦИЯ ЗАВЕРШЕНА!"
echo "=========================================="
echo ""
echo "📁 Результат: $OUTPUT_DIR"
echo "📄 HTML страниц: $(find "$OUTPUT_DIR" -maxdepth 1 -name "*.html" | wc -l | tr -d ' ')"
echo "🖼️  Изображений: $IMAGE_COUNT"
echo "📦 CSS файлов: $(find "$OUTPUT_DIR/assets/css" -type f 2>/dev/null | wc -l | tr -d ' ')"
echo "📦 JS файлов: $(find "$OUTPUT_DIR/assets/js" -type f 2>/dev/null | wc -l | tr -d ' ')"
echo ""
echo "🌐 Готово для GitHub Pages!"
echo ""

