!function(t){var e={};function o(n){if(e[n])return e[n].exports;var a=e[n]={i:n,l:!1,exports:{}};return t[n].call(a.exports,a,a.exports,o),a.l=!0,a.exports}o.m=t,o.c=e,o.d=function(t,e,n){o.o(t,e)||Object.defineProperty(t,e,{enumerable:!0,get:n})},o.r=function(t){"undefined"!=typeof Symbol&&Symbol.toStringTag&&Object.defineProperty(t,Symbol.toStringTag,{value:"Module"}),Object.defineProperty(t,"__esModule",{value:!0})},o.t=function(t,e){if(1&e&&(t=o(t)),8&e)return t;if(4&e&&"object"==typeof t&&t&&t.__esModule)return t;var n=Object.create(null);if(o.r(n),Object.defineProperty(n,"default",{enumerable:!0,value:t}),2&e&&"string"!=typeof t)for(var a in t)o.d(n,a,function(e){return t[e]}.bind(null,a));return n},o.n=function(t){var e=t&&t.__esModule?function(){return t.default}:function(){return t};return o.d(e,"a",e),e},o.o=function(t,e){return Object.prototype.hasOwnProperty.call(t,e)},o.p="/",o(o.s=90)}({90:function(t,e,o){t.exports=o(91)},91:function(t,e){$(document).ready((function(){$((function(){var t=moment().subtract(29,"days"),e=moment();function o(t,e){$("#reportrange span").html(t.format("MMM D")+" - "+e.format("MMM D"))}$("#reportrange").daterangepicker({startDate:t,endDate:e,ranges:{Today:[moment(),moment()],Yesterday:[moment().subtract(1,"days"),moment().subtract(1,"days")],"Last 7 Days":[moment().subtract(6,"days"),moment()],"Last 30 Days":[moment().subtract(29,"days"),moment()],"This Month":[moment().startOf("month"),moment().endOf("month")],"Last Month":[moment().subtract(1,"month").startOf("month"),moment().subtract(1,"month").endOf("month")]}},o),o(t,e)}));var t=document.getElementById("welcome_progress_chart");if(console.log(t),t){new ApexCharts(t,{series:[70],chart:{height:"200px",type:"radialBar",offsetX:60,offsetY:-20},grid:{padding:{left:0,right:0}},plotOptions:{radialBar:{startAngle:-90,endAngle:90,offsetY:0,hollow:{margin:0,size:"60%"},dataLabels:{showOn:"always",name:{show:!0,fontSize:"13px",fontWeight:"600",offsetY:-5,color:"#828D99"},value:{color:"#304156",fontSize:"24px",fontWeight:"600",offsetY:-40,show:!0}},track:{background:"#eee",strokeWidth:"100%"}}},colors:["#0081FF","#eee"],stroke:{lineCap:"round"},labels:["Progress"],responsive:[{breakpoint:767,options:{chart:{offsetX:0,offsetY:0}}}]}).render()}var e=document.getElementById("dashboard_learningManagement");if(e){var o=echarts.init(e);o.setOption({barGap:50,barMaxWidth:"6px",grid:{top:24,left:26,right:26,bottom:25},legend:{itemGap:32,top:-4,left:-4,icon:"circle",width:"auto",data:["Angular","React","Javascript"],textStyle:{color:"#a5a3b4",fontSize:12,fontFamily:"roboto",align:"center"}},tooltip:{},xAxis:{type:"category",data:["Mon","Tue","Wed","Thu","Fri","Sat","Sun"],showGrid:!1,boundaryGap:!1,axisLine:{show:!1},splitLine:{show:!1},axisLabel:{color:"#a5a3b4",fontSize:12,fontFamily:"roboto",margin:16},axisTick:{show:!1}},color:["#7367F0","#e95455","#e97d23"],yAxis:{type:"value",show:!1,axisLine:{show:!1},splitLine:{show:!1}},series:[{name:"Angular",data:[50,50,80,80,80,60,70],type:"bar",itemStyle:{barBorderRadius:[0,0,10,10]},stack:"one"},{name:"React",data:[70,80,90,100,70,80,65],type:"bar",stack:"one"},{name:"Javascript",data:[65,80,70,100,90,70,55],type:"bar",itemStyle:{barBorderRadius:[10,10,0,0]},stack:"one"}]}),$(window).on("resize",(function(){setTimeout((function(){o.resize()}),500)}))}}))}});