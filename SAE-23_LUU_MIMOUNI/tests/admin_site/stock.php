<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style_main.css" rel="stylesheet">
    <link href="style2.css" rel="stylesheet">

    <link rel="shortcut icon" href="./IMAGES/SNEAKERSADDICT.png" type="image/x-icon">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">    
    <title>SneakersAddict</title>
</head>
<body>
    <form method="POST">
    
        <div id="bandeau">
            <a href="main.php"><img src="./IMAGES/LOGO-TEST.png" class="logo" alt="logo"></a>
            <a href="main.php"><h1>SneakersAddict</h1></a>
            <div id="petit_boutons">
                <a href="main.php">Accueil</a>
                <a href="Produits.php">Produits</a>
                <a href="Contact.php">Contact</a>
                <a href="stock.php">Stock</a>
                <a href="Panier.php">
                <img src="./IMAGES/PANIER.png" alt="panier" id="petit_panier">
                </a>

                <a href="../test.php" id="deco">Se déconnecter</a>
                <br><br>
            </div>
        </div>
        
            <div id="reste">
                <div id="id_qui">
                    <p class="Qui">Stock</p>

            </div>
        
        <div id="tout">    
        <div class="shoe">
            <img src="./IMAGES/NB550.webp" alt="Chaussure">
            <h2>New Balance 550 Gris / Blanc</h2>
            
            <div id="pointure_cadre2">
                <label for="pointure">Pointure :</label>
                
                <select name="pointure" id="pointure" >
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                </select>
            
                
                

            
            </div>
            <p>Stock : <input type="text" name="input" id="input" value="0" class="stockE"></input></p>

            
            <div class="stock-buttons">
                <button type="button" id="increase" onclick="updateStock()">+</button>
                <button type="button" id="decrease" onclick="updateStock()">-</button>
                <button id="valid" name="valider" class="validation">VALIDER</button> 
            
            </div>
        
        </div>   

            <div class="shoe2">
                <img src="./IMAGES/NKAM90.webp" id="shoe" alt="Chaussure">
                <h2>Air max 90 Noir / Bleu</h2>
                
                <div id="pointure_cadre2">
                    <label for="pointure">Pointure :</label>
                    
                    <select name="pointure" id="pointure" >
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                    </select>
                </div>

                <p>Stock : <input type="text" name="input" id="input" value="0" class="stockE"></input></p>

                <div class="stock-buttons2">
                    <button type="button" id="increase" onclick="updateStock()">+</button>
                    <button type="button" id="decrease" onclick="updateStock()">-</button>
                    <button id="valid" name="valider" class="validation">VALIDER</button> 
                
                </div>
            </div> 
            
            <div class="shoe3">
                <img src="./IMAGES/NKCELTICS.webp" id="shoe" alt="Chaussure">
                <h2>Nike Dunk Low Celtics</h2>
                
                <div id="pointure_cadre3">
                    <label for="pointure">Pointure :</label>
                    
                    <select name="pointure" id="pointure" >
                        <option value="36">36</option>
                        <option value="37">37</option>
                        <option value="38">38</option>
                        <option value="39">39</option>
                        <option value="40">40</option>
                    </select>
                </div>

                <p>Stock : <input type="text" name="input" id="input" value="0" class="stockE"></input></p>

                <div class="stock-buttons3">
                    <button type="button" id="increase" onclick="updateStock()">+</button>
                    <button type="button" id="decrease" onclick="updateStock()">-</button>
                    <button id="valid" name="valider" class="validation">VALIDER</button> 
                
                </div>
            </div> 
        </div>       
    </form>          
    <br>
    
    <div class="footer_stock">
        <p>SneakersAddict - Tous droits réservés.</p>
    </div>

</body>
<script src="index.js"></script>

</html>