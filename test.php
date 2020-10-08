<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link href="styles.css" rel="stylesheet"/>
        
        <title>My CV</title>

    </head>

    <body class="body-padding">
        <h1>My CV</h1>
        
        <div class="loader"></div>


        <div class="row text-primary">
            <div class="col-6 p-3">
                <button id="go-to-bottom-text" onclick="scrollToBottom()" type="button" class="btn btn-outline-success">Button</button>
            </div>
            <div class="col-3 p-3">
                col-3
            </div>
            <div class="col-3 p-3">
                col-3
            </div>
        </div>
        
        <div class="row bg-primary" style="height: 50px;">
            <div class="col-6 text-primary">
                Row 2
                col-6
            </div>
            <div class="col-6">
                col-6
            </div>
        </div>

        <p id="bottom-text" class="color-margin">
            Bottom text
        </p>

        <a href="login.php">click me<a>


        <style>
            body{
                padding: 50px;
            }
            .body-padding{
                padding: 50px;
            }
            .color-margin{
                color: red;
                margin: 83px;
            }
            .loader {
                border: 16px solid #f3f3f3; /* Light grey */
                border-top: 16px solid #3498db; /* Blue */
                border-radius: 50%;
                width: 120px;
                height: 120px;
                animation: spin 2s linear infinite;
            }

            @keyframes spin {
                0% { transform: rotate(0deg); }
                100% { transform: rotate(360deg); }
            }
        </style>

        <script>
            console.log('JS is working');

            function scrollToBottom(){
                let bottomText = document.getElementById('bottom-text');
                bottomText.scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
                
                // let a = document.createElement('a');
                // a.target= '_blank';
                // a.href= 'login.php';
                // a.click();
            }

            
            document.getElementById('loader').hidden = true;

        </script>

        <!-- Custom JS -->
        <script src="script.js"></script>  
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
                                   
    </body>
</html>