var set=localStorage.getItem("set");
if(set=='true')
{
 document.getElementById("lt1").style.display="block";
}
else
{
    document.getElementById("rt1").style.marginLeft="600px";
    
    
}
localStorage.removeItem('set');