/*
 Sticky-kit v1.0.4 | WTFPL | Leaf Corcoran 2014 | http://leafo.net
*/
(function(){var b,m;b=this.jQuery;m=b(window);b.fn.stick_in_parent=function(e){var u,n,f,s,B,l,C;null==e&&(e={});s=e.sticky_class;u=e.inner_scrolling;f=e.parent;n=e.offset_top;null==n&&(n=0);null==f&&(f=void 0);null==u&&(u=!0);null==s&&(s="is_stuck");B=function(a,e,l,v,y,p,t){var q,z,k,w,c,d,A,x,g,h;if(!a.data("sticky_kit")){a.data("sticky_kit",!0);d=a.parent();null!=f&&(d=d.closest(f));if(!d.length)throw"failed to find stick parent";q=k=!1;g=b("<div />");g.css("position",a.css("position"));A=function(){var c,
b;c=parseInt(d.css("border-top-width"),10);b=parseInt(d.css("padding-top"),10);e=parseInt(d.css("padding-bottom"),10);l=d.offset().top+c+b;v=d.height();c=k?(k=!1,q=!1,a.insertAfter(g).css({position:"",top:"",width:"",bottom:""}),g.detach(),!0):void 0;y=a.offset().top-parseInt(a.css("margin-top"),10)-n;p=a.outerHeight(!0);t=a.css("float");g.css({width:a.outerWidth(!0),height:p,display:a.css("display"),"vertical-align":a.css("vertical-align"),"float":t});if(c)return h()};A();if(p!==v)return w=void 0,
c=n,h=function(){var b,h,r,f;r=m.scrollTop();null!=w&&(h=r-w);w=r;k?(f=r+p+c>v+l,q&&!f&&(q=!1,a.css({position:"fixed",bottom:"",top:c}).trigger("sticky_kit:unbottom")),r<y&&(k=!1,c=n,"left"!==t&&"right"!==t||a.insertAfter(g),g.detach(),b={position:"",width:"",top:""},a.css(b).removeClass(s).trigger("sticky_kit:unstick")),u&&(b=m.height(),p>b&&!q&&(c-=h,c=Math.max(b-p,c),c=Math.min(n,c),k&&a.css({top:c+"px"})))):r>y&&(k=!0,b={position:"fixed",top:c},b.width="border-box"===a.css("box-sizing")?a.outerWidth()+
"px":a.width()+"px",a.css(b).addClass(s).after(g),"left"!==t&&"right"!==t||g.append(a),a.trigger("sticky_kit:stick"));if(k&&(null==f&&(f=r+p+c>v+l),!q&&f))return q=!0,"static"===d.css("position")&&d.css({position:"relative"}),a.css({position:"absolute",bottom:e,top:"auto"}).trigger("sticky_kit:bottom")},x=function(){A();return h()},z=function(){m.off("scroll",h);b(document.body).off("sticky_kit:recalc",x);a.off("sticky_kit:detach",z);a.removeData("sticky_kit");a.css({position:"",bottom:"",top:""});
d.position("position","");if(k)return a.insertAfter(g).removeClass(s),g.remove()},m.on("touchmove",h),m.on("scroll",h),m.on("resize",x),b(document.body).on("sticky_kit:recalc",x),a.on("sticky_kit:detach",z),setTimeout(h,0)}};l=0;for(C=this.length;l<C;l++)e=this[l],B(b(e));return this}}).call(this);

(function ($, root, undefined) {
	
	$(function () {
		
		'use strict';
		
		$("aside").stick_in_parent();
		
	});
	
})(jQuery, this);

// //
// // MAIL CHIMP SIGNUP FORM
// //

// var fnames = new Array();var ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';
// try {
//     var jqueryLoaded=jQuery;
//     jqueryLoaded=true;
// } catch(err) {
//     var jqueryLoaded=false;
// }

// var head= document.getElementsByTagName('head')[0];
// if (!jqueryLoaded) {
//     var script = document.createElement('script');
//     script.type = 'text/javascript';
//     script.src = 'http://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js';
//     head.appendChild(script);
//     if (script.readyState && script.onload!==null){
//         script.onreadystatechange= function () {
//               if (this.readyState == 'complete') mce_preload_check();
//         }    
//     }
// }

// setTimeout('mce_preload_check();', 250);

// var mce_preload_checks = 0;
// function mce_preload_check(){
//     if (mce_preload_checks>40) return;
//     mce_preload_checks++;
//     try {
//         var jqueryLoaded=jQuery;
//     } catch(err) {
//         setTimeout('mce_preload_check();', 250);
//         return;
//     }
//     var script = document.createElement('script');
//     script.type = 'text/javascript';
//     script.src = 'http://downloads.mailchimp.com/js/jquery.form-n-validate.js';
//     head.appendChild(script);
//     try {
//         var validatorLoaded=jQuery("#fake-form").validate({});
//     } catch(err) {
//         setTimeout('mce_preload_check();', 250);
//         return;
//     }
//     mce_init_form();
// }
// function mce_init_form(){
//     jQuery(document).ready( function($) {
//       var options = { errorClass: 'mce_inline_error', errorElement: 'div', onkeyup: function(){}, onfocusout:function(){}, onblur:function(){}  };
//       var mce_validator = $("#mc-embedded-subscribe-form").validate(options);
//       $("#mc-embedded-subscribe-form").unbind('submit');//remove the validator so we can get into beforeSubmit on the ajaxform, which then calls the validator
//       options = { url: 'http://listentoo.us7.list-manage1.com/subscribe/post-json?u=11df2122a2a2c5c3fc46242c5&id=c6dafce16b&c=?', type: 'GET', dataType: 'json', contentType: "application/json; charset=utf-8",
//                     beforeSubmit: function(){
//                         $('#mce_tmp_error_msg').remove();
//                         $('.datefield','#mc_embed_signup').each(
//                             function(){
//                                 var txt = 'filled';
//                                 var fields = new Array();
//                                 var i = 0;
//                                 $(':text', this).each(
//                                     function(){
//                                         fields[i] = this;
//                                         i++;
//                                     });
//                                 $(':hidden', this).each(
//                                     function(){
//                                         var bday = false;
//                                         if (fields.length == 2){
//                                             bday = true;
//                                             fields[2] = {'value':1970};//trick birthdays into having years
//                                         }
//                                       if ( fields[0].value=='MM' && fields[1].value=='DD' && (fields[2].value=='YYYY' || (bday && fields[2].value==1970) ) ){
//                                         this.value = '';
//                       } else if ( fields[0].value=='' && fields[1].value=='' && (fields[2].value=='' || (bday && fields[2].value==1970) ) ){
//                                         this.value = '';
//                       } else {
//                           if (/\[day\]/.test(fields[0].name)){
//                                               this.value = fields[1].value+'/'+fields[0].value+'/'+fields[2].value;                         
//                           } else {
//                                               this.value = fields[0].value+'/'+fields[1].value+'/'+fields[2].value;
//                                           }
//                                       }
//                                     });
//                             });
//                         $('.phonefield-us','#mc_embed_signup').each(
//                             function(){
//                                 var fields = new Array();
//                                 var i = 0;
//                                 $(':text', this).each(
//                                     function(){
//                                         fields[i] = this;
//                                         i++;
//                                     });
//                                 $(':hidden', this).each(
//                                     function(){
//                                         if ( fields[0].value.length != 3 || fields[1].value.length!=3 || fields[2].value.length!=4 ){
//                                         this.value = '';
//                       } else {
//                           this.value = 'filled';
//                                       }
//                                     });
//                             });
//                         return mce_validator.form();
//                     }, 
//                     success: mce_success_cb
//                 };
//       $('#mc-embedded-subscribe-form').ajaxForm(options);
      
      
//     });
// }
// function mce_success_cb(resp){
//     $('#mce-success-response').hide();
//     $('#mce-error-response').hide();
//     if (resp.result=="success"){
//         $('#mce-'+resp.result+'-response').show();
//         $('#mce-'+resp.result+'-response').html(resp.msg);
//         $('#mc-embedded-subscribe-form').each(function(){
//             this.reset();
//       });
//     } else {
//         var index = -1;
//         var msg;
//         try {
//             var parts = resp.msg.split(' - ',2);
//             if (parts[1]==undefined){
//                 msg = resp.msg;
//             } else {
//                 i = parseInt(parts[0]);
//                 if (i.toString() == parts[0]){
//                     index = parts[0];
//                     msg = parts[1];
//                 } else {
//                     index = -1;
//                     msg = resp.msg;
//                 }
//             }
//         } catch(e){
//             index = -1;
//             msg = resp.msg;
//         }
//         try{
//             if (index== -1){
//                 $('#mce-'+resp.result+'-response').show();
//                 $('#mce-'+resp.result+'-response').html(msg);            
//             } else {
//                 err_id = 'mce_tmp_error_msg';
//                 html = '<div id="'+err_id+'" style="'+err_style+'"> '+msg+'</div>';
                
//                 var input_id = '#mc_embed_signup';
//                 var f = $(input_id);
//                 if (ftypes[index]=='address'){
//                     input_id = '#mce-'+fnames[index]+'-addr1';
//                     f = $(input_id).parent().parent().get(0);
//                 } else if (ftypes[index]=='date'){
//                     input_id = '#mce-'+fnames[index]+'-month';
//                     f = $(input_id).parent().parent().get(0);
//                 } else {
//                     input_id = '#mce-'+fnames[index];
//                     f = $().parent(input_id).get(0);
//                 }
//                 if (f){
//                     $(f).append(html);
//                     $(input_id).focus();
//                 } else {
//                     $('#mce-'+resp.result+'-response').show();
//                     $('#mce-'+resp.result+'-response').html(msg);
//                 }
//             }
//         } catch(e){
//             $('#mce-'+resp.result+'-response').show();
//             $('#mce-'+resp.result+'-response').html(msg);
//         }
//     }
// }