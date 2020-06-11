<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style type="text/css">
        input, textarea {
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="container" style="margin-top:100px;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-md-offset-3" align="center">
              <div class="form-group">
                <label for="exampleInputUsername">Your name</label>
                <input type="text" class="form-control" id="name" placeholder=" Enter Name">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail">Email Address</label>
                <input type="email" class="form-control" id="email" placeholder=" Enter Email id">
              </div>
              <div class="form-group">
                <label for="telephone">Mobile No.</label>
                <input type="tel" class="form-control" id="telephone" placeholder=" Enter 10-digit mobile no.">
              </div>
            <div class="form-group">
                <label for="Age">Age</label>
                <input type="numbers" class="form-control" id="age" placeholder=" Enter your age">
              </div>

              <div class="form-group">
                  <label for="place">Town/City</label>
                  <input type="text" class="form-control" id="city" placeholder=" Enter your town/city/country">
                </div>
              <div class="form-group">
                 <label for ="description">Tell me a little bit about you</label>
                 <textarea  class="form-control" id="description" placeholder="Tell me a little bit about you"></textarea>
               </div>
                <div class="form-group">
                 <label for ="description">What are yous Goals,Dreams and Ambitions</label>
                 <textarea  class="form-control" id="description" placeholder="What are yous Goals,Dreams and Ambitions"></textarea>
               </div>
                <input type="button" onclick="sendEmail()" value="Send An Email" class="btn btn-primary">
            </div>
        </div>
    </div>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script type="text/javascript">
        function sendEmail() {
            var name = $("#name");
            var email = $("#email");
            var telephone = $("#telephone");
            var age = $("#age");
            var city = $("#city");
            var description = $("#description");

            if (isNotEmpty(name) && isNotEmpty(email) && isNotEmpty(telephone) && isNotEmpty(age) && isNotEmpty(city) && isNotEmpty(description)) {
                $.ajax({
                   url: 'sendEmail.php',
                   method: 'POST',
                   dataType: 'json',
                   data: {
                       name: name.val(),
                       email: email.val(),
                       telephone: telephone.val(),
                       age: age.val(),
                       city: city.val(),
                       description: description.val(),

                   }, success: function (response) {
                        if (response.status == "success")
                            alert('Email Has Been Sent!');
                        else {
                            alert('Please Try Again!');
                            console.log(response);
                        }
                   }
                });
            }
        }

        function isNotEmpty(caller) {
            if (caller.val() == "") {
                caller.css('border', '1px solid red');
                return false;
            } else
                caller.css('border', '');

            return true;
        }
    </script>









</body>
</html>
