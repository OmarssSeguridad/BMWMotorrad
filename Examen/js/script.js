var clic = 1;
function divLogin(){ 
   if(clic==1){
   		document.getElementById("caja").style.height = "100px";
   			var elemento = document.getElementById("table");
		   elemento.style.display = 'block';
   clic = clic + 1;
   } else{
       document.getElementById("caja").style.height = "0px";      
	   var elemento = document.getElementById("table");
		   elemento.style.display = 'none';

    clic = 1;
   }   
}
function divTable()
{
	var clic = 1;
	if(clic==1){
	/*document.getElementById("table").style.display = 'none';*/
	   var elemento = document.getElementById("table");
		   elemento.style.display = 'none';

   	clic = clic + 1;
   	} else{
       /*document.getElementById("table").style.display = 'block';  */
          var elemento = document.getElementById("table");
		   elemento.style.display = 'block';
  
    clic = 1;
   }   
}
function esconde_div(){
   var elemento = document.getElementById("table");
   elemento.style.display = 'none';
}
 
function visible_div(){
   var elemento = document.getElementById("table");
   elemento.style.display = 'block';
}