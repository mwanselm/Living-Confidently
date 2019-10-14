<?php
/*
*  Template Name: Millenials Page
*/
?>

<?php  get_header();  ?>

<?php 
if ( have_posts() ) {
    while ( have_posts() ) : the_post();

    if(get_field('content')){
    	the_field('content');
    }
    else{
        the_content();

    }
    endwhile; // end while
} // end if
?>


 <div class="millenial" id="millenial">
      
      <div id="millenial-stage">
      
            <div id="millenial-intro">
              <h1>The Cash Stash Dash</h1>
              <p class="bold">Have you ever thought about what the cash for today’s burger might buy you tomorrow?</p>


              <div class="animation" id="animload"></div>
              
              <p>Tell us how many times you ate out or ordered take out last week — and be honest — to find out what else those expenses could get you in the long run.</p>
              <p id="timestext">I ate out <input type="number" id="times" value="" min="0" max="99" required onClick="this.select();" /> times last week.</p>
              <p><a href="#" class="btn" id="entertimes">GO</a></p>
       
            </div><!-- end intro -->
            
            
            <div id="millenial-results">
              
                <div id="result-top">
                    <h1>Here’s What it Could Get You.<sup>3</sup></h1>
                    <p id="rt-average">For the modern workforce, the national average for eating out is five times per week!<sup>1</sup>  Full belly today, but what could you be doing tomorrow instead?!</p>
                    <p id="rt-belowaverage">Wow, you’re eating out less than the national average for the modern workforce, which is five times per week.<sup>2</sup>  But have you thought about what cutting back even further might allow you to do?</p>
                    <p id="rt-zero">Wow. That’s amazing. Let’s compare that to the national average for the modern workforce, which is five times per week, and see how much you’re saving.</p>
                    <p id="rt-years">Eating out <strong><span id="xtimes">X</span></strong> times a week, you’ll end up spending <strong>$<span id="ytimes">Y</span></strong> over the course of ten years.</p>
                    <p id="rt-amountsto">That amounts to...</p>
                </div>   
                
                <!-- <div id="or">OR</div>-->
                
                <div id="results-carousel"> 
                  
                                
                  <div class="slide">
                    <div class="animation" id="anim1"></div>
                    <div class="copy"><span id="calc1">Z</span> tickets to a major music festival.</div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim2"></div>
                    <div class="copy">A donation of $500 to <span id="calc2">Z</span> of your favorite charities. </div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim3"></div>
                    <div class="copy"><span id="calc3">Z</span> trips to the day spa.</div>
                  </div>
                  <div class="slide">
                   <div class="animation" id="anim4"></div>
                    <div class="copy"><span id="calc4">Z</span> months of a solid emergency fund.</div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim5"></div>
                    <div class="copy"><span id="calc5">Z</span> new high-end smart phones.</div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim6"></div>
                    <div class="copy">Maxing out your 401(k) and IRA for <span id="calc6">Z</span> <span id="yeartext">years</span>.<sup>4</sup> </div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim7"></div>
                    <div class="copy"><span id="calc7">Z</span> round trip direct flights from New York to London.</div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim8"></div>
                    <div class="copy"><span id="calc8">Z</span> years at a private university. </div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim9"></div>
                    <div class="copy">A wedding for <span id="calc9">Z</span> people. </div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim10"></div>
                    <div class="copy">$<span id="calc10">Z</span> per month toward protecting your income with disability insurance. </div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim11"></div>
                    <div class="copy"><span id="calc11">Z</span> new Smart cars.</div>
                  </div>
                  <div class="slide">
                    <div class="animation" id="anim12"></div>
                    <div class="copy">$<span id="calc12">Z</span> per month toward protecting your family with life insurance. </div>
                  </div></div><!-- end results carousel -->
                
                <div id="final-carousel">
                  
                    <div class="slide">
                      <div class="animation" id="animfinal"></div>
                      <div id="final-prev"><img src="/wp-content/themes/lc_phase_2/img/back.png" /></i></div>
                      <div id="recalc">
                        <div class="circle"><img src="/wp-content/themes/lc_phase_2/img/recalc.png" /></div>
                        <div class="text">recalculate</div>
                      </div>
                      <div class="copy">To find out how to match your behaviors to your long-term priorities, like <a href="https://www.livingconfidently.com/protect-your-priorities/" target="_blank">protecting your family</a> and <a href="https://www.livingconfidently.com/protect-your-paycheck/" target="_blank">protecting your income</a>, meet with your financial advisor.</div>
                    </div>
                
                </div><!-- end final carousel --> 
                
                <div id="references">
                  <p><strong><sup>1</sup></strong> https://www.bankrate.com/pdfs/pr/20170626-Financial-Vices.pdf<br/><strong><sup>2</sup></strong> https://www.bankrate.com/pdfs/pr/20170626-Financial-Vices.pdf<br/><strong><sup>3</sup></strong> Based on estimate of three course meal for one at mid-range restaurant, per:<br/>https://www.numbeo.com/cost-of-living/country_result.jsp?country=United+States<br/><strong><sup>4</sup></strong> Assumes standard contribution limits.<br/><br/><span style="text-decoration: none; color: #003573;">2018&nbsp;-&nbsp;62327</span> Exp. 7/20</p>
                </div>
              
            </div>
      
        </div><!-- end stage -->
      
    </div><!-- end millenial wrapper -->

<?php get_footer(); ?>