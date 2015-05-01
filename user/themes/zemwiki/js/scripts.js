var overlay = document.getElementById( 'menu-overlay' ),
				bodyContainer = document.getElementById( 'page' ),
				showOverlay = document.getElementById( 'showOverlay' ),

				body = document.body;			
	
			showOverlay.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( bodyContainer, 'fixbody' );
				classie.toggle( overlay, 'open-overlay' );
				disableOther( 'showOverlay' );
			};
	

			function disableOther( button ) {	
				if( button !== 'showOverlay' ) {
					classie.toggle( showOverlay, 'disabled' );
				}
				
			}
			
			
			
			var searchoverlay = document.getElementById( 'search-overlay' ),
				bodyContainer = document.getElementById( 'page' ),
				showSearchOverlay = document.getElementById( 'showSearchOverlay' );
			
	
			showSearchOverlay.onclick = function() {
				classie.toggle( this, 'active' );
				classie.toggle( bodyContainer, 'fixbody' );
				classie.toggle( searchoverlay, 'open-searchoverlay' );
				
				disableOther( 'showSearchOverlay' );
			};
	

			function disableOther( button ) {	
				if( button !== 'showSearchOverlay' ) {
					classie.toggle( showOverlay, 'disabled' );
				}
				
			}
			
			
			
			$('#showSearchOverlay').on('click', function(){
				$('#searchfield').focus();
			});
			$('#closeSearchOverlay').on('click', function(){
    		$('#search-overlay').removeClass('open-searchoverlay');
    		$('#page').removeClass('fixbody');
			});
			
			
						
			function onSearch(form) {
    			form.action += form.querySelector('#searchfield').value;
			}