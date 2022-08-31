<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        h2{
            text-align: center;
        }
        .CSS{
            border: 3px solid black;
            box-shadow: 3px 4px 5px black;
            background-color: lightblue;
            padding-top: 20px;
            font-size: 20px;
            font-family: bold;
            text-shadow: 1px 1px 2px black;
        }
    </style>
</head>
<body>

    <h2>Input Tags for Forms</h2>
    <div class="container-fluid">
    <div class="row">
        <div class="col-md col-lg col-sm col-xs">&nbsp;</div>
        <div class="col-md col-lg col-sm col-xs CSS">
            <form action="welcome.php" method="post">
                <label for="Name">Name</label> : <input type="text" name="name"><br><br>
                Mobile: <input type="number" name="mobile" id=""><br><br>

                <label for="">Address:</label> <textarea name="address" id="" cols="30" rows="2"></textarea><br><br>


                <label for="">Gender:</label> 
                <input type="radio" name="Gender" id="" value="Male">Male
                <input type="radio" name="Gender" id="" value="Female">Female
                <input type="radio" name="Gender" id="" value="other">Other
                <br><br>

                <label for="">Category:</label> <select name="Category" id="Categoty">
                    <option value="" selected>--select--</option>
                    <option value="Genral">Genral</option>
                    <option value="OBC">OBC</option>
                    <option value="SC">SC</option>
                    <option value="ST">ST</option>
                </select><br><br>

                <label for="">Choose Course :</label>
                <input type="checkbox" name="course[]" id="" value="Front-end">Front-end 
                <input type="checkbox" name="course[]" id="" value="Back-end">Back-end 
                <input type="checkbox" name="course[]" id="" value="Full Stack">Full Stack <br><br>

                <button class="btn btn-primary" type="submit">Submit</button><br><br>
            </form>
        </div>
        <div class="col-md col-lg col-sm col-xs">&nbsp;</div>
    </div>
</body>
</html>
