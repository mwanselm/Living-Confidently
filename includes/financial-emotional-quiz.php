<?php
function financial_emotional_quiz_func($atts, $content = ""){
      $html = '<div class="quiz-living-confidentally">
      <section class="square hero quiz-hero">
          <div class="center">
              <div class="box">
                  <h1 class="headline">Financial &amp; Emotional Confidence Quiz</h1>
                  <svg width="30%" height="auto" id="08d825d5-cc1d-4202-b708-4072eecd788f" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 111.99 2"><defs><style>.\34 637436c-9d97-46f4-937a-b32f7b542ce9{fill:none;stroke:#fff;stroke-width:2px;}</style></defs><path class="4637436c-9d97-46f4-937a-b32f7b542ce9" d="M0.5,0.5h112" transform="translate(-0.5 0.5)"/></svg>
                  <p class="subhead">Find out how you stack up</p>
              </div>
          </div>
      </section>
      <section class="quiz-disclaimer">
              <p>Have you ever wondered what the most satisfied and emotionally confident Americans are doing right? Take our Financial &amp; Emotional Confidence Quiz to find out how confident you are today and what you can start doing to improve your financial confidence today.</p>
      </section>
      <section class="age-gender">
          <div class="center">
              <p class="blurb-copy">Before we get started, please tell us a couple of things about yourself:</p>
              <div class="gender">
                  <label for="gender">I identify as</label>
                  <select id="gender" data-question="1">
                      <option disabled="disabled" selected="">Select One</option>
                      <option value="0">Male</option>
                      <option value="1">Female</option>
                      <option value="2">Other</option>
                  </select>
              </div>
              <div class="age">
                  <label for="age">My age range is</label>
                  <select id="age" data-question="2">
                      <option disabled="" selected="">Select One</option>
                      <option value="0">18-24</option>
                      <option value="1">25-34</option>
                      <option value="2">35-44</option>
                      <option value="3">45-54</option>
                      <option value="4">55-64</option>
                      <option value="5">65+</option>
                  </select>
              </div>
              <div class="button"><a class="btn btn-blue analytics" data-analytics="15" href="#quiz-start" id="startQuiz">Start Quiz!</a>
                  
              </div>


          </div>
      </section>
      <section class="quiz-intro1">
          <div class="center">
              <p>This quiz will test your financial and emotional confidence by prompting you to respond to a series of statements. By having a clear (and honest!) picture of where you are today, you can take action to get to where you want to be tomorrow.</p>
          </div>
      </section>
      <section class="quiz-intro2">
          <div class="center" id="quiz-start">
              <img src="/c2c/img/c2c/Explainer_60.gif" id="sign-gif">
              <p class="mobile"  name="quiz-anchor">This quiz will test your financial and emotional confidence by prompting you to respond to a series of statements. By having a clear (and honest!) picture of where you are today, you can take action to get to where you want to be tomorrow.</p>
          </div>  
      </section>
      <section class="the-quiz" class="hidden">
          <div class="center"  id="quiz-top">
              <h2>How accurately do each of the following statements describe you?</h2>
              <!-- <form> -->
              <div class="lc-single-item slider">
                  <div class="quiz1">
                    <figure>
                      <div class="image"></div>
                      <figcaption>I make every effort to be sure my financial expectations are realistic and achievable.</figcaption>
                    </figure>
                    <input type="text" id="range" class="range" data-question="3" name="example_name" value="1" min="1" max="4">
                    <button class="btn quiz-next analytics" data-analytics="17"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz2">
                    <figure>
                      <div class="image"></div>
                      <figcaption>I consider myself financially successful.</figcaption>
                    </figure>
                    <input type="text" id="range2" class="range" data-question="4" name="example_name" value="1" min="1" max="4">
                    <button class="btn quiz-prev analytics" data-analytics="18"  href="#quiz-top">Previous</button>
                    <button class="btn quiz-next analytics" data-analytics="19"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz3">
                    <figure>
                      <div class="image"></div>
                      <figcaption>I resent people who have more money than I do.</figcaption>
                    </figure>
                    <input type="text" id="range3" class="range" data-question="5" name="example_name" value="1" min="1" max="4">
                    <button class="btn quiz-prev analytics" data-analytics="20"  href="#quiz-top">Previous</button>
                    <button class="btn quiz-next analytics" data-analytics="21"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz4">
                    <figure>
                      <div class="image"></div>
                      <figcaption>I avoid dealing with my finances because it overwhelms me.</figcaption>
                    </figure>
                    <input type="text" id="range4" class="range" data-question="6" name="example_name" value="1" min="1" max="4">
                    <button class="btn quiz-prev analytics" data-analytics="22"  href="#quiz-top">Previous</button>
                    <button class="btn quiz-next analytics" data-analytics="23"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz5">
                    <p class="no-img">How confident are you about each of the following aspects of your retirement?</p>
                    <table class="desktop">
                      <tr>
                          <td class="topic">&nbsp;</td>
                          <th>Not confident</th>
                          <th>Not very confident</th>
                          <th>Somewhat confident</th>
                          <th>Very confident</th>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Knowing how much money you will need for health care expenses in retirement</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not confident</span>
                                    <input type="radio" name="retirement-money" class="radio_question" data-question="7" value="1" />
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                               
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not very confident</span>
                                    <input type="radio" name="retirement-money" class="radio_question"  data-question="7" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Somewhat confident</span>
                                    <input type="radio" name="retirement-money" class="radio_question"  data-question="7" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Very confident</span>
                                    <input type="radio" name="retirement-money" class="radio_question"  data-question="7" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="light">
                          <td class="topic">Being ready for retirement financially</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not confident</span>
                                    <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                               
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not confident</span>
                                    <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                               
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not confident</span>
                                    <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                               
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not confident</span>
                                    <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                               
                          </td>
                      </tr>
                    </table>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Knowing how much money you will need for health care expenses in retirement</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Not confident
                                  <input type="radio" name="retirement-money" class="radio_question" data-question="7" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Not very confident
                                  <input type="radio" name="retirement-money" class="radio_question" data-question="7" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Somewhat confident
                                  <input type="radio" name="retirement-money" class="radio_question" data-question="7" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Very confident
                                  <input type="radio" name="retirement-money" class="radio_question" data-question="7" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                      </div>
                      <div class="mobile quiz-table">
                          <div class="topic"><p>Being ready for retirement financially</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Not confident
                              <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Not very confident
                              <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Somewhat confident
                              <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Very confident
                              <input type="radio" name="retirement-ready" class="radio_question" data-question="8" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <button class="btn quiz-prev analytics" data-analytics="24"  href="#quiz-top">Previous</button>
                    <button class="btn quiz-next analytics" data-analytics="25"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz6">
                    <figure>
                      <div class="image"></div>
                      <figcaption>Does your household have a formal, written financial plan for retirement and a strategy for achieving your retirement income objectives?</figcaption>
                    </figure>
                    <div class="check-boxes">
                      <div class="yes-no">
                          <div class="control-group">
                                  <label class="control control--checkbox"><span>Yes</span>
                                    <input type="radio" name="retirement-strategy" data-question="9" class="radio_question" id="retirement-strategy-yes" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                      </div>
                      <div class="yes-no">
                          <div class="control-group">
                                  <label class="control control--checkbox"><span>No</span>
                                    <input type="radio" name="retirement-strategy" data-question="9" class="radio_question" id="retirement-strategy-no" value="0">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                      </div>
                    </div>
                    <button class="btn quiz-prev analytics" data-analytics="26"  href="#quiz-top">Previous</button>
                    <button class="btn quiz-next analytics" data-analytics="27"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz7">
                    
                      <p class="no-img">Please indicate the extent to which each item is <br>a priority for your household.</p>
                    <table class="desktop">
                      <tr>
                          <td class="topic">&nbsp;</td>
                          <th>Not a financial priority</th>
                          <th>Minor financial priority</th>
                          <th>Major financial priority</th>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Having at least some guaranteed income, apart from Social Security,<br> in retirement</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not a financial priority</span>
                                    <input type="radio" name="guaranteed"  data-question="10" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Minor financial priority</span>
                                    <input type="radio" name="guaranteed"  data-question="10" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Major financial priority</span>
                                    <input type="radio" name="guaranteed"  data-question="10" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="light">
                          <td class="topic">Saving to start or<br>expand a business</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not a financial priority</span>
                                    <input type="radio" name="business"  data-question="11" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Minor financial priority</span>
                                    <input type="radio" name="business"  data-question="11" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Major financial priority</span>
                                    <input type="radio" name="business"  data-question="11" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Paying off loans<br> of any kind</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not a financial priority</span>
                                    <input type="radio" name="loans" data-question="12" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Minor financial priority</span>
                                    <input type="radio" name="loans" data-question="12" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Major financial priority</span>
                                    <input type="radio" name="loans" data-question="12" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="light">
                          <td class="topic">Saving for a major purchase or expenditure at some point in the future (such as a home,<br> car or boat)</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Not a financial priority</span>
                                    <input type="radio" name="purchase" data-question="13" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Minor financial priority</span>
                                    <input type="radio" name="purchase" data-question="13" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Major financial priority</span>
                                    <input type="radio" name="purchase" data-question="13" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                    </table>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Having at least some guaranteed income, apart from Social Security, in retirement</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Not a financial priority
                              <input type="radio" name="guaranteed"  data-question="10" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Minor financial priority
                              <input type="radio" name="guaranteed"  data-question="10" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Major financial priority
                              <input type="radio" name="guaranteed"  data-question="10" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                      </div>
                      <div class="mobile quiz-table">
                          <div class="topic"><p>Saving to start or expand a business</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Not a financial priority
                              <input type="radio" name="business"  data-question="11" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Minor financial priority
                              <input type="radio" name="business"  data-question="11" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Major financial priority
                              <input type="radio" name="business"  data-question="11" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Paying off loans of any kind</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Not a financial priority
                              <input type="radio" name="loans" data-question="12" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Minor financial priority
                              <input type="radio" name="loans" data-question="12" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Major financial priority
                              <input type="radio" name="loans" data-question="12" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Saving for a major purchase or expenditure at some point in the future (such as a home, car or boat)</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Not a financial priority
                              <input type="radio" name="purchase" data-question="13" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Minor financial priority
                              <input type="radio" name="purchase" data-question="13" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Major financial priority
                              <input type="radio" name="purchase" data-question="13" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <button class="btn quiz-prev analytics" data-analytics="28"  href="#quiz-top">Previous</button>
                    <button class="btn quiz-next analytics" data-analytics="29"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz8">
                    <p class="no-img">For each concept below, please indicate how well you <span class="emphasize">think</span> you need to understand it to be financially successful.</p>
                    <table class="desktop">
                      <tr>
                          <td class="topic">&nbsp;</td>
                          <th>Don’t need to understand at all</th>
                          <th>Don’t need to understand very well</th>
                          <th>Need to understand pretty well</th>
                          <th>Need to understand completely</th>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Income replacement<br> in retirement</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand at all</span>
                                    <input type="radio" name="replacement" data-question="14" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand very well</span>
                                    <input type="radio" name="replacement" data-question="14" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand pretty well</span>
                                    <input type="radio" name="replacement" data-question="14" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand completely</span>
                                    <input type="radio" name="replacement" data-question="14" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="light">
                          <td class="topic">Asset allocation</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand at all</span>
                                    <input type="radio" name="asset" data-question="15" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand very well</span>
                                    <input type="radio" name="asset" data-question="15" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand pretty well</span>
                                    <input type="radio" name="asset" data-question="15" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand completely</span>
                                    <input type="radio" name="asset" data-question="15" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Compounding</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand at all</span>
                                    <input type="radio" name="compounding" data-question="16" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand very well</span>
                                    <input type="radio" name="compounding" data-question="16" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand pretty well</span>
                                    <input type="radio" name="compounding" data-question="16" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand completely</span>
                                    <input type="radio" name="compounding" data-question="16" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="light">
                          <td class="topic">Income replacement because of a disability</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand at all</span>
                                    <input type="radio" name="disability" data-question="17" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand very well</span>
                                    <input type="radio" name="disability" data-question="17" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand pretty well</span>
                                    <input type="radio" name="disability" data-question="17" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand completely</span>
                                    <input type="radio" name="disability" data-question="17" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Risk tolerance</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand at all</span>
                                    <input type="radio" name="risk" data-question="18" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t need to understand very well</span>
                                    <input type="radio" name="risk" data-question="18" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand pretty well</span>
                                    <input type="radio" name="risk" data-question="18" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Need to understand completely</span>
                                    <input type="radio" name="risk" data-question="18" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                    </table>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Income replacement in retirement</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t need to understand at all
                              <input type="radio" name="replacement" data-question="14" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t need to understand very well
                              <input type="radio" name="replacement" data-question="14" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand pretty well
                              <input type="radio" name="replacement" data-question="14" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand completely
                              <input type="radio" name="replacement" data-question="14" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                      </div>
                      <div class="mobile quiz-table">
                          <div class="topic"><p>Asset allocation</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t need to understand at all
                              <input type="radio" name="asset" data-question="15" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t need to understand very well
                              <input type="radio" name="asset" data-question="15" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand pretty well
                              <input type="radio" name="asset" data-question="15" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand completely
                              <input type="radio" name="asset" data-question="15" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Compounding</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t need to understand at all
                              <input type="radio" name="compounding" data-question="16" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t need to understand very well
                              <input type="radio" name="compounding" data-question="16" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand pretty well
                              <input type="radio" name="compounding" data-question="16" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand completely
                              <input type="radio" name="compounding" data-question="16" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Income replacement because of a disability</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t need to understand at all
                              <input type="radio" name="disability" data-question="17" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t need to understand very well
                              <input type="radio" name="disability" data-question="17" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand pretty well
                              <input type="radio" name="disability" data-question="17" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand completely
                              <input type="radio" name="disability" data-question="17" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Risk tolerance</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t need to understand at all
                              <input type="radio" name="risk" data-question="18" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t need to understand very well
                              <input type="radio" name="risk" data-question="18" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand pretty well
                              <input type="radio" name="risk" data-question="18" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Need to understand completely
                              <input type="radio" name="risk" data-question="18" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <button class="btn quiz-prev analytics" data-analytics="30"  href="#quiz-top">Previous</button>
                    <button class="btn quiz-next analytics" data-analytics="31"  href="#quiz-top">Next</button>
                  </div>
                  <div class="quiz9">
                    <p class="no-img">For each concept below, please indicate how well you <span class="emphasize">actually</span> understand it.</p>
                    <table class="desktop">
                      <tr>
                          <td class="topic">&nbsp;</td>
                          <th>Don’t understand<br>at all</th>
                          <th>Don’t understand<br>very well</th>
                          <th>Understand<br>pretty well</th>
                          <th>Understand<br>completely</th>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Income replacement in retirement</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand at all</span>
                                    <input type="radio" name="replacement2" data-question="19" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand very well</span>
                                    <input type="radio" name="replacement2" data-question="19" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand pretty well</span>
                                    <input type="radio" name="replacement2" data-question="19" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand completely</span>
                                    <input type="radio" name="replacement2" data-question="19" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="light">
                          <td class="topic">Asset allocation</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand at all</span>
                                    <input type="radio" name="asset2" data-question="20" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand very well</span>
                                    <input type="radio" name="asset2" data-question="20" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand pretty well</span>
                                    <input type="radio" name="asset2" data-question="20" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand completely</span>
                                    <input type="radio" name="asset2" data-question="20" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Compounding</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand at all</span>
                                    <input type="radio" name="compounding2" data-question="21" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand very well</span>
                                    <input type="radio" name="compounding2" data-question="21" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand pretty well</span>
                                    <input type="radio" name="compounding2" data-question="21" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand completely</span>
                                    <input type="radio" name="compounding2" data-question="21" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="light">
                          <td class="topic">Income replacement because of a disability</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand at all</span>
                                    <input type="radio" name="disability2" data-question="22" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand very well</span>
                                    <input type="radio" name="disability2" data-question="22" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand pretty well</span>
                                    <input type="radio" name="disability2" data-question="22" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand completely</span>
                                    <input type="radio" name="disability2" data-question="22" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                      <tr class="dark">
                          <td class="topic">Risk tolerance</td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand at all</span>
                                    <input type="radio" name="risk2" data-question="23" class="radio_question" value="1">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Don’t understand very well</span>
                                    <input type="radio" name="risk2" data-question="23" class="radio_question" value="2">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand pretty well</span>
                                    <input type="radio" name="risk2" data-question="23" class="radio_question" value="3">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                          <td>
                              <div class="control-group">
                                  <label class="control control--checkbox"><span class="label-text">Understand completely</span>
                                    <input type="radio" name="risk2" data-question="23" class="radio_question" value="4">
                                    <div class="control__indicator"></div>
                                  </label>
                               </div>
                          </td>
                      </tr>
                    </table>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Income replacement in retirement</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t understand at all
                              <input type="radio" name="replacement2" data-question="19" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t understand very well
                              <input type="radio" name="replacement2" data-question="19" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand pretty well
                              <input type="radio" name="replacement2" data-question="19" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand completely
                              <input type="radio" name="replacement2" data-question="19" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                      </div>
                      <div class="mobile quiz-table">
                          <div class="topic"><p>Asset allocation</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t understand at all
                              <input type="radio" name="asset2" data-question="20" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t understand very well
                              <input type="radio" name="asset2" data-question="20" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand pretty well
                              <input type="radio" name="asset2" data-question="20" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand completely
                              <input type="radio" name="asset2" data-question="20" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Compounding</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t understand at all
                              <input type="radio" name="compounding2" data-question="21" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t understand very well
                              <input type="radio" name="compounding2" data-question="21" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand pretty well
                              <input type="radio" name="compounding2" data-question="21" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand completely
                              <input type="radio" name="compounding2" data-question="21" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Income replacement because of a disability</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t understand at all
                              <input type="radio" name="disability2" data-question="22" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t understand very well
                              <input type="radio" name="disability2" data-question="22" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand pretty well
                              <input type="radio" name="disability2" data-question="22" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand completely
                              <input type="radio" name="disability2" data-question="22" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <div class="mobile quiz-table">
                          <div class="topic"><p>Risk tolerance</p></div>
                          <div class="control-group">
                              <label class="answer dark control control--checkbox">Don’t understand at all
                              <input type="radio" name="risk2" data-question="23" class="radio_question" value="1">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer light control control--checkbox">Don’t understand very well
                              <input type="radio" name="risk2" data-question="23" class="radio_question" value="2">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand pretty well
                              <input type="radio" name="risk2" data-question="23" class="radio_question" value="3">
                                <div class="control__indicator"></div>
                              </label>
                              <label class="answer dark control control--checkbox">Understand completely
                              <input type="radio" name="risk2" data-question="23" class="radio_question" value="4">
                                <div class="control__indicator"></div>
                              </label>
                            </div>
                    </div>
                    <button class="btn quiz-prev analytics" data-analytics="32" >Previous</button>
                    <a class="btn analytics" href="javascript:void(0);" data-analytics="58" id="sendButton" type="submit">Done!</a>
                  </div>
            </div>
           <!--  </form>  -->
          </div>
      </section>
      <div class="float-disclaimer"  id="disclaimer-trigger">
          <a href="javascript:;" class="close"></a>
          <p class="title">Disclaimer</p>
          <p>These quiz questions are a representative sample of a larger survey study, The Guardian Study of Financial and Emotional Confidence&trade;. Your responses have been used to indicate which Financial and Emotional Confidence segment may best represent your current financial attitudes and priorities.</p>
      </div>
  </div>
  <script>
  jQuery.noConflict();
  jQuery( document ).ready(function( $ ) {
      var waypoint = new Waypoint({
            element: document.getElementById("disclaimer-trigger"),
            handler: function(direction) {
              $(".float-disclaimer").addClass("animated fadeInUp");
            },
            offset: "90%"
          })
      var waypoint = new Waypoint({
            element: document.getElementById("disclaimer-trigger"),
            handler: function(direction) {
              $(".float-disclaimer").addClass("animated fadeInUp");
            },
            offset: "90%"
          })
      
          var waypoint = new Waypoint({
        element: document.getElementById("sign-gif"),
        handler: function(direction) {
          $("#sign-gif").attr("src", "/c2c/img/c2c/Explainer_60.gif?" + Math.random()
  )
          this.destroy()
      },
        offset: "70%",
        
      });
      
      var isMobile = false; //initiate as false
      // device detection
      if(/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|ipad|iris|kindle|Android|Silk|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i.test(navigator.userAgent) 
          || /1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i.test(navigator.userAgent.substr(0,4))) { 
          isMobile = true;
      }
      
      if(window.innerWidth > window.innerHeight && isMobile == true){
          alert("Please use portrait orientation on your device when taking this quiz.");
      }


  });
  </script>';

  return $html;

}
add_shortcode('financial_emotional_quiz', 'financial_emotional_quiz_func');
?>