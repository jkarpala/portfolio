/* Author: 

*/

$(document).ready(function() {
   // do stuff when DOM is ready
   
   $(document).ready(function() {
       $('.image').cycle({
   		fx: 'fade', // choose your transition type, ex: fade, scrollUp, shuffle, etc...
   		random:  1,
   		speed:    2500, 
   		timeout:  5000 
   	});
   });
      
   $("a.gallery").fancybox({
   	'cyclic'			: true,
   	'transitionIn'		: 'fade',
   	'transitionOut'		: 'fade',
   	'titlePosition' 	: 'outside',
   	'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
   		return '<span id="fancybox-title-outside">' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
   	}
   });
   
    
   
 });
















