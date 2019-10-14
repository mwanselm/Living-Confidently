
analytics = new Array();
analytics[0] = new Array();
analytics[1] = new Array();
analytics[2] = ["Whitepaper", "Download", "Top resource block"]
analytics[3] = ["Executive Summary", "Download", "Top resource block"]
analytics[4] = ["Executive Summary", "Download", "About page"]
analytics[6] = ["infographics", "View", "Top resource block"]
analytics[7] = ["Video", "Play", "Top resource block"]
analytics[9] = ["Whitepaper", "Download", "Small changes block"]
analytics[10] = ["Whitepaper", "Download", "About page"]

analytics[12] = ["Quiz", "Take Quiz", "Top navigation"]
analytics[13] = ["Quiz", "Take Quiz", "Top resource block"]
analytics[14] = ["Quiz", "Take Quiz", "Financial control block"]
analytics[11] = ["Quiz", "Take Quiz", "Good news! You can help yourself toward reaching your full financial potential by making small changes today."]
analytics[62] = ["Quiz", "Take Quiz", "How does your confidence measure up?"]


analytics[15] = ["Quiz", "Start Quiz", "Quiz"]
analytics[16] = ["Quiz", "Previous", "Q1 financial expectations "]
analytics[17] = ["Quiz", "Next", "Q1 financial expectations "]
analytics[18] = ["Quiz", "Previous", "Q2 financially successful"]
analytics[19] = ["Quiz", "Next", "Q2 financially successful"]
analytics[20] = ["Quiz", "Previous", "Q3 resent "]
analytics[21] = ["Quiz", "Next", "Q3 resent "]
analytics[22] = ["Quiz", "Previous", "Q4 avoid"]
analytics[23] = ["Quiz", "Next", "Q4 avoid"]
analytics[24] = ["Quiz", "Previous", "QBlock5 Confident aspects retirement"]
analytics[25] = ["Quiz", "Next", "QBlock5 Confident aspects retirement"]
analytics[26] = ["Quiz", "Previous", "QBlock6 plan or strategy"]
analytics[27] = ["Quiz", "Next", "QBlock6 plan or strategy"]
analytics[28] = ["Quiz", "Previous", "QBlock7 priority for household"]
analytics[29] = ["Quiz", "Next", "QBlock7 priority for household"]
analytics[30] = ["Quiz", "Previous", "QBlock8 need to understand"]
analytics[31] = ["Quiz", "Next", "QBlock8 need to understand"]
analytics[32] = ["Quiz", "Previous", "QBlock9 actually understand"]
analytics[58] = ["Quiz", "Completed ", "Completed Quiz"]


analytics[59] = ["Discovery Questions", "Click", "Day-to-Day results page"]
analytics[60] = ["Budget Worksheet", "Click ", "Day-to-Day results page"]
analytics[61] = ["Literacy Quiz", "Click", "Day-to-Day results page"]

analytics[65] = ["Discovery Questions", "Click", "Confident planner results page"]
analytics[66] = ["Fiscal Fitness Infographic", "Click ", "Confident planner results page"]

analytics[71] = ["Budget Worksheet", "Click ", "Ambitious Spender results page"]
analytics[72] = ["Gap Worksheet", "Click ", "Ambitious Spender results page"]
analytics[73] = ["Discovery Questions", "Click", "Ambitious Spender results page"]

analytics[77] = ["Discovery Questions", "Click", "Retirement Realist results page"]
analytics[78] = ["Literacy Quiz", "Click", "Retirement Realist results page"]
analytics[79] = ["Gap Worksheet", "Click ", "Retirement Realist results page"]



jQuery.noConflict();
jQuery( document ).ready(function( $ ) {
  
  $('.analytics').click(function(){
    number = $(this).data('analytics');
    console.log(analytics[number][0] + "," + analytics[number][1] + "," + analytics[number][2]);

    ga('send', 'event', analytics[number][0], analytics[number][1], analytics[number][2]);
  });
  

});

