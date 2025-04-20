<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="DONER KEBAB 21 - Kebab artigianale a domicilio. Ordina il tuo kebab preferito online.">
    <title>DONER KEBAB 21 - Carne di qualità</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
</head>
<body class="pagina-orari">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" aria-label="Menu di navigazione principale">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navigazione">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-container">
                    <a href="index.php" class="navbar-link" aria-label="Vai alla home page">HOME</a>
                    <a href="menu.php" class="navbar-link" aria-label="Vai al menu">MENÙ</a>
                    <a href="ordina.php" class="navbar-link" aria-label="Ordina il kebab">ORDINA</a>
                    <a href="contatti.php" class="navbar-link" aria-label="Contatti">CONTATTI</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <section class="hero">
        <div class="hero-logo">
        <a href="img/logo2.jpg" target="_blank">
            <img src="img/logo2.jpg" alt="Logo Doner Kebab 21" style="max-width: 300px; width: 100%; height: auto;">
        </a>
        </div>
        <div class="hero-divider"></div>
        <p class="hero-hashtag">Ordina il tuo kebab</p>
    </section>

    <!-- Sezione Kebab a casa tua -->
    <section id="ordina" class="home-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-4">
                    <a href="img/doner.jpg" target="_blank">
                        <img src="img/doner.jpg" alt="Il nostro KEBAB a domicilio" class="img-fluid home-image">
                    </a>
                </div>
                <div class="col-md-8 home-text-content">
                    <h2 class="section-title">IL NOSTRO KEBAB A PORTATA DI CLICK!</h2>
                    <a href="https://glovoapp.com/" target="_blank" class="order-button order-button-black" aria-label="Ordina ora il tuo kebab">ORDINA ORA</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuova Sezione Orari -->
    <section id="orari" class="orari-section" style="background-color: #7f00c3; padding: 60px 20px;" aria-labelledby="orari-title">
        <a href="contatti.php" style="text-decoration: none;">
            <div class="orari-box text-center p-4 rounded shadow-sm zoom-card">
                <h2 id="orari-title" class="orari-title">Orari di apertura</h2>
                <p>Tutti i giorni: 19:00 - 01:30</p>
                <p>Chiuso il lunedì</p>
            </div>
        </a>
    </section>

    <!-- Footer -->
    <footer aria-labelledby="footer-title">
        <div>
            <p id="footer-title">© 2025 DONER KEBAB 21 – Tutti i diritti riservati</p>
            <p>
                Firenze | 
                <a href="tel:+393471234567" aria-label="Chiama il numero +39 347 123 4567">+39 347 123 4567</a> | 
                <a href="https://facebook.com" target="_blank" aria-label="Visita la nostra pagina Facebook">Facebook</a> | 
                <a href="https://instagram.com" target="_blank" aria-label="Visita la nostra pagina Instagram">Instagram</a>
            </p>
        </div>
    </footer>

</body>
</html>



