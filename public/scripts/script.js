$(document).ready(function() {


    fetch("?json")
    .then(function(response){
        response.json().then(function(data){
           console.log(data);
            makeGlobalText(data);
    
            });
    
            })
            .catch(function(error){
                console.log(error.message);
        });

function makeGlobalText(datas) {
    let element = '';
    for (let data in datas) {
        let elem     = datas[data].elem;
        let theText  = datas[data].theText;
        let theType  = datas[data].theType;
      //  console.log(elem);
        theType === "id" ? 
        element = $(`#${elem}`) :
        element =  $(`.${elem}`);
       // console.log(element);
       
        element.html(theText);        
        
    }
    }

});