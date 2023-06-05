        <?php
        if(!isset($_SESSION)){
            session_start();
        }
        $databaseURL = "https://project-4e8fa-default-rtdb.firebaseio.com/";
        include("firebaseRDB.php");
        $db = new firebaseRDB($databaseURL);
        $conn = mysqli_connect("localhost", "root", "", "Project");
        if (!$conn) {
          echo "Connection failed!";
        }
        if(empty($_POST['firstdate'])){
          header("Location: Book Trip.php?error=Check-in Date is required");
          exit();
        }
        else if (empty($_POST['Adults'])) {
         header("Location: Book Trip.php?error=Adults Number is required");
         exit();
        }else if(null==($_POST['Children'])){
          header("Location: Book Trip.php?error=Children Number is required");
            exit();
        }
        else if (isset($_POST['Adults']) && isset($_POST['Children'])&& isset($_POST['firstdate'])) {
        
          function validate($data){
             $data = trim($data);
             $data = stripslashes($data);
             $data = htmlspecialchars($data);
             return $data;
          }
          $Adults = validate($_POST['Adults']);
          $Children = validate($_POST['Children']);
          $Date = validate($_POST['firstdate']);
          $date = DateTime::createFromFormat('Y-m-d', $Date);
          $date_now = new DateTime();
          $diff=date_diff($date,$date_now);
          $res= $diff->format("%R%a");
          if ($res>0){
            header("Location: Book Trip.php?error=Please Enter Valid Date");
            exit();
          }
          else if ($Adults > 10|| $Children > 10){
            header("Location: Special Group.php");
            exit();
          }
           else if ($Adults <0 || $Children<0) {
            header("Location: Book Trip.php?error=Please Enter Valid Number");
            exit();
           }
         else{
            $image=$_SESSION['image'];

            //Goz2 el Firebase----------------------
            $retrieve = $db->retrieve("/Trips","Image","EQUAL",$image);
            $data = json_decode($retrieve, 1);
            $values=array_values($data)[0];
            if (count($data)==1){
              $_SESSION['first']=1;
              $_SESSION['TripID']=array_values($values)[3];
              $_SESSION['Price'] = array_values($values)[2]*$Adults+array_values($values)[2]*0.5*$Children;
              $_SESSION['Adults'] =$Adults;
              $_SESSION['Children']=$Children;
              $_SESSION['date']=$Date;
              header("Location: Book Trip.php");
              exit();
            }else{
              header("Location: Book Trip.php?error=Unknown Error Occured");
               exit();
            }
            }
/*
            //Goz2 MySQL----------------------------
            $sql = "SELECT * FROM Trips WHERE `Image`= '$image'";
            $result = mysqli_query($conn, $sql);
            if (mysqli_num_rows($result) == 1) {
              $row = mysqli_fetch_assoc($result);
              $_SESSION['first']=1;
              $_SESSION['TripID']=$row['Trip_ID'];
              $_SESSION['Price'] = $row['Price']*$Adults+$row['Price']*0.5*$Children;
              $_SESSION['Adults'] =$Adults;
              $_SESSION['Children']=$Children;
              $_SESSION['date']=$Date;
              header("Location: Book Trip.php");
              exit();
            }else{
              header("Location: Book Trip.php?error=Unknown Error Occured");
               exit();
            }
          }
*/
        }
        ?>