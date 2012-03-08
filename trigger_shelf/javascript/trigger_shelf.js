$(document).ready(function() {
	// When the shortcut is hit, show and focus on Trigger, or hide and remove focus from Trigger.
	$(document).bind('keydown', 'alt+ctrl+t', function(a) {
		var a	= $('#accessoryTabs li .trigger').parent('li'),
			b	= $('#trigger'),
			tt	= $('#trigger_acc_content');
			v = tt.val();
	
		a.hasClass("current") ? (b.slideUp("fast"), a.removeClass("current"), tt.blur()) : (a.siblings().hasClass("current") ? (b.show().siblings(":not(#accessoryTabs)").hide(), a.siblings().removeClass("current")) : b.slideDown("fast"), a.addClass("current"), tt.focus(), tt.val(''), tt.val(v));
	});
	
	// When the shortcut is hit, hide and remove focus from Trigger.
	$('#trigger_acc_content').bind('keydown', 'alt+ctrl+t', function(a) {
		var a	= $('#accessoryTabs li .trigger').parent('li'),
			b	= $('#trigger');
			tt	= $('#trigger_acc_content');
	
		b.slideUp("fast");
		a.removeClass("current");
		tt.blur();
	});
});