# All Group


## Redirect  login page


This link allows the redirection to the login page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registration Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
  <!--<link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon">-->

  <link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet">


  <script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"> </script>
  <script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"> </script>
  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css">
  <script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"> </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
  </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css">

</head>

<body style="background-color: #F7F7F8;">


    <div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        
    <div class="shadow-lg bg-white login p-5">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login">
            <img src="http://172.16.30.46/laravel-base/public/logo1.png" >
        </a>

        <form action="http://172.16.30.46/laravel-base/public/login_account" method="post" class="form-group" autocomplete="off">
            <input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB">            <div class="row">
                <div class="col-12">
                    <label for="email"> Email*</label>
                <input type="email" name="email" id="email" value="" required class="form-control input-lg"> <br>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <label for="password"> Mot de passe*</label>
                    <input type="password" name="password" id="password" required class="form-control input-lg"> <br>
                </div>
            </div>

            <input type="submit" id="submit"  value="Me connecter" class="btn btn-info btn-block submitlink" />


            <div class="text-right">
                <a class="forgot_link" href="http://172.16.30.46/laravel-base/public/forgot_password"> Mot de passe oublié</a> <br>
            </div>

        </form>
        <p  class="text-center"> je n'ai pas de Compte ,
            <a href="http://172.16.30.46/laravel-base/public/registration_page" class="text-primary urllink" >
                je m'inscris            </a>
        </p>
    </div>

    <script>
        function validate_form(){
            pwd1 = $("#password").val();
            //pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            //if(pwd1 == pwd2){
                if(pwd1.length >=8 && pwd1.length <= 16){
                    //if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/) && format.test(pwd1)){
                    if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/)){
                        //toastr.success("form correct");
                        return true;
                    }
                    else{
                        toastr.warning('Un mot de passe contient au moins une majuscule et un chiffre');
                        return false;
                    }
                }
                else if(pwd1.length > 16){
                    toastr.warning('La taille maximale d&#039;un mot de passe est de 16 caractéres');
                    return false;

                }
                else{
                    toastr.warning('La taille minimale d&#039;un mot de passe est de 8 caractéres');
                    return false;
                }
            return false;
        }
    </script>

    


    <div>


  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"></script>

  </body>

</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>


## Registration page


This page allows a user to create an account

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/registration_page" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/registration_page"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registration Page</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
  <!--<link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon">-->

  <link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet">


  <script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"> </script>
  <script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"> </script>
  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css">
  <script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"> </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
  </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css">

</head>

<body style="background-color: #F7F7F8;">


    <div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        

    <div class="shadow-lg bg-white login">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login">
            <img src="http://172.16.30.46/laravel-base/public/logo1.png" >
        </a>

        <form action="http://172.16.30.46/laravel-base/public/registration_account" method="post" class="form-group" autocomplete="off">
            <input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB">            <div class="row">
                <div class="col-6">
                    <label for="name"> Nom*</label>
                <input type="text" id="name" value="" required name="name"  class="form-control input-lg"> <br>
                </div>
                <div class="col-6">
                    <label for="surname"> Prénom* </label>
                    <input type="text" value="" name="surname" id="surname" required class="form-control input-lg"> <br>
                </div>
            </div>

                <div class="row">
                <div class="col-6">
                    <label for="birthday">Date de naissance* </label>
                    <!--<input type="date"  max="2021-01-28" name="birthday" value="" id="birthday" class="form-control" required/> <br>-->
                    <input id="birthday" name="birthday" value="" placeholder="dd/mm/yyyy" style="background-color: white;" class="form-control" required readonly />
                </div>
                <div class="col-6">
                    <label for="sexe"> Sexe*</label>
                                            <select id="sexe" name="sexe" class="form-control input-lg">
                            <option value="m"> Masculin </option>
                            <option value="f"> Féminin </option>
                        </select> <br>
                    
                </div>
                <div class="col-12">
                    <label for="phone_number"> Téléphone*</label><br>
                    <input id="phone_number" value="" name="phone_number"  type="tel" required  class="form-control input-lg"> <br>
                </div>
                </div>

            <div class="row">
                <div class="col-12">
                    <label for="email"> Email*</label>
                    <input type="email" value="" name="email" id="email" required class="form-control input-lg"> <br>
                </div>

            </div>

            <div class="row">
                <div class="col-6">
                    <label for="password1"> Mot de passe*</label>
                    <input type="password" onkeyup="return validate_password()"  id="password1" name="password1" required class="form-control input-lg">
                    <p>
                        Un mot de passe doit contenir :
                        <ul>
                            <div  id="password-8">
                                <li> Au moins 8 caractéres </li>
                            </div>
                            <div id="password-maj">
                                <li>Au moins une lettre majuscule </li>
                            </div>
                            <div id="password-chif">
                                <li> Au moins un chiffre</li>
                            </div>
                        </ul>
                    </p>

                    <br>

                </div>
                <div class="col-6">
                    <label for="password2"> Confirmation du mot de passe*</label>
                    <input type="password" id="password2" name="password2" required class="form-control input-lg">  <br>
                </div>
            </div>
            <input type="submit" onclick="return validate_form()" value="M'inscrire" class="btn btn-info btn-block submitlink" />
        </form> <br>
        <p  class="text-center"> j'ai déjà un compte,
            <a href="http://172.16.30.46/laravel-base/public/registration_login" class="text-primary urllink" >
                Je me connecte            </a>
        </p>
    </div>
    

    <script>
        format =  "dd\/mm\/yyyy";
         today = new Date(new Date().getFullYear(), new Date().getMonth(), new Date().getDate());
        $('#birthday').datepicker({
            uiLibrary: 'bootstrap4',
            format: format,
            //format: 'mm/dd/yyyy',
            //maxDate: '27/01/2021',
            maxDate: today,
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });
    </script>

    <script>
        function validate_password(){
            //alert("hello");
            pwd1 = $("#password1").val();
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;

            $("#password-8").css("background-color","red");
            $("#password-8").css("color","white");

            $("#password-maj").css("background-color","red");
            $("#password-maj").css("color","white");

            $("#password-chif").css("background-color","red");
            $("#password-chif").css("color","white");

            if(pwd1.length >=8 && pwd1.length <= 16){
                $("#password-8").css("background-color","green");
                $("#password-8").css("color","white");
            }

            if(pwd1.match(/[A-Z]/)){
                $("#password-maj").css("background-color","green");
                $("#password-maj").css("color","white");
            }

            if(pwd1.match(/[0-9]/)){
                $("#password-chif").css("background-color","green");
                $("#password-chif").css("color","white");
            }

        }
    </script>

    <script>
        function validate_form(){
            pwd1 = $("#password1").val();
            pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            if(pwd1 == pwd2){
                if(pwd1.length >=8 && pwd1.length <= 16){
                    //if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/) && format.test(pwd1)){
                    if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/)){
                        //toastr.success("form correct");
                        return true;
                    }
                    else{
                        toastr.warning('Un mot de passe contient au moins une majuscule et un chiffre');
                        return false;
                    }
                }
                else if(pwd1.length > 16){
                    toastr.warning('La taille maximale d&#039;un mot de passe est de 16 caractéres');
                    return false;

                }
                else{
                    toastr.warning('La taille minimale d&#039;un mot de passe est de 8 caractéres');
                    return false;
                }
            }
            else{
                toastr.warning('La confirmation du mot de  passe ne correspond pas au mot de passe');
                return false;
            }
            return false;
        }
    </script>

    <script>
        var input = document.querySelector("#phone_number");
        input.class = "form-control col-12";
        window.intlTelInput(input, {
            initialCountry: "auto",
            localizedCountries: { 'de': 'Deutschland' },
            nationalMode: false,
            utilsScript: "build/js/utils.js",
        });

    </script>

    <div>


  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"></script>

  </body>

</html>

```
<div id="execution-results-GETregistration_page" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregistration_page"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregistration_page"></code></pre>
</div>
<div id="execution-error-GETregistration_page" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregistration_page"></code></pre>
</div>
<form id="form-GETregistration_page" data-method="GET" data-path="registration_page" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregistration_page', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregistration_page" onclick="tryItOut('GETregistration_page');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregistration_page" onclick="cancelTryOut('GETregistration_page');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregistration_page" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>registration_page</code></b>
</p>
</form>


## Login page


This page allows the user to login

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/registration_login" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/registration_login"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Registration Login</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
  <!--<link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon">-->

  <link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet">


  <script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"> </script>
  <script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"> </script>
  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css">
  <script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"> </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
  </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css">

</head>

<body style="background-color: #F7F7F8;">


    <div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
        
    <div class="shadow-lg bg-white login p-5">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login">
            <img src="http://172.16.30.46/laravel-base/public/logo1.png" >
        </a>

        <form action="http://172.16.30.46/laravel-base/public/login_account" method="post" class="form-group" autocomplete="off">
            <input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB">            <div class="row">
                <div class="col-12">
                    <label for="email"> Email*</label>
                <input type="email" name="email" id="email" value="" required class="form-control input-lg"> <br>
                </div>

            </div>

            <div class="row">
                <div class="col-12">
                    <label for="password"> Mot de passe*</label>
                    <input type="password" name="password" id="password" required class="form-control input-lg"> <br>
                </div>
            </div>

            <input type="submit" id="submit"  value="Me connecter" class="btn btn-info btn-block submitlink" />


            <div class="text-right">
                <a class="forgot_link" href="http://172.16.30.46/laravel-base/public/forgot_password"> Mot de passe oublié</a> <br>
            </div>

        </form>
        <p  class="text-center"> je n'ai pas de Compte ,
            <a href="http://172.16.30.46/laravel-base/public/registration_page" class="text-primary urllink" >
                je m'inscris            </a>
        </p>
    </div>

    <script>
        function validate_form(){
            pwd1 = $("#password").val();
            //pwd2 = $("#password2").val();
            var format = /[ `!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?~]/;
            //if(pwd1 == pwd2){
                if(pwd1.length >=8 && pwd1.length <= 16){
                    //if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/) && format.test(pwd1)){
                    if(pwd1.match(/[A-Z]/) && pwd1.match(/[0-9]/)){
                        //toastr.success("form correct");
                        return true;
                    }
                    else{
                        toastr.warning('Un mot de passe contient au moins une majuscule et un chiffre');
                        return false;
                    }
                }
                else if(pwd1.length > 16){
                    toastr.warning('La taille maximale d&#039;un mot de passe est de 16 caractéres');
                    return false;

                }
                else{
                    toastr.warning('La taille minimale d&#039;un mot de passe est de 8 caractéres');
                    return false;
                }
            return false;
        }
    </script>

    


    <div>


  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"></script>

  </body>

</html>

```
<div id="execution-results-GETregistration_login" hidden>
    <blockquote>Received response<span id="execution-response-status-GETregistration_login"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETregistration_login"></code></pre>
</div>
<div id="execution-error-GETregistration_login" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETregistration_login"></code></pre>
</div>
<form id="form-GETregistration_login" data-method="GET" data-path="registration_login" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETregistration_login', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETregistration_login" onclick="tryItOut('GETregistration_login');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETregistration_login" onclick="cancelTryOut('GETregistration_login');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETregistration_login" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>registration_login</code></b>
</p>
</form>


## Change your parameters


This page allows the user to modify his profile

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/change_your_parameters" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_your_parameters"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETchange_your_parameters" hidden>
    <blockquote>Received response<span id="execution-response-status-GETchange_your_parameters"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETchange_your_parameters"></code></pre>
</div>
<div id="execution-error-GETchange_your_parameters" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETchange_your_parameters"></code></pre>
</div>
<form id="form-GETchange_your_parameters" data-method="GET" data-path="change_your_parameters" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETchange_your_parameters', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETchange_your_parameters" onclick="tryItOut('GETchange_your_parameters');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETchange_your_parameters" onclick="cancelTryOut('GETchange_your_parameters');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETchange_your_parameters" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>change_your_parameters</code></b>
</p>
</form>


## Forgot_password


This page allows the user to enter his email address in order to receive a password reset email

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/forgot_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/forgot_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Forgot Password</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <!--<link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/favicon.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/img/apple-touch-icon.png" rel="apple-touch-icon">-->
  <!--<link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="icon">
  <link href="http://172.16.30.46/laravel-base/public/logo1.png" rel="apple-touch-icon">-->

  <link rel="icon" type="image/png" href="http://172.16.30.46/laravel-base/public/logo1.png" />

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/css/style.css" rel="stylesheet">


  <script src="http://172.16.30.46/laravel-base/public/tinymce.min.js"> </script>
  <script src="http://172.16.30.46/laravel-base/public/intelphone/build/js/intlTelInput.js"> </script>
  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/intelphone/build/css/intlTelInput.css">


  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-css-toastr.min.css">
  <script src="http://172.16.30.46/laravel-base/public/js_requirement/cdnjs.cloudflare.com-ajax-libs-toastr.js-latest-js-toastr.min.js"> </script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.5.2/bootbox.min.js">
  </script>


<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<script src="https://unpkg.com/gijgo@1.9.13/js/gijgo.min.js" type="text/javascript"></script>
<link href="https://unpkg.com/gijgo@1.9.13/css/gijgo.min.css" rel="stylesheet" type="text/css" />

<link href="http://172.16.30.46/laravel-base/public/template-admin/gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <style>
        /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
    </style>

    <style>
        body {
            font-family: 'Nunito';
        }
    </style>

    <link rel="stylesheet" href="http://172.16.30.46/laravel-base/public/css/template_base.css">

</head>

<body style="background-color: #F7F7F8;">


    <div class="login relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
            <div class="shadow-lg bg-white login p-5">
        <a class="flex items-center justify-center" style="margin-bottom: 25px;" href="http://172.16.30.46/laravel-base/public/registration_login">
            <img src="http://172.16.30.46/laravel-base/public/logo1.png" >
        </a>

        <div class="text-center" style="margin-bottom: 25px;">
            <h3>Retrouver mon mot de passe</h3>
            <h6>Saisissez votre e-mail pour recevoir un mail vous permettant de <br> réinitialiser votre mot de passe</h6>
        </div>

        <form action="http://172.16.30.46/laravel-base/public/send_email_forgot_password" method="post" class="form-group" autocomplete="off">
            <input type="hidden" name="_token" value="JZca2AvcgXGLAm2WwIsBwBvR5HHGciX1ZysB3xBB">            <div class="row">
                <div class="col-12">
                <input type="email"  name="email" id="email" value="" required class="form-control "  placeholder="Email*">
                </div>
            </div> <br>

            <input type="submit" value="Envoyer"  class="btn btn-block btn-info submitlink">
        </form> <br>
        <div class="row">
            <div class="p col-md-5 col-sm-12" >
                je n'ai pas de Compte , <a href="http://172.16.30.46/laravel-base/public/registration_page" class="text-primary"> je m'inscris </a>
            </div>
            <div class="p offset-md-2 col-md-5 col-sm-12" >
                j'ai déjà un compte , <a href="http://172.16.30.46/laravel-base/public/registration_login"  class="text-primary" >  Je me connecte </a>
            </div>
        </div>
    </div>

    <div>


  <!-- ======= Footer ======= -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery/jquery.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/php-email-form/validate.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/venobox/venobox.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/counterup/counterup.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="http://172.16.30.46/laravel-base/public/template-user/mamba/assets/js/main.js"></script>

  </body>

</html>

```
<div id="execution-results-GETforgot_password" hidden>
    <blockquote>Received response<span id="execution-response-status-GETforgot_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETforgot_password"></code></pre>
</div>
<div id="execution-error-GETforgot_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETforgot_password"></code></pre>
</div>
<form id="form-GETforgot_password" data-method="GET" data-path="forgot_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETforgot_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETforgot_password" onclick="tryItOut('GETforgot_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETforgot_password" onclick="cancelTryOut('GETforgot_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETforgot_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>forgot_password</code></b>
</p>
</form>


## Send password reset email


Send password reset email to a user

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/send_email_forgot_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"repellendus"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/send_email_forgot_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "repellendus"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTsend_email_forgot_password" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTsend_email_forgot_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTsend_email_forgot_password"></code></pre>
</div>
<div id="execution-error-POSTsend_email_forgot_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTsend_email_forgot_password"></code></pre>
</div>
<form id="form-POSTsend_email_forgot_password" data-method="POST" data-path="send_email_forgot_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTsend_email_forgot_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTsend_email_forgot_password" onclick="tryItOut('POSTsend_email_forgot_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTsend_email_forgot_password" onclick="cancelTryOut('POSTsend_email_forgot_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTsend_email_forgot_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>send_email_forgot_password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTsend_email_forgot_password" data-component="body" required  hidden>
<br>
A user's email address</p>

</form>


## Password reset page


Password reset page

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/reset_password" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"reset_key":"ad"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/reset_password"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "reset_key": "ad"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://localhost/delete_email_type'" />

        <title>Redirecting to http://localhost/delete_email_type</title>
    </head>
    <body>
        Redirecting to <a href="http://localhost/delete_email_type">http://localhost/delete_email_type</a>.
    </body>
</html>
```
<div id="execution-results-GETreset_password" hidden>
    <blockquote>Received response<span id="execution-response-status-GETreset_password"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETreset_password"></code></pre>
</div>
<div id="execution-error-GETreset_password" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETreset_password"></code></pre>
</div>
<form id="form-GETreset_password" data-method="GET" data-path="reset_password" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETreset_password', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETreset_password" onclick="tryItOut('GETreset_password');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETreset_password" onclick="cancelTryOut('GETreset_password');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETreset_password" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>reset_password</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>reset_key</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="reset_key" data-endpoint="GETreset_password" data-component="body" required  hidden>
<br>
The reset key of the user assigned to it</p>

</form>


## Reset password


Resetting a user's password

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/reset_password_function" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":20,"password":"itaque","Confirm_Password":"facere"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/reset_password_function"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 20,
    "password": "itaque",
    "Confirm_Password": "facere"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTreset_password_function" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTreset_password_function"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTreset_password_function"></code></pre>
</div>
<div id="execution-error-POSTreset_password_function" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTreset_password_function"></code></pre>
</div>
<form id="form-POSTreset_password_function" data-method="POST" data-path="reset_password_function" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTreset_password_function', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTreset_password_function" onclick="tryItOut('POSTreset_password_function');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTreset_password_function" onclick="cancelTryOut('POSTreset_password_function');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTreset_password_function" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>reset_password_function</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="POSTreset_password_function" data-component="body" required  hidden>
<br>
The id of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTreset_password_function" data-component="body" required  hidden>
<br>
The password of user</p>
<p>
<b><code>Confirm_Password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="Confirm_Password" data-endpoint="POSTreset_password_function" data-component="body" required  hidden>
<br>
The confirm password of user</p>

</form>


## Logout

<small class="badge badge-darkred">requires authentication</small>

Function that logout a user

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/logout" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/logout"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETlogout" hidden>
    <blockquote>Received response<span id="execution-response-status-GETlogout"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETlogout"></code></pre>
</div>
<div id="execution-error-GETlogout" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETlogout"></code></pre>
</div>
<form id="form-GETlogout" data-method="GET" data-path="logout" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETlogout', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETlogout" onclick="tryItOut('GETlogout');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETlogout" onclick="cancelTryOut('GETlogout');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETlogout" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>logout</code></b>
</p>
<p>
<label id="auth-GETlogout" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETlogout" data-component="header"></label>
</p>
</form>


## Update Password

<small class="badge badge-darkred">requires authentication</small>

User password modification function

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/password_modification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"current_password":"eos","password":"voluptas","confirm_password":"nihil"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/password_modification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "current_password": "eos",
    "password": "voluptas",
    "confirm_password": "nihil"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTpassword_modification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTpassword_modification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTpassword_modification"></code></pre>
</div>
<div id="execution-error-POSTpassword_modification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTpassword_modification"></code></pre>
</div>
<form id="form-POSTpassword_modification" data-method="POST" data-path="password_modification" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTpassword_modification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTpassword_modification" onclick="tryItOut('POSTpassword_modification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTpassword_modification" onclick="cancelTryOut('POSTpassword_modification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTpassword_modification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>password_modification</code></b>
</p>
<p>
<label id="auth-POSTpassword_modification" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTpassword_modification" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>current_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="current_password" data-endpoint="POSTpassword_modification" data-component="body" required  hidden>
<br>
The current password</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTpassword_modification" data-component="body" required  hidden>
<br>
The new password of user</p>
<p>
<b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="confirm_password" data-endpoint="POSTpassword_modification" data-component="body" required  hidden>
<br>
The confirm password of user</p>

</form>


## Resetting email address

<small class="badge badge-darkred">requires authentication</small>

Mail sending function for updating an email for a user

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/email_modification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"nam","password":"est"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/email_modification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "nam",
    "password": "est"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTemail_modification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTemail_modification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTemail_modification"></code></pre>
</div>
<div id="execution-error-POSTemail_modification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTemail_modification"></code></pre>
</div>
<form id="form-POSTemail_modification" data-method="POST" data-path="email_modification" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTemail_modification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTemail_modification" onclick="tryItOut('POSTemail_modification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTemail_modification" onclick="cancelTryOut('POSTemail_modification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTemail_modification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>email_modification</code></b>
</p>
<p>
<label id="auth-POSTemail_modification" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTemail_modification" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTemail_modification" data-component="body" required  hidden>
<br>
The email of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTemail_modification" data-component="body" required  hidden>
<br>
The  password of user</p>

</form>


## Email address update

<small class="badge badge-darkred">requires authentication</small>

Email update function following the email address reset

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/email_modification_active" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"fuga"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/email_modification_active"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "fuga"
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETemail_modification_active" hidden>
    <blockquote>Received response<span id="execution-response-status-GETemail_modification_active"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETemail_modification_active"></code></pre>
</div>
<div id="execution-error-GETemail_modification_active" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETemail_modification_active"></code></pre>
</div>
<form id="form-GETemail_modification_active" data-method="GET" data-path="email_modification_active" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETemail_modification_active', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETemail_modification_active" onclick="tryItOut('GETemail_modification_active');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETemail_modification_active" onclick="cancelTryOut('GETemail_modification_active');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETemail_modification_active" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>email_modification_active</code></b>
</p>
<p>
<label id="auth-GETemail_modification_active" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="GETemail_modification_active" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="GETemail_modification_active" data-component="body" required  hidden>
<br>
The email of user</p>

</form>


## Profile update

<small class="badge badge-darkred">requires authentication</small>

User profile modification function

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/profile_modification" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"eos","surname":"fuga","sex":"eos","birthday":"blanditiis","Phone_number":15}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/profile_modification"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "eos",
    "surname": "fuga",
    "sex": "eos",
    "birthday": "blanditiis",
    "Phone_number": 15
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTprofile_modification" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTprofile_modification"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTprofile_modification"></code></pre>
</div>
<div id="execution-error-POSTprofile_modification" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTprofile_modification"></code></pre>
</div>
<form id="form-POSTprofile_modification" data-method="POST" data-path="profile_modification" data-authed="1" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTprofile_modification', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTprofile_modification" onclick="tryItOut('POSTprofile_modification');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTprofile_modification" onclick="cancelTryOut('POSTprofile_modification');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTprofile_modification" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>profile_modification</code></b>
</p>
<p>
<label id="auth-POSTprofile_modification" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTprofile_modification" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The name of user</p>
<p>
<b><code>surname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="surname" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The surname of user</p>
<p>
<b><code>sex</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sex" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The sex of user</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The birthday of user</p>
<p>
<b><code>Phone_number</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="Phone_number" data-endpoint="POSTprofile_modification" data-component="body" required  hidden>
<br>
The phone number of user</p>

</form>


## User registration


User registration function with sending account activation email

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/registration_account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"name":"aut","surname":"quod","sex":"aut","birthday":"sint","Phone_number":7,"password":"error","confirm_password":"rerum","email":"ut"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/registration_account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "name": "aut",
    "surname": "quod",
    "sex": "aut",
    "birthday": "sint",
    "Phone_number": 7,
    "password": "error",
    "confirm_password": "rerum",
    "email": "ut"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTregistration_account" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTregistration_account"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTregistration_account"></code></pre>
</div>
<div id="execution-error-POSTregistration_account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTregistration_account"></code></pre>
</div>
<form id="form-POSTregistration_account" data-method="POST" data-path="registration_account" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTregistration_account', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTregistration_account" onclick="tryItOut('POSTregistration_account');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTregistration_account" onclick="cancelTryOut('POSTregistration_account');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTregistration_account" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>registration_account</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>name</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="name" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The name of user</p>
<p>
<b><code>surname</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="surname" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The surname of user</p>
<p>
<b><code>sex</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="sex" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The sex of user</p>
<p>
<b><code>birthday</code></b>&nbsp;&nbsp;<small>date</small>  &nbsp;
<input type="text" name="birthday" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The birthday of user</p>
<p>
<b><code>Phone_number</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="Phone_number" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The phone number of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The password of user</p>
<p>
<b><code>confirm_password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="confirm_password" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The confirm password of user</p>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTregistration_account" data-component="body" required  hidden>
<br>
The email of user</p>

</form>


## Account activation


Function that allows the activation of a user's account

> Example request:

```bash
curl -X GET \
    -G "http://172.16.30.46/laravel-base/public/activation_account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"id":9}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/activation_account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "id": 9
}

fetch(url, {
    method: "GET",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


> Example response (302):

```json

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="refresh" content="0;url='http://172.16.30.46/laravel-base/public/registration_login'" />

        <title>Redirecting to http://172.16.30.46/laravel-base/public/registration_login</title>
    </head>
    <body>
        Redirecting to <a href="http://172.16.30.46/laravel-base/public/registration_login">http://172.16.30.46/laravel-base/public/registration_login</a>.
    </body>
</html>
```
<div id="execution-results-GETactivation_account" hidden>
    <blockquote>Received response<span id="execution-response-status-GETactivation_account"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETactivation_account"></code></pre>
</div>
<div id="execution-error-GETactivation_account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETactivation_account"></code></pre>
</div>
<form id="form-GETactivation_account" data-method="GET" data-path="activation_account" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETactivation_account', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETactivation_account" onclick="tryItOut('GETactivation_account');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETactivation_account" onclick="cancelTryOut('GETactivation_account');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETactivation_account" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>activation_account</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>id</code></b>&nbsp;&nbsp;<small>integer</small>  &nbsp;
<input type="number" name="id" data-endpoint="GETactivation_account" data-component="body" required  hidden>
<br>
The id of user</p>

</form>


## Authentification


Function that login a user

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/login_account" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json" \
    -d '{"email":"dolore","password":"consequatur"}'

```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/login_account"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};

let body = {
    "email": "dolore",
    "password": "consequatur"
}

fetch(url, {
    method: "POST",
    headers,
    body: JSON.stringify(body),
}).then(response => response.json());
```


<div id="execution-results-POSTlogin_account" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTlogin_account"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTlogin_account"></code></pre>
</div>
<div id="execution-error-POSTlogin_account" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTlogin_account"></code></pre>
</div>
<form id="form-POSTlogin_account" data-method="POST" data-path="login_account" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTlogin_account', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTlogin_account" onclick="tryItOut('POSTlogin_account');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTlogin_account" onclick="cancelTryOut('POSTlogin_account');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTlogin_account" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>login_account</code></b>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>email</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="email" data-endpoint="POSTlogin_account" data-component="body" required  hidden>
<br>
The email of user</p>
<p>
<b><code>password</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="password" data-endpoint="POSTlogin_account" data-component="body" required  hidden>
<br>
The Password of user</p>

</form>


## Update avatar

<small class="badge badge-darkred">requires authentication</small>

Update avatar of user

> Example request:

```bash
curl -X POST \
    "http://172.16.30.46/laravel-base/public/change_avatar_user" \
    -H "Content-Type: multipart/form-data" \
    -H "Accept: application/json" \
    -F "image=@C:\Users\l.pejuzo\AppData\Local\Temp\php3760.tmp" 
```

```javascript
const url = new URL(
    "http://172.16.30.46/laravel-base/public/change_avatar_user"
);

let headers = {
    "Content-Type": "multipart/form-data",
    "Accept": "application/json",
};

const body = new FormData();
body.append('image', document.querySelector('input[name="image"]').files[0]);

fetch(url, {
    method: "POST",
    headers,
    body,
}).then(response => response.json());
```


<div id="execution-results-POSTchange_avatar_user" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTchange_avatar_user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTchange_avatar_user"></code></pre>
</div>
<div id="execution-error-POSTchange_avatar_user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTchange_avatar_user"></code></pre>
</div>
<form id="form-POSTchange_avatar_user" data-method="POST" data-path="change_avatar_user" data-authed="1" data-hasfiles="1" data-headers='{"Content-Type":"multipart\/form-data","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTchange_avatar_user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTchange_avatar_user" onclick="tryItOut('POSTchange_avatar_user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTchange_avatar_user" onclick="cancelTryOut('POSTchange_avatar_user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTchange_avatar_user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>change_avatar_user</code></b>
</p>
<p>
<label id="auth-POSTchange_avatar_user" hidden>Authorization header: <b><code>Bearer </code></b><input type="text" name="Authorization" data-prefix="Bearer " data-endpoint="POSTchange_avatar_user" data-component="header"></label>
</p>
<h4 class="fancy-heading-panel"><b>Body Parameters</b></h4>
<p>
<b><code>image</code></b>&nbsp;&nbsp;<small>file</small>  &nbsp;
<input type="file" name="image" data-endpoint="POSTchange_avatar_user" data-component="body" required  hidden>
<br>
The avatar of a user</p>

</form>



