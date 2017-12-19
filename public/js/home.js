
var p=0;
var t=null;
var x=null;
var imgN=1;
t=setTimeout("changePro(p)",100);
x=setTimeout("showImg(imgN)",2000);
function changePro(m) {
    clearTimeout(t);
    $("#pro").attr("aria-valuenow",m);
    $("#pro").attr("style","width: "+m+"%");
    if(m<100){
        p=p+1;
        t=setTimeout("changePro(p)",100);
    }else {
        $(".progress").remove();
        $(".invisible").removeClass("invisible");
    }


}
function showImg(c) {
    clearTimeout(x);
$("#img").attr("src","/public/img/%20("+c+").jpg");
if(c<11){
    imgN=imgN+1;
    x=setTimeout("showImg(imgN)",2000);
}else {
    imgN=1;
    x=setTimeout("showImg(imgN)",2000);
}

}