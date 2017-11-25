<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Summernote</title>
    
    <!-- Include these CSS and JS files -->
    
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.js"></script>
    <link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
    
</head>

<body>
    
    <div id="summernote">
         <!-- This is the text editor. Just ADD the ID = Summernote and it will behave as a Text editor -->
    </div>
    
    
    <div>
        <button id="submit"> Print </button>
    </div>
    
    <script>
        $(document).ready(function() {
            // initialising the text editor. It mandatory.
            $('#summernote').summernote({
                height: 500,
                width: 600
                // height and width of the text editor
            });
        });

        
         <!-- POST METHOD -->
        
        
        $("#submit").click(function() {
            var markupStr = $('#summernote').summernote('code');
            
            // URL , DATA as JSON , Function (parameter is response)
            $.post("validiate.php" , {postData : markupStr}, function(returnedData) {
             
                $('#hello').html(returnedData);
             
            });
        });
   
    </script>

     <!-- Checking what gets returned -->
    
    <h1 id= "hello"> </h1>
</body>

</html>
