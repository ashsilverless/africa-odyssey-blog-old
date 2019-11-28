<?php
/**
 * The template for displaying the footer
 * @package aob
 */
?>

</main>

<footer>
	<?php get_template_part('template-parts/footer', 'leaders');?>

	<iframe frameborder="0" scrolling="no" title="Customer reviews powered by Trustpilot" loading="auto" src="https://widget.trustpilot.com/trustboxes/5406e65db0d04a09e042d5fc/index.html?templateId=5406e65db0d04a09e042d5fc&amp;businessunitId=51c4acd50000640005486bcc#locale=en-GB&amp;styleHeight=28px&amp;styleWidth=100%25&amp;theme=light" style="position: relative; height: 28px; width: 100%; border-style: none; display: block; overflow: hidden;">
	<html id="ng-app">
	  <head>
	    <title>Trustpilot Custom Widget</title>
	    <meta charset="utf-8" />
	    <meta name="robots" content="noindex" />

	    <!-- polyfill used by Sentry for IE -->
	    <script
	      nomodule
	      src="https://polyfills.trustpilot.com/v2/polyfill.min.js?features=Promise%2CObject.assign%2CString.prototype.includes%2CNumber.isNaN"
	    ></script>
	    <style>
			html,body,div,span,applet,object,iframe,h1,h2,h3,h4,h5,h6,p,blockquote,pre,a,abbr,acronym,address,big,cite,code,del,dfn,em,img,ins,kbd,q,s,samp,small,strike,strong,sub,sup,tt,var,b,u,i,center,dl,dt,dd,ol,ul,li,fieldset,form,label,legend,table,caption,tbody,tfoot,thead,tr,th,td,article,aside,canvas,details,embed,figure,figcaption,footer,header,hgroup,menu,nav,output,ruby,section,summary,time,mark,audio,video{border:0;font:inherit;font-size:100%;margin:0;padding:0;vertical-align:baseline}article,aside,details,figcaption,figure,footer,header,hgroup,menu,nav,section{display:block}body{line-height:1}ol,ul{list-style:none}blockquote,q{quotes:none}blockquote::before,blockquote::after,q::before,q::after{content:'';content:none}table{border-collapse:collapse;border-spacing:0}body{font-family:"Segoe UI","Helvetica Neue","Helvetica","Arial","sans-serif";font-size:12px}b,strong{font-weight:700}.bold-underline,.tp-widget-empty-vertical__title,.tp-widget-empty-horizontal__title,body .tp-widget-trustscore,body .tp-widget-rating strong{font-family:"Segoe UI","Helvetica Neue","Helvetica","Arial","sans-serif";font-weight:500}@media all and (-ms-high-contrast: none), (-ms-high-contrast: active){.bold-underline,.tp-widget-empty-vertical__title,.tp-widget-empty-horizontal__title,body .tp-widget-trustscore,body .tp-widget-rating strong{font-weight:600}}*,::after,::before{box-sizing:border-box}.hidden{display:none}.tp-widget-loader,.tp-widget-fallback{left:50%;position:absolute;top:50%;transform:translate(-50%, -50%)}#fallback-logo{display:none}.no-svg #fallback-logo{display:inline-block}.tp-widget-wrapper{height:100%;margin:0 auto;max-width:750px;position:relative}.tp-stars .tp-star__canvas,.tp-stars .tp-star__canvas--half{fill:#dcdce6}.tp-stars .tp-star__shape{fill:#fff}.tp-stars--1 .tp-star:nth-of-type(-n+1) .tp-star__canvas,.tp-stars--1 .tp-star:nth-of-type(-n+1) .tp-star__canvas--half{fill:#ff3722}.tp-stars--2 .tp-star:nth-of-type(-n+2) .tp-star__canvas,.tp-stars--2 .tp-star:nth-of-type(-n+2) .tp-star__canvas--half{fill:#ff8622}.tp-stars--3 .tp-star:nth-of-type(-n+3) .tp-star__canvas,.tp-stars--3 .tp-star:nth-of-type(-n+3) .tp-star__canvas--half{fill:#ffce00}.tp-stars--4 .tp-star:nth-of-type(-n+4) .tp-star__canvas,.tp-stars--4 .tp-star:nth-of-type(-n+4) .tp-star__canvas--half{fill:#73cf11}.tp-stars--5 .tp-star:nth-of-type(-n+5) .tp-star__canvas,.tp-stars--5 .tp-star:nth-of-type(-n+5) .tp-star__canvas--half{fill:#00b67a}.tp-stars--1--half .tp-star:nth-of-type(-n+2) .tp-star__canvas--half{fill:#ff3722}.tp-stars--2--half .tp-star:nth-of-type(-n+3) .tp-star__canvas--half{fill:#ff8622}.tp-stars--3--half .tp-star:nth-of-type(-n+4) .tp-star__canvas--half{fill:#ffce00}.tp-stars--4--half .tp-star:nth-of-type(-n+4) .tp-star__canvas,.tp-stars--4--half .tp-star:nth-of-type(-n+4) .tp-star__canvas--half{fill:#00b67a}.tp-stars--4--half .tp-star:nth-of-type(-n+5) .tp-star__canvas--half{fill:#00b67a}.tp-widget-loader,.tp-widget-fallback{max-width:50%;text-align:center;width:400vh}.tp-widget-loader svg,.tp-widget-fallback svg{width:100%}@media screen and (min-width: 400px){.tp-widget-loader,.tp-widget-fallback{max-width:200px}}.tp-widget-loader--loaded{opacity:0}.bold-underline{border-bottom:1px solid rgba(25,25,25,0.6)}.bold-underline:hover{border-color:#191919}.dark{color:#fff}.dark a{color:#fff}.dark .bold-underline:not(.bold-underline--single-theme){border-color:rgba(255,255,255,0.6)}.dark .bold-underline:not(.bold-underline--single-theme):hover{border-color:#fff}.dark .tp-logo__text{fill:#fff}.dark .tp-widget-loader .tp-logo__text{fill:#191919}html{height:100%;overflow:hidden}body{color:#191919;height:100%;line-height:1;min-width:100%;overflow:hidden;width:1px}img{border:0}svg{display:block;width:100%}a{color:#191919;text-decoration:none}.tp-widget-empty-vertical{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column;-ms-flex-pack:center;justify-content:center}.tp-widget-empty-vertical__title{font-size:18px;margin:0 0 12px;text-align:center}.tp-widget-empty-vertical__stars{margin:0 0 8px;width:150px}.tp-widget-empty-vertical__subtitle-wrapper{display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row}.tp-widget-empty-vertical__subtitle{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;font-size:14px;text-align:center}.tp-widget-empty-vertical__logo{margin:0 0 5px 5px;width:90px}.tp-widget-empty-horizontal{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:row;flex-direction:row;height:100%;-ms-flex-pack:center;justify-content:center}.tp-widget-empty-horizontal__title{font-size:14px;text-align:center}.tp-widget-empty-horizontal__logo{margin:0 0 5px 5px;width:90px}@media screen and (max-width: 300px){.tp-widget-empty-vertical__subtitle-wrapper{-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-direction:column;flex-direction:column}.tp-widget-empty-vertical__logo{margin:5px 0 0}.tp-widget-empty-horizontal{-ms-flex-direction:column;flex-direction:column}.tp-widget-empty-horizontal__logo{margin:0}}body{font-size:14px;text-align:center}body .tp-widget-wrapper{-ms-flex-line-pack:start;align-content:flex-start;-ms-flex-align:center;align-items:center;display:-ms-flexbox;display:flex;-ms-flex-wrap:wrap;flex-wrap:wrap;height:auto;-ms-flex-pack:center;justify-content:center;max-width:none}body .tp-widget-customerssay,body .tp-widget-trustscore,body .tp-widget-rating,body .tp-widget-text{display:none;margin:0 16px 0 0}body .tp-widget-trustscore{font-size:20px;margin:0 12px 0 0}body .tp-widget-stars{margin:0 0 6px;width:130px}body .tp-widget-logo{width:80px}@media screen and (min-width: 250px){body .tp-widget-stars{margin:0 12px 0 0}}@media screen and (min-width: 680px){body .tp-widget-trustscore{display:block}}@media screen and (min-width: 850px){body .tp-widget-trustscore,body .tp-widget-stars{margin:0 16px 0 0}body .tp-widget-rating{display:block}}@media screen and (min-width: 1024px){body .tp-widget-customerssay{display:block}}

	</style>
	  </head>
	  <body>
	    <div id="tp-widget-wrapper" class="tp-widget-wrapper">
	      <div class="tp-widget-customerssay">
	        <a class="profile-url" target="_blank"> <span id="translations-customerssay"></span> </a>
	      </div>
	      <div id="trust-score" class="tp-widget-trustscore"></div>
	      <!-- Stars -->
	      <div class="tp-widget-stars">
	        <a id="tp-widget-stars" class="profile-url" target="_blank"> </a>
	      </div>
	      <div id="tp-widget-rating" class="tp-widget-rating"></div>
	      <div class="tp-widget-poweredby">
	        <div class="tp-widget-text"><span id="translations-poweredby"></span></div>
	        <!-- Logo -->
	        <div class="tp-widget-logo">
	          <a id="tp-widget-logo" class="profile-url" target="_blank"></a>
	        </div>
	      </div>
	    </div>
	    <script src="main.js" async defer></script>
	  </body>
	</html>
</iframe>

    <div class="footer-accreds">

            <?php if( have_rows('accreditations', 'options') ):
                while ( have_rows('accreditations', 'options') ) : the_row();?>
                    <div class="accred item">
                        <img src="<?php the_sub_field('image');?>"/>
                    </div>
            <?php endwhile; endif;?>

            <div class="social item">
                <?php if( have_rows('social_links', 'options') ):
                    while ( have_rows('social_links', 'options') ) : the_row();?>
                        <a href="<?php the_sub_field('social_link');?>"><?php the_sub_field('social_icon');?></a>

                <?php endwhile; endif;?>
            </div>

        </div>

    </div>

<div class="footer-logos">

    <div class="container cols-3">

            <div class="col">
                <a href="https://www.odysseytravels.com/">
                	<?php get_template_part('inc/img/odyssey', 'travels');?>
                </a>
            </div>
            <div class="col">
                <a href="https://www.tanzaniaodyssey.com/">
                	<?php get_template_part('inc/img/tanz', 'odyssey');?>
                </a>
            </div>
            <div class="col">
                <a href="https://www.asiaodyssey.com/">
                	<?php get_template_part('inc/img/asia', 'odyssey');?>
                </a>
            </div>
            <div class="col">
                <a href="https://www.southamericaodyssey.com/">
                	<?php get_template_part('inc/img/sa', 'odyssey');?>
                </a>
            </div>
    </div>

</div>

<div class="footer-links">
    <div class="container cols-3">
		<?php if( have_rows('link_section', 'options') ):
			while ( have_rows('link_section', 'options') ) : the_row();?>
		<div class="col">
			<?php the_sub_field('links');?>
		</div>
	<?php endwhile; endif;?> 
	</div>
</div>

<div class="socket">

    <div class="container cols-4 cols-sm-12">
        <div class="col">
            <p>&copy; <?php the_date('Y');?> Africa Odyssey, an Odyssey Travels Company</p>
        </div>
        <div class="col center">
            <p>Legal  |  Sitemap</p>
        </div>
        <div class="col right">
            <p>Digital Marketing by Digital potion</p>
        </div>
    </div>

</div>

</footer>

    <?php wp_footer(); ?>

    </body>

</html>
