<style>

@import url('https://fonts.googleapis.com/css?family=Cinzel+Decorative:700&display=swap');
@font-face{
    font-family: ;
    src: url('.../public/static/fonts/TravelingTypewriter.ttf')
}
/*-HEADER-*/

.header {
    font-size: 30px;
    color: white;
    position: fixed;
}

.header a {
    padding-left: 1620px;
    text-decoration: none;
}

.header a:hover {
    color: #32ada7;
    font-weight: bold;
}


/*-BANNER-*/

.banner {
    margin: 0;
    text-align: center;
    height: 650px;
    background-image: url(images/ville.png);
    padding-top: 100px;
    background-attachment: fixed;
}

.banner h2 {
    color: white;
    font-size: 50px;
    text-shadow: 0.1em 0.1em 0.1em black;
    text-decoration: none;
    font-family: 'Cinzel Decorative', cursive;
    
}

.banner a:hover {
    color: #32ada7;
    font-weight: bold;
}

a.button {
    padding: 10px 100px 10px 100px;
    background-color: #34393E;
    text-align: center;
    color: white;
    border: 3px solid #9F7224;
    text-decoration: none;
    font-size: 25px;

    -webkit-border-radius: 11px;
    -moz-border-radius: 11px;
    border-radius: 11px;
}

a.button:hover {
    border-color: #2951A0;
    color: white;
}


/*-BODY-*/

.separation {
    background-color: #9F7224;
    length: 100%;
    height: 5px;
}

body {
    font-family: 'Poppins', sans-serif;
    margin: 0;
    background-color: #262626;
    font-family: "TravelingTypewriter";
    
}

body h3,
p {
    text-align: center;
    color: white;
}

.texte {
    margin: 75px 250px 75px 250px;
    line-height: 18px;
    text-justify: inter-word;
}

.container {
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    padding: 0;
    list-style: none;
}

.item {

    padding: 15px;
    width: 900px;
    height: 300px;
    text-align: center;
    border: 2px;
    border-style: hidden solid hidden hidden;
    border-color: white;
}

.item2 {

    padding: 5px;
    width: 900px;
    height: 300px;
    margin-top: 10px;
    font-weight: bold;
    font-size: 3em;
    text-align: center;
}

.item2 h2 {
    font-size: 30px;
    color: white;
}

.item2 p {
    font-size: 20px;
    color: white;
}

#scrollUp {
    position: fixed;
    bottom: 10px;
    right: -100px;
}

/*-FOOTER-*/


.footer-container {
    padding: 750px 50px 10px;
    background-image: url(images/sol.png);
    margin-top: 0px;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    padding: 0;
    list-style: none;
}

.footer-item {
    margin-top: 250px;
    padding: 100px;
    width: 350px;
    height: 200px;
    text-align: center;
    
}


/*-PAGE : WORK IN PRGRESS-*/

.wip {
    text-align: center;
    color: white;
}



</style>
