<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>library</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body class = "backcolour">
    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
            <div class="col col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
               <center><h1>Book details</h1></center> 
                <table class="table table-borderless textstyle">
                    
         <tr>
                        <td>name</td>
            
                        <td><input type="text" class="formcontrol"></td>
                    </tr>
                    <tr>
                        <td>author</td>
                        <td><input type="text" class="formcontrol"></td>
                    </tr>
                    <tr>
                        <td>catergory</td>
                        <td>
                            
                                <span>
                                <input type="checkbox" class="formcontrol" > <label>Fiction</label>
                                <input type="checkbox" class="formcontrol"> <label>History</label>
                                <input type="checkbox" class="formcontrol"> <label>Science</label>
                            </span>
                            
                                
                       </td>
                    </tr>
            <tr>
                <td>distributor</td>
                <td><input type="text" class="formcontrol"></td>
            </tr>
            <tr>
                <td>mrp</td>
                <td><input type="text" class="formcontrol"></td>
            </tr>
            <tr>
                <td>publisher</td>
                <td><input type="text" class="formcontrol"></td>
            </tr>
            <tr>
                <td></td>
                <td><button type="button" class="btn btn-dark" data-toggle="tooltip" data-placement="bottom" title="fill all fields">
                   Submit
                  </button></td>
            </tr>
            
                </table>
           
            </div>
            <div class="col col-12 col-sm-12 col-md-12 col-lg-3 col-xl-3"></div>
        </div>
    </div>
    
</body>
</html>