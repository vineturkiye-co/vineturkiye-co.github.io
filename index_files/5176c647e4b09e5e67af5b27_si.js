(function () { var it = new Date().getTime(); var cl = "vdb_51c0692ae4b02fd4658e579c52e8de92e4b0906a95a137935176c647e4b09e5e67af5b27"; var c = document.querySelectorAll("." + cl)[0]; c.className = c.className.replace(new RegExp("(\\s*)" + cl + "\\s*", "g"), "$1"); var p = c.getAttribute("vdb_params") || ""; var cb = /(?:[\?&]|^)m\.cb=(.*?)(&m\..*?=|$)/g.exec(p); cb = cb && cb[1] || Math.random(); var ur = /(?:[\?&]|^)m\.url=(.*?)(&m\..*?=|$)/g.exec(p); ur = ur && ur[1]; function ee(pn, v, dv) { var ve = dv && dv(v) || v; if (ve == v) { try { ve = decodeURIComponent(v); ve = encodeURIComponent(ve); } catch (e) { ve = encodeURIComponent(v); } } p = p.replace("m." + pn + "=" + v, "m." + pn + "=" + ve); v = ve; return v; } ee("url", ur); var ifr = window != top; var r = encodeURIComponent(ifr ? document.referrer : location.href); var i = document.createElement("img"); i.src = "http://trk.vidible.tv/trk/js-loaded.gif?bid=51c0692ae4b02fd4658e579c&pid=52e8de92e4b0906a95a13793&bcid=5176c647e4b09e5e67af5b27&" + p + "&ifr=" + ifr + "&cb=" + cb + "&r=" + r; var s = document.createElement("script"); s.type = "text/javascript"; s.src = "http://cdn.vidible.tv/prod/js/vidible-min.js?bid=51c0692ae4b02fd4658e579c&pid=52e8de92e4b0906a95a13793&bcid=5176c647e4b09e5e67af5b27&" + p + "&ifr=" + ifr + "&cb=" + cb + "&r=" + r; s.onload = function () { vidible.createPlayer({apid: "", bid: "51c0692ae4b02fd4658e579c", pid: "52e8de92e4b0906a95a13793", bcid: "5176c647e4b09e5e67af5b27", params: p, content: c, it: it, site: r}); var i = document.createElement("img"); i.src = "http://trk.vidible.tv/trk/js-started.gif?bid=51c0692ae4b02fd4658e579c&pid=52e8de92e4b0906a95a13793&bcid=5176c647e4b09e5e67af5b27&" + p + "&ifr=" + ifr + "&cb=" + cb + "&r=" + r; s.onload = s.onreadystatechanged = function () {}; }; s.onreadystatechange = function () { if (s.readyState == 'complete' || s.readyState == 'loaded') { s.onload(); } }; c.appendChild(s); })();