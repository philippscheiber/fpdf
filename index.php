<?php
?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Willkommen zum PDF-Generator von Viktor</title>
    <style>
        body {
            display: flex;            /* Flexbox verwenden */
            flex-direction: column;  /* Inhalte vertikal anordnen */
            justify-content: center;  /* Inhalte vertikal zentrieren */
            align-items: center;      /* Inhalte horizontal zentrieren */
            height: 100vh;            /* Vollständige Höhe des Bildschirms */
            margin: 0;                /* Kein Standardabstand */
            background-color: #f4f4f4; /* Dezente Hintergrundfarbe */
            font-family: Arial, sans-serif; /* Schöne Standardschrift */
            text-align: center;       /* Text zentrieren */
        }

        h1 {
            font-size: 3em; /* Große Überschrift */
            color: #333;    /* Dunkler Farbton */
            margin-bottom: 10px;
        }

        h2 {
            font-size: 1.8em; /* Mittelgroße Überschrift */
            color: #555;      /* Etwas hellerer Farbton */
            margin-bottom: 20px;
        }

        .image {
            max-width: 50%;          /* Bildbreite auf 50% des Bildschirms begrenzen */
            height: auto;            /* Proportionen beibehalten */
            border: 2px solid #ccc;  /* Rahmen um das Bild */
            border-radius: 10px;     /* Abgerundete Ecken */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Schatteneffekt */
            margin-bottom: 30px;     /* Abstand unter dem Bild */
        }

        button {
            background-color: #4CAF50; /* Grüner Hintergrund */
            color: white;             /* Weiße Schrift */
            padding: 20px 40px;       /* Größere Innenabstände für einen großen Button */
            font-size: 1.5em;         /* Größere Schriftgröße */
            border: none;             /* Kein Rahmen */
            border-radius: 10px;      /* Abgerundete Ecken */
            cursor: pointer;          /* Zeigerhand bei Hover */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Schatteneffekt */
            transition: background-color 0.3s ease; /* Weicher Farbwechsel bei Hover */
        }

        button:hover {
            background-color: #45a049; /* Dunkleres Grün beim Hover */
        }
    </style>
</head>
<body>
<h1>Herzlich willkommen!</h1>
<h2>Zum Heiratsurkunden-Generator von Viktoria</h2>
<img src="Viktorheiraten.JPEG" alt="Viktors Mann" class="image">
<button onclick="window.location.href='pdfmachen.php';">PDF erstellen</button>
</body>
</html>
