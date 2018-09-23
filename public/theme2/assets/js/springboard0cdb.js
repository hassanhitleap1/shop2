if(document.location.search.indexOf('disable_springboard=1') === -1) {
// Springboard v3.87
window.springBoard=window.springBoard||{},window.springBoard.urlParams,window.springBoard.revision=3.87,window.springBoard.qualarooInterval=25,window.springBoard.inspectletInterval=25,window.springBoard.createCookie=function(e,i,n){if(n){var o=new Date;o.setTime(o.getTime()+24*n*60*60*1e3);var t="; expires="+o.toGMTString()}else var t="";var a="undefined"!=typeof window.springBoard.cookieDomain?window.springBoard.cookieDomain:0==document.location.host.indexOf("www.")?document.location.host.substr(3,document.location.host.length):document.location.host;return document.cookie=escape(e)+"="+escape(i)+t+";domain="+a+";path=/"+("https:"==document.location.protocol?"; secure":""),null},window.springBoard.readCookie=function(e){for(var i=escape(e)+"=",n=document.cookie.split(";"),o=0;o<n.length;o++){for(var t=n[o];" "==t.charAt(0);)t=t.substring(1,t.length);if(0==t.indexOf(i))return unescape(t.substring(i.length,t.length))}return null},window.springBoard.eraseCookie=function(e){return window.springBoard.createCookie(e,"",-1),null},window.springBoard.addCss=function(e){var i=document.getElementsByTagName("head")[0],n=document.createElement("style");n.type="text/css",n.styleSheet?n.styleSheet.cssText=e:n.appendChild(document.createTextNode(e)),i.appendChild(n)},window.springBoard.addJS=function(e){var i=document.getElementsByTagName("head")[0],n=document.createElement("script");n.type="text/javascript",n.src=e,i.appendChild(n)},window.onpopstate=function(){var e,i=/\+/g,n=/([^&=]+)=?([^&]*)/g,o=function(e){return decodeURIComponent(e.replace(i," "))},t=window.location.search.substring(1);for(window.springBoard.urlParams={};e=n.exec(t);)window.springBoard.urlParams[o(e[1])]=o(e[2])},window.onpopstate(),window.springBoard.checkCookies=function(){if(window.springBoard.urlParams.cfQA){var e=window.springBoard.urlParams.cfQA.toLowerCase();"true"==e&&window.springBoard.createCookie("cfQA","true"),"false"==e&&window.springBoard.eraseCookie("cfQA")}if(window.springBoard.urlParams.cvDisable){var i=window.springBoard.urlParams.cvDisable.toLowerCase();"true"==i&&(window.springBoard.createCookie("cvDisable","true"),window.optimizely=window.optimizely||[],window.optimizely.push(["disable"])),"false"==i&&window.springBoard.eraseCookie("cvDisable")}"true"==window.springBoard.readCookie("cvDisable")&&(document.title="[DISABLED] "+document.title)},window.springBoard.checkCookies(),window.springBoard.postOptimizelyActions=function(){if("undefined"!=typeof window.optimizely&&"undefined"!=typeof window.optimizely.data&&"undefined"!=typeof window.optimizely.data.state&&"undefined"!=typeof window.optimizely.data.experiments){window.springBoard.postGAActions(),setTimeout(window.springBoard.postGAActions,5e3),window.springBoard.qualarooIntegration(),window.springBoard.inspectletIntegration(),"true"==window.springBoard.readCookie("cfQA")&&(document.title="[QA] "+document.title);var e=window.optimizely.data.state.activeExperiments;window.springBoard.experimentData="";for(var i=0;i<e.length;i++)window.springBoard.experimentData=window.springBoard.experimentData+window.optimizely.data.experiments[e[i]].name+" | "+e[i]+" | "+window.optimizely.data.state.variationNamesMap[e[i]]+"\n"}else setTimeout(function(){window.springBoard.postOptimizelyActions()},500)},window.springBoard.qualarooIntegration=function(){if("undefined"!=typeof window._kiq){var e=[],i=[],n="";for(var o in window.optimizely.data.state.variationNamesMap)window.optimizely.data.state.variationNamesMap.hasOwnProperty(o)&&(e.push(optimizely.data.experiments[o].name),i.push(optimizely.data.state.variationNamesMap[o]));for(var t=0;t<e.length;t++)n=n+e[t]+":"+i[t]+", ";if(window._kiq.push(["set",{"Optimizely Tests":n}]),"undefined"!=typeof window.__insp&&"undefined"!=typeof window.__insp.wid&&"undefined"!=typeof window.__insp.sid){var a="http://www.inspectlet.com/dashboard/watchsession/",d=window.__insp.wid,r=window.__insp.sid,w=a+d+"/"+r+"?pn=1";window._kiq.push(["set",{video:w}])}else window.springBoard.qualarooInterval=2*window.springBoard.qualarooInterval,setTimeout(function(){window.springBoard.qualarooIntegration()},window.springBoard.qualarooInterval)}else window.springBoard.qualarooInterval=2*window.springBoard.qualarooInterval,setTimeout(function(){window.springBoard.qualarooIntegration()},window.springBoard.qualarooInterval)},window.springBoard.inspectletIntegration=function(){if("undefined"!=typeof window.__insp)for(var e=window.optimizely.activeExperiments,i=e.length-1;i>=0;i--)__insp.push(["tagSession",optimizely.data.experiments[e[i]].name+"-"+optimizely.variationNamesMap[e[i]]]);else window.springBoard.inspectletInterval=2*window.springBoard.inspectletInterval,setTimeout(function(){window.springBoard.inspectletIntegration()},window.springBoard.inspectletInterval)},window.springBoard.postGAActions=function(){if("undefined"!=typeof window.optimizely&&"undefined"!=typeof window.optimizely.activeExperiments&&("undefined"!=typeof window.ga&&"undefined"!=typeof window.ga.getAll||"undefined"!=typeof window._gaq&&"undefined"==typeof window._gaq.length)){if("undefined"==typeof window.springBoard.disableGAEvents){var e=window.optimizely.activeExperiments,i="";if("undefined"!=typeof window._gaq&&"undefined"==typeof window._gaq.length&&"universal"!==window.springBoard.forceGAType){if("undefined"!=typeof window.springBoard.forceGATrackingId&&"undefined"!==window._gat&&"undefined"!=typeof window._gat.fb&&window._gat.fb!=window.springBoard.forceGATrackingId)return setTimeout(window.springBoard.postGAActions,50),!1;if("undefined"!=typeof window._gat&&("undefined"!=typeof window._gat.nb||"undefined"!=typeof window._gat.C))if("undefined"!=typeof window._gat.nb){for(var n in window._gat.nb)if(window._gat.nb.hasOwnProperty(n)){var o=/^gtm/;if(null!==n.match(o)){i=n+".";break}}}else for(var n in window._gat.C)if(window._gat.C.hasOwnProperty(n)){var o=/^gtm/;if(null!==n.match(o)){i=n+".";break}}}else if("undefined"!=typeof window.ga&&"undefined"!=typeof window.ga.getAll&&"classic"!==window.springBoard.forceGAType)if("undefined"!=typeof window.springBoard.forceGATrackingId){for(var t=window.ga.getAll(),a=0;a<t.length;a++)t[a].get("trackingId")==window.springBoard.forceGATrackingId&&(i="t0"==t[a].get("name")?"":t[a].get("name")+".");if(""===i)return setTimeout(window.springBoard.postGAActions,50),!1}else i="t0"==window.ga.getAll()[0].get("name")?"":window.ga.getAll()[0].get("name")+".";if("undefined"==typeof window.springBoard.disableSegmentEvents&&(null===window.springBoard.readCookie("springBoardSegments")||window.springBoard.readCookie("springBoardSegments")!==JSON.stringify(window.optimizely.data.visitor.segments))){window.springBoard.createCookie("springBoardSegments",JSON.stringify(window.optimizely.data.visitor.segments),1);var d=[];for(var n in window.optimizely.data.segments)window.optimizely.data.segments.hasOwnProperty(n)&&(d=d+window.optimizely.data.segments[n].name+":"+window.optimizely.data.visitor.segments[n]+",");"undefined"!=typeof window._gaq&&"undefined"==typeof window._gaq.length&&"universal"!==window.springBoard.forceGAType?_gaq.push([i+"_trackEvent","Optimizely Segments","Segments",d,1,!0]):"undefined"!=typeof window.ga&&"undefined"!=typeof window.ga.getAll&&"classic"!==window.springBoard.forceGAType&&window.ga(i+"send",{hitType:"event",eventCategory:"Optimizely Segments",eventAction:"Segments",eventLabel:d,nonInteraction:1})}if("undefined"!=typeof window._gaq&&"undefined"==typeof window._gaq.length&&"universal"!==window.springBoard.forceGAType)for(var r=e.length-1;r>=0;r--)_gaq.push([i+"_trackEvent","Optimizely",optimizely.data.experiments[e[r]].name,optimizely.data.experiments[e[r]].name+"-"+optimizely.variationNamesMap[e[r]],1,!0]);else if("undefined"!=typeof window.ga&&"undefined"!=typeof window.ga.getAll&&"classic"!==window.springBoard.forceGAType)for(var a=e.length-1;a>=0;a--)window.ga(i+"send",{hitType:"event",eventCategory:"Optimizely",eventAction:window.optimizely.data.experiments[e[a]].name,eventLabel:window.optimizely.data.experiments[e[a]].name+"-"+window.optimizely.variationNamesMap[e[a]],nonInteraction:1})}}else setTimeout(window.springBoard.postGAActions,50)},window.springBoard.postOptimizelyActions(),window.cFact=window.springBoard;

// Clickouts cookie
if(window.springBoard.readCookie('cv-clickouts') === null) {
    window.springBoard.createCookie('cv-clickouts', 0);
}

// Optimizely Universal Analytics Integration Code
window.optimizely = window.optimizely || [];
window.optimizely.push("activateUniversalAnalytics");

var nmrActiveExp = -1, nmrClickouts = -1;

//if(document.location.origin === "https://staging.thisiswhyimbroke.com" || window.springBoard.readCookie('cfQA') == "true" && document.location.search.indexOf('disable_cfqa=1') === -1 ) {




/*} else {
    setInterval(function(){
        if(typeof window.optimizely !== "undefined" && typeof window.optimizely.allExperiments !== "undefined" && window.optimizely.activeExperiments.length && $('a[href*=".amazon."]').length && document.location.search.indexOf('disable_tracking=1') === -1) {

            var expInfo, expId, metaInfo = '';
            for(var key in window.optimizely.activeExperiments) {
                expId = window.optimizely.activeExperiments[key];
                expInfo = window.optimizely.allExperiments[expId];

                if(typeof expInfo !== "undefined" && expInfo.name.substring(0,3) !== "[W]") {
                    metaInfo += (metaInfo.length ? '.' : '') + parseInt(expId + optimizely.variationMap[expId]).toString(36);
                }
            }

            if(nmrActiveExp !== window.optimizely.activeExperiments.length) {
                $('a[href*=".amazon."]:not(.cv_tracked)').removeClass('cv_tracked');
                nmrActiveExp = window.optimizely.activeExperiments.length;
            }

            $('a[href*=".amazon."]:not(.cv_tracked)').each(function(index, el) {
                if($(this).attr('href').indexOf('ascsubtag=') > -1 && $(this).attr('href').indexOf('ascsubtag=default') === -1) {
                    var ascsubtag = 'ascsubtag=';

                    for(var i = $(this).attr('href').indexOf('ascsubtag=') + 10; i < $(this).attr('href').length; i++) {
                        if($(this).attr('href')[i] === '&') {
                            break;
                        }

                        ascsubtag += $(this).attr('href')[i];
                    };

                    $(this).attr('href', $(this).attr('href').replace(ascsubtag, ascsubtag + '_' + metaInfo));
                    $(this).addClass('cv_tracked');
                }
            });
        }

    }, 25);
}*/

function hasSpecialHashTag() {
    if(document.location.hash === '#recommended') {
        var recommendedLoaded = setInterval(function(){
            if($('.recommended-items').length && $('.flex-social').length) {
                clearInterval(recommendedLoaded);
                $('.flex-social').attr('id', 'recommended');
                $('body').scrollTop($('.recommended-items').offset().top - 100);
            }
        },25);
    }
};

var checkAngular = setInterval(function() {
    try {
        if (typeof window.angular !== 'undefined' && typeof angular.element !== 'undefined' && typeof angular.element($('body')).scope() !== 'undefined') { // element that has the ng-app tag (in this case body)
            clearInterval(checkAngular);

            $rootScope = angular.element($('body')).scope(); // element that has the ng-app tag (in this case body)

            $rootScope.$on('$locationChangeSuccess', function(e, newURL, oldURL){

                // Pageviews
                setTimeout(function(){
                    if($('.flex-container.home').length) { // Pageviews - Homepage
                        console.log('Pageviews - Homepage');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_homepage']);

                        if($('.filters ul li.selected:contains(Popular)').length) { // Pageviews - Popular
                            console.log('Pageviews - Popular');
                            window.optimizely.push(['trackEvent', '[conv]_pageviews_-_popular']);
                        } else if($('.filters ul li.selected:contains(Price Range)').length) { // Pageviews - Price Range
                            console.log('Pageviews - Price Range');
                            window.optimizely.push(['trackEvent', '[conv]_pageviews_-_price_range']);
                        }
                    } else if($('div.gifts-main').length) { // Pageviews - Category Page
                        console.log('Pageviews - Category Page');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_category_page']);
                    } else if($('.flex-image').length) { // Pageviews - Product Page
                        console.log('Pageviews - Product Page');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_product_page']);

                        hasSpecialHashTag();
                    }

                    if(document.location.pathname === "/gifts/gifts-for-geeks/") { // Pageviews - “Gifts For Geeks”
                        console.log('Pageviews - Gifts For Geeks');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_gifts_for_geeks']);
                    } else if(document.location.href === "http://www.thisiswhyimbroke.com/wishlisted-price/?to=20") { // Pageviews - "Gifts Under $20"
                        console.log('Pageviews - Gifts Under $20');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_gifts_under_$20']);
                    }

                    window.springBoard.postGAActions();
                }, 3000);

            });
        }
    } catch (e) {
        console.log(e);
    }
}, 25);

var jQueryLoaded = setInterval(function(){
    try {
        if(typeof window.$ !== 'undefined') {
            clearInterval(jQueryLoaded);

            // Pageviews
            var pageLoaded = setInterval(function(){
                if($('.flex-container.home').length || $('div.gifts-main').length || $('.flex-image').length) {
                    clearInterval(pageLoaded);

                    if($('.flex-container.home').length) { // Pageviews - Homepage
                        console.log('Pageviews - Homepage');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_homepage']);

                        if($('.filters ul li.selected:contains(Popular)').length) { // Pageviews - Popular
                            console.log('Pageviews - Popular');
                            window.optimizely.push(['trackEvent', '[conv]_pageviews_-_popular']);
                        } else if($('.filters ul li.selected:contains(Price Range)').length) { // Pageviews - Price Range
                            console.log('Pageviews - Price Range');
                            window.optimizely.push(['trackEvent', '[conv]_pageviews_-_price_range']);
                        }
                    } else if($('div.gifts-main').length) { // Pageviews - Category Page
                        console.log('Pageviews - Category Page');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_category_page']);
                    } else if($('.flex-image').length) { // Pageviews - Product Page
                        console.log('Pageviews - Product Page');
                        window.optimizely.push(['trackEvent', '[conv]_pageviews_-_product_page']);

                        hasSpecialHashTag();
                    }
                }
            }, 25);

            if(document.location.pathname === "/gifts/gifts-for-geeks/") { // Pageviews - “Gifts For Geeks”
                console.log('Pageviews - Gifts For Geeks');
                window.optimizely.push(['trackEvent', '[conv]_pageviews_-_gifts_for_geeks']);
            } else if(document.location.href === "http://www.thisiswhyimbroke.com/wishlisted-price/?to=20") { // Pageviews - "Gifts Under $20"
                console.log('Pageviews - Gifts Under $20');
                window.optimizely.push(['trackEvent', '[conv]_pageviews_-_gifts_under_$20']);
            }

            // All clickouts (update subtags)
            window.$(document).on('mousedown', '.flex-container.home a.external, .hero-banner, div.gifts-main a.external, .flex-image a, .other-images a, .details .button:not(.button-save) a, .tiw006-dotd-banner a, #page-search a.external, #tiw007-fancybox a.external', function(event) {
                var _self = $(this);
                setTimeout(function(){
                    try {
                        if(_self.attr('href').indexOf('www.amazon.') > -1) {
                            window.springBoard.createCookie('cv-clickouts', (parseInt(window.springBoard.readCookie('cv-clickouts')) + 1 ));
                        }
                    } catch (e) {
                        console.log(e.message);
                    }
                }, 250);
            });

            // Clickouts - Homepage
            window.$(document).on('mousedown', '.flex-container.home a.external', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_clickouts_-_homepage']);
                    window.optimizely.push(['trackEvent', '[conv]_total_clickouts']);

                    if($(this).attr('href').indexOf('www.amazon.') > -1) {
                        window.optimizely.push(['trackEvent', '[conv]_amazon_clickouts']);
                    }

                    if(document.location.pathname.indexOf('/popular/') > -1) {
                        window.optimizely.push(['trackEvent', '[conv]_clickouts_-_popular']);
                    } else if($('.filters ul li.selected:contains(Price Range)').length) {
                        window.optimizely.push(['trackEvent', '[conv]_clickouts_-_price_range']);
                    }
                } catch (e) {
                    console.log(e.message);
                }
            });

            // "Deals of the Day" Clickouts - Homepage
            window.$(document).on('mousedown', '.hero-banner', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_"deals_of_the_day"_clickouts_-_homepage']);
                    window.optimizely.push(['trackEvent', '[conv]_total_clickouts']);
                    window.optimizely.push(['trackEvent', '[conv]_amazon_clickouts']);

                    if($(this).attr('href').indexOf('tag=dotdb') > -1){
                        window.optimizely.push(['trackEvent', 'deals_of_the_day_banner_clickouts_-_total']);
                    }
                } catch (e) {
                    console.log(e.message);
                }
            });

            // Revcontent clickouts
            window.$(document).on('mousedown', 'article.revcontent a', function(event) {
                try {
                    window.optimizely.push(['trackEvent', 'revcontent_click']);
                } catch (e) {
                    console.log(e.message);
                }
            });

            // Purchase notification widget clickouts
            window.$(document).on('mousedown', '#purchase-notification a', function(event) {
                try {
                    window.optimizely.push(['trackEvent', 'purchasenotification_click']);
                    window.optimizely.push(['trackEvent', '[conv]_total_clickouts']);

                    if($(this).attr('href').indexOf('www.amazon.') > -1) {
                        window.optimizely.push(['trackEvent', '[conv]_amazon_clickouts']);
                    }

                } catch (e) {
                    console.log(e.message);
                }
            });



            // Clickouts - Category Pages (e.g. Gifts for Men)
            window.$(document).on('mousedown', 'div.gifts-main a.external', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_clickouts_-_category_pages']);
                    window.optimizely.push(['trackEvent', '[conv]_total_clickouts']);

                    if($(this).attr('href').indexOf('www.amazon.') > -1) {
                        window.optimizely.push(['trackEvent', '[conv]_amazon_clickouts']);
                    }
                } catch (e) {
                    console.log(e.message);
                }
            });

            // Clickouts - Product Pages
            window.$(document).on('mousedown', '.flex-image a, .other-images a, .details .button:not(.button-save) a, .tiw006-dotd-banner a', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_clickouts_-_product_pages']);
                    window.optimizely.push(['trackEvent', '[conv]_total_clickouts']);

                    if($(this).attr('href').indexOf('www.amazon.') > -1) {
                        window.optimizely.push(['trackEvent', '[conv]_amazon_clickouts']);

                        if($(this).attr('href').indexOf('tag=dotdb') > -1){
                            window.optimizely.push(['trackEvent', 'deals_of_the_day_banner_clickouts_-_total']);
                        }
                    }
                } catch (e) {
                    console.log(e.message);
                }
            });

            // Clickouts - Search Results
            window.$(document).on('mousedown', '#page-search a.external', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_clickouts_-_search_results_page']);
                    window.optimizely.push(['trackEvent', '[conv]_total_clickouts']);

                    if($(this).attr('href').indexOf('www.amazon.') > -1) {
                        window.optimizely.push(['trackEvent', '[conv]_amazon_clickouts']);
                    }
                } catch (e) {
                    console.log(e.message);
                }
            });

            // Logins
            window.$(document).on('mousedown', 'form[name="loginform"] input[type="submit"]', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_logins']);
                } catch (e) {
                    console.log(e.message);
                }
            });

            // Registrations
            window.$(document).on('mousedown', 'form.register-form input[type="submit"]', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_registrations']);
                } catch (e) {
                    console.log(e.message);
                }
            });

            // "Save" CTA Clicks
            window.$(document).on('mousedown', '.add-wishlist', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_"save"_cta_clicks']);
                    window.optimizely.push(['trackEvent', '[conv]_total_"save"_clicks']);
                } catch (e) {
                    console.log(e.message);
                }
            });

            // "Save" Counter Clicks
            window.$(document).on('mousedown', '.saved-count', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_"save"_counter_clicks']);
                    window.optimizely.push(['trackEvent', '[conv]_total_"save"_clicks']);
                } catch (e) {
                    console.log(e.message);
                }
            });

            // Related Product Clickouts
            window.$(document).on('mousedown', '.recommended-items a.external', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_total_clickouts']);

                    if($(this).attr('href').indexOf('www.amazon.') > -1) {
                        window.optimizely.push(['trackEvent', '[conv]_amazon_clickouts']);
                    }

                } catch (e) {
                    console.log(e.message);
                }
            });

            // Related Product Clicks
            window.$(document).on('mousedown', '.recommended-items a', function(event) {
                try {
                    window.optimizely.push(['trackEvent', '[conv]_related_product_clicks']);

                } catch (e) {
                    console.log(e.message);
                }
            });

            // Related Product Clicks
            window.$(document).on('mousedown', '.two_thirds_ad a', function(event) {
                try {
                    window.optimizely.push(['trackEvent', 'homepage_banner']);

                } catch (e) {
                    console.log(e.message);
                }
            });

            // Blog post clickouts
            window.$(document).on('mousedown', '.blog-post a', function(event) {
                try {
                    window.optimizely.push(['trackEvent', 'blog_post_clickout']);

                } catch (e) {
                    console.log(e.message);
                }
            });


        }
    } catch (e) {
        console.log(e.message);
    }
}, 25);

window.springBoard.main = function() {};
}
