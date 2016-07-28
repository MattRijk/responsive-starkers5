<?php
/**
 * The main template file.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
 
get_header(); ?>
 

<section class="main">
    <aside>
        <div class="content trending">
            <h3><a href="http://www.marketwatch.com/story/10-good-things-that-have-happened-in-2016-2016-07-27">10 good things in 2016</a></h3>
            <p>According to World Wildlife Fund, there are now 3,890 tigers in the world, up from about 3,200 in 2010. This marks the first time 
            in a century the population is growing. WWF’s goal is to double the number of wild tigers by 2022.</p>  
        </div>
    </aside>
    
    <aside>
        <div class="content find-it">
            <h3><a href="http://www.marketwatch.com/tools/stockresearch/screener/afterhours.asp">After-hours winners, losers</a></h3>
            <p>Investors in stock index funds have had a good run as most actively managed funds have lagged behind their benchmarks. But that may 
            change, as record-high equity indices favor skilled stock pickers.</p>  
        </div>
    </aside>
    
    <aside>
        <div class="content tools">
            <h3><a href="http://www.cnn.com/2015/11/03/world/cnnphotos-salgado-coffee-farming/index.html">The Illusion Of Life: A Case Study</a></h3>
            <p>With flat design becoming the ever visible trend of 2016, it’s clear why there’s been a resurgence in SVG usage. The benefits are many: 
            resolution-independence, cross-browser compatibility and accessible DOM nodes.</p>   
        </div>
    </aside>
    
</section>
<section class="atmosphere">
    <article>
    	<h2>Creating a modern atmosphere</h2>
    	<p>Released in March this year, Adobe Experience Design is a new all-in-one tool that lets you design and prototype websites and mobile apps. for websites and mobile apps. XD is still in beta and available for Mac with a Windows version on track for a release later in 2016.</p>
    	<a class="btn" title="Creating a modern atmosphere" href="#">Learn more</a>
    </article>
</section>
<section class="how-to">
    <aside>
        <div class="content">
            <h4>Responsive Web Design Is Not Mobile First</h4>
            <p>My colleague and coauthor Ted Schadler and I are watching with dismay as company after company shrinks its desktop website down to a 
               small screen using responsive web design (RWD) techniques so it fits on — but isn’t optimized for — smartphones.</p>
            <a href="http://www.huffingtonpost.com/julie-ask/responsive-web-design-is-_b_10861340.html">Learn More</a>
        </div>
    </aside>
    <aside>
        <div class="content">
            <h4>The future of web design</h4>
            <p>So, how do you design for the future?  How can you create a website now, using today’s 
                technology to make it as future-proof as possible?  How can you optimize it for Google and future-proof it 
                against future SEO updates, or even a new search engine?</p>
            <a href="http://searchengineland.com/google-says-page-speed-ranking-factor-use-mobile-page-speed-mobile-sites-upcoming-months-250874">Read more</a>
        </div>
    </aside>
    <blockquote>
        <p class="quote"></p>
        <p class="credit"><span class="bold">Author Name</span><br><span class="italic">Business Title</span><br>Company</p>
    </blockquote>
</section>

<?php get_footer(); ?>