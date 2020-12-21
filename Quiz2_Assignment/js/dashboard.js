function get(id){
		return document.getElementById(id);
	}
function fill_suggest(td){
		get("search_text").value= td.innerHTML;
	}
function search(){
		var text = get("search_text").value;
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200 ){
				document.getElementById("suggestion").innerHTML = this.responseText;
			}
		};
		if(text){
			xhttp.open("GET","../controllers/searchbook.php?key="+text,true);
			xhttp.send();
		}
		else{
			document.getElementById("suggestion").innerHTML="";
		}
	}
