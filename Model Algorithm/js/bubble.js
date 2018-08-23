var k=0;
var pas=1;
var arr=new Array();
	
function rand(){
	k=0;
	pas=1;
	document.getElementById('d0').style.backgroundColor="red";
	for(var i=0;i<20;i++){
		arr[i]=Math.floor((Math.random()*250)+10);
		document.getElementById('d'+i).style.height=arr[i]+"px";
	}
	for(i=1;i<20;i++){
		//document.getElementById('d'+i).innerHTML=arr[i];
		document.getElementById('d'+i).style.backgroundColor="#F1F1F1";
	}
}
			
function bSort(){
	var temp;
	for(var pass=1;pass<arr.length;pass++){
		for(var j=0;j<arr.length-pass;j++){
			if(arr[j]>arr[j+1]){
				temp=arr[j];
				arr[j]=arr[j+1];
				document.getElementById('d'+j).style.height=arr[j]+"px";
				arr[j+1]=temp;
				document.getElementById('d'+(j+1)).style.height=arr[j+1]+"px";
			}
		}
	}
	for(var j=0;j<arr.length;j++)
		document.getElementById('d'+j).style.backgroundColor="red";
}
			
function stepp(){
	var temp;
	if(pas<arr.length){
		if(k<arr.length-pas){
			document.getElementById('d'+k).style.backgroundColor="#F1F1F1";
			document.getElementById('d'+(k+1)).style.backgroundColor="red";
			if(arr[k]>arr[k+1]){
				temp=arr[k];
				arr[k]=arr[k+1];
				document.getElementById('d'+k).style.height=arr[k]+"px";
				arr[k+1]=temp;
				document.getElementById('d'+(k+1)).style.height=arr[k+1]+"px";
			}
			k++;
		}
		else{
			k=0;
			pas++;
			document.getElementById('d0').style.backgroundColor="red";
		}
	}
}