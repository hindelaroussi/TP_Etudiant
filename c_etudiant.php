<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
    <title>Carte d'Étudiant</title>
    <style>
        .card {
    width: 450px;
    border: 2px solid #000;
    border-radius: 10px;
    font-family: 'Times New Roman', Times, serif, sans-serif;
    background-color: #f0f0f000;
    position: relative;
    padding-bottom: 20px; 
}


.header {
    display: flex;
    align-items: center;
    background-color: #15317e;
    color: white;
    padding: 10px;
    border-radius: 10px 10px 0 0;
}
.header img {
    height: 50px;
    margin-right: 10px; 
}
.header h3 {
    flex-grow: 1;
    text-align: center;
    margin: 0;
}
.content {
    text-align: center;
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    background-image: url(images\ \(1\).jpeg);
    background-size: cover;
    background-repeat: no repeat;
    opacity: 70%;
    z-index: -1;
    margin-top: 0%;
    margin-bottom: 0%;
    padding: 20px;
}

.photo {
    width: 100px;
    height: 120px;
    background-color: #ccc;
}
.photo img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}
.info {
    margin-left: 20px;
    text-align: left; 
}
.info div {
    margin-bottom: 10px;
}
.info span {
    font-weight: bold;
}
.footer {
    position: absolute;
    bottom: 0;
    left: 0;
    background: linear-gradient(to right, #1ab154, #898888);
    height: 9px;
    width: 100%;
    border-radius: 0 0 10px 10px;
    margin-top: 0%;
}
.font{
    font-size: 5px;
    color: #898888;
}
    </style>
</head>
<body>
    <div class="card">
        <div class="header">
            <img src="logo.png" alt="UEMF Logo">
            <h3>CARTE D'ÉTUDIANT <br> student id</h3>
        </div>
        <div class="content">
            <div class="img"></div>
            <div class="photo">
                <img src="me.jpg" alt="Photo">
            </div>
            <div class="info">
                <div>
                    etablishment\etablissement<br><span>École d'Ingénierie Digitale et d'Intelligence Artificielle</span>
                </div>
                <div>
                   <font>fullname/nom et prénom </font><br><span>Hind EL Aroussi</span>
                </div>
                <div>
                    <font>registration number/matricule </font> <br><span>2200605</span>
                </div>
            </div>
        
 
        </div>
        <div class="footer"></div>
    </div>

</body>
</html>