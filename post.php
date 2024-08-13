<?php

include('./server/connection.php');
include('./server/client/auth/index.php');

if(isset($_GET['post_id'])){
  $post_id = $_GET['post_id'];
}else{
   header('location: ./course.php');
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
    <!-- /header -->


    <?php
   


    if (isset($_POST['comment'])) {
      $comment_message = $_POST['comment_message'];
      $date = date('d M y h m s');

      $insert = mysqli_query($connection, "INSERT INTO `comment`(`id`, `user`, `post`, `date`,`comment_message`) VALUES ('','$whoIsLogin','$post_id','$date','$comment_message')");

      if ($insert) {
        echo "<script>alert('You have Successful place a comment')</script>";
      } else {
        echo "<script>alert('Something Went Wrong: Error occurs')</script>";
      }
    }



    $select_post = mysqli_query($connection, "SELECT post.*,   count(comment.id)as totalcomment FROM  post,comment WHERE post.id='$post_id' AND comment.post = '$post_id'");

    while ($row = mysqli_fetch_assoc($select_post)) {




    ?>
      <section class="wrapper !bg-[#edf2fc]">
        <div class="container pt-10 pb-36 xl:pt-[4.5rem] lg:pt-[4.5rem] md:pt-[4.5rem] xl:pb-40 lg:pb-40 md:pb-40 !text-center">
          <div class="flex flex-wrap mx-[-15px]">
            <div class="md:w-10/12 lg:w-10/12 xl:w-8/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
              <div class="post-header !mb-[.9rem]">
                <div class="inline-flex uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] mb-[0.4rem]  text-line relative align-top pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                  <a href="#" class="hover" rel="category">Admin</a>
                </div>
                <!-- /.post-category -->
                <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] mb-4"><?php echo $row['header'] ?></h1>
                <ul class="text-[0.8rem] text-[#aab0bc] m-0 p-0 list-none !mb-5">
                  <li class="post-date inline-block"><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span><?php echo $row['submission_date'] ?></span></li>
                  <li class="post-author inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0_.4rem] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                    <a class="text-[0.8rem] text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]" href="#"><i class="uil uil-user pr-[0.2rem] align-[-.05rem] before:content-['\ed6f']"></i><span>By
                        Sandbox</span></a>
                  </li>
                  <li class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0_.4rem] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                    <a class="text-[0.8rem] text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]" href="#"><i class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i><?php echo $row['totalcomment'] ?><span>
                        Comments</span></a>
                  </li>
                  <li class="post-likes inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0_.4rem] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                    <a class="text-[0.8rem] text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]" href="#"><i class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>3<span>
                        Likes</span></a>
                  </li>
                </ul>
                <!-- /.post-meta -->
              </div>
              <!-- /.post-header -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <section class="wrapper !bg-[#ffffff]">
        <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
          <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-10/12 lg:w-10/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
              <div class="blog single !mt-[-7rem]">
                <div class="card">
                  <figure class="card-img-top"><img src="<?php echo $domain . 'admin/' . $row['image_path'] ?>" alt="image"></figure>
                  <div class="card-body flex-[1_1_auto] p-[40px] xl:p-[2.8rem_3rem_2.8rem] lg:p-[2.8rem_3rem_2.8rem] md:p-[2.8rem_3rem_2.8rem]">
                    <div class="classic-view">
                      <article class="post mb-8">
                        <div class="relative mb-5">
                          <h2 class="h1 !mb-4 !leading-[1.3]"><?php echo $row['header'] ?></h2>
                          <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa
                            justo sit amet. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras
                            mattis consectetur purus sit amet fermentum. Aenean lacinia bibendum nulla sed consectetur.
                            Curabitur blandit tempus porttitor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus
                            dolor auctor. Nullam quis risus eget porta ac consectetur vestibulum.</p>



                          <!-- /.post-content -->
                          <div class="post-footer xl:flex xl:!flex-row xl:!justify-between lg:flex lg:!flex-row lg:!justify-between md:flex md:!flex-row md:!justify-between !items-center !mt-8">

                            <div class="mb-0 xl:!mb-2 lg:!mb-2 md:!mb-2">
                              <div class="dropdown share-dropdown btn-group">
                                <button class="btn btn-sm btn-red text-white !bg-[#e2626b] border-[#e2626b] hover:text-white hover:bg-[#e2626b] hover:border-[#e2626b] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#e2626b] active:border-[#e2626b] disabled:text-white disabled:bg-[#e2626b] disabled:border-[#e2626b] !rounded-[50rem] btn-icon btn-icon-start dropdown-toggle !mb-0 mr-0 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <i class="uil uil-share-alt mr-[0.3rem] text-[0.8rem] before:content-['\ecb0']"></i>
                                  Share </button>
                                <div class="dropdown-menu !shadow-[rgba(30,34,40,0.06)_0px_0px_25px_0px]">
                                  <a class="dropdown-item text-[0.7rem] !p-[.25rem_1.15rem]" href="#"><i class="uil uil-twitter w-4 text-[0.8rem] pr-[0.4rem] align-[-.1rem] before:content-['\ed59']"></i>Twitter</a>
                                  <a class="dropdown-item text-[0.7rem] !p-[.25rem_1.15rem]" href="#"><i class="uil uil-facebook-f w-4 text-[0.8rem] pr-[0.4rem] align-[-.1rem] before:content-['\eae2']"></i>Facebook</a>
                                  <a class="dropdown-item text-[0.7rem] !p-[.25rem_1.15rem]" href="#"><i class="uil uil-linkedin w-4 text-[0.8rem] pr-[0.4rem] align-[-.1rem] before:content-['\ebd1']"></i>Linkedin</a>
                                </div>
                                <!--/.dropdown-menu -->
                              </div>
                              <!--/.share-dropdown -->
                            </div>
                          </div>
                          <!-- /.post-footer -->
                      </article>
                      <!-- /.post -->
                    </div>


                    <div id="comments" class="relative !m-0">
                      <h3 class="!mb-6"><?php echo $row['totalcomment'] ?> Comments</h3>
                      <ol id="singlecomments" class="commentlist m-0 p-0 list-none">
                        <?php

                        $select_post = mysqli_query($connection, "SELECT comment.*, client.name  FROM comment,client WHERE  comment.post = '$post_id' AND client.id = comment.user");

                        while ($comment = mysqli_fetch_assoc($select_post)) {
                          // print_r($comment);
                           ?>
                          <li class="comment mt-8">
                            <div class="comment-header xl:flex lg:flex md:flex items-center !mb-[.5rem]">
                              <div class="flex items-center">
                                <figure class="w-12 h-12 !relative !mr-4 rounded-[100%]"><img class="rounded-[50%]" alt="image" src="assets/img/avatars/u4.jpg"></figure>
                                <div>
                                  <h6 class=" m-0 mb-[0.2rem]"><a href="#" class="text-[#343f52] hover:text-[#3f78e0]"><?php echo $comment['name'] ?></a></h6>
                                  <ul class="text-[0.7rem] text-[#aab0bc] m-0 p-0 list-none">
                                    <li><i class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><?php echo $comment['date'] ?></li>
                                  </ul>
                                  <!-- /.post-meta -->
                                </div>
                                <!-- /div -->
                              </div>
                              
                            </div>
                            <!-- /.comment-header -->
                            <p><?php echo $comment['comment_message'] ?></p>
                          </li>
                        <?php } ?>

                      </ol>
                    </div>
                    <!-- /#comments -->
                    <hr>
                    <h3 class="!mb-3">Would you like to share your thoughts?</h3>
                    <p class="!mb-7">Your email address will not be published. Required fields are marked *</p>
                    <form method="POST" class="comment-form">
                      <div class="form-floating relative !mb-4">
                        <textarea name="comment_message" class=" form-control  relative block w-full text-[.75rem] font-medium text-[#60697b] bg-[#fefefe] bg-clip-padding border shadow-[0_0_1.25rem_rgba(30,34,40,0.04)] rounded-[0.4rem] border-solid border-[rgba(8,60,130,0.07)] transition-[border-color] duration-[0.15s] ease-in-out focus:text-[#60697b] focus:bg-[rgba(255,255,255,.03)] focus:shadow-[0_0_1.25rem_rgba(30,34,40,0.04),unset] focus:!border-[rgba(63,120,224,0.5)] focus-visible:!border-[rgba(63,120,224,0.5)] focus-visible:!outline-0 placeholder:text-[#959ca9] placeholder:opacity-100 m-0 !pr-9 p-[.6rem_1rem] h-[calc(2.5rem_+_2px)] min-h-[calc(2.5rem_+_2px)] leading-[1.25]" placeholder="Comment" style="height: 150px"></textarea>
                        <label class="inline-block text-[#959ca9] text-[.75rem] absolute z-[2] h-full overflow-hidden text-start text-ellipsis whitespace-nowrap pointer-events-none border origin-[0_0] px-4 py-[0.6rem] border-solid border-transparent left-0 top-0 font-Manrope">Comment
                          *</label>
                      </div>
                      <button name="comment" type="submit" class="btn btn-primary text-white !bg-[#3f78e0] border-[#3f78e0] hover:text-white hover:bg-[#3f78e0] hover:border-[#3f78e0] focus:shadow-[rgba(92,140,229,1)] active:text-white active:bg-[#3f78e0] active:border-[#3f78e0] disabled:text-white disabled:bg-[#3f78e0] disabled:border-[#3f78e0] !rounded-[50rem] !mb-0 hover:translate-y-[-0.15rem] hover:shadow-[0_0.25rem_0.75rem_rgba(30,34,40,0.15)]">Submit</button>
                    </form>
                    <!-- /.comment-form -->
                  </div>
                  <!-- /.card-body -->
                </div>
                <!-- /.card -->
              </div>
              <!-- /.blog -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>

    <?php }; ?>



    <!-- /section -->
  </div>
  <!-- /.content-wrapper -->
  <?php include('./components/footer.php') ?>
  <script src="assets/js/plugins.js"></script>
  <script src="assets/js/theme.js"></script>
</body>

</html>