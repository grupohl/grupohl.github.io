function slideJump(){

	if(typeof (document.URL.split("#")[1]) !== "undefined"){
		if((document.URL.split("#")[1].indexOf("item-")) !== -1){
			if (!isNaN(parseInt(((document.URL.split("#"))[1].split("-"))[1]))){
					n = parseInt(((document.URL.split("#"))[1].split("-"))[1])+1
					if(n == 4){
						n = 1
					}
				location = document.URL.split("#")[0] +"#item-"+n
			}else{
				location = document.URL.split("#")[0] + "#item-1"
			}
		}else{
			location = document.URL.split("#")[0]+"#item-1"
		}
	}else{
		location = document.URL+"#item-1"
	}


	window.location = location

}
function slideReturn(){

	if(typeof (document.URL.split("#"))[1] !== "undefined"){
		if((document.URL.split("#")[1].indexOf("item-")) !== -1){
			if (!isNaN(parseInt(((document.URL.split("#"))[1].split("-"))[1]))){
				n = parseInt(((document.URL.split("#"))[1].split("-"))[1])-1
				if(n == 0){
					n = 3
				}
				location = document.URL.split("#")[0] +"#item-"+n
			}else{
				location = document.URL.split("#")[0] + "#item-3"

			}
		}else{
			location = document.URL.split("#")[0]+"#item-1"
		}
	}else{
		location = document.URL+"#item-1"
	}


	window.location = location

}