<style>

/*-HEADER-*/

.header {
    overflow: hidden;
    padding: 20px 10px;
    background-color: white;
    box-shadow: 1px 1px 3px black;
    margin:0px !important;
    length: 100%;
}

.header a {
    float: left;
    color: black;
    padding: 12px;
    text-decoration: none;
    font-size: 18px;
    line-height: 25px;
    border-radius: 4px;
}

.header a:active{
    color: #32ada7;
}

.header a:hover{
    color: #32ada7;
    font-weight: bold;
}

.sticky {
    position: fixed;
    top: 0;
    width: 100%;
}

.header-right {
  float: right;
  padding-right: 10px;
}

/*-BODY-*/

body { 
    font-family: Arial, Helvetica, sans-serif;
    background-image: url(images/fond_3.png);
    background-attachment: fixed;
}

.separation{
    margin: 50px;
    width: 100%;    
    height: 5px;
}


.container{
    margin-top: 100px;
    display: flex;
    flex-flow: row wrap;
    justify-content: space-around;
    padding: 0;
    list-style: none;
}

.item {
    
    padding: 5px;
    width: 900px;
    height: 300px;
    margin-top: 10px;
    text-align: center;border: 3px;
    border-style: hidden solid hidden hidden ;
    border-color: black;
}

.item2 {
    
    padding: 5px;
    width: 900px;
    height: 300px;
    margin-top: 10px;
    color: black;
    font-weight: bold;
    font-size: 3em;
    text-align: center;
}

.item2 h2{
    font-size: 30px;
}

.item2 p{
    font-size: 20px;
}

.deviant{
    background-image: url(images/deviant_dialogue.png);
}


/*-FOOTER-*/

.footer {
    padding: 200px 50px 10px;
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-image: url(images/sol.png);
    color: black;
    text-align: center;
}


/*-CONTACT-*/

.contact{
    margin-top: 7%;
}


</style>