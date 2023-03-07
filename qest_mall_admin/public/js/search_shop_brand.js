        // ショップ・ブランド名一覧データ取得
        $.ajax({
            url:'/shop-brand-name', //送信先
            type:'GET', //送信方法
            datatype: 'json', //受け取りデータの種類
        })
        // Ajax通信が成功した時
        .done( function(data) {
            let categoryContent = [];

            $.each(data.shop, function(index, value) {
                categoryContent.push({
                    category: 'ショップ',
                    title: value.shop_name
                })
            });
            $.each(data.brand, function(index, value) {
                categoryContent.push({
                    category: 'ブランド',
                    title: value.brand_name
                })
            });

            $('.ui.search')
                .search({
                    type: 'category',
                    source: categoryContent
                })
            ;
        })
        // Ajax通信が失敗した時
        .fail( function(data) {
            console.log(data);
        })
