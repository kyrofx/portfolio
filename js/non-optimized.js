(() => {
    "use strict";
    const t = {};
    class e {
        constructor(t) {
            (this.config = Object.assign({ logging: !0 }, t)), this.observer, !document.documentElement.classList.contains("watcher") && this.scrollWatcherRun();
        }
        scrollWatcherUpdate() {
            this.scrollWatcherRun();
        }
        scrollWatcherRun() {
            document.documentElement.classList.add("watcher"), this.scrollWatcherConstructor(document.querySelectorAll("[data-watch]"));
        }
        scrollWatcherConstructor(t) {
            if (t.length) {
                this.scrollWatcherLogging(`Woke up, watching objects (${t.length})...`),
                    a(
                        Array.from(t).map(function (t) {
                            return `${t.dataset.watchRoot ? t.dataset.watchRoot : null}|${t.dataset.watchMargin ? t.dataset.watchMargin : "0px"}|${t.dataset.watchThreshold ? t.dataset.watchThreshold : 0}`;
                        })
                    ).forEach((e) => {
                        let n = e.split("|"),
                            s = { root: n[0], margin: n[1], threshold: n[2] },
                            o = Array.from(t).filter(function (t) {
                                let e = t.dataset.watchRoot ? t.dataset.watchRoot : null,
                                    n = t.dataset.watchMargin ? t.dataset.watchMargin : "0px",
                                    o = t.dataset.watchThreshold ? t.dataset.watchThreshold : 0;
                                if (String(e) === s.root && String(n) === s.margin && String(o) === s.threshold) return t;
                            }),
                            r = this.getScrollWatcherConfig(s);
                        this.scrollWatcherInit(o, r);
                    });
            } else this.scrollWatcherLogging("scroller is sleepy, there are no objects to track. ZzzZZzz");
        }
        getScrollWatcherConfig(t) {
            let e = {};
            if (
                (document.querySelector(t.root) ? (e.root = document.querySelector(t.root)) : "null" !== t.root && this.scrollWatcherLogging(`Parent object ${t.root} left the page`),
                    (e.rootMargin = t.margin),
                    !(t.margin.indexOf("px") < 0 && t.margin.indexOf("%") < 0))
            ) {
                if ("prx" === t.threshold) {
                    t.threshold = [];
                    for (let e = 0; e <= 1; e += 0.005) t.threshold.push(e);
                } else t.threshold = t.threshold.split(",");
                return (e.threshold = t.threshold), e;
            }
        this.scrollWatcherLogging("Oh no! the data-watch-margin setting needs to be set to PX or %");
        }
        scrollWatcherCreate(t) {
            this.observer = new IntersectionObserver((t, e) => {
                t.forEach((t) => {
                    this.scrollWatcherCallback(t, e);
                });
            }, t);
        }
        scrollWatcherInit(t, e) {
            this.scrollWatcherCreate(e), t.forEach((t) => this.observer.observe(t));
        }
        scrollWatcherIntersecting(t, e) {
            t.isIntersecting
                ? (!e.classList.contains("_watcher-view") && e.classList.add("_watcher-view"), this.scrollWatcherLogging(`${e.classList} added class _watcher-view`))
                : (e.classList.contains("_watcher-view") && e.classList.remove("_watcher-view"), this.scrollWatcherLogging(`${e.classList}, removed _watcher-view class`));
        }
        scrollWatcherOff(t, e) {
            e.unobserve(t), this.scrollWatcherLogging(`Stopped following ${t.classList}`);
        }
        scrollWatcherLogging(t) {
            this.config.logging &&
            (function (t) {
                setTimeout(() => {
                    window.FLS && console.log(t);
                }, 0);
            })(`[Observer (logger)]: ${t}`);
        }
        scrollWatcherCallback(t, e) {
            const n = t.target;
            this.scrollWatcherIntersecting(t, n), n.hasAttribute("data-watch-once") && t.isIntersecting && this.scrollWatcherOff(n, e), document.dispatchEvent(new CustomEvent("watcherCallback", { detail: { entry: t } }));
        }
    }
    let n = {
        Android: function () {
            return navigator.userAgent.match(/Android/i);
        },
        BlackBerry: function () {
            return navigator.userAgent.match(/BlackBerry/i);
        },
        iOS: function () {
            return navigator.userAgent.match(/iPhone|iPad|iPod/i);
        },
        Opera: function () {
            return navigator.userAgent.match(/Opera Mini/i);
        },
        Windows: function () {
            return navigator.userAgent.match(/IEMobile/i);
        },
        any: function () {
            return n.Android() || n.BlackBerry() || n.iOS() || n.Opera() || n.Windows();
        },
    };
    let s = !0,
        o = (t = 500) => {
            let e = document.querySelector("body");
            if (s) {
                let n = document.querySelectorAll("[data-lp]");
                setTimeout(() => {
                    for (let t = 0; t < n.length; t++) {
                        n[t].style.paddingRight = "0px";
                    }
                    (e.style.paddingRight = "0px"), document.documentElement.classList.remove("lock");
                }, t),
                    (s = !1),
                    setTimeout(function () {
                        s = !0;
                    }, t);
            }
        },
        r = (t = 500) => {
            let e = document.querySelector("body");
            if (s) {
                let n = document.querySelectorAll("[data-lp]");
                for (let t = 0; t < n.length; t++) {
                    n[t].style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px";
                }
                (e.style.paddingRight = window.innerWidth - document.querySelector(".wrapper").offsetWidth + "px"),
                    document.documentElement.classList.add("lock"),
                    (s = !1),
                    setTimeout(function () {
                        s = !0;
                    }, t);
            }
        };
    function a(t) {
        return t.filter(function (t, e, n) {
            return n.indexOf(t) === e;
        });
    }
    let l = !1;
    setTimeout(() => {
        if (l) {
            let t = new Event("windowScroll");
            window.addEventListener("scroll", function (e) {
                document.dispatchEvent(t);
            });
        }
    }, 0);
    const c = document.querySelectorAll(".line"),
        i = (document.querySelectorAll("[data-opacity-text"), document.querySelector(".wrapper"));
    if (i && i.classList.contains("wrapper_full") && 0 != c.length) {
        let p = 0;
        c.forEach((t) => {
            (t.style.transitionDelay = p + 0.1 + "s"), (p += 0.05);
        });
    }
    const d = document.querySelectorAll("[data-opacity-text]");
    if (d.length > 0 && d) {
        let f = 0.3;
        d.forEach((t) => {
            let e = Number(f.toFixed(1));
            const n = t.textContent;
            (t.innerHTML = `<span class="animation"><span style="transition-delay:${e + 0.1}s;">${n}</span></span>`), (f += 0.1);
        });
    }
    document.querySelectorAll("[data-hover-parent]");
    document.querySelectorAll(".menu__link").forEach((t) => {
        if (!t.classList.contains("_active")) {
            let e = t.querySelector("span>span>span").innerHTML;
            t.insertAdjacentHTML("beforeend", `<span class="_link-hover"><span>${e}</span></span>`);
            let n = t.querySelector("._link-hover"),
                s = t.querySelector("._link-hover span");
            (n.style.cssText = "transform: translate3d(0px, 105%, 0px);"),
                (s.style.cssText = "transform: translate3d(0px,-105%, 0px);"),
                t.addEventListener("mouseenter", function (t) {
                    (n.style.cssText = "transform: translate3d(0px, 0%, 0px);"), (s.style.cssText = "transform: translate3d(0px, 0%, 0px);");
                }),
                t.addEventListener("mouseleave", function (t) {
                    (n.style.cssText = "transform: translate3d(0px, 105%, 0px);"), (s.style.cssText = "transform: translate3d(0px,-105%, 0px);");
                });
        }
    });
    document.querySelectorAll(".cases-list__link").forEach((t) => {
        if (!t.classList.contains("_active")) {
            let e = t.querySelector("span>span>span").innerHTML;
            t.insertAdjacentHTML("beforeend", `<span class="_link-hover"><span>${e}</span></span>`);
            let n = t.querySelector("._link-hover"),
                s = t.querySelector("._link-hover span");
            (n.style.cssText = "transform: translate3d(0px, -105%, 0px);"),
                (s.style.cssText = "transform: translate3d(0px, 105%, 0px);"),
                t.addEventListener("mouseenter", function (e) {
                    let o = t.offsetHeight / 2;
                    e.pageY - (t.getBoundingClientRect().top + scrollY) > o
                        ? ((n.style.cssText = "transform: translate3d(0px, 105%, 0px);"), (s.style.cssText = "transform: translate3d(0px,-105%, 0px);"))
                        : ((n.style.cssText = "transform: translate3d(0px, -105%, 0px);"), (s.style.cssText = "transform: translate3d(0px, 105%, 0px);")),
                        setTimeout(() => {
                            (n.style.cssText = "transform: translate3d(0px, 0%, 0px); transition: all 0.4s ease 0s;"), (s.style.cssText = "transform: translate3d(0px, 0%, 0px); transition: all 0.4s ease 0s;");
                        }, 5);
                }),
                t.addEventListener("mouseleave", function (e) {
                    let o = t.offsetHeight / 2;
                    e.pageY - (t.getBoundingClientRect().top + scrollY) > o
                        ? ((n.style.cssText = "transform: translate3d(0px, 105%, 0px); transition: all 0.4s ease 0s;"), (s.style.cssText = "transform: translate3d(0px,-105%, 0px); transition: all 0.4s ease 0s;"))
                        : ((n.style.cssText = "transform: translate3d(0px, -105%, 0px); transition: all 0.4s ease 0s;"), (s.style.cssText = "transform: translate3d(0px,105%, 0px); transition: all 0.4s ease 0s;"));
                });
        }
    });
    const u = document.querySelector(".cases-list");
    if (u && !n.any()) {
        const g = u.closest(".content-block").querySelector(".content-block__image"),
            y = u.querySelectorAll(".cases-list__link");
        if (y.length > 0) {
            function x(t, e) {
                const n = new Image();
                (n.style.cssText = "opacity:1;"), (n.src = t), e.prepend(n);
            }
            function w(t) {
                const e = t.querySelector("img");
                (e.style.cssText = "opacity:0;"), e.remove();
            }
            y.forEach((t) => {
                t.addEventListener("mouseenter", function (e) {
                    x(t.querySelector("img").src, g);
                }),
                    t.addEventListener("mouseleave", function (t) {
                        w(g);
                    });
            });
        }
    }
    const h = document.querySelector(".cursor"),
        m = document.querySelectorAll("a");
    document.querySelector("body").addEventListener("mouseleave", () => {
        h.classList.add("hidden");
    }),
        document.addEventListener("mousemove", function (t) {
            (h.style.transform = `translate3d(calc(${t.clientX}px - 50%), calc(${t.clientY}px - 50%), 0)`), h.classList.remove("hidden");
        }),
        document.addEventListener("mousedown", function () {
            h.classList.add("click");
        }),
        document.addEventListener("mouseup", function () {
            h.classList.remove("click");
        }),
        m.forEach((t) => {
            t.addEventListener("mouseenter", () => {
                h.classList.add("hover");
            }),
                t.addEventListener("mouseleave", () => {
                    h.classList.remove("hover");
                });
        }),
        (window.FLS = !1),
        (function (t) {
            let e = new Image();
            (e.onload = e.onerror = function () {
                t(2 == e.height);
            }),
                (e.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA");
        })(function (t) {
            let e = !0 === t ? "webp" : "no-webp";
            document.documentElement.classList.add(e);
        }),
    n.any() && document.documentElement.classList.add("touch"),
        (function () {
            const n = document.images,
                s = n.length,
                o = document.querySelector("#loaderPrecent");
            let r = 0;
            for (let t = 0; t < s; t++) {
                const e = new Image();
                (e.onload = a), (e.onerror = a), (e.src = n[t].src);
            }
            function a() {
                r++,
                    o.style.setProperty("--progress", Math.round((100 / s) * r) + "%"),
                r >= s &&
                window.addEventListener("load", function () {
                    const n = document.querySelector(".menu__after");
                    n && (n.style.cssText = "animation-duration: 0s;"),
                        setTimeout(function () {
                            o.classList.add("is-hidden");
                        }, 500),
                        setTimeout(function () {
                            document.documentElement.classList.add("loaded"), (t.watcher = new e({})), n && (n.style.cssText = "");
                        }, 1500);
                    let s = document.querySelector("body");
                    (s.style.pointerEvents = "none"),
                        setTimeout(function () {
                            s.style.pointerEvents = "auto";
                        }, 3500);
                });
            }
        })(),
    document.querySelector(".icon-menu") &&
    document.addEventListener("click", function (t) {
        s &&
        t.target.closest(".icon-menu") &&
        (((t = 500) => {
            document.documentElement.classList.contains("lock") ? o(t) : r(t);
        })(),
            document.documentElement.classList.toggle("menu-open"));
    }),
        (function () {
            if (document.querySelectorAll("[data-fullscreen]").length && n.any()) {
                function t() {
                    let t = 0.01 * window.innerHeight;
                    document.documentElement.style.setProperty("--vh", `${t}px`);
                }
                window.addEventListener("resize", t), t();
            }
        })(),
        (l = !0),
        (function () {
            const t = document.querySelectorAll("[data-sticky]");
            t.length &&
            t.forEach((t) => {
                let e = {
                    media: t.dataset.sticky ? parseInt(t.dataset.sticky) : null,
                    top: t.dataset.stickyTop ? parseInt(t.dataset.stickyTop) : 0,
                    mobile: t.dataset.stickyMobile ? parseInt(t.dataset.stickyMobile) : null,
                    rightPosition: t.dataset.rightPosition ? parseInt(t.dataset.rightPosition) : null,
                    bottom: t.dataset.stickyBottom ? parseInt(t.dataset.stickyBottom) : 0,
                    header: t.hasAttribute("data-sticky-header") ? document.querySelector("header.header").offsetHeight : 0,
                };
                !(function (t, e) {
                    const n = t.querySelector("[data-sticky-item]"),
                        s = e.header + e.top,
                        o = n.getBoundingClientRect().top + scrollY - s;
                    function r(r) {
                        const a = t.offsetHeight + t.getBoundingClientRect().top + scrollY - (s + n.offsetHeight + e.bottom);
                        let l = { position: "relative", bottom: "auto", top: "0px", left: "0px", width: "auto" };
                        (!e.media || e.media < window.innerWidth) &&
                        s + e.bottom + n.offsetHeight < window.innerHeight &&
                        (scrollY >= o && scrollY <= a
                            ? ((l.position = "fixed"), (l.bottom = "auto"), (l.top = `${s}px`), (l.left = `${n.getBoundingClientRect().left}px`), (l.width = `${n.offsetWidth}px`))
                            : scrollY >= a && ((l.position = "absolute"), (l.bottom = `${e.bottom}px`), (l.top = "auto"), (l.left = "0px"), (l.width = `${n.offsetWidth}px`))),
                        e.mobile && e.mobile >= window.innerWidth && (l = { position: "relative", bottom: "auto", top: "0px", left: "0px", width: "auto" }),
                            (function (t, e) {
                                t.style.cssText = `position:${e.position};bottom:${e.bottom};top:${e.top};left:${e.left};width:${e.width};`;
                            })(n, l);
                    }
                    document.addEventListener("windowScroll", r), window.addEventListener("resize", r);
                })(t, e);
            });
        })();
})();
