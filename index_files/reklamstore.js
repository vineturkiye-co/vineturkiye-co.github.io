var counter = 0;
var rs_meta_keywords;
var reklamstore_adserver = "adserver.reklamstore.com";

if (typeof (reklamstore_referrer) != "undefined" && reklamstore_referrer.length > 0)
    document.write('<scr' + 'ipt type="text/javascript" src="' + (document.location.protocol == "https:" ? "https://" : "http://") + reklamstore_adserver + '/imp/' + reklamstore_region_id + '.js?ref=' + reklamstore_referrer + '"+></scr' + 'ipt>');
    else
    document.write('<scr' + 'ipt type="text/javascript" src="' + (document.location.protocol == "https:" ? "https://" : "http://") + reklamstore_adserver + '/imp/' + reklamstore_region_id + '.js"></scr' + 'ipt>');


(function () {

    if (typeof (rs_meta_keywords) != "undefined" && rs_meta_keywords.length > 0)
        return;


    rs_meta_keywords = "";

    var doc = getDocWithKeywords(window);
    if (typeof (doc) == "undefined" || doc == null)
        return;
    var rs_document_metas = doc.getElementsByTagName("META");

    if (rs_document_metas) {
        for (var x = 0, y = rs_document_metas.length; x < y; x++) {
            if (rs_document_metas[x].name.toLowerCase() == "keywords") {
                rs_meta_keywords = rs_document_metas[x].content;
                break;
            }
        }
        if (rs_meta_keywords.length > 0) {
            rs_meta_keywords = reklamstore_removeHTMLTags(rs_meta_keywords);
            var rsScriptResource = document.createElement('script');
            rsScriptResource.type = 'text/javascript';
            rsScriptResource.src = (document.location.protocol == "https:" ? "https://" : "http://") + reklamstore_adserver + "/segment/?k=" + rs_meta_keywords.substr(0, 500);
            rsScriptResource.setAttribute('async', 'true');
            var rsxfrstscripttag = document.getElementsByTagName('script')[0];
            rsxfrstscripttag.parentNode.insertBefore(rsScriptResource, rsxfrstscripttag);
        }
    }
})();

function getDocWithKeywords(selectedWindow) {


    var selectedDocument = selectedWindow.document;

    if (typeof (selectedDocument) == "undefined" || selectedDocument == null)
        return null;

    if (selectedDocument.getElementsByTagName("META")["keywords"] != null) {
        return selectedDocument;
    }
    else {
        if (selectedWindow.parent != selectedWindow) {
            return getDocWithKeywords(selectedWindow.parent);
        }
        else {
            return selectedDocument;
        }
    }
}
function reklamstore_removeHTMLTags(value) {

    if (value == null) return "";
    var strTagStrippedText = value.replace(/<\/?[^>]+(>|$)/g, "");
    return strTagStrippedText;


}