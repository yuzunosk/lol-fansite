<template>
            <div class="chanpion_card">
                <div class="thmbnail">
                    <router-link :to="routerLink">
                        <img class="chanpion_img" :src="changeImg" alt="">
                    </router-link>
                        <p :class="cardRoll">{{ changeRoll }}</p>
                        <p :class="cardName">{{ changeName }}</p>
                </div>
            </div>
</template>

<script>
export default {
    props: ["id","data","skilldata"],
    data() {
        return {
        cardRoll: {
            card_message: true,
            topMs: true,
        },
        cardName: {
            card_message: true,
            bottomMs: true,
        },
        storage: "/storage/",
      }
    },
        computed: {
          routerLink() {
              return "/home/chanpion/" + this.id;
          },
          changeImg() {
            return this.storage + this.data.chanpion_img
          },
          changeRoll() {
             return this.data.roll
          },
          changeName() {
             return this.data.name
          },
      },

}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css?family=IBM+Plex+Serif&display=swap');
@import url('https://fonts.googleapis.com/css?family=Sawarabi+Mincho&display=swap');

.chanpion_card{
    padding: 20px;
    box-sizing: border-box;
    width: 100%;
    height: auto;
    flex-basis: 280px;
    overflow: hidden;
    text-align: center;
    position: relative;
}
.thmbnail{
    overflow: hidden;
}
.chanpion_img{
    max-width: 280px;
    height: 330px;
    position: relative;
    }
.chanpion_img:hover{
    transform: scale(1.4) translate(0, 35px) rotateZ(-8deg);
    transition: .3s;
}
.card_message{
    font-size: 20px;
    font-weight: bold;
    color: #f6f5f4;
    font-family: 'IBM Plex Serif', serif;
    text-shadow: 0px 0px 5px #000;
    position: relative;
}
.topMs{
    margin: 0;
    position: absolute;
    top: 25px;
    right: 30px;
    letter-spacing: 1px;
}
.bottomMs{
    font-family: 'Sawarabi Mincho', sans-serif;
    position: absolute;
    bottom: 10px;
    left: 35px;
}
</style>