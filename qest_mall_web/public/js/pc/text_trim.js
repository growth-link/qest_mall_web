function maxLine(selector, line){
    selector.css({
        '-webkit-line-clamp': String(line),
        'line-height': '2',
        'display': '-webkit-box',
        'overflow': 'hidden',
        '-webkit-box-orient': 'vertical',
    });
}

maxLine( $('.shop-introduction'), 3 );
