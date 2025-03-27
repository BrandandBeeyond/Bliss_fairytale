<?
function addCourse(){
	global $connF;
	if(isset($_POST['addnewlesson'])){
		$lessonName = $_POST['lessonName'];
        $instrumentId = $_POST['instrumentId'];
		$instrumentstyleId = $_POST['instrumentstyleId'];
        $levelId = $_POST['levelId'];
        $lessonDesc = $_POST['lessonDesc'];
		$lessonImage = $_FILES['lessonImage']['name'];
		$tempImg1 = $_FILES['lessonImage']['tmp_name'];
		move_uploaded_file($tempImg1,"resources/img/instrument_img/$lessonImage");
		$target_dir = "test_upload/";

		$target_file = $target_dir . basename($_FILES["coursevideo"]["name"]);
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

		if($imageFileType != "mp4" && $imageFileType != "avi" && $imageFileType != "mov" && $imageFileType != "3gp" && $imageFileType != "mpeg")
		{
			echo "File Format Not Suppoted";
		} 

		else
		{

		$courseVideo=$_FILES['coursevideo']['name'];

		$addCourseSql = "INSERT INTO course(lessonName,instrumentId,instrumentstyleId,levelId,lessonDesc,coursevideo,lessonImage) VALUES ('$lessonName','$instrumentId','$instrumentstyleId','$levelId','$lessonDesc','$courseVideo','$lessonImage')";
		$addCourse = mysqli_query($connF,$addCourseSql);
		move_uploaded_file($_FILES["coursevideo"]["tmp_name"],$target_file);
		if($addCourse){
			echo "<script>alert('Instrument Added')</script>";
			echo "<script>window.open('index.php?addcourses','_self')</script>";
		}
		
	}
}