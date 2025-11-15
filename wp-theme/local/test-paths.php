<?php
require_once __DIR__ . '/config.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Test Paths</title>
</head>
<body>
    <h1>Path Debug</h1>
    <ul>
        <li>THEME_DIR: <?php echo THEME_DIR; ?></li>
        <li>THEME_URI: <?php echo THEME_URI; ?></li>
        <li>SCRIPT_NAME: <?php echo $_SERVER['SCRIPT_NAME']; ?></li>
        <li>CSS Path: <?php echo THEME_URI; ?>assets/css/custom.css</li>
        <li>CSS Exists: <?php echo file_exists(THEME_DIR . '/assets/css/custom.css') ? 'YES' : 'NO'; ?></li>
        <li>Image Path: <?php echo edelweiss_image_url('logo.png'); ?></li>
        <li>Image Exists: <?php echo file_exists(THEME_DIR . '/assets/images/logo.png') ? 'YES' : 'NO'; ?></li>
    </ul>
    
    <h2>Test CSS</h2>
    <link rel="stylesheet" href="<?php echo THEME_URI; ?>assets/css/custom.css">
    <div style="background: red; padding: 20px; color: white;">
        Если этот блок красный, CSS работает!
    </div>
</body>
</html>

