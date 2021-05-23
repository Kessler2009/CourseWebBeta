(function (a) {
    a.fn.rateCircle = function (k) {
        var f = a.extend({
            size: 130,
            lineWidth: 28,
            fontSize: 18,
            referenceValue: 100,
            valuePrefix: "",
            valueSufix: "",
        }, k);
        var i = f.size,
            c = i / 2,
            b = c - f.lineWidth / 2,
            j = f.lineWidth,
            g = f.fontSize,
            h = f.referenceValue,
            e = f.valuePrefix,
            d = f.valueSufix;
        a(this).html("");
        a(this).append(["<canvas class='rate-circle-back' width='" + i + "' height='" + i + "'></canvas>", "<canvas class='rate-circle-front' width='" + i + "' height='" + i + "'></canvas>"]);
        a(this).css({
            position: "relative",
            display: "block",
            width: i,
            height: i,
            margin: "0 auto",
            "text-align": "center"
        });
        a(this).each(function () {
            var q, s = a(this).data("value"),
                n = a(this).find(".rate-circle-back"),
                m = n.get(0).getContext("2d");
            q = 100 * s / h;
            m.lineWidth = j-1;
            n.addClass("rate-color-back");
            m.strokeStyle = n.css("color");
            m.arc(c, c, b, -(Math.PI / 180 * 90), 2 * Math.PI - (Math.PI / 180 * 90), false);

            //m.lineWidth = 20;


            m.stroke();
            var o = a(this).find(".rate-circle-front");
            var p = o.get(0).getContext("2d");
            p.lineWidth = j;
            o.addClass("rate-color0");
            p.strokeStyle = o.css("color");
            var l = (Math.PI * q * 2 / 100);
            p.arc(c, c, b, -(Math.PI / 180 * 90), l - (Math.PI / 180 * 90), false);
            p.stroke();
            a(this).append("<span class='rate-circle-value'>" + e + s + d + "</span>");
            var r = a(this).find(".rate-circle-value");
            r.css({
                "line-height": i + "px",
                "font-size": g + "px",
                color: p.strokeStyle
            })
        })
    };

}(jQuery));