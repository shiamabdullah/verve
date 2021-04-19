function search(productName){
    //console.log(productName);
    fetchSearchData(productName);
}
function fetchSearchData(productName)
{
    
    fetch('SearchCheckCus.php',{
        method:'post',
        body:new URLSearchParams('productName'+productName)
    }
    )
    .then(res=>res.json())
    .then(res=>viewSearchResult(res))
    //.catch(e=>console.error('Error:'+e))
}
function viewSearchResult(product)
{
    const Dataviewer=document.getElementById("Dataviewer");
    Dataviewer.innerHTML="";
    for(let i=0;i<data.lenth;i++)
    {
        const li=document.createElement("li");
        li.innerHTML=product[i]["productName"];
        Dataviewer.appendChild(li);
    }
}