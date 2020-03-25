
    // alert('読み込めました');
    let foo = document.querySelector('#move');
    console.log({ foo });

    // function doneAnimation(foo) {
    // console.log('doneAnimationを開始');

    lottie.loadAnimation({
            container: document.getElementById('lottie'),
            renderer: "svg",
            loop: false,
            autoplay: false,
            path: ".././logo/menuicon2.json",
            rendererSettings: {
                className: 'anmIcon'
            }
        });
        // }
        
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
    
    // logo
    
    lottie.loadAnimation({
        container: document.getElementById('lottie-logo'),
        renderer: "svg",
        loop: true,
        autoplay: true,
        path: ".././logo/yuzunosk.logo.json",
        rendererSettings: {
            className: 'anmLogo'
        }
    });