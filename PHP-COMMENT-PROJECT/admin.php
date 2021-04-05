<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/administration.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">
    <title>Administration</title>
</head>
<body>
    <div class="container" role="main">
        <div class="users_section">
            
        </div>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".users_section").load('select_users.php');    
        });
    </script>
    <script>
        $(document).on('click','.btn', function(){
            var user_name = $(this).html().slice(7);
            
            $.ajax({
                url: 'delete_users.php',
                method: 'POST',
                data:{
                    user: user_name,
                },
                success: function(data){
                    $(".users_section").load('select_users.php');
                }
            });
        });
    </script>

</body>
</html>