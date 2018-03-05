/*
 * vcpm admin js
 *========================================
 */

jQuery(document).ready(function($){

		//variable decleration for media
		var portfolio_img = $('input#portfolio_img');
		var port_img_remove = $('div.port_img_preview');
		var port_img_preview = $('img#port_img_preview');
		var portfolio_link = $('input#portfolio_link');
		var portfolio_url = portfolio_link.val();
	
	//select image
	$('button#img-portfolio_img').live('click',function(e){
		e.preventDefault();
		port_img_remove.removeClass('none');

		var img_handler = wp.media({
			'title' : 'Upload full size portfolio image',
		});

		img_handler.open();
		img_handler.on('select',function(){
			var img = img_handler.state().get('selection').first().toJSON();
			var img_link=img.url;
			portfolio_img.val(img_link);
			port_img_preview.attr('src',img_link).show();
			portfolio_link.attr('disabled','yes').val('');
		});
		
	});

	//img remove btn
	port_img_remove.on('click',function(){
			portfolio_img.val('');
			port_img_preview.attr('src','').hide();
			portfolio_link.removeAttr('disabled').val(portfolio_url);
	});

	//if hav image then hide url
	if (port_img_preview.attr('src')!='') {
		portfolio_link.attr('disabled','yes').val('');
	}

	//Color Picker

	$('.color_field').each(function(){
        $(this).wpColorPicker();
    });

    //Range Slider
    var rangeSlider = function(){
	  var slider = $('.range-slider'),
	      range = $('.range-slider__range'),
	      value = $('.range-slider__value');
	    
	  slider.each(function(){

	    value.each(function(){
	      var value = $(this).prev().attr('value');
	      $(this).html(value);
	    });

	    range.on('input', function(){
	      $(this).next(value).html(this.value);
	    });
	  });
	};

	rangeSlider();
		

    //multiple checkbox
    var multiple_checkbox = function(){
    	var wrapper = $('.multiple__checkbox'),
    	checkbox = $('.single__checkbox'),
    	current_val='';

    	$(checkbox).click(function() {
    		value = $(this).parent().children('.multiple__checkbox__value');

    		current_val = $(this).parent().children('.single__checkbox:checked').map(function() {
    			return this.value;
    		}).get().join(',');

    		value.val(current_val);
    	});
	}

    multiple_checkbox();
    
});