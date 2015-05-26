<!DOCTYPE html>
<html>
    <head>
        <title>PHP I</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script type="text/javascript" src="main.js"></script>
    </head>
    <body>
        <div class="container">
            <h3>Cytonn Technologies Staff</h3><br /><br />
            <form action="tech.php" method="post">
                <div class="row">
                    <div class="col-xs-4"><input id="firstName" type="text" placeholder="First Name"> </div> 
                    <div class="col-xs-4"><input id="lastName" type="text" placeholder="Last Name"> </div>
                    <div class="col-xs-4"><input id="projects" type= "text" placeholder="Projects"> </div>
                </div>
                <br />
                <div class="row">
                    <div class="col-xs-4"><input id="spec" type= "text" placeholder="Specilization"></div>
                    <div class="col-xs-4"><button id="submit" class="btn btn-success">Submit</button></div>
                </div>
            </form>
        <table id='products' class = "table table-striped">
            <thead> 
                <tr>
                    <th>User ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Projects</th>
                    <th>Field</th>
                    <th>Action</th>
                </tr>
                </thead>
            <tbody>
               
            </tbody>
        </table>
       </div>
    </body>
</html>