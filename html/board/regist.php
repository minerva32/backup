
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" Content="text/html; charset=UTF-8">

<script src="http://code.jquery.com/jquery-latest.js"></script>
<script>

window.addEventListener('load', function(){

var comp = document.querySelector('#comp');

comp.addEventListener('click', function(){

var pw = document.querySelector("#password").value;
var pwcheck = document.querySelector("#passwordcheck").value;
var id = document.querySelector("#ID").value;
var p1 = document.querySelector("#phone1").value;
var p2 = document.querySelector("#phone2").value;
var p3 = document.querySelector("#phone3").value;
var add1 = document.querySelector("#add1").value;
var add2 = document.querySelector("#add2").value;
var mail = document.querySelector("#mail").value;

if(pw.value != pwcheck.value){
alert('비밀번호가 틀렸습니다. 다시 입력해 주세요');
return false;
}

if(id.value == ""){
alert('아이디를 입력해주십시오.');
return false;
}

if(pw.value == ""){
alert('비밀번호를 입력해주십시오.');
return false;
}

if(pwcheck.value == ""){
alert('비밀번호를 확인해주십시오.');
return false;
}

if(p1.value  == "" && p2.value  == "" && p3.value  == ""){
alert('전화번호를 입력해주십시오.');
return false;
}

if(add1.value  == "" && add2.value  == ""){
alert('주소를 입력해주십시오.');
return false;
}

if(mail.value  == ""){
alert('이메일을 입력해주십시오.');
return false;
}

})

})
</script>

<style>
body{
background-color:lightblue;
}

.reg{
margin:auto;
margin-top:150px;
width:400px;
height:400px;
background-color:white;
border-radius:40px;
}

.regoption{
width:400px;
height:50px;
}

.last{
margin:auto;
margin-top:10px;
width:400px;
heigth:50px;
background-color:white;
}

table{
align:center;
width:400px;
height:50px;
border:1px;
}

th{
width:100px;
heigth:50px;
align:center;
}


</style>
</head>
<body>

<div class="reg">
<form name="regist" method="post"  action="\regist/register.php">
<div class="regoption">
<table>
<tr>
<th>ID</th>
<td width="200px"; heigth="50px"; align="left">
<input type="text" name="ID">
<input type="button" value="Check">
<input type="hidden" name="idDuplication">
</td>
</tr>
</table>
</div>

<div class="regoption">
<table>
<tr>
<th>PW</th>
<td width="200px"; heigth="50px"; align="left">
<input type="password" name="password">
</td>
</tr>
</table>
</div>

<div class="regoption">
<table>
<tr>
<th>repeat PW</th>
<td width="200px"; heigth="50px"; align="left">
<input type="password" name="passwordcheck">
</td>
</tr>
</table>
</div>

<div class="regoption">
<table>
<tr>
<th><input type="radio" name="gender" value="male">male</th>
<th><input type="radio" name="gender" value="female">female</th>
<th><input type="radio" name="gender" value="mid-male">middle</th>
</tr>
</table>
</div>

<div class="regoption">
<table>
<tr>
<th>Birth</th>
<td width="200px" heigth="50px" align="left">
<select name="year">
<option value="">null</option>
<option value="2000">2000년</option>
<option value="1999">1999년</option>
<option value="1998">1998년</option>
<option value="1997">1997년</option>
<option value="1996">1996년</option>
</select>
<select name="month">
<option value="">null</option>
<option value="1">1월</option>
<option value="2">2월</option>
<option value="3">3월</option>
<option value="4">4월</option>
<option value="5">5월</option>
<option value="6">6월</option>
<option value="7">7월</option>
<option value="8">8월</option>
<option value="9">9월</option>
<option value="10">10월</option>
<option value="11">11월</option>
<option value="12">12월</option>
</select>
<select name="day">
<option value="">null</option>
<option value="1">1일</option>
<option value="2">2일</option>
<option value="3">3일</option>
<option value="4">4일</option>
<option value="5">5일</option>
<option value="6">6일</option>
<option value="7">7일</option>
<option value="8">8일</option>
<option value="9">9일</option>
<option value="10">10일</option>
<option value="11">11일</option>
<option value="12">12일</option>
<option value="13">13일</option>
<option value="14">14일</option>
<option value="15">15일</option>
<option value="16">16일</option>
<option value="17">17일</option>
<option value="18">18일</option>
<option value="19">19일</option>
<option value="20">20일</option>
<option value="21">21일</option>
<option value="22">22일</option>
<option value="23">23일</option>
<option value="24">24일</option>
<option value="25">25일</option>
<option value="26">26일</option>
<option value="27">27일</option>
<option value="28">28일</option>
<option value="29">29일</option>
<option value="30">30일</option>
<option value="31">31일</option>
</select>
</td>
</tr>
</table>
</div>

<div class="regoption">
<table>
<tr>
<th>
phone
</th>
<td width="200px" heigth="50px" align="left">
<input type="text" name="phone1" size=5 maxlength="3"> - 
<input type="text" name="phone2" size=5 maxlength="4"> - 
<input type="text" name="phone3" size=5 maxlength="4">
</td>
</th>
</table>
</div>

<div class="regoption">
<table>
<tr>
<th>addre</th>
<td width="200px" heigth="50px" align="left">
<input type="text" size="20" name="addr1">
<input type="button" value="Search">
<input type="text" size="25" name="addr2">
</td>
</tr>
</table>
</div>

<div class="regoption">
<table>
<tr>
<th>E-mail</th>
<td width="200px" heigth="50px" align="left">
<input type="text" size="15" name="mail">@
<select name="bmail">
<option value="">null</option>
<option value="naver">naver.com</option>
<option value="daum">daum.com</option>
<option value="gmail">gmail.com</option>
</td>
</tr>
</table>
</div>
</div>

<div class="last">
<table>
<tr>
<td width=200px; height=50px;>
<input type="submit" value="Submit">
</td>
<td>
<input type="button" onclick="location.href='#';" value="Cancel">
</td>
</tr>
</table>
</div>
</form>
</body>
</html>