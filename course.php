<?php

include('./server/connection.php');

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"
      content="An impressive and flawless site template that includes various UI elements and countless features, attractive ready-made blocks and rich pages, basically everything you need to create a unique and professional website.">
    <meta name="keywords"
      content="Tailwind CSS, business, corporate, creative, gulp, marketing, minimal, modern, multipurpose, one page, responsive, saas, sass, seo, startup, html5 template, site template">
    <meta name="author" content="elemis">
    <title><?php echo $sitename ?> - Course Page</title>
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
      href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&amp;family=Manrope:wght@400;500;700&amp;family=Space+Grotesk:wght@300;400;500;600;700&amp;display=swap"
      rel="stylesheet">
    <!-- fonts -->
    <link rel="stylesheet" type="text/css" href="assets/fonts/unicons/unicons.css">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="style.css">
  </head>

  <body>
    <div class="grow shrink-0">
      <?php include('./components/navbar.php') ?>
      <!-- /header -->
      <section class="wrapper !bg-[#edf2fc]">
        <div
          class="container !pt-10 !pb-36 xl:!pt-[4.5rem] lg:!pt-[4.5rem] md:!pt-[4.5rem] xl:!pb-40 lg:!pb-40 md:!pb-40 !text-center">
          <div class="flex flex-wrap mx-[-15px]">
            <div class="md:w-7/12 lg:w-6/12 xl:w-5/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
              <h1 class="text-[calc(1.365rem_+_1.38vw)] font-bold leading-[1.2] xl:text-[2.4rem] !mb-3">Business News
              </h1>
              <p class="lead lg:!px-[1.25rem] xl:!px-[1.25rem] xxl:!px-[2rem] leading-[1.65] text-[0.9rem] font-medium">
                Welcome to our journal. Here you can find the latest company news and business articles.</p>
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </section>
      <!-- /section -->
      <div class="wrapper !bg-[#ffffff]">
        <div class="container !pb-[4.5rem] xl:!pb-24 lg:!pb-24 md:!pb-24">
          <div class="flex flex-wrap mx-[-15px]">
            <div class="xl:w-10/12 lg:w-10/12 w-full flex-[0_0_auto] px-[15px] max-w-full !mx-auto">
              
              <!-- /.blog -->
              <div class="blog itemgrid grid-view py-3">
                <div
                  class="flex flex-wrap mx-[-15px] isotope xl:mx-[-20px] lg:mx-[-20px] md:mx-[-20px] mt-[-40px] !mb-8">

                  <?php
                  
                  $select = mysqli_query($connection, "SELECT post.*,   count(comment.id)as totalcomment FROM  post,comment WHERE  comment.post = post.id");
                    while($row = mysqli_fetch_assoc($select)){?>
                    <article
                    class="item post xl:w-6/12 lg:w-6/12 md:w-6/12 w-full flex-[0_0_auto] xl:px-[20px] lg:px-[20px] md:px-[20px] mt-[40px] px-[15px] max-w-full">
                    <div class="card">
                      <figure class="card-img-top overlay overlay-1 hover-scale group"><a href="post.php?post_id=<?php echo $row['id'] ?>"> <img
                            class="!transition-all !duration-[0.35s] !ease-in-out group-hover:scale-105"
                            src="assets/img/photos/b4.jpg" alt="image"></a>
                        <figcaption
                          class="group-hover:opacity-100 absolute w-full h-full opacity-0 text-center px-4 py-3 inset-0 z-[5] pointer-events-none p-2">
                          <h5 class="from-top  !mb-0 absolute w-full translate-y-[-80%] p-[.75rem_1rem] left-0 top-2/4">
                            Read More</h5>
                        </figcaption>
                      </figure>
                      <div
                        class="card-body flex-[1_1_auto] p-[40px] xl:p-[1.75rem_1.75rem_1rem_1.75rem] lg:p-[1.75rem_1.75rem_1rem_1.75rem] md:p-[1.75rem_1.75rem_1rem_1.75rem] sm:pb-4 xsm:pb-4  ">
                        <div class="post-header !mb-[.9rem]">
                          <div
                            class="inline-flex mb-[.4rem] uppercase tracking-[0.02rem] text-[0.7rem] font-bold text-[#aab0bc] relative align-top pl-[1.4rem] before:content-[''] before:absolute before:inline-block before:translate-y-[-60%] before:w-3 before:h-[0.05rem] before:left-0 before:top-2/4 before:bg-[#3f78e0]">
                            <a href="#" class="hover" rel="category"><?php echo $row['writer'] ?></a>
                          </div>
                          <!-- /.post-category -->
                          <h2 class="post-title h3 !mt-1 !mb-3"><a class="text-[#343f52] hover:text-[#3f78e0]"
                              href="blog-post.html"><?php echo $row['header']  ?></a></h2>
                        </div>
                        <!-- /.post-header -->
                        <div class="!relative">
                          <p><?php echo substr($row['des'], 0, 30) . '...'  ?></p>
                        </div>
                        <!-- /.post-content -->
                      </div>
                      <!--/.card-body -->
                      <div
                        class="card-footer xl:p-[1.25rem_1.75rem_1.25rem] lg:p-[1.25rem_1.75rem_1.25rem] md:p-[1.25rem_1.75rem_1.25rem] p-[18px_40px]">
                        <ul class="text-[0.7rem] text-[#aab0bc] m-0 p-0 list-none flex  !mb-0">
                          <li class="post-date inline-block"><i
                              class="uil uil-calendar-alt pr-[0.2rem] align-[-.05rem] before:content-['\e9ba']"></i><span><?php echo $row['submission_date'] ?></span></li>
                          <li
                            class="post-comments inline-block before:content-[''] before:inline-block before:w-[0.2rem] before:h-[0.2rem] before:opacity-50 before:m-[0_.6rem_0] before:rounded-[100%] before:align-[.15rem] before:bg-[#aab0bc]">
                            <a class="text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]" href="#"><i
                                class="uil uil-comment pr-[0.2rem] align-[-.05rem] before:content-['\ea54']"></i><?php echo $row['totalcomment'] ?></a>
                          </li>
                          <li class="post-likes !ml-auto inline-block"><a
                              class="text-[#aab0bc] hover:text-[#3f78e0] hover:border-[#3f78e0]" href="#"><i
                                class="uil uil-heart-alt pr-[0.2rem] align-[-.05rem] before:content-['\eb60']"></i>5</a>
                          </li>
                        </ul>
                        <!-- /.post-meta -->
                      </div>
                      <!-- /.card-footer -->
                    </div>
                    <!-- /.card -->
                  </article>

                    <?php }
                  
                  
                  ?>
                  
                  
                  
                </div>
                <!-- /.row -->
              </div>
              <!-- /.blog -->
              <nav hidden class="flex" aria-label="pagination">
                <ul class="pagination">
                  <li class="page-item disabled">
                    <a class="page-link" href="#" aria-label="Previous">
                      <span aria-hidden="true"><i class="uil uil-arrow-left before:content-['\e949']"></i></span>
                    </a>
                  </li>
                  <li class="page-item active"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item">
                    <a class="page-link" href="#" aria-label="Next">
                      <span aria-hidden="true"><i class="uil uil-arrow-right before:content-['\e94c']"></i></span>
                    </a>
                  </li>
                </ul>
                <!-- /.pagination -->
              </nav>
              <!-- /nav -->
            </div>
            <!-- /column -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.container -->
      </div>
      <!-- /section -->
    </div>
    <!-- /.content-wrapper -->
    <?php include('./components/footer.php') ?>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/theme.js"></script>
  </body>


</html>