<?php 
include'../admin/config/connect.php';
include'../function/seo-function.php';
ob_start();
session_start();

$userquery=$db->prepare("select * from users where user_mail=:usermail");
$userquery->execute(array('usermail' => $_SESSION['otheruser_mail']));
$showuser=$userquery->fetch(PDO::FETCH_ASSOC);

if (isset($_GET['p'])) {
	
$post_text=htmlspecialchars(strip_tags(trim($_POST['texts'])));

//INSERT post
	if ($_GET['p']==1) {
		if (empty($post_text)) {
			header("Location:../");
		}
		else{

			if ($_FILES['post_image']['size']>0) {

				if ($_FILES['post_image']['size']>10048576) {

					echo " <meta http-equiv='refresh' content='0;URL=../?reg=largesize'> "; 
					exit;
				}
				$authorizedtype=array('jpg','jpeg','png','gif','bmp');

				$findtype=strtolower(substr( $_FILES['post_image']["name"], strpos( $_FILES['post_image']["name"],'.')+1));
				if (in_array($findtype, $authorizedtype)===false) {
					echo " <meta http-equiv='refresh' content='0;URL=../?reg=invalidtype'> "; 
					exit;
				}
				$uploads_dir="../images/posts";

				@$tmp_name= $_FILES['post_image']["tmp_name"];
				@$name= $_FILES['post_image']["name"];

				$benzersizsay1=rand(20000,32000);
				$benzersizsay2=rand(20000,32000);
				$benzersizsay3=rand(20000,32000);	
				$benzersizsay4=rand(20000,32000);

				$benzersizad=$benzersizsay1.$benzersizsay2.$benzersizsay3.$benzersizsay4;

				$post_image=substr($uploads_dir, 3)."/".$benzersizad.$name;	
				@move_uploaded_file($tmp_name, "$uploads_dir/$benzersizad$name");

				$insert=$db->prepare("INSERT INTO posts SET
					post_author=:author,
					post_text=:post_text,
					post_image=:image,
					post_type=:type");

				$save=$insert-> execute(array(
					'author'=>$showuser['user_id'],
					'post_text'=> $post_text,
					'image'=> $post_image,
					'type'=>1));

				if (!$save) {

					echo " <meta http-equiv='refresh' content='0;URL=../?res=no'> "; 
				}
				else {
					$insertinlog=$db->prepare("INSERT INTO logs SET
						log_no=:no,
						process_name=:process_name,
						process_author=:author");
					$insertinlog->execute(array(
						'no'=> 1,
						'process_name'=>"Posted a photo",
						'author'=>$_SESSION['otheruser_mail']
					));
					echo " <meta http-equiv='refresh' content='0;URL=../?res=ok'> "; 
				}
			}
			else{

				$yturl=htmlspecialchars(strip_tags(trim($_POST['yturl'])));

				$insert=$db->prepare("INSERT INTO posts SET
					post_author=:author,
					post_text=:post_text,
					post_video=:video,
					post_type=:type");

				if (!empty($yturl)) {
					$save=$insert-> execute(array(
						'author'=>$showuser['user_id'],
						'post_text'=> $post_text,
						'video'=> $yturl,
						'type'=> 2));}
					else{
						$save=$insert-> execute(array(
							'author'=>$showuser['user_id'],
							'post_text'=> $post_text,
							'video'=> $yturl,
							'type'=> 0));}
					}

					if (!$save) {

						echo " <meta http-equiv='refresh' content='0;URL=../?res=no'> "; 
					}
					else {
						$insertinlog=$db->prepare("INSERT INTO logs SET
							log_no=:no,
							process_name=:process_name,
							process_author=:author");
						if(!empty($yturl)){
							$insertinlog->execute(array(
								'no'=> 1,
								'process_name'=>"Posted a video",
								'author'=>$_SESSION['otheruser_mail']
							));
						}
						else{
							$insertinlog->execute(array(
								'no'=> 1,
								'process_name'=>"Posted a article",
								'author'=>$_SESSION['otheruser_mail']
							));
						}
						echo " <meta http-equiv='refresh' content='0;URL=../?res=ok'> "; 
					}
				}
			}

/*UPDATE post
			if ($_GET['p']==2) {
				if (isset($_POST['editpost'])) {

					$seourl=seo($_POST['name']);
					$post_id=$_POST['id'];

					$update=$db->prepare("UPDATE posts SET 
						post_name=:name,
						post_detail=:detail,
						post_url=:url,
						post_seourl=:seourl,
						post_status=:status,
						post_row=:row
						where post_id=:id");

					$save=$update-> execute(array(
						'name'=> $_POST['name'] ,
						'detail'=> $_POST['detail'] ,
						'url' => $_POST['url'],
						'seourl' => $seourl,
						'status' => $_POST['status'],
						'row' => $_POST['row'],
						'id' => $_POST['id']));

					if (!$save) {

						header("location:../edit-post.php?id=$post_id&res=no");
					}
					else {
						$insertinlog=$db->prepare("INSERT INTO logs SET
							log_no=:no,
							process_name=:process_name,
							process_summary=:process_summary,
							process_author=:author");
						$insertinlog->execute(array(
							'no'=> 2,
							'process_name'=>"Menyu redaktəsi",
							'process_summary'=> $_POST['name'],
							'author'=>$_SESSION['user_mail']

						));
						header("location:../edit-post.php?id=$post_id&res=ok");
					}
				}
			}*/
		}
		?>