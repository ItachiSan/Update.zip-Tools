/*------------------------------------------------*/
/*------------------[BASE STYLES]-----------------*/
/*------------------------------------------------*/
body { margin-top: 0px; padding: 0; color: #ABABAB; background-color:#000000; font-family: Verdana; font-size: 11px; line-height: 18px; }
a:link, a:visited { text-decoration: none; color: #003078; }
a:hover { color: #3B3B3B; }
a { outline: none; }
h1 { margin: 0px 0px 10px 0px; font-weight: normal; font-size: 24px; }
h2 { margin: 0px 0px 10px 0px; font-weight: normal; font-size: 23px; }
h3 { margin: 0px 0px 10px 0px; font-weight: normal; font-size: 22px; }
ul { list-style-image: url(images/bullet.gif); line-height: 23px;}


/*------------------------------------------------*/
/*------------------[MAIN LAYOUT]-----------------*/
/*------------------------------------------------*/
.abouttitle { color: #003078; font-size: 20px; margin-bottom: 10px; }
.pagination a:link, .pagination a:hover { color:#FFF }
#wrapper2 { width: 950px; margin-left: auto; margin-right: auto; padding: 0px 0px 0px 0px; background-color: #003078; background-image: url(images/bg.gif); margin-top: 40px; }
.post-wrapper { background-color: #FFF; padding: 15px; width: 585px; background-image: url(images/content-white-top.gif); background-position: top; background-repeat: no-repeat; }
.post-wrap { width: 580px; margin-bottom: 15px; }
.home-post-wrap { width: 585px; margin-right: 15px; margin-bottom: 10px; float: left; height: 130px; }
.readmore { background-image: url(images/read-more.gif); background-repeat: no-repeat; background-position: left; float: right; padding-left: 20px; margin-top: 10px; }
.readmore a:link, .readmore a:hover { color: #393939; }
#header { width: 932px; float: left; margin-top: 0px; background-image: url(images/header-bg.gif); background-repeat: repeat-x; height: 129px; }
#container { float: right; width: 950px; ; color: #000000; }
#left-div { width: 650px; float: left; margin-top: 20px; }
#left-inside { float: left; padding: 0px 0px 0px 19px; }
.articleinfo { border-bottom: 1px solid #EEEEEE; padding-bottom: 7px; color: #545454; }
#about { float: left; width: 250px; margin-right: 20px; }
.icons { margin-top: 0px; margin-bottom: -5px; margin-right: 10px; }
.list2 { color: #000000; list-style-image: url(images/bullet.gif); margin-top: 0px; font-size: 11px; }
.list2 a:hover { color: #393939; list-style-image: url(images/bullet.gif); margin-top: 0px; font-size: 11px; }
.list2 a { color: #000000; margin-top: 0px; font-size: 11px; }
.toptitle { font-size: 20px; color: #003078; margin-left: 15px; display: block; margin-top: 5px; margin-bottom: 10px; }
.toptitle2 { font-size: 24px; color: #FFF; display: block; margin-top: 15px; margin-bottom: 10px; }
.thumbnail-div { border: 1px solid #C5D7F2; width: 84px; height: 84px; background-color: #FFF; padding: 5px; float: left; margin-right: 10px; }
.post-info { width: 593px; border-bottom: 1px solid #E4E4E4; padding-bottom: 10px; margin-bottom: 10px; color: #545454; font-size: 10px; }
.post-info-recent { width: 585px;  color: #545454; font-size: 10px; margin-bottom: 5px;}
.thumbnail-div-featured { border: 5px solid #ECECEC; width: 200px; height: 200px; float: left; margin-right: 10px; }
.logo { float: left; margin-bottom: 15px; border: 0px; margin-left: 20px; margin-top: 22px; }
.share-div { width: 590px; height: 30px; background-color: #FFF; display: none; }
.share { visibility: hidden; }


/*------------------------------------------------*/
/*---------------------[TITLES]-------------------*/
/*------------------------------------------------*/
.post-title { line-height: 30px; font-size: 24px; margin-bottom: 5px; margin-top: 0px; }
.titles { font-weight: normal; font-size: 15px; text-decoration: none; }
.titles a:link, .titles a:visited, .titles a:active { text-decoration: none; font-size: 15px; font-weight: normal; font-family: Trebuchet MS;  display: block; }
.titles-featured a, .titles-featured a:hover, .titles-featured { font-size: 20px; line-height: 20px; display: block; margin-bottom: 10px; margin-top: 0px; }


/*------------------------------------------------*/
/*--------------------[COMMENTS]------------------*/
/*------------------------------------------------*/
.commentlist { padding: 0px; margin: 0px 0px 0px 17px; width: 560px; background-image: url(images/comment-bg.gif); list-style-image: none; list-style-type: none; float: left; }
.commentlist li { font-weight: bold; width: 560px; display: block; background-image: url(images/comment-bottom.gif); background-repeat: no-repeat; background-position: bottom left; padding: 0px 0px 45px 0px; margin: 0px; list-style-image: none; list-style-type: none; float: left; }
.commentlist li div { width: 540px; display: block; background-image: url(images/comment-top.gif); background-repeat: no-repeat; margin: 0px; padding: 10px; float: left; }
.commentlist li .avatar { float: left; border: 1px solid #eee; padding: 2px; background: #fff; }
.commentlist cite { font-size: 18px; float: left; font-style: normal; margin-left: 10px; margin-right: 6px; margin-top: 5px; font-weight: normal; }
.says { display: none; }
.commentlist p { font-weight: normal; line-height: 1.5em; text-transform: none; display: block; float: left; width: 90%; margin-left: 3%; }
#commentform p { clear: both; }
.alt { margin: 0; padding: 10px; }
.nocomments { text-align: center; margin: 0; padding: 0; }
.commentlist .children li { width: 90%; display: block; margin: 0px; background-color: #FDFDFD; background-image: url(images/comment-children-bg.gif); background-position: left; background-repeat: repeat-y; border: 1px solid #E2E2E4; overflow: hidden; }
.commentlist .children li div { width: 97%; padding: 3%; background-image: url(images/comment-children-top.gif); background-repeat: no-repeat; background-position: top left; }
.commentlist .commentmetadata { font-weight: normal; float: left; margin: 5px 0px 0px 0px; display: block; clear: both; background-image: none; width: 90%; margin-left: 3%; }
.commentlist .vcard, .commentlist .children .comment-author, .commentlist .children .vcard, .commentlist .commentmetadata, .commentlist .children .comment-author, .commentlist .children .comment-meta { background-image: none; width: 100%; padding: 0px !important; }
.commentlist .reply, .commentlist .children .reply { float: right; background-image: none; width: 54px; height: 22px; margin-bottom: 0px; padding: 0px; margin-right: 10px; font: 0.9em 'Lucida Grande', Verdana, Arial, Sans-Serif; }
.commentlist .reply a:link, .commentlist .reply a:hover, .commentlist .children .reply a:link, .commentlist .children .reply a:hover { background-image: url(images/reply.gif); width: 39px; height: 17px; display: block; color: #FFF; font-size: 8px; text-transform: lowercase; font-weight: normal; padding: 5px 0px 0px 15px; letter-spacing: 1px; }
.commentlist .children li { padding-bottom: 10px; }
.commentlist .children li ul li { padding-bottom: 10px; background-color: #FFF; }
#respond { margin-top: 20px; float: left; background-image: none; }
.commentlist #respond h3, .commentlist #respond a { margin-left: 28px; }
#comments { line-height: 30px; }
.children { clear: both; }
.children .commentmetadata, .children .vcard { background-image: none; }
.children textarea { width: 90% !important; }
.children input { width: 80% !important; }
#cancel-comment-reply-link { display: block; background-image: url(images/comment-close.gif); width: 144px; height: 21px; padding: 5px 0px 0px 23px; font-weight: normal; color: #84878E; font: 1em 'Lucida Grande', Verdana, Arial, Sans-Serif; }
#respond div { background-image: none; }
#submit { width: 120px !important; }


/*------------------------------------------------*/
/*-----------------[COMMENT FORM]-----------------*/
/*------------------------------------------------*/
#commentform { margin: 10px 0px 0px 20px; }
#commentform textarea { background: #f8f7f6; border: 1px solid #C9D9F0; width: 350px; padding: 10px; }
#commentform #email { font-size: 13px; background: #f8f7f6; border: 1px solid #C9D9F0; width: 220px; background-image: url(images/comment-email.gif); background-position: 7px 7px; background-repeat: no-repeat; height: 20px; padding-left: 30px; padding-top: 6px; margin-bottom: 3px; }
#commentform #author { font-size: 13px; background: #f8f7f6; border: 1px solid #C9D9F0; width: 220px; background-image: url(images/comment-author.gif); background-position: 7px 7px; background-repeat: no-repeat; height: 20px; padding-left: 30px; padding-top: 6px; margin-bottom: 3px; }
#commentform #url { font-size: 13px; background: #f8f7f6; border: 1px solid #C9D9F0; width: 220px; background-image: url(images/comment-website.gif); background-position: 7px 7px; background-repeat: no-repeat; height: 20px; padding-left: 30px; padding-top: 6px; margin-bottom: 3px; }


/*------------------------------------------------*/
/*---------------[PAGES NAVIGATION]---------------*/
/*------------------------------------------------*/
#navigation { float: left; height: 54px; background-image: url(images/pages-bg.gif); max-width: 740px; }
#navigation ul { list-style-type: none; list-style-image: none; float: left; margin-top: 10px; padding: 0px 0px 0px 0px; display: block; margin-left: 0px; }
#navigation li:hover { background-color: #E1EDFF; background-image: url(images/pages-hover-right.gif); background-repeat: no-repeat; background-position: right; }
#navigation li { float: left; display: block; margin-right: 10px; padding-left: 0px; height: 29px; margin-bottom: 15px; }
#navigation li a:link, #navigation li a:visited { float: left; color: #FFFFFF; display: block; padding-right: 8px; padding-left: 8px; padding-top: 3px; font-size: 12px; margin-bottom: 3px; height: 26px; }
#navigation li a:hover, #navigation li a:active { color: #003078; font-size: 12px; margin-bottom: 0px; height: 26px; background-image: url(images/pages-hover-left.gif); background-position: left; background-repeat: no-repeat; }
		/*-------------[DROPDOWN MENU]------------*/
		.nav, .nav * { margin:0; padding:0; list-style:none; }
		.nav ul { position:absolute; top:-999em; padding-top: 10px; }
		.nav li { float:left; position:relative; z-index:99; font-size:12px; height: 44px; }
		.nav a { display:block; }
		.nav ul li { width: 100%; }
		.nav li:hover ul, ul.nav li.sfHover ul { left:-10px; top:16px; }
		.nav li:hover li ul, .nav li.sfHover li ul { top:-999em; }
		.nav li li:hover ul, ul.nav li li.sfHover ul { left:230px; top:-9px; }
		.nav li:hover ul, .nav li li:hover ul { top: -999em; }
		.nav li li { display: block; padding: 0px; background-color: #1aa015; float: left; height: auto !important; }
		.nav li li a:link, .nav li li a:visited { width: 180px; display: block; padding: 10px 30px 10px 30px !important; margin: 0px 0px 0px 0px !important; height: auto !important; float: left; background-image: none !important; }
		.nav li li a:hover { background-color: #3bc60a; }


/*------------------------------------------------*/
/*-------------[CATEGORIES NAVIGATION]------------*/
/*------------------------------------------------*/

#categories-inside { background-image: url(images/categories-bg.gif); background-repeat: repeat-x; width: 920px; margin-left: 7px; background-color: #1CA212; height: auto; min-height: 20px; }
#categories-inside ul { margin: 0px 0px 0px 10px; padding-left: 0px; list-style-type: none; list-style-image: none; float: left; }
#categories-inside ul li { float: left; display: block; padding-left: 0px; height: 20px; padding-top: 0px; margin: 0px; }
#categories-inside ul li a:link, #categories-inside ul li a:visited, #categories-inside ul li a:active, #categories-inside ul li a:hover { height: 20px; display: block; color: #FFFFFF; font-size: 10px; padding: 0px 10px 0px 10px; background-image: url(images/categories-line.gif); background-repeat: no-repeat; background-position: right; float: left; }
		/*-------------[DROPDOWN MENU]------------*/
		#nav2 ul { background-image: url(images/dropdown-top.png) !important; background-repeat: no-repeat; background-position: top; padding-top: 19px; border-bottom: 5px solid #cfddf3; }
		#nav2 li ul li ul { background-image: none !important; padding-top: 0px !important; }
		#nav2 li li:hover ul, ul#nav2 li li.sfHover ul { left:240px; top:-10px; }
		#nav2 li { z-index: 100; margin: 0px 10px 0px 0px; height: 29px; }
		#nav2 li ul { background-image: none; }
		#nav2 li li { background-color: #e1edff; background-image: none; margin-right: 0px; color: #003078; }
		#nav2 li li a:link, #nav2 li li a:visited { color: #003078; }
		#nav2 li li:hover { background-image: none; }
		#nav2 li:hover a:link { color: #003078; background-image: url(images/pages-hover-left.gif); background-position: left; background-repeat: no-repeat; }
		#nav2 li li a:hover { background-color: #ffffff; }
		#nav2 li:hover ul, ul#nav2 li.sfHover ul { left:-86px; top:18px; }


/*------------------------------------------------*/
/*------------[CAPTIONS AND ALIGNMENTS]-----------*/
/*------------------------------------------------*/
.aligncenter, div.aligncenter { display: block; margin-left: auto; margin-right: auto; }
.wp-caption { border: 1px solid #ddd; text-align: center; background-color: #f3f3f3; padding-top: 4px; margin: 10px; -moz-border-radius: 3px; -khtml-border-radius: 3px; -webkit-border-radius: 3px; border-radius: 3px; }
.wp-caption img { margin: 0; padding: 0; border: 0 none; }
.wp-caption p.wp-caption-text { font-size: 11px; line-height: 17px; padding: 0 4px 5px; margin: 0; }
p img { padding: 0; max-width: 100%; }
img.centered { display: block; margin-left: auto; margin-right: auto; }
img.alignright { padding: 4px; margin: 0 0 2px 7px; display: inline; }
img.alignleft { padding: 4px; margin: 0 7px 2px 0; display: inline; }
.alignright { float: right; }
.alignleft { float: left }


/*------------------------------------------------*/
/*-------------------[SIDEBAR]--------------------*/
/*------------------------------------------------*/
#sidebar-wrapper { width: 283px; float: left; margin-top: 20px; margin-bottom: 20px; }
		#sidebar { float: left; padding-left: 13px; padding-right: 13px; width: 257px; margin-top: 10px; }
				.sidebar-box { background-image: url(images/sidebar-line.gif); background-position: bottom; background-repeat: no-repeat; padding-bottom: 10px; padding-top: 10px; color: #FFF; margin-bottom: 0px; }
						.sidebar-box ul li a:link, .sidebar-box ul li a:visited, .sidebar-box ul li a:active { display: block; color: #FFFFFF; width: 100%; padding: 3px 3px 3px 3px; background-image: none !important; }
						.sidebar-box a:link, .sidebar-box a:visited, .sidebar-box a:active { color: #FFFFFF; }
						.sidebar-box a:hover { color: #CADFFF; }
						.sidebar-box ul li:hover, .sidebar-box ul li a:hover { background-image: none !important; }
						.sidebar-box ul li a:hover { width: 100%; display: block; color: #CADFFF; padding: 3px 3px 3px 3px; }
						.sidebar-box h2 { margin-top: 5px; font-size: 17px; color: #FFFFFF; padding-top: 4px; font-weight: normal; padding-bottom: 4px; text-transform: uppercase; margin-left: 10px; font-family: Trebuchet MS; background-image: url(images/h3.gif); background-repeat: no-repeat; background-position: left; padding-left: 22px; }
						#rssbox { list-style-image: none; list-style-type: none; }
						#sidebardark { font-size:12px; background-color: #002357; color#fff; width: 265px; background-image: url(images/sidebar-dark-top.gif); background-repeat: no-repeat; background-position: top; padding: 10px 10px 2px 10px; float: left; }
                        
			
                        .sidebardark-box a:link, .sidebardark-box a:visited, .sidebardark-box a:active { color: #FFFFFF; }
                        .sidebardark-box a:hover { color: #CADFFF; }
								/*--------------------[SIDEBAR TABS]--------------------*/
								#panel { background: #F5F5ED; height: 50px; width: 300px; display: none; }
								.slide { margin: 0; padding: 0; background: url(images/dropdown-search.gif) no-repeat center top; }
								.btn-slide { width: 69px; height: 19px; padding-left: 0px; padding-top: 4px; margin: 0 auto; display: block; font: normal 11px Verdana, Helvetica, sans-serif; color: #fff !important; text-decoration: none; padding-left: 14px; }
								#search-wrap { float: right; width: 300px; }
								#panel2 { width: 265px; display: none; }
								.slide2 { margin: 0px 0px 3px 0px; padding: 0; background: url(images/button-search.gif) no-repeat center top; }
								.btn-slide2 { width: 230px; height: 25px; padding-left: 0px; padding-top: 7px; margin: 0 auto; display: block; font: normal 13px Verdana, Helvetica, sans-serif; color: #fff !important; text-decoration: none; padding-left: 35px; }
								#panel3 { width: 265px; display: none; }
								.slide3 { margin: 0px 0px 3px 0px; padding: 0; background: url(images/button-rss.gif) no-repeat center top; }
								.btn-slide3 { width: 230px; height: 25px; padding-left: 0px; padding-top: 7px; margin: 0 auto; display: block; font: normal 13px Verdana, Helvetica, sans-serif; color: #fff !important; text-decoration: none; padding-left: 35px; }
								#panel4 { width: 265px; display: none; }
								#panel4 a:link, #panel4 a:visited, #panel4 a:active { color: #65A3FF; }
								#panel4 a:hover { color: #FFF; }
								.slide4 { margin: 0px 0px 3px 0px; padding: 0; background: url(images/button-tags.gif) no-repeat center top; }
								.btn-slide4 { width: 230px; height: 25px; padding-left: 0px; padding-top: 7px; margin: 0 auto; display: block; font: normal 13px Verdana, Helvetica, sans-serif; color: #fff !important; text-decoration: none; padding-left: 35px; }
								.panel-inside { padding-left: 10px; padding-right: 10px; display: block; }
								.panel3 input { background-color: #003078; border: 1px solid #004AB8; height: 31px; }
								.feedsubmit { background-color: #003078; border: 1px solid #004AB8; color: #FFF; height: 31px; float: right; margin-right: 12px; margin-bottom: 15px; }
								#emailer { background-color: #003078; border: 1px solid #004AB8; color: #FFF; height: 16px; float: left; margin-top: 13px; padding: 10px; margin-left: 4px; margin-bottom: 15px; width: 162px; font-size: 11px; }


/*------------------------------------------------*/
/*--------------------[FOOTER]--------------------*/
/*------------------------------------------------*/
#footer { clear: both; background-image: url(images/footer-bg.gif); background-position: bottom; background-repeat: repeat-x; float: left; width: 950px; text-align: left; color: #B2CBF0; height: 39px; }
		#footer-inside { width: 924px; float: left; height: 29px; padding-top: 10px; padding-left: 10px; }
		#footer-top { min-height: 180px; width: 950px; background-image: url(images/footer-bg-2.gif); background-repeat: repeat-x; background-position: top; background-color: #002357; float: left; margin-top: 10px; }
				#footer a { color: #B2CBF0; font-size: 11px; }
				#footer a:visited { color: #B2CBF0; }
				#footer a:hover { color: #B2CBF0; text-decoration: underline; }
				.footerboxes { width: 280px; margin-left: 10px; margin-top: 15px; float: left; margin-bottom: 10px; }
				.footerboxes ul li a:link, .footerboxes ul li a:visited, .footerboxes ul li a:active { display: block; color: #FFFFFF; width: 100%; padding: 0px 3px 0px 3px; background-image: none !important; }
				.footerboxes ul li:hover, .footerboxes ul li a:hover { background-image: none !important; }
				.footerboxes ul li a:hover { width: 100%; display: block; color: #CADFFF; padding: 0px 3px 0px 3px; }
				.footerboxes h3 { margin-top: 5px; font-size: 17px; color: #FFFFFF; padding-top: 4px; font-weight: normal; padding-bottom: 4px; text-transform: uppercase; margin-left: 10px; font-family: Trebuchet MS; background-image: url(images/h3.gif); background-repeat: no-repeat; background-position: left; padding-left: 22px; }


/*------------------------------------------------*/
/*--------------------[SEARCH]--------------------*/
/*------------------------------------------------*/
.search_bg { height:35px; width:260px; float: left; margin-top: 10px; margin-left: 10px; margin-bottom: 15px; }
#search { color:#FFFFFF; padding:0; }
#search input { background: #003078; font-size:11px; color:#FFF; font-family:Tahoma, arial, verdana, courier; width:150px; height:11px; vertical-align:middle; padding:10px; border: 1px solid #004AB8; }
#search .input { width:66px; height:31px; background:none; border:none; vertical-align:middle; margin:0; padding:0; margin-left: 10px; }


/*------------------------------------------------*/
/*-----------------[TABBED CONTENT]---------------*/
/*------------------------------------------------*/

		/*-----------------[TABS]---------------*/
		.idTabs { padding: 0px; float: left; list-style-type: none; margin-left: 5px; margin-right: 0px; padding-left: 0px; margin-bottom: 0px; }
		.idTabs ul { padding-left: 0px; margin-bottom: 0px; margin-right: 0px; }
		.idTabs li { display: inline; margin: 0px; padding: 0px; float: left; color: #A2A2A2; text-align: center; font-size: 11px; margin-left: 0px; padding-left: 0px; }
		.idTabs li a, .idTabs li a:visited { color: #393939; text-decoration: none; padding-left: 15px; padding-right: 10px; height: 23px; width: 90px; margin-right: 2px; display: block; float: left; background-image: url(images/tab-blue.gif); margin-bottom: 0px; }
		.idTabs li a.selected { color: #393939; text-decoration: none; padding-left: 15px; padding-right: 10px; height: 23px; width: 90px; margin-right: 2px; display: block; float: left; background-image: url(images/tab-white.gif); }
		/*-----------------[RANDOM ARTICLES]---------------*/
		.random-image { width: 44px; height: 44px; border: 4px solid #F2F2E4; float: left; margin-left: 10px; }
		.random-content { float: right; width: 210px; }
		.random-content a:link, .random-content a:visited { font-size: 13px; }
		.random { width: 280px; float: left; margin-top: 10px; }
		#randomarticles { float: left; width: 585px; display: block; background-color: #FFF; background-image: url(images/content-white-top.gif); background-repeat: no-repeat; background-position: top; padding: 15px 15px 5px 15px; }
		/*-----------------[RECENT ARTICLES]---------------*/
		.recentposts { background-color: #E1EDFF; background-image: url(images/content-blue-top.gif); background-repeat: no-repeat; background-position: top; width: 585px; padding: 15px 15px 8px 15px; float: left; }
		#recententries { float: left; width: 585px; display: block; background-color: #FFF; background-image: url(images/content-white-top.gif); background-repeat: no-repeat; background-position: top; padding: 15px 15px 5px 15px; }
		#recentcomments2 { float: left; width: 585px; display: block; background-color: #FFF; background-image: url(images/content-white-top.gif); background-repeat: no-repeat; background-position: top; padding: 15px 15px 5px 15px; }
		#recentcomments2 ul { list-style-image: url(images/icon-comments.gif) !important; }
		/*-----------------[FEATURED ARTICLES]---------------*/
		#featured { float: left; width: 585px; display: block; background-color: #FFF; background-image: url(images/content-white-top.gif); background-repeat: no-repeat; background-position: top; padding: 15px 15px 5px 15px; }
		#featured-content { color: #848484; }
		/*-----------------[POPULAR ARTICLES]---------------*/
		#mostcomments { float: left; width: 585px; display: block; background-color: #FFF; background-image: url(images/content-white-top.gif); background-repeat: no-repeat; background-position: top; padding: 15px 15px 5px 15px; }
