function add(){ 
    document.getElementById('form').innerHTML = "<fieldset><legend><h2>Add new travel directory</h2></legend><form method = \"post\" action=\"add.php\"><input type = \"text\" name = \"title\" class =\"admintitle\"/><br/><br/><textarea name = \"desc\" class = \"textarea\"></textarea><br/><br/><input type = \"file\" name = \"photo\"/><br/><br/><input type = \"submit\" value = \"add new travel directory\" class = \"adminsubmit\"/></form></fieldset>";
}
function deletedir(){
    console.clear();
    var xhr = new XMLHttpRequest();
    xhr.onload = function(){
        if(xhr.status === 200){
            data = JSON.parse(xhr.responseText);
            console.log(data);
            let content = '';
            for(var i = 0; i < data.rows.length; i++){
                content += "<form method=\"post\" id =\""+data.rows[i].id+"\" action=\"delete.php\"><div class = \"AdminDeleteOfert\"><h3>"+data.rows[i].title+"</h3><br/>&nbsp;<button onclick=\"document.getElementById(\""+data.rows[i].id+"\").submit()\" class = \"cross-icon\"><i class = \"icon-cancel\"></i></button><input type = \"hidden\" value = \""+data.rows[i].id+"\" name = \"id\"/></div></form>";
            }
            var insert = "<fieldset><legend>Which travel offert you want to remove</legend>"+content+"</fieldset>"
            $('#form').html(insert);
            
        }else{
            console.log("error");
        }
    }   
    xhr.open('GET', 'phpscripts/JSONdelete.php', true);
    xhr.send(null);
}
function clearview(){
    document.getElementById('form').innerHTML = "";
    
}