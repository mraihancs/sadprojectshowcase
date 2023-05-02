<!DOCTYPE html>
    <html>
        <head>
            <meta charset="UTF-8">
            <title>Discussion</title>
            <link rel="shortcut icon" href="images/Admission.png">
            
            <style>@import url('https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap');

*
{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body
{
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background-color: #f5f6f6;
    font-family: 'Roboto', sans-serif;
}
.container
{
    width: 600px;
    border: 2px solid #333;
    padding: 15px 10px;
}
.container h2
{
    text-align: center;
    margin-bottom: 15px
}
textarea
{
    height: 20px;
    width: 100%;
    border: none;
    border-bottom: 2px solid #aaa;
    background-color: transparent;
    margin-bottom: 10px;
    resize: none;
    outline: none;
    transition: .5s
}

input[type="submit"], button
{
    padding: 10px 15px;
    border: none;
    outline: none;
    border-radius: 5px;
    text-transform: uppercase;
    font-weight: bold;
    cursor: pointer;
}
input[type="submit"]
{
    color: #fff;
    background-color: #273c75
}
button
{
    color: #333;
    background-color: transparent
}
.btn
{
    display: none
}
</style>
        </head>
        <body>
            
            <div class="container">
                <h2>Discuss your Problems</h2>
                <form>
                    <textarea placeholder='Add Your Comment'></textarea>
                    <div class="btn ">
                        <input type="submit" value='Comment'>
                        <button id='clear'>Cancel</button>
                    </div>
                </form>
            </div>
        <script>var feild = document.querySelector('textarea');
var backUp = feild.getAttribute('placeholder');
var btn = document.querySelector('.btn');
var clear = document.getElementById('clear')

feild.onfocus = function(){
    this.setAttribute('placeholder', '');
    this.style.borderColor = '#333';
    btn.style.display = 'block'
}

feild.onblur = function(){
    this.setAttribute('placeholder',backUp);
    this.style.borderColor = '#aaa'
}

clear.onclick = function(){
    btn.style.display = 'none';
    feild.value = '';
}
</script>
             
        </body>
    </html>