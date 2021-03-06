<style>

/*!
 * Bootstrap v3.3.6 (http://getbootstrap.com)
 * Copyright 2011-2015 Twitter, Inc.
 * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
 */


/*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */

@import url(https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800);
@import url(https://fonts.googleapis.com/css?family=Noto+Serif:400,700);
@import url(https://fonts.googleapis.com/css?family=Alex+Brush);
html {
  font-family: sans-serif;
  -webkit-text-size-adjust: 100%;
  -ms-text-size-adjust: 100%
}

body {
  margin: 0
}

article,
aside,
details,
figcaption,
figure,
footer,
header,
hgroup,
main,
menu,
nav,
section,
summary {
  display: block
}

audio,
canvas,
progress,
video {
  display: inline-block;
  vertical-align: baseline
}

audio:not([controls]) {
  display: none;
  height: 0
}

[hidden],
template {
  display: none
}

a {
  background-color: transparent
}

a:active,
a:hover {
  outline: 0
}

abbr[title] {
  border-bottom: 1px dotted
}

b,
strong {
  font-weight: bold
}

dfn {
  font-style: italic
}

h1 {
  margin: .67em 0;
  font-size: 2em
}

mark {
  color: #000;
  background: #ff0
}

small {
  font-size: 80%
}

sub,
sup {
  position: relative;
  font-size: 75%;
  line-height: 0;
  vertical-align: baseline
}

sup {
  top: -.5em
}

sub {
  bottom: -.25em
}

img {
  border: 0
}

svg:not(:root) {
  overflow: hidden
}

figure {
  margin: 1em 40px
}

hr {
  height: 0;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box
}

pre {
  overflow: auto
}

code,
kbd,
pre,
samp {
  font-family: monospace, monospace;
  font-size: 1em
}

button,
input,
optgroup,
select,
textarea {
  margin: 0;
  font: inherit;
  color: inherit
}

button {
  overflow: visible
}

button,
select {
  text-transform: none
}

button,
html input[type="button"],
input[type="reset"],
input[type="submit"] {
  -webkit-appearance: button;
  cursor: pointer
}

button[disabled],
html input[disabled] {
  cursor: default
}

button::-moz-focus-inner,
input::-moz-focus-inner {
  padding: 0;
  border: 0
}

input {
  line-height: normal
}

input[type="checkbox"],
input[type="radio"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  padding: 0
}

input[type="number"]::-webkit-inner-spin-button,
input[type="number"]::-webkit-outer-spin-button {
  height: auto
}

input[type="search"] {
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  -webkit-appearance: textfield
}

input[type="search"]::-webkit-search-cancel-button,
input[type="search"]::-webkit-search-decoration {
  -webkit-appearance: none
}

fieldset {
  padding: .35em .625em .75em;
  margin: 0 2px;
  border: 1px solid #c0c0c0
}

legend {
  padding: 0;
  border: 0
}

textarea {
  overflow: auto
}

optgroup {
  font-weight: bold
}

table {
  border-spacing: 0;
  border-collapse: collapse
}

td,
th {
  padding: 0
}


/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/src/css/main.css */

@media print {
  *,
  *:before,
  *:after {
    color: #000 !important;
    text-shadow: none !important;
    background: transparent !important;
    -webkit-box-shadow: none !important;
    box-shadow: none !important
  }
  a,
  a:visited {
    text-decoration: underline
  }
  a[href]:after {
    content: " (" attr(href) ")"
  }
  abbr[title]:after {
    content: " (" attr(title) ")"
  }
  a[href^="#"]:after,
  a[href^="javascript:"]:after {
    content: ""
  }
  pre,
  blockquote {
    border: 1px solid #999;
    page-break-inside: avoid
  }
  thead {
    display: table-header-group
  }
  tr,
  img {
    page-break-inside: avoid
  }
  img {
    max-width: 100% !important
  }
  p,
  h2,
  h3 {
    orphans: 3;
    widows: 3
  }
  h2,
  h3 {
    page-break-after: avoid
  }
  .navbar {
    display: none
  }
  .btn>.caret,
  .dropup>.btn>.caret {
    border-top-color: #000 !important
  }
  .label {
    border: 1px solid #000
  }
  .table {
    border-collapse: collapse !important
  }
  .table td,
  .table th {
    background-color: #fff !important
  }
  .table-bordered th,
  .table-bordered td {
    border: 1px solid #ddd !important
  }
}

@font-face {
  font-family: 'Glyphicons Halflings';
  src: url("<?= get_template_directory_uri(); ?>/fonts/glyphicons-halflings-regular.eot");
  src: url("<?= get_template_directory_uri(); ?>/fonts/glyphicons-halflings-regular.eot?#iefix") format("embedded-opentype"), url("<?= get_template_directory_uri(); ?>/fonts/glyphicons-halflings-regular.woff2") format("woff2"), url("<?= get_template_directory_uri(); ?>/fonts/glyphicons-halflings-regular.woff") format("woff"), url("<?= get_template_directory_uri(); ?>/fonts/glyphicons-halflings-regular.ttf") format("truetype"), url("<?= get_template_directory_uri(); ?>/fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular") format("svg")
}

.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale
}

.glyphicon-asterisk:before {
  content: "\002a"
}

.glyphicon-plus:before {
  content: "\002b"
}

.glyphicon-euro:before,
.glyphicon-eur:before {
  content: "\20ac"
}

.glyphicon-minus:before {
  content: "\2212"
}

.glyphicon-cloud:before {
  content: "\2601"
}

.glyphicon-envelope:before {
  content: "\2709"
}

.glyphicon-pencil:before {
  content: "\270f"
}

.glyphicon-glass:before {
  content: "\e001"
}

.glyphicon-music:before {
  content: "\e002"
}

.glyphicon-search:before {
  content: "\e003"
}

.glyphicon-heart:before {
  content: "\e005"
}

.glyphicon-star:before {
  content: "\e006"
}

.glyphicon-star-empty:before {
  content: "\e007"
}

.glyphicon-user:before {
  content: "\e008"
}

.glyphicon-film:before {
  content: "\e009"
}

.glyphicon-th-large:before {
  content: "\e010"
}

.glyphicon-th:before {
  content: "\e011"
}

.glyphicon-th-list:before {
  content: "\e012"
}

.glyphicon-ok:before {
  content: "\e013"
}

.glyphicon-remove:before {
  content: "\e014"
}

.glyphicon-zoom-in:before {
  content: "\e015"
}

.glyphicon-zoom-out:before {
  content: "\e016"
}

.glyphicon-off:before {
  content: "\e017"
}

.glyphicon-signal:before {
  content: "\e018"
}

.glyphicon-cog:before {
  content: "\e019"
}

.glyphicon-trash:before {
  content: "\e020"
}

.glyphicon-home:before {
  content: "\e021"
}

.glyphicon-file:before {
  content: "\e022"
}

.glyphicon-time:before {
  content: "\e023"
}

.glyphicon-road:before {
  content: "\e024"
}

.glyphicon-download-alt:before {
  content: "\e025"
}

.glyphicon-download:before {
  content: "\e026"
}

.glyphicon-upload:before {
  content: "\e027"
}

.glyphicon-inbox:before {
  content: "\e028"
}

.glyphicon-play-circle:before {
  content: "\e029"
}

.glyphicon-repeat:before {
  content: "\e030"
}

.glyphicon-refresh:before {
  content: "\e031"
}

.glyphicon-list-alt:before {
  content: "\e032"
}

.glyphicon-lock:before {
  content: "\e033"
}

.glyphicon-flag:before {
  content: "\e034"
}

.glyphicon-headphones:before {
  content: "\e035"
}

.glyphicon-volume-off:before {
  content: "\e036"
}

.glyphicon-volume-down:before {
  content: "\e037"
}

.glyphicon-volume-up:before {
  content: "\e038"
}

.glyphicon-qrcode:before {
  content: "\e039"
}

.glyphicon-barcode:before {
  content: "\e040"
}

.glyphicon-tag:before {
  content: "\e041"
}

.glyphicon-tags:before {
  content: "\e042"
}

.glyphicon-book:before {
  content: "\e043"
}

.glyphicon-bookmark:before {
  content: "\e044"
}

.glyphicon-print:before {
  content: "\e045"
}

.glyphicon-camera:before {
  content: "\e046"
}

.glyphicon-font:before {
  content: "\e047"
}

.glyphicon-bold:before {
  content: "\e048"
}

.glyphicon-italic:before {
  content: "\e049"
}

.glyphicon-text-height:before {
  content: "\e050"
}

.glyphicon-text-width:before {
  content: "\e051"
}

.glyphicon-align-left:before {
  content: "\e052"
}

.glyphicon-align-center:before {
  content: "\e053"
}

.glyphicon-align-right:before {
  content: "\e054"
}

.glyphicon-align-justify:before {
  content: "\e055"
}

.glyphicon-list:before {
  content: "\e056"
}

.glyphicon-indent-left:before {
  content: "\e057"
}

.glyphicon-indent-right:before {
  content: "\e058"
}

.glyphicon-facetime-video:before {
  content: "\e059"
}

.glyphicon-picture:before {
  content: "\e060"
}

.glyphicon-map-marker:before {
  content: "\e062"
}

.glyphicon-adjust:before {
  content: "\e063"
}

.glyphicon-tint:before {
  content: "\e064"
}

.glyphicon-edit:before {
  content: "\e065"
}

.glyphicon-share:before {
  content: "\e066"
}

.glyphicon-check:before {
  content: "\e067"
}

.glyphicon-move:before {
  content: "\e068"
}

.glyphicon-step-backward:before {
  content: "\e069"
}

.glyphicon-fast-backward:before {
  content: "\e070"
}

.glyphicon-backward:before {
  content: "\e071"
}

.glyphicon-play:before {
  content: "\e072"
}

.glyphicon-pause:before {
  content: "\e073"
}

.glyphicon-stop:before {
  content: "\e074"
}

.glyphicon-forward:before {
  content: "\e075"
}

.glyphicon-fast-forward:before {
  content: "\e076"
}

.glyphicon-step-forward:before {
  content: "\e077"
}

.glyphicon-eject:before {
  content: "\e078"
}

.glyphicon-chevron-left:before {
  content: "\e079"
}

.glyphicon-chevron-right:before {
  content: "\e080"
}

.glyphicon-plus-sign:before {
  content: "\e081"
}

.glyphicon-minus-sign:before {
  content: "\e082"
}

.glyphicon-remove-sign:before {
  content: "\e083"
}

.glyphicon-ok-sign:before {
  content: "\e084"
}

.glyphicon-question-sign:before {
  content: "\e085"
}

.glyphicon-info-sign:before {
  content: "\e086"
}

.glyphicon-screenshot:before {
  content: "\e087"
}

.glyphicon-remove-circle:before {
  content: "\e088"
}

.glyphicon-ok-circle:before {
  content: "\e089"
}

.glyphicon-ban-circle:before {
  content: "\e090"
}

.glyphicon-arrow-left:before {
  content: "\e091"
}

.glyphicon-arrow-right:before {
  content: "\e092"
}

.glyphicon-arrow-up:before {
  content: "\e093"
}

.glyphicon-arrow-down:before {
  content: "\e094"
}

.glyphicon-share-alt:before {
  content: "\e095"
}

.glyphicon-resize-full:before {
  content: "\e096"
}

.glyphicon-resize-small:before {
  content: "\e097"
}

.glyphicon-exclamation-sign:before {
  content: "\e101"
}

.glyphicon-gift:before {
  content: "\e102"
}

.glyphicon-leaf:before {
  content: "\e103"
}

.glyphicon-fire:before {
  content: "\e104"
}

.glyphicon-eye-open:before {
  content: "\e105"
}

.glyphicon-eye-close:before {
  content: "\e106"
}

.glyphicon-warning-sign:before {
  content: "\e107"
}

.glyphicon-plane:before {
  content: "\e108"
}

.glyphicon-calendar:before {
  content: "\e109"
}

.glyphicon-random:before {
  content: "\e110"
}

.glyphicon-comment:before {
  content: "\e111"
}

.glyphicon-magnet:before {
  content: "\e112"
}

.glyphicon-chevron-up:before {
  content: "\e113"
}

.glyphicon-chevron-down:before {
  content: "\e114"
}

.glyphicon-retweet:before {
  content: "\e115"
}

.glyphicon-shopping-cart:before {
  content: "\e116"
}

.glyphicon-folder-close:before {
  content: "\e117"
}

.glyphicon-folder-open:before {
  content: "\e118"
}

.glyphicon-resize-vertical:before {
  content: "\e119"
}

.glyphicon-resize-horizontal:before {
  content: "\e120"
}

.glyphicon-hdd:before {
  content: "\e121"
}

.glyphicon-bullhorn:before {
  content: "\e122"
}

.glyphicon-bell:before {
  content: "\e123"
}

.glyphicon-certificate:before {
  content: "\e124"
}

.glyphicon-thumbs-up:before {
  content: "\e125"
}

.glyphicon-thumbs-down:before {
  content: "\e126"
}

.glyphicon-hand-right:before {
  content: "\e127"
}

.glyphicon-hand-left:before {
  content: "\e128"
}

.glyphicon-hand-up:before {
  content: "\e129"
}

.glyphicon-hand-down:before {
  content: "\e130"
}

.glyphicon-circle-arrow-right:before {
  content: "\e131"
}

.glyphicon-circle-arrow-left:before {
  content: "\e132"
}

.glyphicon-circle-arrow-up:before {
  content: "\e133"
}

.glyphicon-circle-arrow-down:before {
  content: "\e134"
}

.glyphicon-globe:before {
  content: "\e135"
}

.glyphicon-wrench:before {
  content: "\e136"
}

.glyphicon-tasks:before {
  content: "\e137"
}

.glyphicon-filter:before {
  content: "\e138"
}

.glyphicon-briefcase:before {
  content: "\e139"
}

.glyphicon-fullscreen:before {
  content: "\e140"
}

.glyphicon-dashboard:before {
  content: "\e141"
}

.glyphicon-paperclip:before {
  content: "\e142"
}

.glyphicon-heart-empty:before {
  content: "\e143"
}

.glyphicon-link:before {
  content: "\e144"
}

.glyphicon-phone:before {
  content: "\e145"
}

.glyphicon-pushpin:before {
  content: "\e146"
}

.glyphicon-usd:before {
  content: "\e148"
}

.glyphicon-gbp:before {
  content: "\e149"
}

.glyphicon-sort:before {
  content: "\e150"
}

.glyphicon-sort-by-alphabet:before {
  content: "\e151"
}

.glyphicon-sort-by-alphabet-alt:before {
  content: "\e152"
}

.glyphicon-sort-by-order:before {
  content: "\e153"
}

.glyphicon-sort-by-order-alt:before {
  content: "\e154"
}

.glyphicon-sort-by-attributes:before {
  content: "\e155"
}

.glyphicon-sort-by-attributes-alt:before {
  content: "\e156"
}

.glyphicon-unchecked:before {
  content: "\e157"
}

.glyphicon-expand:before {
  content: "\e158"
}

.glyphicon-collapse-down:before {
  content: "\e159"
}

.glyphicon-collapse-up:before {
  content: "\e160"
}

.glyphicon-log-in:before {
  content: "\e161"
}

.glyphicon-flash:before {
  content: "\e162"
}

.glyphicon-log-out:before {
  content: "\e163"
}

.glyphicon-new-window:before {
  content: "\e164"
}

.glyphicon-record:before {
  content: "\e165"
}

.glyphicon-save:before {
  content: "\e166"
}

.glyphicon-open:before {
  content: "\e167"
}

.glyphicon-saved:before {
  content: "\e168"
}

.glyphicon-import:before {
  content: "\e169"
}

.glyphicon-export:before {
  content: "\e170"
}

.glyphicon-send:before {
  content: "\e171"
}

.glyphicon-floppy-disk:before {
  content: "\e172"
}

.glyphicon-floppy-saved:before {
  content: "\e173"
}

.glyphicon-floppy-remove:before {
  content: "\e174"
}

.glyphicon-floppy-save:before {
  content: "\e175"
}

.glyphicon-floppy-open:before {
  content: "\e176"
}

.glyphicon-credit-card:before {
  content: "\e177"
}

.glyphicon-transfer:before {
  content: "\e178"
}

.glyphicon-cutlery:before {
  content: "\e179"
}

.glyphicon-header:before {
  content: "\e180"
}

.glyphicon-compressed:before {
  content: "\e181"
}

.glyphicon-earphone:before {
  content: "\e182"
}

.glyphicon-phone-alt:before {
  content: "\e183"
}

.glyphicon-tower:before {
  content: "\e184"
}

.glyphicon-stats:before {
  content: "\e185"
}

.glyphicon-sd-video:before {
  content: "\e186"
}

.glyphicon-hd-video:before {
  content: "\e187"
}

.glyphicon-subtitles:before {
  content: "\e188"
}

.glyphicon-sound-stereo:before {
  content: "\e189"
}

.glyphicon-sound-dolby:before {
  content: "\e190"
}

.glyphicon-sound-5-1:before {
  content: "\e191"
}

.glyphicon-sound-6-1:before {
  content: "\e192"
}

.glyphicon-sound-7-1:before {
  content: "\e193"
}

.glyphicon-copyright-mark:before {
  content: "\e194"
}

.glyphicon-registration-mark:before {
  content: "\e195"
}

.glyphicon-cloud-download:before {
  content: "\e197"
}

.glyphicon-cloud-upload:before {
  content: "\e198"
}

.glyphicon-tree-conifer:before {
  content: "\e199"
}

.glyphicon-tree-deciduous:before {
  content: "\e200"
}

.glyphicon-cd:before {
  content: "\e201"
}

.glyphicon-save-file:before {
  content: "\e202"
}

.glyphicon-open-file:before {
  content: "\e203"
}

.glyphicon-level-up:before {
  content: "\e204"
}

.glyphicon-copy:before {
  content: "\e205"
}

.glyphicon-paste:before {
  content: "\e206"
}

.glyphicon-alert:before {
  content: "\e209"
}

.glyphicon-equalizer:before {
  content: "\e210"
}

.glyphicon-king:before {
  content: "\e211"
}

.glyphicon-queen:before {
  content: "\e212"
}

.glyphicon-pawn:before {
  content: "\e213"
}

.glyphicon-bishop:before {
  content: "\e214"
}

.glyphicon-knight:before {
  content: "\e215"
}

.glyphicon-baby-formula:before {
  content: "\e216"
}

.glyphicon-tent:before {
  content: "\26fa"
}

.glyphicon-blackboard:before {
  content: "\e218"
}

.glyphicon-bed:before {
  content: "\e219"
}

.glyphicon-apple:before {
  content: "\f8ff"
}

.glyphicon-erase:before {
  content: "\e221"
}

.glyphicon-hourglass:before {
  content: "\231b"
}

.glyphicon-lamp:before {
  content: "\e223"
}

.glyphicon-duplicate:before {
  content: "\e224"
}

.glyphicon-piggy-bank:before {
  content: "\e225"
}

.glyphicon-scissors:before {
  content: "\e226"
}

.glyphicon-bitcoin:before {
  content: "\e227"
}

.glyphicon-btc:before {
  content: "\e227"
}

.glyphicon-xbt:before {
  content: "\e227"
}

.glyphicon-yen:before {
  content: "\00a5"
}

.glyphicon-jpy:before {
  content: "\00a5"
}

.glyphicon-ruble:before {
  content: "\20bd"
}

.glyphicon-rub:before {
  content: "\20bd"
}

.glyphicon-scale:before {
  content: "\e230"
}

.glyphicon-ice-lolly:before {
  content: "\e231"
}

.glyphicon-ice-lolly-tasted:before {
  content: "\e232"
}

.glyphicon-education:before {
  content: "\e233"
}

.glyphicon-option-horizontal:before {
  content: "\e234"
}

.glyphicon-option-vertical:before {
  content: "\e235"
}

.glyphicon-menu-hamburger:before {
  content: "\e236"
}

.glyphicon-modal-window:before {
  content: "\e237"
}

.glyphicon-oil:before {
  content: "\e238"
}

.glyphicon-grain:before {
  content: "\e239"
}

.glyphicon-sunglasses:before {
  content: "\e240"
}

.glyphicon-text-size:before {
  content: "\e241"
}

.glyphicon-text-color:before {
  content: "\e242"
}

.glyphicon-text-background:before {
  content: "\e243"
}

.glyphicon-object-align-top:before {
  content: "\e244"
}

.glyphicon-object-align-bottom:before {
  content: "\e245"
}

.glyphicon-object-align-horizontal:before {
  content: "\e246"
}

.glyphicon-object-align-left:before {
  content: "\e247"
}

.glyphicon-object-align-vertical:before {
  content: "\e248"
}

.glyphicon-object-align-right:before {
  content: "\e249"
}

.glyphicon-triangle-right:before {
  content: "\e250"
}

.glyphicon-triangle-left:before {
  content: "\e251"
}

.glyphicon-triangle-bottom:before {
  content: "\e252"
}

.glyphicon-triangle-top:before {
  content: "\e253"
}

.glyphicon-console:before {
  content: "\e254"
}

.glyphicon-superscript:before {
  content: "\e255"
}

.glyphicon-subscript:before {
  content: "\e256"
}

.glyphicon-menu-left:before {
  content: "\e257"
}

.glyphicon-menu-right:before {
  content: "\e258"
}

.glyphicon-menu-down:before {
  content: "\e259"
}

.glyphicon-menu-up:before {
  content: "\e260"
}

* {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}

*:before,
*:after {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}

html {
  font-size: 10px;
  -webkit-tap-highlight-color: transparent
}

body {
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  line-height: 1.42857143;
  color: #333;
  background-color: #fff
}

input,
button,
select,
textarea {
  font-family: inherit;
  font-size: inherit;
  line-height: inherit
}

a {
  color: #337ab7;
  text-decoration: none
}

a:hover,
a:focus {
  color: #23527c;
  text-decoration: underline
}

a:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px
}

figure {
  margin: 0
}

img {
  vertical-align: middle
}

.img-responsive,
.thumbnail>img,
.thumbnail a>img,
.carousel-inner>.item>img,
.carousel-inner>.item>a>img {
  display: block;
  max-width: 100%;
  height: auto
}

.img-rounded {
  border-radius: 6px
}

.img-thumbnail {
  display: inline-block;
  max-width: 100%;
  height: auto;
  padding: 4px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: all .2s ease-in-out;
  -o-transition: all .2s ease-in-out;
  transition: all .2s ease-in-out
}

.img-circle {
  border-radius: 50%
}

hr {
  margin-top: 20px;
  margin-bottom: 20px;
  border: 0;
  border-top: 1px solid #eee
}

.sr-only {
  position: absolute;
  width: 1px;
  height: 1px;
  padding: 0;
  margin: -1px;
  overflow: hidden;
  clip: rect(0, 0, 0, 0);
  border: 0
}

.sr-only-focusable:active,
.sr-only-focusable:focus {
  position: static;
  width: auto;
  height: auto;
  margin: 0;
  overflow: visible;
  clip: auto
}

[role="button"] {
  cursor: pointer
}

h1,
h2,
h3,
h4,
h5,
h6,
.h1,
.h2,
.h3,
.h4,
.h5,
.h6 {
  font-family: inherit;
  font-weight: 500;
  line-height: 1.1;
  color: inherit
}

h1 small,
h2 small,
h3 small,
h4 small,
h5 small,
h6 small,
.h1 small,
.h2 small,
.h3 small,
.h4 small,
.h5 small,
.h6 small,
h1 .small,
h2 .small,
h3 .small,
h4 .small,
h5 .small,
h6 .small,
.h1 .small,
.h2 .small,
.h3 .small,
.h4 .small,
.h5 .small,
.h6 .small {
  font-weight: normal;
  line-height: 1;
  color: #777
}

h1,
.h1,
h2,
.h2,
h3,
.h3 {
  margin-top: 20px;
  margin-bottom: 10px
}

h1 small,
.h1 small,
h2 small,
.h2 small,
h3 small,
.h3 small,
h1 .small,
.h1 .small,
h2 .small,
.h2 .small,
h3 .small,
.h3 .small {
  font-size: 65%
}

h4,
.h4,
h5,
.h5,
h6,
.h6 {
  margin-top: 10px;
  margin-bottom: 10px
}

h4 small,
.h4 small,
h5 small,
.h5 small,
h6 small,
.h6 small,
h4 .small,
.h4 .small,
h5 .small,
.h5 .small,
h6 .small,
.h6 .small {
  font-size: 75%
}

h1,
.h1 {
  font-size: 36px
}

h2,
.h2 {
  font-size: 30px
}

h3,
.h3 {
  font-size: 24px
}

h4,
.h4 {
  font-size: 18px
}

h5,
.h5 {
  font-size: 14px
}

h6,
.h6 {
  font-size: 12px
}

p {
  margin: 0 0 10px
}

.lead {
  margin-bottom: 20px;
  font-size: 16px;
  font-weight: 300;
  line-height: 1.4
}

@media (min-width: 768px) {
  .lead {
    font-size: 21px
  }
}

small,
.small {
  font-size: 85%
}

mark,
.mark {
  padding: .2em;
  background-color: #fcf8e3
}

.text-left {
  text-align: left
}

.text-right {
  text-align: right
}

.text-center {
  text-align: center
}

.text-justify {
  text-align: justify
}

.text-nowrap {
  white-space: nowrap
}

.text-lowercase {
  text-transform: lowercase
}

.text-uppercase {
  text-transform: uppercase
}

.text-capitalize {
  text-transform: capitalize
}

.text-muted {
  color: #777
}

.text-primary {
  color: #337ab7
}

a.text-primary:hover,
a.text-primary:focus {
  color: #286090
}

.text-success {
  color: #3c763d
}

a.text-success:hover,
a.text-success:focus {
  color: #2b542c
}

.text-info {
  color: #31708f
}

a.text-info:hover,
a.text-info:focus {
  color: #245269
}

.text-warning {
  color: #8a6d3b
}

a.text-warning:hover,
a.text-warning:focus {
  color: #66512c
}

.text-danger {
  color: #a94442
}

a.text-danger:hover,
a.text-danger:focus {
  color: #843534
}

.bg-primary {
  color: #fff;
  background-color: #337ab7
}

a.bg-primary:hover,
a.bg-primary:focus {
  background-color: #286090
}

.bg-success {
  background-color: #dff0d8
}

a.bg-success:hover,
a.bg-success:focus {
  background-color: #c1e2b3
}

.bg-info {
  background-color: #d9edf7
}

a.bg-info:hover,
a.bg-info:focus {
  background-color: #afd9ee
}

.bg-warning {
  background-color: #fcf8e3
}

a.bg-warning:hover,
a.bg-warning:focus {
  background-color: #f7ecb5
}

.bg-danger {
  background-color: #f2dede
}

a.bg-danger:hover,
a.bg-danger:focus {
  background-color: #e4b9b9
}

.page-header {
  padding-bottom: 9px;
  margin: 40px 0 20px;
  border-bottom: 1px solid #eee
}

ul,
ol {
  margin-top: 0;
  margin-bottom: 10px
}

ul ul,
ol ul,
ul ol,
ol ol {
  margin-bottom: 0
}

.list-unstyled {
  padding-left: 0;
  list-style: none
}

.list-inline {
  padding-left: 0;
  margin-left: -5px;
  list-style: none
}

.list-inline>li {
  display: inline-block;
  padding-right: 5px;
  padding-left: 5px
}

dl {
  margin-top: 0;
  margin-bottom: 20px
}

dt,
dd {
  line-height: 1.42857143
}

dt {
  font-weight: bold
}

dd {
  margin-left: 0
}

@media (min-width: 768px) {
  .dl-horizontal dt {
    float: left;
    width: 160px;
    overflow: hidden;
    clear: left;
    text-align: right;
    text-overflow: ellipsis;
    white-space: nowrap
  }
  .dl-horizontal dd {
    margin-left: 180px
  }
}

abbr[title],
abbr[data-original-title] {
  cursor: help;
  border-bottom: 1px dotted #777
}

.initialism {
  font-size: 90%;
  text-transform: uppercase
}

blockquote {
  padding: 10px 20px;
  margin: 0 0 20px;
  font-size: 17.5px;
  border-left: 5px solid #eee
}

blockquote p:last-child,
blockquote ul:last-child,
blockquote ol:last-child {
  margin-bottom: 0
}

blockquote footer,
blockquote small,
blockquote .small {
  display: block;
  font-size: 80%;
  line-height: 1.42857143;
  color: #777
}

blockquote footer:before,
blockquote small:before,
blockquote .small:before {
  content: '\2014 \00A0'
}

.blockquote-reverse,
blockquote.pull-right {
  padding-right: 15px;
  padding-left: 0;
  text-align: right;
  border-right: 5px solid #eee;
  border-left: 0
}

.blockquote-reverse footer:before,
blockquote.pull-right footer:before,
.blockquote-reverse small:before,
blockquote.pull-right small:before,
.blockquote-reverse .small:before,
blockquote.pull-right .small:before {
  content: ''
}

.blockquote-reverse footer:after,
blockquote.pull-right footer:after,
.blockquote-reverse small:after,
blockquote.pull-right small:after,
.blockquote-reverse .small:after,
blockquote.pull-right .small:after {
  content: '\00A0 \2014'
}

address {
  margin-bottom: 20px;
  font-style: normal;
  line-height: 1.42857143
}

code,
kbd,
pre,
samp {
  font-family: Menlo, Monaco, Consolas, "Courier New", monospace
}

code {
  padding: 2px 4px;
  font-size: 90%;
  color: #c7254e;
  background-color: #f9f2f4;
  border-radius: 4px
}

kbd {
  padding: 2px 4px;
  font-size: 90%;
  color: #fff;
  background-color: #333;
  border-radius: 3px;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.25)
}

kbd kbd {
  padding: 0;
  font-size: 100%;
  font-weight: bold;
  -webkit-box-shadow: none;
  box-shadow: none
}

pre {
  display: block;
  padding: 9.5px;
  margin: 0 0 10px;
  font-size: 13px;
  line-height: 1.42857143;
  color: #333;
  word-break: break-all;
  word-wrap: break-word;
  background-color: #f5f5f5;
  border: 1px solid #ccc;
  border-radius: 4px
}

pre code {
  padding: 0;
  font-size: inherit;
  color: inherit;
  white-space: pre-wrap;
  background-color: transparent;
  border-radius: 0
}

.pre-scrollable {
  max-height: 340px;
  overflow-y: scroll
}

.container {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto
}

@media (min-width: 768px) {
  .container {
    width: 750px
  }
}

@media (min-width: 992px) {
  .container {
    width: 970px
  }
}

@media (min-width: 1200px) {
  .container {
    width: 1170px
  }
}

.container-fluid {
  padding-right: 15px;
  padding-left: 15px;
  margin-right: auto;
  margin-left: auto
}

.row {
  margin-right: -15px;
  margin-left: -15px
}

.col-xs-1,
.col-sm-1,
.col-md-1,
.col-lg-1,
.col-xs-2,
.col-sm-2,
.col-md-2,
.col-lg-2,
.col-xs-3,
.col-sm-3,
.col-md-3,
.col-lg-3,
.col-xs-4,
.col-sm-4,
.col-md-4,
.col-lg-4,
.col-xs-5,
.col-sm-5,
.col-md-5,
.col-lg-5,
.col-xs-6,
.col-sm-6,
.col-md-6,
.col-lg-6,
.col-xs-7,
.col-sm-7,
.col-md-7,
.col-lg-7,
.col-xs-8,
.col-sm-8,
.col-md-8,
.col-lg-8,
.col-xs-9,
.col-sm-9,
.col-md-9,
.col-lg-9,
.col-xs-10,
.col-sm-10,
.col-md-10,
.col-lg-10,
.col-xs-11,
.col-sm-11,
.col-md-11,
.col-lg-11,
.col-xs-12,
.col-sm-12,
.col-md-12,
.col-lg-12 {
  position: relative;
  min-height: 1px;
  padding-right: 15px;
  padding-left: 15px
}

.col-xs-1,
.col-xs-2,
.col-xs-3,
.col-xs-4,
.col-xs-5,
.col-xs-6,
.col-xs-7,
.col-xs-8,
.col-xs-9,
.col-xs-10,
.col-xs-11,
.col-xs-12 {
  float: left
}

.col-xs-12 {
  width: 100%
}

.col-xs-11 {
  width: 91.66666667%
}

.col-xs-10 {
  width: 83.33333333%
}

.col-xs-9 {
  width: 75%
}

.col-xs-8 {
  width: 66.66666667%
}

.col-xs-7 {
  width: 58.33333333%
}

.col-xs-6 {
  width: 50%
}

.col-xs-5 {
  width: 41.66666667%
}

.col-xs-4 {
  width: 33.33333333%
}

.col-xs-3 {
  width: 25%
}

.col-xs-2 {
  width: 16.66666667%
}

.col-xs-1 {
  width: 8.33333333%
}

.col-xs-pull-12 {
  right: 100%
}

.col-xs-pull-11 {
  right: 91.66666667%
}

.col-xs-pull-10 {
  right: 83.33333333%
}

.col-xs-pull-9 {
  right: 75%
}

.col-xs-pull-8 {
  right: 66.66666667%
}

.col-xs-pull-7 {
  right: 58.33333333%
}

.col-xs-pull-6 {
  right: 50%
}

.col-xs-pull-5 {
  right: 41.66666667%
}

.col-xs-pull-4 {
  right: 33.33333333%
}

.col-xs-pull-3 {
  right: 25%
}

.col-xs-pull-2 {
  right: 16.66666667%
}

.col-xs-pull-1 {
  right: 8.33333333%
}

.col-xs-pull-0 {
  right: auto
}

.col-xs-push-12 {
  left: 100%
}

.col-xs-push-11 {
  left: 91.66666667%
}

.col-xs-push-10 {
  left: 83.33333333%
}

.col-xs-push-9 {
  left: 75%
}

.col-xs-push-8 {
  left: 66.66666667%
}

.col-xs-push-7 {
  left: 58.33333333%
}

.col-xs-push-6 {
  left: 50%
}

.col-xs-push-5 {
  left: 41.66666667%
}

.col-xs-push-4 {
  left: 33.33333333%
}

.col-xs-push-3 {
  left: 25%
}

.col-xs-push-2 {
  left: 16.66666667%
}

.col-xs-push-1 {
  left: 8.33333333%
}

.col-xs-push-0 {
  left: auto
}

.col-xs-offset-12 {
  margin-left: 100%
}

.col-xs-offset-11 {
  margin-left: 91.66666667%
}

.col-xs-offset-10 {
  margin-left: 83.33333333%
}

.col-xs-offset-9 {
  margin-left: 75%
}

.col-xs-offset-8 {
  margin-left: 66.66666667%
}

.col-xs-offset-7 {
  margin-left: 58.33333333%
}

.col-xs-offset-6 {
  margin-left: 50%
}

.col-xs-offset-5 {
  margin-left: 41.66666667%
}

.col-xs-offset-4 {
  margin-left: 33.33333333%
}

.col-xs-offset-3 {
  margin-left: 25%
}

.col-xs-offset-2 {
  margin-left: 16.66666667%
}

.col-xs-offset-1 {
  margin-left: 8.33333333%
}

.col-xs-offset-0 {
  margin-left: 0
}

@media (min-width: 768px) {
  .col-sm-1,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12 {
    float: left
  }
  .col-sm-12 {
    width: 100%
  }
  .col-sm-11 {
    width: 91.66666667%
  }
  .col-sm-10 {
    width: 83.33333333%
  }
  .col-sm-9 {
    width: 75%
  }
  .col-sm-8 {
    width: 66.66666667%
  }
  .col-sm-7 {
    width: 58.33333333%
  }
  .col-sm-6 {
    width: 50%
  }
  .col-sm-5 {
    width: 41.66666667%
  }
  .col-sm-4 {
    width: 33.33333333%
  }
  .col-sm-3 {
    width: 25%
  }
  .col-sm-2 {
    width: 16.66666667%
  }
  .col-sm-1 {
    width: 8.33333333%
  }
  .col-sm-pull-12 {
    right: 100%
  }
  .col-sm-pull-11 {
    right: 91.66666667%
  }
  .col-sm-pull-10 {
    right: 83.33333333%
  }
  .col-sm-pull-9 {
    right: 75%
  }
  .col-sm-pull-8 {
    right: 66.66666667%
  }
  .col-sm-pull-7 {
    right: 58.33333333%
  }
  .col-sm-pull-6 {
    right: 50%
  }
  .col-sm-pull-5 {
    right: 41.66666667%
  }
  .col-sm-pull-4 {
    right: 33.33333333%
  }
  .col-sm-pull-3 {
    right: 25%
  }
  .col-sm-pull-2 {
    right: 16.66666667%
  }
  .col-sm-pull-1 {
    right: 8.33333333%
  }
  .col-sm-pull-0 {
    right: auto
  }
  .col-sm-push-12 {
    left: 100%
  }
  .col-sm-push-11 {
    left: 91.66666667%
  }
  .col-sm-push-10 {
    left: 83.33333333%
  }
  .col-sm-push-9 {
    left: 75%
  }
  .col-sm-push-8 {
    left: 66.66666667%
  }
  .col-sm-push-7 {
    left: 58.33333333%
  }
  .col-sm-push-6 {
    left: 50%
  }
  .col-sm-push-5 {
    left: 41.66666667%
  }
  .col-sm-push-4 {
    left: 33.33333333%
  }
  .col-sm-push-3 {
    left: 25%
  }
  .col-sm-push-2 {
    left: 16.66666667%
  }
  .col-sm-push-1 {
    left: 8.33333333%
  }
  .col-sm-push-0 {
    left: auto
  }
  .col-sm-offset-12 {
    margin-left: 100%
  }
  .col-sm-offset-11 {
    margin-left: 91.66666667%
  }
  .col-sm-offset-10 {
    margin-left: 83.33333333%
  }
  .col-sm-offset-9 {
    margin-left: 75%
  }
  .col-sm-offset-8 {
    margin-left: 66.66666667%
  }
  .col-sm-offset-7 {
    margin-left: 58.33333333%
  }
  .col-sm-offset-6 {
    margin-left: 50%
  }
  .col-sm-offset-5 {
    margin-left: 41.66666667%
  }
  .col-sm-offset-4 {
    margin-left: 33.33333333%
  }
  .col-sm-offset-3 {
    margin-left: 25%
  }
  .col-sm-offset-2 {
    margin-left: 16.66666667%
  }
  .col-sm-offset-1 {
    margin-left: 8.33333333%
  }
  .col-sm-offset-0 {
    margin-left: 0
  }
}

@media (min-width: 992px) {
  .col-md-1,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-md-10,
  .col-md-11,
  .col-md-12 {
    float: left
  }
  .col-md-12 {
    width: 100%
  }
  .col-md-11 {
    width: 91.66666667%
  }
  .col-md-10 {
    width: 83.33333333%
  }
  .col-md-9 {
    width: 75%
  }
  .col-md-8 {
    width: 66.66666667%
  }
  .col-md-7 {
    width: 58.33333333%
  }
  .col-md-6 {
    width: 50%
  }
  .col-md-5 {
    width: 41.66666667%
  }
  .col-md-4 {
    width: 33.33333333%
  }
  .col-md-3 {
    width: 25%
  }
  .col-md-2 {
    width: 16.66666667%
  }
  .col-md-1 {
    width: 8.33333333%
  }
  .col-md-pull-12 {
    right: 100%
  }
  .col-md-pull-11 {
    right: 91.66666667%
  }
  .col-md-pull-10 {
    right: 83.33333333%
  }
  .col-md-pull-9 {
    right: 75%
  }
  .col-md-pull-8 {
    right: 66.66666667%
  }
  .col-md-pull-7 {
    right: 58.33333333%
  }
  .col-md-pull-6 {
    right: 50%
  }
  .col-md-pull-5 {
    right: 41.66666667%
  }
  .col-md-pull-4 {
    right: 33.33333333%
  }
  .col-md-pull-3 {
    right: 25%
  }
  .col-md-pull-2 {
    right: 16.66666667%
  }
  .col-md-pull-1 {
    right: 8.33333333%
  }
  .col-md-pull-0 {
    right: auto
  }
  .col-md-push-12 {
    left: 100%
  }
  .col-md-push-11 {
    left: 91.66666667%
  }
  .col-md-push-10 {
    left: 83.33333333%
  }
  .col-md-push-9 {
    left: 75%
  }
  .col-md-push-8 {
    left: 66.66666667%
  }
  .col-md-push-7 {
    left: 58.33333333%
  }
  .col-md-push-6 {
    left: 50%
  }
  .col-md-push-5 {
    left: 41.66666667%
  }
  .col-md-push-4 {
    left: 33.33333333%
  }
  .col-md-push-3 {
    left: 25%
  }
  .col-md-push-2 {
    left: 16.66666667%
  }
  .col-md-push-1 {
    left: 8.33333333%
  }
  .col-md-push-0 {
    left: auto
  }
  .col-md-offset-12 {
    margin-left: 100%
  }
  .col-md-offset-11 {
    margin-left: 91.66666667%
  }
  .col-md-offset-10 {
    margin-left: 83.33333333%
  }
  .col-md-offset-9 {
    margin-left: 75%
  }
  .col-md-offset-8 {
    margin-left: 66.66666667%
  }
  .col-md-offset-7 {
    margin-left: 58.33333333%
  }
  .col-md-offset-6 {
    margin-left: 50%
  }
  .col-md-offset-5 {
    margin-left: 41.66666667%
  }
  .col-md-offset-4 {
    margin-left: 33.33333333%
  }
  .col-md-offset-3 {
    margin-left: 25%
  }
  .col-md-offset-2 {
    margin-left: 16.66666667%
  }
  .col-md-offset-1 {
    margin-left: 8.33333333%
  }
  .col-md-offset-0 {
    margin-left: 0
  }
}

@media (min-width: 1200px) {
  .col-lg-1,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12 {
    float: left
  }
  .col-lg-12 {
    width: 100%
  }
  .col-lg-11 {
    width: 91.66666667%
  }
  .col-lg-10 {
    width: 83.33333333%
  }
  .col-lg-9 {
    width: 75%
  }
  .col-lg-8 {
    width: 66.66666667%
  }
  .col-lg-7 {
    width: 58.33333333%
  }
  .col-lg-6 {
    width: 50%
  }
  .col-lg-5 {
    width: 41.66666667%
  }
  .col-lg-4 {
    width: 33.33333333%
  }
  .col-lg-3 {
    width: 25%
  }
  .col-lg-2 {
    width: 16.66666667%
  }
  .col-lg-1 {
    width: 8.33333333%
  }
  .col-lg-pull-12 {
    right: 100%
  }
  .col-lg-pull-11 {
    right: 91.66666667%
  }
  .col-lg-pull-10 {
    right: 83.33333333%
  }
  .col-lg-pull-9 {
    right: 75%
  }
  .col-lg-pull-8 {
    right: 66.66666667%
  }
  .col-lg-pull-7 {
    right: 58.33333333%
  }
  .col-lg-pull-6 {
    right: 50%
  }
  .col-lg-pull-5 {
    right: 41.66666667%
  }
  .col-lg-pull-4 {
    right: 33.33333333%
  }
  .col-lg-pull-3 {
    right: 25%
  }
  .col-lg-pull-2 {
    right: 16.66666667%
  }
  .col-lg-pull-1 {
    right: 8.33333333%
  }
  .col-lg-pull-0 {
    right: auto
  }
  .col-lg-push-12 {
    left: 100%
  }
  .col-lg-push-11 {
    left: 91.66666667%
  }
  .col-lg-push-10 {
    left: 83.33333333%
  }
  .col-lg-push-9 {
    left: 75%
  }
  .col-lg-push-8 {
    left: 66.66666667%
  }
  .col-lg-push-7 {
    left: 58.33333333%
  }
  .col-lg-push-6 {
    left: 50%
  }
  .col-lg-push-5 {
    left: 41.66666667%
  }
  .col-lg-push-4 {
    left: 33.33333333%
  }
  .col-lg-push-3 {
    left: 25%
  }
  .col-lg-push-2 {
    left: 16.66666667%
  }
  .col-lg-push-1 {
    left: 8.33333333%
  }
  .col-lg-push-0 {
    left: auto
  }
  .col-lg-offset-12 {
    margin-left: 100%
  }
  .col-lg-offset-11 {
    margin-left: 91.66666667%
  }
  .col-lg-offset-10 {
    margin-left: 83.33333333%
  }
  .col-lg-offset-9 {
    margin-left: 75%
  }
  .col-lg-offset-8 {
    margin-left: 66.66666667%
  }
  .col-lg-offset-7 {
    margin-left: 58.33333333%
  }
  .col-lg-offset-6 {
    margin-left: 50%
  }
  .col-lg-offset-5 {
    margin-left: 41.66666667%
  }
  .col-lg-offset-4 {
    margin-left: 33.33333333%
  }
  .col-lg-offset-3 {
    margin-left: 25%
  }
  .col-lg-offset-2 {
    margin-left: 16.66666667%
  }
  .col-lg-offset-1 {
    margin-left: 8.33333333%
  }
  .col-lg-offset-0 {
    margin-left: 0
  }
}

table {
  background-color: transparent
}

caption {
  padding-top: 8px;
  padding-bottom: 8px;
  color: #777;
  text-align: left
}

th {
  text-align: left
}

.table {
  width: 100%;
  max-width: 100%;
  margin-bottom: 20px
}

.table>thead>tr>th,
.table>tbody>tr>th,
.table>tfoot>tr>th,
.table>thead>tr>td,
.table>tbody>tr>td,
.table>tfoot>tr>td {
  padding: 8px;
  line-height: 1.42857143;
  vertical-align: top;
  border-top: 1px solid #ddd
}

.table>thead>tr>th {
  vertical-align: bottom;
  border-bottom: 2px solid #ddd
}

.table>caption+thead>tr:first-child>th,
.table>colgroup+thead>tr:first-child>th,
.table>thead:first-child>tr:first-child>th,
.table>caption+thead>tr:first-child>td,
.table>colgroup+thead>tr:first-child>td,
.table>thead:first-child>tr:first-child>td {
  border-top: 0
}

.table>tbody+tbody {
  border-top: 2px solid #ddd
}

.table .table {
  background-color: #fff
}

.table-condensed>thead>tr>th,
.table-condensed>tbody>tr>th,
.table-condensed>tfoot>tr>th,
.table-condensed>thead>tr>td,
.table-condensed>tbody>tr>td,
.table-condensed>tfoot>tr>td {
  padding: 5px
}

.table-bordered {
  border: 1px solid #ddd
}

.table-bordered>thead>tr>th,
.table-bordered>tbody>tr>th,
.table-bordered>tfoot>tr>th,
.table-bordered>thead>tr>td,
.table-bordered>tbody>tr>td,
.table-bordered>tfoot>tr>td {
  border: 1px solid #ddd
}

.table-bordered>thead>tr>th,
.table-bordered>thead>tr>td {
  border-bottom-width: 2px
}

.table-striped>tbody>tr:nth-of-type(odd) {
  background-color: #f9f9f9
}

.table-hover>tbody>tr:hover {
  background-color: #f5f5f5
}

table col[class*="col-"] {
  position: static;
  display: table-column;
  float: none
}

table td[class*="col-"],
table th[class*="col-"] {
  position: static;
  display: table-cell;
  float: none
}

.table>thead>tr>td.active,
.table>tbody>tr>td.active,
.table>tfoot>tr>td.active,
.table>thead>tr>th.active,
.table>tbody>tr>th.active,
.table>tfoot>tr>th.active,
.table>thead>tr.active>td,
.table>tbody>tr.active>td,
.table>tfoot>tr.active>td,
.table>thead>tr.active>th,
.table>tbody>tr.active>th,
.table>tfoot>tr.active>th {
  background-color: #f5f5f5
}

.table-hover>tbody>tr>td.active:hover,
.table-hover>tbody>tr>th.active:hover,
.table-hover>tbody>tr.active:hover>td,
.table-hover>tbody>tr:hover>.active,
.table-hover>tbody>tr.active:hover>th {
  background-color: #e8e8e8
}

.table>thead>tr>td.success,
.table>tbody>tr>td.success,
.table>tfoot>tr>td.success,
.table>thead>tr>th.success,
.table>tbody>tr>th.success,
.table>tfoot>tr>th.success,
.table>thead>tr.success>td,
.table>tbody>tr.success>td,
.table>tfoot>tr.success>td,
.table>thead>tr.success>th,
.table>tbody>tr.success>th,
.table>tfoot>tr.success>th {
  background-color: #dff0d8
}

.table-hover>tbody>tr>td.success:hover,
.table-hover>tbody>tr>th.success:hover,
.table-hover>tbody>tr.success:hover>td,
.table-hover>tbody>tr:hover>.success,
.table-hover>tbody>tr.success:hover>th {
  background-color: #d0e9c6
}

.table>thead>tr>td.info,
.table>tbody>tr>td.info,
.table>tfoot>tr>td.info,
.table>thead>tr>th.info,
.table>tbody>tr>th.info,
.table>tfoot>tr>th.info,
.table>thead>tr.info>td,
.table>tbody>tr.info>td,
.table>tfoot>tr.info>td,
.table>thead>tr.info>th,
.table>tbody>tr.info>th,
.table>tfoot>tr.info>th {
  background-color: #d9edf7
}

.table-hover>tbody>tr>td.info:hover,
.table-hover>tbody>tr>th.info:hover,
.table-hover>tbody>tr.info:hover>td,
.table-hover>tbody>tr:hover>.info,
.table-hover>tbody>tr.info:hover>th {
  background-color: #c4e3f3
}

.table>thead>tr>td.warning,
.table>tbody>tr>td.warning,
.table>tfoot>tr>td.warning,
.table>thead>tr>th.warning,
.table>tbody>tr>th.warning,
.table>tfoot>tr>th.warning,
.table>thead>tr.warning>td,
.table>tbody>tr.warning>td,
.table>tfoot>tr.warning>td,
.table>thead>tr.warning>th,
.table>tbody>tr.warning>th,
.table>tfoot>tr.warning>th {
  background-color: #fcf8e3
}

.table-hover>tbody>tr>td.warning:hover,
.table-hover>tbody>tr>th.warning:hover,
.table-hover>tbody>tr.warning:hover>td,
.table-hover>tbody>tr:hover>.warning,
.table-hover>tbody>tr.warning:hover>th {
  background-color: #faf2cc
}

.table>thead>tr>td.danger,
.table>tbody>tr>td.danger,
.table>tfoot>tr>td.danger,
.table>thead>tr>th.danger,
.table>tbody>tr>th.danger,
.table>tfoot>tr>th.danger,
.table>thead>tr.danger>td,
.table>tbody>tr.danger>td,
.table>tfoot>tr.danger>td,
.table>thead>tr.danger>th,
.table>tbody>tr.danger>th,
.table>tfoot>tr.danger>th {
  background-color: #f2dede
}

.table-hover>tbody>tr>td.danger:hover,
.table-hover>tbody>tr>th.danger:hover,
.table-hover>tbody>tr.danger:hover>td,
.table-hover>tbody>tr:hover>.danger,
.table-hover>tbody>tr.danger:hover>th {
  background-color: #ebcccc
}

.table-responsive {
  min-height: .01%;
  overflow-x: auto
}

@media screen and (max-width: 767px) {
  .table-responsive {
    width: 100%;
    margin-bottom: 15px;
    overflow-y: hidden;
    -ms-overflow-style: -ms-autohiding-scrollbar;
    border: 1px solid #ddd
  }
  .table-responsive>.table {
    margin-bottom: 0
  }
  .table-responsive>.table>thead>tr>th,
  .table-responsive>.table>tbody>tr>th,
  .table-responsive>.table>tfoot>tr>th,
  .table-responsive>.table>thead>tr>td,
  .table-responsive>.table>tbody>tr>td,
  .table-responsive>.table>tfoot>tr>td {
    white-space: nowrap
  }
  .table-responsive>.table-bordered {
    border: 0
  }
  .table-responsive>.table-bordered>thead>tr>th:first-child,
  .table-responsive>.table-bordered>tbody>tr>th:first-child,
  .table-responsive>.table-bordered>tfoot>tr>th:first-child,
  .table-responsive>.table-bordered>thead>tr>td:first-child,
  .table-responsive>.table-bordered>tbody>tr>td:first-child,
  .table-responsive>.table-bordered>tfoot>tr>td:first-child {
    border-left: 0
  }
  .table-responsive>.table-bordered>thead>tr>th:last-child,
  .table-responsive>.table-bordered>tbody>tr>th:last-child,
  .table-responsive>.table-bordered>tfoot>tr>th:last-child,
  .table-responsive>.table-bordered>thead>tr>td:last-child,
  .table-responsive>.table-bordered>tbody>tr>td:last-child,
  .table-responsive>.table-bordered>tfoot>tr>td:last-child {
    border-right: 0
  }
  .table-responsive>.table-bordered>tbody>tr:last-child>th,
  .table-responsive>.table-bordered>tfoot>tr:last-child>th,
  .table-responsive>.table-bordered>tbody>tr:last-child>td,
  .table-responsive>.table-bordered>tfoot>tr:last-child>td {
    border-bottom: 0
  }
}

fieldset {
  min-width: 0;
  padding: 0;
  margin: 0;
  border: 0
}

legend {
  display: block;
  width: 100%;
  padding: 0;
  margin-bottom: 20px;
  font-size: 21px;
  line-height: inherit;
  color: #333;
  border: 0;
  border-bottom: 1px solid #e5e5e5
}

label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: bold
}

input[type="search"] {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}

input[type="radio"],
input[type="checkbox"] {
  margin: 4px 0 0;
  margin-top: 1px \9;
  line-height: normal
}

input[type="file"] {
  display: block
}

input[type="range"] {
  display: block;
  width: 100%
}

select[multiple],
select[size] {
  height: auto
}

input[type="file"]:focus,
input[type="radio"]:focus,
input[type="checkbox"]:focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px
}

output {
  display: block;
  padding-top: 7px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555
}

.form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.42857143;
  color: #555;
  background-color: #fff;
  background-image: none;
  border: 1px solid #ccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.form-control:focus {
  border-color: #66afe9;
  outline: 0;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6)
}

.form-control::-moz-placeholder {
  color: #999;
  opacity: 1
}

.form-control:-ms-input-placeholder {
  color: #999
}

.form-control::-webkit-input-placeholder {
  color: #999
}

.form-control::-ms-expand {
  background-color: transparent;
  border: 0
}

.form-control[disabled],
.form-control[readonly],
fieldset[disabled] .form-control {
  background-color: #eee;
  opacity: 1
}

.form-control[disabled],
fieldset[disabled] .form-control {
  cursor: not-allowed
}

textarea.form-control {
  height: auto
}

input[type="search"] {
  -webkit-appearance: none
}

@media screen and (-webkit-min-device-pixel-ratio: 0) {
  input[type="date"].form-control,
  input[type="time"].form-control,
  input[type="datetime-local"].form-control,
  input[type="month"].form-control {
    line-height: 34px
  }
  input[type="date"].input-sm,
  input[type="time"].input-sm,
  input[type="datetime-local"].input-sm,
  input[type="month"].input-sm,
  .input-group-sm input[type="date"],
  .input-group-sm input[type="time"],
  .input-group-sm input[type="datetime-local"],
  .input-group-sm input[type="month"] {
    line-height: 30px
  }
  input[type="date"].input-lg,
  input[type="time"].input-lg,
  input[type="datetime-local"].input-lg,
  input[type="month"].input-lg,
  .input-group-lg input[type="date"],
  .input-group-lg input[type="time"],
  .input-group-lg input[type="datetime-local"],
  .input-group-lg input[type="month"] {
    line-height: 46px
  }
}

.form-group {
  margin-bottom: 15px
}

.radio,
.checkbox {
  position: relative;
  display: block;
  margin-top: 10px;
  margin-bottom: 10px
}

.radio label,
.checkbox label {
  min-height: 20px;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  cursor: pointer
}

.radio input[type="radio"],
.radio-inline input[type="radio"],
.checkbox input[type="checkbox"],
.checkbox-inline input[type="checkbox"] {
  position: absolute;
  margin-top: 4px \9;
  margin-left: -20px
}

.radio+.radio,
.checkbox+.checkbox {
  margin-top: -5px
}

.radio-inline,
.checkbox-inline {
  position: relative;
  display: inline-block;
  padding-left: 20px;
  margin-bottom: 0;
  font-weight: normal;
  vertical-align: middle;
  cursor: pointer
}

.radio-inline+.radio-inline,
.checkbox-inline+.checkbox-inline {
  margin-top: 0;
  margin-left: 10px
}

input[type="radio"][disabled],
input[type="checkbox"][disabled],
input[type="radio"].disabled,
input[type="checkbox"].disabled,
fieldset[disabled] input[type="radio"],
fieldset[disabled] input[type="checkbox"] {
  cursor: not-allowed
}

.radio-inline.disabled,
.checkbox-inline.disabled,
fieldset[disabled] .radio-inline,
fieldset[disabled] .checkbox-inline {
  cursor: not-allowed
}

.radio.disabled label,
.checkbox.disabled label,
fieldset[disabled] .radio label,
fieldset[disabled] .checkbox label {
  cursor: not-allowed
}

.form-control-static {
  min-height: 34px;
  padding-top: 7px;
  padding-bottom: 7px;
  margin-bottom: 0
}

.form-control-static.input-lg,
.form-control-static.input-sm {
  padding-right: 0;
  padding-left: 0
}

.input-sm {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px
}

select.input-sm {
  height: 30px;
  line-height: 30px
}

textarea.input-sm,
select[multiple].input-sm {
  height: auto
}

.form-group-sm .form-control {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px
}

.form-group-sm select.form-control {
  height: 30px;
  line-height: 30px
}

.form-group-sm textarea.form-control,
.form-group-sm select[multiple].form-control {
  height: auto
}

.form-group-sm .form-control-static {
  height: 30px;
  min-height: 32px;
  padding: 6px 10px;
  font-size: 12px;
  line-height: 1.5
}

.input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px
}

select.input-lg {
  height: 46px;
  line-height: 46px
}

textarea.input-lg,
select[multiple].input-lg {
  height: auto
}

.form-group-lg .form-control {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px
}

.form-group-lg select.form-control {
  height: 46px;
  line-height: 46px
}

.form-group-lg textarea.form-control,
.form-group-lg select[multiple].form-control {
  height: auto
}

.form-group-lg .form-control-static {
  height: 46px;
  min-height: 38px;
  padding: 11px 16px;
  font-size: 18px;
  line-height: 1.3333333
}

.has-feedback {
  position: relative
}

.has-feedback .form-control {
  padding-right: 42.5px
}

.form-control-feedback {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  pointer-events: none
}

.input-lg+.form-control-feedback,
.input-group-lg+.form-control-feedback,
.form-group-lg .form-control+.form-control-feedback {
  width: 46px;
  height: 46px;
  line-height: 46px
}

.input-sm+.form-control-feedback,
.input-group-sm+.form-control-feedback,
.form-group-sm .form-control+.form-control-feedback {
  width: 30px;
  height: 30px;
  line-height: 30px
}

.has-success .help-block,
.has-success .control-label,
.has-success .radio,
.has-success .checkbox,
.has-success .radio-inline,
.has-success .checkbox-inline,
.has-success.radio label,
.has-success.checkbox label,
.has-success.radio-inline label,
.has-success.checkbox-inline label {
  color: #3c763d
}

.has-success .form-control {
  border-color: #3c763d;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)
}

.has-success .form-control:focus {
  border-color: #2b542c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #67b168
}

.has-success .input-group-addon {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #3c763d
}

.has-success .form-control-feedback {
  color: #3c763d
}

.has-warning .help-block,
.has-warning .control-label,
.has-warning .radio,
.has-warning .checkbox,
.has-warning .radio-inline,
.has-warning .checkbox-inline,
.has-warning.radio label,
.has-warning.checkbox label,
.has-warning.radio-inline label,
.has-warning.checkbox-inline label {
  color: #8a6d3b
}

.has-warning .form-control {
  border-color: #8a6d3b;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)
}

.has-warning .form-control:focus {
  border-color: #66512c;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #c0a16b
}

.has-warning .input-group-addon {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #8a6d3b
}

.has-warning .form-control-feedback {
  color: #8a6d3b
}

.has-error .help-block,
.has-error .control-label,
.has-error .radio,
.has-error .checkbox,
.has-error .radio-inline,
.has-error .checkbox-inline,
.has-error.radio label,
.has-error.checkbox label,
.has-error.radio-inline label,
.has-error.checkbox-inline label {
  color: #a94442
}

.has-error .form-control {
  border-color: #a94442;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075)
}

.has-error .form-control:focus {
  border-color: #843534;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 6px #ce8483
}

.has-error .input-group-addon {
  color: #a94442;
  background-color: #f2dede;
  border-color: #a94442
}

.has-error .form-control-feedback {
  color: #a94442
}

.has-feedback label~.form-control-feedback {
  top: 25px
}

.has-feedback label.sr-only~.form-control-feedback {
  top: 0
}

.help-block {
  display: block;
  margin-top: 5px;
  margin-bottom: 10px;
  color: #737373
}

@media (min-width: 768px) {
  .form-inline .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle
  }
  .form-inline .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle
  }
  .form-inline .form-control-static {
    display: inline-block
  }
  .form-inline .input-group {
    display: inline-table;
    vertical-align: middle
  }
  .form-inline .input-group .input-group-addon,
  .form-inline .input-group .input-group-btn,
  .form-inline .input-group .form-control {
    width: auto
  }
  .form-inline .input-group>.form-control {
    width: 100%
  }
  .form-inline .control-label {
    margin-bottom: 0;
    vertical-align: middle
  }
  .form-inline .radio,
  .form-inline .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle
  }
  .form-inline .radio label,
  .form-inline .checkbox label {
    padding-left: 0
  }
  .form-inline .radio input[type="radio"],
  .form-inline .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0
  }
  .form-inline .has-feedback .form-control-feedback {
    top: 0
  }
}

.form-horizontal .radio,
.form-horizontal .checkbox,
.form-horizontal .radio-inline,
.form-horizontal .checkbox-inline {
  padding-top: 7px;
  margin-top: 0;
  margin-bottom: 0
}

.form-horizontal .radio,
.form-horizontal .checkbox {
  min-height: 27px
}

.form-horizontal .form-group {
  margin-right: -15px;
  margin-left: -15px
}

@media (min-width: 768px) {
  .form-horizontal .control-label {
    padding-top: 7px;
    margin-bottom: 0;
    text-align: right
  }
}

.form-horizontal .has-feedback .form-control-feedback {
  right: 15px
}

@media (min-width: 768px) {
  .form-horizontal .form-group-lg .control-label {
    padding-top: 11px;
    font-size: 18px
  }
}

@media (min-width: 768px) {
  .form-horizontal .form-group-sm .control-label {
    padding-top: 6px;
    font-size: 12px
  }
}

.btn {
  display: inline-block;
  padding: 6px 12px;
  margin-bottom: 0;
  font-size: 14px;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  -ms-touch-action: manipulation;
  touch-action: manipulation;
  cursor: pointer;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px
}

.btn:focus,
.btn:active:focus,
.btn.active:focus,
.btn.focus,
.btn:active.focus,
.btn.active.focus {
  outline: thin dotted;
  outline: 5px auto -webkit-focus-ring-color;
  outline-offset: -2px
}

.btn:hover,
.btn:focus,
.btn.focus {
  color: #333;
  text-decoration: none
}

.btn:active,
.btn.active {
  background-image: none;
  outline: 0;
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
}

.btn.disabled,
.btn[disabled],
fieldset[disabled] .btn {
  cursor: not-allowed;
  filter: alpha(opacity=65);
  -webkit-box-shadow: none;
  box-shadow: none;
  opacity: .65
}

a.btn.disabled,
fieldset[disabled] a.btn {
  pointer-events: none
}

.btn-default {
  color: #333;
  background-color: #fff;
  border-color: #ccc
}

.btn-default:focus,
.btn-default.focus {
  color: #333;
  background-color: #e6e6e6;
  border-color: #8c8c8c
}

.btn-default:hover {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad
}

.btn-default:active,
.btn-default.active,
.open>.dropdown-toggle.btn-default {
  color: #333;
  background-color: #e6e6e6;
  border-color: #adadad
}

.btn-default:active:hover,
.btn-default.active:hover,
.open>.dropdown-toggle.btn-default:hover,
.btn-default:active:focus,
.btn-default.active:focus,
.open>.dropdown-toggle.btn-default:focus,
.btn-default:active.focus,
.btn-default.active.focus,
.open>.dropdown-toggle.btn-default.focus {
  color: #333;
  background-color: #d4d4d4;
  border-color: #8c8c8c
}

.btn-default:active,
.btn-default.active,
.open>.dropdown-toggle.btn-default {
  background-image: none
}

.btn-default.disabled:hover,
.btn-default[disabled]:hover,
fieldset[disabled] .btn-default:hover,
.btn-default.disabled:focus,
.btn-default[disabled]:focus,
fieldset[disabled] .btn-default:focus,
.btn-default.disabled.focus,
.btn-default[disabled].focus,
fieldset[disabled] .btn-default.focus {
  background-color: #fff;
  border-color: #ccc
}

.btn-default .badge {
  color: #fff;
  background-color: #333
}

.btn-primary {
  color: #fff;
  background-color: #337ab7;
  border-color: #2e6da4
}

.btn-primary:focus,
.btn-primary.focus {
  color: #fff;
  background-color: #286090;
  border-color: #122b40
}

.btn-primary:hover {
  color: #fff;
  background-color: #286090;
  border-color: #204d74
}

.btn-primary:active,
.btn-primary.active,
.open>.dropdown-toggle.btn-primary {
  color: #fff;
  background-color: #286090;
  border-color: #204d74
}

.btn-primary:active:hover,
.btn-primary.active:hover,
.open>.dropdown-toggle.btn-primary:hover,
.btn-primary:active:focus,
.btn-primary.active:focus,
.open>.dropdown-toggle.btn-primary:focus,
.btn-primary:active.focus,
.btn-primary.active.focus,
.open>.dropdown-toggle.btn-primary.focus {
  color: #fff;
  background-color: #204d74;
  border-color: #122b40
}

.btn-primary:active,
.btn-primary.active,
.open>.dropdown-toggle.btn-primary {
  background-image: none
}

.btn-primary.disabled:hover,
.btn-primary[disabled]:hover,
fieldset[disabled] .btn-primary:hover,
.btn-primary.disabled:focus,
.btn-primary[disabled]:focus,
fieldset[disabled] .btn-primary:focus,
.btn-primary.disabled.focus,
.btn-primary[disabled].focus,
fieldset[disabled] .btn-primary.focus {
  background-color: #337ab7;
  border-color: #2e6da4
}

.btn-primary .badge {
  color: #337ab7;
  background-color: #fff
}

.btn-success {
  color: #fff;
  background-color: #5cb85c;
  border-color: #4cae4c
}

.btn-success:focus,
.btn-success.focus {
  color: #fff;
  background-color: #449d44;
  border-color: #255625
}

.btn-success:hover {
  color: #fff;
  background-color: #449d44;
  border-color: #398439
}

.btn-success:active,
.btn-success.active,
.open>.dropdown-toggle.btn-success {
  color: #fff;
  background-color: #449d44;
  border-color: #398439
}

.btn-success:active:hover,
.btn-success.active:hover,
.open>.dropdown-toggle.btn-success:hover,
.btn-success:active:focus,
.btn-success.active:focus,
.open>.dropdown-toggle.btn-success:focus,
.btn-success:active.focus,
.btn-success.active.focus,
.open>.dropdown-toggle.btn-success.focus {
  color: #fff;
  background-color: #398439;
  border-color: #255625
}

.btn-success:active,
.btn-success.active,
.open>.dropdown-toggle.btn-success {
  background-image: none
}

.btn-success.disabled:hover,
.btn-success[disabled]:hover,
fieldset[disabled] .btn-success:hover,
.btn-success.disabled:focus,
.btn-success[disabled]:focus,
fieldset[disabled] .btn-success:focus,
.btn-success.disabled.focus,
.btn-success[disabled].focus,
fieldset[disabled] .btn-success.focus {
  background-color: #5cb85c;
  border-color: #4cae4c
}

.btn-success .badge {
  color: #5cb85c;
  background-color: #fff
}

.btn-info {
  color: #fff;
  background-color: #5bc0de;
  border-color: #46b8da
}

.btn-info:focus,
.btn-info.focus {
  color: #fff;
  background-color: #31b0d5;
  border-color: #1b6d85
}

.btn-info:hover {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc
}

.btn-info:active,
.btn-info.active,
.open>.dropdown-toggle.btn-info {
  color: #fff;
  background-color: #31b0d5;
  border-color: #269abc
}

.btn-info:active:hover,
.btn-info.active:hover,
.open>.dropdown-toggle.btn-info:hover,
.btn-info:active:focus,
.btn-info.active:focus,
.open>.dropdown-toggle.btn-info:focus,
.btn-info:active.focus,
.btn-info.active.focus,
.open>.dropdown-toggle.btn-info.focus {
  color: #fff;
  background-color: #269abc;
  border-color: #1b6d85
}

.btn-info:active,
.btn-info.active,
.open>.dropdown-toggle.btn-info {
  background-image: none
}

.btn-info.disabled:hover,
.btn-info[disabled]:hover,
fieldset[disabled] .btn-info:hover,
.btn-info.disabled:focus,
.btn-info[disabled]:focus,
fieldset[disabled] .btn-info:focus,
.btn-info.disabled.focus,
.btn-info[disabled].focus,
fieldset[disabled] .btn-info.focus {
  background-color: #5bc0de;
  border-color: #46b8da
}

.btn-info .badge {
  color: #5bc0de;
  background-color: #fff
}

.btn-warning {
  color: #fff;
  background-color: #f0ad4e;
  border-color: #eea236
}

.btn-warning:focus,
.btn-warning.focus {
  color: #fff;
  background-color: #ec971f;
  border-color: #985f0d
}

.btn-warning:hover {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512
}

.btn-warning:active,
.btn-warning.active,
.open>.dropdown-toggle.btn-warning {
  color: #fff;
  background-color: #ec971f;
  border-color: #d58512
}

.btn-warning:active:hover,
.btn-warning.active:hover,
.open>.dropdown-toggle.btn-warning:hover,
.btn-warning:active:focus,
.btn-warning.active:focus,
.open>.dropdown-toggle.btn-warning:focus,
.btn-warning:active.focus,
.btn-warning.active.focus,
.open>.dropdown-toggle.btn-warning.focus {
  color: #fff;
  background-color: #d58512;
  border-color: #985f0d
}

.btn-warning:active,
.btn-warning.active,
.open>.dropdown-toggle.btn-warning {
  background-image: none
}

.btn-warning.disabled:hover,
.btn-warning[disabled]:hover,
fieldset[disabled] .btn-warning:hover,
.btn-warning.disabled:focus,
.btn-warning[disabled]:focus,
fieldset[disabled] .btn-warning:focus,
.btn-warning.disabled.focus,
.btn-warning[disabled].focus,
fieldset[disabled] .btn-warning.focus {
  background-color: #f0ad4e;
  border-color: #eea236
}

.btn-warning .badge {
  color: #f0ad4e;
  background-color: #fff
}

.btn-danger {
  color: #fff;
  background-color: #d9534f;
  border-color: #d43f3a
}

.btn-danger:focus,
.btn-danger.focus {
  color: #fff;
  background-color: #c9302c;
  border-color: #761c19
}

.btn-danger:hover {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925
}

.btn-danger:active,
.btn-danger.active,
.open>.dropdown-toggle.btn-danger {
  color: #fff;
  background-color: #c9302c;
  border-color: #ac2925
}

.btn-danger:active:hover,
.btn-danger.active:hover,
.open>.dropdown-toggle.btn-danger:hover,
.btn-danger:active:focus,
.btn-danger.active:focus,
.open>.dropdown-toggle.btn-danger:focus,
.btn-danger:active.focus,
.btn-danger.active.focus,
.open>.dropdown-toggle.btn-danger.focus {
  color: #fff;
  background-color: #ac2925;
  border-color: #761c19
}

.btn-danger:active,
.btn-danger.active,
.open>.dropdown-toggle.btn-danger {
  background-image: none
}

.btn-danger.disabled:hover,
.btn-danger[disabled]:hover,
fieldset[disabled] .btn-danger:hover,
.btn-danger.disabled:focus,
.btn-danger[disabled]:focus,
fieldset[disabled] .btn-danger:focus,
.btn-danger.disabled.focus,
.btn-danger[disabled].focus,
fieldset[disabled] .btn-danger.focus {
  background-color: #d9534f;
  border-color: #d43f3a
}

.btn-danger .badge {
  color: #d9534f;
  background-color: #fff
}

.btn-link {
  font-weight: normal;
  color: #337ab7;
  border-radius: 0
}

.btn-link,
.btn-link:active,
.btn-link.active,
.btn-link[disabled],
fieldset[disabled] .btn-link {
  background-color: transparent;
  -webkit-box-shadow: none;
  box-shadow: none
}

.btn-link,
.btn-link:hover,
.btn-link:focus,
.btn-link:active {
  border-color: transparent
}

.btn-link:hover,
.btn-link:focus {
  color: #23527c;
  text-decoration: underline;
  background-color: transparent
}

.btn-link[disabled]:hover,
fieldset[disabled] .btn-link:hover,
.btn-link[disabled]:focus,
fieldset[disabled] .btn-link:focus {
  color: #777;
  text-decoration: none
}

.btn-lg,
.btn-group-lg>.btn {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px
}

.btn-sm,
.btn-group-sm>.btn {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px
}

.btn-xs,
.btn-group-xs>.btn {
  padding: 1px 5px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px
}

.btn-block {
  display: block;
  width: 100%
}

.btn-block+.btn-block {
  margin-top: 5px
}

input[type="submit"].btn-block,
input[type="reset"].btn-block,
input[type="button"].btn-block {
  width: 100%
}

.fade {
  opacity: 0;
  -webkit-transition: opacity .15s linear;
  -o-transition: opacity .15s linear;
  transition: opacity .15s linear
}

.fade.in {
  opacity: 1
}

.collapse {
  display: none
}

.collapse.in {
  display: block
}

tr.collapse.in {
  display: table-row
}

tbody.collapse.in {
  display: table-row-group
}

.collapsing {
  position: relative;
  height: 0;
  overflow: hidden;
  -webkit-transition-timing-function: ease;
  -o-transition-timing-function: ease;
  transition-timing-function: ease;
  -webkit-transition-duration: .35s;
  -o-transition-duration: .35s;
  transition-duration: .35s;
  -webkit-transition-property: height, visibility;
  -o-transition-property: height, visibility;
  transition-property: height, visibility
}

.caret {
  display: inline-block;
  width: 0;
  height: 0;
  margin-left: 2px;
  vertical-align: middle;
  border-top: 4px dashed;
  border-top: 4px solid \9;
  border-right: 4px solid transparent;
  border-left: 4px solid transparent
}

.dropup,
.dropdown {
  position: relative
}

.dropdown-toggle:focus {
  outline: 0
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1000;
  display: none;
  float: left;
  min-width: 160px;
  padding: 5px 0;
  margin: 2px 0 0;
  font-size: 14px;
  text-align: left;
  list-style: none;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.15);
  border-radius: 4px;
  -webkit-box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175);
  box-shadow: 0 6px 12px rgba(0, 0, 0, 0.175)
}

.dropdown-menu.pull-right {
  right: 0;
  left: auto
}

.dropdown-menu .divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5
}

.dropdown-menu>li>a {
  display: block;
  padding: 3px 20px;
  clear: both;
  font-weight: normal;
  line-height: 1.42857143;
  color: #333;
  white-space: nowrap
}

.dropdown-menu>li>a:hover,
.dropdown-menu>li>a:focus {
  color: #262626;
  text-decoration: none;
  background-color: #f5f5f5
}

.dropdown-menu>.active>a,
.dropdown-menu>.active>a:hover,
.dropdown-menu>.active>a:focus {
  color: #fff;
  text-decoration: none;
  background-color: #337ab7;
  outline: 0
}

.dropdown-menu>.disabled>a,
.dropdown-menu>.disabled>a:hover,
.dropdown-menu>.disabled>a:focus {
  color: #777
}

.dropdown-menu>.disabled>a:hover,
.dropdown-menu>.disabled>a:focus {
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent;
  background-image: none;
  filter: progid: DXImageTransform.Microsoft.gradient(enabled=false)
}

.open>.dropdown-menu {
  display: block
}

.open>a {
  outline: 0
}

.dropdown-menu-right {
  right: 0;
  left: auto
}

.dropdown-menu-left {
  right: auto;
  left: 0
}

.dropdown-header {
  display: block;
  padding: 3px 20px;
  font-size: 12px;
  line-height: 1.42857143;
  color: #777;
  white-space: nowrap
}

.dropdown-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 990
}

.pull-right>.dropdown-menu {
  right: 0;
  left: auto
}

.dropup .caret,
.navbar-fixed-bottom .dropdown .caret {
  content: "";
  border-top: 0;
  border-bottom: 4px dashed;
  border-bottom: 4px solid \9
}

.dropup .dropdown-menu,
.navbar-fixed-bottom .dropdown .dropdown-menu {
  top: auto;
  bottom: 100%;
  margin-bottom: 2px
}

@media (min-width: 768px) {
  .navbar-right .dropdown-menu {
    right: 0;
    left: auto
  }
  .navbar-right .dropdown-menu-left {
    right: auto;
    left: 0
  }
}

.btn-group,
.btn-group-vertical {
  position: relative;
  display: inline-block;
  vertical-align: middle
}

.btn-group>.btn,
.btn-group-vertical>.btn {
  position: relative;
  float: left
}

.btn-group>.btn:hover,
.btn-group-vertical>.btn:hover,
.btn-group>.btn:focus,
.btn-group-vertical>.btn:focus,
.btn-group>.btn:active,
.btn-group-vertical>.btn:active,
.btn-group>.btn.active,
.btn-group-vertical>.btn.active {
  z-index: 2
}

.btn-group .btn+.btn,
.btn-group .btn+.btn-group,
.btn-group .btn-group+.btn,
.btn-group .btn-group+.btn-group {
  margin-left: -1px
}

.btn-toolbar {
  margin-left: -5px
}

.btn-toolbar .btn,
.btn-toolbar .btn-group,
.btn-toolbar .input-group {
  float: left
}

.btn-toolbar>.btn,
.btn-toolbar>.btn-group,
.btn-toolbar>.input-group {
  margin-left: 5px
}

.btn-group>.btn:not(:first-child):not(:last-child):not(.dropdown-toggle) {
  border-radius: 0
}

.btn-group>.btn:first-child {
  margin-left: 0
}

.btn-group>.btn:first-child:not(:last-child):not(.dropdown-toggle) {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0
}

.btn-group>.btn:last-child:not(:first-child),
.btn-group>.dropdown-toggle:not(:first-child) {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0
}

.btn-group>.btn-group {
  float: left
}

.btn-group>.btn-group:not(:first-child):not(:last-child)>.btn {
  border-radius: 0
}

.btn-group>.btn-group:first-child:not(:last-child)>.btn:last-child,
.btn-group>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0
}

.btn-group>.btn-group:last-child:not(:first-child)>.btn:first-child {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0
}

.btn-group .dropdown-toggle:active,
.btn-group.open .dropdown-toggle {
  outline: 0
}

.btn-group>.btn+.dropdown-toggle {
  padding-right: 8px;
  padding-left: 8px
}

.btn-group>.btn-lg+.dropdown-toggle {
  padding-right: 12px;
  padding-left: 12px
}

.btn-group.open .dropdown-toggle {
  -webkit-box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
  box-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125)
}

.btn-group.open .dropdown-toggle.btn-link {
  -webkit-box-shadow: none;
  box-shadow: none
}

.btn .caret {
  margin-left: 0
}

.btn-lg .caret {
  border-width: 5px 5px 0;
  border-bottom-width: 0
}

.dropup .btn-lg .caret {
  border-width: 0 5px 5px
}

.btn-group-vertical>.btn,
.btn-group-vertical>.btn-group,
.btn-group-vertical>.btn-group>.btn {
  display: block;
  float: none;
  width: 100%;
  max-width: 100%
}

.btn-group-vertical>.btn-group>.btn {
  float: none
}

.btn-group-vertical>.btn+.btn,
.btn-group-vertical>.btn+.btn-group,
.btn-group-vertical>.btn-group+.btn,
.btn-group-vertical>.btn-group+.btn-group {
  margin-top: -1px;
  margin-left: 0
}

.btn-group-vertical>.btn:not(:first-child):not(:last-child) {
  border-radius: 0
}

.btn-group-vertical>.btn:first-child:not(:last-child) {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0
}

.btn-group-vertical>.btn:last-child:not(:first-child) {
  border-top-left-radius: 0;
  border-top-right-radius: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px
}

.btn-group-vertical>.btn-group:not(:first-child):not(:last-child)>.btn {
  border-radius: 0
}

.btn-group-vertical>.btn-group:first-child:not(:last-child)>.btn:last-child,
.btn-group-vertical>.btn-group:first-child:not(:last-child)>.dropdown-toggle {
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0
}

.btn-group-vertical>.btn-group:last-child:not(:first-child)>.btn:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0
}

.btn-group-justified {
  display: table;
  width: 100%;
  table-layout: fixed;
  border-collapse: separate
}

.btn-group-justified>.btn,
.btn-group-justified>.btn-group {
  display: table-cell;
  float: none;
  width: 1%
}

.btn-group-justified>.btn-group .btn {
  width: 100%
}

.btn-group-justified>.btn-group .dropdown-menu {
  left: auto
}

[data-toggle="buttons"]>.btn input[type="radio"],
[data-toggle="buttons"]>.btn-group>.btn input[type="radio"],
[data-toggle="buttons"]>.btn input[type="checkbox"],
[data-toggle="buttons"]>.btn-group>.btn input[type="checkbox"] {
  position: absolute;
  clip: rect(0, 0, 0, 0);
  pointer-events: none
}

.input-group {
  position: relative;
  display: table;
  border-collapse: separate
}

.input-group[class*="col-"] {
  float: none;
  padding-right: 0;
  padding-left: 0
}

.input-group .form-control {
  position: relative;
  z-index: 2;
  float: left;
  width: 100%;
  margin-bottom: 0
}

.input-group .form-control:focus {
  z-index: 3
}

.input-group-lg>.form-control,
.input-group-lg>.input-group-addon,
.input-group-lg>.input-group-btn>.btn {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px
}

select.input-group-lg>.form-control,
select.input-group-lg>.input-group-addon,
select.input-group-lg>.input-group-btn>.btn {
  height: 46px;
  line-height: 46px
}

textarea.input-group-lg>.form-control,
textarea.input-group-lg>.input-group-addon,
textarea.input-group-lg>.input-group-btn>.btn,
select[multiple].input-group-lg>.form-control,
select[multiple].input-group-lg>.input-group-addon,
select[multiple].input-group-lg>.input-group-btn>.btn {
  height: auto
}

.input-group-sm>.form-control,
.input-group-sm>.input-group-addon,
.input-group-sm>.input-group-btn>.btn {
  height: 30px;
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5;
  border-radius: 3px
}

select.input-group-sm>.form-control,
select.input-group-sm>.input-group-addon,
select.input-group-sm>.input-group-btn>.btn {
  height: 30px;
  line-height: 30px
}

textarea.input-group-sm>.form-control,
textarea.input-group-sm>.input-group-addon,
textarea.input-group-sm>.input-group-btn>.btn,
select[multiple].input-group-sm>.form-control,
select[multiple].input-group-sm>.input-group-addon,
select[multiple].input-group-sm>.input-group-btn>.btn {
  height: auto
}

.input-group-addon,
.input-group-btn,
.input-group .form-control {
  display: table-cell
}

.input-group-addon:not(:first-child):not(:last-child),
.input-group-btn:not(:first-child):not(:last-child),
.input-group .form-control:not(:first-child):not(:last-child) {
  border-radius: 0
}

.input-group-addon,
.input-group-btn {
  width: 1%;
  white-space: nowrap;
  vertical-align: middle
}

.input-group-addon {
  padding: 6px 12px;
  font-size: 14px;
  font-weight: normal;
  line-height: 1;
  color: #555;
  text-align: center;
  background-color: #eee;
  border: 1px solid #ccc;
  border-radius: 4px
}

.input-group-addon.input-sm {
  padding: 5px 10px;
  font-size: 12px;
  border-radius: 3px
}

.input-group-addon.input-lg {
  padding: 10px 16px;
  font-size: 18px;
  border-radius: 6px
}

.input-group-addon input[type="radio"],
.input-group-addon input[type="checkbox"] {
  margin-top: 0
}

.input-group .form-control:first-child,
.input-group-addon:first-child,
.input-group-btn:first-child>.btn,
.input-group-btn:first-child>.btn-group>.btn,
.input-group-btn:first-child>.dropdown-toggle,
.input-group-btn:last-child>.btn:not(:last-child):not(.dropdown-toggle),
.input-group-btn:last-child>.btn-group:not(:last-child)>.btn {
  border-top-right-radius: 0;
  border-bottom-right-radius: 0
}

.input-group-addon:first-child {
  border-right: 0
}

.input-group .form-control:last-child,
.input-group-addon:last-child,
.input-group-btn:last-child>.btn,
.input-group-btn:last-child>.btn-group>.btn,
.input-group-btn:last-child>.dropdown-toggle,
.input-group-btn:first-child>.btn:not(:first-child),
.input-group-btn:first-child>.btn-group:not(:first-child)>.btn {
  border-top-left-radius: 0;
  border-bottom-left-radius: 0
}

.input-group-addon:last-child {
  border-left: 0
}

.input-group-btn {
  position: relative;
  font-size: 0;
  white-space: nowrap
}

.input-group-btn>.btn {
  position: relative
}

.input-group-btn>.btn+.btn {
  margin-left: -1px
}

.input-group-btn>.btn:hover,
.input-group-btn>.btn:focus,
.input-group-btn>.btn:active {
  z-index: 2
}

.input-group-btn:first-child>.btn,
.input-group-btn:first-child>.btn-group {
  margin-right: -1px
}

.input-group-btn:last-child>.btn,
.input-group-btn:last-child>.btn-group {
  z-index: 2;
  margin-left: -1px
}

.nav {
  padding-left: 0;
  margin-bottom: 0;
  list-style: none
}

.nav>li {
  position: relative;
  display: block
}

.nav>li>a {
  position: relative;
  display: block;
  padding: 10px 15px
}

.nav>li>a:hover,
.nav>li>a:focus {
  text-decoration: none;
  background-color: #eee
}

.nav>li.disabled>a {
  color: #777
}

.nav>li.disabled>a:hover,
.nav>li.disabled>a:focus {
  color: #777;
  text-decoration: none;
  cursor: not-allowed;
  background-color: transparent
}

.nav .open>a,
.nav .open>a:hover,
.nav .open>a:focus {
  background-color: #eee;
  border-color: #337ab7
}

.nav .nav-divider {
  height: 1px;
  margin: 9px 0;
  overflow: hidden;
  background-color: #e5e5e5
}

.nav>li>a>img {
  max-width: none
}

.nav-tabs {
  border-bottom: 1px solid #ddd
}

.nav-tabs>li {
  float: left;
  margin-bottom: -1px
}

.nav-tabs>li>a {
  margin-right: 2px;
  line-height: 1.42857143;
  border: 1px solid transparent;
  border-radius: 4px 4px 0 0
}

.nav-tabs>li>a:hover {
  border-color: #eee #eee #ddd
}

.nav-tabs>li.active>a,
.nav-tabs>li.active>a:hover,
.nav-tabs>li.active>a:focus {
  color: #555;
  cursor: default;
  background-color: #fff;
  border: 1px solid #ddd;
  border-bottom-color: transparent
}

.nav-tabs.nav-justified {
  width: 100%;
  border-bottom: 0
}

.nav-tabs.nav-justified>li {
  float: none
}

.nav-tabs.nav-justified>li>a {
  margin-bottom: 5px;
  text-align: center
}

.nav-tabs.nav-justified>.dropdown .dropdown-menu {
  top: auto;
  left: auto
}

@media (min-width: 768px) {
  .nav-tabs.nav-justified>li {
    display: table-cell;
    width: 1%
  }
  .nav-tabs.nav-justified>li>a {
    margin-bottom: 0
  }
}

.nav-tabs.nav-justified>li>a {
  margin-right: 0;
  border-radius: 4px
}

.nav-tabs.nav-justified>.active>a,
.nav-tabs.nav-justified>.active>a:hover,
.nav-tabs.nav-justified>.active>a:focus {
  border: 1px solid #ddd
}

@media (min-width: 768px) {
  .nav-tabs.nav-justified>li>a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0
  }
  .nav-tabs.nav-justified>.active>a,
  .nav-tabs.nav-justified>.active>a:hover,
  .nav-tabs.nav-justified>.active>a:focus {
    border-bottom-color: #fff
  }
}

.nav-pills>li {
  float: left
}

.nav-pills>li>a {
  border-radius: 4px
}

.nav-pills>li+li {
  margin-left: 2px
}

.nav-pills>li.active>a,
.nav-pills>li.active>a:hover,
.nav-pills>li.active>a:focus {
  color: #fff;
  background-color: #337ab7
}

.nav-stacked>li {
  float: none
}

.nav-stacked>li+li {
  margin-top: 2px;
  margin-left: 0
}

.nav-justified {
  width: 100%
}

.nav-justified>li {
  float: none
}

.nav-justified>li>a {
  margin-bottom: 5px;
  text-align: center
}

.nav-justified>.dropdown .dropdown-menu {
  top: auto;
  left: auto
}

@media (min-width: 768px) {
  .nav-justified>li {
    display: table-cell;
    width: 1%
  }
  .nav-justified>li>a {
    margin-bottom: 0
  }
}

.nav-tabs-justified {
  border-bottom: 0
}

.nav-tabs-justified>li>a {
  margin-right: 0;
  border-radius: 4px
}

.nav-tabs-justified>.active>a,
.nav-tabs-justified>.active>a:hover,
.nav-tabs-justified>.active>a:focus {
  border: 1px solid #ddd
}

@media (min-width: 768px) {
  .nav-tabs-justified>li>a {
    border-bottom: 1px solid #ddd;
    border-radius: 4px 4px 0 0
  }
  .nav-tabs-justified>.active>a,
  .nav-tabs-justified>.active>a:hover,
  .nav-tabs-justified>.active>a:focus {
    border-bottom-color: #fff
  }
}

.tab-content>.tab-pane {
  display: none
}

.tab-content>.active {
  display: block
}

.nav-tabs .dropdown-menu {
  margin-top: -1px;
  border-top-left-radius: 0;
  border-top-right-radius: 0
}

.navbar {
  position: relative;
  min-height: 50px;
  margin-bottom: 20px;
  border: 1px solid transparent
}

@media (min-width: 768px) {
  .navbar {
    border-radius: 4px
  }
}

@media (min-width: 768px) {
  .navbar-header {
    float: left
  }
}

.navbar-collapse {
  padding-right: 15px;
  padding-left: 15px;
  overflow-x: visible;
  -webkit-overflow-scrolling: touch;
  border-top: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1)
}

.navbar-collapse.in {
  overflow-y: auto
}

@media (min-width: 768px) {
  .navbar-collapse {
    width: auto;
    border-top: 0;
    -webkit-box-shadow: none;
    box-shadow: none
  }
  .navbar-collapse.collapse {
    display: block !important;
    height: auto !important;
    padding-bottom: 0;
    overflow: visible !important
  }
  .navbar-collapse.in {
    overflow-y: visible
  }
  .navbar-fixed-top .navbar-collapse,
  .navbar-static-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    padding-right: 0;
    padding-left: 0
  }
}

.navbar-fixed-top .navbar-collapse,
.navbar-fixed-bottom .navbar-collapse {
  max-height: 340px
}

@media (max-device-width: 480px) and (orientation: landscape) {
  .navbar-fixed-top .navbar-collapse,
  .navbar-fixed-bottom .navbar-collapse {
    max-height: 200px
  }
}

.container>.navbar-header,
.container-fluid>.navbar-header,
.container>.navbar-collapse,
.container-fluid>.navbar-collapse {
  margin-right: -15px;
  margin-left: -15px
}

@media (min-width: 768px) {
  .container>.navbar-header,
  .container-fluid>.navbar-header,
  .container>.navbar-collapse,
  .container-fluid>.navbar-collapse {
    margin-right: 0;
    margin-left: 0
  }
}

.navbar-static-top {
  z-index: 1000;
  border-width: 0 0 1px
}

@media (min-width: 768px) {
  .navbar-static-top {
    border-radius: 0
  }
}

.navbar-fixed-top,
.navbar-fixed-bottom {
  position: fixed;
  right: 0;
  left: 0;
  z-index: 1030
}

@media (min-width: 768px) {
  .navbar-fixed-top,
  .navbar-fixed-bottom {
    border-radius: 0
  }
}

.navbar-fixed-top {
  top: 0;
  border-width: 0 0 1px
}

.navbar-fixed-bottom {
  bottom: 0;
  margin-bottom: 0;
  border-width: 1px 0 0
}

.navbar-brand {
  float: left;
  height: 50px;
  padding: 15px 15px;
  font-size: 18px;
  line-height: 20px
}

.navbar-brand:hover,
.navbar-brand:focus {
  text-decoration: none
}

.navbar-brand>img {
  display: block
}

@media (min-width: 768px) {
  .navbar>.container .navbar-brand,
  .navbar>.container-fluid .navbar-brand {
    margin-left: -15px
  }
}

.navbar-toggle {
  position: relative;
  float: right;
  padding: 9px 10px;
  margin-top: 8px;
  margin-right: 15px;
  margin-bottom: 8px;
  background-color: transparent;
  background-image: none;
  border: 1px solid transparent;
  border-radius: 4px
}

.navbar-toggle:focus {
  outline: 0
}

.navbar-toggle .icon-bar {
  display: block;
  width: 22px;
  height: 2px;
  border-radius: 1px
}

.navbar-toggle .icon-bar+.icon-bar {
  margin-top: 4px
}

@media (min-width: 768px) {
  .navbar-toggle {
    display: none
  }
}

.navbar-nav {
  margin: 7.5px -15px
}

.navbar-nav>li>a {
  padding-top: 10px;
  padding-bottom: 10px;
  line-height: 20px
}

@media (max-width: 767px) {
  .navbar-nav .open .dropdown-menu {
    position: static;
    float: none;
    width: auto;
    margin-top: 0;
    background-color: transparent;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none
  }
  .navbar-nav .open .dropdown-menu>li>a,
  .navbar-nav .open .dropdown-menu .dropdown-header {
    padding: 5px 15px 5px 25px
  }
  .navbar-nav .open .dropdown-menu>li>a {
    line-height: 20px
  }
  .navbar-nav .open .dropdown-menu>li>a:hover,
  .navbar-nav .open .dropdown-menu>li>a:focus {
    background-image: none
  }
}

@media (min-width: 768px) {
  .navbar-nav {
    float: left;
    margin: 0
  }
  .navbar-nav>li {
    float: left
  }
  .navbar-nav>li>a {
    padding-top: 15px;
    padding-bottom: 15px
  }
}

.navbar-form {
  padding: 10px 15px;
  margin-top: 8px;
  margin-right: -15px;
  margin-bottom: 8px;
  margin-left: -15px;
  border-top: 1px solid transparent;
  border-bottom: 1px solid transparent;
  -webkit-box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1);
  box-shadow: inset 0 1px 0 rgba(255, 255, 255, 0.1), 0 1px 0 rgba(255, 255, 255, 0.1)
}

@media (min-width: 768px) {
  .navbar-form .form-group {
    display: inline-block;
    margin-bottom: 0;
    vertical-align: middle
  }
  .navbar-form .form-control {
    display: inline-block;
    width: auto;
    vertical-align: middle
  }
  .navbar-form .form-control-static {
    display: inline-block
  }
  .navbar-form .input-group {
    display: inline-table;
    vertical-align: middle
  }
  .navbar-form .input-group .input-group-addon,
  .navbar-form .input-group .input-group-btn,
  .navbar-form .input-group .form-control {
    width: auto
  }
  .navbar-form .input-group>.form-control {
    width: 100%
  }
  .navbar-form .control-label {
    margin-bottom: 0;
    vertical-align: middle
  }
  .navbar-form .radio,
  .navbar-form .checkbox {
    display: inline-block;
    margin-top: 0;
    margin-bottom: 0;
    vertical-align: middle
  }
  .navbar-form .radio label,
  .navbar-form .checkbox label {
    padding-left: 0
  }
  .navbar-form .radio input[type="radio"],
  .navbar-form .checkbox input[type="checkbox"] {
    position: relative;
    margin-left: 0
  }
  .navbar-form .has-feedback .form-control-feedback {
    top: 0
  }
}

@media (max-width: 767px) {
  .navbar-form .form-group {
    margin-bottom: 5px
  }
  .navbar-form .form-group:last-child {
    margin-bottom: 0
  }
}

@media (min-width: 768px) {
  .navbar-form {
    width: auto;
    padding-top: 0;
    padding-bottom: 0;
    margin-right: 0;
    margin-left: 0;
    border: 0;
    -webkit-box-shadow: none;
    box-shadow: none
  }
}

.navbar-nav>li>.dropdown-menu {
  margin-top: 0;
  border-top-left-radius: 0;
  border-top-right-radius: 0
}

.navbar-fixed-bottom .navbar-nav>li>.dropdown-menu {
  margin-bottom: 0;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0
}

.navbar-btn {
  margin-top: 8px;
  margin-bottom: 8px
}

.navbar-btn.btn-sm {
  margin-top: 10px;
  margin-bottom: 10px
}

.navbar-btn.btn-xs {
  margin-top: 14px;
  margin-bottom: 14px
}

.navbar-text {
  margin-top: 15px;
  margin-bottom: 15px
}

@media (min-width: 768px) {
  .navbar-text {
    float: left;
    margin-right: 15px;
    margin-left: 15px
  }
}

@media (min-width: 768px) {
  .navbar-left {
    float: left !important
  }
  .navbar-right {
    float: right !important;
    margin-right: -15px
  }
  .navbar-right~.navbar-right {
    margin-right: 0
  }
}

.navbar-default {
  background-color: #f8f8f8;
  border-color: #e7e7e7
}

.navbar-default .navbar-brand {
  color: #777
}

.navbar-default .navbar-brand:hover,
.navbar-default .navbar-brand:focus {
  color: #5e5e5e;
  background-color: transparent
}

.navbar-default .navbar-text {
  color: #777
}

.navbar-default .navbar-nav>li>a {
  color: #777
}

.navbar-default .navbar-nav>li>a:hover,
.navbar-default .navbar-nav>li>a:focus {
  color: #333;
  background-color: transparent
}

.navbar-default .navbar-nav>.active>a,
.navbar-default .navbar-nav>.active>a:hover,
.navbar-default .navbar-nav>.active>a:focus {
  color: #555;
  background-color: #e7e7e7
}

.navbar-default .navbar-nav>.disabled>a,
.navbar-default .navbar-nav>.disabled>a:hover,
.navbar-default .navbar-nav>.disabled>a:focus {
  color: #ccc;
  background-color: transparent
}

.navbar-default .navbar-toggle {
  border-color: #ddd
}

.navbar-default .navbar-toggle:hover,
.navbar-default .navbar-toggle:focus {
  background-color: #ddd
}

.navbar-default .navbar-toggle .icon-bar {
  background-color: #888
}

.navbar-default .navbar-collapse,
.navbar-default .navbar-form {
  border-color: #e7e7e7
}

.navbar-default .navbar-nav>.open>a,
.navbar-default .navbar-nav>.open>a:hover,
.navbar-default .navbar-nav>.open>a:focus {
  color: #555;
  background-color: #e7e7e7
}

@media (max-width: 767px) {
  .navbar-default .navbar-nav .open .dropdown-menu>li>a {
    color: #777
  }
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #333;
    background-color: transparent
  }
  .navbar-default .navbar-nav .open .dropdown-menu>.active>a,
  .navbar-default .navbar-nav .open .dropdown-menu>.active>a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu>.active>a:focus {
    color: #555;
    background-color: #e7e7e7
  }
  .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a,
  .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:hover,
  .navbar-default .navbar-nav .open .dropdown-menu>.disabled>a:focus {
    color: #ccc;
    background-color: transparent
  }
}

.navbar-default .navbar-link {
  color: #777
}

.navbar-default .navbar-link:hover {
  color: #333
}

.navbar-default .btn-link {
  color: #777
}

.navbar-default .btn-link:hover,
.navbar-default .btn-link:focus {
  color: #333
}

.navbar-default .btn-link[disabled]:hover,
fieldset[disabled] .navbar-default .btn-link:hover,
.navbar-default .btn-link[disabled]:focus,
fieldset[disabled] .navbar-default .btn-link:focus {
  color: #ccc
}

.navbar-inverse {
  background-color: #222;
  border-color: #080808
}

.navbar-inverse .navbar-brand {
  color: #9d9d9d
}

.navbar-inverse .navbar-brand:hover,
.navbar-inverse .navbar-brand:focus {
  color: #fff;
  background-color: transparent
}

.navbar-inverse .navbar-text {
  color: #9d9d9d
}

.navbar-inverse .navbar-nav>li>a {
  color: #9d9d9d
}

.navbar-inverse .navbar-nav>li>a:hover,
.navbar-inverse .navbar-nav>li>a:focus {
  color: #fff;
  background-color: transparent
}

.navbar-inverse .navbar-nav>.active>a,
.navbar-inverse .navbar-nav>.active>a:hover,
.navbar-inverse .navbar-nav>.active>a:focus {
  color: #fff;
  background-color: #080808
}

.navbar-inverse .navbar-nav>.disabled>a,
.navbar-inverse .navbar-nav>.disabled>a:hover,
.navbar-inverse .navbar-nav>.disabled>a:focus {
  color: #444;
  background-color: transparent
}

.navbar-inverse .navbar-toggle {
  border-color: #333
}

.navbar-inverse .navbar-toggle:hover,
.navbar-inverse .navbar-toggle:focus {
  background-color: #333
}

.navbar-inverse .navbar-toggle .icon-bar {
  background-color: #fff
}

.navbar-inverse .navbar-collapse,
.navbar-inverse .navbar-form {
  border-color: #101010
}

.navbar-inverse .navbar-nav>.open>a,
.navbar-inverse .navbar-nav>.open>a:hover,
.navbar-inverse .navbar-nav>.open>a:focus {
  color: #fff;
  background-color: #080808
}

@media (max-width: 767px) {
  .navbar-inverse .navbar-nav .open .dropdown-menu>.dropdown-header {
    border-color: #080808
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu .divider {
    background-color: #080808
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu>li>a {
    color: #9d9d9d
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu>li>a:focus {
    color: #fff;
    background-color: transparent
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a,
  .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu>.active>a:focus {
    color: #fff;
    background-color: #080808
  }
  .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a,
  .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:hover,
  .navbar-inverse .navbar-nav .open .dropdown-menu>.disabled>a:focus {
    color: #444;
    background-color: transparent
  }
}

.navbar-inverse .navbar-link {
  color: #9d9d9d
}

.navbar-inverse .navbar-link:hover {
  color: #fff
}

.navbar-inverse .btn-link {
  color: #9d9d9d
}

.navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link:focus {
  color: #fff
}

.navbar-inverse .btn-link[disabled]:hover,
fieldset[disabled] .navbar-inverse .btn-link:hover,
.navbar-inverse .btn-link[disabled]:focus,
fieldset[disabled] .navbar-inverse .btn-link:focus {
  color: #444
}

.breadcrumb {
  padding: 8px 15px;
  margin-bottom: 20px;
  list-style: none;
  background-color: #f5f5f5;
  border-radius: 4px
}

.breadcrumb>li {
  display: inline-block
}

.breadcrumb>li+li:before {
  padding: 0 5px;
  color: #ccc;
  content: "/\00a0"
}

.breadcrumb>.active {
  color: #777
}

.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px
}

.pagination>li {
  display: inline
}

.pagination>li>a,
.pagination>li>span {
  position: relative;
  float: left;
  padding: 6px 12px;
  margin-left: -1px;
  line-height: 1.42857143;
  color: #337ab7;
  text-decoration: none;
  background-color: #fff;
  border: 1px solid #ddd
}

.pagination>li:first-child>a,
.pagination>li:first-child>span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px
}

.pagination>li:last-child>a,
.pagination>li:last-child>span {
  border-top-right-radius: 4px;
  border-bottom-right-radius: 4px
}

.pagination>li>a:hover,
.pagination>li>span:hover,
.pagination>li>a:focus,
.pagination>li>span:focus {
  z-index: 2;
  color: #23527c;
  background-color: #eee;
  border-color: #ddd
}

.pagination>.active>a,
.pagination>.active>span,
.pagination>.active>a:hover,
.pagination>.active>span:hover,
.pagination>.active>a:focus,
.pagination>.active>span:focus {
  z-index: 3;
  color: #fff;
  cursor: default;
  background-color: #337ab7;
  border-color: #337ab7
}

.pagination>.disabled>span,
.pagination>.disabled>span:hover,
.pagination>.disabled>span:focus,
.pagination>.disabled>a,
.pagination>.disabled>a:hover,
.pagination>.disabled>a:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #fff;
  border-color: #ddd
}

.pagination-lg>li>a,
.pagination-lg>li>span {
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333
}

.pagination-lg>li:first-child>a,
.pagination-lg>li:first-child>span {
  border-top-left-radius: 6px;
  border-bottom-left-radius: 6px
}

.pagination-lg>li:last-child>a,
.pagination-lg>li:last-child>span {
  border-top-right-radius: 6px;
  border-bottom-right-radius: 6px
}

.pagination-sm>li>a,
.pagination-sm>li>span {
  padding: 5px 10px;
  font-size: 12px;
  line-height: 1.5
}

.pagination-sm>li:first-child>a,
.pagination-sm>li:first-child>span {
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px
}

.pagination-sm>li:last-child>a,
.pagination-sm>li:last-child>span {
  border-top-right-radius: 3px;
  border-bottom-right-radius: 3px
}

.pager {
  padding-left: 0;
  margin: 20px 0;
  text-align: center;
  list-style: none
}

.pager li {
  display: inline
}

.pager li>a,
.pager li>span {
  display: inline-block;
  padding: 5px 14px;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 15px
}

.pager li>a:hover,
.pager li>a:focus {
  text-decoration: none;
  background-color: #eee
}

.pager .next>a,
.pager .next>span {
  float: right
}

.pager .previous>a,
.pager .previous>span {
  float: left
}

.pager .disabled>a,
.pager .disabled>a:hover,
.pager .disabled>a:focus,
.pager .disabled>span {
  color: #777;
  cursor: not-allowed;
  background-color: #fff
}

.label {
  display: inline;
  padding: .2em .6em .3em;
  font-size: 75%;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: baseline;
  border-radius: .25em
}

a.label:hover,
a.label:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer
}

.label:empty {
  display: none
}

.btn .label {
  position: relative;
  top: -1px
}

.label-default {
  background-color: #777
}

.label-default[href]:hover,
.label-default[href]:focus {
  background-color: #5e5e5e
}

.label-primary {
  background-color: #337ab7
}

.label-primary[href]:hover,
.label-primary[href]:focus {
  background-color: #286090
}

.label-success {
  background-color: #5cb85c
}

.label-success[href]:hover,
.label-success[href]:focus {
  background-color: #449d44
}

.label-info {
  background-color: #5bc0de
}

.label-info[href]:hover,
.label-info[href]:focus {
  background-color: #31b0d5
}

.label-warning {
  background-color: #f0ad4e
}

.label-warning[href]:hover,
.label-warning[href]:focus {
  background-color: #ec971f
}

.label-danger {
  background-color: #d9534f
}

.label-danger[href]:hover,
.label-danger[href]:focus {
  background-color: #c9302c
}

.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 12px;
  font-weight: bold;
  line-height: 1;
  color: #fff;
  text-align: center;
  white-space: nowrap;
  vertical-align: middle;
  background-color: #777;
  border-radius: 10px
}

.badge:empty {
  display: none
}

.btn .badge {
  position: relative;
  top: -1px
}

.btn-xs .badge,
.btn-group-xs>.btn .badge {
  top: 0;
  padding: 1px 5px
}

a.badge:hover,
a.badge:focus {
  color: #fff;
  text-decoration: none;
  cursor: pointer
}

.list-group-item.active>.badge,
.nav-pills>.active>a>.badge {
  color: #337ab7;
  background-color: #fff
}

.list-group-item>.badge {
  float: right
}

.list-group-item>.badge+.badge {
  margin-right: 5px
}

.nav-pills>li>a>.badge {
  margin-left: 3px
}

.jumbotron {
  padding-top: 30px;
  padding-bottom: 30px;
  margin-bottom: 30px;
  color: inherit;
  background-color: #eee
}

.jumbotron h1,
.jumbotron .h1 {
  color: inherit
}

.jumbotron p {
  margin-bottom: 15px;
  font-size: 21px;
  font-weight: 200
}

.jumbotron>hr {
  border-top-color: #d5d5d5
}

.container .jumbotron,
.container-fluid .jumbotron {
  padding-right: 15px;
  padding-left: 15px;
  border-radius: 6px
}

.jumbotron .container {
  max-width: 100%
}

@media screen and (min-width: 768px) {
  .jumbotron {
    padding-top: 48px;
    padding-bottom: 48px
  }
  .container .jumbotron,
  .container-fluid .jumbotron {
    padding-right: 60px;
    padding-left: 60px
  }
  .jumbotron h1,
  .jumbotron .h1 {
    font-size: 63px
  }
}

.thumbnail {
  display: block;
  padding: 4px;
  margin-bottom: 20px;
  line-height: 1.42857143;
  background-color: #fff;
  border: 1px solid #ddd;
  border-radius: 4px;
  -webkit-transition: border .2s ease-in-out;
  -o-transition: border .2s ease-in-out;
  transition: border .2s ease-in-out
}

.thumbnail>img,
.thumbnail a>img {
  margin-right: auto;
  margin-left: auto
}

a.thumbnail:hover,
a.thumbnail:focus,
a.thumbnail.active {
  border-color: #337ab7
}

.thumbnail .caption {
  padding: 9px;
  color: #333
}

.alert {
  padding: 15px;
  margin-bottom: 20px;
  border: 1px solid transparent;
  border-radius: 4px
}

.alert h4 {
  margin-top: 0;
  color: inherit
}

.alert .alert-link {
  font-weight: bold
}

.alert>p,
.alert>ul {
  margin-bottom: 0
}

.alert>p+p {
  margin-top: 5px
}

.alert-dismissable,
.alert-dismissible {
  padding-right: 35px
}

.alert-dismissable .close,
.alert-dismissible .close {
  position: relative;
  top: -2px;
  right: -21px;
  color: inherit
}

.alert-success {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6
}

.alert-success hr {
  border-top-color: #c9e2b3
}

.alert-success .alert-link {
  color: #2b542c
}

.alert-info {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1
}

.alert-info hr {
  border-top-color: #a6e1ec
}

.alert-info .alert-link {
  color: #245269
}

.alert-warning {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc
}

.alert-warning hr {
  border-top-color: #f7e1b5
}

.alert-warning .alert-link {
  color: #66512c
}

.alert-danger {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1
}

.alert-danger hr {
  border-top-color: #e4b9c0
}

.alert-danger .alert-link {
  color: #843534
}

@-webkit-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0
  }
  to {
    background-position: 0 0
  }
}

@-o-keyframes progress-bar-stripes {
  from {
    background-position: 40px 0
  }
  to {
    background-position: 0 0
  }
}

@keyframes progress-bar-stripes {
  from {
    background-position: 40px 0
  }
  to {
    background-position: 0 0
  }
}

.progress {
  height: 20px;
  margin-bottom: 20px;
  overflow: hidden;
  background-color: #f5f5f5;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1);
  box-shadow: inset 0 1px 2px rgba(0, 0, 0, 0.1)
}

.progress-bar {
  float: left;
  width: 0;
  height: 100%;
  font-size: 12px;
  line-height: 20px;
  color: #fff;
  text-align: center;
  background-color: #337ab7;
  -webkit-box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  box-shadow: inset 0 -1px 0 rgba(0, 0, 0, 0.15);
  -webkit-transition: width .6s ease;
  -o-transition: width .6s ease;
  transition: width .6s ease
}

.progress-striped .progress-bar,
.progress-bar-striped {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  -webkit-background-size: 40px 40px;
  background-size: 40px 40px
}

.progress.active .progress-bar,
.progress-bar.active {
  -webkit-animation: progress-bar-stripes 2s linear infinite;
  -o-animation: progress-bar-stripes 2s linear infinite;
  animation: progress-bar-stripes 2s linear infinite
}

.progress-bar-success {
  background-color: #5cb85c
}

.progress-striped .progress-bar-success {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)
}

.progress-bar-info {
  background-color: #5bc0de
}

.progress-striped .progress-bar-info {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)
}

.progress-bar-warning {
  background-color: #f0ad4e
}

.progress-striped .progress-bar-warning {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)
}

.progress-bar-danger {
  background-color: #d9534f
}

.progress-striped .progress-bar-danger {
  background-image: -webkit-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: -o-linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent);
  background-image: linear-gradient(45deg, rgba(255, 255, 255, 0.15) 25%, transparent 25%, transparent 50%, rgba(255, 255, 255, 0.15) 50%, rgba(255, 255, 255, 0.15) 75%, transparent 75%, transparent)
}

.media {
  margin-top: 15px
}

.media:first-child {
  margin-top: 0
}

.media,
.media-body {
  overflow: hidden;
  zoom: 1
}

.media-body {
  width: 10000px
}

.media-object {
  display: block
}

.media-object.img-thumbnail {
  max-width: none
}

.media-right,
.media>.pull-right {
  padding-left: 10px
}

.media-left,
.media>.pull-left {
  padding-right: 10px
}

.media-left,
.media-right,
.media-body {
  display: table-cell;
  vertical-align: top
}

.media-middle {
  vertical-align: middle
}

.media-bottom {
  vertical-align: bottom
}

.media-heading {
  margin-top: 0;
  margin-bottom: 5px
}

.media-list {
  padding-left: 0;
  list-style: none
}

.list-group {
  padding-left: 0;
  margin-bottom: 20px
}

.list-group-item {
  position: relative;
  display: block;
  padding: 10px 15px;
  margin-bottom: -1px;
  background-color: #fff;
  border: 1px solid #ddd
}

.list-group-item:first-child {
  border-top-left-radius: 4px;
  border-top-right-radius: 4px
}

.list-group-item:last-child {
  margin-bottom: 0;
  border-bottom-right-radius: 4px;
  border-bottom-left-radius: 4px
}

a.list-group-item,
button.list-group-item {
  color: #555
}

a.list-group-item .list-group-item-heading,
button.list-group-item .list-group-item-heading {
  color: #333
}

a.list-group-item:hover,
button.list-group-item:hover,
a.list-group-item:focus,
button.list-group-item:focus {
  color: #555;
  text-decoration: none;
  background-color: #f5f5f5
}

button.list-group-item {
  width: 100%;
  text-align: left
}

.list-group-item.disabled,
.list-group-item.disabled:hover,
.list-group-item.disabled:focus {
  color: #777;
  cursor: not-allowed;
  background-color: #eee
}

.list-group-item.disabled .list-group-item-heading,
.list-group-item.disabled:hover .list-group-item-heading,
.list-group-item.disabled:focus .list-group-item-heading {
  color: inherit
}

.list-group-item.disabled .list-group-item-text,
.list-group-item.disabled:hover .list-group-item-text,
.list-group-item.disabled:focus .list-group-item-text {
  color: #777
}

.list-group-item.active,
.list-group-item.active:hover,
.list-group-item.active:focus {
  z-index: 2;
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7
}

.list-group-item.active .list-group-item-heading,
.list-group-item.active:hover .list-group-item-heading,
.list-group-item.active:focus .list-group-item-heading,
.list-group-item.active .list-group-item-heading>small,
.list-group-item.active:hover .list-group-item-heading>small,
.list-group-item.active:focus .list-group-item-heading>small,
.list-group-item.active .list-group-item-heading>.small,
.list-group-item.active:hover .list-group-item-heading>.small,
.list-group-item.active:focus .list-group-item-heading>.small {
  color: inherit
}

.list-group-item.active .list-group-item-text,
.list-group-item.active:hover .list-group-item-text,
.list-group-item.active:focus .list-group-item-text {
  color: #c7ddef
}

.list-group-item-success {
  color: #3c763d;
  background-color: #dff0d8
}

a.list-group-item-success,
button.list-group-item-success {
  color: #3c763d
}

a.list-group-item-success .list-group-item-heading,
button.list-group-item-success .list-group-item-heading {
  color: inherit
}

a.list-group-item-success:hover,
button.list-group-item-success:hover,
a.list-group-item-success:focus,
button.list-group-item-success:focus {
  color: #3c763d;
  background-color: #d0e9c6
}

a.list-group-item-success.active,
button.list-group-item-success.active,
a.list-group-item-success.active:hover,
button.list-group-item-success.active:hover,
a.list-group-item-success.active:focus,
button.list-group-item-success.active:focus {
  color: #fff;
  background-color: #3c763d;
  border-color: #3c763d
}

.list-group-item-info {
  color: #31708f;
  background-color: #d9edf7
}

a.list-group-item-info,
button.list-group-item-info {
  color: #31708f
}

a.list-group-item-info .list-group-item-heading,
button.list-group-item-info .list-group-item-heading {
  color: inherit
}

a.list-group-item-info:hover,
button.list-group-item-info:hover,
a.list-group-item-info:focus,
button.list-group-item-info:focus {
  color: #31708f;
  background-color: #c4e3f3
}

a.list-group-item-info.active,
button.list-group-item-info.active,
a.list-group-item-info.active:hover,
button.list-group-item-info.active:hover,
a.list-group-item-info.active:focus,
button.list-group-item-info.active:focus {
  color: #fff;
  background-color: #31708f;
  border-color: #31708f
}

.list-group-item-warning {
  color: #8a6d3b;
  background-color: #fcf8e3
}

a.list-group-item-warning,
button.list-group-item-warning {
  color: #8a6d3b
}

a.list-group-item-warning .list-group-item-heading,
button.list-group-item-warning .list-group-item-heading {
  color: inherit
}

a.list-group-item-warning:hover,
button.list-group-item-warning:hover,
a.list-group-item-warning:focus,
button.list-group-item-warning:focus {
  color: #8a6d3b;
  background-color: #faf2cc
}

a.list-group-item-warning.active,
button.list-group-item-warning.active,
a.list-group-item-warning.active:hover,
button.list-group-item-warning.active:hover,
a.list-group-item-warning.active:focus,
button.list-group-item-warning.active:focus {
  color: #fff;
  background-color: #8a6d3b;
  border-color: #8a6d3b
}

.list-group-item-danger {
  color: #a94442;
  background-color: #f2dede
}

a.list-group-item-danger,
button.list-group-item-danger {
  color: #a94442
}

a.list-group-item-danger .list-group-item-heading,
button.list-group-item-danger .list-group-item-heading {
  color: inherit
}

a.list-group-item-danger:hover,
button.list-group-item-danger:hover,
a.list-group-item-danger:focus,
button.list-group-item-danger:focus {
  color: #a94442;
  background-color: #ebcccc
}

a.list-group-item-danger.active,
button.list-group-item-danger.active,
a.list-group-item-danger.active:hover,
button.list-group-item-danger.active:hover,
a.list-group-item-danger.active:focus,
button.list-group-item-danger.active:focus {
  color: #fff;
  background-color: #a94442;
  border-color: #a94442
}

.list-group-item-heading {
  margin-top: 0;
  margin-bottom: 5px
}

.list-group-item-text {
  margin-bottom: 0;
  line-height: 1.3
}

.panel {
  margin-bottom: 20px;
  background-color: #fff;
  border: 1px solid transparent;
  border-radius: 4px;
  -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05)
}

.panel-body {
  padding: 15px
}

.panel-heading {
  padding: 10px 15px;
  border-bottom: 1px solid transparent;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px
}

.panel-heading>.dropdown .dropdown-toggle {
  color: inherit
}

.panel-title {
  margin-top: 0;
  margin-bottom: 0;
  font-size: 16px;
  color: inherit
}

.panel-title>a,
.panel-title>small,
.panel-title>.small,
.panel-title>small>a,
.panel-title>.small>a {
  color: inherit
}

.panel-footer {
  padding: 10px 15px;
  background-color: #f5f5f5;
  border-top: 1px solid #ddd;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px
}

.panel>.list-group,
.panel>.panel-collapse>.list-group {
  margin-bottom: 0
}

.panel>.list-group .list-group-item,
.panel>.panel-collapse>.list-group .list-group-item {
  border-width: 1px 0;
  border-radius: 0
}

.panel>.list-group:first-child .list-group-item:first-child,
.panel>.panel-collapse>.list-group:first-child .list-group-item:first-child {
  border-top: 0;
  border-top-left-radius: 3px;
  border-top-right-radius: 3px
}

.panel>.list-group:last-child .list-group-item:last-child,
.panel>.panel-collapse>.list-group:last-child .list-group-item:last-child {
  border-bottom: 0;
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px
}

.panel>.panel-heading+.panel-collapse>.list-group .list-group-item:first-child {
  border-top-left-radius: 0;
  border-top-right-radius: 0
}

.panel-heading+.list-group .list-group-item:first-child {
  border-top-width: 0
}

.list-group+.panel-footer {
  border-top-width: 0
}

.panel>.table,
.panel>.table-responsive>.table,
.panel>.panel-collapse>.table {
  margin-bottom: 0
}

.panel>.table caption,
.panel>.table-responsive>.table caption,
.panel>.panel-collapse>.table caption {
  padding-right: 15px;
  padding-left: 15px
}

.panel>.table:first-child,
.panel>.table-responsive:first-child>.table:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px
}

.panel>.table:first-child>thead:first-child>tr:first-child,
.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child,
.panel>.table:first-child>tbody:first-child>tr:first-child,
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child {
  border-top-left-radius: 3px;
  border-top-right-radius: 3px
}

.panel>.table:first-child>thead:first-child>tr:first-child td:first-child,
.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:first-child,
.panel>.table:first-child>tbody:first-child>tr:first-child td:first-child,
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:first-child,
.panel>.table:first-child>thead:first-child>tr:first-child th:first-child,
.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:first-child,
.panel>.table:first-child>tbody:first-child>tr:first-child th:first-child,
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:first-child {
  border-top-left-radius: 3px
}

.panel>.table:first-child>thead:first-child>tr:first-child td:last-child,
.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child td:last-child,
.panel>.table:first-child>tbody:first-child>tr:first-child td:last-child,
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child td:last-child,
.panel>.table:first-child>thead:first-child>tr:first-child th:last-child,
.panel>.table-responsive:first-child>.table:first-child>thead:first-child>tr:first-child th:last-child,
.panel>.table:first-child>tbody:first-child>tr:first-child th:last-child,
.panel>.table-responsive:first-child>.table:first-child>tbody:first-child>tr:first-child th:last-child {
  border-top-right-radius: 3px
}

.panel>.table:last-child,
.panel>.table-responsive:last-child>.table:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px
}

.panel>.table:last-child>tbody:last-child>tr:last-child,
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child,
.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child {
  border-bottom-right-radius: 3px;
  border-bottom-left-radius: 3px
}

.panel>.table:last-child>tbody:last-child>tr:last-child td:first-child,
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:first-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:first-child,
.panel>.table:last-child>tbody:last-child>tr:last-child th:first-child,
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:first-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child th:first-child,
.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:first-child {
  border-bottom-left-radius: 3px
}

.panel>.table:last-child>tbody:last-child>tr:last-child td:last-child,
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child td:last-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child td:last-child,
.panel>.table:last-child>tbody:last-child>tr:last-child th:last-child,
.panel>.table-responsive:last-child>.table:last-child>tbody:last-child>tr:last-child th:last-child,
.panel>.table:last-child>tfoot:last-child>tr:last-child th:last-child,
.panel>.table-responsive:last-child>.table:last-child>tfoot:last-child>tr:last-child th:last-child {
  border-bottom-right-radius: 3px
}

.panel>.panel-body+.table,
.panel>.panel-body+.table-responsive,
.panel>.table+.panel-body,
.panel>.table-responsive+.panel-body {
  border-top: 1px solid #ddd
}

.panel>.table>tbody:first-child>tr:first-child th,
.panel>.table>tbody:first-child>tr:first-child td {
  border-top: 0
}

.panel>.table-bordered,
.panel>.table-responsive>.table-bordered {
  border: 0
}

.panel>.table-bordered>thead>tr>th:first-child,
.panel>.table-responsive>.table-bordered>thead>tr>th:first-child,
.panel>.table-bordered>tbody>tr>th:first-child,
.panel>.table-responsive>.table-bordered>tbody>tr>th:first-child,
.panel>.table-bordered>tfoot>tr>th:first-child,
.panel>.table-responsive>.table-bordered>tfoot>tr>th:first-child,
.panel>.table-bordered>thead>tr>td:first-child,
.panel>.table-responsive>.table-bordered>thead>tr>td:first-child,
.panel>.table-bordered>tbody>tr>td:first-child,
.panel>.table-responsive>.table-bordered>tbody>tr>td:first-child,
.panel>.table-bordered>tfoot>tr>td:first-child,
.panel>.table-responsive>.table-bordered>tfoot>tr>td:first-child {
  border-left: 0
}

.panel>.table-bordered>thead>tr>th:last-child,
.panel>.table-responsive>.table-bordered>thead>tr>th:last-child,
.panel>.table-bordered>tbody>tr>th:last-child,
.panel>.table-responsive>.table-bordered>tbody>tr>th:last-child,
.panel>.table-bordered>tfoot>tr>th:last-child,
.panel>.table-responsive>.table-bordered>tfoot>tr>th:last-child,
.panel>.table-bordered>thead>tr>td:last-child,
.panel>.table-responsive>.table-bordered>thead>tr>td:last-child,
.panel>.table-bordered>tbody>tr>td:last-child,
.panel>.table-responsive>.table-bordered>tbody>tr>td:last-child,
.panel>.table-bordered>tfoot>tr>td:last-child,
.panel>.table-responsive>.table-bordered>tfoot>tr>td:last-child {
  border-right: 0
}

.panel>.table-bordered>thead>tr:first-child>td,
.panel>.table-responsive>.table-bordered>thead>tr:first-child>td,
.panel>.table-bordered>tbody>tr:first-child>td,
.panel>.table-responsive>.table-bordered>tbody>tr:first-child>td,
.panel>.table-bordered>thead>tr:first-child>th,
.panel>.table-responsive>.table-bordered>thead>tr:first-child>th,
.panel>.table-bordered>tbody>tr:first-child>th,
.panel>.table-responsive>.table-bordered>tbody>tr:first-child>th {
  border-bottom: 0
}

.panel>.table-bordered>tbody>tr:last-child>td,
.panel>.table-responsive>.table-bordered>tbody>tr:last-child>td,
.panel>.table-bordered>tfoot>tr:last-child>td,
.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>td,
.panel>.table-bordered>tbody>tr:last-child>th,
.panel>.table-responsive>.table-bordered>tbody>tr:last-child>th,
.panel>.table-bordered>tfoot>tr:last-child>th,
.panel>.table-responsive>.table-bordered>tfoot>tr:last-child>th {
  border-bottom: 0
}

.panel>.table-responsive {
  margin-bottom: 0;
  border: 0
}

.panel-group {
  margin-bottom: 20px
}

.panel-group .panel {
  margin-bottom: 0;
  border-radius: 4px
}

.panel-group .panel+.panel {
  margin-top: 5px
}

.panel-group .panel-heading {
  border-bottom: 0
}

.panel-group .panel-heading+.panel-collapse>.panel-body,
.panel-group .panel-heading+.panel-collapse>.list-group {
  border-top: 1px solid #ddd
}

.panel-group .panel-footer {
  border-top: 0
}

.panel-group .panel-footer+.panel-collapse .panel-body {
  border-bottom: 1px solid #ddd
}

.panel-default {
  border-color: #ddd
}

.panel-default>.panel-heading {
  color: #333;
  background-color: #f5f5f5;
  border-color: #ddd
}

.panel-default>.panel-heading+.panel-collapse>.panel-body {
  border-top-color: #ddd
}

.panel-default>.panel-heading .badge {
  color: #f5f5f5;
  background-color: #333
}

.panel-default>.panel-footer+.panel-collapse>.panel-body {
  border-bottom-color: #ddd
}

.panel-primary {
  border-color: #337ab7
}

.panel-primary>.panel-heading {
  color: #fff;
  background-color: #337ab7;
  border-color: #337ab7
}

.panel-primary>.panel-heading+.panel-collapse>.panel-body {
  border-top-color: #337ab7
}

.panel-primary>.panel-heading .badge {
  color: #337ab7;
  background-color: #fff
}

.panel-primary>.panel-footer+.panel-collapse>.panel-body {
  border-bottom-color: #337ab7
}

.panel-success {
  border-color: #d6e9c6
}

.panel-success>.panel-heading {
  color: #3c763d;
  background-color: #dff0d8;
  border-color: #d6e9c6
}

.panel-success>.panel-heading+.panel-collapse>.panel-body {
  border-top-color: #d6e9c6
}

.panel-success>.panel-heading .badge {
  color: #dff0d8;
  background-color: #3c763d
}

.panel-success>.panel-footer+.panel-collapse>.panel-body {
  border-bottom-color: #d6e9c6
}

.panel-info {
  border-color: #bce8f1
}

.panel-info>.panel-heading {
  color: #31708f;
  background-color: #d9edf7;
  border-color: #bce8f1
}

.panel-info>.panel-heading+.panel-collapse>.panel-body {
  border-top-color: #bce8f1
}

.panel-info>.panel-heading .badge {
  color: #d9edf7;
  background-color: #31708f
}

.panel-info>.panel-footer+.panel-collapse>.panel-body {
  border-bottom-color: #bce8f1
}

.panel-warning {
  border-color: #faebcc
}

.panel-warning>.panel-heading {
  color: #8a6d3b;
  background-color: #fcf8e3;
  border-color: #faebcc
}

.panel-warning>.panel-heading+.panel-collapse>.panel-body {
  border-top-color: #faebcc
}

.panel-warning>.panel-heading .badge {
  color: #fcf8e3;
  background-color: #8a6d3b
}

.panel-warning>.panel-footer+.panel-collapse>.panel-body {
  border-bottom-color: #faebcc
}

.panel-danger {
  border-color: #ebccd1
}

.panel-danger>.panel-heading {
  color: #a94442;
  background-color: #f2dede;
  border-color: #ebccd1
}

.panel-danger>.panel-heading+.panel-collapse>.panel-body {
  border-top-color: #ebccd1
}

.panel-danger>.panel-heading .badge {
  color: #f2dede;
  background-color: #a94442
}

.panel-danger>.panel-footer+.panel-collapse>.panel-body {
  border-bottom-color: #ebccd1
}

.embed-responsive {
  position: relative;
  display: block;
  height: 0;
  padding: 0;
  overflow: hidden
}

.embed-responsive .embed-responsive-item,
.embed-responsive iframe,
.embed-responsive embed,
.embed-responsive object,
.embed-responsive video {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 100%;
  border: 0
}

.embed-responsive-16by9 {
  padding-bottom: 56.25%
}

.embed-responsive-4by3 {
  padding-bottom: 75%
}

.well {
  min-height: 20px;
  padding: 19px;
  margin-bottom: 20px;
  background-color: #f5f5f5;
  border: 1px solid #e3e3e3;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.05)
}

.well blockquote {
  border-color: #ddd;
  border-color: rgba(0, 0, 0, 0.15)
}

.well-lg {
  padding: 24px;
  border-radius: 6px
}

.well-sm {
  padding: 9px;
  border-radius: 3px
}

.close {
  float: right;
  font-size: 21px;
  font-weight: bold;
  line-height: 1;
  color: #000;
  text-shadow: 0 1px 0 #fff;
  filter: alpha(opacity=20);
  opacity: .2
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
  filter: alpha(opacity=50);
  opacity: .5
}

button.close {
  -webkit-appearance: none;
  padding: 0;
  cursor: pointer;
  background: transparent;
  border: 0
}

.modal-open {
  overflow: hidden
}

.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1050;
  display: none;
  overflow: hidden;
  -webkit-overflow-scrolling: touch;
  outline: 0
}

.modal.fade .modal-dialog {
  -webkit-transition: -webkit-transform .3s ease-out;
  -o-transition: -o-transform .3s ease-out;
  transition: transform .3s ease-out;
  -webkit-transform: translate(0, -25%);
  -ms-transform: translate(0, -25%);
  -o-transform: translate(0, -25%);
  transform: translate(0, -25%)
}

.modal.in .modal-dialog {
  -webkit-transform: translate(0, 0);
  -ms-transform: translate(0, 0);
  -o-transform: translate(0, 0);
  transform: translate(0, 0)
}

.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto
}

.modal-dialog {
  position: relative;
  width: auto;
  margin: 10px
}

.modal-content {
  position: relative;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #999;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  outline: 0;
  -webkit-box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5);
  box-shadow: 0 3px 9px rgba(0, 0, 0, 0.5)
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000
}

.modal-backdrop.fade {
  filter: alpha(opacity=0);
  opacity: 0
}

.modal-backdrop.in {
  filter: alpha(opacity=50);
  opacity: .5
}

.modal-header {
  padding: 15px;
  border-bottom: 1px solid #e5e5e5
}

.modal-header .close {
  margin-top: -2px
}

.modal-title {
  margin: 0;
  line-height: 1.42857143
}

.modal-body {
  position: relative;
  padding: 15px
}

.modal-footer {
  padding: 15px;
  text-align: right;
  border-top: 1px solid #e5e5e5
}

.modal-footer .btn+.btn {
  margin-bottom: 0;
  margin-left: 5px
}

.modal-footer .btn-group .btn+.btn {
  margin-left: -1px
}

.modal-footer .btn-block+.btn-block {
  margin-left: 0
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll
}

@media (min-width: 768px) {
  .modal-dialog {
    width: 600px;
    margin: 30px auto
  }
  .modal-content {
    -webkit-box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5)
  }
  .modal-sm {
    width: 300px
  }
}

@media (min-width: 992px) {
  .modal-lg {
    width: 900px
  }
}

.tooltip {
  position: absolute;
  z-index: 1070;
  display: block;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 12px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  filter: alpha(opacity=0);
  opacity: 0;
  line-break: auto
}

.tooltip.in {
  filter: alpha(opacity=90);
  opacity: .9
}

.tooltip.top {
  padding: 5px 0;
  margin-top: -3px
}

.tooltip.right {
  padding: 0 5px;
  margin-left: 3px
}

.tooltip.bottom {
  padding: 5px 0;
  margin-top: 3px
}

.tooltip.left {
  padding: 0 5px;
  margin-left: -3px
}

.tooltip-inner {
  max-width: 200px;
  padding: 3px 8px;
  color: #fff;
  text-align: center;
  background-color: #000;
  border-radius: 4px
}

.tooltip-arrow {
  position: absolute;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid
}

.tooltip.top .tooltip-arrow {
  bottom: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000
}

.tooltip.top-left .tooltip-arrow {
  right: 5px;
  bottom: 0;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000
}

.tooltip.top-right .tooltip-arrow {
  bottom: 0;
  left: 5px;
  margin-bottom: -5px;
  border-width: 5px 5px 0;
  border-top-color: #000
}

.tooltip.right .tooltip-arrow {
  top: 50%;
  left: 0;
  margin-top: -5px;
  border-width: 5px 5px 5px 0;
  border-right-color: #000
}

.tooltip.left .tooltip-arrow {
  top: 50%;
  right: 0;
  margin-top: -5px;
  border-width: 5px 0 5px 5px;
  border-left-color: #000
}

.tooltip.bottom .tooltip-arrow {
  top: 0;
  left: 50%;
  margin-left: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000
}

.tooltip.bottom-left .tooltip-arrow {
  top: 0;
  right: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000
}

.tooltip.bottom-right .tooltip-arrow {
  top: 0;
  left: 5px;
  margin-top: -5px;
  border-width: 0 5px 5px;
  border-bottom-color: #000
}

.popover {
  position: absolute;
  top: 0;
  left: 0;
  z-index: 1060;
  display: none;
  max-width: 276px;
  padding: 1px;
  font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
  font-size: 14px;
  font-style: normal;
  font-weight: normal;
  line-height: 1.42857143;
  text-align: left;
  text-align: start;
  text-decoration: none;
  text-shadow: none;
  text-transform: none;
  letter-spacing: normal;
  word-break: normal;
  word-spacing: normal;
  word-wrap: normal;
  white-space: normal;
  background-color: #fff;
  -webkit-background-clip: padding-box;
  background-clip: padding-box;
  border: 1px solid #ccc;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 6px;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
  line-break: auto
}

.popover.top {
  margin-top: -10px
}

.popover.right {
  margin-left: 10px
}

.popover.bottom {
  margin-top: 10px
}

.popover.left {
  margin-left: -10px
}

.popover-title {
  padding: 8px 14px;
  margin: 0;
  font-size: 14px;
  background-color: #f7f7f7;
  border-bottom: 1px solid #ebebeb;
  border-radius: 5px 5px 0 0
}

.popover-content {
  padding: 9px 14px
}

.popover>.arrow,
.popover>.arrow:after {
  position: absolute;
  display: block;
  width: 0;
  height: 0;
  border-color: transparent;
  border-style: solid
}

.popover>.arrow {
  border-width: 11px
}

.popover>.arrow:after {
  content: "";
  border-width: 10px
}

.popover.top>.arrow {
  bottom: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-color: #999;
  border-top-color: rgba(0, 0, 0, 0.25);
  border-bottom-width: 0
}

.popover.top>.arrow:after {
  bottom: 1px;
  margin-left: -10px;
  content: " ";
  border-top-color: #fff;
  border-bottom-width: 0
}

.popover.right>.arrow {
  top: 50%;
  left: -11px;
  margin-top: -11px;
  border-right-color: #999;
  border-right-color: rgba(0, 0, 0, 0.25);
  border-left-width: 0
}

.popover.right>.arrow:after {
  bottom: -10px;
  left: 1px;
  content: " ";
  border-right-color: #fff;
  border-left-width: 0
}

.popover.bottom>.arrow {
  top: -11px;
  left: 50%;
  margin-left: -11px;
  border-top-width: 0;
  border-bottom-color: #999;
  border-bottom-color: rgba(0, 0, 0, 0.25)
}

.popover.bottom>.arrow:after {
  top: 1px;
  margin-left: -10px;
  content: " ";
  border-top-width: 0;
  border-bottom-color: #fff
}

.popover.left>.arrow {
  top: 50%;
  right: -11px;
  margin-top: -11px;
  border-right-width: 0;
  border-left-color: #999;
  border-left-color: rgba(0, 0, 0, 0.25)
}

.popover.left>.arrow:after {
  right: 1px;
  bottom: -10px;
  content: " ";
  border-right-width: 0;
  border-left-color: #fff
}

.carousel {
  position: relative
}

.carousel-inner {
  position: relative;
  width: 100%;
  overflow: hidden
}

.carousel-inner>.item {
  position: relative;
  display: none;
  -webkit-transition: .6s ease-in-out left;
  -o-transition: .6s ease-in-out left;
  transition: .6s ease-in-out left
}

.carousel-inner>.item>img,
.carousel-inner>.item>a>img {
  line-height: 1
}

@media all and (transform-3d),
(-webkit-transform-3d) {
  .carousel-inner>.item {
    -webkit-transition: -webkit-transform .6s ease-in-out;
    -o-transition: -o-transform .6s ease-in-out;
    transition: transform .6s ease-in-out;
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-perspective: 1000px;
    perspective: 1000px
  }
  .carousel-inner>.item.next,
  .carousel-inner>.item.active.right {
    left: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
  .carousel-inner>.item.prev,
  .carousel-inner>.item.active.left {
    left: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
  .carousel-inner>.item.next.left,
  .carousel-inner>.item.prev.right,
  .carousel-inner>.item.active {
    left: 0;
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
}

.carousel-inner>.active,
.carousel-inner>.next,
.carousel-inner>.prev {
  display: block
}

.carousel-inner>.active {
  left: 0
}

.carousel-inner>.next,
.carousel-inner>.prev {
  position: absolute;
  top: 0;
  width: 100%
}

.carousel-inner>.next {
  left: 100%
}

.carousel-inner>.prev {
  left: -100%
}

.carousel-inner>.next.left,
.carousel-inner>.prev.right {
  left: 0
}

.carousel-inner>.active.left {
  left: -100%
}

.carousel-inner>.active.right {
  left: 100%
}

.carousel-control {
  position: absolute;
  top: 0;
  bottom: 0;
  left: 0;
  width: 15%;
  font-size: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6);
  background-color: transparent;
  filter: alpha(opacity=50);
  opacity: .5
}

.carousel-control.left {
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.5)), to(rgba(0, 0, 0, 0.0001)));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.0001) 100%);
  filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#80000000', endColorstr='#00000000', GradientType=1);
  background-repeat: repeat-x
}

.carousel-control.right {
  right: 0;
  left: auto;
  background-image: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -o-linear-gradient(left, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  background-image: -webkit-gradient(linear, left top, right top, from(rgba(0, 0, 0, 0.0001)), to(rgba(0, 0, 0, 0.5)));
  background-image: linear-gradient(to right, rgba(0, 0, 0, 0.0001) 0%, rgba(0, 0, 0, 0.5) 100%);
  filter: progid: DXImageTransform.Microsoft.gradient(startColorstr='#00000000', endColorstr='#80000000', GradientType=1);
  background-repeat: repeat-x
}

.carousel-control:hover,
.carousel-control:focus {
  color: #fff;
  text-decoration: none;
  filter: alpha(opacity=90);
  outline: 0;
  opacity: .9
}

.carousel-control .icon-prev,
.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-left,
.carousel-control .glyphicon-chevron-right {
  position: absolute;
  top: 50%;
  z-index: 5;
  display: inline-block;
  margin-top: -10px
}

.carousel-control .icon-prev,
.carousel-control .glyphicon-chevron-left {
  left: 50%;
  margin-left: -10px
}

.carousel-control .icon-next,
.carousel-control .glyphicon-chevron-right {
  right: 50%;
  margin-right: -10px
}

.carousel-control .icon-prev,
.carousel-control .icon-next {
  width: 20px;
  height: 20px;
  font-family: serif;
  line-height: 1
}

.carousel-control .icon-prev:before {
  content: '\2039'
}

.carousel-control .icon-next:before {
  content: '\203a'
}

.carousel-indicators {
  position: absolute;
  bottom: 10px;
  left: 50%;
  z-index: 15;
  width: 60%;
  padding-left: 0;
  margin-left: -30%;
  text-align: center;
  list-style: none
}

.carousel-indicators li {
  display: inline-block;
  width: 10px;
  height: 10px;
  margin: 1px;
  text-indent: -999px;
  cursor: pointer;
  background-color: #000 \9;
  background-color: transparent;
  border: 1px solid #fff;
  border-radius: 10px
}

.carousel-indicators .active {
  width: 12px;
  height: 12px;
  margin: 0;
  background-color: #fff
}

.carousel-caption {
  position: absolute;
  right: 15%;
  bottom: 20px;
  left: 15%;
  z-index: 10;
  padding-top: 20px;
  padding-bottom: 20px;
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 2px rgba(0, 0, 0, 0.6)
}

.carousel-caption .btn {
  text-shadow: none
}

@media screen and (min-width: 768px) {
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-prev,
  .carousel-control .icon-next {
    width: 30px;
    height: 30px;
    margin-top: -10px;
    font-size: 30px
  }
  .carousel-control .glyphicon-chevron-left,
  .carousel-control .icon-prev {
    margin-left: -10px
  }
  .carousel-control .glyphicon-chevron-right,
  .carousel-control .icon-next {
    margin-right: -10px
  }
  .carousel-caption {
    right: 20%;
    left: 20%;
    padding-bottom: 30px
  }
  .carousel-indicators {
    bottom: 20px
  }
}

.clearfix:before,
.clearfix:after,
.dl-horizontal dd:before,
.dl-horizontal dd:after,
.container:before,
.container:after,
.container-fluid:before,
.container-fluid:after,
.row:before,
.row:after,
.form-horizontal .form-group:before,
.form-horizontal .form-group:after,
.btn-toolbar:before,
.btn-toolbar:after,
.btn-group-vertical>.btn-group:before,
.btn-group-vertical>.btn-group:after,
.nav:before,
.nav:after,
.navbar:before,
.navbar:after,
.navbar-header:before,
.navbar-header:after,
.navbar-collapse:before,
.navbar-collapse:after,
.pager:before,
.pager:after,
.panel-body:before,
.panel-body:after,
.modal-header:before,
.modal-header:after,
.modal-footer:before,
.modal-footer:after {
  display: table;
  content: " "
}

.clearfix:after,
.dl-horizontal dd:after,
.container:after,
.container-fluid:after,
.row:after,
.form-horizontal .form-group:after,
.btn-toolbar:after,
.btn-group-vertical>.btn-group:after,
.nav:after,
.navbar:after,
.navbar-header:after,
.navbar-collapse:after,
.pager:after,
.panel-body:after,
.modal-header:after,
.modal-footer:after {
  clear: both
}

.center-block {
  display: block;
  margin-right: auto;
  margin-left: auto
}

.pull-right {
  float: right !important
}

.pull-left {
  float: left !important
}

.hide {
  display: none !important
}

.show {
  display: block !important
}

.invisible {
  visibility: hidden
}

.text-hide {
  font: 0/0 a;
  color: transparent;
  text-shadow: none;
  background-color: transparent;
  border: 0
}

.hidden {
  display: none !important
}

.affix {
  position: fixed
}

@-ms-viewport {
  width: device-width
}

.visible-xs,
.visible-sm,
.visible-md,
.visible-lg {
  display: none !important
}

.visible-xs-block,
.visible-xs-inline,
.visible-xs-inline-block,
.visible-sm-block,
.visible-sm-inline,
.visible-sm-inline-block,
.visible-md-block,
.visible-md-inline,
.visible-md-inline-block,
.visible-lg-block,
.visible-lg-inline,
.visible-lg-inline-block {
  display: none !important
}

@media (max-width: 767px) {
  .visible-xs {
    display: block !important
  }
  table.visible-xs {
    display: table !important
  }
  tr.visible-xs {
    display: table-row !important
  }
  th.visible-xs,
  td.visible-xs {
    display: table-cell !important
  }
}

@media (max-width: 767px) {
  .visible-xs-block {
    display: block !important
  }
}

@media (max-width: 767px) {
  .visible-xs-inline {
    display: inline !important
  }
}

@media (max-width: 767px) {
  .visible-xs-inline-block {
    display: inline-block !important
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm {
    display: block !important
  }
  table.visible-sm {
    display: table !important
  }
  tr.visible-sm {
    display: table-row !important
  }
  th.visible-sm,
  td.visible-sm {
    display: table-cell !important
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-block {
    display: block !important
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline {
    display: inline !important
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .visible-sm-inline-block {
    display: inline-block !important
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md {
    display: block !important
  }
  table.visible-md {
    display: table !important
  }
  tr.visible-md {
    display: table-row !important
  }
  th.visible-md,
  td.visible-md {
    display: table-cell !important
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-block {
    display: block !important
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline {
    display: inline !important
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .visible-md-inline-block {
    display: inline-block !important
  }
}

@media (min-width: 1200px) {
  .visible-lg {
    display: block !important
  }
  table.visible-lg {
    display: table !important
  }
  tr.visible-lg {
    display: table-row !important
  }
  th.visible-lg,
  td.visible-lg {
    display: table-cell !important
  }
}

@media (min-width: 1200px) {
  .visible-lg-block {
    display: block !important
  }
}

@media (min-width: 1200px) {
  .visible-lg-inline {
    display: inline !important
  }
}

@media (min-width: 1200px) {
  .visible-lg-inline-block {
    display: inline-block !important
  }
}

@media (max-width: 767px) {
  .hidden-xs {
    display: none !important
  }
}

@media (min-width: 768px) and (max-width: 991px) {
  .hidden-sm {
    display: none !important
  }
}

@media (min-width: 992px) and (max-width: 1199px) {
  .hidden-md {
    display: none !important
  }
}

@media (min-width: 1200px) {
  .hidden-lg {
    display: none !important
  }
}

.visible-print {
  display: none !important
}

@media print {
  .visible-print {
    display: block !important
  }
  table.visible-print {
    display: table !important
  }
  tr.visible-print {
    display: table-row !important
  }
  th.visible-print,
  td.visible-print {
    display: table-cell !important
  }
}

.visible-print-block {
  display: none !important
}

@media print {
  .visible-print-block {
    display: block !important
  }
}

.visible-print-inline {
  display: none !important
}

@media print {
  .visible-print-inline {
    display: inline !important
  }
}

.visible-print-inline-block {
  display: none !important
}

@media print {
  .visible-print-inline-block {
    display: inline-block !important
  }
}

@media print {
  .hidden-print {
    display: none !important
  }
}


/*!

  === ANIMATE STYLES === 

Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2014 Daniel Eden

*/

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s
}

@-webkit-keyframes bounce {
  0%,
  20%,
  53%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  40%,
  43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0)
  }
  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0)
  }
}

@keyframes bounce {
  0%,
  20%,
  53%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  40%,
  43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -30px, 0);
    -ms-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0)
  }
  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -15px, 0);
    -ms-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -4px, 0);
    -ms-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0)
  }
}

.bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  -ms-transform-origin: center bottom;
  transform-origin: center bottom
}

@-webkit-keyframes flash {
  0%,
  50%,
  100% {
    opacity: 1
  }
  25%,
  75% {
    opacity: 0
  }
}

@keyframes flash {
  0%,
  50%,
  100% {
    opacity: 1
  }
  25%,
  75% {
    opacity: 0
  }
}

.flash {
  -webkit-animation-name: flash;
  animation-name: flash
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    -ms-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1)
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1)
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1)
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1)
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    -ms-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1)
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    -ms-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1)
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    -ms-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1)
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    -ms-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1)
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    -ms-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand
}

@-webkit-keyframes shake {
  0%,
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
}

@keyframes shake {
  0%,
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    -ms-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    -ms-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
}

.shake {
  -webkit-animation-name: shake;
  animation-name: shake
}

@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg)
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg)
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg)
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg)
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg)
  }
}

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    -ms-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg)
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    -ms-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg)
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    -ms-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg)
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    -ms-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg)
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    -ms-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg)
  }
}

.swing {
  -webkit-transform-origin: top center;
  -ms-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  10%,
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
  }
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
  }
  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  10%,
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    -ms-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
  }
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
  }
  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.tada {
  -webkit-animation-name: tada;
  animation-name: tada
}

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: none;
    transform: none
  }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
  }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
  }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
  }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
  }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    -ms-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
  }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    -ms-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
  }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    -ms-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
  }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    -ms-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
  }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    -ms-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.wobble {
  -webkit-animation-name: wobble;
  animation-name: wobble
}

@-webkit-keyframes bounceIn {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03)
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97)
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes bounceIn {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    -ms-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03)
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    -ms-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97)
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.bounceIn {
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn;
  -webkit-animation-duration: .75s;
  animation-duration: .75s
}

@-webkit-keyframes bounceInDown {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes bounceInDown {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    -ms-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    -ms-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    -ms-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    -ms-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.bounceInDown {
  -webkit-animation-name: bounceInDown;
  animation-name: bounceInDown
}

@-webkit-keyframes bounceInLeft {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes bounceInLeft {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    -ms-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    -ms-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    -ms-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    -ms-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  animation-name: bounceInLeft
}

@-webkit-keyframes bounceInRight {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes bounceInRight {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    -ms-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    -ms-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    -ms-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    -ms-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.bounceInRight {
  -webkit-animation-name: bounceInRight;
  animation-name: bounceInRight
}

@-webkit-keyframes bounceInUp {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0)
  }
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
}

@keyframes bounceInUp {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    -ms-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    -ms-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    -ms-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    -ms-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0)
  }
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
}

.bounceInUp {
  -webkit-animation-name: bounceInUp;
  animation-name: bounceInUp
}

@-webkit-keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  50%,
  55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
}

@keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  50%,
  55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
}

.bounceOut {
  -webkit-animation-name: bounceOut;
  animation-name: bounceOut;
  -webkit-animation-duration: .75s;
  animation-duration: .75s
}

@-webkit-keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

@keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    -ms-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    -ms-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    -ms-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

.bounceOutDown {
  -webkit-animation-name: bounceOutDown;
  animation-name: bounceOutDown
}

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    -ms-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    -ms-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

.bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
  animation-name: bounceOutLeft
}

@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    -ms-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    -ms-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

.bounceOutRight {
  -webkit-animation-name: bounceOutRight;
  animation-name: bounceOutRight
}

@-webkit-keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

@keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    -ms-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    -ms-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    -ms-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

.bounceOutUp {
  -webkit-animation-name: bounceOutUp;
  animation-name: bounceOutUp
}

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    -ms-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    -ms-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig
}

@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    -ms-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig
}

@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    -ms-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    -ms-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    -ms-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp
}

@-webkit-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    -ms-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig
}

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0
  }
}

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut
}

@-webkit-keyframes fadeOutDown {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}

@keyframes fadeOutDown {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    -ms-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    -ms-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
  animation-name: fadeOutDownBig
}

@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}

@keyframes fadeOutLeft {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}

.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    -ms-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig
}

@-webkit-keyframes fadeOutRight {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}

@keyframes fadeOutRight {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    -ms-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}

.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
  animation-name: fadeOutRight
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    -ms-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
  animation-name: fadeOutRightBig
}

@-webkit-keyframes fadeOutUp {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}

@keyframes fadeOutUp {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    -ms-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

@keyframes fadeOutUpBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    -ms-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
  animation-name: fadeOutUpBig
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  80% {
    -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -ms-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -ms-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  80% {
    -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -ms-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  100% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
}

.animated.flip {
  -webkit-backface-visibility: visible;
  -ms-backface-visibility: visible;
  backface-visibility: visible;
  -webkit-animation-name: flip;
  animation-name: flip
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
}

.flipInX {
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
  animation-name: flipInX
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
}

.flipInY {
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
  animation-name: flipInY
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0
  }
}

.flipOutX {
  -webkit-animation-name: flipOutX;
  animation-name: flipOutX;
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0
  }
}

.flipOutY {
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipOutY;
  animation-name: flipOutY;
  -webkit-animation-duration: .75s;
  animation-duration: .75s
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1
  }
  100% {
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    -ms-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(20deg);
    -ms-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(-5deg);
    -ms-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.lightSpeedIn {
  -webkit-animation-name: lightSpeedIn;
  animation-name: lightSpeedIn;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out
}

@-webkit-keyframes lightSpeedOut {
  0% {
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0
  }
}

@keyframes lightSpeedOut {
  0% {
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    -ms-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0
  }
}

.lightSpeedOut {
  -webkit-animation-name: lightSpeedOut;
  animation-name: lightSpeedOut;
  -webkit-animation-timing-function: ease-in;
  animation-timing-function: ease-in
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    -ms-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateIn {
  -webkit-animation-name: rotateIn;
  animation-name: rotateIn
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    -ms-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
  animation-name: rotateInDownLeft
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    -ms-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
  animation-name: rotateInDownRight
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    -ms-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
  animation-name: rotateInUpLeft
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    -ms-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
  animation-name: rotateInUpRight
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    -ms-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0
  }
}

.rotateOut {
  -webkit-animation-name: rotateOut;
  animation-name: rotateOut
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate(0, 0, 1, 45deg);
    transform: rotate(0, 0, 1, 45deg);
    opacity: 0
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate(0, 0, 1, 45deg);
    -ms-transform: rotate(0, 0, 1, 45deg);
    transform: rotate(0, 0, 1, 45deg);
    opacity: 0
  }
}

.rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
  animation-name: rotateOutDownLeft
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    -ms-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

.rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
  animation-name: rotateOutDownRight
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    -ms-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

.rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
  animation-name: rotateOutUpLeft
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    -ms-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0
  }
}

.rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
  animation-name: rotateOutUpRight
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  20%,
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  40%,
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0
  }
}

@keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  20%,
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    -ms-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  40%,
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    -ms-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(0, 700px, 0);
    -ms-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0
  }
}

.hinge {
  -webkit-animation-name: hinge;
  animation-name: hinge
}

@-webkit-keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    -ms-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.rollIn {
  -webkit-animation-name: rollIn;
  animation-name: rollIn
}

@-webkit-keyframes rollOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
  }
}

@keyframes rollOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    -ms-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
  }
}

.rollOut {
  -webkit-animation-name: rollOut;
  animation-name: rollOut
}

@-webkit-keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  50% {
    opacity: 1
  }
}

@keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  50% {
    opacity: 1
  }
}

.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn
}

@-webkit-keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInDown {
  -webkit-animation-name: zoomInDown;
  animation-name: zoomInDown
}

@-webkit-keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInLeft {
  -webkit-animation-name: zoomInLeft;
  animation-name: zoomInLeft
}

@-webkit-keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInRight {
  -webkit-animation-name: zoomInRight;
  animation-name: zoomInRight
}

@-webkit-keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInUp {
  -webkit-animation-name: zoomInUp;
  animation-name: zoomInUp
}

@-webkit-keyframes zoomOut {
  0% {
    opacity: 1
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  100% {
    opacity: 0
  }
}

@keyframes zoomOut {
  0% {
    opacity: 1
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  100% {
    opacity: 0
  }
}

.zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut
}

@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomOutDown {
  -webkit-animation-name: zoomOutDown;
  animation-name: zoomOutDown
}

@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center
  }
}

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
    -ms-transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    -ms-transform-origin: left center;
    transform-origin: left center
  }
}

.zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
  animation-name: zoomOutLeft
}

@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
    transform: scale(0.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center
  }
}

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
    -ms-transform: scale(0.1) translate3d(2000px, 0, 0);
    transform: scale(0.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    -ms-transform-origin: right center;
    transform-origin: right center
  }
}

.zoomOutRight {
  -webkit-animation-name: zoomOutRight;
  animation-name: zoomOutRight
}

@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomOutUp {
  -webkit-animation-name: zoomOutUp;
  animation-name: zoomOutUp
}


/*!

  === ANIMATE STYLES === 

Animate.css - http://daneden.me/animate
Licensed under the MIT license - http://opensource.org/licenses/MIT

Copyright (c) 2014 Daniel Eden

*/

.animated {
  -webkit-animation-duration: 1s;
  animation-duration: 1s;
  -webkit-animation-fill-mode: both;
  animation-fill-mode: both
}

.animated.infinite {
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite
}

.animated.hinge {
  -webkit-animation-duration: 2s;
  animation-duration: 2s
}

@-webkit-keyframes bounce {
  0%,
  20%,
  53%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  40%,
  43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0)
  }
  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0)
  }
}

@keyframes bounce {
  0%,
  20%,
  53%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  40%,
  43% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -30px, 0);
    -ms-transform: translate3d(0, -30px, 0);
    transform: translate3d(0, -30px, 0)
  }
  70% {
    -webkit-transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    transition-timing-function: cubic-bezier(0.755, 0.05, 0.855, 0.06);
    -webkit-transform: translate3d(0, -15px, 0);
    -ms-transform: translate3d(0, -15px, 0);
    transform: translate3d(0, -15px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -4px, 0);
    -ms-transform: translate3d(0, -4px, 0);
    transform: translate3d(0, -4px, 0)
  }
}

.bounce {
  -webkit-animation-name: bounce;
  animation-name: bounce;
  -webkit-transform-origin: center bottom;
  -ms-transform-origin: center bottom;
  transform-origin: center bottom
}

@-webkit-keyframes flash {
  0%,
  50%,
  100% {
    opacity: 1
  }
  25%,
  75% {
    opacity: 0
  }
}

@keyframes flash {
  0%,
  50%,
  100% {
    opacity: 1
  }
  25%,
  75% {
    opacity: 0
  }
}

.flash {
  -webkit-animation-name: flash;
  animation-name: flash
}

@-webkit-keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes pulse {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  50% {
    -webkit-transform: scale3d(1.05, 1.05, 1.05);
    -ms-transform: scale3d(1.05, 1.05, 1.05);
    transform: scale3d(1.05, 1.05, 1.05)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.pulse {
  -webkit-animation-name: pulse;
  animation-name: pulse
}

@-webkit-keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1)
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1)
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1)
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1)
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes rubberBand {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  30% {
    -webkit-transform: scale3d(1.25, 0.75, 1);
    -ms-transform: scale3d(1.25, 0.75, 1);
    transform: scale3d(1.25, 0.75, 1)
  }
  40% {
    -webkit-transform: scale3d(0.75, 1.25, 1);
    -ms-transform: scale3d(0.75, 1.25, 1);
    transform: scale3d(0.75, 1.25, 1)
  }
  50% {
    -webkit-transform: scale3d(1.15, 0.85, 1);
    -ms-transform: scale3d(1.15, 0.85, 1);
    transform: scale3d(1.15, 0.85, 1)
  }
  65% {
    -webkit-transform: scale3d(0.95, 1.05, 1);
    -ms-transform: scale3d(0.95, 1.05, 1);
    transform: scale3d(0.95, 1.05, 1)
  }
  75% {
    -webkit-transform: scale3d(1.05, 0.95, 1);
    -ms-transform: scale3d(1.05, 0.95, 1);
    transform: scale3d(1.05, 0.95, 1)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.rubberBand {
  -webkit-animation-name: rubberBand;
  animation-name: rubberBand
}

@-webkit-keyframes shake {
  0%,
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
}

@keyframes shake {
  0%,
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
  10%,
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: translate3d(-10px, 0, 0);
    -ms-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  20%,
  40%,
  60%,
  80% {
    -webkit-transform: translate3d(10px, 0, 0);
    -ms-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
}

.shake {
  -webkit-animation-name: shake;
  animation-name: shake
}

@-webkit-keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg)
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg)
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg)
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg)
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg)
  }
}

@keyframes swing {
  20% {
    -webkit-transform: rotate3d(0, 0, 1, 15deg);
    -ms-transform: rotate3d(0, 0, 1, 15deg);
    transform: rotate3d(0, 0, 1, 15deg)
  }
  40% {
    -webkit-transform: rotate3d(0, 0, 1, -10deg);
    -ms-transform: rotate3d(0, 0, 1, -10deg);
    transform: rotate3d(0, 0, 1, -10deg)
  }
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 5deg);
    -ms-transform: rotate3d(0, 0, 1, 5deg);
    transform: rotate3d(0, 0, 1, 5deg)
  }
  80% {
    -webkit-transform: rotate3d(0, 0, 1, -5deg);
    -ms-transform: rotate3d(0, 0, 1, -5deg);
    transform: rotate3d(0, 0, 1, -5deg)
  }
  100% {
    -webkit-transform: rotate3d(0, 0, 1, 0deg);
    -ms-transform: rotate3d(0, 0, 1, 0deg);
    transform: rotate3d(0, 0, 1, 0deg)
  }
}

.swing {
  -webkit-transform-origin: top center;
  -ms-transform-origin: top center;
  transform-origin: top center;
  -webkit-animation-name: swing;
  animation-name: swing
}

@-webkit-keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  10%,
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
  }
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
  }
  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes tada {
  0% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
  10%,
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    -ms-transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(0.9, 0.9, 0.9) rotate3d(0, 0, 1, -3deg)
  }
  30%,
  50%,
  70%,
  90% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, 3deg)
  }
  40%,
  60%,
  80% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    -ms-transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg);
    transform: scale3d(1.1, 1.1, 1.1) rotate3d(0, 0, 1, -3deg)
  }
  100% {
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.tada {
  -webkit-animation-name: tada;
  animation-name: tada
}

@-webkit-keyframes wobble {
  0% {
    -webkit-transform: none;
    transform: none
  }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
  }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
  }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
  }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
  }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes wobble {
  0% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
  15% {
    -webkit-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    -ms-transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg);
    transform: translate3d(-25%, 0, 0) rotate3d(0, 0, 1, -5deg)
  }
  30% {
    -webkit-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    -ms-transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg);
    transform: translate3d(20%, 0, 0) rotate3d(0, 0, 1, 3deg)
  }
  45% {
    -webkit-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    -ms-transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg);
    transform: translate3d(-15%, 0, 0) rotate3d(0, 0, 1, -3deg)
  }
  60% {
    -webkit-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    -ms-transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg);
    transform: translate3d(10%, 0, 0) rotate3d(0, 0, 1, 2deg)
  }
  75% {
    -webkit-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    -ms-transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg);
    transform: translate3d(-5%, 0, 0) rotate3d(0, 0, 1, -1deg)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.wobble {
  -webkit-animation-name: wobble;
  animation-name: wobble
}

@-webkit-keyframes bounceIn {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03)
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97)
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

@keyframes bounceIn {
  0%,
  20%,
  40%,
  60%,
  80%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  20% {
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  40% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(1.03, 1.03, 1.03);
    -ms-transform: scale3d(1.03, 1.03, 1.03);
    transform: scale3d(1.03, 1.03, 1.03)
  }
  80% {
    -webkit-transform: scale3d(0.97, 0.97, 0.97);
    -ms-transform: scale3d(0.97, 0.97, 0.97);
    transform: scale3d(0.97, 0.97, 0.97)
  }
  100% {
    opacity: 1;
    -webkit-transform: scale3d(1, 1, 1);
    -ms-transform: scale3d(1, 1, 1);
    transform: scale3d(1, 1, 1)
  }
}

.bounceIn {
  -webkit-animation-name: bounceIn;
  animation-name: bounceIn;
  -webkit-animation-duration: .75s;
  animation-duration: .75s
}

@-webkit-keyframes bounceInDown {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes bounceInDown {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -3000px, 0);
    -ms-transform: translate3d(0, -3000px, 0);
    transform: translate3d(0, -3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, 25px, 0);
    -ms-transform: translate3d(0, 25px, 0);
    transform: translate3d(0, 25px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, -10px, 0);
    -ms-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, 5px, 0);
    -ms-transform: translate3d(0, 5px, 0);
    transform: translate3d(0, 5px, 0)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.bounceInDown {
  -webkit-animation-name: bounceInDown;
  animation-name: bounceInDown
}

@-webkit-keyframes bounceInLeft {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes bounceInLeft {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-3000px, 0, 0);
    -ms-transform: translate3d(-3000px, 0, 0);
    transform: translate3d(-3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(25px, 0, 0);
    -ms-transform: translate3d(25px, 0, 0);
    transform: translate3d(25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(-10px, 0, 0);
    -ms-transform: translate3d(-10px, 0, 0);
    transform: translate3d(-10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(5px, 0, 0);
    -ms-transform: translate3d(5px, 0, 0);
    transform: translate3d(5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.bounceInLeft {
  -webkit-animation-name: bounceInLeft;
  animation-name: bounceInLeft
}

@-webkit-keyframes bounceInRight {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    transform: none
  }
}

@keyframes bounceInRight {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(3000px, 0, 0);
    -ms-transform: translate3d(3000px, 0, 0);
    transform: translate3d(3000px, 0, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(-25px, 0, 0);
    -ms-transform: translate3d(-25px, 0, 0);
    transform: translate3d(-25px, 0, 0)
  }
  75% {
    -webkit-transform: translate3d(10px, 0, 0);
    -ms-transform: translate3d(10px, 0, 0);
    transform: translate3d(10px, 0, 0)
  }
  90% {
    -webkit-transform: translate3d(-5px, 0, 0);
    -ms-transform: translate3d(-5px, 0, 0);
    transform: translate3d(-5px, 0, 0)
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.bounceInRight {
  -webkit-animation-name: bounceInRight;
  animation-name: bounceInRight
}

@-webkit-keyframes bounceInUp {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0)
  }
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
}

@keyframes bounceInUp {
  0%,
  60%,
  75%,
  90%,
  100% {
    -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
    transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1)
  }
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 3000px, 0);
    -ms-transform: translate3d(0, 3000px, 0);
    transform: translate3d(0, 3000px, 0)
  }
  60% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    -ms-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  75% {
    -webkit-transform: translate3d(0, 10px, 0);
    -ms-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  90% {
    -webkit-transform: translate3d(0, -5px, 0);
    -ms-transform: translate3d(0, -5px, 0);
    transform: translate3d(0, -5px, 0)
  }
  100% {
    -webkit-transform: translate3d(0, 0, 0);
    -ms-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0)
  }
}

.bounceInUp {
  -webkit-animation-name: bounceInUp;
  animation-name: bounceInUp
}

@-webkit-keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  50%,
  55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
}

@keyframes bounceOut {
  20% {
    -webkit-transform: scale3d(0.9, 0.9, 0.9);
    -ms-transform: scale3d(0.9, 0.9, 0.9);
    transform: scale3d(0.9, 0.9, 0.9)
  }
  50%,
  55% {
    opacity: 1;
    -webkit-transform: scale3d(1.1, 1.1, 1.1);
    -ms-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
}

.bounceOut {
  -webkit-animation-name: bounceOut;
  animation-name: bounceOut;
  -webkit-animation-duration: .75s;
  animation-duration: .75s
}

@-webkit-keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

@keyframes bounceOutDown {
  20% {
    -webkit-transform: translate3d(0, 10px, 0);
    -ms-transform: translate3d(0, 10px, 0);
    transform: translate3d(0, 10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, -20px, 0);
    -ms-transform: translate3d(0, -20px, 0);
    transform: translate3d(0, -20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    -ms-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

.bounceOutDown {
  -webkit-animation-name: bounceOutDown;
  animation-name: bounceOutDown
}

@-webkit-keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

@keyframes bounceOutLeft {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(20px, 0, 0);
    -ms-transform: translate3d(20px, 0, 0);
    transform: translate3d(20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    -ms-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

.bounceOutLeft {
  -webkit-animation-name: bounceOutLeft;
  animation-name: bounceOutLeft
}

@-webkit-keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

@keyframes bounceOutRight {
  20% {
    opacity: 1;
    -webkit-transform: translate3d(-20px, 0, 0);
    -ms-transform: translate3d(-20px, 0, 0);
    transform: translate3d(-20px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    -ms-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

.bounceOutRight {
  -webkit-animation-name: bounceOutRight;
  animation-name: bounceOutRight
}

@-webkit-keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

@keyframes bounceOutUp {
  20% {
    -webkit-transform: translate3d(0, -10px, 0);
    -ms-transform: translate3d(0, -10px, 0);
    transform: translate3d(0, -10px, 0)
  }
  40%,
  45% {
    opacity: 1;
    -webkit-transform: translate3d(0, 20px, 0);
    -ms-transform: translate3d(0, 20px, 0);
    transform: translate3d(0, 20px, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    -ms-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

.bounceOutUp {
  -webkit-animation-name: bounceOutUp;
  animation-name: bounceOutUp
}

@-webkit-keyframes fadeIn {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

@keyframes fadeIn {
  0% {
    opacity: 0
  }
  100% {
    opacity: 1
  }
}

.fadeIn {
  -webkit-animation-name: fadeIn;
  animation-name: fadeIn
}

@-webkit-keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInDown {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    -ms-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInDown {
  -webkit-animation-name: fadeInDown;
  animation-name: fadeInDown
}

@-webkit-keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInDownBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    -ms-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInDownBig {
  -webkit-animation-name: fadeInDownBig;
  animation-name: fadeInDownBig
}

@-webkit-keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInLeft {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInLeft {
  -webkit-animation-name: fadeInLeft;
  animation-name: fadeInLeft
}

@-webkit-keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInLeftBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    -ms-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInLeftBig {
  -webkit-animation-name: fadeInLeftBig;
  animation-name: fadeInLeftBig
}

@-webkit-keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInRight {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    -ms-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInRight {
  -webkit-animation-name: fadeInRight;
  animation-name: fadeInRight
}

@-webkit-keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInRightBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    -ms-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInRightBig {
  -webkit-animation-name: fadeInRightBig;
  animation-name: fadeInRightBig
}

@-webkit-keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInUp {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    -ms-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInUp {
  -webkit-animation-name: fadeInUp;
  animation-name: fadeInUp
}

@-webkit-keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes fadeInUpBig {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    -ms-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.fadeInUpBig {
  -webkit-animation-name: fadeInUpBig;
  animation-name: fadeInUpBig
}

@-webkit-keyframes fadeOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0
  }
}

@keyframes fadeOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0
  }
}

.fadeOut {
  -webkit-animation-name: fadeOut;
  animation-name: fadeOut
}

@-webkit-keyframes fadeOutDown {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}

@keyframes fadeOutDown {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 100%, 0);
    -ms-transform: translate3d(0, 100%, 0);
    transform: translate3d(0, 100%, 0)
  }
}

.fadeOutDown {
  -webkit-animation-name: fadeOutDown;
  animation-name: fadeOutDown
}

@-webkit-keyframes fadeOutDownBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

@keyframes fadeOutDownBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, 2000px, 0);
    -ms-transform: translate3d(0, 2000px, 0);
    transform: translate3d(0, 2000px, 0)
  }
}

.fadeOutDownBig {
  -webkit-animation-name: fadeOutDownBig;
  animation-name: fadeOutDownBig
}

@-webkit-keyframes fadeOutLeft {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}

@keyframes fadeOutLeft {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0);
    -ms-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0)
  }
}

.fadeOutLeft {
  -webkit-animation-name: fadeOutLeft;
  animation-name: fadeOutLeft
}

@-webkit-keyframes fadeOutLeftBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

@keyframes fadeOutLeftBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(-2000px, 0, 0);
    -ms-transform: translate3d(-2000px, 0, 0);
    transform: translate3d(-2000px, 0, 0)
  }
}

.fadeOutLeftBig {
  -webkit-animation-name: fadeOutLeftBig;
  animation-name: fadeOutLeftBig
}

@-webkit-keyframes fadeOutRight {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}

@keyframes fadeOutRight {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0);
    -ms-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0)
  }
}

.fadeOutRight {
  -webkit-animation-name: fadeOutRight;
  animation-name: fadeOutRight
}

@-webkit-keyframes fadeOutRightBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

@keyframes fadeOutRightBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(2000px, 0, 0);
    -ms-transform: translate3d(2000px, 0, 0);
    transform: translate3d(2000px, 0, 0)
  }
}

.fadeOutRightBig {
  -webkit-animation-name: fadeOutRightBig;
  animation-name: fadeOutRightBig
}

@-webkit-keyframes fadeOutUp {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}

@keyframes fadeOutUp {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -100%, 0);
    -ms-transform: translate3d(0, -100%, 0);
    transform: translate3d(0, -100%, 0)
  }
}

.fadeOutUp {
  -webkit-animation-name: fadeOutUp;
  animation-name: fadeOutUp
}

@-webkit-keyframes fadeOutUpBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

@keyframes fadeOutUpBig {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(0, -2000px, 0);
    -ms-transform: translate3d(0, -2000px, 0);
    transform: translate3d(0, -2000px, 0)
  }
}

.fadeOutUpBig {
  -webkit-animation-name: fadeOutUpBig;
  animation-name: fadeOutUpBig
}

@-webkit-keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  80% {
    -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
}

@keyframes flip {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -360deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  40% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -ms-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -190deg);
    -webkit-animation-timing-function: ease-out;
    animation-timing-function: ease-out
  }
  50% {
    -webkit-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -ms-transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    transform: perspective(400px) translate3d(0, 0, 150px) rotate3d(0, 1, 0, -170deg);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  80% {
    -webkit-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -ms-transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    transform: perspective(400px) scale3d(0.95, 0.95, 0.95);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
  100% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px);
    -webkit-animation-timing-function: ease-in;
    animation-timing-function: ease-in
  }
}

.animated.flip {
  -webkit-backface-visibility: visible;
  -ms-backface-visibility: visible;
  backface-visibility: visible;
  -webkit-animation-name: flip;
  animation-name: flip
}

@-webkit-keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}

@keyframes flipInX {
  0% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, -5deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
}

.flipInX {
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInX;
  animation-name: flipInX
}

@-webkit-keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
}

@keyframes flipInY {
  0% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in;
    opacity: 0
  }
  40% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -20deg);
    -webkit-transition-timing-function: ease-in;
    transition-timing-function: ease-in
  }
  60% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 10deg);
    opacity: 1
  }
  80% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -5deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -5deg)
  }
  100% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
}

.flipInY {
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipInY;
  animation-name: flipInY
}

@-webkit-keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0
  }
}

@keyframes flipOutX {
  0% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    transform: perspective(400px) rotate3d(1, 0, 0, -20deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    transform: perspective(400px) rotate3d(1, 0, 0, 90deg);
    opacity: 0
  }
}

.flipOutX {
  -webkit-animation-name: flipOutX;
  animation-name: flipOutX;
  -webkit-animation-duration: .75s;
  animation-duration: .75s;
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important
}

@-webkit-keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0
  }
}

@keyframes flipOutY {
  0% {
    -webkit-transform: perspective(400px);
    -ms-transform: perspective(400px);
    transform: perspective(400px)
  }
  30% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    transform: perspective(400px) rotate3d(0, 1, 0, -15deg);
    opacity: 1
  }
  100% {
    -webkit-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    -ms-transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    transform: perspective(400px) rotate3d(0, 1, 0, 90deg);
    opacity: 0
  }
}

.flipOutY {
  -webkit-backface-visibility: visible !important;
  -ms-backface-visibility: visible !important;
  backface-visibility: visible !important;
  -webkit-animation-name: flipOutY;
  animation-name: flipOutY;
  -webkit-animation-duration: .75s;
  animation-duration: .75s
}

@-webkit-keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1
  }
  100% {
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes lightSpeedIn {
  0% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(-30deg);
    -ms-transform: translate3d(100%, 0, 0) skewX(-30deg);
    transform: translate3d(100%, 0, 0) skewX(-30deg);
    opacity: 0
  }
  60% {
    -webkit-transform: skewX(20deg);
    -ms-transform: skewX(20deg);
    transform: skewX(20deg);
    opacity: 1
  }
  80% {
    -webkit-transform: skewX(-5deg);
    -ms-transform: skewX(-5deg);
    transform: skewX(-5deg);
    opacity: 1
  }
  100% {
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.lightSpeedIn {
  -webkit-animation-name: lightSpeedIn;
  animation-name: lightSpeedIn;
  -webkit-animation-timing-function: ease-out;
  animation-timing-function: ease-out
}

@-webkit-keyframes lightSpeedOut {
  0% {
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0
  }
}

@keyframes lightSpeedOut {
  0% {
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(100%, 0, 0) skewX(30deg);
    -ms-transform: translate3d(100%, 0, 0) skewX(30deg);
    transform: translate3d(100%, 0, 0) skewX(30deg);
    opacity: 0
  }
}

.lightSpeedOut {
  -webkit-animation-name: lightSpeedOut;
  animation-name: lightSpeedOut;
  -webkit-animation-timing-function: ease-in;
  animation-timing-function: ease-in
}

@-webkit-keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateIn {
  0% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, -200deg);
    -ms-transform: rotate3d(0, 0, 1, -200deg);
    transform: rotate3d(0, 0, 1, -200deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateIn {
  -webkit-animation-name: rotateIn;
  animation-name: rotateIn
}

@-webkit-keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    -ms-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInDownLeft {
  -webkit-animation-name: rotateInDownLeft;
  animation-name: rotateInDownLeft
}

@-webkit-keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    -ms-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInDownRight {
  -webkit-animation-name: rotateInDownRight;
  animation-name: rotateInDownRight
}

@-webkit-keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, 45deg);
    -ms-transform: rotate3d(0, 0, 1, 45deg);
    transform: rotate3d(0, 0, 1, 45deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInUpLeft {
  -webkit-animation-name: rotateInUpLeft;
  animation-name: rotateInUpLeft
}

@-webkit-keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    transform: none;
    opacity: 1
  }
}

@keyframes rotateInUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -90deg);
    -ms-transform: rotate3d(0, 0, 1, -90deg);
    transform: rotate3d(0, 0, 1, -90deg);
    opacity: 0
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none;
    opacity: 1
  }
}

.rotateInUpRight {
  -webkit-animation-name: rotateInUpRight;
  animation-name: rotateInUpRight
}

@-webkit-keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
    transform-origin: center;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0
  }
}

@keyframes rotateOut {
  0% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: center;
    -ms-transform-origin: center;
    transform-origin: center;
    -webkit-transform: rotate3d(0, 0, 1, 200deg);
    -ms-transform: rotate3d(0, 0, 1, 200deg);
    transform: rotate3d(0, 0, 1, 200deg);
    opacity: 0
  }
}

.rotateOut {
  -webkit-animation-name: rotateOut;
  animation-name: rotateOut
}

@-webkit-keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate(0, 0, 1, 45deg);
    transform: rotate(0, 0, 1, 45deg);
    opacity: 0
  }
}

@keyframes rotateOutDownLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate(0, 0, 1, 45deg);
    -ms-transform: rotate(0, 0, 1, 45deg);
    transform: rotate(0, 0, 1, 45deg);
    opacity: 0
  }
}

.rotateOutDownLeft {
  -webkit-animation-name: rotateOutDownLeft;
  animation-name: rotateOutDownLeft
}

@-webkit-keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

@keyframes rotateOutDownRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    -ms-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

.rotateOutDownRight {
  -webkit-animation-name: rotateOutDownRight;
  animation-name: rotateOutDownRight
}

@-webkit-keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

@keyframes rotateOutUpLeft {
  0% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: left bottom;
    -ms-transform-origin: left bottom;
    transform-origin: left bottom;
    -webkit-transform: rotate3d(0, 0, 1, -45deg);
    -ms-transform: rotate3d(0, 0, 1, -45deg);
    transform: rotate3d(0, 0, 1, -45deg);
    opacity: 0
  }
}

.rotateOutUpLeft {
  -webkit-animation-name: rotateOutUpLeft;
  animation-name: rotateOutUpLeft
}

@-webkit-keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0
  }
}

@keyframes rotateOutUpRight {
  0% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    opacity: 1
  }
  100% {
    -webkit-transform-origin: right bottom;
    -ms-transform-origin: right bottom;
    transform-origin: right bottom;
    -webkit-transform: rotate3d(0, 0, 1, 90deg);
    -ms-transform: rotate3d(0, 0, 1, 90deg);
    transform: rotate3d(0, 0, 1, 90deg);
    opacity: 0
  }
}

.rotateOutUpRight {
  -webkit-animation-name: rotateOutUpRight;
  animation-name: rotateOutUpRight
}

@-webkit-keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  20%,
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  40%,
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0
  }
}

@keyframes hinge {
  0% {
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  20%,
  60% {
    -webkit-transform: rotate3d(0, 0, 1, 80deg);
    -ms-transform: rotate3d(0, 0, 1, 80deg);
    transform: rotate3d(0, 0, 1, 80deg);
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out
  }
  40%,
  80% {
    -webkit-transform: rotate3d(0, 0, 1, 60deg);
    -ms-transform: rotate3d(0, 0, 1, 60deg);
    transform: rotate3d(0, 0, 1, 60deg);
    -webkit-transform-origin: top left;
    -ms-transform-origin: top left;
    transform-origin: top left;
    -webkit-animation-timing-function: ease-in-out;
    animation-timing-function: ease-in-out;
    opacity: 1
  }
  100% {
    -webkit-transform: translate3d(0, 700px, 0);
    -ms-transform: translate3d(0, 700px, 0);
    transform: translate3d(0, 700px, 0);
    opacity: 0
  }
}

.hinge {
  -webkit-animation-name: hinge;
  animation-name: hinge
}

@-webkit-keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    transform: none
  }
}

@keyframes rollIn {
  0% {
    opacity: 0;
    -webkit-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    -ms-transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg);
    transform: translate3d(-100%, 0, 0) rotate3d(0, 0, 1, -120deg)
  }
  100% {
    opacity: 1;
    -webkit-transform: none;
    -ms-transform: none;
    transform: none
  }
}

.rollIn {
  -webkit-animation-name: rollIn;
  animation-name: rollIn
}

@-webkit-keyframes rollOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
  }
}

@keyframes rollOut {
  0% {
    opacity: 1
  }
  100% {
    opacity: 0;
    -webkit-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    -ms-transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg);
    transform: translate3d(100%, 0, 0) rotate3d(0, 0, 1, 120deg)
  }
}

.rollOut {
  -webkit-animation-name: rollOut;
  animation-name: rollOut
}

@-webkit-keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  50% {
    opacity: 1
  }
}

@keyframes zoomIn {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  50% {
    opacity: 1
  }
}

.zoomIn {
  -webkit-animation-name: zoomIn;
  animation-name: zoomIn
}

@-webkit-keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInDown {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInDown {
  -webkit-animation-name: zoomInDown;
  animation-name: zoomInDown
}

@-webkit-keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInLeft {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(-1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInLeft {
  -webkit-animation-name: zoomInLeft;
  animation-name: zoomInLeft
}

@-webkit-keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInRight {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(1000px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-10px, 0, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInRight {
  -webkit-animation-name: zoomInRight;
  animation-name: zoomInRight
}

@-webkit-keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomInUp {
  0% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 1000px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  60% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomInUp {
  -webkit-animation-name: zoomInUp;
  animation-name: zoomInUp
}

@-webkit-keyframes zoomOut {
  0% {
    opacity: 1
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  100% {
    opacity: 0
  }
}

@keyframes zoomOut {
  0% {
    opacity: 1
  }
  50% {
    opacity: 0;
    -webkit-transform: scale3d(0.3, 0.3, 0.3);
    -ms-transform: scale3d(0.3, 0.3, 0.3);
    transform: scale3d(0.3, 0.3, 0.3)
  }
  100% {
    opacity: 0
  }
}

.zoomOut {
  -webkit-animation-name: zoomOut;
  animation-name: zoomOut
}

@-webkit-keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomOutDown {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, -60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, 2000px, 0);
    -webkit-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomOutDown {
  -webkit-animation-name: zoomOutDown;
  animation-name: zoomOutDown
}

@-webkit-keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    transform-origin: left center
  }
}

@keyframes zoomOutLeft {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(-2000px, 0, 0);
    -ms-transform: scale(0.1) translate3d(-2000px, 0, 0);
    transform: scale(0.1) translate3d(-2000px, 0, 0);
    -webkit-transform-origin: left center;
    -ms-transform-origin: left center;
    transform-origin: left center
  }
}

.zoomOutLeft {
  -webkit-animation-name: zoomOutLeft;
  animation-name: zoomOutLeft
}

@-webkit-keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
    transform: scale(0.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    transform-origin: right center
  }
}

@keyframes zoomOutRight {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(-42px, 0, 0)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale(0.1) translate3d(2000px, 0, 0);
    -ms-transform: scale(0.1) translate3d(2000px, 0, 0);
    transform: scale(0.1) translate3d(2000px, 0, 0);
    -webkit-transform-origin: right center;
    -ms-transform-origin: right center;
    transform-origin: right center
  }
}

.zoomOutRight {
  -webkit-animation-name: zoomOutRight;
  animation-name: zoomOutRight
}

@-webkit-keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

@keyframes zoomOutUp {
  40% {
    opacity: 1;
    -webkit-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -ms-transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    transform: scale3d(0.475, 0.475, 0.475) translate3d(0, 60px, 0);
    -webkit-animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19)
  }
  100% {
    opacity: 0;
    -webkit-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -ms-transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    transform: scale3d(0.1, 0.1, 0.1) translate3d(0, -2000px, 0);
    -webkit-transform-origin: center bottom;
    -ms-transform-origin: center bottom;
    transform-origin: center bottom;
    -webkit-animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1);
    animation-timing-function: cubic-bezier(0.175, 0.885, 0.32, 1)
  }
}

.zoomOutUp {
  -webkit-animation-name: zoomOutUp;
  animation-name: zoomOutUp
}

img,
video,
canvas {
  max-width: 100%
}

h1.navbar-brand_ {
  margin: -360px 0 0 0;
  padding: 0;
  float: none;
  height: auto;
  position: absolute;
  text-align: center;
  width: 100%;
  top: 50%;
  z-index: 10
}

input[type="text"],
input[type="email"],
input[type="url"],
input[type="password"],
input[type="search"],
textarea {
  color: #666;
  border: 1px solid #ccc;
  -webkit-border-radius: 3px;
  -moz-border-radius: 3px;
  border-radius: 3px;
  display: block;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -moz-box-sizing: border-box;
  width: 80%;
  padding: 6px 12px
}

label {
  display: block;
  font-weight: bold
}

p {
  margin: 0 0 15px
}

.isStuck {
  z-index: 99;
  margin: 0;
  padding: 0 !important;
  -webkit-box-shadow: 0 9px 9px 0 rgba(0, 0, 0, 0.3);
  box-shadow: 0 9px 9px 0 rgba(0, 0, 0, 0.3);
  max-height: 112px
}

.isStuck nav.aq_navbar li a {
  line-height: 44px
}

.isStuck nav.aq_navbar .sub-menu>ul {
  top: 45px
}

.isStuck nav.aq_navbar li span {
  bottom: 3px
}

@media only screen and (max-width: 979px) {
  .isStuck {
    display: none !important
  }
}

body {
  background: #2a2a2a;
  font: 14px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  line-height: 1.428571429;
  color: #b5b5b5
}

a {
  text-decoration: none
}

a:hover {
  text-decoration: none
}

a:focus {
  text-decoration: none;
  background: none
}

a[href^="tel:"] {
  color: inherit;
  text-decoration: none
}

textarea,
input[type="text"],
input[type="email"],
input[type="search"],
input[type="password"] {
  -webkit-appearance: none;
  -moz-appearance: caret
}

p {
  line-height: 1.8em;
  font-size: 1.7em
}

h1.navbar-brand_ {
  margin: -150px 0 0 0;
  padding: 0;
  float: none;
  height: auto;
  position: absolute;
  text-align: center;
  width: 100%;
  top: 50%;
  z-index: 10
}

h1.navbar-brand_ a {
  display: inline-block
}

h1.navbar-brand_ a img {
  width: 100%
}

h2 {
  font: 300 4.000em/1em 'Open Sans';
  text-transform: uppercase;
  margin: 0 0 35px 0;
  color: #2a2a2a
}

h3 {
  font: 2.0em/2.5em 'Open Sans';
  color: #f48d09;
  text-transform: uppercase;
  margin: 0 0 13px 0
}

h4 {
  font: 600 1.8em 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #faf6d0;
  text-shadow: 2px 2px 3px #ad5134;
  margin: 0 0 11px 0
}

.extra-wrap {
  overflow: hidden
}

.content {
  padding: 0;
  background: #ffffff
}

.content.indent {
  padding: 65px 0 0 0;
  background: #ffffff
}

.center {
  text-align: center
}

.main {
  position: relative
}

header {
  position: relative;
  left: 0;
  bottom: 0;
  width: 100%;
  margin: 0;
  padding: 0;
  z-index: 11;
  background: #212121;
  max-height: 176px
}

.bg_box {
  background: url(<?= get_template_directory_uri(); ?>/img/bg_pic.jpg) no-repeat;
  padding: 94px 0 83px 0
}

.bg_box h1.navbar-brand_ {
  margin: 0;
  position: relative;
  top: 0
}

nav.aq_navbar {
  border: none;
  padding: 0;
  margin: 0;
  float: none;
  min-height: 0;
  background: none
}

nav.aq_navbar::after {
  position: absolute;
  left: 0;
  top: 0;
  width: 1px;
  height: 100%;
  background: #1a1a1a;
  content: ''
}

nav.aq_navbar li {
  position: relative;
  font-size: 1.400em;
  line-height: 2.4em;
  padding: 0;
  margin: 0;
  float: left
}

nav.aq_navbar li:after {
  position: absolute;
  right: 0;
  top: 0;
  width: 1px;
  height: 100%;
  background: #1a1a1a;
  content: ''
}

nav.aq_navbar li a {
  position: relative;
  padding: 0;
  font: 1em/7.714em 'Open Sans';
  width: 190px;
  text-align: center;
  color: #ffffff;
  text-transform: uppercase;
  background: #2a2a2a;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

nav.aq_navbar li a:after {
  position: absolute;
  left: 0;
  bottom: 0;
  width: 100%;
  height: 8px;
  background: transparent;
  content: ''
}

nav.aq_navbar li a:before {
  position: absolute;
  left: 0;
  bottom: 8px;
  width: 100%;
  height: 5px;
  background: url(<?= get_template_directory_uri(); ?>/img/tr.png) center 0 no-repeat;
  content: '';
  display: none
}

nav.aq_navbar li.active>a {
  color: #ffffff;
  background: #323232 !important
}

nav.aq_navbar li.active>a:before {
  display: block
}

nav.aq_navbar li.active>a:after {
  background: #09A6F4
}

nav.aq_navbar li.active>span {
  color: #ffffff !important
}

nav.aq_navbar li:hover>a {
  color: #ffffff;
  background: #323232;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

nav.aq_navbar li:hover>a:before {
  display: block
}

nav.aq_navbar li:hover>a:after {
  background: #f48d09
}

nav.aq_navbar li:hover>span {
  color: #ffffff;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

nav.aq_navbar .sfHover>a {
  color: #ffffff;
  background: #323232;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

nav.aq_navbar .sfHover>a:before {
  display: block
}

nav.aq_navbar .sfHover>a:after {
  background: #f48d09
}

nav.aq_navbar .sfHover>span {
  color: #ffffff;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

nav.aq_navbar li span {
  text-align: center;
  position: absolute;
  width: 100%;
  left: 0;
  top: 0;
  color: #ffffff;
  font-size: 12px;
  z-index: 0;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  transition: all 0.35s
}

nav.aq_navbar .sub-menu>ul {
  position: absolute;
  display: none;
  width: 100%;
  top: 105px;
  left: 0;
  list-style: none !important;
  zoom: 1;
  z-index: 11;
  background: #2a2a2a;
  padding: 33px 0;
  margin: 0;
  text-align: center
}

nav.aq_navbar .sub-menu>ul li {
  background: none;
  border: none;
  width: auto;
  float: none;
  margin: 0;
  padding: 0;
  margin-bottom: 6px;
  display: block;
  text-align: center
}

nav.aq_navbar .sub-menu>ul li::after {
  content: none !important;
  display: none !important
}

nav.aq_navbar .sub-menu>ul li:last-child {
  border-bottom: none
}

nav.aq_navbar .sub-menu>ul li a {
  background: none !important;
  padding: 0;
  margin: 0;
  float: none;
  font: 600 14px 'Open Sans';
  color: #ffffff;
  text-transform: uppercase;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  transition: all 0.35s
}

nav.aq_navbar .sub-menu>ul li a:after,
nav.aq_navbar .sub-menu>ul li a:before {
  display: none
}

nav.aq_navbar .sub-menu>ul li span {
  display: inline-block;
  position: absolute;
  right: 10px;
  top: 4px;
  left: auto;
  width: auto !important;
  color: #f48d09;
  font-size: 14px
}

nav.aq_navbar .sub-menu ul>li a:hover {
  text-decoration: none;
  color: #f48d09 !important;
  background: none;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

nav.aq_navbar .sub-menu ul li.sfHover>a {
  text-decoration: none;
  color: #f48d09 !important;
  background: none
}

nav.aq_navbar .sub-menu ul ul {
  position: absolute;
  display: none;
  width: 100%;
  top: -26px;
  left: 100%;
  list-style: none !important;
  zoom: 1;
  z-index: 11;
  background: #f48d09;
  padding: 28px 0;
  margin: 0 0 0 10px;
  text-align: center
}

nav.aq_navbar .sub-menu ul ul::after {
  position: absolute;
  left: -5px;
  top: 13px;
  width: 5px;
  height: 9px;
  background: url(<?= get_template_directory_uri(); ?>/img/tr1.png) left 0 no-repeat;
  content: ''
}

nav.aq_navbar .sub-menu ul ul li {
  position: relative;
  background: none;
  border: none;
  width: auto;
  float: none;
  margin: 0;
  padding: 0;
  margin-bottom: 6px;
  display: block;
  text-align: center
}

nav.aq_navbar .sub-menu ul ul li.tr {
  position: absolute;
  top: 13px;
  left: -5px;
  width: 5px;
  height: 9px;
  background: url(<?= get_template_directory_uri(); ?>/img/triangle1.png) no-repeat
}

nav.aq_navbar .sub-menu ul ul li a {
  background: none !important;
  padding: 0;
  margin: 0;
  float: none;
  font: 600 14px 'Open Sans';
  color: #ffffff;
  text-transform: uppercase;
  -webkit-transition: all 0.35s ease;
  -o-transition: all 0.35s ease;
  transition: all 0.35s ease
}

nav.aq_navbar .sub-menu ul ul li a:after,
nav.aq_navbar .sub-menu ul ul li a:before {
  display: none
}

nav.aq_navbar .sub-menu ul ul li a:hover {
  color: #2a2a2a !important;
  -webkit-transition: all 0.35s ease;
  -o-transition: all 0.35s ease;
  transition: all 0.35s ease
}

.select-menu {
  display: none !important
}

#toTop {
  display: none;
  text-decoration: none;
  position: fixed;
  bottom: 80px;
  right: 30px;
  overflow: hidden;
  border: none;
  z-index: 20;
  width: 27px;
  height: 19px;
  background: url(<?= get_template_directory_uri(); ?>/img/top.png) no-repeat;
  text-indent: -999px
}

#toTop:hover {
  outline: none;
  opacity: 0.5;
  filter: alpha(opacity=50)
}

.who-box {
  padding: 0;
  overflow: hidden
}

.who-box hr {
  margin: 0;
  border-top: 1px solid #e9e9e9
}

.who-box .col-lg-4 {
  margin-bottom: 40px
}

.slogan-box {
  padding: 0 0 88px 0;
  overflow: hidden;
  background: #f4f5f5 url(<?= get_template_directory_uri(); ?>/img/bg_pic0.jpg) no-repeat
}

.slogan-box .box {
  border-top: 19px solid #2a2a2a;
  padding: 90px 0 0 0
}

.slogan-box .box p {
  font: 300 50px/1em 'Open Sans';
  text-transform: uppercase;
  color: #3C94E7
}

.slogan-box .box p span {
  color: #2a2a2a
}

.slogan-box .box p strong {
  font-weight: 300;
  color: #f48d09
}

.slogan-box .box a {
  display: inline-block;
  background: #2a2a2a;
  text-align: center;
  float: right;
  width: 212px;
  height: 137px;
  padding: 25px 0 5px 0;
  font: 300 20px/1em 'Open Sans';
  text-transform: uppercase;
  color: #ffffff;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  border-radius: 0px 38px 0px
}

.slogan-box .box a span {
  color: #f48d09;
  font-size: 38px;
  display: block;
  margin-bottom: 10px;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

.slogan-box .box a:hover {
  background: #f48d09;
  color: #2a2a2a
}

.slogan-box .box a:hover span {
  color: #ffffff;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

.thumb-box2 {
  overflow: hidden;
  padding: 80px 0 0 0
}

.thumb-box2 hr {
  margin: 0;
  border-top: 1px solid #e9e9e9
}

.thumb-box3 {
  overflow: hidden;
  padding: 73px 0 0 0
}

.thumb-box3 p {
  margin-bottom: 36px
}

.thumb-box3 .title {
  font: 300 40px/1em 'Open Sans';
  text-transform: uppercase;
  color: #2a2a2a;
  margin-bottom: 30px
}

.thumb-box3 .description {
  font: 20px/25px 'Open Sans';
  text-transform: uppercase;
  color: #f48d09;
  margin-bottom: 13px
}

.thumb-box3 .col-lg-6 {
  margin-bottom: 80px
}

.thumb-box4 {
  overflow: hidden;
  padding: 102px 0 110px 0;
  background-image: url("../img/nexus2cee_Fill-Sign-App-With-Paper-Form.jpg");
  background-position: 100% top;
  background-size: cover
}

.thumb-testbox1 {
  overflow: hidden;
  padding: 120px 0 110px 0;
  background-image: url("../img/dell-venue-8-pro-apple-wireless-keyboard-medion-md86853-size-comparison.jpg");
  background-position: 100% top;
  background-size: cover
}

.thumb-box p {
  font: 300 6.000em/1em 'Open Sans';
  text-transform: uppercase;
  color: #ffffff;
  float: left;
  line-height: 79px
}

.thumb-box a {
  width: 105px;
  height: 105px;
  display: inline-block;
  background: #f48d09;
  color: #ffffff;
  text-align: center;
  line-height: 105px;
  font-size: 38px;
  float: right;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  border-radius: 0px 38px 0px
}

.thumb-box a:hover {
  background: #fff;
  color: #f48d09
}

.thumb-box5 {
  background: #f7f7f7;
  padding: 40px 0 34px 0;
  overflow: hidden
}

.thumb-box5 p {
  margin: 10px 0 0 0;
  font: 300 20px 'Open Sans';
  text-transform: uppercase;
  display: inline-block;
  color: #344046
}

.thumb-box5 p span {
  font-size: 30px;
  color: #f48d09;
  margin-right: 19px;
  float: left
}

.thumb-box6 {
  overflow: hidden;
  padding: 75px 0 0 0
}

.thumb-box7 {
  background-position: center center;
  position: relative;
  background-image: url(<?= get_template_directory_uri(); ?>/img/bg_pic2.jpg);
  padding: 74px 0 0 0;
  overflow: hidden
}

.thumb-box7 h2 {
  color: #ffffff
}

.thumb-box7 .col-lg-4 {
  margin-bottom: 36px
}

.thumb-box8 {
  padding: 0 0 50px 0;
  overflow: hidden
}

.thumb-box9 {
  background-position: center center;
  position: relative;
  background-image: url(<?= get_template_directory_uri(); ?>/img/bg_pic3.jpg);
  padding: 74px 0 25px 0;
  overflow: hidden
}

.thumb-box9 h2 {
  color: #ffffff
}

.thumb-box9 .col-lg-4 {
  margin-bottom: 36px
}

.slogan-box0 {
  overflow: hidden;
  padding: 0
}

.thumb-box10 hr {
  margin: 20px 0 0 0;
  border-top: 1px solid #e9e9e9
}

.thumb-box11 {
  overflow: hidden;
  padding: 73px 0 30px 0
}

.thumb-box11 .col-lg-4 {
  margin-bottom: 30px
}

.thumb-box12 {
  overflow: hidden;
  padding: 0 0 124px 0
}

.thumb-box13 {
  background-position: center center;
  position: relative;
  background-image: url(<?= get_template_directory_uri(); ?>/img/bg_pic4.jpg);
  padding: 74px 0 13px 0;
  overflow: hidden
}

.thumb-box13 h2 {
  color: #ffffff
}

.errorBox {
  overflow: hidden;
  padding-bottom: 135px
}

.errorBox h2 {
  padding: 0;
  border-bottom: none
}

.thumb-pad1 {
  margin: 0 0 64px 0;
  overflow: hidden
}

.thumb-pad1 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none;
  overflow: hidden
}

.thumb-pad1 .thumbnail .badge {
  border-radius: 0;
  width: 170px;
  height: 170px;
  text-align: center;
  line-height: 16.0em;
  background: #f4f5f5;
  margin-right: 30px;
  float: left
}

.thumb-pad1 .caption {
  padding: 0;
  overflow: hidden;
  color: #b5b5b5
}

.thumb-pad1 .caption .title {
  font: 300 3.0em/1em 'Open Sans';
  color: #2a2a2a;
  margin-bottom: 21px;
  text-transform: uppercase
}

.thumb-pad1 .caption .description {
  font: 2.0em/1em 'Open Sans';
  color: #f48d09;
  margin-bottom: 7px;
  text-transform: uppercase
}

.thumb-pad1 .caption p {
  margin-bottom: 0
}

.thumb-pad2 {
  margin: 0 0 50px 0;
  overflow: hidden
}

.thumb-pad2 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none;
  overflow: hidden
}

.thumb-pad2 .thumbnail .caption {
  padding: 0;
  overflow: hidden
}

.thumb-pad2 .thumbnail .caption h3 {
  font: 300 30px 'Open Sans';
  color: #2a2a2a;
  text-transform: uppercase;
  margin-bottom: 12px
}

.thumb-pad2 figure {
  margin: 0 0 20px 0
}

.thumb-pad2 figure img {
  width: 100%
}

.thumb-pad2-1 {
  margin: 0 0 30px 0;
  padding: 0 0 20px 0;
  background: #20acb8;
  text-align: center
}

.thumb-pad2-1 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none
}

.thumb-pad2-1 .thumbnail .caption {
  padding: 0 45px
}

.thumb-pad2-1 .thumbnail .caption .title {
  font: 300 30px/1em 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-transform: uppercase;
  color: #ffffff
}

.thumb-pad2-1 .thumbnail .caption p {
  color: #ffffff;
  font-size: 14px;
  line-height: 21px;
  margin-bottom: 10px
}

.thumb-pad2-1 .thumbnail .caption a {
  display: inline-block
}

.thumb-pad2-1 .thumbnail .caption a:hover {
  opacity: 0.7;
  filter: alpha(opacity=70)
}

.thumb-pad2-1 figure {
  margin: 0 0 31px 0
}

.thumb-pad2-1 figure img {
  width: 100%
}

.thumb-pad3 {
  margin: 0 0 30px 0;
  padding-bottom: 33px;
  background: #f7f7f7
}

.thumb-pad3 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none;
  overflow: hidden
}

.thumb-pad3 .thumbnail .caption {
  padding: 0 20px;
  overflow: hidden
}

.thumb-pad3 .thumbnail .caption a {
  color: #f48d09;
  font: 20px 'Open Sans';
  text-transform: uppercase;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.thumb-pad3 .thumbnail .caption a:hover {
  color: #2a2a2a
}

.thumb-pad3 .thumbnail .caption p {
  margin: 4px 0 0
}

.thumb-pad3 .thumbnail figure {
  margin: 0 0 23px 0
}

.thumb-pad3 .thumbnail figure img {
  width: 100%
}

.thumb-pad4 {
  margin: 0;
  overflow: hidden
}

.thumb-pad4 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none
}

.thumb-pad4 .thumbnail .caption {
  padding: 0
}

.thumb-pad4 figure {
  margin: 0 0 24px 0
}

.thumb-pad4 figure img {
  width: 100%
}

.thumb-pad5 {
  margin: 0;
  overflow: hidden
}

.thumb-pad5 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none;
  overflow: hidden
}

.thumb-pad5 .thumbnail .caption {
  padding: 0;
  overflow: hidden
}

.thumb-pad5 .thumbnail figure {
  margin: 0 30px 0 0;
  float: left
}

.thumb-pad5 .thumbnail figure img {
  width: 100%
}

.thumb-pad5-1 {
  margin: 0 0 40px 0;
  overflow: hidden;
  text-align: left
}

.thumb-pad5-1 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none
}

.thumb-pad5-1 .thumbnail .caption {
  padding: 0;
  overflow: hidden
}

.thumb-pad5-1 .thumbnail .caption p {
  font: 12px/24px 'Roboto Condensed';
  color: #848484
}

.thumb-pad5-1 figure {
  margin: 0 30px 0 0;
  float: left
}

.thumb-pad5-1 figure img {
  width: 100%
}

.thumb-pad6 {
  margin: 0 0 60px 0
}

.thumb-pad6 .thumbnail {
  position: relative;
  padding: 0;
  margin: 0;
  border: none;
  border-radius: 0;
  box-shadow: none;
  background: none;
  overflow: hidden
}

.thumb-pad6 figure {
  margin: 0 30px 0 0;
  float: left
}

.thumb-pad6 .thumbnail .caption {
  padding: 0;
  overflow: hidden
}

.thumb-pad6 .thumbnail .caption p {
  margin-bottom: 0
}

.thumb-pad6 .thumbnail .caption time {
  color: #ffffff;
  text-transform: uppercase;
  font: 300 30px 'Open Sans'
}

.thumb-pad7 {
  margin: 0 0 100px 0
}

.thumb-pad7 .thumbnail {
  position: relative;
  padding: 0;
  margin: 0;
  border: none;
  border-radius: 0;
  box-shadow: none;
  background: none;
  overflow: hidden
}

.thumb-pad7 figure {
  margin: 0 33px 0 0;
  float: left
}

.thumb-pad7 figure img {
  border-radius: 100%
}

.thumb-pad7 .thumbnail .caption {
  padding: 0;
  overflow: hidden
}

.thumb-pad7 .thumbnail .caption .lnk {
  font: 28px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #47494a;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.thumb-pad7 .thumbnail .caption .lnk:hover {
  color: #f8b968
}

.thumb-pad7 .thumbnail .caption .lnk2 {
  font: 300 14px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #47494a;
  margin-bottom: 29px
}

.thumb-pad7 .thumbnail .caption .lnk2 a {
  color: #47494a;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.thumb-pad7 .thumbnail .caption .lnk2 a:hover {
  color: #f8b968
}

.thumb-pad7 .thumbnail .caption .lnk2 br {
  display: none
}

.thumb-pad7 .thumbnail .caption p {
  margin-bottom: 35px
}

.thumb-pad8 {
  margin: 0 0 30px 0;
  padding: 15px 15px 22px 15px;
  border: 1px solid #edeaea;
  text-align: left
}

.thumb-pad8 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none
}

.thumb-pad8 .thumbnail .caption {
  padding: 0
}

.thumb-pad8 .thumbnail .caption .lnk {
  font: 20px/20px 'Roboto Condensed';
  color: #7d8286;
  text-transform: none;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.thumb-pad8 .thumbnail .caption .lnk:hover {
  color: #53afee
}

.thumb-pad8 .thumbnail .caption p {
  font: 13px/18px 'Roboto Condensed';
  color: #8b9196;
  margin: 0
}

.thumb-pad8 .thumbnail .caption hr {
  border-top: 1px solid #dedfe0;
  margin: 12px 0 13px 0
}

.thumb-pad8 figure {
  margin: 0 0 22px 0
}

.thumb-pad8 figure img {
  width: 100%
}

.thumb-pad9 {
  margin: 0 0 30px 0;
  overflow: hidden;
  text-align: left;
  background: #efefef
}

.thumb-pad9 .thumbnail {
  position: relative;
  margin: 0;
  border-radius: 0;
  box-shadow: none;
  border: none;
  padding: 0;
  background: none
}

.thumb-pad9 .thumbnail .caption {
  padding: 25px 0 0 0;
  overflow: hidden
}

.thumb-pad9 .thumbnail .caption .title {
  color: #333;
  font: 800 14px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.thumb-pad9 .thumbnail .caption .title:hover {
  color: #65c6bb
}

.thumb-pad9 .thumbnail .caption .title a {
  color: #72a80c;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.thumb-pad9 .thumbnail .caption .title a:hover {
  color: #e26a6a
}

.thumb-pad9 .thumbnail .caption .descrip {
  margin: 13px 0 13px 3px;
  display: block;
  overflow: hidden
}

.thumb-pad9 .thumbnail .caption .descrip a {
  font: 14px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #65c6bb;
  margin: 0 30px 0 0;
  float: left;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.thumb-pad9 .thumbnail .caption .descrip a i {
  color: #65c6bb;
  font-size: 12px;
  position: relative;
  top: -2px
}

.thumb-pad9 .thumbnail .caption .descrip a:hover {
  color: #333
}

.thumb-pad9 .thumbnail .caption .descrip br {
  display: none
}

.thumb-pad9 .thumbnail .caption p {
  margin-bottom: 13px
}

.thumb-pad9 figure {
  margin: 0 30px 0 0;
  float: left
}

.btn-default.btn1 {
  box-shadow: none;
  text-decoration: none;
  display: inline-block;
  margin: 0;
  padding: 0 22px 0 0;
  font: 15px/59px 'Open Sans';
  background: #2a2a2a;
  text-transform: uppercase;
  border-radius: 0;
  color: #ffffff;
  float: none;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  transition: all 0.35s
}

.btn-default.btn1 span {
  width: 56px;
  height: 59px;
  display: inline-block;
  text-align: center;
  background: #f48d09 url('<?= get_template_directory_uri(); ?>/img/more_arrow.png') center center no-repeat;
    margin-right: 22px;
    float: left'
}

.btn-default.btn1:hover {
  color: #ffffff;
  background: #f48d09;
  text-decoration: none
}

.btn-default.btn2 {
  box-shadow: none;
  text-decoration: none;
  display: inline-block;
  margin: 0;
  padding: 0 42px;
  font: 15px/50px 'Open Sans';
  background: #f48d09;
  text-transform: uppercase;
  border-radius: 0;
  color: #ffffff;
  float: none;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  transition: all 0.35s
}

.btn-default.btn2:hover {
  color: #ffffff;
  background: #2a2a2a;
  text-decoration: none
}

.btn-default.btn3 {
  box-shadow: none;
  text-decoration: none;
  display: inline-block;
  margin: 0;
  padding: 0 30px;
  font: 600 18px/46px 'Open Sans';
  background: #222;
  border: 1px solid #000000;
  text-transform: uppercase;
  color: #ffffff;
  border-radius: 0;
  float: none;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  transition: all 0.35s
}

.btn-default.btn3:hover {
  color: #222;
  background: transparent;
  text-decoration: none
}

.list1 {
  margin: 0;
  padding: 0;
  list-style: none
}

.list1 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin: 0 0 5px 0
}

.list1 li a {
  font: 600 14px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #2f4d58;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.list1 li a:hover {
  color: #db585e
}

.list2 {
  margin: 0;
  padding: 0;
  list-style: none
}

.list2 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin: 0 0 50px 0
}

.list2 li .badge {
  margin: 0 31px 0 0;
  padding: 4px 0 0 0;
  border-radius: 0;
  background: #f4f5f5;
  text-align: center;
  border: none;
  font: 300 60px/1em 'Open Sans';
  text-transform: uppercase;
  color: #e74c3c;
  width: 100px;
  height: 100px;
  float: left
}

.list2 li .badge span {
  font-size: 30px;
  line-height: 1em;
  display: block;
  margin-top: -3px
}

.list2 li p {
  margin: 5px 0 0 0
}

.list2 li a {
  font: 20px/25px 'Open Sans';
  color: #f48d09;
  text-transform: uppercase;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s
}

.list2 li a:hover {
  color: #2a2a2a
}

.list2-1 {
  margin: 0;
  padding: 0;
  list-style: none
}

.list2-1.indent li a {
  color: #ffffff
}

.list2-1 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin: 0 0 14px 0;
  padding: 0 0 0 26px;
  background: url(<?= get_template_directory_uri(); ?>/img/list_arrow.png) 0 5px no-repeat
}

.list2-1 li a {
  font: 15px 'Open Sans';
  color: #2a2a2a;
  text-transform: uppercase;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.list2-1 li a:hover {
  color: #f48d09
}

.list3 {
  margin: 0;
  padding: 0;
  list-style: none
}

.list3 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin: 0 0 18px 0
}

.list3 li figure {
  margin-bottom: 7px
}

.list3 li a {
  font: 18px/24px 'Open Sans';
  color: #585858;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.list3 li a:hover {
  color: #cb3138
}

.list4 {
  margin: 0;
  padding: 0;
  list-style: none
}

.list4 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin-bottom: 32px;
  overflow: hidden
}

.list4 li time {
  font: 300 30px 'Open Sans';
  color: #2a2a2a;
  text-transform: uppercase;
  margin-bottom: 14px;
  display: block
}

.list4 li p {
  margin-bottom: 0
}

.list5 {
  margin: 0;
  padding: 0;
  list-style: none
}

.list5 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin: 0 0 34px 0;
  overflow: hidden
}

.list5 li figure {
  float: left;
  margin: 7px 20px 0 0
}

.list5 li a {
  font: 300 30px 'Open Sans';
  text-transform: uppercase;
  color: #f7f7f7;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.list5 li a:hover {
  color: #f48d09
}

.list5 li p {
  margin-bottom: 10px
}

.list6 {
  margin: 0 0 18px 0;
  padding: 0;
  list-style: none
}

.list6 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin: 0 0 14px 0;
  padding: 0 0 13px 0;
  border-bottom: 1px solid #c7c7c7
}

.list6 li .title {
  font: 18px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  color: #b5b5b5;
  margin-bottom: 17px;
  padding-left: 30px;
  background: url(<?= get_template_directory_uri(); ?>/img/list_arrow.png) left 9px no-repeat
}

.list6 li p {
  margin-bottom: 0
}

.list6 li:last-child {
  border-bottom: none
}

.list7 {
  margin: 0;
  padding: 0;
  list-style: none;
  overflow: hidden
}

.list7 li {
  font-size: 14px;
  line-height: 1.428571429;
  overflow: hidden;
  margin-bottom: 37px
}

.list7 li .badge {
  margin: 6px 29px 0 0;
  padding: 0;
  border-radius: 100%;
  background: #f48d09;
  text-align: center;
  border: none;
  font: 300 40px/70px 'Open Sans';
  color: #ffffff;
  width: 70px;
  height: 70px;
  float: left
}

.list7 li p {
  margin-bottom: 0;
  color: #bbbaba
}

.list8 {
  margin: 0 0 106px 0;
  padding: 0;
  list-style: none;
  overflow: hidden
}

.list8 li {
  font-size: 14px;
  line-height: 1.428571429;
  margin: 0 0 17px 0
}

.list8 li p {
  margin-bottom: 0
}

#newsletter {
  position: relative;
  overflow: hidden;
  display: inline-block
}

#newsletter .btn-default.btn2 {
  float: left
}

#newsletter input {
  background: none;
  box-shadow: none;
  border: none;
  font: 300 14px/18px 'Open Sans';
  color: #3e454c;
  text-transform: uppercase;
  background: #ffffff;
  height: 50px;
  width: 380px;
  border-radius: 0;
  padding: 16px 22px;
  margin: 0 9px 0 0;
  float: left;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

#newsletter input:focus {
  outline: none;
  border: none
}

#newsletter .error {
  position: absolute;
  bottom: 0;
  right: 12px;
  text-align: right;
  display: block;
  overflow: hidden;
  height: 0px;
  font-size: 10px;
  color: #ff530d;
  text-transform: none;
  font-weight: normal;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

#newsletter label {
  position: relative;
  margin-right: 11px;
  float: left;
  border: none
}

#newsletter label.invalid .error {
  height: 19px
}

#newsletter .success {
  position: absolute;
  left: 0;
  top: 0;
  z-index: 10;
  text-align: center;
  border: none;
  font: 300 14px/18px 'Open Sans';
  color: #3e454c;
  text-transform: uppercase;
  background: #ffffff;
  height: 50px;
  width: 100%;
  border-radius: 0;
  padding: 16px;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}

#search-404 {
  padding: 0;
  margin: 28px 0 0 0;
  position: relative
}

#search-404 .btn2 {
  float: left
}

#search-404 input {
  box-shadow: none;
  border-radius: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0 21px 8px 0;
  width: 380px;
  outline: none;
  border: 1px solid #f7f7f7;
  background: #f7f7f7;
  font: 14px/18px 'Open Sans';
  text-transform: uppercase;
  height: 50px;
  line-height: 18px;
  color: #b5b5b5;
  padding: 15px;
  resize: none;
  float: left
}

#search {
  padding: 0;
  margin: 20px 0 20px 0;
  float: right;
  position: relative
}

#search a {
  display: inline-block;
  position: absolute;
  font-size: 24px;
  color: #ffffff;
  top: 11px;
  right: 14px;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

#search a:hover {
  color: #cb3138
}

#search input {
  box-shadow: none;
  border-radius: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  margin: 0;
  width: 270px;
  outline: none;
  background: #b8b2ad;
  background: rgba(255, 255, 255, 0.4);
  border: none;
  font: 14px 'Open Sans';
  line-height: 18px;
  color: #444;
  padding: 14px 42px 14px 14px;
  height: 48px;
  resize: none
}

.content_map {
  position: relative;
  height: 431px;
  margin-bottom: 74px
}

.google-map-api {
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0
}

#map-canvas {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0
}

#map-canvas img {
  max-width: none !important
}

.gm-wrapper div:first-child div+div+div+div {
  background-color: transparent !important;
  background-color: #000 !important;
  background-color: rgba(0, 0, 0, 0.7) !important
}

.gm-wrapper * {
  box-shadow: 0 0 0 #000 !important;
  background-color: transparent !important
}

.gm-wrapper * p {
  color: #ffffff;
  font-size: 14px
}

.gm-style-iw {
  text-align: center;
  width: 330px !important;
  height: 127px !important;
  right: 0;
  position: absolute;
  left: 0 !important;
  top: 0 !important;
  color: #ffffff;
  padding: 38px 0 0 20px;
  font: 14px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif !important;
  overflow: visible !important
}

.gm-style-iw:after {
  content: '';
  width: 0;
  height: 0;
  top: 100%;
  margin-top: 17px;
  left: 50%;
  margin-left: 5px;
  border-style: solid;
  border-width: 25px 15px 0 15px;
  border-color: #000000;
  border-color: rgba(0, 0, 0, 0.7) transparent transparent transparent;
  position: absolute
}

.gm-style-iw span {
  font-weight: bold;
  display: block;
  font-size: 18px;
  color: #ffffff
}

.info {
  margin-bottom: 50px
}

.info p {
  margin-bottom: 25px
}

.mail {
  color: #b5b5b5;
  font: 14px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif;
  text-decoration: underline;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

.mail:hover {
  color: #f48d09;
  text-decoration: underline
}

footer {
  padding: 35px 0;
  position: relative;
  overflow: hidden;
  background-color: #2a2a2a
}

footer p {
  font: 300 1.4em/1em 'Open Sans';
  color: #9fa6ae;
  margin: 0;
  float: left
}

footer p a {
  color: #9fa6ae;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

footer p a:hover {
  color: #ffffff
}

footer em {
  font-style: normal
}

footer span {
  font-weight: 600;
  color: #ffffff
}

footer ul {
  padding: 0;
  margin: 0;
  list-style: none;
  overflow: hidden;
  float: right
}

footer ul li {
  overflow: hidden;
  width: 35px;
  height: 34px;
  float: left;
  margin-right: 8px
}

footer ul li a:hover img {
  margin-top: -34px
}

@media (min-width: 1220px) {
  .container {
    padding: 0
  }
}

@media (max-width: 1000px) {
  #toTop {
    display: none !important
  }
  header {
    position: relative;
    text-align: center
  }
  h1.navbar-brand_ {
    float: none;
    padding: 0 15px
  }
  .select-menu {
    display: block !important;
    padding: 4px 4px 4px 0;
    margin: 15px 0;
    width: 100%;
    border: 1px solid #323232;
    background: #323232;
    color: #ffffff;
    cursor: pointer;
    height: 30px;
    font-size: 12px;
    vertical-align: middle
  }
  nav.aq_navbar {
    display: block;
    float: none
  }
  nav.aq_navbar .nav {
    display: none
  }
  header {
    background: #fff !important
  }
  .slogan-box {
    background: #f4f5f5;
    text-align: center;
    padding: 0 0 50px 0
  }
  .slogan-box .box {
    padding: 50px 0 0 0
  }
  .slogan-box .box a {
    float: none
  }
  .slogan-box .box p {
    font-size: 35px
  }
  .thumb-box4 {
    text-align: center;
    padding: 60px 0
  }
  .thumb-box4 p {
    float: none;
    font-size: 30px
  }
  .thumb-box4 a {
    float: none
  }
  .thumb-box5 {
    text-align: center
  }
  .thumb-box5 p {
    margin-bottom: 25px
  }
  .thumb-pad4 figure {
    margin: 0 24px 0 0;
    float: left
  }
  .thumb-box7 .col-lg-4 {
    margin-bottom: 60px
  }
  footer {
    text-align: center
  }
  footer p {
    float: none;
    margin-bottom: 15px
  }
  footer ul {
    float: none;
    display: inline-block
  }
  .content_map {
    height: 300px
  }
}

@media (max-width: 626px) {
  .thumb-box5 p span {
    float: none;
    display: inline-block
  }
  #newsletter {
    display: block
  }
  #newsletter .btn-default.btn2 {
    float: none
  }
  #newsletter label {
    float: none;
    margin: 0 0 15px 0;
    width: 100%;
    display: block
  }
  #newsletter input {
    margin: 0;
    float: none;
    width: 100%
  }
  .thumb-pad4 figure {
    margin: 0 0 24px 0;
    float: none
  }
}

@media (max-width: 560px) {
  .errorBox img {
    width: 100%
  }
  .thumb-pad6 figure {
    margin: 0 0 30px 0;
    float: none
  }
}

@media (max-width: 480px) {
  .col-xs-6 {
    width: 100%;
    float: none
  }
  .thumb-pad1 .thumbnail .badge {
    float: none;
    margin: 0 0 20px 0;
    width: 100%
  }
  #search-404 input {
    width: 100%;
    float: none;
    margin-right: 0
  }
  .thumb-pad6 figure img {
    width: 100%
  }
}

@media (max-width: 480px) {
  .col-xs-6 {
    width: 100%;
    float: none
  }
  .thumb-pad1 .thumbnail .badge {
    float: none;
    margin: 0 0 20px 0;
    width: 100%
  }
  #search-404 input {
    width: 100%;
    float: none;
    margin-right: 0
  }
  .thumb-pad6 figure img {
    width: 100%
  }
}

@media (max-width: 320px) {
  .col-xs-4 {
    width: 100%;
    float: none
  }
  .col-xs-6 {
    width: 100%;
    float: none
  }
}

.webprez-video iframe {
  border: none;
  zoom: 1.75;
  -moz-transform: scale(0.95);
  -moz-transform-origin: 0 0;
  width: 100%;
  height: 200px;
  padding: 7px;
  overflow: hidden;
  margin-bottom: 0px
}

iframe {
  padding-left: 19px;
  float: left
}

.webprez-videos {
  padding: 62px 0 12px 0;
  background: #FEFEFE
}

iframe {
  border: none;
  zoom: 0.5;
  -moz-transform: scale(0.95);
  -moz-transform-origin: 0 0;
  width: 100%;
  height: 300px;
  overflow: hidden;
  margin-bottom: 0
}

iframe:before {
  content: '';
  width: 50px;
  height: 100px;
  position: absolute;
  bottom: 0;
  right: 0;
  -webkit-box-shadow: 20px 20px 10px rgba(0, 0, 0, 0.1);
  z-index: -1;
  -webkit-transform: translate(-35px, -40px) skew(0deg, 30deg) rotate(-25deg)
}

.main-content {
  text-align: center;
  padding: 0 8px 10px 8px;
  font-size: 19px;
  text-align: left
}

.main-content header,
.main-content .post-excerpt,
.main-content .post-body {
  padding: 20px
}

.main-content header h1,
.main-content header h3 {
  margin: 0 0 15px;
  padding: 0 0 15px;
  border-bottom: solid 1px #ddd
}

.main-content header h1 {
  font-size: 24px
}

.main-content p {
  font: 300 20px/30px 'Open Sans';
  color: #2a2a2a;
  margin-bottom: 21px
}

ul.aq-list li {
  font: 300 19px/1em 'Open Sans';
  margin: 0 0 35px 0;
  color: #2a2a2a
}

.aq-logo {
  display: inline-block;
  padding: 12px;
  background: rgba(0, 0, 0, 0.2);
  border-radius: 80px
}

.content-wrapper {
  text-align: center
}

.fill-parent {
  width: 100% !important
}

.grid.container .col-md-1,
.grid.container .col-md-6 {
  text-align: center
}

.grid.container .col-md-6 {
  margin-bottom: 4px
}

.quick-container {
  padding: 15px;
  background-color: rgba(255, 255, 255, 0.8);
  border-radius: 6px;
  min-height: 506px;
  display: block;
  border-top: 8px solid #D57E19;
  border-top-left-radius: 30px;
  border-top-right-radius: 30px;
  margin: 20px 0px;
  position: relative
}

#capture-form h2.heading-lg {
  font: 300 26px/1em 'Open Sans';
  text-transform: none;
  text-align: center;
  margin: 0 0 10px 0
}

.quick-container.hide {
  display: none
}

.quick-container.show {
  display: block
}

#capture-container.show {
  display: block
}

#capture-container.hide {
  display: none
}

#carousel.hide {
  display: none
}

#carousel.show {
  display: block
}

.quick-container-white.show {
  display: block
}

.quick-container-white {
  padding: 34px 0px 14px 0px;
  background-color: #fff;
  border-radius: 6px;
  min-height: 507px;
  display: block;
  border-top: 8px solid #D57E19;
  border-top-left-radius: 30px;
  border-top-right-radius: 30px;
  margin: 20px 0px;
  position: relative
}

.company-badge {
  height: 341px
}

.company-badge img {
  width: 100%;
  display: table-cell;
  margin-bottom: 21px;
  vertical-align: middle
}

.company-badge h2 {
  font: 300 45px/1em 'Open Sans';
  text-transform: none;
  margin: 55px 0px;
  color: #2a2a2a;
  text-align: center
}

.company-badge p {
  font: 300 28px/1em 'Open Sans';
  text-transform: none;
  margin: 16px 0 35px 0;
  color: #2a2a2a;
  text-align: center
}

.company-badge .contact-us {
  font: 300 47px/1em 'Open Sans';
  vertical-align: middle;
  text-align: center;
  display: block;
  margin: 17px auto;
  color: #2a2a2a
}

.company-badge strong {
  color: #3c94e7
}

.birthdate h2 {
  font: 300 15px/1em 'Open Sans';
  text-transform: none;
  margin: 0 0 3px 0;
  color: #2a2a2a
}

.birthdate-lg h2 {
  font: 300 15px/1em 'Open Sans';
  text-transform: none;
  margin: 0 0 6px 0;
  color: #2a2a2a
}

.select-box {
  height: 43px;
  text-transform: none;
  margin: 18px 0px;
  cursor: pointer
}

.quick-container .select-box-lg {
  height: 37px;
  text-transform: none;
  margin: 6px 0px;
  cursor: pointer
}

.expand-field-lg {
  margin: 6px 0px
}

.fill-box {
  height: 43px;
  text-transform: none;
  margin: 18px 0px;
  cursor: pointer
}

.fill-box-lg {
  height: 43px;
  text-transform: none;
  margin: 18px 0px;
  cursor: pointer;
  margin-bottom: 0px
}

.zero-margins {
  margin: 0px 0px
}

.header-banner {
  min-height: 568px;
  padding: 40px 0px;
  transition: background 1.5s linear;
  -webkit-backface-visibility: hidden;
  clear: both
}

.about-header-banner {
  min-height: 719px;
  padding: 40px 0px;
  transition: background 1.5s linear;
  clear: both
}

.about-header-banner .banner-text {
  text-align: center;
  margin: 185px 0;
  font: bold 147px/1em "Open Sans";
  color: #fff;
  text-transform: uppercase;
  margin-bottom: 0
}

.about-header-banner .banner-text span.me {
  color: #03fbca
}

.about-header-banner .banner-text span.plan {
  display: block;
  font: bold 34px/1em "Open Sans";
  word-spacing: -3px
}

section {
  clear: both
}

.quick-container h2.heading-lg {
  font: 300 26px/1em 'Open Sans';
  text-transform: none;
  text-align: center;
  margin: 0 0 10px 0
}

.quick-container h2.heading {
  font: 300 26px/1em "Open Sans";
  text-transform: none;
  text-align: center;
  margin: 14px 0 28px 0
}

.agent-header {
  background-color: #fff;
  padding: 0px 0px;
  height: 66px
}

.agent-header .company-name {
  font: 300 2.2em/1.5em "Open Sans";
  padding: 0 44px 0px 0;
  width: 100%;
  text-align: right;
  display: inline-block;
  color: #2A2A2A;
  height: 46px;
  margin: 10px 10px;
  font-weight: bold;
  padding-top: 12px
}

.agent-header .logo {
  width: 280px;
  height: 46px;
  display: block;
  background-size: contain;
  background-repeat: no-repeat;
  background-position: left center;
  margin: 6px 10px;
  text-align: left
}

.agent-phone-container {
  height: 50px;
  position: relative;
  width: 100%
}

.agent-phone {
  right: 0;
  position: absolute;
  height: 47px;
  width: 100%;
  top: -5px;
  font: 300 2.5em/2.2em 'Open Sans';
  text-align: right;
  padding-right: 48px;
  color: #8D8D8D;
  text-shadow: 0 1px rgba(0, 0, 0, 0.8);
  font-weight: bold
}

[data-icon]:after {
  content: attr(data-icon);
  font-family: 'FontomasCustomRegular';
  color: #6a9fab;
  position: absolute;
  left: 10px;
  top: 35px;
  width: 30px
}

.container {
  position: relative
}

.text-info-container {
  position: relative
}

.text-info:before {
  position: absolute;
  left: 0;
  top: -23px;
  width: 100%;
  height: 23px;
  background: url(<?= get_template_directory_uri(); ?>/img/tr2.png) center 0 no-repeat;
  content: ''
}

.text-info .title {
  font: 300 7.5em/1em 'Open Sans';
  color: #fff;
  text-transform: uppercase;
  margin-bottom: 0
}

.text-info .caption {
  position: absolute;
  left: 0;
  width: 100%;
  background: none;
  text-align: left;
  display: block;
  padding: 39px 0px;
  z-index: 0;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box
}

.text-info .description {
  font: 300 11.7em/1em "Open Sans";
  color: #212121;
  text-transform: uppercase;
  margin: 0
}

.text-info {
  height: 293px;
  background-color: #f48d09;
  position: relative
}

.buttom-thumb-box {
  float: left
}

.buttom-thumb-box a {
  margin-top: 80px;
  width: 172px;
  height: 131px;
  display: inline-block;
  background: #f48d09;
  color: #ffffff;
  text-align: center;
  line-height: 1.2em;
  font-size: 2.483em;
  -webkit-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  border-radius: 0px 38px 0px;
  padding-top: 14px
}

span.how-much-need {
  font-size: 1.6em !important;
  color: #5BB75B
}

label {
  display: block;
  font-weight: normal
}

.fa-calculator:before {
  content: "\f1ec"
}

.header-section {
  margin: 0 0 71px 0;
  font-size: 3.4em;
  text-align: left
}

.aq-icon {
  color: #f48d09;
  font-size: 58px !important
}

.insurance-guide {
  color: #A90C0C;
  font-size: 7.4em !important
}

.needs-analyzer {
  color: #373737;
  font-size: 147px !important
}

.header-section.header-linkage {
  color: #09A6F4
}

.aq-slider {
  height: 170px
}

.aq-slider h2 {
  text-align: center;
  margin: 72px 0px
}

.pdf-download {
  font-size: 1.6em !important;
  color: #fff
}

.needs-analyzer-icon {
  font-size: 24px !important;
  color: #fff
}

.needs-analyzer {
  font-size: 2.4em !important;
  color: #fff
}

.btn-link.link {
  box-shadow: none;
  text-decoration: none;
  display: block;
  padding: 0 22px 0 0;
  font: 1.5em/3.6em 'Open Sans';
  background: #2a2a2a;
  text-transform: uppercase;
  border-radius: 0;
  color: #ffffff;
  float: none;
  -webkit-transition: all 0.35s;
  -o-transition: all 0.35s;
  transition: all 0.35s;
  width: 168px;
  margin: 16px auto
}

.btn-link {
  color: #333333;
  background-color: #ffffff;
  border-color: #cccccc
}

.btn-link span {
  width: 36px;
  height: 54px;
  display: inline-block;
  text-align: center;
  margin-right: 22px;
  float: left;
  background: #f48d09;
  line-height: 3.866em;
  content: ""
}

.caption ul li {
  font-size: 1.5em
}

.btn-link.link:hover {
  color: #ffffff;
  background: #09A6F4;
  text-decoration: none
}

.needs-analyzer-bubble {
  text-align: left;
  padding: 13px;
  background-color: #EEE;
  color: #222;
  border-radius: 18px;
  line-height: 1.429em
}

.thumb-pad1 .thumbnail .badge2 {
  border-radius: 0;
  width: 170px;
  height: 170px;
  text-align: center;
  line-height: 161px;
  background: #f4f5f5;
  margin-right: 30px;
  float: left;
  color: #f48d09;
  display: table-cell;
  font-size: 60px;
  border-radius: 100px
}

.scroll-item.red {
  background-color: red !important
}

.scroll-item.blue {
  background-color: blue !important
}

.scroll-item.orange {
  background-color: orange !important
}

.aq-slider {
  height: 400px
}

.aq-slider .outer-container {
  width: 680px;
  width: 100%;
  margin: auto;
  background: #FFFFFF;
  position: relative
}

.aq-slider .outer-container .fd3-wrap {
  overflow: hidden;
  width: 100%;
  padding-bottom: 14px;
  white-space: nowrap;
  padding: 5px 25px;
  position: relative;
  z-index: 1;
  background: #fff
}

.aq-slider .outer-container .fd3-wrap ul {
  margin: 0;
  display: table;
  width: 5800px;
  list-style: none;
  padding: 0;
  top: 0px;
  left: 0px
}

.aq-slider .outer-container .fd3-wrap ul li {
  display: table-cell;
  float: left;
  padding: 5px;
  margin: 0 10px;
  text-align: center;
  margin: 5px;
  white-space: nowrap
}

.aq-slider .outer-container .fd3-wrap ul li .scroll-item {
  width: 150px;
  height: 150px;
  background-color: #ccc;
  white-space: nowrap
}

.aq-slider .outer-container .fd3-wrap ul li .scroll-item img {
  border: none;
  display: block
}

.aq-slider .outer-container .fd3-wrap ul li .scroll-item a {
  display: block;
  text-align: center;
  width: 108px
}

.aq-slider .outer-container .fd3-wrap ul li .scroll-item span.title {
  text-align: center;
  color: #fff
}

.text-info-container {
  position: relative
}

#carouselWrapper {
  width: 100%;
  height: 50%;
  margin-top: 128px;
  position: relative;
  left: 0;
  top: 50%
}

#carousel {
  margin-top: -100px
}

#carousel div {
  text-align: center;
  width: 200px;
  height: 100px;
  float: left;
  position: relative
}

#carousel div img {
  border: none
}

#carousel div span {
  display: none
}

section {
  clear: both
}

#carousel div:hover span {
  background-color: #333;
  color: #fff;
  font-family: Arial, Geneva, SunSans-Regular, sans-serif;
  font-size: 14px;
  line-height: 22px;
  display: inline-block;
  width: 100px;
  padding: 2px 0;
  margin: 0 0 0 -50px;
  position: absolute;
  bottom: 30px;
  left: 50%;
  border-radius: 3px
}

.needs-analyzer-container {
  margin: 50px 0px
}

.needs-analyzer-container h2.na-header {
  font: 300 4.0em/1em "Open Sans";
  text-transform: uppercase;
  margin: 0 0 35px 0;
  color: #2a2a2a;
  text-align: center
}

.needs-analyzer {
  height: 687px;
  padding-top: 0;
  margin: 0;
  background-color: #f4f3f3;
  border-radius: 10px
}

.needs-analyzer ul {
  list-style: none;
  margin: 0;
  padding: 0
}

.needs-analyzer ul li {
  padding: 0;
  margin: 0;
  display: block
}

.needs-analyzer ul li span {
  display: block;
  padding: 19px 27px;
  font: 300 19px/23px "Open Sans";
  text-transform: uppercase
}

.needs-analyzer ul li:first-child span {
  border-top-left-radius: 10px
}

.needs-analyzer ul li:last-child span {
  border-bottom-left-radius: 10px
}

.needs-analyzer ul li span.na-header {
  background: #747e8a;
  color: #fff;
  font-weight: bolder
}

.needs-analyzer ul li span.na-btn {
  background: #93aecd;
  color: #000
}

.needs-analyzer ul li span.na-btn:hover {
  background: #f48d09;
  color: #000
}

.needs-analyzer ul li span.selected {
  background: #f4f3f3;
  color: #000
}

.needs-analyzer ul li span.total-sect.selected {
  background: #2F65A1;
  color: #fff;
  font-weight: bold
}

.needs-analyzer ul li span.na-btn.selected:hover {
  background: #fff;
  color: #000
}

.needs-analyzer ul li span.na-btn.total-sect.selected:hover {
  background: #2F65A1;
  color: #fff;
  font-weight: bold
}

.needs-analyzer ul li span.selected i.aq-fa {
  color: #5c87b8
}

.needs-analyzer ul li span i.aq-fa {
  margin-right: 8px;
  font-size: 31px;
  color: #fff;
  font-weight: normal;
  height: 34px;
  width: 40px
}

.needs-analyzer ul li span span.text {
  margin: 0;
  padding: 0;
  display: inline-block
}

.needs-analyzer .body {
  padding: 5px;
  height: 585px
}

.needs-analyzer .body .sect {
  display: none
}

.needs-analyzer .body .sect h2 {
  font: 300 33px/1em "Open Sans";
  text-transform: none;
  color: #2a2a2a;
  text-align: center;
  margin: 15px 0px 26px 0px
}

.needs-analyzer .body .sect .hide {
  display: none !important
}

.needs-analyzer .body .sect form label {
  font-size: 0.70em;
  color: #000
}

.inner-addon {
  position: relative
}

.inner-addon .fa {
  position: absolute;
  padding: 10px;
  pointer-events: none
}

.left-addon .fa {
  left: 0px
}

.right-addon .fa {
  right: 0px
}

.left-addon input {
  padding-left: 30px
}

.right-addon input {
  padding-right: 30px
}

.left-textfield-icon .fa {
  color: #5D5F61;
  font-size: 0.5em;
  padding: 11px;
  background: #ccc;
  border-top-left-radius: 5px;
  border-bottom-left-radius: 5px;
  width: 36px;
  text-align: center
}

.left-textfield-icon input {
  padding-left: 40px;
  width: 100%
}

.right-textfield-icon .fa {
  color: #5D5F61;
  font-size: 0.5em;
  padding: 11px;
  background: #ccc;
  border-top-right-radius: 5px;
  border-bottom-right-radius: 5px;
  width: 36px;
  text-align: center
}

.right-textfield-icon input {
  padding-right: 40px;
  width: 100%
}

.needs-analyzer .body .form-container {
  margin: 0px 21px
}

.needs-analyzer .row .no-l-padding {
  padding-left: 0 !important
}

.needs-analyzer .row .no-r-padding {
  padding-right: 0 !important
}

.needs-analyzer .body .sect p {
  text-transform: none;
  color: #2a2a2a;
  padding: 0px 20px 0px 20px;
  font-size: 0.75em;
  font-weight: normal;
  line-height: 21px;
  text-align: justify
}

.info-text {
  color: #ffffff;
  background-color: #5bc0de;
  border-color: #46b8da;
  width: 95%;
  padding: 13px 14px;
  display: block;
  white-space: normal;
  text-align: left;
  margin: 21px auto;
  font-weight: normal;
  vertical-align: middle;
  background-image: none;
  border: 1px solid transparent;
  font-size: 14px;
  border-radius: 4px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none
}

.needs-analyzer .children-select {
  width: 182px !important
}

.children-container {
  overflow-x: hidden;
  overflow-y: auto;
  height: 232px
}

.child-container {
  width: 100%;
  padding: 11px 12px;
  margin: 10px 0px;
  background: #93AECD;
  border-radius: 5px
}

.childrens-total-container {
  height: 280px;
  display: none
}

.childrens-totals {
  height: 213px;
  vertical-align: middle;
  display: block;
  background: #747E8A;
  border-radius: 5px;
  text-align: center;
  line-height: 213px;
  font-size: 27px;
  -moz-user-select: none;
  -khtml-user-select: none;
  -webkit-user-select: none;
  user-select: none
}

.inline-elem {
  display: inline-block !important
}

.form-inline-control {
  display: inline-block;
  height: 34px;
  padding: 6px 12px;
  font-size: 14px;
  line-height: 1.428571429;
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 4px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.form-control-seperator {
  margin-right: 8px
}

.left-textfield-icon.mini-control .fa {
  color: #5D5F61;
  font-size: 0.7em;
  border-top-left-radius: 3px;
  border-bottom-left-radius: 3px;
  width: 27px;
  text-align: center;
  margin-top: 0px;
  height: 33px;
  line-height: 20px;
  padding: 8px
}

.left-textfield-icon.mini-control input {
  width: 104px !important
}

.mini-form-group {
  border-bottom: 0
}

.mini-form-control {
  display: block;
  width: 100%;
  height: 34px;
  padding: 6px 12px;
  font-size: 12px;
  line-height: 1.428571429;
  color: #555555;
  background-color: #ffffff;
  border: 1px solid #cccccc;
  border-radius: 0px;
  -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
  -webkit-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
  transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s
}

.mini-input-group {
  display: inline-table !important;
  vertical-align: middle !important;
  margin-right: 6px !important;
  width: 73px !important
}

.mini-input-group .input-group-addon {
  background-color: #747E8A !important;
  border: 1px solid #747E8A !important;
  color: #fff !important
}

input.mini-control {
  width: 104px !important
}

.total-life-insurance-box h2 {
  text-align: center;
  font-size: 1.2em;
  padding: 17px 0px;
  background: #f48d09;
  color: #fff;
  width: 84%;
  margin: 10px auto;
  margin-top: -4px
}

.total-life-insurance-big-box .header {
  text-align: center;
  font-size: 1.2em;
  color: #f48d09 !important;
  border-radius: 6px;
  width: 100%;
  text-transform: uppercase !important;
  font-weight: bold !important;
  display: inline-block;
  margin: 38px 0px 0px
}

.total-life-insurance-big-box h2 {
  text-align: center !important;
  font-size: 3.2em !important;
  padding: 39px 0px 0px;
  background: #4CAF50;
  color: #fff !important;
  border-radius: 6px;
  width: 100%;
  margin: 23px auto !important;
  text-transform: uppercase !important;
  font-weight: bold !important;
  line-height: 45px !important
}

.total-life-insurance-big-box h2 .inline-button {
  font-size: 0.43em;
  padding: 14px 20px;
  background: #f48d09;
  margin: 0px 0 48px;
  display: inline-block;
  width: 100%
}

label.important-text {
  color: #F51100 !important
}

label.useful-text {
  color: #4CAF50 !important
}

label.goal-text {
  color: #f48d09 !important;
  font-weight: bold;
  font-style: italic
}

.about-us-container {
  margin: 56px 0px
}

.about-us-container h2.na-header {
  font: 300 40px/1em "Open Sans";
  text-transform: uppercase;
  margin: 0 0 35px 0;
  color: #2a2a2a;
  text-align: center
}

.about-us-container .about-us {
  min-height: 374px;
  padding-top: 0;
  margin: 0;
  background-color: #fff;
  border-radius: 10px
}

.about-us-container .about-us .left-container {
  background-color: #fff;
  height: 514px;
  padding-top: 14px;
  padding-left: 4px
}

.about-us-container .about-us .left-container .badge-container {
  width: 100%;
  height: 250px
}

.about-us-container .about-us .left-container .badge-container .photo {
  background-color: red;
  height: 250px;
  width: 250px;
  border-radius: 50%;
  display: block;
  background: url("../img/page3_pic9.jpg") no-repeat;
  margin: 0 auto
}

.about-us-container .about-us .left-container .agent-info-container {
  background-color: #fff;
  height: 348px;
  width: 100%;
  display: inline-block
}

.about-us-container .about-us .left-container .agent-info-container h2.agent-name {
  font: 300 3.4em/1em "Open Sans";
  text-transform: capitalize;
  margin: 0 0 4px 0;
  color: #2a2a2a
}

.about-us-container .about-us .left-container .agent-info-container .agent-title {
  font: 300 2.4em/1em "Open Sans";
  display: block
}

.about-us-container .about-us .left-container .agent-info-container .email {
  font: 300 1.8em/1em "Open Sans";
  display: block;
  margin: 10px 0
}

.about-us-container .about-us .left-container .agent-info-container .email label {
  display: inline-block
}

.about-us-container .about-us .left-container .agent-info-container .facebook {
  font: 300 1.8em/1em "Open Sans";
  display: block;
  margin: 10px 0
}

.about-us-container .about-us .left-container .agent-info-container .facebook label {
  display: inline-block
}

.about-us-container .about-us .left-container .agent-info-container p {
  margin-bottom: 10px
}

.about-us-container .about-us .left-container .agent-info-container p span.agent-title {
  font: 300 22px/1em "Open Sans";
  text-transform: lowercase;
  color: #8E8E8E;
  margin: 0 0 20px 0px;
  display: inline-block
}

.about-us-container .about-us .left-container .agent-info-container p span.email {
  display: block;
  font: 300 17px/1em "Open Sans"
}

.about-us-container .about-us .left-container .agent-info-container p span.email label {
  display: inline-block;
  color: #919191;
  padding-right: 4px
}

.about-us-container .about-us .left-container .agent-info-container p span.facebook {
  display: block;
  font: 300 17px/1em "Open Sans"
}

.about-us-container .about-us .left-container .agent-info-container p span.facebook label {
  display: inline-block;
  color: #919191;
  padding-right: 4px
}

.about-us-container .about-us .body {
  padding: 5px;
  height: 514px
}

.about-us-container .about-us .body .right-container {
  background-color: rgba(209, 209, 209, 0.2);
  min-height: 154px;
  margin: 0 0px;
  padding: 27px;
  color: #B9B9B9
}

.about-us-container .about-us .body .right-container .sect h2 {
  font: 300 33px/1em "Open Sans";
  text-transform: none;
  color: #2a2a2a;
  text-align: center;
  margin: 15px 0px 26px 0px
}

ul.social-links a {
  text-align: center;
  float: left;
  width: 36px;
  height: 36px;
  border-radius: 100%;
  margin-right: 7px
}

ul.social-links a i {
  font-size: 1.00em;
  line-height: 1.8em;
  color: #fff;
  display: table-cell;
  padding-left: 9px
}

ul.social-links li {
  overflow: hidden;
  width: 35px;
  height: 34px;
  float: left;
  margin-right: 8px
}

ul.social-links p {
  font: 300 1.4em/1em 'Open Sans';
  color: #9fa6ae;
  margin: 0;
  float: left
}

ul.social-links p a {
  color: #9fa6ae;
  -webkit-transition: all 0.25s;
  -o-transition: all 0.25s;
  transition: all 0.25s
}

ul.social-links p a:hover {
  color: #ffffff
}

ul.social-links em {
  font-style: normal
}

ul.social-links span {
  font-weight: 600;
  color: #ffffff
}

ul.social-links {
  padding: 0;
  margin: 0;
  list-style: none;
  overflow: hidden;
  float: left
}

ul.social-links li {
  overflow: hidden;
  width: 35px;
  height: 34px;
  float: left;
  margin-right: 0px
}

ul.social-links li a:hover img {
  margin-top: -38px
}

.needs-analyzer .body-ad .hide {
  display: none !important
}

.ad {
  transition: opacity 1.5s linear
}

.aq-ads-container {
  height: 411px
}

.aq-ads-container .body-ad {
  height: 436px;
  width: 97%;
  margin: 0 auto;
  position: relative !important
}

.aq-ads-container .body-ad .ad-1 {
  min-height: 196px;
  width: 100%;
  padding: 0px 12px 0px;
  display: none
}

.aq-ads-container .body-ad .ad-1 .row .col-md-12 .font-container {
  display: block;
  color: #f48d09;
  font: bold 4.5em/1.8em "Open Sans";
  margin: 5px auto;
  width: 100px;
  height: 100px;
  text-align: center;
  background: #EAEAEA;
  padding: 10px
}

.aq-ads-container .body-ad .ad-1 .row .col-md-12 h2.text-1 {
  text-transform: capitalize;
  font: bold 2.2em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 33px 0px 5px
}

.aq-ads-container .body-ad .ad-1 .row .col-md-12 h3.text-2 {
  text-transform: capitalize;
  font: bold 2.4em/1.2em "Open Sans";
  color: #0070c0;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 11px 0px 13px
}

.aq-ads-container .body-ad .ad-1 .row .col-md-12 .quick-text {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important;
  padding: 10px 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 261px;
  margin: 6px auto;
  margin-top: 29px;
  color: #ffffff;
  background-color: #953853;
  border-color: #75243B
}

.aq-ads-container .body-ad .ad-1 .row .col-md-12 .quick-text .fa {
  padding-right: 12px !important;
  font-size: 1.1em !important;
  line-height: 1.2em !important;
  color: #5BB75B !important
}

.aq-ads-container .body-ad .ad-2 {
  min-height: 196px;
  width: 100%;
  padding: 0px 12px 0px;
  display: none
}

.aq-ads-container .body-ad .ad-2 .row .col-md-12 .font-container {
  display: block;
  color: #f48d09;
  font: bold 4.5em/1.8em "Open Sans";
  margin: 5px auto;
  width: 100px;
  height: 100px;
  text-align: center;
  background: #EAEAEA;
  padding: 10px
}

.aq-ads-container .body-ad .ad-2 .row .col-md-12 h2.text-1 {
  text-transform: capitalize;
  font: bold 2.2em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 33px 0px 5px
}

.aq-ads-container .body-ad .ad-2 .row .col-md-12 h3.text-2 {
  text-transform: capitalize;
  font: bold 2.4em/1.2em "Open Sans";
  color: #0070c0;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 11px 0px 13px
}

.aq-ads-container .body-ad .ad-2 .row .col-md-12 span.quick-text {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important;
  padding: 10px 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 261px;
  margin: 6px auto;
  margin-top: 62px;
  color: #ffffff;
  background-color: #953853;
  border-color: #75243B
}

.aq-ads-container .body-ad .ad-2 .row .col-md-12 span.quick-text .fa {
  padding-right: 12px !important;
  font-size: 1.1em !important;
  line-height: 1.2em !important;
  color: #5BB75B !important
}

.aq-ads-container .body-ad .ad-3 {
  min-height: 196px;
  width: 100%;
  padding: 0px 12px 0px;
  display: none
}

.aq-ads-container .body-ad .ad-3 .row .col-md-12 .font-container {
  display: block;
  color: #f48d09;
  font: bold 4.5em/1.8em "Open Sans";
  margin: 5px auto;
  width: 100px;
  height: 100px;
  text-align: center;
  background: #EAEAEA;
  padding: 10px
}

.aq-ads-container .body-ad .ad-3 .row .col-md-12 h2.text-1 {
  text-transform: capitalize;
  font: 300 2.2em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 33px 0px 5px
}

.aq-ads-container .body-ad .ad-3 .row .col-md-12 h3.text-2 {
  text-transform: capitalize;
  font: bold 2.4em/1.0em "Open Sans";
  color: #0070c0;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 11px 0px 13px
}

.aq-ads-container .body-ad .ad-3 .row .col-md-12 h4.text-3 {
  text-transform: capitalize;
  font: bold 2.2em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important
}

.aq-ads-container .body-ad .ad-3 .row .col-md-12 span.quick-text {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important;
  padding: 10px 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 261px;
  margin: 6px auto;
  margin-top: 12px;
  color: #ffffff;
  background-color: #953853;
  border-color: #75243B
}

.aq-ads-container .body-ad .ad-3 .row .col-md-12 span.quick-text .fa {
  padding-right: 12px !important;
  font-size: 1.1em !important;
  line-height: 1.2em !important;
  color: #5BB75B !important
}

.aq-ads-container .body-ad .ad-4 {
  min-height: 196px;
  width: 100%;
  padding: 0px 12px 0px;
  display: none
}

.aq-ads-container .body-ad .ad-4 .row .col-md-12 .font-container {
  display: block;
  color: #f48d09;
  font: bold 4.5em/1.8em "Open Sans";
  margin: 5px auto;
  width: 100px;
  height: 100px;
  text-align: center;
  background: #EAEAEA;
  padding: 10px
}

.aq-ads-container .body-ad .ad-4 .row .col-md-12 h2.text-1 {
  text-transform: capitalize;
  font: 300 2.2em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 33px 0px 5px
}

.aq-ads-container .body-ad .ad-4 .row .col-md-12 h3.text-2 {
  text-transform: capitalize;
  font: bold 2.8em/1.2em "Open Sans";
  color: #0070c0;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 11px 0px 13px
}

.aq-ads-container .body-ad .ad-4 .row .col-md-12 span.quick-text {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important;
  padding: 10px 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 261px;
  margin: 6px auto;
  margin-top: 17px;
  color: #ffffff;
  background-color: #953853;
  border-color: #75243B
}

.aq-ads-container .body-ad .ad-4 .row .col-md-12 span.quick-text .fa {
  padding-right: 12px !important;
  font-size: 1.1em !important;
  line-height: 1.2em !important;
  color: #5BB75B !important
}

.aq-ads-container .body-ad .ad-5 {
  min-height: 196px;
  width: 100%;
  padding: 0px 12px 0px;
  display: none
}

.aq-ads-container .body-ad .ad-5 .row .col-md-12 .font-container {
  display: block;
  color: #f48d09;
  font: bold 4.5em/1.8em "Open Sans";
  margin: 5px auto;
  width: 100px;
  height: 100px;
  text-align: center;
  background: #EAEAEA;
  padding: 10px
}

.aq-ads-container .body-ad .ad-5 .row .col-md-12 h2.text-1 {
  text-transform: capitalize;
  font: 300 2.2em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 33px 0px 5px
}

.aq-ads-container .body-ad .ad-5 .row .col-md-12 h3.text-2 {
  text-transform: capitalize;
  font: bold 2.2em/1.2em "Open Sans";
  color: #0070c0;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 11px 0px 13px
}

.aq-ads-container .body-ad .ad-5 .row .col-md-12 h4.text-3 {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important
}

.aq-ads-container .body-ad .ad-5 .row .col-md-12 span.quick-text {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important;
  padding: 10px 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 261px;
  margin: 6px auto;
  margin-top: 32px;
  color: #ffffff;
  background-color: #953853;
  border-color: #75243B
}

.aq-ads-container .body-ad .ad-5 .row .col-md-12 span.quick-text .fa {
  padding-right: 12px !important;
  font-size: 1.1em !important;
  line-height: 1.2em !important;
  color: #5BB75B !important
}

.aq-ads-container .body-ad .ad-6 {
  min-height: 196px;
  width: 100%;
  padding: 0px 12px 0px;
  display: none
}

.aq-ads-container .body-ad .ad-6 .row .col-md-12 .font-container {
  display: block;
  color: #f48d09;
  font: bold 4.5em/1.8em "Open Sans";
  margin: 5px auto;
  width: 100px;
  height: 100px;
  text-align: center;
  background: #EAEAEA;
  padding: 10px
}

.aq-ads-container .body-ad .ad-6 .row .col-md-12 h2.text-1 {
  text-transform: uppercase;
  font: bold 3.9em/1.0em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 33px 0px 5px
}

.aq-ads-container .body-ad .ad-6 .row .col-md-12 h3.text-2 {
  text-transform: uppercase;
  font: bold 2.8em/1.2em "Open Sans";
  color: #0070c0;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 11px 0px 13px
}

.aq-ads-container .body-ad .ad-6 .row .col-md-12 .quick-text {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important;
  padding: 10px 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 261px;
  margin: 6px auto;
  margin-top: 100px;
  color: #ffffff;
  background-color: #953853;
  border-color: #75243B
}

.aq-ads-container .body-ad .ad-6 .row .col-md-12 .quick-text .fa {
  padding-right: 12px !important;
  font-size: 1.1em !important;
  line-height: 1.2em !important;
  color: #5BB75B !important
}

.aq-ads-container .body-ad .ad-7 {
  min-height: 196px;
  width: 100%;
  padding: 0px 12px 0px;
  display: none
}

.aq-ads-container .body-ad .ad-7 .row .col-md-12 .font-container {
  display: block;
  color: #f48d09;
  font: bold 4.5em/1.8em "Open Sans";
  margin: 5px auto;
  width: 100px;
  height: 100px;
  text-align: center;
  background: #EAEAEA;
  padding: 10px
}

.aq-ads-container .body-ad .ad-7 .row .col-md-12 h2.text-1 {
  text-transform: uppercase;
  font: bold 3.9em/1.0em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 33px 0px 5px
}

.aq-ads-container .body-ad .ad-7 .row .col-md-12 h3.text-2 {
  text-transform: uppercase;
  font: bold 2.8em/1.2em "Open Sans";
  color: #0070c0;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 11px 0px 13px
}

.aq-ads-container .body-ad .ad-7 .row .col-md-12 .quick-text {
  text-transform: capitalize;
  font: bold 1.9em/1.5em "Open Sans";
  color: #f48d09;
  letter-spacing: 0.001em;
  display: block;
  text-align: center;
  margin: 6px 0px 5px;
  text-shadow: none !important;
  padding: 10px 1px;
  border: 1px solid #ccc;
  border-radius: 5px;
  width: 261px;
  margin: 6px auto;
  margin-top: 62px;
  color: #ffffff;
  background-color: #953853;
  border-color: #75243B
}

.aq-ads-container .body-ad .ad-7 .row .col-md-12 .quick-text .fa {
  padding-right: 12px !important;
  font-size: 1.1em !important;
  line-height: 1.2em !important;
  color: #5BB75B !important
}

p {
  color: #5D5D5D
}

.container-switch {
  width: 100%;
  height: 43px;
  padding: 4px;
  background: #E3E3E3;
  border-radius: 2px;
  margin: 18px 0px
}

.switch-input {
  display: none
}

.switch-label.form-control {
  -webkit-box-shadow: none !important;
  box-shadow: none !important;
  border: none !important
}

.switch-label {
  float: left;
  width: 50%;
  color: #555555;
  text-align: center;
  text-shadow: 0 -1px rgba(0, 0, 0, 0.1);
  cursor: pointer
}

.switch-left {
  border-top-left-radius: 0 !important;
  border-bottom-left-radius: 0 !important
}

.switch-right {
  border-top-right-radius: 0 !important;
  border-bottom-right-radius: 0 !important
}

.switch-input:checked+.switch-label {
  background: white;
  color: #ffffff;
  border-radius: 2px;
  text-shadow: 0 1px rgba(4, 4, 4, 0.2);
  background: #ff9800;
  background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgd2lkdGg9IjEwMCUiIGhlaWdodD0iMTAwJSIgdmlld0JveD0iMCAwIDEgMSIgcHJlc2VydmVBc3BlY3RSYXRpbz0ibm9uZSI+CiAgPGxpbmVhckdyYWRpZW50IGlkPSJncmFkLXVjZ2ctZ2VuZXJhdGVkIiBncmFkaWVudFVuaXRzPSJ1c2VyU3BhY2VPblVzZSIgeDE9IjAlIiB5MT0iMCUiIHgyPSIwJSIgeTI9IjEwMCUiPgogICAgPHN0b3Agb2Zmc2V0PSIwJSIgc3RvcC1jb2xvcj0iI2ZmOTgwMCIgc3RvcC1vcGFjaXR5PSIxIi8+CiAgICA8c3RvcCBvZmZzZXQ9IjEwMCUiIHN0b3AtY29sb3I9IiNmZjk4MDAiIHN0b3Atb3BhY2l0eT0iMSIvPgogIDwvbGluZWFyR3JhZGllbnQ+CiAgPHJlY3QgeD0iMCIgeT0iMCIgd2lkdGg9IjEiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
  background: -moz-linear-gradient(top, #ff9800 0%, #ff9800 100%);
  background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #ff9800), color-stop(100%, #ff9800));
  background: -webkit-linear-gradient(top, #ff9800 0%, #ff9800 100%);
  background: -o-linear-gradient(top, #ff9800 0%, #ff9800 100%);
  background: -ms-linear-gradient(top, #ff9800 0%, #ff9800 100%);
  background: linear-gradient(to bottom, #ff9800 0%, #ff9800 100%);
  filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff9800', endColorstr='#ff9800', GradientType=0);
  border: 1px solid #FF8822;
  border-radius-top-right: 0 !important;
  border-radius-bottom-right: 0 !important
}

#inline-disclaimer {
  font-size: 0.6em;
  padding: 10px
}

.company-domain {
  float: right
}

.form-wrapper {
  background: #3cf;
  border-radius: 18px;
  text-align: center;
  margin-bottom: .25em;
  font-size: 14px;
  line-height: 1.428571429
}

.form-wrapper h5 {
  color: #1f3647;
  font-size: 18px;
  margin: 0 0 .25em
}

.form-wrapper h5,
.form-wrapper h6 {
  line-height: 1.3em
}

.form-wrapper h4,
.form-wrapper h5 {
  font-weight: 700
}

.form-wrapper label {
  color: #002c3a;
  display: block;
  text-align: left;
  font-weight: 700
}

.form-wrapper .form-group {
  margin-bottom: 15px
}

.form-wrapper .form-control {
  border: 1px solid #0ac2ff
}

.form-wrapper .input-lg {
  height: 46px;
  padding: 10px 16px;
  font-size: 18px;
  line-height: 1.3333333;
  border-radius: 6px;
  width: 100%
}

@media (min-width: 992px) {
  .form-wrapper .form-content {
    padding: 30px
  }
}

@media (min-width: 768px) {
  .form-wrapper .form-content {
    padding: 20px
  }
}

.form-wrapper .form-content {
  padding: 30px 15px 10px
}

.signup {
  background: rgba(255, 255, 255, 0.9);
  border-color: #e8e8db;
  font-family: 'Lato', sans-serif;
  font-weight: 400;
  padding: 20px 20px;
  border-radius: 24px;
  border: 1px solid rgba(87, 173, 104, 0.25)
}

.signup .form-control {
  width: 100%
}

.signup label {
  color: #333332;
  font-family: 'Lato', sans-serif;
  font-size: 16px;
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px
}

.signup h1,
.signup h3 {
  color: #1693a5
}

.signup h3 {
  color: #1693a5;
  font-size: 24px;
  font-family: 'Lato', sans-serif;
  font-weight: 700;
  line-height: 1.25em;
  letter-spacing: -0.02em;
  margin: 5px 0 25px;
  text-align: center
}

.signup .btn-primary {
  background: #57ad68;
  border-color: #4c985b
}

.signup .btn-lg {
  padding: 15px 30px;
  font-size: 22px
}

.signup .form-options {
  font-size: 13px;
  margin-top: 25px;
  text-align: center
}

.signup .form-options div {
  margin: 10px 0
}

.signup .req {
  color: #da280b
}

@media only screen and (min-width: 922px) {
  .signup .btn {
    font-size: 20px;
    margin-top: 30px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis
  }
}

.header-font {
  font-size: 1.5em !important;
  padding-right: 8px
}

.agent-header .logo {
  height: 100%
}

input[readonly],
input[disabled],
select[readonly],
select[disabled],
textarea[readonly],
textarea[disabled] {
  cursor: text !important
}

body {
  background: none !important;
  font: 10px 'Arial', "Helvetica Neue", Helvetica, Arial, sans-serif !important;
  color: #5D5D5D !important
}

html {
  text-rendering: optimizeLegibility !important;
  -webkit-font-smoothing: antialiased !important
}

.badge {
  display: inline-block;
  min-width: 10px;
  padding: 3px 7px;
  font-size: 1.2em;
  font-weight: bold;
  color: #ffffff;
  line-height: 1em;
  vertical-align: baseline;
  white-space: nowrap;
  text-align: center;
  background-color: #999999;
  border-radius: 10px
}

@media (min-width: 990px) {
  .inline-section {
    display: none !important
  }
  .needs-analyzer-container .needs-analyzer body {
    display: block
  }
}

@media (max-width: 986px) {
  nav.aq_navbar li a {
    width: 148px;
    line-height: 6.0em
  }
  header {
    max-height: 152px
  }
}

@media (max-width: 1219px) {
  .text-info {
    height: 188px
  }
  .text-info .title {
    font-size: 4.0em !important;
    margin-top: 19px !important;
    text-align: center
  }
  .text-info .description {
    font-size: 5.0em !important;
    letter-spacing: 0.1em !important;
    text-align: center
  }
  nav.aq_navbar li a {
    width: 148px;
    line-height: 6.0em
  }
  header {
    max-height: 152px
  }
}

@media (min-width: 986px) and (max-width: 1000px) {
  .text-info {
    height: 186px
  }
  #inline-totalNeededBigDisplay {
    color: #fff;
    display: inline-block;
    font-size: 50px !important;
    padding-left: 0 !important
  }
  .needs-analyzer-container {
    display: block
  }
  .inline-section {
    display: block
  }
  .home .agent-phone-container {
    margin-top: 7px;
    font-size: 1.4em
  }
  .home .text-info-container {
    margin-top: 4px
  }
  .home .text-info {
    height: 235px
  }
  .home .text-info .caption .title {
    font-size: 2.8em
  }
  .home .text-info .caption .description {
    font-size: 4.0em
  }
  .process .agent-phone-container {
    margin-top: 0px
  }
  .process .text-info {
    height: 235px
  }
  .process .text-info .caption .title {
    font-size: 2.8em
  }
  .process .text-info .caption .description {
    font-size: 4.0em
  }
  .life .agent-phone-container {
    margin-top: 0px
  }
  .life .text-info {
    height: 235px
  }
  .life .text-info .caption .title {
    font-size: 2.8em
  }
  .life .text-info .caption .description {
    font-size: 4.0em
  }
  .glossary .agent-phone-container {
    margin-top: 0px
  }
  .glossary .text-info .caption .title {
    font-size: 2.8em
  }
  .about .text-info {
    height: 235px
  }
  .about .text-info .caption .title {
    font-size: 2.8em
  }
  .about .text-info .caption .description {
    font-size: 4.0em
  }
  .needs .agent-phone-container {
    margin-top: 0px
  }
  .needs .needs-analyzer-container {
    min-height: 4590px;
    margin-right: 15px
  }
  .needs .needs-analyzer-container .needs-analyzer {
    height: 1237px
  }
  .needs .needs-analyzer-container .needs-analyzer ul li {
    display: block
  }
  .needs .needs-analyzer-container .needs-analyzer ul li:first-child span {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px
  }
  .needs .needs-analyzer-container .needs-analyzer .body {
    margin-top: 21px;
    padding: 5px;
    height: 585px;
    background-color: #fff;
    display: none
  }
  .needs .text-info {
    height: 186px
  }
  .needs .text-info .caption .title {
    font-size: 4.6em
  }
  .needs .text-info .caption .description {
    font-size: 6.8em
  }
  .thumb-pad1 {
    margin: 0 0 27px 0;
    overflow: hidden
  }
  .social-links a {
    text-align: center;
    float: left;
    width: 28px;
    height: 28px;
    border-radius: 100%;
    margin-right: 7px;
    margin-top: 8px;
    background: #ccc
  }
  .social-links a i {
    font-size: 14px;
    line-height: 30px;
    color: #fff;
    display: table-cell;
    padding-left: 7px
  }
  .agent-header .company-name {
    padding: 0 17px 0px 0
  }
  #stuck_container .select-menu {
    height: 60px;
    font-size: 23px;
    padding-left: 11px
  }
  #stuck_container .container {
    margin-right: 0px;
    margin-left: 0px;
    padding-left: 0px;
    padding-right: 0px
  }
  .agent-phone-container {
    margin-top: 448px;
    font-size: 1.4em
  }
  .agent-phone-container .agent-phone {
    top: -10px;
    font-size: 2.0em;
    position: relative;
    padding-right: 0px
  }
  .quick-container {
    margin-top: 90px
  }
  .text-info-container {
    margin-top: 130px
  }
  .text-info {
    height: 235px
  }
  .text-info .caption {
    padding: 5px 0 90px 0
  }
  .text-info .caption .title {
    font-size: 3.1em;
    padding-left: 15px;
    margin-bottom: 21px;
    padding-right: 15px;
    letter-spacing: -1px
  }
  .text-info .caption .description {
    font-size: 4.0em;
    padding-left: 15px;
    margin-bottom: 21px;
    padding-right: 15px;
    letter-spacing: 0px
  }
  .thumb-box2 {
    padding: 30px 0 0 0
  }
  .thumb-box2 .header-section {
    font-size: 2.3em;
    padding-left: 15px;
    margin-bottom: 21px;
    padding-right: 15px;
    word-wrap: break-word;
    text-align: left;
    line-height: 42px
  }
  .thumb-box4 p {
    float: none;
    font-size: 27px;
    color: #000000;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 15px;
    line-height: 28px;
    font-weight: bold;
    padding: 6px
  }
  .buttom-thumb-box {
    float: none;
    text-align: center
  }
  .about-us-container {
    height: 690px;
    margin: 50px 0px
  }
  .about-us-container .about-us .body {
    height: 278px
  }
  .about-us-container .about-us .body .right-container {
    height: 253px;
    margin: 0px 0px
  }
  .about-us-container .about-us .left-container {
    background-color: #fff;
    height: 424px;
    padding-top: 3px;
    padding-left: 4px
  }
  .about-us-container .about-us .left-container .agent-info-container .email {
    display: block
  }
  .about-us-container .about-us .left-container .agent-info-container .email label {
    display: inline-block
  }
  .about-us-container .about-us .left-container .agent-info-container .facebook {
    display: block
  }
  .about-us-container .about-us .left-container .agent-info-container .facebook label {
    display: inline-block
  }
  .about-header-banner {
    min-height: 465px;
    padding: 0px 0px
  }
  .about-header-banner .banner-text {
    font: bold 109px/1em "Open Sans"
  }
  .college-page-inline .page-inline p {
    font-size: 0.7em;
    color: #333;
    padding: 15px
  }
  .college-page-inline .page-inline .children-select {
    width: 182px !important;
    margin-left: 13px
  }
  .college-page-inline .page-inline .children-container {
    margin: 0px 12px;
    margin-bottom: 5px
  }
  .college-page-inline .page-inline .children-container .mini-input-group .form-control.age {
    font-size: 10px;
    width: 80px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.age {
    width: 84px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeType {
    width: 110px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeType .form-control.collegeType {
    font-size: 10px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeAmt {
    width: 75px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeAmt .input-group-addon .mini-form-control.collegeAmt {
    width: 85px !important
  }
  .college-page-inline .page-inline .childrens-totals {
    width: 504px;
    height: 157px
  }
  .total-page-inline .page-inline .total-life-insurance-big-box h2 {
    line-height: 2.0em !important;
    height: 103px;
    font-size: 2.0em !important;
    padding: 0;
    margin: 0 !important
  }
  .page-inline {
    padding-bottom: 10px;
    background: #F4F3F3
  }
  .page-inline .family-page-inline,
  .page-inline .toReplace-page-inline,
  .page-inline .familyAssets-page-inline,
  .page-inline .debt-page-inline,
  .page-inline .college-page-inline,
  .page-inline .other-page-inline,
  .page-inline .total-page-inline {
    background-color: #F4F3F3
  }
  .page-inline label {
    color: #333;
    margin-left: 15px;
    font-size: 0.8em;
    padding-top: 10px
  }
  .page-inline .input-group {
    width: 96%;
    padding-left: 10px
  }
  .page-inline .input-group .form-control {
    width: 100%
  }
  .page-inline .needs-analyzer-container .needs-analyzer {
    font-size: 24px !important
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span.selected {
    font: 300 14px/23px "Open Sans"
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span {
    font: 300 13px/23px "Open Sans"
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span span.text {
    margin: 0;
    padding: 0;
    display: inline-block
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li a span.na-header {
    font: 300 14px/23px "Open Sans"
  }
}

@media (max-width: 1000px) {
  #stuck_container header {
    background: #fff !important
  }
  #stuck_container .select-menu {
    height: 60px;
    font-size: 23px;
    padding-left: 11px
  }
  #stuck_container .container {
    margin-right: 0px;
    margin-left: 0px;
    padding-left: 0px;
    padding-right: 0px;
    width: 100% !important
  }
}

@media (max-width: 768px) {
  #inline-totalNeededBigDisplay {
    color: #fff;
    display: inline-block;
    font-size: 1.0em !important;
    padding-left: 0 !important;
    font-weight: bold
  }
  .needs-analyzer-container {
    display: block
  }
  .inline-section {
    display: block
  }
  .agent-phone-container {
    margin-top: 7px;
    font-size: 1.4em
  }
  .agent-phone-container .agent-phone {
    top: 0px;
    font-size: 2.4em;
    position: relative;
    padding-right: 0px
  }
  .text-info {
    height: 195px
  }
  .text-info .caption {
    padding: 17px 0px
  }
  .text-info .caption .title {
    font-size: 5.5em;
    text-align: center
  }
  .text-info .caption .description {
    margin-top: 11px;
    font-size: 4.0em;
    text-align: center
  }
  .needs-analyzer-container {
    display: block
  }
  .inline-section {
    display: block
  }
  .home .text-info-container {
    margin-top: 4px
  }
  .home .agent-phone-container .agent-phone {
    color: #fff
  }
  .home .thumb-box2 .header-section {
    font-size: 2.6em;
    padding: 0 26px;
    text-align: left;
    line-height: 1.2em
  }
  .process .thumb-pad1 .thumbnail .badge2 {
    width: 100%;
    border-radius: 0px;
    margin-bottom: 30px
  }
  .process .thumb-pad1 .caption {
    padding: 0;
    overflow: visible
  }
  .process .thumb-pad1 .caption .title {
    padding: 20px 0px
  }
  .process .thumb-box2 .header-section {
    font-size: 2.6em;
    padding: 0 26px;
    text-align: left;
    line-height: 1.2em
  }
  .life .thumb-pad1 .thumbnail .badge2 {
    width: 100%;
    border-radius: 0px;
    margin-bottom: 30px
  }
  .life .thumb-pad1 .caption {
    padding: 0;
    overflow: visible
  }
  .life .thumb-pad1 .caption .title {
    padding: 10px 0px
  }
  .life .thumb-pad1 .caption p {
    margin-bottom: 0;
    line-height: 1.8em;
    font-size: 1.7em;
    font-weight: 100
  }
  .about .agent-phone-container {
    margin-top: 7px;
    font-size: 1.4em
  }
  .about .agent-phone-container .agent-phone {
    top: 442px;
    font-size: 2.4em;
    position: relative;
    padding-right: 0px
  }
  .about .about-header-banner .banner-text span.plan {
    display: block;
    word-spacing: 0;
    margin-top: 12px;
    text-align: center;
    letter-spacing: 0.2em;
    font-size: 0.356em
  }
  .about .about-us-container {
    min-height: 253px;
    height: auto
  }
  .about .about-us-container .about-us {
    height: auto
  }
  .about .about-us-container .about-us .left-container .agent-info-container {
    margin-top: 10px
  }
  .about .about-us-container .about-us .body {
    min-height: 253px;
    height: auto;
    margin-top: 71px
  }
  .about .about-us-container .about-us .body .right-container {
    min-height: 253px;
    height: auto
  }
  .about .about-us-container h2 .na-header {
    font: 300 4.0em/1em "Open Sans"
  }
  .needs .agent-phone-container {
    margin-top: 0px
  }
  .needs .needs-analyzer-container {
    min-height: 4923px;
    margin-right: 15px
  }
  .needs .needs-analyzer-container .needs-analyzer {
    height: 1237px
  }
  .needs .needs-analyzer-container .needs-analyzer ul li {
    display: block
  }
  .needs .needs-analyzer-container .needs-analyzer ul li:first-child span {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px
  }
  .needs .needs-analyzer-container .needs-analyzer .body {
    margin-top: 21px;
    padding: 5px;
    height: 585px;
    background-color: #fff;
    display: none
  }
  .thumb-pad1 {
    margin: 0 0 27px 0;
    overflow: hidden
  }
  .social-links a {
    text-align: center;
    float: left;
    width: 28px;
    height: 28px;
    border-radius: 100%;
    margin-right: 7px;
    margin-top: 8px;
    background: #ccc
  }
  .social-links a i {
    font-size: 1.4em;
    line-height: 30px;
    color: #fff;
    display: table-cell;
    padding-left: 7px
  }
  .agent-header .company-name {
    padding: 0 17px 0px 0
  }
  .quick-container {
    margin-top: 90px
  }
  .text-info-container {
    margin-top: 130px
  }
  .thumb-box2 {
    padding: 30px 0 0 0
  }
  .thumb-box2 .header-section {
    font-size: 3.6em;
    padding: 8px 15px 23px;
    word-wrap: break-word;
    text-align: left;
    line-height: 1.0em;
    margin: 0
  }
  .thumb-box4 {
    padding: 28px 0;
    height: 200px
  }
  .thumb-box4 p {
    font-size: 2.7em;
    line-height: 1.2em
  }
  .buttom-thumb-box {
    float: none;
    text-align: center
  }
  .about-us-container {
    height: 920px;
    margin: 50px 0px
  }
  .about-us-container .about-us {
    min-height: 924px
  }
  .about-us-container .about-us .body {
    height: 278px
  }
  .about-us-container .about-us .body .right-container {
    height: 253px;
    margin: 0px 0px
  }
  .about-us-container .about-us .left-container {
    background-color: #fff;
    height: 488px;
    padding-top: 3px;
    padding-left: 4px
  }
  .about-us-container .about-us .left-container .agent-info-container .email {
    display: block
  }
  .about-us-container .about-us .left-container .agent-info-container .email label {
    display: inline-block
  }
  .about-us-container .about-us .left-container .agent-info-container .facebook {
    display: block
  }
  .about-us-container .about-us .left-container .agent-info-container .facebook label {
    display: inline-block
  }
  .about-header-banner {
    min-height: 465px;
    padding: 0px 0px
  }
  .about-header-banner .banner-text {
    font: bold 6.8em/1em "Open Sans"
  }
  .about-header-banner .banner-text span.plan {
    display: block;
    font: bold 0.456em/1em "Open Sans";
    word-spacing: -0.044em;
    margin-top: 12px;
    text-align: justify
  }
  .college-page-inline .page-inline p {
    font-size: 0.7em;
    color: #333;
    padding: 15px
  }
  .college-page-inline .page-inline .children-select {
    width: 182px !important;
    margin-left: 13px
  }
  .college-page-inline .page-inline .children-container {
    margin: 0px 12px;
    margin-bottom: 5px
  }
  .college-page-inline .page-inline .children-container .mini-input-group .form-control.age {
    font-size: 0.428em !important;
    width: 80px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.age {
    width: 84px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeType {
    width: 110px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeType .form-control.collegeType {
    font-size: 0.428em
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeAmt {
    width: 75px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeAmt .input-group-addon .mini-form-control.collegeAmt {
    width: 85px !important
  }
  .college-page-inline .page-inline .children-container .childrens-totals {
    width: 88%;
    height: 157px;
    margin: 0 auto;
    line-height: 119px;
    font: 300 4.0em/11.4em "Open Sans"
  }
  .total-page-inline .page-inline .total-life-insurance-big-box h2 {
    height: 168px;
    font-size: 1.5em !important;
    padding: 0px;
    margin: 0 !important;
    padding-top: 10px
  }
  .needs-analyzer ul li span {
    font: 300 1em/1.0em "Open Sans"
  }
  .needs-analyzer .total-life-insurance-big-box .header {
    font-size: 1.11em;
    margin: 0 0px
  }
  .page-inline {
    padding-bottom: 10px;
    background: #F4F3F3
  }
  .page-inline .family-page-inline,
  .page-inline .toReplace-page-inline,
  .page-inline .familyAssets-page-inline,
  .page-inline .debt-page-inline,
  .page-inline .college-page-inline,
  .page-inline .other-page-inline,
  .page-inline .total-page-inline {
    background-color: #F4F3F3
  }
  .page-inline label {
    color: #333;
    margin-left: 15px;
    font-size: 0.8em;
    padding-top: 10px
  }
  .page-inline .input-group {
    width: 96%;
    padding-left: 10px
  }
  .page-inline .input-group .form-control {
    width: 100%
  }
  .page-inline .needs-analyzer-container .needs-analyzer {
    font-size: 2.4em !important
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span.selected {
    font: 300 0.583em/0.958em "Open Sans"
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span {
    font: 300 1.0em/2.3em "Open Sans"
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span span.text {
    margin: 0;
    padding: 0;
    display: inline-block
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li a span.na-header {
    font: 300 1.714em/1.642em "Open Sans"
  }
  header {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background: #fff;
    max-height: 173px
  }
  header .agent-header {
    background-color: #fff;
    padding: 0px 0px;
    height: 126px
  }
  header .agent-header .social-links a {
    margin-top: 0px;
    background: none
  }
}

@media (max-width: 480px) {
  .needs-analyzer .children-select {
    width: 182px !important
  }
  #inline-totalNeededBigDisplay {
    color: #fff;
    display: inline-block;
    font-size: 1.0em !important;
    padding-left: 0 !important;
    border-bottom-right-radius: 5px;
    border-bottom-left-radius: 5px
  }
  .needs-analyzer-container {
    display: block
  }
  .inline-section {
    display: block
  }
  .agent-phone-container {
    margin-top: 7px;
    font-size: 1.4em
  }
  .agent-phone-container .agent-phone {
    top: 0px;
    font-size: 2.2em;
    position: relative;
    padding-right: 0px
  }
  .text-info {
    height: 195px
  }
  .text-info .caption {
    padding: 17px 0px
  }
  .text-info .caption .title {
    font-size: 5.4em;
    text-align: center
  }
  .text-info .caption .description {
    margin-top: 11px;
    font-size: 4.0em;
    text-align: center
  }
  .needs-analyzer-container {
    display: block
  }
  .inline-section {
    display: block
  }
  .home .text-info-container {
    margin-top: 4px
  }
  .home .agent-phone-container .agent-phone {
    color: #fff
  }
  .home .thumb-box2 .header-section {
    font-size: 2.6em;
    padding: 0 26px;
    text-align: left;
    line-height: 1.2em
  }
  .process .thumb-pad1 .thumbnail .badge2 {
    width: 100%;
    border-radius: 0px;
    margin-bottom: 30px
  }
  .process .thumb-pad1 .caption {
    padding: 0;
    overflow: visible
  }
  .process .thumb-pad1 .caption .title {
    padding: 20px 0px
  }
  .process .thumb-box2 .header-section {
    font-size: 2.6em;
    padding: 0 26px;
    text-align: left;
    line-height: 1.2em
  }
  .life .thumb-pad1 .thumbnail .badge2 {
    width: 100%;
    border-radius: 0px;
    margin-bottom: 30px
  }
  .life .thumb-pad1 .caption {
    padding: 0;
    overflow: visible
  }
  .life .thumb-pad1 .caption .title {
    padding: 10px 0px
  }
  .life .thumb-pad1 .caption p {
    margin-bottom: 0;
    line-height: 1.8em;
    font-size: 1.7em;
    font-weight: 100
  }
  .about .about-header-banner .banner-text {
    margin: 114px 0
  }
  .about .text-info-container {
    margin-top: 72px
  }
  .about .about-us-container {
    min-height: 253px;
    height: auto
  }
  .about .about-us-container .about-us {
    height: auto
  }
  .about .about-us-container .about-us .body {
    min-height: 253px;
    height: auto
  }
  .about .about-us-container .about-us .body .right-container {
    min-height: 253px;
    height: auto
  }
  .about .about-us-container h2 .na-header {
    font: 300 4.0em/1em "Open Sans"
  }
  .about .agent-phone-container {
    margin-top: 417px;
    font-size: 1.4em
  }
  .about .agent-phone-container .agent-phone {
    top: 0px;
    font-size: 1.6em;
    padding-right: 0px;
    margin-top: 11px;
    position: relative;
    display: block;
    text-align: center
  }
  .needs .agent-phone-container {
    margin-top: 0px
  }
  .needs .needs-analyzer-container {
    min-height: 4969px;
    margin-right: 15px;
    margin-bottom: 512px
  }
  .needs .needs-analyzer-container .needs-analyzer {
    height: 1237px
  }
  .needs .needs-analyzer-container .needs-analyzer .family-page-inline p.disclaimer {
    font-size: 0.6em;
    padding: 10px
  }
  .needs .needs-analyzer-container .needs-analyzer ul li {
    display: block
  }
  .needs .needs-analyzer-container .needs-analyzer ul li:first-child span {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px
  }
  .needs .needs-analyzer-container .needs-analyzer .body {
    margin-top: 21px;
    padding: 5px;
    height: 585px;
    background-color: #fff;
    display: none
  }
  .thumb-pad1 {
    margin: 0 0 27px 0;
    overflow: hidden
  }
  .social-links a {
    text-align: center;
    float: left;
    width: 28px;
    height: 28px;
    border-radius: 100%;
    margin-right: 7px;
    margin-top: 8px;
    background: #ccc
  }
  .social-links a i {
    font-size: 1.4em;
    line-height: 30px;
    color: #fff;
    display: table-cell;
    padding-left: 7px
  }
  .agent-header .company-name {
    padding: 0 17px 0px 0
  }
  #stuck_container .select-menu {
    height: 60px;
    font-size: 23px;
    padding-left: 11px
  }
  #stuck_container .container {
    margin-right: 0px;
    margin-left: 0px;
    padding-left: 0px;
    padding-right: 0px
  }
  .quick-container {
    margin-top: 90px
  }
  .text-info-container {
    margin-top: 130px
  }
  .thumb-box2 {
    padding: 30px 0 0 0
  }
  .thumb-box2 .header-section {
    font-size: 3.6em;
    padding: 8px 15px 23px;
    word-wrap: break-word;
    text-align: left;
    line-height: 1.0em;
    margin: 0
  }
  .thumb-box4 {
    padding: 28px 0;
    height: 200px
  }
  .thumb-box4 p {
    font-size: 2.7em;
    line-height: 1.2em
  }
  .buttom-thumb-box {
    float: none;
    text-align: center
  }
  .about-us-container {
    height: 920px;
    margin: 50px 0px
  }
  .about-us-container .about-us {
    min-height: 924px
  }
  .about-us-container .about-us .body {
    height: 278px
  }
  .about-us-container .about-us .body .right-container {
    height: 253px;
    margin: 0px 0px
  }
  .about-us-container .about-us .left-container {
    background-color: #fff;
    height: 648px;
    padding-top: 3px;
    padding-left: 4px
  }
  .about-us-container .about-us .left-container .agent-info-container .email {
    display: block
  }
  .about-us-container .about-us .left-container .agent-info-container .email label {
    display: inline-block
  }
  .about-us-container .about-us .left-container .agent-info-container .facebook {
    display: block
  }
  .about-us-container .about-us .left-container .agent-info-container .facebook label {
    display: inline-block
  }
  .about-header-banner {
    min-height: 465px;
    padding: 0px 0px
  }
  .about-header-banner .banner-text {
    font: bold 6.8em/1em "Open Sans"
  }
  .about-header-banner .banner-text span.plan {
    display: block;
    font: bold 0.456em/1em "Open Sans";
    word-spacing: -0.044em;
    margin-top: 12px;
    text-align: justify
  }
  .college-page-inline .page-inline input.mini-control {
    width: 85px !important;
    padding-left: 6px
  }
  .college-page-inline .page-inline .childrens-totals {
    height: 64px
  }
  .college-page-inline .page-inline p {
    font-size: 0.7em;
    color: #333;
    padding: 15px
  }
  .college-page-inline .page-inline .children-select {
    width: 182px !important;
    margin-left: 13px
  }
  .college-page-inline .page-inline .children-container {
    margin: 0px 12px;
    margin-bottom: 5px
  }
  .college-page-inline .page-inline .children-container .mini-input-group .form-control.age {
    font-size: 0.428em !important;
    width: 80px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group .form-control.collegeType {
    font-size: 0.428em !important;
    width: 110px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.age {
    width: 84px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeType {
    width: 110px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeType .form-control.collegeType {
    font-size: 0.428em
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeAmt {
    width: 75px !important
  }
  .college-page-inline .page-inline .children-container .mini-input-group.collegeAmt .input-group-addon .mini-form-control.collegeAmt {
    width: 85px !important
  }
  .college-page-inline .page-inline .children-container .childrens-totals {
    width: 88%;
    height: 157px;
    margin: 0 auto;
    line-height: 119px;
    font: 300 4.0em/11.4em "Open Sans"
  }
  .total-page-inline.inline-section .page-inline {
    min-height: 528px
  }
  .total-page-inline.inline-section .total-life-insurance-big-box h2 {
    line-height: 2.5em !important;
    min-height: 99px;
    font-size: 1.6em !important;
    padding: 0;
    width: 92%;
    margin: 0 auto !important
  }
  .needs-analyzer ul li span {
    font: 300 1em/1.0em "Open Sans"
  }
  .needs-analyzer .total-life-insurance-big-box .header {
    font-size: 1.0em;
    margin: 0 0px
  }
  .page-inline {
    padding-bottom: 10px;
    background: #F4F3F3
  }
  .page-inline .family-page-inline,
  .page-inline .toReplace-page-inline,
  .page-inline .familyAssets-page-inline,
  .page-inline .debt-page-inline,
  .page-inline .college-page-inline,
  .page-inline .other-page-inline,
  .page-inline .total-page-inline {
    background-color: #F4F3F3
  }
  .page-inline label {
    color: #333;
    margin-left: 15px;
    font-size: 0.8em;
    padding-top: 10px
  }
  .page-inline .input-group {
    width: 96%;
    padding-left: 10px
  }
  .page-inline .input-group .form-control {
    width: 100%
  }
  .page-inline .needs-analyzer-container .needs-analyzer {
    font-size: 2.4em !important
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span.selected {
    font: 300 0.583em/0.958em "Open Sans"
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span {
    font: 300 1.0em/2.3em "Open Sans"
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li span span.text {
    margin: 0;
    padding: 0;
    display: inline-block
  }
  .page-inline .needs-analyzer-container .needs-analyzer ul li a span.na-header {
    font: 300 1.714em/1.642em "Open Sans"
  }
  header {
    position: relative;
    left: 0;
    bottom: 0;
    width: 100%;
    background: #fff;
    max-height: 173px
  }
  header .agent-header {
    background-color: #fff;
    padding: 0px 0px;
    height: 126px
  }
  header .agent-header .social-links a {
    margin-top: 0px;
    background: none
  }
  #inline-disclaimer {
    font-size: 0.6em;
    padding: 10px
  }
}

@media (max-width: 649px) {
  .text-info {
    height: 157px
  }
  .text-info .caption .title {
    font-size: 3.5em !important
  }
  .text-info .caption .description {
    font-size: 4.3em !important
  }
}

@media (max-width: 570px) {
  .text-info {
    height: 145px
  }
  .text-info .caption .title {
    font-size: 2.5em !important
  }
  .text-info .caption .description {
    font-size: 3.2em !important
  }
}

@media (max-width: 426px) {
  .agent-phone-container .agent-phone {
    font-size: 1.8em
  }
  .text-info {
    height: 123px
  }
  .text-info .caption .title {
    font-size: 2.0em !important
  }
  .text-info .caption .description {
    font-size: 2.6em !important
  }
}

@media (max-width: 326px) {
  .agent-phone-container .agent-phone {
    font-size: 1.4em
  }
  .text-info {
    height: 123px
  }
  .text-info .caption .title {
    font-size: 1.8em !important
  }
  .text-info .caption .description {
    font-size: 2.0em !important
  }
}

@media (max-width: 1199px) {
  .home .aq-ads-container .body-ad .ad-1 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-2 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-3 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-4 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-4 .ad-5 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-4 .ad-5 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-4 .ad-6 .row .col-md-12 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-4 .ad-6 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
  .home .aq-ads-container .body-ad .ad-7 .row .col-md-12 h4 .text-3 {
    font-size: 3.0em
  }
}

#fd3-browserTools {
  padding: 2px 2px 2px 2px;
  position: fixed;
  right: 3px;
  top: 10px;
  z-index: 99999;
  background: rgba(0, 0, 0, 0.6);
  color: #fff
}

#fd3-browserTools.onLeft {
  left: 10px;
  right: auto
}

#fd3-dimensions {
  font-size: 14px;
  text-transform: lowercase;
  margin: 0 0 7px;
  position: fixed;
  right: 10px;
  top: 10px;
  width: 188px;
  min-width: 147px;
  text-align: center;
  z-index: 9999999;
  background: rgba(0, 0, 0, 0.6);
  height: 68px;
  line-height: 8px;
  color: #fff;
  padding: 19px;
  word-break: normal;
  overflow: hidden;
  border: 1px solid #cccccc;
  border-radius: 4px;
  display: block
}

#fd3-mousePosition {
  font-size: 14px;
  text-transform: lowercase;
  margin: 0 0 10px;
  position: fixed;
  right: 16px;
  top: 100px;
  text-align: center;
  z-index: 9999999;
  background: rgba(0, 0, 0, 0.5);
  height: 8px;
  line-height: 0;
  color: #fff;
  padding: 19px;
  word-break: normal;
  overflow: hidden;
  border: 1px solid #ccc;
  border-radius: 4px;
  display: block
}

#fd3-mq {
  display: block;
  min-height: 120px;
  min-width: 188px;
  position: fixed;
  top: 163px;
  right: 10px;
  z-index: 9999999;
  background: rgba(0, 0, 0, 0.6);
  color: #fff;
  border: 1px solid #ccc
}

#fd3-queries {
  font-size: 16px;
  list-style: none;
  padding: 1em;
  text-transform: lowercase
}

#fd3-queries li {
  padding-bottom: 6px;
  background-color: rgba(255, 255, 255, 0.2);
  padding: 9px
}

#fd3-linksContainer {
  font-size: 10px;
  margin-top: 10px;
  text-align: right
}

#fd3-version {
  color: #444;
  float: right;
  text-transform: lowercase
}

#fd3-closeButton {
  -webkit-appearance: none;
  background: transparent;
  border: none;
  clear: right;
  color: #444;
  display: block;
  float: right;
  margin-top: 5px;
  text-decoration: none
}

#fd3-closeButton:before {
  content: "("
}

#fd3-closeButton:after {
  content: ")"
}

#fd3-positionButton {
  -webkit-appearance: none;
  border: none;
  clear: right;
  color: #444;
  cursor: pointer;
  display: block;
  float: right;
  height: 15px;
  width: 44px
}

#fd3-emTest {
  height: 0;
  width: 1em
}

#fd3-mouseXPosition {
  background: #0e6500;
  display: block;
  height: 20px;
  position: fixed;
  top: 0;
  width: 1px;
  z-index: 99999
}

#fd3-mouseYPosition {
  background: #0e6500;
  display: block;
  height: 1px;
  position: fixed;
  left: 0;
  width: 20px;
  z-index: 100000
}

#fd3-horz-ruler {
  background: rgba(255, 255, 255, 0.5) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADIAAAAKCAYAAAD2Fg1xAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4NDA1NzMxQUREQTUxMUUxQjczQTlBOEVDRUNDODVCMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4NDA1NzMxQkREQTUxMUUxQjczQTlBOEVDRUNDODVCMyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjgxQzg5N0Y1REQ5ODExRTFCNzNBOUE4RUNFQ0M4NUIzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjgxQzg5N0Y2REQ5ODExRTFCNzNBOUE4RUNFQ0M4NUIzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+n8/2ywAAAE5JREFUeNpi+v//PwMyXrhw4X90sZKSkv9ubm4Doo4Y97m7u/9nYhgmYNQjg94jcXFxjMRoHGzqRpPWYAOMoOJrqAMPD4/R4nfQAYAAAwAZCJUgA3b63wAAAABJRU5ErkJggg==") repeat-x;
  height: 10px;
  position: fixed;
  top: 0;
  width: 100%;
  z-index: 99999999999
}

#fd3-vert-ruler {
  background: rgba(255, 255, 255, 0.5) url("data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAoAAAAyCAYAAABlG0p9AAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAyRpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMy1jMDExIDY2LjE0NTY2MSwgMjAxMi8wMi8wNi0xNDo1NjoyNyAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvIiB4bWxuczp4bXBNTT0iaHR0cDovL25zLmFkb2JlLmNvbS94YXAvMS4wL21tLyIgeG1sbnM6c3RSZWY9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9zVHlwZS9SZXNvdXJjZVJlZiMiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNiAoTWFjaW50b3NoKSIgeG1wTU06SW5zdGFuY2VJRD0ieG1wLmlpZDo4NDA1NzMyMkREQTUxMUUxQjczQTlBOEVDRUNDODVCMyIgeG1wTU06RG9jdW1lbnRJRD0ieG1wLmRpZDo4NDA1NzMyM0REQTUxMUUxQjczQTlBOEVDRUNDODVCMyI+IDx4bXBNTTpEZXJpdmVkRnJvbSBzdFJlZjppbnN0YW5jZUlEPSJ4bXAuaWlkOjg0MDU3MzIwRERBNTExRTFCNzNBOUE4RUNFQ0M4NUIzIiBzdFJlZjpkb2N1bWVudElEPSJ4bXAuZGlkOjg0MDU3MzIxRERBNTExRTFCNzNBOUE4RUNFQ0M4NUIzIi8+IDwvcmRmOkRlc2NyaXB0aW9uPiA8L3JkZjpSREY+IDwveDp4bXBtZXRhPiA8P3hwYWNrZXQgZW5kPSJyIj8+IBqcPgAAAG5JREFUeNpidHd3/89ABGD8/58odQxMDEQC6itkWbRoEYoj4+LiGIeqZxhLSkpwOrK7u5txEHgGFOAMaAGOXSEQoztysMUMC7oAMGvA2Tt37kQoLC0tRXGknp4eVo+NxsxozIzGzGjMDOp6BiDAAP6qSeXONHx1AAAAAElFTkSuQmCC") repeat-y;
  height: 100%;
  position: fixed;
  left: 0;
  width: 10px;
  z-index: 99999999999
}

</style>