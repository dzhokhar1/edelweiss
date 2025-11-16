#!/bin/bash

# Скрипт для генерации статических HTML файлов из PHP для GitHub Pages

cd "$(dirname "$0")/wp-theme/local" || exit 1

echo "=== Генерация статических HTML файлов ==="
echo ""

# Создаем временную директорию для сгенерированных файлов
OUTPUT_DIR="../gh-pages"
rm -rf "$OUTPUT_DIR"
mkdir -p "$OUTPUT_DIR"

# Копируем статические файлы (assets)
echo "1. Копирование статических файлов (CSS, JS, изображения)..."
cp -r assets "$OUTPUT_DIR/"
cp -r template-parts "$OUTPUT_DIR/" 2>/dev/null || true

# Список PHP страниц для конвертации
PAGES=("index" "about" "groups" "programs" "pricing" "adaptation" "enrollment" "contacts")

echo ""
echo "2. Генерация HTML из PHP страниц..."

# Запускаем PHP встроенный сервер в фоне
PHP_SERVER_PORT=8765
php -S localhost:$PHP_SERVER_PORT router.php > /dev/null 2>&1 &
SERVER_PID=$!

# Ждем запуска сервера
sleep 2

# Генерируем HTML для каждой страницы
for page in "${PAGES[@]}"; do
    echo "   Генерация: $page.php -> $page.html"
    
    # Делаем запрос к серверу и сохраняем ответ
    if [ "$page" = "index" ]; then
        curl -s "http://localhost:$PHP_SERVER_PORT/" > "$OUTPUT_DIR/index.html"
    else
        curl -s "http://localhost:$PHP_SERVER_PORT/$page" > "$OUTPUT_DIR/$page.html"
    fi
done

# Останавливаем сервер
kill $SERVER_PID 2>/dev/null || true

# Создаем index.html из главной страницы (если еще не создан)
if [ ! -f "$OUTPUT_DIR/index.html" ]; then
    curl -s "http://localhost:$PHP_SERVER_PORT/" > "$OUTPUT_DIR/index.html" 2>/dev/null || true
fi

# Копируем favicon
if [ -f "assets/images/favicon.png" ]; then
    cp "assets/images/favicon.png" "$OUTPUT_DIR/" 2>/dev/null || true
fi

echo ""
echo "✅ Статические файлы сгенерированы в: $OUTPUT_DIR"
echo ""

