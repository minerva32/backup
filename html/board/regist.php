
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
alert('��й�ȣ�� Ʋ�Ƚ��ϴ�. �ٽ� �Է��� �ּ���');
return false;
}

if(id.value == ""){
alert('���̵� �Է����ֽʽÿ�.');
return false;
}

if(pw.value == ""){
alert('��й�ȣ�� �Է����ֽʽÿ�.');
return false;
}

if(pwcheck.value == ""){
alert('��й�ȣ�� Ȯ�����ֽʽÿ�.');
return false;
}

if(p1.value  == "" && p2.value  == "" && p3.value  == ""){
alert('��ȭ��ȣ�� �Է����ֽʽÿ�.');
return false;
}

if(add1.value  == "" && add2.value  == ""){
alert('�ּҸ� �Է����ֽʽÿ�.');
return false;
}

if(mail.value  == ""){
alert('�̸����� �Է����ֽʽÿ�.');
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
<option value="2000">2000��</option>
<option value="1999">1999��</option>
<option value="1998">1998��</option>
<option value="1997">1997��</option>
<option value="1996">1996��</option>
</select>
<select name="month">
<option value="">null</option>
<option value="1">1��</option>
<option value="2">2��</option>
<option value="3">3��</option>
<option value="4">4��</option>
<option value="5">5��</option>
<option value="6">6��</option>
<option value="7">7��</option>
<option value="8">8��</option>
<option value="9">9��</option>
<option value="10">10��</option>
<option value="11">11��</option>
<option value="12">12��</option>
</select>
<select name="day">
<option value="">null</option>
<option value="1">1��</option>
<option value="2">2��</option>
<option value="3">3��</option>
<option value="4">4��</option>
<option value="5">5��</option>
<option value="6">6��</option>
<option value="7">7��</option>
<option value="8">8��</option>
<option value="9">9��</option>
<option value="10">10��</option>
<option value="11">11��</option>
<option value="12">12��</option>
<option value="13">13��</option>
<option value="14">14��</option>
<option value="15">15��</option>
<option value="16">16��</option>
<option value="17">17��</option>
<option value="18">18��</option>
<option value="19">19��</option>
<option value="20">20��</option>
<option value="21">21��</option>
<option value="22">22��</option>
<option value="23">23��</option>
<option value="24">24��</option>
<option value="25">25��</option>
<option value="26">26��</option>
<option value="27">27��</option>
<option value="28">28��</option>
<option value="29">29��</option>
<option value="30">30��</option>
<option value="31">31��</option>
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