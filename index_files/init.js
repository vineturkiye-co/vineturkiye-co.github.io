(function () {
        var scriptProto = 'https:' == document.location.protocol ? 'https://' : 'http://';
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = scriptProto + 'bank.reklamstore.com/init.php';
        (document.getElementsByTagName('head')[0] || document.body).appendChild(script);
    })();