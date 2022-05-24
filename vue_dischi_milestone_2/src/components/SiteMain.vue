<template>
  <main>
    <div class="container pt-3">
      <div
        class="
          row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5
          align-items-center
        "
        v-if="!loading"
      >
        <CardComponent
          :album="album"
          v-for="(album, index) in filterAlbums"
          :key="index"
        />
      </div>
      <div
        v-else
        class="d-flex min-vh-100 align-items-center justify-content-center"
      >
        <div class="div">
          <h2>Loading....</h2>
          <h3 v-if="error !== null">{{ error }}</h3>
        </div>
      </div>
    </div>
  </main>
</template>

<script>
import state from "@/state.js";
import axios from "axios";
import CardComponent from "@/components/CardComponent.vue";
export default {
  name: "SiteMain",
  components: {
    CardComponent,
  },
  data() {
    return {
      API_URL: "http://localhost:8888/php/php-ajax-dischi/vue_dischi_milestone_2/src/db.php",
      albums: null,
      error: null,
      loading: true,
    };
  },
  methods: {
    callApi() {
      axios
        .get(this.API_URL)
        .then((response) => {
          this.albums = response.data;
          this.loading = false;
        })
        .catch((error) => {
          console.error();
          error;
          this.error = `Sorry There is a problem! ${error}`;
        });
    },
  },
  mounted() {
    this.callApi();
  },
  computed: {
    filterAlbums() {
      return this.albums.filter((album) => {
        let filteredAlbum = true;
        let filteredArtist = true;
        if (state.selectedGenre.toLowerCase() !== "all") {
          filteredAlbum = album.genre
            .toLowerCase()
            .includes(state.selectedGenre.toLowerCase());
        }
        if (state.selectedArtist.toLowerCase() !== "all") {
          filteredArtist = album.author
          .toLowerCase()
          .includes(state.selectedArtist.toLowerCase());
        }
        if (filteredAlbum && filteredArtist) {
          return album;
        }

        /*         if (true  ) {   
        } else{
           return this.albums
        } */
      });
    },
  },
};
</script>

<style lang="scss" scoped>
main {
  min-height: calc(100vh - 100px);
  background-color: $ds-dark;
  padding-top: 2rem;

  h2,
  h3 {
    color: $ds-white;
  }
}
</style>