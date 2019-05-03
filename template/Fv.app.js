// Javascript faceVerification - Tencent cloud face recognition experience.
// Author @LF112 (https://github.com/LF112)
// Copyright reservation is required.

let Fv = function(Fv, callback) {
    return new Promise(function() {
        console.clear();

        if (Fv.fun <= 0) { console.log('Fv -> 未定义操作!'); return; }
        if ($(Fv.i).length > 0) {
            //导入Fv Main

            var FvMain = "",
                BoxID = Math.random().toString(36).substr(2),
                MainID = Math.random().toString(36).substr(2),
                ImgID = Math.random().toString(36).substr(2);
            FvMain += "<div id=\"" + BoxID + "\" class=\"Fv-Suspensionlayer\" style=\"display: none;\">\n";
            FvMain += "	<div class=\"Fv-Suspensionlayer_Ghost\"><\/div>\n";
            FvMain += "	<div id=\"" + MainID + "\" class=\"Fv-Suspensionlayer_Main\" style=\"display: none;\">\n";
            FvMain += "		<img id=\"" + ImgID + "\" ondragstart=\"return false\" oncontextmenu=\"return false\">\n";
            FvMain += "	<\/div>\n";
            FvMain += "<\/div>\n";

            $(Fv.i).prepend(FvMain)

            if (Fv.fun === 1) {
                //Fun 1



            } else { console.log('Fv -> 未定义操作!'); return; }

            callback([BoxID, MainID, ImgID])


        } else console.log('Fv -> 元素不存在')

    })
}