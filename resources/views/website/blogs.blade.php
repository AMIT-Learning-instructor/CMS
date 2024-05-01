@include('website.layout.header')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs">
      <div class="page-header d-flex align-items-center" style="background-image: url('');">
        <div class="container position-relative">
          <div class="row d-flex justify-content-center">
            <div class="col-lg-6 text-center">
              <h2>Blog</h2>
              <p>Odio et unde deleniti. Deserunt numquam exercitationem. Officiis quo odio sint voluptas consequatur ut a odio voluptatem. Sit dolorum debitis veritatis natus dolores. Quasi ratione sint. Sit quaerat ipsum dolorem.</p>
            </div>
          </div>
        </div>
      </div>
      <nav>
        <div class="container">
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Blog</li>
          </ol>
        </div>
      </nav>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row gy-4 posts-list">
          @foreach ($blogs as $blog )
          <div class="col-xl-4 col-md-6">
            <article>

              <div class="post-img">
                <img src="{{ $blog->get_image_url() }}" alt="" class="img-fluid">
              </div>

              <p class="post-category">{{ $blog->category->name }}</p>

              <h2 class="title">
                <a href="{{ route('website.blog',$blog->id) }}">{{ $blog->title }}</a>
              </h2>

             

            </article>
          </div><!-- End post list item -->

          @endforeach



      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

@include('website.layout.footer')