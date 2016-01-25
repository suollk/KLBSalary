/**
 * Created by Lumia on 2016/1/1.
 */
var baseurlno = "http://192.168.10.10";
var baseurl = baseurlno + "/";


// randow4位数
function S4() {
    return (((1 + Math.random()) * 0x10000) | 0).toString(16).substring(1);
};
// 创建GUID
function guid() {
    return (S4() + S4() + S4() + S4() + S4() + S4() + S4() + S4());
};


//获取页面传递参数
function geturlpararm(pararmname) {
    var url = document.location.search;
    var arr = url.split('&');
    for (var i = 0; i < arr.length; i++) {
        var ar = arr[i].split('=');
        if ((ar[0] == '?' + pararmname) && (ar[1] != '')) {
            return decodeURI(ar[1]);
        }
    }
}
