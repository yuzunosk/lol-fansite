// alert('読み込めました');
let foo = document.querySelector("#move");
let news = document.querySelector("#lottie-news");
let card = document.querySelector("#lottie-card");

console.log({ foo });
console.log({ news });
console.log({ card });

// function doneAnimation(foo) {
// console.log('doneAnimationを開始');

// -------------------------
// lottie
// -------------------------

lottie.loadAnimation({
    container: document.getElementById("lottie"),
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: "https://lol-fansite.com/top/logo/menuicon2.json",
    rendererSettings: {
        className: "anmIcon"
    }
});

foo.addEventListener("mouseenter", function() {
    //マウスオーバーしたとき
    console.log("mouseenterを発火しました");

    lottie.setDirection(1); //通常再生に設定
    lottie.setSpeed(2);
    lottie.play(); //再生する
});

foo.addEventListener("mouseleave", e => {
    //マウスが離れたとき
    console.log("mouseleaveを発火しました");
    lottie.setDirection(-1); //逆再生に設定
    lottie.setSpeed(2);
    lottie.play(); //再生する
});
// -------------------------
// logo
// -------------------------

lottie.loadAnimation({
    container: document.getElementById("lottie-logo"),
    renderer: "svg",
    loop: true,
    autoplay: true,
    path: "https://lol-fansite.com/top/logo/yuzunosk.logo.json",
    rendererSettings: {
        className: "anmLogo"
    }
});
// -------------------------
// news
// -------------------------
lottie.loadAnimation({
    container: document.getElementById("lottie-news"),
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: "https://lol-fansite.com/top/logo/NEWS-icon-2.json",
    rendererSettings: {
        className: "anmNews"
    }
});

news.addEventListener("mouseenter", function() {
    //マウスオーバーしたとき
    console.log("mouseenterを発火しました2");

    lottie.setDirection(1); //通常再生に設定
    lottie.setSpeed(2);
    lottie.play(); //再生する
});

news.addEventListener("mouseleave", e => {
    //マウスが離れたとき
    console.log("mouseleaveを発火しました2");
    lottie.setDirection(-1); //逆再生に設定
    lottie.setSpeed(2);
    lottie.play(); //再生する
});

// -------------------------
// card
// -------------------------
lottie.loadAnimation({
    container: document.getElementById("lottie-card"),
    renderer: "svg",
    loop: false,
    autoplay: false,
    path: "https://lol-fansite.com/top/logo/card-mv.json",
    rendererSettings: {
        className: "anmNews"
    }
});

card.addEventListener("mouseenter", function() {
    //マウスオーバーしたとき
    console.log("mouseenterを発火しました2");

    lottie.setDirection(1); //通常再生に設定
    lottie.setSpeed(2);
    lottie.play(); //再生する
});

card.addEventListener("mouseleave", e => {
    //マウスが離れたとき
    console.log("mouseleaveを発火しました2");
    lottie.setDirection(-1); //逆再生に設定
    lottie.setSpeed(2);
    lottie.play(); //再生する
});

console.log("最後まで読み込みました");
