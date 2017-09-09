<?php
/*
Template Name:内容页
*/

get_header(); ?>
  <style type="text/css">
    .shell {
      margin-right: auto;
      margin-left: auto;
      padding-left: 15px;
      padding-right: 15px;
      min-width: 300px;
      max-width: 480px;
    }
    .shell img{max-width:100%;height:auto !important}

    @media (min-width: 768px) {
      .shell {
        max-width: 750px;
      }
    }

    @media (min-width: 992px) {
      .shell {
        max-width: 970px;
      }
    }

    @media (min-width: 1200px) {
      .shell {
        max-width: 1200px;
      }
    }
    .heading-divider {
  padding-bottom: 16px;
  border-bottom: 1px solid rgba(0, 0, 0, 0.3);
}

@media (min-width: 992px) {
  .heading-divider {
    padding-bottom: 34px;
  }
}

.heading-divider-wide {
  max-width: none;
}
    .post-blog {
  position: relative;
  line-height:30px;
  margin:30px auto 10px;
}
.post-blog .thumbnailImages{text-align: center;margin:20px auto;}

.post-blog p img{max-width:100%;height:auto !important;}

.post-blog img + .heading-divider {
  margin-top: 20px;
  margin-bottom: 23px;
  padding-bottom: 22px;
  max-width: none;
}

@media (min-width: 768px) {
  .post-blog img + .heading-divider {
    margin-top: 42px;
    padding-right: 180px;
  }
}

.post-blog-comments-count {
  position: absolute;
  right: 0;
  width: 115px;
  height: 115px;
  line-height: 109px;
  font-size: 20px;
  text-align: center;
  background-color: #ededed;
  transform: translate(-19%, -70%);
  font-weight: 500;
  display: none;
}

@media (min-width: 768px) {
  .post-blog-comments-count {
    display: inline-block;
  }
}

.post-blog-comments-count:after {
  font-family: "fl-continuous";
  content: '\e011';
  font-size: 100px;
  transform: translate(-57%, 3%);
  position: absolute;
}

.post-blog-meta {
  margin-top: 4px;
  margin-bottom: 18px;
}

@media (min-width: 768px) {
  .post-blog-meta {
    margin-top: 20px;
    margin-bottom: 30px;
  }
}

.post-blog-meta a:hover {
  text-decoration: underline;
}

.post-blog-author {
  padding-top: 3.6%;
  padding-left: 3.4%;
  padding-right: 7%;
  padding-bottom: 4.7%;
  border: 1px solid #b4b5b5;
}

.post-blog-author .icon-lg {
  font-size: 100px;
}

.post-blog-author .post-blog-author-name {
  margin-top: 9px;
}

.post-blog-author-meta {
  margin-top: 14px;
  margin-bottom: 30px;
}

.post-blog-comment {
  padding-top: 3.6%;
  padding-left: 3.4%;
  padding-right: 6%;
  padding-bottom: 4.7%;
  border: 1px solid #b4b5b5;
}

.post-blog-comment .icon-lg {
  margin-top: -10px;
  font-size: 100px;
}

.post-blog-comment .post-blog-comment-author {
  margin-top: 19px;
}

.post-blog-comment .post-blog-comment-reply {
  margin-top: 20px;
}

.post-blog-comment-meta {
  margin-top: 14px;
  margin-bottom: 30px;
}

.post-blog .form-control + .form-control {
  margin-top: 8px;
}

.post-blog .form-control + .btn {
  margin-top: 54px;
}

.post-blog textarea.form-control {
  height: 172px;
}

.post-blog + .post-blog {
  margin-top: 100px;
}

@media (min-width: 1200px) {
  .post-blog + .post-blog {
    margin-top: 182px;
  }
}
  </style>
    <section class="section-85 section-xl-top-182 section-xl-bottom-164">
          <div class="shell text-left">
            <div class="post-blog">
              <h4 class="heading-divider">
                <a href="javascript://"><?php echo $post->post_title; ?></a>
              </h4>
              <div class="thumbnailImages"> <?php the_post_thumbnail(); ?></div>
              <p><?php echo $post->post_content; ?></p>
            </div>
          </div>
        </section>
<?php get_footer(); ?>
