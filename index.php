<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soirées Temple – Sexualité positive</title>
    <style>
        :root {
            color-scheme: light dark;
            --bg: linear-gradient(135deg, #0c0f1a 0%, #1e2435 40%, #0d1a1a 100%);
            --card: rgba(255, 255, 255, 0.08);
            --text: #e8edf2;
            --accent: #e6c17c;
            --accent-2: #8bd3dd;
            --muted: #c5ced7;
            --border: rgba(255, 255, 255, 0.12);
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: "Inter", system-ui, -apple-system, sans-serif;
            background: var(--bg);
            color: var(--text);
            line-height: 1.6;
            -webkit-font-smoothing: antialiased;
        }

        header {
            padding: 48px 22px 32px;
            text-align: center;
        }

        .container {
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 22px 90px;
        }

        .halo {
            position: absolute;
            inset: 0;
            background: radial-gradient(circle at 50% 20%, rgba(230, 193, 124, 0.22), transparent 35%),
                        radial-gradient(circle at 20% 50%, rgba(139, 211, 221, 0.16), transparent 38%),
                        radial-gradient(circle at 80% 60%, rgba(230, 193, 124, 0.18), transparent 30%);
            filter: blur(40px);
            z-index: 0;
            pointer-events: none;
        }

        .shell {
            position: relative;
            overflow: hidden;
            border-radius: 28px;
            border: 1px solid var(--border);
            background: rgba(11, 14, 20, 0.7);
            box-shadow: 0 30px 80px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: clamp(34px, 4vw, 56px);
            margin: 0;
            letter-spacing: -0.5px;
        }

        p.lead {
            color: var(--muted);
            font-size: 18px;
            max-width: 760px;
            margin: 14px auto 28px;
        }

        .pill-row {
            display: inline-flex;
            gap: 12px;
            align-items: center;
            flex-wrap: wrap;
            justify-content: center;
        }

        .pill {
            padding: 9px 14px;
            border-radius: 999px;
            border: 1px solid var(--border);
            background: rgba(255, 255, 255, 0.05);
            font-size: 14px;
            letter-spacing: 0.2px;
        }

        .cta {
            display: inline-flex;
            gap: 14px;
            margin-top: 22px;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn {
            padding: 12px 18px;
            border-radius: 14px;
            border: 1px solid var(--border);
            font-weight: 600;
            text-decoration: none;
            color: #0c0f1a;
            background: linear-gradient(135deg, #e6c17c, #f2dca6);
            box-shadow: 0 15px 35px rgba(0,0,0,0.35);
        }

        .btn.secondary {
            color: var(--text);
            background: transparent;
        }

        section {
            margin-top: 42px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 18px;
        }

        .card {
            padding: 20px;
            border-radius: 18px;
            border: 1px solid var(--border);
            background: var(--card);
            backdrop-filter: blur(6px);
        }

        .card h3 { margin-top: 0; }
        .card p { margin: 8px 0 0; color: var(--muted); }

        .timeline {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 14px;
            margin-top: 12px;
        }

        .slot {
            padding: 16px 18px;
            border-radius: 16px;
            border: 1px dashed var(--border);
            background: rgba(255, 255, 255, 0.04);
        }

        .slot strong { display: block; margin-bottom: 6px; color: var(--accent); }

        .principles {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 16px;
        }

        .badge {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 10px 12px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.06);
            border: 1px solid var(--border);
            font-weight: 600;
        }

        footer {
            padding: 28px 0 36px;
            text-align: center;
            color: var(--muted);
        }

        a { color: var(--accent-2); }
    </style>
</head>
<body>
    <div class="shell">
        <div class="halo" aria-hidden="true"></div>
        <header>
            <div class="pill-row">
                <span class="pill">Espace slow</span>
                <span class="pill">Consentement d'abord</span>
                <span class="pill">Mixité bienveillante</span>
            </div>
            <h1>Soirées Temple – Sexualité positive</h1>
            <p class="lead">Des rencontres sensorielles, lentes et sacrées pour célébrer la connexion, la liberté et la curiosité. Chaque soirée est guidée par des rituels d'accueil, des ateliers de consentement et des espaces calmes pour explorer le toucher et la présence en toute sécurité.</p>
            <div class="cta">
                <a class="btn" href="#reserver">Réserver une place</a>
                <a class="btn secondary" href="#programme">Découvrir le programme</a>
            </div>
        </header>

        <div class="container">
            <section id="esprit">
                <h2>Esprit du temple</h2>
                <div class="grid">
                    <div class="card">
                        <h3>Cadre sécurisé</h3>
                        <p>Accueil en petit comité, espace cosy, lumières douces et accompagnement par une équipe formée aux pratiques trauma-aware.</p>
                    </div>
                    <div class="card">
                        <h3>Rituels et lenteur</h3>
                        <p>Méditation guidée, cercle d'ouverture, respiration et exercices de consentement pour déposer le mental et écouter le corps.</p>
                    </div>
                    <div class="card">
                        <h3>Explorations sensuelles</h3>
                        <p>Stations tactiles, danse lente, massages habillés ou non selon vos limites, zones chill pour intégrer et se reposer.</p>
                    </div>
                </div>
            </section>

            <section id="programme">
                <h2>Programme d'une soirée</h2>
                <div class="timeline">
                    <div class="slot">
                        <strong>19:00 – Accueil</strong>
                        Arrivée en douceur, thé, présentation des facilitateur·ice·s.
                    </div>
                    <div class="slot">
                        <strong>19:30 – Cercle de consentement</strong>
                        Cadre clair, limites personnelles, accords de communication non-violente.
                    </div>
                    <div class="slot">
                        <strong>20:15 – Rituels guidés</strong>
                        Respiration, regards, toucher progressif pour créer la confiance.
                    </div>
                    <div class="slot">
                        <strong>21:00 – Espace libre</strong>
                        Zones dédiées (toucher, danse lente, cocons de repos) avec soutien discret des gardien·ne·s.
                    </div>
                    <div class="slot">
                        <strong>22:30 – Intégration</strong>
                        Partage en cercle, hydratation, fermeture du temple et câlins consentis.
                    </div>
                </div>
            </section>

            <section id="principes">
                <h2>Principes essentiels</h2>
                <div class="principles">
                    <div class="card">
                        <div class="badge">🧭 Consentement explicite</div>
                        <p>Chaque interaction se demande, se vérifie et peut être révoquée à tout moment. Les faciliteur·ice·s veillent au respect des accords.</p>
                    </div>
                    <div class="card">
                        <div class="badge">🌿 Sobriété et sécurité</div>
                        <p>Aucune substance altérante sur place. Un espace calme et une équipe de soutien sont disponibles pour réguler les émotions.</p>
                    </div>
                    <div class="card">
                        <div class="badge">🕯️ Intimité partagée</div>
                        <p>Zones à niveaux de sensualité différenciés, du simple câlin au toucher plus intime, toujours dans la lenteur et la clarté des limites.</p>
                    </div>
                    <div class="card">
                        <div class="badge">🤝 Inclusion</div>
                        <p>Personnes LGBTQIA+ bienvenues, espaces neutres, langage respectueux des identités. Possibilité de buddy system pour se sentir accompagné·e.</p>
                    </div>
                </div>
            </section>

            <section id="infos">
                <h2>Infos pratiques</h2>
                <div class="grid">
                    <div class="card">
                        <h3>Lieu</h3>
                        <p>Studio Temple, 12 rue des Étoiles, espace chaleureux proche métro. Tapis, couvertures et douches disponibles.</p>
                    </div>
                    <div class="card">
                        <h3>Participation</h3>
                        <p>Tarif solidaire 35€ / plein 55€ / soutien 70€. Possibilité d'échange bénévole limité pour l'équipe d'accueil.</p>
                    </div>
                    <div class="card">
                        <h3>Ce que vous apportez</h3>
                        <p>Tenue confortable, serviette, gourde, consentement clair et curiosité. Pas d'appareils photo pour préserver l'intimité.</p>
                    </div>
                </div>
            </section>

            <section id="reserver">
                <h2>Réserver</h2>
                <div class="card">
                    <p>Les places sont limitées pour préserver une atmosphère douce. Réservez en nous écrivant : <a href="mailto:temple@soireeszen.fr">temple@soireeszen.fr</a> ou par téléphone au <strong>+33 7 12 34 56 78</strong>.</p>
                    <p>Merci d'indiquer vos pronoms, besoins spécifiques et votre intention pour la soirée afin que nous préparions un espace qui vous corresponde.</p>
                    <div class="cta">
                        <a class="btn" href="mailto:temple@soireeszen.fr?subject=Reservation%20Temple">Envoyer un e-mail</a>
                        <a class="btn secondary" href="#esprit">Lire la charte</a>
                    </div>
                </div>
            </section>
        </div>
    </div>

    <footer>
        Temple des soirées zen – Sexualité positive, lenteur et respect. Créé avec amour.
    </footer>
</body>
</html>
