function stockPackTab(id){
    let ids =id.id;
    // to extract the name of the element
    const tr = document.getElementById(ids);
    const td = tr.querySelector('td:first-child');
    console.log(td);
    let lasttd = tr.querySelector('td:last-of-type');
    console.log('ggggggg');
    console.log(lasttd);
    console.log('ggggggg');
    // to extract tr id 
    let idTr = ids.substring(0, ids.indexOf("/"));
    // to extract table id 
    let idTable = ids.substring(ids.indexOf("/")+1, ids.length);
    lasttd = lasttd.textContent;
    lasttd = lasttd.replace(' ','');


    if (idTable === "package"){
        let packname = document.getElementById("namepack");
        let packid = document.getElementById("idpack");
        let packquant = document.getElementById("quantitypack");
        packid.value = idTr;
        packname.value = td.textContent;
        packquant.setAttribute('max', lasttd);
    }
    else{
        let medname = document.getElementById("namemed");
        let medid = document.getElementById("idmed");
        let medquant = document.getElementById("quantitymed");
        console.log(idTr);
        medid.value = idTr;
        medname.value = td.textContent;
        medquant.setAttribute('max', lasttd);
    }


    console.log("idTr");

    /*var childElement = document.getElementById(id);
    console.log(childElement);
    console.log("fffffff");
    var parentId = childElement.parentNode.id;  
      
    console.log(parentId);  
    console.log("eeeeeeeeee");   
*/
}