<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Admin
                <small>page</small>
            </h1>
            <?php
//            $result_set=User::find_all_users();
//            while($row=mysqli_fetch_array($result_set)){
//                echo $row['first_name'] . ' ' . $row['last_name'] ."<br>";
////            }
//
//            $user=User::instatiation($find_user);
//                        echo  $find_user['last_name'];

            $user=User::find_user_by_id(8);

//////            $R=$database->escape_string($users->lastName);
////            var_dump($users);
//             $user=new User();
            $user->lastName="max1234";
            $user->firstName="small4";
            $user->username="Admin166676";
            $user->password="1236544";
            $user->save();
//            echo $user->lastName;
////            foreach ($users as $user){
////                echo $user->id . "<br>";
////            }
//////
////            $the_pictures=new Picture();
//            $user->delete();
            ?>
            <ol class="breadcrumb">
                <li>
                    <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
                </li>
                <li class="active">
                    <i class="fa fa-file"></i> Blank Page
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->

</div>