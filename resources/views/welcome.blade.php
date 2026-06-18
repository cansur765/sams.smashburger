<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sam's Smash Burger - Speisekarte</title>
    <!-- Google Fonts für coole Burger-Truck-Schriften -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --truck-red: #6b1d24; /* Das tiefe Weinrot vom Wagen */
            --cream-bg: #fdfbf4;  /* Das helle Beige der Karte */
            --dark-text: #212529;
            --pop-red: #d32f2f;   /* Das neue, poppigere Ketchup-Rot */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            color: #fff;
            padding: 60px 20px;
            background-color: #121212; /* Fallback */
            position: relative;
            overflow-x: hidden;
            min-height: 100vh;
        }

        /* Das rot-weiße Karomuster: Größer, poppiger und leicht geneigt */
        body::before {
            content: "";
            position: fixed;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            z-index: -1;
            background-color: #ffffff;
            background-image: 
                linear-gradient(45deg, var(--pop-red) 25%, transparent 25%, transparent 75%, var(--pop-red) 75%, var(--pop-red)),
                linear-gradient(45deg, var(--pop-red) 25%, transparent 25%, transparent 75%, var(--pop-red) 75%, var(--pop-red));
            /* Hier stellen wir die Größe der Quadrate ein (vorher 60px, jetzt fett auf 120px angehoben) */
            background-size: 120px 120px;
            background-position: 0 0, 60px 60px;
            /* Hier wird das Muster um -6 Grad horizontal geneigt */
            transform: rotate(-6deg);
            transform-origin: center;
        }

        body {
            font-family: 'Poppins', sans-serif;
            /* Das rot-weiße Karomuster rein mit CSS generiert */
            background-color: #ffffff;
            background-image: 
                linear-gradient(45deg, #8b1e26 25%, transparent 25%, transparent 75%, #8b1e26 75%, #8b1e26),
                linear-gradient(45deg, #8b1e26 25%, transparent 25%, transparent 75%, #8b1e26 75%, #8b1e26);
            background-size: 60px 60px;
            background-position: 0 0, 30px 30px;
            
            color: #fff;
            padding: 40px 20px;
        }

        /* NEU: Der Container für das eigene Quadrat der Story */
        .story-container {
            display: block;
            max-width: 500px;
            margin: 0 auto 30px auto !important; /* Drückt das Menü nach unten weg */
            border: 5px solid #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border-radius: 12px;
            overflow: hidden;
        }

        /* STORY / INTRO SEKTION */
        .section-story {
            background-color: #1e1e1e;
            padding: 30px 25px;
            text-align: center;
        }

        .section-story h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .story-highlight {
            font-weight: 600;
            color: #fff;
            font-size: 1.1rem;
            line-height: 1.4;
            margin-bottom: 15px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        .story-text {
            font-size: 0.9rem;
            color: #ccc;
            line-height: 1.6;
            margin-bottom: 15px;
            font-weight: 300;
        }

        .story-text:last-child {
            margin-bottom: 0;
        }

        /* MENÜ CONTAINER QUADRAT */
        .menu-container {
            max-width: 500px;
            margin: 0 auto 50px auto;
            border: 5px solid #fff;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
            border-radius: 12px;
            overflow: hidden;
        }

        /* BURGER SEKTION (Dunkelrot) */
        .section-burgers {
            background-color: var(--truck-red);
            padding: 30px 20px;
        }

        .header {
            text-align: center;
            margin-bottom: 30px;
        }

        .header h1 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 3.5rem;
            letter-spacing: 2px;
            line-height: 1;
            margin-bottom: 5px;
        }

        .halal-badge {
            display: inline-block;
            border: 2px solid #fff;
            border-radius: 50%;
            padding: 3px 8px;
            font-size: 0.8rem;
            font-weight: bold;
            margin-top: 5px;
        }

        .menu-item {
            border-bottom: 2px dashed rgba(255,255,255,0.2);
            padding: 15px 0;
        }

        .menu-item:last-child {
            border-bottom: none;
        }

        .item-title-row {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
        }

        .item-name {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.8rem;
            letter-spacing: 1px;
        }

        .item-prices {
            text-align: right;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.3rem;
        }

        .item-desc {
            font-size: 0.75rem;
            color: #dddddd;
            text-transform: uppercase;
            margin-top: 5px;
            font-weight: 300;
            max-width: 75%;
        }

        .menu-deal {
            background-color: #fff;
            color: var(--truck-red);
            text-align: center;
            padding: 15px;
            margin-top: 25px;
            border-radius: 8px;
        }

        .menu-deal h2 {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2rem;
        }

        .menu-deal p {
            font-size: 0.9rem;
            font-weight: bold;
        }

        /* FINGERFOOD SEKTION (Creme-Gelb) */
        .section-fingerfood {
            background-color: var(--cream-bg);
            color: var(--dark-text);
            padding: 30px 20px;
        }

        .section-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.5rem;
            color: var(--truck-red);
            border-bottom: 3px solid var(--truck-red);
            margin-bottom: 15px;
        }

        .ff-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            font-weight: 600;
        }

        .ff-item-container {
            margin-bottom: 20px;
        }

        .ff-desc {
            font-size: 0.8rem;
            color: #666;
            font-style: italic;
            margin-top: -5px;
            margin-bottom: 5px;
        }

        .sub-section-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.6rem;
            color: var(--truck-red);
            margin-top: 15px;
            margin-bottom: 5px;
        }

        /* INFOS & ZEITEN SEKTION (Dunkelgrau/Schwarz für Kontrast) */
        .section-info {
            background-color: #1a1a1a;
            padding: 30px 20px;
            border-top: 4px solid var(--truck-red);
            text-align: center;
            max-width: 500px;
            margin: 0 auto;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.5);
        }

        .info-title {
            font-family: 'Bebas Neue', sans-serif;
            font-size: 2.3rem;
            color: #fff;
            letter-spacing: 1px;
            margin-bottom: 15px;
        }

        .address-box {
            font-size: 0.9rem;
            color: #ccc;
            margin-bottom: 25px;
            line-height: 1.5;
        }

        .address-main {
            font-weight: bold;
            color: #fff;
            font-size: 1.1rem;
        }

        .hours-table {
            width: 100%;
            max-width: 300px;
            margin: 0 auto;
            font-size: 0.9rem;
            border-collapse: collapse;
        }

        .hours-table td {
            padding: 6px 0;
            border-bottom: 1px solid #2a2a2a;
            text-align: left;
        }

        .hours-table .text-right {
            text-align: right;
            font-weight: 600;
        }

        .hours-table tr:last-child td {
            border-bottom: none;
        }

        .closed-day {
            color: #ff4d4d;
        }

        /* SOCIAL MEDIA BUTTONS */
        .social-container {
            margin-top: 30px;
            display: flex;
            justify-content: center;
            gap: 15px;
        }

        .social-button {
            display: inline-block;
            font-family: 'Bebas Neue', sans-serif;
            font-size: 1.2rem;
            letter-spacing: 1px;
            text-decoration: none;
            color: #fff;
            padding: 10px 25px;
            border-radius: 6px;
            text-transform: uppercase;
            transition: all 0.3s ease;
            min-width: 130px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.3);
        }

        .social-button.instagram {
            background: linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
        }

        .social-button.tiktok {
            background-color: #010101;
            border: 2px solid #fff;
        }

        .social-button:hover {
            transform: translateY(-3px);
            box-shadow: 0 6px 15px rgba(255,255,255,0.1);
        }

        .social-button.instagram:hover {
            filter: brightness(1.1);
        }

        .social-button.tiktok:hover {
            background-color: #fff;
            color: #000;
        }
    </style>
</head>
<body>
    
    <!-- 1. QUADRAT: DIE STORY -->
    <div class="story-container">
        <div class="section-story">
            <h2>UNSERE STORY</h2>
            <p class="story-highlight">Willkommen bei Sam's Smashburger – Familiengeführt & betrieben.</p>
            <p class="story-text">
                Sam's Smashburger begann als kleiner Pop-up-Stand auf Straßenfesten und Flohmärkten im Kölner Norden und Umgebung im April 2024. 
                Ursprünglich wurde es als Leidenschaftsprojekt gegründet, um unsere Version eines perfekten Smashburgers in Köln zu kreieren und zu servieren.
            </p>
            <p class="story-text">
                Nach einem erfolgreichen Jahr als Pop-up-Foodstand eröffnete Sam's Smashburger 2025 seinen ersten festen Stand auf der Boltensternstraße in Köln-Niehl!
            </p>
        </div>
    </div>

    <!-- 2. QUADRAT: DIE SPEISEKARTE -->
    <div class="menu-container">
        
        <!-- BURGER SEKTION -->
        <div class="section-burgers">
            <div class="header">
                <h1>SAM'S SMASH BURGER</h1>
                <div class="halal-badge">حلال HALAL</div>
            </div>

            <!-- Cheeseburger -->
            <div class="menu-item">
                <div class="item-title-row">
                    <div class="item-name">CHEESEBURGER</div>
                    <div class="item-prices">
                        SINGLE: 7,50€<br>DOUBLE: 10,50€
                    </div>
                </div>
                <div class="item-desc">Beef Patty, American Cheese, Ketchup, Senf, Pickles, Onions</div>
            </div>

            <!-- Oklahoma -->
            <div class="menu-item">
                <div class="item-title-row">
                    <div class="item-name">OKLAHOMA</div>
                    <div class="item-prices">
                        SINGLE: 7,50€<br>DOUBLE: 10,50€
                    </div>
                </div>
                <div class="item-desc">Beef Patty, American Cheese, Grilled Onions, Pickles, House Sauce</div>
            </div>

            <!-- Jalapeño -->
            <div class="menu-item">
                <div class="item-title-row">
                    <div class="item-name">JALAPEÑO</div>
                    <div class="item-prices">
                        SINGLE: 8,00€<br>DOUBLE: 11,00€
                    </div>
                </div>
                <div class="item-desc">Beef Patty, American Cheese, Grilled Onions, Jalapeños, House Sauce, Hot Honey Sauce</div>
            </div>

            <!-- Menü Deal -->
            <div class="menu-deal">
                <h2>CREATE YOUR MENÜ!</h2>
                <p>FRIES + SOFTDRINK &nbsp;&nbsp;&nbsp; 6,00€</p>
            </div>
        </div>

        <!-- FINGERFOOD, SAUCEN, DRINKS -->
        <div class="section-fingerfood">
            <h2 class="section-title">FINGERFOOD</h2>
            
            <div class="ff-item-container">
                <div class="ff-item">
                    <span>GOLDEN FRIES</span>
                    <span>3,50€</span>
                </div>
                <div class="ff-item">
                    <span>SAMS FRIES</span>
                    <span>5,00€</span>
                </div>
                <div class="ff-desc">House Sauce, Jalapeños</div>
            </div>

            <h3 class="sub-section-title">SAUCEN</h3>
            <div class="ff-item">
                <span>Mayo-Ketchup</span>
                <span>0,50€</span>
            </div>
            <div class="ff-item">
                <span>Joppie</span>
                <span>1,00€</span>
            </div>

            <h3 class="sub-section-title">EXTRAS</h3>
            <div class="ff-item"><span>Cheese</span> <span>1,00€</span></div>
            <div class="ff-item"><span>Zwiebeln</span> <span>1,00€</span></div>
            <div class="ff-item"><span>Patty</span> <span>3,00€</span></div>
            <div class="ff-item"><span>Coleslaw</span> <span>4,00€</span></div>

            <h3 class="sub-section-title">DRINKS</h3>
            <div class="ff-item"><span>Softdrinks</span> <span>2,50€</span></div>
            <div class="ff-item"><span>Water</span> <span>2,00€</span></div>
        </div>

    </div>

    <!-- 3. QUADRAT: STANDORT, ZEITEN & SOCIALS -->
    <div class="section-info">
        <h2 class="info-title">STANDORT & ZEITEN</h2>
        
        <div class="address-box">
            <p class="address-main">Sam's Smash Burger</p>
            <p>Boltensternstraße 104-112</p>
            <p>50735 Köln (Cologne)</p>
        </div>

        <table class="hours-table">
            <tr>
                <td>Mo – Do:</td>
                <td class="text-right">12:00 – 22:00 Uhr</td>
            </tr>
            <tr>
                <td>Fr:</td>
                <td class="text-right">15:00 – 22:00 Uhr</td>
            </tr>
            <tr>
                <td>Sa:</td>
                <td class="text-right">12:00 – 22:00 Uhr</td>
            </tr>
            <tr class="closed-day">
                <td>So:</td>
                <td class="text-right">❌ GESCHLOSSEN</td>
            </tr>
        </table>

        <div class="social-container">
            <a href="https://www.instagram.com/sams.smashburger" target="_blank" class="social-button instagram">
                Instagram
            </a>
            <a href="https://www.tiktok.com/@sams.smashburger" target="_blank" class="social-button tiktok">
                TikTok
            </a>
        </div>
    </div>

</body>
</html>