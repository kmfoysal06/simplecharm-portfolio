(function($){
	// $('body.page-template').dataset.theme = 'light' ;
	// var a = $('body.page-template');
	// console.log({{a}})
	$(document).on("ready",(e)=>{
		const bodyTag = $(e.target.body)[0];
		if(bodyTag.dataset.theme && bodyTag.classList.contains(['page'])){
			bodyTag.dataset.theme = 'light';
		}
	})
})(jQuery)