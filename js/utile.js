function ajaxRequest(type,url,data,callback){
    let xhr = new XMLHttpRequest();

    xhr.open(type,url);
    

    xhr.onload = () => {
        console.log(xhr.responseText);
        switch(xhr.status){
            case 200 : 
            //JSON.parse(xhr.responseText);
            //console.log('texte');
            //console.log(JSON.parse(xhr.responseText));
            callback(JSON.parse(xhr.responseText));
            case 201:
            break;
            default: 
            //console.log('HTTP error'+ xhr.status);
            displayErrors(xhr.status);
        }
    };
    
    xhr.send();
}
function affichageTableau(){
    ajaxRequest('GET','http://localhost/wargames/php/comment.php',null,setTableau);
}

function setTableau(response){
    for (let item in response){
        var newDiv = document.createElement("div");
        newDiv.setAttribute("class","card");
        newDiv.innerHTML+='<div class="card-body">'+'<h5 class="card-title">'+response[item].subject+'</h5>'+'<h6 class="card-subtitle mb-2 text-muted">'+response[item].nom+'</h6><p class="card-text">'+response[item].message+'</p></div>';
        var currentDiv = document.getElementById("sar").parentNode;
        document.body.insertBefore(newDiv, currentDiv);
    }
}
affichageTableau();