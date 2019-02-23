<?php
   include 'header.php';
   ?>
   <!-- <head> -->
   <link rel="stylesheet" href="style.css">
   <script src="lincoln/jquery-3.3.1.slim.min.js"></script>
    <title>View Posts</title>

<!-- </head> -->

<body>


    <div class="pt-3 pb-3">
        <h4 class="text-white text-center ">ADD POST</h4>
    </div>
    <?php
                        if (isset($_SESSION['error'])) {
                            echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
                            unset($_SESSION['error']);
                        }
                    ?>
    <form action="valpost.php" method="post" enctype="multipart/form-data">
        <div class="addPost text-center">
        <div id="imagePreview" class=" ml-6 pl-3 pr-3 mr-3 ">
                    </div>
        <div>
        <input type="file" name="fileToUpload" id="file" class="img inputfile"/>
     <label for="file"><i class="fa fa-camera"></i></label><br>
     </div>
            <div>
                <input type="text" class="aP" placeholder="Title" name="title">
            </div>
            <div>
                <textarea placeholder="Your Content Here" class="aT" name="content"></textarea>
            </div>
            <div>
                <input type="hidden" class="aP" placeholder="Your Name Please" value="<?php echo $_SESSION['username']; ?>" name="name">
            </div>
            <div>
                <input type="submit" class="aP" placeholder="Your Name Please"  name="submit" >
            </div>
        </div>
    </form>
    
    <script type="text/javascript">
    $(function() {
        $("#file").on("change", function()
        {
            var files = !!this.files ? this.files : [];
            if (!files.length || !window.FileReader) return;
     
            if (/^image/.test( files[0].type)){ 
                var reader = new FileReader(); 
                reader.readAsDataURL(files[0]);
     
                reader.onloadend = function(){ 
                    $("#imagePreview").css("background-image", "url("+this.result+")");
                }
            }
        });
    });
    </script>



    <!-- JAVASCRIPTS -->
    <script src="layout/scripts/jquery.min.js"></script>
    <script src="layout/scripts/jquery.backtotop.js"></script>
    <script src="layout/scripts/jquery.mobilemenu.js"></script>
</body>

</html>