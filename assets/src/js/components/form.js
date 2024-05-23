/**
 * All Codes Related to form will be here.
 */
(function($){
	class Form{
		constructor(){
			this.init();
		}
		init(){
			this.checkbox('available');
		}
		// todo: make all input field work with keyboard navigation
		checkbox(checkbox){
			//when user focus on checkbox and enter then checkbox should toggle not submit the form.
			$(`.${checkbox}`).each(function(evt){
				evt.target.on('keydown',function(e) {
					if(e.key !== 'Enter') return;
					this.checked = !this.checked;
					e.preventDefault();
				})
			})
		}
	}
	new Form;
})(jQuery)