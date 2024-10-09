<style>

.article html, body, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
	margin: 0;
	padding: 0;
	border: 0;
	font-size: 100%;
	font: inherit;
	vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
.article article, aside, details, figcaption, figure,
header, hgroup, menu, nav, section {
	display: block;
}
.article body {
	line-height: 1;
}
.article ol, ul {
	list-style: none;
}
.article blockquote, q {
	quotes: none;
}
.article blockquote:before, blockquote:after,
.article q:before, q:after {
	content: '';
	content: none;
}
.article table {
	border-collapse: collapse;
	border-spacing: 0;
}

/* ===== CUSTOM RESET ===== */

.article object{outline:none; display:block; overflow:hidden} /* force redraw on IE8, fix outline/scroll bug on Firefox 3.6, remove unnecessary margin (copied from swffit)  */
.article textarea{overflow:auto} /* fix IE */
.article iframe{border:0}

/* fix line-height [https://gist.github.com/413930] */
.article sup, sub{line-height:0; font-size:.75em; position:relative; vertical-align:baseline}
.article sup{top:-0.5em}
.article sub{bottom:-0.25em}


/* ========================= GENERAL TAGS ======================== */

.article html{font-family:Arial, Helvetica, sans-serif; overflow-y:scroll; min-width:1000px}
.article body{background-color:#fff; color:#444; font-size:12px; line-height:1.5em}

/* .article h1, h2, h3, h4, h5, h6{ font-weight:bold; line-height:1em} */
.article h1, .h1{font-size:2em}
.article h2, .h2{font-size:1.6em}
.article h3, .h3{font-size:1.4em}
.article h4, .h4{font-size:1.2em}
.article h5, .h5{font-size:1.1em}
.article h6, .h6{font-size:1em}

.article p{margin:1em 0}
.article small{font-size:.833em}
.article em, i{font-style:italic}
.article strong, b{font-weight:bold}
.article code, pre{font-family:monospace}

.article a{text-decoration:underline}
.article a:hover, a:focus{text-decoration:none}
.article a:hover, a:active{outline:none}

.article blockquote{padding:0.2em 1em 0.2em 2em; border-left:3px solid #eee}



/* ======================= GENERIC CLASSES ======================= */


/* ===== FRAMEWORK ===== */

/* clearfix hack [http://j.mp/bestclearfix] */
.article .clearfix:before, .clearfix:after, .clearfix > .lastcol:after, .ffluid:after, br.cb{display:block; height:0 !important; line-height:0; overflow:hidden; visibility:hidden}
.article .clearfix:before, .clearfix:after{content:"."}
.article .clearfix:after{clear:both}
.article .clearfix, .ffluid{*zoom:1}

/* Nicole Sullivan zoom-fix hack [http://bit.ly/gpXFlK] */
.article .fcolholder:after, .fcolholder .lastcol:after, .ffluid:after{font-size:xx-large; content:" x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x x "}
.article .fcolholder .lastcol{display:table-cell; float:none; width:auto !important; *display:block; *zoom:1; _position:relative; _left:-3px; _margin-right:-3px}


/* -- columns -- */

.article .col{float:left}
.article .col-1_1{float:none; width:100%}
.article .col-1_2, .col-2_4, .col-3_6{width:50%}
.article .col-1_3, .col-2_6{width:33.33333%}
.article .col-2_3, .col-4_6{width:66.66666%}
.article .col-1_4{width:25%}
.article .col-3_4{width:75%}
.article .col-1_5{width:20%}
.article .col-2_5{width:40%}
.article .col-3_5{width:60%}
.article .col-4_5{width:80%}
.article .col-1_6{width:16.66667%}
.article .col-5_6{width:83.33333%}


/* -- image -- */

/* image replacement (borrowed from HTML5 boilerplate) */
.article .ir{text-indent:-999em; display:block; overflow:hidden; text-align:left; direction:ltr}

/* -- floats -- */

.article .fl{float:left; _margin-right:-3px}
.article .fr{float:right; _margin-left:-3px}
.article .ffluid{display:table-cell; *display:block; width:auto}
.article .cr{clear:right}
.article .cl{clear:left}
.article .cb{clear:both}


/* -- display -- */

.article .hidden{display:none !important}
.article .hidden, .invisible{visibility:hidden !important}


/* -- centering -- */

/* vertical centering technique [http://www.jakpsatweb.cz/css/css-vertical-center-solution.html] */
.article .vcenter{/* height of .vcenter element is required */ overflow:hidden; *position:relative; display:table; *display:block}
.article .vcenter .outer{display:table-cell; vertical-align:middle; width:100%; *position:absolute; *top:50%}
.article .vcenter .inner{*position:relative; *top:-50%}

.article .hcenter{/* width is required */ margin-left:auto !important; margin-right:auto !important}


/* -- text helpers -- */

.article .tcenter{text-align:center}
.article .tleft{text-align:left}
.article .tright{text-align:right}
.article .tupper{text-transform:uppercase}
.article .tlower{text-transform:lowercase}
.article .tnormal{text-transform:none}
.article .ttop{text-align:top}
.article .tmiddle{text-align:middle}
.article .tbottom{text-align:bottom}


/* -- interaction helpers -- */

.article .clickable, .btn{cursor:pointer}
.article .clickable.disabled, .btn.disabled{cursor:default !important}


/* ===== PROJECT SPECIFIC ===== */


/* --- font-styles --- */

.article .b{font-weight:bold}
.article .em{font-style:italic}
.article .big{font-size:1.166em}
.article .small{font-size:.833em}
.article .del{text-decoration:line-through}


/* --- lists --- */

.article .nav, .nav > li{padding:0; margin:0}
.article .hlnav > li{float:left; margin-right:1em}
.article .hrnav > li{float:right; margin-left:1em}

.article .simpleList{padding-left:2em; margin:1em 0}
.article ol.simpleList{list-style:decimal}
.article ul.simpleList{list-style:disc}
.article .simpleList > li{margin:.5em 0}
.article .simpleList > li ul{margin:0 0 1em}
.article .simpleList > dt{margin:1em 0 .2em}
.article .simpleList > dd{margin:.5em 0; padding-left:2em}


/* --- Grids --- */

/* grid => update values to match project grid */
.article .gridholder{margin-right:-18px; width:984px} /* width should be the same as full grid + gutter. it should be used together with .clearfix */
.article .gridholder > .grid{float:left; margin-right:18px}
/* using !important on all values to be able to use it for sizing elements besides grid columns */
.article .grid-1{width:64px !important}
.article .grid-2{width:146px !important}
.article .grid-3{width:228px !important}
.article .grid-4{width:310px !important}
.article .grid-5{width:392px !important}
.article .grid-6{width:474px !important}
.article .grid-7{width:556px !important}
.article .grid-8{width:638px !important}
.article .grid-9{width:720px !important}
.article .grid-10{width:802px !important}
.article .grid-11{width:884px !important}
.article .grid-12{width:966px !important}
/* */

/* fluid grid => update values to match project grid */
/* it is important to note that .fgrid-[n] units doesn't match proper size when used outside of .fgridholder */
.article .fgridholder{margin-right:-2.5%} /* .fgridholder should be used together with .clearfix, set negative margin as opposite value of gutter */
.article .fgridholder > .grid{float:left; margin-right:2.5%}
.article .fgrid-1{width:5.83333333%}
.article .fgrid-2{width:14.16666667%}
.article .fgrid-3{width:22.5%}
.article .fgrid-4{width:30.8333333%}
.article .fgrid-5{width:39.16666667%}
.article .fgrid-6{width:47.5%}
.article .fgrid-7{width:55.83333333%}
.article .fgrid-8{width:64.16666667%}
.article .fgrid-9{width:72.5%}
.article .fgrid-10{width:80.8333333%}
.article .fgrid-11{width:89.1666667%}
.article .fgrid-12{width:97.5%}
/* */


/* ====================== STRUCTURE/CONTENT ====================== */

.article #wrapper{overflow:hidden; /* overflow is important for grid. that way no need to use classes like .last, .end, .omega or wrap each row into a different container */}

/* ============================ DEBUG ============================ */

.article a {
	color: #eb4432;
	font-weight: bold;
}
</style>

<div class="mt-12 flex flex-col items-center">
    {{-- Care about people's approval and you will be their prisoner. --}}
    <div class="w-full max-w-2xl lg:max-w-4xl">
        <div class="">
            <h1 class="text-5xl font-bold">{{ $article->title }}</h1>
            <p class="mt-4">{{ $article->excerpt }}</p>
        </div>

        <div class="mt-6 break-words article">
            {!! $article->content !!}
        </div>
    </div>
</div>
