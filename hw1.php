<?php 
//資料暫時記錄到session 在丟去下一個頁面
session_start();
//一開始變數空 如果後面沒改就這樣 有的話就改值
$tellUser = "";
$userName = "";
$password = "";
$birthday = "";
$emailVal = "";
$pet ="";
$errorCount = 0;

if($_POST["OK"]){
    $userName = $_POST["userName"];
    $password = $_POST["password"];
    $birthday = $_POST["birthday"];
    $emailVal = $_POST["emailVal"];
    $pet = $_POST["pet"];
    
    if($userName == ""){
        $errorCount += 1;
        $tellUser .= "請輸入姓名 <br>";
    }
    
    if($password == ""){
        $errorCount += 1;
        $tellUser .= "請輸入密碼 <br>";
    }
    
    if($birthday == ""){
    	$errorCount += 1;
    	$tellUser .= "請輸入生日 <br>";
    }
    
    if( $emailVal== ""){
    	$errorCount += 1;
    	$tellUser .= "請輸入信箱 <br>";
    }
    
    if($errorCount == 0){
        //
        $_SESSION["userName"] = $userName;
        $_SESSION["password"] = $password;
        $_SESSION["birthday"] = $birthday;
        $_SESSION["emailVal"] = $emailVal;
        $_SESSION["pet"] = $pet;
        header("location: home.php");
        exit();
        
    }
    
    
}

?>

<html>
<head>
    <meta charset="UTF-8">
    <title>歡迎光臨 寵物會員中心</title>
    <link rel="stylesheet" href="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.css" />
    <script src="jquery-1.9.1.min.js"></script>
    <script src="jquery.mobile-1.3.2/jquery.mobile-1.3.2.min.js"></script>
    <style type="text/css">

    </style>
</head>
<body>
    <div data-role="page" data-theme="a">
        <!--<div data-role="content" data-theme="a">-->
        	<caption>歡迎加入會員</caption>
            <form id="myForm" method="post" action="">
			    <div data-role="fieldcontain">
				    <label for="userName">姓名:</label> 
				    <input type="text"name="userName" id="userName" 
				    value="<?php echo $userName ?>" placeholder="請輸入姓名" />
			    </div>
                
                <div data-role="fieldcontain">
				    <label for="password">密碼:</label>
				    <input type="password" name="password" id="password" 
				    value="" placeholder="請輸入密碼"/>
			    </div>
			    
			    <div data-role="fieldcontain">
				    <label for="birthday">生日:</label>
				    <input type="date" name="birthday" id="birthday" 
				    value="<?php echo $birthday ?>" />
			    </div>
			    
			      <div data-role="fieldcontain">
				    <label for="emailVal">信箱:</label>
				    <input type="text" name="emailVal" id="emailVal" 
				     value="<?php echo $emailVal ?>"
				     placeholder="請輸入信箱"/>
			    </div>
			    
			    <fieldset data-role="controlgroup">
					<legend>請選擇喜愛動物:</legend>
			     	<input type="radio" name="pet" id="pet0" value="0"  />
			     	<label for="pet0">貓咪</label>
			
			     	<input type="radio" name="pet" id="pet1" value="1"  />
			     	<label for="pet1">狗狗</label>
			
			     	<input type="radio" name="pet" id="pet2" value="2"  />
			     	<label for="pet2">兔子</label>
			
			     	<input type="radio" name="pet" id="pet3" value="3"  />
			     	<label for="pet3">老鼠</label>
				</fieldset>
				
				 <div class="ui-grid-a">
				    <div class="ui-block-a"><input type="submit" name="OK" value="OK" /></div>
				    <div class="ui-block-b"><input type="submit" name="Cancel" value="Cancel" /></div>
			    </div>
				
			    <div><?php echo $tellUser ?></div>
			    <div>
			    
			    </div>
             </form>
        <!--</div>-->

    </div>
    
    <script>
	</script>
</body>
</html>










