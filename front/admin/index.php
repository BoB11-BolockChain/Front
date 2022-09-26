<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset = "utf-8">
        <title>Create Basic Challenges</title>
</head>
<body>
<?php
$H_GenSel = $_POST["Index_Select"];
$H_OSSel = $_POST["OS_Select"];
$H_ServerType = $_POST["Server_Type"];
$H_Attack1 = $_POST["Attack1_Select"];
$H_Attack2 = $_POST["Attack2_Select"];
$H_Attack3 = $_POST["Attack3_Select"];
$H_final = "";
?>
<div class="col-12 pt-4">
	<div class="card bg-primary border-light shadow-soft">
	<form class="col-12 pt-4" method= "POST" action = "<?php echo $_SERVER['PHP_SELF'];?>"><?php
	if ($H_GenSel == "Create_Challenges"){		//문제 생성
		require_once 'index_select.php';
		require_once 'OS_Select.php';
		if ($H_OSSel == "Linux"){				//리눅스 선택
			require_once "Linux/Linux_Server_Type.php";
			if ($H_ServerType == "Web_Server"){			//Apache웹서버 선택
				require_once "Linux/Linux_Web.php";	
				if ($H_Attack1 == "File_Upload"){		//Fileupload 공격 선택
					require_once "Linux/Apache_Web/File_Upload.php";
					if ($H_Attack2 == "Web_Shell"){		//Web shell 업로드 공격 선택
						require_once "Linux/Apache_Web/Web_Shell/Web_Shell.php";	//최종 공격 방식 선택
						if($H_Attack3 == "read_passwd"){
							$H_final = "Web_Shell_read_/etc/passwd";
						}
						else if($H_Attack3 == "Attack2"){

						}
						else if($H_Attack3 == "Attack3"){
							
						}
						else if($H_Attack3 == "Attack4"){
							
						}
					}
				}
				else if($H_Attack1 == "File_Download"){
					require_once "Linux/Apache_Web/File_Download.php";
				}
				else if($H_Attack1 == "XSS"){
					require_once "Linux/Apache_Web/XSS.php";
				}
				else if($H_Attack1 == "SQL_injection"){
					require_once "Linux/Apache_Web/SQLi.php";
				}
				else if($H_Attack1 == "OS_Command_Injection"){
					require_once "Linux/Apache_Web/OScommandinjection.php";
				}
				else if($H_Attack1 == "PHP_Injection"){
					require_once "Linux/Apache_Web/PHPinjection.php";
				}
			}
			else if ($H_ServerType == "DB_Server"){
				
			}
			else if ($H_ServerType == "Normal_Server"){
				
			}
			else if ($H_ServerType == "File_Server"){
				
			}
		}
		else if ($H_OSSel == "Windows"){		//윈도우 선택
			require_once "Windows/Windows_Server_Type.php";
			if ($H_ServerType == "Web_Server"){			//IIS웹서버 선택
				require_once "Windows/Windows_Web.php";	
			}
			else if ($H_ServerType == "DB_Server"){
				require_once "Windows/Windows_Web.php";
			}
			else if ($H_ServerType == "Normal_Server"){
				require_once "Windows/Windows_Web.php";
			}
			else if ($H_ServerType == "File_Server"){
				require_once "Windows/Windows_Web.php";
			}
		}
	}
	else if ($H_GenSel == "Show_Agents"){		//선택된 에이전트 목룍
		require_once 'index_select.php';
		print_r("this page is show agents page ^^");
	}
	else {
		require_once './index_select.php';		//기본 페이지
	}
	?>
	</div>
	<div class="pt-4">
		<?php if (($H_final == "")) {?>
		<input class="btn btn-primary text-dark mr-2 mb-2" type = "submit" value = "Select" />
		<?php } 
			else if ($H_final != "") {?>
		<form action="" method="POST">
			<input class="btn btn-primary text-dark mr-2 mb-2" type = "submit" value = "Create Challenges" />
		</form>
		<?php } 
		?>
	</form>
	</div>
	

	<button class="btn btn-primary text-dark mr-2 mb-2" type="button" onClick="location.href='http://pdxf.malhyuk.info:4242/front/admin/'">Reset</button>
	<div class="pt-2">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb breadcrumb-gray">
			<li class="breadcrumb-item"><?php if ($H_GenSel == "Create_Challenges"){echo $H_OSSel; ?></li>
			<li class="breadcrumb-item"><?php echo $H_ServerType; ?></li>
			<li class="breadcrumb-item"><?php echo $H_Attack1; ?></li>
			<li class="breadcrumb-item"><?php echo $H_Attack2; ?></li>
			<li class="breadcrumb-item"><?php echo $H_Attack3; ?></li>
		</ol><?php } ?>
	</nav>
	</div>
</div>

</body>
</html>


