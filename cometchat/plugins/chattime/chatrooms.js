<?php
		if (file_exists(dirname(__FILE__).DIRECTORY_SEPARATOR."lang/".$lang.".php")) {
			include dirname(__FILE__).DIRECTORY_SEPARATOR."lang/".$lang.".php";
		} else {
			include dirname(__FILE__).DIRECTORY_SEPARATOR."lang/en.php";
		}

		foreach ($chattime_language as $i => $l) {
			$chattime_language[$i] = str_replace("'", "\'", $l);
		}
 
?>

(function($){   
  
	$.ccchattime = (function () {

		var title = '<?php echo $chattime_language[0];?>';

        return {

			getTitle: function() {
				return title;	
			},

			init: function (id) {

				if ($("#currentroom .cometchat_ts").css('display') == 'none') {
					$("#currentroom .cometchat_ts").css('display','inline');
					$("#currentroom_convo").scrollTop(50000);
				} else {
					$("#currentroom .cometchat_ts_date").css('display','none');
					$("#currentroom .cometchat_ts").css('display','none');					
				}
			}

        };
    })();
 
})(jqcc);