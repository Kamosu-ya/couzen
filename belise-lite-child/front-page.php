<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Belise
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main front-page">
			<div class="container posts-container">
				<div class="row posts-row">

				<?php
				if ( have_posts() ) :

					if ( is_home() && ! is_front_page() ) :
					?>
						<header>
							<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
						</header>

					<?php
					endif;
					?>

				</div>
			</div><!-- .posts-container -->
			<div class="container front">
				<div class="row">
                    <article class="couzen clearfix">
                        <h2>dining bar couzen</h2>


                        <div class="img-box left">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/couzen02.jpg">
                        </div>

                        <article class="text right">
                             <h3>南森町駅徒歩1分 隠れ家イタリアン</h3>
                            <p>店主自ら毎日『天満市場』へ足を運び、見極めた新鮮魚介やフレッシュな野菜をふんだんに使用したイタリアンを気軽に堪能</p>

                            <p>少しずつ色んな味が楽しめる小皿料理を380円～豊富にご用意！</p>
                             <p>じっくり低温調理した肉料理も大人気♪驚くほどの柔らかさと旨味を是非お楽しみください。</p>
                        </article>
                    </article>

                    <article class="dish clearfix">
                        <h2>menu<span>料理/アラカルト</span></h2>

                        <div class="img-box yoko center">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish01.jpg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish02.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish03.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish04.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish05.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish06.png">
                        </div>

                        <article class="text center">
                            <h3>天満市場で新鮮な食材を厳選仕入れ</h3>
                            <p>店で使用する食材は、店長自ら『天満市場』へ足を運び、その目で一つ一つ見極めた、魚介や野菜を厳選仕入れしております！<br>
                                一番人気のパスタ『渡り蟹のトマトクリームパスタ』は、魚介の旨味と特製トマトクリームが絶妙にマッチング。<br>
                                是非、お召し上がりいただきたい一品です。<br>
                                また、食材に合わせたリクエストにも、臨機応変に対応可能◎お気軽にお声がけください♪</p>


                        <button>料理一覧を見る</button>

                        </article>

                    </article>


                    <article class="drink clearfix">
                        <h2>drink<span>ドリンク</span></h2>

                        <div class="img-box box2 right">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish01.jpg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish02.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish03.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish04.png">
                        </div>

                        <article class="text left">
                            <h3>ハッピーアワータイム実施中</h3>
                            <p>早い時間に御来店いただきましたら、お得なハッピーアワーがお楽しみいただけます<br>
                                豊富な種類のドリンクを、お得にご堪能ください！</p>
                            <p>ドリンク類は、ビール、ワイン、カクテル、焼酎類、梅酒、日本酒など多数揃えています。
                                メジャーな物から、レアな物まで、多種多様なお酒をご用意。</p>
                            <p>豊富に取り揃える各種ドリンクは、当店自慢の逸品との相性抜群です。</p>


                        <button>ドリンク一覧を見る</button>

                        </article>

                    </article>


                    <article class="course clearfix">
                        <h2>course<span>コース料理</span></h2>
                        <div class="img-box box2 left">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish01.jpg">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish02.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish03.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish04.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish05.png">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dish06.png">
                        </div>

                        <article class="text right">

                        <h3>コース料理は2980円から<br>
                            すべてのコースに飲み放題付き</h3>
                        <p>早落ち着いたアットホームな寛ぎ空間は、女子会・記念日での利用にオススメ！<br>
                            ストレスフリーなソファー半個室は、最大10名様までご利用OK。<br>
                            大型宴会に最適な店内貸切は、15名様～28名様までご利用いただけます！<br>
                            プロジェクター・マイクの貸出も行っておりますので、お気軽にご相談ください。</p>

                            <div class="course-detail">
                                <h4>【2時間飲み放題付】シェフのおまかせ飲み会用　3000円コース</h4>
                                <p>---- コース内容（全9品）----</p>
                                    <ul>
                                        <li>前菜３種盛り合わせ<span>例）生ハムのクロスティーニ</span></li>
                                        <li>本日のピザ　１皿目<span>例）ピザマルゲリータ</span></li>
                                        <li>本日のピザ　２皿目<span>例）タコと明太子ピザ</span></li>
                                        <li>フリットミスト<span>例）イタリア風天ぷらの盛り合わせ</span></li>
                                        <li>本日のパスタ<span>例）生ハムと水菜のペペロンチーノ</span></li>
                                        <li>本日のステーキ<span>例）赤身のステーキ</span></li>
                                        <li>本日のデザート<span>例）フレンチトーストアイス添え</span></li>
                                    </ul>
                            </div>

                        <button>コース一覧を見る</button>

                        </article>

                    </article>

                    
                    <div id="access-footer">
                    <?php // access-footer挿入
                    $my_post = get_page_by_title ( 'access-footer' );
                    echo apply_filters ( 'the_content', $my_post -> post_content );
                    ?>
                    </div>

                    <?php
                    $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                    $terms = get_terms( 'tenant-category', '' );
                    $the_query = new WP_Query(
                        array(
                            'post_status' => 'any',
                            'post_type' => 'attachment' ,
                            'post_mime_type' => 'image' ,
                            'posts_per_page' => 12 ,
                            'nopaging' => false,
                            'paged' => $paged,
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'media_category',
                                    'field'    => 'slug',
                                    'terms'    => 'contest',
                                )
                            )
                        )
                    );

                    if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post();

                        the_attachment_link( $the_query->post->ID ); //メディアをリンク付きで出力する

                        echo wp_get_attachment_link( $the_query->post->ID , 'thumbnail' ); //メディアへのリンクをHTML付きで返す

                        echo wp_get_attachment_url( $the_query->post->ID ); //メディアのURLを返す

                        $images = wp_get_attachment_image_src( $the_query->post->ID, 'medium' ); //添付された画像のURLとサイズを配列で返す
                        echo '<img src="' . $images[0] . '" width="' . $images[1] . '" height="' . $images[2] . '"/>';

                    endwhile;
                    else:
                    endif;
                    wp_reset_query();
                    ?>







				</div>

				<?php
				else :

					get_template_part( 'template-parts/content', 'none' );

				endif;
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
