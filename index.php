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
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <div class="navbar-container">
                    <a href="index.php" class="navbar-link">HOME</a>
                    <a href="menu.php" class="navbar-link">MENÙ</a>
                    <a href="ordina.php" class="navbar-link">ORDINA</a>
                    <a href="contatti.php" class="navbar-link">CONTATTI</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-logo">
                <a href="img/logo2.jpg" target="_blank">
                    <img src="img/logo2.jpg" alt="DONER KEBAB 21 - Logo kebab artigianale" width="300" class="img-fluid">
                </a>
            </div>
            <div class="hero-divider"></div>
            <div class="hero-hashtag">Carne di qualità, spezie fresche e ingredienti selezionati: il nostro kebab è unico nel suo genere, perfetto per ogni momento della giornata!</div>
        </div>
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
                    <h1 class="section-title">IL NOSTRO KEBAB A PORTATA DI CLICK!</h1>
                    <a href="https://glovoapp.com/" target="_blank" class="order-button order-button-black">ORDINA ORA</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Nuova Sezione Orari -->
    <section id="orari" class="orari-section" style="background-color: #7f00c3; padding: 60px 20px;">
    <a href="contatti.php" style="text-decoration: none;">
        <div class="orari-box text-center p-4 rounded shadow-sm zoom-card">
            <h4 class="orari-title">Orari di apertura</h4>
            <p>Tutti i giorni: 19:00 - 01:30</p>
            <p>Chiuso il lunedì</p>
        </div>
    </a>
</section>

    <!-- Sezione Dove Siamo -->
    <section class="location-section">
        <div class="container">
            <div class="location-title-container">
                <h2 class="location-title">DOVE CI TROVI</h2>
            </div>
            <div class="map-container ratio ratio-16x9">
                <iframe 
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2884.6029929564655!2d11.255813315676455!3d43.769560979118804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132a5612d00b95c9%3A0xe5fdf99c1ff5611e!2sPiazza%20del%20Duomo%2C%2050122%20Firenze%20FI!5e0!3m2!1sit!2sit!4v1713631747069!5m2!1sit!2sit" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade"
                    title="Mappa della posizione di DONER KEBAB 21">
                </iframe>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div>
            <p>© 2025 DONER KEBAB 21 – Tutti i diritti riservati</p>
            <p>
                Firenze | 
                <a href="tel:+393471234567">+39 347 123 4567</a> | 
                <a href="https://facebook.com" target="_blank">Facebook</a> | 
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </p>
        </div>
    </footer>

</body>
</html>


