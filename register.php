<?php


include('./server/connection.php');

if(isset($_POST['reg'])){
         $fullname = $_POST['fullname'];
         $email = $_POST['email'];
         $password = $_POST['password'];

         $date = date('d M Y');

         if(!empty($fullname) && !empty($email) && !empty($password)){
              $insert = mysqli_query($connection,"INSERT INTO `client`(`id`, `email`, `password`, `name`,`date`) VALUES ('','$email','$password','$fullname','$date')");

              if($insert){
                  echo "<script>alert('Successful create an account with us')</script>";
              }else{
                  echo "<script>alert('Something Went Wrong: Error occurs when registeration in proccess')</script>";
              }


         }else{
                  echo "<script>alert('Something Went Wrong: Input is empty')</script>";
         }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
         <meta charset="utf-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <meta name="description" content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
         <meta name="keywords" content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
         <meta name="author" content="elemis">
         <title>Sandbox - Modern & Multipurpose Tailwind CSS Template</title>
         <link rel="shortcut icon" href="assets/img/favicon.png">
         <!-- google fonts -->
         <link rel="preconnect" href="https://fonts.googleapis.com/">
         <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
         <link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Manrope:wght@400;500;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
         <!-- fonts -->
         <link rel="stylesheet" type="text/css" href="assets/fonts/unicons/unicons.css">
         <link rel="stylesheet" href="assets/css/plugins.css">
         <link rel="stylesheet" href="style.css">
</head>

<body>
         <div class="grow shrink-0">
         <?php include('./components/navbar.php') ?>
         
                  <section class="wrapper image-wrapper bg-image bg-overlay bg-overlay-light-600 text-white !bg-fixed bg-no-repeat bg-[center_center] bg-cover relative z-0 before:content-[''] before:block before:absolute before:z-[1] before:w-full before:h-full before:left-0 before:top-0 before:bg-[rgba(255,255,255,.6)]" data-image-src="assets/img/photos/bg18.png">
                           <div class="container pt-28 pb-40 xl:pt-36 lg:pt-36 md:pt-36 xl:pb-[12.5rem] lg:pb-[12.5rem] md:pb-[12.5rem] !text-center">
                                    <div class="flex flex-wrap mx-[-15px]">
                                             <div class="xl:w-8/12 lg:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
                                                      <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">Sign Up</h1>
                                                      <nav class="inline-block" aria-label="breadcrumb">
                                                               <ol class="breadcrumb flex flex-wrap bg-[none] mb-4 p-0 !rounded-none list-none">
                                                                        <li class="breadcrumb-item flex text-[#60697b]"><a class=" text-inherit hover:text-[#3f78e0]" href="#">Home</a></li>
                                                                        <li class="breadcrumb-item active flex text-[#60697b] pl-2 before:font-normal before:flex before:items-center before:text-[rgba(96,105,123,0.35)] before:content-['\e931'] before:text-[0.9rem] before:-mt-px before:pr-2 before:font-Unicons" aria-current="page">Sign Up</li>
                                                               </ol>
                                                      </nav>
                                                      <!-- /nav -->
                                             </div>
                                             <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                           </div>
                           <!-- /.container -->
                  </section>
                  <!-- /section -->
                  <section class="wrapper bg-light !bg-[#ffffff] ">
                           <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
                                    <div class="flex flex-wrap mx-[-15px]">
                                             <div class="lg:w-7/12 xl:w-6/12 xxl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto !mt-[-10rem]">
                                                      <div class="card">
                                                               <div class="card-body !p-12 !text-center">
                                                                        <h2 class="mb-3 text-left">Sign up to Paint Hub</h2>
                                                                        <p class="lead text-[0.9rem] font-medium !leading-[1.65] !mb-6 text-left">Welcome to Enugu state painting hub</p>
                                                                        <form method="POST" class="text-left !mb-3">
                                                                                 <div class="form-floating !relative mb-4">
                                                                                          <input name="fullname" type="text" class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:border-[#9fbcf0] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0" placeholder="Name" id="loginName">
                                                                                          <label class=" text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block" for="loginName">Name</label>
                                                                                 </div>
                                                                                 <div class="form-floating !relative mb-4">
                                                                                          <input name="email" type="email" class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:border-[#9fbcf0] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0" placeholder="Email" id="loginEmail">
                                                                                          <label class=" text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block" for="loginEmail">Email</label>
                                                                                 </div>
                                                                                 <div class="form-floating !relative password-field mb-4">
                                                                                          <input name="password" type="password" class="form-control px-4 py-[0.6rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25] block w-full text-[12px] font-medium text-[#60697b] appearance-none bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] motion-reduce:transition-none focus:text-[#60697b] focus:bg-[#fefefe] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:border-[#9fbcf0] disabled:bg-[#aab0bc] disabled:opacity-100 file:mt-[-0.6rem] file:mr-[-1rem] file:mb-[-0.6rem] file:ml-[-1rem] file:text-[#60697b] file:bg-[#fefefe] file:pointer-events-none file:transition-all file:duration-[0.2s] file:ease-in-out file:px-4 file:py-[0.6rem] file:rounded-none file:border-inherit file:border-solid file:border-0 motion-reduce:file:transition-none focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0" placeholder="Password" id="loginPassword">
                                                                                          <span class="password-toggle absolute -translate-y-2/4 cursor-pointer text-[0.9rem] text-[#959ca9] right-3 top-2/4"><i class="uil uil-eye"></i></span>
                                                                                          <label class=" text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 inline-block" for="loginPassword">Password</label>
                                                                                 </div>
                                                                                 
                                                                                 <button name="reg" type="submit" class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] btn-login w-full mb-2">Sign Up</button>
                                                                        </form>
                                                                        <!-- /form -->
                                                                        <p class="!mb-0">Already have an account? <a href="./login.php" class="hover">Sign in</a></p>
                                                                        
                                                                        <!--/.social -->
                                                               </div>
                                                               <!--/.card-body -->
                                                      </div>
                                                      <!--/.card -->
                                             </div>
                                             <!-- /column -->
                                    </div>
                                    <!-- /.row -->
                           </div>
                           <!-- /.container -->
                  </section>
                  <!-- /section -->
         </div>
         <!-- /.content-wrapper -->

         <?php
         
         include('./components/footer.php')

         ?>
         
         <script src="assets/js/plugins.js"></script>
         <script src="assets/js/theme.js"></script>
</body>


<!-- Mirrored from sandbox-tailwindcss.ibthemespro.com/signup.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 03 Jul 2024 13:00:33 GMT -->

</html>