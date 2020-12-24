<!DOCTYPE html>
<html lang="en">
 <head>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script>
      var firstnum='';
      var secondnum='';
      var op='+';
      var result=0;
      function input(operand) {
       secondnum+=operand;
   		 document.getElementById("result").value=secondnum;
       console.log(secondnum);
      }
      function operator(operator){
        firstnum=result;
        $.ajax({
        type:"POST",
        url:"post.php",
        data:{op:op,first: firstnum, second : secondnum},
        success:function(data){
        result=data;
        document.getElementById("result").value=result;
        }
        });
        firstnum=result;
        op=operator;
        secondnum="";
      }

    function clr() {
      result=0;
      firstnum='0';
      secondnum='';
      op='+';
      console.log(firstnum);
      console.log(secondnum);
      console.log(result);
   		document.getElementById("result").value = result;

    }
   	function delone(){
      debugger;
      secondnum=secondnum.slice(0, -1);
      document.getElementById("result").value=secondnum;
   	}
   </script> 
   <style>
   	input[type="button"]
   	{
   		background-color: lightblue;
   		color: black;
   		width: 100%;
   		border:3px solid black;
   		font-size: 25px;
   	}
   	input[type="text"]
   	{
   		color: black;
   		border:3px solid black;
   		width: 198px;
   		height: 60px;
   	}
   </style>
  </head>
  <body style="background-image: linear-gradient(#34b5ef, #f1f1f1);background-repeat: no-repeat;height: 86vh;">
  	<div class="container" style="background-color: gray;width: 215px;margin-left: 550px;
    margin-top: 190px;font-size: 10px;border:2px solid black;">
    <div style="font-size: 30px; text-align: center;"><b>Calculator</div>
  		<table>
	  		<tr>
	  			<td colspan="4"><input type="text" name="" id="result" style="font-size: 25px;"></td>
	  		</tr>
	  		<tr>
	  			<td><input type="button" value="C"  onclick="delone()"></td>
	  			<td><input type="button" value="^"  onclick="operator('^')"></td>
	  			<td><input type="button" value="%"  onclick="operator('%')"></td>
	  			<td><input type="button" value="/"  onclick="operator('/')"></td>
	  		</tr>
	  		<tr>
	  			<td><input type="button" value="7"  onclick="input('7')"></td>
	  			<td><input type="button" value="8"  onclick="input('8')"></td>
	  			<td><input type="button" value="9"  onclick="input('9')"></td>
	  			<td><input type="button" value="*"  onclick="operator('*')"></td>
	  		</tr>
	  		<tr>
	  			<td><input type="button" value="4"  onclick="input('4')"></td>
	  			<td><input type="button" value="5"  onclick="input('5')"></td>
	  			<td><input type="button" value="6"  onclick="input('6')"></td>
	  			<td><input type="button" value="-"  onclick="operator('-')"></td>
	  		<tr>
	  			<td ><input type="button" value="1"  onclick="input('1')"></td>
				  <td ><input type="button" value="2"  onclick="input('2')"></td>
	  			<td ><input type="button" value="3"  onclick="input('3')"></td>
	  			<td ><input type="button" value="+"  onclick="operator('+')"></td>
	  		</tr>
	  		<tr>
	  			<td><input type="button" value="0"  onclick="input('0')"></td>
	  			<td><input type="button" value="."  onclick="input('.')"></td>
	  			<td><input type="button" value="="  onclick="operator('=')"></td>
	  			<td><input type="button" value="AC" onclick="clr()"></td>
	  		</tr>
  		</table>
  	</div>
  </body>
</html> 