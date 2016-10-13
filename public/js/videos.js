	 $(document).ready(function (e) {
		$('.parallax-videoBack').parallax({
			naturalWidth:1800,
			naturalHeight:300
		});
		setTimeout(function(){ 
			$('.parallax-ponenteBack').parallax({
				naturalWidth:1800,
				naturalHeight:650
			});
		}, 3000);
	});
