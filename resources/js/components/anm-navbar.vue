<template>
  <section id="js-move_filed">
    <nav class="l-nav-container">
      <!-- navbar -->
      <ul class="c-navbar__container">
        <li class="c-navbar__item">
          <a class="c-navbar__link" href>
            <span class="c-navbar__text">Menu</span>
          </a>
        </li>

        <div v-if="show">
          <li class="c-navbar__item">
            <a class="c-navbar__link" href>
              <span class="c-navbar__text">Top</span>
            </a>
          </li>

          <li class="c-navbar__item">
            <a class="c-navbar__link" href>
              <span class="c-navbar__text">Information</span>
            </a>
          </li>

          <li class="c-navbar__item">
            <a class="c-navbar__link" href>
              <span class="c-navbar__text">News</span>
            </a>
          </li>

          <li class="c-navbar__item">
            <a class="c-navbar__link" href>
              <span class="c-navbar__text">Chanpions</span>
            </a>
          </li>

          <li class="c-navbar__item">
            <a class="c-navbar__link" href>
              <span class="c-navbar__text">Contact</span>
            </a>
          </li>
        </div>
      </ul>
      <!-- navbar END -->
    </nav>
  </section>
</template>


<script>
export default {
  data() {
    return {
      show: false
    };
  }
};
</script>



