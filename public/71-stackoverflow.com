<!DOCTYPE html>
<html>
<head>

<title>Stack Overflow</title>
    <link rel="shortcut icon" href="//cdn.sstatic.net/Sites/stackoverflow/img/favicon.ico?v=4f32ecc8f43d">
    <link rel="apple-touch-icon image_src" href="//cdn.sstatic.net/Sites/stackoverflow/img/apple-touch-icon.png?v=c78bd457575a">
    <link rel="search" type="application/opensearchdescription+xml" title="Stack Overflow" href="/opensearch.xml">
    <meta name="twitter:card" content="summary">
    <meta name="twitter:domain" content="stackoverflow.com"/>
    <meta property="og:type" content="website" />    
    <meta property="og:image" itemprop="image primaryImageOfPage" content="http://cdn.sstatic.net/Sites/stackoverflow/img/apple-touch-icon@2.png?v=73d79a89bded&a" />
    <meta name="twitter:title" property="og:title" itemprop="title name" content="Stack Overflow" />
    <meta name="twitter:description" property="og:description" itemprop="description" content="Q&amp;A for professional and enthusiast programmers" />
    <meta property="og:url" content="http://stackoverflow.com/"/>

    
    
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="//cdn.sstatic.net/Js/stub.en.js?v=c697d63aaa53"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.sstatic.net/Sites/stackoverflow/all.css?v=96407c4042cb">

    <link rel="alternate" type="application/atom+xml" title="Feed of recent questions" href="/feeds">
    

    <script>
        StackExchange.init({"locale":"en","stackAuthUrl":"https://stackauth.com","serverTime":1459772108,"networkMetaHostname":"meta.stackexchange.com","routeName":"Home/Index","styleCode":true,"enableUserHovercards":true,"snippets":{"enabled":true,"domain":"stacksnippets.net"},"site":{"name":"Stack Overflow","description":"Q&A for professional and enthusiast programmers","isNoticesTabEnabled":true,"recaptchaPublicKey":"6LdchgIAAAAAAJwGpIzRQSOFaO0pU6s44Xt8aTwc","recaptchaAudioLang":"en","enableNewTagCreationWarning":true,"insertSpaceAfterNameTabCompletion":false,"id":1,"enableSocialMediaInSharePopup":true},"user":{"fkey":"3a254ce15131af5d63e994bdfd20f141","rep":0,"isAnonymous":true,"isAnonymousNetworkWide":true}});
        StackExchange.using.setCacheBreakers({"js/prettify-full.en.js":"718ea8b7c4f8","js/moderator.en.js":"fb585438a3ae","js/full-anon.en.js":"ce2777d1abc0","js/full.en.js":"98448109b467","js/wmd.en.js":"f83b15de0742","js/third-party/jquery.autocomplete.min.js":"e5f01e97f7c3","js/third-party/jquery.autocomplete.min.en.js":"","js/mobile.en.js":"85ec2c143a52","js/help.en.js":"24790cbb07ca","js/tageditor.en.js":"9c6df10dabc4","js/tageditornew.en.js":"c28dae04614d","js/inline-tag-editing.en.js":"7889156f8595","js/revisions.en.js":"2faaeaae2529","js/review.en.js":"fdd156676536","js/tagsuggestions.en.js":"d1ff9b84abe5","js/post-validation.en.js":"ee34c5cc4547","js/explore-qlist.en.js":"e71f14781288","js/events.en.js":"5e32b3f84f96","js/keyboard-shortcuts.en.js":"aed731a68e66","js/external-editor.en.js":"6fb6f25dfe94","js/external-editor.en.js":"6fb6f25dfe94","js/snippet-javascript.en.js":"9bccc1afbb47","js/snippet-javascript-codemirror.en.js":"2709696ae1da"});
        StackExchange.using("gps", function() {
             StackExchange.gps.init(true);
        });
    </script>
    
        <script>
            StackExchange.ready(function () {
                $('#nav-tour').click(function () {
                    StackExchange.using("gps", function() {
                        StackExchange.gps.track("aboutpage.click", { aboutclick_location: "headermain" }, true);
                    });
                });
            });
        </script>
</head>
<body class="home-page new-topbar">
    <noscript><div id="noscript-padding"></div></noscript>
    
        <script>(function () { var old = $.fn.contents; $.fn.contents = function () { try { return old.apply(this, arguments); } catch (e) { return $([]); } } })()</script>
        <iframe id="adzerk-user-match" width="0" height="0" frameborder="0" scrolling="no" onload="window.AUMIframeDone=true"
                src="https://ssum-sec.casalemedia.com/usermatch?s=183712&amp;cb=https%3A%2F%2Fengine.adzerk.net%2Fudb%2F22%2Fsync%2Fi.gif%3FpartnerId%3D1%26userId%3D"
                style="display: none;" marginheight="0" marginwidth="0"></iframe>




    <div id="notify-container"></div>
    <div id="overlay-header"></div>
    <div id="custom-header"></div>





<div class="topbar">
    <div class="topbar-wrapper">

        <div class="js-topbar-dialog-corral">


<div class="topbar-dialog siteSwitcher-dialog dno">
    <div class="header">
        <h3><a href="//stackoverflow.com">current community</a></h3>
    </div>
    <div class="modal-content current-site-container">
        <ul class="current-site">
                <li>
                        <div class="related-links">
                    <a href="http://chat.stackoverflow.com" class="js-gps-track"     data-gps-track="site_switcher.click({ item_type:6 })"
>chat</a>
            </div>




    <a href="//stackoverflow.com"
       class="current-site-link site-link js-gps-track"
       data-id="1"
       data-gps-track="
        site_switcher.click({ item_type:3 })">
        <div class="site-icon favicon favicon-stackoverflow" title="Stack Overflow"></div>
        Stack Overflow
    </a>

                </li>
                <li class="related-site">
                        <div class="L-shaped-icon-container">
        <span class="L-shaped-icon"></span>
    </div>

                    



    <a href="http://meta.stackoverflow.com"
       class="site-link js-gps-track"
       data-id="552"
       data-gps-track="
            site.switch({ target_site:552, item_type:3 }),
        site_switcher.click({ item_type:4 })">
        <div class="site-icon favicon favicon-stackoverflowmeta" title="Meta Stack Overflow"></div>
        Meta Stack Overflow
    </a>

                </li>
                            <li class="related-site">
                        <div class="L-shaped-icon-container">
        <span class="L-shaped-icon"></span>
    </div>

                    <a class="site-link js-gps-track"
                       href="//careers.stackoverflow.com?utm_source=stackoverflow.com&amp;utm_medium=site-ui&amp;utm_campaign=multicollider"
                            data-gps-track="site_switcher.click({ item_type:9 })"
>
                        <div class="site-icon favicon favicon-careers" title="Stack Overflow Careers"></div>
                        Stack Overflow Careers
                    </a>
                </li>
        </ul>
    </div>
    
    <div class="header" id="your-communities-header">
        <h3>
your communities        </h3>
            
    </div>
    <div class="modal-content" id="your-communities-section">
            
            <div class="call-to-login">
<a href="https://stackoverflow.com/users/signup?ssrc=site_switcher&amp;returnurl=http%3a%2f%2fstackoverflow.com%2f" class="login-link js-gps-track"     data-gps-track="site_switcher.click({ item_type:10 })"
>Sign up</a> or <a href="https://stackoverflow.com/users/login?ssrc=site_switcher&amp;returnurl=http%3a%2f%2fstackoverflow.com%2f" class="login-link js-gps-track"     data-gps-track="site_switcher.click({ item_type:11 })"
>log in</a> to customize your list.
            </div>
    </div>
    
    <div class="header">
        <h3><a href="//stackexchange.com/sites">more stack exchange communities</a></h3>
        <a href="http://blog.stackoverflow.com" class="fr">company blog</a>
    </div>
    <div class="modal-content">
            <div class="child-content"></div>
    </div>
</div>
        </div>

        <div class="network-items">

            <a href="//stackexchange.com"
               class="topbar-icon icon-site-switcher yes-hover js-site-switcher-button js-gps-track"
               data-gps-track="site_switcher.show"
               title="A list of all 154 Stack Exchange sites">
                <span class="hidden-text">Stack Exchange</span>
            </a>

    <a href="#"
       class="topbar-icon icon-inbox yes-hover js-inbox-button"
       title="Recent inbox messages">
        <span class="hidden-text">Inbox</span>
        <span class="unread-count" style="display:none"></span>
    </a>
    <a href="#"
       class="topbar-icon icon-achievements yes-hover js-achievements-button "
       data-unread-class=""
       title="Recent achievements: reputation, badges, and privileges earned">
        <span class="hidden-text">Reputation and Badges</span>
        <span class="unread-count" style="display:none">
            
        </span>
    </a>
        </div>

        <div class="topbar-links">

                <div class="links-container">
                <span class="topbar-menu-links">
                                    <a href="https://stackoverflow.com/users/signup?ssrc=head&returnurl=http%3a%2f%2fstackoverflow.com%2f" class="login-link">sign up</a>
                                <a href="https://stackoverflow.com/users/login?ssrc=head&returnurl=http%3a%2f%2fstackoverflow.com%2f" class="login-link">log in</a>

                        <a href="/tour">tour</a>
                            <a href="#" class="icon-help js-help-button" title="Help Center and other resources">
        help
        <span class="triangle"></span>
    </a>
    <div class="topbar-dialog help-dialog js-help-dialog dno">
        <div class="modal-content">
            <ul>
                                    <li>
                        <a href="/tour" class="js-gps-track" data-gps-track="help_popup.click({ item_type:1 })">
                            Tour
                            <span class="item-summary">
                                Start here for a quick overview of the site
                            </span>
                        </a>
                    </li>
                <li>
                    <a href="/help" class="js-gps-track" data-gps-track="help_popup.click({ item_type:4 })">
                        Help Center
                        <span class="item-summary">
                            Detailed answers to any questions you might have
                        </span>
                    </a>
                </li>
                    <li>
                        <a href="//meta.stackoverflow.com" class="js-gps-track" data-gps-track="help_popup.click({ item_type:2 })">
                            Meta
                            <span class="item-summary">
                                Discuss the workings and policies of this site
                            </span>
                        </a>
                    </li>
                <li>
                    <a href="http://stackoverflow.com/company/about" class="js-gps-track" data-gps-track="help_popup.click({ item_type:6 })">
                        About Us
                        <span class="item-summary">
                            Learn more about Stack Overflow the company
                        </span>
                    </a>
                </li>
                <li>
                    <a href="https://business.stackoverflow.com/?ref=topbar_help" class="js-gps-track" data-gps-track="help_popup.click({ item_type:7 })">
                        Business
                        <span class="item-summary">
                            Learn more about hiring developers or posting ads with us
                        </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>

                    </span>
                </div>

            <div class="search-container">
                <form id="search" action="/search" method="get" autocomplete="off">
                    <input name="q" type="text" placeholder="Search Q&amp;A" value="" tabindex="1" autocomplete="off" maxlength="240" />
                </form>
            </div>

        </div>
    </div>
</div>
    <script>
        StackExchange.ready(function() { StackExchange.topbar.init(); });
    </script>

    <div class="container">
        <div id="header">
            <br class="cbt">
            <div id="hlogo">
                <a href="/" >
                    Stack Overflow
                </a>
            </div>
            <div id="hmenus">
                <div class="nav mainnavs">
                    <ul>
                        <li><a id="nav-questions" href="/questions">Questions</a></li>
                            <li><a id="nav-jobs" href="/jobs">Jobs</a></li>
                        <li><a id="nav-tags" href="/tags">Tags</a></li>
                        <li><a id="nav-users" href="/users">Users</a></li>
                        <li><a id="nav-badges" href="/help/badges">Badges</a></li>
                                            </ul>
                </div>
                <div class="nav askquestion">
                    <ul>
                        <li>
                            <a id="nav-askquestion"  href="/questions/ask">Ask Question</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        



        <div id="content" class="snippet-hidden">
            

<div id="herobox">
    <div id="hero-content">
            <div id="close"><a title="click to minimize">_</a></div>
        <div id="blurb">
            Stack Overflow is a community of 4.7 million programmers, just like you, helping each other.
            <br/>
                <br/>Join them; it only takes a minute:<br/>
            <br/>
            <a href="/users/signup?ssrc=hero&amp;returnurl=http%3a%2f%2fstackoverflow.com%2f" id="tell-me-more" class="button">Sign up</a>
        </div>
        <div id="desc">
            <b>Join the Stack Overflow community to:</b>
            <ol id="hiw">
                <li id="q">Ask programming questions
                </li>
                <li id="an">Answer and help your peers
                </li>
                <li id="b">Get recognized for your expertise
                </li>
            </ol>
        </div>
        <div style="clear: both"></div>
    </div>
    <script>
        StackExchange.ready(function () {

            var location = 0;
            if ($("body").hasClass("questions-page")) {
                location = 1;;
            } else if ($("body").hasClass("question-page")) {
                location = 1;;
            } else if ($("body").hasClass("faq-page")) {
                location = 5;;
            } else if ($("body").hasClass("home-page")) {
                location = 3;;
            }

            $('#tell-me-more').click(function () {
                StackExchange.using("gps", function () {
                    StackExchange.gps.track("hero.action", { hero_action_type: 'cta', location: location }, true);
                });
            });
            $('#herobox #close').click(function () {
                StackExchange.using("gps", function () {
                    StackExchange.gps.track("hero.action", { hero_action_type: "minimize", location: location }, true);
                });
                $.cookie("hero", "mini", { path: "/", expires: 365 });
                $.ajax({
                    url: "/hero-mini",
                    success: function (data) {
                        $("#herobox").fadeOut("fast", function () {
                            $("#herobox").replaceWith(data);
                            $("#herobox-mini").fadeIn("fast");
                        });
                    }
                });
                return false;
            });
        });

    </script>
</div>
    <script>
        StackExchange.using("gps", function () {
            StackExchange.gps.track("hero.show", { hero_type: "hero", location: 3 }, true);
        });
    </script>
<div id="mainbar">

    <div class="subheader">
        <h1 id="h-top-questions">
                Top Questions
        </h1>
        <div id="tabs">
        <a class="youarehere" href="?tab=interesting" data-nav-xhref="" title="Questions that may be of interest to you based on your history and tag preference" data-value="interesting">
            interesting</a>
        <a href="?tab=featured" data-nav-xhref="" title="Questions with an active bounty" data-value="featured">
<span class="bounty-indicator-tab">465</span>            featured</a>
        <a href="?tab=hot" data-nav-xhref="" title="Questions with the most views, answers, and votes over the last few days" data-value="hot">
            hot</a>
        <a href="?tab=week" data-nav-xhref="" title="Questions with the most views, answers, and votes this week" data-value="week">
            week</a>
        <a href="?tab=month" data-nav-xhref="" title="Questions with the most views, answers, and votes this month" data-value="month">
            month</a>
</div>
    </div>
<div id="qlist-wrapper">
    <div id="question-mini-list">
        

<div class="question-summary narrow"
     id="question-summary-36402341"
     
     
     >
    <div onclick="window.location.href='/questions/36402341/sorting-a-list-manually'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="1 view">1</span></div>
            <div>view</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402341/sorting-a-list-manually" class="question-hyperlink" title="So basicaly the user is able to fill in a number, that number gets added to a list and once the user pressed a button the list should be sorted without using the .Sort(); function

    public int[] ...">Sorting a list manually</a></h3>
        <div class="tags t-c&#241; t-arrays t-list t-sorting">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/arrays" class="post-tag" title="show questions tagged &#39;arrays&#39;" rel="tag">arrays</a> <a href="/questions/tagged/list" class="post-tag" title="show questions tagged &#39;list&#39;" rel="tag">list</a> <a href="/questions/tagged/sorting" class="post-tag" title="show questions tagged &#39;sorting&#39;" rel="tag">sorting</a> 
        </div>
        <div class="started">
            <a href="/questions/36402341/sorting-a-list-manually" class="started-link">asked <span title="2016-04-04 12:14:13Z" class="relativetime">54 secs ago</span></a>
            <a href="/users/4642305/simon">Simon</a> <span class="reputation-score" title="reputation score " dir="ltr">17</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36398428"
     
     
     >
    <div onclick="window.location.href='/questions/36398428/git-push-prevent-dirty-code-using-regular-expression'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="-2 votes">-2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="20 views">20</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36398428/git-push-prevent-dirty-code-using-regular-expression" class="question-hyperlink" title="I would check push code into my git repository.

Can I do it using pre-push hook and a simple regular expression ?

Example flow:

My developer commit follow code:

DeprecatedClass myclass = new ...">git push - prevent dirty code using regular expression?</a></h3>
        <div class="tags t-regex t-git t-hook t-push">
            <a href="/questions/tagged/regex" class="post-tag" title="show questions tagged &#39;regex&#39;" rel="tag">regex</a> <a href="/questions/tagged/git" class="post-tag" title="show questions tagged &#39;git&#39;" rel="tag">git</a> <a href="/questions/tagged/hook" class="post-tag" title="show questions tagged &#39;hook&#39;" rel="tag">hook</a> <a href="/questions/tagged/push" class="post-tag" title="show questions tagged &#39;push&#39;" rel="tag">push</a> 
        </div>
        <div class="started">
            <a href="/questions/36398428/git-push-prevent-dirty-code-using-regular-expression" class="started-link">modified <span title="2016-04-04 12:14:08Z" class="relativetime">1 min ago</span></a>
            <a href="/users/2111053/luc-duzan">Luc DUZAN</a> <span class="reputation-score" title="reputation score " dir="ltr">693</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402332"
     
     
     >
    <div onclick="window.location.href='/questions/36402332/why-dont-fire-drop-event-in-html5'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402332/why-dont-fire-drop-event-in-html5" class="question-hyperlink" title="I&#39;m using html5 dragndrop native. Every events is fired? but not drop.

 $(&quot;.dnd&quot;).each(function(obj) {
      $(this).attr(&#39;draggable&#39;, true);
      $(this).on(&#39;dragstart&#39;, function(event) {
        ...">Why don&#39;t fire drop event in html5?</a></h3>
        <div class="tags t-html5 t-drag-and-drop">
            <a href="/questions/tagged/html5" class="post-tag" title="show questions tagged &#39;html5&#39;" rel="tag">html5</a> <a href="/questions/tagged/drag-and-drop" class="post-tag" title="show questions tagged &#39;drag-and-drop&#39;" rel="tag">drag-and-drop</a> 
        </div>
        <div class="started">
            <a href="/questions/36402332/why-dont-fire-drop-event-in-html5" class="started-link">asked <span title="2016-04-04 12:13:46Z" class="relativetime">1 min ago</span></a>
            <a href="/users/4871141/klaus-kater">Klaus Kater</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402330"
     
     
     >
    <div onclick="window.location.href='/questions/36402330/how-to-prevent-facebook-in-app-browser-from-opening-my-website-links'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402330/how-to-prevent-facebook-in-app-browser-from-opening-my-website-links" class="question-hyperlink" title="I&#39;m developing web app and I share my contents using Facebook, the issue I&#39;m facing is when someone clicks on the link posted on Facebook sometimes it opens using Facebook in app browser and that ...">How to prevent Facebook in app browser from opening my website links?</a></h3>
        <div class="tags t-javascript t-android t-ios t-facebook t-facebook-graph-api">
            <a href="/questions/tagged/javascript" class="post-tag" title="show questions tagged &#39;javascript&#39;" rel="tag">javascript</a> <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/ios" class="post-tag" title="show questions tagged &#39;ios&#39;" rel="tag">ios</a> <a href="/questions/tagged/facebook" class="post-tag" title="show questions tagged &#39;facebook&#39;" rel="tag">facebook</a> <a href="/questions/tagged/facebook-graph-api" class="post-tag" title="show questions tagged &#39;facebook-graph-api&#39;" rel="tag">facebook-graph-api</a> 
        </div>
        <div class="started">
            <a href="/questions/36402330/how-to-prevent-facebook-in-app-browser-from-opening-my-website-links" class="started-link">asked <span title="2016-04-04 12:13:41Z" class="relativetime">1 min ago</span></a>
            <a href="/users/5751341/mustafa-dwekat">Mustafa Dwekat</a> <span class="reputation-score" title="reputation score " dir="ltr">83</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402329"
     
     
     >
    <div onclick="window.location.href='/questions/36402329/how-to-detect-3d-point-is-inside-the-oriented-cube-or-not'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402329/how-to-detect-3d-point-is-inside-the-oriented-cube-or-not" class="question-hyperlink" title="I am using THREE.JS, I tried to use THREE.BOX3 methods but it does not work for the oriented box, as it only deals with max and min values. So is there any algorithm to detect 3D point lies inside the ...">How to detect 3D point is inside the oriented cube or not?</a></h3>
        <div class="tags t-three&#251;js">
            <a href="/questions/tagged/three.js" class="post-tag" title="show questions tagged &#39;three.js&#39;" rel="tag">three.js</a> 
        </div>
        <div class="started">
            <a href="/questions/36402329/how-to-detect-3d-point-is-inside-the-oriented-cube-or-not" class="started-link">asked <span title="2016-04-04 12:13:36Z" class="relativetime">1 min ago</span></a>
            <a href="/users/5680818/jitesh">Jitesh </a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402328"
     
     
     >
    <div onclick="window.location.href='/questions/36402328/how-to-automate-login-to-a-webpage-using-jsoup-in-android'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402328/how-to-automate-login-to-a-webpage-using-jsoup-in-android" class="question-hyperlink" title="I was trying to make an automatic login for my users to http://www.bvrit.edu.in using jsoup and the display the logged in web page for my users using a webview.I added the jsoup API,checked using ...">How to Automate login to a webpage using jsoup in android?</a></h3>
        <div class="tags t-android t-android-studio t-jsoup">
            <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/android-studio" class="post-tag" title="show questions tagged &#39;android-studio&#39;" rel="tag"><img src="//i.stack.imgur.com/xqoqk.png" height="16" width="18" alt="" class="sponsor-tag-img">android-studio</a> <a href="/questions/tagged/jsoup" class="post-tag" title="show questions tagged &#39;jsoup&#39;" rel="tag">jsoup</a> 
        </div>
        <div class="started">
            <a href="/questions/36402328/how-to-automate-login-to-a-webpage-using-jsoup-in-android" class="started-link">asked <span title="2016-04-04 12:13:34Z" class="relativetime">1 min ago</span></a>
            <a href="/users/4986496/prudhvi-reddy">Prudhvi Reddy</a> <span class="reputation-score" title="reputation score " dir="ltr">13</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36400769"
     
     
     >
    <div onclick="window.location.href='/questions/36400769/ice-add-candidate-error-whle-making-connection'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="7 views">7</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36400769/ice-add-candidate-error-whle-making-connection" class="question-hyperlink" title="I have got the latest version of Kurento media server v6.4.0 and when I&#39;m trying to make connection with kurento it is returning an error

{ [Error: Error adding candidate] code: 40401, data: { type: ...">ICE_ADD_CANDIDATE_ERROR whle making connection</a></h3>
        <div class="tags t-kurento">
            <a href="/questions/tagged/kurento" class="post-tag" title="show questions tagged &#39;kurento&#39;" rel="tag">kurento</a> 
        </div>
        <div class="started">
            <a href="/questions/36400769/ice-add-candidate-error-whle-making-connection/?lastactivity" class="started-link">modified <span title="2016-04-04 12:13:20Z" class="relativetime">1 min ago</span></a>
            <a href="/users/4955750/akshay-rathore">Akshay Rathore</a> <span class="reputation-score" title="reputation score " dir="ltr">103</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402323"
     
     
     >
    <div onclick="window.location.href='/questions/36402323/android-view-pager-not-displaying-items-in-the-fragment'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="5 views">5</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402323/android-view-pager-not-displaying-items-in-the-fragment" class="question-hyperlink" title="I have a slider menu in my application, when I click on an item in the menu it displays the corresponding fragment. That fragmet has a tablayout and a viewpager. The Fragment xml is given below


  ...">Android view pager not displaying items in the fragment</a></h3>
        <div class="tags t-android t-listview t-android-fragments t-android-tablayout">
            <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/listview" class="post-tag" title="show questions tagged &#39;listview&#39;" rel="tag">listview</a> <a href="/questions/tagged/android-fragments" class="post-tag" title="show questions tagged &#39;android-fragments&#39;" rel="tag">android-fragments</a> <a href="/questions/tagged/android-tablayout" class="post-tag" title="show questions tagged &#39;android-tablayout&#39;" rel="tag">android-tablayout</a> 
        </div>
        <div class="started">
            <a href="/questions/36402323/android-view-pager-not-displaying-items-in-the-fragment" class="started-link">asked <span title="2016-04-04 12:13:14Z" class="relativetime">1 min ago</span></a>
            <a href="/users/5680648/krishna">Krishna</a> <span class="reputation-score" title="reputation score " dir="ltr">22</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402321"
     
     
     >
    <div onclick="window.location.href='/questions/36402321/deletion-of-users-from-moodle'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402321/deletion-of-users-from-moodle" class="question-hyperlink" title="I have deleted users from moodle but the deleted users still show up in the users list with ability to undelete them. Is there any way to remove the deleted users from the users list.
">Deletion of users from moodle</a></h3>
        <div class="tags t-moodle">
            <a href="/questions/tagged/moodle" class="post-tag" title="show questions tagged &#39;moodle&#39;" rel="tag">moodle</a> 
        </div>
        <div class="started">
            <a href="/questions/36402321/deletion-of-users-from-moodle" class="started-link">asked <span title="2016-04-04 12:13:09Z" class="relativetime">1 min ago</span></a>
            <a href="/users/6013510/rupinder-kaur">rupinder kaur</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36154552"
     
     
     >
    <div onclick="window.location.href='/questions/36154552/replace-lock-screen-of-selected-apps-like-app-lock-appication'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status answered-accepted" title="one of the answers was accepted as the correct answer">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="21 views">21</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36154552/replace-lock-screen-of-selected-apps-like-app-lock-appication" class="question-hyperlink" title="I want develop App Locking application.
So, I create one Auto start service to check every second to selected application package name is launched or not.perform this task by using 

...">Replace Lock screen of selected apps like &ldquo;App Lock&rdquo; appication</a></h3>
        <div class="tags t-android t-lockscreen">
            <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/lockscreen" class="post-tag" title="show questions tagged &#39;lockscreen&#39;" rel="tag">lockscreen</a> 
        </div>
        <div class="started">
            <a href="/questions/36154552/replace-lock-screen-of-selected-apps-like-app-lock-appication/?lastactivity" class="started-link">answered <span title="2016-04-04 12:13:05Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/4757936/vishal-gadhiya">vishal gadhiya</a> <span class="reputation-score" title="reputation score " dir="ltr">22</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36373611"
     
     
     >
    <div onclick="window.location.href='/questions/36373611/in-r-data-table-is-it-possible-to-add-a-row-without-resetting-the-key'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="-1 votes">-1</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="28 views">28</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36373611/in-r-data-table-is-it-possible-to-add-a-row-without-resetting-the-key" class="question-hyperlink" title="I&#39;m working at a very large sparse matrix and I&#39;ve converted it to a data.table ({data.table} package) from a simple triplet matrix ({slam} package). 

I&#39;m trying to run a function that will tabulate ...">in R {data.table} is it possible to add a row without resetting the key?</a></h3>
        <div class="tags t-r t-data&#251;frame t-data&#251;table">
            <a href="/questions/tagged/r" class="post-tag" title="show questions tagged &#39;r&#39;" rel="tag">r</a> <a href="/questions/tagged/data.frame" class="post-tag" title="show questions tagged &#39;data.frame&#39;" rel="tag">data.frame</a> <a href="/questions/tagged/data.table" class="post-tag" title="show questions tagged &#39;data.table&#39;" rel="tag">data.table</a> 
        </div>
        <div class="started">
            <a href="/questions/36373611/in-r-data-table-is-it-possible-to-add-a-row-without-resetting-the-key" class="started-link">modified <span title="2016-04-04 12:13:04Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/3743213/seth127">seth127</a> <span class="reputation-score" title="reputation score " dir="ltr">72</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402319"
     
     
     >
    <div onclick="window.location.href='/questions/36402319/symfony2-ajax-send-option-selected-value'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="4 views">4</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402319/symfony2-ajax-send-option-selected-value" class="question-hyperlink" title="I have a problem when I send the script to the controller values selected option is null. 

Jquery code is:
(When user select status, run script. 

            $(&#39;.status_select&#39;).on({
            ...">Symfony2 Ajax send option selected value</a></h3>
        <div class="tags t-php t-ajax t-symfony2">
            <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/ajax" class="post-tag" title="show questions tagged &#39;ajax&#39;" rel="tag">ajax</a> <a href="/questions/tagged/symfony2" class="post-tag" title="show questions tagged &#39;symfony2&#39;" rel="tag">symfony2</a> 
        </div>
        <div class="started">
            <a href="/questions/36402319/symfony2-ajax-send-option-selected-value" class="started-link">asked <span title="2016-04-04 12:13:02Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/6155586/marcin">Marcin</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401741"
     
     
     >
    <div onclick="window.location.href='/questions/36401741/only-last-file-is-downloaded-with-iterated-form-submit-action'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="8 views">8</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401741/only-last-file-is-downloaded-with-iterated-form-submit-action" class="question-hyperlink" title="I only get last file downloaded from the form submit() where I expect multiple files to be downloaded using the for loop. I&#39;m pretty beginner in JavaScript and jQuery.  Please help.  

I&#39;m sending a ...">Only last file is downloaded with iterated form.submit() action</a></h3>
        <div class="tags t-javascript t-jquery t-forms t-download">
            <a href="/questions/tagged/javascript" class="post-tag" title="show questions tagged &#39;javascript&#39;" rel="tag">javascript</a> <a href="/questions/tagged/jquery" class="post-tag" title="show questions tagged &#39;jquery&#39;" rel="tag">jquery</a> <a href="/questions/tagged/forms" class="post-tag" title="show questions tagged &#39;forms&#39;" rel="tag">forms</a> <a href="/questions/tagged/download" class="post-tag" title="show questions tagged &#39;download&#39;" rel="tag">download</a> 
        </div>
        <div class="started">
            <a href="/questions/36401741/only-last-file-is-downloaded-with-iterated-form-submit-action/?lastactivity" class="started-link">answered <span title="2016-04-04 12:12:57Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/1206449/shivgre">shivgre</a> <span class="reputation-score" title="reputation score " dir="ltr">412</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36399152"
     
     
     >
    <div onclick="window.location.href='/questions/36399152/how-to-create-google-map-with-multiple-marker-form-current-location-to-10-km-ran'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="21 views">21</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36399152/how-to-create-google-map-with-multiple-marker-form-current-location-to-10-km-ran" class="question-hyperlink" title="I am developing a web app that are based on google map. I am using angular js(ng-map) for it. I have to developed multiple marker on google map from current location to 10 km left and 10 km right.
I ...">How to create google map with multiple marker form current location to 10 km range in rectangle form</a></h3>
        <div class="tags t-javascript t-angularjs t-google-maps t-ng-map">
            <a href="/questions/tagged/javascript" class="post-tag" title="show questions tagged &#39;javascript&#39;" rel="tag">javascript</a> <a href="/questions/tagged/angularjs" class="post-tag" title="show questions tagged &#39;angularjs&#39;" rel="tag">angularjs</a> <a href="/questions/tagged/google-maps" class="post-tag" title="show questions tagged &#39;google-maps&#39;" rel="tag"><img src="//i.stack.imgur.com/uE37r.png" height="16" width="18" alt="" class="sponsor-tag-img">google-maps</a> <a href="/questions/tagged/ng-map" class="post-tag" title="show questions tagged &#39;ng-map&#39;" rel="tag">ng-map</a> 
        </div>
        <div class="started">
            <a href="/questions/36399152/how-to-create-google-map-with-multiple-marker-form-current-location-to-10-km-ran/?lastactivity" class="started-link">modified <span title="2016-04-04 12:12:57Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/3209038/mishraoft">mishraoft</a> <span class="reputation-score" title="reputation score " dir="ltr">22</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36348942"
     
     
     >
    <div onclick="window.location.href='/questions/36348942/stanford-corenlp-get-the-word-of-the-pos-tag'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="7 views">7</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36348942/stanford-corenlp-get-the-word-of-the-pos-tag" class="question-hyperlink" title="POS Tagged Tree Example

I&#39;ve attached a sample POS tagged tree into this post via the Stanford CoreNLP. I believe the tree structure is used for this purpose but I want to traverse the POS tagged ...">Stanford CoreNLP - Get the word of the POS tag?</a></h3>
        <div class="tags t-java t-nlp t-stanford-nlp">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/nlp" class="post-tag" title="show questions tagged &#39;nlp&#39;" rel="tag">nlp</a> <a href="/questions/tagged/stanford-nlp" class="post-tag" title="show questions tagged &#39;stanford-nlp&#39;" rel="tag">stanford-nlp</a> 
        </div>
        <div class="started">
            <a href="/questions/36348942/stanford-corenlp-get-the-word-of-the-pos-tag" class="started-link">modified <span title="2016-04-04 12:12:56Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/1290309/tharindu">Tharindu</a> <span class="reputation-score" title="reputation score " dir="ltr">5</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402314"
     
     
     >
    <div onclick="window.location.href='/questions/36402314/eventhandler-is-always-null'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402314/eventhandler-is-always-null" class="question-hyperlink" title="I want to create a event and subscribe is on another ViewModel. The event handler is always getting null on the first ViewModel.
In the first Viewmodel I declared Event and raised as follows

  public ...">EventHandler is always null?</a></h3>
        <div class="tags t-c&#241; t-wpf t-events t-event-handling t-uap">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/wpf" class="post-tag" title="show questions tagged &#39;wpf&#39;" rel="tag">wpf</a> <a href="/questions/tagged/events" class="post-tag" title="show questions tagged &#39;events&#39;" rel="tag">events</a> <a href="/questions/tagged/event-handling" class="post-tag" title="show questions tagged &#39;event-handling&#39;" rel="tag">event-handling</a> <a href="/questions/tagged/uap" class="post-tag" title="show questions tagged &#39;uap&#39;" rel="tag">uap</a> 
        </div>
        <div class="started">
            <a href="/questions/36402314/eventhandler-is-always-null" class="started-link">asked <span title="2016-04-04 12:12:51Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/5756098/subminer">subminer</a> <span class="reputation-score" title="reputation score " dir="ltr">48</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402313"
     
     
     >
    <div onclick="window.location.href='/questions/36402313/you-are-not-allowed-to-move-this-item-to-the-trash-even-if-delete-posts-is-true'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402313/you-are-not-allowed-to-move-this-item-to-the-trash-even-if-delete-posts-is-true" class="question-hyperlink" title="$args = array(
            &#39;label&#39; => __(&#39;orders&#39;, $text_domain),
            &#39;description&#39; => __(&#39;Orders&#39;, $text_domain),
            &#39;labels&#39; => $labels,
            &#39;supports&#39; => ...">You are not allowed to move this item to the trash even if delete_posts is true</a></h3>
        <div class="tags t-wordpress t-wordpress-plugin t-custom-wordpress-pages">
            <a href="/questions/tagged/wordpress" class="post-tag" title="show questions tagged &#39;wordpress&#39;" rel="tag">wordpress</a> <a href="/questions/tagged/wordpress-plugin" class="post-tag" title="show questions tagged &#39;wordpress-plugin&#39;" rel="tag">wordpress-plugin</a> <a href="/questions/tagged/custom-wordpress-pages" class="post-tag" title="show questions tagged &#39;custom-wordpress-pages&#39;" rel="tag">custom-wordpress-pages</a> 
        </div>
        <div class="started">
            <a href="/questions/36402313/you-are-not-allowed-to-move-this-item-to-the-trash-even-if-delete-posts-is-true" class="started-link">asked <span title="2016-04-04 12:12:47Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/987704/prakash">Prakash</a> <span class="reputation-score" title="reputation score " dir="ltr">1,386</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401619"
     
     
     >
    <div onclick="window.location.href='/questions/36401619/merge-json-into-another-json-as-subdocument'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="6 answers">6</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="29 views">29</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401619/merge-json-into-another-json-as-subdocument" class="question-hyperlink" title="I want to merge two json files in a way that matching stop_id in second json is nested as a subdocument in first json.

This is what I mean:

first.json: This is a json file containing station stops ...">Merge json into another json as subdocument</a></h3>
        <div class="tags t-javascript t-json">
            <a href="/questions/tagged/javascript" class="post-tag" title="show questions tagged &#39;javascript&#39;" rel="tag">javascript</a> <a href="/questions/tagged/json" class="post-tag" title="show questions tagged &#39;json&#39;" rel="tag">json</a> 
        </div>
        <div class="started">
            <a href="/questions/36401619/merge-json-into-another-json-as-subdocument/?lastactivity" class="started-link">answered <span title="2016-04-04 12:12:33Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/470925/kenb">KenB</a> <span class="reputation-score" title="reputation score " dir="ltr">1,737</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-35918402"
     
     
     >
    <div onclick="window.location.href='/questions/35918402/how-to-perform-a-rolling-median-on-a-large-data-frame-in-pandas-without-encounte'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="2 answers">2</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="47 views">47</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/35918402/how-to-perform-a-rolling-median-on-a-large-data-frame-in-pandas-without-encounte" class="question-hyperlink" title="I have a huge data frame with about 1041507 rows.
I wanted to calculate a rolling_median for certain values, under certain categories in my data frame. For this I used a groupBy follwed by apply:  

...">How to perform a rolling_median on a large data frame in Pandas without encountering the skiplist_insert failed error?</a></h3>
        <div class="tags t-python t-pandas">
            <a href="/questions/tagged/python" class="post-tag" title="show questions tagged &#39;python&#39;" rel="tag">python</a> <a href="/questions/tagged/pandas" class="post-tag" title="show questions tagged &#39;pandas&#39;" rel="tag">pandas</a> 
        </div>
        <div class="started">
            <a href="/questions/35918402/how-to-perform-a-rolling-median-on-a-large-data-frame-in-pandas-without-encounte/?lastactivity" class="started-link">answered <span title="2016-04-04 12:12:30Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/5930693/coderbc">CoderBC</a> <span class="reputation-score" title="reputation score " dir="ltr">60</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401541"
     
     
     >
    <div onclick="window.location.href='/questions/36401541/individual-values-in-a-dropdownlist-using-jquery-ajax'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="3 answers">3</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="16 views">16</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401541/individual-values-in-a-dropdownlist-using-jquery-ajax" class="question-hyperlink" title="I got a dropdownlist which filters results using jquery ajax. But I can&#39;t figure out how to seperate the values in the list.

When I use this code:

$(&quot;#orderby&quot;).on(&#39;change&#39;, function() {

    ...">Individual values in a dropdownlist using jquery ajax</a></h3>
        <div class="tags t-php t-jquery t-ajax">
            <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/jquery" class="post-tag" title="show questions tagged &#39;jquery&#39;" rel="tag">jquery</a> <a href="/questions/tagged/ajax" class="post-tag" title="show questions tagged &#39;ajax&#39;" rel="tag">ajax</a> 
        </div>
        <div class="started">
            <a href="/questions/36401541/individual-values-in-a-dropdownlist-using-jquery-ajax/?lastactivity" class="started-link">answered <span title="2016-04-04 12:12:26Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/536532/daniel-almeida">Daniel Almeida</a> <span class="reputation-score" title="reputation score " dir="ltr">306</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402300"
     
     
     >
    <div onclick="window.location.href='/questions/36402300/fos-user-update-password-not-working-in-rare-case'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402300/fos-user-update-password-not-working-in-rare-case" class="question-hyperlink" title="I am using symfony2 CRUD generator to manage users . Very rare incident is happening when I update password of user it does not updated in the database. But when I update user password with any other ...">FOS user update password not working in rare case</a></h3>
        <div class="tags t-symfony2 t-fosuserbundle">
            <a href="/questions/tagged/symfony2" class="post-tag" title="show questions tagged &#39;symfony2&#39;" rel="tag">symfony2</a> <a href="/questions/tagged/fosuserbundle" class="post-tag" title="show questions tagged &#39;fosuserbundle&#39;" rel="tag">fosuserbundle</a> 
        </div>
        <div class="started">
            <a href="/questions/36402300/fos-user-update-password-not-working-in-rare-case" class="started-link">asked <span title="2016-04-04 12:12:08Z" class="relativetime">2 mins ago</span></a>
            <a href="/users/3599015/daishy">Daishy</a> <span class="reputation-score" title="reputation score " dir="ltr">26</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402298"
     
     
     >
    <div onclick="window.location.href='/questions/36402298/entity-framework-7-tph-include-properties-of-child-object'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402298/entity-framework-7-tph-include-properties-of-child-object" class="question-hyperlink" title="I have simple TPH hierarchy:

public abstract class UserAccount
{
    public string FirstName { get;set; }
}

public class InterpreterAccount : UserAccount
{
    public string PhoneNumber { get;set; }
...">Entity Framework 7 TPH include properties of child object</a></h3>
        <div class="tags t-c&#241; t-entity-framework t-entity-framework-core">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/entity-framework" class="post-tag" title="show questions tagged &#39;entity-framework&#39;" rel="tag">entity-framework</a> <a href="/questions/tagged/entity-framework-core" class="post-tag" title="show questions tagged &#39;entity-framework-core&#39;" rel="tag">entity-framework-core</a> 
        </div>
        <div class="started">
            <a href="/questions/36402298/entity-framework-7-tph-include-properties-of-child-object" class="started-link">asked <span title="2016-04-04 12:12:06Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/5961080/ivan-zverev">Ivan Zverev</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36183459"
     
     
     >
    <div onclick="window.location.href='/questions/36183459/epplus-insert-chart-columnstacked3d-switch-row-column'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="18 views">18</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36183459/epplus-insert-chart-columnstacked3d-switch-row-column" class="question-hyperlink" title="I&#39;m using epplus to create excel in my program!
I need insert a column chart.
This is my code:


//Add the chart to the sheet
var chart = sheet.Drawings.AddChart(chartTitle, ...">Epplus insert chart ColumnStacked3D switch row/column</a></h3>
        <div class="tags t-c&#241; t-excel t-charts t-epplus">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/excel" class="post-tag" title="show questions tagged &#39;excel&#39;" rel="tag">excel</a> <a href="/questions/tagged/charts" class="post-tag" title="show questions tagged &#39;charts&#39;" rel="tag">charts</a> <a href="/questions/tagged/epplus" class="post-tag" title="show questions tagged &#39;epplus&#39;" rel="tag">epplus</a> 
        </div>
        <div class="started">
            <a href="/questions/36183459/epplus-insert-chart-columnstacked3d-switch-row-column/?lastactivity" class="started-link">modified <span title="2016-04-04 12:11:59Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/1324284/ernie">Ernie</a> <span class="reputation-score" title="reputation score " dir="ltr">3,054</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402295"
     
     
     >
    <div onclick="window.location.href='/questions/36402295/java-lang-noclassdeffounderror-com-opensymphony-xwork2-modeldriven'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402295/java-lang-noclassdeffounderror-com-opensymphony-xwork2-modeldriven" class="question-hyperlink" title="I am getting this error while running login application in struts .Every required jar is installed as I saw many solutions of &#39;missing jar xwork-core-2.3.24.1&quot;.I did this solution but still getting ...">java.lang.NoClassDefFoundError: com/opensymphony/xwork2/ModelDriven</a></h3>
        <div class="tags t-jsp t-struts2">
            <a href="/questions/tagged/jsp" class="post-tag" title="show questions tagged &#39;jsp&#39;" rel="tag">jsp</a> <a href="/questions/tagged/struts2" class="post-tag" title="show questions tagged &#39;struts2&#39;" rel="tag">struts2</a> 
        </div>
        <div class="started">
            <a href="/questions/36402295/java-lang-noclassdeffounderror-com-opensymphony-xwork2-modeldriven" class="started-link">asked <span title="2016-04-04 12:11:55Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/5090432/jagriti-pandey">Jagriti Pandey</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402293"
     
     
     >
    <div onclick="window.location.href='/questions/36402293/cordova-blackberry10-run-time-install-and-launch'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402293/cordova-blackberry10-run-time-install-and-launch" class="question-hyperlink" title="I got like this but build is not install into device

I have refer the cordova website for blackberry 10

https://cordova.apache.org/docs/en/latest/guide/platforms/blackberry10/index.html

I done all ...">cordova Blackberry10 run time Install and launch</a></h3>
        <div class="tags t-cordova t-blackberry-10 t-momentics">
            <a href="/questions/tagged/cordova" class="post-tag" title="show questions tagged &#39;cordova&#39;" rel="tag">cordova</a> <a href="/questions/tagged/blackberry-10" class="post-tag" title="show questions tagged &#39;blackberry-10&#39;" rel="tag">blackberry-10</a> <a href="/questions/tagged/momentics" class="post-tag" title="show questions tagged &#39;momentics&#39;" rel="tag">momentics</a> 
        </div>
        <div class="started">
            <a href="/questions/36402293/cordova-blackberry10-run-time-install-and-launch" class="started-link">asked <span title="2016-04-04 12:11:50Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/5031127/govarthanan-venunathan">Govarthanan Venunathan</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402291"
     
     
     >
    <div onclick="window.location.href='/questions/36402291/why-does-targetnullvalue-update-nullable-source'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="4 views">4</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402291/why-does-targetnullvalue-update-nullable-source" class="question-hyperlink" title="TargetNullValue is supposed to update the binding Target when the binding Source evaluates to null:


  Gets or sets the value that is used in the target when the value of the source is null.


In ...">Why does TargetNullValue update nullable Source</a></h3>
        <div class="tags t-c&#241; t-wpf t-data-binding t-nullable">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/wpf" class="post-tag" title="show questions tagged &#39;wpf&#39;" rel="tag">wpf</a> <a href="/questions/tagged/data-binding" class="post-tag" title="show questions tagged &#39;data-binding&#39;" rel="tag">data-binding</a> <a href="/questions/tagged/nullable" class="post-tag" title="show questions tagged &#39;nullable&#39;" rel="tag">nullable</a> 
        </div>
        <div class="started">
            <a href="/questions/36402291/why-does-targetnullvalue-update-nullable-source" class="started-link">asked <span title="2016-04-04 12:11:46Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/4961688/tim-pohlmann">Tim Pohlmann</a> <span class="reputation-score" title="reputation score " dir="ltr">477</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36397714"
     
     
     >
    <div onclick="window.location.href='/questions/36397714/how-to-check-if-two-binary-search-trees-have-the-same-exact-keys-ignoring-value'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="33 views">33</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36397714/how-to-check-if-two-binary-search-trees-have-the-same-exact-keys-ignoring-value" class="question-hyperlink" title="HOW TO IMPLEMENT LAST METHOD? I have implemented most of the beginning parts of this polymorphic binary search tree but can&#39;t figure out how to check that two trees have the same keys. Keys could be ...">How to check if two binary search trees have the same exact keys (ignoring values)?</a></h3>
        <div class="tags t-java t-tree t-binary t-polymorphism t-key">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/tree" class="post-tag" title="show questions tagged &#39;tree&#39;" rel="tag">tree</a> <a href="/questions/tagged/binary" class="post-tag" title="show questions tagged &#39;binary&#39;" rel="tag">binary</a> <a href="/questions/tagged/polymorphism" class="post-tag" title="show questions tagged &#39;polymorphism&#39;" rel="tag">polymorphism</a> <a href="/questions/tagged/key" class="post-tag" title="show questions tagged &#39;key&#39;" rel="tag">key</a> 
        </div>
        <div class="started">
            <a href="/questions/36397714/how-to-check-if-two-binary-search-trees-have-the-same-exact-keys-ignoring-value/?lastactivity" class="started-link">modified <span title="2016-04-04 12:11:45Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/3699139/jorn-vernee">Jorn Vernee</a> <span class="reputation-score" title="reputation score " dir="ltr">521</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402289"
     
     
     >
    <div onclick="window.location.href='/questions/36402289/how-can-i-add-a-401-response-to-all-paths-in-swagger'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402289/how-can-i-add-a-401-response-to-all-paths-in-swagger" class="question-hyperlink" title="I have a rest api that I want to document in Swagger.
On all requests the API can respond with a 401.

So instead of defining the 401 again again and again for each path (not so DRY). 
I want to ...">How can I add a 401 response to all paths in Swagger</a></h3>
        <div class="tags t-response t-swagger">
            <a href="/questions/tagged/response" class="post-tag" title="show questions tagged &#39;response&#39;" rel="tag">response</a> <a href="/questions/tagged/swagger" class="post-tag" title="show questions tagged &#39;swagger&#39;" rel="tag">swagger</a> 
        </div>
        <div class="started">
            <a href="/questions/36402289/how-can-i-add-a-401-response-to-all-paths-in-swagger" class="started-link">asked <span title="2016-04-04 12:11:43Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/476796/extranion">Extranion</a> <span class="reputation-score" title="reputation score " dir="ltr">348</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402281"
     
     
     >
    <div onclick="window.location.href='/questions/36402281/custom-controller-on-second-store-not-working'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402281/custom-controller-on-second-store-not-working" class="question-hyperlink" title="I have created a module which is working like a charm. however it is showing 404 when I created a second store in subfolder way. If I am doing like &quot;localhost/mainsite/frontname/controller/function&quot; ...">custom controller on second store not working</a></h3>
        <div class="tags t-magento">
            <a href="/questions/tagged/magento" class="post-tag" title="show questions tagged &#39;magento&#39;" rel="tag">magento</a> 
        </div>
        <div class="started">
            <a href="/questions/36402281/custom-controller-on-second-store-not-working" class="started-link">asked <span title="2016-04-04 12:11:16Z" class="relativetime">3 mins ago</span></a>
            <a href="/users/2647840/nirmesh">Nirmesh</a> <span class="reputation-score" title="reputation score " dir="ltr">30</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36400160"
     
     
     >
    <div onclick="window.location.href='/questions/36400160/searching-multiple-word-in-a-given-column-using-regular-expression-in-sql-server'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="-2 votes">-2</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="23 views">23</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36400160/searching-multiple-word-in-a-given-column-using-regular-expression-in-sql-server" class="question-hyperlink" title="I want to perform multiple word on particular column. The given search string may be in different order.  For example , I want to search the book name &quot;Harry Potter Dream world &quot;from books table using ...">Searching multiple word in a given column using regular expression in SQL Server</a></h3>
        <div class="tags t-sql-server t-regex t-search t-using">
            <a href="/questions/tagged/sql-server" class="post-tag" title="show questions tagged &#39;sql-server&#39;" rel="tag">sql-server</a> <a href="/questions/tagged/regex" class="post-tag" title="show questions tagged &#39;regex&#39;" rel="tag">regex</a> <a href="/questions/tagged/search" class="post-tag" title="show questions tagged &#39;search&#39;" rel="tag">search</a> <a href="/questions/tagged/using" class="post-tag" title="show questions tagged &#39;using&#39;" rel="tag">using</a> 
        </div>
        <div class="started">
            <a href="/questions/36400160/searching-multiple-word-in-a-given-column-using-regular-expression-in-sql-server/?lastactivity" class="started-link">answered <span title="2016-04-04 12:10:53Z" class="relativetime">4 mins ago</span></a>
            <a href="/users/1632534/ozrentkalceckrznaric">OzrenTkalcecKrznaric</a> <span class="reputation-score" title="reputation score " dir="ltr">3,519</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36398151"
     
     
     >
    <div onclick="window.location.href='/questions/36398151/unmatched-returns-of-logger'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="3 votes">3</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="17 views">17</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36398151/unmatched-returns-of-logger" class="question-hyperlink" title="The static analyser dialyzer (I use it via dialyxir) reports all usage of Logger (Logger.info &quot;blah&quot;) as an unmatched return:

Expression produces a value of type &#39;ok&#39; | {&#39;error&#39;,_}, but this value is ...">Unmatched returns of Logger</a></h3>
        <div class="tags t-logging t-elixir t-static-analysis">
            <a href="/questions/tagged/logging" class="post-tag" title="show questions tagged &#39;logging&#39;" rel="tag">logging</a> <a href="/questions/tagged/elixir" class="post-tag" title="show questions tagged &#39;elixir&#39;" rel="tag">elixir</a> <a href="/questions/tagged/static-analysis" class="post-tag" title="show questions tagged &#39;static-analysis&#39;" rel="tag">static-analysis</a> 
        </div>
        <div class="started">
            <a href="/questions/36398151/unmatched-returns-of-logger/?lastactivity" class="started-link">answered <span title="2016-04-04 12:10:32Z" class="relativetime">4 mins ago</span></a>
            <a href="/users/2820/onorio-catenacci">Onorio Catenacci</a> <span class="reputation-score" title="reputation score " dir="ltr">8,462</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402269"
     
     
     >
    <div onclick="window.location.href='/questions/36402269/psc-had-add-to-the-path-but-pulg-still-cant-find-psc-how-to-fix-it'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="4 views">4</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402269/psc-had-add-to-the-path-but-pulg-still-cant-find-psc-how-to-fix-it" class="question-hyperlink" title="I had install the psc by stack, and then install pulg and bower by npm.

When I run the command &#39;pulg init&#39; the output info is &quot;* ERROR: psc executable not found.&quot;.

I find the psc in the ...">psc had add to the path, but pulg still can&#39;t find psc, how to fix it?</a></h3>
        <div class="tags t-purescript">
            <a href="/questions/tagged/purescript" class="post-tag" title="show questions tagged &#39;purescript&#39;" rel="tag">purescript</a> 
        </div>
        <div class="started">
            <a href="/questions/36402269/psc-had-add-to-the-path-but-pulg-still-cant-find-psc-how-to-fix-it" class="started-link">asked <span title="2016-04-04 12:10:32Z" class="relativetime">4 mins ago</span></a>
            <a href="/users/1432412/julian-zhang">Julian.zhang</a> <span class="reputation-score" title="reputation score " dir="ltr">227</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402267"
     
     
     >
    <div onclick="window.location.href='/questions/36402267/prestashop-how-to-hide-the-lang-particle-from-url-on-the-main-language'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402267/prestashop-how-to-hide-the-lang-particle-from-url-on-the-main-language" class="question-hyperlink" title="default prestashop&#39;s behaviour is to add a language particle to ALL the languages, including the main/default one. So for example:

domaintest.com/de > german, default
domaintest.com/it > italian
...">Prestashop: how to hide the lang particle from url on the main language?</a></h3>
        <div class="tags t-php t-localization t-translation t-prestashop t-prestashop-1&#251;6">
            <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/localization" class="post-tag" title="show questions tagged &#39;localization&#39;" rel="tag">localization</a> <a href="/questions/tagged/translation" class="post-tag" title="show questions tagged &#39;translation&#39;" rel="tag">translation</a> <a href="/questions/tagged/prestashop" class="post-tag" title="show questions tagged &#39;prestashop&#39;" rel="tag">prestashop</a> <a href="/questions/tagged/prestashop-1.6" class="post-tag" title="show questions tagged &#39;prestashop-1.6&#39;" rel="tag">prestashop-1.6</a> 
        </div>
        <div class="started">
            <a href="/questions/36402267/prestashop-how-to-hide-the-lang-particle-from-url-on-the-main-language" class="started-link">asked <span title="2016-04-04 12:10:24Z" class="relativetime">4 mins ago</span></a>
            <a href="/users/551357/stratboy">Stratboy</a> <span class="reputation-score" title="reputation score " dir="ltr">1,531</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402014"
     
     
     >
    <div onclick="window.location.href='/questions/36402014/how-to-fix-tcpip-server-clinet-apps-communication'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="15 views">15</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402014/how-to-fix-tcpip-server-clinet-apps-communication" class="question-hyperlink" title="I need to make TCPIP server and client apps which will communicate and do some sending of random files. So far, I made this:

Server:

static void Main(string[] args)
{
     IPAddress localIP = ...">How to fix TCPIP server/clinet apps communication</a></h3>
        <div class="tags t-c&#241; t-tcp-ip">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/tcp-ip" class="post-tag" title="show questions tagged &#39;tcp-ip&#39;" rel="tag">tcp-ip</a> 
        </div>
        <div class="started">
            <a href="/questions/36402014/how-to-fix-tcpip-server-clinet-apps-communication" class="started-link">modified <span title="2016-04-04 12:10:23Z" class="relativetime">4 mins ago</span></a>
            <a href="/users/4413054/fuzzi59">Fuzzi59</a> <span class="reputation-score" title="reputation score " dir="ltr">389</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402265"
     
     
     >
    <div onclick="window.location.href='/questions/36402265/mod-wsgi-in-wampserver-apache-and-serve-django-windows'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402265/mod-wsgi-in-wampserver-apache-and-serve-django-windows" class="question-hyperlink" title="I have seen the following video https://www.youtube.com/watch?v=VOkXG0jL_8U but i have NOT created yet a django application only the django project. I am not sure about the models (Entities in my ...">mod_wsgi in WampServer Apache and serve Django (Windows)</a></h3>
        <div class="tags t-django t-apache t-mod-wsgi t-wampserver">
            <a href="/questions/tagged/django" class="post-tag" title="show questions tagged &#39;django&#39;" rel="tag">django</a> <a href="/questions/tagged/apache" class="post-tag" title="show questions tagged &#39;apache&#39;" rel="tag">apache</a> <a href="/questions/tagged/mod-wsgi" class="post-tag" title="show questions tagged &#39;mod-wsgi&#39;" rel="tag">mod-wsgi</a> <a href="/questions/tagged/wampserver" class="post-tag" title="show questions tagged &#39;wampserver&#39;" rel="tag">wampserver</a> 
        </div>
        <div class="started">
            <a href="/questions/36402265/mod-wsgi-in-wampserver-apache-and-serve-django-windows" class="started-link">asked <span title="2016-04-04 12:10:21Z" class="relativetime">4 mins ago</span></a>
            <a href="/users/6155721/asimkon">asimkon</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402266"
     
     
     >
    <div onclick="window.location.href='/questions/36402266/how-to-display-navigation-links-on-an-embedded-photosphere'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402266/how-to-display-navigation-links-on-an-embedded-photosphere" class="question-hyperlink" title="I took a photosphere and embedded it using the following code (thanks to Dr.Molle) :

&lt;script>
    google.maps.event.addDomListener(window, &#39;load&#39;, function() {
        ...">How to display navigation links on an embedded photosphere?</a></h3>
        <div class="tags t-google-maps t-google-maps-api-3 t-google-maps-embed">
            <a href="/questions/tagged/google-maps" class="post-tag" title="show questions tagged &#39;google-maps&#39;" rel="tag"><img src="//i.stack.imgur.com/uE37r.png" height="16" width="18" alt="" class="sponsor-tag-img">google-maps</a> <a href="/questions/tagged/google-maps-api-3" class="post-tag" title="show questions tagged &#39;google-maps-api-3&#39;" rel="tag"><img src="//i.stack.imgur.com/uE37r.png" height="16" width="18" alt="" class="sponsor-tag-img">google-maps-api-3</a> <a href="/questions/tagged/google-maps-embed" class="post-tag" title="show questions tagged &#39;google-maps-embed&#39;" rel="tag">google-maps-embed</a> 
        </div>
        <div class="started">
            <a href="/questions/36402266/how-to-display-navigation-links-on-an-embedded-photosphere" class="started-link">asked <span title="2016-04-04 12:10:21Z" class="relativetime">4 mins ago</span></a>
            <a href="/users/6143819/vincent">Vincent</a> <span class="reputation-score" title="reputation score " dir="ltr">8</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402259"
     
     
     >
    <div onclick="window.location.href='/questions/36402259/spring-configuration-nested-class-vs-separate-class'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402259/spring-configuration-nested-class-vs-separate-class" class="question-hyperlink" title="What is the difference between separate @Configuration classes and nested @Configuration classes?

I see separate ones more often, but in Spring Guides on Github there are examples with nested classes ...">Spring @Configuration - nested class vs separate class</a></h3>
        <div class="tags t-spring t-spring-boot">
            <a href="/questions/tagged/spring" class="post-tag" title="show questions tagged &#39;spring&#39;" rel="tag">spring</a> <a href="/questions/tagged/spring-boot" class="post-tag" title="show questions tagged &#39;spring-boot&#39;" rel="tag">spring-boot</a> 
        </div>
        <div class="started">
            <a href="/questions/36402259/spring-configuration-nested-class-vs-separate-class" class="started-link">asked <span title="2016-04-04 12:10:04Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/3929917/silent-box">silent-box</a> <span class="reputation-score" title="reputation score " dir="ltr">98</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401716"
     
     
     >
    <div onclick="window.location.href='/questions/36401716/defining-a-function-in-a-namespace-other-than-the-adl-local-or-global-namespa'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="14 views">14</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401716/defining-a-function-in-a-namespace-other-than-the-adl-local-or-global-namespa" class="question-hyperlink" title="See the code below:

#include &lt;iostream>

/// Definition of void perform(a_lib::a_class&amp;). Where should I put this definition?
/// See the comments below for where I&#39;ve tried placing it.
// ...">Defining a function in a namespace other than the ADL, &ldquo;local&rdquo; or global namespace</a></h3>
        <div class="tags t-c&#231;&#231; t-namespaces t-argument-dependent-lookup">
            <a href="/questions/tagged/c%2b%2b" class="post-tag" title="show questions tagged &#39;c++&#39;" rel="tag">c++</a> <a href="/questions/tagged/namespaces" class="post-tag" title="show questions tagged &#39;namespaces&#39;" rel="tag">namespaces</a> <a href="/questions/tagged/argument-dependent-lookup" class="post-tag" title="show questions tagged &#39;argument-dependent-lookup&#39;" rel="tag">argument-dependent-lookup</a> 
        </div>
        <div class="started">
            <a href="/questions/36401716/defining-a-function-in-a-namespace-other-than-the-adl-local-or-global-namespa/?lastactivity" class="started-link">modified <span title="2016-04-04 12:09:59Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/2785528/douglas-o-moen">DOUGLAS O. MOEN</a> <span class="reputation-score" title="reputation score " dir="ltr">2,387</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402255"
     
     
     >
    <div onclick="window.location.href='/questions/36402255/calculate-distance-and-time-from-an-array-of-coordinates-distance-matrix-api'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402255/calculate-distance-and-time-from-an-array-of-coordinates-distance-matrix-api" class="question-hyperlink" title="i have an array of coordinates How to calculate driving distance and time through distance matrix api
">Calculate distance and time from an array of coordinates Distance matrix api</a></h3>
        <div class="tags t-google-maps-api-3 t-google-distancematrix-api">
            <a href="/questions/tagged/google-maps-api-3" class="post-tag" title="show questions tagged &#39;google-maps-api-3&#39;" rel="tag"><img src="//i.stack.imgur.com/uE37r.png" height="16" width="18" alt="" class="sponsor-tag-img">google-maps-api-3</a> <a href="/questions/tagged/google-distancematrix-api" class="post-tag" title="show questions tagged &#39;google-distancematrix-api&#39;" rel="tag">google-distancematrix-api</a> 
        </div>
        <div class="started">
            <a href="/questions/36402255/calculate-distance-and-time-from-an-array-of-coordinates-distance-matrix-api" class="started-link">asked <span title="2016-04-04 12:09:53Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/6155852/user69659">user69659</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402251"
     
     
     >
    <div onclick="window.location.href='/questions/36402251/how-to-determine-if-smartlock-is-enabled-on-device'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402251/how-to-determine-if-smartlock-is-enabled-on-device" class="question-hyperlink" title="It&#39;s possible to disable &quot;Smart Lock for Passwords&quot; in the Google settings, so my app shouldn&#39;t show the login hints, if it&#39;s disabled on the system layer.

Is there anything equivalent to determine ...">How to determine if SmartLock is enabled on device</a></h3>
        <div class="tags t-google-smartlockpasswords">
            <a href="/questions/tagged/google-smartlockpasswords" class="post-tag" title="show questions tagged &#39;google-smartlockpasswords&#39;" rel="tag">google-smartlockpasswords</a> 
        </div>
        <div class="started">
            <a href="/questions/36402251/how-to-determine-if-smartlock-is-enabled-on-device" class="started-link">asked <span title="2016-04-04 12:09:43Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/3111388/mescht">Mescht</a> <span class="reputation-score" title="reputation score " dir="ltr">41</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402138"
     
     
     >
    <div onclick="window.location.href='/questions/36402138/how-to-get-process-memory-on-qnx'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="13 views">13</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402138/how-to-get-process-memory-on-qnx" class="question-hyperlink" title="I would like to get the process memory on qnx. On a shell,I can get the result using the command showmem -P pid. In c I open a pipe for the command but then I would like to parse the output of the ...">How to get process memory on qnx</a></h3>
        <div class="tags t-c t-qnx t-qnx-neutrino">
            <a href="/questions/tagged/c" class="post-tag" title="show questions tagged &#39;c&#39;" rel="tag">c</a> <a href="/questions/tagged/qnx" class="post-tag" title="show questions tagged &#39;qnx&#39;" rel="tag">qnx</a> <a href="/questions/tagged/qnx-neutrino" class="post-tag" title="show questions tagged &#39;qnx-neutrino&#39;" rel="tag">qnx-neutrino</a> 
        </div>
        <div class="started">
            <a href="/questions/36402138/how-to-get-process-memory-on-qnx" class="started-link">modified <span title="2016-04-04 12:09:36Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/6007694/piyush-khatri">Piyush Khatri</a> <span class="reputation-score" title="reputation score " dir="ltr">1,355</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402247"
     
     
     >
    <div onclick="window.location.href='/questions/36402247/rails-how-to-set-the-grandparent-value-association-in-activerecord'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="7 views">7</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402247/rails-how-to-set-the-grandparent-value-association-in-activerecord" class="question-hyperlink" title="How can I retrieve the data in the grandparent association.

Give the following models:

class Schedule &lt; ActiveRecord::Base
  belongs_to :user
  has_many :rooms
  accepts_nested_attributes_for ...">Rails: How to set the grandparent value (association) in ActiveRecord</a></h3>
        <div class="tags t-ruby-on-rails t-ruby t-ruby-on-rails-4 t-activerecord">
            <a href="/questions/tagged/ruby-on-rails" class="post-tag" title="show questions tagged &#39;ruby-on-rails&#39;" rel="tag">ruby-on-rails</a> <a href="/questions/tagged/ruby" class="post-tag" title="show questions tagged &#39;ruby&#39;" rel="tag">ruby</a> <a href="/questions/tagged/ruby-on-rails-4" class="post-tag" title="show questions tagged &#39;ruby-on-rails-4&#39;" rel="tag">ruby-on-rails-4</a> <a href="/questions/tagged/activerecord" class="post-tag" title="show questions tagged &#39;activerecord&#39;" rel="tag">activerecord</a> 
        </div>
        <div class="started">
            <a href="/questions/36402247/rails-how-to-set-the-grandparent-value-association-in-activerecord" class="started-link">asked <span title="2016-04-04 12:09:34Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/3785426/samuraiblue">SamuraiBlue</a> <span class="reputation-score" title="reputation score " dir="ltr">184</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402244"
     
     
     >
    <div onclick="window.location.href='/questions/36402244/pivot-runner-null-command'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402244/pivot-runner-null-command" class="question-hyperlink" title="while updating existing schema on existing schema, I&#39;m facing following error.

I can&#39;t figure out why view may return an empty command. What are the most plausible cases ? If going over this error, I ...">Pivot Runner null command</a></h3>
        <div class="tags t-codefluent">
            <a href="/questions/tagged/codefluent" class="post-tag" title="show questions tagged &#39;codefluent&#39;" rel="tag">codefluent</a> 
        </div>
        <div class="started">
            <a href="/questions/36402244/pivot-runner-null-command" class="started-link">asked <span title="2016-04-04 12:09:19Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/1355701/olivier-romand">Olivier ROMAND</a> <span class="reputation-score" title="reputation score " dir="ltr">194</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402241"
     
     
     >
    <div onclick="window.location.href='/questions/36402241/redirect-back-after-submit-to-last-view-with-the-selected-dropdowns'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402241/redirect-back-after-submit-to-last-view-with-the-selected-dropdowns" class="question-hyperlink" title="I have 2 views, at the first view &quot;order/list&quot; is one dropdown to select the provider and a textfield for date, this fields are used to sort the data.
Behind each column is a button who redirect to an ...">Redirect back after submit to last view with the selected Dropdowns</a></h3>
        <div class="tags t-ruby-on-rails t-ruby-on-rails-3">
            <a href="/questions/tagged/ruby-on-rails" class="post-tag" title="show questions tagged &#39;ruby-on-rails&#39;" rel="tag">ruby-on-rails</a> <a href="/questions/tagged/ruby-on-rails-3" class="post-tag" title="show questions tagged &#39;ruby-on-rails-3&#39;" rel="tag">ruby-on-rails-3</a> 
        </div>
        <div class="started">
            <a href="/questions/36402241/redirect-back-after-submit-to-last-view-with-the-selected-dropdowns" class="started-link">asked <span title="2016-04-04 12:09:12Z" class="relativetime">5 mins ago</span></a>
            <a href="/users/6155583/krebsmann">Krebsmann</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402235"
     
     
     >
    <div onclick="window.location.href='/questions/36402235/lucene-stringfield-gets-tokenized-when-doc-is-retrieved-and-stored-again'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402235/lucene-stringfield-gets-tokenized-when-doc-is-retrieved-and-stored-again" class="question-hyperlink" title="Background

I simply add one document to an index and close it (Lucene 5.5.0):

Directory index = new RAMDirectory();
IndexWriterConfig config = new IndexWriterConfig(new StandardAnalyzer());
...">Lucene, StringField gets tokenized when doc is retrieved and stored again?</a></h3>
        <div class="tags t-lucene">
            <a href="/questions/tagged/lucene" class="post-tag" title="show questions tagged &#39;lucene&#39;" rel="tag">lucene</a> 
        </div>
        <div class="started">
            <a href="/questions/36402235/lucene-stringfield-gets-tokenized-when-doc-is-retrieved-and-stored-again" class="started-link">asked <span title="2016-04-04 12:09:00Z" class="relativetime">6 mins ago</span></a>
            <a href="/users/1248563/cornuz">cornuz</a> <span class="reputation-score" title="reputation score " dir="ltr">762</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36400808"
     
     
     >
    <div onclick="window.location.href='/questions/36400808/didnt-draw-the-venn-diagram'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="20 views">20</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36400808/didnt-draw-the-venn-diagram" class="question-hyperlink" title="I Have a problem when I draw the Venn diagram. I used these scripts:

CTRL_T7&lt;-c(&quot;Acido&quot;,&quot;Actino&quot;,&quot;Alpha_proteo&quot;) 
IPU_T7&lt;-c(&quot;Bacteria&quot;,&quot;Actino&quot;) 
TBCZ_T7&lt;-c(&quot;Actino&quot;)
...">Didn&#39;t draw the Venn-diagram</a></h3>
        <div class="tags t-r t-venn-diagram">
            <a href="/questions/tagged/r" class="post-tag" title="show questions tagged &#39;r&#39;" rel="tag">r</a> <a href="/questions/tagged/venn-diagram" class="post-tag" title="show questions tagged &#39;venn-diagram&#39;" rel="tag">venn-diagram</a> 
        </div>
        <div class="started">
            <a href="/questions/36400808/didnt-draw-the-venn-diagram/?lastactivity" class="started-link">answered <span title="2016-04-04 12:08:56Z" class="relativetime">6 mins ago</span></a>
            <a href="/users/4891738/alpha-beta-gamma">Alpha Beta Gamma</a> <span class="reputation-score" title="reputation score " dir="ltr">459</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402231"
     
     
     >
    <div onclick="window.location.href='/questions/36402231/how-to-know-no-of-nodes-running-in-a-map-job'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402231/how-to-know-no-of-nodes-running-in-a-map-job" class="question-hyperlink" title="does the number of input splits determine the number of running nodes in a mapreduce job.

i mean if i have 5 input splits will this make them distributed on 5 nodes to be processed. And is the number ...">how to know no. of nodes running in a map job</a></h3>
        <div class="tags t-hadoop t-mapreduce">
            <a href="/questions/tagged/hadoop" class="post-tag" title="show questions tagged &#39;hadoop&#39;" rel="tag">hadoop</a> <a href="/questions/tagged/mapreduce" class="post-tag" title="show questions tagged &#39;mapreduce&#39;" rel="tag">mapreduce</a> 
        </div>
        <div class="started">
            <a href="/questions/36402231/how-to-know-no-of-nodes-running-in-a-map-job" class="started-link">asked <span title="2016-04-04 12:08:51Z" class="relativetime">6 mins ago</span></a>
            <a href="/users/6109773/std">std</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402230"
     
     
     >
    <div onclick="window.location.href='/questions/36402230/how-can-i-generate-voice-recognition-result-in-arabic-in-android'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402230/how-can-i-generate-voice-recognition-result-in-arabic-in-android" class="question-hyperlink" title="every time when i run this , it generate result in English. can anyone please help me how can i get results in Arabic.

sr=SpeechRecognizer.createSpeechRecognizer(this);
        ...">How can i generate voice recognition result in Arabic in android ?</a></h3>
        <div class="tags t-android t-voice">
            <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/voice" class="post-tag" title="show questions tagged &#39;voice&#39;" rel="tag">voice</a> 
        </div>
        <div class="started">
            <a href="/questions/36402230/how-can-i-generate-voice-recognition-result-in-arabic-in-android" class="started-link">asked <span title="2016-04-04 12:08:48Z" class="relativetime">6 mins ago</span></a>
            <a href="/users/4107033/toshi-ali">Toshi Ali</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402221"
     
     
     >
    <div onclick="window.location.href='/questions/36402221/unwanted-popup-when-displaying-ad-in-webviewer-app-inventor'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402221/unwanted-popup-when-displaying-ad-in-webviewer-app-inventor" class="question-hyperlink" title="I&#39;m trying to set up a WebViewer to display an ad from Amazon with the code attached. Prior to adding these blocks my app ran perfectly. enter image description here

Im using If WebViewe.CurrentURL ≠ ...">Unwanted popup when displaying Ad in WebViewer App Inventor</a></h3>
        <div class="tags t-webview t-advertising t-app-inventor">
            <a href="/questions/tagged/webview" class="post-tag" title="show questions tagged &#39;webview&#39;" rel="tag">webview</a> <a href="/questions/tagged/advertising" class="post-tag" title="show questions tagged &#39;advertising&#39;" rel="tag">advertising</a> <a href="/questions/tagged/app-inventor" class="post-tag" title="show questions tagged &#39;app-inventor&#39;" rel="tag">app-inventor</a> 
        </div>
        <div class="started">
            <a href="/questions/36402221/unwanted-popup-when-displaying-ad-in-webviewer-app-inventor" class="started-link">asked <span title="2016-04-04 12:08:10Z" class="relativetime">6 mins ago</span></a>
            <a href="/users/6088613/mems-e-mendi">Mems E. Mendi</a> <span class="reputation-score" title="reputation score " dir="ltr">9</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402216"
     
     
     >
    <div onclick="window.location.href='/questions/36402216/create-a-store-scrolling-menu-for-my-game'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="6 views">6</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402216/create-a-store-scrolling-menu-for-my-game" class="question-hyperlink" title="I am trying to create a &quot;Store&quot; menu for my game with a vertical scrolling list of items (each line with a label, a logo and a button).

I found this topic which was really interesting : How to create ...">Create a store scrolling menu for my game</a></h3>
        <div class="tags t-swift t-sprite-kit t-scrollview">
            <a href="/questions/tagged/swift" class="post-tag" title="show questions tagged &#39;swift&#39;" rel="tag">swift</a> <a href="/questions/tagged/sprite-kit" class="post-tag" title="show questions tagged &#39;sprite-kit&#39;" rel="tag">sprite-kit</a> <a href="/questions/tagged/scrollview" class="post-tag" title="show questions tagged &#39;scrollview&#39;" rel="tag">scrollview</a> 
        </div>
        <div class="started">
            <a href="/questions/36402216/create-a-store-scrolling-menu-for-my-game" class="started-link">asked <span title="2016-04-04 12:07:53Z" class="relativetime">7 mins ago</span></a>
            <a href="/users/5751357/charlystudio">CharlyStudio</a> <span class="reputation-score" title="reputation score " dir="ltr">3</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402214"
     
     
     >
    <div onclick="window.location.href='/questions/36402214/optimal-mathematica-file-format-for-numerical-data'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402214/optimal-mathematica-file-format-for-numerical-data" class="question-hyperlink" title="Which is the optimal file format for storing an array of 15 million real numbers in Mathematica?
A curious thing is that I read in these numbers (by the Import command) from a .mat matlab file of ...">Optimal Mathematica file format for numerical data</a></h3>
        <div class="tags t-wolfram-mathematica">
            <a href="/questions/tagged/wolfram-mathematica" class="post-tag" title="show questions tagged &#39;wolfram-mathematica&#39;" rel="tag">wolfram-mathematica</a> 
        </div>
        <div class="started">
            <a href="/questions/36402214/optimal-mathematica-file-format-for-numerical-data" class="started-link">asked <span title="2016-04-04 12:07:48Z" class="relativetime">7 mins ago</span></a>
            <a href="/users/6155837/mans-henningson">Mans Henningson</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402213"
     
     
     >
    <div onclick="window.location.href='/questions/36402213/svn-checkout-on-windows-server'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402213/svn-checkout-on-windows-server" class="question-hyperlink" title="I am using visualSVN. I have 2 repositories on my windows server

I have a post commit hook on one that copies all the content of the repository 1 to folder c:\my\path\to\foler\one

I want to create a ...">svn checkout on windows server</a></h3>
        <div class="tags t-svn t-visualsvn-server">
            <a href="/questions/tagged/svn" class="post-tag" title="show questions tagged &#39;svn&#39;" rel="tag">svn</a> <a href="/questions/tagged/visualsvn-server" class="post-tag" title="show questions tagged &#39;visualsvn-server&#39;" rel="tag">visualsvn-server</a> 
        </div>
        <div class="started">
            <a href="/questions/36402213/svn-checkout-on-windows-server" class="started-link">asked <span title="2016-04-04 12:07:48Z" class="relativetime">7 mins ago</span></a>
            <a href="/users/945446/yebach">Yebach</a> <span class="reputation-score" title="reputation score " dir="ltr">537</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402209"
     
     
     >
    <div onclick="window.location.href='/questions/36402209/need-to-add-additional-header-row-while-exporting-a-grid-to-pdf'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402209/need-to-add-additional-header-row-while-exporting-a-grid-to-pdf" class="question-hyperlink" title="I&#39;m using jqgrid in php to export grid to pdf.
It&#39;s exporting the exact content of the grid. But I need to add additional custom row while extracting. For example if the grid has customer id and ...">Need to add additional header row while exporting a grid to pdf</a></h3>
        <div class="tags t-php t-pdf t-jqgrid t-header">
            <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/pdf" class="post-tag" title="show questions tagged &#39;pdf&#39;" rel="tag">pdf</a> <a href="/questions/tagged/jqgrid" class="post-tag" title="show questions tagged &#39;jqgrid&#39;" rel="tag">jqgrid</a> <a href="/questions/tagged/header" class="post-tag" title="show questions tagged &#39;header&#39;" rel="tag">header</a> 
        </div>
        <div class="started">
            <a href="/questions/36402209/need-to-add-additional-header-row-while-exporting-a-grid-to-pdf" class="started-link">asked <span title="2016-04-04 12:07:37Z" class="relativetime">7 mins ago</span></a>
            <a href="/users/3811527/user3811527">user3811527</a> <span class="reputation-score" title="reputation score " dir="ltr">3</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402208"
     
     
     >
    <div onclick="window.location.href='/questions/36402208/auth-module-for-kohana'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402208/auth-module-for-kohana" class="question-hyperlink" title="I have a project with the php framework Kohana. Currently, I&#39;m trying to add the authentification on my website. I saw the Auth module to add this functionality. I have some problems about it, I can&#39;t ...">Auth module for Kohana</a></h3>
        <div class="tags t-php t-kohana">
            <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/kohana" class="post-tag" title="show questions tagged &#39;kohana&#39;" rel="tag">kohana</a> 
        </div>
        <div class="started">
            <a href="/questions/36402208/auth-module-for-kohana" class="started-link">asked <span title="2016-04-04 12:07:33Z" class="relativetime">7 mins ago</span></a>
            <a href="/users/5023235/erlaunis">Erlaunis</a> <span class="reputation-score" title="reputation score " dir="ltr">269</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402205"
     
     
     >
    <div onclick="window.location.href='/questions/36402205/mksdcard-tool-error-in-windows'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402205/mksdcard-tool-error-in-windows" class="question-hyperlink" title="I am getting &quot;Unable to run mksdcard tool&quot; error while installing android studio in windows. 
Kindly let me know which libraries to install and how..?
">Mksdcard Tool error in windows</a></h3>
        <div class="tags t-android t-android-studio t-libraries">
            <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/android-studio" class="post-tag" title="show questions tagged &#39;android-studio&#39;" rel="tag"><img src="//i.stack.imgur.com/xqoqk.png" height="16" width="18" alt="" class="sponsor-tag-img">android-studio</a> <a href="/questions/tagged/libraries" class="post-tag" title="show questions tagged &#39;libraries&#39;" rel="tag">libraries</a> 
        </div>
        <div class="started">
            <a href="/questions/36402205/mksdcard-tool-error-in-windows" class="started-link">asked <span title="2016-04-04 12:07:28Z" class="relativetime">7 mins ago</span></a>
            <a href="/users/5198334/umer-khan">Umer Khan</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402198"
     
     
     >
    <div onclick="window.location.href='/questions/36402198/does-aerospike-support-rank-functions'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402198/does-aerospike-support-rank-functions" class="question-hyperlink" title="I am evaluating Aerospike and one of the requirements that i have is the support for rank function (RowNumber , Rank , DenseRank , Ntile). I tried to find it but couldnt succeed.

Can you help me out ...">Does Aerospike support rank functions?</a></h3>
        <div class="tags t-window-functions t-aerospike">
            <a href="/questions/tagged/window-functions" class="post-tag" title="show questions tagged &#39;window-functions&#39;" rel="tag">window-functions</a> <a href="/questions/tagged/aerospike" class="post-tag" title="show questions tagged &#39;aerospike&#39;" rel="tag">aerospike</a> 
        </div>
        <div class="started">
            <a href="/questions/36402198/does-aerospike-support-rank-functions" class="started-link">asked <span title="2016-04-04 12:07:03Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/2175079/dongoo">Dongoo</a> <span class="reputation-score" title="reputation score " dir="ltr">10</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402192"
     
     
     >
    <div onclick="window.location.href='/questions/36402192/ios-safari-audio-tag-restarting-playback'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402192/ios-safari-audio-tag-restarting-playback" class="question-hyperlink" title="As stated in the header. On iOs 7, iPhone 4, in safari, when I play an audio element it restarts playback of the file after a while (irregular timing). So the user can&#39;t listen to the audio file till ...">iOs safari audio tag restarting playback</a></h3>
        <div class="tags t-html5 t-ios7 t-html5-audio">
            <a href="/questions/tagged/html5" class="post-tag" title="show questions tagged &#39;html5&#39;" rel="tag">html5</a> <a href="/questions/tagged/ios7" class="post-tag" title="show questions tagged &#39;ios7&#39;" rel="tag">ios7</a> <a href="/questions/tagged/html5-audio" class="post-tag" title="show questions tagged &#39;html5-audio&#39;" rel="tag">html5-audio</a> 
        </div>
        <div class="started">
            <a href="/questions/36402192/ios-safari-audio-tag-restarting-playback" class="started-link">asked <span title="2016-04-04 12:07:00Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/1891321/cybersnake">Cybersnake</a> <span class="reputation-score" title="reputation score " dir="ltr">8</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402081"
     
     
     >
    <div onclick="window.location.href='/questions/36402081/running-queries-in-hive'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="6 views">6</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402081/running-queries-in-hive" class="question-hyperlink" title="I&#39;m trying to run the code below in Hue (hive), and get the following error. Would someone know why that is please?

Code is 

create table x1 as
    select * from cd.vw_data  where cvarvalue=&#39;56818&#39; ...">Running queries in hive</a></h3>
        <div class="tags t-hive t-hue">
            <a href="/questions/tagged/hive" class="post-tag" title="show questions tagged &#39;hive&#39;" rel="tag">hive</a> <a href="/questions/tagged/hue" class="post-tag" title="show questions tagged &#39;hue&#39;" rel="tag">hue</a> 
        </div>
        <div class="started">
            <a href="/questions/36402081/running-queries-in-hive" class="started-link">modified <span title="2016-04-04 12:06:55Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/1144035/gordon-linoff">Gordon Linoff</a> <span class="reputation-score" title="reputation score 402332" dir="ltr">402k</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402191"
     
     
     >
    <div onclick="window.location.href='/questions/36402191/angular2-inject-service-in-another-service-creates-2-instances'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="5 views">5</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402191/angular2-inject-service-in-another-service-creates-2-instances" class="question-hyperlink" title="I have two services: AuthService and MonBanquetService, and AuthService depends on MyService. Here&#39;s the basic code of these 2 services:

AuthService.ts:

import {Inject, Injectable} from ...">Angular2 Inject service in another service creates 2 instances</a></h3>
        <div class="tags t-angular2">
            <a href="/questions/tagged/angular2" class="post-tag" title="show questions tagged &#39;angular2&#39;" rel="tag">angular2</a> 
        </div>
        <div class="started">
            <a href="/questions/36402191/angular2-inject-service-in-another-service-creates-2-instances" class="started-link">asked <span title="2016-04-04 12:06:51Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/1935318/amaurymartiny">amaurymartiny</a> <span class="reputation-score" title="reputation score " dir="ltr">183</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402189"
     
     
     >
    <div onclick="window.location.href='/questions/36402189/installing-cocoapods-on-os-x-el-capitan-error'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402189/installing-cocoapods-on-os-x-el-capitan-error" class="question-hyperlink" title="First of all. I updated to El Capitan because of iOS 9.3 and it&#39;s support only in xCode 7.3.

After update I discovered that pod command isn&#39;t working.
I executed:

sudo gem install cocoapods
ERROR:  ...">Installing Cocoapods on OS X El Capitan error</a></h3>
        <div class="tags t-rubygems t-cocoapods t-osx-elcapitan">
            <a href="/questions/tagged/rubygems" class="post-tag" title="show questions tagged &#39;rubygems&#39;" rel="tag">rubygems</a> <a href="/questions/tagged/cocoapods" class="post-tag" title="show questions tagged &#39;cocoapods&#39;" rel="tag">cocoapods</a> <a href="/questions/tagged/osx-elcapitan" class="post-tag" title="show questions tagged &#39;osx-elcapitan&#39;" rel="tag">osx-elcapitan</a> 
        </div>
        <div class="started">
            <a href="/questions/36402189/installing-cocoapods-on-os-x-el-capitan-error" class="started-link">asked <span title="2016-04-04 12:06:43Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/752775/marcin-kapusta">Marcin Kapusta</a> <span class="reputation-score" title="reputation score " dir="ltr">757</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402188"
     
     
     >
    <div onclick="window.location.href='/questions/36402188/make-xib-only-for-ipad'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402188/make-xib-only-for-ipad" class="question-hyperlink" title="I am creating app which is only for iPad device. In old Xcode, while creating project, if we select iPad device, it creates xib UIView only for iPad device. But in new Xcode 7, if we select iPad ...">Make xib only for iPad</a></h3>
        <div class="tags t-ipad t-xcode7">
            <a href="/questions/tagged/ipad" class="post-tag" title="show questions tagged &#39;ipad&#39;" rel="tag">ipad</a> <a href="/questions/tagged/xcode7" class="post-tag" title="show questions tagged &#39;xcode7&#39;" rel="tag">xcode7</a> 
        </div>
        <div class="started">
            <a href="/questions/36402188/make-xib-only-for-ipad" class="started-link">asked <span title="2016-04-04 12:06:41Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/5357683/vyas-kishan">Vyas Kishan</a> <span class="reputation-score" title="reputation score " dir="ltr">14</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401323"
     
     
     >
    <div onclick="window.location.href='/questions/36401323/create-records-to-point-any-request-from-another-server'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401323/create-records-to-point-any-request-from-another-server" class="question-hyperlink" title="I have the domain &quot;example.com&quot; (I wish) registered with Godaddy, I changed the nameservers to point to Digital Ocean where I have a droplet. Then I added the following records into my Digital Ocean ...">Create records to point any request from another server</a></h3>
        <div class="tags t-dns t-server t-hosting t-cname t-nameservers">
            <a href="/questions/tagged/dns" class="post-tag" title="show questions tagged &#39;dns&#39;" rel="tag">dns</a> <a href="/questions/tagged/server" class="post-tag" title="show questions tagged &#39;server&#39;" rel="tag">server</a> <a href="/questions/tagged/hosting" class="post-tag" title="show questions tagged &#39;hosting&#39;" rel="tag">hosting</a> <a href="/questions/tagged/cname" class="post-tag" title="show questions tagged &#39;cname&#39;" rel="tag">cname</a> <a href="/questions/tagged/nameservers" class="post-tag" title="show questions tagged &#39;nameservers&#39;" rel="tag">nameservers</a> 
        </div>
        <div class="started">
            <a href="/questions/36401323/create-records-to-point-any-request-from-another-server" class="started-link">modified <span title="2016-04-04 12:06:35Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/1932993/human">human</a> <span class="reputation-score" title="reputation score " dir="ltr">78</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401393"
     
     
     >
    <div onclick="window.location.href='/questions/36401393/android-facebook-how-to-login-with-facebook-after-buttonclick'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="12 views">12</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401393/android-facebook-how-to-login-with-facebook-after-buttonclick" class="question-hyperlink" title="When I start the Login2Activity it will open the screen and after a second it will directly open a facebook login popup. I want that the facebook login popup will open after clicking on the ...">Android &amp; Facebook: How to login with facebook after buttonClick?</a></h3>
        <div class="tags t-java t-android t-facebook t-facebook-graph-api">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/facebook" class="post-tag" title="show questions tagged &#39;facebook&#39;" rel="tag">facebook</a> <a href="/questions/tagged/facebook-graph-api" class="post-tag" title="show questions tagged &#39;facebook-graph-api&#39;" rel="tag">facebook-graph-api</a> 
        </div>
        <div class="started">
            <a href="/questions/36401393/android-facebook-how-to-login-with-facebook-after-buttonclick" class="started-link">modified <span title="2016-04-04 12:06:32Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/3432681/user3432681">user3432681</a> <span class="reputation-score" title="reputation score " dir="ltr">111</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402176"
     
     
     >
    <div onclick="window.location.href='/questions/36402176/c-unmanaged-dll-in-c-sharp-runtime-import-failure'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="3 votes">3</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="10 views">10</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402176/c-unmanaged-dll-in-c-sharp-runtime-import-failure" class="question-hyperlink" title="I&#39;m running a C# XNA game project on Microsoft Visual Studio 2013 using a 32-bit architecture. 
When attempting to load an unmanaged C++ DLL at runtime using the DllImport tag, I get the error below. ...">C++ Unmanaged DLL in C# runtime import failure</a></h3>
        <div class="tags t-c&#241; t-c&#231;&#231; t-dll t-xna t-fmod">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/c%2b%2b" class="post-tag" title="show questions tagged &#39;c++&#39;" rel="tag">c++</a> <a href="/questions/tagged/dll" class="post-tag" title="show questions tagged &#39;dll&#39;" rel="tag">dll</a> <a href="/questions/tagged/xna" class="post-tag" title="show questions tagged &#39;xna&#39;" rel="tag">xna</a> <a href="/questions/tagged/fmod" class="post-tag" title="show questions tagged &#39;fmod&#39;" rel="tag">fmod</a> 
        </div>
        <div class="started">
            <a href="/questions/36402176/c-unmanaged-dll-in-c-sharp-runtime-import-failure" class="started-link">asked <span title="2016-04-04 12:06:16Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/1259955/caubry">caubry</a> <span class="reputation-score" title="reputation score " dir="ltr">129</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402175"
     
     
     >
    <div onclick="window.location.href='/questions/36402175/classpathresource-webapp-to-uri-across-two-modules'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402175/classpathresource-webapp-to-uri-across-two-modules" class="question-hyperlink" title="How I can get 

new ClassPathResource(webappFolderName).getURI();


for utilities module for case, when webapp is located in web module?

I am interested only in solution for IntellijIdea (because in ...">ClassPathResource webapp to URI across two modules</a></h3>
        <div class="tags t-java t-intellij-idea t-resources t-uri t-classpath">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/intellij-idea" class="post-tag" title="show questions tagged &#39;intellij-idea&#39;" rel="tag"><img src="//i.stack.imgur.com/WVlkK.png" height="16" width="18" alt="" class="sponsor-tag-img">intellij-idea</a> <a href="/questions/tagged/resources" class="post-tag" title="show questions tagged &#39;resources&#39;" rel="tag">resources</a> <a href="/questions/tagged/uri" class="post-tag" title="show questions tagged &#39;uri&#39;" rel="tag">uri</a> <a href="/questions/tagged/classpath" class="post-tag" title="show questions tagged &#39;classpath&#39;" rel="tag">classpath</a> 
        </div>
        <div class="started">
            <a href="/questions/36402175/classpathresource-webapp-to-uri-across-two-modules" class="started-link">asked <span title="2016-04-04 12:06:15Z" class="relativetime">8 mins ago</span></a>
            <a href="/users/2334771/arthur">Arthur</a> <span class="reputation-score" title="reputation score " dir="ltr">66</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402172"
     
     
     >
    <div onclick="window.location.href='/questions/36402172/npm-install-failing-with-octoblumongojs-branch-from-github'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402172/npm-install-failing-with-octoblumongojs-branch-from-github" class="question-hyperlink" title="I imagine this is entirely an issue with the configuration on my end but I have spent 2 days trying to just get &quot;npm install&quot; to work after cloning the meshblu repo. I have gone through setting up my ...">npm install failing with octoblu:mongojs branch from github</a></h3>
        <div class="tags t-windows t-npm t-npm-install t-mongojs">
            <a href="/questions/tagged/windows" class="post-tag" title="show questions tagged &#39;windows&#39;" rel="tag">windows</a> <a href="/questions/tagged/npm" class="post-tag" title="show questions tagged &#39;npm&#39;" rel="tag">npm</a> <a href="/questions/tagged/npm-install" class="post-tag" title="show questions tagged &#39;npm-install&#39;" rel="tag">npm-install</a> <a href="/questions/tagged/mongojs" class="post-tag" title="show questions tagged &#39;mongojs&#39;" rel="tag">mongojs</a> 
        </div>
        <div class="started">
            <a href="/questions/36402172/npm-install-failing-with-octoblumongojs-branch-from-github" class="started-link">asked <span title="2016-04-04 12:06:01Z" class="relativetime">9 mins ago</span></a>
            <a href="/users/41703/ryanrdl">ryanrdl</a> <span class="reputation-score" title="reputation score " dir="ltr">326</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402171"
     
     
     >
    <div onclick="window.location.href='/questions/36402171/is-the-last-appearance-of-a-local-variable-treated-as-an-rvalue-in-c11'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="6 views">6</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402171/is-the-last-appearance-of-a-local-variable-treated-as-an-rvalue-in-c11" class="question-hyperlink" title="Are local variables&#39; last appearance in their scope treated as an rvalue? (Like in return statements.) Eg. in the code below, are the strings moved into the vector or V.push_back(std::move(newitem)) ...">Is the last appearance of a local variable treated as an rvalue in C++11?</a></h3>
        <div class="tags t-c&#231;&#231;11 t-move-semantics">
            <a href="/questions/tagged/c%2b%2b11" class="post-tag" title="show questions tagged &#39;c++11&#39;" rel="tag">c++11</a> <a href="/questions/tagged/move-semantics" class="post-tag" title="show questions tagged &#39;move-semantics&#39;" rel="tag">move-semantics</a> 
        </div>
        <div class="started">
            <a href="/questions/36402171/is-the-last-appearance-of-a-local-variable-treated-as-an-rvalue-in-c11" class="started-link">asked <span title="2016-04-04 12:05:58Z" class="relativetime">9 mins ago</span></a>
            <a href="/users/2170155/ovga">ovga</a> <span class="reputation-score" title="reputation score " dir="ltr">26</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402162"
     
     
     >
    <div onclick="window.location.href='/questions/36402162/mybatis-cant-run-update'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402162/mybatis-cant-run-update" class="question-hyperlink" title="updateOneArticle.jsp

&lt;%@ taglib prefix=&quot;s&quot; uri=&quot;/struts-tags&quot; %>
&lt;%--
  Created by IntelliJ IDEA.
  User: jack
  Date: 16-4-4
  Time: 下午3:16
  To change this template use File | Settings | ...">Mybatis can&#39;t run update</a></h3>
        <div class="tags t-java t-struts2 t-mybatis">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/struts2" class="post-tag" title="show questions tagged &#39;struts2&#39;" rel="tag">struts2</a> <a href="/questions/tagged/mybatis" class="post-tag" title="show questions tagged &#39;mybatis&#39;" rel="tag">mybatis</a> 
        </div>
        <div class="started">
            <a href="/questions/36402162/mybatis-cant-run-update" class="started-link">asked <span title="2016-04-04 12:05:17Z" class="relativetime">9 mins ago</span></a>
            <a href="/users/5142127/jack">jack</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402161"
     
     
     >
    <div onclick="window.location.href='/questions/36402161/recurring-on-temporal-seq-member-in-owl-time'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402161/recurring-on-temporal-seq-member-in-owl-time" class="question-hyperlink" title="A paper about an extension of the OWL Time-Temporal Aggregates Ontology-details how to represent recurring event using OWL Time.

I am unsure about the representation of a particular recurring event. ...">Recurring on Temporal Seq Member in OWL Time</a></h3>
        <div class="tags t-owl t-owl-time">
            <a href="/questions/tagged/owl" class="post-tag" title="show questions tagged &#39;owl&#39;" rel="tag">owl</a> <a href="/questions/tagged/owl-time" class="post-tag" title="show questions tagged &#39;owl-time&#39;" rel="tag">owl-time</a> 
        </div>
        <div class="started">
            <a href="/questions/36402161/recurring-on-temporal-seq-member-in-owl-time" class="started-link">asked <span title="2016-04-04 12:05:17Z" class="relativetime">9 mins ago</span></a>
            <a href="/users/1774937/user1774937">user1774937</a> <span class="reputation-score" title="reputation score " dir="ltr">448</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402131"
     
     
     >
    <div onclick="window.location.href='/questions/36402131/simplify-less-mixins-and-parameters'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="9 views">9</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402131/simplify-less-mixins-and-parameters" class="question-hyperlink" title="Processed CSS is supposed to be succinct right? 

I&#39;m trying to build a button icon library using &lt;span class=&quot;icon-login&quot;>

In this class I assign it a url based upon the class name. My less ...">Simplify LESS Mixins and Parameters</a></h3>
        <div class="tags t-html t-css t-icons t-less">
            <a href="/questions/tagged/html" class="post-tag" title="show questions tagged &#39;html&#39;" rel="tag">html</a> <a href="/questions/tagged/css" class="post-tag" title="show questions tagged &#39;css&#39;" rel="tag">css</a> <a href="/questions/tagged/icons" class="post-tag" title="show questions tagged &#39;icons&#39;" rel="tag">icons</a> <a href="/questions/tagged/less" class="post-tag" title="show questions tagged &#39;less&#39;" rel="tag">less</a> 
        </div>
        <div class="started">
            <a href="/questions/36402131/simplify-less-mixins-and-parameters" class="started-link">asked <span title="2016-04-04 12:03:57Z" class="relativetime">11 mins ago</span></a>
            <a href="/users/5752172/jonah-m">Jonah M</a> <span class="reputation-score" title="reputation score " dir="ltr">8</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36400837"
     
     
     >
    <div onclick="window.location.href='/questions/36400837/how-to-attach-different-versions-of-same-source-file'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="24 views">24</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36400837/how-to-attach-different-versions-of-same-source-file" class="question-hyperlink" title="Eclipse Mars Release (4.5.0)

I have a few projects in the same namespace and two of them use different versions of the same library (percisely, spring 4.0.x and spring 4.2.x, update is not finished ...">How to attach different versions of same source file</a></h3>
        <div class="tags t-java t-eclipse">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/eclipse" class="post-tag" title="show questions tagged &#39;eclipse&#39;" rel="tag">eclipse</a> 
        </div>
        <div class="started">
            <a href="/questions/36400837/how-to-attach-different-versions-of-same-source-file" class="started-link">modified <span title="2016-04-04 12:03:51Z" class="relativetime">11 mins ago</span></a>
            <a href="/users/3525886/johnny-willer">Johnny Willer</a> <span class="reputation-score" title="reputation score " dir="ltr">988</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402111"
     
     
     >
    <div onclick="window.location.href='/questions/36402111/share-a-feed-post-using-http-getstream-io'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="4 views">4</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402111/share-a-feed-post-using-http-getstream-io" class="question-hyperlink" title="By using http://getstream.io/ I am able to load all feeds and feeds by user also able to like or comment on feed post. Now wanna achieve sharing of feed post. How should I do it?

Following is the ...">Share a feed post using http://getstream.io/</a></h3>
        <div class="tags t-getstream-io">
            <a href="/questions/tagged/getstream-io" class="post-tag" title="show questions tagged &#39;getstream-io&#39;" rel="tag">getstream-io</a> 
        </div>
        <div class="started">
            <a href="/questions/36402111/share-a-feed-post-using-http-getstream-io" class="started-link">asked <span title="2016-04-04 12:03:04Z" class="relativetime">12 mins ago</span></a>
            <a href="/users/2636618/oone">O&#39;one</a> <span class="reputation-score" title="reputation score " dir="ltr">477</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402102"
     
     
     >
    <div onclick="window.location.href='/questions/36402102/polymer-buttonclick-triggers-parent-container-click-event'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402102/polymer-buttonclick-triggers-parent-container-click-event" class="question-hyperlink" title="I&#39;m trying to develop a collapsable list based on Google Inbox in Polymer.

I&#39;ve created a list of polymer-elements, where each element is a paper-material with an iron-collapse inside. 
The ...">Polymer: Buttonclick triggers parent container click-event</a></h3>
        <div class="tags t-polymer">
            <a href="/questions/tagged/polymer" class="post-tag" title="show questions tagged &#39;polymer&#39;" rel="tag">polymer</a> 
        </div>
        <div class="started">
            <a href="/questions/36402102/polymer-buttonclick-triggers-parent-container-click-event" class="started-link">asked <span title="2016-04-04 12:02:40Z" class="relativetime">12 mins ago</span></a>
            <a href="/users/1808126/alexander-ciesielski">Alexander Ciesielski</a> <span class="reputation-score" title="reputation score " dir="ltr">123</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402094"
     
     
     >
    <div onclick="window.location.href='/questions/36402094/parameters-for-qgsnmeaconnection'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402094/parameters-for-qgsnmeaconnection" class="question-hyperlink" title="I&#39;m trying to write some quick and nasty code to write elevations to the geometry of a 3D point shapefile. Others have noted that this function is missing in the GPS Information Panel function. ...">Parameters for QgsNMEAConnection</a></h3>
        <div class="tags t-3d t-gps t-qgis">
            <a href="/questions/tagged/3d" class="post-tag" title="show questions tagged &#39;3d&#39;" rel="tag">3d</a> <a href="/questions/tagged/gps" class="post-tag" title="show questions tagged &#39;gps&#39;" rel="tag">gps</a> <a href="/questions/tagged/qgis" class="post-tag" title="show questions tagged &#39;qgis&#39;" rel="tag">qgis</a> 
        </div>
        <div class="started">
            <a href="/questions/36402094/parameters-for-qgsnmeaconnection" class="started-link">asked <span title="2016-04-04 12:02:21Z" class="relativetime">12 mins ago</span></a>
            <a href="/users/6155536/phil">Phil</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402071"
     
     
     >
    <div onclick="window.location.href='/questions/36402071/submitting-electron-app-to-mac-app-store-error-invalid-signature'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402071/submitting-electron-app-to-mac-app-store-error-invalid-signature" class="question-hyperlink" title="I&#39;m trying to submit an Electron based app to the Mac App Store.
To sign the app I&#39;m using this script (according to ...">Submitting Electron App to Mac App Store: Error &ldquo;Invalid Signature&rdquo;</a></h3>
        <div class="tags t-osx t-app-store t-electron t-mac-app-store">
            <a href="/questions/tagged/osx" class="post-tag" title="show questions tagged &#39;osx&#39;" rel="tag">osx</a> <a href="/questions/tagged/app-store" class="post-tag" title="show questions tagged &#39;app-store&#39;" rel="tag">app-store</a> <a href="/questions/tagged/electron" class="post-tag" title="show questions tagged &#39;electron&#39;" rel="tag">electron</a> <a href="/questions/tagged/mac-app-store" class="post-tag" title="show questions tagged &#39;mac-app-store&#39;" rel="tag">mac-app-store</a> 
        </div>
        <div class="started">
            <a href="/questions/36402071/submitting-electron-app-to-mac-app-store-error-invalid-signature" class="started-link">asked <span title="2016-04-04 12:01:27Z" class="relativetime">13 mins ago</span></a>
            <a href="/users/4359871/christian-makrutzki">Christian Makrutzki</a> <span class="reputation-score" title="reputation score " dir="ltr">1</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402069"
     
     
     >
    <div onclick="window.location.href='/questions/36402069/using-ad-lds-over-ssl'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="0 votes">0</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="2 views">2</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402069/using-ad-lds-over-ssl" class="question-hyperlink" title="I need to configure AD LDS over SSL I am trying every article since two days this http://erlend.oftedal.no/blog/?blogid=7 seems reasonable but I got stuck at giving read permission to AD LDS instance ...">Using AD LDS over SSL</a></h3>
        <div class="tags t-ssl t-active-directory t-ldap t-adlds">
            <a href="/questions/tagged/ssl" class="post-tag" title="show questions tagged &#39;ssl&#39;" rel="tag">ssl</a> <a href="/questions/tagged/active-directory" class="post-tag" title="show questions tagged &#39;active-directory&#39;" rel="tag">active-directory</a> <a href="/questions/tagged/ldap" class="post-tag" title="show questions tagged &#39;ldap&#39;" rel="tag">ldap</a> <a href="/questions/tagged/adlds" class="post-tag" title="show questions tagged &#39;adlds&#39;" rel="tag">adlds</a> 
        </div>
        <div class="started">
            <a href="/questions/36402069/using-ad-lds-over-ssl" class="started-link">asked <span title="2016-04-04 12:01:22Z" class="relativetime">13 mins ago</span></a>
            <a href="/users/3701429/%d0%94%d0%b2%cf%85-%ce%92%d0%b4%d0%ba%d0%b4%d1%8f">Двυ Βдкдя</a> <span class="reputation-score" title="reputation score " dir="ltr">15</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401999"
     
     
     >
    <div onclick="window.location.href='/questions/36401999/is-unique-ptrderived-to-unique-ptrbase-up-casting-automatic'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="17 views">17</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401999/is-unique-ptrderived-to-unique-ptrbase-up-casting-automatic" class="question-hyperlink" title="I know it is possible that a derived class unique_ptr can take place where base class unique_ptr is required for polymorphic types. For example, while returning from function

unique_ptr&lt;Base> ...">Is unique_ptr&lt;Derived&gt; to unique_ptr&lt;Base&gt; up-casting automatic?</a></h3>
        <div class="tags t-c&#231;&#231;11 t-polymorphism t-c&#231;&#231;14 t-unique-ptr">
            <a href="/questions/tagged/c%2b%2b11" class="post-tag" title="show questions tagged &#39;c++11&#39;" rel="tag">c++11</a> <a href="/questions/tagged/polymorphism" class="post-tag" title="show questions tagged &#39;polymorphism&#39;" rel="tag">polymorphism</a> <a href="/questions/tagged/c%2b%2b14" class="post-tag" title="show questions tagged &#39;c++14&#39;" rel="tag">c++14</a> <a href="/questions/tagged/unique-ptr" class="post-tag" title="show questions tagged &#39;unique-ptr&#39;" rel="tag">unique-ptr</a> 
        </div>
        <div class="started">
            <a href="/questions/36401999/is-unique-ptrderived-to-unique-ptrbase-up-casting-automatic" class="started-link">modified <span title="2016-04-04 12:00:54Z" class="relativetime">14 mins ago</span></a>
            <a href="/users/4523099/humam-helfawi">Humam Helfawi</a> <span class="reputation-score" title="reputation score " dir="ltr">5,304</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36402056"
     
     
     >
    <div onclick="window.location.href='/questions/36402056/google-chrome-how-to-find-out-the-name-of-transition-from-its-id-in-history-sql'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36402056/google-chrome-how-to-find-out-the-name-of-transition-from-its-id-in-history-sql" class="question-hyperlink" title="I am reading Google Chrome History from its Sql-Lite Db.

Table Name: Visits
Structure:

+-----+------------------+-----------+-----+--------+-----+
| &quot;0&quot; | &quot;id&quot;             | &quot;INTEGER&quot; | &quot;0&quot; | &quot;NULL&quot; ...">Google Chrome: How to find out the name of Transition from its id in History sql-lite db</a></h3>
        <div class="tags t-sqlite t-google-chrome">
            <a href="/questions/tagged/sqlite" class="post-tag" title="show questions tagged &#39;sqlite&#39;" rel="tag">sqlite</a> <a href="/questions/tagged/google-chrome" class="post-tag" title="show questions tagged &#39;google-chrome&#39;" rel="tag"><img src="//i.stack.imgur.com/EdUwb.png" height="16" width="18" alt="" class="sponsor-tag-img">google-chrome</a> 
        </div>
        <div class="started">
            <a href="/questions/36402056/google-chrome-how-to-find-out-the-name-of-transition-from-its-id-in-history-sql" class="started-link">asked <span title="2016-04-04 12:00:36Z" class="relativetime">14 mins ago</span></a>
            <a href="/users/4221433/vikas-bansal">Vikas Bansal</a> <span class="reputation-score" title="reputation score " dir="ltr">791</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401991"
     
     
     >
    <div onclick="window.location.href='/questions/36401991/using-entityframework-6-w-fabric-service'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="11 views">11</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401991/using-entityframework-6-w-fabric-service" class="question-hyperlink" title="I have an Actor that upon receiving a request from a WebAPI project, the Actor queries a table using Entity Framework 6.

using (var context = new MetadataContext())
{
    var userStorageAccountId = ...">Using EntityFramework 6 w\ Fabric Service</a></h3>
        <div class="tags t-c&#241; t-entity-framework t-actor t-azure-service-fabric">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/entity-framework" class="post-tag" title="show questions tagged &#39;entity-framework&#39;" rel="tag">entity-framework</a> <a href="/questions/tagged/actor" class="post-tag" title="show questions tagged &#39;actor&#39;" rel="tag">actor</a> <a href="/questions/tagged/azure-service-fabric" class="post-tag" title="show questions tagged &#39;azure-service-fabric&#39;" rel="tag">azure-service-fabric</a> 
        </div>
        <div class="started">
            <a href="/questions/36401991/using-entityframework-6-w-fabric-service" class="started-link">asked <span title="2016-04-04 11:58:04Z" class="relativetime">17 mins ago</span></a>
            <a href="/users/5136650/shlatchz">shlatchz</a> <span class="reputation-score" title="reputation score " dir="ltr">40</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401896"
     
     
     >
    <div onclick="window.location.href='/questions/36401896/swi-prolog-clpfd-library-kakuro-puzzel'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="7 views">7</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401896/swi-prolog-clpfd-library-kakuro-puzzel" class="question-hyperlink" title="So I&#39;m trying to solve the kakuro puzzle in SWI-Prolog using the clpfd library. it needs to be a 12x12 board.

the issue is that I&#39;m supposed to use these predicates:

% black(R, C).
black(1, 1).
...">SWI Prolog clpfd library kakuro puzzel</a></h3>
        <div class="tags t-prolog t-clpfd">
            <a href="/questions/tagged/prolog" class="post-tag" title="show questions tagged &#39;prolog&#39;" rel="tag">prolog</a> <a href="/questions/tagged/clpfd" class="post-tag" title="show questions tagged &#39;clpfd&#39;" rel="tag">clpfd</a> 
        </div>
        <div class="started">
            <a href="/questions/36401896/swi-prolog-clpfd-library-kakuro-puzzel" class="started-link">modified <span title="2016-04-04 11:56:29Z" class="relativetime">18 mins ago</span></a>
            <a href="/users/772868/false">false</a> <span class="reputation-score" title="reputation score 10139" dir="ltr">10.1k</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401374"
     
     
     >
    <div onclick="window.location.href='/questions/36401374/cmake-circular-include-directory-dependencies'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="18 views">18</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401374/cmake-circular-include-directory-dependencies" class="question-hyperlink" title="I have a project with a bunch of libraries many of the libraries have configure headers that are needed to build the libraries. These configure headers differ between the two apps (client/server) of ...">CMake circular include directory dependencies</a></h3>
        <div class="tags t-c t-cmake t-build-process">
            <a href="/questions/tagged/c" class="post-tag" title="show questions tagged &#39;c&#39;" rel="tag">c</a> <a href="/questions/tagged/cmake" class="post-tag" title="show questions tagged &#39;cmake&#39;" rel="tag">cmake</a> <a href="/questions/tagged/build-process" class="post-tag" title="show questions tagged &#39;build-process&#39;" rel="tag">build-process</a> 
        </div>
        <div class="started">
            <a href="/questions/36401374/cmake-circular-include-directory-dependencies" class="started-link">modified <span title="2016-04-04 11:56:12Z" class="relativetime">18 mins ago</span></a>
            <a href="/users/492747/evading">evading</a> <span class="reputation-score" title="reputation score " dir="ltr">1,338</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401494"
     
     
     >
    <div onclick="window.location.href='/questions/36401494/web-application-context-scope-strange-behavior'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="17 views">17</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401494/web-application-context-scope-strange-behavior" class="question-hyperlink" title="Using spring on a webservice I have this code:

@RequestMapping(value = &quot;/testOperation&quot;, method = GET)     
public String testOperation() throws Exception 
{                   
    ts.setName(&quot;First ...">Web application context scope strange behavior</a></h3>
        <div class="tags t-java t-spring t-spring-mvc t-scope">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/spring" class="post-tag" title="show questions tagged &#39;spring&#39;" rel="tag">spring</a> <a href="/questions/tagged/spring-mvc" class="post-tag" title="show questions tagged &#39;spring-mvc&#39;" rel="tag">spring-mvc</a> <a href="/questions/tagged/scope" class="post-tag" title="show questions tagged &#39;scope&#39;" rel="tag">scope</a> 
        </div>
        <div class="started">
            <a href="/questions/36401494/web-application-context-scope-strange-behavior/?lastactivity" class="started-link">answered <span title="2016-04-04 11:55:09Z" class="relativetime">19 mins ago</span></a>
            <a href="/users/5549928/evgeny">Evgeny</a> <span class="reputation-score" title="reputation score " dir="ltr">343</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36399411"
     
     
     >
    <div onclick="window.location.href='/questions/36399411/unusual-character-addition-after-writing-back-decoded-file'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="23 views">23</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36399411/unusual-character-addition-after-writing-back-decoded-file" class="question-hyperlink" title="I am using ZXing.Net library to encode and decode my video file using RS Encoder. It works well by adding and and removing parity after encoding and decoding respectively. But When writing decoded ...">Unusual Character addition after writing back decoded file</a></h3>
        <div class="tags t-c&#241; t-file t-zxing">
            <a href="/questions/tagged/c%23" class="post-tag" title="show questions tagged &#39;c#&#39;" rel="tag">c#</a> <a href="/questions/tagged/file" class="post-tag" title="show questions tagged &#39;file&#39;" rel="tag">file</a> <a href="/questions/tagged/zxing" class="post-tag" title="show questions tagged &#39;zxing&#39;" rel="tag">zxing</a> 
        </div>
        <div class="started">
            <a href="/questions/36399411/unusual-character-addition-after-writing-back-decoded-file" class="started-link">modified <span title="2016-04-04 11:54:27Z" class="relativetime">20 mins ago</span></a>
            <a href="/users/3248293/nikola-lukovic">Nikola.Lukovic</a> <span class="reputation-score" title="reputation score " dir="ltr">441</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401448"
     
     
     >
    <div onclick="window.location.href='/questions/36401448/thymleaf-everywhere-spring-mvc'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="9 views">9</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401448/thymleaf-everywhere-spring-mvc" class="question-hyperlink" title="hey everyone i have an issue with thymeleaf and my static html pages 
 to be more specific i have a spring mvc web application  am using also spring security , well in my login page i want to use ...">Thymleaf everywhere Spring mvc</a></h3>
        <div class="tags t-angularjs t-spring-mvc t-thymeleaf">
            <a href="/questions/tagged/angularjs" class="post-tag" title="show questions tagged &#39;angularjs&#39;" rel="tag">angularjs</a> <a href="/questions/tagged/spring-mvc" class="post-tag" title="show questions tagged &#39;spring-mvc&#39;" rel="tag">spring-mvc</a> <a href="/questions/tagged/thymeleaf" class="post-tag" title="show questions tagged &#39;thymeleaf&#39;" rel="tag">thymeleaf</a> 
        </div>
        <div class="started">
            <a href="/questions/36401448/thymleaf-everywhere-spring-mvc" class="started-link">modified <span title="2016-04-04 11:50:54Z" class="relativetime">24 mins ago</span></a>
            <a href="/users/4780868/amani92">amani92</a> <span class="reputation-score" title="reputation score " dir="ltr">90</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401804"
     
     
     >
    <div onclick="window.location.href='/questions/36401804/catchable-fatal-error-when-logging-with-twitter-in-my-symfony2-application'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="10 views">10</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401804/catchable-fatal-error-when-logging-with-twitter-in-my-symfony2-application" class="question-hyperlink" title="i use FOSUserBundle and HWIOAuthBundle in my symfony2 application.
I try to implement &quot;sign in with twitter&quot; and when i run my application in developpment mode i have this error : 


  Catchable Fatal ...">Catchable Fatal Error when logging with twitter in my symfony2 application</a></h3>
        <div class="tags t-symfony2 t-twitter t-hwioauthbundle">
            <a href="/questions/tagged/symfony2" class="post-tag" title="show questions tagged &#39;symfony2&#39;" rel="tag">symfony2</a> <a href="/questions/tagged/twitter" class="post-tag" title="show questions tagged &#39;twitter&#39;" rel="tag">twitter</a> <a href="/questions/tagged/hwioauthbundle" class="post-tag" title="show questions tagged &#39;hwioauthbundle&#39;" rel="tag">hwioauthbundle</a> 
        </div>
        <div class="started">
            <a href="/questions/36401804/catchable-fatal-error-when-logging-with-twitter-in-my-symfony2-application" class="started-link">asked <span title="2016-04-04 11:49:01Z" class="relativetime">26 mins ago</span></a>
            <a href="/users/3400722/sepointes">sepointes</a> <span class="reputation-score" title="reputation score " dir="ltr">24</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401789"
     
     
     >
    <div onclick="window.location.href='/questions/36401789/null-pointer-exception-at-junit-test-with-filesystem-and-spring-boot'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="24 views">24</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401789/null-pointer-exception-at-junit-test-with-filesystem-and-spring-boot" class="question-hyperlink" title="This is my File system code:

  public String fileBackup(byte[] fileContent, String name) {
        String status = &quot;Created file...&quot;;
        String file = (env.getProperty(&quot;file.path&quot;))+ name;
      ...">Null Pointer Exception at Junit test with fileSystem and spring boot</a></h3>
        <div class="tags t-java t-spring t-junit t-zipfile">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/spring" class="post-tag" title="show questions tagged &#39;spring&#39;" rel="tag">spring</a> <a href="/questions/tagged/junit" class="post-tag" title="show questions tagged &#39;junit&#39;" rel="tag">junit</a> <a href="/questions/tagged/zipfile" class="post-tag" title="show questions tagged &#39;zipfile&#39;" rel="tag">zipfile</a> 
        </div>
        <div class="started">
            <a href="/questions/36401789/null-pointer-exception-at-junit-test-with-filesystem-and-spring-boot" class="started-link">asked <span title="2016-04-04 11:48:01Z" class="relativetime">27 mins ago</span></a>
            <a href="/users/5974044/john">john</a> <span class="reputation-score" title="reputation score " dir="ltr">11</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401644"
     
     
     >
    <div onclick="window.location.href='/questions/36401644/posting-data-into-multiple-queue-aws-services'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="7 views">7</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401644/posting-data-into-multiple-queue-aws-services" class="question-hyperlink" title="I working with Queue Component for Yii2 from reference https://libraries.io/github/cybercog/yii2-queue

I wants to know that how can i post data into 2-3 different queue url for different feature 

...">posting data into multiple queue aws services</a></h3>
        <div class="tags t-php t-yii2 t-amazon-sqs">
            <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/yii2" class="post-tag" title="show questions tagged &#39;yii2&#39;" rel="tag">yii2</a> <a href="/questions/tagged/amazon-sqs" class="post-tag" title="show questions tagged &#39;amazon-sqs&#39;" rel="tag">amazon-sqs</a> 
        </div>
        <div class="started">
            <a href="/questions/36401644/posting-data-into-multiple-queue-aws-services" class="started-link">modified <span title="2016-04-04 11:46:30Z" class="relativetime">28 mins ago</span></a>
            <a href="/users/4097436/g4m1tg">G4M1TG</a> <span class="reputation-score" title="reputation score " dir="ltr">2,033</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401722"
     
     
     >
    <div onclick="window.location.href='/questions/36401722/eclipse-templates-generate-a-handle-name'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="9 views">9</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401722/eclipse-templates-generate-a-handle-name" class="question-hyperlink" title="first of all, excuse my english. Its a bit rusty.

In my work we have to change from JDeveloper to Eclipse. I now start to define some Code-Templates. The most of them are no Problem to transfer. 

I ...">Eclipse Templates, Generate a handle-name</a></h3>
        <div class="tags t-java t-eclipse">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/eclipse" class="post-tag" title="show questions tagged &#39;eclipse&#39;" rel="tag">eclipse</a> 
        </div>
        <div class="started">
            <a href="/questions/36401722/eclipse-templates-generate-a-handle-name" class="started-link">asked <span title="2016-04-04 11:44:38Z" class="relativetime">30 mins ago</span></a>
            <a href="/users/6155747/christoph-b%c3%bcrger">Christoph B&#252;rger</a> <span class="reputation-score" title="reputation score " dir="ltr">6</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401538"
     
     
     >
    <div onclick="window.location.href='/questions/36401538/plotly-python-offline-visit-url-on-click'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="10 views">10</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401538/plotly-python-offline-visit-url-on-click" class="question-hyperlink" title="Is it possible to configure a plotly plot so that the user is taken to a specific url when they click on a certain data point?

My intended usage is for bar charts: I&#39;d like to be able to click on a ...">Plotly python offline - visit url on click?</a></h3>
        <div class="tags t-python t-plotly">
            <a href="/questions/tagged/python" class="post-tag" title="show questions tagged &#39;python&#39;" rel="tag">python</a> <a href="/questions/tagged/plotly" class="post-tag" title="show questions tagged &#39;plotly&#39;" rel="tag">plotly</a> 
        </div>
        <div class="started">
            <a href="/questions/36401538/plotly-python-offline-visit-url-on-click" class="started-link">modified <span title="2016-04-04 11:44:15Z" class="relativetime">30 mins ago</span></a>
            <a href="/users/3062625/charon">Charon</a> <span class="reputation-score" title="reputation score " dir="ltr">276</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401446"
     
     
     >
    <div onclick="window.location.href='/questions/36401446/is-changing-propertytype-causing-some-problems-on-google-cloud'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="9 views">9</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401446/is-changing-propertytype-causing-some-problems-on-google-cloud" class="question-hyperlink" title="Ok, Now, I deploy my app with this code.

Entity entity=new Entity(&quot;StructureObject&quot;, structureObjectParentKey);
String description=getData();
entity.setProperty(&quot;Description&quot;,description);
...">Is changing PropertyType causing some problems on Google Cloud?</a></h3>
        <div class="tags t-java t-google-app-engine t-google-cloud-storage t-google-cloud-platform">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/google-app-engine" class="post-tag" title="show questions tagged &#39;google-app-engine&#39;" rel="tag"><img src="//i.stack.imgur.com/vobok.png" height="16" width="18" alt="" class="sponsor-tag-img">google-app-engine</a> <a href="/questions/tagged/google-cloud-storage" class="post-tag" title="show questions tagged &#39;google-cloud-storage&#39;" rel="tag"><img src="//i.stack.imgur.com/2NOCA.png" height="16" width="18" alt="" class="sponsor-tag-img">google-cloud-storage</a> <a href="/questions/tagged/google-cloud-platform" class="post-tag" title="show questions tagged &#39;google-cloud-platform&#39;" rel="tag"><img src="//i.stack.imgur.com/vobok.png" height="16" width="18" alt="" class="sponsor-tag-img">google-cloud-platform</a> 
        </div>
        <div class="started">
            <a href="/questions/36401446/is-changing-propertytype-causing-some-problems-on-google-cloud" class="started-link">modified <span title="2016-04-04 11:41:00Z" class="relativetime">34 mins ago</span></a>
            <a href="/users/6007694/piyush-khatri">Piyush Khatri</a> <span class="reputation-score" title="reputation score " dir="ltr">1,351</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401600"
     
     
     >
    <div onclick="window.location.href='/questions/36401600/how-to-map-the-touch-x-y-to-my-canvas'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="8 views">8</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401600/how-to-map-the-touch-x-y-to-my-canvas" class="question-hyperlink" title="I have a task to build image editor and to be able to draw on my image 

attached is my example 



the problem now that when I try to draw the drawing line is shifted, and also when I try to draw ...">How to map the touch x, y to my canvas</a></h3>
        <div class="tags t-android t-canvas t-bitmap t-imageview">
            <a href="/questions/tagged/android" class="post-tag" title="show questions tagged &#39;android&#39;" rel="tag"><img src="//i.stack.imgur.com/tKsDb.png" height="16" width="18" alt="" class="sponsor-tag-img">android</a> <a href="/questions/tagged/canvas" class="post-tag" title="show questions tagged &#39;canvas&#39;" rel="tag">canvas</a> <a href="/questions/tagged/bitmap" class="post-tag" title="show questions tagged &#39;bitmap&#39;" rel="tag">bitmap</a> <a href="/questions/tagged/imageview" class="post-tag" title="show questions tagged &#39;imageview&#39;" rel="tag">imageview</a> 
        </div>
        <div class="started">
            <a href="/questions/36401600/how-to-map-the-touch-x-y-to-my-canvas" class="started-link">asked <span title="2016-04-04 11:39:24Z" class="relativetime">35 mins ago</span></a>
            <a href="/users/458700/amira-elsayed-ismail">Amira Elsayed Ismail</a> <span class="reputation-score" title="reputation score " dir="ltr">2,101</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401562"
     
     
     >
    <div onclick="window.location.href='/questions/36401562/find-overlapping-circles'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="18 views">18</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401562/find-overlapping-circles" class="question-hyperlink" title="I have a rectangular area where there are circles with equal radius. I want to find which circles overlap with other circles.

I know how to check if two of the circles overlap (the distance between ...">Find overlapping circles</a></h3>
        <div class="tags t-algorithm t-data-structures t-computational-geometry">
            <a href="/questions/tagged/algorithm" class="post-tag" title="show questions tagged &#39;algorithm&#39;" rel="tag">algorithm</a> <a href="/questions/tagged/data-structures" class="post-tag" title="show questions tagged &#39;data-structures&#39;" rel="tag">data-structures</a> <a href="/questions/tagged/computational-geometry" class="post-tag" title="show questions tagged &#39;computational-geometry&#39;" rel="tag">computational-geometry</a> 
        </div>
        <div class="started">
            <a href="/questions/36401562/find-overlapping-circles" class="started-link">asked <span title="2016-04-04 11:37:41Z" class="relativetime">37 mins ago</span></a>
            <a href="/users/515212/martinkunev">martinkunev</a> <span class="reputation-score" title="reputation score " dir="ltr">410</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401454"
     
     
     >
    <div onclick="window.location.href='/questions/36401454/dynamic-table-name-in-propel-query'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="1 vote">1</span></div>
            <div>vote</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="3 views">3</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401454/dynamic-table-name-in-propel-query" class="question-hyperlink" title="I am wondering if you can make the Table name of the propel query dynamic(sort of like a variable variable)? An example would be like \&quot;DynamicVar&quot;Query::create(). I have it working in ifs like in my ...">Dynamic Table Name in Propel Query</a></h3>
        <div class="tags t-php t-propel">
            <a href="/questions/tagged/php" class="post-tag" title="show questions tagged &#39;php&#39;" rel="tag">php</a> <a href="/questions/tagged/propel" class="post-tag" title="show questions tagged &#39;propel&#39;" rel="tag">propel</a> 
        </div>
        <div class="started">
            <a href="/questions/36401454/dynamic-table-name-in-propel-query" class="started-link">asked <span title="2016-04-04 11:32:33Z" class="relativetime">42 mins ago</span></a>
            <a href="/users/2487483/user2487483">user2487483</a> <span class="reputation-score" title="reputation score " dir="ltr">6</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36401363"
     
     
     >
    <div onclick="window.location.href='/questions/36401363/cannot-start-internal-http-server-intellij-stopped-working'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="3 votes">3</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="10 views">10</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36401363/cannot-start-internal-http-server-intellij-stopped-working" class="question-hyperlink" title="I have IntelliJ and other development tools stopped working today. 

IntelliJ says on start:


  Cannot start internal HTTP server. Git integration, JavaScript
  debugger and LiveEdit may operate with ...">Cannot start internal HTTP server&hellip; IntelliJ stopped working</a></h3>
        <div class="tags t-java t-intellij-idea t-firewall">
            <a href="/questions/tagged/java" class="post-tag" title="show questions tagged &#39;java&#39;" rel="tag">java</a> <a href="/questions/tagged/intellij-idea" class="post-tag" title="show questions tagged &#39;intellij-idea&#39;" rel="tag"><img src="//i.stack.imgur.com/WVlkK.png" height="16" width="18" alt="" class="sponsor-tag-img">intellij-idea</a> <a href="/questions/tagged/firewall" class="post-tag" title="show questions tagged &#39;firewall&#39;" rel="tag">firewall</a> 
        </div>
        <div class="started">
            <a href="/questions/36401363/cannot-start-internal-http-server-intellij-stopped-working" class="started-link">asked <span title="2016-04-04 11:27:59Z" class="relativetime">47 mins ago</span></a>
            <a href="/users/258483/dims">Dims</a> <span class="reputation-score" title="reputation score " dir="ltr">4,897</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36399066"
     
     
     >
    <div onclick="window.location.href='/questions/36399066/issues-in-creating-an-svm-model-using-python'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="2 votes">2</span></div>
            <div>votes</div>
        </div>
        <div class="status unanswered">
            <div class="mini-counts"><span title="0 answers">0</span></div>
            <div>answers</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="14 views">14</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36399066/issues-in-creating-an-svm-model-using-python" class="question-hyperlink" title="This is how i have trained for object detection in opencv-python

  def svmTrain(self):
    print &quot;CCC\n&quot;
    points=[]
    labels=[]
    f=open(&#39;fv2.txt&#39;, &#39;rb&#39;)
    objs = []
    while 1:
        ...">Issues in creating an SVM model using Python</a></h3>
        <div class="tags t-python t-svm t-object-detection">
            <a href="/questions/tagged/python" class="post-tag" title="show questions tagged &#39;python&#39;" rel="tag">python</a> <a href="/questions/tagged/svm" class="post-tag" title="show questions tagged &#39;svm&#39;" rel="tag">svm</a> <a href="/questions/tagged/object-detection" class="post-tag" title="show questions tagged &#39;object-detection&#39;" rel="tag">object-detection</a> 
        </div>
        <div class="started">
            <a href="/questions/36399066/issues-in-creating-an-svm-model-using-python" class="started-link">modified <span title="2016-04-04 11:15:13Z" class="relativetime">59 mins ago</span></a>
            <a href="/users/1517735/vinoth-krishnan">Vinoth Krishnan</a> <span class="reputation-score" title="reputation score " dir="ltr">2,096</span>
        </div>
    </div>
</div>


<div class="question-summary narrow"
     id="question-summary-36396940"
     
     
     >
    <div onclick="window.location.href='/questions/36396940/agda-types-are-erased-before-run-time'" class="cp">
        <div class="votes">
            <div class="mini-counts"><span title="4 votes">4</span></div>
            <div>votes</div>
        </div>
        <div class="status answered">
            <div class="mini-counts"><span title="1 answer">1</span></div>
            <div>answer</div>
        </div>
        <div class="views">
            <div class="mini-counts"><span title="19 views">19</span></div>
            <div>views</div>
        </div>
    </div>
    <div class="summary">
        
                    <h3><a href="/questions/36396940/agda-types-are-erased-before-run-time" class="question-hyperlink" title="I know for sure that in Haskell Types are always  erased  before  run-time. What happen in case of Agda? 

Does dependent type information is carried trough the run time ? 
">Agda : Types are erased before run time</a></h3>
        <div class="tags t-types t-compilation t-type-erasure t-agda t-type-theory">
            <a href="/questions/tagged/types" class="post-tag" title="show questions tagged &#39;types&#39;" rel="tag">types</a> <a href="/questions/tagged/compilation" class="post-tag" title="show questions tagged &#39;compilation&#39;" rel="tag">compilation</a> <a href="/questions/tagged/type-erasure" class="post-tag" title="show questions tagged &#39;type-erasure&#39;" rel="tag">type-erasure</a> <a href="/questions/tagged/agda" class="post-tag" title="show questions tagged &#39;agda&#39;" rel="tag">agda</a> <a href="/questions/tagged/type-theory" class="post-tag" title="show questions tagged &#39;type-theory&#39;" rel="tag">type-theory</a> 
        </div>
        <div class="started">
            <a href="/questions/36396940/agda-types-are-erased-before-run-time/?lastactivity" class="started-link">modified <span title="2016-04-04 10:50:05Z" class="relativetime">1 hour ago</span></a>
            <a href="/users/3237465/user3237465">user3237465</a> <span class="reputation-score" title="reputation score " dir="ltr">7,608</span>
        </div>
    </div>
</div>

    </div>
</div>
    <br class="cbt"/>
    <h2 class="bottom-notice" data-loc="2">Looking for more? Browse the <a href="/questions">complete list of questions</a>, or <a href="/tags">popular tags</a>. Help us answer <a href="/unanswered">unanswered questions</a>.</h2>
<script>
    StackExchange.ready(function() { StackExchange.question.initShareLinks(); });
</script></div>
    <div id="sidebar">
                
        <script>
                var ados = ados || {}; ados.run = ados.run || [];
                ados.run.push(function () { ados_add_placement(22,8277,"adzerk688479874",[5,17,2221]).setZone(45); });
            </script>
            <div class="everyonelovesstackoverflow" id="adzerk688479874">
            </div>
        <div id="hireme">
            <script>
;"use strict";(function(n){function tt(n,i,r){var u=t.createElement("script"),e="onreadystatechange",o="onload",f="readyState",s=!1;u.async=!0;u.src=n;typeof i=="function"&&(u[o]=u[e]=function(){s||u[f]&&u[f]!=="loaded"&&u[f]!=="complete"||(s=!0,typeof i=="function"&&i(u),u[o]=u[e]=null,r&&u.parentNode.removeChild(u))});ut.appendChild(u)}function it(n){var i=t.createElement("link");i.type="text/css";i.rel="stylesheet";i.href=n;ft.appendChild(i)}function ht(){var n=i.StackExchange,t="options",r="user";return n&&n[t]&&n[t][r]&&n[t][r].accountId}function ct(n){var t,i;return n=et(f.hash?f.hash.substr(1):"",n||{}),t=n.ac||n.accountId||ht(),t&&(n.ac=t),n.tags||(i=nt(),i.length>0&&(n.tags=i.join(";"))),n.host=f.host.replace(/\.internal$/,""),n}function lt(n,t,i,u){var c=h(n);if(c===null)return function(){};var e=null,f=null,l=r(),a=function a(){d(c)?(s(e),u(!1,r()-l)):f=o(a,t)};return f=o(a,t),i!==undefined&&(e=o(function(){s(f);u(!0,r()-l)},i)),function(){s(f);s(e)}}function at(){var r=f.hash.indexOf("large=1")!==-1||!y()||h("#careersadsdoublehigh"),u=r?1:2,e=a(["hireme","clc-sb"],v),n=[u+"="+e],i=a(["careers1","clc-tlb"],v),t;return i&&n.push("5="+i),t=a(["careers3","clc-mlb"],v),t&&n.push("6="+t),n.join("&")}function rt(n,t){var s=b({},u,{zones:u.zones||at()}),f=ct(s),e,o;n&&(f.azt=1);t&&(f.lw=t);typeof i.innerWidth=="number"&&(f.bw=i.innerWidth);w&&(f.ver=w);e=["zones","ip","ac","eng","prov","tags","theme","at","remote","seed","lw","azt","sysadmin","bw","nocpm","jobview","cpview","ver","host","cp"];o=p+"?"+ot(f,e);l=r();tt(o)}function vt(n){function h(){f.forEach(it);e.forEach(function(n){return yt(n,t[n],s,o)});typeof i.clc_after_load=="function"&&i.clc_after_load()}var t=n.cr,u=n.h,f=n.st,e=Object.keys(t),o=l?r()-l:0,s="//"+u+"/ct";h()}function yt(n,t,i,r){var s=t.cl,c=t.cn,f=t.an,l=t.tr,o=(s||[]).join(" "),u=h("#"+n);u&&(o&&(u.className+=" "+o),u.innerHTML=c.replace("&pt=0","&pt="+(r||0)),u.onmousedown=function(n){for(var t=n.target,r,o,s;t.tagName!=="A"&&t!==u;)t=t.parentNode;t!==u&&(r=[],f&&r.push("an="+f),o=[].filter.call(t.attributes,function(n){return/^data-/.test(n.name)}),o.length>0&&o.forEach(function(n){var t=n.name.replace(/^data-/,"");r.push(e(t)+"="+e(n.value))}),r.push("tr="+l),s="",r.length>0&&(s="?"+r.join("&")),t.href=i+s)})}function pt(n){var i=t.createElement("a");return i.href=n,i.host}function wt(){var i,n;y()?(n=lt(c,20,i,rt),o(function(){var r=h(c),i;d(r)||(r.parentNode.removeChild(r),typeof n=="function"&&n(),i=t.createElement("img"),i.src="//"+pt(p)+"/to.gif",i.style.display="none",t.body.appendChild(i))},2e3)):rt()}var p=n.u,u=n.o,w=n.c,y;u=u||{};var b=Object.assign||function(n){for(var i,r,t=1;t<arguments.length;t++){i=arguments[t];for(r in i)Object.prototype.hasOwnProperty.call(i,r)&&(n[r]=i[r])}return n},i=window,f=i.location,e=i.encodeURIComponent,k=i.decodeURIComponent,t=i.document,ut=t.body,ft=t.getElementsByTagName("head")[0],o=i.setTimeout,s=i.clearTimeout,c="#sidebar [id^=adzerk].everyonelovesstackoverflow",l=0,r=function(){return(new Date).getTime()},et=function(n,t){return n.split(/\&/g).reduce(function(n,t){var i=t.split("=");return n[k(i[0])]=k(i[1]),n},t||{})},ot=function(n,t){return Object.keys(n).filter(function(n){return t.indexOf(n)!==-1}).map(function(t){return e(t)+"="+e(n[t])}).join("&")},d=function(n){return n.innerHTML.replace(/\s+$/g,"")},g=t.querySelectorAll.bind(t),h=t.querySelector.bind(t),st=t.getElementById.bind(t),a=function(n,t){return n.filter(t)[0]},nt=function(){return[].map.call(g(".post-taglist .post-tag"),function(n){return n.textContent})},v=function(n){return!!st(n)};y=function(){return g(c).length>0};i.clc=b(window.clc||{},{init:vt,load:wt,ls:tt,as:it,tags:nt})}).call(null, {"c":"6c8a058","u":"//clc.stackoverflow.com/p.js"});"use strict";var allowedHosts=["stackoverflow.com","serverfault.com"];(allowedHosts[0]==="*"||allowedHosts.indexOf(location.hostname)!==-1)&&window.clc.load();            </script>
        </div>
        
<div id="hot-network-questions" class="module">
    <h4>
        <a href="//stackexchange.com/questions?tab=hot" 
           class="js-gps-track" 
           data-gps-track="posts_hot_network.click({ item_type:1, location:8 })">
            Hot Network Questions
        </a>
    </h4>
    <ul>
            <li >
                <div class="favicon favicon-scifi" title="Science Fiction &amp; Fantasy Stack Exchange"></div><a href="http://scifi.stackexchange.com/questions/124022/what-does-dumbledore-see-in-the-mirror-of-erised" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:186 }); posts_hot_network.click({ item_type:2, location:8 })">
                    What does Dumbledore see in the Mirror of Erised?
                </a>

            </li>
            <li >
                <div class="favicon favicon-stackoverflow" title="Stack Overflow"></div><a href="http://stackoverflow.com/questions/36390489/c-replacement-for-c99-vlas-goal-preserve-performance" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:1 }); posts_hot_network.click({ item_type:2, location:8 })">
                    C++ replacement for C99 VLAs (goal: preserve performance)
                </a>

            </li>
            <li >
                <div class="favicon favicon-codereview" title="Code Review Stack Exchange"></div><a href="http://codereview.stackexchange.com/questions/124688/regex-to-extract-version-info" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:196 }); posts_hot_network.click({ item_type:2, location:8 })">
                    regex to extract version info
                </a>

            </li>
            <li >
                <div class="favicon favicon-gamedev" title="Game Development Stack Exchange"></div><a href="http://gamedev.stackexchange.com/questions/119258/why-are-so-many-games-not-fully-voiced" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:53 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Why are so many games not fully voiced?
                </a>

            </li>
            <li >
                <div class="favicon favicon-academia" title="Academia Stack Exchange"></div><a href="http://academia.stackexchange.com/questions/66257/how-to-handle-2-years-hiatus-after-phd" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:415 }); posts_hot_network.click({ item_type:2, location:8 })">
                    How to handle 2 years hiatus after PhD?
                </a>

            </li>
            <li >
                <div class="favicon favicon-scifi" title="Science Fiction &amp; Fantasy Stack Exchange"></div><a href="http://scifi.stackexchange.com/questions/124005/was-the-ending-of-the-return-of-the-king-inspired-by-some-other-story" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:186 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Was the ending of The Return of the King inspired by some other story?
                </a>

            </li>
            <li >
                <div class="favicon favicon-superuser" title="Super User"></div><a href="http://superuser.com/questions/1060552/why-are-smaller-ssds-slower" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:3 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Why are smaller SSDs slower?
                </a>

            </li>
            <li >
                <div class="favicon favicon-workplace" title="The Workplace Stack Exchange"></div><a href="http://workplace.stackexchange.com/questions/64652/giving-different-notice-periods-to-your-current-employer-and-new-employer" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:423 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Giving different notice periods to your current employer and new employer
                </a>

            </li>
            <li >
                <div class="favicon favicon-scifi" title="Science Fiction &amp; Fantasy Stack Exchange"></div><a href="http://scifi.stackexchange.com/questions/124020/how-are-mars-and-saturn-forming-a-right-angle" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:186 }); posts_hot_network.click({ item_type:2, location:8 })">
                    How are Mars and Saturn forming a right angle?
                </a>

            </li>
            <li >
                <div class="favicon favicon-academia" title="Academia Stack Exchange"></div><a href="http://academia.stackexchange.com/questions/66165/whats-the-point-in-hiring-assistant-professors-instead-of-more-experienced-prof" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:415 }); posts_hot_network.click({ item_type:2, location:8 })">
                    What&#39;s the point in hiring assistant professors instead of more experienced professors?
                </a>

            </li>
            <li >
                <div class="favicon favicon-ux" title="User Experience Stack Exchange"></div><a href="http://ux.stackexchange.com/questions/91980/how-to-enforce-shoes-removal-in-a-lobby-house" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:102 }); posts_hot_network.click({ item_type:2, location:8 })">
                    How to enforce shoes removal in a lobby/house?
                </a>

            </li>
            <li >
                <div class="favicon favicon-ux" title="User Experience Stack Exchange"></div><a href="http://ux.stackexchange.com/questions/92125/users-entering-the-wrong-decimal-separators-for-us-amounts" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:102 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Users entering the wrong decimal separators for US$ amounts
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-codereview" title="Code Review Stack Exchange"></div><a href="http://codereview.stackexchange.com/questions/124644/project-euler-7-10001st-prime" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:196 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Project Euler #7 10001st prime
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-cstheory" title="Theoretical Computer Science Stack Exchange"></div><a href="http://cstheory.stackexchange.com/questions/34241/johnson-and-lindenstrauss-lemma-for-hamming-space" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:114 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Johnson and Lindenstrauss lemma for hamming space
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-gamedev" title="Game Development Stack Exchange"></div><a href="http://gamedev.stackexchange.com/questions/119298/conveying-a-claustrophobic-atmosphere-in-cavalier-oblique-projection" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:53 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Conveying a claustrophobic atmosphere in cavalier oblique projection
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-security" title="Information Security Stack Exchange"></div><a href="http://security.stackexchange.com/questions/118975/a-secret-in-a-url" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:162 }); posts_hot_network.click({ item_type:2, location:8 })">
                    A secret in a URL
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-travel" title="Travel Stack Exchange"></div><a href="http://travel.stackexchange.com/questions/66034/what-headwear-are-women-legally-required-to-wear-in-iran" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:273 }); posts_hot_network.click({ item_type:2, location:8 })">
                    What headwear are women legally required to wear in Iran?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-ell" title="English Language Learners Stack Exchange"></div><a href="http://ell.stackexchange.com/questions/86483/whats-wrong-with-most-people-in-the-country-would-like-to-own-their-house-some" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:481 }); posts_hot_network.click({ item_type:2, location:8 })">
                    What&#39;s wrong with &quot;Most people in the country would like to own their house some day.&quot;
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-askubuntu" title="Ask Ubuntu"></div><a href="http://askubuntu.com/questions/752619/does-ubuntu-damage-usb-drives" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:89 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Does Ubuntu damage USB drives?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-codegolf" title="Programming Puzzles &amp; Code Golf Stack Exchange"></div><a href="http://codegolf.stackexchange.com/questions/77043/stretch-the-word" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:200 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Stretch the word
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-worldbuilding" title="Worldbuilding Stack Exchange"></div><a href="http://worldbuilding.stackexchange.com/questions/39409/how-to-make-superheroes-more-realistic" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:579 }); posts_hot_network.click({ item_type:2, location:8 })">
                    How to make superheroes more realistic
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-anime" title="Anime &amp; Manga Stack Exchange"></div><a href="http://anime.stackexchange.com/questions/31136/why-didnt-edward-affix-his-mothers-soul-to-the-suit-of-armor" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:477 }); posts_hot_network.click({ item_type:2, location:8 })">
                    Why didn&#39;t Edward affix his mother&#39;s soul to the suit of armor?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-crypto" title="Cryptography Stack Exchange"></div><a href="http://crypto.stackexchange.com/questions/34229/for-rsa-keys-is-the-safety-of-a-given-key-length-different-for-signing-vs-encry" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:281 }); posts_hot_network.click({ item_type:2, location:8 })">
                    For RSA keys, is the safety of a given key-length different for signing vs encryption?
                </a>

            </li>
            <li class="dno js-hidden">
                <div class="favicon favicon-puzzling" title="Puzzling Stack Exchange"></div><a href="http://puzzling.stackexchange.com/questions/30209/a-mathematical-rebus-find-the-hidden-phrase" class="js-gps-track" data-gps-track="site.switch({ item_type:8, target_site:559 }); posts_hot_network.click({ item_type:2, location:8 })">
                    A mathematical rebus. Find the hidden phrase!
                </a>

            </li>
    </ul>

        <a href="#" 
           class="show-more js-show-more js-gps-track" 
           data-gps-track="posts_hot_network.click({ item_type:3, location:8 })">
            more hot questions
        </a>
</div>
        
    </div>

<div id="feed-link">
    <div id="feed-link-text">
        <a href="/feeds" title="the 30 most recent questions">
            <span class="feed-icon"></span>recent questions feed
        </a>
    </div>
</div>
        </div>
    </div>
    <div id="footer" class="categories">
        <div class="footerwrap">
            <div id="footer-menu">
                <div class="top-footer-links">
                    <a href="http://stackoverflow.com/company/about">about us</a>
                        <a href="/tour">tour</a>
                    <a href="/help">help</a>
                    <a href="http://blog.stackoverflow.com?blb=1">blog</a>
                        <a href="http://chat.stackoverflow.com">chat</a>
                    <a href="http://data.stackexchange.com">data</a>
                    <a href="http://stackexchange.com/legal">legal</a>
                    <a href="http://stackexchange.com/legal/privacy-policy">privacy policy</a>
                    <a href="http://stackoverflow.com/company/work-here">work here</a>
                    <a href="http://stackexchange.com/mediakit">advertising info</a>

                    <a onclick='StackExchange.switchMobile("on")'>mobile</a>
                    <b><a href="/contact">contact us</a></b>
                        <b><a href="http://meta.stackoverflow.com">feedback</a></b>
                    
                </div>
                <div id="footer-sites">
                    <table>
    <tr>
            <th colspan=3>
                Technology
            </th>
            <th >
                Life / Arts
            </th>
            <th >
                Culture / Recreation
            </th>
            <th >
                Science
            </th>
            <th >
                Other
            </th>
    </tr>
    <tr>
            <td>
                <ol>
                        <li><a href="//stackoverflow.com" title="professional and enthusiast programmers">Stack Overflow</a></li>
                        <li><a href="//serverfault.com" title="system and network administrators">Server Fault</a></li>
                        <li><a href="//superuser.com" title="computer enthusiasts and power users">Super User</a></li>
                        <li><a href="//webapps.stackexchange.com" title="power users of web applications">Web Applications</a></li>
                        <li><a href="//askubuntu.com" title="Ubuntu users and developers">Ask Ubuntu</a></li>
                        <li><a href="//webmasters.stackexchange.com" title="pro webmasters">Webmasters</a></li>
                        <li><a href="//gamedev.stackexchange.com" title="professional and independent game developers">Game Development</a></li>
                        <li><a href="//tex.stackexchange.com" title="users of TeX, LaTeX, ConTeXt, and related typesetting systems">TeX - LaTeX</a></li>
                            </ol></td><td><ol>
                        <li><a href="//programmers.stackexchange.com" title="professional programmers interested in conceptual questions about software development">Programmers</a></li>
                        <li><a href="//unix.stackexchange.com" title="users of Linux, FreeBSD and other Un*x-like operating systems">Unix &amp; Linux</a></li>
                        <li><a href="//apple.stackexchange.com" title="power users of Apple hardware and software">Ask Different (Apple)</a></li>
                        <li><a href="//wordpress.stackexchange.com" title="WordPress developers and administrators">WordPress Development</a></li>
                        <li><a href="//gis.stackexchange.com" title="cartographers, geographers and GIS professionals">Geographic Information Systems</a></li>
                        <li><a href="//electronics.stackexchange.com" title="electronics and electrical engineering professionals, students, and enthusiasts">Electrical Engineering</a></li>
                        <li><a href="//android.stackexchange.com" title="enthusiasts and power users of the Android operating system">Android Enthusiasts</a></li>
                        <li><a href="//security.stackexchange.com" title="information security professionals">Information Security</a></li>
                            </ol></td><td><ol>
                        <li><a href="//dba.stackexchange.com" title="database professionals who wish to improve their database skills and learn from others in the community">Database Administrators</a></li>
                        <li><a href="//drupal.stackexchange.com" title="Drupal developers and administrators">Drupal Answers</a></li>
                        <li><a href="//sharepoint.stackexchange.com" title="SharePoint enthusiasts">SharePoint</a></li>
                        <li><a href="//ux.stackexchange.com" title="user experience researchers and experts">User Experience</a></li>
                        <li><a href="//mathematica.stackexchange.com" title="users of Mathematica">Mathematica</a></li>
                        <li><a href="//salesforce.stackexchange.com" title="Salesforce administrators, implementation experts, developers and anybody in-between">Salesforce</a></li>
                        <li><a href="//expressionengine.stackexchange.com" title="administrators, end users, developers and designers for ExpressionEngine&#174; CMS">ExpressionEngine&#174; Answers</a></li>
                    
                        <li>
                            <a href="http://stackexchange.com/sites#technology" class="more">
                                more (13)
                            </a>
                        </li>
                </ol>
            </td>
            <td>
                <ol>
                        <li><a href="//photo.stackexchange.com" title="professional, enthusiast and amateur photographers">Photography</a></li>
                        <li><a href="//scifi.stackexchange.com" title="science fiction and fantasy enthusiasts">Science Fiction &amp; Fantasy</a></li>
                        <li><a href="//graphicdesign.stackexchange.com" title="Graphic Design professionals, students, and enthusiasts">Graphic Design</a></li>
                        <li><a href="//movies.stackexchange.com" title="movie and tv enthusiasts">Movies &amp; TV</a></li>
                        <li><a href="//cooking.stackexchange.com" title="professional and amateur chefs">Seasoned Advice (cooking)</a></li>
                        <li><a href="//diy.stackexchange.com" title="contractors and serious DIYers">Home Improvement</a></li>
                        <li><a href="//money.stackexchange.com" title="people who want to be financially literate">Personal Finance &amp; Money</a></li>
                        <li><a href="//academia.stackexchange.com" title="academics and those enrolled in higher education">Academia</a></li>
                    
                        <li>
                            <a href="http://stackexchange.com/sites#lifearts" class="more">
                                more (9)
                            </a>
                        </li>
                </ol>
            </td>
            <td>
                <ol>
                        <li><a href="//english.stackexchange.com" title="linguists, etymologists, and serious English language enthusiasts">English Language &amp; Usage</a></li>
                        <li><a href="//skeptics.stackexchange.com" title="scientific skepticism">Skeptics</a></li>
                        <li><a href="//judaism.stackexchange.com" title="those who base their lives on Jewish law and tradition and anyone interested in learning more">Mi Yodeya (Judaism)</a></li>
                        <li><a href="//travel.stackexchange.com" title="road warriors and seasoned travelers">Travel</a></li>
                        <li><a href="//christianity.stackexchange.com" title="committed Christians, experts in Christianity and those interested in learning more">Christianity</a></li>
                        <li><a href="//gaming.stackexchange.com" title="passionate videogamers on all platforms">Arqade (gaming)</a></li>
                        <li><a href="//bicycles.stackexchange.com" title="people who build and repair bicycles, people who train cycling, or commute on bicycles">Bicycles</a></li>
                        <li><a href="//rpg.stackexchange.com" title="gamemasters and players of tabletop, paper-and-pencil role-playing games">Role-playing Games</a></li>
                    
                        <li>
                            <a href="http://stackexchange.com/sites#culturerecreation" class="more">
                                more (21)
                            </a>
                        </li>
                </ol>
            </td>
            <td>
                <ol>
                        <li><a href="//math.stackexchange.com" title="people studying math at any level and professionals in related fields">Mathematics</a></li>
                        <li><a href="//stats.stackexchange.com" title="people interested in statistics, machine learning, data analysis, data mining, and data visualization">Cross Validated (stats)</a></li>
                        <li><a href="//cstheory.stackexchange.com" title="theoretical computer scientists and researchers in related fields">Theoretical Computer Science</a></li>
                        <li><a href="//physics.stackexchange.com" title="active researchers, academics and students of physics">Physics</a></li>
                        <li><a href="//mathoverflow.net" title="professional mathematicians">MathOverflow</a></li>
                        <li><a href="//chemistry.stackexchange.com" title="scientists, academics, teachers and students">Chemistry</a></li>
                        <li><a href="//biology.stackexchange.com" title="biology researchers, academics, and students">Biology</a></li>
                    
                        <li>
                            <a href="http://stackexchange.com/sites#science" class="more">
                                more (5)
                            </a>
                        </li>
                </ol>
            </td>
            <td>
                <ol>
                        <li><a href="//stackapps.com" title="apps, scripts, and development with the Stack Exchange API">Stack Apps</a></li>
                        <li><a href="//meta.stackexchange.com" title="meta-discussion of the Stack Exchange family of Q&amp;A websites">Meta Stack Exchange</a></li>
                        <li><a href="//area51.stackexchange.com" title="proposing new sites in the Stack Exchange network">Area 51</a></li>
                        <li><a href="//careers.stackoverflow.com">Stack Overflow Careers</a></li>
                    
                </ol>
            </td>
    </tr>
</table>
                </div>
            </div>

            <div id="copyright">
                site design / logo &#169; 2016 Stack Exchange Inc; user contributions licensed under <a href="https://creativecommons.org/licenses/by-sa/3.0/" rel="license">cc by-sa 3.0</a> 
                with <a href="http://blog.stackoverflow.com/2009/06/attribution-required/" rel="license">attribution required</a>
            </div>
            <div id="svnrev">
                rev 2016.4.1.3424
            </div>
            
        </div>
    </div>
    <noscript>
        <div id="noscript-warning">Stack Overflow works best with JavaScript enabled<img src="http://pixel.quantserve.com/pixel/p-c1rF4kxgLUzNc.gif" alt="" class="dno"></div>
    </noscript>
<script>var p = "http", d = "static"; if (document.location.protocol == "https:") { p += "s"; d = "engine"; } var z = document.createElement("script"); z.type = "text/javascript"; z.async = true; z.src = p + "://" + d + ".adzerk.net/ados.js"; var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(z, s);</script>
<script>
    var ados = ados || {};
    ados.run = ados.run || [];
    ados.run.push(function () {
            setTimeout(function () { $("#adzerk-user-match").remove(); }, window.AUMIframeDone ? 0 : 2000);
        ; ados_load();
    });         
</script>

    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () { (i[r].q = i[r].q || []).push(arguments) }, i[r].l = 1 * new Date(); a = s.createElement(o),
            m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m);
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-5620270-1');
                        ga('send', 'pageview');
        var _qevents = _qevents || [],
            _comscore = _comscore || [];
        (function () {
            var ssl='https:'==document.location.protocol,
                s=document.getElementsByTagName('script')[0],
                qc=document.createElement('script');
            qc.async=true;
            qc.src=(ssl?'https://secure':'http://edge')+'.quantserve.com/quant.js';
            s.parentNode.insertBefore(qc, s);
            var sc=document.createElement('script');
            sc.async=true;
            sc.src=(ssl?'https://sb':'http://b') + '.scorecardresearch.com/beacon.js';
            s.parentNode.insertBefore(sc, s);
        })();
        _comscore.push({ c1: "2", c2: "17440561" });
        _qevents.push({ qacct: "p-c1rF4kxgLUzNc" });
    </script>
        

    
    </body>
</html>