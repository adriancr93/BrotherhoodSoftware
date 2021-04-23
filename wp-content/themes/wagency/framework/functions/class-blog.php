<?php
/**
 * The class contain blog functions.
 */

class Atiframebuilder_Blog {

    public function __construct() {

        add_action( 'atiframebuilder_single_template', array( 'Atiframebuilder_Blog', 'single_template' ) );
        add_action( 'atiframebuilder_single_template_1', array( 'Atiframebuilder_Blog', 'single_template_1' ) );
        add_action( 'atiframebuilder_single_template_2', array( 'Atiframebuilder_Blog', 'single_template_2' ) );
        add_action( 'atiframebuilder_single_template_3', array( 'Atiframebuilder_Blog', 'single_template_3' ) );

        add_action( 'atiframebuilder_single_template_5', array( 'Atiframebuilder_Blog', 'single_template_5' ) );

	    add_action( 'atiframebuilder_archive_template', array( 'Atiframebuilder_Blog', 'archive_template' ) );
	    add_action( 'atiframebuilder_archive_template_1', array( 'Atiframebuilder_Blog', 'archive_template_1' ) );
	    add_action( 'atiframebuilder_archive_template_2', array( 'Atiframebuilder_Blog', 'archive_template_2' ) );
	    add_action( 'atiframebuilder_archive_template_3', array( 'Atiframebuilder_Blog', 'archive_template_3' ) );
	    add_action( 'atiframebuilder_archive_template_4', array( 'Atiframebuilder_Blog', 'archive_template_4' ) );
	    add_action( 'atiframebuilder_archive_template_5', array( 'Atiframebuilder_Blog', 'archive_template_5' ) );

	    add_action( 'atiframebuilder_comment_template', array( 'Atiframebuilder_Blog', 'comment_template' ) );

        add_action( 'atiframebuilder_blog_number_of_columns', array( 'Atiframebuilder_Blog', 'number_of_columns' ) );
        add_action( 'atiframebuilder_blog_thumb', array( 'Atiframebuilder_Blog', 'thumb_size' ) );

	    add_action( 'atiframebuilder_blog_entry_meta_header', array( 'Atiframebuilder_Blog', 'entry_meta_header' ) );
	    add_action( 'atiframebuilder_blog_entry_meta', array( 'Atiframebuilder_Blog', 'entry_meta' ) );
	    add_action( 'atiframebuilder_blog_entry_meta_2', array( 'Atiframebuilder_Blog', 'entry_meta_2' ) );

	    add_action( 'atiframebuilder_blog_read_more', array( 'Atiframebuilder_Blog', 'read_more' ) );

	    add_action( 'atiframebuilder_blog_tags', array( 'Atiframebuilder_Blog', 'tags' ) );
	    add_action( 'atiframebuilder_blog_share', array( 'Atiframebuilder_Blog', 'share' ) );
	    add_action( 'atiframebuilder_blog_share_2', array( 'Atiframebuilder_Blog', 'share_2' ) );

	    add_action( 'atiframebuilder_blog_post_nav', array( 'Atiframebuilder_Blog', 'post_nav' ) );
	    add_action( 'atiframebuilder_blog_post_nav_2', array( 'Atiframebuilder_Blog', 'post_nav_2' ) );
	    add_action( 'atiframebuilder_blog_post_author', array( 'Atiframebuilder_Blog', 'post_author' ) );
	    add_action( 'atiframebuilder_blog_post_author_2', array( 'Atiframebuilder_Blog', 'post_author_2' ) );

	    add_action( 'atiframebuilder_blog_show_postmore', array( 'Atiframebuilder_Blog', 'show_postmore' ) );
	    add_action( 'atiframebuilder_blog_show_postmore_2', array( 'Atiframebuilder_Blog', 'show_postmore2' ) );
	    add_action( 'atiframebuilder_blog_show_postmore_3', array( 'Atiframebuilder_Blog', 'show_postmore3' ) );
	    add_action( 'atiframebuilder_blog_show_postmore_4', array( 'Atiframebuilder_Blog', 'show_postmore4' ) );
	    add_action( 'atiframebuilder_blog_cat_list', array( 'Atiframebuilder_Blog', 'cat_list' ) );



	    add_action( 'atiframebuilder_get_post_content', array( 'Atiframebuilder_Blog', 'get_post_content' ) );
	    add_filter( 'atiframebuilder_get_tag', array( 'Atiframebuilder_Blog', 'get_tag' ) );
	    add_filter( 'atiframebuilder_get_tag_attrib', array( 'Atiframebuilder_Blog', 'get_tag_attrib' ) );
	    add_filter( 'atiframebuilder_get_post_iframe', array( 'Atiframebuilder_Blog', 'get_post_iframe' ) );
	    add_filter( 'atiframebuilder_show_layout', array( 'Atiframebuilder_Blog', 'show_layout' ) );
	    add_filter( 'atiframebuilder_get_embed_video_tag_name', array( 'Atiframebuilder_Blog', 'get_embed_video_tag_name' ) );
	    add_filter( 'atiframebuilder_array_get_first', array( 'Atiframebuilder_Blog', 'array_get_first' ) );
	    add_filter( 'atiframebuilder_filter_post_content', array( 'Atiframebuilder_Blog', 'filter_post_content' ) );
	    add_filter( 'atiframebuilder_author_links', array( $this, 'author_links' ) );
	    add_filter( 'atiframebuilder_author_links_2', array( $this, 'author_links_2' ) );
	    add_action( 'user_contactmethods', array( $this, 'author_links_fields' ), 10, 1 );
	    add_filter( 'excerpt_more', array( $this, 'new_excerpt_more' ) );


    }

    public static function single_template() {
        global $secretlab;

        if ( isset( $secretlab['single_template'] ) ) {
	        do_action( 'atiframebuilder_single_template_' . $secretlab['single_template'] );
        } else {
	        do_action( 'atiframebuilder_single_template_' . Atiframebuilder_Theme_Demo::DEFAULT_POST_THEMPLATE );
        }
    }

	public static function single_template_1() {
		echo '<div class="postbody">';
		do_action( 'atiframebuilder_header_single_post_heading' );
		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="entry-thumbnail">';
			the_post_thumbnail( 'atiframebuilder_long' );
			echo '</div>';
		}
		echo '<div class="entry-content">';
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				esc_attr__( 'Continue reading ', 'wagency' ), '<span class="meta-nav">&rarr;</span>',
				the_title( '<span class="screen-reader-text">', '</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'wagency' ) . '</span>',
				'after'       => '</div>', 'link_before' => '<span>', 'link_after'  => '</span>'
			)
		);
		do_action( 'atiframebuilder_blog_tags' );
		echo '</div>
        </div>';
		echo '<div class="postoddy">';
		do_action( 'atiframebuilder_blog_post_author' );
		do_action( 'atiframebuilder_blog_post_nav' );
		do_action( 'atiframebuilder_blog_show_postmore' );
		comments_template();
		echo '</div>';
	}

	public static function single_template_2() {
		global $post;
		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';
		$author ='<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a>';
		echo '<div class="postbody">';
		echo '<div class="meta">';
		echo '<div class="date"><label>'.esc_attr__( 'Date', 'wagency' ).'</label><span>'.get_the_date().'</span></div>';
		echo '<div class="author"><label>'.esc_attr__( 'Author', 'wagency' ).'</label><span>'.$author.'</span></div>';
		echo '<div class="cat"><label>'.esc_attr__( 'Category', 'wagency' ).'</label><span>'.get_the_category_list( '', 'single', $post->ID ).'</span></div>';
		echo '</div>';
		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="entry-thumbnail">';
			the_post_thumbnail( 'atiframebuilder_long650' );
			echo '<div class="over">';
			if ( 'standard' == $format ) {

			} elseif ( 'video' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/play.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'audio' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/volume.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'gallery' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/gallery.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'quote' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/quote.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'link' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/link.svg" alt="'.get_the_title().'"></div>';
			}
			echo '</div>';
			echo '</div>';
		}
		echo '<div class="entry-content">';
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				esc_attr__( 'Continue reading ', 'wagency' ), '<span class="meta-nav">&rarr;</span>',
				the_title( '<span class="screen-reader-text">', '</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'wagency' ) . '</span>',
				'after'       => '</div>', 'link_before' => '<span>', 'link_after'  => '</span>'
			)
		);
		echo '<div class="clearfix"></div>';
		do_action( 'atiframebuilder_blog_share' );
		do_action( 'atiframebuilder_blog_tags' );
		echo '</div>
        </div>';

		echo '<div class="postoddy">';
		do_action( 'atiframebuilder_blog_post_author' );
		do_action( 'atiframebuilder_blog_post_nav' );
		do_action( 'atiframebuilder_blog_show_postmore_2' );
		comments_template();
		echo '</div>';
	}

	public static function single_template_3() {
		echo '<div class="postbody">';
		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="entry-thumbnail">';
			the_post_thumbnail( 'atiframebuilder_long650' );
			echo '</div>';
		}

		echo '<div class="entry-header">';
		echo '<div class="entry-meta">';
		do_action( 'atiframebuilder_blog_entry_meta' );
		echo '</div>';
		do_action( 'atiframebuilder_layout_post_header' );
		echo '</div>';
		echo '<div class="entry-content">';
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				esc_attr__( 'Continue reading ', 'wagency' ), '<span class="meta-nav">&rarr;</span>',
				the_title( '<span class="screen-reader-text">', '</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'wagency' ) . '</span>',
				'after'       => '</div>', 'link_before' => '<span>', 'link_after'  => '</span>'
			)
		);
		echo '<div class="clearfix"></div>';
		do_action( 'atiframebuilder_blog_tags' );
		do_action( 'atiframebuilder_blog_share_2' );
		echo '</div>
        </div>';
		echo '<div class="postoddy">';
		do_action( 'atiframebuilder_blog_post_author_2' );
		do_action( 'atiframebuilder_blog_post_nav' );
		do_action( 'atiframebuilder_blog_show_postmore_3' );
		comments_template();
		echo '</div>';
	}

	public static function single_template_5() {
		echo '<div class="postbody">';
		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';

		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="entry-thumbnail">';
			echo '<span class="data">'.get_the_date('j').'<span>'.get_the_date('M').'</span></span>';
			echo get_the_post_thumbnail( '', 'atiframebuilder_long650' );
			echo '</div>';
		}
		echo '<div class="entry-header">';
		echo '<div class="entry-meta">';
		do_action( 'atiframebuilder_blog_entry_meta_2' );
		echo '</div>';
		do_action( 'atiframebuilder_layout_post_header' );
		echo '</div>';

		echo '<div class="entry-content">';
		/* translators: %s: Name of current post */
		the_content(
			sprintf(
				esc_attr__( 'Continue reading ', 'wagency' ), '<span class="meta-nav">&rarr;</span>',
				the_title( '<span class="screen-reader-text">', '</span>', false )
			)
		);

		wp_link_pages(
			array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . esc_attr__( 'Pages:', 'wagency' ) . '</span>',
				'after'       => '</div>', 'link_before' => '<span>', 'link_after'  => '</span>'
			)
		);
		echo '<div class="clearfix"></div>';
		
		do_action( 'atiframebuilder_blog_tags' );
		echo '</div>
        </div>';
		echo '<div class="postoddy">';
		do_action( 'atiframebuilder_blog_post_author_2' );
		do_action( 'atiframebuilder_blog_post_nav_2' );
		do_action( 'atiframebuilder_blog_show_postmore_4' );
		comments_template();
		echo '</div>';
	}

	public static function archive_template() {
		global $secretlab;
		if ( isset( $secretlab['archive_template'] ) ) {
			do_action( 'atiframebuilder_archive_template_' . $secretlab['archive_template'] );
		} else {
			do_action( 'atiframebuilder_archive_template_' . Atiframebuilder_Theme_Demo::DEFAULT_ARCHIVE_THEMPLATE );
		}
	}

	public static function archive_template_1() {
		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="thumb">';
			do_action( 'atiframebuilder_blog_thumb' );
			do_action( 'atiframebuilder_blog_cat_list' );
			echo '<div><a href="'.get_the_permalink().'" rel="bookmark"><img src="' . esc_url( get_template_directory_uri() ) . '/images/eye.svg" alt="'.esc_attr__( 'Full Post', 'wagency' ).'"></a></div></div>';
		}

        echo '<div class="c_block">
            <header class="entry-header">
                <h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>
                <div class="entry-meta">';
					do_action( 'atiframebuilder_blog_entry_meta' );
		echo '</div>
            </header><!-- .entry-header -->
            <div class="entry-content">';
				the_excerpt();
				do_action( 'atiframebuilder_blog_read_more' );

		echo '</div>
        </div>';
	}

	public static function archive_template_2() {
		global $post;
		$authorimg ='<span class="post-author">'.get_avatar( get_the_author_meta( 'user_email' ), 40 ).'  <a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a></span>';
		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';

		if ( has_post_thumbnail() && ! is_attachment() ) {
			echo '<div class="thumb">
                <a href="'.get_the_permalink().'" rel="bookmark"></a>';
			do_action( 'atiframebuilder_blog_thumb' );
			echo '<div class="over">';
			if ( 'standard' == $format ) {

            } elseif ( 'video' == $format ) {
                echo '<div><img src="'.get_template_directory_uri().'/images/play.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'audio' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/volume.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'gallery' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/gallery.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'quote' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/quote.svg" alt="'.get_the_title().'"></div>';
			} elseif ( 'link' == $format ) {
				echo '<div><img src="'.get_template_directory_uri().'/images/link.svg" alt="'.get_the_title().'"></div>';
			}
			echo '</div></div>';
		}

		echo '<div class="c_block">
            <header class="entry-header">';
		        do_action( 'atiframebuilder_blog_cat_list' );
		        echo '<h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>';
            echo '</header><!-- .entry-header -->
            <div class="entry-content">';
                echo wpautop( get_the_excerpt() );
                echo '<div class="entry-meta">'.$authorimg.'<span class="date">'.get_the_date().'</span></div>';
                do_action( 'atiframebuilder_blog_read_more' );
		echo '</div>
        </div>';


	}

	public static function archive_template_3() {
		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';
		if ( has_post_thumbnail() && ! is_attachment() && ('quote' != $format ) ) {
			echo '<div class="thumb">';
			echo get_the_post_thumbnail( '', 'atiframebuilder_long750' );
			do_action( 'atiframebuilder_blog_cat_list' );
			echo '<div class="thhov"><a href="'.get_the_permalink().'" rel="bookmark">';
			if ( 'video' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/play2.svg" alt="'.get_the_title().'"></span>';
			} elseif ( 'audio' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/audio.svg" alt="'.get_the_title().'"></span>';
			} elseif ( 'gallery' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/gallery2.svg" alt="'.get_the_title().'"></span>';
			}
			echo '</a></div>';
			echo '</div>';
		}
		if ( 'quote' == $format ) {
			echo '<div class="thumb">';
			do_action( 'atiframebuilder_blog_cat_list' );
			echo '</div>';
		}

		echo '<div class="c_block">
            <header class="entry-header">
                <h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>';
            echo '</header><!-- .entry-header -->
            <div class="entry-content">';
            if ( 'quote' == $format ) {
	            $quote = Atiframebuilder_Blog::get_tag(  get_the_content() , '<blockquote', '</blockquote>' );
	            if ( ! empty( $quote ) ) {
		            echo '<a href="'.get_the_permalink().'" rel="bookmark">'.$quote.'</a>';
	            } else {
		            echo '<a href="'.get_the_permalink().'" rel="bookmark">'.wpautop( get_the_excerpt() ).'</a>';
	            }
            }else {
	            echo wpautop( get_the_excerpt() );
            }

            echo '<div class="entry-meta">';
            do_action( 'atiframebuilder_blog_entry_meta' );
            echo '</div>';
            do_action( 'atiframebuilder_blog_read_more' );

            echo '</div>';
            if( is_sticky() && !is_category() ){
                echo '<svg x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;">
<g>
	<g>
		<path d="M346.991,149.886l-21.508-21.509l-176.36,176.355c-21.903,21.903-21.903,57.543,0,79.447
			c21.903,21.904,57.543,21.904,79.447,0L465.422,147.32c16.3-16.3,25.277-37.971,25.277-61.022s-8.977-44.722-25.277-61.022
			C449.123,8.977,427.451,0,404.4,0c-23.052,0-44.723,8.977-61.022,25.277L55.401,313.254c-21.99,21.99-34.1,51.226-34.1,82.323
			c0,31.098,12.11,60.333,34.1,82.323c21.99,21.99,51.226,34.1,82.323,34.1s60.333-12.11,82.323-34.1l227.479-227.48l-21.508-21.508
			l-227.479,227.48c-16.245,16.245-37.842,25.19-60.815,25.19c-22.973,0-44.57-8.946-60.815-25.19
			c-16.245-16.245-25.19-37.842-25.19-60.815c0-22.973,8.947-44.571,25.19-60.815L364.887,46.785
			c21.788-21.787,57.24-21.787,79.028,0c21.788,21.788,21.788,57.24,0,79.028L207.063,362.67c-10.044,10.044-26.387,10.044-36.431,0
			s-10.044-26.387,0-36.431L346.991,149.886z"/>
	</g>
</g>
</svg>';
            }
        echo '</div>';
	}

	public static function archive_template_4() {
        global $secretlab;
		$format = get_post_format();
		if ( false === $format )
			$format = 'standard';
		if ( has_post_thumbnail() && ! is_attachment() && ('quote' != $format ) ) {
			echo '<div class="thumb">';
			echo get_the_post_thumbnail( '', 'atiframebuilder_long650' );
			echo '<div class="thhov"><a href="'.get_the_permalink().'" rel="bookmark">';
			if ( 'video' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/play3.svg" alt="'.get_the_title().'"></span>';
			} elseif ( 'audio' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/audio2.svg" alt="'.get_the_title().'"></span>';
			} elseif ( 'gallery' == $format ) {
				echo '<span><img src="'.get_template_directory_uri().'/images/gallery3.svg" alt="'.get_the_title().'"></span>';
			}
			if( is_sticky() && !is_category() ){
				echo '<span><img src="'.get_template_directory_uri().'/images/clip2.svg" alt="'.get_the_title().'"></span>';
			}
			echo '</a></div>';
			echo '</div>';
		}


		echo '<div class="c_block">';
		echo '<div class="entry-meta">';
		do_action( 'atiframebuilder_blog_entry_meta' );
		echo '</div>';
		echo '<header class="entry-header">
                <h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>';
		echo '</header>';


		echo '<div class="entry-content">';
		if ( 'quote' == $format ) {
			$quote = Atiframebuilder_Blog::get_tag(  get_the_content() , '<blockquote', '</blockquote>' );
			if ( ! empty( $quote ) ) {
				echo '<a href="'.get_the_permalink().'" rel="bookmark">'.$quote.'</a>';
			} else {
				echo '<a href="'.get_the_permalink().'" rel="bookmark">'.wpautop( get_the_excerpt() ).'</a>';
			}
		}else {
			echo wpautop( get_the_excerpt() );
		}


		if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
			$sl_s_r = isset( $secretlab['show_read_more'] ) ? $secretlab['show_read_more'] : '1';
			if ( '1' === $sl_s_r ) {
				if ( ! empty( $secretlab['read_more_text'] ) ) {
					echo '<a href="', get_the_permalink(  ), '" rel="bookmark" class="more">', esc_html( $secretlab['read_more_text'] ), '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 404.258 404.258" style="enable-background:new 0 0 404.258 404.258; width:10px; height:10px" xml:space="preserve"><polygon points="138.331,0 114.331,18 252.427,202.129 114.331,386.258 138.331,404.258 289.927,202.129 "/></svg></a>';
				}
			}
		} else {
			echo '<a href="' , get_the_permalink(  ) , '" rel="bookmark" class="more">' , esc_html__( 'Read more', 'wagency' ) , '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 404.258 404.258" style="enable-background:new 0 0 404.258 404.258; width:10px; height:10px" xml:space="preserve"><polygon points="138.331,0 114.331,18 252.427,202.129 114.331,386.258 138.331,404.258 289.927,202.129 "/></svg></a>';
		}

		echo '</div>';

		echo '</div>';
	}

    public static function archive_template_5() {
        global $secretlab;
        $format = get_post_format();
        if ( false === $format )
            $format = 'standard';
        echo '<div class="postc">';


            if ( has_post_thumbnail() && ! is_attachment() && ('quote' != $format ) ) {
                echo '<div class="thumb">';
                echo '<span class="data">'.get_the_date('j').'<span>'.get_the_date('M').'</span></span>';
                echo get_the_post_thumbnail( '', 'atiframebuilder_long650' );
                echo '<div class="thhov"><a href="'.get_the_permalink().'" rel="bookmark">';
                if( is_sticky() && !is_category() ){
                    echo '<span></span>';
                }
                echo '<span>+</span>';
                echo '</a></div>';
                echo '</div>';
            }

        echo '<div class="c_block">';
        echo '<div class="entry-meta">';
        do_action( 'atiframebuilder_blog_entry_meta_2' );
        echo '</div>';
        echo '<header class="entry-header">
                    <h3 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h3>';
        echo '</header>';

        echo '<div class="entry-content">';

        if ( 'quote' == $format ) {
            $quote = Atiframebuilder_Blog::get_tag(  get_the_content() , '<blockquote', '</blockquote>' );
            if ( ! empty( $quote ) ) {
                echo '<a href="'.get_the_permalink().'" rel="bookmark">'.$quote.'</a>';
            } else {
                echo '<a href="'.get_the_permalink().'" rel="bookmark">'.wpautop( get_the_excerpt() ).'</a>';
            }
        }elseif ( 'audio' == $format ) {
            $aud = Atiframebuilder_Blog::get_tag(  get_the_content() , '<audio', '</audio>' );
            if ( ! empty( $aud ) ) {
                echo '<p>'.$aud.'</p>';
            } else {
                echo '<p>'.wpautop( get_the_excerpt() ).'</p>';
            }
        }else {
            echo wpautop( get_the_excerpt() );
        }


        if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
            $sl_s_r = isset( $secretlab['show_read_more'] ) ? $secretlab['show_read_more'] : '1';
            if ( '1' === $sl_s_r ) {
                if ( ! empty( $secretlab['read_more_text'] ) ) {
                    echo '<a href="', get_the_permalink(  ), '" rel="bookmark" class="more">', esc_html( $secretlab['read_more_text'] ), '</a>';
                }
            }
        } else {
            echo '<a href="' , get_the_permalink(  ) , '" rel="bookmark" class="more">' , esc_html__( 'Read more', 'wagency' ) , '</a>';
        }

        
        echo '</div>';
        echo '</div>';

        echo '</div>';
    }

public static function comment_template() {
	global $secretlab;
	
	if ( empty( $secretlab['comment_template'] ) ) {
		
		$method = 'update_comments_fields_' . Atiframebuilder_Theme_Demo::DEFAULT_COMMENT_THEMPLATE;
	} else {
		$method = 'update_comments_fields_' . $secretlab['comment_template'];
	}
	if ( method_exists( 'Atiframebuilder_Blog', $method ) ) {
		$args = self::$method();
		comment_form( $args );
	} else {
		comment_form();
	}
}

// Comment form fields update: add placeholders
public static function update_comments_fields_1() {
	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . esc_attr__( '(optional)', 'wagency' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$args = array(
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Comment', 'wagency' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_attr__( 'Enter comment here...', 'wagency' ) . '"></textarea></p>',

		'fields' => apply_filters( 'comment_form_default_fields', array(

				'author' => '<p class="comment-form-author">
                        <label for="author">' . esc_attr__( "Name", 'wagency' ) . $label . '</label>
                        <input id="author" name="author" type="text" placeholder="' . esc_attr__( "Your Name", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
				            '" size="30" ' . $aria_req . ' />
                    </p>',
				'email' => '<p class="comment-form-email">
                        <label for="email">' . esc_attr__( "Email", 'wagency' ) . $label . '</label>
                        <input id="email" name="email" type="email" placeholder="' . esc_attr__( "Your E-mail", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
				           '" size="30" ' . $aria_req . ' />
                    </p>',
				'url' => '<p class="comment-form-url">
                        <label for="url">' . esc_attr__( "Website", 'wagency' ) . '</label>
                        <input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Your Website", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
				         '" size="30" />
                        </p>'
			)
		),

	);
	return $args;
}

public static function update_comments_fields_2() {

	add_filter('comment_form_fields',  function( $fields ){

		$fields = array_replace( array_flip( array('author','email','comment',) ), $fields );

		return $fields;
	}, 999 );

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . esc_attr__( '(optional)', 'wagency' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$args = array(
		'class_form'           => 'comment-form cf2',
		'comment_notes_before'           => '',
		'comment_notes_after'           => '',
		'title_reply_before'           => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'           => '</h3>',

		'fields' => apply_filters( 'comment_form_default_fields', array(
				'author' =>
					'<p class="comment-form-author">
                        <label for="author">' . esc_attr__( "Name", 'wagency' ) . $label . '</label>
                        <input id="author" name="author" type="text" placeholder="' . esc_attr__( "Your Name", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30" ' . $aria_req . ' />
                    </p>',
				'email' =>
					'<p class="comment-form-email">
                        <label for="email">' . esc_attr__( "Email", 'wagency' ) . $label . '</label>
                        <input id="email" name="email" type="email" placeholder="' . esc_attr__( "Your E-mail", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30" ' . $aria_req . ' />
                    </p>',
			)
		),
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Comment', 'wagency' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_attr__( 'Enter comment here...', 'wagency' ) . '"></textarea></p>',

	);

	return $args;
}


public static function update_comments_fields_3() {
	add_filter('comment_form_fields',  function( $fields ){

		$fields = array_replace( array_flip( array('author','email','url','comment',) ), $fields );

		return $fields;
	}, 999 );

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . esc_attr__( '(optional)', 'wagency' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$args = array(
		'class_form'           => 'comment-form cf3',
		'comment_notes_before'           => '',
		'comment_notes_after'           => '',
		'title_reply_before'           => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'           => '</h3>',

		'fields' => apply_filters( 'comment_form_default_fields', array(
				'author' =>
					'<p class="comment-form-author">
                        <label for="author">' . esc_attr__( "Name", 'wagency' ) . $label . '</label>
                        <input id="author" name="author" type="text" placeholder="' . esc_attr__( "Your Name", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30" ' . $aria_req . ' />
                    </p>',
				'email' =>
					'<p class="comment-form-email">
                        <label for="email">' . esc_attr__( "Email", 'wagency' ) . $label . '</label>
                        <input id="email" name="email" type="email" placeholder="' . esc_attr__( "Your E-mail", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30" ' . $aria_req . ' />
                    </p>',
				'url' => '<p class="comment-form-url">
                        <label for="url">' . esc_attr__( "Website", 'wagency' ) . '</label>
                        <input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Your Website", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
				         '" size="30" />
                        </p>'
			)
		),
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Comment', 'wagency' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_attr__( 'Enter comment here...', 'wagency' ) . '"></textarea></p>',

	);

	return $args;
}

public static function update_comments_fields_4() {
	add_filter('comment_form_fields',  function( $fields ){

		$fields = array_replace( array_flip( array('author','email','url','comment',) ), $fields );

		return $fields;
	}, 999 );

	$commenter = wp_get_current_commenter();
	$req       = get_option( 'require_name_email' );
	$label     = $req ? '*' : ' ' . esc_attr__( '(optional)', 'wagency' );
	$aria_req  = $req ? "aria-required='true'" : '';

	$args = array(
		'class_form'           => 'comment-form cf3',
		'comment_notes_before'           => '',
		'comment_notes_after'           => '',
		'title_reply_before'           => '<h3 id="reply-title" class="comment-reply-title">',
		'title_reply_after'           => '</h3>',

		'fields' => apply_filters( 'comment_form_default_fields', array(
				'author' =>
					'<p class="comment-form-author">
                        <label for="author">' . esc_attr__( "Name", 'wagency' ) . $label . '</label>
                        <input id="author" name="author" type="text" placeholder="' . esc_attr__( "Your Name", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author'] ) .
					'" size="30" ' . $aria_req . ' />
                    </p>',
				'email' =>
					'<p class="comment-form-email">
                        <label for="email">' . esc_attr__( "Email", 'wagency' ) . $label . '</label>
                        <input id="email" name="email" type="email" placeholder="' . esc_attr__( "Your E-mail", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author_email'] ) .
					'" size="30" ' . $aria_req . ' />
                    </p>',
				'url' => '<p class="comment-form-url">
                        <label for="url">' . esc_attr__( "Website", 'wagency' ) . '</label>
                        <input id="url" name="url" type="url"  placeholder="' . esc_attr__( "Your Website", 'wagency' ) . '" value="' . esc_attr( $commenter['comment_author_url'] ) .
				         '" size="30" />
                        </p>'
			)
		),
		'comment_field' => '<p class="comment-form-comment"><label for="comment">' . esc_html__( 'Comment', 'wagency' ) . '</label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" placeholder="' . esc_attr__( 'Enter comment here...', 'wagency' ) . '"></textarea></p>',

	);

	return $args;
}


public static function show_postmore() {
        global $secretlab;
        if ( isset( $secretlab['is_related_posts'] ) ) {
            if ( '1' === $secretlab['is_related_posts'] ) {
                self::postmore_query();
            }
        } else {
	        self::postmore_query();
        }
    }

	public static function show_postmore2() {
		global $secretlab;
		if ( isset( $secretlab['is_related_posts'] ) ) {
			if ( '1' === $secretlab['is_related_posts'] ) {
				self::postmore_query2();
			}
		} else {
			self::postmore_query2();
		}
	}

	public static function show_postmore3() {
		global $secretlab;
		if ( isset( $secretlab['is_related_posts'] ) ) {
			if ( '1' === $secretlab['is_related_posts'] ) {
				self::postmore_query3();
			}
		} else {
			self::postmore_query3();
		}
	}

public static function show_postmore4() {
	global $secretlab;
	if ( isset( $secretlab['is_related_posts'] ) ) {
		if ( '1' === $secretlab['is_related_posts'] ) {
			self::postmore_query4();
		}
	} else {
		self::postmore_query4();
	}
}

	public static function post_author() {
		global $secretlab;
		$user_description = get_the_author_meta( 'description' );
		if (!empty($user_description)) {
			if ( isset( $secretlab['show_post_author'] ) ) {
				if ( '1' === $secretlab['show_post_author'] ) {
					echo '<div class="author_info vcard" itemprop="author" itemscope="" itemtype="//schema.org/Person">

                    <div class="author_avatar" itemprop="image">' . get_avatar( get_the_author_meta( 'user_email' ), 150 ) . '</div>
                
                    <div class="author_description">
                        <h5 class="author_title" itemprop="name">' . get_the_author() . '</h5>
                
                        <div class="author_bio" itemprop="description">
                            <p>' . $user_description . '</p>
                            <a class="author_link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author">' . esc_html__( 'View all posts by', 'wagency' ) . ' <span class="author_name">' . get_the_author() . '</span></a>
                            <div class="entry-meta author_links">';
					do_action( 'atiframebuilder_author_links' );
					echo '</div></div>
                    </div>
                </div>';
				}
			} else {

			}
		}
	}

	public static function post_author_2() {
		global $secretlab;
		$user_description = get_the_author_meta( 'description' );
		if (!empty($user_description)) {
			if ( isset( $secretlab['show_post_author'] ) ) {
				if ( '1' === $secretlab['show_post_author'] ) {
					echo '<div class="author_info vcard" itemscope="" itemtype="https://schema.org/Person">

                    <div class="author_avatar" itemprop="image">' . get_avatar( get_the_author_meta( 'user_email' ), 150 ) . '</div>
                
                    <div class="author_description">
                        <h5 class="author_title" itemprop="name">' . get_the_author() . '</h5>
                
                        <div class="author_bio" itemprop="description">
                            <p>' . $user_description . '</p>
                            
                            <div class="entry-meta author_links">';
					do_action( 'atiframebuilder_author_links_2' );
					echo '</div>
                    <a class="author_link" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '" rel="author"><i><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve"><g><g><path d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788C492,219.198,479.172,207.418,464.344,207.418z"/></g></g></svg></i> <span>' . esc_html__( 'Read more', 'wagency' ) . '</span></a>';

					echo '</div>
                    </div>
                </div>';
				}
			}
		}
	}

	public static function cat_list() {
		global $post, $secretlab;
		// Categories: used between list items, there is a space after the comma.
		if ( isset( $secretlab['show_post_category'] ) ) {
			if ( '0' != $secretlab['show_post_category'] ) {
				echo get_the_category_list( '', 'multiple', $post->ID );
			}
		} else {
			echo get_the_category_list( '', 'multiple', $post->ID );
		}
	}

    public static function postmore_query() {
        global $post, $secretlab;
	    $rmore = '';
	    if ( ! empty( $secretlab['read_more_related'] ) ) { $rmore = $secretlab['read_more_related'];}
	    $backup = $post;
        $tags   = wp_get_post_tags( $post->ID );
        if ( $tags ) {
            $tag_ids = array();
            foreach ( $tags as $individual_tag ) {
                $tag_ids[] = $individual_tag->term_id;
            }

            $args     = array(
                'tag__in'      => $tag_ids,
                'post__not_in' => array( $post->ID ),
                'showposts'    =>3, // Number of related posts that will be shown.
            );
            $my_query = new WP_Query( $args );
            if( $my_query->have_posts() ) {
                echo '<div class="related">';
                if ( !empty( $secretlab['related_posts_title'] ) ) {
	                echo '<h2>' . esc_html( $secretlab['related_posts_title'] ) . '</h2>';
                }

                while ( $my_query->have_posts() ) {
                    $my_query->the_post();
	                echo '<div class="rblock">
                        <div class="thumb">';
                                if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                    the_post_thumbnail( 'atiframebuilder_rectangle' );
                                }
                                if (isset($secretlab['show_post_category'])) {
	                                if ( '1' === $secretlab['show_post_category'] ) {
		                                echo get_the_category_list( '', 'single', $post->ID );
	                                }
                                }

                            echo '<div><a href="'.get_the_permalink().'" rel="bookmark"><img src="' . esc_url( get_template_directory_uri() ) . '/images/eye.svg" alt="'.esc_attr__( 'Full Post', 'wagency' ).'"></a></div>
                        </div>
                        <div class="wr"><h5><a href="' , get_the_permalink() , '" title="' , get_the_title() , '">' , get_the_title() , '</a></h5>
<div class="descr">'.get_the_excerpt().'</div>
                        <div class="entry-meta"><span class="date"><i></i> ' , get_the_date() , '</span></div>';

				    echo '<a href="', get_the_permalink(), '" rel="bookmark" class="rmore">', esc_html( $rmore ), '</a>';

	                echo '
                        </div>
                    </div>';
                }
                echo '</div>';
            }
        }
        $post = $backup;
        wp_reset_postdata();
    }

	public static function postmore_query2() {
		global $post, $secretlab;
		$rmore = '';
		$authorimg ='<span class="post-author">'.get_avatar( get_the_author_meta( 'user_email' ), 40 ).'  <a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a></span>';
		if ( ! empty( $secretlab['read_more_related'] ) ) { $rmore = $secretlab['read_more_related'];}
		$backup = $post;
		$tags   = wp_get_post_tags( $post->ID );
		if ( $tags ) {
			$tag_ids = array();
			foreach ( $tags as $individual_tag ) {
				$tag_ids[] = $individual_tag->term_id;
			}

			$args     = array(
				'tag__in'      => $tag_ids,
				'post__not_in' => array( $post->ID ),
				'showposts'    =>2, // Number of related posts that will be shown.
			);
			$my_query = new WP_Query( $args );
			if( $my_query->have_posts() ) {
				echo '<div class="related layout2">';
				if ( !empty( $secretlab['related_posts_title'] ) ) {
					echo '<div class="may"><span>'.esc_attr__( 'May also like', 'wagency' ).'</span></div>';
					echo '<h2>' . esc_html( $secretlab['related_posts_title'] ) . '</h2>';
				}

				while ( $my_query->have_posts() ) {
					$my_query->the_post();
					$format = get_post_format();
					if ( false === $format )
						$format = 'standard';
					echo '<div class="rblock">';
					if ( has_post_thumbnail() ) {
					echo '<div class="thumb"><a href="'.get_the_permalink().'" rel="bookmark"></a>';

						the_post_thumbnail( 'atiframebuilder_rectangle_450' );

						echo '<div class="over">';
						if ( 'standard' == $format ) {

						} elseif ( 'video' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/play.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'audio' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/volume.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'gallery' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/gallery.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'quote' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/quote.svg" alt="'.get_the_title().'"></div>';
						} elseif ( 'link' == $format ) {
							echo '<div><img src="'.get_template_directory_uri().'/images/link.svg" alt="'.get_the_title().'"></div>';
						}
						echo '</div>';
						echo '</div>';
					}



                        echo '<div class="wr">';
					        echo get_the_category_list( '', 'single', $post->ID );
		                    echo '<h5 class="entry-title"><a href="'.get_the_permalink().'" rel="bookmark">'.get_the_title().'</a></h5>';
                            echo '<div class="entry-content">';
                            echo wpautop( get_the_excerpt() );
                            echo '<div class="entry-meta">'.$authorimg.'<span class="date">'.get_the_date().'</span></div>';
					        echo '<a href="', get_the_permalink(), '" rel="bookmark" class="rmore">', esc_html( $rmore ), '</a>';
					        echo '</div>
                        </div>
                    </div>';
				}
				echo '</div>';
			}
		}
		$post = $backup;
		wp_reset_postdata();
	}

	public static function postmore_query3() {
		global $post, $secretlab;
		$rmore = '';
		if ( ! empty( $secretlab['read_more_related'] ) ) { $rmore = $secretlab['read_more_related'];}
		$backup = $post;
		$tags   = wp_get_post_tags( $post->ID );
		if ( $tags ) {
			$tag_ids = array();
			foreach ( $tags as $individual_tag ) {
				$tag_ids[] = $individual_tag->term_id;
			}

			$args     = array(
				'tag__in'      => $tag_ids,
				'post__not_in' => array( $post->ID ),
				'showposts'    =>2, // Number of related posts that will be shown.
			);
			$my_query = new WP_Query( $args );
			if( $my_query->have_posts() ) {
				echo '<div class="related">';
				if ( !empty( $secretlab['related_posts_title'] ) ) {
					echo '<h2>' . esc_html( $secretlab['related_posts_title'] ) . '</h2>';
				}

				while ( $my_query->have_posts() ) {
					$my_query->the_post();
					echo '<div class="rblock">
                        <div class="thumb">';
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail( 'atiframebuilder_rectangle' );
					}

					echo '<div><a href="'.get_the_permalink().'" rel="bookmark"></a></div>
                        </div>
                        <div class="wr">
                        <div class="entry-meta"><span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr__('View all posts by', 'wagency').get_the_author().'" rel="author">'.get_the_author().'</a></span><span class="date"><i></i> ' , get_the_date() , '</span><span class="comments-link"><i></i> <a href="'.get_comments_link().'">'.get_comments_number_text( esc_attr__('Comments(0)', 'wagency'), esc_attr__('Comments(1)', 'wagency'), esc_attr__('Comments(%)', 'wagency'), '' ).'</a></span></div>
                        <h5><a href="' , get_the_permalink() , '" title="' , get_the_title() , '">' , get_the_title() , '</a></h5>
<div class="descr">'.get_the_excerpt().'</div>
                     ';

					echo '<a href="', get_the_permalink(), '" rel="bookmark" class="rmore">', esc_html( $rmore ), '</a>';

					echo '
                        </div>
                    </div>';
				}
				echo '</div>';
			}
		}
		$post = $backup;
		wp_reset_postdata();
	}

	public static function postmore_query4() {
		global $post, $secretlab;
		$rmore = '';
		if ( ! empty( $secretlab['read_more_related'] ) ) { $rmore = $secretlab['read_more_related'];}
		$backup = $post;
		$tags   = wp_get_post_tags( $post->ID );
		if ( $tags ) {
			$tag_ids = array();
			foreach ( $tags as $individual_tag ) {
				$tag_ids[] = $individual_tag->term_id;
			}

			$args     = array(
				'tag__in'      => $tag_ids,
				'post__not_in' => array( $post->ID ),
				'showposts'    =>2, // Number of related posts that will be shown.
			);
			$my_query = new WP_Query( $args );
			if( $my_query->have_posts() ) {
				echo '<div class="related">';
				if ( !empty( $secretlab['related_posts_title'] ) ) {
					echo '<h2>' . esc_html( $secretlab['related_posts_title'] ) . '</h2>';
				}

				while ( $my_query->have_posts() ) {
					$my_query->the_post();
					echo '<div class="rblock">';
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
                                   echo '<div class="thumb">';
					echo '<span class="data">'.get_the_date('j').'<span>'.get_the_date('M').'</span></span>';
					echo get_the_post_thumbnail( '', 'atiframebuilder_rectangle' );
					echo '<div class="thhov"><a href="'.get_the_permalink().'" rel="bookmark">';
					echo '<span>+</span>';
					echo '</a></div>';
					echo '</div>'; 
                                }
					

                        echo '<div class="wr">
                        <div class="entry-meta">';
					do_action( 'atiframebuilder_blog_entry_meta_2' );
                        echo '</div>
                        <h5><a href="' , get_the_permalink() , '" title="' , get_the_title() , '">' , get_the_title() , '</a></h5>
                        <div class="descr">'.get_the_excerpt().'</div>
                     ';

					echo '<a href="', get_the_permalink(), '" rel="bookmark" class="rmore">', esc_html( $rmore ), '</a>';

					echo '
                        </div>
                    </div>';
				}
				echo '</div>';
			}
		}
		$post = $backup;
		wp_reset_postdata();
	}

    // Read more link for post feed
    public static function read_more() {
        global $post, $secretlab;

	    if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
		    $sl_s_r = isset( $secretlab['show_read_more'] ) ? $secretlab['show_read_more'] : '1';
		    if ( '1' === $sl_s_r ) {
			    if ( ! empty( $secretlab['read_more_text'] ) ) {
				    echo '<a href="', get_the_permalink( $post ), '" rel="bookmark" class="more">', esc_html( $secretlab['read_more_text'] ), '</a>';
			    }
		    }
	    } else {
		    echo '<a href="' , get_the_permalink( $post ) , '" rel="bookmark" class="more">' , esc_html__( 'Read more', 'wagency' ) , '</a>';
	    }
    }

    /**
     * Print HTML with meta information for current post: categories, comments counter, author, and date.
     *
     * Create your own entry_meta() to override in a child theme.
     *
    */
    public static function entry_meta_header() {
        global $secretlab;

        // Post author
        if ( isset( $secretlab['show_post_author'] ) ) {
            if ( '0' !=$secretlab['show_post_author'] ) {
                if ( 'post' === get_post_type() ) {
	                $post_id = get_queried_object_id();
	                $post_author_id = get_post_field( 'post_author', $post_id );
	                $anick = get_the_author_meta('nickname', $post_author_id);

	                $author_url = get_author_posts_url( $post_author_id, $anick );
	                echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( $author_url ).'" title="'.esc_attr__('View all posts by', 'wagency').' '.$anick.'" rel="author">'.$anick.'</a></span>';
                }
            }
        } else {
	        if ( 'post' === get_post_type() ) {
		        $post_id = get_queried_object_id();
		        $post_author_id = get_post_field( 'post_author', $post_id );
		        $anick = get_the_author_meta('nickname', $post_author_id);

		        $author_url = get_author_posts_url( $post_author_id, $anick );
		        echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( $author_url ).'" title="'.esc_attr__('View all posts by', 'wagency').' '.$anick.'" rel="author">'.$anick.'</a></span>';
	        }
        }

        //Post data
	    echo '<span class="updated"> ', get_the_modified_time( 'F jS, Y h:i a' ) , '</span>';
        if ( isset( $secretlab['show_post_date'] ) ) {
            if ( '0' !=$secretlab['show_post_date'] ) {
                echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
            }
        } else {
            echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
        }




        // Comments counter
        if ( isset( $secretlab['show_comments_count'] ) ) {
            if ( '0' !=$secretlab['show_comments_count'] ) {
                if ( comments_open( get_the_ID() ) ) {
                    echo '<span class="comments-link"><i></i> ';
                    comments_popup_link( esc_attr__( 'Add a comment', 'wagency' ), esc_attr__( '1 Comment', 'wagency' ), esc_html__( '% Comments', 'wagency' ) );
                    echo '</span>';
                }
            }
        } else {
            echo '<span class="comments-link"><i></i> ';
            comments_popup_link( esc_attr__( 'Add a comment', 'wagency' ), esc_attr__( '1 Comment', 'wagency' ), esc_html__( '% Comments', 'wagency' ) );
            echo '</span>';
        }
    }
    public static function entry_meta() {
        global $secretlab, $post;

        // Post author
        if ( isset( $secretlab['show_post_author'] ) ) {
            if ( '0' !=$secretlab['show_post_author'] ) {
                if ( 'post' === get_post_type() ) {

                    echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr__('View all posts by', 'wagency').get_the_author().'" rel="author">'.get_the_author().'</a></span>';
                }
            }
        } else {
	        echo '<span class="author vcard"><i></i> <a class="url fn n" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr__('View all posts by', 'wagency').get_the_author().'" rel="author">'.get_the_author().'</a></span>';
        }

        //Post data
	    echo '<span class="updated"> ', get_the_modified_time( 'F jS, Y h:i a' ) , '</span>';
        if ( isset( $secretlab['show_post_date'] ) ) {
            if ( '0' !=$secretlab['show_post_date'] ) {
                echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
            }
        } else {
            echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
        }




        // Comments counter
        if ( isset( $secretlab['show_comments_count'] ) ) {
            if ( '0' !=$secretlab['show_comments_count'] ) {
                if ( comments_open( get_the_ID() ) ) {
                    echo '<span class="comments-link"><i></i> ';
                    comments_popup_link( esc_attr__( 'Add a comment', 'wagency' ), esc_attr__( '1 Comment', 'wagency' ), esc_html__( '% Comments', 'wagency' ) );
                    echo '</span>';
                }
            }
        } else {
            echo '<span class="comments-link"><i></i> ';
            comments_popup_link( esc_attr__( 'Add a comment', 'wagency' ), esc_attr__( '1 Comment', 'wagency' ), esc_html__( '% Comments', 'wagency' ) );
            echo '</span>';
        }
    }

public static function entry_meta_2() {
	global $secretlab, $post;

    //Post data
	echo '<span class="updated"> ', get_the_modified_time( 'F jS, Y h:i a' ) , '</span>';
	if ( isset( $secretlab['show_post_date'] ) ) {
		if ( '0' !=$secretlab['show_post_date'] ) {
			echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
		}
	} else {
		echo '<span class="date"><i></i> ' , get_the_date() , '</span>';
	}
	// Post author
	if ( isset( $secretlab['show_post_author'] ) ) {
		if ( '0' !=$secretlab['show_post_author'] ) {
			if ( 'post' === get_post_type() ) {

				echo '<span class="author vcard"><i></i>' . get_avatar( get_the_author_meta( 'user_email' ), 150 ) . ' <a class="url fn n" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr__('View all posts by', 'wagency').get_the_author().'" rel="author">'.get_the_author().'</a></span>';
			}
		}
	} else {
		echo '<span class="author vcard"><i></i>' . get_avatar( get_the_author_meta( 'user_email' ), 150 ) . ' <a class="url fn n" href="'.esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ).'" title="'.esc_attr__('View all posts by', 'wagency').get_the_author().'" rel="author">'.get_the_author().'</a></span>';
	}

    // Category
    if ( isset( $secretlab['show_post_category'] ) ) {
	    if ( '0' != $secretlab['show_post_category'] ) {
		    echo '<span class="cat"><i></i> ' . get_the_category_list( '', 'single', $post->ID ) . '</span>';
	    }
    } else {
	    echo '<span class="cat"><i></i> ' . get_the_category_list( '', 'single', $post->ID ) . '</span>';
    }


	// Comments counter
	if ( isset( $secretlab['show_comments_count'] ) ) {
		if ( '0' !=$secretlab['show_comments_count'] ) {
			if ( comments_open( get_the_ID() ) ) {
				echo '<span class="comments-link"><i></i> ';
				comments_popup_link( esc_attr__( 'Add a comment', 'wagency' ), esc_attr__( '1 Comment', 'wagency' ), esc_html__( '% Comments', 'wagency' ) );
				echo '</span>';
			}
		}
	} else {
		echo '<span class="comments-link"><i></i> ';
		comments_popup_link( esc_attr__( 'Add a comment', 'wagency' ), esc_attr__( '1 Comment', 'wagency' ), esc_html__( '% Comments', 'wagency' ) );
		echo '</span>';
	}
}

    /**
     * Display navigation to next/previous post when applicable.
     *
    */
    public static function post_nav() {
        global $post;
	    $prev_post = get_previous_post();
	    $next_post = get_next_post();
	    $author ='<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a>';
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $next = get_adjacent_post( false, '', false );
	    if ( !$next && !$previous )
		    return;


	    echo '<nav class="nav-links clearfix">';
        if( ! empty($prev_post) ) {
	        ?>

            <div class="nav-previous">
		        <?php
		        echo '<span><a href="' . esc_url( get_permalink( $prev_post->ID ) ) . '"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve"><g><g><path d="M458.672,202.653H207.088l77.781-77.781c21.803-21.803,21.803-57.28,0-79.083s-57.28-21.803-79.083,0L3.12,248.456
			c-4.16,4.16-4.16,10.923,0,15.083l202.667,202.667c10.901,10.901,25.216,16.363,39.552,16.363s28.629-5.44,39.552-16.363
			c21.803-21.803,21.803-57.28,0-79.083l-77.803-77.803h251.584c29.397,0,53.333-23.936,53.333-53.333
			S488.069,202.653,458.672,202.653z"/></g></g></svg></a></span>';
		        echo '<label>' . esc_html__( 'Previous Post', 'wagency' ) . '</label>';
		        echo '<h5><a href="' . esc_url( get_permalink( $prev_post->ID ) ) . '">' . esc_html( get_the_title( $prev_post->ID ) ) . '</a></h5>';
		        echo '<div class="metadata"><span>' . $author . '</span> <span class="divider">/</span> <span class="date">' . get_the_date( '', $prev_post->ID ) . '</span></div>';
		        ?>
            </div>
	        <?php
        }
        if( ! empty($next_post) ) {
	        ?>
            <div class="nav-next">
		        <?php
		        echo '<span><a href="' . esc_url( get_permalink( $next_post->ID ) ) . '"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 512.005 512.005" style="enable-background:new 0 0 512.005 512.005;" xml:space="preserve"><g><g><path d="M458.672,202.653H207.088l77.781-77.781c21.803-21.803,21.803-57.28,0-79.083s-57.28-21.803-79.083,0L3.12,248.456
			c-4.16,4.16-4.16,10.923,0,15.083l202.667,202.667c10.901,10.901,25.216,16.363,39.552,16.363s28.629-5.44,39.552-16.363
			c21.803-21.803,21.803-57.28,0-79.083l-77.803-77.803h251.584c29.397,0,53.333-23.936,53.333-53.333
			S488.069,202.653,458.672,202.653z"/></g></g></svg></a></span>';
		        echo '<label>' . esc_html__( 'Next Post', 'wagency' ) . '</label>';
		        echo '<h5><a href="' . esc_url( get_permalink( $next_post->ID ) ) . '">' . esc_html( get_the_title( $next_post->ID ) ) . '</a></h5>';
		        echo '<div class="metadata"><span>' . $author . '</span> <span class="divider">/</span> <span class="date">' . get_the_date( '', $next_post->ID ) . '</span></div>';
		        ?>
            </div>

	        <?php
        }
        echo '</nav>';
    }

    public static function post_nav_2() {
        global $post;
	    $prev_post = get_previous_post();
	    $next_post = get_next_post();
	    $author ='<a href="'.get_author_posts_url( get_the_author_meta( 'ID' ) ).'" rel="author">'.get_the_author_meta( 'display_name').'</a>';
        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $next = get_adjacent_post( false, '', false );
	    if ( !$next && !$previous )
		    return;


	    echo '<nav class="nav-links skin2 clearfix">';
        if( ! empty($prev_post) ) {
	        ?>

            <div class="nav-previous">
		        <?php
		        echo get_the_post_thumbnail( $prev_post->ID,'atiframebuilder_thumb' ).'<span><a href="' . esc_url( get_permalink( $prev_post->ID ) ) . '"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve"><g><g><path d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788C492,219.198,479.172,207.418,464.344,207.418z"/></g></g></svg></a></span>';
		        echo '<label>' . esc_html__( 'Previous Post', 'wagency' ) . '</label>';
		        echo '<h5><a href="' . esc_url( get_permalink( $prev_post->ID ) ) . '">' . esc_html( get_the_title( $prev_post->ID ) ) . '</a></h5>';
		        echo '<div class="metadata"><span>' . $author . '</span> <span class="divider">/</span> <span class="date">' . get_the_date( '', $prev_post->ID ) . '</span></div>
				<a href="' . esc_url( get_permalink( $prev_post->ID ) ) . '"></a>';
		        ?>
            </div>
	        <?php
        }
        if( ! empty($next_post) ) {
	        ?>
            <div class="nav-next">
		        <?php
		        echo get_the_post_thumbnail($next_post->ID,'atiframebuilder_thumb' ).'<span><a href="' . esc_url( get_permalink( $next_post->ID ) ) . '"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 492 492" style="enable-background:new 0 0 492 492;" xml:space="preserve"><g><g><path d="M464.344,207.418l0.768,0.168H135.888l103.496-103.724c5.068-5.064,7.848-11.924,7.848-19.124c0-7.2-2.78-14.012-7.848-19.088L223.28,49.538c-5.064-5.064-11.812-7.864-19.008-7.864c-7.2,0-13.952,2.78-19.016,7.844L7.844,226.914C2.76,231.998-0.02,238.77,0,245.974c-0.02,7.244,2.76,14.02,7.844,19.096l177.412,177.412c5.064,5.06,11.812,7.844,19.016,7.844c7.196,0,13.944-2.788,19.008-7.844l16.104-16.112c5.068-5.056,7.848-11.808,7.848-19.008c0-7.196-2.78-13.592-7.848-18.652L134.72,284.406h329.992c14.828,0,27.288-12.78,27.288-27.6v-22.788C492,219.198,479.172,207.418,464.344,207.418z"/></g></g></svg></a></span>';
		        echo '<label>' . esc_html__( 'Next Post', 'wagency' ) . '</label>';
		        echo '<h5><a href="' . esc_url( get_permalink( $next_post->ID ) ) . '">' . esc_html( get_the_title( $next_post->ID ) ) . '</a></h5>';
		        echo '<div class="metadata"><span>' . $author . '</span> <span class="divider">/</span> <span class="date">' . get_the_date( '', $next_post->ID ) . '</span></div>
				<a href="' . esc_url( get_permalink( $next_post->ID ) ) . '"></a>';
		        ?>
            </div>

	        <?php
        }
        echo '</nav>';
    }

    /* Prev & Next Post Narrow Icons */
    /**
     * Display navigation to next/previous post when applicable.
     *
     */
    public function post_navicon() {
        global $post;

        // Don't print empty markup if there's nowhere to navigate.
        $iprevious = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $inext = get_adjacent_post( false, '', false );

        if ( !$inext && !$iprevious )
            return;
        ?>
        <div class="post-navigation-icon">
            <?php next_post_link( '%link', '<span class="icon-arrow-left22"></span>', true ); ?>
            <?php previous_post_link( '%link', '<span class="icon-arrow-right22"></span>', true ); ?>
        </div>
        <?php
    }

    // Display of CSS class, for column option of tag, category, archive and index page
    public static function number_of_columns() {
        global $secretlab;
	    if ( ! is_single() && !is_page() ) {
		    $cols = ' column' . Atiframebuilder_Theme_Demo::DEFAULT_COLUMN;
		    $colsset = Atiframebuilder_Theme_Demo::DEFAULT_COLUMN;
		    if (isset($secretlab['blog-columns'])) {
			    $colsset = $secretlab['blog-columns'];
		    }
		    if ( is_category()) {
			    $cols = ' column' . $colsset;
		    } elseif ( is_tag() ) {
			    $cols = ' column' . $colsset;
		    } elseif ( is_archive() ) {
			    $cols = ' column' . $colsset;
		    } elseif ( is_home() ) {
			    $cols = ' column' . $colsset;
		    }

		    echo ' ' . $cols;

		    if ( isset( $secretlab['blog-sidebar-layout'] ) ) {
			    $sl_blog_sidebars = $secretlab['blog-sidebar-layout'];
			    if ( '3' === $sl_blog_sidebars || '4' === $sl_blog_sidebars ) {
				    echo ' sb';
			    } elseif ( '2' === $sl_blog_sidebars ) {
				    echo ' sbs';
			    }
		    }
	    }


	    if (isset($secretlab['archive_template'])) {
            if ( !is_page() && !is_single())  {
                echo ' alayout' . $secretlab['archive_template'];
            }
	    } else {echo ' alayout' . Atiframebuilder_Theme_Demo::DEFAULT_ARCHIVE_THEMPLATE;}

		    if ( isset( $secretlab['single_template'] ) ) {
                if ( is_single()) {
                    echo ' slayout' . $secretlab['single_template'];
                }
		    } else {
			    echo ' slayout' . Atiframebuilder_Theme_Demo::DEFAULT_POST_THEMPLATE;
		    }
    }

	// Select Thumb Size depends on post caategory wide
	public static function thumb_size() {
		global $secretlab;
		if ( class_exists( 'ReduxFrameworkPlugin' ) ) {
			$sl_blog_sidebars = $secretlab['blog-sidebar-layout'];
			if ( ! is_single() ) {
				if (  '2' === $sl_blog_sidebars || '1' === $sl_blog_sidebars ) {
					echo get_the_post_thumbnail( '', 'atiframebuilder_rectangle' );
				} elseif ( '3' === $sl_blog_sidebars || '4' === $sl_blog_sidebars) {
					echo get_the_post_thumbnail( '', 'atiframebuilder_rectangle_big' );
				}
			}
		} else {
			echo get_the_post_thumbnail();
        }
	}

    // Tags for blog post
    public static function tags() {
        global $secretlab;

        //tags
        if ( isset( $secretlab['show_post_tags'] ) ) {
            if ( '1' === $secretlab['show_post_tags'] ) {
                $tag_list = get_the_tag_list( '', ' ' );
                if ( $tag_list ) {
                    echo '<span class="tags-links"><b>' , esc_attr__( 'Tags', 'wagency' ) , ':</b> ' , $tag_list , '</span>';
                }
            }
        } else {
            $tag_list = get_the_tag_list( '', ' ' );
            if ( $tag_list ) {
                echo '<span class="tags-links"><b>' , esc_attr__('Tags', 'wagency' ) , ':</b> ' , $tag_list , '</span>';
            }
        }

    }
	// Share buttons for blog post
	public static function share() {
		global $secretlab;

		//share
		if ( isset( $secretlab['show_post_share'] ) ) {
			if ( '1' === $secretlab['show_post_share'] ) {
				echo '<span class="sharing">' , esc_attr__('Share it', 'wagency' ).':';
				echo ' <a href="https://www.facebook.com/sharer.php?u='.get_the_permalink().'" target="_blank"><svg enable-background="new 0 0 24 24" height="10"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg></a>';
				echo ' <a href="https://twitter.com/intent/tweet?text='.get_the_title().'&url='.get_the_permalink().'" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" height="10" width="10" xml:space="preserve"><g><g><path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568C480.224,136.96,497.728,118.496,512,97.248z"/></g></g></svg></a>';
				echo ' <a href="https://pinterest.com/pin/create/button/?url='.get_the_permalink().'&media='.get_the_post_thumbnail_url().'&description='.get_the_title().'" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" height="10" width="10" x="0px" y="0px" viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve">
<g>
	<g>
		<path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
			c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
			c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
			c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
			c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
			S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
			c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
			c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"/>
	</g>
</g>
</svg></a>';
				echo ' <a href="https://www.linkedin.com/shareArticle?url='.get_the_permalink().'" target="_blank"><svg enable-background="new 0 0 24 24" height="10" width="10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/><path d="m.396 7.977h4.976v16.023h-4.976z"/><path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/></svg></a>';
				echo '</span>';
			}
		} else {echo '<span class="sharing">' , esc_attr__('Share it', 'wagency' ).':';
			echo ' <a href="https://www.facebook.com/sharer.php?u='.get_the_permalink().'" target="_blank"><svg enable-background="new 0 0 24 24" height="10"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg></a>';
			echo ' <a href="https://twitter.com/intent/tweet?text='.get_the_title().'&url='.get_the_permalink().'" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" height="10" width="10" xml:space="preserve"><g><g><path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568C480.224,136.96,497.728,118.496,512,97.248z"/></g></g></svg></a>';
			echo ' <a href="https://pinterest.com/pin/create/button/?url='.get_the_permalink().'&media='.get_the_post_thumbnail_url().'&description='.get_the_title().'" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" height="10" width="10" x="0px" y="0px" viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve">
<g>
	<g>
		<path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
			c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
			c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
			c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
			c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
			S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
			c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
			c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"/>
	</g>
</g>
</svg></a>';
			echo ' <a href="https://www.linkedin.com/shareArticle?url='.get_the_permalink().'" target="_blank"><svg enable-background="new 0 0 24 24" height="10" width="10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/><path d="m.396 7.977h4.976v16.023h-4.976z"/><path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/></svg></a>';
			echo '</span>';}

	}

	public static function share_2() {
		global $secretlab;

		//share
		if ( isset( $secretlab['show_post_share'] ) ) {
			if ( '1' === $secretlab['show_post_share'] ) {
				echo '<span class="sharing"><label><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M503.691 189.836L327.687 37.851C312.281 24.546 288 35.347 288 56.015v80.053C127.371 137.907 0 170.1 0 322.326c0 61.441 39.581 122.309 83.333 154.132 13.653 9.931 33.111-2.533 28.077-18.631C66.066 312.814 132.917 274.316 288 272.085V360c0 20.7 24.3 31.453 39.687 18.164l176.004-152c11.071-9.562 11.086-26.753 0-36.328z"></path></svg> ' , esc_attr__('Share This Post: ', 'wagency' ).': </label>';
				echo '<a href="https://www.facebook.com/sharer.php?u='.get_the_permalink().'" target="_blank"><svg enable-background="new 0 0 24 24" height="10"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg></a>';
				echo ' <a href="https://twitter.com/intent/tweet?text='.get_the_title().'&url='.get_the_permalink().'" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" height="10" width="10" xml:space="preserve"><g><g><path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568C480.224,136.96,497.728,118.496,512,97.248z"/></g></g></svg></a>';
				echo ' <a href="https://pinterest.com/pin/create/button/?url='.get_the_permalink().'&media='.get_the_post_thumbnail_url().'&description='.get_the_title().'" target="_blank"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" height="10" width="10" x="0px" y="0px" viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve">
<g>
	<g>
		<path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
			c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
			c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
			c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
			c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
			S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
			c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
			c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"/>
	</g>
</g>
</svg></a>';
				echo ' <a href="https://www.linkedin.com/shareArticle?url='.get_the_permalink().'" target="_blank"><svg enable-background="new 0 0 24 24" height="10" width="10" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m23.994 24v-.001h.006v-8.802c0-4.306-.927-7.623-5.961-7.623-2.42 0-4.044 1.328-4.707 2.587h-.07v-2.185h-4.773v16.023h4.97v-7.934c0-2.089.396-4.109 2.983-4.109 2.549 0 2.587 2.384 2.587 4.243v7.801z"/><path d="m.396 7.977h4.976v16.023h-4.976z"/><path d="m2.882 0c-1.591 0-2.882 1.291-2.882 2.882s1.291 2.909 2.882 2.909 2.882-1.318 2.882-2.909c-.001-1.591-1.292-2.882-2.882-2.882z"/></svg></a>';
				echo '</span>';
			}
		}

	}
    // Comment layout
	public static function comment( $comment, $args, $depth ) {
        switch ( $comment->comment_type ) {
                case 'pingback':
                ?>
                <li class="trackback comment-content"><p><?php esc_html_e( 'Trackback:', 'wagency' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'wagency' ), '<span class="edit-link">', '<span>' ); ?></p>
                    <?php
                    break;
                case 'trackback':
                    ?>
                <li class="pingback comment-content"><p><?php esc_html_e( 'Pingback:', 'wagency' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( esc_html__( 'Edit', 'wagency' ), '<span class="edit-link">', '<span>' ); ?></p>
                    <?php
                    break;
                default:
	                $c = $GLOBALS['comment'];
	                $GLOBALS['comment'] = $comment;
	                echo '<li ';
	                comment_class();
	                echo ' ' , 'id="li-comment-';
	                comment_ID();
	                echo '">';
	                echo '<div id="comment-';
	                comment_ID();
	                echo '">';
	                echo '<div class="comment-author vcard">' , get_avatar( $comment, $args['avatar_size'] ) , '</div>';
	                if ( '0' === $comment->comment_approved ) {
		                echo '<em>' , esc_attr__( 'Your comment is awaiting moderation.', 'wagency' ) , '</em><br />';
	                }
	                echo '<footer class="comment-meta">';
	                echo '<div class="comment-metadata">';
	                echo '<span class="fn"> '.get_comment_author_link().'</span> <span class="date"><i></i> <a href="'.get_comment_link().'">'.get_comment_date().' '.esc_attr__( 'at', 'wagency' ).' '.get_comment_time().'</a></span> ';
	                echo '<span class="reply">';
	                comment_reply_link(array_merge( $args, array( 'reply_text' => ''.esc_html__("Reply", 'wagency'), 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
	                echo '</span>';
	                edit_post_link( esc_html__( 'Edit', 'wagency' ), '<span class="edit-link"><i></i> ', '</span>' );

	                echo '</div>
        </footer>';
	                echo '<div class="comment-content">';
	                comment_text();

	                echo '</div>';
	                echo '
    </div>';
	                $GLOBALS['comment'] = $c;
	                break;
        }

    }


    public static function get_post_content( $apply_filters = false ) {
		global $post;
		$content = ! empty( $post->post_content ) ? $post->post_content : '';
		return $apply_filters ? apply_filters( 'the_content', $content ) : $content;
	}

	public static function get_tag( $text, $tag_start, $tag_end = '' ) {
		$val       = '';
		$pos_start = strpos( $text, $tag_start );
		if ( false !== $pos_start ) {
			$pos_end = $tag_end ? strpos( $text, $tag_end, $pos_start ) : false;
			if ( false === $pos_end ) {
				$tag_end = substr( $tag_start, 0, 1 ) == '<' ? '>' : ']';
				$pos_end = strpos( $text, $tag_end, $pos_start );
			}
			$val = substr( $text, $pos_start, $pos_end + strlen( $tag_end ) - $pos_start );
		}
		return $val;
	}

    public static function get_tag_attrib( $text, $tag, $attr ) {
	    $val       = '';
	    $pos_start = strpos( $text, substr( $tag, 0, strlen( $tag ) - 1 ) );
	    if ( false !== $pos_start ) {
		    $pos_end  = strpos( $text, substr( $tag, - 1, 1 ), $pos_start );
		    $pos_attr = strpos( $text, ' ' . ( $attr ) . '=', $pos_start );
		    if ( false !== $pos_attr && $pos_attr < $pos_end ) {
			    $pos_attr  += strlen( $attr ) + 3;
			    $pos_quote = strpos( $text, substr( $text, $pos_attr - 1, 1 ), $pos_attr );
			    $val       = substr( $text, $pos_attr, $pos_quote - $pos_attr );
		    }
	    }

	    return $val;
    }
    public static function get_post_iframe(  $post_text = '', $src = true ) {
	    global $post;
	    $img = '';
	    $tag = Atiframebuilder_Blog::get_embed_video_tag_name();
	    if ( empty( $post_text ) ) {
		    $post_text = $post->post_content;
	    }
	    if ( $src ) {
		    if ( preg_match_all( '/<' . esc_html( $tag ) . '.+src=[\'"]([^\'"]+)[\'"][^>]*>/i', $post_text, $matches ) ) {
			    $img = $matches[1][0];
		    }
	    } else {
		    $img = Atiframebuilder_Blog::get_tag( $post_text, '<' . esc_html( $tag ), '</' . esc_html( $tag ) . '>' );
	    }
	    return $img;
    }

    public static function get_embed_video_tag_name( ) {return 'iframe';}
    public static function array_get_first( &$arr, $key = true ) {
	    foreach ( $arr as $k => $v ) {
		    break;
	    }
	    return $key ? $k : $v;
    }
    public static function filter_post_content( $content ) {
	    $content = apply_filters( 'filter_post_content', $content );
	    global $wp_embed;
	    if ( is_object( $wp_embed ) ) {
		    $content = $wp_embed->autoembed( $content );
	    }
	    return do_shortcode( $content );
    }
    public static function show_layout( $str, $before = '', $after = '' ) {
	    if ( trim( $str ) != '' ) {
		    printf( '%s%s%s', $before, $str, $after );
	    }
    }

    // Author links
	public static function author_links() {

		if(get_the_author_meta('facebook')) : ?><a target="_blank" class="author-social" href="https://facebook.com/<?php echo the_author_meta('facebook'); ?>">Facebook</a><?php endif;
        if(get_the_author_meta('twitter')) : ?><a target="_blank" class="author-social" href="https://twitter.com/<?php echo the_author_meta('twitter'); ?>">Twitter</a><?php endif;
        if(get_the_author_meta('instagram')) : ?><a target="_blank" class="author-social" href="https://instagram.com/<?php echo the_author_meta('instagram'); ?>">Instagram</a><?php endif;
        if(get_the_author_meta('pinterest')) : ?><a target="_blank" class="author-social" href="https://pinterest.com/<?php echo the_author_meta('pinterest'); ?>">Pinterest</a><?php endif;
        if(get_the_author_meta('tumblr')) : ?><a target="_blank" class="author-social" href="https://<?php echo the_author_meta('tumblr'); ?>.tumblr.com/">Tumblr</a><?php endif;
	}
	public static function author_links_2() {

		if(get_the_author_meta('facebook')) : ?><a target="_blank" class="author-social" href="https://facebook.com/<?php echo the_author_meta('facebook'); ?>"><svg enable-background="new 0 0 24 24" height="10"  viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="m15.997 3.985h2.191v-3.816c-.378-.052-1.678-.169-3.192-.169-3.159 0-5.323 1.987-5.323 5.639v3.361h-3.486v4.266h3.486v10.734h4.274v-10.733h3.345l.531-4.266h-3.877v-2.939c.001-1.233.333-2.077 2.051-2.077z"/></svg></a><?php endif;
		if(get_the_author_meta('twitter')) : ?><a target="_blank" class="author-social" href="https://twitter.com/<?php echo the_author_meta('twitter'); ?>"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" height="13" width="13" xml:space="preserve"><g><g><path d="M512,97.248c-19.04,8.352-39.328,13.888-60.48,16.576c21.76-12.992,38.368-33.408,46.176-58.016c-20.288,12.096-42.688,20.64-66.56,25.408C411.872,60.704,384.416,48,354.464,48c-58.112,0-104.896,47.168-104.896,104.992c0,8.32,0.704,16.32,2.432,23.936c-87.264-4.256-164.48-46.08-216.352-109.792c-9.056,15.712-14.368,33.696-14.368,53.056c0,36.352,18.72,68.576,46.624,87.232c-16.864-0.32-33.408-5.216-47.424-12.928c0,0.32,0,0.736,0,1.152c0,51.008,36.384,93.376,84.096,103.136c-8.544,2.336-17.856,3.456-27.52,3.456c-6.72,0-13.504-0.384-19.872-1.792c13.6,41.568,52.192,72.128,98.08,73.12c-35.712,27.936-81.056,44.768-130.144,44.768c-8.608,0-16.864-0.384-25.12-1.44C46.496,446.88,101.6,464,161.024,464c193.152,0,298.752-160,298.752-298.688c0-4.64-0.16-9.12-0.384-13.568C480.224,136.96,497.728,118.496,512,97.248z"/></g></g></svg></a><?php endif;
		if(get_the_author_meta('instagram')) : ?><a target="_blank" class="author-social" href="https://instagram.com/<?php echo the_author_meta('instagram'); ?>"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg></a><?php endif;
		if(get_the_author_meta('pinterest')) : ?><a target="_blank" class="author-social" href="https://pinterest.com/<?php echo the_author_meta('pinterest'); ?>"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" height="13" width="13" x="0px" y="0px" viewBox="0 0 511.977 511.977" style="enable-background:new 0 0 511.977 511.977;" xml:space="preserve">
<g>
    <g>
        <path d="M262.948,0C122.628,0,48.004,89.92,48.004,187.968c0,45.472,25.408,102.176,66.08,120.16
			c6.176,2.784,9.536,1.6,10.912-4.128c1.216-4.352,6.56-25.312,9.152-35.2c0.8-3.168,0.384-5.92-2.176-8.896
			c-13.504-15.616-24.224-44.064-24.224-70.752c0-68.384,54.368-134.784,146.88-134.784c80,0,135.968,51.968,135.968,126.304
			c0,84-44.448,142.112-102.208,142.112c-31.968,0-55.776-25.088-48.224-56.128c9.12-36.96,27.008-76.704,27.008-103.36
			c0-23.904-13.504-43.68-41.088-43.68c-32.544,0-58.944,32.224-58.944,75.488c0,27.488,9.728,46.048,9.728,46.048
			S144.676,371.2,138.692,395.488c-10.112,41.12,1.376,107.712,2.368,113.44c0.608,3.168,4.16,4.16,6.144,1.568
			c3.168-4.16,42.08-59.68,52.992-99.808c3.968-14.624,20.256-73.92,20.256-73.92c10.72,19.36,41.664,35.584,74.624,35.584
			c98.048,0,168.896-86.176,168.896-193.12C463.62,76.704,375.876,0,262.948,0z"/>
    </g>
</g>
</svg></a><?php endif;
		if(get_the_author_meta('tumblr')) : ?><a target="_blank" class="author-social" href="https://<?php echo the_author_meta('tumblr'); ?>.tumblr.com/"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M309.8 480.3c-13.6 14.5-50 31.7-97.4 31.7-120.8 0-147-88.8-147-140.6v-144H17.9c-5.5 0-10-4.5-10-10v-68c0-7.2 4.5-13.6 11.3-16 62-21.8 81.5-76 84.3-117.1.8-11 6.5-16.3 16.1-16.3h70.9c5.5 0 10 4.5 10 10v115.2h83c5.5 0 10 4.4 10 9.9v81.7c0 5.5-4.5 10-10 10h-83.4V360c0 34.2 23.7 53.6 68 35.8 4.8-1.9 9-3.2 12.7-2.2 3.5.9 5.8 3.4 7.4 7.9l22 64.3c1.8 5 3.3 10.6-.4 14.5z"></path></svg></a><?php endif;
	}

	public function author_links_fields($contactmethods) {
		$contactmethods['twitter']   = esc_html__('Twitter Username', 'wagency');
		$contactmethods['facebook']  = esc_html__('Facebook Username', 'wagency');
		$contactmethods['tumblr']    = esc_html__('Tumblr Username', 'wagency');
		$contactmethods['instagram'] = esc_html__('Instagram Username', 'wagency');
		$contactmethods['pinterest'] = esc_html__('Pinterest Username', 'wagency');

		return $contactmethods;
	}
    public function new_excerpt_more($more) {
	    return '...';
    }

}

?>
