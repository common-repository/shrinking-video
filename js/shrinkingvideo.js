function shrinking_video( height, width, position ){
	var pos_top = true;
	switch( true ){
		case position == 'top right':
			position = 'top-right';
			pos_top = true;
			break;
		case position == 'top left':
			position = 'top-left';
			pos_top = true;
			break;
		case position == 'bottom right':
			position = 'bottom-right';
			pos_top = false;
			break;
		case position == 'bottom left':
			position = 'bottom-left';
			pos_top = false;
			break;
		case position == 'top-right':
			pos_top = true;
			break;
		case position == 'top-left':
			pos_top = true;
			break;
		case position == 'bottom-right':
			pos_top = false;
			break;
		case position == 'bottom-left':
			pos_top = false;
			break;
		default:
			position = 'top-right';
			pos_top = true;
	}
	jQuery(document).ready(function($){
		var screen_size = $(window).height();
		var screen_width = $(window).width();
		var vid_pos = $('#shrinking_video iframe').position();
		var vid_bottom = vid_pos.top + height;
		var header_pos_check = $('header').css('position');
		var admin_bar = $('div').is('#wpadminbar');
		
		if( screen_width > 1024 ){
			$(window).scroll(function(){
				var screen_pos = $(window).scrollTop();
				if( header_pos_check == 'fixed' ){
					var header_height = $('header').outerHeight();
					if( screen_pos >= vid_bottom ){
						$("#shrinking_video iframe").removeClass("shrinking_video-normal")
						.css({
							'height':225,
							'width':275,
						})
						.addClass("shrinking_video-frame shrinking_video-" + position);
						$("#shrinking_video").css({
							'height':height
						});
						if( pos_top && admin_bar ){
							$('#shrinking_video iframe').css({'top': header_height + 30});
						}else if( pos_top ){
							$('#shrinking_video iframe').css({'top': header_height});
						}
					}else{
						$("#shrinking_video iframe").removeClass('shrinking_video-frame')
						.addClass('shrinking_video-normal')
						.css({
							'height':height,
							'width':width
						});
					}
				}else if( screen_pos >= vid_bottom ){
					$("#shrinking_video iframe").removeClass("shrinking_video-normal")
					.css({
						'height':225,
						'width':275
					})
					.addClass("shrinking_video-frame shrinking_video-" + position);
					$("#shrinking_video").css({
						'height':height
					});
					if( pos_top && admin_bar ){
						$('#shrinking_video iframe').css({'top':30});
					}
				}else{
					$("#shrinking_video iframe").removeClass('shrinking_video-frame')
					.addClass('shrinking_video-normal')
					.css({
						'height':height,
						'width':width
					});
				}
			});
		}
		
	});
}