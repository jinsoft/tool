$(function(){
    var ms = "\x62\x61\x63\x6b\x67\x72\x6f\x75\x6e\x64\x3a \x72\x67\x62\x61\x28\x32\x35\x32\x2c\x32\x33\x34\x2c\x31\x38\x37\x2c\x31\x29\x3b\x62\x61\x63\x6b\x67\x72\x6f\x75\x6e\x64\x3a \x2d\x6d\x6f\x7a\x2d\x6c\x69\x6e\x65\x61\x72\x2d\x67\x72\x61\x64\x69\x65\x6e\x74\x28\x6c\x65\x66\x74\x2c \x72\x67\x62\x61\x28\x32\x35\x32\x2c\x32\x33\x34\x2c\x31\x38\x37\x2c\x31\x29 \x30\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x35\x2c\x32\x35\x30\x2c\x37\x37\x2c\x31\x29 \x31\x32\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x34\x37\x2c\x34\x39\x2c\x31\x29 \x32\x38\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x31\x30\x2c\x32\x34\x37\x2c\x31\x29 \x33\x39\x25\x2c\x72\x67\x62\x61\x28\x30\x2c\x31\x38\x39\x2c\x32\x34\x37\x2c\x31\x29 \x35\x31\x25\x2c \x72\x67\x62\x61\x28\x31\x33\x33\x2c\x31\x30\x38\x2c\x32\x31\x37\x2c\x31\x29 \x36\x34\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x37\x2c\x30\x2c\x32\x34\x37\x2c\x31\x29 \x37\x38\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x37\x2c\x30\x2c\x31\x38\x39\x2c\x31\x29 \x38\x37\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x35\x2c\x32\x32\x2c\x35\x32\x2c\x31\x29 \x31\x30\x30\x25\x29\x3b\x62\x61\x63\x6b\x67\x72\x6f\x75\x6e\x64\x3a \x2d\x77\x65\x62\x6b\x69\x74\x2d\x67\x72\x61\x64\x69\x65\x6e\x74\x28\x6c\x65\x66\x74 \x74\x6f\x70\x2c \x72\x69\x67\x68\x74 \x74\x6f\x70\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x30\x25\x2c \x72\x67\x62\x61\x28\x32\x35\x32\x2c\x32\x33\x34\x2c\x31\x38\x37\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x31\x32\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x35\x2c\x32\x35\x30\x2c\x37\x37\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x32\x38\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x34\x37\x2c\x34\x39\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x33\x39\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x31\x30\x2c\x32\x34\x37\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x35\x31\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x31\x38\x39\x2c\x32\x34\x37\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x36\x34\x25\x2c \x72\x67\x62\x61\x28\x31\x33\x33\x2c\x31\x30\x38\x2c\x32\x31\x37\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x37\x38\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x37\x2c\x30\x2c\x32\x34\x37\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x38\x37\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x37\x2c\x30\x2c\x31\x38\x39\x2c\x31\x29\x29\x2c \x63\x6f\x6c\x6f\x72\x2d\x73\x74\x6f\x70\x28\x31\x30\x30\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x35\x2c\x32\x32\x2c\x35\x32\x2c\x31\x29\x29\x29\x3b\x62\x61\x63\x6b\x67\x72\x6f\x75\x6e\x64\x3a \x2d\x77\x65\x62\x6b\x69\x74\x2d\x6c\x69\x6e\x65\x61\x72\x2d\x67\x72\x61\x64\x69\x65\x6e\x74\x28\x6c\x65\x66\x74\x2c \x72\x67\x62\x61\x28\x32\x35\x32\x2c\x32\x33\x34\x2c\x31\x38\x37\x2c\x31\x29 \x30\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x35\x2c\x32\x35\x30\x2c\x37\x37\x2c\x31\x29 \x31\x32\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x34\x37\x2c\x34\x39\x2c\x31\x29 \x32\x38\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x31\x30\x2c\x32\x34\x37\x2c\x31\x29 \x33\x39\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x31\x38\x39\x2c\x32\x34\x37\x2c\x31\x29 \x35\x31\x25\x2c \x72\x67\x62\x61\x28\x31\x33\x33\x2c\x31\x30\x38\x2c\x32\x31\x37\x2c\x31\x29 \x36\x34\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x37\x2c\x30\x2c\x32\x34\x37\x2c\x31\x29 \x37\x38\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x37\x2c\x30\x2c\x31\x38\x39\x2c\x31\x29 \x38\x37\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x35\x2c\x32\x32\x2c\x35\x32\x2c\x31\x29 \x31\x30\x30\x25\x29\x3b\x62\x61\x63\x6b\x67\x72\x6f\x75\x6e\x64\x3a \x2d\x6f\x2d\x6c\x69\x6e\x65\x61\x72\x2d\x67\x72\x61\x64\x69\x65\x6e\x74\x28\x6c\x65\x66\x74\x2c \x72\x67\x62\x61\x28\x32\x35\x32\x2c\x32\x33\x34\x2c\x31\x38\x37\x2c\x31\x29 \x30\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x35\x2c\x32\x35\x30\x2c\x37\x37\x2c\x31\x29 \x31\x32\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x34\x37\x2c\x34\x39\x2c\x31\x29 \x32\x38\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x31\x30\x2c\x32\x34\x37\x2c\x31\x29 \x33\x39\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x31\x38\x39\x2c\x32\x34\x37\x2c\x31\x29 \x35\x31\x25\x2c \x72\x67\x62\x61\x28\x31\x33\x33\x2c\x31\x30\x38\x2c\x32\x31\x37\x2c\x31\x29 \x36\x34\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x37\x2c\x30\x2c\x32\x34\x37\x2c\x31\x29 \x37\x38\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x37\x2c\x30\x2c\x31\x38\x39\x2c\x31\x29 \x38\x37\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x35\x2c\x32\x32\x2c\x35\x32\x2c\x31\x29 \x31\x30\x30\x25\x29\x3b\x62\x61\x63\x6b\x67\x72\x6f\x75\x6e\x64\x3a \x2d\x6d\x73\x2d\x6c\x69\x6e\x65\x61\x72\x2d\x67\x72\x61\x64\x69\x65\x6e\x74\x28\x6c\x65\x66\x74\x2c \x72\x67\x62\x61\x28\x32\x35\x32\x2c\x32\x33\x34\x2c\x31\x38\x37\x2c\x31\x29 \x30\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x35\x2c\x32\x35\x30\x2c\x37\x37\x2c\x31\x29 \x31\x32\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x34\x37\x2c\x34\x39\x2c\x31\x29 \x32\x38\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x31\x30\x2c\x32\x34\x37\x2c\x31\x29 \x33\x39\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x31\x38\x39\x2c\x32\x34\x37\x2c\x31\x29 \x35\x31\x25\x2c \x72\x67\x62\x61\x28\x31\x33\x33\x2c\x31\x30\x38\x2c\x32\x31\x37\x2c\x31\x29 \x36\x34\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x37\x2c\x30\x2c\x32\x34\x37\x2c\x31\x29 \x37\x38\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x37\x2c\x30\x2c\x31\x38\x39\x2c\x31\x29 \x38\x37\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x35\x2c\x32\x32\x2c\x35\x32\x2c\x31\x29 \x31\x30\x30\x25\x29\x3b\x62\x61\x63\x6b\x67\x72\x6f\x75\x6e\x64\x3a \x6c\x69\x6e\x65\x61\x72\x2d\x67\x72\x61\x64\x69\x65\x6e\x74\x28\x74\x6f \x72\x69\x67\x68\x74\x2c \x72\x67\x62\x61\x28\x32\x35\x32\x2c\x32\x33\x34\x2c\x31\x38\x37\x2c\x31\x29 \x30\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x35\x2c\x32\x35\x30\x2c\x37\x37\x2c\x31\x29 \x31\x32\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x34\x37\x2c\x34\x39\x2c\x31\x29 \x32\x38\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x32\x31\x30\x2c\x32\x34\x37\x2c\x31\x29 \x33\x39\x25\x2c \x72\x67\x62\x61\x28\x30\x2c\x31\x38\x39\x2c\x32\x34\x37\x2c\x31\x29 \x35\x31\x25\x2c \x72\x67\x62\x61\x28\x31\x33\x33\x2c\x31\x30\x38\x2c\x32\x31\x37\x2c\x31\x29 \x36\x34\x25\x2c \x72\x67\x62\x61\x28\x31\x37\x37\x2c\x30\x2c\x32\x34\x37\x2c\x31\x29 \x37\x38\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x37\x2c\x30\x2c\x31\x38\x39\x2c\x31\x29 \x38\x37\x25\x2c \x72\x67\x62\x61\x28\x32\x34\x35\x2c\x32\x32\x2c\x35\x32\x2c\x31\x29 \x31\x30\x30\x25\x29\x3b\x66\x69\x6c\x74\x65\x72\x3a \x70\x72\x6f\x67\x69\x64\x3a\x44\x58\x49\x6d\x61\x67\x65\x54\x72\x61\x6e\x73\x66\x6f\x72\x6d\x2e\x4d\x69\x63\x72\x6f\x73\x6f\x66\x74\x2e\x67\x72\x61\x64\x69\x65\x6e\x74\x28 \x73\x74\x61\x72\x74\x43\x6f\x6c\x6f\x72\x73\x74\x72\x3d\x27\x23\x66\x63\x65\x61\x62\x62\x27\x2c \x65\x6e\x64\x43\x6f\x6c\x6f\x72\x73\x74\x72\x3d\x27\x23\x66\x35\x31\x36\x33\x34\x27\x2c \x47\x72\x61\x64\x69\x65\x6e\x74\x54\x79\x70\x65\x3d\x31 \x29\x3b\x66\x6f\x6e\x74\x2d\x73\x69\x7a\x65\x3a\x31\x2e\x35\x65\x6d\n";
   console.log("%c\u540c\u5b66\uff0c\u795d\u8d3a\u4f60\u53d1\u73b0\u5f69\u86cb\u007e",ms);


   function rgb2hex(value){
       return value;
   }
});