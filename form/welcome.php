<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .CSS{
            border: 3px solid black;
            box-shadow: 3px 4px 5px black;
            background-color: lightblue;
            padding-top: 20px;
            font-size: 25px;
            font-family: bold;
            text-shadow: 2px 1px 2px black;
        }
    </style>
</head>
<div class="container-fluid">
    <div class="row">
        <div class="col-md col-lg col-sm col-xs">
            <?php
                $name = $_POST['name'];
                $mobile =$_POST['mobile'];
                $address =$_POST['address'];
                $Gender =$_POST['Gender'];
                $Category =$_POST['Category'];
                $course =$_POST['course'];
                // print_r($course);
                echo "Hello  $name </br>";
                echo "Please check your details</br>";
                echo "Mobile $mobile </br>";
                echo "Address: $address</br>";
                echo "Gender: $Gender</br>";
                echo "Category: $Category</br>";
                echo "course: ";
                foreach($course as $Data){
                echo " $Data, ";
                }
                echo "</br>";
            ?>  
        </div>
        <div class="col-md col-lg col-sm col-xs CSS">
            <label for="Name">Name</label> : <input type="text" name="name" value="<?php echo $name; ?>"><br><br>
            Mobile: <input type="number" name="mobile" id="" value="<?php echo $mobile; ?>"><br><br>

            <label for="">Address:</label> <input type="text" name="address" id="" cols="30" rows="2" value="<?php echo $address;?>"><br><br>


            <label for="">Gender:</label> 
            <input type="radio" name="Gender" id="" value="Male" <?php if($Gender=='Male'){?> checked <?php }?>>Male
            <input type="radio" name="Gender" id="" value="Female" <?php if($Gender=='Female'){?> checked <?php }?> >Female
            <input type="radio" name="Gender" id="" value="other" <?php if($Gender=='other'){?> checked <?php }?>>Other
            <br><br>

            <label for="">Category:</label> <select name="Category" id="Categoty">
                <option value="">--select--</option>
                <option value="Genral" <?php if($Category=='Gender') {?> selected <?php }?>>Genral</option>
                <option value="OBC" <?php if($Category=='OBC') {?> selected <?php }?>>OBC</option>
                <option value="SC" <?php if($Category=='SC') {?> selected <?php }?>>SC</option>
                <option value="ST" <?php if($Category=='ST') {?> selected <?php }?>>ST</option>
            </select><br><br>

            <label for="">Choose Course :</label><br>
            <input type="checkbox" name="course[]" id="" value="Front-end" <?php if(in_array('Front-end',$course)){?> checked <?php }?>>Fornt-end 
            <input type="checkbox" name="course[]" id="" value="Back-end" <?php if(in_array('Back-end',$course)){?> checked <?php }?>>Back-end
            <input type="checkbox" name="course[]" id="" value="Full Stack" <?php if(in_array('Full Stack',$course)){?> checked <?php }?>>Full Stack <br><br>

        </div>
        <div class="col-md col-lg col-sm col-xs"></div>
    </div>
</div>