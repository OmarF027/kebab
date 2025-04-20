<?php
session_start();

// Funzione per la navbar
function includeNavbar() {
    echo '
    <nav class="navbar">
        <div class="navbar-container">
            <a href="index.php" class="navbar-link">HOME</a>
            <a href="menu.php" class="navbar-link">MENÙ</a>
            <a href="ordina.php" class="navbar-link">ORDINA</a>
            <a href="contatti.php" class="navbar-link">CONTATTI</a>
        </div>
    </nav>';
}

// Funzione per il footer
function includeFooter() {
    echo '
    <footer class="footer">
        <div class="footer-container">
            <p>© 2025 DONER KEBAB 21 – Tutti i diritti riservati</p>
            <p>
                Firenze | 
                <a href="tel:+393471234567">+39 347 123 4567</a> | 
                <a href="https://facebook.com" target="_blank">Facebook</a> | 
                <a href="https://instagram.com" target="_blank">Instagram</a>
            </p>
        </div>
    </footer>';
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nome = filter_input(INPUT_POST, 'nome');
    $email = filter_input(INPUT_POST, 'mail', FILTER_VALIDATE_EMAIL);
    $messaggio = filter_input(INPUT_POST, 'messaggio');

    if (!empty($nome) && !empty($email) && !empty($messaggio)) {
        ?>
        <!DOCTYPE html>
        <html lang="it" class="h-100">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Contatto Inviato - DONER KEBAB 21</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="styles.css">
            <style>
                html, body {
                    height: 100%;
                    margin: 0;
                    padding: 0;
                }
                body {
                    display: flex;
                    flex-direction: column;
                }
                .content {
                    flex: 1;
                }
            </style>
        </head>
        <body>
            <?php includeNavbar(); ?>
            
            <div class="content">
                <section class="home-section">
                    <h2 class="section-title">Grazie per averci contattato!</h2>
                    <p class="section-text">Il tuo messaggio è stato inviato con successo.</p>
                    <div class="text-center">
                        <a href="index.php" class="btn btn-dark">Torna alla Home</a>
                    </div>
                </section>
            </div>
            
            <?php includeFooter(); ?>
        </body>
        </html>
        <?php
    } else {
        ?>
        <!DOCTYPE html>
        <html lang="it" class="h-100">
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>Errore - DONER KEBAB 21</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="styles.css">
            <style>
                html, body {
                    height: 100%;
                    margin: 0;
                    padding: 0;
                }
                body {
                    display: flex;
                    flex-direction: column;
                }
                .content {
                    flex: 1;
                }
            </style>
        </head>
        <body>
            <?php includeNavbar(); ?>
            
            <div class="content">
                <section class="home-section">
                    <div class="container" style="max-width: 600px;">
                        <h2 class="section-title text-center mb-4">Errore</h2>
                        <div class="alert alert-danger">
                            <h5 class="alert-heading">Si è verificato un errore</h5>
                            <p>Compila tutti i campi obbligatori.</p>
                        </div>
                        <div class="text-center">
                            <a href="index.php" class="btn btn-dark">Torna alla Home</a>
                        </div>
                    </div>
                </section>
            </div>
            
            <?php includeFooter(); ?>
        </body>
        </html>
        <?php
    }
}
?>