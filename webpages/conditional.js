Modernizr.load([
	test: Modernizr.mq('only all'),
	nope: 'respond.min.js'
	},
	{
		//load the menu convertor if max-width is 600px;
		test: Modernizr.mq('only screen and (max-width: 600px)'),
		yep: ['jquery-3.0.0.js' , 'jquery.mobilemenu.js'],
		complete: function () {
			//run this after everything in this group has downloaded
			//and executed, as well everything in all previous groups
			$(document).ready(function(){
			
				$('mainNav').mobilemenu({
					switchWidth: 600,  //width (in px to switch at)
				
					topOptionText: 'select a page', //first option text
					indentString: '&nbsp;&nbsp;&nbsp;' //string for indenting nested items
			
				});
		
			});
		}
	}
]);