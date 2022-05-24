<template>
  <div class="col text-center p-4">
    <div class="card_album p-3">
      <div class="img_album">
        <img :src="album.poster" :alt="album.title" />
      </div>
      <h4 class="py-3">{{ album.title }}</h4>
      <div class="info_album">
        <div class="author">
          {{ album.author }}
        </div>
        <div class="year">
          {{ album.year }}
        </div>
      </div>
    </div>
  </div>
</template>

<script>


export default {
  name: "CardComponent",
  data(){
    return{
          selectedGenre: ""
    }
  },
  props: {
    album: Object,
  },
};
</script>

<style lang="scss" scoped>
.col {
  height: 28rem;
  .card_album {
    min-height: 100%;
    background-color: $ds-primary;
    img {
      aspect-ratio: 1/1;
      width: 100%;
    }
    h4 {
      color: $ds-white;
    }
    .info_album {
      color: $ds-light-dark;
    }
  }
}

@media screen and (max-width: 600px) {
  .col {
    height: unset;
  }
}
</style>