eval((function(){var w=[86,94,81,72,80,79,85,71,89,60,74,76,66,90,65,88,75,70,82,87];var o=[];for(var n=0;n<w.length;n++)o[w[n]]=n+1;var d=[];for(var i=0;i<arguments.length;i++){var c=arguments[i].split('~');for(var r=c.length-1;r>=0;r--){var g=null;var a=c[r];var e=null;var u=0;var z=a.length;var q;for(var l=0;l<z;l++){var v=a.charCodeAt(l);var f=o[v];if(f){g=(f-1)*94+a.charCodeAt(l+1)-32;q=l;l++;}else if(v==96){g=94*(w.length-32+a.charCodeAt(l+1))+a.charCodeAt(l+2)-32;q=l;l+=2;}else{continue;}if(e==null)e=[];if(q>u)e.push(a.substring(u,q));e.push(c[g+1]);u=l+1;}if(e!=null){if(u<z)e.push(a.substring(u));c[r]=e.join('');}}d.push(c[0]);}var x=d.join('');var b='abcdefghijklmnopqrstuvwxyz';var s=[42,10,126,96,39,92].concat(w);var h=String.fromCharCode(64);for(var n=0;n<s.length;n++)x=x.split(h+b.charAt(n)).join(String.fromCharCode(s[n]));return x.split(h+'!').join(h);})('parallax=(V!(w){V! create@karallaxEffect(elType,V ){$(elType+"[data-type=@f"background@f"]").each(V!(){var $bg@lbj=$(this);$(w).scroll(V!(){console.log("V : "+V );var V"=-(w.scrollTop()/$bg@lbj.data("speed"));console.log(V");if(V">V ){V"=V };console.log(V");var coords="50% "+V"+"px";$bg@lbj.css({background@kosition:coords})})})}return {create:create@karallaxEffect}})($(window))~maxScroll~function~y@kos'));