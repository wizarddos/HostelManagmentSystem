var buttonadd = document.getElementById('adminadd');
buttonadd.addEventListener("click", function(){
    let el = document.getElementById('form');
    let inner = "<fieldset><legend><h2>Add new travel dir</h2></legend><form method = \"post\" action=\"add.php\"><input type = \"text\" name = \"title\" class =\"admintitle\"/><br/><br/><textarea name = \"desc\" class = \"textarea\"></textarea><br/><br/><input type = \"file\" name = \"photo\"/><br/><br/><input type = \"submit\" value = \"add new travel directory\" class = \"adminsubmit\"/></form></fieldset>"
    el.innerHTML(inner);
    delete inner;
},false)