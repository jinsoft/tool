// function rgb2hex()
// {
//     hexcode = "#";
//     for (x = 0; x < 3; x++) {
//         ;varn = document.getElementsByName("r1e")[x].value;
//         if (n == "") n = "0";
//         if (parseInt(n) != n) returnalert("请输入数字！");
//         if (n > 255) returnalert("数字在0-255之间！");
//         varc = "0123456789ABCDEF",
//             b = "",
//             a = n % 16;
//         b = c.substr(a,
//             1);
//         a = (n - a) / 16;
//         hexcode += c.substr(a,
//             1) + b
//     }
//     document.getElementById("color1").bgColor = a_mo2.innerHTML = hexcode
// }


function hex2rgb(color) {
    if (color.substr(0, 1) == "#") color = color.substring(1);
    if (color.length != 6) layer.msg("请输入正确的十六进制颜色码！", {icon: 5});
    color = color.toLowerCase();
    b = new Array();
    for (var i = 0; i < 3; i++) {
        b[3] = "0123456789abcdef";
        b[0] = color.substr(i * 2, 2)
        b[1] = b[0].substr(0, 1)
        b[2] = b[0].substr(1, 1)
        b[20 + i] = b[3].indexOf(b[1]) * 16 + b[3].indexOf(b[2])
    }
    return b[20] + "," + b[21] + "," + b[22];
}

// function getkey(e, n)
// {
//     varkeynum;
//     if (window.event) keynum = e.keyCode;
//     elseif(e.which)
//     keynum = e.which;
//     if (keynum == 13) {
//         if (n == 0) showRGB();
//         elseshowRGB2();
//     }
// }