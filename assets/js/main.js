$(function(){
    VANTA.NET({
        el: "body",
        mouseControls: true,
        touchControls: true,
        gyroControls: false,
        scale: 1.00,
        scaleMobile: 1.00,
        color: 0xdc7f00,
        backgroundColor: 0x0
      });

    let canvas = $('#header-canvas');
    let context = canvas[0].getContext('2d');
    
    function drawLine(x1, y1, x2, y2, width='1', color='#DAA520'){
        context.beginPath();
        context.lineWidth=width;
        context.strokeStyle=color;
        context.moveTo(x1, y1);
        context.lineTo(x2, y2);
        context.stroke();
    }

    function connectNodes(selector){
        context.clearRect(0, 0, canvas.width(), canvas.height());
        let points = [];
        $(selector).each(function(index, item){
            let item_position = $(this).offset();
            item_position.left += $(this).width() / 2;
            item_position.top += $(this).height() / 2;
            points.push(item_position);
        });

        for(let i = 0; i < points.length; i++){
            for (let j=0; j < points.length; j++){
                drawLine(points[i].left, points[i].top, points[j].left, points[j].top)
            }
        }
    }

    $('.header-item').click(function(){
        $("#header-container").animate({
            zoom: '10'
        })
    });

    // $('.header-item').blur(function(){
    //     $(this).height('250px');
    //     $(this).width('250px');
    // })

    $(window).resize(function(){connectNodes('.header-item');})
    connectNodes('.header-item');
    
});