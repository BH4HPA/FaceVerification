    // Javascript faceVerification - Tencent cloud face recognition experience.
// Author @LF112 (https://github.com/LF112)
// Copyright reservation is required.

let Fv = function(InBox, Fv, callback) {
    return new Promise(function() {
        //console.clear();

        if (Fv.fun <= 0) { console.log('Fv -> 未定义操作!'); return; }
        if ($(InBox).length > 0) {
            //导入Fv Main

            var FvMain = "",
                BoxID = Math.random().toString(36).substr(2),
                MainID = Math.random().toString(36).substr(2),
                ImgID = Math.random().toString(36).substr(2),
                CloseID = Math.random().toString(36).substr(2);
            FvMain += "<div id=\"" + BoxID + "\" class=\"Fv-Suspensionlayer\" style=\"display: none;\">\n";
            FvMain += "	<div id=\"" + CloseID + "\" class=\"Fv-Suspensionlayer_Ghost\"><\/div>\n";
            FvMain += "	<div id=\"" + MainID + "\" class=\"Fv-Suspensionlayer_Main\" style=\"display: none;\"><\/div>\n";
            FvMain += "<\/div>\n";

            $(InBox).prepend(FvMain)

            if (Fv.fun === 1) {
                //Fun 1 > Show

                $('#' + MainID).append("<img id=\"" + ImgID + "\" src=\"" + Fv.file[0] + "\" ondragstart=\"return false\" oncontextmenu=\"return false\">");
                //---In

                $('#' + BoxID).css({ display: 'block' });
                $('#' + MainID).fadeIn(500);

            } else if (Fv.fun === 2) {
                //Fun 2 > Load
                let FileName = Fv.file[0];
                if (Fv.check[0]) {
                    FileName = Fv.file[1];
                    $('#' + MainID).append("<img id=\"" + ImgID + "\" src=\"" + Fv.file[1]+ "\" ondragstart=\"return false\" oncontextmenu=\"return false\">");
                    Fv.check[1]([ImgID]);
                } else if (!Fv.check[0]) {
                    FileName = Fv.file[2];
                    $('#' + MainID).append("<img id=\"" + ImgID + "\" src=\"" + Fv.file[2]  + "\" ondragstart=\"return false\" oncontextmenu=\"return false\">");
                    Fv.check[1]([ImgID]);
                } else console.log('Fv -> 传入值必须为布尔!')

                $('#' + BoxID).css({ display: 'block' });
                $('#' + MainID).fadeIn(500);
                $("#"+ImgID).attr("src",FileName);

            } else { console.log('Fv -> 未定义操作!'); return; }

            callback([BoxID, MainID, ImgID, CloseID])


        } else console.log('Fv -> 元素不存在')

    })
}
