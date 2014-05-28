Pick your tools by matching philosophies, ignore the noise

There continues to be a lot of chatter in the blogosphere about the plethora of Javascript frameworks being a signal that the Javascript framework world is a bubble in its current state. This talk is meant to ruffle feathers - Javascript is 19 years old and still gaining speed and power. However, in this vein I do remind myself regularly, whether in regards to a language or a framework, that it is one option of many with strengths and weaknesses. Krasimir Tsonev (article below) paraphrases <a href="http://krasimirtsonev.com/blog/article/The-Power-Of-Simplicity-by-Jeremy-Keith">Jeremy Keith</a> in reminding us, "the most important thing while choosing your tool is the philosophy of the person who made the tool and if that philosophy aligns with yours. If the ideas of the framework do not align with yours, very soon, you will go against them." To me, this makes the Javascript-is-a-bubble argument moot.


=======
=======
=======

News
=======
=======

Kendo UI Core goes open source

The contest between jQuery and Kendo UI continues! Telerik has open-sourced Kendo UI Core, meaning developers no longer have to pay the steep $699 price tag for Kendo UI, and still <a href="https://github.com/telerik/kendo-ui-core#features-of-kendo-ui-core/">get the majority of the features</a>. Consider Kendo UI especially if you're building a JS web app that needs to be mobile-friendly as well. The truth is, Sencha already open-sourced <a href="https://github.com/senchalabs/jQTouch" >jQTouch</a>, so if all you need is mobile app framework to be compile with PhoneGap, then your choices should be between Kendo and Sencha. Telerik's hosting a webinar on May 7th too if you want to learn more.

Announcing Kendo UI Core
Kendo UI
http://blogs.telerik.com/kendoui/posts/14-04-16/announcing-kendo-ui-core

=======

WordPress 3.9 released and site admins couldn't be happier

WordPress <a href="http://wordpress.org/news/2013/10/basie/">3.7</a> was about behind-the-scenes functionality, <a href="http://wordpress.org/news/2013/12/parker/">3.8</a> was about a cleaner, mobile admin user interface, and finally, <a href="http://wordpress.org/news/2014/4/smith/">3.9</a>, or "Smith" is about the content creator editing and publishing with confidence. How you may ask? Rich media management. Audio, video, photo galleries can all be seen from the Edit Post menu which will win hearts of site managers. They even added audio and video playlists. I really believe their tagline for 3.9 is on target: "closing the gap between your vision and your content" - which is most people's biggest complaint about using WordPress... And yes, Front End Dev Weekly has updated to WP 3.9.

WordPress 3.9, “Smith”
Brian Krogsgard
http://www.poststat.us/wordpress-3-9/


Libraries
=======
=======

In-browser zipping with Javascript

About a year ago I was kicking around an idea for a project at work that would be the <a href="http://www.initializr.com/">Initializr</a> for Placester, an web-based GUI to allow developers to build and download custom packages of our themes, framework, and plugin. I didn't know about this library at the time, but having found this now, I could build and launch this project in a day with JSZip.

jszip - Create, read and edit .zip files with Javascript
Stuart Knightley
https://github.com/Stuk/jszip


=======

Take control of the right click

One of the biggest compromises that web apps make is that they're web-based and not native. This may seem obvious, but remembering this is important for improving the user experience. And don't get me wrong, it's a great compromise for development time, software updates and accessibility, but most web apps strive for a native experience as most of them probably should. ContextJS is an incremental step towards users feeling they're in a native environment, by giving the web app control of the right click menu.

Jacob Kelley
ContextJS
http://lab.jakiestfu.com/contextjs/






Performance
=======
=======


A step towards being a render performance expert

Everyone knows that you should minify CSS and JS. <a href="http://www.html5rocks.com/en/tutorials/speed/css-paint-times/">Flat design</a> (removing box-shadows, gradients, etc.) and CSS <a href="http://css-tricks.com/efficiently-rendering-css/">specificity</a> will reduce paint time as well. But what happens when you do all that, get to 1.85sec load times and really know it should be down below 1sec? Chelsea Derrick from Google has a great I/O <a href="https://developers.google.com/events/io/sessions/324511365">presentation on debugging CSS rendering performance</a> which will level you up, guaranteed. The bottom line is Chrome's Continuous Paint Mode. This article shows you how to investigate paint time on the page with Google's Dev Tools.

Profiling Long Paint Times with DevTools' Continuous Painting Mode
Paul Irish
http://updates.html5rocks.com/2013/02/Profiling-Long-Paint-Times-with-DevTools-Continuous-Painting-Mode



Learning
=======
=======

Bucking main-stream component organization in web apps

As a developer, I've always learned best by watching other people implement things. In this article, Krasimir Tsonev gives a detailed narrative of finding the best path forward with a client's project with legacy code. I was saying "no way" while reading the whole article. But once I got to the conclusion, I realized that the big frameworks and main-stream workflows and organizing components aren't right for every project. Krasimir reminds us to reflect deeply on the needs of a project and to be ok with venturing off the beaten path (in his case, it was with <a href="http://absurdjs.com/">AbsurbJS</a>).

Componentizing the Web
Krasimir Tsonev
http://code.tutsplus.com/tutorials/componentizing-the-web--cms-20602



Dev Tools
=======
=======

Sprites: Arguably the #1 reason to use Compass and not just Sass

I think this tutorial on how to use spriting with Compass is much better than <a href="http://compass-style.org/help/tutorials/spriting/">Compass's spriting docs</a>. I think many people use Compass for it's automatic compiling of Sass and it's mixins, which are great. However, in my opinion, the spriting engine in Compass is the best reason to use it.

Spriting with Sass and Compass
Aleksandar Goševski
http://thesassway.com/intermediate/spriting-with-sass-and-compass




SEO
=======
=======

Google cares the most about the meta tags you probably don't use

Blogger headshots, real estate open houses, author attribution, and restaurant and movie reviews. Ever wonder how these get inline into Google search results with images, stars for ratings, and special time tables? You don't have to wait for Google to magically parse your site. <a href="http://schema.org/docs/gs.html">Schema tags</a> are the key to telling Google what it should pay attention to and what rich meta info should be inline in search. Get even more from Schema tags here... <a href="http://moz.com/ugc/getting-the-most-out-of-schemaorg-microformats">Want a deeper dive</a>?

Schema.org - Why You're Behind if You're Not Using It...
Craig Bradford
http://moz.com/blog/schema-examples