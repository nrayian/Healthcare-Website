<!DOCTYPE html>
<html lang="en">

<head>
    <title>Search</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container" style="max-width: 50%;">
        <div class="text-center mt-5 mb-4">
            <h2>Doctor search</h2>
        </div>
        <input type="text" class="form-control" id="hcweb" autocomplete="off" placeholder="Search ...  ">
    </div>

    <div id="searchresult"></div>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#hcweb").keyup(function() {
                var input = $(this).val();
                //alert(input);
                if (input != "") {
                    $.ajax({
                        //url: "livesearch.php",
                        url: "doctorsls.php",
                        method: "POST",
                        data: {
                            input: input
                        },

                        success: function(data) {
                            $("#searchresult").html(data);
                            $("#searchresult").css("display", "block");
                        }
                    });
                } else {
                    $("#searchresult").css("display", "none");
                }

            });
        });
    </script>
</body>

</html>