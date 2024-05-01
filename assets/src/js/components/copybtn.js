(function($){
	class CopyBtn{
		constructor(){
			this.init();
		}
		init(){
			this.handleCopyBtn(".simplecharm-portfolio-copy-mail")
			this.handleCopyBtn(".simplecharm-portfolio-copy-phone")
		}
		handleCopyBtn(copyBtn){
	        	let bottomAlert = this.askjfdkdasjfhksdajfhk();
			$(copyBtn).on("click",function(){
				let tempTextArea = document.createElement("textarea");
	        	tempTextArea.value = $(copyBtn).siblings("h2").html();
	      		document.body.appendChild(tempTextArea);
	        	tempTextArea.select();
	        	tempTextArea.setSelectionRange(0, 99999); 
	        	if(document.execCommand("copy")){
					// this.showBottomAlert("Code Copied!","#204ecf",1000);
					
				}else{
					// this.showBottomAlert("Can't Copy The Code! Try Again.","#f00",3000);
				}
	        document.body.removeChild(tempTextArea);
	        this.askjfdkdasjfhksdajfhk();
			})
		}
		askjfdkdasjfhksdajfhk(){
			alert("hello")
		}
	}
	new CopyBtn;
})(jQuery)