function stockPackTab(id){
    let ids =id.id;
    // to extract the name of the element
    const tr = document.getElementById(ids);
    const td = tr.querySelector('td:first-child');

    // to extract tr id 
    let idTr = ids.substring(0, ids.indexOf("/"));
    // to extract table id 
    let idTable = ids.substring(ids.indexOf("/")+1, ids.length);
    let medname = document.getElementById("namemed");
    let medid = document.getElementById("idmed");
    let packname = document.getElementById("namepack");
    let packid = document.getElementById("idpack");

    if (idTable === "package"){
        packid.value = idTr;
        packname.value = td.textContent;
    }
    else{
        console.log(idTr);
        medid.value = idTr;
        medname.value = td.textContent;
    }


    console.log(idTr);

    /*var childElement = document.getElementById(id);
    console.log(childElement);
    console.log("fffffff");
    var parentId = childElement.parentNode.id;  
      
    console.log(parentId);  
    console.log("eeeeeeeeee");   
*/
}