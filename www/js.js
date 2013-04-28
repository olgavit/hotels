(function($) {
				$(function() {

					var oFCKeditor = new FCKeditor( 'MyTextarea' ) ;
					oFCKeditor.BasePath = "/fckeditor/" ;
					oFCKeditor.ReplaceTextarea() ;
					var oFCKeditor = new FCKeditor( 'MyTextarea2' ) ;
					oFCKeditor.BasePath = "/fckeditor/" ;
					oFCKeditor.ReplaceTextarea() ;

					var oFCKeditor = new FCKeditor( 'MyTextarea4' ) ;
					oFCKeditor.BasePath = "/fckeditor/" ;
					oFCKeditor.ReplaceTextarea() ;
					var oFCKeditor = new FCKeditor( 'MyTextarea3' ) ;
					oFCKeditor.BasePath = "/fckeditor/" ;
					oFCKeditor.ReplaceTextarea() ;

				  $('ul.tabs').delegate('li:not(.current)', 'click', function() {
				    $(this).addClass('current').siblings().removeClass('current')
				      .parents('div.section').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();
				  });

				  var height = $(window).height() < 900 ? 900 : $(window).height();
				  $('.main-content, .tabs, .box').height(height - 80);
				  $('.tabs').height(height - 110);

				});

				$(window).resize(function() {
					var height = $(window).height() < 900 ? 900 : $(window).height();
				    $('.main-content, .tabs, .box').height(height - 80);
				    $('.tabs').height(height - 110);

				});
			})(jQuery)