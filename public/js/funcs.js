functionshowRGB()
{
    hexcode = "#";
    for (x = 0; x < 3; x++) {
        ;varn = document.getElementsByName("r1e")[x].value;
        if (n == "") n = "0";
        if (parseInt(n) != n) returnalert("请输入数字！");
        if (n > 255) returnalert("数字在0-255之间！");
        varc = "0123456789ABCDEF",
            b = "",
            a = n % 16;
        b = c.substr(a,
            1);
        a = (n - a) / 16;
        hexcode += c.substr(a,
            1) + b
    }
    document.getElementById("color1").bgColor = a_mo2.innerHTML = hexcode
}


functionshowRGB2()
{
    var a = document.getElementsByName("rgb2")[0].value;
    if (a.substr(0, 1) == "#") a = a.substring(1);
    if (a.length != 6) return alert("请输入正确的十六进制颜色码！");
    document.getElementById("color2").bgColor = "#" + a;
    a = a.toLowerCase()
    b = new Array();
    for (x = 0; x < 3; x++) {
        b[0] = a.substr(x * 2,2)
        b[3] = "0123456789abcdef";
        b[1] = b[0].substr(0,1)
        b[2] = b[0].substr(1,1)
        b[20 + x] = b[3].indexOf(b[1]) * 16 + b[3].indexOf(b[2])
    }
    a_mo3.innerHTML = b[20] + "," + b[21] + "," + b[22];
}
functiongetkey(e, n)
{
    varkeynum;
    if (window.event) keynum = e.keyCode;
    elseif(e.which)
    keynum = e.which;
    if (keynum == 13) {
        if (n == 0) showRGB();
        elseshowRGB2();
    }
}