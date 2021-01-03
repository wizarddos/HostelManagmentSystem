<!DOCTYPE html>
<html>
    <head lang = "en-GB">
        <link rel="stylesheet" href = "../styles/admin.css"/>
        <link rel="stylesheet" href = "../styles/style.css"/>
        <script src = "https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script>
        $('#adminadd').click($('#form').html("<fieldset><legend><h2>Add new travel dir</h2></legend><form method = \"post\" action=\"add.php\"><input type = \"text\" name = \"title\" class =\"admintitle\"/><br/><br/><textarea name = \"desc\" class = \"textarea\"></textarea><br/><br/><input type = \"file\" name = \"photo\"/><br/><br/><input type = \"submit\" value = \"add new travel directory\" class = \"adminsubmit\"/></form></fieldset>"))
        //TODO: naprawić całego js'a
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
                    <input type = "button" id = "adminadd" value = "add new travel directory"/>
                    <button id = "admindelete">delete travel directory</button>
                    <button id = "adminchange">change travel details</button>
            </section>
            <div id = "form">
                
            </div>
        </div>
    </body>
</html>
