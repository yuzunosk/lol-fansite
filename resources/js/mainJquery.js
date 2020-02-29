
$(function () {

    $('#stop').on('click', function (e) {
        // alert('クリックしました。');
        e.preventDefault();
        let sort = $('#js-sort-data').val();

        let roll = $('#js-roll-data').val();
        let tag = $('#js-tag-data').val();
        console.log({sort, roll, tag });

        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            data: {
                    sort: $('#js-sort-data').val(),
                    roll: $('#js-roll-data').val(),
                    tag:  $('#js-tag-data').val(),
            },           //アクセスするときに必要なデータを記載
            url: '/ajaxtest/', //アクセスするURL
            type: 'POST',     //cacheを使うか使わないかを設定
            dataType: 'json'    //data type script・xmlDocument・jsonなど
        })
            .done(function (data) {
                //通信成功時の処理
                //成功したとき実行したいスクリプトを記載
                console.log('success');
                console.log({ data });
                $('#js-sort-chanpionsData').$.type(data).text();
                


            })
            .fail(function (data) {
                //通信失敗時の処理
                //失敗したときに実行したいスクリプトを記載
                console.log('通信に失敗しました');
            })
            .always(function (data) {
                //通信完了時の処理
                //結果に関わらず実行したいスクリプトを記載
                console.log('Ajaxを読み込みました');
            })
        
    })
});