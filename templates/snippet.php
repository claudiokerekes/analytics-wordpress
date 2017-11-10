<script type="text/javascript">
!function(P,o,d,e,r,I,O){function f(q, n){q[n]=function(){return q.push([n].concat([].slice.call(arguments))),q}}
if(P.analytics)P.console&&console.error&&console.error("poder.IO pixel included twice.");else{for(r=P.analytics=[],
I=["trackSubmit","trackClick","trackLink","trackForm","pageview","identify","reset","group","track","ready",
"alias","debug","page","once","off","on"];I.length>0;)f(r,I.shift());I=o.createElement(d);I.async=!0;I.src=
'//cdn.poder.io/analytics.js/v1/'+e+'/analytics.min.js';O=o.getElementsByTagName(d)[0];O.parentNode.insertBefore(I, O)}
}(window,document,'script','<?php echo esc_js( $settings['api_key'] ); ?>');
analytics.page();
</script>
