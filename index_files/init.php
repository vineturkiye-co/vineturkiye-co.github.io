var RABankLoad = RABankLoad || false;
if(RABankLoad == false && window==window.top && navigator.cookieEnabled){
	/*JSON::Start json2*/if(typeof JSON!=="object")JSON={};
		(function(){'use strict';function f(n){return n<10?"0"+n:n}if(typeof Date.prototype.toJSON!=="function"){Date.prototype.toJSON=function(){return isFinite(this.valueOf())?this.getUTCFullYear()+"-"+f(this.getUTCMonth()+1)+"-"+f(this.getUTCDate())+"T"+f(this.getUTCHours())+":"+f(this.getUTCMinutes())+":"+f(this.getUTCSeconds())+"Z":null};String.prototype.toJSON=Number.prototype.toJSON=Boolean.prototype.toJSON=function(){return this.valueOf()}}var cx=/[\u0000\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,escapable=
	/[\\\"\x00-\x1f\x7f-\x9f\u00ad\u0600-\u0604\u070f\u17b4\u17b5\u200c-\u200f\u2028-\u202f\u2060-\u206f\ufeff\ufff0-\uffff]/g,gap,indent,meta={"\b":"\\b","\t":"\\t","\n":"\\n","\f":"\\f","\r":"\\r",'"':'\\"',"\\":"\\\\"},rep;function quote(string){escapable.lastIndex=0;return escapable.test(string)?'"'+string.replace(escapable,function(a){var c=meta[a];return typeof c==="string"?c:"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)})+'"':'"'+string+'"'}function str(key,holder){var i,k,v,length,mind=
	gap,partial,value=holder[key];if(value&&(typeof value==="object"&&typeof value.toJSON==="function"))value=value.toJSON(key);if(typeof rep==="function")value=rep.call(holder,key,value);switch(typeof value){case "string":return quote(value);case "number":return isFinite(value)?String(value):"null";case "boolean":case "null":return String(value);case "object":if(!value)return"null";gap+=indent;partial=[];if(Object.prototype.toString.apply(value)==="[object Array]"){length=value.length;for(i=0;i<length;i+=
	1)partial[i]=str(i,value)||"null";v=partial.length===0?"[]":gap?"[\n"+gap+partial.join(",\n"+gap)+"\n"+mind+"]":"["+partial.join(",")+"]";gap=mind;return v}if(rep&&typeof rep==="object"){length=rep.length;for(i=0;i<length;i+=1)if(typeof rep[i]==="string"){k=rep[i];v=str(k,value);if(v)partial.push(quote(k)+(gap?": ":":")+v)}}else for(k in value)if(Object.prototype.hasOwnProperty.call(value,k)){v=str(k,value);if(v)partial.push(quote(k)+(gap?": ":":")+v)}v=partial.length===0?"{}":gap?"{\n"+gap+partial.join(",\n"+
	gap)+"\n"+mind+"}":"{"+partial.join(",")+"}";gap=mind;return v}}if(typeof JSON.stringify!=="function")JSON.stringify=function(value,replacer,space){var i;gap="";indent="";if(typeof space==="number")for(i=0;i<space;i+=1)indent+=" ";else if(typeof space==="string")indent=space;rep=replacer;if(replacer&&(typeof replacer!=="function"&&(typeof replacer!=="object"||typeof replacer.length!=="number")))throw new Error("JSON.stringify");return str("",{"":value})};if(typeof JSON.parse!=="function")JSON.parse=
	function(text,reviver){var j;function walk(holder,key){var k,v,value=holder[key];if(value&&typeof value==="object")for(k in value)if(Object.prototype.hasOwnProperty.call(value,k)){v=walk(value,k);if(v!==undefined)value[k]=v;else delete value[k]}return reviver.call(holder,key,value)}text=String(text);cx.lastIndex=0;if(cx.test(text))text=text.replace(cx,function(a){return"\\u"+("0000"+a.charCodeAt(0).toString(16)).slice(-4)});if(/^[\],:{}\s]*$/.test(text.replace(/\\(?:["\\\/bfnrt]|u[0-9a-fA-F]{4})/g,
	"@").replace(/"[^"\\\n\r]*"|true|false|null|-?\d+(?:\.\d*)?(?:[eE][+\-]?\d+)?/g,"]").replace(/(?:^|:|,)(?:\s*\[)+/g,""))){j=eval("("+text+")");return typeof reviver==="function"?walk({"":j},""):j}throw new SyntaxError("JSON.parse");}})();/*JSON::End*/
		
	
	RABankLoad = true;
	var RABank = (function(){
		    
	    init : (function(){
	    })();
	    
	    
		
		var clientId = 0;
	    
	    var i = function(){
	    	var proto = 'https:' == document.location.protocol ? 'https://' : 'http://';
	    	clientId = '530dda3ce8d73';    	
	    	
	    	var clientData = client.result();   
	    	
			server.post(
				proto+'bank.reklamstore.com/response.php',
				'data='+encodeURIComponent(clientData)+'&a=log'
			);
		};
		
		
	    var client = {    		
	    	data : {},
	    	
	    	screenSize : function(){
	    		if (screen.width) {
		            width = (screen.width) ? screen.width : '';
		            height = (screen.height) ? screen.height : '';	
		            return {
		            	'w'	: width,
		            	'h'	: height
		            }	           
		        }
	    	},
	    	
	    	browser : function(){
	    		
	    		var browser,nameOffset, verOffset;
	    		browser=this.searchString(this.dataBrowser)
	    		if(!browser){
	    			var nVer = navigator.appVersion;
			        var nAgt = navigator.userAgent;
			        var browser = navigator.appName;
			        var version = '' + parseFloat(navigator.appVersion);
        			var majorVersion = parseInt(navigator.appVersion, 10);
        			
	    			if ((nameOffset = nAgt.lastIndexOf(' ') + 1) < (verOffset = nAgt.lastIndexOf('/'))) {
			            browser = nAgt.substring(nameOffset, verOffset);
			            version = nAgt.substring(verOffset + 1);
			            if (browser.toLowerCase() == browser.toUpperCase()) {
			                browser = navigator.appName;
			            }
			        }
			        // trim the version string
			        if ((ix = version.indexOf(';')) != -1) version = version.substring(0, ix);
			        if ((ix = version.indexOf(' ')) != -1) version = version.substring(0, ix);
			
			        majorVersion = parseInt('' + version, 10);
			        if (isNaN(majorVersion)) {
			            version = '' + parseFloat(navigator.appVersion);
			            majorVersion = parseInt(navigator.appVersion, 10);
			        }
	    		}
	    		
	    		
	    		return {
	  	  			'name' 		:	browser || 'other',
	  	  			'version'	: 	this.searchVersion(navigator.userAgent)	|| this.searchVersion(navigator.appVersion) || version || "other",
	  	  			'screen'	: 	this.screenSize()
	    		}  
	    	},
	    	
	    	os : function(){
	    		var os = 'other';
		        var clientStrings = [
		            {s:'Windows 3.11', r:/Win16/},
		            {s:'Windows 95', r:/(Windows 95|Win95|Windows_95)/},
		            {s:'Windows ME', r:/(Win 9x 4.90|Windows ME)/},
		            {s:'Windows 98', r:/(Windows 98|Win98)/},
		            {s:'Windows CE', r:/Windows CE/},
		            {s:'Windows 2000', r:/(Windows NT 5.0|Windows 2000)/},
		            {s:'Windows XP', r:/(Windows NT 5.1|Windows XP)/},
		            {s:'Windows Server 2003', r:/Windows NT 5.2/},
		            {s:'Windows Vista', r:/Windows NT 6.0/},
		            {s:'Windows 7', r:/(Windows 7|Windows NT 6.1)/},
		            {s:'Windows 8.1', r:/(Windows 8.1|Windows NT 6.3)/},
		            {s:'Windows 8', r:/(Windows 8|Windows NT 6.2)/},
		            {s:'Windows NT 4.0', r:/(Windows NT 4.0|WinNT4.0|WinNT|Windows NT)/},
		            {s:'Windows ME', r:/Windows ME/},
		            {s:'Android', r:/Android/},
		            {s:'Open BSD', r:/OpenBSD/},
		            {s:'Sun OS', r:/SunOS/},
		            {s:'Linux', r:/(Linux|X11)/},
		            {s:'iOS', r:/(iPhone|iPad|iPod)/},
		            {s:'Mac OS X', r:/Mac OS X/},
		            {s:'Mac OS', r:/(MacPPC|MacIntel|Mac_PowerPC|Macintosh)/},
		            {s:'QNX', r:/QNX/},
		            {s:'UNIX', r:/UNIX/},
		            {s:'BeOS', r:/BeOS/},
		            {s:'OS/2', r:/OS\/2/},
		            {s:'Search Bot', r:/(nuhk|Googlebot|Yammybot|Openbot|Slurp|MSNBot|Ask Jeeves\/Teoma|ia_archiver)/}
		        ];
		        for (var id in clientStrings) {
		            var cs = clientStrings[id];
		            if (cs.r.test(navigator.userAgent)) {
		                os = cs.s;
		                break;
		            }
		        }
		        
		        var osVersion = 'other';

		        if (/Windows/.test(os)) {
		            osVersion = /Windows (.*)/.exec(os)[1];
		            os = 'Windows';
		        }
		
		        switch (os) {
		            case 'Mac OS X':
		                osVersion = /Mac OS X (10[\.\_\d]+)/.exec(navigator.userAgent)[1];
		                break;
		
		            case 'Android':
		                osVersion = /Android ([\.\_\d]+)/.exec(navigator.userAgent)[1];
		                break;
		
		            case 'iOS':
		                osVersion = /OS (\d+)_(\d+)_?(\d+)?/.exec(navigator.appVersion);
		                osVersion = osVersion[1] + '.' + osVersion[2] + '.' + (osVersion[3] | 0);
		                break;
		
		        }
		        return {
		        	'name'		: os,
		        	'version'	: osVersion
		        }	    			
	    	},
	    	
	    	cookie : function(){
	    		
	    		return {
	    			'id'		: clientId,
	    			'agent'		: '',
					'age'		: '1393416764'
	    		}
	    	},
	    	http : function(){
	    		
	    		var keywords = '';
	    		var metas = document.getElementsByTagName('meta'); 
				for (i=0; i<metas.length; i++) { 
					if (metas[i].getAttribute("name") == "keywords" || metas[i].getAttribute("name") == "KEYWORDS") { 
						keywords = metas[i].getAttribute("content"); 
						break;
					} 
				} 
	    		
	    		return {
	    			
	    			'url'		: 	escape(window.location),
	    			'referer'	:	escape(document.referrer),
	    			'keywords'	: 	(keywords),    			
	    		}
	    	},
	    	result : function(){
	    		//client bilgilerini gönder
	    		this.data["browser"] 	= this.browser();
	    		this.data["os"]			= this.os();
	    		this.data["cookie"]		= this.cookie();
	    		this.data["http"]		= this.http();
	    		this.data["version"]	= "1.0";
	    			    		
	    		return hash.encode(JSON.stringify(this.data));
	    	},
	    	
	    	searchString: function (data) {
				for (var i=0;i<data.length;i++)	{
					var dataString = data[i].string;
					var dataProp = data[i].prop;
					this.versionSearchString = data[i].versionSearch || data[i].identity;
					if (dataString) {
						if (dataString.indexOf(data[i].subString) != -1)
							return data[i].identity;
					}
					else if (dataProp)
						return data[i].identity;
				}
			},     
	    	
	    	searchVersion: function (dataString) {
				var index = dataString.indexOf(this.versionSearchString);
				if (index == -1) return;
				return parseFloat(dataString.substring(index+this.versionSearchString.length+1));
			},
			    	
	    	dataBrowser: [{
					string: navigator.userAgent,
					subString: "Chrome",
					identity: "Chrome"
				},
				{ 	string: navigator.userAgent,
					subString: "OmniWeb",
					versionSearch: "OmniWeb/",
					identity: "OmniWeb"
				},
				{
					string: navigator.vendor,
					subString: "Apple",
					identity: "Safari",
					versionSearch: "Version"
				},
				{
					prop: window.opera,
					identity: "Opera",
					versionSearch: "Version"
				},
				{
					string: navigator.vendor,
					subString: "iCab",
					identity: "iCab"
				},
				{
					string: navigator.vendor,
					subString: "KDE",
					identity: "Konqueror"
				},
				{
					string: navigator.userAgent,
					subString: "Firefox",
					identity: "Firefox"
				},
				{
					string: navigator.vendor,
					subString: "Camino",
					identity: "Camino"
				},
				{		// for newer Netscapes (6+)
					string: navigator.userAgent,
					subString: "Netscape",
					identity: "Netscape"
				},
				{
					string: navigator.userAgent,
					subString: "MSIE",
					identity: "Explorer",
					versionSearch: "MSIE"
				},
				{
					string: navigator.userAgent,
					subString: "Gecko",
					identity: "Mozilla",
					versionSearch: "rv"
				},
				{ 		// for older Netscapes (4-)
					string: navigator.userAgent,
					subString: "Mozilla",
					identity: "Netscape",
					versionSearch: "Mozilla"
				}
			]    	
	    };
	    
	    var server = {
	    	post : function(url, params){
	    		if (window.XMLHttpRequest){
		      		conn=new XMLHttpRequest();
		      	}
		      	else{
		      		conn=new ActiveXObject("Microsoft.XMLHTTP");
		      	}
		      	if(conn!=null){	      		
		      		conn.open('post',url,true);
		      		conn.setRequestHeader("Content-type", "application/x-www-form-urlencoded; charset=UTF-8");
		      		conn.onreadystatechange = function(){
		      			if(conn.readyState == 4 && conn.status == 200){
							var resp = conn.responseText;
							
							if(resp){
								resp = hash.decode(resp);
								resp = JSON.parse(resp);
								if(resp.clientId){									
									clientId = resp.clientId;
									cookie.set('clientId', clientId, 30);
									if(resp.age){
										cookie.set('age', resp.age, 30);
										
										(function () {
									        var scriptProto = 'https:' == document.location.protocol ? 'https://' : 'http://';
									        var script = document.createElement('script');
									        script.type = 'text/javascript';
									        script.async = true;
									        script.src = scriptProto + 'ib.adnxs.com/getuid?'+scriptProto+'bank.reklamstore.com/modules/apx.php?uid=$UID&ruid='+clientId;
									        (document.getElementsByTagName('head')[0] || document.body).appendChild(script);
									  })();
										
									}
								}
								
								if(resp.p && resp.p.agent){
									cookie.set('agent', resp.p.agent, 30);
								}								
							}					
						}
					}
					conn.send(params);      		
		      	}
	    	}
	    };
	 
	 	var cookie = {
	 		get : function(c_name){
			    var c_value = document.cookie;
			    var c_start = c_value.indexOf(" " + c_name + "=");
			    if (c_start == -1){
			        c_start = c_value.indexOf(c_name + "=");
			    }
			    if (c_start == -1){
			        c_value = null;
			    }
			    else{
			        c_start = c_value.indexOf("=", c_start) + 1;
			        var c_end = c_value.indexOf(";", c_start);
			        if (c_end == -1){
			            c_end = c_value.length;
			        }
			        c_value = unescape(c_value.substring(c_start,c_end));
			    }
			    return c_value;
			},
			
			set : function(c_name,value,exdays){
				var proto = 'https:' == document.location.protocol ? 'https://' : 'http://';
				var iframe = document.createElement('iframe');
				iframe.src = proto+'bank.reklamstore.com/c.php?a=w&f='+c_name+'&v='+value;
				iframe.style.display = "none";
				
				(document.getElementsByTagName('head')[0] || document.body).appendChild(iframe);
			}
	 	};
	    
	    
	    var hash = {
			// private property
			_keyStr : "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=",
			
			// public method for encoding
			encode : function (input) {
			    var output = "";
			    var chr1, chr2, chr3, enc1, enc2, enc3, enc4;
			    var i = 0;
			
			    input = this._utf8_encode(input);
			
			    while (i < input.length) {
			
			        chr1 = input.charCodeAt(i++);
			        chr2 = input.charCodeAt(i++);
			        chr3 = input.charCodeAt(i++);
			
			        enc1 = chr1 >> 2;
			        enc2 = ((chr1 & 3) << 4) | (chr2 >> 4);
			        enc3 = ((chr2 & 15) << 2) | (chr3 >> 6);
			        enc4 = chr3 & 63;
			
			        if (isNaN(chr2)) {
			            enc3 = enc4 = 64;
			        } else if (isNaN(chr3)) {
			            enc4 = 64;
			        }
			
			        output = output +
			        this._keyStr.charAt(enc1) + this._keyStr.charAt(enc2) +
			        this._keyStr.charAt(enc3) + this._keyStr.charAt(enc4);
			
			    }
			
			    return output;
			},
			
			// public method for decoding
			decode : function (input) {
			    var output = "";
			    var chr1, chr2, chr3;
			    var enc1, enc2, enc3, enc4;
			    var i = 0;
			
			    input = input.replace(/[^A-Za-z0-9\+\/\=]/g, "");
			
			    while (i < input.length) {
			
			        enc1 = this._keyStr.indexOf(input.charAt(i++));
			        enc2 = this._keyStr.indexOf(input.charAt(i++));
			        enc3 = this._keyStr.indexOf(input.charAt(i++));
			        enc4 = this._keyStr.indexOf(input.charAt(i++));
			
			        chr1 = (enc1 << 2) | (enc2 >> 4);
			        chr2 = ((enc2 & 15) << 4) | (enc3 >> 2);
			        chr3 = ((enc3 & 3) << 6) | enc4;
			
			        output = output + String.fromCharCode(chr1);
			
			        if (enc3 != 64) {
			            output = output + String.fromCharCode(chr2);
			        }
			        if (enc4 != 64) {
			            output = output + String.fromCharCode(chr3);
			        }
			
			    }
			
			    output = this._utf8_decode(output);
			
			    return output;
			
			},
			
			// private method for UTF-8 encoding
			_utf8_encode : function (string) {
			    string = string.replace(/\r\n/g,"\n");
			    var utftext = "";
			
			    for (var n = 0; n < string.length; n++) {
			
			        var c = string.charCodeAt(n);
			
			        if (c < 128) {
			            utftext += String.fromCharCode(c);
			        }
			        else if((c > 127) && (c < 2048)) {
			            utftext += String.fromCharCode((c >> 6) | 192);
			            utftext += String.fromCharCode((c & 63) | 128);
			        }
			        else {
			            utftext += String.fromCharCode((c >> 12) | 224);
			            utftext += String.fromCharCode(((c >> 6) & 63) | 128);
			            utftext += String.fromCharCode((c & 63) | 128);
			        }
			
			    }
			
			    return utftext;
			},
			
			// private method for UTF-8 decoding
			_utf8_decode : function (utftext) {
			    var string = "";
			    var i = 0;
			    var c = c1 = c2 = 0;
			
			    while ( i < utftext.length ) {
			
			        c = utftext.charCodeAt(i);
			
			        if (c < 128) {
			            string += String.fromCharCode(c);
			            i++;
			        }
			        else if((c > 191) && (c < 224)) {
			            c2 = utftext.charCodeAt(i+1);
			            string += String.fromCharCode(((c & 31) << 6) | (c2 & 63));
			            i += 2;
			        }
			        else {
			            c2 = utftext.charCodeAt(i+1);
			            c3 = utftext.charCodeAt(i+2);
			            string += String.fromCharCode(((c & 15) << 12) | ((c2 & 63) << 6) | (c3 & 63));
			            i += 3;
			        }
			
			    }
			
			    return string;
			}
			
		};
	    
	    /******/
	    return {
	    	i : i
	    }
	
	})();RABank.i();
}