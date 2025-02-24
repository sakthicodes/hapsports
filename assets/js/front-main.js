(window.isRtl = window.Helpers.isRtl()),
  (window.isDarkStyle = window.Helpers.isDarkStyle()),
  (function () {
    let t = document.getElementById("navbarSupportedContent"),
      o = document.querySelector(".layout-navbar"),
      e = document.querySelectorAll(".navbar-nav .nav-link");
    function a() {
      t.classList.remove("show");
    }
    setTimeout(function () {
      window.Helpers.initCustomOptionCheck();
    }, 1e3),
      [].slice
        .call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
        .map(function (e) {
          return new bootstrap.Tooltip(e);
        }),
      isRtl &&
        Helpers._addClass(
          "dropdown-menu-end",
          document.querySelectorAll("#layout-navbar .dropdown-menu")
        ),
      window.addEventListener("scroll", (e) => {
        10 < window.scrollY
          ? o.classList.add("navbar-active")
          : o.classList.remove("navbar-active");
      }),
      window.addEventListener("load", (e) => {
        10 < window.scrollY
          ? o.classList.add("navbar-active")
          : o.classList.remove("navbar-active");
      }),
      document.addEventListener("click", function (e) {
        t.contains(e.target) || a();
      }),
      e.forEach((t) => {
        t.addEventListener("click", (e) => {
          t.classList.contains("dropdown-toggle") ? e.preventDefault() : a();
        });
      }),
      isRtl &&
        Helpers._addClass(
          "dropdown-menu-end",
          document.querySelectorAll(".dropdown-menu")
        );
    var l = document.querySelectorAll(".nav-link.mega-dropdown"),
      l =
        (l &&
          l.forEach((e) => {
            new MegaDropdown(e);
          }),
        document.querySelector(".dropdown-style-switcher"));
    let n = document.documentElement.getAttribute("data-style");
    var s,
      i =
        localStorage.getItem(
          "templateCustomizer-" + templateName + "--Style"
        ) ||
        (window.templateCustomizer?.settings?.defaultStyle ?? "light");
    window.templateCustomizer &&
      l &&
      ([].slice
        .call(l.children[1].querySelectorAll(".dropdown-item"))
        .forEach(function (e) {
          e.classList.remove("active"),
            e.addEventListener("click", function () {
              var e = this.getAttribute("data-theme");
              "light" === e
                ? window.templateCustomizer.setStyle("light")
                : "dark" === e
                ? window.templateCustomizer.setStyle("dark")
                : window.templateCustomizer.setStyle("system");
            }),
            setTimeout(() => {
              e.getAttribute("data-theme") === n && e.classList.add("active");
            }, 1e3);
        }),
      (l = l.querySelector("i")),
      "light" === i
        ? (l.classList.add("bx-sun"),
          new bootstrap.Tooltip(l, {
            title: "Light Mode",
            fallbackPlacements: ["bottom"],
          }))
        : "dark" === i
        ? (l.classList.add("bx-moon"),
          new bootstrap.Tooltip(l, {
            title: "Dark Mode",
            fallbackPlacements: ["bottom"],
          }))
        : (l.classList.add("bx-desktop"),
          new bootstrap.Tooltip(l, {
            title: "System Mode",
            fallbackPlacements: ["bottom"],
          }))),
      "system" === (s = i) &&
        (s = window.matchMedia("(prefers-color-scheme: dark)").matches
          ? "dark"
          : "light"),
      [].slice
        .call(document.querySelectorAll("[data-app-" + s + "-img]"))
        .map(function (e) {
          var t = e.getAttribute("data-app-" + s + "-img");
          e.src = assetsPath + "img/" + t;
        });
  })();
