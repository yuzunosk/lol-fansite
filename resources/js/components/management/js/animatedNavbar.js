
    // alert('読み込めました');
    let foo = document.querySelector('#move');
    let news = document.querySelector('#lottie-news');
    
    console.log({ foo });
    console.log({ news });

    // function doneAnimation(foo) {
    // console.log('doneAnimationを開始');

// -------------------------
// lottie
// -------------------------

    lottie.loadAnimation({
            container: document.getElementById('lottie'),
            renderer: "svg",
            loop: false,
            autoplay: false,
            path: "logo/menuicon2.json",
            rendererSettings: {
                className: 'anmIcon'
            }
        });
        
        foo.addEventListener('mouseenter', function() {
            //マウスオーバーしたとき
            console.log('mouseenterを発火しました');

        lottie.setDirection(1); //通常再生に設定
        lottie.setSpeed(2);
        lottie.play(); //再生する
    });

    foo.addEventListener("mouseleave", e => {
        //マウスが離れたとき
        console.log('mouseleaveを発火しました');
        lottie.setDirection(-1); //逆再生に設定
        lottie.setSpeed(2);
        lottie.play(); //再生する
    });
// -------------------------    
    // logo
// -------------------------

    // lottie.loadAnimation({
    //     container: document.getElementById('lottie-logo'),
    //     renderer: "svg",
    //     loop: true,
    //     autoplay: true,
    //     path: "/resources/js/components/management/logo/yuzunosk.logo.json",
    //     rendererSettings: {
    //         className: 'anmLogo'
    //     }
    // });
// -------------------------
// news
// -------------------------
//     lottie.loadAnimation({
//         container: document.getElementById('lottie-news'),
//         renderer: "svg",
//         loop: false,
//         autoplay: false,
//         path: "/resources/js/components/management/logo/NEWS-icon-2.json",
//         rendererSettings: {
//             className: 'anmNews'
//         }
//     });
//     // }
    
//     news.addEventListener('mouseenter', function() {
//         //マウスオーバーしたとき
//         console.log('mouseenterを発火しました2');

//     lottie.setDirection(1); //通常再生に設定
//     lottie.setSpeed(2);
//     lottie.play(); //再生する
// });

// news.addEventListener("mouseleave", e => {
//     //マウスが離れたとき
//     console.log('mouseleaveを発火しました2');
//     lottie.setDirection(-1); //逆再生に設定
//     lottie.setSpeed(2);
//     lottie.play(); //再生する
// });

// console.log('最後まで読み込みました');