<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Review</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <link rel="stylesheet" href="cusdisplay2.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Poppins:400,700&display=swap" rel="stylesheet">
    <link href="css2/style.css" rel="stylesheet" />
    <link href="css2/responsive.css" rel="stylesheet" />
    <style>
        .go-back-btn {
            position: fixed;
            top: 20px;
            left: 20px;
            background-color: #000;
            color: #fff;
            border: none;
            border-radius: 5px;
            padding: 8px 16px;
            cursor: pointer;
        }

        .go-back-btn:hover {
            background-color: #333;
        }
        .navbar {
            margin-bottom: 20px;
        }
        .nav-link {
              display: inline-block;
              margin-right: 10px;
          }
          
        .navbar-nav .nav-link {
            font-size: 15px;
            padding: 20px 25px;
        }
        .navbar-nav {
            padding-left: 0;
        }
        .custom_nav-container {
            margin-bottom: 8px;
        }

        body {
            background-color: #ffffcc; /* Light yellow */
        }

    </style>
</head>
<body>


    <br />
    <h1 align="center"><a style="color: green;">Comments</a></h1>
    <br />
    <div class="container">
        <form method="POST" id="comment_form">
            <div class="form-group">
                <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
            </div>
            <div class="form-group">
                <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
            </div>
            <div class="form-group">
                <input type="hidden" name="comment_id" id="comment_id" value="0" />
                <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
            </div>
        </form>
        <span id="comment_message"></span>
        <br />
        <div id="display_comment"></div>
    </div>

    <button class="go-back-btn" onclick="goBack()">Go Back</button>

<!-- Your existing HTML content goes here -->

<script>
    // JavaScript function to go back
    function goBack() {
        window.history.back();
    }
</script>


</body>
</html>

<script>
    $(document).ready(function(){
        // Function to load comments
        function load_comment() {
            $.ajax({
                url:"fetch_adminComment.php",
                method:"POST",
                success:function(data) {
                    $('#display_comment').html(data);
                }
            })
        }

        // Initial load of comments
        load_comment();

        // Handle form submission
        $('#comment_form').on('submit', function(event){
            event.preventDefault();
            var form_data = $(this).serialize();
            $.ajax({
                url:"add_comment.php",
                method:"POST",
                data:form_data,
                dataType:"JSON",
                success:function(data) {
                    if(data.error != '') {
                        $('#comment_form')[0].reset();
                        $('#comment_message').html(data.error);
                        $('#comment_id').val('0');
                        load_comment();
                    }
                }
            });
        });

        // Handle delete comment button click
        $(document).on('click', '.delete-comment', function(){
            var comment_id = $(this).attr("data-comment-id");
            if(confirm("Are you sure you want to delete this comment?")) {
                $.ajax({
                    url:"delete_comment.php",
                    method:"POST",
                    data:{comment_id: comment_id},
                    success:function(data) {
                        load_comment(); // Reload comments after deletion
                    }
                });
            }
        });

        // Handle reply button click
        $(document).on('click', '.reply', function(){
            var comment_id = $(this).attr("id");
            $('#comment_id').val(comment_id);
            $('#comment_name').focus();
        });
    });
</script>
