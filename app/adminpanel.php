<!DOCTYPE html>
<html>
    <head lang = "en-GB">
        <link rel="stylesheet" href = "../styles/admin.css"/>
        <link rel="stylesheet" href = "../styles/style.css"/>
        <link rel="stylesheet" href = "../styles/fontello/css/fontello.css"/>
        <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script src = "js/adminchanges.js"></script>
        <script>
        </script>
        
        
    </head>
    <body>
        <header>
            <div class = "header">
                <div class = "header-text">
                    <h1>Welcome to admin panel</h1>
                </div>
               
            </div>
        </header>
        <div class = "section-header"><h2>you are in admin panel</h2></div>
        <div class = "container">
            <section class = "admin-section">
                    <button id = "adminadd" onclick = "add()">add new travel directory</button>
                    <button id = "admindelete" onclick = "deletedir()">delete travel directory</button>
                    <button id = "adminchange">change travel details</button>
            </section>
            <div class = "admin-div">
                <button id = "adminclear" onclick = "clearview()">Clear viewport</button>
            </div>
            <div id = "form">
                
            </div>
        </div>
    </body>
</html>
