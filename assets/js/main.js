function smoothScroll(content, viewport, smoothness) {
  content = gsap.utils.toArray(content)[0];
  smoothness = smoothness || 1;

  gsap.set(viewport || content.parentNode, {
    overflow: "hidden",
    position: "fixed",
    height: "100%",
    width: "100%",
    top: 0,
    left: 0,
    right: 0,
    bottom: 0,
  });
  gsap.set(content, { overflow: "visible", width: "100%" });

  let getProp = gsap.getProperty(content),
    setProp = gsap.quickSetter(content, "y", "px"),
    setScroll = ScrollTrigger.getScrollFunc(window),
    removeScroll = () => (content.style.overflow = "visible"),
    killScrub = (trigger) => {
      let scrub = trigger.getTween
        ? trigger.getTween()
        : gsap.getTweensOf(trigger.animation)[0]; // getTween() was added in 3.6.2
      scrub && scrub.pause();
      trigger.animation.progress(trigger.progress);
    },
    height,
    isProxyScrolling;

  function refreshHeight() {
    height = content.clientHeight;
    content.style.overflow = "visible";
    document.body.style.height = height + "px";
    return height - document.documentElement.clientHeight;
  }

  ScrollTrigger.addEventListener("refresh", () => {
    removeScroll();
    requestAnimationFrame(removeScroll);
  });
  ScrollTrigger.defaults({ scroller: content });
  ScrollTrigger.prototype.update = (p) => p; // works around an issue in ScrollTrigger 3.6.1 and earlier (fixed in 3.6.2, so this line could be deleted if you're using 3.6.2 or later)

  ScrollTrigger.scrollerProxy(content, {
    scrollTop(value) {
      if (arguments.length) {
        isProxyScrolling = true; // otherwise, if snapping was applied (or anything that attempted to SET the scroll proxy's scroll position), we'd set the scroll here which would then (on the next tick) update the content tween/ScrollTrigger which would try to smoothly animate to that new value, thus the scrub tween would impede the progress. So we use this flag to respond accordingly in the ScrollTrigger's onUpdate and effectively force the scrub to its end immediately.
        setProp(-value);
        setScroll(value);
        return;
      }
      return -getProp("y");
    },
    scrollHeight: () => document.body.scrollHeight,
    getBoundingClientRect() {
      return {
        top: 0,
        left: 0,
        width: window.innerWidth,
        height: window.innerHeight,
      };
    },
  });

  return ScrollTrigger.create({
    animation: gsap.fromTo(
      content,
      { y: 0 },
      {
        y: () => document.documentElement.clientHeight - height,
        ease: "none",
        onUpdate: ScrollTrigger.update,
      }
    ),
    scroller: window,
    invalidateOnRefresh: true,
    start: 0,
    end: refreshHeight,
    refreshPriority: -999,
    scrub: smoothness,
    onUpdate: (self) => {
      if (isProxyScrolling) {
        killScrub(self);
        isProxyScrolling = false;
      }
    },
    onRefresh: killScrub, // when the screen resizes, we just want the animation to immediately go to the appropriate spot rather than animating there, so basically kill the scrub.
  });
}
window.addEventListener("load", function () {
  let device_width = window.innerWidth;

  if (device_width > 100) {
    var why_us = document.querySelector(".horizontal-scroll-1");
    let sections = gsap.utils.toArray(".h-section");
    //        var elemWidth = why_us.offsetWidth * 2;

    gsap.to(sections, {
      xPercent: -100 * (sections.length - 0.99),
      ease: "none",
      scrollTrigger: {
        trigger: why_us,
        start: "top top+=0",
        end: "+=3000",
        scrub: 2,
        pin: true,
        //            snap: 1 / (sections.length - 1),
        //            end: () => "+=" + elemWidth,
        //            end: () => "+=5000",
        pinSpacing: true,
        //            markers: true,
        invalidateOnRefresh: true,
      },
    });
  }
});


const btnElement = document.getElementById("clickable")
document.addEventListener("DOMContentLoaded",function(){
  btnElement.addEventListener("click",function(){
      console.log("btn is cliked");
      
  })
})