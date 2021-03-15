<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <title>天氣預報網站</title>
    <style>
        .heroImage {
            background-image: url("photo_BG_02.jpg");
            border-radius: 0%;
            height: 100vh;
            margin-bottom: 0;
            background-size: cover;
        }

        .alert{
            display:none;
        }
    </style>
</head>
<body>

    <div class="jumbotron heroImage text-center">
        <div class="container">

        <h1 class="display-4 text-light pt-5">天氣預報</h1>

        <p class="lead text-light">請在下方輸入框輸入你要查詢的<strong class="text-warning">城市名稱</strong></p>

            <form id="testForm">

                <div class="form-group col-md-7 mx-auto mb-3">
                    <input id="city" type="text" name="city" class="form-control" placeholder="例如. London, Paris, San Francisco...">
                    
                </div>

                <button id="findMyWeather" type="submit" name="submit" class="btn btn-warning btn-lg">查 詢</button>
            </form>
            
            
            
            
            <div class="col-8 mx-auto mt-3">
                <div id="success" class="alert alert-success">查詢成功.</div>
                <div id="fail" class="alert alert-danger">無法找到您查詢的城市, 請重新測試!</div>
                <div id="noCity" class="alert alert-danger">請輸入城市名稱!</div> 
            </div>
        </div>
    </div>

    <script type="text/javascript">
        $("#testForm").submit(function(event){
            

            event.preventDefault();

            $(".alert").hide();

            if($("#city").val() != ""){

                $.get("scraper.php?city="+$("#city").val(), function(data) {

                    if(data == "") {
                        $("#fail").fadeIn();
                    } else{
                        $("#success").html(data).fadeIn()
                    }
                });

            }else{
                $("#noCity").fadeIn();
            }
        });
    </script>
</body>
</html>