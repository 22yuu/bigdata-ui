var id_overlap = true;
const nbspReg = /\s/g;
const nameReg = /[ㄱ-ㅎ|ㅏ-ㅣ|가-힣]/;; 
//아이디 정규식
const idReg = /^[a-z0-9]{5,16}$/;
// 비밀번호 정규식
const pwdReg = /^(?=.*[a-zA-z])(?=.*[0-9])(?=.*[$`~!@$!%*#^?&\\(\\)\-_=+]).{8,16}$/; 
// 이메일 검사 정규식
const mailReg = /^[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*@[0-9a-zA-Z]([-_.]?[0-9a-zA-Z])*.[a-zA-Z]{2,3}$/i;
	
$(function(){
		$("#memberId").blur(function() {
			var id = $("#memberId").val();
			if(id == '') {
				$("#idCheck").text('아이디를 입력해주세요!!!');
				$("#idCheck").css('color', 'red');
				$("#memberId").css('border','1px solid red');
			} else if(!idReg.test($(this).val())) {
				$("#idCheck").text('영문과 숫자만 5~16자 이하로 입력해주세요');
				$("#idCheck").css('color', 'red');
				$("#memberId").css('border','1px solid red');
			} else {
				$.ajax({
					type : 'POST',
					url : '/project/views/member/idCheck.php',
					contentType: 'application/json',
					dataType: "json",
					data : JSON.stringify({
						memberId : id
					}),
					success : function(data) {
						alert(data);
						// if(data == false) {
						// 	$("#id_check").text('사용가능한 아이디 입니다.');
						// 	$("#id_check").css('color','black');
						// 	id_overlap = true;
						// }else {
						// 	$("#id_check").text('이미 존재하는 아이디입니다.');
						// 	$("#id_check").css('color','red');
						// 	id_overlap = false;
						// }
					},
					error : function() {
					$("#id_check").text('오류');		
					}
				});
				$("#idCheck").text('');
				$("#memberId").css('border','1px solid #e8e8e8');
			}
		});
		
		$("#pw").blur(function() {
			var pwd =  $("#pw").val();
			if(pwd == '') {
				$("#pwCheck").text('비밀번호를 입력해주세요!!!');
				$("#pwCheck").css('color','red');
				$("#pw").css('border','1px solid red');
			} else if (!pwdReg.test($(this).val())){
				$("#pwCheck").text('영문,숫자,특수문자($`~!@$!%*#^?)를 조합해서 8~16자 이하로 입력해주세요');
				$("#pwCheck").css('color','red');
				$("#pw").css('border','1px solid red');
			} else {
				$("#pwCheck").text('');
				$("#pw").css('border','1px solid #e8e8e8');
			}
		});
		
		$("#pwConfirm").blur(function (){
			var pwd = $("#pw").val();
			var pwd2 = $("#pwConfirm").val();

			if(pwd2 == '') {
				$("#pwConfirm_Check").text('비밀번호를 입력해주세요!!!');
				$("#pwConfirm_Check").css('color', 'red');
				$("#pwConfirm").css('border','1px solid red');
			}
			if(pwd != pwd2) {
				if(pwd2 != '') {
					$("#pwConfirm_Check").text('비밀번호가 일치하지 않습니다!!!');
					$("#pwConfirm_Check").css('color', 'red');
					$("#pwConfirm").css('border','1px solid red');
				} 
			} else if (pwd == pwd2) {
				$("#pwConfirm_Check").text('');
				$("#pwConfirm_Check").css('color', '#222');
				$("#pwConfirm").css('border','1px solid #e8e8e8');
			}
		});
		
		$("#username").blur(function () {
			var name = $("#username").val();
			
			if(name == '') {
				$("#nameCheck").text('이름을 입력해주세요!!!');
				$("#nameCheck").css('color', 'red');
				$("#username").css('border','1px solid red');
			} else if(nameReg.test($(this).val())) {
				$("#nameCheck").text('');
				$("#username").css('border','1px solid #e8e8e8');
			} else {
				$("#nameCheck").text('이름을 다시 한번 확인해주세요!!!');
				$("#nameCheck").css('color', 'red');
				$("#username").css('border','1px solid red');
			}	
		});
		
});

function idCheck() {
	var id = $("memberId").val();
	$.ajax({
			type : 'POST',
			url : '/project/views/member/idCheck.php',
			contentType: 'application/json',
			dataType: "json",
			data : JSON.stringify({
				memberId : id
			}),
			success : function(data) {
				alert(data);
				// if(data == false) {
				// 	$("#id_check").text('사용가능한 아이디 입니다.');
				// 	$("#id_check").css('color','black');
				// 	id_overlap = true;
				//}else {
				// 	$("#id_check").text('이미 존재하는 아이디입니다.');
				// 	$("#id_check").css('color','red');
				// 	id_overlap = false;
				//}
			},
			error : function() {
			$("#idCheck").text('오류');		
			}
	});
	location.href="/project/views/member/idCheck.php";
}
