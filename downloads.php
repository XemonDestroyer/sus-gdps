<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Descargas - GDPS Name</title>
    <link rel="stylesheet" href="index.css">
    <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo">
            <img src="icon.ico" alt="GDPS Name Logo">
            <h1>GDPS Name</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="descargas.php">Descargar</a></li>
                <li><a href="#" class="lang disabled" key="descargar">Demonlist</a></li>
            </ul>
        </nav>
        <div class="language-selector">
            <select id="languageSelect">
                <option value="es">Español</option>
                <option value="en">English</option>
            </select>
        </div>
    </header>

    <section id="descargas">
        <h2 class="lang" key="descargar">Descargar GDPS Name</h2>

        <!-- Sección para GDPS Name sin Geode -->
        <div class="download-section">
            <h3 class="lang" key="without_geode">GDPS Name sin Geode</h3>
            <ul>
                <li><a href="" class="lang" key="pc_version">PC</a></li>
                <li><a href="" class="lang" key="android_version">Android</a></li>
                <li><a href="" class="lang" key="ios_version">iOS</a></li>
            </ul>
        </div>
         
          <!-- Sección para GDPS Name 1.1 -->
          <div class="download-section">
            <h3 class="lang" key="version_11">GDPS Name 1.1</h3>
            <ul>
                <li><a href="" class="lang" key="android_18">Android</a></li>
            </ul>
        </div>

        <!-- Sección para GDPS Name 1.9 -->
        <div class="download-section">
            <h3 class="lang" key="version_19">GDPS Name 1.9</h3>
            <ul>
                <li><a href="" class="lang" key="pc_19">PC</a></li>
                <li><a href="" class="lang" key="android_19">Android</a></li>
            </ul>
        </div>

        <!-- Sección para GDPS Name con Geode -->
        <div class="download-section">
            <h3 class="lang" key="with_geode">GDPS Name Con geode</h3>
            <ul>
                <li><a href=""  key="pc_geode">PC</a></li>
                <li><a href="" key="android_geode">Android</a></li>
            </ul>
        </div>
    </section>

    <script>
        const translations = {
            es: {
                descargar: "Demonlist",
                without_geode: "GDPS Name sin Geode",
                version_19: "GDPS Name 1.9",
                with_geode: "GDPS Name con Geode (Próximamente)",
                pc_version: "PC",
                android_version: "Android",
                ios_version: "iOS",
                pc_geode: "PC (Próximamente)",
                android_geode: "Android (Próximamente)",
                pc_19: "PC",
                android_19: "Android",
                android_18: "Android"
            },
            en: {
                descargar: "Demonlist",
                without_geode: "GDPS Name without Geode",
                version_19: "GDPS Name 1.9",
                version_18: "GDPS Name 1.8",
                version_11: "GDPS Name 1.1",
                with_geode: "GDPS Name with Geode (Coming Soon)",
                pc_version: "PC",
                android_version: "Android",
                ios_version: "iOS",
                pc_geode: "PC (Coming Soon)",
                android_geode: "Android (Coming Soon)",
                pc_19: "PC",
                android_19: "Android",
                android_18: "Android"
            }
        };

        document.getElementById('languageSelect').addEventListener('change', function () {
            const lang = this.value;
            document.querySelectorAll('.lang').forEach(function (element) {
                const key = element.getAttribute('key');
                element.textContent = translations[lang][key];
            });
        });
    </script>
</body>
</html>
