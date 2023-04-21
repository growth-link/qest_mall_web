//ページを開いたとき
$(function(){
    // 「販売価格について」の[link]をリンクに置き換える
    replaceLink("sales-price-link");
    // 「利用規約/個人情報保護方針」の[link]をリンクに置き換える
    replaceLink("privacy-policy-link");

    function replaceLink(linkClassName) {
        const link = $('input[name="' + linkClassName + '"]');
        let linkURL = $(link).val();
        let answerHtml = $(link).prev('.sentence').html();
        let splitedAnswer = answerHtml.split('[link]');

        let linkHtml = '';
        if(linkClassName == "sales-price-link"){
            let shopId = $(link).data('shop-id');
            linkHtml ='<a href="/sp' + linkURL + '/' + shopId + '">' + splitedAnswer[1] + '</a>';
        }
        if(linkClassName == "privacy-policy-link"){
            linkHtml ='<a href="/sp' + linkURL + '">' + splitedAnswer[1] + '</a>';
        }

        let newAnswerHtml = splitedAnswer[0] + linkHtml + splitedAnswer[2];
        $(link).prev('.sentence').html(newAnswerHtml);
    }
});
