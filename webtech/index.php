<!DOCTYPE html>
<html>
    <head> 
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/homepage.css">
        <title>[2IOA0]DBI HTI + Webtech</title>
    </head>
    <body>
        <nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Documentation</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About us</a>
                </li>
            </ul>
        </nav>
    <div id="row-top" class="row">
            <div class="col-4"></div>
            <div class="col-4"><h1 class="VCenter text-center">
                [2IOA0]DBI HTI + Webtech<br>
                <small>Group 10</small></h1></div>
            <div class="col-4"></div>
        </div>
        
        <div id="row-mid" class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <form action="php/upload.php" method="post" enctype="multipart/form-data">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input block-center" name="userDataset" id="userDataset">
                        <label class="custom-file-label" for="userDataset">Choose file</label>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>
                    <input class="btn btn-primary VCenter text-center block-center" type="submit" value="Upload your dataset(.csv)" name="submit">
                </form>
            </div>
            <div class="col-4">
            </div>
        </div>
        
        <div id="row-bot" class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <p class="VCenter text-center">
                        Graphs and networks are omnipresent in many application domains [13]. For
                        example, in biology, protein-protein interactions are oftentimes of special interest.
                        Software systems contain call relations describing which functions are
                        calling other functions. Also in social networking (like Facebook, Twitter, or
                        Instagram) people interact with eachother (for example by sending messages or
                        just by knowing eachother), building weighted networks. In scientic research,
                        paper authors reference eachother building a citation network. There are various
                        examples from the real world, providing a large repertoire for additional dataset
                        scenarios.     
                </p>
            </div>
            <div class="col-4"></div>
        </div>
        


    <!--Bootstrap library-->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            <script>
                // Add the following code if you want the name of the file appear on select
                $(".custom-file-input").on("change", function() {
                    var fileName = $(this).val().split("\\").pop();
                    $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
                });
            </script>    
    </body>
</html>Upload your dataset(.csv)