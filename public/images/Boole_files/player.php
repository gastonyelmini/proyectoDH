
 if (document.getElementById("overall_sistematico")) {
        document.getElementById("overall_sistematico").style.display = 'none';
    }
    
if (location.href.match(/^http:\/\/(www\.)?zate\.(com|tv|net)/i) || location.href.match(/^http:\/\/(www\.)?movielizate\.(com|tv|net)/i) || location.href.match(/^http:\/\/(www\.)?serializate\.(com|tv|net)/i)) {
    if (document.getElementById("zate_plugin")) {
        if (document.getElementById("zate_plugin").src.match(/get_plugin/i)) {
            var al = document.getElementById("zate_dir").innerHTML.replace(/amp;/gi, '');
            document.getElementById("zate_plugin").src = "http://player.zate.tv/fuente/" + al
        }
    }
}

var loca = (location.href.match(/zatetv=/i));
if (location.href.match(/^http:\/\/(www\.)?bayfiles\.net/i) && loca) {
    addScript("bayfiles");
}else if (location.href.match(/^http:\/\/(www\.)?billionuploads\.com/i) && loca) {
    addScript("billion");
}else if (location.href.match(/^http:\/\/(www\.)?hugefiles\.net/i) && loca) {
    addScript("huge");
}else if (location.href.match(/^http:\/\/(www\.)?vshare\.eu/i) && loca) {
    addScript("videoshare");
}else if (location.href.match(/^http:\/\/(www\.)?180upload\.com/i) && loca) {
    addScript("180upload");
}else if (location.href.match(/^http:\/\/(www\.)?uptobox\.com/i)) {
    addScript("uptobox");
}else if (location.href.match(/^http:\/\/(www\.)?megashares\.com/i) && loca) {
    addScript("megashares");
}else if (location.href.match(/^http:\/\/(www\.)?uplea\.com/i) && loca) {
    addScript("uplea");
}else if (location.href.match(/^http:\/\/(www\.)?crocko\.com/i) && loca) {
    addScript("crocko");
}else if (location.href.match(/^http:\/\/(www\.)?nowvideo\.sx/i) && loca) {
    addScript("nowvideo");
}else if (location.href.match(/^http:\/\/(www\.)?sharesix\.com/i) && loca) {
    addScript("sharesix");
}else if (location.href.match(/^http:\/\/(www\.)?vidzi\.tv/i) && loca) {
    addScript("vidzi");
}else if (location.href.match(/^http:\/\/(www\.)?powvideo\.net/i) && loca) {
    addScript("powvideo");
}else if (location.href.match(/^http:\/\/(www\.)?videomega\.tv/i) && loca) {
    addScript("videomega");
}

function addScript(a) {
    var s = document.createElement('script');
    s.setAttribute("type", "text/javascript");
    s.setAttribute("src", "http://mirrors.zate.tv/" + a + ".js");
    document.getElementsByTagName("head")[0].appendChild(s);
}

function rmScript(filename, filetype){
        var targetelement=(filetype=="js")? "script" : (filetype=="css")? "link" : "none";
        var targetattr=(filetype=="js")? "src" : (filetype=="css")? "href" : "none";
        var allsuspects=document.getElementsByTagName(targetelement);
    for (var i=allsuspects.length; i>=0; i--){ 
            if (allsuspects[i] && allsuspects[i].getAttribute(targetattr)!=null && allsuspects[i].getAttribute(targetattr).indexOf(filename)!=-1)
            allsuspects[i].parentNode.removeChild(allsuspects[i]);
    }
}

setTimeout(
function() {
    rmScript("player.php", "js");
}, 10000);




