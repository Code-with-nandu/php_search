<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <title>Live Search In PHP</title>
</head>
<body>
    <div class="container">
        <div class="text-center mt-5 mb-4">
            <h2>PHP MySQL Live Search</h2>
        </div>
        <input type="text" class="form-control" id="live_search" autocapitalize="off" placeholder="Search">
        <div id="search_results"></div> <!-- This is where search results will be displayed -->
    </div>
    <div id="searchresult"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript">
  
  $(document).ready(function(){
            $('#live_search').keyup(function(){
                var input = $(this).val();
            // alert(input);
            if(input !=""){
                $.ajax({

                    url:"livesearch.php",
                    method: "POST",
                    data:{input:input},
                    success:function(data){
                        $("#searchresult").html(data);
                        $("#searchresult").css("dispaly","block");
                    }
                    
                });
            }else{
                $("#searchresult").css("dispaly","none");
            }

        });
    });

    </script>
</body>
</html>
