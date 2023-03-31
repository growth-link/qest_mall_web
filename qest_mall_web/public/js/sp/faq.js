//ページを開いたとき
$(function(){
    // [image]を画像に置き換える
    const images = $('input[name="image"]'); //hiddenをリストで取得
    for(let i = 0; i < images.length; i++) {
        let imgURL = $(images[i]).val();
        let answerHtml = $(images[i]).prev('.sentence').html(); //近くのanswer
        let imgHtml ='<img class="img" src="' + imgURL + '">'
        let newAnswerHtml = answerHtml.replace('[image]', imgHtml);
        $(images[i]).prev('.sentence').html(newAnswerHtml); //近くのanswerのHTMLを差し替え
    }

    // [link]をリンクに置き換える
    const links = $('input[name="link"]');
    for(let i = 0; i < links.length; i++) {
        let linkURL = $(links[i]).val();
        let answerHtml = $(links[i]).prev('.sentence').html();
        let splitedAnswer = answerHtml.split('[link]');
        let linkHtml ='<a href="' + linkURL + '">' + splitedAnswer[1] + '</a>';
        let newAnswerHtml = splitedAnswer[0] + linkHtml + splitedAnswer[2];
        $(links[i]).prev('.sentence').html(newAnswerHtml);
    }
});
