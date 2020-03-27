// alert("みなさんこんにちは！");

let layer1 = document.getElementById('layer1');
// console.log(layer1);

scroll = window.pageYOffset;

window.addEventListener("scroll", () => {
        // alert('読み込みました');
    let offset = window.pageYOffset;
    console.log(offset);
    scroll = offset;

    layer1.style.width = (scroll + 100)*1.2 + '%';
});

  let layer2 = document.getElementById('layer2');
  // console.log(layer1);
  
  scroll = window.pageYOffset;
  
  window.addEventListener("scroll", () => {
          // alert('読み込みました');
      let offset = window.pageYOffset;
      console.log(offset);
      scroll = offset;
  
      layer2.style.left = (scroll /3 + 30) + '%';
    });

    let hero_text = document.getElementById('hero_text');
    // console.log(layer1);
    
    scroll = window.pageYOffset;
    
    window.addEventListener("scroll", () => {
            // alert('読み込みました');
        let offset = window.pageYOffset;
        console.log(offset);
        scroll = offset;
        // layer1.style.width = (scroll + 100/5) + '%';

        hero_text.style.bottom = scroll /20 + '%';
      });
