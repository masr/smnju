<script type="text/javascript">
    $(function(){
        $('#skip_apply_award_commit').click(function(){
            history.go(-1);
        });
        
        $('#apply_award_commit').click(function(){
            
			var options={
				success:function(r){
					show_message_box('申请成功');
					delay_redirect('/user/show/');
				}
			};
			
			process_form(options);
        })
    })
</script>
<form id="main_form" action="{$siteurl}/award/apply" method="post">
    <h3>奖学金申请须知</h3>
    <p>
        为资助世界各国学生、学者到中国高等学校进行学习和研究，增进中国人民与世界各国人民的相互理解和友谊，发展中国与世界各国在教育、科技、文化、经贸等领域的交流与合作，中国政府设立了中国政府奖学金。教育部负责根据中国政府与外国政府或国际组织达成的协议或计划对外提供中国政府奖学金，并委托国家留学基金管理委员会(Chinese Scholarships Council，简称CSC)具体负责享受中国政府奖学金来华留学的外国学生（以下简称奖学金生）的招生及日常事务的管理工作。
    </p>
    <a href="#" id="apply_award_commit">申请</a>
    <a id="skip_apply_award_commit" href="#">不申请</a>
</form>